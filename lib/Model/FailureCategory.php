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
 * FailureCategory model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class FailureCategory
{
    /**
     * Possible values of this enum
     */
    const TEMPORARY_ISSUE = 'TEMPORARY_ISSUE';
    const INTERNAL = 'INTERNAL';
    const END_USER = 'END_USER';
    const CONFIGURATION = 'CONFIGURATION';
    const DEVELOPER = 'DEVELOPER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEMPORARY_ISSUE,
            self::INTERNAL,
            self::END_USER,
            self::CONFIGURATION,
            self::DEVELOPER,
        ];
    }
}


