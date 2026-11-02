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
 * LegalForm model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      PostFinance Ltd
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.3
 */
class LegalForm
{
    /**
     * Possible values of this enum
     */
    public const SOLE_PROPRIETORSHIP = 'SOLE_PROPRIETORSHIP';

    public const COOPERATIVE = 'COOPERATIVE';

    public const PARTNERSHIP_LIMITED_BY_SHARES = 'PARTNERSHIP_LIMITED_BY_SHARES';

    public const COMPANY_LIMITED_BY_SHARES = 'COMPANY_LIMITED_BY_SHARES';

    public const LIMITED_LIABILITY_COMPANY = 'LIMITED_LIABILITY_COMPANY';

    public const ASSOCIATION = 'ASSOCIATION';

    public const FOUNDATION = 'FOUNDATION';

    public const PUBLIC_INSTITUTION = 'PUBLIC_INSTITUTION';

    public const GENERAL_PARTNERSHIP = 'GENERAL_PARTNERSHIP';

    public const NON_DEFINED_LEGAL_FORM = 'NON_DEFINED_LEGAL_FORM';

    public const PUBLIC_AG_CORPORATION = 'PUBLIC_AG_CORPORATION';

    public const PUBLIC_LIMITED_LIABILITY_COMPANY = 'PUBLIC_LIMITED_LIABILITY_COMPANY';

    public const BODY_CORPORATE = 'BODY_CORPORATE';

    public const PUBLIC_COOPERATIVE = 'PUBLIC_COOPERATIVE';

    public const PUBLIC_ASSOCIATION = 'PUBLIC_ASSOCIATION';

    public const SPECIAL_LEGAL_FORM = 'SPECIAL_LEGAL_FORM';

    public const LIMITED_PARTNERSHIP_COLLECTIVE_INVESTMENT = 'LIMITED_PARTNERSHIP_COLLECTIVE_INVESTMENT';

    public const SIMPLE_PARTNERSHIP = 'SIMPLE_PARTNERSHIP';

    public const INTERNATIONAL_ORGANIZATION = 'INTERNATIONAL_ORGANIZATION';

    public const TRUST = 'TRUST';

    public const FUND = 'FUND';

    public const EUROPEAN_COMPANY = 'EUROPEAN_COMPANY';

    public const LIMITED_PARTNERSHIP = 'LIMITED_PARTNERSHIP';

    public const SIMPLIFIED_LIMITED_LIABILITY_COMPANY = 'SIMPLIFIED_LIMITED_LIABILITY_COMPANY';

    public const CIVIL_COMPANY = 'CIVIL_COMPANY';

    public const AGRICULTURAL_ASSOCIATION = 'AGRICULTURAL_ASSOCIATION';

    public const ECONOMIC_INTEREST_GROUP = 'ECONOMIC_INTEREST_GROUP';

    public const EUROPEAN_COOPERATIVE_SOCIETY = 'EUROPEAN_COOPERATIVE_SOCIETY';

    public const EUROPEAN_ECONOMIC_INTEREST_GROUP = 'EUROPEAN_ECONOMIC_INTEREST_GROUP';

    public const FRANCHISING = 'FRANCHISING';

    public const SIMPLIFIED_SHAREHOLDER_COMPANY = 'SIMPLIFIED_SHAREHOLDER_COMPANY';

    public const SINGLE_MEMBER_LIMITED_LIABILITY_COMPANY = 'SINGLE_MEMBER_LIMITED_LIABILITY_COMPANY';

    public const SOCIETAL_IMPACT_COMPANY = 'SOCIETAL_IMPACT_COMPANY';

    public const SPECIAL_LIMITED_PARTNERSHIP = 'SPECIAL_LIMITED_PARTNERSHIP';

    public const TEMPORARY_PARTNERSHIP = 'TEMPORARY_PARTNERSHIP';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOLE_PROPRIETORSHIP,
            self::COOPERATIVE,
            self::PARTNERSHIP_LIMITED_BY_SHARES,
            self::COMPANY_LIMITED_BY_SHARES,
            self::LIMITED_LIABILITY_COMPANY,
            self::ASSOCIATION,
            self::FOUNDATION,
            self::PUBLIC_INSTITUTION,
            self::GENERAL_PARTNERSHIP,
            self::NON_DEFINED_LEGAL_FORM,
            self::PUBLIC_AG_CORPORATION,
            self::PUBLIC_LIMITED_LIABILITY_COMPANY,
            self::BODY_CORPORATE,
            self::PUBLIC_COOPERATIVE,
            self::PUBLIC_ASSOCIATION,
            self::SPECIAL_LEGAL_FORM,
            self::LIMITED_PARTNERSHIP_COLLECTIVE_INVESTMENT,
            self::SIMPLE_PARTNERSHIP,
            self::INTERNATIONAL_ORGANIZATION,
            self::TRUST,
            self::FUND,
            self::EUROPEAN_COMPANY,
            self::LIMITED_PARTNERSHIP,
            self::SIMPLIFIED_LIMITED_LIABILITY_COMPANY,
            self::CIVIL_COMPANY,
            self::AGRICULTURAL_ASSOCIATION,
            self::ECONOMIC_INTEREST_GROUP,
            self::EUROPEAN_COOPERATIVE_SOCIETY,
            self::EUROPEAN_ECONOMIC_INTEREST_GROUP,
            self::FRANCHISING,
            self::SIMPLIFIED_SHAREHOLDER_COMPANY,
            self::SINGLE_MEMBER_LIMITED_LIABILITY_COMPANY,
            self::SOCIETAL_IMPACT_COMPANY,
            self::SPECIAL_LIMITED_PARTNERSHIP,
            self::TEMPORARY_PARTNERSHIP
        ];
    }
}


