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
 * PaymentContract model
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
class PaymentContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract_type' => '\PostFinanceCheckout\Sdk\Model\PaymentContractType',
        'terminated_by' => 'int',
        'external_id' => 'string',
        'created_on' => '\DateTime',
        'version' => 'int',
        'terminated_on' => '\DateTime',
        'activated_on' => '\DateTime',
        'start_terminating_on' => '\DateTime',
        'created_by' => 'int',
        'contract_identifier' => 'string',
        'rejected_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\PaymentContractState',
        'rejection_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'account' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contract_type' => null,
        'terminated_by' => 'int64',
        'external_id' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'terminated_on' => 'date-time',
        'activated_on' => 'date-time',
        'start_terminating_on' => 'date-time',
        'created_by' => 'int64',
        'contract_identifier' => null,
        'rejected_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'rejection_reason' => null,
        'account' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contract_type' => false,
        'terminated_by' => false,
        'external_id' => false,
        'created_on' => false,
        'version' => false,
        'terminated_on' => false,
        'activated_on' => false,
        'start_terminating_on' => false,
        'created_by' => false,
        'contract_identifier' => false,
        'rejected_on' => false,
        'id' => false,
        'state' => false,
        'rejection_reason' => false,
        'account' => false
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
        'contract_type' => 'contractType',
        'terminated_by' => 'terminatedBy',
        'external_id' => 'externalId',
        'created_on' => 'createdOn',
        'version' => 'version',
        'terminated_on' => 'terminatedOn',
        'activated_on' => 'activatedOn',
        'start_terminating_on' => 'startTerminatingOn',
        'created_by' => 'createdBy',
        'contract_identifier' => 'contractIdentifier',
        'rejected_on' => 'rejectedOn',
        'id' => 'id',
        'state' => 'state',
        'rejection_reason' => 'rejectionReason',
        'account' => 'account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_type' => 'setContractType',
        'terminated_by' => 'setTerminatedBy',
        'external_id' => 'setExternalId',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'terminated_on' => 'setTerminatedOn',
        'activated_on' => 'setActivatedOn',
        'start_terminating_on' => 'setStartTerminatingOn',
        'created_by' => 'setCreatedBy',
        'contract_identifier' => 'setContractIdentifier',
        'rejected_on' => 'setRejectedOn',
        'id' => 'setId',
        'state' => 'setState',
        'rejection_reason' => 'setRejectionReason',
        'account' => 'setAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_type' => 'getContractType',
        'terminated_by' => 'getTerminatedBy',
        'external_id' => 'getExternalId',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'terminated_on' => 'getTerminatedOn',
        'activated_on' => 'getActivatedOn',
        'start_terminating_on' => 'getStartTerminatingOn',
        'created_by' => 'getCreatedBy',
        'contract_identifier' => 'getContractIdentifier',
        'rejected_on' => 'getRejectedOn',
        'id' => 'getId',
        'state' => 'getState',
        'rejection_reason' => 'getRejectionReason',
        'account' => 'getAccount'
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
        $this->setIfExists('contract_type', $data ?? [], null);
        $this->setIfExists('terminated_by', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('terminated_on', $data ?? [], null);
        $this->setIfExists('activated_on', $data ?? [], null);
        $this->setIfExists('start_terminating_on', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('contract_identifier', $data ?? [], null);
        $this->setIfExists('rejected_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('rejection_reason', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
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
     * Gets contract_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentContractType|null
     */
    public function getContractType()
    {
        return $this->container['contract_type'];
    }

    /**
     * Sets contract_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentContractType|null $contract_type contract_type
     *
     * @return self
     */
    public function setContractType($contract_type)
    {
        if (is_null($contract_type)) {
            throw new \InvalidArgumentException('non-nullable contract_type cannot be null');
        }
        $this->container['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Gets terminated_by
     *
     * @return int|null
     */
    public function getTerminatedBy()
    {
        return $this->container['terminated_by'];
    }

    /**
     * Sets terminated_by
     *
     * @param int|null $terminated_by The ID of the user the contract was terminated by.
     *
     * @return self
     */
    public function setTerminatedBy($terminated_by)
    {
        if (is_null($terminated_by)) {
            throw new \InvalidArgumentException('non-nullable terminated_by cannot be null');
        }
        $this->container['terminated_by'] = $terminated_by;

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
     * Gets terminated_on
     *
     * @return \DateTime|null
     */
    public function getTerminatedOn()
    {
        return $this->container['terminated_on'];
    }

    /**
     * Sets terminated_on
     *
     * @param \DateTime|null $terminated_on The date and time when the contract was terminated.
     *
     * @return self
     */
    public function setTerminatedOn($terminated_on)
    {
        if (is_null($terminated_on)) {
            throw new \InvalidArgumentException('non-nullable terminated_on cannot be null');
        }
        $this->container['terminated_on'] = $terminated_on;

        return $this;
    }

    /**
     * Gets activated_on
     *
     * @return \DateTime|null
     */
    public function getActivatedOn()
    {
        return $this->container['activated_on'];
    }

    /**
     * Sets activated_on
     *
     * @param \DateTime|null $activated_on The date and time when the contract was activated.
     *
     * @return self
     */
    public function setActivatedOn($activated_on)
    {
        if (is_null($activated_on)) {
            throw new \InvalidArgumentException('non-nullable activated_on cannot be null');
        }
        $this->container['activated_on'] = $activated_on;

        return $this;
    }

    /**
     * Gets start_terminating_on
     *
     * @return \DateTime|null
     */
    public function getStartTerminatingOn()
    {
        return $this->container['start_terminating_on'];
    }

    /**
     * Sets start_terminating_on
     *
     * @param \DateTime|null $start_terminating_on The date and time when the termination process of the contract was started.
     *
     * @return self
     */
    public function setStartTerminatingOn($start_terminating_on)
    {
        if (is_null($start_terminating_on)) {
            throw new \InvalidArgumentException('non-nullable start_terminating_on cannot be null');
        }
        $this->container['start_terminating_on'] = $start_terminating_on;

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
     * @param int|null $created_by The ID of the user the contract was created by.
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
     * Gets contract_identifier
     *
     * @return string|null
     */
    public function getContractIdentifier()
    {
        return $this->container['contract_identifier'];
    }

    /**
     * Sets contract_identifier
     *
     * @param string|null $contract_identifier The identifier of the contract.
     *
     * @return self
     */
    public function setContractIdentifier($contract_identifier)
    {
        if (is_null($contract_identifier)) {
            throw new \InvalidArgumentException('non-nullable contract_identifier cannot be null');
        }
        $this->container['contract_identifier'] = $contract_identifier;

        return $this;
    }

    /**
     * Gets rejected_on
     *
     * @return \DateTime|null
     */
    public function getRejectedOn()
    {
        return $this->container['rejected_on'];
    }

    /**
     * Sets rejected_on
     *
     * @param \DateTime|null $rejected_on The date and time when the contract was rejected.
     *
     * @return self
     */
    public function setRejectedOn($rejected_on)
    {
        if (is_null($rejected_on)) {
            throw new \InvalidArgumentException('non-nullable rejected_on cannot be null');
        }
        $this->container['rejected_on'] = $rejected_on;

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
     * @return \PostFinanceCheckout\Sdk\Model\PaymentContractState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentContractState|null $state state
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
     * Gets rejection_reason
     *
     * @return \PostFinanceCheckout\Sdk\Model\FailureReason|null
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param \PostFinanceCheckout\Sdk\Model\FailureReason|null $rejection_reason rejection_reason
     *
     * @return self
     */
    public function setRejectionReason($rejection_reason)
    {
        if (is_null($rejection_reason)) {
            throw new \InvalidArgumentException('non-nullable rejection_reason cannot be null');
        }
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets account
     *
     * @return int|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param int|null $account This account that the contract belongs to.
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

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


