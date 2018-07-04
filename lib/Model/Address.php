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
 * Address model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Address  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Address';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'city' => 'string',
		'commercialRegisterNumber' => 'string',
		'country' => 'string',
		'dateOfBirth' => '\DateTime',
		'dependentLocality' => 'string',
		'emailAddress' => 'string',
		'familyName' => 'string',
		'gender' => '\PostFinanceCheckout\Sdk\Model\Gender',
		'givenName' => 'string',
		'legalOrganizationForm' => '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm',
		'mobilePhoneNumber' => 'string',
		'organizationName' => 'string',
		'phoneNumber' => 'string',
		'postCode' => 'string',
		'postalState' => 'string',
		'salesTaxNumber' => 'string',
		'salutation' => 'string',
		'socialSecurityNumber' => 'string',
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
	private $commercialRegisterNumber;

	/**
	 * 
	 *
	 * @var string
	 */
	private $country;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $dateOfBirth;

	/**
	 * 
	 *
	 * @var string
	 */
	private $dependentLocality;

	/**
	 * 
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
	 * @var \PostFinanceCheckout\Sdk\Model\Gender
	 */
	private $gender;

	/**
	 * 
	 *
	 * @var string
	 */
	private $givenName;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm
	 */
	private $legalOrganizationForm;

	/**
	 * 
	 *
	 * @var string
	 */
	private $mobilePhoneNumber;

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
	private $phoneNumber;

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
	 * 
	 *
	 * @var string
	 */
	private $socialSecurityNumber;

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
		if (isset($data['gender'])) {
			$this->setGender($data['gender']);
		}
		if (isset($data['legalOrganizationForm'])) {
			$this->setLegalOrganizationForm($data['legalOrganizationForm']);
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
	 * @return Address
	 */
	protected function setCity($city) {
		$this->city = $city;

		return $this;
	}

	/**
	 * Returns commercialRegisterNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCommercialRegisterNumber() {
		return $this->commercialRegisterNumber;
	}

	/**
	 * Sets commercialRegisterNumber.
	 *
	 * @param string $commercialRegisterNumber
	 * @return Address
	 */
	protected function setCommercialRegisterNumber($commercialRegisterNumber) {
		$this->commercialRegisterNumber = $commercialRegisterNumber;

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
	 * @return Address
	 */
	protected function setCountry($country) {
		$this->country = $country;

		return $this;
	}

	/**
	 * Returns dateOfBirth.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	/**
	 * Sets dateOfBirth.
	 *
	 * @param \DateTime $dateOfBirth
	 * @return Address
	 */
	protected function setDateOfBirth($dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;

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
	 * @return Address
	 */
	protected function setDependentLocality($dependentLocality) {
		$this->dependentLocality = $dependentLocality;

		return $this;
	}

	/**
	 * Returns emailAddress.
	 *
	 * 
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
	 * @return Address
	 */
	protected function setEmailAddress($emailAddress) {
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
	 * @return Address
	 */
	protected function setFamilyName($familyName) {
		$this->familyName = $familyName;

		return $this;
	}

	/**
	 * Returns gender.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\Gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Sets gender.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\Gender $gender
	 * @return Address
	 */
	public function setGender($gender) {
		$this->gender = $gender;

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
	 * @return Address
	 */
	protected function setGivenName($givenName) {
		$this->givenName = $givenName;

		return $this;
	}

	/**
	 * Returns legalOrganizationForm.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm
	 */
	public function getLegalOrganizationForm() {
		return $this->legalOrganizationForm;
	}

	/**
	 * Sets legalOrganizationForm.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm $legalOrganizationForm
	 * @return Address
	 */
	public function setLegalOrganizationForm($legalOrganizationForm) {
		$this->legalOrganizationForm = $legalOrganizationForm;

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
	 * @return Address
	 */
	protected function setMobilePhoneNumber($mobilePhoneNumber) {
		$this->mobilePhoneNumber = $mobilePhoneNumber;

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
	 * @return Address
	 */
	protected function setOrganizationName($organizationName) {
		$this->organizationName = $organizationName;

		return $this;
	}

	/**
	 * Returns phoneNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	/**
	 * Sets phoneNumber.
	 *
	 * @param string $phoneNumber
	 * @return Address
	 */
	protected function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;

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
	 * @return Address
	 */
	protected function setPostCode($postCode) {
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
	 * @return Address
	 */
	protected function setPostalState($postalState) {
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
	 * @return Address
	 */
	protected function setSalesTaxNumber($salesTaxNumber) {
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
	 * @return Address
	 */
	protected function setSalutation($salutation) {
		$this->salutation = $salutation;

		return $this;
	}

	/**
	 * Returns socialSecurityNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSocialSecurityNumber() {
		return $this->socialSecurityNumber;
	}

	/**
	 * Sets socialSecurityNumber.
	 *
	 * @param string $socialSecurityNumber
	 * @return Address
	 */
	protected function setSocialSecurityNumber($socialSecurityNumber) {
		$this->socialSecurityNumber = $socialSecurityNumber;

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
	 * @return Address
	 */
	protected function setSortingCode($sortingCode) {
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
	 * @return Address
	 */
	protected function setStreet($street) {
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

