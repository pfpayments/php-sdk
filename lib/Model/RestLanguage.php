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
 * RestLanguage model
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
class RestLanguage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestLanguage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primary_of_group' => 'bool',
        'country_code' => 'string',
        'iso2_code' => 'string',
        'name' => 'string',
        'ietf_code' => 'string',
        'iso3_code' => 'string',
        'plural_expression' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primary_of_group' => null,
        'country_code' => null,
        'iso2_code' => null,
        'name' => null,
        'ietf_code' => null,
        'iso3_code' => null,
        'plural_expression' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'primary_of_group' => false,
        'country_code' => false,
        'iso2_code' => false,
        'name' => false,
        'ietf_code' => false,
        'iso3_code' => false,
        'plural_expression' => false
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
        'primary_of_group' => 'primaryOfGroup',
        'country_code' => 'countryCode',
        'iso2_code' => 'iso2Code',
        'name' => 'name',
        'ietf_code' => 'ietfCode',
        'iso3_code' => 'iso3Code',
        'plural_expression' => 'pluralExpression'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_of_group' => 'setPrimaryOfGroup',
        'country_code' => 'setCountryCode',
        'iso2_code' => 'setIso2Code',
        'name' => 'setName',
        'ietf_code' => 'setIetfCode',
        'iso3_code' => 'setIso3Code',
        'plural_expression' => 'setPluralExpression'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_of_group' => 'getPrimaryOfGroup',
        'country_code' => 'getCountryCode',
        'iso2_code' => 'getIso2Code',
        'name' => 'getName',
        'ietf_code' => 'getIetfCode',
        'iso3_code' => 'getIso3Code',
        'plural_expression' => 'getPluralExpression'
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
        $this->setIfExists('primary_of_group', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('iso2_code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('ietf_code', $data ?? [], null);
        $this->setIfExists('iso3_code', $data ?? [], null);
        $this->setIfExists('plural_expression', $data ?? [], null);
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
     * Gets primary_of_group
     *
     * @return bool|null
     */
    public function getPrimaryOfGroup()
    {
        return $this->container['primary_of_group'];
    }

    /**
     * Sets primary_of_group
     *
     * @param bool|null $primary_of_group Whether this is the primary language in a group of languages.
     *
     * @return self
     */
    public function setPrimaryOfGroup($primary_of_group)
    {
        if (is_null($primary_of_group)) {
            throw new \InvalidArgumentException('non-nullable primary_of_group cannot be null');
        }
        $this->container['primary_of_group'] = $primary_of_group;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code The two-letter code of the language's region (ISO 3166-1 alpha-2 format).
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets iso2_code
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->container['iso2_code'];
    }

    /**
     * Sets iso2_code
     *
     * @param string|null $iso2_code The language's two-letter code (ISO 639-1 format).
     *
     * @return self
     */
    public function setIso2Code($iso2_code)
    {
        if (is_null($iso2_code)) {
            throw new \InvalidArgumentException('non-nullable iso2_code cannot be null');
        }
        $this->container['iso2_code'] = $iso2_code;

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
     * @param string|null $name The name of the language.
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
     * Gets ietf_code
     *
     * @return string|null
     */
    public function getIetfCode()
    {
        return $this->container['ietf_code'];
    }

    /**
     * Sets ietf_code
     *
     * @param string|null $ietf_code The language's IETF tag consisting of the two-letter ISO code and region e.g. en-US, de-CH.
     *
     * @return self
     */
    public function setIetfCode($ietf_code)
    {
        if (is_null($ietf_code)) {
            throw new \InvalidArgumentException('non-nullable ietf_code cannot be null');
        }
        $this->container['ietf_code'] = $ietf_code;

        return $this;
    }

    /**
     * Gets iso3_code
     *
     * @return string|null
     */
    public function getIso3Code()
    {
        return $this->container['iso3_code'];
    }

    /**
     * Sets iso3_code
     *
     * @param string|null $iso3_code The language's three-letter code (ISO 639-2/T format).
     *
     * @return self
     */
    public function setIso3Code($iso3_code)
    {
        if (is_null($iso3_code)) {
            throw new \InvalidArgumentException('non-nullable iso3_code cannot be null');
        }
        $this->container['iso3_code'] = $iso3_code;

        return $this;
    }

    /**
     * Gets plural_expression
     *
     * @return string|null
     */
    public function getPluralExpression()
    {
        return $this->container['plural_expression'];
    }

    /**
     * Sets plural_expression
     *
     * @param string|null $plural_expression The expression to determine the plural index for a given number of items used to find the proper plural form for translations.
     *
     * @return self
     */
    public function setPluralExpression($plural_expression)
    {
        if (is_null($plural_expression)) {
            throw new \InvalidArgumentException('non-nullable plural_expression cannot be null');
        }
        $this->container['plural_expression'] = $plural_expression;

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


