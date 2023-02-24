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
 * PaymentInitiationAdviceFile model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentInitiationAdviceFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentInitiationAdviceFile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => '\DateTime',
        'failure_message' => 'string',
        'file_generated_on' => '\DateTime',
        'forwarded_on' => '\DateTime',
        'id' => 'int',
        'linked_space_id' => 'int',
        'name' => 'string',
        'processed_on' => '\DateTime',
        'processor' => '\PostFinanceCheckout\Sdk\Model\PaymentProcessor',
        'state' => '\PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFileState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => 'date-time',
        'failure_message' => null,
        'file_generated_on' => 'date-time',
        'forwarded_on' => 'date-time',
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'name' => null,
        'processed_on' => 'date-time',
        'processor' => null,
        'state' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_on' => 'createdOn',
        'failure_message' => 'failureMessage',
        'file_generated_on' => 'fileGeneratedOn',
        'forwarded_on' => 'forwardedOn',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'processed_on' => 'processedOn',
        'processor' => 'processor',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'failure_message' => 'setFailureMessage',
        'file_generated_on' => 'setFileGeneratedOn',
        'forwarded_on' => 'setForwardedOn',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'processed_on' => 'setProcessedOn',
        'processor' => 'setProcessor',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'failure_message' => 'getFailureMessage',
        'file_generated_on' => 'getFileGeneratedOn',
        'forwarded_on' => 'getForwardedOn',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'processed_on' => 'getProcessedOn',
        'processor' => 'getProcessor',
        'state' => 'getState'
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
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['failure_message'] = isset($data['failure_message']) ? $data['failure_message'] : null;
        
        $this->container['file_generated_on'] = isset($data['file_generated_on']) ? $data['file_generated_on'] : null;
        
        $this->container['forwarded_on'] = isset($data['forwarded_on']) ? $data['forwarded_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['processed_on'] = isset($data['processed_on']) ? $data['processed_on'] : null;
        
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
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
     * @param \DateTime $created_on The created on date indicates the date on which the entity was stored into the database.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets failure_message
     *
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->container['failure_message'];
    }

    /**
     * Sets failure_message
     *
     * @param string $failure_message 
     *
     * @return $this
     */
    public function setFailureMessage($failure_message)
    {
        $this->container['failure_message'] = $failure_message;

        return $this;
    }
    

    /**
     * Gets file_generated_on
     *
     * @return \DateTime
     */
    public function getFileGeneratedOn()
    {
        return $this->container['file_generated_on'];
    }

    /**
     * Sets file_generated_on
     *
     * @param \DateTime $file_generated_on 
     *
     * @return $this
     */
    public function setFileGeneratedOn($file_generated_on)
    {
        $this->container['file_generated_on'] = $file_generated_on;

        return $this;
    }
    

    /**
     * Gets forwarded_on
     *
     * @return \DateTime
     */
    public function getForwardedOn()
    {
        return $this->container['forwarded_on'];
    }

    /**
     * Sets forwarded_on
     *
     * @param \DateTime $forwarded_on The shipping date indicates the date on which the pain file was transferred to an external processing system.
     *
     * @return $this
     */
    public function setForwardedOn($forwarded_on)
    {
        $this->container['forwarded_on'] = $forwarded_on;

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
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets processed_on
     *
     * @return \DateTime
     */
    public function getProcessedOn()
    {
        return $this->container['processed_on'];
    }

    /**
     * Sets processed_on
     *
     * @param \DateTime $processed_on 
     *
     * @return $this
     */
    public function setProcessedOn($processed_on)
    {
        $this->container['processed_on'] = $processed_on;

        return $this;
    }
    

    /**
     * Gets processor
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentProcessor
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentProcessor $processor 
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFileState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFileState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


