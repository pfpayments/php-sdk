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
 * WebhookListener model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class WebhookListener  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'WebhookListener';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'entity' => 'int',
		'entityStates' => 'string[]',
		'id' => 'int',
		'identity' => '\PostFinanceCheckout\Sdk\Model\WebhookIdentity',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'notifyEveryChange' => 'bool',
		'plannedPurgeDate' => '\DateTime',
		'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
		'url' => '\PostFinanceCheckout\Sdk\Model\WebhookUrl',
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
	 * The listener listens on state changes of the entity linked with the listener.
	 *
	 * @var int
	 */
	private $entity;

	/**
	 * The target state identifies the state into which entities need to move into to trigger the webhook listener.
	 *
	 * @var string[]
	 */
	private $entityStates;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The identity which will be used to sign messages sent by this listener.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\WebhookIdentity
	 */
	private $identity;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The webhook listener name is used internally to identify the webhook listener in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
	 *
	 * @var bool
	 */
	private $notifyEveryChange;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The URL which is invoked by the listener to notify the application about the event.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\WebhookUrl
	 */
	private $url;

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
		if (isset($data['entityStates'])) {
			$this->setEntityStates($data['entityStates']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['identity'])) {
			$this->setIdentity($data['identity']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['url'])) {
			$this->setUrl($data['url']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns entity.
	 *
	 * The listener listens on state changes of the entity linked with the listener.
	 *
	 * @return int
	 */
	public function getEntity() {
		return $this->entity;
	}

	/**
	 * Sets entity.
	 *
	 * @param int $entity
	 * @return WebhookListener
	 */
	protected function setEntity($entity) {
		$this->entity = $entity;

		return $this;
	}

	/**
	 * Returns entityStates.
	 *
	 * The target state identifies the state into which entities need to move into to trigger the webhook listener.
	 *
	 * @return string[]
	 */
	public function getEntityStates() {
		return $this->entityStates;
	}

	/**
	 * Sets entityStates.
	 *
	 * @param string[] $entityStates
	 * @return WebhookListener
	 */
	public function setEntityStates($entityStates) {
		$this->entityStates = $entityStates;

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
	 * @return WebhookListener
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns identity.
	 *
	 * The identity which will be used to sign messages sent by this listener.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\WebhookIdentity
	 */
	public function getIdentity() {
		return $this->identity;
	}

	/**
	 * Sets identity.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\WebhookIdentity $identity
	 * @return WebhookListener
	 */
	public function setIdentity($identity) {
		$this->identity = $identity;

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
	 * @return WebhookListener
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The webhook listener name is used internally to identify the webhook listener in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return WebhookListener
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns notifyEveryChange.
	 *
	 * Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
	 *
	 * @return bool
	 */
	public function getNotifyEveryChange() {
		return $this->notifyEveryChange;
	}

	/**
	 * Sets notifyEveryChange.
	 *
	 * @param bool $notifyEveryChange
	 * @return WebhookListener
	 */
	protected function setNotifyEveryChange($notifyEveryChange) {
		$this->notifyEveryChange = $notifyEveryChange;

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
	 * @return WebhookListener
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
	 * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState $state
	 * @return WebhookListener
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns url.
	 *
	 * The URL which is invoked by the listener to notify the application about the event.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\WebhookUrl
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets url.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\WebhookUrl $url
	 * @return WebhookListener
	 */
	public function setUrl($url) {
		$this->url = $url;

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
	 * @return WebhookListener
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

