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
 * AnalyticsQuery model
 *
 * @category    Class
 * @description Represents a query to be submitted for execution in Analytics.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AnalyticsQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'int',
        'external_id' => 'string',
        'max_cache_age' => 'int',
        'query_string' => 'string',
        'scanned_data_limit' => 'float',
        'space_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'int64',
        'external_id' => null,
        'max_cache_age' => 'int32',
        'query_string' => null,
        'scanned_data_limit' => null,
        'space_ids' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'accountId',
        'external_id' => 'externalId',
        'max_cache_age' => 'maxCacheAge',
        'query_string' => 'queryString',
        'scanned_data_limit' => 'scannedDataLimit',
        'space_ids' => 'spaceIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'external_id' => 'setExternalId',
        'max_cache_age' => 'setMaxCacheAge',
        'query_string' => 'setQueryString',
        'scanned_data_limit' => 'setScannedDataLimit',
        'space_ids' => 'setSpaceIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'external_id' => 'getExternalId',
        'max_cache_age' => 'getMaxCacheAge',
        'query_string' => 'getQueryString',
        'scanned_data_limit' => 'getScannedDataLimit',
        'space_ids' => 'getSpaceIds'
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
        
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['max_cache_age'] = isset($data['max_cache_age']) ? $data['max_cache_age'] : null;
        
        $this->container['query_string'] = isset($data['query_string']) ? $data['query_string'] : null;
        
        $this->container['scanned_data_limit'] = isset($data['scanned_data_limit']) ? $data['scanned_data_limit'] : null;
        
        $this->container['space_ids'] = isset($data['space_ids']) ? $data['space_ids'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if (!is_null($this->container['query_string']) && (mb_strlen($this->container['query_string']) > 4096)) {
            $invalidProperties[] = "invalid value for 'query_string', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['query_string']) && (mb_strlen($this->container['query_string']) < 1)) {
            $invalidProperties[] = "invalid value for 'query_string', the character length must be bigger than or equal to 1.";
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
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id The mandatory ID of an account in which the query shall be executed. Must be a valid account ID greater than 0.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param string $external_id A client generated nonce which uniquely identifies the query to be executed. Subsequent submissions with the same external ID will not re-execute the query but instead return the existing execution with that ID. Either the External ID or a Maximal Cache Age greater than 0 must be specified. If both are specified the External ID will have precedence and the Maximal Cache Age will be ignored.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets max_cache_age
     *
     * @return int
     */
    public function getMaxCacheAge()
    {
        return $this->container['max_cache_age'];
    }

    /**
     * Sets max_cache_age
     *
     * @param int $max_cache_age The maximal age in minutes of cached query executions to return. If an equivalent query execution with the same Query String, Account ID and Spaces parameters not older than the specified age is already available that execution will be returned instead of a newly started execution. Set to 0 or null (and set a unique, previously unused External ID) to force a new query execution irrespective of previous executions. Either the External ID or a Cache Duration greater than 0 must be specified. If both are specified, the External ID will be preferred (and the Maximal Cache Age ignored).
     *
     * @return $this
     */
    public function setMaxCacheAge($max_cache_age)
    {
        $this->container['max_cache_age'] = $max_cache_age;

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
     * @param string $query_string The SQL statement which is being submitted for execution. Must be a valid PrestoDB/Athena SQL statement.
     *
     * @return $this
     */
    public function setQueryString($query_string)
    {
        if (!is_null($query_string) && (mb_strlen($query_string) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $query_string when calling AnalyticsQuery., must be smaller than or equal to 4096.');
        }
        if (!is_null($query_string) && (mb_strlen($query_string) < 1)) {
            throw new \InvalidArgumentException('invalid length for $query_string when calling AnalyticsQuery., must be bigger than or equal to 1.');
        }

        $this->container['query_string'] = $query_string;

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
     * Gets space_ids
     *
     * @return int[]
     */
    public function getSpaceIds()
    {
        return $this->container['space_ids'];
    }

    /**
     * Sets space_ids
     *
     * @param int[] $space_ids The IDs of the spaces in which the query shall be executed. At most 5 space IDs may be specified. All specified spaces must be owned by the account specified by the accountId property. The spaces property may be missing or empty to query all spaces of the specified account.
     *
     * @return $this
     */
    public function setSpaceIds($space_ids)
    {
        $this->container['space_ids'] = $space_ids;

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


