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
 * ProductPeriodFee model
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
class ProductPeriodFee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductPeriodFee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period_fee' => '\PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]',
        'linked_space_id' => 'int',
        'component' => '\PostFinanceCheckout\Sdk\Model\SubscriptionProductComponent',
        'number_of_free_trial_periods' => 'int',
        'name' => 'array<string,string>',
        'description' => 'array<string,string>',
        'id' => 'int',
        'type' => '\PostFinanceCheckout\Sdk\Model\ProductFeeType',
        'version' => 'int',
        'ledger_entry_title' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'period_fee' => null,
        'linked_space_id' => 'int64',
        'component' => null,
        'number_of_free_trial_periods' => 'int32',
        'name' => null,
        'description' => null,
        'id' => 'int64',
        'type' => null,
        'version' => 'int32',
        'ledger_entry_title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'period_fee' => false,
        'linked_space_id' => false,
        'component' => false,
        'number_of_free_trial_periods' => false,
        'name' => false,
        'description' => false,
        'id' => false,
        'type' => false,
        'version' => false,
        'ledger_entry_title' => false
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
        'period_fee' => 'periodFee',
        'linked_space_id' => 'linkedSpaceId',
        'component' => 'component',
        'number_of_free_trial_periods' => 'numberOfFreeTrialPeriods',
        'name' => 'name',
        'description' => 'description',
        'id' => 'id',
        'type' => 'type',
        'version' => 'version',
        'ledger_entry_title' => 'ledgerEntryTitle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_fee' => 'setPeriodFee',
        'linked_space_id' => 'setLinkedSpaceId',
        'component' => 'setComponent',
        'number_of_free_trial_periods' => 'setNumberOfFreeTrialPeriods',
        'name' => 'setName',
        'description' => 'setDescription',
        'id' => 'setId',
        'type' => 'setType',
        'version' => 'setVersion',
        'ledger_entry_title' => 'setLedgerEntryTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_fee' => 'getPeriodFee',
        'linked_space_id' => 'getLinkedSpaceId',
        'component' => 'getComponent',
        'number_of_free_trial_periods' => 'getNumberOfFreeTrialPeriods',
        'name' => 'getName',
        'description' => 'getDescription',
        'id' => 'getId',
        'type' => 'getType',
        'version' => 'getVersion',
        'ledger_entry_title' => 'getLedgerEntryTitle'
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
        $this->setIfExists('period_fee', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('component', $data ?? [], null);
        $this->setIfExists('number_of_free_trial_periods', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('ledger_entry_title', $data ?? [], null);
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
     * Gets period_fee
     *
     * @return \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null
     */
    public function getPeriodFee()
    {
        return $this->container['period_fee'];
    }

    /**
     * Sets period_fee
     *
     * @param \PostFinanceCheckout\Sdk\Model\PersistableCurrencyAmount[]|null $period_fee The amount charged to the customer for each billing cycle during the term of a subscription.
     *
     * @return self
     */
    public function setPeriodFee($period_fee)
    {
        if (is_null($period_fee)) {
            throw new \InvalidArgumentException('non-nullable period_fee cannot be null');
        }


        $this->container['period_fee'] = $period_fee;

        return $this;
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
     * Gets number_of_free_trial_periods
     *
     * @return int|null
     */
    public function getNumberOfFreeTrialPeriods()
    {
        return $this->container['number_of_free_trial_periods'];
    }

    /**
     * Sets number_of_free_trial_periods
     *
     * @param int|null $number_of_free_trial_periods The number of subscription billing cycles that count as a trial phase and during which no fees are charged.
     *
     * @return self
     */
    public function setNumberOfFreeTrialPeriods($number_of_free_trial_periods)
    {
        if (is_null($number_of_free_trial_periods)) {
            throw new \InvalidArgumentException('non-nullable number_of_free_trial_periods cannot be null');
        }
        $this->container['number_of_free_trial_periods'] = $number_of_free_trial_periods;

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
     * Gets ledger_entry_title
     *
     * @return array<string,string>|null
     */
    public function getLedgerEntryTitle()
    {
        return $this->container['ledger_entry_title'];
    }

    /**
     * Sets ledger_entry_title
     *
     * @param array<string,string>|null $ledger_entry_title The localized title that be used on ledger entries and invoices.
     *
     * @return self
     */
    public function setLedgerEntryTitle($ledger_entry_title)
    {
        if (is_null($ledger_entry_title)) {
            throw new \InvalidArgumentException('non-nullable ledger_entry_title cannot be null');
        }
        $this->container['ledger_entry_title'] = $ledger_entry_title;

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


