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
 * Transaction model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Transaction  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Transaction';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'acceptHeader' => 'string',
		'acceptLanguageHeader' => 'string',
		'allowedPaymentMethodBrands' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodBrand[]',
		'allowedPaymentMethodConfigurations' => 'int[]',
		'authorizationAmount' => 'float',
		'authorizationEnvironment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
		'authorizationTimeoutOn' => '\DateTime',
		'authorizedOn' => '\DateTime',
		'autoConfirmationEnabled' => 'bool',
		'billingAddress' => '\PostFinanceCheckout\Sdk\Model\Address',
		'chargeRetryEnabled' => 'bool',
		'completedAmount' => 'float',
		'completedOn' => '\DateTime',
		'completionTimeoutOn' => '\DateTime',
		'confirmedBy' => 'int',
		'confirmedOn' => '\DateTime',
		'createdBy' => 'int',
		'createdOn' => '\DateTime',
		'currency' => 'string',
		'customerEmailAddress' => 'string',
		'customerId' => 'string',
		'customersPresence' => '\PostFinanceCheckout\Sdk\Model\CustomersPresence',
		'deliveryDecisionMadeOn' => '\DateTime',
		'deviceSessionIdentifier' => 'string',
		'endOfLife' => '\DateTime',
		'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
		'environmentSelectionStrategy' => '\PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy',
		'failedOn' => '\DateTime',
		'failedUrl' => 'string',
		'failureReason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
		'group' => '\PostFinanceCheckout\Sdk\Model\TransactionGroup',
		'id' => 'int',
		'internetProtocolAddress' => 'string',
		'internetProtocolAddressCountry' => 'string',
		'invoiceMerchantReference' => 'string',
		'language' => 'string',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'linkedSpaceId' => 'int',
		'merchantReference' => 'string',
		'metaData' => 'map[string,string]',
		'parent' => 'int',
		'paymentConnectorConfiguration' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration',
		'plannedPurgeDate' => '\DateTime',
		'processingOn' => '\DateTime',
		'refundedAmount' => 'float',
		'shippingAddress' => '\PostFinanceCheckout\Sdk\Model\Address',
		'shippingMethod' => 'string',
		'spaceViewId' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\TransactionState',
		'successUrl' => 'string',
		'timeZone' => 'string',
		'token' => '\PostFinanceCheckout\Sdk\Model\Token',
		'tokenizationMode' => '\PostFinanceCheckout\Sdk\Model\TokenizationnMode',
		'userAgentHeader' => 'string',
		'userFailureMessage' => 'string',
		'userInterfaceType' => '\PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType',
		'version' => 'int'	);

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
	 * @var string
	 */
	private $acceptHeader;

	/**
	 * The accept language contains the header which indicates the language preferences of the buyer.
	 *
	 * @var string
	 */
	private $acceptLanguageHeader;

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
	 * @var float
	 */
	private $authorizationAmount;

	/**
	 * The environment in which this transaction was successfully authorized.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment
	 */
	private $authorizationEnvironment;

	/**
	 * This is the time on which the transaction will be timed out when it is not at least authorized. The timeout time may change over time.
	 *
	 * @var \DateTime
	 */
	private $authorizationTimeoutOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $authorizedOn;

	/**
	 * When auto confirmation is enabled the transaction can be confirmed by the user and does not require an explicit confirmation through the web service API.
	 *
	 * @var bool
	 */
	private $autoConfirmationEnabled;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Address
	 */
	private $billingAddress;

	/**
	 * When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
	 *
	 * @var bool
	 */
	private $chargeRetryEnabled;

	/**
	 * The completed amount is the total amount which has been captured.
	 *
	 * @var float
	 */
	private $completedAmount;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $completedOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $completionTimeoutOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $confirmedBy;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $confirmedOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $createdBy;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

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
	 * The customer's presence indicates what kind of authentication methods can be used during the authorization of the transaction. If no value is provided, 'Virtually Present' is used by default.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CustomersPresence
	 */
	private $customersPresence;

	/**
	 * This date indicates when the decision has been made if a transaction should be delivered or not.
	 *
	 * @var \DateTime
	 */
	private $deliveryDecisionMadeOn;

	/**
	 * The device session identifier links the transaction with the session identifier provided in the URL of the device data JavaScript. This allows to link the transaction with the collected device data of the buyer.
	 *
	 * @var string
	 */
	private $deviceSessionIdentifier;

	/**
	 * The transaction's end of life indicates the date from which on no operation can be carried out anymore.
	 *
	 * @var \DateTime
	 */
	private $endOfLife;

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
	 * @var \DateTime
	 */
	private $failedOn;

	/**
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @var string
	 */
	private $failedUrl;

	/**
	 * The failure reason describes why the transaction failed. This is only provided when the transaction is marked as failed.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\FailureReason
	 */
	private $failureReason;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionGroup
	 */
	private $group;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The Internet Protocol (IP) address identifies the device of the buyer.
	 *
	 * @var string
	 */
	private $internetProtocolAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $internetProtocolAddressCountry;

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
	 * @var \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	private $lineItems;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

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
	 * @var int
	 */
	private $parent;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration
	 */
	private $paymentConnectorConfiguration;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $processingOn;

	/**
	 * The refunded amount is the total amount which has been refunded so far.
	 *
	 * @var float
	 */
	private $refundedAmount;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Address
	 */
	private $shippingAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $shippingMethod;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionState
	 */
	private $state;

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
	 * @var \PostFinanceCheckout\Sdk\Model\Token
	 */
	private $token;

	/**
	 * The tokenization mode controls if and how the tokenization of payment information is applied to the transaction.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TokenizationnMode
	 */
	private $tokenizationMode;

	/**
	 * The user agent header provides the exact string which contains the user agent of the buyer.
	 *
	 * @var string
	 */
	private $userAgentHeader;

	/**
	 * The failure message describes for an end user why the transaction is failed in the language of the user. This is only provided when the transaction is marked as failed.
	 *
	 * @var string
	 */
	private $userFailureMessage;

	/**
	 * The user interface type defines through which user interface the transaction has been processed resp. created.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType
	 */
	private $userInterfaceType;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;


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
		if (isset($data['authorizationEnvironment'])) {
			$this->setAuthorizationEnvironment($data['authorizationEnvironment']);
		}
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['customersPresence'])) {
			$this->setCustomersPresence($data['customersPresence']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['environmentSelectionStrategy'])) {
			$this->setEnvironmentSelectionStrategy($data['environmentSelectionStrategy']);
		}
		if (isset($data['failureReason'])) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['group'])) {
			$this->setGroup($data['group']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['metaData'])) {
			$this->setMetaData($data['metaData']);
		}
		if (isset($data['paymentConnectorConfiguration'])) {
			$this->setPaymentConnectorConfiguration($data['paymentConnectorConfiguration']);
		}
		if (isset($data['shippingAddress'])) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['token'])) {
			$this->setToken($data['token']);
		}
		if (isset($data['tokenizationMode'])) {
			$this->setTokenizationMode($data['tokenizationMode']);
		}
		if (isset($data['userInterfaceType'])) {
			$this->setUserInterfaceType($data['userInterfaceType']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns acceptHeader.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getAcceptHeader() {
		return $this->acceptHeader;
	}

	/**
	 * Sets acceptHeader.
	 *
	 * @param string $acceptHeader
	 * @return Transaction
	 */
	protected function setAcceptHeader($acceptHeader) {
		$this->acceptHeader = $acceptHeader;

		return $this;
	}

	/**
	 * Returns acceptLanguageHeader.
	 *
	 * The accept language contains the header which indicates the language preferences of the buyer.
	 *
	 * @return string
	 */
	public function getAcceptLanguageHeader() {
		return $this->acceptLanguageHeader;
	}

	/**
	 * Sets acceptLanguageHeader.
	 *
	 * @param string $acceptLanguageHeader
	 * @return Transaction
	 */
	protected function setAcceptLanguageHeader($acceptLanguageHeader) {
		$this->acceptLanguageHeader = $acceptLanguageHeader;

		return $this;
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
	 * @return Transaction
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
	 * @return Transaction
	 */
	public function setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations) {
		$this->allowedPaymentMethodConfigurations = $allowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns authorizationAmount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAuthorizationAmount() {
		return $this->authorizationAmount;
	}

	/**
	 * Sets authorizationAmount.
	 *
	 * @param float $authorizationAmount
	 * @return Transaction
	 */
	protected function setAuthorizationAmount($authorizationAmount) {
		$this->authorizationAmount = $authorizationAmount;

		return $this;
	}

	/**
	 * Returns authorizationEnvironment.
	 *
	 * The environment in which this transaction was successfully authorized.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment
	 */
	public function getAuthorizationEnvironment() {
		return $this->authorizationEnvironment;
	}

	/**
	 * Sets authorizationEnvironment.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment $authorizationEnvironment
	 * @return Transaction
	 */
	public function setAuthorizationEnvironment($authorizationEnvironment) {
		$this->authorizationEnvironment = $authorizationEnvironment;

		return $this;
	}

	/**
	 * Returns authorizationTimeoutOn.
	 *
	 * This is the time on which the transaction will be timed out when it is not at least authorized. The timeout time may change over time.
	 *
	 * @return \DateTime
	 */
	public function getAuthorizationTimeoutOn() {
		return $this->authorizationTimeoutOn;
	}

	/**
	 * Sets authorizationTimeoutOn.
	 *
	 * @param \DateTime $authorizationTimeoutOn
	 * @return Transaction
	 */
	protected function setAuthorizationTimeoutOn($authorizationTimeoutOn) {
		$this->authorizationTimeoutOn = $authorizationTimeoutOn;

		return $this;
	}

	/**
	 * Returns authorizedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getAuthorizedOn() {
		return $this->authorizedOn;
	}

	/**
	 * Sets authorizedOn.
	 *
	 * @param \DateTime $authorizedOn
	 * @return Transaction
	 */
	protected function setAuthorizedOn($authorizedOn) {
		$this->authorizedOn = $authorizedOn;

		return $this;
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
	 * @return Transaction
	 */
	protected function setAutoConfirmationEnabled($autoConfirmationEnabled) {
		$this->autoConfirmationEnabled = $autoConfirmationEnabled;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Address
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Address $billingAddress
	 * @return Transaction
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
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
	 * @return Transaction
	 */
	protected function setChargeRetryEnabled($chargeRetryEnabled) {
		$this->chargeRetryEnabled = $chargeRetryEnabled;

		return $this;
	}

	/**
	 * Returns completedAmount.
	 *
	 * The completed amount is the total amount which has been captured.
	 *
	 * @return float
	 */
	public function getCompletedAmount() {
		return $this->completedAmount;
	}

	/**
	 * Sets completedAmount.
	 *
	 * @param float $completedAmount
	 * @return Transaction
	 */
	protected function setCompletedAmount($completedAmount) {
		$this->completedAmount = $completedAmount;

		return $this;
	}

	/**
	 * Returns completedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getCompletedOn() {
		return $this->completedOn;
	}

	/**
	 * Sets completedOn.
	 *
	 * @param \DateTime $completedOn
	 * @return Transaction
	 */
	protected function setCompletedOn($completedOn) {
		$this->completedOn = $completedOn;

		return $this;
	}

	/**
	 * Returns completionTimeoutOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getCompletionTimeoutOn() {
		return $this->completionTimeoutOn;
	}

	/**
	 * Sets completionTimeoutOn.
	 *
	 * @param \DateTime $completionTimeoutOn
	 * @return Transaction
	 */
	protected function setCompletionTimeoutOn($completionTimeoutOn) {
		$this->completionTimeoutOn = $completionTimeoutOn;

		return $this;
	}

	/**
	 * Returns confirmedBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getConfirmedBy() {
		return $this->confirmedBy;
	}

	/**
	 * Sets confirmedBy.
	 *
	 * @param int $confirmedBy
	 * @return Transaction
	 */
	protected function setConfirmedBy($confirmedBy) {
		$this->confirmedBy = $confirmedBy;

		return $this;
	}

	/**
	 * Returns confirmedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getConfirmedOn() {
		return $this->confirmedOn;
	}

	/**
	 * Sets confirmedOn.
	 *
	 * @param \DateTime $confirmedOn
	 * @return Transaction
	 */
	protected function setConfirmedOn($confirmedOn) {
		$this->confirmedOn = $confirmedOn;

		return $this;
	}

	/**
	 * Returns createdBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Sets createdBy.
	 *
	 * @param int $createdBy
	 * @return Transaction
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
	 * @return Transaction
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

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
	 * @return Transaction
	 */
	protected function setCurrency($currency) {
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
	 * @return Transaction
	 */
	protected function setCustomerEmailAddress($customerEmailAddress) {
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
	 * @return Transaction
	 */
	protected function setCustomerId($customerId) {
		$this->customerId = $customerId;

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
	 * @return Transaction
	 */
	public function setCustomersPresence($customersPresence) {
		$this->customersPresence = $customersPresence;

		return $this;
	}

	/**
	 * Returns deliveryDecisionMadeOn.
	 *
	 * This date indicates when the decision has been made if a transaction should be delivered or not.
	 *
	 * @return \DateTime
	 */
	public function getDeliveryDecisionMadeOn() {
		return $this->deliveryDecisionMadeOn;
	}

	/**
	 * Sets deliveryDecisionMadeOn.
	 *
	 * @param \DateTime $deliveryDecisionMadeOn
	 * @return Transaction
	 */
	protected function setDeliveryDecisionMadeOn($deliveryDecisionMadeOn) {
		$this->deliveryDecisionMadeOn = $deliveryDecisionMadeOn;

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
	 * @return Transaction
	 */
	protected function setDeviceSessionIdentifier($deviceSessionIdentifier) {
		$this->deviceSessionIdentifier = $deviceSessionIdentifier;

		return $this;
	}

	/**
	 * Returns endOfLife.
	 *
	 * The transaction's end of life indicates the date from which on no operation can be carried out anymore.
	 *
	 * @return \DateTime
	 */
	public function getEndOfLife() {
		return $this->endOfLife;
	}

	/**
	 * Sets endOfLife.
	 *
	 * @param \DateTime $endOfLife
	 * @return Transaction
	 */
	protected function setEndOfLife($endOfLife) {
		$this->endOfLife = $endOfLife;

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
	 * @return Transaction
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
	 * @return Transaction
	 */
	public function setEnvironmentSelectionStrategy($environmentSelectionStrategy) {
		$this->environmentSelectionStrategy = $environmentSelectionStrategy;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param \DateTime $failedOn
	 * @return Transaction
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

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
	 * @return Transaction
	 */
	protected function setFailedUrl($failedUrl) {
		$this->failedUrl = $failedUrl;

		return $this;
	}

	/**
	 * Returns failureReason.
	 *
	 * The failure reason describes why the transaction failed. This is only provided when the transaction is marked as failed.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\FailureReason
	 */
	public function getFailureReason() {
		return $this->failureReason;
	}

	/**
	 * Sets failureReason.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\FailureReason $failureReason
	 * @return Transaction
	 */
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;

		return $this;
	}

	/**
	 * Returns group.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionGroup
	 */
	public function getGroup() {
		return $this->group;
	}

	/**
	 * Sets group.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionGroup $group
	 * @return Transaction
	 */
	public function setGroup($group) {
		$this->group = $group;

		return $this;
	}

	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return Transaction
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns internetProtocolAddress.
	 *
	 * The Internet Protocol (IP) address identifies the device of the buyer.
	 *
	 * @return string
	 */
	public function getInternetProtocolAddress() {
		return $this->internetProtocolAddress;
	}

	/**
	 * Sets internetProtocolAddress.
	 *
	 * @param string $internetProtocolAddress
	 * @return Transaction
	 */
	protected function setInternetProtocolAddress($internetProtocolAddress) {
		$this->internetProtocolAddress = $internetProtocolAddress;

		return $this;
	}

	/**
	 * Returns internetProtocolAddressCountry.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getInternetProtocolAddressCountry() {
		return $this->internetProtocolAddressCountry;
	}

	/**
	 * Sets internetProtocolAddressCountry.
	 *
	 * @param string $internetProtocolAddressCountry
	 * @return Transaction
	 */
	protected function setInternetProtocolAddressCountry($internetProtocolAddressCountry) {
		$this->internetProtocolAddressCountry = $internetProtocolAddressCountry;

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
	 * @return Transaction
	 */
	protected function setInvoiceMerchantReference($invoiceMerchantReference) {
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
	 * @return Transaction
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItem[] $lineItems
	 * @return Transaction
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
	 * @return Transaction
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

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
	 * @return Transaction
	 */
	protected function setMerchantReference($merchantReference) {
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
	 * @return Transaction
	 */
	public function setMetaData($metaData) {
		if (is_array($metaData) && empty($metaData)) {
			$this->metaData = new \stdClass;
		} else {
			$this->metaData = $metaData;
		}

		return $this;
	}

	/**
	 * Returns parent.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * Sets parent.
	 *
	 * @param int $parent
	 * @return Transaction
	 */
	protected function setParent($parent) {
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Returns paymentConnectorConfiguration.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration
	 */
	public function getPaymentConnectorConfiguration() {
		return $this->paymentConnectorConfiguration;
	}

	/**
	 * Sets paymentConnectorConfiguration.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration $paymentConnectorConfiguration
	 * @return Transaction
	 */
	public function setPaymentConnectorConfiguration($paymentConnectorConfiguration) {
		$this->paymentConnectorConfiguration = $paymentConnectorConfiguration;

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
	 * @return Transaction
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns processingOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getProcessingOn() {
		return $this->processingOn;
	}

	/**
	 * Sets processingOn.
	 *
	 * @param \DateTime $processingOn
	 * @return Transaction
	 */
	protected function setProcessingOn($processingOn) {
		$this->processingOn = $processingOn;

		return $this;
	}

	/**
	 * Returns refundedAmount.
	 *
	 * The refunded amount is the total amount which has been refunded so far.
	 *
	 * @return float
	 */
	public function getRefundedAmount() {
		return $this->refundedAmount;
	}

	/**
	 * Sets refundedAmount.
	 *
	 * @param float $refundedAmount
	 * @return Transaction
	 */
	protected function setRefundedAmount($refundedAmount) {
		$this->refundedAmount = $refundedAmount;

		return $this;
	}

	/**
	 * Returns shippingAddress.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Address
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Address $shippingAddress
	 * @return Transaction
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
	 * @return Transaction
	 */
	protected function setShippingMethod($shippingMethod) {
		$this->shippingMethod = $shippingMethod;

		return $this;
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
	 * @return Transaction
	 */
	protected function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionState $state
	 * @return Transaction
	 */
	public function setState($state) {
		$this->state = $state;

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
	 * @return Transaction
	 */
	protected function setSuccessUrl($successUrl) {
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
	 * @return Transaction
	 */
	protected function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

		return $this;
	}

	/**
	 * Returns token.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Token
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Sets token.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Token $token
	 * @return Transaction
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
	 * @return Transaction
	 */
	public function setTokenizationMode($tokenizationMode) {
		$this->tokenizationMode = $tokenizationMode;

		return $this;
	}

	/**
	 * Returns userAgentHeader.
	 *
	 * The user agent header provides the exact string which contains the user agent of the buyer.
	 *
	 * @return string
	 */
	public function getUserAgentHeader() {
		return $this->userAgentHeader;
	}

	/**
	 * Sets userAgentHeader.
	 *
	 * @param string $userAgentHeader
	 * @return Transaction
	 */
	protected function setUserAgentHeader($userAgentHeader) {
		$this->userAgentHeader = $userAgentHeader;

		return $this;
	}

	/**
	 * Returns userFailureMessage.
	 *
	 * The failure message describes for an end user why the transaction is failed in the language of the user. This is only provided when the transaction is marked as failed.
	 *
	 * @return string
	 */
	public function getUserFailureMessage() {
		return $this->userFailureMessage;
	}

	/**
	 * Sets userFailureMessage.
	 *
	 * @param string $userFailureMessage
	 * @return Transaction
	 */
	protected function setUserFailureMessage($userFailureMessage) {
		$this->userFailureMessage = $userFailureMessage;

		return $this;
	}

	/**
	 * Returns userInterfaceType.
	 *
	 * The user interface type defines through which user interface the transaction has been processed resp. created.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType
	 */
	public function getUserInterfaceType() {
		return $this->userInterfaceType;
	}

	/**
	 * Sets userInterfaceType.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType $userInterfaceType
	 * @return Transaction
	 */
	public function setUserInterfaceType($userInterfaceType) {
		$this->userInterfaceType = $userInterfaceType;

		return $this;
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return Transaction
	 */
	public function setVersion($version) {
		$this->version = $version;

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

