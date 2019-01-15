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
 * PaymentMethod model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentMethod  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentMethod';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'dataCollectionTypes' => '\PostFinanceCheckout\Sdk\Model\DataCollectionType[]',
		'description' => 'map[string,string]',
		'id' => 'int',
		'imagePath' => 'string',
		'merchantDescription' => 'map[string,string]',
		'name' => 'map[string,string]',
		'supportedCurrencies' => 'string[]'	);

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
	 * @var \PostFinanceCheckout\Sdk\Model\DataCollectionType[]
	 */
	private $dataCollectionTypes;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

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
	private $imagePath;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $merchantDescription;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $name;

	/**
	 * 
	 *
	 * @var string[]
	 */
	private $supportedCurrencies;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['dataCollectionTypes'])) {
			$this->setDataCollectionTypes($data['dataCollectionTypes']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['merchantDescription'])) {
			$this->setMerchantDescription($data['merchantDescription']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['supportedCurrencies'])) {
			$this->setSupportedCurrencies($data['supportedCurrencies']);
		}
	}


	/**
	 * Returns dataCollectionTypes.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DataCollectionType[]
	 */
	public function getDataCollectionTypes() {
		return $this->dataCollectionTypes;
	}

	/**
	 * Sets dataCollectionTypes.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DataCollectionType[] $dataCollectionTypes
	 * @return PaymentMethod
	 */
	public function setDataCollectionTypes($dataCollectionTypes) {
		$this->dataCollectionTypes = $dataCollectionTypes;

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
	 * @return PaymentMethod
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
	 * @return PaymentMethod
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns imagePath.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getImagePath() {
		return $this->imagePath;
	}

	/**
	 * Sets imagePath.
	 *
	 * @param string $imagePath
	 * @return PaymentMethod
	 */
	protected function setImagePath($imagePath) {
		$this->imagePath = $imagePath;

		return $this;
	}

	/**
	 * Returns merchantDescription.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getMerchantDescription() {
		return $this->merchantDescription;
	}

	/**
	 * Sets merchantDescription.
	 *
	 * @param map[string,string] $merchantDescription
	 * @return PaymentMethod
	 */
	public function setMerchantDescription($merchantDescription) {
		if (is_array($merchantDescription) && empty($merchantDescription)) {
			$this->merchantDescription = new \stdClass;
		} else {
			$this->merchantDescription = $merchantDescription;
		}

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
	 * @return PaymentMethod
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
	 * Returns supportedCurrencies.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getSupportedCurrencies() {
		return $this->supportedCurrencies;
	}

	/**
	 * Sets supportedCurrencies.
	 *
	 * @param string[] $supportedCurrencies
	 * @return PaymentMethod
	 */
	public function setSupportedCurrencies($supportedCurrencies) {
		$this->supportedCurrencies = $supportedCurrencies;

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

