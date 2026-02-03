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

/**
 * SDK Local Error Codes
 */
final class SdkExceptionErrorCodes
{
    // Unknown webhook signature public key
    public const UNKNOWN_WEBHOOK_ENCRYPTION_PUBLIC_KEY = 'unknown_public_key';
    // General webhook encryption error
    public const WEBHOOK_ENCRYPTION_GENERAL_ERROR = 'encryption_error';
    // Invalid webhook signature public key
    public const INVALID_WEBHOOK_ENCRYPTION_PUBLIC_KEY = 'invalid_public_key';
    // Invalid webhook signature header
    public const INVALID_WEBHOOK_ENCRYPTION_HEADER_FORMAT = 'invalid_webhook_header';
    // Unsupported webhook signature algorithm
    public const UNSUPPORTED_WEBHOOK_ENCRYPTION_ALGORITHM = 'unsupported_encryption_algorithm';
    // Unknown webhook encryption provider
    public const UNKNOWN_WEBHOOK_ENCRYPTION_PROVIDER = 'unknown_encryption_provider';
    // Encryption verifier initialization error
    public const WEBHOOK_ENCRYPTION_VERIFIER_INIT_ERROR = 'verifier_init_failure';
    // Error during content update in encryption verifier
    public const WEBHOOK_ENCRYPTION_VERIFIER_CONTENT_UPDATE_ERROR = 'content_update_failure';
    // Encryption signature verification failed
    public const WEBHOOK_ENCRYPTION_SIGNATURE_VERIFICATION_FAILED = 'signature_verification_failure';
    // Invalid webhook content signature
    public const INVALID_WEBHOOK_ENCRYPTION_CONTENT_SIGNATURE = 'invalid_content_signature';
    // Missing webhook signature algorithm value
    public const MISSING_WEBHOOK_ENCRYPTION_ALGORITHM = 'missing_encryption_algorithm';
    // Languages JSON file read / parse error
    public const LANGUAGES_JSON_FILE_ERROR = 'languages_json_file_error';

    /**
     * Checks if the given exception matches the specific error code.
     *
     * @param PostFinanceCheckoutSdkException $exception The exception to check
     * @param string $errorCode The error code to compare against
     * @return bool
     */
    public static function is(PostFinanceCheckoutSdkException $exception, string $errorCode): bool
    {
        return $exception->getErrorCode() === $errorCode;
    }
}