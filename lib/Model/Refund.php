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
 * Refund model
 *
 * @category Class
 * @description A refund is a credit issued to the customer, which can be initiated either by the merchant or by the customer as a reversal.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 * @implements \ArrayAccess<string, mixed>
 */
class Refund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_settled_amount' => 'float',
        'reductions' => '\PostFinanceCheckout\Sdk\Model\LineItemReduction[]',
        'base_line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'processing_on' => '\DateTime',
        'taxes' => '\PostFinanceCheckout\Sdk\Model\Tax[]',
        'language' => 'string',
        'type' => '\PostFinanceCheckout\Sdk\Model\RefundType',
        'created_on' => '\DateTime',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'meta_data' => 'array<string,string>',
        'succeeded_on' => '\DateTime',
        'reduced_line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\RefundState',
        'merchant_reference' => 'string',
        'completion' => 'int',
        'amount' => 'float',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'time_zone' => 'string',
        'version' => 'int',
        'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
        'linked_space_id' => 'int',
        'timeout_on' => '\DateTime',
        'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
        'created_by' => 'int',
        'next_update_on' => '\DateTime',
        'updated_invoice' => 'int',
        'failure_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'total_applied_fees' => 'float',
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
        'total_settled_amount' => null,
        'reductions' => null,
        'base_line_items' => null,
        'processing_on' => 'date-time',
        'taxes' => null,
        'language' => null,
        'type' => null,
        'created_on' => 'date-time',
        'line_items' => null,
        'meta_data' => null,
        'succeeded_on' => 'date-time',
        'reduced_line_items' => null,
        'id' => 'int64',
        'state' => null,
        'merchant_reference' => null,
        'completion' => 'int64',
        'amount' => null,
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'time_zone' => null,
        'version' => 'int32',
        'labels' => null,
        'linked_space_id' => 'int64',
        'timeout_on' => 'date-time',
        'environment' => null,
        'created_by' => 'int64',
        'next_update_on' => 'date-time',
        'updated_invoice' => 'int64',
        'failure_reason' => null,
        'total_applied_fees' => null,
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
        'total_settled_amount' => false,
        'reductions' => false,
        'base_line_items' => false,
        'processing_on' => false,
        'taxes' => false,
        'language' => false,
        'type' => false,
        'created_on' => false,
        'line_items' => false,
        'meta_data' => false,
        'succeeded_on' => false,
        'reduced_line_items' => false,
        'id' => false,
        'state' => false,
        'merchant_reference' => false,
        'completion' => false,
        'amount' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'time_zone' => false,
        'version' => false,
        'labels' => false,
        'linked_space_id' => false,
        'timeout_on' => false,
        'environment' => false,
        'created_by' => false,
        'next_update_on' => false,
        'updated_invoice' => false,
        'failure_reason' => false,
        'total_applied_fees' => false,
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
        'total_settled_amount' => 'totalSettledAmount',
        'reductions' => 'reductions',
        'base_line_items' => 'baseLineItems',
        'processing_on' => 'processingOn',
        'taxes' => 'taxes',
        'language' => 'language',
        'type' => 'type',
        'created_on' => 'createdOn',
        'line_items' => 'lineItems',
        'meta_data' => 'metaData',
        'succeeded_on' => 'succeededOn',
        'reduced_line_items' => 'reducedLineItems',
        'id' => 'id',
        'state' => 'state',
        'merchant_reference' => 'merchantReference',
        'completion' => 'completion',
        'amount' => 'amount',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'time_zone' => 'timeZone',
        'version' => 'version',
        'labels' => 'labels',
        'linked_space_id' => 'linkedSpaceId',
        'timeout_on' => 'timeoutOn',
        'environment' => 'environment',
        'created_by' => 'createdBy',
        'next_update_on' => 'nextUpdateOn',
        'updated_invoice' => 'updatedInvoice',
        'failure_reason' => 'failureReason',
        'total_applied_fees' => 'totalAppliedFees',
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
        'total_settled_amount' => 'setTotalSettledAmount',
        'reductions' => 'setReductions',
        'base_line_items' => 'setBaseLineItems',
        'processing_on' => 'setProcessingOn',
        'taxes' => 'setTaxes',
        'language' => 'setLanguage',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'line_items' => 'setLineItems',
        'meta_data' => 'setMetaData',
        'succeeded_on' => 'setSucceededOn',
        'reduced_line_items' => 'setReducedLineItems',
        'id' => 'setId',
        'state' => 'setState',
        'merchant_reference' => 'setMerchantReference',
        'completion' => 'setCompletion',
        'amount' => 'setAmount',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'time_zone' => 'setTimeZone',
        'version' => 'setVersion',
        'labels' => 'setLabels',
        'linked_space_id' => 'setLinkedSpaceId',
        'timeout_on' => 'setTimeoutOn',
        'environment' => 'setEnvironment',
        'created_by' => 'setCreatedBy',
        'next_update_on' => 'setNextUpdateOn',
        'updated_invoice' => 'setUpdatedInvoice',
        'failure_reason' => 'setFailureReason',
        'total_applied_fees' => 'setTotalAppliedFees',
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
        'total_settled_amount' => 'getTotalSettledAmount',
        'reductions' => 'getReductions',
        'base_line_items' => 'getBaseLineItems',
        'processing_on' => 'getProcessingOn',
        'taxes' => 'getTaxes',
        'language' => 'getLanguage',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'line_items' => 'getLineItems',
        'meta_data' => 'getMetaData',
        'succeeded_on' => 'getSucceededOn',
        'reduced_line_items' => 'getReducedLineItems',
        'id' => 'getId',
        'state' => 'getState',
        'merchant_reference' => 'getMerchantReference',
        'completion' => 'getCompletion',
        'amount' => 'getAmount',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'time_zone' => 'getTimeZone',
        'version' => 'getVersion',
        'labels' => 'getLabels',
        'linked_space_id' => 'getLinkedSpaceId',
        'timeout_on' => 'getTimeoutOn',
        'environment' => 'getEnvironment',
        'created_by' => 'getCreatedBy',
        'next_update_on' => 'getNextUpdateOn',
        'updated_invoice' => 'getUpdatedInvoice',
        'failure_reason' => 'getFailureReason',
        'total_applied_fees' => 'getTotalAppliedFees',
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
        $this->setIfExists('total_settled_amount', $data ?? [], null);
        $this->setIfExists('reductions', $data ?? [], null);
        $this->setIfExists('base_line_items', $data ?? [], null);
        $this->setIfExists('processing_on', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('meta_data', $data ?? [], null);
        $this->setIfExists('succeeded_on', $data ?? [], null);
        $this->setIfExists('reduced_line_items', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('merchant_reference', $data ?? [], null);
        $this->setIfExists('completion', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('timeout_on', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('next_update_on', $data ?? [], null);
        $this->setIfExists('updated_invoice', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('total_applied_fees', $data ?? [], null);
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

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
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

        if (!is_null($this->container['processor_reference']) && (mb_strlen($this->container['processor_reference']) > 150)) {
            $invalidProperties[] = "invalid value for 'processor_reference', the character length must be smaller than or equal to 150.";
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
     * Gets total_settled_amount
     *
     * @return float|null
     */
    public function getTotalSettledAmount()
    {
        return $this->container['total_settled_amount'];
    }

    /**
     * Sets total_settled_amount
     *
     * @param float|null $total_settled_amount The total amount settled for the refund, factoring in reductions, taxes, and any additional applied fees.
     *
     * @return self
     */
    public function setTotalSettledAmount($total_settled_amount)
    {
        if (is_null($total_settled_amount)) {
            throw new \InvalidArgumentException('non-nullable total_settled_amount cannot be null');
        }
        $this->container['total_settled_amount'] = $total_settled_amount;

        return $this;
    }

    /**
     * Gets reductions
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItemReduction[]|null
     */
    public function getReductions()
    {
        return $this->container['reductions'];
    }

    /**
     * Sets reductions
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItemReduction[]|null $reductions The reductions applied on the original transaction items, detailing specific adjustments associated with the refund.
     *
     * @return self
     */
    public function setReductions($reductions)
    {
        if (is_null($reductions)) {
            throw new \InvalidArgumentException('non-nullable reductions cannot be null');
        }
        $this->container['reductions'] = $reductions;

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
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $base_line_items The original base line items from the transaction prior to the refund, serving as a reference for the refunded amounts.
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
     * @param \DateTime|null $processing_on The date and time when the processing of the refund was started.
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
     * Gets taxes
     *
     * @return \PostFinanceCheckout\Sdk\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \PostFinanceCheckout\Sdk\Model\Tax[]|null $taxes The tax breakdown applied to the refund amount, helping with tax calculations or reporting.
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }


        $this->container['taxes'] = $taxes;

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
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\RefundType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\RefundType|null $type type
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
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $line_items The line items included in the refund, representing the reductions.
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
     * @param \DateTime|null $succeeded_on The date and time when the refund succeeded.
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
     * Gets reduced_line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItem[]|null
     */
    public function getReducedLineItems()
    {
        return $this->container['reduced_line_items'];
    }

    /**
     * Sets reduced_line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $reduced_line_items The line items from the original transaction, adjusted to reflect any reductions applied during the refund process.
     *
     * @return self
     */
    public function setReducedLineItems($reduced_line_items)
    {
        if (is_null($reduced_line_items)) {
            throw new \InvalidArgumentException('non-nullable reduced_line_items cannot be null');
        }
        $this->container['reduced_line_items'] = $reduced_line_items;

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
     * @return \PostFinanceCheckout\Sdk\Model\RefundState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\RefundState|null $state state
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
     * @param string|null $merchant_reference The merchant's reference used to identify the refund.
     *
     * @return self
     */
    public function setMerchantReference($merchant_reference)
    {
        if (is_null($merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable merchant_reference cannot be null');
        }
        if ((mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling Refund., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_reference when calling Refund., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }

    /**
     * Gets completion
     *
     * @return int|null
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param int|null $completion The transaction completion that the refund belongs to.
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
     * @param float|null $amount The total monetary amount of the refund, representing the exact credit issued to the customer.
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
            throw new \InvalidArgumentException('invalid length for $external_id when calling Refund., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Refund., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($external_id)))) {
            throw new \InvalidArgumentException("invalid value for \$external_id when calling Refund., must conform to the pattern /[ \\x20-\\x7e]*/.");
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
     * @param int|null $created_by The ID of the user the refund was created by.
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
     * Gets updated_invoice
     *
     * @return int|null
     */
    public function getUpdatedInvoice()
    {
        return $this->container['updated_invoice'];
    }

    /**
     * Sets updated_invoice
     *
     * @param int|null $updated_invoice An updated invoice reflecting adjustments made by the refund.
     *
     * @return self
     */
    public function setUpdatedInvoice($updated_invoice)
    {
        if (is_null($updated_invoice)) {
            throw new \InvalidArgumentException('non-nullable updated_invoice cannot be null');
        }
        $this->container['updated_invoice'] = $updated_invoice;

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
     * Gets total_applied_fees
     *
     * @return float|null
     */
    public function getTotalAppliedFees()
    {
        return $this->container['total_applied_fees'];
    }

    /**
     * Sets total_applied_fees
     *
     * @param float|null $total_applied_fees The sum of fees applied to the refund transaction, such as processing or service charges.
     *
     * @return self
     */
    public function setTotalAppliedFees($total_applied_fees)
    {
        if (is_null($total_applied_fees)) {
            throw new \InvalidArgumentException('non-nullable total_applied_fees cannot be null');
        }
        $this->container['total_applied_fees'] = $total_applied_fees;

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
     * @param \DateTime|null $failed_on The date and time when the refund failed.
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
     * @param string|null $processor_reference The reference ID provided by the payment processor, used to trace the refund through the external payment system.
     *
     * @return self
     */
    public function setProcessorReference($processor_reference)
    {
        if (is_null($processor_reference)) {
            throw new \InvalidArgumentException('non-nullable processor_reference cannot be null');
        }
        if ((mb_strlen($processor_reference) > 150)) {
            throw new \InvalidArgumentException('invalid length for $processor_reference when calling Refund., must be smaller than or equal to 150.');
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


