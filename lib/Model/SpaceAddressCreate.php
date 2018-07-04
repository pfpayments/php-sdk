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
 * SpaceAddressCreate model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SpaceAddressCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SpaceAddress.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'city' => 'string',
		'country' => 'string',
		'dependentLocality' => 'string',
		'emailAddress' => 'string',
		'familyName' => 'string',
		'givenName' => 'string',
		'organizationName' => 'string',
		'postCode' => 'string',
		'postalState' => 'string',
		'salesTaxNumber' => 'string',
		'salutation' => 'string',
		'sortingCode' => 'string',
		'street' => 'string'	);

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
	 * @var string
	 */
	private $city;

	/**
	 * 
	 *
	 * @var string
	 */
	private $country;

	/**
	 * 
	 *
	 * @var string
	 */
	private $dependentLocality;

	/**
	 * The email address is used within emails and as reply to address.
	 *
	 * @var string
	 */
	private $emailAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $familyName;

	/**
	 * 
	 *
	 * @var string
	 */
	private $givenName;

	/**
	 * 
	 *
	 * @var string
	 */
	private $organizationName;

	/**
	 * 
	 *
	 * @var string
	 */
	private $postCode;

	/**
	 * 
	 *
	 * @var string
	 */
	private $postalState;

	/**
	 * 
	 *
	 * @var string
	 */
	private $salesTaxNumber;

	/**
	 * 
	 *
	 * @var string
	 */
	private $salutation;

	/**
	 * The sorting code identifies the post office at which the post box is located in.
	 *
	 * @var string
	 */
	private $sortingCode;

	/**
	 * 
	 *
	 * @var string
	 */
	private $street;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['city'])) {
			$this->setCity($data['city']);
		}
		if (isset($data['country'])) {
			$this->setCountry($data['country']);
		}
		if (isset($data['dependentLocality'])) {
			$this->setDependentLocality($data['dependentLocality']);
		}
		if (isset($data['emailAddress'])) {
			$this->setEmailAddress($data['emailAddress']);
		}
		if (isset($data['familyName'])) {
			$this->setFamilyName($data['familyName']);
		}
		if (isset($data['givenName'])) {
			$this->setGivenName($data['givenName']);
		}
		if (isset($data['organizationName'])) {
			$this->setOrganizationName($data['organizationName']);
		}
		if (isset($data['postCode'])) {
			$this->setPostCode($data['postCode']);
		}
		if (isset($data['postalState'])) {
			$this->setPostalState($data['postalState']);
		}
		if (isset($data['salesTaxNumber'])) {
			$this->setSalesTaxNumber($data['salesTaxNumber']);
		}
		if (isset($data['salutation'])) {
			$this->setSalutation($data['salutation']);
		}
		if (isset($data['sortingCode'])) {
			$this->setSortingCode($data['sortingCode']);
		}
		if (isset($data['street'])) {
			$this->setStreet($data['street']);
		}
	}


	/**
	 * Returns city.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets city.
	 *
	 * @param string $city
	 * @return SpaceAddressCreate
	 */
	public function setCity($city) {
		$this->city = $city;

		return $this;
	}

	/**
	 * Returns country.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets country.
	 *
	 * @param string $country
	 * @return SpaceAddressCreate
	 */
	public function setCountry($country) {
		$this->country = $country;

		return $this;
	}

	/**
	 * Returns dependentLocality.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDependentLocality() {
		return $this->dependentLocality;
	}

	/**
	 * Sets dependentLocality.
	 *
	 * @param string $dependentLocality
	 * @return SpaceAddressCreate
	 */
	public function setDependentLocality($dependentLocality) {
		$this->dependentLocality = $dependentLocality;

		return $this;
	}

	/**
	 * Returns emailAddress.
	 *
	 * The email address is used within emails and as reply to address.
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
	 * @return SpaceAddressCreate
	 */
	public function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns familyName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getFamilyName() {
		return $this->familyName;
	}

	/**
	 * Sets familyName.
	 *
	 * @param string $familyName
	 * @return SpaceAddressCreate
	 */
	public function setFamilyName($familyName) {
		$this->familyName = $familyName;

		return $this;
	}

	/**
	 * Returns givenName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getGivenName() {
		return $this->givenName;
	}

	/**
	 * Sets givenName.
	 *
	 * @param string $givenName
	 * @return SpaceAddressCreate
	 */
	public function setGivenName($givenName) {
		$this->givenName = $givenName;

		return $this;
	}

	/**
	 * Returns organizationName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getOrganizationName() {
		return $this->organizationName;
	}

	/**
	 * Sets organizationName.
	 *
	 * @param string $organizationName
	 * @return SpaceAddressCreate
	 */
	public function setOrganizationName($organizationName) {
		$this->organizationName = $organizationName;

		return $this;
	}

	/**
	 * Returns postCode.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPostCode() {
		return $this->postCode;
	}

	/**
	 * Sets postCode.
	 *
	 * @param string $postCode
	 * @return SpaceAddressCreate
	 */
	public function setPostCode($postCode) {
		$this->postCode = $postCode;

		return $this;
	}

	/**
	 * Returns postalState.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPostalState() {
		return $this->postalState;
	}

	/**
	 * Sets postalState.
	 *
	 * @param string $postalState
	 * @return SpaceAddressCreate
	 */
	public function setPostalState($postalState) {
		$this->postalState = $postalState;

		return $this;
	}

	/**
	 * Returns salesTaxNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSalesTaxNumber() {
		return $this->salesTaxNumber;
	}

	/**
	 * Sets salesTaxNumber.
	 *
	 * @param string $salesTaxNumber
	 * @return SpaceAddressCreate
	 */
	public function setSalesTaxNumber($salesTaxNumber) {
		$this->salesTaxNumber = $salesTaxNumber;

		return $this;
	}

	/**
	 * Returns salutation.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSalutation() {
		return $this->salutation;
	}

	/**
	 * Sets salutation.
	 *
	 * @param string $salutation
	 * @return SpaceAddressCreate
	 */
	public function setSalutation($salutation) {
		$this->salutation = $salutation;

		return $this;
	}

	/**
	 * Returns sortingCode.
	 *
	 * The sorting code identifies the post office at which the post box is located in.
	 *
	 * @return string
	 */
	public function getSortingCode() {
		return $this->sortingCode;
	}

	/**
	 * Sets sortingCode.
	 *
	 * @param string $sortingCode
	 * @return SpaceAddressCreate
	 */
	public function setSortingCode($sortingCode) {
		$this->sortingCode = $sortingCode;

		return $this;
	}

	/**
	 * Returns street.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets street.
	 *
	 * @param string $street
	 * @return SpaceAddressCreate
	 */
	public function setStreet($street) {
		$this->street = $street;

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

