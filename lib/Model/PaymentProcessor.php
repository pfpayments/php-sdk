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
 * PaymentProcessor model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentProcessor  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentProcessor';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'companyName' => 'map[string,string]',
		'description' => 'map[string,string]',
		'feature' => 'int',
		'headquartersLocation' => 'map[string,string]',
		'id' => 'int',
		'logoPath' => 'string',
		'name' => 'map[string,string]',
		'productName' => 'map[string,string]'	);

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
	private $companyName;

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
	 * @var map[string,string]
	 */
	private $headquartersLocation;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var string
	 */
	private $logoPath;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $name;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $productName;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['companyName'])) {
			$this->setCompanyName($data['companyName']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['headquartersLocation'])) {
			$this->setHeadquartersLocation($data['headquartersLocation']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['productName'])) {
			$this->setProductName($data['productName']);
		}
	}


	/**
	 * Returns companyName.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getCompanyName() {
		return $this->companyName;
	}

	/**
	 * Sets companyName.
	 *
	 * @param map[string,string] $companyName
	 * @return PaymentProcessor
	 */
	public function setCompanyName($companyName) {
		$this->companyName = $companyName;

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
	 * @return PaymentProcessor
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
	 * @return PaymentProcessor
	 */
	protected function setFeature($feature) {
		$this->feature = $feature;

		return $this;
	}

	/**
	 * Returns headquartersLocation.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getHeadquartersLocation() {
		return $this->headquartersLocation;
	}

	/**
	 * Sets headquartersLocation.
	 *
	 * @param map[string,string] $headquartersLocation
	 * @return PaymentProcessor
	 */
	public function setHeadquartersLocation($headquartersLocation) {
		$this->headquartersLocation = $headquartersLocation;

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
	 * @return PaymentProcessor
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns logoPath.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getLogoPath() {
		return $this->logoPath;
	}

	/**
	 * Sets logoPath.
	 *
	 * @param string $logoPath
	 * @return PaymentProcessor
	 */
	protected function setLogoPath($logoPath) {
		$this->logoPath = $logoPath;

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
	 * @return PaymentProcessor
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns productName.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getProductName() {
		return $this->productName;
	}

	/**
	 * Sets productName.
	 *
	 * @param map[string,string] $productName
	 * @return PaymentProcessor
	 */
	public function setProductName($productName) {
		$this->productName = $productName;

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

