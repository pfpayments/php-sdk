<?php
/**
 * PostFinance Checkout SDK
 *
 * This library allows to interact with the PostFinance Checkout payment service.
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
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentConnectorConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentConnectorConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applicable_for_transaction_processing' => 'bool',
        'conditions' => 'int[]',
        'connector' => 'int',
        'enabled_sales_channels' => '\PostFinanceCheckout\Sdk\Model\SalesChannel[]',
        'enabled_space_views' => 'int[]',
        'id' => 'int',
        'image_path' => 'string',
        'linked_space_id' => 'int',
        'name' => 'string',
        'payment_method_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration',
        'planned_purge_date' => '\DateTime',
        'priority' => 'int',
        'processor_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration',
        'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applicable_for_transaction_processing' => null,
        'conditions' => 'int64',
        'connector' => 'int64',
        'enabled_sales_channels' => null,
        'enabled_space_views' => 'int64',
        'id' => 'int64',
        'image_path' => null,
        'linked_space_id' => 'int64',
        'name' => null,
        'payment_method_configuration' => null,
        'planned_purge_date' => 'date-time',
        'priority' => 'int32',
        'processor_configuration' => null,
        'state' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'applicable_for_transaction_processing' => 'applicableForTransactionProcessing',
        'conditions' => 'conditions',
        'connector' => 'connector',
        'enabled_sales_channels' => 'enabledSalesChannels',
        'enabled_space_views' => 'enabledSpaceViews',
        'id' => 'id',
        'image_path' => 'imagePath',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'payment_method_configuration' => 'paymentMethodConfiguration',
        'planned_purge_date' => 'plannedPurgeDate',
        'priority' => 'priority',
        'processor_configuration' => 'processorConfiguration',
        'state' => 'state',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicable_for_transaction_processing' => 'setApplicableForTransactionProcessing',
        'conditions' => 'setConditions',
        'connector' => 'setConnector',
        'enabled_sales_channels' => 'setEnabledSalesChannels',
        'enabled_space_views' => 'setEnabledSpaceViews',
        'id' => 'setId',
        'image_path' => 'setImagePath',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'payment_method_configuration' => 'setPaymentMethodConfiguration',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'priority' => 'setPriority',
        'processor_configuration' => 'setProcessorConfiguration',
        'state' => 'setState',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicable_for_transaction_processing' => 'getApplicableForTransactionProcessing',
        'conditions' => 'getConditions',
        'connector' => 'getConnector',
        'enabled_sales_channels' => 'getEnabledSalesChannels',
        'enabled_space_views' => 'getEnabledSpaceViews',
        'id' => 'getId',
        'image_path' => 'getImagePath',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'payment_method_configuration' => 'getPaymentMethodConfiguration',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'priority' => 'getPriority',
        'processor_configuration' => 'getProcessorConfiguration',
        'state' => 'getState',
        'version' => 'getVersion'
    ];

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        
        $this->container['applicable_for_transaction_processing'] = isset($data['applicable_for_transaction_processing']) ? $data['applicable_for_transaction_processing'] : null;
        
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        
        $this->container['connector'] = isset($data['connector']) ? $data['connector'] : null;
        
        $this->container['enabled_sales_channels'] = isset($data['enabled_sales_channels']) ? $data['enabled_sales_channels'] : null;
        
        $this->container['enabled_space_views'] = isset($data['enabled_space_views']) ? $data['enabled_space_views'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['image_path'] = isset($data['image_path']) ? $data['image_path'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['payment_method_configuration'] = isset($data['payment_method_configuration']) ? $data['payment_method_configuration'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        
        $this->container['processor_configuration'] = isset($data['processor_configuration']) ? $data['processor_configuration'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
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
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }


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
        return self::$swaggerModelName;
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
     * Gets applicable_for_transaction_processing
     *
     * @return bool
     */
    public function getApplicableForTransactionProcessing()
    {
        return $this->container['applicable_for_transaction_processing'];
    }

    /**
     * Sets applicable_for_transaction_processing
     *
     * @param bool $applicable_for_transaction_processing Whether this connector configuration is enabled for processing payments, taking into account the state of the processor and payment method configurations.
     *
     * @return $this
     */
    public function setApplicableForTransactionProcessing($applicable_for_transaction_processing)
    {
        $this->container['applicable_for_transaction_processing'] = $applicable_for_transaction_processing;

        return $this;
    }
    

    /**
     * Gets conditions
     *
     * @return int[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param int[] $conditions Conditions allow to define criteria that a transaction must fulfill in order for the connector configuration to be considered for processing the payment.
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }
    

    /**
     * Gets connector
     *
     * @return int
     */
    public function getConnector()
    {
        return $this->container['connector'];
    }

    /**
     * Sets connector
     *
     * @param int $connector The connector that the configuration is for.
     *
     * @return $this
     */
    public function setConnector($connector)
    {
        $this->container['connector'] = $connector;

        return $this;
    }
    

    /**
     * Gets enabled_sales_channels
     *
     * @return \PostFinanceCheckout\Sdk\Model\SalesChannel[]
     */
    public function getEnabledSalesChannels()
    {
        return $this->container['enabled_sales_channels'];
    }

    /**
     * Sets enabled_sales_channels
     *
     * @param \PostFinanceCheckout\Sdk\Model\SalesChannel[] $enabled_sales_channels The sales channels for which the connector configuration is enabled. If empty, it is enabled for all sales channels.
     *
     * @return $this
     */
    public function setEnabledSalesChannels($enabled_sales_channels)
    {
        $this->container['enabled_sales_channels'] = $enabled_sales_channels;

        return $this;
    }
    

    /**
     * Gets enabled_space_views
     *
     * @return int[]
     */
    public function getEnabledSpaceViews()
    {
        return $this->container['enabled_space_views'];
    }

    /**
     * Sets enabled_space_views
     *
     * @param int[] $enabled_space_views The space views for which the connector configuration is enabled. If empty, it is enabled for all space views.
     *
     * @return $this
     */
    public function setEnabledSpaceViews($enabled_space_views)
    {
        $this->container['enabled_space_views'] = $enabled_space_views;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id A unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets image_path
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string $image_path The URL to the connector's image.
     *
     * @return $this
     */
    public function setImagePath($image_path)
    {
        $this->container['image_path'] = $image_path;

        return $this;
    }
    

    /**
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The ID of the space this object belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name used to identify the connector configuration.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentConnectorConfiguration., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets payment_method_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration
     */
    public function getPaymentMethodConfiguration()
    {
        return $this->container['payment_method_configuration'];
    }

    /**
     * Sets payment_method_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration $payment_method_configuration The payment method configuration that the connector configuration belongs to.
     *
     * @return $this
     */
    public function setPaymentMethodConfiguration($payment_method_configuration)
    {
        $this->container['payment_method_configuration'] = $payment_method_configuration;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority The priority that determines the order in which connector configurations are taken into account when processing a payment. Low values are considered first.
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }
    

    /**
     * Gets processor_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration
     */
    public function getProcessorConfiguration()
    {
        return $this->container['processor_configuration'];
    }

    /**
     * Sets processor_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration $processor_configuration The processor configuration that the connector configuration belongs to.
     *
     * @return $this
     */
    public function setProcessorConfiguration($processor_configuration)
    {
        $this->container['processor_configuration'] = $processor_configuration;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


