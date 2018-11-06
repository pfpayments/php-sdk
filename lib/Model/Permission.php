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
 * Permission model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Permission  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Permission';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'description' => 'map[string,string]',
		'feature' => 'int',
		'group' => 'bool',
		'id' => 'int',
		'leaf' => 'bool',
		'name' => 'map[string,string]',
		'parent' => 'int',
		'pathToRoot' => 'int[]',
		'title' => 'map[string,string]',
		'twoFactorRequired' => 'bool'	);

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
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * 
	 *
	 * @var int
	 */
	private $feature;

	/**
	 * 
	 *
	 * @var bool
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
	 * @var bool
	 */
	private $leaf;

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
	private $parent;

	/**
	 * 
	 *
	 * @var int[]
	 */
	private $pathToRoot;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $title;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $twoFactorRequired;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['pathToRoot'])) {
			$this->setPathToRoot($data['pathToRoot']);
		}
		if (isset($data['title'])) {
			$this->setTitle($data['title']);
		}
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
	 * @return Permission
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns feature.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getFeature() {
		return $this->feature;
	}

	/**
	 * Sets feature.
	 *
	 * @param int $feature
	 * @return Permission
	 */
	protected function setFeature($feature) {
		$this->feature = $feature;

		return $this;
	}

	/**
	 * Returns group.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getGroup() {
		return $this->group;
	}

	/**
	 * Sets group.
	 *
	 * @param bool $group
	 * @return Permission
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
	 * @return Permission
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns leaf.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getLeaf() {
		return $this->leaf;
	}

	/**
	 * Sets leaf.
	 *
	 * @param bool $leaf
	 * @return Permission
	 */
	protected function setLeaf($leaf) {
		$this->leaf = $leaf;

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
	 * @return Permission
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns parent.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * Sets parent.
	 *
	 * @param int $parent
	 * @return Permission
	 */
	protected function setParent($parent) {
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Returns pathToRoot.
	 *
	 * 
	 *
	 * @return int[]
	 */
	public function getPathToRoot() {
		return $this->pathToRoot;
	}

	/**
	 * Sets pathToRoot.
	 *
	 * @param int[] $pathToRoot
	 * @return Permission
	 */
	public function setPathToRoot($pathToRoot) {
		$this->pathToRoot = $pathToRoot;

		return $this;
	}

	/**
	 * Returns title.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets title.
	 *
	 * @param map[string,string] $title
	 * @return Permission
	 */
	public function setTitle($title) {
		$this->title = $title;

		return $this;
	}

	/**
	 * Returns twoFactorRequired.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getTwoFactorRequired() {
		return $this->twoFactorRequired;
	}

	/**
	 * Sets twoFactorRequired.
	 *
	 * @param bool $twoFactorRequired
	 * @return Permission
	 */
	protected function setTwoFactorRequired($twoFactorRequired) {
		$this->twoFactorRequired = $twoFactorRequired;

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

