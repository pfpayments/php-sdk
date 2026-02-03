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
 * DunningCase model
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
class DunningCase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DunningCase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'canceled_on' => '\DateTime',
        'derecognized_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'created_on' => '\DateTime',
        'version' => 'int',
        'linked_space_id' => 'int',
        'initial_invoice' => '\PostFinanceCheckout\Sdk\Model\TransactionInvoice',
        'succeeded_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\DunningCaseState',
        'linked_transaction' => 'int',
        'failed_on' => '\DateTime',
        'flow' => '\PostFinanceCheckout\Sdk\Model\DunningFlow'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'canceled_on' => 'date-time',
        'derecognized_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'created_on' => 'date-time',
        'version' => 'int32',
        'linked_space_id' => 'int64',
        'initial_invoice' => null,
        'succeeded_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'failed_on' => 'date-time',
        'flow' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'canceled_on' => false,
        'derecognized_on' => false,
        'planned_purge_date' => false,
        'created_on' => false,
        'version' => false,
        'linked_space_id' => false,
        'initial_invoice' => false,
        'succeeded_on' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'failed_on' => false,
        'flow' => false
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
        'canceled_on' => 'canceledOn',
        'derecognized_on' => 'derecognizedOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'created_on' => 'createdOn',
        'version' => 'version',
        'linked_space_id' => 'linkedSpaceId',
        'initial_invoice' => 'initialInvoice',
        'succeeded_on' => 'succeededOn',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'failed_on' => 'failedOn',
        'flow' => 'flow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canceled_on' => 'setCanceledOn',
        'derecognized_on' => 'setDerecognizedOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'linked_space_id' => 'setLinkedSpaceId',
        'initial_invoice' => 'setInitialInvoice',
        'succeeded_on' => 'setSucceededOn',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'failed_on' => 'setFailedOn',
        'flow' => 'setFlow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canceled_on' => 'getCanceledOn',
        'derecognized_on' => 'getDerecognizedOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'linked_space_id' => 'getLinkedSpaceId',
        'initial_invoice' => 'getInitialInvoice',
        'succeeded_on' => 'getSucceededOn',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'failed_on' => 'getFailedOn',
        'flow' => 'getFlow'
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
        $this->setIfExists('canceled_on', $data ?? [], null);
        $this->setIfExists('derecognized_on', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('initial_invoice', $data ?? [], null);
        $this->setIfExists('succeeded_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
        $this->setIfExists('flow', $data ?? [], null);
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
     * Gets canceled_on
     *
     * @return \DateTime|null
     */
    public function getCanceledOn()
    {
        return $this->container['canceled_on'];
    }

    /**
     * Sets canceled_on
     *
     * @param \DateTime|null $canceled_on canceled_on
     *
     * @return self
     */
    public function setCanceledOn($canceled_on)
    {
        if (is_null($canceled_on)) {
            throw new \InvalidArgumentException('non-nullable canceled_on cannot be null');
        }
        $this->container['canceled_on'] = $canceled_on;

        return $this;
    }

    /**
     * Gets derecognized_on
     *
     * @return \DateTime|null
     */
    public function getDerecognizedOn()
    {
        return $this->container['derecognized_on'];
    }

    /**
     * Sets derecognized_on
     *
     * @param \DateTime|null $derecognized_on derecognized_on
     *
     * @return self
     */
    public function setDerecognizedOn($derecognized_on)
    {
        if (is_null($derecognized_on)) {
            throw new \InvalidArgumentException('non-nullable derecognized_on cannot be null');
        }
        $this->container['derecognized_on'] = $derecognized_on;

        return $this;
    }

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime|null
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime|null $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return self
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        if (is_null($planned_purge_date)) {
            throw new \InvalidArgumentException('non-nullable planned_purge_date cannot be null');
        }
        $this->container['planned_purge_date'] = $planned_purge_date;

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
     * @param \DateTime|null $created_on The date and time when the object was created.
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
     * Gets initial_invoice
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionInvoice|null
     */
    public function getInitialInvoice()
    {
        return $this->container['initial_invoice'];
    }

    /**
     * Sets initial_invoice
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionInvoice|null $initial_invoice initial_invoice
     *
     * @return self
     */
    public function setInitialInvoice($initial_invoice)
    {
        if (is_null($initial_invoice)) {
            throw new \InvalidArgumentException('non-nullable initial_invoice cannot be null');
        }
        $this->container['initial_invoice'] = $initial_invoice;

        return $this;
    }

    /**
     * Gets succeeded_on
     *
     * @return \DateTime|null
     */
    public function getSucceededOn()
    {
        return $this->container['succeeded_on'];
    }

    /**
     * Sets succeeded_on
     *
     * @param \DateTime|null $succeeded_on succeeded_on
     *
     * @return self
     */
    public function setSucceededOn($succeeded_on)
    {
        if (is_null($succeeded_on)) {
            throw new \InvalidArgumentException('non-nullable succeeded_on cannot be null');
        }
        $this->container['succeeded_on'] = $succeeded_on;

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
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\DunningCaseState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\DunningCaseState|null $state state
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
     * Gets linked_transaction
     *
     * @return int|null
     */
    public function getLinkedTransaction()
    {
        return $this->container['linked_transaction'];
    }

    /**
     * Sets linked_transaction
     *
     * @param int|null $linked_transaction The payment transaction this object is linked to.
     *
     * @return self
     */
    public function setLinkedTransaction($linked_transaction)
    {
        if (is_null($linked_transaction)) {
            throw new \InvalidArgumentException('non-nullable linked_transaction cannot be null');
        }
        $this->container['linked_transaction'] = $linked_transaction;

        return $this;
    }

    /**
     * Gets failed_on
     *
     * @return \DateTime|null
     */
    public function getFailedOn()
    {
        return $this->container['failed_on'];
    }

    /**
     * Sets failed_on
     *
     * @param \DateTime|null $failed_on failed_on
     *
     * @return self
     */
    public function setFailedOn($failed_on)
    {
        if (is_null($failed_on)) {
            throw new \InvalidArgumentException('non-nullable failed_on cannot be null');
        }
        $this->container['failed_on'] = $failed_on;

        return $this;
    }

    /**
     * Gets flow
     *
     * @return \PostFinanceCheckout\Sdk\Model\DunningFlow|null
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param \PostFinanceCheckout\Sdk\Model\DunningFlow|null $flow flow
     *
     * @return self
     */
    public function setFlow($flow)
    {
        if (is_null($flow)) {
            throw new \InvalidArgumentException('non-nullable flow cannot be null');
        }
        $this->container['flow'] = $flow;

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


