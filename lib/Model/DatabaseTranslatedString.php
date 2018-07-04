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
 * DatabaseTranslatedString model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DatabaseTranslatedString  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'DatabaseTranslatedString';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'availableLanguages' => 'string[]',
		'displayName' => 'string',
		'items' => '\PostFinanceCheckout\Sdk\Model\DatabaseTranslatedStringItem[]'	);

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
	 * @var string[]
	 */
	private $availableLanguages;

	/**
	 * 
	 *
	 * @var string
	 */
	private $displayName;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedStringItem[]
	 */
	private $items;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['availableLanguages'])) {
			$this->setAvailableLanguages($data['availableLanguages']);
		}
		if (isset($data['items'])) {
			$this->setItems($data['items']);
		}
	}


	/**
	 * Returns availableLanguages.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getAvailableLanguages() {
		return $this->availableLanguages;
	}

	/**
	 * Sets availableLanguages.
	 *
	 * @param string[] $availableLanguages
	 * @return DatabaseTranslatedString
	 */
	public function setAvailableLanguages($availableLanguages) {
		$this->availableLanguages = $availableLanguages;

		return $this;
	}

	/**
	 * Returns displayName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDisplayName() {
		return $this->displayName;
	}

	/**
	 * Sets displayName.
	 *
	 * @param string $displayName
	 * @return DatabaseTranslatedString
	 */
	protected function setDisplayName($displayName) {
		$this->displayName = $displayName;

		return $this;
	}

	/**
	 * Returns items.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedStringItem[]
	 */
	public function getItems() {
		return $this->items;
	}

	/**
	 * Sets items.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedStringItem[] $items
	 * @return DatabaseTranslatedString
	 */
	public function setItems($items) {
		$this->items = $items;

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

