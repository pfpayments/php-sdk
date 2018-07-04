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
 * LineItemReduction model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LineItemReduction  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LineItemReduction';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'lineItemUniqueId' => 'string',
		'quantityReduction' => 'float',
		'unitPriceReduction' => 'float'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The unique id identifies the line item on which the reduction is applied on.
	 *
	 * @var string
	 */
	private $lineItemUniqueId;

	/**
	 * 
	 *
	 * @var float
	 */
	private $quantityReduction;

	/**
	 * 
	 *
	 * @var float
	 */
	private $unitPriceReduction;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
	}


	/**
	 * Returns lineItemUniqueId.
	 *
	 * The unique id identifies the line item on which the reduction is applied on.
	 *
	 * @return string
	 */
	public function getLineItemUniqueId() {
		return $this->lineItemUniqueId;
	}

	/**
	 * Sets lineItemUniqueId.
	 *
	 * @param string $lineItemUniqueId
	 * @return LineItemReduction
	 */
	protected function setLineItemUniqueId($lineItemUniqueId) {
		$this->lineItemUniqueId = $lineItemUniqueId;

		return $this;
	}

	/**
	 * Returns quantityReduction.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getQuantityReduction() {
		return $this->quantityReduction;
	}

	/**
	 * Sets quantityReduction.
	 *
	 * @param float $quantityReduction
	 * @return LineItemReduction
	 */
	protected function setQuantityReduction($quantityReduction) {
		$this->quantityReduction = $quantityReduction;

		return $this;
	}

	/**
	 * Returns unitPriceReduction.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUnitPriceReduction() {
		return $this->unitPriceReduction;
	}

	/**
	 * Sets unitPriceReduction.
	 *
	 * @param float $unitPriceReduction
	 * @return LineItemReduction
	 */
	protected function setUnitPriceReduction($unitPriceReduction) {
		$this->unitPriceReduction = $unitPriceReduction;

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

