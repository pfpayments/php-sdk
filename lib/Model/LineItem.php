<?php
/**
 * PostFinance Php SDK
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
 * LineItem model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class LineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_amount_per_unit' => 'float',
        'undiscounted_amount_excluding_tax' => 'float',
        'quantity' => 'float',
        'undiscounted_unit_price_including_tax' => 'float',
        'amount_excluding_tax' => 'float',
        'undiscounted_amount_including_tax' => 'float',
        'taxes' => '\PostFinanceCheckout\Sdk\Model\Tax[]',
        'type' => '\PostFinanceCheckout\Sdk\Model\LineItemType',
        'unit_price_including_tax' => 'float',
        'discount_excluding_tax' => 'float',
        'shipping_required' => 'bool',
        'unit_price_excluding_tax' => 'float',
        'name' => 'string',
        'attributes' => 'array<string,\PostFinanceCheckout\Sdk\Model\LineItemAttribute>',
        'undiscounted_unit_price_excluding_tax' => 'float',
        'amount_including_tax' => 'float',
        'discount_including_tax' => 'float',
        'sku' => 'string',
        'tax_amount' => 'float',
        'aggregated_tax_rate' => 'float',
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
        'tax_amount_per_unit' => null,
        'undiscounted_amount_excluding_tax' => null,
        'quantity' => null,
        'undiscounted_unit_price_including_tax' => null,
        'amount_excluding_tax' => null,
        'undiscounted_amount_including_tax' => null,
        'taxes' => null,
        'type' => null,
        'unit_price_including_tax' => null,
        'discount_excluding_tax' => null,
        'shipping_required' => null,
        'unit_price_excluding_tax' => null,
        'name' => null,
        'attributes' => null,
        'undiscounted_unit_price_excluding_tax' => null,
        'amount_including_tax' => null,
        'discount_including_tax' => null,
        'sku' => null,
        'tax_amount' => null,
        'aggregated_tax_rate' => null,
        'unique_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tax_amount_per_unit' => false,
        'undiscounted_amount_excluding_tax' => false,
        'quantity' => false,
        'undiscounted_unit_price_including_tax' => false,
        'amount_excluding_tax' => false,
        'undiscounted_amount_including_tax' => false,
        'taxes' => false,
        'type' => false,
        'unit_price_including_tax' => false,
        'discount_excluding_tax' => false,
        'shipping_required' => false,
        'unit_price_excluding_tax' => false,
        'name' => false,
        'attributes' => false,
        'undiscounted_unit_price_excluding_tax' => false,
        'amount_including_tax' => false,
        'discount_including_tax' => false,
        'sku' => false,
        'tax_amount' => false,
        'aggregated_tax_rate' => false,
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
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
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
        'tax_amount_per_unit' => 'taxAmountPerUnit',
        'undiscounted_amount_excluding_tax' => 'undiscountedAmountExcludingTax',
        'quantity' => 'quantity',
        'undiscounted_unit_price_including_tax' => 'undiscountedUnitPriceIncludingTax',
        'amount_excluding_tax' => 'amountExcludingTax',
        'undiscounted_amount_including_tax' => 'undiscountedAmountIncludingTax',
        'taxes' => 'taxes',
        'type' => 'type',
        'unit_price_including_tax' => 'unitPriceIncludingTax',
        'discount_excluding_tax' => 'discountExcludingTax',
        'shipping_required' => 'shippingRequired',
        'unit_price_excluding_tax' => 'unitPriceExcludingTax',
        'name' => 'name',
        'attributes' => 'attributes',
        'undiscounted_unit_price_excluding_tax' => 'undiscountedUnitPriceExcludingTax',
        'amount_including_tax' => 'amountIncludingTax',
        'discount_including_tax' => 'discountIncludingTax',
        'sku' => 'sku',
        'tax_amount' => 'taxAmount',
        'aggregated_tax_rate' => 'aggregatedTaxRate',
        'unique_id' => 'uniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_amount_per_unit' => 'setTaxAmountPerUnit',
        'undiscounted_amount_excluding_tax' => 'setUndiscountedAmountExcludingTax',
        'quantity' => 'setQuantity',
        'undiscounted_unit_price_including_tax' => 'setUndiscountedUnitPriceIncludingTax',
        'amount_excluding_tax' => 'setAmountExcludingTax',
        'undiscounted_amount_including_tax' => 'setUndiscountedAmountIncludingTax',
        'taxes' => 'setTaxes',
        'type' => 'setType',
        'unit_price_including_tax' => 'setUnitPriceIncludingTax',
        'discount_excluding_tax' => 'setDiscountExcludingTax',
        'shipping_required' => 'setShippingRequired',
        'unit_price_excluding_tax' => 'setUnitPriceExcludingTax',
        'name' => 'setName',
        'attributes' => 'setAttributes',
        'undiscounted_unit_price_excluding_tax' => 'setUndiscountedUnitPriceExcludingTax',
        'amount_including_tax' => 'setAmountIncludingTax',
        'discount_including_tax' => 'setDiscountIncludingTax',
        'sku' => 'setSku',
        'tax_amount' => 'setTaxAmount',
        'aggregated_tax_rate' => 'setAggregatedTaxRate',
        'unique_id' => 'setUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_amount_per_unit' => 'getTaxAmountPerUnit',
        'undiscounted_amount_excluding_tax' => 'getUndiscountedAmountExcludingTax',
        'quantity' => 'getQuantity',
        'undiscounted_unit_price_including_tax' => 'getUndiscountedUnitPriceIncludingTax',
        'amount_excluding_tax' => 'getAmountExcludingTax',
        'undiscounted_amount_including_tax' => 'getUndiscountedAmountIncludingTax',
        'taxes' => 'getTaxes',
        'type' => 'getType',
        'unit_price_including_tax' => 'getUnitPriceIncludingTax',
        'discount_excluding_tax' => 'getDiscountExcludingTax',
        'shipping_required' => 'getShippingRequired',
        'unit_price_excluding_tax' => 'getUnitPriceExcludingTax',
        'name' => 'getName',
        'attributes' => 'getAttributes',
        'undiscounted_unit_price_excluding_tax' => 'getUndiscountedUnitPriceExcludingTax',
        'amount_including_tax' => 'getAmountIncludingTax',
        'discount_including_tax' => 'getDiscountIncludingTax',
        'sku' => 'getSku',
        'tax_amount' => 'getTaxAmount',
        'aggregated_tax_rate' => 'getAggregatedTaxRate',
        'unique_id' => 'getUniqueId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('tax_amount_per_unit', $data ?? [], null);
        $this->setIfExists('undiscounted_amount_excluding_tax', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('undiscounted_unit_price_including_tax', $data ?? [], null);
        $this->setIfExists('amount_excluding_tax', $data ?? [], null);
        $this->setIfExists('undiscounted_amount_including_tax', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('unit_price_including_tax', $data ?? [], null);
        $this->setIfExists('discount_excluding_tax', $data ?? [], null);
        $this->setIfExists('shipping_required', $data ?? [], null);
        $this->setIfExists('unit_price_excluding_tax', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('undiscounted_unit_price_excluding_tax', $data ?? [], null);
        $this->setIfExists('amount_including_tax', $data ?? [], null);
        $this->setIfExists('discount_including_tax', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
        $this->setIfExists('aggregated_tax_rate', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 200)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) > 200)) {
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tax_amount_per_unit
     *
     * @return float|null
     */
    public function getTaxAmountPerUnit()
    {
        return $this->container['tax_amount_per_unit'];
    }

    /**
     * Sets tax_amount_per_unit
     *
     * @param float|null $tax_amount_per_unit The calculated tax amount per unit.
     *
     * @return self
     */
    public function setTaxAmountPerUnit($tax_amount_per_unit)
    {
        if (is_null($tax_amount_per_unit)) {
            throw new \InvalidArgumentException('non-nullable tax_amount_per_unit cannot be null');
        }
        $this->container['tax_amount_per_unit'] = $tax_amount_per_unit;

        return $this;
    }

    /**
     * Gets undiscounted_amount_excluding_tax
     *
     * @return float|null
     */
    public function getUndiscountedAmountExcludingTax()
    {
        return $this->container['undiscounted_amount_excluding_tax'];
    }

    /**
     * Sets undiscounted_amount_excluding_tax
     *
     * @param float|null $undiscounted_amount_excluding_tax The line item price with discounts not applied, excluding taxes.
     *
     * @return self
     */
    public function setUndiscountedAmountExcludingTax($undiscounted_amount_excluding_tax)
    {
        if (is_null($undiscounted_amount_excluding_tax)) {
            throw new \InvalidArgumentException('non-nullable undiscounted_amount_excluding_tax cannot be null');
        }
        $this->container['undiscounted_amount_excluding_tax'] = $undiscounted_amount_excluding_tax;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The number of items that were purchased.
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
     * Gets undiscounted_unit_price_including_tax
     *
     * @return float|null
     */
    public function getUndiscountedUnitPriceIncludingTax()
    {
        return $this->container['undiscounted_unit_price_including_tax'];
    }

    /**
     * Sets undiscounted_unit_price_including_tax
     *
     * @param float|null $undiscounted_unit_price_including_tax The calculated price per unit with discounts not applied, including taxes.
     *
     * @return self
     */
    public function setUndiscountedUnitPriceIncludingTax($undiscounted_unit_price_including_tax)
    {
        if (is_null($undiscounted_unit_price_including_tax)) {
            throw new \InvalidArgumentException('non-nullable undiscounted_unit_price_including_tax cannot be null');
        }
        $this->container['undiscounted_unit_price_including_tax'] = $undiscounted_unit_price_including_tax;

        return $this;
    }

    /**
     * Gets amount_excluding_tax
     *
     * @return float|null
     */
    public function getAmountExcludingTax()
    {
        return $this->container['amount_excluding_tax'];
    }

    /**
     * Sets amount_excluding_tax
     *
     * @param float|null $amount_excluding_tax The line item price with discounts applied, excluding taxes.
     *
     * @return self
     */
    public function setAmountExcludingTax($amount_excluding_tax)
    {
        if (is_null($amount_excluding_tax)) {
            throw new \InvalidArgumentException('non-nullable amount_excluding_tax cannot be null');
        }
        $this->container['amount_excluding_tax'] = $amount_excluding_tax;

        return $this;
    }

    /**
     * Gets undiscounted_amount_including_tax
     *
     * @return float|null
     */
    public function getUndiscountedAmountIncludingTax()
    {
        return $this->container['undiscounted_amount_including_tax'];
    }

    /**
     * Sets undiscounted_amount_including_tax
     *
     * @param float|null $undiscounted_amount_including_tax The line item price with discounts not applied, including taxes.
     *
     * @return self
     */
    public function setUndiscountedAmountIncludingTax($undiscounted_amount_including_tax)
    {
        if (is_null($undiscounted_amount_including_tax)) {
            throw new \InvalidArgumentException('non-nullable undiscounted_amount_including_tax cannot be null');
        }
        $this->container['undiscounted_amount_including_tax'] = $undiscounted_amount_including_tax;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \PostFinanceCheckout\Sdk\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \PostFinanceCheckout\Sdk\Model\Tax[]|null $taxes A set of tax lines, each of which specifies a tax applied to the item.
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
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItemType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItemType|null $type type
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
     * Gets unit_price_including_tax
     *
     * @return float|null
     */
    public function getUnitPriceIncludingTax()
    {
        return $this->container['unit_price_including_tax'];
    }

    /**
     * Sets unit_price_including_tax
     *
     * @param float|null $unit_price_including_tax The calculated price per unit with discounts applied, including taxes.
     *
     * @return self
     */
    public function setUnitPriceIncludingTax($unit_price_including_tax)
    {
        if (is_null($unit_price_including_tax)) {
            throw new \InvalidArgumentException('non-nullable unit_price_including_tax cannot be null');
        }
        $this->container['unit_price_including_tax'] = $unit_price_including_tax;

        return $this;
    }

    /**
     * Gets discount_excluding_tax
     *
     * @return float|null
     */
    public function getDiscountExcludingTax()
    {
        return $this->container['discount_excluding_tax'];
    }

    /**
     * Sets discount_excluding_tax
     *
     * @param float|null $discount_excluding_tax The discount allocated to the item, excluding taxes.
     *
     * @return self
     */
    public function setDiscountExcludingTax($discount_excluding_tax)
    {
        if (is_null($discount_excluding_tax)) {
            throw new \InvalidArgumentException('non-nullable discount_excluding_tax cannot be null');
        }
        $this->container['discount_excluding_tax'] = $discount_excluding_tax;

        return $this;
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
     * Gets unit_price_excluding_tax
     *
     * @return float|null
     */
    public function getUnitPriceExcludingTax()
    {
        return $this->container['unit_price_excluding_tax'];
    }

    /**
     * Sets unit_price_excluding_tax
     *
     * @param float|null $unit_price_excluding_tax The calculated price per unit with discounts applied, excluding taxes.
     *
     * @return self
     */
    public function setUnitPriceExcludingTax($unit_price_excluding_tax)
    {
        if (is_null($unit_price_excluding_tax)) {
            throw new \InvalidArgumentException('non-nullable unit_price_excluding_tax cannot be null');
        }
        $this->container['unit_price_excluding_tax'] = $unit_price_excluding_tax;

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
     * @param string|null $name The name of the product, ideally in the customer's language.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItem., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItem., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,\PostFinanceCheckout\Sdk\Model\LineItemAttribute>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,\PostFinanceCheckout\Sdk\Model\LineItemAttribute>|null $attributes A map of custom information for the item.
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
     * Gets undiscounted_unit_price_excluding_tax
     *
     * @return float|null
     */
    public function getUndiscountedUnitPriceExcludingTax()
    {
        return $this->container['undiscounted_unit_price_excluding_tax'];
    }

    /**
     * Sets undiscounted_unit_price_excluding_tax
     *
     * @param float|null $undiscounted_unit_price_excluding_tax The calculated price per unit with discounts not applied, excluding taxes.
     *
     * @return self
     */
    public function setUndiscountedUnitPriceExcludingTax($undiscounted_unit_price_excluding_tax)
    {
        if (is_null($undiscounted_unit_price_excluding_tax)) {
            throw new \InvalidArgumentException('non-nullable undiscounted_unit_price_excluding_tax cannot be null');
        }
        $this->container['undiscounted_unit_price_excluding_tax'] = $undiscounted_unit_price_excluding_tax;

        return $this;
    }

    /**
     * Gets amount_including_tax
     *
     * @return float|null
     */
    public function getAmountIncludingTax()
    {
        return $this->container['amount_including_tax'];
    }

    /**
     * Sets amount_including_tax
     *
     * @param float|null $amount_including_tax The line item price with discounts applied, including taxes.
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
            throw new \InvalidArgumentException('invalid length for $sku when calling LineItem., must be smaller than or equal to 200.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float|null $tax_amount The sum of all taxes applied to the item.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        if (is_null($tax_amount)) {
            throw new \InvalidArgumentException('non-nullable tax_amount cannot be null');
        }
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets aggregated_tax_rate
     *
     * @return float|null
     */
    public function getAggregatedTaxRate()
    {
        return $this->container['aggregated_tax_rate'];
    }

    /**
     * Sets aggregated_tax_rate
     *
     * @param float|null $aggregated_tax_rate The total tax rate applied to the item, calculated from the rates of all tax lines.
     *
     * @return self
     */
    public function setAggregatedTaxRate($aggregated_tax_rate)
    {
        if (is_null($aggregated_tax_rate)) {
            throw new \InvalidArgumentException('non-nullable aggregated_tax_rate cannot be null');
        }
        $this->container['aggregated_tax_rate'] = $aggregated_tax_rate;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string|null $unique_id The unique identifier of the line item within the set of line items.
     *
     * @return self
     */
    public function setUniqueId($unique_id)
    {
        if (is_null($unique_id)) {
            throw new \InvalidArgumentException('non-nullable unique_id cannot be null');
        }
        if ((mb_strlen($unique_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling LineItem., must be smaller than or equal to 200.');
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, mixed $value): void
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
    public function jsonSerialize(): mixed
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


