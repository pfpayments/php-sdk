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
 * EntityQueryOrderBy model
 *
 * @category    Class
 * @description The 'order by' allows to order the returned entities.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class EntityQueryOrderBy  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EntityQueryOrderBy';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'fieldName' => 'string',
		'sorting' => '\PostFinanceCheckout\Sdk\Model\EntityQueryOrderByType'	);

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
	private $fieldName;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\EntityQueryOrderByType
	 */
	private $sorting;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['fieldName'])) {
			$this->setFieldName($data['fieldName']);
		}
		if (isset($data['sorting'])) {
			$this->setSorting($data['sorting']);
		}
	}


	/**
	 * Returns fieldName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getFieldName() {
		return $this->fieldName;
	}

	/**
	 * Sets fieldName.
	 *
	 * @param string $fieldName
	 * @return EntityQueryOrderBy
	 */
	public function setFieldName($fieldName) {
		$this->fieldName = $fieldName;

		return $this;
	}

	/**
	 * Returns sorting.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\EntityQueryOrderByType
	 */
	public function getSorting() {
		return $this->sorting;
	}

	/**
	 * Sets sorting.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\EntityQueryOrderByType $sorting
	 * @return EntityQueryOrderBy
	 */
	public function setSorting($sorting) {
		$this->sorting = $sorting;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getFieldName() === null) {
			throw new ValidationException("'fieldName' can't be null", 'fieldName', $this);
		}
		if ($this->getSorting() === null) {
			throw new ValidationException("'sorting' can't be null", 'sorting', $this);
		}
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

