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
 * Address model
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
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'mobile_phone_number' => 'string',
        'gender' => '\PostFinanceCheckout\Sdk\Model\Gender',
        'organization_name' => 'string',
        'city' => 'string',
        'commercial_register_number' => 'string',
        'social_security_number' => 'string',
        'given_name' => 'string',
        'postcode' => 'string',
        'legal_organization_form' => '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm',
        'sales_tax_number' => 'string',
        'date_of_birth' => '\DateTime',
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
        'gender' => null,
        'organization_name' => null,
        'city' => null,
        'commercial_register_number' => null,
        'social_security_number' => null,
        'given_name' => null,
        'postcode' => null,
        'legal_organization_form' => null,
        'sales_tax_number' => null,
        'date_of_birth' => 'date',
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
        'gender' => false,
        'organization_name' => false,
        'city' => false,
        'commercial_register_number' => false,
        'social_security_number' => false,
        'given_name' => false,
        'postcode' => false,
        'legal_organization_form' => false,
        'sales_tax_number' => false,
        'date_of_birth' => false,
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
        'country' => 'country',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'gender' => 'gender',
        'organization_name' => 'organizationName',
        'city' => 'city',
        'commercial_register_number' => 'commercialRegisterNumber',
        'social_security_number' => 'socialSecurityNumber',
        'given_name' => 'givenName',
        'postcode' => 'postcode',
        'legal_organization_form' => 'legalOrganizationForm',
        'sales_tax_number' => 'salesTaxNumber',
        'date_of_birth' => 'dateOfBirth',
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
        'gender' => 'setGender',
        'organization_name' => 'setOrganizationName',
        'city' => 'setCity',
        'commercial_register_number' => 'setCommercialRegisterNumber',
        'social_security_number' => 'setSocialSecurityNumber',
        'given_name' => 'setGivenName',
        'postcode' => 'setPostcode',
        'legal_organization_form' => 'setLegalOrganizationForm',
        'sales_tax_number' => 'setSalesTaxNumber',
        'date_of_birth' => 'setDateOfBirth',
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
        'gender' => 'getGender',
        'organization_name' => 'getOrganizationName',
        'city' => 'getCity',
        'commercial_register_number' => 'getCommercialRegisterNumber',
        'social_security_number' => 'getSocialSecurityNumber',
        'given_name' => 'getGivenName',
        'postcode' => 'getPostcode',
        'legal_organization_form' => 'getLegalOrganizationForm',
        'sales_tax_number' => 'getSalesTaxNumber',
        'date_of_birth' => 'getDateOfBirth',
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('mobile_phone_number', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('commercial_register_number', $data ?? [], null);
        $this->setIfExists('social_security_number', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('legal_organization_form', $data ?? [], null);
        $this->setIfExists('sales_tax_number', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
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

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 100)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['commercial_register_number']) && (mb_strlen($this->container['commercial_register_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'commercial_register_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['social_security_number']) && (mb_strlen($this->container['social_security_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'social_security_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 40)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['sales_tax_number']) && (mb_strlen($this->container['sales_tax_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'sales_tax_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['dependent_locality']) && (mb_strlen($this->container['dependent_locality']) > 100)) {
            $invalidProperties[] = "invalid value for 'dependent_locality', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sorting_code']) && (mb_strlen($this->container['sorting_code']) > 100)) {
            $invalidProperties[] = "invalid value for 'sorting_code', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) > 300)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 300.";
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
    public function valid(): bool
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
            throw new \InvalidArgumentException('invalid length for $mobile_phone_number when calling Address., must be smaller than or equal to 100.');
        }

        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \PostFinanceCheckout\Sdk\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \PostFinanceCheckout\Sdk\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

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
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Address., must be smaller than or equal to 100.');
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
        if ((mb_strlen($city) > 100)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 100.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets commercial_register_number
     *
     * @return string|null
     */
    public function getCommercialRegisterNumber()
    {
        return $this->container['commercial_register_number'];
    }

    /**
     * Sets commercial_register_number
     *
     * @param string|null $commercial_register_number The commercial registration number of the organization.
     *
     * @return self
     */
    public function setCommercialRegisterNumber($commercial_register_number)
    {
        if (is_null($commercial_register_number)) {
            throw new \InvalidArgumentException('non-nullable commercial_register_number cannot be null');
        }
        if ((mb_strlen($commercial_register_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $commercial_register_number when calling Address., must be smaller than or equal to 100.');
        }

        $this->container['commercial_register_number'] = $commercial_register_number;

        return $this;
    }

    /**
     * Gets social_security_number
     *
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string|null $social_security_number The social security number.
     *
     * @return self
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        if (is_null($social_security_number)) {
            throw new \InvalidArgumentException('non-nullable social_security_number cannot be null');
        }
        if ((mb_strlen($social_security_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $social_security_number when calling Address., must be smaller than or equal to 100.');
        }

        $this->container['social_security_number'] = $social_security_number;

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
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be smaller than or equal to 100.');
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
        if ((mb_strlen($postcode) > 40)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling Address., must be smaller than or equal to 40.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets legal_organization_form
     *
     * @return \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm|null
     */
    public function getLegalOrganizationForm()
    {
        return $this->container['legal_organization_form'];
    }

    /**
     * Sets legal_organization_form
     *
     * @param \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm|null $legal_organization_form legal_organization_form
     *
     * @return self
     */
    public function setLegalOrganizationForm($legal_organization_form)
    {
        if (is_null($legal_organization_form)) {
            throw new \InvalidArgumentException('non-nullable legal_organization_form cannot be null');
        }
        $this->container['legal_organization_form'] = $legal_organization_form;

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
            throw new \InvalidArgumentException('invalid length for $sales_tax_number when calling Address., must be smaller than or equal to 100.');
        }

        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth The date of birth.
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

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
            throw new \InvalidArgumentException('invalid length for $dependent_locality when calling Address., must be smaller than or equal to 100.');
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
     * @param string|null $email_address The email address.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        if ((mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling Address., must be smaller than or equal to 254.');
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
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Address., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $sorting_code when calling Address., must be smaller than or equal to 100.');
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
        if ((mb_strlen($street) > 300)) {
            throw new \InvalidArgumentException('invalid length for $street when calling Address., must be smaller than or equal to 300.');
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
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $salutation when calling Address., must be smaller than or equal to 20.');
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


