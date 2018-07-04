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
 * PaymentConnectorConfiguration model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentConnectorConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentConnectorConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'applicableForTransactionProcessing' => 'bool',
		'conditions' => 'int[]',
		'connector' => 'int',
		'enabledSpaceViews' => 'int[]',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'paymentMethodConfiguration' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration',
		'plannedPurgeDate' => '\DateTime',
		'priority' => 'int',
		'processorConfiguration' => '\PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration',
		'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
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
	 * This property indicates if the connector is currently used for processing transactions. In case either the payment method configuration or the processor configuration is not active the connector will not be used even though the connector state is active.
	 *
	 * @var bool
	 */
	private $applicableForTransactionProcessing;

	/**
	 * If a transaction meet all selected conditions the connector configuration will be used to process the transaction otherwise the next connector configuration in line will be chosen according to the priorities.
	 *
	 * @var int[]
	 */
	private $conditions;

	/**
	 * 
	 *
	 * @var int
	 */
	private $connector;

	/**
	 * The connector configuration is only enabled for the selected space views. In case the set is empty the connector configuration is enabled for all space views.
	 *
	 * @var int[]
	 */
	private $enabledSpaceViews;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The connector configuration name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration
	 */
	private $paymentMethodConfiguration;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The priority will define the order of choice of the connector configurations. The lower the value, the higher the priority is going to be. This value can also be a negative number in case you are adding a new configuration that you want to have a high priority and you dont want to change the priority of all the other configurations.
	 *
	 * @var int
	 */
	private $priority;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration
	 */
	private $processorConfiguration;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	private $state;

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
		if (isset($data['conditions'])) {
			$this->setConditions($data['conditions']);
		}
		if (isset($data['enabledSpaceViews'])) {
			$this->setEnabledSpaceViews($data['enabledSpaceViews']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['paymentMethodConfiguration'])) {
			$this->setPaymentMethodConfiguration($data['paymentMethodConfiguration']);
		}
		if (isset($data['processorConfiguration'])) {
			$this->setProcessorConfiguration($data['processorConfiguration']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns applicableForTransactionProcessing.
	 *
	 * This property indicates if the connector is currently used for processing transactions. In case either the payment method configuration or the processor configuration is not active the connector will not be used even though the connector state is active.
	 *
	 * @return bool
	 */
	public function getApplicableForTransactionProcessing() {
		return $this->applicableForTransactionProcessing;
	}

	/**
	 * Sets applicableForTransactionProcessing.
	 *
	 * @param bool $applicableForTransactionProcessing
	 * @return PaymentConnectorConfiguration
	 */
	protected function setApplicableForTransactionProcessing($applicableForTransactionProcessing) {
		$this->applicableForTransactionProcessing = $applicableForTransactionProcessing;

		return $this;
	}

	/**
	 * Returns conditions.
	 *
	 * If a transaction meet all selected conditions the connector configuration will be used to process the transaction otherwise the next connector configuration in line will be chosen according to the priorities.
	 *
	 * @return int[]
	 */
	public function getConditions() {
		return $this->conditions;
	}

	/**
	 * Sets conditions.
	 *
	 * @param int[] $conditions
	 * @return PaymentConnectorConfiguration
	 */
	public function setConditions($conditions) {
		$this->conditions = $conditions;

		return $this;
	}

	/**
	 * Returns connector.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getConnector() {
		return $this->connector;
	}

	/**
	 * Sets connector.
	 *
	 * @param int $connector
	 * @return PaymentConnectorConfiguration
	 */
	protected function setConnector($connector) {
		$this->connector = $connector;

		return $this;
	}

	/**
	 * Returns enabledSpaceViews.
	 *
	 * The connector configuration is only enabled for the selected space views. In case the set is empty the connector configuration is enabled for all space views.
	 *
	 * @return int[]
	 */
	public function getEnabledSpaceViews() {
		return $this->enabledSpaceViews;
	}

	/**
	 * Sets enabledSpaceViews.
	 *
	 * @param int[] $enabledSpaceViews
	 * @return PaymentConnectorConfiguration
	 */
	public function setEnabledSpaceViews($enabledSpaceViews) {
		$this->enabledSpaceViews = $enabledSpaceViews;

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
	 * @return PaymentConnectorConfiguration
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return PaymentConnectorConfiguration
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The connector configuration name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param string $name
	 * @return PaymentConnectorConfiguration
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns paymentMethodConfiguration.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration
	 */
	public function getPaymentMethodConfiguration() {
		return $this->paymentMethodConfiguration;
	}

	/**
	 * Sets paymentMethodConfiguration.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration $paymentMethodConfiguration
	 * @return PaymentConnectorConfiguration
	 */
	public function setPaymentMethodConfiguration($paymentMethodConfiguration) {
		$this->paymentMethodConfiguration = $paymentMethodConfiguration;

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
	 * @return PaymentConnectorConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns priority.
	 *
	 * The priority will define the order of choice of the connector configurations. The lower the value, the higher the priority is going to be. This value can also be a negative number in case you are adding a new configuration that you want to have a high priority and you dont want to change the priority of all the other configurations.
	 *
	 * @return int
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * Sets priority.
	 *
	 * @param int $priority
	 * @return PaymentConnectorConfiguration
	 */
	protected function setPriority($priority) {
		$this->priority = $priority;

		return $this;
	}

	/**
	 * Returns processorConfiguration.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration
	 */
	public function getProcessorConfiguration() {
		return $this->processorConfiguration;
	}

	/**
	 * Sets processorConfiguration.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\PaymentProcessorConfiguration $processorConfiguration
	 * @return PaymentConnectorConfiguration
	 */
	public function setProcessorConfiguration($processorConfiguration) {
		$this->processorConfiguration = $processorConfiguration;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState $state
	 * @return PaymentConnectorConfiguration
	 */
	public function setState($state) {
		$this->state = $state;

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
	 * @return PaymentConnectorConfiguration
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

