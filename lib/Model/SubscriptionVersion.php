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
 * SubscriptionVersion model
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
class SubscriptionVersion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'planned_purge_date' => '\DateTime',
        'language' => 'string',
        'subscription' => '\PostFinanceCheckout\Sdk\Model\Subscription',
        'created_on' => '\DateTime',
        'version' => 'int',
        'terminated_on' => '\DateTime',
        'linked_space_id' => 'int',
        'termination_issued_on' => '\DateTime',
        'component_configurations' => '\PostFinanceCheckout\Sdk\Model\SubscriptionComponentConfiguration[]',
        'product_version' => '\PostFinanceCheckout\Sdk\Model\SubscriptionProductVersion',
        'activated_on' => '\DateTime',
        'terminating_on' => '\DateTime',
        'billing_currency' => 'string',
        'expected_last_period_end' => '\DateTime',
        'billing_cycle_model' => '\PostFinanceCheckout\Sdk\Model\BillingCycleModel',
        'planned_termination_date' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionVersionState',
        'failed_on' => '\DateTime'
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
        'subscription' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'terminated_on' => 'date-time',
        'linked_space_id' => 'int64',
        'termination_issued_on' => 'date-time',
        'component_configurations' => null,
        'product_version' => null,
        'activated_on' => 'date-time',
        'terminating_on' => 'date-time',
        'billing_currency' => null,
        'expected_last_period_end' => 'date-time',
        'billing_cycle_model' => null,
        'planned_termination_date' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'failed_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'planned_purge_date' => false,
        'language' => false,
        'subscription' => false,
        'created_on' => false,
        'version' => false,
        'terminated_on' => false,
        'linked_space_id' => false,
        'termination_issued_on' => false,
        'component_configurations' => false,
        'product_version' => false,
        'activated_on' => false,
        'terminating_on' => false,
        'billing_currency' => false,
        'expected_last_period_end' => false,
        'billing_cycle_model' => false,
        'planned_termination_date' => false,
        'id' => false,
        'state' => false,
        'failed_on' => false
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
        'subscription' => 'subscription',
        'created_on' => 'createdOn',
        'version' => 'version',
        'terminated_on' => 'terminatedOn',
        'linked_space_id' => 'linkedSpaceId',
        'termination_issued_on' => 'terminationIssuedOn',
        'component_configurations' => 'componentConfigurations',
        'product_version' => 'productVersion',
        'activated_on' => 'activatedOn',
        'terminating_on' => 'terminatingOn',
        'billing_currency' => 'billingCurrency',
        'expected_last_period_end' => 'expectedLastPeriodEnd',
        'billing_cycle_model' => 'billingCycleModel',
        'planned_termination_date' => 'plannedTerminationDate',
        'id' => 'id',
        'state' => 'state',
        'failed_on' => 'failedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planned_purge_date' => 'setPlannedPurgeDate',
        'language' => 'setLanguage',
        'subscription' => 'setSubscription',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'terminated_on' => 'setTerminatedOn',
        'linked_space_id' => 'setLinkedSpaceId',
        'termination_issued_on' => 'setTerminationIssuedOn',
        'component_configurations' => 'setComponentConfigurations',
        'product_version' => 'setProductVersion',
        'activated_on' => 'setActivatedOn',
        'terminating_on' => 'setTerminatingOn',
        'billing_currency' => 'setBillingCurrency',
        'expected_last_period_end' => 'setExpectedLastPeriodEnd',
        'billing_cycle_model' => 'setBillingCycleModel',
        'planned_termination_date' => 'setPlannedTerminationDate',
        'id' => 'setId',
        'state' => 'setState',
        'failed_on' => 'setFailedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planned_purge_date' => 'getPlannedPurgeDate',
        'language' => 'getLanguage',
        'subscription' => 'getSubscription',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'terminated_on' => 'getTerminatedOn',
        'linked_space_id' => 'getLinkedSpaceId',
        'termination_issued_on' => 'getTerminationIssuedOn',
        'component_configurations' => 'getComponentConfigurations',
        'product_version' => 'getProductVersion',
        'activated_on' => 'getActivatedOn',
        'terminating_on' => 'getTerminatingOn',
        'billing_currency' => 'getBillingCurrency',
        'expected_last_period_end' => 'getExpectedLastPeriodEnd',
        'billing_cycle_model' => 'getBillingCycleModel',
        'planned_termination_date' => 'getPlannedTerminationDate',
        'id' => 'getId',
        'state' => 'getState',
        'failed_on' => 'getFailedOn'
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
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('terminated_on', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('termination_issued_on', $data ?? [], null);
        $this->setIfExists('component_configurations', $data ?? [], null);
        $this->setIfExists('product_version', $data ?? [], null);
        $this->setIfExists('activated_on', $data ?? [], null);
        $this->setIfExists('terminating_on', $data ?? [], null);
        $this->setIfExists('billing_currency', $data ?? [], null);
        $this->setIfExists('expected_last_period_end', $data ?? [], null);
        $this->setIfExists('billing_cycle_model', $data ?? [], null);
        $this->setIfExists('planned_termination_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
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
     * @param \DateTime|null $created_on The date and time when the subscription version was created.
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
     * @param \DateTime|null $terminated_on The date and time when the subscription version was terminated.
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
     * Gets termination_issued_on
     *
     * @return \DateTime|null
     */
    public function getTerminationIssuedOn()
    {
        return $this->container['termination_issued_on'];
    }

    /**
     * Sets termination_issued_on
     *
     * @param \DateTime|null $termination_issued_on The date and time when the termination of the subscription version was issued.
     *
     * @return self
     */
    public function setTerminationIssuedOn($termination_issued_on)
    {
        if (is_null($termination_issued_on)) {
            throw new \InvalidArgumentException('non-nullable termination_issued_on cannot be null');
        }
        $this->container['termination_issued_on'] = $termination_issued_on;

        return $this;
    }

    /**
     * Gets component_configurations
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionComponentConfiguration[]|null
     */
    public function getComponentConfigurations()
    {
        return $this->container['component_configurations'];
    }

    /**
     * Sets component_configurations
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionComponentConfiguration[]|null $component_configurations The configurations of the subscription's components.
     *
     * @return self
     */
    public function setComponentConfigurations($component_configurations)
    {
        if (is_null($component_configurations)) {
            throw new \InvalidArgumentException('non-nullable component_configurations cannot be null');
        }


        $this->container['component_configurations'] = $component_configurations;

        return $this;
    }

    /**
     * Gets product_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionProductVersion|null
     */
    public function getProductVersion()
    {
        return $this->container['product_version'];
    }

    /**
     * Sets product_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionProductVersion|null $product_version product_version
     *
     * @return self
     */
    public function setProductVersion($product_version)
    {
        if (is_null($product_version)) {
            throw new \InvalidArgumentException('non-nullable product_version cannot be null');
        }
        $this->container['product_version'] = $product_version;

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
     * @param \DateTime|null $activated_on The date and time when the subscription version was activated.
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
     * @param \DateTime|null $terminating_on The date and time when the termination of the subscription version started.
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
     * Gets billing_currency
     *
     * @return string|null
     */
    public function getBillingCurrency()
    {
        return $this->container['billing_currency'];
    }

    /**
     * Sets billing_currency
     *
     * @param string|null $billing_currency The three-letter code (ISO 4217 format) of the currency used to invoice the customer. Must be one of the currencies supported by the product.
     *
     * @return self
     */
    public function setBillingCurrency($billing_currency)
    {
        if (is_null($billing_currency)) {
            throw new \InvalidArgumentException('non-nullable billing_currency cannot be null');
        }
        $this->container['billing_currency'] = $billing_currency;

        return $this;
    }

    /**
     * Gets expected_last_period_end
     *
     * @return \DateTime|null
     */
    public function getExpectedLastPeriodEnd()
    {
        return $this->container['expected_last_period_end'];
    }

    /**
     * Sets expected_last_period_end
     *
     * @param \DateTime|null $expected_last_period_end The date and time when the last period is expected to end.
     *
     * @return self
     */
    public function setExpectedLastPeriodEnd($expected_last_period_end)
    {
        if (is_null($expected_last_period_end)) {
            throw new \InvalidArgumentException('non-nullable expected_last_period_end cannot be null');
        }
        $this->container['expected_last_period_end'] = $expected_last_period_end;

        return $this;
    }

    /**
     * Gets billing_cycle_model
     *
     * @return \PostFinanceCheckout\Sdk\Model\BillingCycleModel|null
     */
    public function getBillingCycleModel()
    {
        return $this->container['billing_cycle_model'];
    }

    /**
     * Sets billing_cycle_model
     *
     * @param \PostFinanceCheckout\Sdk\Model\BillingCycleModel|null $billing_cycle_model billing_cycle_model
     *
     * @return self
     */
    public function setBillingCycleModel($billing_cycle_model)
    {
        if (is_null($billing_cycle_model)) {
            throw new \InvalidArgumentException('non-nullable billing_cycle_model cannot be null');
        }
        $this->container['billing_cycle_model'] = $billing_cycle_model;

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
     * @param \DateTime|null $planned_termination_date The date and time when the termination of the subscription version is planned.
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
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionVersionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionVersionState|null $state state
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
     * @param \DateTime|null $failed_on The date and time when the subscription version failed.
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


