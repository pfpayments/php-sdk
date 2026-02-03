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

namespace PostFinanceCheckout\Sdk\Model;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * RefundType model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 */
class RefundType
{
    /**
     * Possible values of this enum
     */
    public const MERCHANT_INITIATED_ONLINE = 'MERCHANT_INITIATED_ONLINE';

    public const MERCHANT_INITIATED_OFFLINE = 'MERCHANT_INITIATED_OFFLINE';

    public const CUSTOMER_INITIATED_AUTOMATIC = 'CUSTOMER_INITIATED_AUTOMATIC';

    public const CUSTOMER_INITIATED_MANUAL = 'CUSTOMER_INITIATED_MANUAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MERCHANT_INITIATED_ONLINE,
            self::MERCHANT_INITIATED_OFFLINE,
            self::CUSTOMER_INITIATED_AUTOMATIC,
            self::CUSTOMER_INITIATED_MANUAL
        ];
    }
}


