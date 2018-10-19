<?php
/**
 * PostFinance Checkout SDK
 *
 * This library allows to interact with the PostFinance Checkout payment service.
 * PostFinance Checkout SDK: 1.0.0
 * 
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

use PostFinanceCheckout\Sdk\ValidationException;

/**
 * AbstractTransactionPending model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractTransactionPending  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.Transaction.Pending';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'allowedPaymentMethodBrands' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[]',
		'allowedPaymentMethodConfigurations' => 'int[]',
		'billingAddress' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
		'currency' => 'string',
		'customerEmailAddress' => 'string',
		'customerId' => 'string',
		'failedUrl' => 'string',
		'invoiceMerchantReference' => 'string',
		'language' => 'string',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
		'merchantReference' => 'string',
		'metaData' => 'map[string,string]',
		'shippingAddress' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
		'shippingMethod' => 'string',
		'successUrl' => 'string',
		'timeZone' => 'string',
		'token' => 'int',
		'tokenizationMode' => '\PostFinanceCheckout\Sdk\Model\TokenizationnMode'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[]
	 */
	private $allowedPaymentMethodBrands;

	/**
	 * 
	 *
	 * @var int[]
	 */
	private $allowedPaymentMethodConfigurations;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	private $billingAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $currency;

	/**
	 * The customer email address is the email address of the customer. If no email address is provided on the shipping or billing address this address is used.
	 *
	 * @var string
	 */
	private $customerEmailAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $customerId;

	/**
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @var string
	 */
	private $failedUrl;

	/**
	 * 
	 *
	 * @var string
	 */
	private $invoiceMerchantReference;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
	 */
	private $lineItems;

	/**
	 * 
	 *
	 * @var string
	 */
	private $merchantReference;

	/**
	 * Meta data allow to store additional data along the object.
	 *
	 * @var map[string,string]
	 */
	private $metaData;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	private $shippingAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $shippingMethod;

	/**
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @var string
	 */
	private $successUrl;

	/**
	 * The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
	 *
	 * @var string
	 */
	private $timeZone;

	/**
	 * 
	 *
	 * @var int
	 */
	private $token;

	/**
	 * The tokenization mode controls if and how the tokenization of payment information is applied to the transaction.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TokenizationnMode
	 */
	private $tokenizationMode;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['allowedPaymentMethodBrands'])) {
			$this->setAllowedPaymentMethodBrands($data['allowedPaymentMethodBrands']);
		}
		if (isset($data['allowedPaymentMethodConfigurations'])) {
			$this->setAllowedPaymentMethodConfigurations($data['allowedPaymentMethodConfigurations']);
		}
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['currency'])) {
			$this->setCurrency($data['currency']);
		}
		if (isset($data['customerEmailAddress'])) {
			$this->setCustomerEmailAddress($data['customerEmailAddress']);
		}
		if (isset($data['customerId'])) {
			$this->setCustomerId($data['customerId']);
		}
		if (isset($data['failedUrl'])) {
			$this->setFailedUrl($data['failedUrl']);
		}
		if (isset($data['invoiceMerchantReference'])) {
			$this->setInvoiceMerchantReference($data['invoiceMerchantReference']);
		}
		if (isset($data['language'])) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['merchantReference'])) {
			$this->setMerchantReference($data['merchantReference']);
		}
		if (isset($data['metaData'])) {
			$this->setMetaData($data['metaData']);
		}
		if (isset($data['shippingAddress'])) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['shippingMethod'])) {
			$this->setShippingMethod($data['shippingMethod']);
		}
		if (isset($data['successUrl'])) {
			$this->setSuccessUrl($data['successUrl']);
		}
		if (isset($data['timeZone'])) {
			$this->setTimeZone($data['timeZone']);
		}
		if (isset($data['token'])) {
			$this->setToken($data['token']);
		}
		if (isset($data['tokenizationMode'])) {
			$this->setTokenizationMode($data['tokenizationMode']);
		}
	}


	/**
	 * Returns allowedPaymentMethodBrands.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[]
	 */
	public function getAllowedPaymentMethodBrands() {
		return $this->allowedPaymentMethodBrands;
	}

	/**
	 * Sets allowedPaymentMethodBrands.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[] $allowedPaymentMethodBrands
	 * @return AbstractTransactionPending
	 */
	public function setAllowedPaymentMethodBrands($allowedPaymentMethodBrands) {
		$this->allowedPaymentMethodBrands = $allowedPaymentMethodBrands;

		return $this;
	}

	/**
	 * Returns allowedPaymentMethodConfigurations.
	 *
	 * 
	 *
	 * @return int[]
	 */
	public function getAllowedPaymentMethodConfigurations() {
		return $this->allowedPaymentMethodConfigurations;
	}

	/**
	 * Sets allowedPaymentMethodConfigurations.
	 *
	 * @param int[] $allowedPaymentMethodConfigurations
	 * @return AbstractTransactionPending
	 */
	public function setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations) {
		$this->allowedPaymentMethodConfigurations = $allowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $billingAddress
	 * @return AbstractTransactionPending
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns currency.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency
	 * @return AbstractTransactionPending
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Returns customerEmailAddress.
	 *
	 * The customer email address is the email address of the customer. If no email address is provided on the shipping or billing address this address is used.
	 *
	 * @return string
	 */
	public function getCustomerEmailAddress() {
		return $this->customerEmailAddress;
	}

	/**
	 * Sets customerEmailAddress.
	 *
	 * @param string $customerEmailAddress
	 * @return AbstractTransactionPending
	 */
	public function setCustomerEmailAddress($customerEmailAddress) {
		$this->customerEmailAddress = $customerEmailAddress;

		return $this;
	}

	/**
	 * Returns customerId.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCustomerId() {
		return $this->customerId;
	}

	/**
	 * Sets customerId.
	 *
	 * @param string $customerId
	 * @return AbstractTransactionPending
	 */
	public function setCustomerId($customerId) {
		$this->customerId = $customerId;

		return $this;
	}

	/**
	 * Returns failedUrl.
	 *
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @return string
	 */
	public function getFailedUrl() {
		return $this->failedUrl;
	}

	/**
	 * Sets failedUrl.
	 *
	 * @param string $failedUrl
	 * @return AbstractTransactionPending
	 */
	public function setFailedUrl($failedUrl) {
		$this->failedUrl = $failedUrl;

		return $this;
	}

	/**
	 * Returns invoiceMerchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getInvoiceMerchantReference() {
		return $this->invoiceMerchantReference;
	}

	/**
	 * Sets invoiceMerchantReference.
	 *
	 * @param string $invoiceMerchantReference
	 * @return AbstractTransactionPending
	 */
	public function setInvoiceMerchantReference($invoiceMerchantReference) {
		$this->invoiceMerchantReference = $invoiceMerchantReference;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return AbstractTransactionPending
	 */
	public function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[] $lineItems
	 * @return AbstractTransactionPending
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns merchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMerchantReference() {
		return $this->merchantReference;
	}

	/**
	 * Sets merchantReference.
	 *
	 * @param string $merchantReference
	 * @return AbstractTransactionPending
	 */
	public function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

		return $this;
	}

	/**
	 * Returns metaData.
	 *
	 * Meta data allow to store additional data along the object.
	 *
	 * @return map[string,string]
	 */
	public function getMetaData() {
		return $this->metaData;
	}

	/**
	 * Sets metaData.
	 *
	 * @param map[string,string] $metaData
	 * @return AbstractTransactionPending
	 */
	public function setMetaData($metaData) {
		$this->metaData = $metaData;

		return $this;
	}

	/**
	 * Returns shippingAddress.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $shippingAddress
	 * @return AbstractTransactionPending
	 */
	public function setShippingAddress($shippingAddress) {
		$this->shippingAddress = $shippingAddress;

		return $this;
	}

	/**
	 * Returns shippingMethod.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getShippingMethod() {
		return $this->shippingMethod;
	}

	/**
	 * Sets shippingMethod.
	 *
	 * @param string $shippingMethod
	 * @return AbstractTransactionPending
	 */
	public function setShippingMethod($shippingMethod) {
		$this->shippingMethod = $shippingMethod;

		return $this;
	}

	/**
	 * Returns successUrl.
	 *
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @return string
	 */
	public function getSuccessUrl() {
		return $this->successUrl;
	}

	/**
	 * Sets successUrl.
	 *
	 * @param string $successUrl
	 * @return AbstractTransactionPending
	 */
	public function setSuccessUrl($successUrl) {
		$this->successUrl = $successUrl;

		return $this;
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
	 *
	 * @return string
	 */
	public function getTimeZone() {
		return $this->timeZone;
	}

	/**
	 * Sets timeZone.
	 *
	 * @param string $timeZone
	 * @return AbstractTransactionPending
	 */
	public function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

		return $this;
	}

	/**
	 * Returns token.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Sets token.
	 *
	 * @param int $token
	 * @return AbstractTransactionPending
	 */
	public function setToken($token) {
		$this->token = $token;

		return $this;
	}

	/**
	 * Returns tokenizationMode.
	 *
	 * The tokenization mode controls if and how the tokenization of payment information is applied to the transaction.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TokenizationnMode
	 */
	public function getTokenizationMode() {
		return $this->tokenizationMode;
	}

	/**
	 * Sets tokenizationMode.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TokenizationnMode $tokenizationMode
	 * @return AbstractTransactionPending
	 */
	public function setTokenizationMode($tokenizationMode) {
		$this->tokenizationMode = $tokenizationMode;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\PostFinanceCheckout\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\PostFinanceCheckout\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}

