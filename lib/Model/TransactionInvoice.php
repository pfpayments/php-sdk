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
 * TransactionInvoice model
 *
 * @category    Class
 * @description The transaction invoice represents the invoice document for a particular transaction.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionInvoice extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionInvoice';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'completion' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletion',
		'createdOn' => '\DateTime',
		'derecognizedOn' => '\DateTime',
		'dueOn' => '\DateTime',
		'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
		'externalId' => 'string',
		'language' => 'string',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'merchantReference' => 'string',
		'outstandingAmount' => 'float',
		'paidOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'spaceViewId' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\TransactionInvoiceState',
		'taxAmount' => 'float',
		'version' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	

	/**
	 * 
	 *
	 * @var float
	 */
	private $amount;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionCompletion
	 */
	private $completion;

	/**
	 * The date on which the invoice is created on.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The date on which the invoice is marked as derecognized.
	 *
	 * @var \DateTime
	 */
	private $derecognizedOn;

	/**
	 * The date on which the invoice should be paid on.
	 *
	 * @var \DateTime
	 */
	private $dueOn;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Environment
	 */
	private $environment;

	/**
	 * 
	 *
	 * @var string
	 */
	private $externalId;

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
	 * 
	 *
	 * @var string
	 */
	private $merchantReference;

	/**
	 * The outstanding amount indicates how much the buyer owes the merchant. A negative amount indicates that the invoice is overpaid.
	 *
	 * @var float
	 */
	private $outstandingAmount;

	/**
	 * The date on which the invoice is marked as paid. Eventually this date lags behind of the actual paid date.
	 *
	 * @var \DateTime
	 */
	private $paidOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionInvoiceState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var float
	 */
	private $taxAmount;

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
		parent::__construct($data);

		if (isset($data['completion'])) {
			$this->setCompletion($data['completion']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
	}


	/**
	 * Returns amount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets amount.
	 *
	 * @param float $amount
	 * @return TransactionInvoice
	 */
	protected function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns completion.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletion
	 */
	public function getCompletion() {
		return $this->completion;
	}

	/**
	 * Sets completion.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletion $completion
	 * @return TransactionInvoice
	 */
	public function setCompletion($completion) {
		$this->completion = $completion;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * The date on which the invoice is created on.
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
	 * @return TransactionInvoice
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns derecognizedOn.
	 *
	 * The date on which the invoice is marked as derecognized.
	 *
	 * @return \DateTime
	 */
	public function getDerecognizedOn() {
		return $this->derecognizedOn;
	}

	/**
	 * Sets derecognizedOn.
	 *
	 * @param \DateTime $derecognizedOn
	 * @return TransactionInvoice
	 */
	protected function setDerecognizedOn($derecognizedOn) {
		$this->derecognizedOn = $derecognizedOn;

		return $this;
	}

	/**
	 * Returns dueOn.
	 *
	 * The date on which the invoice should be paid on.
	 *
	 * @return \DateTime
	 */
	public function getDueOn() {
		return $this->dueOn;
	}

	/**
	 * Sets dueOn.
	 *
	 * @param \DateTime $dueOn
	 * @return TransactionInvoice
	 */
	protected function setDueOn($dueOn) {
		$this->dueOn = $dueOn;

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
	 * @return TransactionInvoice
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return TransactionInvoice
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

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
	 * @return TransactionInvoice
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
	 * @return TransactionInvoice
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
	 * @return TransactionInvoice
	 */
	protected function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

		return $this;
	}

	/**
	 * Returns outstandingAmount.
	 *
	 * The outstanding amount indicates how much the buyer owes the merchant. A negative amount indicates that the invoice is overpaid.
	 *
	 * @return float
	 */
	public function getOutstandingAmount() {
		return $this->outstandingAmount;
	}

	/**
	 * Sets outstandingAmount.
	 *
	 * @param float $outstandingAmount
	 * @return TransactionInvoice
	 */
	protected function setOutstandingAmount($outstandingAmount) {
		$this->outstandingAmount = $outstandingAmount;

		return $this;
	}

	/**
	 * Returns paidOn.
	 *
	 * The date on which the invoice is marked as paid. Eventually this date lags behind of the actual paid date.
	 *
	 * @return \DateTime
	 */
	public function getPaidOn() {
		return $this->paidOn;
	}

	/**
	 * Sets paidOn.
	 *
	 * @param \DateTime $paidOn
	 * @return TransactionInvoice
	 */
	protected function setPaidOn($paidOn) {
		$this->paidOn = $paidOn;

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
	 * @return TransactionInvoice
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

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
	 * @return TransactionInvoice
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
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionInvoiceState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionInvoiceState $state
	 * @return TransactionInvoice
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns taxAmount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getTaxAmount() {
		return $this->taxAmount;
	}

	/**
	 * Sets taxAmount.
	 *
	 * @param float $taxAmount
	 * @return TransactionInvoice
	 */
	protected function setTaxAmount($taxAmount) {
		$this->taxAmount = $taxAmount;

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
	 * @return TransactionInvoice
	 */
	protected function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

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

