<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
 *  SDK: 2.0.2
 * 
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
 * PaymentTerminalState model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentTerminalState
{
    /**
     * Possible values of this enum
     */
    const PREPARING = 'PREPARING';
    const ACTIVE = 'ACTIVE';
    const INACTIVE = 'INACTIVE';
    const DECOMMISSIONING = 'DECOMMISSIONING';
    const DECOMMISSIONED = 'DECOMMISSIONED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PREPARING,
            self::ACTIVE,
            self::INACTIVE,
            self::DECOMMISSIONING,
            self::DECOMMISSIONED,
        ];
    }
}


