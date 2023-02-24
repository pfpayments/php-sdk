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
 * InvoiceReimbursement model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class InvoiceReimbursement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceReimbursement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'created_on' => '\DateTime',
        'currency' => 'string',
        'discarded_by' => 'int',
        'discarded_on' => '\DateTime',
        'id' => 'int',
        'linked_space_id' => 'int',
        'payment_connector_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration',
        'payment_initiation_advice_file' => '\PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFile',
        'processed_by' => 'int',
        'processed_on' => '\DateTime',
        'recipient_city' => 'string',
        'recipient_country' => 'string',
        'recipient_family_name' => 'string',
        'recipient_given_name' => 'string',
        'recipient_iban' => 'string',
        'recipient_postcode' => 'string',
        'recipient_street' => 'string',
        'sender_iban' => 'string',
        'state' => '\PostFinanceCheckout\Sdk\Model\InvoiceReimbursementState',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'created_on' => 'date-time',
        'currency' => null,
        'discarded_by' => 'int64',
        'discarded_on' => 'date-time',
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'payment_connector_configuration' => null,
        'payment_initiation_advice_file' => null,
        'processed_by' => 'int64',
        'processed_on' => 'date-time',
        'recipient_city' => null,
        'recipient_country' => null,
        'recipient_family_name' => null,
        'recipient_given_name' => null,
        'recipient_iban' => null,
        'recipient_postcode' => null,
        'recipient_street' => null,
        'sender_iban' => null,
        'state' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'created_on' => 'createdOn',
        'currency' => 'currency',
        'discarded_by' => 'discardedBy',
        'discarded_on' => 'discardedOn',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'payment_connector_configuration' => 'paymentConnectorConfiguration',
        'payment_initiation_advice_file' => 'paymentInitiationAdviceFile',
        'processed_by' => 'processedBy',
        'processed_on' => 'processedOn',
        'recipient_city' => 'recipientCity',
        'recipient_country' => 'recipientCountry',
        'recipient_family_name' => 'recipientFamilyName',
        'recipient_given_name' => 'recipientGivenName',
        'recipient_iban' => 'recipientIban',
        'recipient_postcode' => 'recipientPostcode',
        'recipient_street' => 'recipientStreet',
        'sender_iban' => 'senderIban',
        'state' => 'state',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'created_on' => 'setCreatedOn',
        'currency' => 'setCurrency',
        'discarded_by' => 'setDiscardedBy',
        'discarded_on' => 'setDiscardedOn',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'payment_connector_configuration' => 'setPaymentConnectorConfiguration',
        'payment_initiation_advice_file' => 'setPaymentInitiationAdviceFile',
        'processed_by' => 'setProcessedBy',
        'processed_on' => 'setProcessedOn',
        'recipient_city' => 'setRecipientCity',
        'recipient_country' => 'setRecipientCountry',
        'recipient_family_name' => 'setRecipientFamilyName',
        'recipient_given_name' => 'setRecipientGivenName',
        'recipient_iban' => 'setRecipientIban',
        'recipient_postcode' => 'setRecipientPostcode',
        'recipient_street' => 'setRecipientStreet',
        'sender_iban' => 'setSenderIban',
        'state' => 'setState',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'created_on' => 'getCreatedOn',
        'currency' => 'getCurrency',
        'discarded_by' => 'getDiscardedBy',
        'discarded_on' => 'getDiscardedOn',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'payment_connector_configuration' => 'getPaymentConnectorConfiguration',
        'payment_initiation_advice_file' => 'getPaymentInitiationAdviceFile',
        'processed_by' => 'getProcessedBy',
        'processed_on' => 'getProcessedOn',
        'recipient_city' => 'getRecipientCity',
        'recipient_country' => 'getRecipientCountry',
        'recipient_family_name' => 'getRecipientFamilyName',
        'recipient_given_name' => 'getRecipientGivenName',
        'recipient_iban' => 'getRecipientIban',
        'recipient_postcode' => 'getRecipientPostcode',
        'recipient_street' => 'getRecipientStreet',
        'sender_iban' => 'getSenderIban',
        'state' => 'getState',
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
        
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['discarded_by'] = isset($data['discarded_by']) ? $data['discarded_by'] : null;
        
        $this->container['discarded_on'] = isset($data['discarded_on']) ? $data['discarded_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['payment_connector_configuration'] = isset($data['payment_connector_configuration']) ? $data['payment_connector_configuration'] : null;
        
        $this->container['payment_initiation_advice_file'] = isset($data['payment_initiation_advice_file']) ? $data['payment_initiation_advice_file'] : null;
        
        $this->container['processed_by'] = isset($data['processed_by']) ? $data['processed_by'] : null;
        
        $this->container['processed_on'] = isset($data['processed_on']) ? $data['processed_on'] : null;
        
        $this->container['recipient_city'] = isset($data['recipient_city']) ? $data['recipient_city'] : null;
        
        $this->container['recipient_country'] = isset($data['recipient_country']) ? $data['recipient_country'] : null;
        
        $this->container['recipient_family_name'] = isset($data['recipient_family_name']) ? $data['recipient_family_name'] : null;
        
        $this->container['recipient_given_name'] = isset($data['recipient_given_name']) ? $data['recipient_given_name'] : null;
        
        $this->container['recipient_iban'] = isset($data['recipient_iban']) ? $data['recipient_iban'] : null;
        
        $this->container['recipient_postcode'] = isset($data['recipient_postcode']) ? $data['recipient_postcode'] : null;
        
        $this->container['recipient_street'] = isset($data['recipient_street']) ? $data['recipient_street'] : null;
        
        $this->container['sender_iban'] = isset($data['sender_iban']) ? $data['sender_iban'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date and time when the object was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    

    /**
     * Gets discarded_by
     *
     * @return int
     */
    public function getDiscardedBy()
    {
        return $this->container['discarded_by'];
    }

    /**
     * Sets discarded_by
     *
     * @param int $discarded_by 
     *
     * @return $this
     */
    public function setDiscardedBy($discarded_by)
    {
        $this->container['discarded_by'] = $discarded_by;

        return $this;
    }
    

    /**
     * Gets discarded_on
     *
     * @return \DateTime
     */
    public function getDiscardedOn()
    {
        return $this->container['discarded_on'];
    }

    /**
     * Sets discarded_on
     *
     * @param \DateTime $discarded_on 
     *
     * @return $this
     */
    public function setDiscardedOn($discarded_on)
    {
        $this->container['discarded_on'] = $discarded_on;

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
     * Gets payment_connector_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration
     */
    public function getPaymentConnectorConfiguration()
    {
        return $this->container['payment_connector_configuration'];
    }

    /**
     * Sets payment_connector_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration $payment_connector_configuration 
     *
     * @return $this
     */
    public function setPaymentConnectorConfiguration($payment_connector_configuration)
    {
        $this->container['payment_connector_configuration'] = $payment_connector_configuration;

        return $this;
    }
    

    /**
     * Gets payment_initiation_advice_file
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFile
     */
    public function getPaymentInitiationAdviceFile()
    {
        return $this->container['payment_initiation_advice_file'];
    }

    /**
     * Sets payment_initiation_advice_file
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFile $payment_initiation_advice_file 
     *
     * @return $this
     */
    public function setPaymentInitiationAdviceFile($payment_initiation_advice_file)
    {
        $this->container['payment_initiation_advice_file'] = $payment_initiation_advice_file;

        return $this;
    }
    

    /**
     * Gets processed_by
     *
     * @return int
     */
    public function getProcessedBy()
    {
        return $this->container['processed_by'];
    }

    /**
     * Sets processed_by
     *
     * @param int $processed_by 
     *
     * @return $this
     */
    public function setProcessedBy($processed_by)
    {
        $this->container['processed_by'] = $processed_by;

        return $this;
    }
    

    /**
     * Gets processed_on
     *
     * @return \DateTime
     */
    public function getProcessedOn()
    {
        return $this->container['processed_on'];
    }

    /**
     * Sets processed_on
     *
     * @param \DateTime $processed_on 
     *
     * @return $this
     */
    public function setProcessedOn($processed_on)
    {
        $this->container['processed_on'] = $processed_on;

        return $this;
    }
    

    /**
     * Gets recipient_city
     *
     * @return string
     */
    public function getRecipientCity()
    {
        return $this->container['recipient_city'];
    }

    /**
     * Sets recipient_city
     *
     * @param string $recipient_city 
     *
     * @return $this
     */
    public function setRecipientCity($recipient_city)
    {
        $this->container['recipient_city'] = $recipient_city;

        return $this;
    }
    

    /**
     * Gets recipient_country
     *
     * @return string
     */
    public function getRecipientCountry()
    {
        return $this->container['recipient_country'];
    }

    /**
     * Sets recipient_country
     *
     * @param string $recipient_country 
     *
     * @return $this
     */
    public function setRecipientCountry($recipient_country)
    {
        $this->container['recipient_country'] = $recipient_country;

        return $this;
    }
    

    /**
     * Gets recipient_family_name
     *
     * @return string
     */
    public function getRecipientFamilyName()
    {
        return $this->container['recipient_family_name'];
    }

    /**
     * Sets recipient_family_name
     *
     * @param string $recipient_family_name 
     *
     * @return $this
     */
    public function setRecipientFamilyName($recipient_family_name)
    {
        $this->container['recipient_family_name'] = $recipient_family_name;

        return $this;
    }
    

    /**
     * Gets recipient_given_name
     *
     * @return string
     */
    public function getRecipientGivenName()
    {
        return $this->container['recipient_given_name'];
    }

    /**
     * Sets recipient_given_name
     *
     * @param string $recipient_given_name 
     *
     * @return $this
     */
    public function setRecipientGivenName($recipient_given_name)
    {
        $this->container['recipient_given_name'] = $recipient_given_name;

        return $this;
    }
    

    /**
     * Gets recipient_iban
     *
     * @return string
     */
    public function getRecipientIban()
    {
        return $this->container['recipient_iban'];
    }

    /**
     * Sets recipient_iban
     *
     * @param string $recipient_iban 
     *
     * @return $this
     */
    public function setRecipientIban($recipient_iban)
    {
        $this->container['recipient_iban'] = $recipient_iban;

        return $this;
    }
    

    /**
     * Gets recipient_postcode
     *
     * @return string
     */
    public function getRecipientPostcode()
    {
        return $this->container['recipient_postcode'];
    }

    /**
     * Sets recipient_postcode
     *
     * @param string $recipient_postcode 
     *
     * @return $this
     */
    public function setRecipientPostcode($recipient_postcode)
    {
        $this->container['recipient_postcode'] = $recipient_postcode;

        return $this;
    }
    

    /**
     * Gets recipient_street
     *
     * @return string
     */
    public function getRecipientStreet()
    {
        return $this->container['recipient_street'];
    }

    /**
     * Sets recipient_street
     *
     * @param string $recipient_street 
     *
     * @return $this
     */
    public function setRecipientStreet($recipient_street)
    {
        $this->container['recipient_street'] = $recipient_street;

        return $this;
    }
    

    /**
     * Gets sender_iban
     *
     * @return string
     */
    public function getSenderIban()
    {
        return $this->container['sender_iban'];
    }

    /**
     * Sets sender_iban
     *
     * @param string $sender_iban 
     *
     * @return $this
     */
    public function setSenderIban($sender_iban)
    {
        $this->container['sender_iban'] = $sender_iban;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReimbursementState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReimbursementState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


