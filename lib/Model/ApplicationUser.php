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
 * ApplicationUser model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ApplicationUser extends User  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ApplicationUser';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'name' => 'string',
		'primaryAccount' => '\PostFinanceCheckout\Sdk\Model\Account',
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	

	/**
	 * The user name is used to identify the application user in administrative interfaces.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The account that this user is associated with. The account owner will be able to manage this user.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Account
	 */
	private $primaryAccount;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['primaryAccount'])) {
			$this->setPrimaryAccount($data['primaryAccount']);
		}
		if (isset($data['scope'])) {
			$this->setScope($data['scope']);
		}
	}


	/**
	 * Returns name.
	 *
	 * The user name is used to identify the application user in administrative interfaces.
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
	 * @return ApplicationUser
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns primaryAccount.
	 *
	 * The account that this user is associated with. The account owner will be able to manage this user.
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
	 * @return ApplicationUser
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
		return parent::getScope();
	}

	/**
	 * Sets scope.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Scope $scope
	 * @return ApplicationUser
	 */
	public function setScope($scope) {
		return parent::setScope($scope);
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

