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
 * PaymentTerminalTransactionSum model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentTerminalTransactionSum implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTerminalTransactionSum';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'brand' => 'string',
        'dcc_tip_amount' => 'float',
        'dcc_transaction_amount' => 'float',
        'dcc_transaction_count' => 'int',
        'id' => 'int',
        'product' => 'string',
        'transaction_amount' => 'float',
        'transaction_count' => 'int',
        'transaction_currency' => 'string',
        'transaction_tip_amount' => 'float',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'brand' => null,
        'dcc_tip_amount' => null,
        'dcc_transaction_amount' => null,
        'dcc_transaction_count' => 'int32',
        'id' => 'int64',
        'product' => null,
        'transaction_amount' => null,
        'transaction_count' => 'int32',
        'transaction_currency' => null,
        'transaction_tip_amount' => null,
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
        'dcc_tip_amount' => 'dccTipAmount',
        'dcc_transaction_amount' => 'dccTransactionAmount',
        'dcc_transaction_count' => 'dccTransactionCount',
        'id' => 'id',
        'product' => 'product',
        'transaction_amount' => 'transactionAmount',
        'transaction_count' => 'transactionCount',
        'transaction_currency' => 'transactionCurrency',
        'transaction_tip_amount' => 'transactionTipAmount',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'dcc_tip_amount' => 'setDccTipAmount',
        'dcc_transaction_amount' => 'setDccTransactionAmount',
        'dcc_transaction_count' => 'setDccTransactionCount',
        'id' => 'setId',
        'product' => 'setProduct',
        'transaction_amount' => 'setTransactionAmount',
        'transaction_count' => 'setTransactionCount',
        'transaction_currency' => 'setTransactionCurrency',
        'transaction_tip_amount' => 'setTransactionTipAmount',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'dcc_tip_amount' => 'getDccTipAmount',
        'dcc_transaction_amount' => 'getDccTransactionAmount',
        'dcc_transaction_count' => 'getDccTransactionCount',
        'id' => 'getId',
        'product' => 'getProduct',
        'transaction_amount' => 'getTransactionAmount',
        'transaction_count' => 'getTransactionCount',
        'transaction_currency' => 'getTransactionCurrency',
        'transaction_tip_amount' => 'getTransactionTipAmount',
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
        
        $this->container['dcc_tip_amount'] = isset($data['dcc_tip_amount']) ? $data['dcc_tip_amount'] : null;
        
        $this->container['dcc_transaction_amount'] = isset($data['dcc_transaction_amount']) ? $data['dcc_transaction_amount'] : null;
        
        $this->container['dcc_transaction_count'] = isset($data['dcc_transaction_count']) ? $data['dcc_transaction_count'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        
        $this->container['transaction_amount'] = isset($data['transaction_amount']) ? $data['transaction_amount'] : null;
        
        $this->container['transaction_count'] = isset($data['transaction_count']) ? $data['transaction_count'] : null;
        
        $this->container['transaction_currency'] = isset($data['transaction_currency']) ? $data['transaction_currency'] : null;
        
        $this->container['transaction_tip_amount'] = isset($data['transaction_tip_amount']) ? $data['transaction_tip_amount'] : null;
        
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
     * Gets dcc_tip_amount
     *
     * @return float
     */
    public function getDccTipAmount()
    {
        return $this->container['dcc_tip_amount'];
    }

    /**
     * Sets dcc_tip_amount
     *
     * @param float $dcc_tip_amount 
     *
     * @return $this
     */
    public function setDccTipAmount($dcc_tip_amount)
    {
        $this->container['dcc_tip_amount'] = $dcc_tip_amount;

        return $this;
    }
    

    /**
     * Gets dcc_transaction_amount
     *
     * @return float
     */
    public function getDccTransactionAmount()
    {
        return $this->container['dcc_transaction_amount'];
    }

    /**
     * Sets dcc_transaction_amount
     *
     * @param float $dcc_transaction_amount 
     *
     * @return $this
     */
    public function setDccTransactionAmount($dcc_transaction_amount)
    {
        $this->container['dcc_transaction_amount'] = $dcc_transaction_amount;

        return $this;
    }
    

    /**
     * Gets dcc_transaction_count
     *
     * @return int
     */
    public function getDccTransactionCount()
    {
        return $this->container['dcc_transaction_count'];
    }

    /**
     * Sets dcc_transaction_count
     *
     * @param int $dcc_transaction_count 
     *
     * @return $this
     */
    public function setDccTransactionCount($dcc_transaction_count)
    {
        $this->container['dcc_transaction_count'] = $dcc_transaction_count;

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
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product 
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
     * Gets transaction_tip_amount
     *
     * @return float
     */
    public function getTransactionTipAmount()
    {
        return $this->container['transaction_tip_amount'];
    }

    /**
     * Sets transaction_tip_amount
     *
     * @param float $transaction_tip_amount 
     *
     * @return $this
     */
    public function setTransactionTipAmount($transaction_tip_amount)
    {
        $this->container['transaction_tip_amount'] = $transaction_tip_amount;

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


