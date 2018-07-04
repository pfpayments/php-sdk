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
 * RestLanguage model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestLanguage  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'RestLanguage';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'countryCode' => 'string',
		'ietfCode' => 'string',
		'iso2Code' => 'string',
		'iso3Code' => 'string',
		'pluralExpression' => 'string',
		'primaryOfGroup' => 'bool'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The country code represents the region of the language as a 2 letter ISO code.
	 *
	 * @var string
	 */
	private $countryCode;

	/**
	 * The IETF code represents the language as the two letter ISO code including the region (e.g. en-US).
	 *
	 * @var string
	 */
	private $ietfCode;

	/**
	 * The ISO 2 letter code represents the language with two letters.
	 *
	 * @var string
	 */
	private $iso2Code;

	/**
	 * The ISO 3 letter code represents the language with three letters.
	 *
	 * @var string
	 */
	private $iso3Code;

	/**
	 * The plural expression defines how to map a plural into the language index. This expression is used to determine the plural form for the translations.
	 *
	 * @var string
	 */
	private $pluralExpression;

	/**
	 * The primary language of a group indicates whether a language is the primary language of a group of languages. The group is determine by the ISO 2 letter code.
	 *
	 * @var bool
	 */
	private $primaryOfGroup;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
	}


	/**
	 * Returns countryCode.
	 *
	 * The country code represents the region of the language as a 2 letter ISO code.
	 *
	 * @return string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 * Sets countryCode.
	 *
	 * @param string $countryCode
	 * @return RestLanguage
	 */
	protected function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;

		return $this;
	}

	/**
	 * Returns ietfCode.
	 *
	 * The IETF code represents the language as the two letter ISO code including the region (e.g. en-US).
	 *
	 * @return string
	 */
	public function getIetfCode() {
		return $this->ietfCode;
	}

	/**
	 * Sets ietfCode.
	 *
	 * @param string $ietfCode
	 * @return RestLanguage
	 */
	protected function setIetfCode($ietfCode) {
		$this->ietfCode = $ietfCode;

		return $this;
	}

	/**
	 * Returns iso2Code.
	 *
	 * The ISO 2 letter code represents the language with two letters.
	 *
	 * @return string
	 */
	public function getIso2Code() {
		return $this->iso2Code;
	}

	/**
	 * Sets iso2Code.
	 *
	 * @param string $iso2Code
	 * @return RestLanguage
	 */
	protected function setIso2Code($iso2Code) {
		$this->iso2Code = $iso2Code;

		return $this;
	}

	/**
	 * Returns iso3Code.
	 *
	 * The ISO 3 letter code represents the language with three letters.
	 *
	 * @return string
	 */
	public function getIso3Code() {
		return $this->iso3Code;
	}

	/**
	 * Sets iso3Code.
	 *
	 * @param string $iso3Code
	 * @return RestLanguage
	 */
	protected function setIso3Code($iso3Code) {
		$this->iso3Code = $iso3Code;

		return $this;
	}

	/**
	 * Returns pluralExpression.
	 *
	 * The plural expression defines how to map a plural into the language index. This expression is used to determine the plural form for the translations.
	 *
	 * @return string
	 */
	public function getPluralExpression() {
		return $this->pluralExpression;
	}

	/**
	 * Sets pluralExpression.
	 *
	 * @param string $pluralExpression
	 * @return RestLanguage
	 */
	protected function setPluralExpression($pluralExpression) {
		$this->pluralExpression = $pluralExpression;

		return $this;
	}

	/**
	 * Returns primaryOfGroup.
	 *
	 * The primary language of a group indicates whether a language is the primary language of a group of languages. The group is determine by the ISO 2 letter code.
	 *
	 * @return bool
	 */
	public function getPrimaryOfGroup() {
		return $this->primaryOfGroup;
	}

	/**
	 * Sets primaryOfGroup.
	 *
	 * @param bool $primaryOfGroup
	 * @return RestLanguage
	 */
	protected function setPrimaryOfGroup($primaryOfGroup) {
		$this->primaryOfGroup = $primaryOfGroup;

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

