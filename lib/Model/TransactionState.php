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
 * TransactionState model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 */
class TransactionState
{
    /**
     * Possible values of this enum
     */
    public const CREATE = 'CREATE';

    public const PENDING = 'PENDING';

    public const CONFIRMED = 'CONFIRMED';

    public const PROCESSING = 'PROCESSING';

    public const FAILED = 'FAILED';

    public const AUTHORIZED = 'AUTHORIZED';

    public const VOIDED = 'VOIDED';

    public const COMPLETED = 'COMPLETED';

    public const FULFILL = 'FULFILL';

    public const DECLINE = 'DECLINE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATE,
            self::PENDING,
            self::CONFIRMED,
            self::PROCESSING,
            self::FAILED,
            self::AUTHORIZED,
            self::VOIDED,
            self::COMPLETED,
            self::FULFILL,
            self::DECLINE
        ];
    }
}


