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
 * HumanUser model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class HumanUser  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'HumanUser';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'emailAddress' => 'string',
		'emailAddressVerified' => 'bool',
		'firstname' => 'string',
		'language' => 'string',
		'lastname' => 'string',
		'primaryAccount' => '\PostFinanceCheckout\Sdk\Model\Account',
		'scope' => '\PostFinanceCheckout\Sdk\Model\Scope',
		'timeZone' => 'string'	);

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
	 * Defines whether a user is verified or not.
	 *
	 * @var bool
	 */
	private $emailAddressVerified;

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
	 * The primary account links the user to a specific account.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Account
	 */
	private $primaryAccount;

	/**
	 * The scope to which the user belongs to.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Scope
	 */
	private $scope;

	/**
	 * The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
	 *
	 * @var string
	 */
	private $timeZone;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['primaryAccount'])) {
			$this->setPrimaryAccount($data['primaryAccount']);
		}
		if (isset($data['scope'])) {
			$this->setScope($data['scope']);
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
	 * @return HumanUser
	 */
	protected function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns emailAddressVerified.
	 *
	 * Defines whether a user is verified or not.
	 *
	 * @return bool
	 */
	public function getEmailAddressVerified() {
		return $this->emailAddressVerified;
	}

	/**
	 * Sets emailAddressVerified.
	 *
	 * @param bool $emailAddressVerified
	 * @return HumanUser
	 */
	protected function setEmailAddressVerified($emailAddressVerified) {
		$this->emailAddressVerified = $emailAddressVerified;

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
	 * @return HumanUser
	 */
	protected function setFirstname($firstname) {
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
	 * @return HumanUser
	 */
	protected function setLanguage($language) {
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
	 * @return HumanUser
	 */
	protected function setLastname($lastname) {
		$this->lastname = $lastname;

		return $this;
	}

	/**
	 * Returns primaryAccount.
	 *
	 * The primary account links the user to a specific account.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Account
	 */
	public function getPrimaryAccount() {
		return $this->primaryAccount;
	}

	/**
	 * Sets primaryAccount.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Account $primaryAccount
	 * @return HumanUser
	 */
	public function setPrimaryAccount($primaryAccount) {
		$this->primaryAccount = $primaryAccount;

		return $this;
	}

	/**
	 * Returns scope.
	 *
	 * The scope to which the user belongs to.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Scope
	 */
	public function getScope() {
		return $this->scope;
	}

	/**
	 * Sets scope.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Scope $scope
	 * @return HumanUser
	 */
	public function setScope($scope) {
		$this->scope = $scope;

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
	 * @return HumanUser
	 */
	protected function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

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

