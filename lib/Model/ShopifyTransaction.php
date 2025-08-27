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
 * ShopifyTransaction model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifyTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifyTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'checkout_id' => 'string',
        'created_on' => '\DateTime',
        'draft_order_id' => 'string',
        'draft_order_legacy_id' => 'string',
        'id' => 'int',
        'integration' => '\PostFinanceCheckout\Sdk\Model\ShopifyV1Integration',
        'linked_space_id' => 'int',
        'linked_transaction' => 'int',
        'order_legacy_id' => 'string',
        'order_name' => 'string',
        'planned_purge_date' => '\DateTime',
        'state' => '\PostFinanceCheckout\Sdk\Model\ShopifyTransactionState',
        'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'checkout_id' => null,
        'created_on' => 'date-time',
        'draft_order_id' => null,
        'draft_order_legacy_id' => null,
        'id' => 'int64',
        'integration' => null,
        'linked_space_id' => 'int64',
        'linked_transaction' => 'int64',
        'order_legacy_id' => null,
        'order_name' => null,
        'planned_purge_date' => 'date-time',
        'state' => null,
        'transaction' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'checkout_id' => 'checkoutId',
        'created_on' => 'createdOn',
        'draft_order_id' => 'draftOrderId',
        'draft_order_legacy_id' => 'draftOrderLegacyId',
        'id' => 'id',
        'integration' => 'integration',
        'linked_space_id' => 'linkedSpaceId',
        'linked_transaction' => 'linkedTransaction',
        'order_legacy_id' => 'orderLegacyId',
        'order_name' => 'orderName',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'transaction' => 'transaction',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkout_id' => 'setCheckoutId',
        'created_on' => 'setCreatedOn',
        'draft_order_id' => 'setDraftOrderId',
        'draft_order_legacy_id' => 'setDraftOrderLegacyId',
        'id' => 'setId',
        'integration' => 'setIntegration',
        'linked_space_id' => 'setLinkedSpaceId',
        'linked_transaction' => 'setLinkedTransaction',
        'order_legacy_id' => 'setOrderLegacyId',
        'order_name' => 'setOrderName',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'transaction' => 'setTransaction',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkout_id' => 'getCheckoutId',
        'created_on' => 'getCreatedOn',
        'draft_order_id' => 'getDraftOrderId',
        'draft_order_legacy_id' => 'getDraftOrderLegacyId',
        'id' => 'getId',
        'integration' => 'getIntegration',
        'linked_space_id' => 'getLinkedSpaceId',
        'linked_transaction' => 'getLinkedTransaction',
        'order_legacy_id' => 'getOrderLegacyId',
        'order_name' => 'getOrderName',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'transaction' => 'getTransaction',
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
    public function __construct(array $data = [])
    {
        
        $this->container['checkout_id'] = isset($data['checkout_id']) ? $data['checkout_id'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['draft_order_id'] = isset($data['draft_order_id']) ? $data['draft_order_id'] : null;
        
        $this->container['draft_order_legacy_id'] = isset($data['draft_order_legacy_id']) ? $data['draft_order_legacy_id'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['linked_transaction'] = isset($data['linked_transaction']) ? $data['linked_transaction'] : null;
        
        $this->container['order_legacy_id'] = isset($data['order_legacy_id']) ? $data['order_legacy_id'] : null;
        
        $this->container['order_name'] = isset($data['order_name']) ? $data['order_name'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
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
     * Gets checkout_id
     *
     * @return string
     */
    public function getCheckoutId()
    {
        return $this->container['checkout_id'];
    }

    /**
     * Sets checkout_id
     *
     * @param string $checkout_id 
     *
     * @return $this
     */
    public function setCheckoutId($checkout_id)
    {
        $this->container['checkout_id'] = $checkout_id;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date and time when the object was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets draft_order_id
     *
     * @return string
     */
    public function getDraftOrderId()
    {
        return $this->container['draft_order_id'];
    }

    /**
     * Sets draft_order_id
     *
     * @param string $draft_order_id 
     *
     * @return $this
     */
    public function setDraftOrderId($draft_order_id)
    {
        $this->container['draft_order_id'] = $draft_order_id;

        return $this;
    }
    

    /**
     * Gets draft_order_legacy_id
     *
     * @return string
     */
    public function getDraftOrderLegacyId()
    {
        return $this->container['draft_order_legacy_id'];
    }

    /**
     * Sets draft_order_legacy_id
     *
     * @param string $draft_order_legacy_id 
     *
     * @return $this
     */
    public function setDraftOrderLegacyId($draft_order_legacy_id)
    {
        $this->container['draft_order_legacy_id'] = $draft_order_legacy_id;

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
     * Gets integration
     *
     * @return \PostFinanceCheckout\Sdk\Model\ShopifyV1Integration
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \PostFinanceCheckout\Sdk\Model\ShopifyV1Integration $integration 
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

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
     * Gets linked_transaction
     *
     * @return int
     */
    public function getLinkedTransaction()
    {
        return $this->container['linked_transaction'];
    }

    /**
     * Sets linked_transaction
     *
     * @param int $linked_transaction The payment transaction this object is linked to.
     *
     * @return $this
     */
    public function setLinkedTransaction($linked_transaction)
    {
        $this->container['linked_transaction'] = $linked_transaction;

        return $this;
    }
    

    /**
     * Gets order_legacy_id
     *
     * @return string
     */
    public function getOrderLegacyId()
    {
        return $this->container['order_legacy_id'];
    }

    /**
     * Sets order_legacy_id
     *
     * @param string $order_legacy_id 
     *
     * @return $this
     */
    public function setOrderLegacyId($order_legacy_id)
    {
        $this->container['order_legacy_id'] = $order_legacy_id;

        return $this;
    }
    

    /**
     * Gets order_name
     *
     * @return string
     */
    public function getOrderName()
    {
        return $this->container['order_name'];
    }

    /**
     * Sets order_name
     *
     * @param string $order_name 
     *
     * @return $this
     */
    public function setOrderName($order_name)
    {
        $this->container['order_name'] = $order_name;

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
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\ShopifyTransactionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\ShopifyTransactionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return \PostFinanceCheckout\Sdk\Model\Transaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \PostFinanceCheckout\Sdk\Model\Transaction $transaction 
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

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


