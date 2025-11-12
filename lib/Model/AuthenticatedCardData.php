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
 * AuthenticatedCardData model
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
class AuthenticatedCardData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthenticatedCardData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'initial_recurring_transaction' => 'bool',
        'recurring_indicator' => '\PostFinanceCheckout\Sdk\Model\RecurringIndicator',
        'token_requestor_id' => 'string',
        'cryptogram' => '\PostFinanceCheckout\Sdk\Model\CardCryptogram',
        'cardholder_authentication' => '\PostFinanceCheckout\Sdk\Model\CardholderAuthentication'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'initial_recurring_transaction' => null,
        'recurring_indicator' => null,
        'token_requestor_id' => null,
        'cryptogram' => null,
        'cardholder_authentication' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'initial_recurring_transaction' => false,
        'recurring_indicator' => false,
        'token_requestor_id' => false,
        'cryptogram' => false,
        'cardholder_authentication' => false
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
        'initial_recurring_transaction' => 'initialRecurringTransaction',
        'recurring_indicator' => 'recurringIndicator',
        'token_requestor_id' => 'tokenRequestorId',
        'cryptogram' => 'cryptogram',
        'cardholder_authentication' => 'cardholderAuthentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'initial_recurring_transaction' => 'setInitialRecurringTransaction',
        'recurring_indicator' => 'setRecurringIndicator',
        'token_requestor_id' => 'setTokenRequestorId',
        'cryptogram' => 'setCryptogram',
        'cardholder_authentication' => 'setCardholderAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'initial_recurring_transaction' => 'getInitialRecurringTransaction',
        'recurring_indicator' => 'getRecurringIndicator',
        'token_requestor_id' => 'getTokenRequestorId',
        'cryptogram' => 'getCryptogram',
        'cardholder_authentication' => 'getCardholderAuthentication'
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
        $this->setIfExists('initial_recurring_transaction', $data ?? [], null);
        $this->setIfExists('recurring_indicator', $data ?? [], null);
        $this->setIfExists('token_requestor_id', $data ?? [], null);
        $this->setIfExists('cryptogram', $data ?? [], null);
        $this->setIfExists('cardholder_authentication', $data ?? [], null);
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets initial_recurring_transaction
     *
     * @return bool|null
     */
    public function getInitialRecurringTransaction()
    {
        return $this->container['initial_recurring_transaction'];
    }

    /**
     * Sets initial_recurring_transaction
     *
     * @param bool|null $initial_recurring_transaction Whether the transaction is an initial recurring transaction, based on the recurring indicator. This is used to identify the first transaction in a recurring payment setup.
     *
     * @return self
     */
    public function setInitialRecurringTransaction($initial_recurring_transaction)
    {
        if (is_null($initial_recurring_transaction)) {
            throw new \InvalidArgumentException('non-nullable initial_recurring_transaction cannot be null');
        }
        $this->container['initial_recurring_transaction'] = $initial_recurring_transaction;

        return $this;
    }

    /**
     * Gets recurring_indicator
     *
     * @return \PostFinanceCheckout\Sdk\Model\RecurringIndicator|null
     */
    public function getRecurringIndicator()
    {
        return $this->container['recurring_indicator'];
    }

    /**
     * Sets recurring_indicator
     *
     * @param \PostFinanceCheckout\Sdk\Model\RecurringIndicator|null $recurring_indicator recurring_indicator
     *
     * @return self
     */
    public function setRecurringIndicator($recurring_indicator)
    {
        if (is_null($recurring_indicator)) {
            throw new \InvalidArgumentException('non-nullable recurring_indicator cannot be null');
        }
        $this->container['recurring_indicator'] = $recurring_indicator;

        return $this;
    }

    /**
     * Gets token_requestor_id
     *
     * @return string|null
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string|null $token_requestor_id The token requestor identifier (TRID) identifies the entity requesting tokenization for a card transaction.
     *
     * @return self
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        if (is_null($token_requestor_id)) {
            throw new \InvalidArgumentException('non-nullable token_requestor_id cannot be null');
        }
        $this->container['token_requestor_id'] = $token_requestor_id;

        return $this;
    }

    /**
     * Gets cryptogram
     *
     * @return \PostFinanceCheckout\Sdk\Model\CardCryptogram|null
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param \PostFinanceCheckout\Sdk\Model\CardCryptogram|null $cryptogram cryptogram
     *
     * @return self
     */
    public function setCryptogram($cryptogram)
    {
        if (is_null($cryptogram)) {
            throw new \InvalidArgumentException('non-nullable cryptogram cannot be null');
        }
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets cardholder_authentication
     *
     * @return \PostFinanceCheckout\Sdk\Model\CardholderAuthentication|null
     */
    public function getCardholderAuthentication()
    {
        return $this->container['cardholder_authentication'];
    }

    /**
     * Sets cardholder_authentication
     *
     * @param \PostFinanceCheckout\Sdk\Model\CardholderAuthentication|null $cardholder_authentication cardholder_authentication
     *
     * @return self
     */
    public function setCardholderAuthentication($cardholder_authentication)
    {
        if (is_null($cardholder_authentication)) {
            throw new \InvalidArgumentException('non-nullable cardholder_authentication cannot be null');
        }
        $this->container['cardholder_authentication'] = $cardholder_authentication;

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


