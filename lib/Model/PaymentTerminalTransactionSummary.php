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
 * PaymentTerminalTransactionSummary model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentTerminalTransactionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTerminalTransactionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dcc_transaction_sums' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalDccTransactionSum[]',
        'ended_on' => '\DateTime',
        'id' => 'int',
        'linked_space_id' => 'int',
        'number_of_transactions' => 'int',
        'payment_terminal' => 'int',
        'receipt' => 'string',
        'started_on' => '\DateTime',
        'transaction_sums' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalTransactionSum[]',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dcc_transaction_sums' => null,
        'ended_on' => 'date-time',
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'number_of_transactions' => 'int32',
        'payment_terminal' => 'int64',
        'receipt' => null,
        'started_on' => 'date-time',
        'transaction_sums' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dcc_transaction_sums' => 'dccTransactionSums',
        'ended_on' => 'endedOn',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'number_of_transactions' => 'numberOfTransactions',
        'payment_terminal' => 'paymentTerminal',
        'receipt' => 'receipt',
        'started_on' => 'startedOn',
        'transaction_sums' => 'transactionSums',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dcc_transaction_sums' => 'setDccTransactionSums',
        'ended_on' => 'setEndedOn',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'number_of_transactions' => 'setNumberOfTransactions',
        'payment_terminal' => 'setPaymentTerminal',
        'receipt' => 'setReceipt',
        'started_on' => 'setStartedOn',
        'transaction_sums' => 'setTransactionSums',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dcc_transaction_sums' => 'getDccTransactionSums',
        'ended_on' => 'getEndedOn',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'number_of_transactions' => 'getNumberOfTransactions',
        'payment_terminal' => 'getPaymentTerminal',
        'receipt' => 'getReceipt',
        'started_on' => 'getStartedOn',
        'transaction_sums' => 'getTransactionSums',
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
        
        $this->container['dcc_transaction_sums'] = isset($data['dcc_transaction_sums']) ? $data['dcc_transaction_sums'] : null;
        
        $this->container['ended_on'] = isset($data['ended_on']) ? $data['ended_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['number_of_transactions'] = isset($data['number_of_transactions']) ? $data['number_of_transactions'] : null;
        
        $this->container['payment_terminal'] = isset($data['payment_terminal']) ? $data['payment_terminal'] : null;
        
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
        
        $this->container['started_on'] = isset($data['started_on']) ? $data['started_on'] : null;
        
        $this->container['transaction_sums'] = isset($data['transaction_sums']) ? $data['transaction_sums'] : null;
        
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
     * Gets dcc_transaction_sums
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalDccTransactionSum[]
     */
    public function getDccTransactionSums()
    {
        return $this->container['dcc_transaction_sums'];
    }

    /**
     * Sets dcc_transaction_sums
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalDccTransactionSum[] $dcc_transaction_sums 
     *
     * @return $this
     */
    public function setDccTransactionSums($dcc_transaction_sums)
    {
        $this->container['dcc_transaction_sums'] = $dcc_transaction_sums;

        return $this;
    }
    

    /**
     * Gets ended_on
     *
     * @return \DateTime
     */
    public function getEndedOn()
    {
        return $this->container['ended_on'];
    }

    /**
     * Sets ended_on
     *
     * @param \DateTime $ended_on 
     *
     * @return $this
     */
    public function setEndedOn($ended_on)
    {
        $this->container['ended_on'] = $ended_on;

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
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The ID of the space this object belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets number_of_transactions
     *
     * @return int
     */
    public function getNumberOfTransactions()
    {
        return $this->container['number_of_transactions'];
    }

    /**
     * Sets number_of_transactions
     *
     * @param int $number_of_transactions 
     *
     * @return $this
     */
    public function setNumberOfTransactions($number_of_transactions)
    {
        $this->container['number_of_transactions'] = $number_of_transactions;

        return $this;
    }
    

    /**
     * Gets payment_terminal
     *
     * @return int
     */
    public function getPaymentTerminal()
    {
        return $this->container['payment_terminal'];
    }

    /**
     * Sets payment_terminal
     *
     * @param int $payment_terminal 
     *
     * @return $this
     */
    public function setPaymentTerminal($payment_terminal)
    {
        $this->container['payment_terminal'] = $payment_terminal;

        return $this;
    }
    

    /**
     * Gets receipt
     *
     * @return string
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     *
     * @param string $receipt 
     *
     * @return $this
     */
    public function setReceipt($receipt)
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }
    

    /**
     * Gets started_on
     *
     * @return \DateTime
     */
    public function getStartedOn()
    {
        return $this->container['started_on'];
    }

    /**
     * Sets started_on
     *
     * @param \DateTime $started_on 
     *
     * @return $this
     */
    public function setStartedOn($started_on)
    {
        $this->container['started_on'] = $started_on;

        return $this;
    }
    

    /**
     * Gets transaction_sums
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalTransactionSum[]
     */
    public function getTransactionSums()
    {
        return $this->container['transaction_sums'];
    }

    /**
     * Sets transaction_sums
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalTransactionSum[] $transaction_sums 
     *
     * @return $this
     */
    public function setTransactionSums($transaction_sums)
    {
        $this->container['transaction_sums'] = $transaction_sums;

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


