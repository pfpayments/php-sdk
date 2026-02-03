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
 * LineItemCreate model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class LineItemCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_required' => 'bool',
        'quantity' => 'float',
        'name' => 'string',
        'taxes' => '\PostFinanceCheckout\Sdk\Model\TaxCreate[]',
        'attributes' => 'array<string,\PostFinanceCheckout\Sdk\Model\LineItemAttributeCreate>',
        'amount_including_tax' => 'float',
        'discount_including_tax' => 'float',
        'sku' => 'string',
        'type' => '\PostFinanceCheckout\Sdk\Model\LineItemType',
        'unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_required' => null,
        'quantity' => null,
        'name' => null,
        'taxes' => null,
        'attributes' => null,
        'amount_including_tax' => null,
        'discount_including_tax' => null,
        'sku' => null,
        'type' => null,
        'unique_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipping_required' => false,
        'quantity' => false,
        'name' => false,
        'taxes' => false,
        'attributes' => false,
        'amount_including_tax' => false,
        'discount_including_tax' => false,
        'sku' => false,
        'type' => false,
        'unique_id' => false
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
        'shipping_required' => 'shippingRequired',
        'quantity' => 'quantity',
        'name' => 'name',
        'taxes' => 'taxes',
        'attributes' => 'attributes',
        'amount_including_tax' => 'amountIncludingTax',
        'discount_including_tax' => 'discountIncludingTax',
        'sku' => 'sku',
        'type' => 'type',
        'unique_id' => 'uniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_required' => 'setShippingRequired',
        'quantity' => 'setQuantity',
        'name' => 'setName',
        'taxes' => 'setTaxes',
        'attributes' => 'setAttributes',
        'amount_including_tax' => 'setAmountIncludingTax',
        'discount_including_tax' => 'setDiscountIncludingTax',
        'sku' => 'setSku',
        'type' => 'setType',
        'unique_id' => 'setUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_required' => 'getShippingRequired',
        'quantity' => 'getQuantity',
        'name' => 'getName',
        'taxes' => 'getTaxes',
        'attributes' => 'getAttributes',
        'amount_including_tax' => 'getAmountIncludingTax',
        'discount_including_tax' => 'getDiscountIncludingTax',
        'sku' => 'getSku',
        'type' => 'getType',
        'unique_id' => 'getUniqueId'
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
        $this->setIfExists('shipping_required', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('amount_including_tax', $data ?? [], null);
        $this->setIfExists('discount_including_tax', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('unique_id', $data ?? [], null);
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

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount_including_tax'] === null) {
            $invalidProperties[] = "'amount_including_tax' can't be null";
        }
        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 200)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['unique_id'] === null) {
            $invalidProperties[] = "'unique_id' can't be null";
        }
        if ((mb_strlen($this->container['unique_id']) > 200)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be smaller than or equal to 200.";
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
     * Gets shipping_required
     *
     * @return bool|null
     */
    public function getShippingRequired()
    {
        return $this->container['shipping_required'];
    }

    /**
     * Sets shipping_required
     *
     * @param bool|null $shipping_required Whether the item required shipping.
     *
     * @return self
     */
    public function setShippingRequired($shipping_required)
    {
        if (is_null($shipping_required)) {
            throw new \InvalidArgumentException('non-nullable shipping_required cannot be null');
        }
        $this->container['shipping_required'] = $shipping_required;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The number of items that were purchased.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the product, ideally in the customer's language.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItemCreate., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItemCreate., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \PostFinanceCheckout\Sdk\Model\TaxCreate[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \PostFinanceCheckout\Sdk\Model\TaxCreate[]|null $taxes A set of tax lines, each of which specifies a tax applied to the item.
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }


        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,\PostFinanceCheckout\Sdk\Model\LineItemAttributeCreate>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,\PostFinanceCheckout\Sdk\Model\LineItemAttributeCreate>|null $attributes A map of custom information for the item.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets amount_including_tax
     *
     * @return float
     */
    public function getAmountIncludingTax()
    {
        return $this->container['amount_including_tax'];
    }

    /**
     * Sets amount_including_tax
     *
     * @param float $amount_including_tax The line item price with discounts applied, including taxes.
     *
     * @return self
     */
    public function setAmountIncludingTax($amount_including_tax)
    {
        if (is_null($amount_including_tax)) {
            throw new \InvalidArgumentException('non-nullable amount_including_tax cannot be null');
        }
        $this->container['amount_including_tax'] = $amount_including_tax;

        return $this;
    }

    /**
     * Gets discount_including_tax
     *
     * @return float|null
     */
    public function getDiscountIncludingTax()
    {
        return $this->container['discount_including_tax'];
    }

    /**
     * Sets discount_including_tax
     *
     * @param float|null $discount_including_tax The discount allocated to the item, including taxes.
     *
     * @return self
     */
    public function setDiscountIncludingTax($discount_including_tax)
    {
        if (is_null($discount_including_tax)) {
            throw new \InvalidArgumentException('non-nullable discount_including_tax cannot be null');
        }
        $this->container['discount_including_tax'] = $discount_including_tax;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU (stock-keeping unit) of the product.
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        if ((mb_strlen($sku) > 200)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling LineItemCreate., must be smaller than or equal to 200.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItemType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItemType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id The unique identifier of the line item within the set of line items.
     *
     * @return self
     */
    public function setUniqueId($unique_id)
    {
        if (is_null($unique_id)) {
            throw new \InvalidArgumentException('non-nullable unique_id cannot be null');
        }
        if ((mb_strlen($unique_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling LineItemCreate., must be smaller than or equal to 200.');
        }

        $this->container['unique_id'] = $unique_id;

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


