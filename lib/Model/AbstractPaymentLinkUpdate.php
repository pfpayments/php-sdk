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
 * AbstractPaymentLinkUpdate model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractPaymentLinkUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.PaymentLink.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_payment_method_configurations' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration[]',
        'applied_space_view' => 'int',
        'available_from' => '\DateTime',
        'available_until' => '\DateTime',
        'billing_address_required' => 'bool',
        'currency' => 'string',
        'language' => 'string',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
        'maximal_number_of_transactions' => 'int',
        'name' => 'string',
        'shipping_address_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_payment_method_configurations' => null,
        'applied_space_view' => 'int64',
        'available_from' => 'date-time',
        'available_until' => 'date-time',
        'billing_address_required' => null,
        'currency' => null,
        'language' => null,
        'line_items' => null,
        'maximal_number_of_transactions' => 'int32',
        'name' => null,
        'shipping_address_required' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'applied_space_view' => 'appliedSpaceView',
        'available_from' => 'availableFrom',
        'available_until' => 'availableUntil',
        'billing_address_required' => 'billingAddressRequired',
        'currency' => 'currency',
        'language' => 'language',
        'line_items' => 'lineItems',
        'maximal_number_of_transactions' => 'maximalNumberOfTransactions',
        'name' => 'name',
        'shipping_address_required' => 'shippingAddressRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'applied_space_view' => 'setAppliedSpaceView',
        'available_from' => 'setAvailableFrom',
        'available_until' => 'setAvailableUntil',
        'billing_address_required' => 'setBillingAddressRequired',
        'currency' => 'setCurrency',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'maximal_number_of_transactions' => 'setMaximalNumberOfTransactions',
        'name' => 'setName',
        'shipping_address_required' => 'setShippingAddressRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'applied_space_view' => 'getAppliedSpaceView',
        'available_from' => 'getAvailableFrom',
        'available_until' => 'getAvailableUntil',
        'billing_address_required' => 'getBillingAddressRequired',
        'currency' => 'getCurrency',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'maximal_number_of_transactions' => 'getMaximalNumberOfTransactions',
        'name' => 'getName',
        'shipping_address_required' => 'getShippingAddressRequired'
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
        
        $this->container['allowed_payment_method_configurations'] = isset($data['allowed_payment_method_configurations']) ? $data['allowed_payment_method_configurations'] : null;
        
        $this->container['applied_space_view'] = isset($data['applied_space_view']) ? $data['applied_space_view'] : null;
        
        $this->container['available_from'] = isset($data['available_from']) ? $data['available_from'] : null;
        
        $this->container['available_until'] = isset($data['available_until']) ? $data['available_until'] : null;
        
        $this->container['billing_address_required'] = isset($data['billing_address_required']) ? $data['billing_address_required'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['maximal_number_of_transactions'] = isset($data['maximal_number_of_transactions']) ? $data['maximal_number_of_transactions'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['shipping_address_required'] = isset($data['shipping_address_required']) ? $data['shipping_address_required'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
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
     * Gets allowed_payment_method_configurations
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration[]
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration[] $allowed_payment_method_configurations The allowed payment method configurations restrict the payment methods which can be used with this payment link.
     *
     * @return $this
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets applied_space_view
     *
     * @return int
     */
    public function getAppliedSpaceView()
    {
        return $this->container['applied_space_view'];
    }

    /**
     * Sets applied_space_view
     *
     * @param int $applied_space_view The payment link can be conducted in a specific space view. The space view may apply a specific design to the payment page.
     *
     * @return $this
     */
    public function setAppliedSpaceView($applied_space_view)
    {
        $this->container['applied_space_view'] = $applied_space_view;

        return $this;
    }
    

    /**
     * Gets available_from
     *
     * @return \DateTime
     */
    public function getAvailableFrom()
    {
        return $this->container['available_from'];
    }

    /**
     * Sets available_from
     *
     * @param \DateTime $available_from The available from date defines the earliest date on which the payment link can be used. When no date is specified there will be no restriction.
     *
     * @return $this
     */
    public function setAvailableFrom($available_from)
    {
        $this->container['available_from'] = $available_from;

        return $this;
    }
    

    /**
     * Gets available_until
     *
     * @return \DateTime
     */
    public function getAvailableUntil()
    {
        return $this->container['available_until'];
    }

    /**
     * Sets available_until
     *
     * @param \DateTime $available_until The available from date defines the latest date on which the payment link can be used to initialize a transaction. When no date is specified there will be no restriction.
     *
     * @return $this
     */
    public function setAvailableUntil($available_until)
    {
        $this->container['available_until'] = $available_until;

        return $this;
    }
    

    /**
     * Gets billing_address_required
     *
     * @return bool
     */
    public function getBillingAddressRequired()
    {
        return $this->container['billing_address_required'];
    }

    /**
     * Sets billing_address_required
     *
     * @param bool $billing_address_required By making the billing address required the transaction can only be created when a billing address is provided within the request.
     *
     * @return $this
     */
    public function setBillingAddressRequired($billing_address_required)
    {
        $this->container['billing_address_required'] = $billing_address_required;

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
     * @param string $currency The currency defines in which currency the payment is executed in. If no currency is defined it has to be specified within the request parameter 'currency'.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language defines the language of the payment page. If no language is provided it can be provided through the request parameter.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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
     * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[] $line_items The line items allows to define the line items for this payment link. When the line items are defined they cannot be overridden through the request parameters.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets maximal_number_of_transactions
     *
     * @return int
     */
    public function getMaximalNumberOfTransactions()
    {
        return $this->container['maximal_number_of_transactions'];
    }

    /**
     * Sets maximal_number_of_transactions
     *
     * @param int $maximal_number_of_transactions The maximal number of transactions limits the number of transactions which can be created with this payment link.
     *
     * @return $this
     */
    public function setMaximalNumberOfTransactions($maximal_number_of_transactions)
    {
        $this->container['maximal_number_of_transactions'] = $maximal_number_of_transactions;

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
     * @param string $name The payment link name is used internally to identify the payment link. For example the name is used within search fields and hence it should be distinct and descriptive.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AbstractPaymentLinkUpdate., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets shipping_address_required
     *
     * @return bool
     */
    public function getShippingAddressRequired()
    {
        return $this->container['shipping_address_required'];
    }

    /**
     * Sets shipping_address_required
     *
     * @param bool $shipping_address_required By making the shipping address required the transaction can only be created when a shipping address is provided within the request.
     *
     * @return $this
     */
    public function setShippingAddressRequired($shipping_address_required)
    {
        $this->container['shipping_address_required'] = $shipping_address_required;

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


