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
 * PaymentTerminalTransactionSum model
 *
 * @category Class
 * @description Represents the aggregated transaction data for a specific brand and currency, including regular and DCC (Dynamic Currency Conversion) transactions.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentTerminalTransactionSum implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerminalTransactionSum';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_tip_amount' => 'float',
        'product' => 'string',
        'transaction_currency' => 'string',
        'transaction_amount' => 'float',
        'dcc_tip_amount' => 'float',
        'id' => 'int',
        'transaction_count' => 'int',
        'brand' => 'string',
        'dcc_transaction_count' => 'int',
        'version' => 'int',
        'dcc_transaction_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_tip_amount' => null,
        'product' => null,
        'transaction_currency' => null,
        'transaction_amount' => null,
        'dcc_tip_amount' => null,
        'id' => 'int64',
        'transaction_count' => 'int32',
        'brand' => null,
        'dcc_transaction_count' => 'int32',
        'version' => 'int32',
        'dcc_transaction_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_tip_amount' => false,
        'product' => false,
        'transaction_currency' => false,
        'transaction_amount' => false,
        'dcc_tip_amount' => false,
        'id' => false,
        'transaction_count' => false,
        'brand' => false,
        'dcc_transaction_count' => false,
        'version' => false,
        'dcc_transaction_amount' => false
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
        'transaction_tip_amount' => 'transactionTipAmount',
        'product' => 'product',
        'transaction_currency' => 'transactionCurrency',
        'transaction_amount' => 'transactionAmount',
        'dcc_tip_amount' => 'dccTipAmount',
        'id' => 'id',
        'transaction_count' => 'transactionCount',
        'brand' => 'brand',
        'dcc_transaction_count' => 'dccTransactionCount',
        'version' => 'version',
        'dcc_transaction_amount' => 'dccTransactionAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_tip_amount' => 'setTransactionTipAmount',
        'product' => 'setProduct',
        'transaction_currency' => 'setTransactionCurrency',
        'transaction_amount' => 'setTransactionAmount',
        'dcc_tip_amount' => 'setDccTipAmount',
        'id' => 'setId',
        'transaction_count' => 'setTransactionCount',
        'brand' => 'setBrand',
        'dcc_transaction_count' => 'setDccTransactionCount',
        'version' => 'setVersion',
        'dcc_transaction_amount' => 'setDccTransactionAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_tip_amount' => 'getTransactionTipAmount',
        'product' => 'getProduct',
        'transaction_currency' => 'getTransactionCurrency',
        'transaction_amount' => 'getTransactionAmount',
        'dcc_tip_amount' => 'getDccTipAmount',
        'id' => 'getId',
        'transaction_count' => 'getTransactionCount',
        'brand' => 'getBrand',
        'dcc_transaction_count' => 'getDccTransactionCount',
        'version' => 'getVersion',
        'dcc_transaction_amount' => 'getDccTransactionAmount'
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
        $this->setIfExists('transaction_tip_amount', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('transaction_currency', $data ?? [], null);
        $this->setIfExists('transaction_amount', $data ?? [], null);
        $this->setIfExists('dcc_tip_amount', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('transaction_count', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('dcc_transaction_count', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('dcc_transaction_amount', $data ?? [], null);
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
     * Gets transaction_tip_amount
     *
     * @return float|null
     */
    public function getTransactionTipAmount()
    {
        return $this->container['transaction_tip_amount'];
    }

    /**
     * Sets transaction_tip_amount
     *
     * @param float|null $transaction_tip_amount The total amount of tips from regular (non-DCC) transactions in the transaction currency.
     *
     * @return self
     */
    public function setTransactionTipAmount($transaction_tip_amount)
    {
        if (is_null($transaction_tip_amount)) {
            throw new \InvalidArgumentException('non-nullable transaction_tip_amount cannot be null');
        }
        $this->container['transaction_tip_amount'] = $transaction_tip_amount;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product The product within the brand for which transactions are summarized.
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets transaction_currency
     *
     * @return string|null
     */
    public function getTransactionCurrency()
    {
        return $this->container['transaction_currency'];
    }

    /**
     * Sets transaction_currency
     *
     * @param string|null $transaction_currency The base currency in which the transactions were processed and settled, excluding any DCC conversions.
     *
     * @return self
     */
    public function setTransactionCurrency($transaction_currency)
    {
        if (is_null($transaction_currency)) {
            throw new \InvalidArgumentException('non-nullable transaction_currency cannot be null');
        }
        $this->container['transaction_currency'] = $transaction_currency;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return float|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param float|null $transaction_amount The total monetary value of all transactions in the transaction currency, excluding DCC transactions.
     *
     * @return self
     */
    public function setTransactionAmount($transaction_amount)
    {
        if (is_null($transaction_amount)) {
            throw new \InvalidArgumentException('non-nullable transaction_amount cannot be null');
        }
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets dcc_tip_amount
     *
     * @return float|null
     */
    public function getDccTipAmount()
    {
        return $this->container['dcc_tip_amount'];
    }

    /**
     * Sets dcc_tip_amount
     *
     * @param float|null $dcc_tip_amount The total amount of tips from DCC transactions, converted and presented in the transaction currency.
     *
     * @return self
     */
    public function setDccTipAmount($dcc_tip_amount)
    {
        if (is_null($dcc_tip_amount)) {
            throw new \InvalidArgumentException('non-nullable dcc_tip_amount cannot be null');
        }
        $this->container['dcc_tip_amount'] = $dcc_tip_amount;

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
     * Gets transaction_count
     *
     * @return int|null
     */
    public function getTransactionCount()
    {
        return $this->container['transaction_count'];
    }

    /**
     * Sets transaction_count
     *
     * @param int|null $transaction_count The total count of regular (non-DCC) transactions processed within this summary period.
     *
     * @return self
     */
    public function setTransactionCount($transaction_count)
    {
        if (is_null($transaction_count)) {
            throw new \InvalidArgumentException('non-nullable transaction_count cannot be null');
        }
        $this->container['transaction_count'] = $transaction_count;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The payment brand for which the transactions are summarized.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets dcc_transaction_count
     *
     * @return int|null
     */
    public function getDccTransactionCount()
    {
        return $this->container['dcc_transaction_count'];
    }

    /**
     * Sets dcc_transaction_count
     *
     * @param int|null $dcc_transaction_count The number of transactions where Dynamic Currency Conversion (DCC) was applied, allowing customers to pay in their home currency.
     *
     * @return self
     */
    public function setDccTransactionCount($dcc_transaction_count)
    {
        if (is_null($dcc_transaction_count)) {
            throw new \InvalidArgumentException('non-nullable dcc_transaction_count cannot be null');
        }
        $this->container['dcc_transaction_count'] = $dcc_transaction_count;

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
     * Gets dcc_transaction_amount
     *
     * @return float|null
     */
    public function getDccTransactionAmount()
    {
        return $this->container['dcc_transaction_amount'];
    }

    /**
     * Sets dcc_transaction_amount
     *
     * @param float|null $dcc_transaction_amount The total monetary value of DCC transactions, converted and presented in the transaction currency.
     *
     * @return self
     */
    public function setDccTransactionAmount($dcc_transaction_amount)
    {
        if (is_null($dcc_transaction_amount)) {
            throw new \InvalidArgumentException('non-nullable dcc_transaction_amount cannot be null');
        }
        $this->container['dcc_transaction_amount'] = $dcc_transaction_amount;

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


