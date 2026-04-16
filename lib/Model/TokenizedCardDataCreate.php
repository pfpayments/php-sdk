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
 * TokenizedCardDataCreate model
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
class TokenizedCardDataCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TokenizedCardData.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expiry_date' => 'string',
        'pan_type' => '\PostFinanceCheckout\Sdk\Model\PanType',
        'card_holder_name' => 'string',
        'card_verification_code' => 'string',
        'primary_account_number' => 'string',
        'recurring_indicator' => '\PostFinanceCheckout\Sdk\Model\RecurringIndicator',
        'scheme_transaction_reference' => 'string',
        'token_requestor_id' => 'string',
        'cryptogram' => '\PostFinanceCheckout\Sdk\Model\CardCryptogramCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expiry_date' => null,
        'pan_type' => null,
        'card_holder_name' => null,
        'card_verification_code' => null,
        'primary_account_number' => null,
        'recurring_indicator' => null,
        'scheme_transaction_reference' => null,
        'token_requestor_id' => null,
        'cryptogram' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expiry_date' => false,
        'pan_type' => false,
        'card_holder_name' => false,
        'card_verification_code' => false,
        'primary_account_number' => false,
        'recurring_indicator' => false,
        'scheme_transaction_reference' => false,
        'token_requestor_id' => false,
        'cryptogram' => false
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
        'expiry_date' => 'expiryDate',
        'pan_type' => 'panType',
        'card_holder_name' => 'cardHolderName',
        'card_verification_code' => 'cardVerificationCode',
        'primary_account_number' => 'primaryAccountNumber',
        'recurring_indicator' => 'recurringIndicator',
        'scheme_transaction_reference' => 'schemeTransactionReference',
        'token_requestor_id' => 'tokenRequestorId',
        'cryptogram' => 'cryptogram'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiry_date' => 'setExpiryDate',
        'pan_type' => 'setPanType',
        'card_holder_name' => 'setCardHolderName',
        'card_verification_code' => 'setCardVerificationCode',
        'primary_account_number' => 'setPrimaryAccountNumber',
        'recurring_indicator' => 'setRecurringIndicator',
        'scheme_transaction_reference' => 'setSchemeTransactionReference',
        'token_requestor_id' => 'setTokenRequestorId',
        'cryptogram' => 'setCryptogram'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiry_date' => 'getExpiryDate',
        'pan_type' => 'getPanType',
        'card_holder_name' => 'getCardHolderName',
        'card_verification_code' => 'getCardVerificationCode',
        'primary_account_number' => 'getPrimaryAccountNumber',
        'recurring_indicator' => 'getRecurringIndicator',
        'scheme_transaction_reference' => 'getSchemeTransactionReference',
        'token_requestor_id' => 'getTokenRequestorId',
        'cryptogram' => 'getCryptogram'
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
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('pan_type', $data ?? [], null);
        $this->setIfExists('card_holder_name', $data ?? [], null);
        $this->setIfExists('card_verification_code', $data ?? [], null);
        $this->setIfExists('primary_account_number', $data ?? [], null);
        $this->setIfExists('recurring_indicator', $data ?? [], null);
        $this->setIfExists('scheme_transaction_reference', $data ?? [], null);
        $this->setIfExists('token_requestor_id', $data ?? [], null);
        $this->setIfExists('cryptogram', $data ?? [], null);
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

        if (!is_null($this->container['expiry_date']) && !preg_match("/(\\d{4})-(11|12|10|0[1-9])/", $this->container['expiry_date'])) {
            $invalidProperties[] = "invalid value for 'expiry_date', must be conform to the pattern /(\\d{4})-(11|12|10|0[1-9])/.";
        }

        if (!is_null($this->container['card_holder_name']) && (mb_strlen($this->container['card_holder_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'card_holder_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['card_verification_code']) && (mb_strlen($this->container['card_verification_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'card_verification_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['card_verification_code']) && (mb_strlen($this->container['card_verification_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'card_verification_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['card_verification_code']) && !preg_match("/([0-9 ]+)/", $this->container['card_verification_code'])) {
            $invalidProperties[] = "invalid value for 'card_verification_code', must be conform to the pattern /([0-9 ]+)/.";
        }

        if ($this->container['primary_account_number'] === null) {
            $invalidProperties[] = "'primary_account_number' can't be null";
        }
        if ((mb_strlen($this->container['primary_account_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'primary_account_number', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['primary_account_number']) < 10)) {
            $invalidProperties[] = "invalid value for 'primary_account_number', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/([0-9 ]+)/", $this->container['primary_account_number'])) {
            $invalidProperties[] = "invalid value for 'primary_account_number', must be conform to the pattern /([0-9 ]+)/.";
        }

        if (!is_null($this->container['scheme_transaction_reference']) && (mb_strlen($this->container['scheme_transaction_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'scheme_transaction_reference', the character length must be smaller than or equal to 100.";
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
     * Gets expiry_date
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string|null $expiry_date The expiry date of the card, indicating its validity period in yyyy-mm format (e.g., 2023-09).
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }

        if ((!preg_match("/(\\d{4})-(11|12|10|0[1-9])/", ObjectSerializer::toString($expiry_date)))) {
            throw new \InvalidArgumentException("invalid value for \$expiry_date when calling TokenizedCardDataCreate., must conform to the pattern /(\\d{4})-(11|12|10|0[1-9])/.");
        }

        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets pan_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\PanType|null
     */
    public function getPanType()
    {
        return $this->container['pan_type'];
    }

    /**
     * Sets pan_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\PanType|null $pan_type pan_type
     *
     * @return self
     */
    public function setPanType($pan_type)
    {
        if (is_null($pan_type)) {
            throw new \InvalidArgumentException('non-nullable pan_type cannot be null');
        }
        $this->container['pan_type'] = $pan_type;

        return $this;
    }

    /**
     * Gets card_holder_name
     *
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string|null $card_holder_name The name of the cardholder, as printed on the card, identifying the card owner.
     *
     * @return self
     */
    public function setCardHolderName($card_holder_name)
    {
        if (is_null($card_holder_name)) {
            throw new \InvalidArgumentException('non-nullable card_holder_name cannot be null');
        }
        if ((mb_strlen($card_holder_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $card_holder_name when calling TokenizedCardDataCreate., must be smaller than or equal to 100.');
        }

        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }

    /**
     * Gets card_verification_code
     *
     * @return string|null
     */
    public function getCardVerificationCode()
    {
        return $this->container['card_verification_code'];
    }

    /**
     * Sets card_verification_code
     *
     * @param string|null $card_verification_code The security code used to validate the card during transactions.
     *
     * @return self
     */
    public function setCardVerificationCode($card_verification_code)
    {
        if (is_null($card_verification_code)) {
            throw new \InvalidArgumentException('non-nullable card_verification_code cannot be null');
        }
        if ((mb_strlen($card_verification_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $card_verification_code when calling TokenizedCardDataCreate., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($card_verification_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $card_verification_code when calling TokenizedCardDataCreate., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/([0-9 ]+)/", ObjectSerializer::toString($card_verification_code)))) {
            throw new \InvalidArgumentException("invalid value for \$card_verification_code when calling TokenizedCardDataCreate., must conform to the pattern /([0-9 ]+)/.");
        }

        $this->container['card_verification_code'] = $card_verification_code;

        return $this;
    }

    /**
     * Gets primary_account_number
     *
     * @return string
     */
    public function getPrimaryAccountNumber()
    {
        return $this->container['primary_account_number'];
    }

    /**
     * Sets primary_account_number
     *
     * @param string $primary_account_number The card's primary account number (PAN), the unique identifier of the card.
     *
     * @return self
     */
    public function setPrimaryAccountNumber($primary_account_number)
    {
        if (is_null($primary_account_number)) {
            throw new \InvalidArgumentException('non-nullable primary_account_number cannot be null');
        }
        if ((mb_strlen($primary_account_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_number when calling TokenizedCardDataCreate., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($primary_account_number) < 10)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_number when calling TokenizedCardDataCreate., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/([0-9 ]+)/", ObjectSerializer::toString($primary_account_number)))) {
            throw new \InvalidArgumentException("invalid value for \$primary_account_number when calling TokenizedCardDataCreate., must conform to the pattern /([0-9 ]+)/.");
        }

        $this->container['primary_account_number'] = $primary_account_number;

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
     * Gets scheme_transaction_reference
     *
     * @return string|null
     */
    public function getSchemeTransactionReference()
    {
        return $this->container['scheme_transaction_reference'];
    }

    /**
     * Sets scheme_transaction_reference
     *
     * @param string|null $scheme_transaction_reference A reference specific to the card's transaction within its payment scheme.
     *
     * @return self
     */
    public function setSchemeTransactionReference($scheme_transaction_reference)
    {
        if (is_null($scheme_transaction_reference)) {
            throw new \InvalidArgumentException('non-nullable scheme_transaction_reference cannot be null');
        }
        if ((mb_strlen($scheme_transaction_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $scheme_transaction_reference when calling TokenizedCardDataCreate., must be smaller than or equal to 100.');
        }

        $this->container['scheme_transaction_reference'] = $scheme_transaction_reference;

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
     * @return \PostFinanceCheckout\Sdk\Model\CardCryptogramCreate|null
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param \PostFinanceCheckout\Sdk\Model\CardCryptogramCreate|null $cryptogram cryptogram
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


