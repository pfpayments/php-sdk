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
 * HumanUser model
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
class HumanUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HumanUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mobile_phone_number' => 'string',
        'two_factor_enabled' => 'bool',
        'email_address' => 'string',
        'firstname' => 'string',
        'email_address_verified' => 'bool',
        'scope' => 'int',
        'time_zone' => 'string',
        'language' => 'string',
        'two_factor_type' => '\PostFinanceCheckout\Sdk\Model\TwoFactorAuthenticationType',
        'mobile_phone_verified' => 'bool',
        'primary_account' => 'int',
        'lastname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mobile_phone_number' => null,
        'two_factor_enabled' => null,
        'email_address' => null,
        'firstname' => null,
        'email_address_verified' => null,
        'scope' => 'int64',
        'time_zone' => null,
        'language' => null,
        'two_factor_type' => null,
        'mobile_phone_verified' => null,
        'primary_account' => 'int64',
        'lastname' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mobile_phone_number' => false,
        'two_factor_enabled' => false,
        'email_address' => false,
        'firstname' => false,
        'email_address_verified' => false,
        'scope' => false,
        'time_zone' => false,
        'language' => false,
        'two_factor_type' => false,
        'mobile_phone_verified' => false,
        'primary_account' => false,
        'lastname' => false
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
        'mobile_phone_number' => 'mobilePhoneNumber',
        'two_factor_enabled' => 'twoFactorEnabled',
        'email_address' => 'emailAddress',
        'firstname' => 'firstname',
        'email_address_verified' => 'emailAddressVerified',
        'scope' => 'scope',
        'time_zone' => 'timeZone',
        'language' => 'language',
        'two_factor_type' => 'twoFactorType',
        'mobile_phone_verified' => 'mobilePhoneVerified',
        'primary_account' => 'primaryAccount',
        'lastname' => 'lastname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'two_factor_enabled' => 'setTwoFactorEnabled',
        'email_address' => 'setEmailAddress',
        'firstname' => 'setFirstname',
        'email_address_verified' => 'setEmailAddressVerified',
        'scope' => 'setScope',
        'time_zone' => 'setTimeZone',
        'language' => 'setLanguage',
        'two_factor_type' => 'setTwoFactorType',
        'mobile_phone_verified' => 'setMobilePhoneVerified',
        'primary_account' => 'setPrimaryAccount',
        'lastname' => 'setLastname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'two_factor_enabled' => 'getTwoFactorEnabled',
        'email_address' => 'getEmailAddress',
        'firstname' => 'getFirstname',
        'email_address_verified' => 'getEmailAddressVerified',
        'scope' => 'getScope',
        'time_zone' => 'getTimeZone',
        'language' => 'getLanguage',
        'two_factor_type' => 'getTwoFactorType',
        'mobile_phone_verified' => 'getMobilePhoneVerified',
        'primary_account' => 'getPrimaryAccount',
        'lastname' => 'getLastname'
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
        $this->setIfExists('mobile_phone_number', $data ?? [], null);
        $this->setIfExists('two_factor_enabled', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('email_address_verified', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('two_factor_type', $data ?? [], null);
        $this->setIfExists('mobile_phone_verified', $data ?? [], null);
        $this->setIfExists('primary_account', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
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

        if (!is_null($this->container['mobile_phone_number']) && (mb_strlen($this->container['mobile_phone_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'mobile_phone_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 128)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['firstname']) && (mb_strlen($this->container['firstname']) > 100)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['lastname']) && (mb_strlen($this->container['lastname']) > 100)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 100.";
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
     * Gets mobile_phone_number
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string|null $mobile_phone_number The user's mobile phone number.
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        if (is_null($mobile_phone_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone_number cannot be null');
        }
        if ((mb_strlen($mobile_phone_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $mobile_phone_number when calling HumanUser., must be smaller than or equal to 30.');
        }

        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets two_factor_enabled
     *
     * @return bool|null
     */
    public function getTwoFactorEnabled()
    {
        return $this->container['two_factor_enabled'];
    }

    /**
     * Sets two_factor_enabled
     *
     * @param bool|null $two_factor_enabled Whether two-factor authentication is enabled for this user.
     *
     * @return self
     */
    public function setTwoFactorEnabled($two_factor_enabled)
    {
        if (is_null($two_factor_enabled)) {
            throw new \InvalidArgumentException('non-nullable two_factor_enabled cannot be null');
        }
        $this->container['two_factor_enabled'] = $two_factor_enabled;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address The user's email address.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        if ((mb_strlen($email_address) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling HumanUser., must be smaller than or equal to 128.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname The user's first name.
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            throw new \InvalidArgumentException('non-nullable firstname cannot be null');
        }
        if ((mb_strlen($firstname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling HumanUser., must be smaller than or equal to 100.');
        }

        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets email_address_verified
     *
     * @return bool|null
     */
    public function getEmailAddressVerified()
    {
        return $this->container['email_address_verified'];
    }

    /**
     * Sets email_address_verified
     *
     * @param bool|null $email_address_verified Whether the user's email address has been verified.
     *
     * @return self
     */
    public function setEmailAddressVerified($email_address_verified)
    {
        if (is_null($email_address_verified)) {
            throw new \InvalidArgumentException('non-nullable email_address_verified cannot be null');
        }
        $this->container['email_address_verified'] = $email_address_verified;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return int|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param int|null $scope The scope that the user belongs to.
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The user's time zone. If none is specified, the one provided by the browser will be used.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

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
     * @param string|null $language The user's preferred language.
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
     * Gets two_factor_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\TwoFactorAuthenticationType|null
     */
    public function getTwoFactorType()
    {
        return $this->container['two_factor_type'];
    }

    /**
     * Sets two_factor_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\TwoFactorAuthenticationType|null $two_factor_type two_factor_type
     *
     * @return self
     */
    public function setTwoFactorType($two_factor_type)
    {
        if (is_null($two_factor_type)) {
            throw new \InvalidArgumentException('non-nullable two_factor_type cannot be null');
        }
        $this->container['two_factor_type'] = $two_factor_type;

        return $this;
    }

    /**
     * Gets mobile_phone_verified
     *
     * @return bool|null
     */
    public function getMobilePhoneVerified()
    {
        return $this->container['mobile_phone_verified'];
    }

    /**
     * Sets mobile_phone_verified
     *
     * @param bool|null $mobile_phone_verified Whether the user's mobile phone number has been verified.
     *
     * @return self
     */
    public function setMobilePhoneVerified($mobile_phone_verified)
    {
        if (is_null($mobile_phone_verified)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone_verified cannot be null');
        }
        $this->container['mobile_phone_verified'] = $mobile_phone_verified;

        return $this;
    }

    /**
     * Gets primary_account
     *
     * @return int|null
     */
    public function getPrimaryAccount()
    {
        return $this->container['primary_account'];
    }

    /**
     * Sets primary_account
     *
     * @param int|null $primary_account The primary account that the user belongs to.
     *
     * @return self
     */
    public function setPrimaryAccount($primary_account)
    {
        if (is_null($primary_account)) {
            throw new \InvalidArgumentException('non-nullable primary_account cannot be null');
        }
        $this->container['primary_account'] = $primary_account;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname The user's last name.
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        if ((mb_strlen($lastname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling HumanUser., must be smaller than or equal to 100.');
        }

        $this->container['lastname'] = $lastname;

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


