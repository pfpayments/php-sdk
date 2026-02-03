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

use RuntimeException;

/**
 * Exception thrown when an internal SDK error occurs
 */
class PostFinanceCheckoutSdkException extends RuntimeException
{
    /**
     * @var string
     */
    private string $errorCode;

    /**
     * Constructor.
     *
     * @param string $code SDK error code
     * @param string $message Exception message details
     */
    public function __construct(string $code, string $message)
    {
        // Store the string code separately
        $this->errorCode = $code;

        $formattedMessage = sprintf(
            "Error code: %s. %s",
            $code,
            $message
        );

        parent::__construct($formattedMessage);
    }

    /**
     * Get the SDK error code string
     *
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
}