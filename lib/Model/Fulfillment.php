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
 * Fulfillment model
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
class Fulfillment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Fulfillment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'completion' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletion',
        'overridden_by' => 'int',
        'override_reason' => 'string',
        'description' => 'string',
        'external_id' => 'string',
        'gross_amount' => 'float',
        'created_on' => '\DateTime',
        'version' => 'int',
        'linked_space_id' => 'int',
        'created_by' => 'int',
        'failure_reason' => 'string',
        'fulfilled_by' => 'int',
        'in_store_pickup' => 'bool',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\FulfillmentState',
        'linked_transaction' => 'int',
        'tracking_number' => 'string',
        'failed_on' => '\DateTime',
        'overridden_on' => '\DateTime',
        'fulfilled_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'completion' => null,
        'overridden_by' => 'int64',
        'override_reason' => null,
        'description' => null,
        'external_id' => null,
        'gross_amount' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'linked_space_id' => 'int64',
        'created_by' => 'int64',
        'failure_reason' => null,
        'fulfilled_by' => 'int64',
        'in_store_pickup' => null,
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'tracking_number' => null,
        'failed_on' => 'date-time',
        'overridden_on' => 'date-time',
        'fulfilled_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'completion' => false,
        'overridden_by' => false,
        'override_reason' => false,
        'description' => false,
        'external_id' => false,
        'gross_amount' => false,
        'created_on' => false,
        'version' => false,
        'linked_space_id' => false,
        'created_by' => false,
        'failure_reason' => false,
        'fulfilled_by' => false,
        'in_store_pickup' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'tracking_number' => false,
        'failed_on' => false,
        'overridden_on' => false,
        'fulfilled_on' => false
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
        'completion' => 'completion',
        'overridden_by' => 'overriddenBy',
        'override_reason' => 'overrideReason',
        'description' => 'description',
        'external_id' => 'externalId',
        'gross_amount' => 'grossAmount',
        'created_on' => 'createdOn',
        'version' => 'version',
        'linked_space_id' => 'linkedSpaceId',
        'created_by' => 'createdBy',
        'failure_reason' => 'failureReason',
        'fulfilled_by' => 'fulfilledBy',
        'in_store_pickup' => 'inStorePickup',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'tracking_number' => 'trackingNumber',
        'failed_on' => 'failedOn',
        'overridden_on' => 'overriddenOn',
        'fulfilled_on' => 'fulfilledOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion' => 'setCompletion',
        'overridden_by' => 'setOverriddenBy',
        'override_reason' => 'setOverrideReason',
        'description' => 'setDescription',
        'external_id' => 'setExternalId',
        'gross_amount' => 'setGrossAmount',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'linked_space_id' => 'setLinkedSpaceId',
        'created_by' => 'setCreatedBy',
        'failure_reason' => 'setFailureReason',
        'fulfilled_by' => 'setFulfilledBy',
        'in_store_pickup' => 'setInStorePickup',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'tracking_number' => 'setTrackingNumber',
        'failed_on' => 'setFailedOn',
        'overridden_on' => 'setOverriddenOn',
        'fulfilled_on' => 'setFulfilledOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion' => 'getCompletion',
        'overridden_by' => 'getOverriddenBy',
        'override_reason' => 'getOverrideReason',
        'description' => 'getDescription',
        'external_id' => 'getExternalId',
        'gross_amount' => 'getGrossAmount',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'linked_space_id' => 'getLinkedSpaceId',
        'created_by' => 'getCreatedBy',
        'failure_reason' => 'getFailureReason',
        'fulfilled_by' => 'getFulfilledBy',
        'in_store_pickup' => 'getInStorePickup',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'tracking_number' => 'getTrackingNumber',
        'failed_on' => 'getFailedOn',
        'overridden_on' => 'getOverriddenOn',
        'fulfilled_on' => 'getFulfilledOn'
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
        $this->setIfExists('completion', $data ?? [], null);
        $this->setIfExists('overridden_by', $data ?? [], null);
        $this->setIfExists('override_reason', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('gross_amount', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('fulfilled_by', $data ?? [], null);
        $this->setIfExists('in_store_pickup', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
        $this->setIfExists('overridden_on', $data ?? [], null);
        $this->setIfExists('fulfilled_on', $data ?? [], null);
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
     * Gets completion
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletion|null
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletion|null $completion completion
     *
     * @return self
     */
    public function setCompletion($completion)
    {
        if (is_null($completion)) {
            throw new \InvalidArgumentException('non-nullable completion cannot be null');
        }
        $this->container['completion'] = $completion;

        return $this;
    }

    /**
     * Gets overridden_by
     *
     * @return int|null
     */
    public function getOverriddenBy()
    {
        return $this->container['overridden_by'];
    }

    /**
     * Sets overridden_by
     *
     * @param int|null $overridden_by overridden_by
     *
     * @return self
     */
    public function setOverriddenBy($overridden_by)
    {
        if (is_null($overridden_by)) {
            throw new \InvalidArgumentException('non-nullable overridden_by cannot be null');
        }
        $this->container['overridden_by'] = $overridden_by;

        return $this;
    }

    /**
     * Gets override_reason
     *
     * @return string|null
     */
    public function getOverrideReason()
    {
        return $this->container['override_reason'];
    }

    /**
     * Sets override_reason
     *
     * @param string|null $override_reason override_reason
     *
     * @return self
     */
    public function setOverrideReason($override_reason)
    {
        if (is_null($override_reason)) {
            throw new \InvalidArgumentException('non-nullable override_reason cannot be null');
        }
        $this->container['override_reason'] = $override_reason;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
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
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id A client-generated nonce which uniquely identifies some action to be executed. Subsequent requests with the same external ID do not execute the action again, but return the original result.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return float|null
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param float|null $gross_amount gross_amount
     *
     * @return self
     */
    public function setGrossAmount($gross_amount)
    {
        if (is_null($gross_amount)) {
            throw new \InvalidArgumentException('non-nullable gross_amount cannot be null');
        }
        $this->container['gross_amount'] = $gross_amount;

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
     * Gets created_by
     *
     * @return int|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string|null
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string|null $failure_reason failure_reason
     *
     * @return self
     */
    public function setFailureReason($failure_reason)
    {
        if (is_null($failure_reason)) {
            throw new \InvalidArgumentException('non-nullable failure_reason cannot be null');
        }
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets fulfilled_by
     *
     * @return int|null
     */
    public function getFulfilledBy()
    {
        return $this->container['fulfilled_by'];
    }

    /**
     * Sets fulfilled_by
     *
     * @param int|null $fulfilled_by fulfilled_by
     *
     * @return self
     */
    public function setFulfilledBy($fulfilled_by)
    {
        if (is_null($fulfilled_by)) {
            throw new \InvalidArgumentException('non-nullable fulfilled_by cannot be null');
        }
        $this->container['fulfilled_by'] = $fulfilled_by;

        return $this;
    }

    /**
     * Gets in_store_pickup
     *
     * @return bool|null
     */
    public function getInStorePickup()
    {
        return $this->container['in_store_pickup'];
    }

    /**
     * Sets in_store_pickup
     *
     * @param bool|null $in_store_pickup in_store_pickup
     *
     * @return self
     */
    public function setInStorePickup($in_store_pickup)
    {
        if (is_null($in_store_pickup)) {
            throw new \InvalidArgumentException('non-nullable in_store_pickup cannot be null');
        }
        $this->container['in_store_pickup'] = $in_store_pickup;

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
     * @return \PostFinanceCheckout\Sdk\Model\FulfillmentState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\FulfillmentState|null $state state
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
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number tracking_number
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

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
     * Gets overridden_on
     *
     * @return \DateTime|null
     */
    public function getOverriddenOn()
    {
        return $this->container['overridden_on'];
    }

    /**
     * Sets overridden_on
     *
     * @param \DateTime|null $overridden_on overridden_on
     *
     * @return self
     */
    public function setOverriddenOn($overridden_on)
    {
        if (is_null($overridden_on)) {
            throw new \InvalidArgumentException('non-nullable overridden_on cannot be null');
        }
        $this->container['overridden_on'] = $overridden_on;

        return $this;
    }

    /**
     * Gets fulfilled_on
     *
     * @return \DateTime|null
     */
    public function getFulfilledOn()
    {
        return $this->container['fulfilled_on'];
    }

    /**
     * Sets fulfilled_on
     *
     * @param \DateTime|null $fulfilled_on fulfilled_on
     *
     * @return self
     */
    public function setFulfilledOn($fulfilled_on)
    {
        if (is_null($fulfilled_on)) {
            throw new \InvalidArgumentException('non-nullable fulfilled_on cannot be null');
        }
        $this->container['fulfilled_on'] = $fulfilled_on;

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


