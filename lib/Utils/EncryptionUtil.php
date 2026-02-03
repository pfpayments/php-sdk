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

namespace PostFinanceCheckout\Sdk\Utils;

use PostFinanceCheckout\Sdk\PostFinanceCheckoutSdkException;
use PostFinanceCheckout\Sdk\SdkExceptionErrorCodes;

/**
 * EncryptionUtil class to verify content body with signature
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk\Utils
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 */
class EncryptionUtil
{
    /**
     * Verify content with signature
     *
     * @param string $contentToVerify Content to verify (required)
     * @param string $contentSignature Content signature (required)
     * @param string $encodedPublicKey Base64 encoded public key (required)
     * @param string $signatureAlgorithm Signature algorithm (required)
     * @throws PostFinanceCheckoutSdkException
     * @return bool
     */
    public static function isContentValid($contentToVerify, $contentSignature, $encodedPublicKey, $signatureAlgorithm): bool
    {
        try {

            if (empty($signatureAlgorithm)) {
                throw new PostFinanceCheckoutSdkException(
                    SdkExceptionErrorCodes::MISSING_WEBHOOK_ENCRYPTION_ALGORITHM,
                    "Webhook signature algorithm was not provided"
                );
            }

            switch ($signatureAlgorithm) {
                case "SHA256withECDSA":
                    $publicKey = self::getPublicKey($encodedPublicKey);
                    $openSSLAlgorithm = OPENSSL_ALGO_SHA256;
                    break;
                default:
                    throw new PostFinanceCheckoutSdkException(
                        SdkExceptionErrorCodes::UNSUPPORTED_WEBHOOK_ENCRYPTION_ALGORITHM,
                        "Unsupported webhook signature algorithm: '" . $signatureAlgorithm . "'. "
                        . "This may indicate that the REST API is using a new encryption algorithm for webhooks. "
                        . "Please check whether a newer version of the SDK is available."
                    );
            }

            $decodedSignature = base64_decode($contentSignature, true);
            if ($decodedSignature === false) {
                throw new PostFinanceCheckoutSdkException(
                    SdkExceptionErrorCodes::INVALID_WEBHOOK_ENCRYPTION_CONTENT_SIGNATURE,
                    "Invalid base64 signature format"
                );
            }

            $result = openssl_verify($contentToVerify, $decodedSignature, $publicKey, $openSSLAlgorithm);

            if ($result === -1) {
                throw new PostFinanceCheckoutSdkException(
                    SdkExceptionErrorCodes::INVALID_WEBHOOK_ENCRYPTION_CONTENT_SIGNATURE,
                    "OpenSSL internal error during signature verification. Invalid content signature format"
                );
            }

            return $result === 1;
        } catch (\ValueError|\TypeError $e) {
            throw new PostFinanceCheckoutSdkException(
                SdkExceptionErrorCodes::WEBHOOK_ENCRYPTION_SIGNATURE_VERIFICATION_FAILED,
                "An error occurred during verification: " . $e->getMessage()
            );
        }
    }

    private static function getPublicKey(string $encodedPublicKey)
    {
        $pem = "-----BEGIN PUBLIC KEY-----\n" . chunk_split($encodedPublicKey, 64, "\n") . "-----END PUBLIC KEY-----";

        // Create the public key resource
        $publicKey = openssl_pkey_get_public($pem);

        if (!$publicKey) {
            throw new PostFinanceCheckoutSdkException(
                SdkExceptionErrorCodes::INVALID_WEBHOOK_ENCRYPTION_PUBLIC_KEY,
                "Invalid public key. Failed to create public key from base64 string"
            );
        }

        return $publicKey;
    }
}