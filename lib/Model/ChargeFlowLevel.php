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
 * ChargeFlowLevel model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ChargeFlowLevel extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ChargeFlowLevel';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'asynchronousCharge' => 'int',
		'configuration' => '\PostFinanceCheckout\Sdk\Model\ChargeFlowLevelConfiguration',
		'createdOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'state' => '\PostFinanceCheckout\Sdk\Model\ChargeFlowLevelState',
		'synchronousCharge' => 'int',
		'timeoutOn' => '\DateTime',
		'tokenCharge' => 'int',
		'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction',
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
	 * @var int
	 */
	private $asynchronousCharge;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\ChargeFlowLevelConfiguration
	 */
	private $configuration;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\ChargeFlowLevelState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var int
	 */
	private $synchronousCharge;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $timeoutOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $tokenCharge;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Transaction
	 */
	private $transaction;

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

		if (isset($data['configuration'])) {
			$this->setConfiguration($data['configuration']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['transaction'])) {
			$this->setTransaction($data['transaction']);
		}
	}


	/**
	 * Returns asynchronousCharge.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getAsynchronousCharge() {
		return $this->asynchronousCharge;
	}

	/**
	 * Sets asynchronousCharge.
	 *
	 * @param int $asynchronousCharge
	 * @return ChargeFlowLevel
	 */
	protected function setAsynchronousCharge($asynchronousCharge) {
		$this->asynchronousCharge = $asynchronousCharge;

		return $this;
	}

	/**
	 * Returns configuration.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\ChargeFlowLevelConfiguration
	 */
	public function getConfiguration() {
		return $this->configuration;
	}

	/**
	 * Sets configuration.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\ChargeFlowLevelConfiguration $configuration
	 * @return ChargeFlowLevel
	 */
	public function setConfiguration($configuration) {
		$this->configuration = $configuration;

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
	 * @return ChargeFlowLevel
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

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
	 * @return ChargeFlowLevel
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
	 * @return \PostFinanceCheckout\Sdk\Model\ChargeFlowLevelState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\ChargeFlowLevelState $state
	 * @return ChargeFlowLevel
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns synchronousCharge.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSynchronousCharge() {
		return $this->synchronousCharge;
	}

	/**
	 * Sets synchronousCharge.
	 *
	 * @param int $synchronousCharge
	 * @return ChargeFlowLevel
	 */
	protected function setSynchronousCharge($synchronousCharge) {
		$this->synchronousCharge = $synchronousCharge;

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
	 * @return ChargeFlowLevel
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns tokenCharge.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTokenCharge() {
		return $this->tokenCharge;
	}

	/**
	 * Sets tokenCharge.
	 *
	 * @param int $tokenCharge
	 * @return ChargeFlowLevel
	 */
	protected function setTokenCharge($tokenCharge) {
		$this->tokenCharge = $tokenCharge;

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
	 * @return ChargeFlowLevel
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

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
	 * @return ChargeFlowLevel
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

