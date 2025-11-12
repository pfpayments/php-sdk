<?php
/**
 * PostFinance Php SDK
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

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use PostFinanceCheckout\Sdk\Configuration;
use PostFinanceCheckout\Sdk\Model\AuthenticatedCardRequest;
use PostFinanceCheckout\Sdk\Model\AuthenticatedCardDataCreate;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 */
class Constants
{

    /**
     * @var Configuration|null
     */
    public static ?Configuration $configuration = null;

    /**
     * @var int
     */
    public static int $spaceId = 72979;

    /**
     * @var int
     */
    public static int $userId = 123441;

    /**
     * @var string
     */
    public static string $authenticationKey = 'oWVGn42ks+yIbuHt8w09kyQRUEgIuYxqd/F59LO/lF0=';

    /**
     * @var int
     */
    public static int $testCustomerId = 1234;

    /**
     * @var int
     */
    public static int $testCardPaymentMethodConfigurationId = 340868;

    /**
     * The new Configuration method creates (Non-singleton, instance-per-use model) independent
     * instances, unique and created on demand.
     * Allowing for configuration flexibility and avoiding shared state across the application.
     *
     * @return Configuration
     */
    public static function getConfigurationInstance(): Configuration
    {
        if (self::$configuration === null) {
            // Create a Configuration instance independent and does not share state with others.
            self::$configuration = Configuration::getDefaultConfiguration(
                userId: self::$userId,
                authenticationKey: self::$authenticationKey);
        }
        return self::$configuration;
    }

    public static function getMockCardData(): AuthenticatedCardRequest
        {
            return (new AuthenticatedCardRequest())
                ->setCardData(
                    (new AuthenticatedCardDataCreate())
                        ->setPrimaryAccountNumber("4111111111111111")
                        ->setExpiryDate("2026-12")
                )
                ->setPaymentMethodConfiguration(self::$testCardPaymentMethodConfigurationId);
        }

    /**
     * Prevent instantiation.
     */
    private function __construct()
    {
        throw new \LogicException("Utility class should not be instantiated");
    }
}