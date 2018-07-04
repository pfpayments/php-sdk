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
 * EntityQueryFilter model
 *
 * @category    Class
 * @description The query filter allows to restrict the entities which are returned.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class EntityQueryFilter  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EntityQueryFilter';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'children' => '\PostFinanceCheckout\Sdk\Model\EntityQueryFilter[]',
		'fieldName' => 'string',
		'operator' => '\PostFinanceCheckout\Sdk\Model\CriteriaOperator',
		'type' => '\PostFinanceCheckout\Sdk\Model\EntityQueryFilterType',
		'value' => 'object'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The 'children' can contain other filter nodes which are applied to the query. This property is only applicable on filter types 'OR' and 'AND'.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\EntityQueryFilter[]
	 */
	private $children;

	/**
	 * The 'fieldName' indicates the property on the entity which should be filtered. This property is only applicable on filter type 'LEAF'.
	 *
	 * @var string
	 */
	private $fieldName;

	/**
	 * The 'operator' indicates what kind of filtering on the 'fieldName' is executed on. This property is only applicable on filter type 'LEAF'.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CriteriaOperator
	 */
	private $operator;

	/**
	 * The filter type controls how the query node is interpreted. I.e. if the node acts as leaf node or as a filter group.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\EntityQueryFilterType
	 */
	private $type;

	/**
	 * The 'value' is used to compare with the 'fieldName' as defined by the 'operator'. This property is only applicable on filter type 'LEAF'.
	 *
	 * @var object
	 */
	private $value;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['children'])) {
			$this->setChildren($data['children']);
		}
		if (isset($data['fieldName'])) {
			$this->setFieldName($data['fieldName']);
		}
		if (isset($data['operator'])) {
			$this->setOperator($data['operator']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
		if (isset($data['value'])) {
			$this->setValue($data['value']);
		}
	}


	/**
	 * Returns children.
	 *
	 * The 'children' can contain other filter nodes which are applied to the query. This property is only applicable on filter types 'OR' and 'AND'.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\EntityQueryFilter[]
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Sets children.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\EntityQueryFilter[] $children
	 * @return EntityQueryFilter
	 */
	public function setChildren($children) {
		$this->children = $children;

		return $this;
	}

	/**
	 * Returns fieldName.
	 *
	 * The 'fieldName' indicates the property on the entity which should be filtered. This property is only applicable on filter type 'LEAF'.
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
	 * @return EntityQueryFilter
	 */
	public function setFieldName($fieldName) {
		$this->fieldName = $fieldName;

		return $this;
	}

	/**
	 * Returns operator.
	 *
	 * The 'operator' indicates what kind of filtering on the 'fieldName' is executed on. This property is only applicable on filter type 'LEAF'.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\CriteriaOperator
	 */
	public function getOperator() {
		return $this->operator;
	}

	/**
	 * Sets operator.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\CriteriaOperator $operator
	 * @return EntityQueryFilter
	 */
	public function setOperator($operator) {
		$this->operator = $operator;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * The filter type controls how the query node is interpreted. I.e. if the node acts as leaf node or as a filter group.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\EntityQueryFilterType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\EntityQueryFilterType $type
	 * @return EntityQueryFilter
	 */
	public function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Returns value.
	 *
	 * The 'value' is used to compare with the 'fieldName' as defined by the 'operator'. This property is only applicable on filter type 'LEAF'.
	 *
	 * @return object
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Sets value.
	 *
	 * @param object $value
	 * @return EntityQueryFilter
	 */
	public function setValue($value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getType() === null) {
			throw new ValidationException("'type' can't be null", 'type', $this);
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

