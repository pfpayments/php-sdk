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
 * PaymentTerminal model
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
class PaymentTerminal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerminal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => 'string',
        'deactivated_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'type' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalType',
        'device_name' => 'string',
        'version' => 'int',
        'device_serial_number' => 'string',
        'linked_space_id' => 'int',
        'configuration_version' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalConfigurationVersion',
        'location_version' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalLocationVersion',
        'activated_on' => '\DateTime',
        'decommissioned_on' => '\DateTime',
        'default_currency' => 'string',
        'name' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifier' => null,
        'deactivated_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'type' => null,
        'device_name' => null,
        'version' => 'int32',
        'device_serial_number' => null,
        'linked_space_id' => 'int64',
        'configuration_version' => null,
        'location_version' => null,
        'activated_on' => 'date-time',
        'decommissioned_on' => 'date-time',
        'default_currency' => null,
        'name' => null,
        'id' => 'int64',
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'identifier' => false,
        'deactivated_on' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'type' => false,
        'device_name' => false,
        'version' => false,
        'device_serial_number' => false,
        'linked_space_id' => false,
        'configuration_version' => false,
        'location_version' => false,
        'activated_on' => false,
        'decommissioned_on' => false,
        'default_currency' => false,
        'name' => false,
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
        'identifier' => 'identifier',
        'deactivated_on' => 'deactivatedOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'type' => 'type',
        'device_name' => 'deviceName',
        'version' => 'version',
        'device_serial_number' => 'deviceSerialNumber',
        'linked_space_id' => 'linkedSpaceId',
        'configuration_version' => 'configurationVersion',
        'location_version' => 'locationVersion',
        'activated_on' => 'activatedOn',
        'decommissioned_on' => 'decommissionedOn',
        'default_currency' => 'defaultCurrency',
        'name' => 'name',
        'id' => 'id',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'deactivated_on' => 'setDeactivatedOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'type' => 'setType',
        'device_name' => 'setDeviceName',
        'version' => 'setVersion',
        'device_serial_number' => 'setDeviceSerialNumber',
        'linked_space_id' => 'setLinkedSpaceId',
        'configuration_version' => 'setConfigurationVersion',
        'location_version' => 'setLocationVersion',
        'activated_on' => 'setActivatedOn',
        'decommissioned_on' => 'setDecommissionedOn',
        'default_currency' => 'setDefaultCurrency',
        'name' => 'setName',
        'id' => 'setId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'deactivated_on' => 'getDeactivatedOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'type' => 'getType',
        'device_name' => 'getDeviceName',
        'version' => 'getVersion',
        'device_serial_number' => 'getDeviceSerialNumber',
        'linked_space_id' => 'getLinkedSpaceId',
        'configuration_version' => 'getConfigurationVersion',
        'location_version' => 'getLocationVersion',
        'activated_on' => 'getActivatedOn',
        'decommissioned_on' => 'getDecommissionedOn',
        'default_currency' => 'getDefaultCurrency',
        'name' => 'getName',
        'id' => 'getId',
        'state' => 'getState'
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
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('deactivated_on', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('device_name', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('device_serial_number', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('configuration_version', $data ?? [], null);
        $this->setIfExists('location_version', $data ?? [], null);
        $this->setIfExists('activated_on', $data ?? [], null);
        $this->setIfExists('decommissioned_on', $data ?? [], null);
        $this->setIfExists('default_currency', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
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
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier The unique identifier of the terminal, that is displayed on the device.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets deactivated_on
     *
     * @return \DateTime|null
     */
    public function getDeactivatedOn()
    {
        return $this->container['deactivated_on'];
    }

    /**
     * Sets deactivated_on
     *
     * @param \DateTime|null $deactivated_on deactivated_on
     *
     * @return self
     */
    public function setDeactivatedOn($deactivated_on)
    {
        if (is_null($deactivated_on)) {
            throw new \InvalidArgumentException('non-nullable deactivated_on cannot be null');
        }
        $this->container['deactivated_on'] = $deactivated_on;

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
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id A client-generated nonce which uniquely identifies some action to be executed. Subsequent requests with the same external ID do not execute the action again, but return the original result.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets device_name
     *
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->container['device_name'];
    }

    /**
     * Sets device_name
     *
     * @param string|null $device_name The name of the device that is currently linked to the payment terminal.
     *
     * @return self
     */
    public function setDeviceName($device_name)
    {
        if (is_null($device_name)) {
            throw new \InvalidArgumentException('non-nullable device_name cannot be null');
        }
        $this->container['device_name'] = $device_name;

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
     * Gets device_serial_number
     *
     * @return string|null
     */
    public function getDeviceSerialNumber()
    {
        return $this->container['device_serial_number'];
    }

    /**
     * Sets device_serial_number
     *
     * @param string|null $device_serial_number The serial number of the device that is currently linked to the payment terminal.
     *
     * @return self
     */
    public function setDeviceSerialNumber($device_serial_number)
    {
        if (is_null($device_serial_number)) {
            throw new \InvalidArgumentException('non-nullable device_serial_number cannot be null');
        }
        $this->container['device_serial_number'] = $device_serial_number;

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
     * Gets configuration_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalConfigurationVersion|null
     */
    public function getConfigurationVersion()
    {
        return $this->container['configuration_version'];
    }

    /**
     * Sets configuration_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalConfigurationVersion|null $configuration_version configuration_version
     *
     * @return self
     */
    public function setConfigurationVersion($configuration_version)
    {
        if (is_null($configuration_version)) {
            throw new \InvalidArgumentException('non-nullable configuration_version cannot be null');
        }
        $this->container['configuration_version'] = $configuration_version;

        return $this;
    }

    /**
     * Gets location_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalLocationVersion|null
     */
    public function getLocationVersion()
    {
        return $this->container['location_version'];
    }

    /**
     * Sets location_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalLocationVersion|null $location_version location_version
     *
     * @return self
     */
    public function setLocationVersion($location_version)
    {
        if (is_null($location_version)) {
            throw new \InvalidArgumentException('non-nullable location_version cannot be null');
        }
        $this->container['location_version'] = $location_version;

        return $this;
    }

    /**
     * Gets activated_on
     *
     * @return \DateTime|null
     */
    public function getActivatedOn()
    {
        return $this->container['activated_on'];
    }

    /**
     * Sets activated_on
     *
     * @param \DateTime|null $activated_on activated_on
     *
     * @return self
     */
    public function setActivatedOn($activated_on)
    {
        if (is_null($activated_on)) {
            throw new \InvalidArgumentException('non-nullable activated_on cannot be null');
        }
        $this->container['activated_on'] = $activated_on;

        return $this;
    }

    /**
     * Gets decommissioned_on
     *
     * @return \DateTime|null
     */
    public function getDecommissionedOn()
    {
        return $this->container['decommissioned_on'];
    }

    /**
     * Sets decommissioned_on
     *
     * @param \DateTime|null $decommissioned_on decommissioned_on
     *
     * @return self
     */
    public function setDecommissionedOn($decommissioned_on)
    {
        if (is_null($decommissioned_on)) {
            throw new \InvalidArgumentException('non-nullable decommissioned_on cannot be null');
        }
        $this->container['decommissioned_on'] = $decommissioned_on;

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
     * @param string|null $default_currency The default currency of the terminal.
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
     * @param string|null $name The name used to identify the payment terminal.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentTerminal., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

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
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalState|null $state state
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


