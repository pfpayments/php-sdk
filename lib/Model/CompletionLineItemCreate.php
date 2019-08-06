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
 * CompletionLineItemCreate model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class CompletionLineItemCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'CompletionLineItem.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'quantity' => 'float',
		'uniqueId' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The total amount of the line item including any tax.
	 *
	 * @var float
	 */
	private $amount;

	/**
	 * The quantity of the line item which should be completed.
	 *
	 * @var float
	 */
	private $quantity;

	/**
	 * The unique id identifies the line item on which the capture is applied on.
	 *
	 * @var string
	 */
	private $uniqueId;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['amount'])) {
			$this->setAmount($data['amount']);
		}
		if (isset($data['quantity'])) {
			$this->setQuantity($data['quantity']);
		}
		if (isset($data['uniqueId'])) {
			$this->setUniqueId($data['uniqueId']);
		}
	}


	/**
	 * Returns amount.
	 *
	 * The total amount of the line item including any tax.
	 *
	 * @return float
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets amount.
	 *
	 * @param float $amount
	 * @return CompletionLineItemCreate
	 */
	public function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns quantity.
	 *
	 * The quantity of the line item which should be completed.
	 *
	 * @return float
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * Sets quantity.
	 *
	 * @param float $quantity
	 * @return CompletionLineItemCreate
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;

		return $this;
	}

	/**
	 * Returns uniqueId.
	 *
	 * The unique id identifies the line item on which the capture is applied on.
	 *
	 * @return string
	 */
	public function getUniqueId() {
		return $this->uniqueId;
	}

	/**
	 * Sets uniqueId.
	 *
	 * @param string $uniqueId
	 * @return CompletionLineItemCreate
	 */
	public function setUniqueId($uniqueId) {
		$this->uniqueId = $uniqueId;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getAmount() === null) {
			throw new ValidationException("'amount' can't be null", 'amount', $this);
		}
		if ($this->getQuantity() === null) {
			throw new ValidationException("'quantity' can't be null", 'quantity', $this);
		}
		if ($this->getUniqueId() === null) {
			throw new ValidationException("'uniqueId' can't be null", 'uniqueId', $this);
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

