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
 * ProductSetupFee model
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
class ProductSetupFee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductSetupFee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'linked_space_id' => 'int',
        'component' => '\PostFinanceCheckout\Sdk\Model\SubscriptionProductComponent',
        'name' => 'array<string,string>',
        'description' => 'array<string,string>',
        'setup_fee' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]',
        'id' => 'int',
        'on_downgrade_credited_amount' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]',
        'type' => '\PostFinanceCheckout\Sdk\Model\ProductFeeType',
        'version' => 'int',
        'on_upgrade_credited_amount' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'linked_space_id' => 'int64',
        'component' => null,
        'name' => null,
        'description' => null,
        'setup_fee' => null,
        'id' => 'int64',
        'on_downgrade_credited_amount' => null,
        'type' => null,
        'version' => 'int32',
        'on_upgrade_credited_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'linked_space_id' => false,
        'component' => false,
        'name' => false,
        'description' => false,
        'setup_fee' => false,
        'id' => false,
        'on_downgrade_credited_amount' => false,
        'type' => false,
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
        'linked_space_id' => 'linkedSpaceId',
        'component' => 'component',
        'name' => 'name',
        'description' => 'description',
        'setup_fee' => 'setupFee',
        'id' => 'id',
        'on_downgrade_credited_amount' => 'onDowngradeCreditedAmount',
        'type' => 'type',
        'version' => 'version',
        'on_upgrade_credited_amount' => 'onUpgradeCreditedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_space_id' => 'setLinkedSpaceId',
        'component' => 'setComponent',
        'name' => 'setName',
        'description' => 'setDescription',
        'setup_fee' => 'setSetupFee',
        'id' => 'setId',
        'on_downgrade_credited_amount' => 'setOnDowngradeCreditedAmount',
        'type' => 'setType',
        'version' => 'setVersion',
        'on_upgrade_credited_amount' => 'setOnUpgradeCreditedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_space_id' => 'getLinkedSpaceId',
        'component' => 'getComponent',
        'name' => 'getName',
        'description' => 'getDescription',
        'setup_fee' => 'getSetupFee',
        'id' => 'getId',
        'on_downgrade_credited_amount' => 'getOnDowngradeCreditedAmount',
        'type' => 'getType',
        'version' => 'getVersion',
        'on_upgrade_credited_amount' => 'getOnUpgradeCreditedAmount'
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
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('component', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('setup_fee', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('on_downgrade_credited_amount', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        if (!is_null($this->container['setup_fee']) && (count($this->container['setup_fee']) < 1)) {
            $invalidProperties[] = "invalid value for 'setup_fee', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['on_downgrade_credited_amount']) && (count($this->container['on_downgrade_credited_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'on_downgrade_credited_amount', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['on_upgrade_credited_amount']) && (count($this->container['on_upgrade_credited_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'on_upgrade_credited_amount', number of items must be greater than or equal to 1.";
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
     * Gets linked_space_id
     *
     * @return int|null
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int|null $linked_space_id The ID of the space this object belongs to.
     *
     * @return self
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        if (is_null($linked_space_id)) {
            throw new \InvalidArgumentException('non-nullable linked_space_id cannot be null');
        }
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }

    /**
     * Gets component
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionProductComponent|null
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionProductComponent|null $component component
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
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null
     */
    public function getSetupFee()
    {
        return $this->container['setup_fee'];
    }

    /**
     * Sets setup_fee
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null $setup_fee The amount charged to the customer once when they subscribe to a subscription.
     *
     * @return self
     */
    public function setSetupFee($setup_fee)
    {
        if (is_null($setup_fee)) {
            throw new \InvalidArgumentException('non-nullable setup_fee cannot be null');
        }


        if ((count($setup_fee) < 1)) {
            throw new \InvalidArgumentException('invalid length for $setup_fee when calling ProductSetupFee., number of items must be greater than or equal to 1.');
        }
        $this->container['setup_fee'] = $setup_fee;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id A unique identifier for the object.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets on_downgrade_credited_amount
     *
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null
     */
    public function getOnDowngradeCreditedAmount()
    {
        return $this->container['on_downgrade_credited_amount'];
    }

    /**
     * Sets on_downgrade_credited_amount
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null $on_downgrade_credited_amount The amount charged to the customer when a subscription is downgraded.
     *
     * @return self
     */
    public function setOnDowngradeCreditedAmount($on_downgrade_credited_amount)
    {
        if (is_null($on_downgrade_credited_amount)) {
            throw new \InvalidArgumentException('non-nullable on_downgrade_credited_amount cannot be null');
        }


        if ((count($on_downgrade_credited_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $on_downgrade_credited_amount when calling ProductSetupFee., number of items must be greater than or equal to 1.');
        }
        $this->container['on_downgrade_credited_amount'] = $on_downgrade_credited_amount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\ProductFeeType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\ProductFeeType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version The version is used for optimistic locking and incremented whenever the object is updated.
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
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null
     */
    public function getOnUpgradeCreditedAmount()
    {
        return $this->container['on_upgrade_credited_amount'];
    }

    /**
     * Sets on_upgrade_credited_amount
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null $on_upgrade_credited_amount The amount charged to the customer when a subscription is upgraded.
     *
     * @return self
     */
    public function setOnUpgradeCreditedAmount($on_upgrade_credited_amount)
    {
        if (is_null($on_upgrade_credited_amount)) {
            throw new \InvalidArgumentException('non-nullable on_upgrade_credited_amount cannot be null');
        }


        if ((count($on_upgrade_credited_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $on_upgrade_credited_amount when calling ProductSetupFee., number of items must be greater than or equal to 1.');
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


