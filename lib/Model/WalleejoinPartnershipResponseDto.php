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
 * WalleejoinPartnershipResponseDto model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      PostFinance Ltd
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.3
 * @implements \ArrayAccess<string, mixed>
 */
class WalleejoinPartnershipResponseDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalleejoinPartnershipResponseDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partnership' => '\PostFinanceCheckout\Sdk\Model\WalleejoinPartnership',
        'merchant_account' => 'int',
        'allowed_to_sell_scope_products' => 'bool',
        'pricing_history' => '\PostFinanceCheckout\Sdk\Model\PricingHistoryDto',
        'partnership_type' => '\PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipType',
        'state' => '\PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipState',
        'updated_on' => '\DateTime',
        'allowed_pricing_type' => '\PostFinanceCheckout\Sdk\Model\WalleejoinAdminPricingType',
        'created_on' => '\DateTime',
        'subscription_product_id' => 'int',
        'partner_account' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'partnership' => null,
        'merchant_account' => 'int64',
        'allowed_to_sell_scope_products' => null,
        'pricing_history' => null,
        'partnership_type' => null,
        'state' => null,
        'updated_on' => 'date-time',
        'allowed_pricing_type' => null,
        'created_on' => 'date-time',
        'subscription_product_id' => 'int64',
        'partner_account' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'partnership' => false,
        'merchant_account' => false,
        'allowed_to_sell_scope_products' => false,
        'pricing_history' => false,
        'partnership_type' => false,
        'state' => false,
        'updated_on' => false,
        'allowed_pricing_type' => false,
        'created_on' => false,
        'subscription_product_id' => false,
        'partner_account' => false
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
        'partnership' => 'partnership',
        'merchant_account' => 'merchantAccount',
        'allowed_to_sell_scope_products' => 'allowedToSellScopeProducts',
        'pricing_history' => 'pricingHistory',
        'partnership_type' => 'partnershipType',
        'state' => 'state',
        'updated_on' => 'updatedOn',
        'allowed_pricing_type' => 'allowedPricingType',
        'created_on' => 'createdOn',
        'subscription_product_id' => 'subscriptionProductId',
        'partner_account' => 'partnerAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partnership' => 'setPartnership',
        'merchant_account' => 'setMerchantAccount',
        'allowed_to_sell_scope_products' => 'setAllowedToSellScopeProducts',
        'pricing_history' => 'setPricingHistory',
        'partnership_type' => 'setPartnershipType',
        'state' => 'setState',
        'updated_on' => 'setUpdatedOn',
        'allowed_pricing_type' => 'setAllowedPricingType',
        'created_on' => 'setCreatedOn',
        'subscription_product_id' => 'setSubscriptionProductId',
        'partner_account' => 'setPartnerAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partnership' => 'getPartnership',
        'merchant_account' => 'getMerchantAccount',
        'allowed_to_sell_scope_products' => 'getAllowedToSellScopeProducts',
        'pricing_history' => 'getPricingHistory',
        'partnership_type' => 'getPartnershipType',
        'state' => 'getState',
        'updated_on' => 'getUpdatedOn',
        'allowed_pricing_type' => 'getAllowedPricingType',
        'created_on' => 'getCreatedOn',
        'subscription_product_id' => 'getSubscriptionProductId',
        'partner_account' => 'getPartnerAccount'
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
        $this->setIfExists('partnership', $data ?? [], null);
        $this->setIfExists('merchant_account', $data ?? [], null);
        $this->setIfExists('allowed_to_sell_scope_products', $data ?? [], null);
        $this->setIfExists('pricing_history', $data ?? [], null);
        $this->setIfExists('partnership_type', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('updated_on', $data ?? [], null);
        $this->setIfExists('allowed_pricing_type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('subscription_product_id', $data ?? [], null);
        $this->setIfExists('partner_account', $data ?? [], null);
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
     * Gets partnership
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalleejoinPartnership|null
     */
    public function getPartnership()
    {
        return $this->container['partnership'];
    }

    /**
     * Sets partnership
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalleejoinPartnership|null $partnership partnership
     *
     * @return self
     */
    public function setPartnership($partnership)
    {
        if (is_null($partnership)) {
            throw new \InvalidArgumentException('non-nullable partnership cannot be null');
        }
        $this->container['partnership'] = $partnership;

        return $this;
    }

    /**
     * Gets merchant_account
     *
     * @return int|null
     */
    public function getMerchantAccount()
    {
        return $this->container['merchant_account'];
    }

    /**
     * Sets merchant_account
     *
     * @param int|null $merchant_account merchant_account
     *
     * @return self
     */
    public function setMerchantAccount($merchant_account)
    {
        if (is_null($merchant_account)) {
            throw new \InvalidArgumentException('non-nullable merchant_account cannot be null');
        }
        $this->container['merchant_account'] = $merchant_account;

        return $this;
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
     * Gets pricing_history
     *
     * @return \PostFinanceCheckout\Sdk\Model\PricingHistoryDto|null
     */
    public function getPricingHistory()
    {
        return $this->container['pricing_history'];
    }

    /**
     * Sets pricing_history
     *
     * @param \PostFinanceCheckout\Sdk\Model\PricingHistoryDto|null $pricing_history pricing_history
     *
     * @return self
     */
    public function setPricingHistory($pricing_history)
    {
        if (is_null($pricing_history)) {
            throw new \InvalidArgumentException('non-nullable pricing_history cannot be null');
        }
        $this->container['pricing_history'] = $pricing_history;

        return $this;
    }

    /**
     * Gets partnership_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipType|null
     */
    public function getPartnershipType()
    {
        return $this->container['partnership_type'];
    }

    /**
     * Sets partnership_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipType|null $partnership_type partnership_type
     *
     * @return self
     */
    public function setPartnershipType($partnership_type)
    {
        if (is_null($partnership_type)) {
            throw new \InvalidArgumentException('non-nullable partnership_type cannot be null');
        }
        $this->container['partnership_type'] = $partnership_type;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalleejoinPartnershipState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return \DateTime|null
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param \DateTime|null $updated_on updated_on
     *
     * @return self
     */
    public function setUpdatedOn($updated_on)
    {
        if (is_null($updated_on)) {
            throw new \InvalidArgumentException('non-nullable updated_on cannot be null');
        }
        $this->container['updated_on'] = $updated_on;

        return $this;
    }

    /**
     * Gets allowed_pricing_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalleejoinAdminPricingType|null
     */
    public function getAllowedPricingType()
    {
        return $this->container['allowed_pricing_type'];
    }

    /**
     * Sets allowed_pricing_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalleejoinAdminPricingType|null $allowed_pricing_type allowed_pricing_type
     *
     * @return self
     */
    public function setAllowedPricingType($allowed_pricing_type)
    {
        if (is_null($allowed_pricing_type)) {
            throw new \InvalidArgumentException('non-nullable allowed_pricing_type cannot be null');
        }
        $this->container['allowed_pricing_type'] = $allowed_pricing_type;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime|null $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        if (is_null($created_on)) {
            throw new \InvalidArgumentException('non-nullable created_on cannot be null');
        }
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets subscription_product_id
     *
     * @return int|null
     */
    public function getSubscriptionProductId()
    {
        return $this->container['subscription_product_id'];
    }

    /**
     * Sets subscription_product_id
     *
     * @param int|null $subscription_product_id subscription_product_id
     *
     * @return self
     */
    public function setSubscriptionProductId($subscription_product_id)
    {
        if (is_null($subscription_product_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_product_id cannot be null');
        }
        $this->container['subscription_product_id'] = $subscription_product_id;

        return $this;
    }

    /**
     * Gets partner_account
     *
     * @return int|null
     */
    public function getPartnerAccount()
    {
        return $this->container['partner_account'];
    }

    /**
     * Sets partner_account
     *
     * @param int|null $partner_account partner_account
     *
     * @return self
     */
    public function setPartnerAccount($partner_account)
    {
        if (is_null($partner_account)) {
            throw new \InvalidArgumentException('non-nullable partner_account cannot be null');
        }
        $this->container['partner_account'] = $partner_account;

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


