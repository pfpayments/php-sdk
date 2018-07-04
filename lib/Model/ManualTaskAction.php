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
 * ManualTaskAction model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ManualTaskAction  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ManualTaskAction';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'id' => 'int',
		'label' => 'map[string,string]',
		'style' => '\PostFinanceCheckout\Sdk\Model\ManualTaskActionStyle',
		'taskType' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $label;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\ManualTaskActionStyle
	 */
	private $style;

	/**
	 * 
	 *
	 * @var int
	 */
	private $taskType;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['label'])) {
			$this->setLabel($data['label']);
		}
		if (isset($data['style'])) {
			$this->setStyle($data['style']);
		}
	}


	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return ManualTaskAction
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns label.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getLabel() {
		return $this->label;
	}

	/**
	 * Sets label.
	 *
	 * @param map[string,string] $label
	 * @return ManualTaskAction
	 */
	public function setLabel($label) {
		$this->label = $label;

		return $this;
	}

	/**
	 * Returns style.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\ManualTaskActionStyle
	 */
	public function getStyle() {
		return $this->style;
	}

	/**
	 * Sets style.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\ManualTaskActionStyle $style
	 * @return ManualTaskAction
	 */
	public function setStyle($style) {
		$this->style = $style;

		return $this;
	}

	/**
	 * Returns taskType.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTaskType() {
		return $this->taskType;
	}

	/**
	 * Sets taskType.
	 *
	 * @param int $taskType
	 * @return ManualTaskAction
	 */
	protected function setTaskType($taskType) {
		$this->taskType = $taskType;

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

