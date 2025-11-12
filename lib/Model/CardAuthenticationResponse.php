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

namespace PostFinanceCheckout\Sdk\Model;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * CardAuthenticationResponse model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 */
class CardAuthenticationResponse
{
    /**
     * Possible values of this enum
     */
    public const FULLY_AUTHENTICATED = 'FULLY_AUTHENTICATED';

    public const AUTHENTICATION_NOT_REQUIRED = 'AUTHENTICATION_NOT_REQUIRED';

    public const NOT_ENROLLED = 'NOT_ENROLLED';

    public const ENROLLMENT_ERROR = 'ENROLLMENT_ERROR';

    public const AUTHENTICATION_ERROR = 'AUTHENTICATION_ERROR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FULLY_AUTHENTICATED,
            self::AUTHENTICATION_NOT_REQUIRED,
            self::NOT_ENROLLED,
            self::ENROLLMENT_ERROR,
            self::AUTHENTICATION_ERROR
        ];
    }
}


