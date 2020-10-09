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
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * TransactionCreate model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionCreate extends AbstractTransactionPending 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transaction.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_confirmation_enabled' => 'bool',
        'billing_address' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
        'charge_retry_enabled' => 'bool',
        'customers_presence' => '\PostFinanceCheckout\Sdk\Model\CustomersPresence',
        'device_session_identifier' => 'string',
        'emails_disabled' => 'bool',
        'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
        'environment_selection_strategy' => '\PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
        'shipping_address' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
        'space_view_id' => 'int',
        'token' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_confirmation_enabled' => null,
        'billing_address' => null,
        'charge_retry_enabled' => null,
        'customers_presence' => null,
        'device_session_identifier' => null,
        'emails_disabled' => null,
        'environment' => null,
        'environment_selection_strategy' => null,
        'line_items' => null,
        'shipping_address' => null,
        'space_view_id' => 'int64',
        'token' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'auto_confirmation_enabled' => 'autoConfirmationEnabled',
        'billing_address' => 'billingAddress',
        'charge_retry_enabled' => 'chargeRetryEnabled',
        'customers_presence' => 'customersPresence',
        'device_session_identifier' => 'deviceSessionIdentifier',
        'emails_disabled' => 'emailsDisabled',
        'environment' => 'environment',
        'environment_selection_strategy' => 'environmentSelectionStrategy',
        'line_items' => 'lineItems',
        'shipping_address' => 'shippingAddress',
        'space_view_id' => 'spaceViewId',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_confirmation_enabled' => 'setAutoConfirmationEnabled',
        'billing_address' => 'setBillingAddress',
        'charge_retry_enabled' => 'setChargeRetryEnabled',
        'customers_presence' => 'setCustomersPresence',
        'device_session_identifier' => 'setDeviceSessionIdentifier',
        'emails_disabled' => 'setEmailsDisabled',
        'environment' => 'setEnvironment',
        'environment_selection_strategy' => 'setEnvironmentSelectionStrategy',
        'line_items' => 'setLineItems',
        'shipping_address' => 'setShippingAddress',
        'space_view_id' => 'setSpaceViewId',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_confirmation_enabled' => 'getAutoConfirmationEnabled',
        'billing_address' => 'getBillingAddress',
        'charge_retry_enabled' => 'getChargeRetryEnabled',
        'customers_presence' => 'getCustomersPresence',
        'device_session_identifier' => 'getDeviceSessionIdentifier',
        'emails_disabled' => 'getEmailsDisabled',
        'environment' => 'getEnvironment',
        'environment_selection_strategy' => 'getEnvironmentSelectionStrategy',
        'line_items' => 'getLineItems',
        'shipping_address' => 'getShippingAddress',
        'space_view_id' => 'getSpaceViewId',
        'token' => 'getToken'
    ];

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        
        $this->container['auto_confirmation_enabled'] = isset($data['auto_confirmation_enabled']) ? $data['auto_confirmation_enabled'] : null;
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['charge_retry_enabled'] = isset($data['charge_retry_enabled']) ? $data['charge_retry_enabled'] : null;
        
        $this->container['customers_presence'] = isset($data['customers_presence']) ? $data['customers_presence'] : null;
        
        $this->container['device_session_identifier'] = isset($data['device_session_identifier']) ? $data['device_session_identifier'] : null;
        
        $this->container['emails_disabled'] = isset($data['emails_disabled']) ? $data['emails_disabled'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['environment_selection_strategy'] = isset($data['environment_selection_strategy']) ? $data['environment_selection_strategy'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['device_session_identifier']) && (mb_strlen($this->container['device_session_identifier']) > 40)) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['device_session_identifier']) && (mb_strlen($this->container['device_session_identifier']) < 10)) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Gets auto_confirmation_enabled
     *
     * @return bool
     */
    public function getAutoConfirmationEnabled()
    {
        return $this->container['auto_confirmation_enabled'];
    }

    /**
     * Sets auto_confirmation_enabled
     *
     * @param bool $auto_confirmation_enabled When auto confirmation is enabled the transaction can be confirmed by the user and does not require an explicit confirmation through the web service API.
     *
     * @return $this
     */
    public function setAutoConfirmationEnabled($auto_confirmation_enabled)
    {
        $this->container['auto_confirmation_enabled'] = $auto_confirmation_enabled;

        return $this;
    }
    

    /**
     * Gets billing_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\AddressCreate
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets charge_retry_enabled
     *
     * @return bool
     */
    public function getChargeRetryEnabled()
    {
        return $this->container['charge_retry_enabled'];
    }

    /**
     * Sets charge_retry_enabled
     *
     * @param bool $charge_retry_enabled When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
     *
     * @return $this
     */
    public function setChargeRetryEnabled($charge_retry_enabled)
    {
        $this->container['charge_retry_enabled'] = $charge_retry_enabled;

        return $this;
    }
    

    /**
     * Gets customers_presence
     *
     * @return \PostFinanceCheckout\Sdk\Model\CustomersPresence
     */
    public function getCustomersPresence()
    {
        return $this->container['customers_presence'];
    }

    /**
     * Sets customers_presence
     *
     * @param \PostFinanceCheckout\Sdk\Model\CustomersPresence $customers_presence The customer's presence indicates what kind of authentication methods can be used during the authorization of the transaction. If no value is provided, 'Virtually Present' is used by default.
     *
     * @return $this
     */
    public function setCustomersPresence($customers_presence)
    {
        $this->container['customers_presence'] = $customers_presence;

        return $this;
    }
    

    /**
     * Gets device_session_identifier
     *
     * @return string
     */
    public function getDeviceSessionIdentifier()
    {
        return $this->container['device_session_identifier'];
    }

    /**
     * Sets device_session_identifier
     *
     * @param string $device_session_identifier The device session identifier links the transaction with the session identifier provided in the URL of the device data JavaScript. This allows to link the transaction with the collected device data of the buyer.
     *
     * @return $this
     */
    public function setDeviceSessionIdentifier($device_session_identifier)
    {
        if (!is_null($device_session_identifier) && (mb_strlen($device_session_identifier) > 40)) {
            throw new \InvalidArgumentException('invalid length for $device_session_identifier when calling TransactionCreate., must be smaller than or equal to 40.');
        }
        if (!is_null($device_session_identifier) && (mb_strlen($device_session_identifier) < 10)) {
            throw new \InvalidArgumentException('invalid length for $device_session_identifier when calling TransactionCreate., must be bigger than or equal to 10.');
        }

        $this->container['device_session_identifier'] = $device_session_identifier;

        return $this;
    }
    

    /**
     * Gets emails_disabled
     *
     * @return bool
     */
    public function getEmailsDisabled()
    {
        return $this->container['emails_disabled'];
    }

    /**
     * Sets emails_disabled
     *
     * @param bool $emails_disabled Flag indicating whether email sending is disabled for this particular transaction. Defaults to false.
     *
     * @return $this
     */
    public function setEmailsDisabled($emails_disabled)
    {
        $this->container['emails_disabled'] = $emails_disabled;

        return $this;
    }
    

    /**
     * Gets environment
     *
     * @return \PostFinanceCheckout\Sdk\Model\Environment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \PostFinanceCheckout\Sdk\Model\Environment $environment 
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }
    

    /**
     * Gets environment_selection_strategy
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy
     */
    public function getEnvironmentSelectionStrategy()
    {
        return $this->container['environment_selection_strategy'];
    }

    /**
     * Sets environment_selection_strategy
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy $environment_selection_strategy The environment selection strategy determines how the environment (test or production) for processing the transaction is selected.
     *
     * @return $this
     */
    public function setEnvironmentSelectionStrategy($environment_selection_strategy)
    {
        $this->container['environment_selection_strategy'] = $environment_selection_strategy;

        return $this;
    }
    

    /**
     * Gets line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets shipping_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\AddressCreate
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $shipping_address 
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }
    

    /**
     * Gets space_view_id
     *
     * @return int
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int $space_view_id 
     *
     * @return $this
     */
    public function setSpaceViewId($space_view_id)
    {
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }
    

    /**
     * Gets token
     *
     * @return int
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param int $token 
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


