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
 * AbstractHumanUserUpdate model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractHumanUserUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.HumanUser.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'emailAddress' => 'string',
		'firstname' => 'string',
		'language' => 'string',
		'lastname' => 'string',
		'mobilePhoneNumber' => 'string',
		'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
		'timeZone' => 'string',
		'twoFactorEnabled' => 'bool'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The email address of the user.
	 *
	 * @var string
	 */
	private $emailAddress;

	/**
	 * The first name of the user.
	 *
	 * @var string
	 */
	private $firstname;

	/**
	 * The preferred language of the user.
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The last name of the user.
	 *
	 * @var string
	 */
	private $lastname;

	/**
	 * 
	 *
	 * @var string
	 */
	private $mobilePhoneNumber;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
	 *
	 * @var string
	 */
	private $timeZone;

	/**
	 * Defines whether two-factor authentication is enabled for this user.
	 *
	 * @var bool
	 */
	private $twoFactorEnabled;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['emailAddress'])) {
			$this->setEmailAddress($data['emailAddress']);
		}
		if (isset($data['firstname'])) {
			$this->setFirstname($data['firstname']);
		}
		if (isset($data['language'])) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['lastname'])) {
			$this->setLastname($data['lastname']);
		}
		if (isset($data['mobilePhoneNumber'])) {
			$this->setMobilePhoneNumber($data['mobilePhoneNumber']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['timeZone'])) {
			$this->setTimeZone($data['timeZone']);
		}
		if (isset($data['twoFactorEnabled'])) {
			$this->setTwoFactorEnabled($data['twoFactorEnabled']);
		}
	}


	/**
	 * Returns emailAddress.
	 *
	 * The email address of the user.
	 *
	 * @return string
	 */
	public function getEmailAddress() {
		return $this->emailAddress;
	}

	/**
	 * Sets emailAddress.
	 *
	 * @param string $emailAddress
	 * @return AbstractHumanUserUpdate
	 */
	public function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns firstname.
	 *
	 * The first name of the user.
	 *
	 * @return string
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets firstname.
	 *
	 * @param string $firstname
	 * @return AbstractHumanUserUpdate
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The preferred language of the user.
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
	 * @return AbstractHumanUserUpdate
	 */
	public function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lastname.
	 *
	 * The last name of the user.
	 *
	 * @return string
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets lastname.
	 *
	 * @param string $lastname
	 * @return AbstractHumanUserUpdate
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;

		return $this;
	}

	/**
	 * Returns mobilePhoneNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMobilePhoneNumber() {
		return $this->mobilePhoneNumber;
	}

	/**
	 * Sets mobilePhoneNumber.
	 *
	 * @param string $mobilePhoneNumber
	 * @return AbstractHumanUserUpdate
	 */
	public function setMobilePhoneNumber($mobilePhoneNumber) {
		$this->mobilePhoneNumber = $mobilePhoneNumber;

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
	 * @return AbstractHumanUserUpdate
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
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
	 * @return AbstractHumanUserUpdate
	 */
	public function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

		return $this;
	}

	/**
	 * Returns twoFactorEnabled.
	 *
	 * Defines whether two-factor authentication is enabled for this user.
	 *
	 * @return bool
	 */
	public function getTwoFactorEnabled() {
		return $this->twoFactorEnabled;
	}

	/**
	 * Sets twoFactorEnabled.
	 *
	 * @param bool $twoFactorEnabled
	 * @return AbstractHumanUserUpdate
	 */
	public function setTwoFactorEnabled($twoFactorEnabled) {
		$this->twoFactorEnabled = $twoFactorEnabled;

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

