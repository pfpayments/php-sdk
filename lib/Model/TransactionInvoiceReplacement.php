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
 * TransactionInvoiceReplacement model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionInvoiceReplacement  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionInvoiceReplacement';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'billingAddress' => '\PostFinanceCheckout\Sdk\Model\AddressCreate',
		'dueOn' => '\DateTime',
		'externalId' => 'string',
		'lineItems' => '\PostFinanceCheckout\Sdk\Model\LineItemCreate[]',
		'merchantReference' => 'string',
		'sentToCustomer' => 'bool'	);

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
	 * @var \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	private $billingAddress;

	/**
	 * The date on which the invoice should be paid on.
	 *
	 * @var \DateTime
	 */
	private $dueOn;

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
	 */
	private $lineItems;

	/**
	 * 
	 *
	 * @var string
	 */
	private $merchantReference;

	/**
	 * When the connector is configured to send the invoice to the customer and this property is true the customer will receive an email with the updated invoice. When this property is false no invoice is sent.
	 *
	 * @var bool
	 */
	private $sentToCustomer;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['dueOn'])) {
			$this->setDueOn($data['dueOn']);
		}
		if (isset($data['externalId'])) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['merchantReference'])) {
			$this->setMerchantReference($data['merchantReference']);
		}
		if (isset($data['sentToCustomer'])) {
			$this->setSentToCustomer($data['sentToCustomer']);
		}
	}


	/**
	 * Returns billingAddress.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\AddressCreate
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\AddressCreate $billingAddress
	 * @return TransactionInvoiceReplacement
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns dueOn.
	 *
	 * The date on which the invoice should be paid on.
	 *
	 * @return \DateTime
	 */
	public function getDueOn() {
		return $this->dueOn;
	}

	/**
	 * Sets dueOn.
	 *
	 * @param \DateTime $dueOn
	 * @return TransactionInvoiceReplacement
	 */
	public function setDueOn($dueOn) {
		$this->dueOn = $dueOn;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
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
	 * @return TransactionInvoiceReplacement
	 */
	public function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LineItemCreate[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\LineItemCreate[] $lineItems
	 * @return TransactionInvoiceReplacement
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns merchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMerchantReference() {
		return $this->merchantReference;
	}

	/**
	 * Sets merchantReference.
	 *
	 * @param string $merchantReference
	 * @return TransactionInvoiceReplacement
	 */
	public function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

		return $this;
	}

	/**
	 * Returns sentToCustomer.
	 *
	 * When the connector is configured to send the invoice to the customer and this property is true the customer will receive an email with the updated invoice. When this property is false no invoice is sent.
	 *
	 * @return bool
	 */
	public function getSentToCustomer() {
		return $this->sentToCustomer;
	}

	/**
	 * Sets sentToCustomer.
	 *
	 * @param bool $sentToCustomer
	 * @return TransactionInvoiceReplacement
	 */
	public function setSentToCustomer($sentToCustomer) {
		$this->sentToCustomer = $sentToCustomer;

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
		if ($this->getLineItems() === null) {
			throw new ValidationException("'lineItems' can't be null", 'lineItems', $this);
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

