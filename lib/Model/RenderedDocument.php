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
 * RenderedDocument model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RenderedDocument  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'RenderedDocument';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'data' => 'string',
		'documentTemplateType' => 'int',
		'mimeType' => 'string',
		'title' => 'string'	);

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
	private $data;

	/**
	 * 
	 *
	 * @var int
	 */
	private $documentTemplateType;

	/**
	 * 
	 *
	 * @var string
	 */
	private $mimeType;

	/**
	 * 
	 *
	 * @var string
	 */
	private $title;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['data'])) {
			$this->setData($data['data']);
		}
	}


	/**
	 * Returns data.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Sets data.
	 *
	 * @param string $data
	 * @return RenderedDocument
	 */
	public function setData($data) {
		$this->data = $data;

		return $this;
	}

	/**
	 * Returns documentTemplateType.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getDocumentTemplateType() {
		return $this->documentTemplateType;
	}

	/**
	 * Sets documentTemplateType.
	 *
	 * @param int $documentTemplateType
	 * @return RenderedDocument
	 */
	protected function setDocumentTemplateType($documentTemplateType) {
		$this->documentTemplateType = $documentTemplateType;

		return $this;
	}

	/**
	 * Returns mimeType.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMimeType() {
		return $this->mimeType;
	}

	/**
	 * Sets mimeType.
	 *
	 * @param string $mimeType
	 * @return RenderedDocument
	 */
	protected function setMimeType($mimeType) {
		$this->mimeType = $mimeType;

		return $this;
	}

	/**
	 * Returns title.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets title.
	 *
	 * @param string $title
	 * @return RenderedDocument
	 */
	protected function setTitle($title) {
		$this->title = $title;

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

