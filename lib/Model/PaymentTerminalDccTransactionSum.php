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
 * PaymentTerminalDccTransactionSum model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentTerminalDccTransactionSum implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTerminalDccTransactionSum';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'brand' => 'string',
        'dcc_amount' => 'float',
        'dcc_currency' => 'string',
        'id' => 'int',
        'transaction_amount' => 'float',
        'transaction_count' => 'int',
        'transaction_currency' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'brand' => null,
        'dcc_amount' => null,
        'dcc_currency' => null,
        'id' => 'int64',
        'transaction_amount' => null,
        'transaction_count' => 'int32',
        'transaction_currency' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'brand' => 'brand',
        'dcc_amount' => 'dccAmount',
        'dcc_currency' => 'dccCurrency',
        'id' => 'id',
        'transaction_amount' => 'transactionAmount',
        'transaction_count' => 'transactionCount',
        'transaction_currency' => 'transactionCurrency',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'dcc_amount' => 'setDccAmount',
        'dcc_currency' => 'setDccCurrency',
        'id' => 'setId',
        'transaction_amount' => 'setTransactionAmount',
        'transaction_count' => 'setTransactionCount',
        'transaction_currency' => 'setTransactionCurrency',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'dcc_amount' => 'getDccAmount',
        'dcc_currency' => 'getDccCurrency',
        'id' => 'getId',
        'transaction_amount' => 'getTransactionAmount',
        'transaction_count' => 'getTransactionCount',
        'transaction_currency' => 'getTransactionCurrency',
        'version' => 'getVersion'
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
        
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        
        $this->container['dcc_amount'] = isset($data['dcc_amount']) ? $data['dcc_amount'] : null;
        
        $this->container['dcc_currency'] = isset($data['dcc_currency']) ? $data['dcc_currency'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['transaction_amount'] = isset($data['transaction_amount']) ? $data['transaction_amount'] : null;
        
        $this->container['transaction_count'] = isset($data['transaction_count']) ? $data['transaction_count'] : null;
        
        $this->container['transaction_currency'] = isset($data['transaction_currency']) ? $data['transaction_currency'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
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
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand 
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }
    

    /**
     * Gets dcc_amount
     *
     * @return float
     */
    public function getDccAmount()
    {
        return $this->container['dcc_amount'];
    }

    /**
     * Sets dcc_amount
     *
     * @param float $dcc_amount 
     *
     * @return $this
     */
    public function setDccAmount($dcc_amount)
    {
        $this->container['dcc_amount'] = $dcc_amount;

        return $this;
    }
    

    /**
     * Gets dcc_currency
     *
     * @return string
     */
    public function getDccCurrency()
    {
        return $this->container['dcc_currency'];
    }

    /**
     * Sets dcc_currency
     *
     * @param string $dcc_currency 
     *
     * @return $this
     */
    public function setDccCurrency($dcc_currency)
    {
        $this->container['dcc_currency'] = $dcc_currency;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id A unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets transaction_amount
     *
     * @return float
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param float $transaction_amount 
     *
     * @return $this
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }
    

    /**
     * Gets transaction_count
     *
     * @return int
     */
    public function getTransactionCount()
    {
        return $this->container['transaction_count'];
    }

    /**
     * Sets transaction_count
     *
     * @param int $transaction_count 
     *
     * @return $this
     */
    public function setTransactionCount($transaction_count)
    {
        $this->container['transaction_count'] = $transaction_count;

        return $this;
    }
    

    /**
     * Gets transaction_currency
     *
     * @return string
     */
    public function getTransactionCurrency()
    {
        return $this->container['transaction_currency'];
    }

    /**
     * Sets transaction_currency
     *
     * @param string $transaction_currency 
     *
     * @return $this
     */
    public function setTransactionCurrency($transaction_currency)
    {
        $this->container['transaction_currency'] = $transaction_currency;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


