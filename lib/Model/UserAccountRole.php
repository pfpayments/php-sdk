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
 * UserAccountRole model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class UserAccountRole  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'UserAccountRole';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'account' => 'int',
		'appliesOnSubAccount' => 'bool',
		'id' => 'int',
		'role' => 'int',
		'user' => 'int',
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
	 * @var int
	 */
	private $account;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $appliesOnSubAccount;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var int
	 */
	private $role;

	/**
	 * 
	 *
	 * @var int
	 */
	private $user;

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
		if (isset($data['id'])) {
			$this->setId($data['id']);
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
	 * @return int
	 */
	public function getAccount() {
		return $this->account;
	}

	/**
	 * Sets account.
	 *
	 * @param int $account
	 * @return UserAccountRole
	 */
	protected function setAccount($account) {
		$this->account = $account;

		return $this;
	}

	/**
	 * Returns appliesOnSubAccount.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getAppliesOnSubAccount() {
		return $this->appliesOnSubAccount;
	}

	/**
	 * Sets appliesOnSubAccount.
	 *
	 * @param bool $appliesOnSubAccount
	 * @return UserAccountRole
	 */
	protected function setAppliesOnSubAccount($appliesOnSubAccount) {
		$this->appliesOnSubAccount = $appliesOnSubAccount;

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
	 * @return UserAccountRole
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns role.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets role.
	 *
	 * @param int $role
	 * @return UserAccountRole
	 */
	protected function setRole($role) {
		$this->role = $role;

		return $this;
	}

	/**
	 * Returns user.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * Sets user.
	 *
	 * @param int $user
	 * @return UserAccountRole
	 */
	protected function setUser($user) {
		$this->user = $user;

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
	 * @return UserAccountRole
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

