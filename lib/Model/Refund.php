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
 * Refund model
 *
 * @category    Class
 * @description The refund represents a credit back to the customer. It can be issued by the merchant or by the customer (reversal).
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Refund  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Refund';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'baseLineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'completion' => 'int',
		'createdBy' => 'int',
		'createdOn' => '\DateTime',
		'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
		'externalId' => 'string',
		'failedOn' => '\DateTime',
		'failureReason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
		'id' => 'int',
		'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
		'language' => 'string',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'linkedSpaceId' => 'int',
		'merchantReference' => 'string',
		'nextUpdateOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'processingOn' => '\DateTime',
		'processorReference' => 'string',
		'reducedLineItems' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
		'reductions' => '\PostFinanceCheckout\Sdk\Model\LineItemReduction[]',
		'state' => '\PostFinanceCheckout\Sdk\Model\RefundState',
		'succeededOn' => '\DateTime',
		'taxes' => '\PostFinanceCheckout\Sdk\Model\Tax[]',
		'timeZone' => 'string',
		'timeoutOn' => '\DateTime',
		'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction',
		'type' => '\PostFinanceCheckout\Sdk\Model\RefundType',
		'updatedInvoice' => 'int',
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
	 * @var float
	 */
	private $amount;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	private $baseLineItems;

	/**
	 * 
	 *
	 * @var int
	 */
	private $completion;

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
	 * @var \PostFinanceCheckout\Sdk\Model\Environment
	 */
	private $environment;

	/**
	 * The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
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
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

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
	 * 
	 *
	 * @var \DateTime
	 */
	private $nextUpdateOn;

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
	private $reducedLineItems;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItemReduction[]
	 */
	private $reductions;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\RefundState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $succeededOn;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Tax[]
	 */
	private $taxes;

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
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Transaction
	 */
	private $transaction;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\RefundType
	 */
	private $type;

	/**
	 * 
	 *
	 * @var int
	 */
	private $updatedInvoice;

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
		if (isset($data['baseLineItems'])) {
			$this->setBaseLineItems($data['baseLineItems']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['failureReason'])) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['labels'])) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['reducedLineItems'])) {
			$this->setReducedLineItems($data['reducedLineItems']);
		}
		if (isset($data['reductions'])) {
			$this->setReductions($data['reductions']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['taxes'])) {
			$this->setTaxes($data['taxes']);
		}
		if (isset($data['transaction'])) {
			$this->setTransaction($data['transaction']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
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
	 * @return Refund
	 */
	protected function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns baseLineItems.
	 *
	 * 
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
	 * @return Refund
	 */
	public function setBaseLineItems($baseLineItems) {
		$this->baseLineItems = $baseLineItems;

		return $this;
	}

	/**
	 * Returns completion.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getCompletion() {
		return $this->completion;
	}

	/**
	 * Sets completion.
	 *
	 * @param int $completion
	 * @return Refund
	 */
	protected function setCompletion($completion) {
		$this->completion = $completion;

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
	 * @return Refund
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
	 * @return Refund
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

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
	 * @return Refund
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
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
	 * @return Refund
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
	 * @return Refund
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
	 * @return Refund
	 */
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;

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
	 * @return Refund
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return Refund
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
	 * @return Refund
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
	 * @return Refund
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
	 * @return Refund
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
	 * @return Refund
	 */
	protected function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

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
	 * @return Refund
	 */
	protected function setNextUpdateOn($nextUpdateOn) {
		$this->nextUpdateOn = $nextUpdateOn;

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
	 * @return Refund
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
	 * @return Refund
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
	 * @return Refund
	 */
	protected function setProcessorReference($processorReference) {
		$this->processorReference = $processorReference;

		return $this;
	}

	/**
	 * Returns reducedLineItems.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItem[]
	 */
	public function getReducedLineItems() {
		return $this->reducedLineItems;
	}

	/**
	 * Sets reducedLineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItem[] $reducedLineItems
	 * @return Refund
	 */
	public function setReducedLineItems($reducedLineItems) {
		$this->reducedLineItems = $reducedLineItems;

		return $this;
	}

	/**
	 * Returns reductions.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItemReduction[]
	 */
	public function getReductions() {
		return $this->reductions;
	}

	/**
	 * Sets reductions.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItemReduction[] $reductions
	 * @return Refund
	 */
	public function setReductions($reductions) {
		$this->reductions = $reductions;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\RefundState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\RefundState $state
	 * @return Refund
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
	 * @return Refund
	 */
	protected function setSucceededOn($succeededOn) {
		$this->succeededOn = $succeededOn;

		return $this;
	}

	/**
	 * Returns taxes.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Tax[]
	 */
	public function getTaxes() {
		return $this->taxes;
	}

	/**
	 * Sets taxes.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Tax[] $taxes
	 * @return Refund
	 */
	public function setTaxes($taxes) {
		$this->taxes = $taxes;

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
	 * @return Refund
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
	 * @return Refund
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Transaction
	 */
	public function getTransaction() {
		return $this->transaction;
	}

	/**
	 * Sets transaction.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Transaction $transaction
	 * @return Refund
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\RefundType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\RefundType $type
	 * @return Refund
	 */
	public function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Returns updatedInvoice.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getUpdatedInvoice() {
		return $this->updatedInvoice;
	}

	/**
	 * Sets updatedInvoice.
	 *
	 * @param int $updatedInvoice
	 * @return Refund
	 */
	protected function setUpdatedInvoice($updatedInvoice) {
		$this->updatedInvoice = $updatedInvoice;

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
	 * @return Refund
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

