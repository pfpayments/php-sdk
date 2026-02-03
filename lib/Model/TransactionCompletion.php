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
 * TransactionCompletion model
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
class TransactionCompletion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionCompletion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_item_version' => '\PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion',
        'statement_descriptor' => 'string',
        'base_line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'processing_on' => '\DateTime',
        'invoice_merchant_reference' => 'string',
        'language' => 'string',
        'remaining_line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'created_on' => '\DateTime',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'mode' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionMode',
        'meta_data' => 'array<string,string>',
        'succeeded_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionState',
        'linked_transaction' => 'int',
        'payment_information' => 'string',
        'amount' => 'float',
        'last_completion' => 'bool',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'time_zone' => 'string',
        'space_view_id' => 'int',
        'version' => 'int',
        'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
        'linked_space_id' => 'int',
        'timeout_on' => '\DateTime',
        'created_by' => 'int',
        'next_update_on' => '\DateTime',
        'failure_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'tax_amount' => 'float',
        'failed_on' => '\DateTime',
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
        'line_item_version' => null,
        'statement_descriptor' => null,
        'base_line_items' => null,
        'processing_on' => 'date-time',
        'invoice_merchant_reference' => null,
        'language' => null,
        'remaining_line_items' => null,
        'created_on' => 'date-time',
        'line_items' => null,
        'mode' => null,
        'meta_data' => null,
        'succeeded_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'payment_information' => null,
        'amount' => null,
        'last_completion' => null,
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'time_zone' => null,
        'space_view_id' => 'int64',
        'version' => 'int32',
        'labels' => null,
        'linked_space_id' => 'int64',
        'timeout_on' => 'date-time',
        'created_by' => 'int64',
        'next_update_on' => 'date-time',
        'failure_reason' => null,
        'tax_amount' => null,
        'failed_on' => 'date-time',
        'processor_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'line_item_version' => false,
        'statement_descriptor' => false,
        'base_line_items' => false,
        'processing_on' => false,
        'invoice_merchant_reference' => false,
        'language' => false,
        'remaining_line_items' => false,
        'created_on' => false,
        'line_items' => false,
        'mode' => false,
        'meta_data' => false,
        'succeeded_on' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'payment_information' => false,
        'amount' => false,
        'last_completion' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'time_zone' => false,
        'space_view_id' => false,
        'version' => false,
        'labels' => false,
        'linked_space_id' => false,
        'timeout_on' => false,
        'created_by' => false,
        'next_update_on' => false,
        'failure_reason' => false,
        'tax_amount' => false,
        'failed_on' => false,
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
        'line_item_version' => 'lineItemVersion',
        'statement_descriptor' => 'statementDescriptor',
        'base_line_items' => 'baseLineItems',
        'processing_on' => 'processingOn',
        'invoice_merchant_reference' => 'invoiceMerchantReference',
        'language' => 'language',
        'remaining_line_items' => 'remainingLineItems',
        'created_on' => 'createdOn',
        'line_items' => 'lineItems',
        'mode' => 'mode',
        'meta_data' => 'metaData',
        'succeeded_on' => 'succeededOn',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'payment_information' => 'paymentInformation',
        'amount' => 'amount',
        'last_completion' => 'lastCompletion',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'time_zone' => 'timeZone',
        'space_view_id' => 'spaceViewId',
        'version' => 'version',
        'labels' => 'labels',
        'linked_space_id' => 'linkedSpaceId',
        'timeout_on' => 'timeoutOn',
        'created_by' => 'createdBy',
        'next_update_on' => 'nextUpdateOn',
        'failure_reason' => 'failureReason',
        'tax_amount' => 'taxAmount',
        'failed_on' => 'failedOn',
        'processor_reference' => 'processorReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_item_version' => 'setLineItemVersion',
        'statement_descriptor' => 'setStatementDescriptor',
        'base_line_items' => 'setBaseLineItems',
        'processing_on' => 'setProcessingOn',
        'invoice_merchant_reference' => 'setInvoiceMerchantReference',
        'language' => 'setLanguage',
        'remaining_line_items' => 'setRemainingLineItems',
        'created_on' => 'setCreatedOn',
        'line_items' => 'setLineItems',
        'mode' => 'setMode',
        'meta_data' => 'setMetaData',
        'succeeded_on' => 'setSucceededOn',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'payment_information' => 'setPaymentInformation',
        'amount' => 'setAmount',
        'last_completion' => 'setLastCompletion',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'time_zone' => 'setTimeZone',
        'space_view_id' => 'setSpaceViewId',
        'version' => 'setVersion',
        'labels' => 'setLabels',
        'linked_space_id' => 'setLinkedSpaceId',
        'timeout_on' => 'setTimeoutOn',
        'created_by' => 'setCreatedBy',
        'next_update_on' => 'setNextUpdateOn',
        'failure_reason' => 'setFailureReason',
        'tax_amount' => 'setTaxAmount',
        'failed_on' => 'setFailedOn',
        'processor_reference' => 'setProcessorReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_item_version' => 'getLineItemVersion',
        'statement_descriptor' => 'getStatementDescriptor',
        'base_line_items' => 'getBaseLineItems',
        'processing_on' => 'getProcessingOn',
        'invoice_merchant_reference' => 'getInvoiceMerchantReference',
        'language' => 'getLanguage',
        'remaining_line_items' => 'getRemainingLineItems',
        'created_on' => 'getCreatedOn',
        'line_items' => 'getLineItems',
        'mode' => 'getMode',
        'meta_data' => 'getMetaData',
        'succeeded_on' => 'getSucceededOn',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'payment_information' => 'getPaymentInformation',
        'amount' => 'getAmount',
        'last_completion' => 'getLastCompletion',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'time_zone' => 'getTimeZone',
        'space_view_id' => 'getSpaceViewId',
        'version' => 'getVersion',
        'labels' => 'getLabels',
        'linked_space_id' => 'getLinkedSpaceId',
        'timeout_on' => 'getTimeoutOn',
        'created_by' => 'getCreatedBy',
        'next_update_on' => 'getNextUpdateOn',
        'failure_reason' => 'getFailureReason',
        'tax_amount' => 'getTaxAmount',
        'failed_on' => 'getFailedOn',
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
        $this->setIfExists('line_item_version', $data ?? [], null);
        $this->setIfExists('statement_descriptor', $data ?? [], null);
        $this->setIfExists('base_line_items', $data ?? [], null);
        $this->setIfExists('processing_on', $data ?? [], null);
        $this->setIfExists('invoice_merchant_reference', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('remaining_line_items', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('meta_data', $data ?? [], null);
        $this->setIfExists('succeeded_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('payment_information', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('last_completion', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('timeout_on', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('next_update_on', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
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

        if (!is_null($this->container['statement_descriptor']) && (mb_strlen($this->container['statement_descriptor']) > 80)) {
            $invalidProperties[] = "invalid value for 'statement_descriptor', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['statement_descriptor']) && !preg_match("/[a-zA-Z0-9\\s.,_?+\/-]*/", $this->container['statement_descriptor'])) {
            $invalidProperties[] = "invalid value for 'statement_descriptor', must be conform to the pattern /[a-zA-Z0-9\\s.,_?+\/-]*/.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && (mb_strlen($this->container['invoice_merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['invoice_merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

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
     * Gets line_item_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion|null
     */
    public function getLineItemVersion()
    {
        return $this->container['line_item_version'];
    }

    /**
     * Sets line_item_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion|null $line_item_version line_item_version
     *
     * @return self
     */
    public function setLineItemVersion($line_item_version)
    {
        if (is_null($line_item_version)) {
            throw new \InvalidArgumentException('non-nullable line_item_version cannot be null');
        }
        $this->container['line_item_version'] = $line_item_version;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return string|null
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string|null $statement_descriptor The statement descriptor that appears on a customer's bank statement, providing an explanation for charges or payments, helping customers identify the transaction.
     *
     * @return self
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        if (is_null($statement_descriptor)) {
            throw new \InvalidArgumentException('non-nullable statement_descriptor cannot be null');
        }
        if ((mb_strlen($statement_descriptor) > 80)) {
            throw new \InvalidArgumentException('invalid length for $statement_descriptor when calling TransactionCompletion., must be smaller than or equal to 80.');
        }
        if ((!preg_match("/[a-zA-Z0-9\\s.,_?+\/-]*/", ObjectSerializer::toString($statement_descriptor)))) {
            throw new \InvalidArgumentException("invalid value for \$statement_descriptor when calling TransactionCompletion., must conform to the pattern /[a-zA-Z0-9\\s.,_?+\/-]*/.");
        }

        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets base_line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItem[]|null
     */
    public function getBaseLineItems()
    {
        return $this->container['base_line_items'];
    }

    /**
     * Sets base_line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $base_line_items The original line items from the transaction that serve as the baseline for this completion.
     *
     * @return self
     */
    public function setBaseLineItems($base_line_items)
    {
        if (is_null($base_line_items)) {
            throw new \InvalidArgumentException('non-nullable base_line_items cannot be null');
        }
        $this->container['base_line_items'] = $base_line_items;

        return $this;
    }

    /**
     * Gets processing_on
     *
     * @return \DateTime|null
     */
    public function getProcessingOn()
    {
        return $this->container['processing_on'];
    }

    /**
     * Sets processing_on
     *
     * @param \DateTime|null $processing_on The date and time when the processing of the transaction completion was started.
     *
     * @return self
     */
    public function setProcessingOn($processing_on)
    {
        if (is_null($processing_on)) {
            throw new \InvalidArgumentException('non-nullable processing_on cannot be null');
        }
        $this->container['processing_on'] = $processing_on;

        return $this;
    }

    /**
     * Gets invoice_merchant_reference
     *
     * @return string|null
     */
    public function getInvoiceMerchantReference()
    {
        return $this->container['invoice_merchant_reference'];
    }

    /**
     * Sets invoice_merchant_reference
     *
     * @param string|null $invoice_merchant_reference The merchant's reference used to identify the invoice.
     *
     * @return self
     */
    public function setInvoiceMerchantReference($invoice_merchant_reference)
    {
        if (is_null($invoice_merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable invoice_merchant_reference cannot be null');
        }
        if ((mb_strlen($invoice_merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invoice_merchant_reference when calling TransactionCompletion., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($invoice_merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$invoice_merchant_reference when calling TransactionCompletion., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['invoice_merchant_reference'] = $invoice_merchant_reference;

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
     * Gets remaining_line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItem[]|null
     */
    public function getRemainingLineItems()
    {
        return $this->container['remaining_line_items'];
    }

    /**
     * Sets remaining_line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $remaining_line_items The line items yet to be captured in the transaction.
     *
     * @return self
     */
    public function setRemainingLineItems($remaining_line_items)
    {
        if (is_null($remaining_line_items)) {
            throw new \InvalidArgumentException('non-nullable remaining_line_items cannot be null');
        }
        $this->container['remaining_line_items'] = $remaining_line_items;

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
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $line_items The line items captured in this transaction completion.
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
     * Gets mode
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletionMode|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletionMode|null $mode mode
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
     * Gets meta_data
     *
     * @return array<string,string>|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param array<string,string>|null $meta_data Allow to store additional information about the object.
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        if (is_null($meta_data)) {
            throw new \InvalidArgumentException('non-nullable meta_data cannot be null');
        }
        $this->container['meta_data'] = $meta_data;

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
     * @param \DateTime|null $succeeded_on The date and time when the transaction completion succeeded.
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
     * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletionState|null $state state
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
     * Gets payment_information
     *
     * @return string|null
     */
    public function getPaymentInformation()
    {
        return $this->container['payment_information'];
    }

    /**
     * Sets payment_information
     *
     * @param string|null $payment_information Payment-specific details related to this transaction completion such as payment instructions or references needed for processing.
     *
     * @return self
     */
    public function setPaymentInformation($payment_information)
    {
        if (is_null($payment_information)) {
            throw new \InvalidArgumentException('non-nullable payment_information cannot be null');
        }
        $this->container['payment_information'] = $payment_information;

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
     * @param float|null $amount The total amount to be captured in this completion, including taxes.
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
     * Gets last_completion
     *
     * @return bool|null
     */
    public function getLastCompletion()
    {
        return $this->container['last_completion'];
    }

    /**
     * Sets last_completion
     *
     * @param bool|null $last_completion Whether this is the final completion for the transaction. After the last completion is successfully created, the transaction enters its final state, and no further completions can occur.
     *
     * @return self
     */
    public function setLastCompletion($last_completion)
    {
        if (is_null($last_completion)) {
            throw new \InvalidArgumentException('non-nullable last_completion cannot be null');
        }
        $this->container['last_completion'] = $last_completion;

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
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionCompletion., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionCompletion., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($external_id)))) {
            throw new \InvalidArgumentException("invalid value for \$external_id when calling TransactionCompletion., must conform to the pattern /[ \\x20-\\x7e]*/.");
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
     * @param int|null $created_by The ID of the user the transaction completion was created by.
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
     * @param float|null $tax_amount The portion of the captured amount that corresponds to taxes.
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
     * @param \DateTime|null $failed_on The date and time when the transaction completion failed.
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
     * @param string|null $processor_reference The reference ID provided by the payment processor, used to trace the completion through the external payment system.
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


