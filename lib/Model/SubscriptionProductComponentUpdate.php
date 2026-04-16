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
 * SubscriptionProductComponentUpdate model
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
class SubscriptionProductComponentUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionProductComponent.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference' => 'int',
        'tax_class' => 'int',
        'quantity_step' => 'float',
        'sort_order' => 'int',
        'component_group' => 'int',
        'name' => 'array<string,string>',
        'description' => 'array<string,string>',
        'component_change_weight' => 'int',
        'version' => 'int',
        'maximal_quantity' => 'float',
        'default_component' => 'bool',
        'minimal_quantity' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference' => 'int64',
        'tax_class' => 'int64',
        'quantity_step' => null,
        'sort_order' => 'int32',
        'component_group' => 'int64',
        'name' => null,
        'description' => null,
        'component_change_weight' => 'int32',
        'version' => 'int32',
        'maximal_quantity' => null,
        'default_component' => null,
        'minimal_quantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference' => false,
        'tax_class' => false,
        'quantity_step' => false,
        'sort_order' => false,
        'component_group' => false,
        'name' => false,
        'description' => false,
        'component_change_weight' => false,
        'version' => false,
        'maximal_quantity' => false,
        'default_component' => false,
        'minimal_quantity' => false
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
        'tax_class' => 'taxClass',
        'quantity_step' => 'quantityStep',
        'sort_order' => 'sortOrder',
        'component_group' => 'componentGroup',
        'name' => 'name',
        'description' => 'description',
        'component_change_weight' => 'componentChangeWeight',
        'version' => 'version',
        'maximal_quantity' => 'maximalQuantity',
        'default_component' => 'defaultComponent',
        'minimal_quantity' => 'minimalQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'tax_class' => 'setTaxClass',
        'quantity_step' => 'setQuantityStep',
        'sort_order' => 'setSortOrder',
        'component_group' => 'setComponentGroup',
        'name' => 'setName',
        'description' => 'setDescription',
        'component_change_weight' => 'setComponentChangeWeight',
        'version' => 'setVersion',
        'maximal_quantity' => 'setMaximalQuantity',
        'default_component' => 'setDefaultComponent',
        'minimal_quantity' => 'setMinimalQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'tax_class' => 'getTaxClass',
        'quantity_step' => 'getQuantityStep',
        'sort_order' => 'getSortOrder',
        'component_group' => 'getComponentGroup',
        'name' => 'getName',
        'description' => 'getDescription',
        'component_change_weight' => 'getComponentChangeWeight',
        'version' => 'getVersion',
        'maximal_quantity' => 'getMaximalQuantity',
        'default_component' => 'getDefaultComponent',
        'minimal_quantity' => 'getMinimalQuantity'
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
        $this->setIfExists('tax_class', $data ?? [], null);
        $this->setIfExists('quantity_step', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('component_group', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('component_change_weight', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('maximal_quantity', $data ?? [], null);
        $this->setIfExists('default_component', $data ?? [], null);
        $this->setIfExists('minimal_quantity', $data ?? [], null);
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

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * @return int|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param int|null $reference The reference is used to link components across different product versions.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets tax_class
     *
     * @return int|null
     */
    public function getTaxClass()
    {
        return $this->container['tax_class'];
    }

    /**
     * Sets tax_class
     *
     * @param int|null $tax_class The tax class to be applied to fees.
     *
     * @return self
     */
    public function setTaxClass($tax_class)
    {
        if (is_null($tax_class)) {
            throw new \InvalidArgumentException('non-nullable tax_class cannot be null');
        }
        $this->container['tax_class'] = $tax_class;

        return $this;
    }

    /**
     * Gets quantity_step
     *
     * @return float|null
     */
    public function getQuantityStep()
    {
        return $this->container['quantity_step'];
    }

    /**
     * Sets quantity_step
     *
     * @param float|null $quantity_step The quantity step determines the interval in which the quantity can be increased.
     *
     * @return self
     */
    public function setQuantityStep($quantity_step)
    {
        if (is_null($quantity_step)) {
            throw new \InvalidArgumentException('non-nullable quantity_step cannot be null');
        }
        $this->container['quantity_step'] = $quantity_step;

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
     * @param int|null $sort_order When listing components, they can be sorted by this number.
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
     * Gets component_group
     *
     * @return int|null
     */
    public function getComponentGroup()
    {
        return $this->container['component_group'];
    }

    /**
     * Sets component_group
     *
     * @param int|null $component_group The group that the component belongs to.
     *
     * @return self
     */
    public function setComponentGroup($component_group)
    {
        if (is_null($component_group)) {
            throw new \InvalidArgumentException('non-nullable component_group cannot be null');
        }
        $this->container['component_group'] = $component_group;

        return $this;
    }

    /**
     * Gets name
     *
     * @return array<string,string>|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param array<string,string>|null $name The localized name of the component that is displayed to the customer.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
     * @param array<string,string>|null $description The localized description of the component that is displayed to the customer.
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
     * Gets component_change_weight
     *
     * @return int|null
     */
    public function getComponentChangeWeight()
    {
        return $this->container['component_change_weight'];
    }

    /**
     * Sets component_change_weight
     *
     * @param int|null $component_change_weight If switching from a component with a lower tier to a component with a higher one, this is considered an upgrade and a fee may be applied.
     *
     * @return self
     */
    public function setComponentChangeWeight($component_change_weight)
    {
        if (is_null($component_change_weight)) {
            throw new \InvalidArgumentException('non-nullable component_change_weight cannot be null');
        }
        $this->container['component_change_weight'] = $component_change_weight;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
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
     * Gets maximal_quantity
     *
     * @return float|null
     */
    public function getMaximalQuantity()
    {
        return $this->container['maximal_quantity'];
    }

    /**
     * Sets maximal_quantity
     *
     * @param float|null $maximal_quantity A maximum of the defined quantity can be selected for this component.
     *
     * @return self
     */
    public function setMaximalQuantity($maximal_quantity)
    {
        if (is_null($maximal_quantity)) {
            throw new \InvalidArgumentException('non-nullable maximal_quantity cannot be null');
        }
        $this->container['maximal_quantity'] = $maximal_quantity;

        return $this;
    }

    /**
     * Gets default_component
     *
     * @return bool|null
     */
    public function getDefaultComponent()
    {
        return $this->container['default_component'];
    }

    /**
     * Sets default_component
     *
     * @param bool|null $default_component Whether this is the default component in its group and preselected.
     *
     * @return self
     */
    public function setDefaultComponent($default_component)
    {
        if (is_null($default_component)) {
            throw new \InvalidArgumentException('non-nullable default_component cannot be null');
        }
        $this->container['default_component'] = $default_component;

        return $this;
    }

    /**
     * Gets minimal_quantity
     *
     * @return float|null
     */
    public function getMinimalQuantity()
    {
        return $this->container['minimal_quantity'];
    }

    /**
     * Sets minimal_quantity
     *
     * @param float|null $minimal_quantity A minimum of the defined quantity must be selected for this component.
     *
     * @return self
     */
    public function setMinimalQuantity($minimal_quantity)
    {
        if (is_null($minimal_quantity)) {
            throw new \InvalidArgumentException('non-nullable minimal_quantity cannot be null');
        }
        $this->container['minimal_quantity'] = $minimal_quantity;

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


