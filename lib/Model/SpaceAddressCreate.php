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
 * SpaceAddressCreate model
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
class SpaceAddressCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpaceAddress.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'mobile_phone_number' => 'string',
        'organization_name' => 'string',
        'city' => 'string',
        'given_name' => 'string',
        'postcode' => 'string',
        'sales_tax_number' => 'string',
        'dependent_locality' => 'string',
        'email_address' => 'string',
        'phone_number' => 'string',
        'sorting_code' => 'string',
        'street' => 'string',
        'family_name' => 'string',
        'postal_state' => 'string',
        'salutation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'mobile_phone_number' => null,
        'organization_name' => null,
        'city' => null,
        'given_name' => null,
        'postcode' => null,
        'sales_tax_number' => null,
        'dependent_locality' => null,
        'email_address' => null,
        'phone_number' => null,
        'sorting_code' => null,
        'street' => null,
        'family_name' => null,
        'postal_state' => null,
        'salutation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
        'mobile_phone_number' => false,
        'organization_name' => false,
        'city' => false,
        'given_name' => false,
        'postcode' => false,
        'sales_tax_number' => false,
        'dependent_locality' => false,
        'email_address' => false,
        'phone_number' => false,
        'sorting_code' => false,
        'street' => false,
        'family_name' => false,
        'postal_state' => false,
        'salutation' => false
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
        'country' => 'country',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'organization_name' => 'organizationName',
        'city' => 'city',
        'given_name' => 'givenName',
        'postcode' => 'postcode',
        'sales_tax_number' => 'salesTaxNumber',
        'dependent_locality' => 'dependentLocality',
        'email_address' => 'emailAddress',
        'phone_number' => 'phoneNumber',
        'sorting_code' => 'sortingCode',
        'street' => 'street',
        'family_name' => 'familyName',
        'postal_state' => 'postalState',
        'salutation' => 'salutation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'organization_name' => 'setOrganizationName',
        'city' => 'setCity',
        'given_name' => 'setGivenName',
        'postcode' => 'setPostcode',
        'sales_tax_number' => 'setSalesTaxNumber',
        'dependent_locality' => 'setDependentLocality',
        'email_address' => 'setEmailAddress',
        'phone_number' => 'setPhoneNumber',
        'sorting_code' => 'setSortingCode',
        'street' => 'setStreet',
        'family_name' => 'setFamilyName',
        'postal_state' => 'setPostalState',
        'salutation' => 'setSalutation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'organization_name' => 'getOrganizationName',
        'city' => 'getCity',
        'given_name' => 'getGivenName',
        'postcode' => 'getPostcode',
        'sales_tax_number' => 'getSalesTaxNumber',
        'dependent_locality' => 'getDependentLocality',
        'email_address' => 'getEmailAddress',
        'phone_number' => 'getPhoneNumber',
        'sorting_code' => 'getSortingCode',
        'street' => 'getStreet',
        'family_name' => 'getFamilyName',
        'postal_state' => 'getPostalState',
        'salutation' => 'getSalutation'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('mobile_phone_number', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('sales_tax_number', $data ?? [], null);
        $this->setIfExists('dependent_locality', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('sorting_code', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('family_name', $data ?? [], null);
        $this->setIfExists('postal_state', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
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

        if (!is_null($this->container['mobile_phone_number']) && (mb_strlen($this->container['mobile_phone_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'mobile_phone_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sales_tax_number']) && (mb_strlen($this->container['sales_tax_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'sales_tax_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['dependent_locality']) && (mb_strlen($this->container['dependent_locality']) > 100)) {
            $invalidProperties[] = "invalid value for 'dependent_locality', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sorting_code']) && (mb_strlen($this->container['sorting_code']) > 100)) {
            $invalidProperties[] = "invalid value for 'sorting_code', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['salutation']) && (mb_strlen($this->container['salutation']) > 20)) {
            $invalidProperties[] = "invalid value for 'salutation', the character length must be smaller than or equal to 20.";
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The two-letter country code (ISO 3166 format).
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
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
     * @param string|null $mobile_phone_number The phone number of a mobile phone.
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        if (is_null($mobile_phone_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone_number cannot be null');
        }
        if ((mb_strlen($mobile_phone_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $mobile_phone_number when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name The organization's name.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            throw new \InvalidArgumentException('non-nullable organization_name cannot be null');
        }
        if ((mb_strlen($organization_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city, town or village.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name The given or first name.
     *
     * @return self
     */
    public function setGivenName($given_name)
    {
        if (is_null($given_name)) {
            throw new \InvalidArgumentException('non-nullable given_name cannot be null');
        }
        if ((mb_strlen($given_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode The postal code, also known as ZIP, postcode, etc.
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets sales_tax_number
     *
     * @return string|null
     */
    public function getSalesTaxNumber()
    {
        return $this->container['sales_tax_number'];
    }

    /**
     * Sets sales_tax_number
     *
     * @param string|null $sales_tax_number The sales tax number of the organization.
     *
     * @return self
     */
    public function setSalesTaxNumber($sales_tax_number)
    {
        if (is_null($sales_tax_number)) {
            throw new \InvalidArgumentException('non-nullable sales_tax_number cannot be null');
        }
        if ((mb_strlen($sales_tax_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sales_tax_number when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }

    /**
     * Gets dependent_locality
     *
     * @return string|null
     */
    public function getDependentLocality()
    {
        return $this->container['dependent_locality'];
    }

    /**
     * Sets dependent_locality
     *
     * @param string|null $dependent_locality The dependent locality which is a sub-division of the state.
     *
     * @return self
     */
    public function setDependentLocality($dependent_locality)
    {
        if (is_null($dependent_locality)) {
            throw new \InvalidArgumentException('non-nullable dependent_locality cannot be null');
        }
        if ((mb_strlen($dependent_locality) > 100)) {
            throw new \InvalidArgumentException('invalid length for $dependent_locality when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['dependent_locality'] = $dependent_locality;

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
     * @param string|null $email_address The email address used for communication with clients.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The phone number.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        if ((mb_strlen($phone_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets sorting_code
     *
     * @return string|null
     */
    public function getSortingCode()
    {
        return $this->container['sorting_code'];
    }

    /**
     * Sets sorting_code
     *
     * @param string|null $sorting_code The sorting code identifying the post office where the PO Box is located.
     *
     * @return self
     */
    public function setSortingCode($sorting_code)
    {
        if (is_null($sorting_code)) {
            throw new \InvalidArgumentException('non-nullable sorting_code cannot be null');
        }
        if ((mb_strlen($sorting_code) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sorting_code when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['sorting_code'] = $sorting_code;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street The street or PO Box.
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string|null $family_name The family or last name.
     *
     * @return self
     */
    public function setFamilyName($family_name)
    {
        if (is_null($family_name)) {
            throw new \InvalidArgumentException('non-nullable family_name cannot be null');
        }
        if ((mb_strlen($family_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets postal_state
     *
     * @return string|null
     */
    public function getPostalState()
    {
        return $this->container['postal_state'];
    }

    /**
     * Sets postal_state
     *
     * @param string|null $postal_state The name of the region, typically a state, county, province or prefecture.
     *
     * @return self
     */
    public function setPostalState($postal_state)
    {
        if (is_null($postal_state)) {
            throw new \InvalidArgumentException('non-nullable postal_state cannot be null');
        }
        $this->container['postal_state'] = $postal_state;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation The salutation e.g. Mrs, Mr, Dr.
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        if ((mb_strlen($salutation) > 20)) {
            throw new \InvalidArgumentException('invalid length for $salutation when calling SpaceAddressCreate., must be smaller than or equal to 20.');
        }

        $this->container['salutation'] = $salutation;

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


