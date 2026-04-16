<?php
/**
 * PostFinance PHP SDK
 *
 * This library allows to interact with the PostFinance payment service.
 *
 * Copyright owner: Wallee AG
 * Website: https://www.postfinance.ch/en/private.html
 * Developer email: ecosystem-team@wallee.com
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

use \ArrayAccess;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * PaymentMethodConfiguration model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_collection_type' => '\PostFinanceCheckout\Sdk\Model\DataCollectionType',
        'planned_purge_date' => '\DateTime',
        'description' => 'array<string,string>',
        'resolved_image_url' => 'string',
        'one_click_payment_mode' => '\PostFinanceCheckout\Sdk\Model\OneClickPaymentMode',
        'title' => 'array<string,string>',
        'version' => 'int',
        'linked_space_id' => 'int',
        'space_id' => 'int',
        'image_resource_path' => 'string',
        'sort_order' => 'int',
        'name' => 'string',
        'resolved_description' => 'array<string,string>',
        'resolved_title' => 'array<string,string>',
        'payment_method' => '\PostFinanceCheckout\Sdk\Model\PaymentMethod',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_collection_type' => null,
        'planned_purge_date' => 'date-time',
        'description' => null,
        'resolved_image_url' => null,
        'one_click_payment_mode' => null,
        'title' => null,
        'version' => 'int32',
        'linked_space_id' => 'int64',
        'space_id' => 'int64',
        'image_resource_path' => null,
        'sort_order' => 'int32',
        'name' => null,
        'resolved_description' => null,
        'resolved_title' => null,
        'payment_method' => null,
        'id' => 'int64',
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'data_collection_type' => false,
        'planned_purge_date' => false,
        'description' => false,
        'resolved_image_url' => false,
        'one_click_payment_mode' => false,
        'title' => false,
        'version' => false,
        'linked_space_id' => false,
        'space_id' => false,
        'image_resource_path' => false,
        'sort_order' => false,
        'name' => false,
        'resolved_description' => false,
        'resolved_title' => false,
        'payment_method' => false,
        'id' => false,
        'state' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'data_collection_type' => 'dataCollectionType',
        'planned_purge_date' => 'plannedPurgeDate',
        'description' => 'description',
        'resolved_image_url' => 'resolvedImageUrl',
        'one_click_payment_mode' => 'oneClickPaymentMode',
        'title' => 'title',
        'version' => 'version',
        'linked_space_id' => 'linkedSpaceId',
        'space_id' => 'spaceId',
        'image_resource_path' => 'imageResourcePath',
        'sort_order' => 'sortOrder',
        'name' => 'name',
        'resolved_description' => 'resolvedDescription',
        'resolved_title' => 'resolvedTitle',
        'payment_method' => 'paymentMethod',
        'id' => 'id',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_collection_type' => 'setDataCollectionType',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'description' => 'setDescription',
        'resolved_image_url' => 'setResolvedImageUrl',
        'one_click_payment_mode' => 'setOneClickPaymentMode',
        'title' => 'setTitle',
        'version' => 'setVersion',
        'linked_space_id' => 'setLinkedSpaceId',
        'space_id' => 'setSpaceId',
        'image_resource_path' => 'setImageResourcePath',
        'sort_order' => 'setSortOrder',
        'name' => 'setName',
        'resolved_description' => 'setResolvedDescription',
        'resolved_title' => 'setResolvedTitle',
        'payment_method' => 'setPaymentMethod',
        'id' => 'setId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_collection_type' => 'getDataCollectionType',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'description' => 'getDescription',
        'resolved_image_url' => 'getResolvedImageUrl',
        'one_click_payment_mode' => 'getOneClickPaymentMode',
        'title' => 'getTitle',
        'version' => 'getVersion',
        'linked_space_id' => 'getLinkedSpaceId',
        'space_id' => 'getSpaceId',
        'image_resource_path' => 'getImageResourcePath',
        'sort_order' => 'getSortOrder',
        'name' => 'getName',
        'resolved_description' => 'getResolvedDescription',
        'resolved_title' => 'getResolvedTitle',
        'payment_method' => 'getPaymentMethod',
        'id' => 'getId',
        'state' => 'getState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('data_collection_type', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('resolved_image_url', $data ?? [], null);
        $this->setIfExists('one_click_payment_mode', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('space_id', $data ?? [], null);
        $this->setIfExists('image_resource_path', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('resolved_description', $data ?? [], null);
        $this->setIfExists('resolved_title', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['space_id']) && ($this->container['space_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'space_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets data_collection_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\DataCollectionType|null
     */
    public function getDataCollectionType()
    {
        return $this->container['data_collection_type'];
    }

    /**
     * Sets data_collection_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\DataCollectionType|null $data_collection_type data_collection_type
     *
     * @return self
     */
    public function setDataCollectionType($data_collection_type)
    {
        if (is_null($data_collection_type)) {
            throw new \InvalidArgumentException('non-nullable data_collection_type cannot be null');
        }
        $this->container['data_collection_type'] = $data_collection_type;

        return $this;
    }

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime|null
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime|null $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return self
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        if (is_null($planned_purge_date)) {
            throw new \InvalidArgumentException('non-nullable planned_purge_date cannot be null');
        }
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return array<string,string>|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param array<string,string>|null $description A customer-facing custom description for the payment method.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets resolved_image_url
     *
     * @return string|null
     */
    public function getResolvedImageUrl()
    {
        return $this->container['resolved_image_url'];
    }

    /**
     * Sets resolved_image_url
     *
     * @param string|null $resolved_image_url The URL to the image of the payment method displayed to the customer. If a custom image is defined, it will be used; otherwise, the default image of the payment method will be shown.
     *
     * @return self
     */
    public function setResolvedImageUrl($resolved_image_url)
    {
        if (is_null($resolved_image_url)) {
            throw new \InvalidArgumentException('non-nullable resolved_image_url cannot be null');
        }
        $this->container['resolved_image_url'] = $resolved_image_url;

        return $this;
    }

    /**
     * Gets one_click_payment_mode
     *
     * @return \PostFinanceCheckout\Sdk\Model\OneClickPaymentMode|null
     */
    public function getOneClickPaymentMode()
    {
        return $this->container['one_click_payment_mode'];
    }

    /**
     * Sets one_click_payment_mode
     *
     * @param \PostFinanceCheckout\Sdk\Model\OneClickPaymentMode|null $one_click_payment_mode one_click_payment_mode
     *
     * @return self
     */
    public function setOneClickPaymentMode($one_click_payment_mode)
    {
        if (is_null($one_click_payment_mode)) {
            throw new \InvalidArgumentException('non-nullable one_click_payment_mode cannot be null');
        }
        $this->container['one_click_payment_mode'] = $one_click_payment_mode;

        return $this;
    }

    /**
     * Gets title
     *
     * @return array<string,string>|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param array<string,string>|null $title A customer-facing custom title for the payment method.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets linked_space_id
     *
     * @return int|null
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int|null $linked_space_id The ID of the space this object belongs to.
     *
     * @return self
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        if (is_null($linked_space_id)) {
            throw new \InvalidArgumentException('non-nullable linked_space_id cannot be null');
        }
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }

    /**
     * Gets space_id
     *
     * @return int|null
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param int|null $space_id The ID of the space this object belongs to.
     *
     * @return self
     */
    public function setSpaceId($space_id)
    {
        if (is_null($space_id)) {
            throw new \InvalidArgumentException('non-nullable space_id cannot be null');
        }

        if (($space_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $space_id when calling PaymentMethodConfiguration., must be bigger than or equal to 1.');
        }

        $this->container['space_id'] = $space_id;

        return $this;
    }

    /**
     * Gets image_resource_path
     *
     * @return string|null
     */
    public function getImageResourcePath()
    {
        return $this->container['image_resource_path'];
    }

    /**
     * Sets image_resource_path
     *
     * @param string|null $image_resource_path The resource path to a custom image for the payment method, displayed to the customer for visual identification.
     *
     * @return self
     */
    public function setImageResourcePath($image_resource_path)
    {
        if (is_null($image_resource_path)) {
            throw new \InvalidArgumentException('non-nullable image_resource_path cannot be null');
        }
        $this->container['image_resource_path'] = $image_resource_path;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int|null $sort_order When listing payment methods, they can be sorted by this number.
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        if (is_null($sort_order)) {
            throw new \InvalidArgumentException('non-nullable sort_order cannot be null');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name used to identify the payment method configuration.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentMethodConfiguration., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets resolved_description
     *
     * @return array<string,string>|null
     */
    public function getResolvedDescription()
    {
        return $this->container['resolved_description'];
    }

    /**
     * Sets resolved_description
     *
     * @param array<string,string>|null $resolved_description The description of the payment method displayed to the customer. If a custom description is defined, it will be used; otherwise, the default description of the payment method will be shown.
     *
     * @return self
     */
    public function setResolvedDescription($resolved_description)
    {
        if (is_null($resolved_description)) {
            throw new \InvalidArgumentException('non-nullable resolved_description cannot be null');
        }
        $this->container['resolved_description'] = $resolved_description;

        return $this;
    }

    /**
     * Gets resolved_title
     *
     * @return array<string,string>|null
     */
    public function getResolvedTitle()
    {
        return $this->container['resolved_title'];
    }

    /**
     * Sets resolved_title
     *
     * @param array<string,string>|null $resolved_title The title of the payment method displayed to the customer. If a custom title is defined, it will be used; otherwise, the default title of the payment method will be shown.
     *
     * @return self
     */
    public function setResolvedTitle($resolved_title)
    {
        if (is_null($resolved_title)) {
            throw new \InvalidArgumentException('non-nullable resolved_title cannot be null');
        }
        $this->container['resolved_title'] = $resolved_title;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id A unique identifier for the object.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


