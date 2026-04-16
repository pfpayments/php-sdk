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
 * TransactionInvoice model
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
class TransactionInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'completion' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletion',
        'derecognized_on' => '\DateTime',
        'amount' => 'float',
        'due_on' => '\DateTime',
        'outstanding_amount' => 'float',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'time_zone' => 'string',
        'language' => 'string',
        'space_view_id' => 'int',
        'created_on' => '\DateTime',
        'paid_on' => '\DateTime',
        'version' => 'int',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'linked_space_id' => 'int',
        'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
        'derecognized_by' => 'int',
        'billing_address' => '\PostFinanceCheckout\Sdk\Model\Address',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\TransactionInvoiceState',
        'linked_transaction' => 'int',
        'tax_amount' => 'float',
        'merchant_reference' => 'string'
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
        'derecognized_on' => 'date-time',
        'amount' => null,
        'due_on' => 'date-time',
        'outstanding_amount' => null,
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'time_zone' => null,
        'language' => null,
        'space_view_id' => 'int64',
        'created_on' => 'date-time',
        'paid_on' => 'date-time',
        'version' => 'int32',
        'line_items' => null,
        'linked_space_id' => 'int64',
        'environment' => null,
        'derecognized_by' => 'int64',
        'billing_address' => null,
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'tax_amount' => null,
        'merchant_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'completion' => false,
        'derecognized_on' => false,
        'amount' => false,
        'due_on' => false,
        'outstanding_amount' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'time_zone' => false,
        'language' => false,
        'space_view_id' => false,
        'created_on' => false,
        'paid_on' => false,
        'version' => false,
        'line_items' => false,
        'linked_space_id' => false,
        'environment' => false,
        'derecognized_by' => false,
        'billing_address' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'tax_amount' => false,
        'merchant_reference' => false
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
        'derecognized_on' => 'derecognizedOn',
        'amount' => 'amount',
        'due_on' => 'dueOn',
        'outstanding_amount' => 'outstandingAmount',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'time_zone' => 'timeZone',
        'language' => 'language',
        'space_view_id' => 'spaceViewId',
        'created_on' => 'createdOn',
        'paid_on' => 'paidOn',
        'version' => 'version',
        'line_items' => 'lineItems',
        'linked_space_id' => 'linkedSpaceId',
        'environment' => 'environment',
        'derecognized_by' => 'derecognizedBy',
        'billing_address' => 'billingAddress',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'tax_amount' => 'taxAmount',
        'merchant_reference' => 'merchantReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion' => 'setCompletion',
        'derecognized_on' => 'setDerecognizedOn',
        'amount' => 'setAmount',
        'due_on' => 'setDueOn',
        'outstanding_amount' => 'setOutstandingAmount',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'time_zone' => 'setTimeZone',
        'language' => 'setLanguage',
        'space_view_id' => 'setSpaceViewId',
        'created_on' => 'setCreatedOn',
        'paid_on' => 'setPaidOn',
        'version' => 'setVersion',
        'line_items' => 'setLineItems',
        'linked_space_id' => 'setLinkedSpaceId',
        'environment' => 'setEnvironment',
        'derecognized_by' => 'setDerecognizedBy',
        'billing_address' => 'setBillingAddress',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'tax_amount' => 'setTaxAmount',
        'merchant_reference' => 'setMerchantReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion' => 'getCompletion',
        'derecognized_on' => 'getDerecognizedOn',
        'amount' => 'getAmount',
        'due_on' => 'getDueOn',
        'outstanding_amount' => 'getOutstandingAmount',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'time_zone' => 'getTimeZone',
        'language' => 'getLanguage',
        'space_view_id' => 'getSpaceViewId',
        'created_on' => 'getCreatedOn',
        'paid_on' => 'getPaidOn',
        'version' => 'getVersion',
        'line_items' => 'getLineItems',
        'linked_space_id' => 'getLinkedSpaceId',
        'environment' => 'getEnvironment',
        'derecognized_by' => 'getDerecognizedBy',
        'billing_address' => 'getBillingAddress',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'tax_amount' => 'getTaxAmount',
        'merchant_reference' => 'getMerchantReference'
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
        $this->setIfExists('derecognized_on', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('due_on', $data ?? [], null);
        $this->setIfExists('outstanding_amount', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('paid_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('derecognized_by', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
        $this->setIfExists('merchant_reference', $data ?? [], null);
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['external_id']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['external_id'])) {
            $invalidProperties[] = "invalid value for 'external_id', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
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
     * @param \DateTime|null $derecognized_on The date and time when the invoice was derecognized, meaning it is no longer considered outstanding or valid in the system.
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The total sum of all line items on the invoice, including taxes.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets due_on
     *
     * @return \DateTime|null
     */
    public function getDueOn()
    {
        return $this->container['due_on'];
    }

    /**
     * Sets due_on
     *
     * @param \DateTime|null $due_on The due date for payment of the invoice.
     *
     * @return self
     */
    public function setDueOn($due_on)
    {
        if (is_null($due_on)) {
            throw new \InvalidArgumentException('non-nullable due_on cannot be null');
        }
        $this->container['due_on'] = $due_on;

        return $this;
    }

    /**
     * Gets outstanding_amount
     *
     * @return float|null
     */
    public function getOutstandingAmount()
    {
        return $this->container['outstanding_amount'];
    }

    /**
     * Sets outstanding_amount
     *
     * @param float|null $outstanding_amount The remaining amount the buyer owes to the merchant. A negative value indicates the invoice has been overpaid.
     *
     * @return self
     */
    public function setOutstandingAmount($outstanding_amount)
    {
        if (is_null($outstanding_amount)) {
            throw new \InvalidArgumentException('non-nullable outstanding_amount cannot be null');
        }
        $this->container['outstanding_amount'] = $outstanding_amount;

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
        if ((mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionInvoice., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionInvoice., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($external_id)))) {
            throw new \InvalidArgumentException("invalid value for \$external_id when calling TransactionInvoice., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The time zone that this object is associated with.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

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
     * Gets paid_on
     *
     * @return \DateTime|null
     */
    public function getPaidOn()
    {
        return $this->container['paid_on'];
    }

    /**
     * Sets paid_on
     *
     * @param \DateTime|null $paid_on The date and time when the invoice was recorded as paid. May differ from the actual payment date due to processing delays.
     *
     * @return self
     */
    public function setPaidOn($paid_on)
    {
        if (is_null($paid_on)) {
            throw new \InvalidArgumentException('non-nullable paid_on cannot be null');
        }
        $this->container['paid_on'] = $paid_on;

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
     * Gets line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $line_items The invoiced line items that will appear on the invoice document.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

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
     * Gets environment
     *
     * @return \PostFinanceCheckout\Sdk\Model\Environment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \PostFinanceCheckout\Sdk\Model\Environment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets derecognized_by
     *
     * @return int|null
     */
    public function getDerecognizedBy()
    {
        return $this->container['derecognized_by'];
    }

    /**
     * Sets derecognized_by
     *
     * @param int|null $derecognized_by The ID of the user the invoice was derecognized by.
     *
     * @return self
     */
    public function setDerecognizedBy($derecognized_by)
    {
        if (is_null($derecognized_by)) {
            throw new \InvalidArgumentException('non-nullable derecognized_by cannot be null');
        }
        $this->container['derecognized_by'] = $derecognized_by;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

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
     * @return \PostFinanceCheckout\Sdk\Model\TransactionInvoiceState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionInvoiceState|null $state state
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
     * Gets tax_amount
     *
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float|null $tax_amount The portion of the invoiced amount that corresponds to taxes.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        if (is_null($tax_amount)) {
            throw new \InvalidArgumentException('non-nullable tax_amount cannot be null');
        }
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets merchant_reference
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string|null $merchant_reference The merchant's reference used to identify the invoice.
     *
     * @return self
     */
    public function setMerchantReference($merchant_reference)
    {
        if (is_null($merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable merchant_reference cannot be null');
        }
        if ((mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling TransactionInvoice., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_reference when calling TransactionInvoice., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['merchant_reference'] = $merchant_reference;

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


