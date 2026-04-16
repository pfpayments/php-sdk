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
 * PaymentConnector model
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
class PaymentConnector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentConnector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'supported_features' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorFeature[]',
        'supported_customers_presences' => '\PostFinanceCheckout\Sdk\Model\CustomersPresence[]',
        'data_collection_type' => '\PostFinanceCheckout\Sdk\Model\DataCollectionType',
        'deprecated' => 'bool',
        'primary_risk_taker' => '\PostFinanceCheckout\Sdk\Model\PaymentPrimaryRiskTaker',
        'description' => 'array<string,string>',
        'payment_method_brand' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodBrand',
        'processor' => '\PostFinanceCheckout\Sdk\Model\PaymentProcessor',
        'deprecation_reason' => 'array<string,string>',
        'supported_currencies' => 'string[]',
        'name' => 'array<string,string>',
        'payment_method' => '\PostFinanceCheckout\Sdk\Model\PaymentMethod',
        'id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'supported_features' => null,
        'supported_customers_presences' => null,
        'data_collection_type' => null,
        'deprecated' => null,
        'primary_risk_taker' => null,
        'description' => null,
        'payment_method_brand' => null,
        'processor' => null,
        'deprecation_reason' => null,
        'supported_currencies' => null,
        'name' => null,
        'payment_method' => null,
        'id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'supported_features' => false,
        'supported_customers_presences' => false,
        'data_collection_type' => false,
        'deprecated' => false,
        'primary_risk_taker' => false,
        'description' => false,
        'payment_method_brand' => false,
        'processor' => false,
        'deprecation_reason' => false,
        'supported_currencies' => false,
        'name' => false,
        'payment_method' => false,
        'id' => false
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
        'supported_features' => 'supportedFeatures',
        'supported_customers_presences' => 'supportedCustomersPresences',
        'data_collection_type' => 'dataCollectionType',
        'deprecated' => 'deprecated',
        'primary_risk_taker' => 'primaryRiskTaker',
        'description' => 'description',
        'payment_method_brand' => 'paymentMethodBrand',
        'processor' => 'processor',
        'deprecation_reason' => 'deprecationReason',
        'supported_currencies' => 'supportedCurrencies',
        'name' => 'name',
        'payment_method' => 'paymentMethod',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supported_features' => 'setSupportedFeatures',
        'supported_customers_presences' => 'setSupportedCustomersPresences',
        'data_collection_type' => 'setDataCollectionType',
        'deprecated' => 'setDeprecated',
        'primary_risk_taker' => 'setPrimaryRiskTaker',
        'description' => 'setDescription',
        'payment_method_brand' => 'setPaymentMethodBrand',
        'processor' => 'setProcessor',
        'deprecation_reason' => 'setDeprecationReason',
        'supported_currencies' => 'setSupportedCurrencies',
        'name' => 'setName',
        'payment_method' => 'setPaymentMethod',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supported_features' => 'getSupportedFeatures',
        'supported_customers_presences' => 'getSupportedCustomersPresences',
        'data_collection_type' => 'getDataCollectionType',
        'deprecated' => 'getDeprecated',
        'primary_risk_taker' => 'getPrimaryRiskTaker',
        'description' => 'getDescription',
        'payment_method_brand' => 'getPaymentMethodBrand',
        'processor' => 'getProcessor',
        'deprecation_reason' => 'getDeprecationReason',
        'supported_currencies' => 'getSupportedCurrencies',
        'name' => 'getName',
        'payment_method' => 'getPaymentMethod',
        'id' => 'getId'
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
        $this->setIfExists('supported_features', $data ?? [], null);
        $this->setIfExists('supported_customers_presences', $data ?? [], null);
        $this->setIfExists('data_collection_type', $data ?? [], null);
        $this->setIfExists('deprecated', $data ?? [], null);
        $this->setIfExists('primary_risk_taker', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('payment_method_brand', $data ?? [], null);
        $this->setIfExists('processor', $data ?? [], null);
        $this->setIfExists('deprecation_reason', $data ?? [], null);
        $this->setIfExists('supported_currencies', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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
     * Gets supported_features
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentConnectorFeature[]|null
     */
    public function getSupportedFeatures()
    {
        return $this->container['supported_features'];
    }

    /**
     * Sets supported_features
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentConnectorFeature[]|null $supported_features The features that are supported by the connector.
     *
     * @return self
     */
    public function setSupportedFeatures($supported_features)
    {
        if (is_null($supported_features)) {
            throw new \InvalidArgumentException('non-nullable supported_features cannot be null');
        }


        $this->container['supported_features'] = $supported_features;

        return $this;
    }

    /**
     * Gets supported_customers_presences
     *
     * @return \PostFinanceCheckout\Sdk\Model\CustomersPresence[]|null
     */
    public function getSupportedCustomersPresences()
    {
        return $this->container['supported_customers_presences'];
    }

    /**
     * Sets supported_customers_presences
     *
     * @param \PostFinanceCheckout\Sdk\Model\CustomersPresence[]|null $supported_customers_presences The types of customer's presence that are supported by the connector.
     *
     * @return self
     */
    public function setSupportedCustomersPresences($supported_customers_presences)
    {
        if (is_null($supported_customers_presences)) {
            throw new \InvalidArgumentException('non-nullable supported_customers_presences cannot be null');
        }


        $this->container['supported_customers_presences'] = $supported_customers_presences;

        return $this;
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
     * Gets deprecated
     *
     * @return bool|null
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool|null $deprecated Whether the object was deprecated.
     *
     * @return self
     */
    public function setDeprecated($deprecated)
    {
        if (is_null($deprecated)) {
            throw new \InvalidArgumentException('non-nullable deprecated cannot be null');
        }
        $this->container['deprecated'] = $deprecated;

        return $this;
    }

    /**
     * Gets primary_risk_taker
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentPrimaryRiskTaker|null
     */
    public function getPrimaryRiskTaker()
    {
        return $this->container['primary_risk_taker'];
    }

    /**
     * Sets primary_risk_taker
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentPrimaryRiskTaker|null $primary_risk_taker primary_risk_taker
     *
     * @return self
     */
    public function setPrimaryRiskTaker($primary_risk_taker)
    {
        if (is_null($primary_risk_taker)) {
            throw new \InvalidArgumentException('non-nullable primary_risk_taker cannot be null');
        }
        $this->container['primary_risk_taker'] = $primary_risk_taker;

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
     * @param array<string,string>|null $description The localized description of the object.
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
     * Gets payment_method_brand
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand|null
     */
    public function getPaymentMethodBrand()
    {
        return $this->container['payment_method_brand'];
    }

    /**
     * Sets payment_method_brand
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand|null $payment_method_brand payment_method_brand
     *
     * @return self
     */
    public function setPaymentMethodBrand($payment_method_brand)
    {
        if (is_null($payment_method_brand)) {
            throw new \InvalidArgumentException('non-nullable payment_method_brand cannot be null');
        }
        $this->container['payment_method_brand'] = $payment_method_brand;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentProcessor|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentProcessor|null $processor processor
     *
     * @return self
     */
    public function setProcessor($processor)
    {
        if (is_null($processor)) {
            throw new \InvalidArgumentException('non-nullable processor cannot be null');
        }
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets deprecation_reason
     *
     * @return array<string,string>|null
     */
    public function getDeprecationReason()
    {
        return $this->container['deprecation_reason'];
    }

    /**
     * Sets deprecation_reason
     *
     * @param array<string,string>|null $deprecation_reason The deprecation reason describes why the object was deprecated.
     *
     * @return self
     */
    public function setDeprecationReason($deprecation_reason)
    {
        if (is_null($deprecation_reason)) {
            throw new \InvalidArgumentException('non-nullable deprecation_reason cannot be null');
        }
        $this->container['deprecation_reason'] = $deprecation_reason;

        return $this;
    }

    /**
     * Gets supported_currencies
     *
     * @return string[]|null
     */
    public function getSupportedCurrencies()
    {
        return $this->container['supported_currencies'];
    }

    /**
     * Sets supported_currencies
     *
     * @param string[]|null $supported_currencies The currencies that are supported by the connector.
     *
     * @return self
     */
    public function setSupportedCurrencies($supported_currencies)
    {
        if (is_null($supported_currencies)) {
            throw new \InvalidArgumentException('non-nullable supported_currencies cannot be null');
        }


        $this->container['supported_currencies'] = $supported_currencies;

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
     * @param array<string,string>|null $name The localized name of the object.
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


