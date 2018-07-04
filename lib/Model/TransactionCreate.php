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
 * TransactionCreate model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionCreate extends AbstractTransactionPending  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Transaction.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'autoConfirmationEnabled' => 'bool',
		'chargeRetryEnabled' => 'bool',
		'customersPresence' => '\PostFinanceCheckout\Sdk\Model\CustomersPresence',
		'deviceSessionIdentifier' => 'string',
		'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
		'environmentSelectionStrategy' => '\PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy',
		'spaceViewId' => 'int',
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	

	/**
	 * When auto confirmation is enabled the transaction can be confirmed by the user and does not require an explicit confirmation through the web service API.
	 *
	 * @var bool
	 */
	private $autoConfirmationEnabled;

	/**
	 * When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
	 *
	 * @var bool
	 */
	private $chargeRetryEnabled;

	/**
	 * The customer's presence indicates what kind of authentication methods can be used during the authorization of the transaction. If no value is provided, 'Virtually Present' is used by default.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CustomersPresence
	 */
	private $customersPresence;

	/**
	 * The device session identifier links the transaction with the session identifier provided in the URL of the device data JavaScript. This allows to link the transaction with the collected device data of the buyer.
	 *
	 * @var string
	 */
	private $deviceSessionIdentifier;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Environment
	 */
	private $environment;

	/**
	 * The environment selection strategy determines how the environment (test or production) for processing the transaction is selected.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy
	 */
	private $environmentSelectionStrategy;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['autoConfirmationEnabled'])) {
			$this->setAutoConfirmationEnabled($data['autoConfirmationEnabled']);
		}
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['chargeRetryEnabled'])) {
			$this->setChargeRetryEnabled($data['chargeRetryEnabled']);
		}
		if (isset($data['customersPresence'])) {
			$this->setCustomersPresence($data['customersPresence']);
		}
		if (isset($data['deviceSessionIdentifier'])) {
			$this->setDeviceSessionIdentifier($data['deviceSessionIdentifier']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['environmentSelectionStrategy'])) {
			$this->setEnvironmentSelectionStrategy($data['environmentSelectionStrategy']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['shippingAddress'])) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['spaceViewId'])) {
			$this->setSpaceViewId($data['spaceViewId']);
		}
		if (isset($data['token'])) {
			$this->setToken($data['token']);
		}
	}


	/**
	 * Returns autoConfirmationEnabled.
	 *
	 * When auto confirmation is enabled the transaction can be confirmed by the user and does not require an explicit confirmation through the web service API.
	 *
	 * @return bool
	 */
	public function getAutoConfirmationEnabled() {
		return $this->autoConfirmationEnabled;
	}

	/**
	 * Sets autoConfirmationEnabled.
	 *
	 * @param bool $autoConfirmationEnabled
	 * @return TransactionCreate
	 */
	public function setAutoConfirmationEnabled($autoConfirmationEnabled) {
		$this->autoConfirmationEnabled = $autoConfirmationEnabled;

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
		return parent::getBillingAddress();
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $billingAddress
	 * @return TransactionCreate
	 */
	public function setBillingAddress($billingAddress) {
		return parent::setBillingAddress($billingAddress);
	}

	/**
	 * Returns chargeRetryEnabled.
	 *
	 * When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
	 *
	 * @return bool
	 */
	public function getChargeRetryEnabled() {
		return $this->chargeRetryEnabled;
	}

	/**
	 * Sets chargeRetryEnabled.
	 *
	 * @param bool $chargeRetryEnabled
	 * @return TransactionCreate
	 */
	public function setChargeRetryEnabled($chargeRetryEnabled) {
		$this->chargeRetryEnabled = $chargeRetryEnabled;

		return $this;
	}

	/**
	 * Returns customersPresence.
	 *
	 * The customer's presence indicates what kind of authentication methods can be used during the authorization of the transaction. If no value is provided, 'Virtually Present' is used by default.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\CustomersPresence
	 */
	public function getCustomersPresence() {
		return $this->customersPresence;
	}

	/**
	 * Sets customersPresence.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\CustomersPresence $customersPresence
	 * @return TransactionCreate
	 */
	public function setCustomersPresence($customersPresence) {
		$this->customersPresence = $customersPresence;

		return $this;
	}

	/**
	 * Returns deviceSessionIdentifier.
	 *
	 * The device session identifier links the transaction with the session identifier provided in the URL of the device data JavaScript. This allows to link the transaction with the collected device data of the buyer.
	 *
	 * @return string
	 */
	public function getDeviceSessionIdentifier() {
		return $this->deviceSessionIdentifier;
	}

	/**
	 * Sets deviceSessionIdentifier.
	 *
	 * @param string $deviceSessionIdentifier
	 * @return TransactionCreate
	 */
	public function setDeviceSessionIdentifier($deviceSessionIdentifier) {
		$this->deviceSessionIdentifier = $deviceSessionIdentifier;

		return $this;
	}

	/**
	 * Returns environment.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Environment
	 */
	public function getEnvironment() {
		return $this->environment;
	}

	/**
	 * Sets environment.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Environment $environment
	 * @return TransactionCreate
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns environmentSelectionStrategy.
	 *
	 * The environment selection strategy determines how the environment (test or production) for processing the transaction is selected.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy
	 */
	public function getEnvironmentSelectionStrategy() {
		return $this->environmentSelectionStrategy;
	}

	/**
	 * Sets environmentSelectionStrategy.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy $environmentSelectionStrategy
	 * @return TransactionCreate
	 */
	public function setEnvironmentSelectionStrategy($environmentSelectionStrategy) {
		$this->environmentSelectionStrategy = $environmentSelectionStrategy;

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
		return parent::getLineItems();
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[] $lineItems
	 * @return TransactionCreate
	 */
	public function setLineItems($lineItems) {
		return parent::setLineItems($lineItems);
	}

	/**
	 * Returns shippingAddress.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	public function getShippingAddress() {
		return parent::getShippingAddress();
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $shippingAddress
	 * @return TransactionCreate
	 */
	public function setShippingAddress($shippingAddress) {
		return parent::setShippingAddress($shippingAddress);
	}

	/**
	 * Returns spaceViewId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSpaceViewId() {
		return $this->spaceViewId;
	}

	/**
	 * Sets spaceViewId.
	 *
	 * @param int $spaceViewId
	 * @return TransactionCreate
	 */
	public function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

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
		return parent::getToken();
	}

	/**
	 * Sets token.
	 *
	 * @param int $token
	 * @return TransactionCreate
	 */
	public function setToken($token) {
		return parent::setToken($token);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getLineItems() === null) {
			throw new ValidationException("'lineItems' can't be null", 'lineItems', $this);
		}
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

