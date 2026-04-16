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
 * SubmittedAnalyticsQueryExecution model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 * @implements \ArrayAccess<string, mixed>
 */
class SubmittedAnalyticsQueryExecution implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubmittedAnalyticsQueryExecution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query_external_id' => 'string',
        'account_id' => 'int',
        'total_billed_execution_time_ms' => 'int',
        'created_timestamp' => '\DateTime',
        'download_requests' => 'int',
        'original_query' => 'string',
        'scanned_bytes' => 'int',
        'portal_query_token' => 'string',
        'result_file_bytes' => 'int',
        'status' => '\PostFinanceCheckout\Sdk\Model\FacadeUserFriendlyQueryStatusModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'query_external_id' => null,
        'account_id' => 'int64',
        'total_billed_execution_time_ms' => null,
        'created_timestamp' => 'date-time',
        'download_requests' => 'int64',
        'original_query' => null,
        'scanned_bytes' => null,
        'portal_query_token' => null,
        'result_file_bytes' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query_external_id' => false,
        'account_id' => false,
        'total_billed_execution_time_ms' => false,
        'created_timestamp' => false,
        'download_requests' => false,
        'original_query' => false,
        'scanned_bytes' => false,
        'portal_query_token' => false,
        'result_file_bytes' => false,
        'status' => false
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
        'query_external_id' => 'queryExternalId',
        'account_id' => 'accountId',
        'total_billed_execution_time_ms' => 'totalBilledExecutionTimeMs',
        'created_timestamp' => 'createdTimestamp',
        'download_requests' => 'downloadRequests',
        'original_query' => 'originalQuery',
        'scanned_bytes' => 'scannedBytes',
        'portal_query_token' => 'portalQueryToken',
        'result_file_bytes' => 'resultFileBytes',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query_external_id' => 'setQueryExternalId',
        'account_id' => 'setAccountId',
        'total_billed_execution_time_ms' => 'setTotalBilledExecutionTimeMs',
        'created_timestamp' => 'setCreatedTimestamp',
        'download_requests' => 'setDownloadRequests',
        'original_query' => 'setOriginalQuery',
        'scanned_bytes' => 'setScannedBytes',
        'portal_query_token' => 'setPortalQueryToken',
        'result_file_bytes' => 'setResultFileBytes',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query_external_id' => 'getQueryExternalId',
        'account_id' => 'getAccountId',
        'total_billed_execution_time_ms' => 'getTotalBilledExecutionTimeMs',
        'created_timestamp' => 'getCreatedTimestamp',
        'download_requests' => 'getDownloadRequests',
        'original_query' => 'getOriginalQuery',
        'scanned_bytes' => 'getScannedBytes',
        'portal_query_token' => 'getPortalQueryToken',
        'result_file_bytes' => 'getResultFileBytes',
        'status' => 'getStatus'
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
        $this->setIfExists('query_external_id', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('total_billed_execution_time_ms', $data ?? [], null);
        $this->setIfExists('created_timestamp', $data ?? [], null);
        $this->setIfExists('download_requests', $data ?? [], null);
        $this->setIfExists('original_query', $data ?? [], null);
        $this->setIfExists('scanned_bytes', $data ?? [], null);
        $this->setIfExists('portal_query_token', $data ?? [], null);
        $this->setIfExists('result_file_bytes', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets query_external_id
     *
     * @return string|null
     */
    public function getQueryExternalId()
    {
        return $this->container['query_external_id'];
    }

    /**
     * Sets query_external_id
     *
     * @param string|null $query_external_id The external id associated with this query, if any.
     *
     * @return self
     */
    public function setQueryExternalId($query_external_id)
    {
        if (is_null($query_external_id)) {
            throw new \InvalidArgumentException('non-nullable query_external_id cannot be null');
        }
        $this->container['query_external_id'] = $query_external_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id The ID of the target account for which the analytics query will be executed, determining the data scope for the request.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets total_billed_execution_time_ms
     *
     * @return int|null
     */
    public function getTotalBilledExecutionTimeMs()
    {
        return $this->container['total_billed_execution_time_ms'];
    }

    /**
     * Sets total_billed_execution_time_ms
     *
     * @param int|null $total_billed_execution_time_ms The total execution time, in milliseconds, that has been billed for the query.
     *
     * @return self
     */
    public function setTotalBilledExecutionTimeMs($total_billed_execution_time_ms)
    {
        if (is_null($total_billed_execution_time_ms)) {
            throw new \InvalidArgumentException('non-nullable total_billed_execution_time_ms cannot be null');
        }
        $this->container['total_billed_execution_time_ms'] = $total_billed_execution_time_ms;

        return $this;
    }

    /**
     * Gets created_timestamp
     *
     * @return \DateTime|null
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param \DateTime|null $created_timestamp The date and time when the query was created.
     *
     * @return self
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        if (is_null($created_timestamp)) {
            throw new \InvalidArgumentException('non-nullable created_timestamp cannot be null');
        }
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets download_requests
     *
     * @return int|null
     */
    public function getDownloadRequests()
    {
        return $this->container['download_requests'];
    }

    /**
     * Sets download_requests
     *
     * @param int|null $download_requests The number of times the query result file has been downloaded.
     *
     * @return self
     */
    public function setDownloadRequests($download_requests)
    {
        if (is_null($download_requests)) {
            throw new \InvalidArgumentException('non-nullable download_requests cannot be null');
        }
        $this->container['download_requests'] = $download_requests;

        return $this;
    }

    /**
     * Gets original_query
     *
     * @return string|null
     */
    public function getOriginalQuery()
    {
        return $this->container['original_query'];
    }

    /**
     * Sets original_query
     *
     * @param string|null $original_query The SQL query as originally submitted by the user.
     *
     * @return self
     */
    public function setOriginalQuery($original_query)
    {
        if (is_null($original_query)) {
            throw new \InvalidArgumentException('non-nullable original_query cannot be null');
        }
        $this->container['original_query'] = $original_query;

        return $this;
    }

    /**
     * Gets scanned_bytes
     *
     * @return int|null
     */
    public function getScannedBytes()
    {
        return $this->container['scanned_bytes'];
    }

    /**
     * Sets scanned_bytes
     *
     * @param int|null $scanned_bytes The total bytes of data scanned by the submitted query.
     *
     * @return self
     */
    public function setScannedBytes($scanned_bytes)
    {
        if (is_null($scanned_bytes)) {
            throw new \InvalidArgumentException('non-nullable scanned_bytes cannot be null');
        }
        $this->container['scanned_bytes'] = $scanned_bytes;

        return $this;
    }

    /**
     * Gets portal_query_token
     *
     * @return string|null
     */
    public function getPortalQueryToken()
    {
        return $this->container['portal_query_token'];
    }

    /**
     * Sets portal_query_token
     *
     * @param string|null $portal_query_token The unique query token associated with the analytics query execution.
     *
     * @return self
     */
    public function setPortalQueryToken($portal_query_token)
    {
        if (is_null($portal_query_token)) {
            throw new \InvalidArgumentException('non-nullable portal_query_token cannot be null');
        }
        $this->container['portal_query_token'] = $portal_query_token;

        return $this;
    }

    /**
     * Gets result_file_bytes
     *
     * @return int|null
     */
    public function getResultFileBytes()
    {
        return $this->container['result_file_bytes'];
    }

    /**
     * Sets result_file_bytes
     *
     * @param int|null $result_file_bytes The size, in bytes, of the result file generated by the query.
     *
     * @return self
     */
    public function setResultFileBytes($result_file_bytes)
    {
        if (is_null($result_file_bytes)) {
            throw new \InvalidArgumentException('non-nullable result_file_bytes cannot be null');
        }
        $this->container['result_file_bytes'] = $result_file_bytes;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \PostFinanceCheckout\Sdk\Model\FacadeUserFriendlyQueryStatusModel|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PostFinanceCheckout\Sdk\Model\FacadeUserFriendlyQueryStatusModel|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


