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
 * RefundPercentageRange model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      PostFinance Ltd
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.3
 */
class RefundPercentageRange
{
    /**
     * Possible values of this enum
     */
    public const ONE_TO_FIVE = 'ONE_TO_FIVE';

    public const FIVE_TO_TEN = 'FIVE_TO_TEN';

    public const TEN_TO_FIFTEEN = 'TEN_TO_FIFTEEN';

    public const FIFTEEN_TO_TWENTY = 'FIFTEEN_TO_TWENTY';

    public const TWENTY_TO_THIRTY = 'TWENTY_TO_THIRTY';

    public const THIRTY_TO_FORTY = 'THIRTY_TO_FORTY';

    public const FORTY_TO_FIFTY = 'FORTY_TO_FIFTY';

    public const OVER_FIFTY = 'OVER_FIFTY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONE_TO_FIVE,
            self::FIVE_TO_TEN,
            self::TEN_TO_FIFTEEN,
            self::FIFTEEN_TO_TWENTY,
            self::TWENTY_TO_THIRTY,
            self::THIRTY_TO_FORTY,
            self::FORTY_TO_FIFTY,
            self::OVER_FIFTY
        ];
    }
}


