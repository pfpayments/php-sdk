<?php
/**
 * PostFinance PHP SDK
 *
 * This library allows to interact with the PostFinance payment service.
 *
 * Copyright owner: Wallee AG
 * Website: https://www.postfinance.ch/en/private.html
 * Developer email: ecosystem-team@wallee.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PostFinanceCheckout\Sdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Builds the Guzzle HTTP client used by the generated services, with a CA fallback bundle.
 *
 * PHP's cURL extension relies on the CA certificates configured on the host system to validate
 * TLS connections. On some hosts those certificates are missing or outdated, which causes an
 * otherwise valid connection to https://checkout.postfinance.ch/api/v2.0 to fail with a certificate verification error.
 * As a fallback, the client retries a failed request once using the CA bundle shipped with this
 * SDK ("ca-bundle.crt"), read directly from this package's own directory. It is never copied
 * anywhere else (e.g. a shared temp directory): any location writable by other local users or
 * processes cannot be trusted to hold a certificate authority bundle, since a forged file placed
 * there would let an attacker impersonate the API and defeat certificate validation entirely.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   PostFinance Ltd
 * @license  Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version  5.2.3
 */
final class CaBundleFallbackClientFactory
{
    private const CA_BUNDLE_FILENAME = 'ca-bundle.crt';

    private function __construct()
    {
    }

    /**
     * @param callable|null $handler Base Guzzle handler to use. Defaults to Guzzle's own default handler.
     * If not specified, this is only used for testing purposes.
     */
    public static function create(?callable $handler = null): Client
    {
        return new Client(['handler' => self::createHandlerStack($handler)]);
    }

    private static function createHandlerStack(?callable $handler): HandlerStack
    {
        $handlerStack = $handler !== null ? HandlerStack::create($handler) : HandlerStack::create();
        $handlerStack->push(self::caBundleFallbackMiddleware(), 'ca_bundle_fallback');

        return $handlerStack;
    }

    private static function caBundleFallbackMiddleware(): callable
    {
        return static function (callable $handler): callable {
            return static function (RequestInterface $request, array $options) use ($handler): PromiseInterface {
                return $handler($request, $options)->then(null, static function ($reason) use ($handler, $request, $options) {
                    if (!self::isCertificateVerificationFailure($reason) || !self::hasDefaultVerifyOption($options)) {
                        // Either not a certificate problem, or the caller explicitly configured
                        // certificate verification themselves; do not override their choice.
                        throw $reason;
                    }

                    // Retry once using the CA bundle shipped with this package
                    $options['verify'] = __DIR__ . DIRECTORY_SEPARATOR . self::CA_BUNDLE_FILENAME;

                    return $handler($request, $options);
                });
            };
        };
    }

    /**
     * Guzzle's Client always injects 'verify' => true into the request options before the
     * handler stack runs, even when the caller (or this factory) never set it explicitly. This
     * checks whether 'verify' is still at that neutral default, i.e. whether it is safe for this
     * factory to override it with the bundled CA bundle.
     */
    private static function hasDefaultVerifyOption(array $options): bool
    {
        return ($options['verify'] ?? true) === true;
    }

    private static function isCertificateVerificationFailure($reason): bool
    {
        // Note: ConnectException does not extend RequestException; both are siblings under TransferException.
        if (!$reason instanceof RequestException && !$reason instanceof ConnectException) {
            return false;
        }

        $errno = $reason->getHandlerContext()['errno'] ?? null;
        if (in_array($errno, [CURLE_SSL_CACERT, CURLE_SSL_CACERT_BADFILE, CURLE_SSL_CERTPROBLEM, CURLE_SSL_CONNECT_ERROR], true)) {
            return true;
        }

        $message = strtolower($reason->getMessage());

        return str_contains($message, 'certificate')
            && (
                str_contains($message, 'ssl')
                || str_contains($message, 'verify')
                || str_contains($message, 'self-signed')
                || str_contains($message, 'unable to get local issuer')
            );
    }
}
