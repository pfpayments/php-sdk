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

use \ArrayAccess;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * WalleejoinAdminPartnerConfigurationRequestDto model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 * @implements \ArrayAccess<string, mixed>
 */
class WalleejoinAdminPartnerConfigurationRequestDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalleejoinAdminPartnerConfigurationRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowed_to_sell_scope_products' => 'bool',
        'pricing_profile_sell_rate_ids' => 'int[]',
        'revenue_share' => 'float',
        'one_off_referral' => 'int',
        'partner_account_id' => 'int',
        'subscription_product_ids' => 'int[]',
        'pricing_profile_buy_rate_id' => 'int',
        'partnership_types' => '\PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipType[]',
        'pricing_type' => '\PostFinanceCheckout\Sdk\Model\WalleejoinAdminPricingType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowed_to_sell_scope_products' => null,
        'pricing_profile_sell_rate_ids' => 'int64',
        'revenue_share' => null,
        'one_off_referral' => 'int32',
        'partner_account_id' => 'int64',
        'subscription_product_ids' => 'int64',
        'pricing_profile_buy_rate_id' => 'int64',
        'partnership_types' => null,
        'pricing_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allowed_to_sell_scope_products' => false,
        'pricing_profile_sell_rate_ids' => false,
        'revenue_share' => false,
        'one_off_referral' => false,
        'partner_account_id' => false,
        'subscription_product_ids' => false,
        'pricing_profile_buy_rate_id' => false,
        'partnership_types' => false,
        'pricing_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allowed_to_sell_scope_products' => 'allowedToSellScopeProducts',
        'pricing_profile_sell_rate_ids' => 'pricingProfileSellRateIds',
        'revenue_share' => 'revenueShare',
        'one_off_referral' => 'oneOffReferral',
        'partner_account_id' => 'partnerAccountId',
        'subscription_product_ids' => 'subscriptionProductIds',
        'pricing_profile_buy_rate_id' => 'pricingProfileBuyRateId',
        'partnership_types' => 'partnershipTypes',
        'pricing_type' => 'pricingType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_to_sell_scope_products' => 'setAllowedToSellScopeProducts',
        'pricing_profile_sell_rate_ids' => 'setPricingProfileSellRateIds',
        'revenue_share' => 'setRevenueShare',
        'one_off_referral' => 'setOneOffReferral',
        'partner_account_id' => 'setPartnerAccountId',
        'subscription_product_ids' => 'setSubscriptionProductIds',
        'pricing_profile_buy_rate_id' => 'setPricingProfileBuyRateId',
        'partnership_types' => 'setPartnershipTypes',
        'pricing_type' => 'setPricingType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_to_sell_scope_products' => 'getAllowedToSellScopeProducts',
        'pricing_profile_sell_rate_ids' => 'getPricingProfileSellRateIds',
        'revenue_share' => 'getRevenueShare',
        'one_off_referral' => 'getOneOffReferral',
        'partner_account_id' => 'getPartnerAccountId',
        'subscription_product_ids' => 'getSubscriptionProductIds',
        'pricing_profile_buy_rate_id' => 'getPricingProfileBuyRateId',
        'partnership_types' => 'getPartnershipTypes',
        'pricing_type' => 'getPricingType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('allowed_to_sell_scope_products', $data ?? [], null);
        $this->setIfExists('pricing_profile_sell_rate_ids', $data ?? [], null);
        $this->setIfExists('revenue_share', $data ?? [], null);
        $this->setIfExists('one_off_referral', $data ?? [], null);
        $this->setIfExists('partner_account_id', $data ?? [], null);
        $this->setIfExists('subscription_product_ids', $data ?? [], null);
        $this->setIfExists('pricing_profile_buy_rate_id', $data ?? [], null);
        $this->setIfExists('partnership_types', $data ?? [], null);
        $this->setIfExists('pricing_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets allowed_to_sell_scope_products
     *
     * @return bool|null
     */
    public function getAllowedToSellScopeProducts()
    {
        return $this->container['allowed_to_sell_scope_products'];
    }

    /**
     * Sets allowed_to_sell_scope_products
     *
     * @param bool|null $allowed_to_sell_scope_products allowed_to_sell_scope_products
     *
     * @return self
     */
    public function setAllowedToSellScopeProducts($allowed_to_sell_scope_products)
    {
        if (is_null($allowed_to_sell_scope_products)) {
            throw new \InvalidArgumentException('non-nullable allowed_to_sell_scope_products cannot be null');
        }
        $this->container['allowed_to_sell_scope_products'] = $allowed_to_sell_scope_products;

        return $this;
    }

    /**
     * Gets pricing_profile_sell_rate_ids
     *
     * @return int[]|null
     */
    public function getPricingProfileSellRateIds()
    {
        return $this->container['pricing_profile_sell_rate_ids'];
    }

    /**
     * Sets pricing_profile_sell_rate_ids
     *
     * @param int[]|null $pricing_profile_sell_rate_ids pricing_profile_sell_rate_ids
     *
     * @return self
     */
    public function setPricingProfileSellRateIds($pricing_profile_sell_rate_ids)
    {
        if (is_null($pricing_profile_sell_rate_ids)) {
            throw new \InvalidArgumentException('non-nullable pricing_profile_sell_rate_ids cannot be null');
        }


        $this->container['pricing_profile_sell_rate_ids'] = $pricing_profile_sell_rate_ids;

        return $this;
    }

    /**
     * Gets revenue_share
     *
     * @return float|null
     */
    public function getRevenueShare()
    {
        return $this->container['revenue_share'];
    }

    /**
     * Sets revenue_share
     *
     * @param float|null $revenue_share revenue_share
     *
     * @return self
     */
    public function setRevenueShare($revenue_share)
    {
        if (is_null($revenue_share)) {
            throw new \InvalidArgumentException('non-nullable revenue_share cannot be null');
        }
        $this->container['revenue_share'] = $revenue_share;

        return $this;
    }

    /**
     * Gets one_off_referral
     *
     * @return int|null
     */
    public function getOneOffReferral()
    {
        return $this->container['one_off_referral'];
    }

    /**
     * Sets one_off_referral
     *
     * @param int|null $one_off_referral one_off_referral
     *
     * @return self
     */
    public function setOneOffReferral($one_off_referral)
    {
        if (is_null($one_off_referral)) {
            throw new \InvalidArgumentException('non-nullable one_off_referral cannot be null');
        }
        $this->container['one_off_referral'] = $one_off_referral;

        return $this;
    }

    /**
     * Gets partner_account_id
     *
     * @return int|null
     */
    public function getPartnerAccountId()
    {
        return $this->container['partner_account_id'];
    }

    /**
     * Sets partner_account_id
     *
     * @param int|null $partner_account_id partner_account_id
     *
     * @return self
     */
    public function setPartnerAccountId($partner_account_id)
    {
        if (is_null($partner_account_id)) {
            throw new \InvalidArgumentException('non-nullable partner_account_id cannot be null');
        }
        $this->container['partner_account_id'] = $partner_account_id;

        return $this;
    }

    /**
     * Gets subscription_product_ids
     *
     * @return int[]|null
     */
    public function getSubscriptionProductIds()
    {
        return $this->container['subscription_product_ids'];
    }

    /**
     * Sets subscription_product_ids
     *
     * @param int[]|null $subscription_product_ids subscription_product_ids
     *
     * @return self
     */
    public function setSubscriptionProductIds($subscription_product_ids)
    {
        if (is_null($subscription_product_ids)) {
            throw new \InvalidArgumentException('non-nullable subscription_product_ids cannot be null');
        }


        $this->container['subscription_product_ids'] = $subscription_product_ids;

        return $this;
    }

    /**
     * Gets pricing_profile_buy_rate_id
     *
     * @return int|null
     */
    public function getPricingProfileBuyRateId()
    {
        return $this->container['pricing_profile_buy_rate_id'];
    }

    /**
     * Sets pricing_profile_buy_rate_id
     *
     * @param int|null $pricing_profile_buy_rate_id pricing_profile_buy_rate_id
     *
     * @return self
     */
    public function setPricingProfileBuyRateId($pricing_profile_buy_rate_id)
    {
        if (is_null($pricing_profile_buy_rate_id)) {
            throw new \InvalidArgumentException('non-nullable pricing_profile_buy_rate_id cannot be null');
        }
        $this->container['pricing_profile_buy_rate_id'] = $pricing_profile_buy_rate_id;

        return $this;
    }

    /**
     * Gets partnership_types
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipType[]|null
     */
    public function getPartnershipTypes()
    {
        return $this->container['partnership_types'];
    }

    /**
     * Sets partnership_types
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipType[]|null $partnership_types partnership_types
     *
     * @return self
     */
    public function setPartnershipTypes($partnership_types)
    {
        if (is_null($partnership_types)) {
            throw new \InvalidArgumentException('non-nullable partnership_types cannot be null');
        }


        $this->container['partnership_types'] = $partnership_types;

        return $this;
    }

    /**
     * Gets pricing_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalleejoinAdminPricingType|null
     */
    public function getPricingType()
    {
        return $this->container['pricing_type'];
    }

    /**
     * Sets pricing_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalleejoinAdminPricingType|null $pricing_type pricing_type
     *
     * @return self
     */
    public function setPricingType($pricing_type)
    {
        if (is_null($pricing_type)) {
            throw new \InvalidArgumentException('non-nullable pricing_type cannot be null');
        }
        $this->container['pricing_type'] = $pricing_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


