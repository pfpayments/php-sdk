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
 * RestCountry model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestCountry  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'RestCountry';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'iSOCode2Letter' => 'string',
		'iSOCode3Letter' => 'string',
		'addressFormat' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormat',
		'name' => 'string',
		'numericCode' => 'string',
		'stateCodes' => 'string[]'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The ISO code 2 letter identifies the country by two chars as defined in ISO 3166-1 (e.g. US, DE, CH).
	 *
	 * @var string
	 */
	private $iSOCode2Letter;

	/**
	 * The ISO code 3 letter identifies the country by three chars as defined in ISO 3166-1 (e.g. CHE, USA, GBR).
	 *
	 * @var string
	 */
	private $iSOCode3Letter;

	/**
	 * The address format of the country indicates how an address has to look like for the country.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\RestAddressFormat
	 */
	private $addressFormat;

	/**
	 * The name labels the country by a name in English.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The numeric code identifies the country by a three digit number as defined in ISO 3166-1 (e.g. 840, 826, 756).
	 *
	 * @var string
	 */
	private $numericCode;

	/**
	 * The state codes field is a list of all states associated with this country. The list contains the identifiers of the states. The identifiers corresponds to the ISO 3166-2 subdivision identifier.
	 *
	 * @var string[]
	 */
	private $stateCodes;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['addressFormat'])) {
			$this->setAddressFormat($data['addressFormat']);
		}
		if (isset($data['stateCodes'])) {
			$this->setStateCodes($data['stateCodes']);
		}
	}


	/**
	 * Returns iSOCode2Letter.
	 *
	 * The ISO code 2 letter identifies the country by two chars as defined in ISO 3166-1 (e.g. US, DE, CH).
	 *
	 * @return string
	 */
	public function getISOCode2Letter() {
		return $this->iSOCode2Letter;
	}

	/**
	 * Sets iSOCode2Letter.
	 *
	 * @param string $iSOCode2Letter
	 * @return RestCountry
	 */
	protected function setISOCode2Letter($iSOCode2Letter) {
		$this->iSOCode2Letter = $iSOCode2Letter;

		return $this;
	}

	/**
	 * Returns iSOCode3Letter.
	 *
	 * The ISO code 3 letter identifies the country by three chars as defined in ISO 3166-1 (e.g. CHE, USA, GBR).
	 *
	 * @return string
	 */
	public function getISOCode3Letter() {
		return $this->iSOCode3Letter;
	}

	/**
	 * Sets iSOCode3Letter.
	 *
	 * @param string $iSOCode3Letter
	 * @return RestCountry
	 */
	protected function setISOCode3Letter($iSOCode3Letter) {
		$this->iSOCode3Letter = $iSOCode3Letter;

		return $this;
	}

	/**
	 * Returns addressFormat.
	 *
	 * The address format of the country indicates how an address has to look like for the country.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormat
	 */
	public function getAddressFormat() {
		return $this->addressFormat;
	}

	/**
	 * Sets addressFormat.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormat $addressFormat
	 * @return RestCountry
	 */
	public function setAddressFormat($addressFormat) {
		$this->addressFormat = $addressFormat;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The name labels the country by a name in English.
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
	 * @return RestCountry
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns numericCode.
	 *
	 * The numeric code identifies the country by a three digit number as defined in ISO 3166-1 (e.g. 840, 826, 756).
	 *
	 * @return string
	 */
	public function getNumericCode() {
		return $this->numericCode;
	}

	/**
	 * Sets numericCode.
	 *
	 * @param string $numericCode
	 * @return RestCountry
	 */
	protected function setNumericCode($numericCode) {
		$this->numericCode = $numericCode;

		return $this;
	}

	/**
	 * Returns stateCodes.
	 *
	 * The state codes field is a list of all states associated with this country. The list contains the identifiers of the states. The identifiers corresponds to the ISO 3166-2 subdivision identifier.
	 *
	 * @return string[]
	 */
	public function getStateCodes() {
		return $this->stateCodes;
	}

	/**
	 * Sets stateCodes.
	 *
	 * @param string[] $stateCodes
	 * @return RestCountry
	 */
	public function setStateCodes($stateCodes) {
		$this->stateCodes = $stateCodes;

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

