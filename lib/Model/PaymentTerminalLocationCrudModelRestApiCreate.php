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
 * PaymentTerminalLocationCrudModelRestApiCreate model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      PostFinance Ltd
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.3
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentTerminalLocationCrudModelRestApiCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerminalLocationCrudModel.RestApiCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'production_merchant_id' => 'string',
        'address' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalAddressCreate',
        'name' => 'string',
        'external_id' => 'string',
        'contact_address' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminalAddressCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'production_merchant_id' => null,
        'address' => null,
        'name' => null,
        'external_id' => null,
        'contact_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'production_merchant_id' => false,
        'address' => false,
        'name' => false,
        'external_id' => false,
        'contact_address' => false
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
        'production_merchant_id' => 'productionMerchantId',
        'address' => 'address',
        'name' => 'name',
        'external_id' => 'externalId',
        'contact_address' => 'contactAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'production_merchant_id' => 'setProductionMerchantId',
        'address' => 'setAddress',
        'name' => 'setName',
        'external_id' => 'setExternalId',
        'contact_address' => 'setContactAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'production_merchant_id' => 'getProductionMerchantId',
        'address' => 'getAddress',
        'name' => 'getName',
        'external_id' => 'getExternalId',
        'contact_address' => 'getContactAddress'
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
        $this->setIfExists('production_merchant_id', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('contact_address', $data ?? [], null);
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

        if (!is_null($this->container['production_merchant_id']) && (mb_strlen($this->container['production_merchant_id']) > 15)) {
            $invalidProperties[] = "invalid value for 'production_merchant_id', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['production_merchant_id']) && (mb_strlen($this->container['production_merchant_id']) < 15)) {
            $invalidProperties[] = "invalid value for 'production_merchant_id', the character length must be bigger than or equal to 15.";
        }

        if (!is_null($this->container['production_merchant_id']) && !preg_match("/([0-9a-zA-Z])+/", $this->container['production_merchant_id'])) {
            $invalidProperties[] = "invalid value for 'production_merchant_id', must be conform to the pattern /([0-9a-zA-Z])+/.";
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
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
     * Gets production_merchant_id
     *
     * @return string|null
     */
    public function getProductionMerchantId()
    {
        return $this->container['production_merchant_id'];
    }

    /**
     * Sets production_merchant_id
     *
     * @param string|null $production_merchant_id The production merchant identifier assigned to the location.
     *
     * @return self
     */
    public function setProductionMerchantId($production_merchant_id)
    {
        if (is_null($production_merchant_id)) {
            throw new \InvalidArgumentException('non-nullable production_merchant_id cannot be null');
        }
        if ((mb_strlen($production_merchant_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $production_merchant_id when calling PaymentTerminalLocationCrudModelRestApiCreate., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($production_merchant_id) < 15)) {
            throw new \InvalidArgumentException('invalid length for $production_merchant_id when calling PaymentTerminalLocationCrudModelRestApiCreate., must be bigger than or equal to 15.');
        }
        if ((!preg_match("/([0-9a-zA-Z])+/", ObjectSerializer::toString($production_merchant_id)))) {
            throw new \InvalidArgumentException("invalid value for \$production_merchant_id when calling PaymentTerminalLocationCrudModelRestApiCreate., must conform to the pattern /([0-9a-zA-Z])+/.");
        }

        $this->container['production_merchant_id'] = $production_merchant_id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalAddressCreate
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalAddressCreate $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name used to identify the payment terminal location.
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id A client-generated nonce which uniquely identifies some action to be executed. Subsequent requests with the same external ID do not execute the action again, but return the original result.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets contact_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminalAddressCreate|null
     */
    public function getContactAddress()
    {
        return $this->container['contact_address'];
    }

    /**
     * Sets contact_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminalAddressCreate|null $contact_address contact_address
     *
     * @return self
     */
    public function setContactAddress($contact_address)
    {
        if (is_null($contact_address)) {
            throw new \InvalidArgumentException('non-nullable contact_address cannot be null');
        }
        $this->container['contact_address'] = $contact_address;

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


