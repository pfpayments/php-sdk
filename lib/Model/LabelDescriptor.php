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
 * LabelDescriptor model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LabelDescriptor  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LabelDescriptor';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'category' => '\PostFinanceCheckout\Sdk\Model\LabelDescriptorCategory',
		'description' => 'map[string,string]',
		'features' => 'int[]',
		'group' => 'int',
		'id' => 'int',
		'name' => 'map[string,string]',
		'type' => 'int',
		'weight' => 'int'	);

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
	 * @var \PostFinanceCheckout\Sdk\Model\LabelDescriptorCategory
	 */
	private $category;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * 
	 *
	 * @var int[]
	 */
	private $features;

	/**
	 * 
	 *
	 * @var int
	 */
	private $group;

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
	private $name;

	/**
	 * 
	 *
	 * @var int
	 */
	private $type;

	/**
	 * 
	 *
	 * @var int
	 */
	private $weight;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['category'])) {
			$this->setCategory($data['category']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['features'])) {
			$this->setFeatures($data['features']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
	}


	/**
	 * Returns category.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LabelDescriptorCategory
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets category.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LabelDescriptorCategory $category
	 * @return LabelDescriptor
	 */
	public function setCategory($category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param map[string,string] $description
	 * @return LabelDescriptor
	 */
	public function setDescription($description) {
		if (is_array($description) && empty($description)) {
			$this->description = new \stdClass;
		} else {
			$this->description = $description;
		}

		return $this;
	}

	/**
	 * Returns features.
	 *
	 * 
	 *
	 * @return int[]
	 */
	public function getFeatures() {
		return $this->features;
	}

	/**
	 * Sets features.
	 *
	 * @param int[] $features
	 * @return LabelDescriptor
	 */
	public function setFeatures($features) {
		$this->features = $features;

		return $this;
	}

	/**
	 * Returns group.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getGroup() {
		return $this->group;
	}

	/**
	 * Sets group.
	 *
	 * @param int $group
	 * @return LabelDescriptor
	 */
	protected function setGroup($group) {
		$this->group = $group;

		return $this;
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
	 * @return LabelDescriptor
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param map[string,string] $name
	 * @return LabelDescriptor
	 */
	public function setName($name) {
		if (is_array($name) && empty($name)) {
			$this->name = new \stdClass;
		} else {
			$this->name = $name;
		}

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param int $type
	 * @return LabelDescriptor
	 */
	protected function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Returns weight.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Sets weight.
	 *
	 * @param int $weight
	 * @return LabelDescriptor
	 */
	protected function setWeight($weight) {
		$this->weight = $weight;

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

