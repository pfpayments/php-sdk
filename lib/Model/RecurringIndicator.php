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


namespace PostFinanceCheckout\Sdk\Model;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * RecurringIndicator model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RecurringIndicator
{
    /**
     * Possible values of this enum
     */
    const REGULAR_TRANSACTION = 'REGULAR_TRANSACTION';
    const INITIAL_RECURRING_TRANSACTION = 'INITIAL_RECURRING_TRANSACTION';
    const MERCHANT_INITIATED_RECURRING_TRANSACTION = 'MERCHANT_INITIATED_RECURRING_TRANSACTION';
    const CUSTOMER_INITIATED_RECURRING_TRANSACTION = 'CUSTOMER_INITIATED_RECURRING_TRANSACTION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REGULAR_TRANSACTION,
            self::INITIAL_RECURRING_TRANSACTION,
            self::MERCHANT_INITIATED_RECURRING_TRANSACTION,
            self::CUSTOMER_INITIATED_RECURRING_TRANSACTION,
        ];
    }
}


