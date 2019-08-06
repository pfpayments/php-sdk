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
 * TransactionComment model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionComment  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionComment';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'content' => 'string',
		'createdBy' => 'int',
		'createdOn' => '\DateTime',
		'editedBy' => 'int',
		'editedOn' => '\DateTime',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'pinned' => 'bool',
		'transaction' => 'int',
		'version' => 'int'	);

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
	private $content;

	/**
	 * 
	 *
	 * @var int
	 */
	private $createdBy;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $editedBy;

	/**
	 * The date on which the comment was last edited.
	 *
	 * @var \DateTime
	 */
	private $editedOn;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $pinned;

	/**
	 * 
	 *
	 * @var int
	 */
	private $transaction;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns content.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Sets content.
	 *
	 * @param string $content
	 * @return TransactionComment
	 */
	protected function setContent($content) {
		$this->content = $content;

		return $this;
	}

	/**
	 * Returns createdBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Sets createdBy.
	 *
	 * @param int $createdBy
	 * @return TransactionComment
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
	 * @return TransactionComment
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns editedBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getEditedBy() {
		return $this->editedBy;
	}

	/**
	 * Sets editedBy.
	 *
	 * @param int $editedBy
	 * @return TransactionComment
	 */
	protected function setEditedBy($editedBy) {
		$this->editedBy = $editedBy;

		return $this;
	}

	/**
	 * Returns editedOn.
	 *
	 * The date on which the comment was last edited.
	 *
	 * @return \DateTime
	 */
	public function getEditedOn() {
		return $this->editedOn;
	}

	/**
	 * Sets editedOn.
	 *
	 * @param \DateTime $editedOn
	 * @return TransactionComment
	 */
	protected function setEditedOn($editedOn) {
		$this->editedOn = $editedOn;

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
	 * @return TransactionComment
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
	 * @return TransactionComment
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns pinned.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getPinned() {
		return $this->pinned;
	}

	/**
	 * Sets pinned.
	 *
	 * @param bool $pinned
	 * @return TransactionComment
	 */
	protected function setPinned($pinned) {
		$this->pinned = $pinned;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTransaction() {
		return $this->transaction;
	}

	/**
	 * Sets transaction.
	 *
	 * @param int $transaction
	 * @return TransactionComment
	 */
	protected function setTransaction($transaction) {
		$this->transaction = $transaction;

		return $this;
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return TransactionComment
	 */
	public function setVersion($version) {
		$this->version = $version;

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

