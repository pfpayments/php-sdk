<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
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
 * CustomerPostalAddress model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class CustomerPostalAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerPostalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'commercial_register_number' => 'string',
        'country' => 'string',
        'date_of_birth' => '\DateTime',
        'dependent_locality' => 'string',
        'email_address' => 'string',
        'family_name' => 'string',
        'gender' => '\PostFinanceCheckout\Sdk\Model\Gender',
        'given_name' => 'string',
        'legal_organization_form' => '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm',
        'mobile_phone_number' => 'string',
        'organization_name' => 'string',
        'phone_number' => 'string',
        'post_code' => 'string',
        'postal_state' => 'string',
        'sales_tax_number' => 'string',
        'salutation' => 'string',
        'social_security_number' => 'string',
        'sorting_code' => 'string',
        'street' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'city' => null,
        'commercial_register_number' => null,
        'country' => null,
        'date_of_birth' => 'date',
        'dependent_locality' => null,
        'email_address' => null,
        'family_name' => null,
        'gender' => null,
        'given_name' => null,
        'legal_organization_form' => null,
        'mobile_phone_number' => null,
        'organization_name' => null,
        'phone_number' => null,
        'post_code' => null,
        'postal_state' => null,
        'sales_tax_number' => null,
        'salutation' => null,
        'social_security_number' => null,
        'sorting_code' => null,
        'street' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'city' => 'city',
        'commercial_register_number' => 'commercialRegisterNumber',
        'country' => 'country',
        'date_of_birth' => 'dateOfBirth',
        'dependent_locality' => 'dependentLocality',
        'email_address' => 'emailAddress',
        'family_name' => 'familyName',
        'gender' => 'gender',
        'given_name' => 'givenName',
        'legal_organization_form' => 'legalOrganizationForm',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'organization_name' => 'organizationName',
        'phone_number' => 'phoneNumber',
        'post_code' => 'postCode',
        'postal_state' => 'postalState',
        'sales_tax_number' => 'salesTaxNumber',
        'salutation' => 'salutation',
        'social_security_number' => 'socialSecurityNumber',
        'sorting_code' => 'sortingCode',
        'street' => 'street'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'commercial_register_number' => 'setCommercialRegisterNumber',
        'country' => 'setCountry',
        'date_of_birth' => 'setDateOfBirth',
        'dependent_locality' => 'setDependentLocality',
        'email_address' => 'setEmailAddress',
        'family_name' => 'setFamilyName',
        'gender' => 'setGender',
        'given_name' => 'setGivenName',
        'legal_organization_form' => 'setLegalOrganizationForm',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'organization_name' => 'setOrganizationName',
        'phone_number' => 'setPhoneNumber',
        'post_code' => 'setPostCode',
        'postal_state' => 'setPostalState',
        'sales_tax_number' => 'setSalesTaxNumber',
        'salutation' => 'setSalutation',
        'social_security_number' => 'setSocialSecurityNumber',
        'sorting_code' => 'setSortingCode',
        'street' => 'setStreet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'commercial_register_number' => 'getCommercialRegisterNumber',
        'country' => 'getCountry',
        'date_of_birth' => 'getDateOfBirth',
        'dependent_locality' => 'getDependentLocality',
        'email_address' => 'getEmailAddress',
        'family_name' => 'getFamilyName',
        'gender' => 'getGender',
        'given_name' => 'getGivenName',
        'legal_organization_form' => 'getLegalOrganizationForm',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'organization_name' => 'getOrganizationName',
        'phone_number' => 'getPhoneNumber',
        'post_code' => 'getPostCode',
        'postal_state' => 'getPostalState',
        'sales_tax_number' => 'getSalesTaxNumber',
        'salutation' => 'getSalutation',
        'social_security_number' => 'getSocialSecurityNumber',
        'sorting_code' => 'getSortingCode',
        'street' => 'getStreet'
    ];

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        
        $this->container['commercial_register_number'] = isset($data['commercial_register_number']) ? $data['commercial_register_number'] : null;
        
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        
        $this->container['dependent_locality'] = isset($data['dependent_locality']) ? $data['dependent_locality'] : null;
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        
        $this->container['legal_organization_form'] = isset($data['legal_organization_form']) ? $data['legal_organization_form'] : null;
        
        $this->container['mobile_phone_number'] = isset($data['mobile_phone_number']) ? $data['mobile_phone_number'] : null;
        
        $this->container['organization_name'] = isset($data['organization_name']) ? $data['organization_name'] : null;
        
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        
        $this->container['postal_state'] = isset($data['postal_state']) ? $data['postal_state'] : null;
        
        $this->container['sales_tax_number'] = isset($data['sales_tax_number']) ? $data['sales_tax_number'] : null;
        
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        
        $this->container['social_security_number'] = isset($data['social_security_number']) ? $data['social_security_number'] : null;
        
        $this->container['sorting_code'] = isset($data['sorting_code']) ? $data['sorting_code'] : null;
        
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        
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
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }


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
        return self::$swaggerModelName;
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
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city 
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }
    

    /**
     * Gets commercial_register_number
     *
     * @return string
     */
    public function getCommercialRegisterNumber()
    {
        return $this->container['commercial_register_number'];
    }

    /**
     * Sets commercial_register_number
     *
     * @param string $commercial_register_number 
     *
     * @return $this
     */
    public function setCommercialRegisterNumber($commercial_register_number)
    {
        $this->container['commercial_register_number'] = $commercial_register_number;

        return $this;
    }
    

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }
    

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth 
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }
    

    /**
     * Gets dependent_locality
     *
     * @return string
     */
    public function getDependentLocality()
    {
        return $this->container['dependent_locality'];
    }

    /**
     * Sets dependent_locality
     *
     * @param string $dependent_locality 
     *
     * @return $this
     */
    public function setDependentLocality($dependent_locality)
    {
        $this->container['dependent_locality'] = $dependent_locality;

        return $this;
    }
    

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address 
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }
    

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name 
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }
    

    /**
     * Gets gender
     *
     * @return \PostFinanceCheckout\Sdk\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \PostFinanceCheckout\Sdk\Model\Gender $gender 
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }
    

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name 
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }
    

    /**
     * Gets legal_organization_form
     *
     * @return \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm
     */
    public function getLegalOrganizationForm()
    {
        return $this->container['legal_organization_form'];
    }

    /**
     * Sets legal_organization_form
     *
     * @param \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm $legal_organization_form 
     *
     * @return $this
     */
    public function setLegalOrganizationForm($legal_organization_form)
    {
        $this->container['legal_organization_form'] = $legal_organization_form;

        return $this;
    }
    

    /**
     * Gets mobile_phone_number
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string $mobile_phone_number 
     *
     * @return $this
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }
    

    /**
     * Gets organization_name
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string $organization_name 
     *
     * @return $this
     */
    public function setOrganizationName($organization_name)
    {
        $this->container['organization_name'] = $organization_name;

        return $this;
    }
    

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number 
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }
    

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code 
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }
    

    /**
     * Gets postal_state
     *
     * @return string
     */
    public function getPostalState()
    {
        return $this->container['postal_state'];
    }

    /**
     * Sets postal_state
     *
     * @param string $postal_state 
     *
     * @return $this
     */
    public function setPostalState($postal_state)
    {
        $this->container['postal_state'] = $postal_state;

        return $this;
    }
    

    /**
     * Gets sales_tax_number
     *
     * @return string
     */
    public function getSalesTaxNumber()
    {
        return $this->container['sales_tax_number'];
    }

    /**
     * Sets sales_tax_number
     *
     * @param string $sales_tax_number 
     *
     * @return $this
     */
    public function setSalesTaxNumber($sales_tax_number)
    {
        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }
    

    /**
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation 
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }
    

    /**
     * Gets social_security_number
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string $social_security_number 
     *
     * @return $this
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        $this->container['social_security_number'] = $social_security_number;

        return $this;
    }
    

    /**
     * Gets sorting_code
     *
     * @return string
     */
    public function getSortingCode()
    {
        return $this->container['sorting_code'];
    }

    /**
     * Sets sorting_code
     *
     * @param string $sorting_code The sorting code identifies the post office at which the post box is located in.
     *
     * @return $this
     */
    public function setSortingCode($sorting_code)
    {
        $this->container['sorting_code'] = $sorting_code;

        return $this;
    }
    

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street 
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


