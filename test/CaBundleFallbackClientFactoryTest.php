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

namespace PostFinanceCheckout\Sdk\Test;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use PostFinanceCheckout\Sdk\CaBundleFallbackClientFactory;

/**
 * Tests the CA fallback bundle behaviour of {@see CaBundleFallbackClientFactory}.
 */
class CaBundleFallbackClientFactoryTest extends TestCase
{
    public function testRequestSucceedsWithoutFallbackWhenSystemCaIsTrusted(): void
    {
        $mock = new MockHandler([new Response(200, [], 'ok')]);
        $client = CaBundleFallbackClientFactory::create($mock);

        $response = $client->send(new Request('GET', 'https://example.com'));

        $this->assertSame(200, $response->getStatusCode());
        $this->assertTrue($mock->getLastOptions()['verify'] ?? null, "No fallback should have been triggered");
    }

    public function testRequestRetriesDirectlyWithTheBundledCaFileAfterCertificateVerificationFailure(): void
    {
        $request = new Request('GET', 'https://example.com');
        $mock = new MockHandler([
            $this->sslCertificateException($request),
            new Response(200, [], 'ok'),
        ]);
        $client = CaBundleFallbackClientFactory::create($mock);

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
        // The retry must point straight at the CA bundle shipped inside this package's own
        // directory - never a path copied into a shared/writable location
        $this->assertSame($this->bundledCaBundlePath(), $mock->getLastOptions()['verify'] ?? null);
    }

    public function testRequestFailsWhenTheBundledCaDoesNotHelpEither(): void
    {
        $request = new Request('GET', 'https://example.com');
        $mock = new MockHandler([
            $this->sslCertificateException($request),
            $this->sslCertificateException($request),
        ]);
        $client = CaBundleFallbackClientFactory::create($mock);

        $this->expectException(ConnectException::class);

        $client->send($request);
    }

    public function testNonCertificateFailuresAreNotRetried(): void
    {
        $request = new Request('GET', 'https://example.com');
        $mock = new MockHandler([
            new ConnectException('Could not resolve host', $request, null, ['errno' => CURLE_COULDNT_RESOLVE_HOST]),
        ]);
        $client = CaBundleFallbackClientFactory::create($mock);

        $this->expectException(ConnectException::class);
        $this->expectExceptionMessage('Could not resolve host');

        $client->send($request);
    }

    public function testDoesNotOverrideACallerProvidedVerifyOptionOnFailure(): void
    {
        $request = new Request('GET', 'https://example.com');
        $mock = new MockHandler([
            $this->sslCertificateException($request),
        ]);
        $client = CaBundleFallbackClientFactory::create($mock);

        $this->expectException(ConnectException::class);

        // The caller explicitly configured its own certificate verification; this factory must
        // not silently swap it out for the bundled CA on failure.
        $client->send($request, ['verify' => '/some/custom/ca-bundle.pem']);
    }

    private function bundledCaBundlePath(): string
    {
        $reflection = new \ReflectionClass(CaBundleFallbackClientFactory::class);

        return dirname($reflection->getFileName()) . DIRECTORY_SEPARATOR . 'ca-bundle.crt';
    }

    private function sslCertificateException(Request $request): ConnectException
    {
        return new ConnectException(
            'cURL error 60: SSL certificate problem: unable to get local issuer certificate',
            $request,
            null,
            ['errno' => CURLE_SSL_CACERT]
        );
    }
}
