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
 * RestCurrency model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestCurrency  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'RestCurrency';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'currencyCode' => 'string',
		'fractionDigits' => 'int',
		'numericCode' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The currency code identifies the currency with the three char long ISO 4217 code (e.g. USD, CHF, EUR).
	 *
	 * @var string
	 */
	private $currencyCode;

	/**
	 * The fraction digits indicates how many places the currency has. This also indicates with which precision we calculate internally when we do calculations with this currency.
	 *
	 * @var int
	 */
	private $fractionDigits;

	/**
	 * The numeric code identifies the currency with the three digit long ISO 4217 code (e.g. 978, 756, 840).
	 *
	 * @var int
	 */
	private $numericCode;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
	}


	/**
	 * Returns currencyCode.
	 *
	 * The currency code identifies the currency with the three char long ISO 4217 code (e.g. USD, CHF, EUR).
	 *
	 * @return string
	 */
	public function getCurrencyCode() {
		return $this->currencyCode;
	}

	/**
	 * Sets currencyCode.
	 *
	 * @param string $currencyCode
	 * @return RestCurrency
	 */
	protected function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;

		return $this;
	}

	/**
	 * Returns fractionDigits.
	 *
	 * The fraction digits indicates how many places the currency has. This also indicates with which precision we calculate internally when we do calculations with this currency.
	 *
	 * @return int
	 */
	public function getFractionDigits() {
		return $this->fractionDigits;
	}

	/**
	 * Sets fractionDigits.
	 *
	 * @param int $fractionDigits
	 * @return RestCurrency
	 */
	protected function setFractionDigits($fractionDigits) {
		$this->fractionDigits = $fractionDigits;

		return $this;
	}

	/**
	 * Returns numericCode.
	 *
	 * The numeric code identifies the currency with the three digit long ISO 4217 code (e.g. 978, 756, 840).
	 *
	 * @return int
	 */
	public function getNumericCode() {
		return $this->numericCode;
	}

	/**
	 * Sets numericCode.
	 *
	 * @param int $numericCode
	 * @return RestCurrency
	 */
	protected function setNumericCode($numericCode) {
		$this->numericCode = $numericCode;

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

