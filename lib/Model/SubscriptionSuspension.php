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
 * SubscriptionSuspension model
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
class SubscriptionSuspension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionSuspension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'effective_end_date' => '\DateTime',
        'note' => 'string',
        'reason' => '\PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionReason',
        'period_bill' => 'int',
        'planned_purge_date' => '\DateTime',
        'language' => 'string',
        'subscription' => '\PostFinanceCheckout\Sdk\Model\Subscription',
        'created_on' => '\DateTime',
        'version' => 'int',
        'planned_end_date' => '\DateTime',
        'linked_space_id' => 'int',
        'end_action' => '\PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionAction',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'effective_end_date' => 'date-time',
        'note' => null,
        'reason' => null,
        'period_bill' => 'int64',
        'planned_purge_date' => 'date-time',
        'language' => null,
        'subscription' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'planned_end_date' => 'date-time',
        'linked_space_id' => 'int64',
        'end_action' => null,
        'id' => 'int64',
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'effective_end_date' => false,
        'note' => false,
        'reason' => false,
        'period_bill' => false,
        'planned_purge_date' => false,
        'language' => false,
        'subscription' => false,
        'created_on' => false,
        'version' => false,
        'planned_end_date' => false,
        'linked_space_id' => false,
        'end_action' => false,
        'id' => false,
        'state' => false
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
        'effective_end_date' => 'effectiveEndDate',
        'note' => 'note',
        'reason' => 'reason',
        'period_bill' => 'periodBill',
        'planned_purge_date' => 'plannedPurgeDate',
        'language' => 'language',
        'subscription' => 'subscription',
        'created_on' => 'createdOn',
        'version' => 'version',
        'planned_end_date' => 'plannedEndDate',
        'linked_space_id' => 'linkedSpaceId',
        'end_action' => 'endAction',
        'id' => 'id',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effective_end_date' => 'setEffectiveEndDate',
        'note' => 'setNote',
        'reason' => 'setReason',
        'period_bill' => 'setPeriodBill',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'language' => 'setLanguage',
        'subscription' => 'setSubscription',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'planned_end_date' => 'setPlannedEndDate',
        'linked_space_id' => 'setLinkedSpaceId',
        'end_action' => 'setEndAction',
        'id' => 'setId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effective_end_date' => 'getEffectiveEndDate',
        'note' => 'getNote',
        'reason' => 'getReason',
        'period_bill' => 'getPeriodBill',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'language' => 'getLanguage',
        'subscription' => 'getSubscription',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'planned_end_date' => 'getPlannedEndDate',
        'linked_space_id' => 'getLinkedSpaceId',
        'end_action' => 'getEndAction',
        'id' => 'getId',
        'state' => 'getState'
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
        $this->setIfExists('effective_end_date', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('period_bill', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('planned_end_date', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('end_action', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 300)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 300.";
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
     * Gets effective_end_date
     *
     * @return \DateTime|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effective_end_date'];
    }

    /**
     * Sets effective_end_date
     *
     * @param \DateTime|null $effective_end_date The date and time when the suspension ended.
     *
     * @return self
     */
    public function setEffectiveEndDate($effective_end_date)
    {
        if (is_null($effective_end_date)) {
            throw new \InvalidArgumentException('non-nullable effective_end_date cannot be null');
        }
        $this->container['effective_end_date'] = $effective_end_date;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A note that contains details about the suspension. It is not disclosed to the subscriber.
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        if ((mb_strlen($note) > 300)) {
            throw new \InvalidArgumentException('invalid length for $note when calling SubscriptionSuspension., must be smaller than or equal to 300.');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionReason|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets period_bill
     *
     * @return int|null
     */
    public function getPeriodBill()
    {
        return $this->container['period_bill'];
    }

    /**
     * Sets period_bill
     *
     * @param int|null $period_bill The period bill that led to the suspension of the subscription.
     *
     * @return self
     */
    public function setPeriodBill($period_bill)
    {
        if (is_null($period_bill)) {
            throw new \InvalidArgumentException('non-nullable period_bill cannot be null');
        }
        $this->container['period_bill'] = $period_bill;

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
     * Gets subscription
     *
     * @return \PostFinanceCheckout\Sdk\Model\Subscription|null
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \PostFinanceCheckout\Sdk\Model\Subscription|null $subscription subscription
     *
     * @return self
     */
    public function setSubscription($subscription)
    {
        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }
        $this->container['subscription'] = $subscription;

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
     * Gets planned_end_date
     *
     * @return \DateTime|null
     */
    public function getPlannedEndDate()
    {
        return $this->container['planned_end_date'];
    }

    /**
     * Sets planned_end_date
     *
     * @param \DateTime|null $planned_end_date The date and time when the suspension is planned to end.
     *
     * @return self
     */
    public function setPlannedEndDate($planned_end_date)
    {
        if (is_null($planned_end_date)) {
            throw new \InvalidArgumentException('non-nullable planned_end_date cannot be null');
        }
        $this->container['planned_end_date'] = $planned_end_date;

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
     * Gets end_action
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionAction|null
     */
    public function getEndAction()
    {
        return $this->container['end_action'];
    }

    /**
     * Sets end_action
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionAction|null $end_action end_action
     *
     * @return self
     */
    public function setEndAction($end_action)
    {
        if (is_null($end_action)) {
            throw new \InvalidArgumentException('non-nullable end_action cannot be null');
        }
        $this->container['end_action'] = $end_action;

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
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionSuspensionState|null $state state
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


