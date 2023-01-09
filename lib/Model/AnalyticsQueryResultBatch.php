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
 * AnalyticsQueryResultBatch model
 *
 * @category    Class
 * @description A batch of the result of a query executed in Analytics.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AnalyticsQueryResultBatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsQueryResultBatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'columns' => '\PostFinanceCheckout\Sdk\Model\AnalyticsSchemaColumn[]',
        'next_token' => 'string',
        'query_execution' => '\PostFinanceCheckout\Sdk\Model\AnalyticsQueryExecution',
        'rows' => 'string[][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'columns' => null,
        'next_token' => null,
        'query_execution' => null,
        'rows' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'columns' => 'columns',
        'next_token' => 'nextToken',
        'query_execution' => 'queryExecution',
        'rows' => 'rows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'columns' => 'setColumns',
        'next_token' => 'setNextToken',
        'query_execution' => 'setQueryExecution',
        'rows' => 'setRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'columns' => 'getColumns',
        'next_token' => 'getNextToken',
        'query_execution' => 'getQueryExecution',
        'rows' => 'getRows'
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
        
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        
        $this->container['query_execution'] = isset($data['query_execution']) ? $data['query_execution'] : null;
        
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        
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
     * Gets columns
     *
     * @return \PostFinanceCheckout\Sdk\Model\AnalyticsSchemaColumn[]
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param \PostFinanceCheckout\Sdk\Model\AnalyticsSchemaColumn[] $columns The schemas of the columns returned by the query (in order). Will be null if the results of the query are not (yet) available.
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
    }
    

    /**
     * Gets next_token
     *
     * @return string
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token
     *
     * @param string $next_token The token to be provided to fetch the next batch of results. May be null if no more result batches are available.
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

        return $this;
    }
    

    /**
     * Gets query_execution
     *
     * @return \PostFinanceCheckout\Sdk\Model\AnalyticsQueryExecution
     */
    public function getQueryExecution()
    {
        return $this->container['query_execution'];
    }

    /**
     * Sets query_execution
     *
     * @param \PostFinanceCheckout\Sdk\Model\AnalyticsQueryExecution $query_execution The query execution which produced the result.
     *
     * @return $this
     */
    public function setQueryExecution($query_execution)
    {
        $this->container['query_execution'] = $query_execution;

        return $this;
    }
    

    /**
     * Gets rows
     *
     * @return string[][]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param string[][] $rows The rows of the result set contained in this batch where each row is a list of column values (in order of the columns specified in the query). Will be null if the results of the query are not (yet) available.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

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


