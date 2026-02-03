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
 * SubscriptionProduct model
 *
 * @category Class
 * @description A subscription product represents a product to which a subscriber can subscribe to. A product defines how much the subscription costs and in what cycles the subscribe is charged.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionProduct implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference' => 'string',
        'linked_space_id' => 'int',
        'space_id' => 'int',
        'sort_order' => 'int',
        'name' => 'string',
        'planned_purge_date' => '\DateTime',
        'product_locked' => 'bool',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\SubscriptionProductState',
        'failed_payment_suspension_period' => 'string',
        'version' => 'int',
        'allowed_payment_method_configurations' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference' => null,
        'linked_space_id' => 'int64',
        'space_id' => 'int64',
        'sort_order' => 'int32',
        'name' => null,
        'planned_purge_date' => 'date-time',
        'product_locked' => null,
        'id' => 'int64',
        'state' => null,
        'failed_payment_suspension_period' => null,
        'version' => 'int32',
        'allowed_payment_method_configurations' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference' => false,
        'linked_space_id' => false,
        'space_id' => false,
        'sort_order' => false,
        'name' => false,
        'planned_purge_date' => false,
        'product_locked' => false,
        'id' => false,
        'state' => false,
        'failed_payment_suspension_period' => false,
        'version' => false,
        'allowed_payment_method_configurations' => false
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
        'reference' => 'reference',
        'linked_space_id' => 'linkedSpaceId',
        'space_id' => 'spaceId',
        'sort_order' => 'sortOrder',
        'name' => 'name',
        'planned_purge_date' => 'plannedPurgeDate',
        'product_locked' => 'productLocked',
        'id' => 'id',
        'state' => 'state',
        'failed_payment_suspension_period' => 'failedPaymentSuspensionPeriod',
        'version' => 'version',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'linked_space_id' => 'setLinkedSpaceId',
        'space_id' => 'setSpaceId',
        'sort_order' => 'setSortOrder',
        'name' => 'setName',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'product_locked' => 'setProductLocked',
        'id' => 'setId',
        'state' => 'setState',
        'failed_payment_suspension_period' => 'setFailedPaymentSuspensionPeriod',
        'version' => 'setVersion',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'linked_space_id' => 'getLinkedSpaceId',
        'space_id' => 'getSpaceId',
        'sort_order' => 'getSortOrder',
        'name' => 'getName',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'product_locked' => 'getProductLocked',
        'id' => 'getId',
        'state' => 'getState',
        'failed_payment_suspension_period' => 'getFailedPaymentSuspensionPeriod',
        'version' => 'getVersion',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations'
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
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('space_id', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('product_locked', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('failed_payment_suspension_period', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_configurations', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['reference'])) {
            $invalidProperties[] = "invalid value for 'reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
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
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The merchant's reference used to identify the product, e.g. the SKU.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionProduct., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($reference)))) {
            throw new \InvalidArgumentException("invalid value for \$reference when calling SubscriptionProduct., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['reference'] = $reference;

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
        $this->container['space_id'] = $space_id;

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
     * @param int|null $sort_order When listing products, they can be sorted by this number.
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
     * @param string|null $name The name used to identify the product.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SubscriptionProduct., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

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
     * Gets product_locked
     *
     * @return bool|null
     */
    public function getProductLocked()
    {
        return $this->container['product_locked'];
    }

    /**
     * Sets product_locked
     *
     * @param bool|null $product_locked Whether subscriptions can be switched to or from this product, or whether they are locked in.
     *
     * @return self
     */
    public function setProductLocked($product_locked)
    {
        if (is_null($product_locked)) {
            throw new \InvalidArgumentException('non-nullable product_locked cannot be null');
        }
        $this->container['product_locked'] = $product_locked;

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
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionProductState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionProductState|null $state state
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
     * Gets failed_payment_suspension_period
     *
     * @return string|null
     */
    public function getFailedPaymentSuspensionPeriod()
    {
        return $this->container['failed_payment_suspension_period'];
    }

    /**
     * Sets failed_payment_suspension_period
     *
     * @param string|null $failed_payment_suspension_period The period after which a subscription that has been suspended due to a failed payment is terminated.
     *
     * @return self
     */
    public function setFailedPaymentSuspensionPeriod($failed_payment_suspension_period)
    {
        if (is_null($failed_payment_suspension_period)) {
            throw new \InvalidArgumentException('non-nullable failed_payment_suspension_period cannot be null');
        }
        $this->container['failed_payment_suspension_period'] = $failed_payment_suspension_period;

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
     * Gets allowed_payment_method_configurations
     *
     * @return int[]|null
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param int[]|null $allowed_payment_method_configurations The payment methods that can be used to subscribe to this product. If none are selected, no restriction is applied.
     *
     * @return self
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        if (is_null($allowed_payment_method_configurations)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_configurations cannot be null');
        }
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

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


