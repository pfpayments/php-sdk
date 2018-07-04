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
 * PaymentContract model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentContract  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentContract';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'account' => '\PostFinanceCheckout\Sdk\Model\Account',
		'activatedOn' => '\DateTime',
		'contractIdentifier' => 'string',
		'contractType' => '\PostFinanceCheckout\Sdk\Model\PaymentContractType',
		'createdBy' => '\PostFinanceCheckout\Sdk\Model\User',
		'createdOn' => '\DateTime',
		'externalId' => 'string',
		'id' => 'int',
		'rejectedOn' => '\DateTime',
		'rejectionReason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
		'startTerminatingOn' => '\DateTime',
		'state' => '\PostFinanceCheckout\Sdk\Model\PaymentContractState',
		'terminatedBy' => '\PostFinanceCheckout\Sdk\Model\User',
		'terminatedOn' => '\DateTime',
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
	 * @var \PostFinanceCheckout\Sdk\Model\Account
	 */
	private $account;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $activatedOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $contractIdentifier;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\PaymentContractType
	 */
	private $contractType;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\User
	 */
	private $createdBy;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $rejectedOn;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\FailureReason
	 */
	private $rejectionReason;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $startTerminatingOn;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\PaymentContractState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\User
	 */
	private $terminatedBy;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $terminatedOn;

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
		if (isset($data['account'])) {
			$this->setAccount($data['account']);
		}
		if (isset($data['contractType'])) {
			$this->setContractType($data['contractType']);
		}
		if (isset($data['createdBy'])) {
			$this->setCreatedBy($data['createdBy']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['rejectionReason'])) {
			$this->setRejectionReason($data['rejectionReason']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['terminatedBy'])) {
			$this->setTerminatedBy($data['terminatedBy']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns account.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Account
	 */
	public function getAccount() {
		return $this->account;
	}

	/**
	 * Sets account.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Account $account
	 * @return PaymentContract
	 */
	public function setAccount($account) {
		$this->account = $account;

		return $this;
	}

	/**
	 * Returns activatedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getActivatedOn() {
		return $this->activatedOn;
	}

	/**
	 * Sets activatedOn.
	 *
	 * @param \DateTime $activatedOn
	 * @return PaymentContract
	 */
	protected function setActivatedOn($activatedOn) {
		$this->activatedOn = $activatedOn;

		return $this;
	}

	/**
	 * Returns contractIdentifier.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getContractIdentifier() {
		return $this->contractIdentifier;
	}

	/**
	 * Sets contractIdentifier.
	 *
	 * @param string $contractIdentifier
	 * @return PaymentContract
	 */
	protected function setContractIdentifier($contractIdentifier) {
		$this->contractIdentifier = $contractIdentifier;

		return $this;
	}

	/**
	 * Returns contractType.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\PaymentContractType
	 */
	public function getContractType() {
		return $this->contractType;
	}

	/**
	 * Sets contractType.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\PaymentContractType $contractType
	 * @return PaymentContract
	 */
	public function setContractType($contractType) {
		$this->contractType = $contractType;

		return $this;
	}

	/**
	 * Returns createdBy.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\User
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Sets createdBy.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\User $createdBy
	 * @return PaymentContract
	 */
	public function setCreatedBy($createdBy) {
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
	 * @return PaymentContract
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
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
	 * @return PaymentContract
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

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
	 * @return PaymentContract
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns rejectedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getRejectedOn() {
		return $this->rejectedOn;
	}

	/**
	 * Sets rejectedOn.
	 *
	 * @param \DateTime $rejectedOn
	 * @return PaymentContract
	 */
	protected function setRejectedOn($rejectedOn) {
		$this->rejectedOn = $rejectedOn;

		return $this;
	}

	/**
	 * Returns rejectionReason.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\FailureReason
	 */
	public function getRejectionReason() {
		return $this->rejectionReason;
	}

	/**
	 * Sets rejectionReason.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\FailureReason $rejectionReason
	 * @return PaymentContract
	 */
	public function setRejectionReason($rejectionReason) {
		$this->rejectionReason = $rejectionReason;

		return $this;
	}

	/**
	 * Returns startTerminatingOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getStartTerminatingOn() {
		return $this->startTerminatingOn;
	}

	/**
	 * Sets startTerminatingOn.
	 *
	 * @param \DateTime $startTerminatingOn
	 * @return PaymentContract
	 */
	protected function setStartTerminatingOn($startTerminatingOn) {
		$this->startTerminatingOn = $startTerminatingOn;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\PaymentContractState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\PaymentContractState $state
	 * @return PaymentContract
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns terminatedBy.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\User
	 */
	public function getTerminatedBy() {
		return $this->terminatedBy;
	}

	/**
	 * Sets terminatedBy.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\User $terminatedBy
	 * @return PaymentContract
	 */
	public function setTerminatedBy($terminatedBy) {
		$this->terminatedBy = $terminatedBy;

		return $this;
	}

	/**
	 * Returns terminatedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getTerminatedOn() {
		return $this->terminatedOn;
	}

	/**
	 * Sets terminatedOn.
	 *
	 * @param \DateTime $terminatedOn
	 * @return PaymentContract
	 */
	protected function setTerminatedOn($terminatedOn) {
		$this->terminatedOn = $terminatedOn;

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
	 * @return PaymentContract
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

