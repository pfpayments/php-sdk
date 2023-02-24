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
 * AnalyticsQueryExecution model
 *
 * @category    Class
 * @description Represents the execution of a query which has been submitted to Analytics.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AnalyticsQueryExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsQueryExecution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => 'int',
        'external_id' => 'string',
        'failure_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'id' => 'int',
        'processing_end_time' => '\DateTime',
        'processing_start_time' => '\DateTime',
        'query_string' => 'string',
        'scanned_data_in_gb' => 'float',
        'scanned_data_limit' => 'float',
        'spaces' => 'int[]',
        'state' => '\PostFinanceCheckout\Sdk\Model\AnalyticsQueryExecutionState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => 'int64',
        'external_id' => null,
        'failure_reason' => null,
        'id' => 'int64',
        'processing_end_time' => 'date-time',
        'processing_start_time' => 'date-time',
        'query_string' => null,
        'scanned_data_in_gb' => null,
        'scanned_data_limit' => null,
        'spaces' => 'int64',
        'state' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account' => 'account',
        'external_id' => 'externalId',
        'failure_reason' => 'failureReason',
        'id' => 'id',
        'processing_end_time' => 'processingEndTime',
        'processing_start_time' => 'processingStartTime',
        'query_string' => 'queryString',
        'scanned_data_in_gb' => 'scannedDataInGb',
        'scanned_data_limit' => 'scannedDataLimit',
        'spaces' => 'spaces',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'external_id' => 'setExternalId',
        'failure_reason' => 'setFailureReason',
        'id' => 'setId',
        'processing_end_time' => 'setProcessingEndTime',
        'processing_start_time' => 'setProcessingStartTime',
        'query_string' => 'setQueryString',
        'scanned_data_in_gb' => 'setScannedDataInGb',
        'scanned_data_limit' => 'setScannedDataLimit',
        'spaces' => 'setSpaces',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'external_id' => 'getExternalId',
        'failure_reason' => 'getFailureReason',
        'id' => 'getId',
        'processing_end_time' => 'getProcessingEndTime',
        'processing_start_time' => 'getProcessingStartTime',
        'query_string' => 'getQueryString',
        'scanned_data_in_gb' => 'getScannedDataInGb',
        'scanned_data_limit' => 'getScannedDataLimit',
        'spaces' => 'getSpaces',
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
        
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['processing_end_time'] = isset($data['processing_end_time']) ? $data['processing_end_time'] : null;
        
        $this->container['processing_start_time'] = isset($data['processing_start_time']) ? $data['processing_start_time'] : null;
        
        $this->container['query_string'] = isset($data['query_string']) ? $data['query_string'] : null;
        
        $this->container['scanned_data_in_gb'] = isset($data['scanned_data_in_gb']) ? $data['scanned_data_in_gb'] : null;
        
        $this->container['scanned_data_limit'] = isset($data['scanned_data_limit']) ? $data['scanned_data_limit'] : null;
        
        $this->container['spaces'] = isset($data['spaces']) ? $data['spaces'] : null;
        
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
     * Gets account
     *
     * @return int
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param int $account The account in which the query has been executed.
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }
    

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The External ID of the query if one had been specified; otherwise null.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets failure_reason
     *
     * @return \PostFinanceCheckout\Sdk\Model\FailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \PostFinanceCheckout\Sdk\Model\FailureReason $failure_reason The reason of the failure if and only if the query has failed, otherwise null.
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

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
     * Gets processing_end_time
     *
     * @return \DateTime
     */
    public function getProcessingEndTime()
    {
        return $this->container['processing_end_time'];
    }

    /**
     * Sets processing_end_time
     *
     * @param \DateTime $processing_end_time The time at which processing of the query has finished (either successfully or by failure or by cancelation). Will be null if the query execution has not finished yet.
     *
     * @return $this
     */
    public function setProcessingEndTime($processing_end_time)
    {
        $this->container['processing_end_time'] = $processing_end_time;

        return $this;
    }
    

    /**
     * Gets processing_start_time
     *
     * @return \DateTime
     */
    public function getProcessingStartTime()
    {
        return $this->container['processing_start_time'];
    }

    /**
     * Sets processing_start_time
     *
     * @param \DateTime $processing_start_time The time at which processing of the query has started (never null).
     *
     * @return $this
     */
    public function setProcessingStartTime($processing_start_time)
    {
        $this->container['processing_start_time'] = $processing_start_time;

        return $this;
    }
    

    /**
     * Gets query_string
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->container['query_string'];
    }

    /**
     * Sets query_string
     *
     * @param string $query_string The SQL statement which has been submitted for execution.
     *
     * @return $this
     */
    public function setQueryString($query_string)
    {
        $this->container['query_string'] = $query_string;

        return $this;
    }
    

    /**
     * Gets scanned_data_in_gb
     *
     * @return float
     */
    public function getScannedDataInGb()
    {
        return $this->container['scanned_data_in_gb'];
    }

    /**
     * Sets scanned_data_in_gb
     *
     * @param float $scanned_data_in_gb The amount of data scanned while processing the query (in GB). (Note that this amount may increase over time while the query is still being processed and not finished yet.)
     *
     * @return $this
     */
    public function setScannedDataInGb($scanned_data_in_gb)
    {
        $this->container['scanned_data_in_gb'] = $scanned_data_in_gb;

        return $this;
    }
    

    /**
     * Gets scanned_data_limit
     *
     * @return float
     */
    public function getScannedDataLimit()
    {
        return $this->container['scanned_data_limit'];
    }

    /**
     * Sets scanned_data_limit
     *
     * @param float $scanned_data_limit The maximal amount of scanned data that this query is allowed to scan. After this limit is reached query will be canceled by the system.
     *
     * @return $this
     */
    public function setScannedDataLimit($scanned_data_limit)
    {
        $this->container['scanned_data_limit'] = $scanned_data_limit;

        return $this;
    }
    

    /**
     * Gets spaces
     *
     * @return int[]
     */
    public function getSpaces()
    {
        return $this->container['spaces'];
    }

    /**
     * Sets spaces
     *
     * @param int[] $spaces The spaces in which the query has been executed. May be empty if all spaces of the specified account have been queried.
     *
     * @return $this
     */
    public function setSpaces($spaces)
    {
        $this->container['spaces'] = $spaces;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\AnalyticsQueryExecutionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\AnalyticsQueryExecutionState $state The current state of the query execution.
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


