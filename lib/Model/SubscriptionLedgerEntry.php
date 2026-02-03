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
 * SubscriptionLedgerEntry model
 *
 * @category Class
 * @description The subscription ledger entry represents a single change on the subscription balance.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionLedgerEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionLedgerEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantity' => 'float',
        'amount_excluding_tax' => 'float',
        'planned_purge_date' => '\DateTime',
        'subscription_version' => 'int',
        'external_id' => 'string',
        'taxes' => '\PostFinanceCheckout\Sdk\Model\Tax[]',
        'fee_type' => '\PostFinanceCheckout\Sdk\Model\ProductFeeType',
        'title' => 'string',
        'created_on' => '\DateTime',
        'version' => 'int',
        'component_reference_name' => 'string',
        'subscription_metric_id' => 'int',
        'linked_space_id' => 'int',
        'pro_rata_calculated' => 'bool',
        'created_by' => 'int',
        'component_reference_sku' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionLedgerEntryState',
        'amount_including_tax' => 'float',
        'discount_including_tax' => 'float',
        'tax_amount' => 'float',
        'aggregated_tax_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quantity' => null,
        'amount_excluding_tax' => null,
        'planned_purge_date' => 'date-time',
        'subscription_version' => 'int64',
        'external_id' => null,
        'taxes' => null,
        'fee_type' => null,
        'title' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'component_reference_name' => null,
        'subscription_metric_id' => 'int64',
        'linked_space_id' => 'int64',
        'pro_rata_calculated' => null,
        'created_by' => 'int64',
        'component_reference_sku' => null,
        'id' => 'int64',
        'state' => null,
        'amount_including_tax' => null,
        'discount_including_tax' => null,
        'tax_amount' => null,
        'aggregated_tax_rate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'quantity' => false,
        'amount_excluding_tax' => false,
        'planned_purge_date' => false,
        'subscription_version' => false,
        'external_id' => false,
        'taxes' => false,
        'fee_type' => false,
        'title' => false,
        'created_on' => false,
        'version' => false,
        'component_reference_name' => false,
        'subscription_metric_id' => false,
        'linked_space_id' => false,
        'pro_rata_calculated' => false,
        'created_by' => false,
        'component_reference_sku' => false,
        'id' => false,
        'state' => false,
        'amount_including_tax' => false,
        'discount_including_tax' => false,
        'tax_amount' => false,
        'aggregated_tax_rate' => false
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
        'quantity' => 'quantity',
        'amount_excluding_tax' => 'amountExcludingTax',
        'planned_purge_date' => 'plannedPurgeDate',
        'subscription_version' => 'subscriptionVersion',
        'external_id' => 'externalId',
        'taxes' => 'taxes',
        'fee_type' => 'feeType',
        'title' => 'title',
        'created_on' => 'createdOn',
        'version' => 'version',
        'component_reference_name' => 'componentReferenceName',
        'subscription_metric_id' => 'subscriptionMetricId',
        'linked_space_id' => 'linkedSpaceId',
        'pro_rata_calculated' => 'proRataCalculated',
        'created_by' => 'createdBy',
        'component_reference_sku' => 'componentReferenceSku',
        'id' => 'id',
        'state' => 'state',
        'amount_including_tax' => 'amountIncludingTax',
        'discount_including_tax' => 'discountIncludingTax',
        'tax_amount' => 'taxAmount',
        'aggregated_tax_rate' => 'aggregatedTaxRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'amount_excluding_tax' => 'setAmountExcludingTax',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'subscription_version' => 'setSubscriptionVersion',
        'external_id' => 'setExternalId',
        'taxes' => 'setTaxes',
        'fee_type' => 'setFeeType',
        'title' => 'setTitle',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'component_reference_name' => 'setComponentReferenceName',
        'subscription_metric_id' => 'setSubscriptionMetricId',
        'linked_space_id' => 'setLinkedSpaceId',
        'pro_rata_calculated' => 'setProRataCalculated',
        'created_by' => 'setCreatedBy',
        'component_reference_sku' => 'setComponentReferenceSku',
        'id' => 'setId',
        'state' => 'setState',
        'amount_including_tax' => 'setAmountIncludingTax',
        'discount_including_tax' => 'setDiscountIncludingTax',
        'tax_amount' => 'setTaxAmount',
        'aggregated_tax_rate' => 'setAggregatedTaxRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'amount_excluding_tax' => 'getAmountExcludingTax',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'subscription_version' => 'getSubscriptionVersion',
        'external_id' => 'getExternalId',
        'taxes' => 'getTaxes',
        'fee_type' => 'getFeeType',
        'title' => 'getTitle',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'component_reference_name' => 'getComponentReferenceName',
        'subscription_metric_id' => 'getSubscriptionMetricId',
        'linked_space_id' => 'getLinkedSpaceId',
        'pro_rata_calculated' => 'getProRataCalculated',
        'created_by' => 'getCreatedBy',
        'component_reference_sku' => 'getComponentReferenceSku',
        'id' => 'getId',
        'state' => 'getState',
        'amount_including_tax' => 'getAmountIncludingTax',
        'discount_including_tax' => 'getDiscountIncludingTax',
        'tax_amount' => 'getTaxAmount',
        'aggregated_tax_rate' => 'getAggregatedTaxRate'
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
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('amount_excluding_tax', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('subscription_version', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('fee_type', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('component_reference_name', $data ?? [], null);
        $this->setIfExists('subscription_metric_id', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('pro_rata_calculated', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('component_reference_sku', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('amount_including_tax', $data ?? [], null);
        $this->setIfExists('discount_including_tax', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
        $this->setIfExists('aggregated_tax_rate', $data ?? [], null);
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

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 150)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['component_reference_sku']) && (mb_strlen($this->container['component_reference_sku']) > 100)) {
            $invalidProperties[] = "invalid value for 'component_reference_sku', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['component_reference_sku']) && !preg_match("/([0-9a-zA-Z\\-_]+)/", $this->container['component_reference_sku'])) {
            $invalidProperties[] = "invalid value for 'component_reference_sku', must be conform to the pattern /([0-9a-zA-Z\\-_]+)/.";
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
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The number of items that were consumed.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount_excluding_tax
     *
     * @return float|null
     */
    public function getAmountExcludingTax()
    {
        return $this->container['amount_excluding_tax'];
    }

    /**
     * Sets amount_excluding_tax
     *
     * @param float|null $amount_excluding_tax The leger entry's amount with discounts applied, excluding taxes.
     *
     * @return self
     */
    public function setAmountExcludingTax($amount_excluding_tax)
    {
        if (is_null($amount_excluding_tax)) {
            throw new \InvalidArgumentException('non-nullable amount_excluding_tax cannot be null');
        }
        $this->container['amount_excluding_tax'] = $amount_excluding_tax;

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
     * Gets subscription_version
     *
     * @return int|null
     */
    public function getSubscriptionVersion()
    {
        return $this->container['subscription_version'];
    }

    /**
     * Sets subscription_version
     *
     * @param int|null $subscription_version The subscription version that the ledger entry belongs to.
     *
     * @return self
     */
    public function setSubscriptionVersion($subscription_version)
    {
        if (is_null($subscription_version)) {
            throw new \InvalidArgumentException('non-nullable subscription_version cannot be null');
        }
        $this->container['subscription_version'] = $subscription_version;

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
     * @param \PostFinanceCheckout\Sdk\Model\Tax[]|null $taxes A set of tax lines, each of which specifies a tax applied to the ledger entry.
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
     * Gets fee_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\ProductFeeType|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\ProductFeeType|null $fee_type fee_type
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        if (is_null($fee_type)) {
            throw new \InvalidArgumentException('non-nullable fee_type cannot be null');
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title that indicates what the ledger entry is about.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 150)) {
            throw new \InvalidArgumentException('invalid length for $title when calling SubscriptionLedgerEntry., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling SubscriptionLedgerEntry., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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
     * Gets component_reference_name
     *
     * @return string|null
     */
    public function getComponentReferenceName()
    {
        return $this->container['component_reference_name'];
    }

    /**
     * Sets component_reference_name
     *
     * @param string|null $component_reference_name component_reference_name
     *
     * @return self
     */
    public function setComponentReferenceName($component_reference_name)
    {
        if (is_null($component_reference_name)) {
            throw new \InvalidArgumentException('non-nullable component_reference_name cannot be null');
        }
        $this->container['component_reference_name'] = $component_reference_name;

        return $this;
    }

    /**
     * Gets subscription_metric_id
     *
     * @return int|null
     */
    public function getSubscriptionMetricId()
    {
        return $this->container['subscription_metric_id'];
    }

    /**
     * Sets subscription_metric_id
     *
     * @param int|null $subscription_metric_id subscription_metric_id
     *
     * @return self
     */
    public function setSubscriptionMetricId($subscription_metric_id)
    {
        if (is_null($subscription_metric_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_metric_id cannot be null');
        }
        $this->container['subscription_metric_id'] = $subscription_metric_id;

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
     * Gets pro_rata_calculated
     *
     * @return bool|null
     */
    public function getProRataCalculated()
    {
        return $this->container['pro_rata_calculated'];
    }

    /**
     * Sets pro_rata_calculated
     *
     * @param bool|null $pro_rata_calculated pro_rata_calculated
     *
     * @return self
     */
    public function setProRataCalculated($pro_rata_calculated)
    {
        if (is_null($pro_rata_calculated)) {
            throw new \InvalidArgumentException('non-nullable pro_rata_calculated cannot be null');
        }
        $this->container['pro_rata_calculated'] = $pro_rata_calculated;

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
     * @param int|null $created_by The ID of the user the ledger entry was created by.
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
     * Gets component_reference_sku
     *
     * @return string|null
     */
    public function getComponentReferenceSku()
    {
        return $this->container['component_reference_sku'];
    }

    /**
     * Sets component_reference_sku
     *
     * @param string|null $component_reference_sku component_reference_sku
     *
     * @return self
     */
    public function setComponentReferenceSku($component_reference_sku)
    {
        if (is_null($component_reference_sku)) {
            throw new \InvalidArgumentException('non-nullable component_reference_sku cannot be null');
        }
        if ((mb_strlen($component_reference_sku) > 100)) {
            throw new \InvalidArgumentException('invalid length for $component_reference_sku when calling SubscriptionLedgerEntry., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/([0-9a-zA-Z\\-_]+)/", ObjectSerializer::toString($component_reference_sku)))) {
            throw new \InvalidArgumentException("invalid value for \$component_reference_sku when calling SubscriptionLedgerEntry., must conform to the pattern /([0-9a-zA-Z\\-_]+)/.");
        }

        $this->container['component_reference_sku'] = $component_reference_sku;

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
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionLedgerEntryState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionLedgerEntryState|null $state state
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
     * Gets amount_including_tax
     *
     * @return float|null
     */
    public function getAmountIncludingTax()
    {
        return $this->container['amount_including_tax'];
    }

    /**
     * Sets amount_including_tax
     *
     * @param float|null $amount_including_tax The leger entry's amount with discounts applied, including taxes.
     *
     * @return self
     */
    public function setAmountIncludingTax($amount_including_tax)
    {
        if (is_null($amount_including_tax)) {
            throw new \InvalidArgumentException('non-nullable amount_including_tax cannot be null');
        }
        $this->container['amount_including_tax'] = $amount_including_tax;

        return $this;
    }

    /**
     * Gets discount_including_tax
     *
     * @return float|null
     */
    public function getDiscountIncludingTax()
    {
        return $this->container['discount_including_tax'];
    }

    /**
     * Sets discount_including_tax
     *
     * @param float|null $discount_including_tax The discount allocated to the ledger entry, including taxes.
     *
     * @return self
     */
    public function setDiscountIncludingTax($discount_including_tax)
    {
        if (is_null($discount_including_tax)) {
            throw new \InvalidArgumentException('non-nullable discount_including_tax cannot be null');
        }
        $this->container['discount_including_tax'] = $discount_including_tax;

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
     * @param float|null $tax_amount The sum of all taxes applied to the ledger entry.
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
     * Gets aggregated_tax_rate
     *
     * @return float|null
     */
    public function getAggregatedTaxRate()
    {
        return $this->container['aggregated_tax_rate'];
    }

    /**
     * Sets aggregated_tax_rate
     *
     * @param float|null $aggregated_tax_rate The total tax rate applied to the ledger entry, calculated from the rates of all tax lines.
     *
     * @return self
     */
    public function setAggregatedTaxRate($aggregated_tax_rate)
    {
        if (is_null($aggregated_tax_rate)) {
            throw new \InvalidArgumentException('non-nullable aggregated_tax_rate cannot be null');
        }
        $this->container['aggregated_tax_rate'] = $aggregated_tax_rate;

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


