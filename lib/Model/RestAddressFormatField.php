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
 * RestAddressFormatField model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 */
class RestAddressFormatField
{
    /**
     * Possible values of this enum
     */
    public const GIVEN_NAME = 'GIVEN_NAME';

    public const FAMILY_NAME = 'FAMILY_NAME';

    public const ORGANIZATION_NAME = 'ORGANIZATION_NAME';

    public const STREET = 'STREET';

    public const DEPENDENT_LOCALITY = 'DEPENDENT_LOCALITY';

    public const CITY = 'CITY';

    public const POSTAL_STATE = 'POSTAL_STATE';

    public const POST_CODE = 'POST_CODE';

    public const SORTING_CODE = 'SORTING_CODE';

    public const COUNTRY = 'COUNTRY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GIVEN_NAME,
            self::FAMILY_NAME,
            self::ORGANIZATION_NAME,
            self::STREET,
            self::DEPENDENT_LOCALITY,
            self::CITY,
            self::POSTAL_STATE,
            self::POST_CODE,
            self::SORTING_CODE,
            self::COUNTRY
        ];
    }
}


