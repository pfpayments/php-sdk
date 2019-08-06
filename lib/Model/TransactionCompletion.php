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
 * TransactionCompletion model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionCompletion extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionCompletion';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'baseLineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'createdBy' => 'int',
		'createdOn' => '\DateTime',
		'externalId' => 'string',
		'failedOn' => '\DateTime',
		'failureReason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
		'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
		'language' => 'string',
		'lastCompletion' => 'bool',
		'lineItemVersion' => '\PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'mode' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionMode',
		'nextUpdateOn' => '\DateTime',
		'paymentInformation' => 'string',
		'plannedPurgeDate' => '\DateTime',
		'processingOn' => '\DateTime',
		'processorReference' => 'string',
		'remainingLineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'spaceViewId' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionState',
		'succeededOn' => '\DateTime',
		'taxAmount' => 'float',
		'timeZone' => 'string',
		'timeoutOn' => '\DateTime',
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
	 * The amount which is captured. The amount represents sum of line items including taxes.
	 *
	 * @var float
	 */
	private $amount;

	/**
	 * The base line items on which the completion is applied on.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	private $baseLineItems;

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
	 * The external ID helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $failedOn;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\FailureReason
	 */
	private $failureReason;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Label[]
	 */
	private $labels;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * Indicates if this is the last completion. After the last completion is created the transaction cannot be completed anymore.
	 *
	 * @var bool
	 */
	private $lastCompletion;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion
	 */
	private $lineItemVersion;

	/**
	 * The line items which are captured.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	private $lineItems;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionCompletionMode
	 */
	private $mode;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $nextUpdateOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $paymentInformation;

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
	 * 
	 *
	 * @var string
	 */
	private $processorReference;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	private $remainingLineItems;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\TransactionCompletionState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $succeededOn;

	/**
	 * The total sum of all taxes of line items.
	 *
	 * @var float
	 */
	private $taxAmount;

	/**
	 * 
	 *
	 * @var string
	 */
	private $timeZone;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $timeoutOn;

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

		if (isset($data['baseLineItems'])) {
			$this->setBaseLineItems($data['baseLineItems']);
		}
		if (isset($data['failureReason'])) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['labels'])) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['lineItemVersion'])) {
			$this->setLineItemVersion($data['lineItemVersion']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['mode'])) {
			$this->setMode($data['mode']);
		}
		if (isset($data['remainingLineItems'])) {
			$this->setRemainingLineItems($data['remainingLineItems']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
	}


	/**
	 * Returns amount.
	 *
	 * The amount which is captured. The amount represents sum of line items including taxes.
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
	 * @return TransactionCompletion
	 */
	protected function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns baseLineItems.
	 *
	 * The base line items on which the completion is applied on.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	public function getBaseLineItems() {
		return $this->baseLineItems;
	}

	/**
	 * Sets baseLineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItem[] $baseLineItems
	 * @return TransactionCompletion
	 */
	public function setBaseLineItems($baseLineItems) {
		$this->baseLineItems = $baseLineItems;

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
	 * @return TransactionCompletion
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
	 * @return TransactionCompletion
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external ID helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
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
	 * @return TransactionCompletion
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

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
	 * @return TransactionCompletion
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failureReason.
	 *
	 * 
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
	 * @return TransactionCompletion
	 */
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;

		return $this;
	}

	/**
	 * Returns labels.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Label[]
	 */
	public function getLabels() {
		return $this->labels;
	}

	/**
	 * Sets labels.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Label[] $labels
	 * @return TransactionCompletion
	 */
	public function setLabels($labels) {
		$this->labels = $labels;

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
	 * @return TransactionCompletion
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lastCompletion.
	 *
	 * Indicates if this is the last completion. After the last completion is created the transaction cannot be completed anymore.
	 *
	 * @return bool
	 */
	public function getLastCompletion() {
		return $this->lastCompletion;
	}

	/**
	 * Sets lastCompletion.
	 *
	 * @param bool $lastCompletion
	 * @return TransactionCompletion
	 */
	protected function setLastCompletion($lastCompletion) {
		$this->lastCompletion = $lastCompletion;

		return $this;
	}

	/**
	 * Returns lineItemVersion.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion
	 */
	public function getLineItemVersion() {
		return $this->lineItemVersion;
	}

	/**
	 * Sets lineItemVersion.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionLineItemVersion $lineItemVersion
	 * @return TransactionCompletion
	 */
	public function setLineItemVersion($lineItemVersion) {
		$this->lineItemVersion = $lineItemVersion;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * The line items which are captured.
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
	 * @return TransactionCompletion
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns mode.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletionMode
	 */
	public function getMode() {
		return $this->mode;
	}

	/**
	 * Sets mode.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletionMode $mode
	 * @return TransactionCompletion
	 */
	public function setMode($mode) {
		$this->mode = $mode;

		return $this;
	}

	/**
	 * Returns nextUpdateOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getNextUpdateOn() {
		return $this->nextUpdateOn;
	}

	/**
	 * Sets nextUpdateOn.
	 *
	 * @param \DateTime $nextUpdateOn
	 * @return TransactionCompletion
	 */
	protected function setNextUpdateOn($nextUpdateOn) {
		$this->nextUpdateOn = $nextUpdateOn;

		return $this;
	}

	/**
	 * Returns paymentInformation.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPaymentInformation() {
		return $this->paymentInformation;
	}

	/**
	 * Sets paymentInformation.
	 *
	 * @param string $paymentInformation
	 * @return TransactionCompletion
	 */
	protected function setPaymentInformation($paymentInformation) {
		$this->paymentInformation = $paymentInformation;

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
	 * @return TransactionCompletion
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
	 * @return TransactionCompletion
	 */
	protected function setProcessingOn($processingOn) {
		$this->processingOn = $processingOn;

		return $this;
	}

	/**
	 * Returns processorReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getProcessorReference() {
		return $this->processorReference;
	}

	/**
	 * Sets processorReference.
	 *
	 * @param string $processorReference
	 * @return TransactionCompletion
	 */
	protected function setProcessorReference($processorReference) {
		$this->processorReference = $processorReference;

		return $this;
	}

	/**
	 * Returns remainingLineItems.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	public function getRemainingLineItems() {
		return $this->remainingLineItems;
	}

	/**
	 * Sets remainingLineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItem[] $remainingLineItems
	 * @return TransactionCompletion
	 */
	public function setRemainingLineItems($remainingLineItems) {
		$this->remainingLineItems = $remainingLineItems;

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
	 * @return TransactionCompletion
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
	 * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletionState $state
	 * @return TransactionCompletion
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns succeededOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getSucceededOn() {
		return $this->succeededOn;
	}

	/**
	 * Sets succeededOn.
	 *
	 * @param \DateTime $succeededOn
	 * @return TransactionCompletion
	 */
	protected function setSucceededOn($succeededOn) {
		$this->succeededOn = $succeededOn;

		return $this;
	}

	/**
	 * Returns taxAmount.
	 *
	 * The total sum of all taxes of line items.
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
	 * @return TransactionCompletion
	 */
	protected function setTaxAmount($taxAmount) {
		$this->taxAmount = $taxAmount;

		return $this;
	}

	/**
	 * Returns timeZone.
	 *
	 * 
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
	 * @return TransactionCompletion
	 */
	protected function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

		return $this;
	}

	/**
	 * Returns timeoutOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getTimeoutOn() {
		return $this->timeoutOn;
	}

	/**
	 * Sets timeoutOn.
	 *
	 * @param \DateTime $timeoutOn
	 * @return TransactionCompletion
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

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
	 * @return TransactionCompletion
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

