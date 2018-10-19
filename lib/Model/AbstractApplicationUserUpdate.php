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
 * AbstractApplicationUserUpdate model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractApplicationUserUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.ApplicationUser.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'name' => 'string',
		'requestLimit' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The user name is used to identify the application user in administrative interfaces.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The request limit defines the maximum number of API request accepted within 2 minutes. This limit can only be changed with special privileges.
	 *
	 * @var int
	 */
	private $requestLimit;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	private $state;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['requestLimit'])) {
			$this->setRequestLimit($data['requestLimit']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
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
	 * @return AbstractApplicationUserUpdate
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns requestLimit.
	 *
	 * The request limit defines the maximum number of API request accepted within 2 minutes. This limit can only be changed with special privileges.
	 *
	 * @return int
	 */
	public function getRequestLimit() {
		return $this->requestLimit;
	}

	/**
	 * Sets requestLimit.
	 *
	 * @param int $requestLimit
	 * @return AbstractApplicationUserUpdate
	 */
	public function setRequestLimit($requestLimit) {
		$this->requestLimit = $requestLimit;

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
	 * @return AbstractApplicationUserUpdate
	 */
	public function setState($state) {
		$this->state = $state;

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

