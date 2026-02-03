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
 * RestAddressFormat model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class RestAddressFormat implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestAddressFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'post_code_examples' => 'string[]',
        'required_fields' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]',
        'used_fields' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]',
        'post_code_regex' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'post_code_examples' => null,
        'required_fields' => null,
        'used_fields' => null,
        'post_code_regex' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'post_code_examples' => false,
        'required_fields' => false,
        'used_fields' => false,
        'post_code_regex' => false
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
        'post_code_examples' => 'postCodeExamples',
        'required_fields' => 'requiredFields',
        'used_fields' => 'usedFields',
        'post_code_regex' => 'postCodeRegex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'post_code_examples' => 'setPostCodeExamples',
        'required_fields' => 'setRequiredFields',
        'used_fields' => 'setUsedFields',
        'post_code_regex' => 'setPostCodeRegex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'post_code_examples' => 'getPostCodeExamples',
        'required_fields' => 'getRequiredFields',
        'used_fields' => 'getUsedFields',
        'post_code_regex' => 'getPostCodeRegex'
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
        $this->setIfExists('post_code_examples', $data ?? [], null);
        $this->setIfExists('required_fields', $data ?? [], null);
        $this->setIfExists('used_fields', $data ?? [], null);
        $this->setIfExists('post_code_regex', $data ?? [], null);
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
     * Gets post_code_examples
     *
     * @return string[]|null
     */
    public function getPostCodeExamples()
    {
        return $this->container['post_code_examples'];
    }

    /**
     * Sets post_code_examples
     *
     * @param string[]|null $post_code_examples A list of sample post codes.
     *
     * @return self
     */
    public function setPostCodeExamples($post_code_examples)
    {
        if (is_null($post_code_examples)) {
            throw new \InvalidArgumentException('non-nullable post_code_examples cannot be null');
        }
        $this->container['post_code_examples'] = $post_code_examples;

        return $this;
    }

    /**
     * Gets required_fields
     *
     * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]|null
     */
    public function getRequiredFields()
    {
        return $this->container['required_fields'];
    }

    /**
     * Sets required_fields
     *
     * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]|null $required_fields The fields that are required in the address format.
     *
     * @return self
     */
    public function setRequiredFields($required_fields)
    {
        if (is_null($required_fields)) {
            throw new \InvalidArgumentException('non-nullable required_fields cannot be null');
        }


        $this->container['required_fields'] = $required_fields;

        return $this;
    }

    /**
     * Gets used_fields
     *
     * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]|null
     */
    public function getUsedFields()
    {
        return $this->container['used_fields'];
    }

    /**
     * Sets used_fields
     *
     * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]|null $used_fields The fields that are used in the address format.
     *
     * @return self
     */
    public function setUsedFields($used_fields)
    {
        if (is_null($used_fields)) {
            throw new \InvalidArgumentException('non-nullable used_fields cannot be null');
        }


        $this->container['used_fields'] = $used_fields;

        return $this;
    }

    /**
     * Gets post_code_regex
     *
     * @return string|null
     */
    public function getPostCodeRegex()
    {
        return $this->container['post_code_regex'];
    }

    /**
     * Sets post_code_regex
     *
     * @param string|null $post_code_regex The regular expression to validate post codes.
     *
     * @return self
     */
    public function setPostCodeRegex($post_code_regex)
    {
        if (is_null($post_code_regex)) {
            throw new \InvalidArgumentException('non-nullable post_code_regex cannot be null');
        }
        $this->container['post_code_regex'] = $post_code_regex;

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


