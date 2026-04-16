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
 * ChargeBankTransaction model
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
class ChargeBankTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeBankTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_currency_amount' => 'float',
        'completion' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletion',
        'linked_space_id' => 'int',
        'language' => 'string',
        'id' => 'int',
        'space_view_id' => 'int',
        'linked_transaction' => 'int',
        'bank_transaction' => '\PostFinanceCheckout\Sdk\Model\BankTransaction',
        'version' => 'int',
        'transaction' => '\PostFinanceCheckout\Sdk\Model\Transaction',
        'transaction_currency_value_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_currency_amount' => null,
        'completion' => null,
        'linked_space_id' => 'int64',
        'language' => null,
        'id' => 'int64',
        'space_view_id' => 'int64',
        'linked_transaction' => 'int64',
        'bank_transaction' => null,
        'version' => 'int32',
        'transaction' => null,
        'transaction_currency_value_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_currency_amount' => false,
        'completion' => false,
        'linked_space_id' => false,
        'language' => false,
        'id' => false,
        'space_view_id' => false,
        'linked_transaction' => false,
        'bank_transaction' => false,
        'version' => false,
        'transaction' => false,
        'transaction_currency_value_amount' => false
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
        'transaction_currency_amount' => 'transactionCurrencyAmount',
        'completion' => 'completion',
        'linked_space_id' => 'linkedSpaceId',
        'language' => 'language',
        'id' => 'id',
        'space_view_id' => 'spaceViewId',
        'linked_transaction' => 'linkedTransaction',
        'bank_transaction' => 'bankTransaction',
        'version' => 'version',
        'transaction' => 'transaction',
        'transaction_currency_value_amount' => 'transactionCurrencyValueAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_currency_amount' => 'setTransactionCurrencyAmount',
        'completion' => 'setCompletion',
        'linked_space_id' => 'setLinkedSpaceId',
        'language' => 'setLanguage',
        'id' => 'setId',
        'space_view_id' => 'setSpaceViewId',
        'linked_transaction' => 'setLinkedTransaction',
        'bank_transaction' => 'setBankTransaction',
        'version' => 'setVersion',
        'transaction' => 'setTransaction',
        'transaction_currency_value_amount' => 'setTransactionCurrencyValueAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_currency_amount' => 'getTransactionCurrencyAmount',
        'completion' => 'getCompletion',
        'linked_space_id' => 'getLinkedSpaceId',
        'language' => 'getLanguage',
        'id' => 'getId',
        'space_view_id' => 'getSpaceViewId',
        'linked_transaction' => 'getLinkedTransaction',
        'bank_transaction' => 'getBankTransaction',
        'version' => 'getVersion',
        'transaction' => 'getTransaction',
        'transaction_currency_value_amount' => 'getTransactionCurrencyValueAmount'
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
        $this->setIfExists('transaction_currency_amount', $data ?? [], null);
        $this->setIfExists('completion', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('bank_transaction', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('transaction_currency_value_amount', $data ?? [], null);
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
     * Gets transaction_currency_amount
     *
     * @return float|null
     */
    public function getTransactionCurrencyAmount()
    {
        return $this->container['transaction_currency_amount'];
    }

    /**
     * Sets transaction_currency_amount
     *
     * @param float|null $transaction_currency_amount The posting amount represents the monetary value of the bank transaction, recorded in the payment transaction's currency, before applying any adjustments.
     *
     * @return self
     */
    public function setTransactionCurrencyAmount($transaction_currency_amount)
    {
        if (is_null($transaction_currency_amount)) {
            throw new \InvalidArgumentException('non-nullable transaction_currency_amount cannot be null');
        }
        $this->container['transaction_currency_amount'] = $transaction_currency_amount;

        return $this;
    }

    /**
     * Gets completion
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletion|null
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletion|null $completion completion
     *
     * @return self
     */
    public function setCompletion($completion)
    {
        if (is_null($completion)) {
            throw new \InvalidArgumentException('non-nullable completion cannot be null');
        }
        $this->container['completion'] = $completion;

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
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language that is linked to the object.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

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
     * Gets space_view_id
     *
     * @return int|null
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int|null $space_view_id The ID of the space view this object is linked to.
     *
     * @return self
     */
    public function setSpaceViewId($space_view_id)
    {
        if (is_null($space_view_id)) {
            throw new \InvalidArgumentException('non-nullable space_view_id cannot be null');
        }
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }

    /**
     * Gets linked_transaction
     *
     * @return int|null
     */
    public function getLinkedTransaction()
    {
        return $this->container['linked_transaction'];
    }

    /**
     * Sets linked_transaction
     *
     * @param int|null $linked_transaction The payment transaction this object is linked to.
     *
     * @return self
     */
    public function setLinkedTransaction($linked_transaction)
    {
        if (is_null($linked_transaction)) {
            throw new \InvalidArgumentException('non-nullable linked_transaction cannot be null');
        }
        $this->container['linked_transaction'] = $linked_transaction;

        return $this;
    }

    /**
     * Gets bank_transaction
     *
     * @return \PostFinanceCheckout\Sdk\Model\BankTransaction|null
     */
    public function getBankTransaction()
    {
        return $this->container['bank_transaction'];
    }

    /**
     * Sets bank_transaction
     *
     * @param \PostFinanceCheckout\Sdk\Model\BankTransaction|null $bank_transaction bank_transaction
     *
     * @return self
     */
    public function setBankTransaction($bank_transaction)
    {
        if (is_null($bank_transaction)) {
            throw new \InvalidArgumentException('non-nullable bank_transaction cannot be null');
        }
        $this->container['bank_transaction'] = $bank_transaction;

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
     * Gets transaction
     *
     * @return \PostFinanceCheckout\Sdk\Model\Transaction|null
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \PostFinanceCheckout\Sdk\Model\Transaction|null $transaction transaction
     *
     * @return self
     */
    public function setTransaction($transaction)
    {
        if (is_null($transaction)) {
            throw new \InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets transaction_currency_value_amount
     *
     * @return float|null
     */
    public function getTransactionCurrencyValueAmount()
    {
        return $this->container['transaction_currency_value_amount'];
    }

    /**
     * Sets transaction_currency_value_amount
     *
     * @param float|null $transaction_currency_value_amount The value amount represents the net monetary value of the bank transaction, recorded in the payment transaction's currency, after applicable deductions.
     *
     * @return self
     */
    public function setTransactionCurrencyValueAmount($transaction_currency_value_amount)
    {
        if (is_null($transaction_currency_value_amount)) {
            throw new \InvalidArgumentException('non-nullable transaction_currency_value_amount cannot be null');
        }
        $this->container['transaction_currency_value_amount'] = $transaction_currency_value_amount;

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


