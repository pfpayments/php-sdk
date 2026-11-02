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
 * DeliveryDaysRange model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      PostFinance Ltd
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.3
 */
class DeliveryDaysRange
{
    /**
     * Possible values of this enum
     */
    public const ZERO_DAYS = 'ZERO_DAYS';

    public const ONE_TO_THREE_DAYS = 'ONE_TO_THREE_DAYS';

    public const THREE_TO_FIVE_DAYS = 'THREE_TO_FIVE_DAYS';

    public const FIVE_TO_TEN_DAYS = 'FIVE_TO_TEN_DAYS';

    public const TEN_TO_FIFTEEN_DAYS = 'TEN_TO_FIFTEEN_DAYS';

    public const FIFTEEN_TO_TWENTY_DAYS = 'FIFTEEN_TO_TWENTY_DAYS';

    public const TWENTY_TO_THIRTY_DAYS = 'TWENTY_TO_THIRTY_DAYS';

    public const THIRTY_TO_FORTY_DAYS = 'THIRTY_TO_FORTY_DAYS';

    public const FORTY_TO_FIFTY_DAYS = 'FORTY_TO_FIFTY_DAYS';

    public const FIFTY_TO_SIXTY_DAYS = 'FIFTY_TO_SIXTY_DAYS';

    public const SIXTY_TO_NINETY_DAYS = 'SIXTY_TO_NINETY_DAYS';

    public const OVER_NINETY_DAYS = 'OVER_NINETY_DAYS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ZERO_DAYS,
            self::ONE_TO_THREE_DAYS,
            self::THREE_TO_FIVE_DAYS,
            self::FIVE_TO_TEN_DAYS,
            self::TEN_TO_FIFTEEN_DAYS,
            self::FIFTEEN_TO_TWENTY_DAYS,
            self::TWENTY_TO_THIRTY_DAYS,
            self::THIRTY_TO_FORTY_DAYS,
            self::FORTY_TO_FIFTY_DAYS,
            self::FIFTY_TO_SIXTY_DAYS,
            self::SIXTY_TO_NINETY_DAYS,
            self::OVER_NINETY_DAYS
        ];
    }
}


