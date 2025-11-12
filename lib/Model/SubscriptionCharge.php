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
 * SubscriptionCharge model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionCharge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'discarded_on' => '\DateTime',
        'planned_execution_date' => '\DateTime',
        'processing_type' => '\PostFinanceCheckout\Sdk\Model\SubscriptionChargeProcessingType',
        'ledger_entries' => '\PostFinanceCheckout\Sdk\Model\SubscriptionLedgerEntry[]',
        'discarded_by' => 'int',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'success_url' => 'string',
        'language' => 'string',
        'subscription' => '\PostFinanceCheckout\Sdk\Model\Subscription',
        'type' => '\PostFinanceCheckout\Sdk\Model\SubscriptionChargeType',
        'created_on' => '\DateTime',
        'version' => 'int',
        'reference' => 'string',
        'linked_space_id' => 'int',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionChargeState',
        'failed_on' => '\DateTime',
        'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction',
        'failed_url' => 'string',
        'succeed_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'discarded_on' => 'date-time',
        'planned_execution_date' => 'date-time',
        'processing_type' => null,
        'ledger_entries' => null,
        'discarded_by' => 'int64',
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'success_url' => null,
        'language' => null,
        'subscription' => null,
        'type' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'reference' => null,
        'linked_space_id' => 'int64',
        'id' => 'int64',
        'state' => null,
        'failed_on' => 'date-time',
        'transaction' => null,
        'failed_url' => null,
        'succeed_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'discarded_on' => false,
        'planned_execution_date' => false,
        'processing_type' => false,
        'ledger_entries' => false,
        'discarded_by' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'success_url' => false,
        'language' => false,
        'subscription' => false,
        'type' => false,
        'created_on' => false,
        'version' => false,
        'reference' => false,
        'linked_space_id' => false,
        'id' => false,
        'state' => false,
        'failed_on' => false,
        'transaction' => false,
        'failed_url' => false,
        'succeed_on' => false
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
        'discarded_on' => 'discardedOn',
        'planned_execution_date' => 'plannedExecutionDate',
        'processing_type' => 'processingType',
        'ledger_entries' => 'ledgerEntries',
        'discarded_by' => 'discardedBy',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'success_url' => 'successUrl',
        'language' => 'language',
        'subscription' => 'subscription',
        'type' => 'type',
        'created_on' => 'createdOn',
        'version' => 'version',
        'reference' => 'reference',
        'linked_space_id' => 'linkedSpaceId',
        'id' => 'id',
        'state' => 'state',
        'failed_on' => 'failedOn',
        'transaction' => 'transaction',
        'failed_url' => 'failedUrl',
        'succeed_on' => 'succeedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discarded_on' => 'setDiscardedOn',
        'planned_execution_date' => 'setPlannedExecutionDate',
        'processing_type' => 'setProcessingType',
        'ledger_entries' => 'setLedgerEntries',
        'discarded_by' => 'setDiscardedBy',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'success_url' => 'setSuccessUrl',
        'language' => 'setLanguage',
        'subscription' => 'setSubscription',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'reference' => 'setReference',
        'linked_space_id' => 'setLinkedSpaceId',
        'id' => 'setId',
        'state' => 'setState',
        'failed_on' => 'setFailedOn',
        'transaction' => 'setTransaction',
        'failed_url' => 'setFailedUrl',
        'succeed_on' => 'setSucceedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discarded_on' => 'getDiscardedOn',
        'planned_execution_date' => 'getPlannedExecutionDate',
        'processing_type' => 'getProcessingType',
        'ledger_entries' => 'getLedgerEntries',
        'discarded_by' => 'getDiscardedBy',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'success_url' => 'getSuccessUrl',
        'language' => 'getLanguage',
        'subscription' => 'getSubscription',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'reference' => 'getReference',
        'linked_space_id' => 'getLinkedSpaceId',
        'id' => 'getId',
        'state' => 'getState',
        'failed_on' => 'getFailedOn',
        'transaction' => 'getTransaction',
        'failed_url' => 'getFailedUrl',
        'succeed_on' => 'getSucceedOn'
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
        $this->setIfExists('discarded_on', $data ?? [], null);
        $this->setIfExists('planned_execution_date', $data ?? [], null);
        $this->setIfExists('processing_type', $data ?? [], null);
        $this->setIfExists('ledger_entries', $data ?? [], null);
        $this->setIfExists('discarded_by', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('failed_url', $data ?? [], null);
        $this->setIfExists('succeed_on', $data ?? [], null);
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

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['reference'])) {
            $invalidProperties[] = "invalid value for 'reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be bigger than or equal to 9.";
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
     * Gets discarded_on
     *
     * @return \DateTime|null
     */
    public function getDiscardedOn()
    {
        return $this->container['discarded_on'];
    }

    /**
     * Sets discarded_on
     *
     * @param \DateTime|null $discarded_on The date and time when the charge was discarded.
     *
     * @return self
     */
    public function setDiscardedOn($discarded_on)
    {
        if (is_null($discarded_on)) {
            throw new \InvalidArgumentException('non-nullable discarded_on cannot be null');
        }
        $this->container['discarded_on'] = $discarded_on;

        return $this;
    }

    /**
     * Gets planned_execution_date
     *
     * @return \DateTime|null
     */
    public function getPlannedExecutionDate()
    {
        return $this->container['planned_execution_date'];
    }

    /**
     * Sets planned_execution_date
     *
     * @param \DateTime|null $planned_execution_date The date and time when the execution of the charge is planned.
     *
     * @return self
     */
    public function setPlannedExecutionDate($planned_execution_date)
    {
        if (is_null($planned_execution_date)) {
            throw new \InvalidArgumentException('non-nullable planned_execution_date cannot be null');
        }
        $this->container['planned_execution_date'] = $planned_execution_date;

        return $this;
    }

    /**
     * Gets processing_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionChargeProcessingType|null
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionChargeProcessingType|null $processing_type processing_type
     *
     * @return self
     */
    public function setProcessingType($processing_type)
    {
        if (is_null($processing_type)) {
            throw new \InvalidArgumentException('non-nullable processing_type cannot be null');
        }
        $this->container['processing_type'] = $processing_type;

        return $this;
    }

    /**
     * Gets ledger_entries
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionLedgerEntry[]|null
     */
    public function getLedgerEntries()
    {
        return $this->container['ledger_entries'];
    }

    /**
     * Sets ledger_entries
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionLedgerEntry[]|null $ledger_entries The ledger entries that belong to the charge.
     *
     * @return self
     */
    public function setLedgerEntries($ledger_entries)
    {
        if (is_null($ledger_entries)) {
            throw new \InvalidArgumentException('non-nullable ledger_entries cannot be null');
        }


        $this->container['ledger_entries'] = $ledger_entries;

        return $this;
    }

    /**
     * Gets discarded_by
     *
     * @return int|null
     */
    public function getDiscardedBy()
    {
        return $this->container['discarded_by'];
    }

    /**
     * Sets discarded_by
     *
     * @param int|null $discarded_by The ID of the user the charge was discarded by.
     *
     * @return self
     */
    public function setDiscardedBy($discarded_by)
    {
        if (is_null($discarded_by)) {
            throw new \InvalidArgumentException('non-nullable discarded_by cannot be null');
        }
        $this->container['discarded_by'] = $discarded_by;

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
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url The URL to redirect the customer back to after they successfully authenticated their payment.
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        if ((mb_strlen($success_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionCharge., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionCharge., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

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
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionChargeType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionChargeType|null $type type
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
     * @param \DateTime|null $created_on The date and time when the charge was created.
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
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The merchant's reference used to identify the charge.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionCharge., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($reference)))) {
            throw new \InvalidArgumentException("invalid value for \$reference when calling SubscriptionCharge., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['reference'] = $reference;

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
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionChargeState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionChargeState|null $state state
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
     * @param \DateTime|null $failed_on The date and time when the charge failed.
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
     * Gets failed_url
     *
     * @return string|null
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string|null $failed_url The URL to redirect the customer back to after they canceled or failed to authenticated their payment.
     *
     * @return self
     */
    public function setFailedUrl($failed_url)
    {
        if (is_null($failed_url)) {
            throw new \InvalidArgumentException('non-nullable failed_url cannot be null');
        }
        if ((mb_strlen($failed_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionCharge., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionCharge., must be bigger than or equal to 9.');
        }

        $this->container['failed_url'] = $failed_url;

        return $this;
    }

    /**
     * Gets succeed_on
     *
     * @return \DateTime|null
     */
    public function getSucceedOn()
    {
        return $this->container['succeed_on'];
    }

    /**
     * Sets succeed_on
     *
     * @param \DateTime|null $succeed_on The date and time when the charge succeeded.
     *
     * @return self
     */
    public function setSucceedOn($succeed_on)
    {
        if (is_null($succeed_on)) {
            throw new \InvalidArgumentException('non-nullable succeed_on cannot be null');
        }
        $this->container['succeed_on'] = $succeed_on;

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


