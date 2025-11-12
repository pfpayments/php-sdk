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
 * PaymentTerminalConfigurationVersion model
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
class PaymentTerminalConfigurationVersion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerminalConfigurationVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'maintenance_window_start' => 'string',
        'configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalConfiguration',
        'planned_purge_date' => '\DateTime',
        'time_zone' => 'string',
        'version_applied_immediately' => 'bool',
        'created_on' => '\DateTime',
        'version' => 'int',
        'linked_space_id' => 'int',
        'connector_configurations' => 'int[]',
        'created_by' => 'int',
        'default_currency' => 'string',
        'maintenance_window_duration' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalConfigurationVersionState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'maintenance_window_start' => null,
        'configuration' => null,
        'planned_purge_date' => 'date-time',
        'time_zone' => null,
        'version_applied_immediately' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'linked_space_id' => 'int64',
        'connector_configurations' => 'int64',
        'created_by' => 'int64',
        'default_currency' => null,
        'maintenance_window_duration' => null,
        'id' => 'int64',
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'maintenance_window_start' => false,
        'configuration' => false,
        'planned_purge_date' => false,
        'time_zone' => false,
        'version_applied_immediately' => false,
        'created_on' => false,
        'version' => false,
        'linked_space_id' => false,
        'connector_configurations' => false,
        'created_by' => false,
        'default_currency' => false,
        'maintenance_window_duration' => false,
        'id' => false,
        'state' => false
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
        'maintenance_window_start' => 'maintenanceWindowStart',
        'configuration' => 'configuration',
        'planned_purge_date' => 'plannedPurgeDate',
        'time_zone' => 'timeZone',
        'version_applied_immediately' => 'versionAppliedImmediately',
        'created_on' => 'createdOn',
        'version' => 'version',
        'linked_space_id' => 'linkedSpaceId',
        'connector_configurations' => 'connectorConfigurations',
        'created_by' => 'createdBy',
        'default_currency' => 'defaultCurrency',
        'maintenance_window_duration' => 'maintenanceWindowDuration',
        'id' => 'id',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maintenance_window_start' => 'setMaintenanceWindowStart',
        'configuration' => 'setConfiguration',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'time_zone' => 'setTimeZone',
        'version_applied_immediately' => 'setVersionAppliedImmediately',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'linked_space_id' => 'setLinkedSpaceId',
        'connector_configurations' => 'setConnectorConfigurations',
        'created_by' => 'setCreatedBy',
        'default_currency' => 'setDefaultCurrency',
        'maintenance_window_duration' => 'setMaintenanceWindowDuration',
        'id' => 'setId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maintenance_window_start' => 'getMaintenanceWindowStart',
        'configuration' => 'getConfiguration',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'time_zone' => 'getTimeZone',
        'version_applied_immediately' => 'getVersionAppliedImmediately',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'linked_space_id' => 'getLinkedSpaceId',
        'connector_configurations' => 'getConnectorConfigurations',
        'created_by' => 'getCreatedBy',
        'default_currency' => 'getDefaultCurrency',
        'maintenance_window_duration' => 'getMaintenanceWindowDuration',
        'id' => 'getId',
        'state' => 'getState'
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
        $this->setIfExists('maintenance_window_start', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('version_applied_immediately', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('connector_configurations', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('default_currency', $data ?? [], null);
        $this->setIfExists('maintenance_window_duration', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets maintenance_window_start
     *
     * @return string|null
     */
    public function getMaintenanceWindowStart()
    {
        return $this->container['maintenance_window_start'];
    }

    /**
     * Sets maintenance_window_start
     *
     * @param string|null $maintenance_window_start The start time of the terminal's maintenance window.
     *
     * @return self
     */
    public function setMaintenanceWindowStart($maintenance_window_start)
    {
        if (is_null($maintenance_window_start)) {
            throw new \InvalidArgumentException('non-nullable maintenance_window_start cannot be null');
        }
        $this->container['maintenance_window_start'] = $maintenance_window_start;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalConfiguration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        if (is_null($configuration)) {
            throw new \InvalidArgumentException('non-nullable configuration cannot be null');
        }
        $this->container['configuration'] = $configuration;

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
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The time zone of the payment terminal used to determine the maintenance window.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets version_applied_immediately
     *
     * @return bool|null
     */
    public function getVersionAppliedImmediately()
    {
        return $this->container['version_applied_immediately'];
    }

    /**
     * Sets version_applied_immediately
     *
     * @param bool|null $version_applied_immediately Whether payment terminals are immediately updated to this configuration version. If not, it will be applied during the maintenance window.
     *
     * @return self
     */
    public function setVersionAppliedImmediately($version_applied_immediately)
    {
        if (is_null($version_applied_immediately)) {
            throw new \InvalidArgumentException('non-nullable version_applied_immediately cannot be null');
        }
        $this->container['version_applied_immediately'] = $version_applied_immediately;

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
     * Gets connector_configurations
     *
     * @return int[]|null
     */
    public function getConnectorConfigurations()
    {
        return $this->container['connector_configurations'];
    }

    /**
     * Sets connector_configurations
     *
     * @param int[]|null $connector_configurations The payment connector configurations that are available on the payment terminal.
     *
     * @return self
     */
    public function setConnectorConfigurations($connector_configurations)
    {
        if (is_null($connector_configurations)) {
            throw new \InvalidArgumentException('non-nullable connector_configurations cannot be null');
        }
        $this->container['connector_configurations'] = $connector_configurations;

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
     * @param int|null $created_by The ID of the user the payment terminal configuration version was created by.
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
     * Gets default_currency
     *
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->container['default_currency'];
    }

    /**
     * Sets default_currency
     *
     * @param string|null $default_currency The default currency that is used if none is set on the payment terminal itself. If it is empty, the currency is derived from the location of the terminal.
     *
     * @return self
     */
    public function setDefaultCurrency($default_currency)
    {
        if (is_null($default_currency)) {
            throw new \InvalidArgumentException('non-nullable default_currency cannot be null');
        }
        $this->container['default_currency'] = $default_currency;

        return $this;
    }

    /**
     * Gets maintenance_window_duration
     *
     * @return string|null
     */
    public function getMaintenanceWindowDuration()
    {
        return $this->container['maintenance_window_duration'];
    }

    /**
     * Sets maintenance_window_duration
     *
     * @param string|null $maintenance_window_duration The permitted duration of the terminal's maintenance window.
     *
     * @return self
     */
    public function setMaintenanceWindowDuration($maintenance_window_duration)
    {
        if (is_null($maintenance_window_duration)) {
            throw new \InvalidArgumentException('non-nullable maintenance_window_duration cannot be null');
        }
        $this->container['maintenance_window_duration'] = $maintenance_window_duration;

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
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalConfigurationVersionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalConfigurationVersionState|null $state state
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


