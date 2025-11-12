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
 * Subscription model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subscriber' => '\PostFinanceCheckout\Sdk\Model\Subscriber',
        'planned_purge_date' => '\DateTime',
        'terminated_by' => 'int',
        'description' => 'string',
        'language' => 'string',
        'initialized_on' => '\DateTime',
        'created_on' => '\DateTime',
        'version' => 'int',
        'token' => '\PostFinanceCheckout\Sdk\Model\Token',
        'reference' => 'string',
        'terminated_on' => '\DateTime',
        'linked_space_id' => 'int',
        'activated_on' => '\DateTime',
        'terminating_on' => '\DateTime',
        'current_product_version' => '\PostFinanceCheckout\Sdk\Model\SubscriptionProductVersion',
        'planned_termination_date' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionState',
        'affiliate' => '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
        'termination_scheduled_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subscriber' => null,
        'planned_purge_date' => 'date-time',
        'terminated_by' => 'int64',
        'description' => null,
        'language' => null,
        'initialized_on' => 'date-time',
        'created_on' => 'date-time',
        'version' => 'int32',
        'token' => null,
        'reference' => null,
        'terminated_on' => 'date-time',
        'linked_space_id' => 'int64',
        'activated_on' => 'date-time',
        'terminating_on' => 'date-time',
        'current_product_version' => null,
        'planned_termination_date' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'affiliate' => null,
        'termination_scheduled_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'subscriber' => false,
        'planned_purge_date' => false,
        'terminated_by' => false,
        'description' => false,
        'language' => false,
        'initialized_on' => false,
        'created_on' => false,
        'version' => false,
        'token' => false,
        'reference' => false,
        'terminated_on' => false,
        'linked_space_id' => false,
        'activated_on' => false,
        'terminating_on' => false,
        'current_product_version' => false,
        'planned_termination_date' => false,
        'id' => false,
        'state' => false,
        'affiliate' => false,
        'termination_scheduled_on' => false
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
        'subscriber' => 'subscriber',
        'planned_purge_date' => 'plannedPurgeDate',
        'terminated_by' => 'terminatedBy',
        'description' => 'description',
        'language' => 'language',
        'initialized_on' => 'initializedOn',
        'created_on' => 'createdOn',
        'version' => 'version',
        'token' => 'token',
        'reference' => 'reference',
        'terminated_on' => 'terminatedOn',
        'linked_space_id' => 'linkedSpaceId',
        'activated_on' => 'activatedOn',
        'terminating_on' => 'terminatingOn',
        'current_product_version' => 'currentProductVersion',
        'planned_termination_date' => 'plannedTerminationDate',
        'id' => 'id',
        'state' => 'state',
        'affiliate' => 'affiliate',
        'termination_scheduled_on' => 'terminationScheduledOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscriber' => 'setSubscriber',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'terminated_by' => 'setTerminatedBy',
        'description' => 'setDescription',
        'language' => 'setLanguage',
        'initialized_on' => 'setInitializedOn',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'token' => 'setToken',
        'reference' => 'setReference',
        'terminated_on' => 'setTerminatedOn',
        'linked_space_id' => 'setLinkedSpaceId',
        'activated_on' => 'setActivatedOn',
        'terminating_on' => 'setTerminatingOn',
        'current_product_version' => 'setCurrentProductVersion',
        'planned_termination_date' => 'setPlannedTerminationDate',
        'id' => 'setId',
        'state' => 'setState',
        'affiliate' => 'setAffiliate',
        'termination_scheduled_on' => 'setTerminationScheduledOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscriber' => 'getSubscriber',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'terminated_by' => 'getTerminatedBy',
        'description' => 'getDescription',
        'language' => 'getLanguage',
        'initialized_on' => 'getInitializedOn',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'token' => 'getToken',
        'reference' => 'getReference',
        'terminated_on' => 'getTerminatedOn',
        'linked_space_id' => 'getLinkedSpaceId',
        'activated_on' => 'getActivatedOn',
        'terminating_on' => 'getTerminatingOn',
        'current_product_version' => 'getCurrentProductVersion',
        'planned_termination_date' => 'getPlannedTerminationDate',
        'id' => 'getId',
        'state' => 'getState',
        'affiliate' => 'getAffiliate',
        'termination_scheduled_on' => 'getTerminationScheduledOn'
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
        $this->setIfExists('subscriber', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('terminated_by', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('initialized_on', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('terminated_on', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('activated_on', $data ?? [], null);
        $this->setIfExists('terminating_on', $data ?? [], null);
        $this->setIfExists('current_product_version', $data ?? [], null);
        $this->setIfExists('planned_termination_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('affiliate', $data ?? [], null);
        $this->setIfExists('termination_scheduled_on', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['reference'])) {
            $invalidProperties[] = "invalid value for 'reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
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
     * Gets subscriber
     *
     * @return \PostFinanceCheckout\Sdk\Model\Subscriber|null
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     *
     * @param \PostFinanceCheckout\Sdk\Model\Subscriber|null $subscriber subscriber
     *
     * @return self
     */
    public function setSubscriber($subscriber)
    {
        if (is_null($subscriber)) {
            throw new \InvalidArgumentException('non-nullable subscriber cannot be null');
        }
        $this->container['subscriber'] = $subscriber;

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
     * @param int|null $terminated_by The ID of the user the subscription was terminated by.
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
     * @param string|null $description A description used to identify the subscription.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Subscription., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

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
     * Gets initialized_on
     *
     * @return \DateTime|null
     */
    public function getInitializedOn()
    {
        return $this->container['initialized_on'];
    }

    /**
     * Sets initialized_on
     *
     * @param \DateTime|null $initialized_on The date and time when the subscription was initialized.
     *
     * @return self
     */
    public function setInitializedOn($initialized_on)
    {
        if (is_null($initialized_on)) {
            throw new \InvalidArgumentException('non-nullable initialized_on cannot be null');
        }
        $this->container['initialized_on'] = $initialized_on;

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
     * @param \DateTime|null $created_on The date and time when the subscription was created.
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
     * Gets token
     *
     * @return \PostFinanceCheckout\Sdk\Model\Token|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \PostFinanceCheckout\Sdk\Model\Token|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

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
     * @param string|null $reference The merchant's reference used to identify the subscription.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Subscription., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($reference)))) {
            throw new \InvalidArgumentException("invalid value for \$reference when calling Subscription., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['reference'] = $reference;

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
     * @param \DateTime|null $terminated_on The date and time when the subscription was terminated.
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
     * @param \DateTime|null $activated_on The date and time when the subscription was activate.
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
     * Gets terminating_on
     *
     * @return \DateTime|null
     */
    public function getTerminatingOn()
    {
        return $this->container['terminating_on'];
    }

    /**
     * Sets terminating_on
     *
     * @param \DateTime|null $terminating_on The date and time when the termination of the subscription started.
     *
     * @return self
     */
    public function setTerminatingOn($terminating_on)
    {
        if (is_null($terminating_on)) {
            throw new \InvalidArgumentException('non-nullable terminating_on cannot be null');
        }
        $this->container['terminating_on'] = $terminating_on;

        return $this;
    }

    /**
     * Gets current_product_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionProductVersion|null
     */
    public function getCurrentProductVersion()
    {
        return $this->container['current_product_version'];
    }

    /**
     * Sets current_product_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionProductVersion|null $current_product_version current_product_version
     *
     * @return self
     */
    public function setCurrentProductVersion($current_product_version)
    {
        if (is_null($current_product_version)) {
            throw new \InvalidArgumentException('non-nullable current_product_version cannot be null');
        }
        $this->container['current_product_version'] = $current_product_version;

        return $this;
    }

    /**
     * Gets planned_termination_date
     *
     * @return \DateTime|null
     */
    public function getPlannedTerminationDate()
    {
        return $this->container['planned_termination_date'];
    }

    /**
     * Sets planned_termination_date
     *
     * @param \DateTime|null $planned_termination_date The date and time when the subscription is planned to be terminated.
     *
     * @return self
     */
    public function setPlannedTerminationDate($planned_termination_date)
    {
        if (is_null($planned_termination_date)) {
            throw new \InvalidArgumentException('non-nullable planned_termination_date cannot be null');
        }
        $this->container['planned_termination_date'] = $planned_termination_date;

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
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionState|null $state state
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
     * Gets affiliate
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|null
     */
    public function getAffiliate()
    {
        return $this->container['affiliate'];
    }

    /**
     * Sets affiliate
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|null $affiliate affiliate
     *
     * @return self
     */
    public function setAffiliate($affiliate)
    {
        if (is_null($affiliate)) {
            throw new \InvalidArgumentException('non-nullable affiliate cannot be null');
        }
        $this->container['affiliate'] = $affiliate;

        return $this;
    }

    /**
     * Gets termination_scheduled_on
     *
     * @return \DateTime|null
     */
    public function getTerminationScheduledOn()
    {
        return $this->container['termination_scheduled_on'];
    }

    /**
     * Sets termination_scheduled_on
     *
     * @param \DateTime|null $termination_scheduled_on The date and time when the subscription was scheduled to be terminated.
     *
     * @return self
     */
    public function setTerminationScheduledOn($termination_scheduled_on)
    {
        if (is_null($termination_scheduled_on)) {
            throw new \InvalidArgumentException('non-nullable termination_scheduled_on cannot be null');
        }
        $this->container['termination_scheduled_on'] = $termination_scheduled_on;

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


