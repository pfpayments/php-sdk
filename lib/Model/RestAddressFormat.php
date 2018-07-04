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
 * RestAddressFormat model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestAddressFormat  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'RestAddressFormat';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'postCodeExamples' => 'string[]',
		'postCodeRegex' => 'string',
		'requiredFields' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]',
		'usedFields' => '\PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The example post codes allow the user to understand what we expect here.
	 *
	 * @var string[]
	 */
	private $postCodeExamples;

	/**
	 * The post code regex is a regular expression which can validates the input of the post code.
	 *
	 * @var string
	 */
	private $postCodeRegex;

	/**
	 * The required fields indicate what fields are required within an address to comply with the address format.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]
	 */
	private $requiredFields;

	/**
	 * The used fields indicate what fields are used within this address format.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]
	 */
	private $usedFields;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['postCodeExamples'])) {
			$this->setPostCodeExamples($data['postCodeExamples']);
		}
		if (isset($data['requiredFields'])) {
			$this->setRequiredFields($data['requiredFields']);
		}
		if (isset($data['usedFields'])) {
			$this->setUsedFields($data['usedFields']);
		}
	}


	/**
	 * Returns postCodeExamples.
	 *
	 * The example post codes allow the user to understand what we expect here.
	 *
	 * @return string[]
	 */
	public function getPostCodeExamples() {
		return $this->postCodeExamples;
	}

	/**
	 * Sets postCodeExamples.
	 *
	 * @param string[] $postCodeExamples
	 * @return RestAddressFormat
	 */
	public function setPostCodeExamples($postCodeExamples) {
		$this->postCodeExamples = $postCodeExamples;

		return $this;
	}

	/**
	 * Returns postCodeRegex.
	 *
	 * The post code regex is a regular expression which can validates the input of the post code.
	 *
	 * @return string
	 */
	public function getPostCodeRegex() {
		return $this->postCodeRegex;
	}

	/**
	 * Sets postCodeRegex.
	 *
	 * @param string $postCodeRegex
	 * @return RestAddressFormat
	 */
	protected function setPostCodeRegex($postCodeRegex) {
		$this->postCodeRegex = $postCodeRegex;

		return $this;
	}

	/**
	 * Returns requiredFields.
	 *
	 * The required fields indicate what fields are required within an address to comply with the address format.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]
	 */
	public function getRequiredFields() {
		return $this->requiredFields;
	}

	/**
	 * Sets requiredFields.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[] $requiredFields
	 * @return RestAddressFormat
	 */
	public function setRequiredFields($requiredFields) {
		$this->requiredFields = $requiredFields;

		return $this;
	}

	/**
	 * Returns usedFields.
	 *
	 * The used fields indicate what fields are used within this address format.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[]
	 */
	public function getUsedFields() {
		return $this->usedFields;
	}

	/**
	 * Sets usedFields.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\RestAddressFormatField[] $usedFields
	 * @return RestAddressFormat
	 */
	public function setUsedFields($usedFields) {
		$this->usedFields = $usedFields;

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

