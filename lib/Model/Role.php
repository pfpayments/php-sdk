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
 * Role model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Role  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Role';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'account' => '\PostFinanceCheckout\Sdk\Model\Account',
		'id' => 'int',
		'name' => '\PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString',
		'permissions' => '\PostFinanceCheckout\Sdk\Model\Permission[]',
		'plannedPurgeDate' => '\DateTime',
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
	 * The account to which this role belongs to. This role can only be assigned within the assigned account and the sub accounts of the assigned account.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Account
	 */
	private $account;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The name of this role is used to identify the role within administrative interfaces.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString
	 */
	private $name;

	/**
	 * Set of permissions that are granted to this role.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\Permission[]
	 */
	private $permissions;

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
		if (isset($data['account'])) {
			$this->setAccount($data['account']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['permissions'])) {
			$this->setPermissions($data['permissions']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns account.
	 *
	 * The account to which this role belongs to. This role can only be assigned within the assigned account and the sub accounts of the assigned account.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Account
	 */
	public function getAccount() {
		return $this->account;
	}

	/**
	 * Sets account.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Account $account
	 * @return Role
	 */
	public function setAccount($account) {
		$this->account = $account;

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
	 * @return Role
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The name of this role is used to identify the role within administrative interfaces.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString $name
	 * @return Role
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns permissions.
	 *
	 * Set of permissions that are granted to this role.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Permission[]
	 */
	public function getPermissions() {
		return $this->permissions;
	}

	/**
	 * Sets permissions.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Permission[] $permissions
	 * @return Role
	 */
	public function setPermissions($permissions) {
		$this->permissions = $permissions;

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
	 * @return Role
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
	 * @return Role
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
	 * @return Role
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

