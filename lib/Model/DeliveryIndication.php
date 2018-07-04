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
 * DeliveryIndication model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DeliveryIndication extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'DeliveryIndication';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'automaticDecisionReason' => '\PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason',
		'automaticallyDecidedOn' => '\DateTime',
		'createdOn' => '\DateTime',
		'manualDecisionTimeoutOn' => '\DateTime',
		'manuallyDecidedBy' => 'int',
		'manuallyDecidedOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'state' => '\PostFinanceCheckout\Sdk\Model\DeliveryIndicationState',
		'timeoutOn' => '\DateTime',
		'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction'	);

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
	 * @var \PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason
	 */
	private $automaticDecisionReason;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $automaticallyDecidedOn;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $manualDecisionTimeoutOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $manuallyDecidedBy;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $manuallyDecidedOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\DeliveryIndicationState
	 */
	private $state;

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
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['automaticDecisionReason'])) {
			$this->setAutomaticDecisionReason($data['automaticDecisionReason']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['transaction'])) {
			$this->setTransaction($data['transaction']);
		}
	}


	/**
	 * Returns automaticDecisionReason.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason
	 */
	public function getAutomaticDecisionReason() {
		return $this->automaticDecisionReason;
	}

	/**
	 * Sets automaticDecisionReason.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DeliveryIndicationDecisionReason $automaticDecisionReason
	 * @return DeliveryIndication
	 */
	public function setAutomaticDecisionReason($automaticDecisionReason) {
		$this->automaticDecisionReason = $automaticDecisionReason;

		return $this;
	}

	/**
	 * Returns automaticallyDecidedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getAutomaticallyDecidedOn() {
		return $this->automaticallyDecidedOn;
	}

	/**
	 * Sets automaticallyDecidedOn.
	 *
	 * @param \DateTime $automaticallyDecidedOn
	 * @return DeliveryIndication
	 */
	protected function setAutomaticallyDecidedOn($automaticallyDecidedOn) {
		$this->automaticallyDecidedOn = $automaticallyDecidedOn;

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
	 * @return DeliveryIndication
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns manualDecisionTimeoutOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getManualDecisionTimeoutOn() {
		return $this->manualDecisionTimeoutOn;
	}

	/**
	 * Sets manualDecisionTimeoutOn.
	 *
	 * @param \DateTime $manualDecisionTimeoutOn
	 * @return DeliveryIndication
	 */
	protected function setManualDecisionTimeoutOn($manualDecisionTimeoutOn) {
		$this->manualDecisionTimeoutOn = $manualDecisionTimeoutOn;

		return $this;
	}

	/**
	 * Returns manuallyDecidedBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getManuallyDecidedBy() {
		return $this->manuallyDecidedBy;
	}

	/**
	 * Sets manuallyDecidedBy.
	 *
	 * @param int $manuallyDecidedBy
	 * @return DeliveryIndication
	 */
	protected function setManuallyDecidedBy($manuallyDecidedBy) {
		$this->manuallyDecidedBy = $manuallyDecidedBy;

		return $this;
	}

	/**
	 * Returns manuallyDecidedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getManuallyDecidedOn() {
		return $this->manuallyDecidedOn;
	}

	/**
	 * Sets manuallyDecidedOn.
	 *
	 * @param \DateTime $manuallyDecidedOn
	 * @return DeliveryIndication
	 */
	protected function setManuallyDecidedOn($manuallyDecidedOn) {
		$this->manuallyDecidedOn = $manuallyDecidedOn;

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
	 * @return DeliveryIndication
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DeliveryIndicationState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DeliveryIndicationState $state
	 * @return DeliveryIndication
	 */
	public function setState($state) {
		$this->state = $state;

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
	 * @return DeliveryIndication
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
	 * @return DeliveryIndication
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

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

