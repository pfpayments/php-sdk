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
 * EntityQuery model
 *
 * @category    Class
 * @description The entity query allows to search for specific entities by providing filters. This is similar to a SQL query.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class EntityQuery  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EntityQuery';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'filter' => '\PostFinanceCheckout\Sdk\Model\EntityQueryFilter',
		'language' => 'string',
		'numberOfEntities' => 'int',
		'orderBys' => '\PostFinanceCheckout\Sdk\Model\EntityQueryOrderBy[]',
		'startingEntity' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The filter node defines the root filter node of the query. The root node may contain multiple sub nodes with different filters in it.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\EntityQueryFilter
	 */
	private $filter;

	/**
	 * The language is applied to the ordering of the entities returned. Some entity fields are language dependent and hence the language is required to order them.
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The number of entities defines how many entities should be returned. There is a maximum of 100 entities.
	 *
	 * @var int
	 */
	private $numberOfEntities;

	/**
	 * The order bys allows to define the ordering of the entities returned by the search.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\EntityQueryOrderBy[]
	 */
	private $orderBys;

	/**
	 * The 'starting entity' defines the entity number at which the returned result should start. The entity number is the consecutive number of the entity as returned and it is not the entity id.
	 *
	 * @var int
	 */
	private $startingEntity;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['filter'])) {
			$this->setFilter($data['filter']);
		}
		if (isset($data['language'])) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['numberOfEntities'])) {
			$this->setNumberOfEntities($data['numberOfEntities']);
		}
		if (isset($data['orderBys'])) {
			$this->setOrderBys($data['orderBys']);
		}
		if (isset($data['startingEntity'])) {
			$this->setStartingEntity($data['startingEntity']);
		}
	}


	/**
	 * Returns filter.
	 *
	 * The filter node defines the root filter node of the query. The root node may contain multiple sub nodes with different filters in it.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\EntityQueryFilter
	 */
	public function getFilter() {
		return $this->filter;
	}

	/**
	 * Sets filter.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\EntityQueryFilter $filter
	 * @return EntityQuery
	 */
	public function setFilter($filter) {
		$this->filter = $filter;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The language is applied to the ordering of the entities returned. Some entity fields are language dependent and hence the language is required to order them.
	 *
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return EntityQuery
	 */
	public function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns numberOfEntities.
	 *
	 * The number of entities defines how many entities should be returned. There is a maximum of 100 entities.
	 *
	 * @return int
	 */
	public function getNumberOfEntities() {
		return $this->numberOfEntities;
	}

	/**
	 * Sets numberOfEntities.
	 *
	 * @param int $numberOfEntities
	 * @return EntityQuery
	 */
	public function setNumberOfEntities($numberOfEntities) {
		$this->numberOfEntities = $numberOfEntities;

		return $this;
	}

	/**
	 * Returns orderBys.
	 *
	 * The order bys allows to define the ordering of the entities returned by the search.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\EntityQueryOrderBy[]
	 */
	public function getOrderBys() {
		return $this->orderBys;
	}

	/**
	 * Sets orderBys.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\EntityQueryOrderBy[] $orderBys
	 * @return EntityQuery
	 */
	public function setOrderBys($orderBys) {
		$this->orderBys = $orderBys;

		return $this;
	}

	/**
	 * Returns startingEntity.
	 *
	 * The 'starting entity' defines the entity number at which the returned result should start. The entity number is the consecutive number of the entity as returned and it is not the entity id.
	 *
	 * @return int
	 */
	public function getStartingEntity() {
		return $this->startingEntity;
	}

	/**
	 * Sets startingEntity.
	 *
	 * @param int $startingEntity
	 * @return EntityQuery
	 */
	public function setStartingEntity($startingEntity) {
		$this->startingEntity = $startingEntity;

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

