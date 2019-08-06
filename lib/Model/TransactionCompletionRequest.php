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
 * TransactionCompletionRequest model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionCompletionRequest  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionCompletionRequest';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'externalId' => 'string',
		'lastCompletion' => 'bool',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\CompletionLineItemCreate[]',
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
	 * The external ID helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The last completion flag indicates if this is the last completion. After the last completion is created no further completions can be issued.
	 *
	 * @var bool
	 */
	private $lastCompletion;

	/**
	 * The line items which will be used to complete the transaction.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CompletionLineItemCreate[]
	 */
	private $lineItems;

	/**
	 * The ID of the transaction which should be completed.
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
		if (isset($data['externalId'])) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['lastCompletion'])) {
			$this->setLastCompletion($data['lastCompletion']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['transactionId'])) {
			$this->setTransactionId($data['transactionId']);
		}
	}


	/**
	 * Returns externalId.
	 *
	 * The external ID helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return TransactionCompletionRequest
	 */
	public function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns lastCompletion.
	 *
	 * The last completion flag indicates if this is the last completion. After the last completion is created no further completions can be issued.
	 *
	 * @return bool
	 */
	public function getLastCompletion() {
		return $this->lastCompletion;
	}

	/**
	 * Sets lastCompletion.
	 *
	 * @param bool $lastCompletion
	 * @return TransactionCompletionRequest
	 */
	public function setLastCompletion($lastCompletion) {
		$this->lastCompletion = $lastCompletion;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * The line items which will be used to complete the transaction.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\CompletionLineItemCreate[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\CompletionLineItemCreate[] $lineItems
	 * @return TransactionCompletionRequest
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns transactionId.
	 *
	 * The ID of the transaction which should be completed.
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
	 * @return TransactionCompletionRequest
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

		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
		}
		if ($this->getLastCompletion() === null) {
			throw new ValidationException("'lastCompletion' can't be null", 'lastCompletion', $this);
		}
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

