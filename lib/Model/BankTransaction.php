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
 * BankTransaction model
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
class BankTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adjustments' => '\PostFinanceCheckout\Sdk\Model\PaymentAdjustment[]',
        'currency_bank_account' => '\PostFinanceCheckout\Sdk\Model\CurrencyBankAccount',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'posting_amount' => 'float',
        'source' => 'int',
        'value_date' => '\DateTime',
        'type' => 'int',
        'created_on' => '\DateTime',
        'version' => 'int',
        'reference' => 'string',
        'linked_space_id' => 'int',
        'value_amount' => 'float',
        'flow_direction' => '\PostFinanceCheckout\Sdk\Model\BankTransactionFlowDirection',
        'created_by' => 'int',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\BankTransactionState',
        'payment_date' => '\DateTime',
        'total_adjustment_amount_including_tax' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adjustments' => null,
        'currency_bank_account' => null,
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'posting_amount' => null,
        'source' => 'int64',
        'value_date' => 'date-time',
        'type' => 'int64',
        'created_on' => 'date-time',
        'version' => 'int32',
        'reference' => null,
        'linked_space_id' => 'int64',
        'value_amount' => null,
        'flow_direction' => null,
        'created_by' => 'int64',
        'id' => 'int64',
        'state' => null,
        'payment_date' => 'date-time',
        'total_adjustment_amount_including_tax' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'adjustments' => false,
        'currency_bank_account' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'posting_amount' => false,
        'source' => false,
        'value_date' => false,
        'type' => false,
        'created_on' => false,
        'version' => false,
        'reference' => false,
        'linked_space_id' => false,
        'value_amount' => false,
        'flow_direction' => false,
        'created_by' => false,
        'id' => false,
        'state' => false,
        'payment_date' => false,
        'total_adjustment_amount_including_tax' => false
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
        'adjustments' => 'adjustments',
        'currency_bank_account' => 'currencyBankAccount',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'posting_amount' => 'postingAmount',
        'source' => 'source',
        'value_date' => 'valueDate',
        'type' => 'type',
        'created_on' => 'createdOn',
        'version' => 'version',
        'reference' => 'reference',
        'linked_space_id' => 'linkedSpaceId',
        'value_amount' => 'valueAmount',
        'flow_direction' => 'flowDirection',
        'created_by' => 'createdBy',
        'id' => 'id',
        'state' => 'state',
        'payment_date' => 'paymentDate',
        'total_adjustment_amount_including_tax' => 'totalAdjustmentAmountIncludingTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustments' => 'setAdjustments',
        'currency_bank_account' => 'setCurrencyBankAccount',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'posting_amount' => 'setPostingAmount',
        'source' => 'setSource',
        'value_date' => 'setValueDate',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'reference' => 'setReference',
        'linked_space_id' => 'setLinkedSpaceId',
        'value_amount' => 'setValueAmount',
        'flow_direction' => 'setFlowDirection',
        'created_by' => 'setCreatedBy',
        'id' => 'setId',
        'state' => 'setState',
        'payment_date' => 'setPaymentDate',
        'total_adjustment_amount_including_tax' => 'setTotalAdjustmentAmountIncludingTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustments' => 'getAdjustments',
        'currency_bank_account' => 'getCurrencyBankAccount',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'posting_amount' => 'getPostingAmount',
        'source' => 'getSource',
        'value_date' => 'getValueDate',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'reference' => 'getReference',
        'linked_space_id' => 'getLinkedSpaceId',
        'value_amount' => 'getValueAmount',
        'flow_direction' => 'getFlowDirection',
        'created_by' => 'getCreatedBy',
        'id' => 'getId',
        'state' => 'getState',
        'payment_date' => 'getPaymentDate',
        'total_adjustment_amount_including_tax' => 'getTotalAdjustmentAmountIncludingTax'
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
        $this->setIfExists('adjustments', $data ?? [], null);
        $this->setIfExists('currency_bank_account', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('posting_amount', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('value_date', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('value_amount', $data ?? [], null);
        $this->setIfExists('flow_direction', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('payment_date', $data ?? [], null);
        $this->setIfExists('total_adjustment_amount_including_tax', $data ?? [], null);
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
     * Gets adjustments
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentAdjustment[]|null
     */
    public function getAdjustments()
    {
        return $this->container['adjustments'];
    }

    /**
     * Sets adjustments
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentAdjustment[]|null $adjustments Adjustments are changes made to the initial transaction amount, such as fees or corrections.
     *
     * @return self
     */
    public function setAdjustments($adjustments)
    {
        if (is_null($adjustments)) {
            throw new \InvalidArgumentException('non-nullable adjustments cannot be null');
        }
        $this->container['adjustments'] = $adjustments;

        return $this;
    }

    /**
     * Gets currency_bank_account
     *
     * @return \PostFinanceCheckout\Sdk\Model\CurrencyBankAccount|null
     */
    public function getCurrencyBankAccount()
    {
        return $this->container['currency_bank_account'];
    }

    /**
     * Sets currency_bank_account
     *
     * @param \PostFinanceCheckout\Sdk\Model\CurrencyBankAccount|null $currency_bank_account currency_bank_account
     *
     * @return self
     */
    public function setCurrencyBankAccount($currency_bank_account)
    {
        if (is_null($currency_bank_account)) {
            throw new \InvalidArgumentException('non-nullable currency_bank_account cannot be null');
        }
        $this->container['currency_bank_account'] = $currency_bank_account;

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
     * @param string|null $external_id A client generated nonce which identifies the entity to be created. Subsequent creation requests with the same external ID will not create new entities but return the initially created entity instead.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        if ((mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling BankTransaction., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling BankTransaction., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($external_id)))) {
            throw new \InvalidArgumentException("invalid value for \$external_id when calling BankTransaction., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets posting_amount
     *
     * @return float|null
     */
    public function getPostingAmount()
    {
        return $this->container['posting_amount'];
    }

    /**
     * Sets posting_amount
     *
     * @param float|null $posting_amount The posting amount refers to the monetary value recorded for the bank transaction prior to any adjustments.
     *
     * @return self
     */
    public function setPostingAmount($posting_amount)
    {
        if (is_null($posting_amount)) {
            throw new \InvalidArgumentException('non-nullable posting_amount cannot be null');
        }
        $this->container['posting_amount'] = $posting_amount;

        return $this;
    }

    /**
     * Gets source
     *
     * @return int|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param int|null $source The source indicates how the bank transaction was created.
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets value_date
     *
     * @return \DateTime|null
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime|null $value_date The value date indicates the date on which the transaction amount becomes effective.
     *
     * @return self
     */
    public function setValueDate($value_date)
    {
        if (is_null($value_date)) {
            throw new \InvalidArgumentException('non-nullable value_date cannot be null');
        }
        $this->container['value_date'] = $value_date;

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
     * @param int|null $type The bank transaction's type.
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
     * @param string|null $reference A unique reference to identify the bank transaction.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
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
     * Gets value_amount
     *
     * @return float|null
     */
    public function getValueAmount()
    {
        return $this->container['value_amount'];
    }

    /**
     * Sets value_amount
     *
     * @param float|null $value_amount The value amount represents the net monetary value of the transaction after applicable deductions.
     *
     * @return self
     */
    public function setValueAmount($value_amount)
    {
        if (is_null($value_amount)) {
            throw new \InvalidArgumentException('non-nullable value_amount cannot be null');
        }
        $this->container['value_amount'] = $value_amount;

        return $this;
    }

    /**
     * Gets flow_direction
     *
     * @return \PostFinanceCheckout\Sdk\Model\BankTransactionFlowDirection|null
     */
    public function getFlowDirection()
    {
        return $this->container['flow_direction'];
    }

    /**
     * Sets flow_direction
     *
     * @param \PostFinanceCheckout\Sdk\Model\BankTransactionFlowDirection|null $flow_direction flow_direction
     *
     * @return self
     */
    public function setFlowDirection($flow_direction)
    {
        if (is_null($flow_direction)) {
            throw new \InvalidArgumentException('non-nullable flow_direction cannot be null');
        }
        $this->container['flow_direction'] = $flow_direction;

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
     * @param int|null $created_by The ID of the user the bank transaction was created by.
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
     * @return \PostFinanceCheckout\Sdk\Model\BankTransactionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\BankTransactionState|null $state state
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
     * Gets payment_date
     *
     * @return \DateTime|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime|null $payment_date The payment date specifies the date on which the payment was processed.
     *
     * @return self
     */
    public function setPaymentDate($payment_date)
    {
        if (is_null($payment_date)) {
            throw new \InvalidArgumentException('non-nullable payment_date cannot be null');
        }
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets total_adjustment_amount_including_tax
     *
     * @return float|null
     */
    public function getTotalAdjustmentAmountIncludingTax()
    {
        return $this->container['total_adjustment_amount_including_tax'];
    }

    /**
     * Sets total_adjustment_amount_including_tax
     *
     * @param float|null $total_adjustment_amount_including_tax Represents the total value of all adjustments to the bank transaction, including tax.
     *
     * @return self
     */
    public function setTotalAdjustmentAmountIncludingTax($total_adjustment_amount_including_tax)
    {
        if (is_null($total_adjustment_amount_including_tax)) {
            throw new \InvalidArgumentException('non-nullable total_adjustment_amount_including_tax cannot be null');
        }
        $this->container['total_adjustment_amount_including_tax'] = $total_adjustment_amount_including_tax;

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


