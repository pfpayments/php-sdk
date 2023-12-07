<?php
/**
 * PostFinance Checkout SDK
 *
 * This library allows to interact with the PostFinance Checkout payment service.
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

use \Exception;

/**
 * EncryptionUtil Class Doc Comment
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
	 * @throws RuntimeException
	 * @return bool
	 */
    public static function isContentValid($contentToVerify, $contentSignature, $encodedPublicKey, $signatureAlgorithm) {
        switch ($signatureAlgorithm) {
            case "SHA256withECDSA":
                $publicKey = self::getPublicKey($encodedPublicKey);
                $openSSLAlgorithm = OPENSSL_ALGO_SHA256;
                break;
            default:
                throw new Exception("Unknown webhook signature encryption algorithm: " . $signatureAlgorithm);
        }

        $verification = openssl_verify($contentToVerify, base64_decode($contentSignature), $publicKey, $openSSLAlgorithm);

        if (PHP_VERSION_ID < 80000) {
            openssl_free_key($publicKey);
        }

        return $verification == 1;
    }

    private static function getPublicKey($encodedPublicKey) {
        $pem = "-----BEGIN PUBLIC KEY-----\n" . chunk_split($encodedPublicKey, 64, "\n") . "-----END PUBLIC KEY-----";

        // Create the public key resource
        $publicKey = openssl_pkey_get_public($pem);

        if (!$publicKey) {
            throw new Exception("Failed to create public key from base64 string");
        }

        return $publicKey;
    }

}
