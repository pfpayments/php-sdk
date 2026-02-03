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
 * DeliveryIndication model
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
class DeliveryIndication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryIndication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'completion' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletion',
        'planned_purge_date' => '\DateTime',
        'automatic_decision_reason' => '\PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason',
        'automatically_decided_on' => '\DateTime',
        'created_on' => '\DateTime',
        'linked_space_id' => 'int',
        'manually_decided_by' => 'int',
        'timeout_on' => '\DateTime',
        'manual_decision_timeout_on' => '\DateTime',
        'manually_decided_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\DeliveryIndicationState',
        'linked_transaction' => 'int',
        'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction'
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
        'planned_purge_date' => 'date-time',
        'automatic_decision_reason' => null,
        'automatically_decided_on' => 'date-time',
        'created_on' => 'date-time',
        'linked_space_id' => 'int64',
        'manually_decided_by' => 'int64',
        'timeout_on' => 'date-time',
        'manual_decision_timeout_on' => 'date-time',
        'manually_decided_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'transaction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'completion' => false,
        'planned_purge_date' => false,
        'automatic_decision_reason' => false,
        'automatically_decided_on' => false,
        'created_on' => false,
        'linked_space_id' => false,
        'manually_decided_by' => false,
        'timeout_on' => false,
        'manual_decision_timeout_on' => false,
        'manually_decided_on' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'transaction' => false
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
        'planned_purge_date' => 'plannedPurgeDate',
        'automatic_decision_reason' => 'automaticDecisionReason',
        'automatically_decided_on' => 'automaticallyDecidedOn',
        'created_on' => 'createdOn',
        'linked_space_id' => 'linkedSpaceId',
        'manually_decided_by' => 'manuallyDecidedBy',
        'timeout_on' => 'timeoutOn',
        'manual_decision_timeout_on' => 'manualDecisionTimeoutOn',
        'manually_decided_on' => 'manuallyDecidedOn',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'transaction' => 'transaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion' => 'setCompletion',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'automatic_decision_reason' => 'setAutomaticDecisionReason',
        'automatically_decided_on' => 'setAutomaticallyDecidedOn',
        'created_on' => 'setCreatedOn',
        'linked_space_id' => 'setLinkedSpaceId',
        'manually_decided_by' => 'setManuallyDecidedBy',
        'timeout_on' => 'setTimeoutOn',
        'manual_decision_timeout_on' => 'setManualDecisionTimeoutOn',
        'manually_decided_on' => 'setManuallyDecidedOn',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'transaction' => 'setTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion' => 'getCompletion',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'automatic_decision_reason' => 'getAutomaticDecisionReason',
        'automatically_decided_on' => 'getAutomaticallyDecidedOn',
        'created_on' => 'getCreatedOn',
        'linked_space_id' => 'getLinkedSpaceId',
        'manually_decided_by' => 'getManuallyDecidedBy',
        'timeout_on' => 'getTimeoutOn',
        'manual_decision_timeout_on' => 'getManualDecisionTimeoutOn',
        'manually_decided_on' => 'getManuallyDecidedOn',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'transaction' => 'getTransaction'
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
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('automatic_decision_reason', $data ?? [], null);
        $this->setIfExists('automatically_decided_on', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('manually_decided_by', $data ?? [], null);
        $this->setIfExists('timeout_on', $data ?? [], null);
        $this->setIfExists('manual_decision_timeout_on', $data ?? [], null);
        $this->setIfExists('manually_decided_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
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
     * Gets automatic_decision_reason
     *
     * @return \PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason|null
     */
    public function getAutomaticDecisionReason()
    {
        return $this->container['automatic_decision_reason'];
    }

    /**
     * Sets automatic_decision_reason
     *
     * @param \PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason|null $automatic_decision_reason automatic_decision_reason
     *
     * @return self
     */
    public function setAutomaticDecisionReason($automatic_decision_reason)
    {
        if (is_null($automatic_decision_reason)) {
            throw new \InvalidArgumentException('non-nullable automatic_decision_reason cannot be null');
        }
        $this->container['automatic_decision_reason'] = $automatic_decision_reason;

        return $this;
    }

    /**
     * Gets automatically_decided_on
     *
     * @return \DateTime|null
     */
    public function getAutomaticallyDecidedOn()
    {
        return $this->container['automatically_decided_on'];
    }

    /**
     * Sets automatically_decided_on
     *
     * @param \DateTime|null $automatically_decided_on The date and time when an automatic decision was made.
     *
     * @return self
     */
    public function setAutomaticallyDecidedOn($automatically_decided_on)
    {
        if (is_null($automatically_decided_on)) {
            throw new \InvalidArgumentException('non-nullable automatically_decided_on cannot be null');
        }
        $this->container['automatically_decided_on'] = $automatically_decided_on;

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
     * Gets manually_decided_by
     *
     * @return int|null
     */
    public function getManuallyDecidedBy()
    {
        return $this->container['manually_decided_by'];
    }

    /**
     * Sets manually_decided_by
     *
     * @param int|null $manually_decided_by The ID of the user who manually decided the delivery indication's state.
     *
     * @return self
     */
    public function setManuallyDecidedBy($manually_decided_by)
    {
        if (is_null($manually_decided_by)) {
            throw new \InvalidArgumentException('non-nullable manually_decided_by cannot be null');
        }
        $this->container['manually_decided_by'] = $manually_decided_by;

        return $this;
    }

    /**
     * Gets timeout_on
     *
     * @return \DateTime|null
     */
    public function getTimeoutOn()
    {
        return $this->container['timeout_on'];
    }

    /**
     * Sets timeout_on
     *
     * @param \DateTime|null $timeout_on The date and time when the delivery indication will expire.
     *
     * @return self
     */
    public function setTimeoutOn($timeout_on)
    {
        if (is_null($timeout_on)) {
            throw new \InvalidArgumentException('non-nullable timeout_on cannot be null');
        }
        $this->container['timeout_on'] = $timeout_on;

        return $this;
    }

    /**
     * Gets manual_decision_timeout_on
     *
     * @return \DateTime|null
     */
    public function getManualDecisionTimeoutOn()
    {
        return $this->container['manual_decision_timeout_on'];
    }

    /**
     * Sets manual_decision_timeout_on
     *
     * @param \DateTime|null $manual_decision_timeout_on The date and time by which a decision must be made before the system automatically proceeds according to the connector's predefined settings.
     *
     * @return self
     */
    public function setManualDecisionTimeoutOn($manual_decision_timeout_on)
    {
        if (is_null($manual_decision_timeout_on)) {
            throw new \InvalidArgumentException('non-nullable manual_decision_timeout_on cannot be null');
        }
        $this->container['manual_decision_timeout_on'] = $manual_decision_timeout_on;

        return $this;
    }

    /**
     * Gets manually_decided_on
     *
     * @return \DateTime|null
     */
    public function getManuallyDecidedOn()
    {
        return $this->container['manually_decided_on'];
    }

    /**
     * Sets manually_decided_on
     *
     * @param \DateTime|null $manually_decided_on The date and time when a manual decision was made.
     *
     * @return self
     */
    public function setManuallyDecidedOn($manually_decided_on)
    {
        if (is_null($manually_decided_on)) {
            throw new \InvalidArgumentException('non-nullable manually_decided_on cannot be null');
        }
        $this->container['manually_decided_on'] = $manually_decided_on;

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
     * @return \PostFinanceCheckout\Sdk\Model\DeliveryIndicationState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\DeliveryIndicationState|null $state state
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
     * Gets transaction
     *
     * @return \PostFinanceCheckout\Sdk\Model\Transaction|null
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \PostFinanceCheckout\Sdk\Model\Transaction|null $transaction transaction
     *
     * @return self
     */
    public function setTransaction($transaction)
    {
        if (is_null($transaction)) {
            throw new \InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

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


