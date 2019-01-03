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
 * AccountCreate model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AccountCreate extends AbstractAccountUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Account.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'parentAccount' => 'int',
		'scope' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	

	/**
	 * The account which is responsible for administering the account.
	 *
	 * @var int
	 */
	private $parentAccount;

	/**
	 * This is the scope to which the account belongs to.
	 *
	 * @var int
	 */
	private $scope;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['parentAccount'])) {
			$this->setParentAccount($data['parentAccount']);
		}
		if (isset($data['scope'])) {
			$this->setScope($data['scope']);
		}
	}


	/**
	 * Returns parentAccount.
	 *
	 * The account which is responsible for administering the account.
	 *
	 * @return int
	 */
	public function getParentAccount() {
		return $this->parentAccount;
	}

	/**
	 * Sets parentAccount.
	 *
	 * @param int $parentAccount
	 * @return AccountCreate
	 */
	public function setParentAccount($parentAccount) {
		$this->parentAccount = $parentAccount;

		return $this;
	}

	/**
	 * Returns scope.
	 *
	 * This is the scope to which the account belongs to.
	 *
	 * @return int
	 */
	public function getScope() {
		return $this->scope;
	}

	/**
	 * Sets scope.
	 *
	 * @param int $scope
	 * @return AccountCreate
	 */
	public function setScope($scope) {
		$this->scope = $scope;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getScope() === null) {
			throw new ValidationException("'scope' can't be null", 'scope', $this);
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

