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
 * CardholderAuthenticationCreate model
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
class CardholderAuthenticationCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardholderAuthentication.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authentication_identifier' => 'string',
        'authentication_response' => '\PostFinanceCheckout\Sdk\Model\CardAuthenticationResponse',
        'electronic_commerce_indicator' => 'string',
        'authentication_value' => 'string',
        'version' => '\PostFinanceCheckout\Sdk\Model\CardAuthenticationVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authentication_identifier' => null,
        'authentication_response' => null,
        'electronic_commerce_indicator' => null,
        'authentication_value' => null,
        'version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'authentication_identifier' => false,
        'authentication_response' => false,
        'electronic_commerce_indicator' => false,
        'authentication_value' => false,
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
        'authentication_identifier' => 'authenticationIdentifier',
        'authentication_response' => 'authenticationResponse',
        'electronic_commerce_indicator' => 'electronicCommerceIndicator',
        'authentication_value' => 'authenticationValue',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_identifier' => 'setAuthenticationIdentifier',
        'authentication_response' => 'setAuthenticationResponse',
        'electronic_commerce_indicator' => 'setElectronicCommerceIndicator',
        'authentication_value' => 'setAuthenticationValue',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_identifier' => 'getAuthenticationIdentifier',
        'authentication_response' => 'getAuthenticationResponse',
        'electronic_commerce_indicator' => 'getElectronicCommerceIndicator',
        'authentication_value' => 'getAuthenticationValue',
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
        $this->setIfExists('authentication_identifier', $data ?? [], null);
        $this->setIfExists('authentication_response', $data ?? [], null);
        $this->setIfExists('electronic_commerce_indicator', $data ?? [], null);
        $this->setIfExists('authentication_value', $data ?? [], null);
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

        if ($this->container['authentication_response'] === null) {
            $invalidProperties[] = "'authentication_response' can't be null";
        }
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
     * Gets authentication_identifier
     *
     * @return string|null
     */
    public function getAuthenticationIdentifier()
    {
        return $this->container['authentication_identifier'];
    }

    /**
     * Sets authentication_identifier
     *
     * @param string|null $authentication_identifier The identifier (e.g., XID or DSTransactionID) assigned by the authentication system for tracking and verification.
     *
     * @return self
     */
    public function setAuthenticationIdentifier($authentication_identifier)
    {
        if (is_null($authentication_identifier)) {
            throw new \InvalidArgumentException('non-nullable authentication_identifier cannot be null');
        }
        $this->container['authentication_identifier'] = $authentication_identifier;

        return $this;
    }

    /**
     * Gets authentication_response
     *
     * @return \PostFinanceCheckout\Sdk\Model\CardAuthenticationResponse
     */
    public function getAuthenticationResponse()
    {
        return $this->container['authentication_response'];
    }

    /**
     * Sets authentication_response
     *
     * @param \PostFinanceCheckout\Sdk\Model\CardAuthenticationResponse $authentication_response authentication_response
     *
     * @return self
     */
    public function setAuthenticationResponse($authentication_response)
    {
        if (is_null($authentication_response)) {
            throw new \InvalidArgumentException('non-nullable authentication_response cannot be null');
        }
        $this->container['authentication_response'] = $authentication_response;

        return $this;
    }

    /**
     * Gets electronic_commerce_indicator
     *
     * @return string|null
     */
    public function getElectronicCommerceIndicator()
    {
        return $this->container['electronic_commerce_indicator'];
    }

    /**
     * Sets electronic_commerce_indicator
     *
     * @param string|null $electronic_commerce_indicator The Electronic Commerce Indicator (ECI) represents the authentication level and indicates liability shift during online or card-not-present transactions.
     *
     * @return self
     */
    public function setElectronicCommerceIndicator($electronic_commerce_indicator)
    {
        if (is_null($electronic_commerce_indicator)) {
            throw new \InvalidArgumentException('non-nullable electronic_commerce_indicator cannot be null');
        }
        $this->container['electronic_commerce_indicator'] = $electronic_commerce_indicator;

        return $this;
    }

    /**
     * Gets authentication_value
     *
     * @return string|null
     */
    public function getAuthenticationValue()
    {
        return $this->container['authentication_value'];
    }

    /**
     * Sets authentication_value
     *
     * @param string|null $authentication_value The cryptographic token (CAVV/AAV) generated during the authentication process to validate the cardholder's identity.
     *
     * @return self
     */
    public function setAuthenticationValue($authentication_value)
    {
        if (is_null($authentication_value)) {
            throw new \InvalidArgumentException('non-nullable authentication_value cannot be null');
        }
        $this->container['authentication_value'] = $authentication_value;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \PostFinanceCheckout\Sdk\Model\CardAuthenticationVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \PostFinanceCheckout\Sdk\Model\CardAuthenticationVersion $version version
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


