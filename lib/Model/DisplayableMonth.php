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
 * DisplayableMonth model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 */
class DisplayableMonth
{
    /**
     * Possible values of this enum
     */
    public const JANUARY = 'JANUARY';

    public const FEBRUARY = 'FEBRUARY';

    public const MARCH = 'MARCH';

    public const APRIL = 'APRIL';

    public const MAY = 'MAY';

    public const JUNE = 'JUNE';

    public const JULY = 'JULY';

    public const AUGUST = 'AUGUST';

    public const SEPTEMBER = 'SEPTEMBER';

    public const OCTOBER = 'OCTOBER';

    public const NOVEMBER = 'NOVEMBER';

    public const DECEMBER = 'DECEMBER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JANUARY,
            self::FEBRUARY,
            self::MARCH,
            self::APRIL,
            self::MAY,
            self::JUNE,
            self::JULY,
            self::AUGUST,
            self::SEPTEMBER,
            self::OCTOBER,
            self::NOVEMBER,
            self::DECEMBER
        ];
    }
}


