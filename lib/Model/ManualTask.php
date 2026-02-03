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
 * ManualTask model
 *
 * @category Class
 * @description A manual task requires the manual intervention of a human.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class ManualTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManualTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'linked_space_id' => 'int',
        'context_entity_id' => 'int',
        'planned_purge_date' => '\DateTime',
        'expires_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\ManualTaskState',
        'type' => 'int',
        'actions' => '\PostFinanceCheckout\Sdk\Model\ManualTaskAction[]',
        'created_on' => '\DateTime'
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
        'context_entity_id' => 'int64',
        'planned_purge_date' => 'date-time',
        'expires_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'type' => 'int64',
        'actions' => null,
        'created_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'linked_space_id' => false,
        'context_entity_id' => false,
        'planned_purge_date' => false,
        'expires_on' => false,
        'id' => false,
        'state' => false,
        'type' => false,
        'actions' => false,
        'created_on' => false
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
        'context_entity_id' => 'contextEntityId',
        'planned_purge_date' => 'plannedPurgeDate',
        'expires_on' => 'expiresOn',
        'id' => 'id',
        'state' => 'state',
        'type' => 'type',
        'actions' => 'actions',
        'created_on' => 'createdOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_space_id' => 'setLinkedSpaceId',
        'context_entity_id' => 'setContextEntityId',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'expires_on' => 'setExpiresOn',
        'id' => 'setId',
        'state' => 'setState',
        'type' => 'setType',
        'actions' => 'setActions',
        'created_on' => 'setCreatedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_space_id' => 'getLinkedSpaceId',
        'context_entity_id' => 'getContextEntityId',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'expires_on' => 'getExpiresOn',
        'id' => 'getId',
        'state' => 'getState',
        'type' => 'getType',
        'actions' => 'getActions',
        'created_on' => 'getCreatedOn'
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
        $this->setIfExists('context_entity_id', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('expires_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
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
     * Gets context_entity_id
     *
     * @return int|null
     */
    public function getContextEntityId()
    {
        return $this->container['context_entity_id'];
    }

    /**
     * Sets context_entity_id
     *
     * @param int|null $context_entity_id The ID of the entity the manual task is linked to.
     *
     * @return self
     */
    public function setContextEntityId($context_entity_id)
    {
        if (is_null($context_entity_id)) {
            throw new \InvalidArgumentException('non-nullable context_entity_id cannot be null');
        }
        $this->container['context_entity_id'] = $context_entity_id;

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
     * Gets expires_on
     *
     * @return \DateTime|null
     */
    public function getExpiresOn()
    {
        return $this->container['expires_on'];
    }

    /**
     * Sets expires_on
     *
     * @param \DateTime|null $expires_on The date and time until when the manual task has to be handled.
     *
     * @return self
     */
    public function setExpiresOn($expires_on)
    {
        if (is_null($expires_on)) {
            throw new \InvalidArgumentException('non-nullable expires_on cannot be null');
        }
        $this->container['expires_on'] = $expires_on;

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
     * @return \PostFinanceCheckout\Sdk\Model\ManualTaskState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\ManualTaskState|null $state state
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
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type The manual task's type.
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
     * Gets actions
     *
     * @return \PostFinanceCheckout\Sdk\Model\ManualTaskAction[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \PostFinanceCheckout\Sdk\Model\ManualTaskAction[]|null $actions The actions that can be triggered to handle the manual task.
     *
     * @return self
     */
    public function setActions($actions)
    {
        if (is_null($actions)) {
            throw new \InvalidArgumentException('non-nullable actions cannot be null');
        }
        $this->container['actions'] = $actions;

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


