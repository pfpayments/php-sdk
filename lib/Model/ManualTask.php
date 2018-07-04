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
 * ManualTask model
 *
 * @category    Class
 * @description A manual task requires a manual intervention by a human.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ManualTask  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ManualTask';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'actions' => 'int[]',
		'contextEntityId' => 'int',
		'createdOn' => '\DateTime',
		'expiresOn' => '\DateTime',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'plannedPurgeDate' => '\DateTime',
		'spaceId' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\ManualTaskState',
		'type' => 'int'	);

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
	 * @var int[]
	 */
	private $actions;

	/**
	 * The context entity ID links the manual task to the entity which caused its creation.
	 *
	 * @var int
	 */
	private $contextEntityId;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The expiry date indicates until when the manual task has to be executed.
	 *
	 * @var \DateTime
	 */
	private $expiresOn;

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
	private $spaceId;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\ManualTaskState
	 */
	private $state;

	/**
	 * The type categorizes the manual task.
	 *
	 * @var int
	 */
	private $type;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['actions'])) {
			$this->setActions($data['actions']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
	}


	/**
	 * Returns actions.
	 *
	 * 
	 *
	 * @return int[]
	 */
	public function getActions() {
		return $this->actions;
	}

	/**
	 * Sets actions.
	 *
	 * @param int[] $actions
	 * @return ManualTask
	 */
	public function setActions($actions) {
		$this->actions = $actions;

		return $this;
	}

	/**
	 * Returns contextEntityId.
	 *
	 * The context entity ID links the manual task to the entity which caused its creation.
	 *
	 * @return int
	 */
	public function getContextEntityId() {
		return $this->contextEntityId;
	}

	/**
	 * Sets contextEntityId.
	 *
	 * @param int $contextEntityId
	 * @return ManualTask
	 */
	protected function setContextEntityId($contextEntityId) {
		$this->contextEntityId = $contextEntityId;

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
	 * @return ManualTask
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns expiresOn.
	 *
	 * The expiry date indicates until when the manual task has to be executed.
	 *
	 * @return \DateTime
	 */
	public function getExpiresOn() {
		return $this->expiresOn;
	}

	/**
	 * Sets expiresOn.
	 *
	 * @param \DateTime $expiresOn
	 * @return ManualTask
	 */
	protected function setExpiresOn($expiresOn) {
		$this->expiresOn = $expiresOn;

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
	 * @return ManualTask
	 */
	protected function setId($id) {
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
	 * @return ManualTask
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

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
	 * @return ManualTask
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns spaceId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSpaceId() {
		return $this->spaceId;
	}

	/**
	 * Sets spaceId.
	 *
	 * @param int $spaceId
	 * @return ManualTask
	 */
	protected function setSpaceId($spaceId) {
		$this->spaceId = $spaceId;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\ManualTaskState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\ManualTaskState $state
	 * @return ManualTask
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * The type categorizes the manual task.
	 *
	 * @return int
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param int $type
	 * @return ManualTask
	 */
	protected function setType($type) {
		$this->type = $type;

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

