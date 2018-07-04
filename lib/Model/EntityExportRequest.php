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
 * EntityExportRequest model
 *
 * @category    Class
 * @description The entity property export request contains the information required to create an export of a list of entities.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class EntityExportRequest  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EntityExportRequest';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'properties' => 'string[]',
		'query' => '\PostFinanceCheckout\Sdk\Model\EntityQuery'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The properties is a list of property paths which should be exported.
	 *
	 * @var string[]
	 */
	private $properties;

	/**
	 * The query limits the returned entries. The query allows to restrict the entries to return and it allows to control the order of them.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\EntityQuery
	 */
	private $query;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['properties'])) {
			$this->setProperties($data['properties']);
		}
		if (isset($data['query'])) {
			$this->setQuery($data['query']);
		}
	}


	/**
	 * Returns properties.
	 *
	 * The properties is a list of property paths which should be exported.
	 *
	 * @return string[]
	 */
	public function getProperties() {
		return $this->properties;
	}

	/**
	 * Sets properties.
	 *
	 * @param string[] $properties
	 * @return EntityExportRequest
	 */
	public function setProperties($properties) {
		$this->properties = $properties;

		return $this;
	}

	/**
	 * Returns query.
	 *
	 * The query limits the returned entries. The query allows to restrict the entries to return and it allows to control the order of them.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\EntityQuery
	 */
	public function getQuery() {
		return $this->query;
	}

	/**
	 * Sets query.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\EntityQuery $query
	 * @return EntityExportRequest
	 */
	public function setQuery($query) {
		$this->query = $query;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getProperties() === null) {
			throw new ValidationException("'properties' can't be null", 'properties', $this);
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

