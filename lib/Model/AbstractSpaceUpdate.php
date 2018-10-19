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
 * AbstractSpaceUpdate model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractSpaceUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.Space.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'name' => 'string',
		'postalAddress' => '\PostFinanceCheckout\Sdk\Model\SpaceAddressCreate',
		'requestLimit' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
		'technicalContactAddresses' => 'string[]',
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
	 * The space name is used internally to identify the space in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The address to use in communication with clients for example in email, documents etc.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\SpaceAddressCreate
	 */
	private $postalAddress;

	/**
	 * The request limit defines the maximum number of API request accepted within 2 minutes for this space. This limit can only be changed with special privileges.
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
	 * The email address provided as contact addresses will be informed about technical issues or errors triggered by the space.
	 *
	 * @var string[]
	 */
	private $technicalContactAddresses;

	/**
	 * The time zone assigned to the space determines the time offset for calculating dates within the space. This is typically used for background processed which needs to be triggered on a specific hour within the day. Changing the space time zone will not change the display of dates.
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
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['postalAddress'])) {
			$this->setPostalAddress($data['postalAddress']);
		}
		if (isset($data['requestLimit'])) {
			$this->setRequestLimit($data['requestLimit']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['technicalContactAddresses'])) {
			$this->setTechnicalContactAddresses($data['technicalContactAddresses']);
		}
		if (isset($data['timeZone'])) {
			$this->setTimeZone($data['timeZone']);
		}
	}


	/**
	 * Returns name.
	 *
	 * The space name is used internally to identify the space in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return AbstractSpaceUpdate
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns postalAddress.
	 *
	 * The address to use in communication with clients for example in email, documents etc.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\SpaceAddressCreate
	 */
	public function getPostalAddress() {
		return $this->postalAddress;
	}

	/**
	 * Sets postalAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\SpaceAddressCreate $postalAddress
	 * @return AbstractSpaceUpdate
	 */
	public function setPostalAddress($postalAddress) {
		$this->postalAddress = $postalAddress;

		return $this;
	}

	/**
	 * Returns requestLimit.
	 *
	 * The request limit defines the maximum number of API request accepted within 2 minutes for this space. This limit can only be changed with special privileges.
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
	 * @return AbstractSpaceUpdate
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
	 * @return AbstractSpaceUpdate
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns technicalContactAddresses.
	 *
	 * The email address provided as contact addresses will be informed about technical issues or errors triggered by the space.
	 *
	 * @return string[]
	 */
	public function getTechnicalContactAddresses() {
		return $this->technicalContactAddresses;
	}

	/**
	 * Sets technicalContactAddresses.
	 *
	 * @param string[] $technicalContactAddresses
	 * @return AbstractSpaceUpdate
	 */
	public function setTechnicalContactAddresses($technicalContactAddresses) {
		$this->technicalContactAddresses = $technicalContactAddresses;

		return $this;
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone assigned to the space determines the time offset for calculating dates within the space. This is typically used for background processed which needs to be triggered on a specific hour within the day. Changing the space time zone will not change the display of dates.
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
	 * @return AbstractSpaceUpdate
	 */
	public function setTimeZone($timeZone) {
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

