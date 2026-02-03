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
 * SubscriptionProductVersionPending model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionProductVersionPending implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionProductVersion.Pending';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled_currencies' => 'string[]',
        'product' => 'int',
        'tax_calculation' => '\PostFinanceCheckout\Sdk\Model\TaxCalculation',
        'billing_cycle' => 'string',
        'default_currency' => 'string',
        'name' => 'array<string,string>',
        'minimal_number_of_periods' => 'int',
        'comment' => 'string',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionProductVersionState',
        'number_of_notice_periods' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled_currencies' => null,
        'product' => 'int64',
        'tax_calculation' => null,
        'billing_cycle' => null,
        'default_currency' => null,
        'name' => null,
        'minimal_number_of_periods' => 'int32',
        'comment' => null,
        'state' => null,
        'number_of_notice_periods' => 'int32',
        'version' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled_currencies' => false,
        'product' => false,
        'tax_calculation' => false,
        'billing_cycle' => false,
        'default_currency' => false,
        'name' => false,
        'minimal_number_of_periods' => false,
        'comment' => false,
        'state' => false,
        'number_of_notice_periods' => false,
        'version' => false
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
        'enabled_currencies' => 'enabledCurrencies',
        'product' => 'product',
        'tax_calculation' => 'taxCalculation',
        'billing_cycle' => 'billingCycle',
        'default_currency' => 'defaultCurrency',
        'name' => 'name',
        'minimal_number_of_periods' => 'minimalNumberOfPeriods',
        'comment' => 'comment',
        'state' => 'state',
        'number_of_notice_periods' => 'numberOfNoticePeriods',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled_currencies' => 'setEnabledCurrencies',
        'product' => 'setProduct',
        'tax_calculation' => 'setTaxCalculation',
        'billing_cycle' => 'setBillingCycle',
        'default_currency' => 'setDefaultCurrency',
        'name' => 'setName',
        'minimal_number_of_periods' => 'setMinimalNumberOfPeriods',
        'comment' => 'setComment',
        'state' => 'setState',
        'number_of_notice_periods' => 'setNumberOfNoticePeriods',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled_currencies' => 'getEnabledCurrencies',
        'product' => 'getProduct',
        'tax_calculation' => 'getTaxCalculation',
        'billing_cycle' => 'getBillingCycle',
        'default_currency' => 'getDefaultCurrency',
        'name' => 'getName',
        'minimal_number_of_periods' => 'getMinimalNumberOfPeriods',
        'comment' => 'getComment',
        'state' => 'getState',
        'number_of_notice_periods' => 'getNumberOfNoticePeriods',
        'version' => 'getVersion'
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
        $this->setIfExists('enabled_currencies', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('tax_calculation', $data ?? [], null);
        $this->setIfExists('billing_cycle', $data ?? [], null);
        $this->setIfExists('default_currency', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('minimal_number_of_periods', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('number_of_notice_periods', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
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
     * Gets enabled_currencies
     *
     * @return string[]|null
     */
    public function getEnabledCurrencies()
    {
        return $this->container['enabled_currencies'];
    }

    /**
     * Sets enabled_currencies
     *
     * @param string[]|null $enabled_currencies The three-letter codes (ISO 4217 format) of the currencies that the product version supports.
     *
     * @return self
     */
    public function setEnabledCurrencies($enabled_currencies)
    {
        if (is_null($enabled_currencies)) {
            throw new \InvalidArgumentException('non-nullable enabled_currencies cannot be null');
        }


        $this->container['enabled_currencies'] = $enabled_currencies;

        return $this;
    }

    /**
     * Gets product
     *
     * @return int|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param int|null $product The product that the version belongs to.
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets tax_calculation
     *
     * @return \PostFinanceCheckout\Sdk\Model\TaxCalculation|null
     */
    public function getTaxCalculation()
    {
        return $this->container['tax_calculation'];
    }

    /**
     * Sets tax_calculation
     *
     * @param \PostFinanceCheckout\Sdk\Model\TaxCalculation|null $tax_calculation tax_calculation
     *
     * @return self
     */
    public function setTaxCalculation($tax_calculation)
    {
        if (is_null($tax_calculation)) {
            throw new \InvalidArgumentException('non-nullable tax_calculation cannot be null');
        }
        $this->container['tax_calculation'] = $tax_calculation;

        return $this;
    }

    /**
     * Gets billing_cycle
     *
     * @return string|null
     */
    public function getBillingCycle()
    {
        return $this->container['billing_cycle'];
    }

    /**
     * Sets billing_cycle
     *
     * @param string|null $billing_cycle The recurring period of time, typically monthly or annually, for which a subscriber is charged.
     *
     * @return self
     */
    public function setBillingCycle($billing_cycle)
    {
        if (is_null($billing_cycle)) {
            throw new \InvalidArgumentException('non-nullable billing_cycle cannot be null');
        }
        $this->container['billing_cycle'] = $billing_cycle;

        return $this;
    }

    /**
     * Gets default_currency
     *
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->container['default_currency'];
    }

    /**
     * Sets default_currency
     *
     * @param string|null $default_currency The three-letter code (ISO 4217 format) of the product version's default currency.
     *
     * @return self
     */
    public function setDefaultCurrency($default_currency)
    {
        if (is_null($default_currency)) {
            throw new \InvalidArgumentException('non-nullable default_currency cannot be null');
        }
        $this->container['default_currency'] = $default_currency;

        return $this;
    }

    /**
     * Gets name
     *
     * @return array<string,string>|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param array<string,string>|null $name The localized name of the product that is displayed to the customer.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets minimal_number_of_periods
     *
     * @return int|null
     */
    public function getMinimalNumberOfPeriods()
    {
        return $this->container['minimal_number_of_periods'];
    }

    /**
     * Sets minimal_number_of_periods
     *
     * @param int|null $minimal_number_of_periods The minimum number of periods the subscription will run before it can be terminated.
     *
     * @return self
     */
    public function setMinimalNumberOfPeriods($minimal_number_of_periods)
    {
        if (is_null($minimal_number_of_periods)) {
            throw new \InvalidArgumentException('non-nullable minimal_number_of_periods cannot be null');
        }
        $this->container['minimal_number_of_periods'] = $minimal_number_of_periods;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A comment that describes the product version and why it was created. It is not disclosed to the subscriber.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionProductVersionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionProductVersionState|null $state state
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
     * Gets number_of_notice_periods
     *
     * @return int|null
     */
    public function getNumberOfNoticePeriods()
    {
        return $this->container['number_of_notice_periods'];
    }

    /**
     * Sets number_of_notice_periods
     *
     * @param int|null $number_of_notice_periods The number of periods the subscription will keep running after its termination was requested.
     *
     * @return self
     */
    public function setNumberOfNoticePeriods($number_of_notice_periods)
    {
        if (is_null($number_of_notice_periods)) {
            throw new \InvalidArgumentException('non-nullable number_of_notice_periods cannot be null');
        }
        $this->container['number_of_notice_periods'] = $number_of_notice_periods;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

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


