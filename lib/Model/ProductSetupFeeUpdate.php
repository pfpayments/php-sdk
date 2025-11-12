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

use \ArrayAccess;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * ProductSetupFeeUpdate model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class ProductSetupFeeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductSetupFee.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'component' => 'int',
        'name' => 'array<string,string>',
        'description' => 'array<string,string>',
        'setup_fee' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]',
        'on_downgrade_credited_amount' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]',
        'version' => 'int',
        'on_upgrade_credited_amount' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'component' => 'int64',
        'name' => null,
        'description' => null,
        'setup_fee' => null,
        'on_downgrade_credited_amount' => null,
        'version' => 'int32',
        'on_upgrade_credited_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'component' => false,
        'name' => false,
        'description' => false,
        'setup_fee' => false,
        'on_downgrade_credited_amount' => false,
        'version' => false,
        'on_upgrade_credited_amount' => false
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
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
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
        'component' => 'component',
        'name' => 'name',
        'description' => 'description',
        'setup_fee' => 'setupFee',
        'on_downgrade_credited_amount' => 'onDowngradeCreditedAmount',
        'version' => 'version',
        'on_upgrade_credited_amount' => 'onUpgradeCreditedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'component' => 'setComponent',
        'name' => 'setName',
        'description' => 'setDescription',
        'setup_fee' => 'setSetupFee',
        'on_downgrade_credited_amount' => 'setOnDowngradeCreditedAmount',
        'version' => 'setVersion',
        'on_upgrade_credited_amount' => 'setOnUpgradeCreditedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'component' => 'getComponent',
        'name' => 'getName',
        'description' => 'getDescription',
        'setup_fee' => 'getSetupFee',
        'on_downgrade_credited_amount' => 'getOnDowngradeCreditedAmount',
        'version' => 'getVersion',
        'on_upgrade_credited_amount' => 'getOnUpgradeCreditedAmount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('component', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('setup_fee', $data ?? [], null);
        $this->setIfExists('on_downgrade_credited_amount', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('on_upgrade_credited_amount', $data ?? [], null);
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets component
     *
     * @return int|null
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param int|null $component The product component that the fee belongs to.
     *
     * @return self
     */
    public function setComponent($component)
    {
        if (is_null($component)) {
            throw new \InvalidArgumentException('non-nullable component cannot be null');
        }
        $this->container['component'] = $component;

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
     * @param array<string,string>|null $name The localized name of the fee that is displayed to the customer.
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
     * Gets description
     *
     * @return array<string,string>|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param array<string,string>|null $description The localized description of the fee that is displayed to the customer.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets setup_fee
     *
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]|null
     */
    public function getSetupFee()
    {
        return $this->container['setup_fee'];
    }

    /**
     * Sets setup_fee
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]|null $setup_fee The amount charged to the customer once when they subscribe to a subscription.
     *
     * @return self
     */
    public function setSetupFee($setup_fee)
    {
        if (is_null($setup_fee)) {
            throw new \InvalidArgumentException('non-nullable setup_fee cannot be null');
        }


        $this->container['setup_fee'] = $setup_fee;

        return $this;
    }

    /**
     * Gets on_downgrade_credited_amount
     *
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]|null
     */
    public function getOnDowngradeCreditedAmount()
    {
        return $this->container['on_downgrade_credited_amount'];
    }

    /**
     * Sets on_downgrade_credited_amount
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]|null $on_downgrade_credited_amount The amount charged to the customer when a subscription is downgraded.
     *
     * @return self
     */
    public function setOnDowngradeCreditedAmount($on_downgrade_credited_amount)
    {
        if (is_null($on_downgrade_credited_amount)) {
            throw new \InvalidArgumentException('non-nullable on_downgrade_credited_amount cannot be null');
        }


        $this->container['on_downgrade_credited_amount'] = $on_downgrade_credited_amount;

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
     * Gets on_upgrade_credited_amount
     *
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]|null
     */
    public function getOnUpgradeCreditedAmount()
    {
        return $this->container['on_upgrade_credited_amount'];
    }

    /**
     * Sets on_upgrade_credited_amount
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmountUpdate[]|null $on_upgrade_credited_amount The amount charged to the customer when a subscription is upgraded.
     *
     * @return self
     */
    public function setOnUpgradeCreditedAmount($on_upgrade_credited_amount)
    {
        if (is_null($on_upgrade_credited_amount)) {
            throw new \InvalidArgumentException('non-nullable on_upgrade_credited_amount cannot be null');
        }


        $this->container['on_upgrade_credited_amount'] = $on_upgrade_credited_amount;

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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, mixed $value): void
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
    public function jsonSerialize(): mixed
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


