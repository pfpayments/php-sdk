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
 * RestCountry model
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
class RestCountry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iso_code2' => 'string',
        'address_format' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormat',
        'iso_code3' => 'string',
        'state_codes' => 'string[]',
        'name' => 'string',
        'numeric_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iso_code2' => null,
        'address_format' => null,
        'iso_code3' => null,
        'state_codes' => null,
        'name' => null,
        'numeric_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'iso_code2' => false,
        'address_format' => false,
        'iso_code3' => false,
        'state_codes' => false,
        'name' => false,
        'numeric_code' => false
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
        'iso_code2' => 'isoCode2',
        'address_format' => 'addressFormat',
        'iso_code3' => 'isoCode3',
        'state_codes' => 'stateCodes',
        'name' => 'name',
        'numeric_code' => 'numericCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iso_code2' => 'setIsoCode2',
        'address_format' => 'setAddressFormat',
        'iso_code3' => 'setIsoCode3',
        'state_codes' => 'setStateCodes',
        'name' => 'setName',
        'numeric_code' => 'setNumericCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iso_code2' => 'getIsoCode2',
        'address_format' => 'getAddressFormat',
        'iso_code3' => 'getIsoCode3',
        'state_codes' => 'getStateCodes',
        'name' => 'getName',
        'numeric_code' => 'getNumericCode'
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
        $this->setIfExists('iso_code2', $data ?? [], null);
        $this->setIfExists('address_format', $data ?? [], null);
        $this->setIfExists('iso_code3', $data ?? [], null);
        $this->setIfExists('state_codes', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('numeric_code', $data ?? [], null);
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
     * Gets iso_code2
     *
     * @return string|null
     */
    public function getIsoCode2()
    {
        return $this->container['iso_code2'];
    }

    /**
     * Sets iso_code2
     *
     * @param string|null $iso_code2 The country's two-letter code (ISO 3166-1 alpha-2 format).
     *
     * @return self
     */
    public function setIsoCode2($iso_code2)
    {
        if (is_null($iso_code2)) {
            throw new \InvalidArgumentException('non-nullable iso_code2 cannot be null');
        }
        $this->container['iso_code2'] = $iso_code2;

        return $this;
    }

    /**
     * Gets address_format
     *
     * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormat|null
     */
    public function getAddressFormat()
    {
        return $this->container['address_format'];
    }

    /**
     * Sets address_format
     *
     * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormat|null $address_format address_format
     *
     * @return self
     */
    public function setAddressFormat($address_format)
    {
        if (is_null($address_format)) {
            throw new \InvalidArgumentException('non-nullable address_format cannot be null');
        }
        $this->container['address_format'] = $address_format;

        return $this;
    }

    /**
     * Gets iso_code3
     *
     * @return string|null
     */
    public function getIsoCode3()
    {
        return $this->container['iso_code3'];
    }

    /**
     * Sets iso_code3
     *
     * @param string|null $iso_code3 The country's three-letter code (ISO 3166-1 alpha-3 format).
     *
     * @return self
     */
    public function setIsoCode3($iso_code3)
    {
        if (is_null($iso_code3)) {
            throw new \InvalidArgumentException('non-nullable iso_code3 cannot be null');
        }
        $this->container['iso_code3'] = $iso_code3;

        return $this;
    }

    /**
     * Gets state_codes
     *
     * @return string[]|null
     */
    public function getStateCodes()
    {
        return $this->container['state_codes'];
    }

    /**
     * Sets state_codes
     *
     * @param string[]|null $state_codes The codes of all regions (e.g. states, provinces) of the country (ISO 3166-2 format).
     *
     * @return self
     */
    public function setStateCodes($state_codes)
    {
        if (is_null($state_codes)) {
            throw new \InvalidArgumentException('non-nullable state_codes cannot be null');
        }


        $this->container['state_codes'] = $state_codes;

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
     * @param string|null $name The name of the country.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets numeric_code
     *
     * @return string|null
     */
    public function getNumericCode()
    {
        return $this->container['numeric_code'];
    }

    /**
     * Sets numeric_code
     *
     * @param string|null $numeric_code The country's three-digit code (ISO 3166-1 numeric format).
     *
     * @return self
     */
    public function setNumericCode($numeric_code)
    {
        if (is_null($numeric_code)) {
            throw new \InvalidArgumentException('non-nullable numeric_code cannot be null');
        }
        $this->container['numeric_code'] = $numeric_code;

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


