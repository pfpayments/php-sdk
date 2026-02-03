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
 * PaymentConnectorConfiguration model
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
class PaymentConnectorConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentConnectorConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_method_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration',
        'image_path' => 'string',
        'planned_purge_date' => '\DateTime',
        'priority' => 'int',
        'enabled_sales_channels' => '\PostFinanceCheckout\Sdk\Model\SalesChannel[]',
        'version' => 'int',
        'processor_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration',
        'linked_space_id' => 'int',
        'connector' => '\PostFinanceCheckout\Sdk\Model\PaymentConnector',
        'name' => 'string',
        'enabled_space_views' => 'int[]',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
        'applicable_for_transaction_processing' => 'bool',
        'conditions' => '\PostFinanceCheckout\Sdk\Model\Condition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_method_configuration' => null,
        'image_path' => null,
        'planned_purge_date' => 'date-time',
        'priority' => 'int32',
        'enabled_sales_channels' => null,
        'version' => 'int32',
        'processor_configuration' => null,
        'linked_space_id' => 'int64',
        'connector' => null,
        'name' => null,
        'enabled_space_views' => 'int64',
        'id' => 'int64',
        'state' => null,
        'applicable_for_transaction_processing' => null,
        'conditions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_method_configuration' => false,
        'image_path' => false,
        'planned_purge_date' => false,
        'priority' => false,
        'enabled_sales_channels' => false,
        'version' => false,
        'processor_configuration' => false,
        'linked_space_id' => false,
        'connector' => false,
        'name' => false,
        'enabled_space_views' => false,
        'id' => false,
        'state' => false,
        'applicable_for_transaction_processing' => false,
        'conditions' => false
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
        'payment_method_configuration' => 'paymentMethodConfiguration',
        'image_path' => 'imagePath',
        'planned_purge_date' => 'plannedPurgeDate',
        'priority' => 'priority',
        'enabled_sales_channels' => 'enabledSalesChannels',
        'version' => 'version',
        'processor_configuration' => 'processorConfiguration',
        'linked_space_id' => 'linkedSpaceId',
        'connector' => 'connector',
        'name' => 'name',
        'enabled_space_views' => 'enabledSpaceViews',
        'id' => 'id',
        'state' => 'state',
        'applicable_for_transaction_processing' => 'applicableForTransactionProcessing',
        'conditions' => 'conditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_method_configuration' => 'setPaymentMethodConfiguration',
        'image_path' => 'setImagePath',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'priority' => 'setPriority',
        'enabled_sales_channels' => 'setEnabledSalesChannels',
        'version' => 'setVersion',
        'processor_configuration' => 'setProcessorConfiguration',
        'linked_space_id' => 'setLinkedSpaceId',
        'connector' => 'setConnector',
        'name' => 'setName',
        'enabled_space_views' => 'setEnabledSpaceViews',
        'id' => 'setId',
        'state' => 'setState',
        'applicable_for_transaction_processing' => 'setApplicableForTransactionProcessing',
        'conditions' => 'setConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_method_configuration' => 'getPaymentMethodConfiguration',
        'image_path' => 'getImagePath',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'priority' => 'getPriority',
        'enabled_sales_channels' => 'getEnabledSalesChannels',
        'version' => 'getVersion',
        'processor_configuration' => 'getProcessorConfiguration',
        'linked_space_id' => 'getLinkedSpaceId',
        'connector' => 'getConnector',
        'name' => 'getName',
        'enabled_space_views' => 'getEnabledSpaceViews',
        'id' => 'getId',
        'state' => 'getState',
        'applicable_for_transaction_processing' => 'getApplicableForTransactionProcessing',
        'conditions' => 'getConditions'
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
        $this->setIfExists('payment_method_configuration', $data ?? [], null);
        $this->setIfExists('image_path', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('enabled_sales_channels', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('processor_configuration', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('connector', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('enabled_space_views', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('applicable_for_transaction_processing', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
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
     * Gets payment_method_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration|null
     */
    public function getPaymentMethodConfiguration()
    {
        return $this->container['payment_method_configuration'];
    }

    /**
     * Sets payment_method_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration|null $payment_method_configuration payment_method_configuration
     *
     * @return self
     */
    public function setPaymentMethodConfiguration($payment_method_configuration)
    {
        if (is_null($payment_method_configuration)) {
            throw new \InvalidArgumentException('non-nullable payment_method_configuration cannot be null');
        }
        $this->container['payment_method_configuration'] = $payment_method_configuration;

        return $this;
    }

    /**
     * Gets image_path
     *
     * @return string|null
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string|null $image_path The URL to the connector's image.
     *
     * @return self
     */
    public function setImagePath($image_path)
    {
        if (is_null($image_path)) {
            throw new \InvalidArgumentException('non-nullable image_path cannot be null');
        }
        $this->container['image_path'] = $image_path;

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
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority The priority that determines the order in which connector configurations are taken into account when processing a payment. Low values are considered first.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets enabled_sales_channels
     *
     * @return \PostFinanceCheckout\Sdk\Model\SalesChannel[]|null
     */
    public function getEnabledSalesChannels()
    {
        return $this->container['enabled_sales_channels'];
    }

    /**
     * Sets enabled_sales_channels
     *
     * @param \PostFinanceCheckout\Sdk\Model\SalesChannel[]|null $enabled_sales_channels The sales channels for which the connector configuration is enabled. If empty, it is enabled for all sales channels.
     *
     * @return self
     */
    public function setEnabledSalesChannels($enabled_sales_channels)
    {
        if (is_null($enabled_sales_channels)) {
            throw new \InvalidArgumentException('non-nullable enabled_sales_channels cannot be null');
        }


        $this->container['enabled_sales_channels'] = $enabled_sales_channels;

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
     * Gets processor_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration|null
     */
    public function getProcessorConfiguration()
    {
        return $this->container['processor_configuration'];
    }

    /**
     * Sets processor_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration|null $processor_configuration processor_configuration
     *
     * @return self
     */
    public function setProcessorConfiguration($processor_configuration)
    {
        if (is_null($processor_configuration)) {
            throw new \InvalidArgumentException('non-nullable processor_configuration cannot be null');
        }
        $this->container['processor_configuration'] = $processor_configuration;

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
     * Gets connector
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentConnector|null
     */
    public function getConnector()
    {
        return $this->container['connector'];
    }

    /**
     * Sets connector
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentConnector|null $connector connector
     *
     * @return self
     */
    public function setConnector($connector)
    {
        if (is_null($connector)) {
            throw new \InvalidArgumentException('non-nullable connector cannot be null');
        }
        $this->container['connector'] = $connector;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name used to identify the connector configuration.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentConnectorConfiguration., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets enabled_space_views
     *
     * @return int[]|null
     */
    public function getEnabledSpaceViews()
    {
        return $this->container['enabled_space_views'];
    }

    /**
     * Sets enabled_space_views
     *
     * @param int[]|null $enabled_space_views The space views for which the connector configuration is enabled. If empty, it is enabled for all space views.
     *
     * @return self
     */
    public function setEnabledSpaceViews($enabled_space_views)
    {
        if (is_null($enabled_space_views)) {
            throw new \InvalidArgumentException('non-nullable enabled_space_views cannot be null');
        }


        $this->container['enabled_space_views'] = $enabled_space_views;

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
     * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState|null $state state
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
     * Gets applicable_for_transaction_processing
     *
     * @return bool|null
     */
    public function getApplicableForTransactionProcessing()
    {
        return $this->container['applicable_for_transaction_processing'];
    }

    /**
     * Sets applicable_for_transaction_processing
     *
     * @param bool|null $applicable_for_transaction_processing Whether this connector configuration is enabled for processing payments, taking into account the state of the processor and payment method configurations.
     *
     * @return self
     */
    public function setApplicableForTransactionProcessing($applicable_for_transaction_processing)
    {
        if (is_null($applicable_for_transaction_processing)) {
            throw new \InvalidArgumentException('non-nullable applicable_for_transaction_processing cannot be null');
        }
        $this->container['applicable_for_transaction_processing'] = $applicable_for_transaction_processing;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \PostFinanceCheckout\Sdk\Model\Condition[]|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \PostFinanceCheckout\Sdk\Model\Condition[]|null $conditions Conditions allow to define criteria that a transaction must fulfill in order for the connector configuration to be considered for processing the payment.
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            throw new \InvalidArgumentException('non-nullable conditions cannot be null');
        }
        $this->container['conditions'] = $conditions;

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


