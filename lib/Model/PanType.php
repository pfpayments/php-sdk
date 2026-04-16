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
 * PanType model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 */
class PanType
{
    /**
     * Possible values of this enum
     */
    public const PLAIN = 'PLAIN';

    public const PLAIN_GOOGLE_PAY = 'PLAIN_GOOGLE_PAY';

    public const SCHEME_TOKEN = 'SCHEME_TOKEN';

    public const SCHEME_TOKEN_CLICK_TO_PAY = 'SCHEME_TOKEN_CLICK_TO_PAY';

    public const DEVICE_TOKEN_APPLE_PAY = 'DEVICE_TOKEN_APPLE_PAY';

    public const DEVICE_TOKEN_GOOGLE_PAY = 'DEVICE_TOKEN_GOOGLE_PAY';

    public const DEVICE_TOKEN_SAMSUNG_PAY = 'DEVICE_TOKEN_SAMSUNG_PAY';

    public const DEVICE_TOKEN_ANDROID_PAY = 'DEVICE_TOKEN_ANDROID_PAY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLAIN,
            self::PLAIN_GOOGLE_PAY,
            self::SCHEME_TOKEN,
            self::SCHEME_TOKEN_CLICK_TO_PAY,
            self::DEVICE_TOKEN_APPLE_PAY,
            self::DEVICE_TOKEN_GOOGLE_PAY,
            self::DEVICE_TOKEN_SAMSUNG_PAY,
            self::DEVICE_TOKEN_ANDROID_PAY
        ];
    }
}


