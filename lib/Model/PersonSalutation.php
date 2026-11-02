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
 * PersonSalutation model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      PostFinance Ltd
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.3
 */
class PersonSalutation
{
    /**
     * Possible values of this enum
     */
    public const MR = 'MR';

    public const MS = 'MS';

    public const MX = 'MX';

    public const DR = 'DR';

    public const PROF = 'PROF';

    public const PREFER_NOT = 'PREFER_NOT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MR,
            self::MS,
            self::MX,
            self::DR,
            self::PROF,
            self::PREFER_NOT
        ];
    }
}


