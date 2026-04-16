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
 * PaymentTerminalTransactionSummary model
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
class PaymentTerminalTransactionSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerminalTransactionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference' => 'int',
        'linked_space_id' => 'int',
        'transaction_sums' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalTransactionSum[]',
        'dcc_transaction_sums' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalDccTransactionSum[]',
        'ended_on' => '\DateTime',
        'balance_amount_per_currency' => 'array<string,float>',
        'payment_terminal' => 'int',
        'receipt' => 'string',
        'id' => 'int',
        'number_of_transactions' => 'int',
        'started_on' => '\DateTime',
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
        'reference' => 'int64',
        'linked_space_id' => 'int64',
        'transaction_sums' => null,
        'dcc_transaction_sums' => null,
        'ended_on' => 'date-time',
        'balance_amount_per_currency' => null,
        'payment_terminal' => 'int64',
        'receipt' => null,
        'id' => 'int64',
        'number_of_transactions' => 'int32',
        'started_on' => 'date-time',
        'version' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference' => false,
        'linked_space_id' => false,
        'transaction_sums' => false,
        'dcc_transaction_sums' => false,
        'ended_on' => false,
        'balance_amount_per_currency' => false,
        'payment_terminal' => false,
        'receipt' => false,
        'id' => false,
        'number_of_transactions' => false,
        'started_on' => false,
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
        'reference' => 'reference',
        'linked_space_id' => 'linkedSpaceId',
        'transaction_sums' => 'transactionSums',
        'dcc_transaction_sums' => 'dccTransactionSums',
        'ended_on' => 'endedOn',
        'balance_amount_per_currency' => 'balanceAmountPerCurrency',
        'payment_terminal' => 'paymentTerminal',
        'receipt' => 'receipt',
        'id' => 'id',
        'number_of_transactions' => 'numberOfTransactions',
        'started_on' => 'startedOn',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'linked_space_id' => 'setLinkedSpaceId',
        'transaction_sums' => 'setTransactionSums',
        'dcc_transaction_sums' => 'setDccTransactionSums',
        'ended_on' => 'setEndedOn',
        'balance_amount_per_currency' => 'setBalanceAmountPerCurrency',
        'payment_terminal' => 'setPaymentTerminal',
        'receipt' => 'setReceipt',
        'id' => 'setId',
        'number_of_transactions' => 'setNumberOfTransactions',
        'started_on' => 'setStartedOn',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'linked_space_id' => 'getLinkedSpaceId',
        'transaction_sums' => 'getTransactionSums',
        'dcc_transaction_sums' => 'getDccTransactionSums',
        'ended_on' => 'getEndedOn',
        'balance_amount_per_currency' => 'getBalanceAmountPerCurrency',
        'payment_terminal' => 'getPaymentTerminal',
        'receipt' => 'getReceipt',
        'id' => 'getId',
        'number_of_transactions' => 'getNumberOfTransactions',
        'started_on' => 'getStartedOn',
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
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('transaction_sums', $data ?? [], null);
        $this->setIfExists('dcc_transaction_sums', $data ?? [], null);
        $this->setIfExists('ended_on', $data ?? [], null);
        $this->setIfExists('balance_amount_per_currency', $data ?? [], null);
        $this->setIfExists('payment_terminal', $data ?? [], null);
        $this->setIfExists('receipt', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('number_of_transactions', $data ?? [], null);
        $this->setIfExists('started_on', $data ?? [], null);
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
     * @param int|null $reference The unique reference assigned to this transaction summary.
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
     * Gets transaction_sums
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalTransactionSum[]|null
     */
    public function getTransactionSums()
    {
        return $this->container['transaction_sums'];
    }

    /**
     * Sets transaction_sums
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalTransactionSum[]|null $transaction_sums The total monetary amounts of all transactions, organized and grouped by brand and currency.
     *
     * @return self
     */
    public function setTransactionSums($transaction_sums)
    {
        if (is_null($transaction_sums)) {
            throw new \InvalidArgumentException('non-nullable transaction_sums cannot be null');
        }
        $this->container['transaction_sums'] = $transaction_sums;

        return $this;
    }

    /**
     * Gets dcc_transaction_sums
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalDccTransactionSum[]|null
     */
    public function getDccTransactionSums()
    {
        return $this->container['dcc_transaction_sums'];
    }

    /**
     * Sets dcc_transaction_sums
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalDccTransactionSum[]|null $dcc_transaction_sums Detailed breakdown of Dynamic Currency Conversion (DCC) transactions, showing transaction amounts in both original and converted currencies, grouped by payment brand.
     *
     * @return self
     */
    public function setDccTransactionSums($dcc_transaction_sums)
    {
        if (is_null($dcc_transaction_sums)) {
            throw new \InvalidArgumentException('non-nullable dcc_transaction_sums cannot be null');
        }
        $this->container['dcc_transaction_sums'] = $dcc_transaction_sums;

        return $this;
    }

    /**
     * Gets ended_on
     *
     * @return \DateTime|null
     */
    public function getEndedOn()
    {
        return $this->container['ended_on'];
    }

    /**
     * Sets ended_on
     *
     * @param \DateTime|null $ended_on The end of the time period covered by this summary report.
     *
     * @return self
     */
    public function setEndedOn($ended_on)
    {
        if (is_null($ended_on)) {
            throw new \InvalidArgumentException('non-nullable ended_on cannot be null');
        }
        $this->container['ended_on'] = $ended_on;

        return $this;
    }

    /**
     * Gets balance_amount_per_currency
     *
     * @return array<string,float>|null
     */
    public function getBalanceAmountPerCurrency()
    {
        return $this->container['balance_amount_per_currency'];
    }

    /**
     * Sets balance_amount_per_currency
     *
     * @param array<string,float>|null $balance_amount_per_currency The overall transaction volume in each processed currency.
     *
     * @return self
     */
    public function setBalanceAmountPerCurrency($balance_amount_per_currency)
    {
        if (is_null($balance_amount_per_currency)) {
            throw new \InvalidArgumentException('non-nullable balance_amount_per_currency cannot be null');
        }
        $this->container['balance_amount_per_currency'] = $balance_amount_per_currency;

        return $this;
    }

    /**
     * Gets payment_terminal
     *
     * @return int|null
     */
    public function getPaymentTerminal()
    {
        return $this->container['payment_terminal'];
    }

    /**
     * Sets payment_terminal
     *
     * @param int|null $payment_terminal The payment terminal that processed the transactions included in this summary report.
     *
     * @return self
     */
    public function setPaymentTerminal($payment_terminal)
    {
        if (is_null($payment_terminal)) {
            throw new \InvalidArgumentException('non-nullable payment_terminal cannot be null');
        }
        $this->container['payment_terminal'] = $payment_terminal;

        return $this;
    }

    /**
     * Gets receipt
     *
     * @return string|null
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     *
     * @param string|null $receipt The HTML content of the transaction summary receipt.
     *
     * @return self
     */
    public function setReceipt($receipt)
    {
        if (is_null($receipt)) {
            throw new \InvalidArgumentException('non-nullable receipt cannot be null');
        }
        $this->container['receipt'] = $receipt;

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
     * Gets number_of_transactions
     *
     * @return int|null
     */
    public function getNumberOfTransactions()
    {
        return $this->container['number_of_transactions'];
    }

    /**
     * Sets number_of_transactions
     *
     * @param int|null $number_of_transactions The total count of all transactions processed by the terminal during the summary period.
     *
     * @return self
     */
    public function setNumberOfTransactions($number_of_transactions)
    {
        if (is_null($number_of_transactions)) {
            throw new \InvalidArgumentException('non-nullable number_of_transactions cannot be null');
        }
        $this->container['number_of_transactions'] = $number_of_transactions;

        return $this;
    }

    /**
     * Gets started_on
     *
     * @return \DateTime|null
     */
    public function getStartedOn()
    {
        return $this->container['started_on'];
    }

    /**
     * Sets started_on
     *
     * @param \DateTime|null $started_on The beginning of the time period covered by this summary report.
     *
     * @return self
     */
    public function setStartedOn($started_on)
    {
        if (is_null($started_on)) {
            throw new \InvalidArgumentException('non-nullable started_on cannot be null');
        }
        $this->container['started_on'] = $started_on;

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


