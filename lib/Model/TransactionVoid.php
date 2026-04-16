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
 * TransactionVoid model
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
class TransactionVoid implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionVoid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'planned_purge_date' => '\DateTime',
        'language' => 'string',
        'space_view_id' => 'int',
        'created_on' => '\DateTime',
        'version' => 'int',
        'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
        'mode' => '\PostFinanceCheckout\Sdk\Model\TransactionVoidMode',
        'linked_space_id' => 'int',
        'timeout_on' => '\DateTime',
        'created_by' => 'int',
        'next_update_on' => '\DateTime',
        'failure_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'succeeded_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\TransactionVoidState',
        'linked_transaction' => 'int',
        'failed_on' => '\DateTime',
        'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction',
        'processor_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'planned_purge_date' => 'date-time',
        'language' => null,
        'space_view_id' => 'int64',
        'created_on' => 'date-time',
        'version' => 'int32',
        'labels' => null,
        'mode' => null,
        'linked_space_id' => 'int64',
        'timeout_on' => 'date-time',
        'created_by' => 'int64',
        'next_update_on' => 'date-time',
        'failure_reason' => null,
        'succeeded_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'failed_on' => 'date-time',
        'transaction' => null,
        'processor_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'planned_purge_date' => false,
        'language' => false,
        'space_view_id' => false,
        'created_on' => false,
        'version' => false,
        'labels' => false,
        'mode' => false,
        'linked_space_id' => false,
        'timeout_on' => false,
        'created_by' => false,
        'next_update_on' => false,
        'failure_reason' => false,
        'succeeded_on' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'failed_on' => false,
        'transaction' => false,
        'processor_reference' => false
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
        'planned_purge_date' => 'plannedPurgeDate',
        'language' => 'language',
        'space_view_id' => 'spaceViewId',
        'created_on' => 'createdOn',
        'version' => 'version',
        'labels' => 'labels',
        'mode' => 'mode',
        'linked_space_id' => 'linkedSpaceId',
        'timeout_on' => 'timeoutOn',
        'created_by' => 'createdBy',
        'next_update_on' => 'nextUpdateOn',
        'failure_reason' => 'failureReason',
        'succeeded_on' => 'succeededOn',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'failed_on' => 'failedOn',
        'transaction' => 'transaction',
        'processor_reference' => 'processorReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planned_purge_date' => 'setPlannedPurgeDate',
        'language' => 'setLanguage',
        'space_view_id' => 'setSpaceViewId',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'labels' => 'setLabels',
        'mode' => 'setMode',
        'linked_space_id' => 'setLinkedSpaceId',
        'timeout_on' => 'setTimeoutOn',
        'created_by' => 'setCreatedBy',
        'next_update_on' => 'setNextUpdateOn',
        'failure_reason' => 'setFailureReason',
        'succeeded_on' => 'setSucceededOn',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'failed_on' => 'setFailedOn',
        'transaction' => 'setTransaction',
        'processor_reference' => 'setProcessorReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planned_purge_date' => 'getPlannedPurgeDate',
        'language' => 'getLanguage',
        'space_view_id' => 'getSpaceViewId',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'labels' => 'getLabels',
        'mode' => 'getMode',
        'linked_space_id' => 'getLinkedSpaceId',
        'timeout_on' => 'getTimeoutOn',
        'created_by' => 'getCreatedBy',
        'next_update_on' => 'getNextUpdateOn',
        'failure_reason' => 'getFailureReason',
        'succeeded_on' => 'getSucceededOn',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'failed_on' => 'getFailedOn',
        'transaction' => 'getTransaction',
        'processor_reference' => 'getProcessorReference'
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
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('timeout_on', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('next_update_on', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('succeeded_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('processor_reference', $data ?? [], null);
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
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language that is linked to the object.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets space_view_id
     *
     * @return int|null
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int|null $space_view_id The ID of the space view this object is linked to.
     *
     * @return self
     */
    public function setSpaceViewId($space_view_id)
    {
        if (is_null($space_view_id)) {
            throw new \InvalidArgumentException('non-nullable space_view_id cannot be null');
        }
        $this->container['space_view_id'] = $space_view_id;

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
     * Gets labels
     *
     * @return \PostFinanceCheckout\Sdk\Model\Label[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \PostFinanceCheckout\Sdk\Model\Label[]|null $labels The labels providing additional information about the object.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }


        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionVoidMode|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionVoidMode|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

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
     * @param \DateTime|null $timeout_on The date and time when the object will expire.
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
     * @param int|null $created_by The ID of the user the transaction void was created by.
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
     * Gets next_update_on
     *
     * @return \DateTime|null
     */
    public function getNextUpdateOn()
    {
        return $this->container['next_update_on'];
    }

    /**
     * Sets next_update_on
     *
     * @param \DateTime|null $next_update_on The date and time when the next update of the object's state is planned.
     *
     * @return self
     */
    public function setNextUpdateOn($next_update_on)
    {
        if (is_null($next_update_on)) {
            throw new \InvalidArgumentException('non-nullable next_update_on cannot be null');
        }
        $this->container['next_update_on'] = $next_update_on;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return \PostFinanceCheckout\Sdk\Model\FailureReason|null
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \PostFinanceCheckout\Sdk\Model\FailureReason|null $failure_reason failure_reason
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
     * @param \DateTime|null $succeeded_on The date and time when the transaction void succeeded.
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
     * @return \PostFinanceCheckout\Sdk\Model\TransactionVoidState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionVoidState|null $state state
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
     * @param \DateTime|null $failed_on The date and time when the transaction void failed.
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
     * Gets processor_reference
     *
     * @return string|null
     */
    public function getProcessorReference()
    {
        return $this->container['processor_reference'];
    }

    /**
     * Sets processor_reference
     *
     * @param string|null $processor_reference The reference ID provided by the payment processor, used to trace the void through the external payment system.
     *
     * @return self
     */
    public function setProcessorReference($processor_reference)
    {
        if (is_null($processor_reference)) {
            throw new \InvalidArgumentException('non-nullable processor_reference cannot be null');
        }
        $this->container['processor_reference'] = $processor_reference;

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


