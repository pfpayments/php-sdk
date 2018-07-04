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
 * WebhookListenerCreate model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class WebhookListenerCreate extends AbstractWebhookListenerUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'WebhookListener.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'entity' => 'int',
		'entityStates' => 'string[]',
		'identity' => 'int',
		'notifyEveryChange' => 'bool',
		'url' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
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
	 * The identity which will be used to sign messages sent by this listener.
	 *
	 * @var int
	 */
	private $identity;

	/**
	 * Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
	 *
	 * @var bool
	 */
	private $notifyEveryChange;

	/**
	 * The URL which is invoked by the listener to notify the application about the event.
	 *
	 * @var int
	 */
	private $url;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['entity'])) {
			$this->setEntity($data['entity']);
		}
		if (isset($data['entityStates'])) {
			$this->setEntityStates($data['entityStates']);
		}
		if (isset($data['identity'])) {
			$this->setIdentity($data['identity']);
		}
		if (isset($data['notifyEveryChange'])) {
			$this->setNotifyEveryChange($data['notifyEveryChange']);
		}
		if (isset($data['url'])) {
			$this->setUrl($data['url']);
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
	 * @return WebhookListenerCreate
	 */
	public function setEntity($entity) {
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
	 * @return WebhookListenerCreate
	 */
	public function setEntityStates($entityStates) {
		$this->entityStates = $entityStates;

		return $this;
	}

	/**
	 * Returns identity.
	 *
	 * The identity which will be used to sign messages sent by this listener.
	 *
	 * @return int
	 */
	public function getIdentity() {
		return $this->identity;
	}

	/**
	 * Sets identity.
	 *
	 * @param int $identity
	 * @return WebhookListenerCreate
	 */
	public function setIdentity($identity) {
		$this->identity = $identity;

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
	 * @return WebhookListenerCreate
	 */
	public function setNotifyEveryChange($notifyEveryChange) {
		$this->notifyEveryChange = $notifyEveryChange;

		return $this;
	}

	/**
	 * Returns url.
	 *
	 * The URL which is invoked by the listener to notify the application about the event.
	 *
	 * @return int
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets url.
	 *
	 * @param int $url
	 * @return WebhookListenerCreate
	 */
	public function setUrl($url) {
		$this->url = $url;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getEntity() === null) {
			throw new ValidationException("'entity' can't be null", 'entity', $this);
		}
		if ($this->getEntityStates() === null) {
			throw new ValidationException("'entityStates' can't be null", 'entityStates', $this);
		}
		if ($this->getUrl() === null) {
			throw new ValidationException("'url' can't be null", 'url', $this);
		}
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

