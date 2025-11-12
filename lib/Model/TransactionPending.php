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
 * TransactionPending model
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
class TransactionPending implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction.Pending';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_email_address' => 'string',
        'shipping_method' => 'string',
        'invoice_merchant_reference' => 'string',
        'success_url' => 'string',
        'time_zone' => 'string',
        'language' => 'string',
        'tokenization_mode' => '\PostFinanceCheckout\Sdk\Model\TokenizationMode',
        'allowed_payment_method_brands' => 'int[]',
        'completion_behavior' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior',
        'token' => 'int',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
        'meta_data' => 'array<string,string>',
        'customer_id' => 'string',
        'shipping_address' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
        'currency' => 'string',
        'billing_address' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
        'merchant_reference' => 'string',
        'allowed_payment_method_configurations' => 'int[]',
        'failed_url' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_email_address' => null,
        'shipping_method' => null,
        'invoice_merchant_reference' => null,
        'success_url' => null,
        'time_zone' => null,
        'language' => null,
        'tokenization_mode' => null,
        'allowed_payment_method_brands' => 'int64',
        'completion_behavior' => null,
        'token' => 'int64',
        'line_items' => null,
        'meta_data' => null,
        'customer_id' => null,
        'shipping_address' => null,
        'currency' => null,
        'billing_address' => null,
        'merchant_reference' => null,
        'allowed_payment_method_configurations' => 'int64',
        'failed_url' => null,
        'version' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_email_address' => false,
        'shipping_method' => false,
        'invoice_merchant_reference' => false,
        'success_url' => false,
        'time_zone' => false,
        'language' => false,
        'tokenization_mode' => false,
        'allowed_payment_method_brands' => false,
        'completion_behavior' => false,
        'token' => false,
        'line_items' => false,
        'meta_data' => false,
        'customer_id' => false,
        'shipping_address' => false,
        'currency' => false,
        'billing_address' => false,
        'merchant_reference' => false,
        'allowed_payment_method_configurations' => false,
        'failed_url' => false,
        'version' => false
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
        'customer_email_address' => 'customerEmailAddress',
        'shipping_method' => 'shippingMethod',
        'invoice_merchant_reference' => 'invoiceMerchantReference',
        'success_url' => 'successUrl',
        'time_zone' => 'timeZone',
        'language' => 'language',
        'tokenization_mode' => 'tokenizationMode',
        'allowed_payment_method_brands' => 'allowedPaymentMethodBrands',
        'completion_behavior' => 'completionBehavior',
        'token' => 'token',
        'line_items' => 'lineItems',
        'meta_data' => 'metaData',
        'customer_id' => 'customerId',
        'shipping_address' => 'shippingAddress',
        'currency' => 'currency',
        'billing_address' => 'billingAddress',
        'merchant_reference' => 'merchantReference',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'failed_url' => 'failedUrl',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_email_address' => 'setCustomerEmailAddress',
        'shipping_method' => 'setShippingMethod',
        'invoice_merchant_reference' => 'setInvoiceMerchantReference',
        'success_url' => 'setSuccessUrl',
        'time_zone' => 'setTimeZone',
        'language' => 'setLanguage',
        'tokenization_mode' => 'setTokenizationMode',
        'allowed_payment_method_brands' => 'setAllowedPaymentMethodBrands',
        'completion_behavior' => 'setCompletionBehavior',
        'token' => 'setToken',
        'line_items' => 'setLineItems',
        'meta_data' => 'setMetaData',
        'customer_id' => 'setCustomerId',
        'shipping_address' => 'setShippingAddress',
        'currency' => 'setCurrency',
        'billing_address' => 'setBillingAddress',
        'merchant_reference' => 'setMerchantReference',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'failed_url' => 'setFailedUrl',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_email_address' => 'getCustomerEmailAddress',
        'shipping_method' => 'getShippingMethod',
        'invoice_merchant_reference' => 'getInvoiceMerchantReference',
        'success_url' => 'getSuccessUrl',
        'time_zone' => 'getTimeZone',
        'language' => 'getLanguage',
        'tokenization_mode' => 'getTokenizationMode',
        'allowed_payment_method_brands' => 'getAllowedPaymentMethodBrands',
        'completion_behavior' => 'getCompletionBehavior',
        'token' => 'getToken',
        'line_items' => 'getLineItems',
        'meta_data' => 'getMetaData',
        'customer_id' => 'getCustomerId',
        'shipping_address' => 'getShippingAddress',
        'currency' => 'getCurrency',
        'billing_address' => 'getBillingAddress',
        'merchant_reference' => 'getMerchantReference',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'failed_url' => 'getFailedUrl',
        'version' => 'getVersion'
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
        $this->setIfExists('customer_email_address', $data ?? [], null);
        $this->setIfExists('shipping_method', $data ?? [], null);
        $this->setIfExists('invoice_merchant_reference', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('tokenization_mode', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_brands', $data ?? [], null);
        $this->setIfExists('completion_behavior', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('meta_data', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('merchant_reference', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_configurations', $data ?? [], null);
        $this->setIfExists('failed_url', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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

        if (!is_null($this->container['customer_email_address']) && (mb_strlen($this->container['customer_email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'customer_email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['shipping_method']) && (mb_strlen($this->container['shipping_method']) > 200)) {
            $invalidProperties[] = "invalid value for 'shipping_method', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && (mb_strlen($this->container['invoice_merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['invoice_merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
        }

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be bigger than or equal to 9.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
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
     * Gets customer_email_address
     *
     * @return string|null
     */
    public function getCustomerEmailAddress()
    {
        return $this->container['customer_email_address'];
    }

    /**
     * Sets customer_email_address
     *
     * @param string|null $customer_email_address The customer's email address.
     *
     * @return self
     */
    public function setCustomerEmailAddress($customer_email_address)
    {
        if (is_null($customer_email_address)) {
            throw new \InvalidArgumentException('non-nullable customer_email_address cannot be null');
        }
        if ((mb_strlen($customer_email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $customer_email_address when calling TransactionPending., must be smaller than or equal to 254.');
        }

        $this->container['customer_email_address'] = $customer_email_address;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string|null $shipping_method The name of the shipping method used to ship the products.
     *
     * @return self
     */
    public function setShippingMethod($shipping_method)
    {
        if (is_null($shipping_method)) {
            throw new \InvalidArgumentException('non-nullable shipping_method cannot be null');
        }
        if ((mb_strlen($shipping_method) > 200)) {
            throw new \InvalidArgumentException('invalid length for $shipping_method when calling TransactionPending., must be smaller than or equal to 200.');
        }

        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets invoice_merchant_reference
     *
     * @return string|null
     */
    public function getInvoiceMerchantReference()
    {
        return $this->container['invoice_merchant_reference'];
    }

    /**
     * Sets invoice_merchant_reference
     *
     * @param string|null $invoice_merchant_reference The merchant's reference used to identify the invoice.
     *
     * @return self
     */
    public function setInvoiceMerchantReference($invoice_merchant_reference)
    {
        if (is_null($invoice_merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable invoice_merchant_reference cannot be null');
        }
        if ((mb_strlen($invoice_merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invoice_merchant_reference when calling TransactionPending., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($invoice_merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$invoice_merchant_reference when calling TransactionPending., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['invoice_merchant_reference'] = $invoice_merchant_reference;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url The URL to redirect the customer back to after they successfully authenticated their payment.
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        if ((mb_strlen($success_url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling TransactionPending., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling TransactionPending., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The customer's time zone, which affects how dates and times are formatted when communicating with the customer.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language that is linked to the object.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets tokenization_mode
     *
     * @return \PostFinanceCheckout\Sdk\Model\TokenizationMode|null
     */
    public function getTokenizationMode()
    {
        return $this->container['tokenization_mode'];
    }

    /**
     * Sets tokenization_mode
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenizationMode|null $tokenization_mode tokenization_mode
     *
     * @return self
     */
    public function setTokenizationMode($tokenization_mode)
    {
        if (is_null($tokenization_mode)) {
            throw new \InvalidArgumentException('non-nullable tokenization_mode cannot be null');
        }
        $this->container['tokenization_mode'] = $tokenization_mode;

        return $this;
    }

    /**
     * Gets allowed_payment_method_brands
     *
     * @return int[]|null
     */
    public function getAllowedPaymentMethodBrands()
    {
        return $this->container['allowed_payment_method_brands'];
    }

    /**
     * Sets allowed_payment_method_brands
     *
     * @param int[]|null $allowed_payment_method_brands The payment method brands that can be used to authorize the transaction.
     *
     * @return self
     */
    public function setAllowedPaymentMethodBrands($allowed_payment_method_brands)
    {
        if (is_null($allowed_payment_method_brands)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_brands cannot be null');
        }
        $this->container['allowed_payment_method_brands'] = $allowed_payment_method_brands;

        return $this;
    }

    /**
     * Gets completion_behavior
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior|null
     */
    public function getCompletionBehavior()
    {
        return $this->container['completion_behavior'];
    }

    /**
     * Sets completion_behavior
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior|null $completion_behavior completion_behavior
     *
     * @return self
     */
    public function setCompletionBehavior($completion_behavior)
    {
        if (is_null($completion_behavior)) {
            throw new \InvalidArgumentException('non-nullable completion_behavior cannot be null');
        }
        $this->container['completion_behavior'] = $completion_behavior;

        return $this;
    }

    /**
     * Gets token
     *
     * @return int|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param int|null $token The payment token that should be used to charge the customer.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItemCreate[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[]|null $line_items The line items purchased by the customer.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return array<string,string>|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param array<string,string>|null $meta_data Allow to store additional information about the object.
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        if (is_null($meta_data)) {
            throw new \InvalidArgumentException('non-nullable meta_data cannot be null');
        }
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The unique identifier of the customer in the external system.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\AddressCreate|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\AddressCreate|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The three-letter code (ISO 4217 format) of the transaction's currency.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\AddressCreate|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\AddressCreate|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets merchant_reference
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string|null $merchant_reference The merchant's reference used to identify the transaction.
     *
     * @return self
     */
    public function setMerchantReference($merchant_reference)
    {
        if (is_null($merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable merchant_reference cannot be null');
        }
        if ((mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling TransactionPending., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_reference when calling TransactionPending., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return int[]|null
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param int[]|null $allowed_payment_method_configurations The payment method configurations that can be used to authorize the transaction.
     *
     * @return self
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        if (is_null($allowed_payment_method_configurations)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_configurations cannot be null');
        }
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }

    /**
     * Gets failed_url
     *
     * @return string|null
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string|null $failed_url The URL to redirect the customer back to after they canceled or failed to authenticated their payment.
     *
     * @return self
     */
    public function setFailedUrl($failed_url)
    {
        if (is_null($failed_url)) {
            throw new \InvalidArgumentException('non-nullable failed_url cannot be null');
        }
        if ((mb_strlen($failed_url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling TransactionPending., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling TransactionPending., must be bigger than or equal to 9.');
        }

        $this->container['failed_url'] = $failed_url;

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
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
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


