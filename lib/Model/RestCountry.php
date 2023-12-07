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
 * RestCountry model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestCountry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RestCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_format' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormat',
        'iso_code2' => 'string',
        'iso_code3' => 'string',
        'name' => 'string',
        'numeric_code' => 'string',
        'state_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_format' => null,
        'iso_code2' => null,
        'iso_code3' => null,
        'name' => null,
        'numeric_code' => null,
        'state_codes' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_format' => 'addressFormat',
        'iso_code2' => 'isoCode2',
        'iso_code3' => 'isoCode3',
        'name' => 'name',
        'numeric_code' => 'numericCode',
        'state_codes' => 'stateCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_format' => 'setAddressFormat',
        'iso_code2' => 'setIsoCode2',
        'iso_code3' => 'setIsoCode3',
        'name' => 'setName',
        'numeric_code' => 'setNumericCode',
        'state_codes' => 'setStateCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_format' => 'getAddressFormat',
        'iso_code2' => 'getIsoCode2',
        'iso_code3' => 'getIsoCode3',
        'name' => 'getName',
        'numeric_code' => 'getNumericCode',
        'state_codes' => 'getStateCodes'
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
        
        $this->container['address_format'] = isset($data['address_format']) ? $data['address_format'] : null;
        
        $this->container['iso_code2'] = isset($data['iso_code2']) ? $data['iso_code2'] : null;
        
        $this->container['iso_code3'] = isset($data['iso_code3']) ? $data['iso_code3'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['numeric_code'] = isset($data['numeric_code']) ? $data['numeric_code'] : null;
        
        $this->container['state_codes'] = isset($data['state_codes']) ? $data['state_codes'] : null;
        
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
     * Gets address_format
     *
     * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormat
     */
    public function getAddressFormat()
    {
        return $this->container['address_format'];
    }

    /**
     * Sets address_format
     *
     * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormat $address_format Specifies the country's way of formatting addresses.
     *
     * @return $this
     */
    public function setAddressFormat($address_format)
    {
        $this->container['address_format'] = $address_format;

        return $this;
    }
    

    /**
     * Gets iso_code2
     *
     * @return string
     */
    public function getIsoCode2()
    {
        return $this->container['iso_code2'];
    }

    /**
     * Sets iso_code2
     *
     * @param string $iso_code2 The country's two-letter code (ISO 3166-1 alpha-2 format).
     *
     * @return $this
     */
    public function setIsoCode2($iso_code2)
    {
        $this->container['iso_code2'] = $iso_code2;

        return $this;
    }
    

    /**
     * Gets iso_code3
     *
     * @return string
     */
    public function getIsoCode3()
    {
        return $this->container['iso_code3'];
    }

    /**
     * Sets iso_code3
     *
     * @param string $iso_code3 The country's three-letter code (ISO 3166-1 alpha-3 format).
     *
     * @return $this
     */
    public function setIsoCode3($iso_code3)
    {
        $this->container['iso_code3'] = $iso_code3;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the country.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets numeric_code
     *
     * @return string
     */
    public function getNumericCode()
    {
        return $this->container['numeric_code'];
    }

    /**
     * Sets numeric_code
     *
     * @param string $numeric_code The country's three-digit code (ISO 3166-1 numeric format).
     *
     * @return $this
     */
    public function setNumericCode($numeric_code)
    {
        $this->container['numeric_code'] = $numeric_code;

        return $this;
    }
    

    /**
     * Gets state_codes
     *
     * @return string[]
     */
    public function getStateCodes()
    {
        return $this->container['state_codes'];
    }

    /**
     * Sets state_codes
     *
     * @param string[] $state_codes The codes of all regions (e.g. states, provinces) of the country (ISO 3166-2 format).
     *
     * @return $this
     */
    public function setStateCodes($state_codes)
    {
        $this->container['state_codes'] = $state_codes;

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


