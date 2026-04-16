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
 * WalleejoinCreatePartnershipRequestDto model
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
class WalleejoinCreatePartnershipRequestDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalleejoinCreatePartnershipRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partner_account_id' => 'int',
        'pricing_profile_sell_rate_id' => 'int',
        'subscription_product_id' => 'int',
        'merchant_email_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'partner_account_id' => 'int64',
        'pricing_profile_sell_rate_id' => 'int64',
        'subscription_product_id' => 'int64',
        'merchant_email_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'partner_account_id' => false,
        'pricing_profile_sell_rate_id' => false,
        'subscription_product_id' => false,
        'merchant_email_address' => false
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
        'partner_account_id' => 'partnerAccountId',
        'pricing_profile_sell_rate_id' => 'pricingProfileSellRateId',
        'subscription_product_id' => 'subscriptionProductId',
        'merchant_email_address' => 'merchantEmailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partner_account_id' => 'setPartnerAccountId',
        'pricing_profile_sell_rate_id' => 'setPricingProfileSellRateId',
        'subscription_product_id' => 'setSubscriptionProductId',
        'merchant_email_address' => 'setMerchantEmailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partner_account_id' => 'getPartnerAccountId',
        'pricing_profile_sell_rate_id' => 'getPricingProfileSellRateId',
        'subscription_product_id' => 'getSubscriptionProductId',
        'merchant_email_address' => 'getMerchantEmailAddress'
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
        $this->setIfExists('partner_account_id', $data ?? [], null);
        $this->setIfExists('pricing_profile_sell_rate_id', $data ?? [], null);
        $this->setIfExists('subscription_product_id', $data ?? [], null);
        $this->setIfExists('merchant_email_address', $data ?? [], null);
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
     * Gets pricing_profile_sell_rate_id
     *
     * @return int|null
     */
    public function getPricingProfileSellRateId()
    {
        return $this->container['pricing_profile_sell_rate_id'];
    }

    /**
     * Sets pricing_profile_sell_rate_id
     *
     * @param int|null $pricing_profile_sell_rate_id pricing_profile_sell_rate_id
     *
     * @return self
     */
    public function setPricingProfileSellRateId($pricing_profile_sell_rate_id)
    {
        if (is_null($pricing_profile_sell_rate_id)) {
            throw new \InvalidArgumentException('non-nullable pricing_profile_sell_rate_id cannot be null');
        }
        $this->container['pricing_profile_sell_rate_id'] = $pricing_profile_sell_rate_id;

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
     * Gets merchant_email_address
     *
     * @return string|null
     */
    public function getMerchantEmailAddress()
    {
        return $this->container['merchant_email_address'];
    }

    /**
     * Sets merchant_email_address
     *
     * @param string|null $merchant_email_address merchant_email_address
     *
     * @return self
     */
    public function setMerchantEmailAddress($merchant_email_address)
    {
        if (is_null($merchant_email_address)) {
            throw new \InvalidArgumentException('non-nullable merchant_email_address cannot be null');
        }
        $this->container['merchant_email_address'] = $merchant_email_address;

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


