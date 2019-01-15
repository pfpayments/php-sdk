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
 * PaymentMethodConfiguration model
 *
 * @category    Class
 * @description The payment method configuration builds the base to connect with different payment method connectors.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentMethodConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentMethodConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'dataCollectionType' => '\PostFinanceCheckout\Sdk\Model\DataCollectionType',
		'description' => '\PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString',
		'id' => 'int',
		'imageResourcePath' => '\PostFinanceCheckout\Sdk\Model\ModelResourcePath',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'oneClickPaymentMode' => '\PostFinanceCheckout\Sdk\Model\OneClickPaymentMode',
		'paymentMethod' => 'int',
		'plannedPurgeDate' => '\DateTime',
		'resolvedDescription' => 'map[string,string]',
		'resolvedImageUrl' => 'string',
		'resolvedTitle' => 'map[string,string]',
		'sortOrder' => 'int',
		'spaceId' => 'int',
		'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
		'title' => '\PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString',
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
	 * The data collection type determines who is collecting the payment information. This can be done either by the processor (offsite) or by our application (onsite).
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\DataCollectionType
	 */
	private $dataCollectionType;

	/**
	 * The payment method configuration description can be used to show a text during the payment process. Choose an appropriate description as it will be displayed to your customer.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The image of the payment method configuration overrides the default image of the payment method.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\ModelResourcePath
	 */
	private $imageResourcePath;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The payment method configuration name is used internally to identify the payment method configuration. For example the name is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * When the buyer is present on the payment page or within the iFrame the payment details can be stored automatically. The buyer will be able to use the stored payment details for subsequent transactions. When the transaction already contains a token one-click payments are disabled anyway
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\OneClickPaymentMode
	 */
	private $oneClickPaymentMode;

	/**
	 * 
	 *
	 * @var int
	 */
	private $paymentMethod;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The resolved description uses the specified description or the default one when it is not overridden.
	 *
	 * @var map[string,string]
	 */
	private $resolvedDescription;

	/**
	 * The resolved URL of the image to use with this payment method.
	 *
	 * @var string
	 */
	private $resolvedImageUrl;

	/**
	 * The resolved title uses the specified title or the default one when it is not overridden.
	 *
	 * @var map[string,string]
	 */
	private $resolvedTitle;

	/**
	 * The sort order of the payment method determines the ordering of the methods shown to the user during the payment process.
	 *
	 * @var int
	 */
	private $sortOrder;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceId;

	/**
	 * 
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The title of the payment method configuration is used within the payment process. The title is visible to the customer.
	 *
	 * @var \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString
	 */
	private $title;

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
		if (isset($data['dataCollectionType'])) {
			$this->setDataCollectionType($data['dataCollectionType']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['imageResourcePath'])) {
			$this->setImageResourcePath($data['imageResourcePath']);
		}
		if (isset($data['oneClickPaymentMode'])) {
			$this->setOneClickPaymentMode($data['oneClickPaymentMode']);
		}
		if (isset($data['resolvedDescription'])) {
			$this->setResolvedDescription($data['resolvedDescription']);
		}
		if (isset($data['resolvedTitle'])) {
			$this->setResolvedTitle($data['resolvedTitle']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['title'])) {
			$this->setTitle($data['title']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns dataCollectionType.
	 *
	 * The data collection type determines who is collecting the payment information. This can be done either by the processor (offsite) or by our application (onsite).
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DataCollectionType
	 */
	public function getDataCollectionType() {
		return $this->dataCollectionType;
	}

	/**
	 * Sets dataCollectionType.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DataCollectionType $dataCollectionType
	 * @return PaymentMethodConfiguration
	 */
	public function setDataCollectionType($dataCollectionType) {
		$this->dataCollectionType = $dataCollectionType;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The payment method configuration description can be used to show a text during the payment process. Choose an appropriate description as it will be displayed to your customer.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString $description
	 * @return PaymentMethodConfiguration
	 */
	public function setDescription($description) {
		$this->description = $description;

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
	 * @return PaymentMethodConfiguration
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns imageResourcePath.
	 *
	 * The image of the payment method configuration overrides the default image of the payment method.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\ModelResourcePath
	 */
	public function getImageResourcePath() {
		return $this->imageResourcePath;
	}

	/**
	 * Sets imageResourcePath.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\ModelResourcePath $imageResourcePath
	 * @return PaymentMethodConfiguration
	 */
	public function setImageResourcePath($imageResourcePath) {
		$this->imageResourcePath = $imageResourcePath;

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
	 * @return PaymentMethodConfiguration
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The payment method configuration name is used internally to identify the payment method configuration. For example the name is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param string $name
	 * @return PaymentMethodConfiguration
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns oneClickPaymentMode.
	 *
	 * When the buyer is present on the payment page or within the iFrame the payment details can be stored automatically. The buyer will be able to use the stored payment details for subsequent transactions. When the transaction already contains a token one-click payments are disabled anyway
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\OneClickPaymentMode
	 */
	public function getOneClickPaymentMode() {
		return $this->oneClickPaymentMode;
	}

	/**
	 * Sets oneClickPaymentMode.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\OneClickPaymentMode $oneClickPaymentMode
	 * @return PaymentMethodConfiguration
	 */
	public function setOneClickPaymentMode($oneClickPaymentMode) {
		$this->oneClickPaymentMode = $oneClickPaymentMode;

		return $this;
	}

	/**
	 * Returns paymentMethod.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * Sets paymentMethod.
	 *
	 * @param int $paymentMethod
	 * @return PaymentMethodConfiguration
	 */
	protected function setPaymentMethod($paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
	 * @return PaymentMethodConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns resolvedDescription.
	 *
	 * The resolved description uses the specified description or the default one when it is not overridden.
	 *
	 * @return map[string,string]
	 */
	public function getResolvedDescription() {
		return $this->resolvedDescription;
	}

	/**
	 * Sets resolvedDescription.
	 *
	 * @param map[string,string] $resolvedDescription
	 * @return PaymentMethodConfiguration
	 */
	public function setResolvedDescription($resolvedDescription) {
		if (is_array($resolvedDescription) && empty($resolvedDescription)) {
			$this->resolvedDescription = new \stdClass;
		} else {
			$this->resolvedDescription = $resolvedDescription;
		}

		return $this;
	}

	/**
	 * Returns resolvedImageUrl.
	 *
	 * The resolved URL of the image to use with this payment method.
	 *
	 * @return string
	 */
	public function getResolvedImageUrl() {
		return $this->resolvedImageUrl;
	}

	/**
	 * Sets resolvedImageUrl.
	 *
	 * @param string $resolvedImageUrl
	 * @return PaymentMethodConfiguration
	 */
	protected function setResolvedImageUrl($resolvedImageUrl) {
		$this->resolvedImageUrl = $resolvedImageUrl;

		return $this;
	}

	/**
	 * Returns resolvedTitle.
	 *
	 * The resolved title uses the specified title or the default one when it is not overridden.
	 *
	 * @return map[string,string]
	 */
	public function getResolvedTitle() {
		return $this->resolvedTitle;
	}

	/**
	 * Sets resolvedTitle.
	 *
	 * @param map[string,string] $resolvedTitle
	 * @return PaymentMethodConfiguration
	 */
	public function setResolvedTitle($resolvedTitle) {
		if (is_array($resolvedTitle) && empty($resolvedTitle)) {
			$this->resolvedTitle = new \stdClass;
		} else {
			$this->resolvedTitle = $resolvedTitle;
		}

		return $this;
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order of the payment method determines the ordering of the methods shown to the user during the payment process.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return $this->sortOrder;
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return PaymentMethodConfiguration
	 */
	protected function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

		return $this;
	}

	/**
	 * Returns spaceId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSpaceId() {
		return $this->spaceId;
	}

	/**
	 * Sets spaceId.
	 *
	 * @param int $spaceId
	 * @return PaymentMethodConfiguration
	 */
	protected function setSpaceId($spaceId) {
		$this->spaceId = $spaceId;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState $state
	 * @return PaymentMethodConfiguration
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns title.
	 *
	 * The title of the payment method configuration is used within the payment process. The title is visible to the customer.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets title.
	 *
	 * @param \PostFinanceCheckout\Sdk\Model\DatabaseTranslatedString $title
	 * @return PaymentMethodConfiguration
	 */
	public function setTitle($title) {
		$this->title = $title;

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
	 * @return PaymentMethodConfiguration
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

