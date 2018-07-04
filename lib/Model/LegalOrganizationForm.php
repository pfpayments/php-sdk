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
 * LegalOrganizationForm model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LegalOrganizationForm  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LegalOrganizationForm';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'country' => 'string',
		'description' => '\PostFinanceCheckout\Sdk\Model\LocalizedString[]',
		'englishDescription' => 'string',
		'id' => 'int',
		'shortcut' => '\PostFinanceCheckout\Sdk\Model\LocalizedString[]'	);

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
	private $country;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LocalizedString[]
	 */
	private $description;

	/**
	 * 
	 *
	 * @var string
	 */
	private $englishDescription;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LocalizedString[]
	 */
	private $shortcut;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['shortcut'])) {
			$this->setShortcut($data['shortcut']);
		}
	}


	/**
	 * Returns country.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets country.
	 *
	 * @param string $country
	 * @return LegalOrganizationForm
	 */
	protected function setCountry($country) {
		$this->country = $country;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LocalizedString[]
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LocalizedString[] $description
	 * @return LegalOrganizationForm
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns englishDescription.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getEnglishDescription() {
		return $this->englishDescription;
	}

	/**
	 * Sets englishDescription.
	 *
	 * @param string $englishDescription
	 * @return LegalOrganizationForm
	 */
	protected function setEnglishDescription($englishDescription) {
		$this->englishDescription = $englishDescription;

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
	 * @return LegalOrganizationForm
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns shortcut.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LocalizedString[]
	 */
	public function getShortcut() {
		return $this->shortcut;
	}

	/**
	 * Sets shortcut.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LocalizedString[] $shortcut
	 * @return LegalOrganizationForm
	 */
	public function setShortcut($shortcut) {
		$this->shortcut = $shortcut;

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

