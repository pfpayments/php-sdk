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
 * TransactionLineItemUpdateRequest model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionLineItemUpdateRequest  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionLineItemUpdateRequest';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'newLineItems' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
		'transactionId' => 'int'	);

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
	 * @var \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
	 */
	private $newLineItems;

	/**
	 * 
	 *
	 * @var int
	 */
	private $transactionId;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['newLineItems'])) {
			$this->setNewLineItems($data['newLineItems']);
		}
		if (isset($data['transactionId'])) {
			$this->setTransactionId($data['transactionId']);
		}
	}


	/**
	 * Returns newLineItems.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
	 */
	public function getNewLineItems() {
		return $this->newLineItems;
	}

	/**
	 * Sets newLineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[] $newLineItems
	 * @return TransactionLineItemUpdateRequest
	 */
	public function setNewLineItems($newLineItems) {
		$this->newLineItems = $newLineItems;

		return $this;
	}

	/**
	 * Returns transactionId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTransactionId() {
		return $this->transactionId;
	}

	/**
	 * Sets transactionId.
	 *
	 * @param int $transactionId
	 * @return TransactionLineItemUpdateRequest
	 */
	public function setTransactionId($transactionId) {
		$this->transactionId = $transactionId;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getTransactionId() === null) {
			throw new ValidationException("'transactionId' can't be null", 'transactionId', $this);
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

