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
 * PaymentTerminalDccTransactionSum model
 *
 * @category Class
 * @description Represents the aggregated summary of Dynamic Currency Conversion (DCC) transactions grouped by brand and currency combinations in a transaction summary receipt.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentTerminalDccTransactionSum implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerminalDccTransactionSum';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_currency' => 'string',
        'transaction_amount' => 'float',
        'dcc_amount' => 'float',
        'id' => 'int',
        'transaction_count' => 'int',
        'dcc_currency' => 'string',
        'brand' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_currency' => null,
        'transaction_amount' => null,
        'dcc_amount' => null,
        'id' => 'int64',
        'transaction_count' => 'int32',
        'dcc_currency' => null,
        'brand' => null,
        'version' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_currency' => false,
        'transaction_amount' => false,
        'dcc_amount' => false,
        'id' => false,
        'transaction_count' => false,
        'dcc_currency' => false,
        'brand' => false,
        'version' => false
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
        'transaction_currency' => 'transactionCurrency',
        'transaction_amount' => 'transactionAmount',
        'dcc_amount' => 'dccAmount',
        'id' => 'id',
        'transaction_count' => 'transactionCount',
        'dcc_currency' => 'dccCurrency',
        'brand' => 'brand',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_currency' => 'setTransactionCurrency',
        'transaction_amount' => 'setTransactionAmount',
        'dcc_amount' => 'setDccAmount',
        'id' => 'setId',
        'transaction_count' => 'setTransactionCount',
        'dcc_currency' => 'setDccCurrency',
        'brand' => 'setBrand',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_currency' => 'getTransactionCurrency',
        'transaction_amount' => 'getTransactionAmount',
        'dcc_amount' => 'getDccAmount',
        'id' => 'getId',
        'transaction_count' => 'getTransactionCount',
        'dcc_currency' => 'getDccCurrency',
        'brand' => 'getBrand',
        'version' => 'getVersion'
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
        $this->setIfExists('transaction_currency', $data ?? [], null);
        $this->setIfExists('transaction_amount', $data ?? [], null);
        $this->setIfExists('dcc_amount', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('transaction_count', $data ?? [], null);
        $this->setIfExists('dcc_currency', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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
     * @param string|null $transaction_currency The original currency of the transactions before DCC conversion (typically the merchant's local currency).
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
     * @param float|null $transaction_amount The total sum of all transactions in the original transaction currency (the amount in merchant's local currency before DCC conversion).
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
     * Gets dcc_amount
     *
     * @return float|null
     */
    public function getDccAmount()
    {
        return $this->container['dcc_amount'];
    }

    /**
     * Sets dcc_amount
     *
     * @param float|null $dcc_amount The total sum of all transactions in the converted DCC currency (the amount paid by customers in their chosen currency).
     *
     * @return self
     */
    public function setDccAmount($dcc_amount)
    {
        if (is_null($dcc_amount)) {
            throw new \InvalidArgumentException('non-nullable dcc_amount cannot be null');
        }
        $this->container['dcc_amount'] = $dcc_amount;

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
     * @param int|null $transaction_count The total count of DCC transactions processed for this specific brand and currency combination.
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
     * Gets dcc_currency
     *
     * @return string|null
     */
    public function getDccCurrency()
    {
        return $this->container['dcc_currency'];
    }

    /**
     * Sets dcc_currency
     *
     * @param string|null $dcc_currency The converted currency used in DCC transactions (the currency chosen by the customer for payment).
     *
     * @return self
     */
    public function setDccCurrency($dcc_currency)
    {
        if (is_null($dcc_currency)) {
            throw new \InvalidArgumentException('non-nullable dcc_currency cannot be null');
        }
        $this->container['dcc_currency'] = $dcc_currency;

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
     * @param string|null $brand The payment brand for which these DCC transactions are summarized.
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


