<?php
/**
 * PostFinance Php SDK
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
 * AnalyticsQueryExecutionRequest model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class AnalyticsQueryExecutionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AnalyticsQueryExecutionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sftp_dispatch_settings_id' => 'int',
        'sftp_dispatch_result_file_rename_pattern' => 'string',
        'sql' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sftp_dispatch_settings_id' => 'int64',
        'sftp_dispatch_result_file_rename_pattern' => null,
        'sql' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sftp_dispatch_settings_id' => false,
        'sftp_dispatch_result_file_rename_pattern' => false,
        'sql' => false
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
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
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
        'sftp_dispatch_settings_id' => 'sftpDispatchSettingsId',
        'sftp_dispatch_result_file_rename_pattern' => 'sftpDispatchResultFileRenamePattern',
        'sql' => 'sql'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sftp_dispatch_settings_id' => 'setSftpDispatchSettingsId',
        'sftp_dispatch_result_file_rename_pattern' => 'setSftpDispatchResultFileRenamePattern',
        'sql' => 'setSql'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sftp_dispatch_settings_id' => 'getSftpDispatchSettingsId',
        'sftp_dispatch_result_file_rename_pattern' => 'getSftpDispatchResultFileRenamePattern',
        'sql' => 'getSql'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('sftp_dispatch_settings_id', $data ?? [], null);
        $this->setIfExists('sftp_dispatch_result_file_rename_pattern', $data ?? [], null);
        $this->setIfExists('sql', $data ?? [], null);
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

        if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) > 100000)) {
            $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 100000.";
        }

        if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) < 3)) {
            $invalidProperties[] = "invalid value for 'sql', the character length must be bigger than or equal to 3.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sftp_dispatch_settings_id
     *
     * @return int|null
     */
    public function getSftpDispatchSettingsId()
    {
        return $this->container['sftp_dispatch_settings_id'];
    }

    /**
     * Sets sftp_dispatch_settings_id
     *
     * @param int|null $sftp_dispatch_settings_id Optional. ID of the active SFTP configuration to use (associated with the target account). This is only required if the result file is scheduled for delivery to a remote SFTP server.
     *
     * @return self
     */
    public function setSftpDispatchSettingsId($sftp_dispatch_settings_id)
    {
        if (is_null($sftp_dispatch_settings_id)) {
            throw new \InvalidArgumentException('non-nullable sftp_dispatch_settings_id cannot be null');
        }
        $this->container['sftp_dispatch_settings_id'] = $sftp_dispatch_settings_id;

        return $this;
    }

    /**
     * Gets sftp_dispatch_result_file_rename_pattern
     *
     * @return string|null
     */
    public function getSftpDispatchResultFileRenamePattern()
    {
        return $this->container['sftp_dispatch_result_file_rename_pattern'];
    }

    /**
     * Sets sftp_dispatch_result_file_rename_pattern
     *
     * @param string|null $sftp_dispatch_result_file_rename_pattern Optional. Renaming pattern used for the result file during SFTP delivery. You can use a combination of fixed Latin text and timestamp variables (e.g., \"transaction_report_{YYYMMDD_hhmmss}\"). Supported variable formats: DDMMYY, MMDDYY, YYYYMMDD, DD_MM_YY, DD-MM-YY, YYYY-MM-DD, YYYY_MM_DD, YYYYMMDD_hhmmss, YYYY-MM-DD_hh-mm-ss.
     *
     * @return self
     */
    public function setSftpDispatchResultFileRenamePattern($sftp_dispatch_result_file_rename_pattern)
    {
        if (is_null($sftp_dispatch_result_file_rename_pattern)) {
            throw new \InvalidArgumentException('non-nullable sftp_dispatch_result_file_rename_pattern cannot be null');
        }
        $this->container['sftp_dispatch_result_file_rename_pattern'] = $sftp_dispatch_result_file_rename_pattern;

        return $this;
    }

    /**
     * Gets sql
     *
     * @return string|null
     */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
     * Sets sql
     *
     * @param string|null $sql The SQL query (in PrestoDB dialect) to execute on the analytics database. This query defines exactly which data should be retrieved.
     *
     * @return self
     */
    public function setSql($sql)
    {
        if (is_null($sql)) {
            throw new \InvalidArgumentException('non-nullable sql cannot be null');
        }
        if ((mb_strlen($sql) > 100000)) {
            throw new \InvalidArgumentException('invalid length for $sql when calling AnalyticsQueryExecutionRequest., must be smaller than or equal to 100000.');
        }
        if ((mb_strlen($sql) < 3)) {
            throw new \InvalidArgumentException('invalid length for $sql when calling AnalyticsQueryExecutionRequest., must be bigger than or equal to 3.');
        }

        $this->container['sql'] = $sql;

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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, mixed $value): void
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
    public function jsonSerialize(): mixed
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


