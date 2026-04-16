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
 * Scope model
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
class Scope implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Scope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'planned_purge_date' => '\DateTime',
        'ssl_active' => 'bool',
        'version' => 'int',
        'machine_name' => 'string',
        'url' => 'string',
        'features' => '\PostFinanceCheckout\Sdk\Model\Feature[]',
        'themes' => 'string[]',
        'port' => 'int',
        'preprod_domain_name' => 'string',
        'domain_name' => 'string',
        'name' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
        'sandbox_domain_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'planned_purge_date' => 'date-time',
        'ssl_active' => null,
        'version' => 'int32',
        'machine_name' => null,
        'url' => null,
        'features' => null,
        'themes' => null,
        'port' => 'int32',
        'preprod_domain_name' => null,
        'domain_name' => null,
        'name' => null,
        'id' => 'int64',
        'state' => null,
        'sandbox_domain_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'planned_purge_date' => false,
        'ssl_active' => false,
        'version' => false,
        'machine_name' => false,
        'url' => false,
        'features' => false,
        'themes' => false,
        'port' => false,
        'preprod_domain_name' => false,
        'domain_name' => false,
        'name' => false,
        'id' => false,
        'state' => false,
        'sandbox_domain_name' => false
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
        'planned_purge_date' => 'plannedPurgeDate',
        'ssl_active' => 'sslActive',
        'version' => 'version',
        'machine_name' => 'machineName',
        'url' => 'url',
        'features' => 'features',
        'themes' => 'themes',
        'port' => 'port',
        'preprod_domain_name' => 'preprodDomainName',
        'domain_name' => 'domainName',
        'name' => 'name',
        'id' => 'id',
        'state' => 'state',
        'sandbox_domain_name' => 'sandboxDomainName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planned_purge_date' => 'setPlannedPurgeDate',
        'ssl_active' => 'setSslActive',
        'version' => 'setVersion',
        'machine_name' => 'setMachineName',
        'url' => 'setUrl',
        'features' => 'setFeatures',
        'themes' => 'setThemes',
        'port' => 'setPort',
        'preprod_domain_name' => 'setPreprodDomainName',
        'domain_name' => 'setDomainName',
        'name' => 'setName',
        'id' => 'setId',
        'state' => 'setState',
        'sandbox_domain_name' => 'setSandboxDomainName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planned_purge_date' => 'getPlannedPurgeDate',
        'ssl_active' => 'getSslActive',
        'version' => 'getVersion',
        'machine_name' => 'getMachineName',
        'url' => 'getUrl',
        'features' => 'getFeatures',
        'themes' => 'getThemes',
        'port' => 'getPort',
        'preprod_domain_name' => 'getPreprodDomainName',
        'domain_name' => 'getDomainName',
        'name' => 'getName',
        'id' => 'getId',
        'state' => 'getState',
        'sandbox_domain_name' => 'getSandboxDomainName'
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
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('ssl_active', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('machine_name', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('features', $data ?? [], null);
        $this->setIfExists('themes', $data ?? [], null);
        $this->setIfExists('port', $data ?? [], null);
        $this->setIfExists('preprod_domain_name', $data ?? [], null);
        $this->setIfExists('domain_name', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('sandbox_domain_name', $data ?? [], null);
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

        if (!is_null($this->container['machine_name']) && (mb_strlen($this->container['machine_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'machine_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['machine_name']) && !preg_match("/([A-Z][A-Za-z0-9]+)(_([A-Z][A-Za-z0-9]+))*/", $this->container['machine_name'])) {
            $invalidProperties[] = "invalid value for 'machine_name', must be conform to the pattern /([A-Z][A-Za-z0-9]+)(_([A-Z][A-Za-z0-9]+))*/.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['preprod_domain_name']) && (mb_strlen($this->container['preprod_domain_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'preprod_domain_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['domain_name']) && (mb_strlen($this->container['domain_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'domain_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['sandbox_domain_name']) && (mb_strlen($this->container['sandbox_domain_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'sandbox_domain_name', the character length must be smaller than or equal to 100.";
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
     * Gets ssl_active
     *
     * @return bool|null
     */
    public function getSslActive()
    {
        return $this->container['ssl_active'];
    }

    /**
     * Sets ssl_active
     *
     * @param bool|null $ssl_active Whether the scope supports SSL.
     *
     * @return self
     */
    public function setSslActive($ssl_active)
    {
        if (is_null($ssl_active)) {
            throw new \InvalidArgumentException('non-nullable ssl_active cannot be null');
        }
        $this->container['ssl_active'] = $ssl_active;

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
     * Gets machine_name
     *
     * @return string|null
     */
    public function getMachineName()
    {
        return $this->container['machine_name'];
    }

    /**
     * Sets machine_name
     *
     * @param string|null $machine_name The name identifying the scope in e.g. URLs.
     *
     * @return self
     */
    public function setMachineName($machine_name)
    {
        if (is_null($machine_name)) {
            throw new \InvalidArgumentException('non-nullable machine_name cannot be null');
        }
        if ((mb_strlen($machine_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $machine_name when calling Scope., must be smaller than or equal to 50.');
        }
        if ((!preg_match("/([A-Z][A-Za-z0-9]+)(_([A-Z][A-Za-z0-9]+))*/", ObjectSerializer::toString($machine_name)))) {
            throw new \InvalidArgumentException("invalid value for \$machine_name when calling Scope., must conform to the pattern /([A-Z][A-Za-z0-9]+)(_([A-Z][A-Za-z0-9]+))*/.");
        }

        $this->container['machine_name'] = $machine_name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL where the scope can be accessed.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \PostFinanceCheckout\Sdk\Model\Feature[]|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \PostFinanceCheckout\Sdk\Model\Feature[]|null $features The list of features that are active in the scope.
     *
     * @return self
     */
    public function setFeatures($features)
    {
        if (is_null($features)) {
            throw new \InvalidArgumentException('non-nullable features cannot be null');
        }


        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets themes
     *
     * @return string[]|null
     */
    public function getThemes()
    {
        return $this->container['themes'];
    }

    /**
     * Sets themes
     *
     * @param string[]|null $themes The themes that determine the look and feel of the scope's user interface. A fall-through strategy is applied when building the actual theme.
     *
     * @return self
     */
    public function setThemes($themes)
    {
        if (is_null($themes)) {
            throw new \InvalidArgumentException('non-nullable themes cannot be null');
        }
        $this->container['themes'] = $themes;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int|null $port The port where the scope can be accessed.
     *
     * @return self
     */
    public function setPort($port)
    {
        if (is_null($port)) {
            throw new \InvalidArgumentException('non-nullable port cannot be null');
        }

        if (($port < 1)) {
            throw new \InvalidArgumentException('invalid value for $port when calling Scope., must be bigger than or equal to 1.');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets preprod_domain_name
     *
     * @return string|null
     */
    public function getPreprodDomainName()
    {
        return $this->container['preprod_domain_name'];
    }

    /**
     * Sets preprod_domain_name
     *
     * @param string|null $preprod_domain_name The preprod domain name that belongs to the scope.
     *
     * @return self
     */
    public function setPreprodDomainName($preprod_domain_name)
    {
        if (is_null($preprod_domain_name)) {
            throw new \InvalidArgumentException('non-nullable preprod_domain_name cannot be null');
        }
        if ((mb_strlen($preprod_domain_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $preprod_domain_name when calling Scope., must be smaller than or equal to 100.');
        }

        $this->container['preprod_domain_name'] = $preprod_domain_name;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string|null $domain_name The domain name that belongs to the scope.
     *
     * @return self
     */
    public function setDomainName($domain_name)
    {
        if (is_null($domain_name)) {
            throw new \InvalidArgumentException('non-nullable domain_name cannot be null');
        }
        if ((mb_strlen($domain_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $domain_name when calling Scope., must be smaller than or equal to 100.');
        }

        $this->container['domain_name'] = $domain_name;

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
     * @param string|null $name The name used to identify the scope.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Scope., must be smaller than or equal to 50.');
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
     * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState|null $state state
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
     * Gets sandbox_domain_name
     *
     * @return string|null
     */
    public function getSandboxDomainName()
    {
        return $this->container['sandbox_domain_name'];
    }

    /**
     * Sets sandbox_domain_name
     *
     * @param string|null $sandbox_domain_name The sandbox domain name that belongs to the scope.
     *
     * @return self
     */
    public function setSandboxDomainName($sandbox_domain_name)
    {
        if (is_null($sandbox_domain_name)) {
            throw new \InvalidArgumentException('non-nullable sandbox_domain_name cannot be null');
        }
        if ((mb_strlen($sandbox_domain_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sandbox_domain_name when calling Scope., must be smaller than or equal to 100.');
        }

        $this->container['sandbox_domain_name'] = $sandbox_domain_name;

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


