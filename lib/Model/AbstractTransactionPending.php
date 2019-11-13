<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
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
 * AbstractTransactionPending model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractTransactionPending implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.Transaction.Pending';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_payment_method_brands' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[]',
        'allowed_payment_method_configurations' => 'int[]',
        'billing_address' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
        'currency' => 'string',
        'customer_email_address' => 'string',
        'customer_id' => 'string',
        'failed_url' => 'string',
        'invoice_merchant_reference' => 'string',
        'language' => 'string',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
        'merchant_reference' => 'string',
        'meta_data' => 'map[string,string]',
        'shipping_address' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
        'shipping_method' => 'string',
        'success_url' => 'string',
        'time_zone' => 'string',
        'token' => 'int',
        'tokenization_mode' => '\PostFinanceCheckout\Sdk\Model\TokenizationMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_payment_method_brands' => null,
        'allowed_payment_method_configurations' => 'int64',
        'billing_address' => null,
        'currency' => null,
        'customer_email_address' => null,
        'customer_id' => null,
        'failed_url' => null,
        'invoice_merchant_reference' => null,
        'language' => null,
        'line_items' => null,
        'merchant_reference' => null,
        'meta_data' => null,
        'shipping_address' => null,
        'shipping_method' => null,
        'success_url' => null,
        'time_zone' => null,
        'token' => 'int64',
        'tokenization_mode' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allowed_payment_method_brands' => 'allowedPaymentMethodBrands',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'billing_address' => 'billingAddress',
        'currency' => 'currency',
        'customer_email_address' => 'customerEmailAddress',
        'customer_id' => 'customerId',
        'failed_url' => 'failedUrl',
        'invoice_merchant_reference' => 'invoiceMerchantReference',
        'language' => 'language',
        'line_items' => 'lineItems',
        'merchant_reference' => 'merchantReference',
        'meta_data' => 'metaData',
        'shipping_address' => 'shippingAddress',
        'shipping_method' => 'shippingMethod',
        'success_url' => 'successUrl',
        'time_zone' => 'timeZone',
        'token' => 'token',
        'tokenization_mode' => 'tokenizationMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_payment_method_brands' => 'setAllowedPaymentMethodBrands',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'billing_address' => 'setBillingAddress',
        'currency' => 'setCurrency',
        'customer_email_address' => 'setCustomerEmailAddress',
        'customer_id' => 'setCustomerId',
        'failed_url' => 'setFailedUrl',
        'invoice_merchant_reference' => 'setInvoiceMerchantReference',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'merchant_reference' => 'setMerchantReference',
        'meta_data' => 'setMetaData',
        'shipping_address' => 'setShippingAddress',
        'shipping_method' => 'setShippingMethod',
        'success_url' => 'setSuccessUrl',
        'time_zone' => 'setTimeZone',
        'token' => 'setToken',
        'tokenization_mode' => 'setTokenizationMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_payment_method_brands' => 'getAllowedPaymentMethodBrands',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'billing_address' => 'getBillingAddress',
        'currency' => 'getCurrency',
        'customer_email_address' => 'getCustomerEmailAddress',
        'customer_id' => 'getCustomerId',
        'failed_url' => 'getFailedUrl',
        'invoice_merchant_reference' => 'getInvoiceMerchantReference',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'merchant_reference' => 'getMerchantReference',
        'meta_data' => 'getMetaData',
        'shipping_address' => 'getShippingAddress',
        'shipping_method' => 'getShippingMethod',
        'success_url' => 'getSuccessUrl',
        'time_zone' => 'getTimeZone',
        'token' => 'getToken',
        'tokenization_mode' => 'getTokenizationMode'
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
        
        $this->container['allowed_payment_method_brands'] = isset($data['allowed_payment_method_brands']) ? $data['allowed_payment_method_brands'] : null;
        
        $this->container['allowed_payment_method_configurations'] = isset($data['allowed_payment_method_configurations']) ? $data['allowed_payment_method_configurations'] : null;
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['customer_email_address'] = isset($data['customer_email_address']) ? $data['customer_email_address'] : null;
        
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        
        $this->container['failed_url'] = isset($data['failed_url']) ? $data['failed_url'] : null;
        
        $this->container['invoice_merchant_reference'] = isset($data['invoice_merchant_reference']) ? $data['invoice_merchant_reference'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        
        $this->container['tokenization_mode'] = isset($data['tokenization_mode']) ? $data['tokenization_mode'] : null;
        
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
     * Gets allowed_payment_method_brands
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[]
     */
    public function getAllowedPaymentMethodBrands()
    {
        return $this->container['allowed_payment_method_brands'];
    }

    /**
     * Sets allowed_payment_method_brands
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[] $allowed_payment_method_brands 
     *
     * @return $this
     */
    public function setAllowedPaymentMethodBrands($allowed_payment_method_brands)
    {
        $this->container['allowed_payment_method_brands'] = $allowed_payment_method_brands;

        return $this;
    }
    

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return int[]
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param int[] $allowed_payment_method_configurations 
     *
     * @return $this
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

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
     * Gets customer_email_address
     *
     * @return string
     */
    public function getCustomerEmailAddress()
    {
        return $this->container['customer_email_address'];
    }

    /**
     * Sets customer_email_address
     *
     * @param string $customer_email_address The customer email address is the email address of the customer. If no email address is provided on the shipping or billing address this address is used.
     *
     * @return $this
     */
    public function setCustomerEmailAddress($customer_email_address)
    {
        $this->container['customer_email_address'] = $customer_email_address;

        return $this;
    }
    

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id 
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }
    

    /**
     * Gets failed_url
     *
     * @return string
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string $failed_url The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
     *
     * @return $this
     */
    public function setFailedUrl($failed_url)
    {
        $this->container['failed_url'] = $failed_url;

        return $this;
    }
    

    /**
     * Gets invoice_merchant_reference
     *
     * @return string
     */
    public function getInvoiceMerchantReference()
    {
        return $this->container['invoice_merchant_reference'];
    }

    /**
     * Sets invoice_merchant_reference
     *
     * @param string $invoice_merchant_reference 
     *
     * @return $this
     */
    public function setInvoiceMerchantReference($invoice_merchant_reference)
    {
        $this->container['invoice_merchant_reference'] = $invoice_merchant_reference;

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
     * @param string $language 
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
     * Gets merchant_reference
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string $merchant_reference 
     *
     * @return $this
     */
    public function setMerchantReference($merchant_reference)
    {
        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }
    

    /**
     * Gets meta_data
     *
     * @return map[string,string]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param map[string,string] $meta_data Meta data allow to store additional data along the object.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

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
     * Gets shipping_method
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string $shipping_method 
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }
    

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }
    

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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
     * Gets tokenization_mode
     *
     * @return \PostFinanceCheckout\Sdk\Model\TokenizationMode
     */
    public function getTokenizationMode()
    {
        return $this->container['tokenization_mode'];
    }

    /**
     * Sets tokenization_mode
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenizationMode $tokenization_mode The tokenization mode controls if and how the tokenization of payment information is applied to the transaction.
     *
     * @return $this
     */
    public function setTokenizationMode($tokenization_mode)
    {
        $this->container['tokenization_mode'] = $tokenization_mode;

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


