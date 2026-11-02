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
 * RelatedPerson model
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
class RelatedPerson implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RelatedPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_address' => 'string',
        'is_selected_shareholder_or_director' => 'bool',
        'place_of_birth' => 'string',
        'identity_info' => '\PostFinanceCheckout\Sdk\Model\IdentityInfo',
        'nationality' => 'string',
        'contact_language' => 'string',
        'is_director' => 'bool',
        'representative_info' => '\PostFinanceCheckout\Sdk\Model\RepresentativeInfo',
        'job_role' => 'string',
        'id' => 'string',
        'company_share' => 'float',
        'residence_address' => '\PostFinanceCheckout\Sdk\Model\BasicAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email_address' => null,
        'is_selected_shareholder_or_director' => null,
        'place_of_birth' => null,
        'identity_info' => null,
        'nationality' => null,
        'contact_language' => null,
        'is_director' => null,
        'representative_info' => null,
        'job_role' => null,
        'id' => null,
        'company_share' => null,
        'residence_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email_address' => false,
        'is_selected_shareholder_or_director' => false,
        'place_of_birth' => false,
        'identity_info' => false,
        'nationality' => false,
        'contact_language' => false,
        'is_director' => false,
        'representative_info' => false,
        'job_role' => false,
        'id' => false,
        'company_share' => false,
        'residence_address' => false
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
        'email_address' => 'emailAddress',
        'is_selected_shareholder_or_director' => 'isSelectedShareholderOrDirector',
        'place_of_birth' => 'placeOfBirth',
        'identity_info' => 'identityInfo',
        'nationality' => 'nationality',
        'contact_language' => 'contactLanguage',
        'is_director' => 'isDirector',
        'representative_info' => 'representativeInfo',
        'job_role' => 'jobRole',
        'id' => 'id',
        'company_share' => 'companyShare',
        'residence_address' => 'residenceAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'is_selected_shareholder_or_director' => 'setIsSelectedShareholderOrDirector',
        'place_of_birth' => 'setPlaceOfBirth',
        'identity_info' => 'setIdentityInfo',
        'nationality' => 'setNationality',
        'contact_language' => 'setContactLanguage',
        'is_director' => 'setIsDirector',
        'representative_info' => 'setRepresentativeInfo',
        'job_role' => 'setJobRole',
        'id' => 'setId',
        'company_share' => 'setCompanyShare',
        'residence_address' => 'setResidenceAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'is_selected_shareholder_or_director' => 'getIsSelectedShareholderOrDirector',
        'place_of_birth' => 'getPlaceOfBirth',
        'identity_info' => 'getIdentityInfo',
        'nationality' => 'getNationality',
        'contact_language' => 'getContactLanguage',
        'is_director' => 'getIsDirector',
        'representative_info' => 'getRepresentativeInfo',
        'job_role' => 'getJobRole',
        'id' => 'getId',
        'company_share' => 'getCompanyShare',
        'residence_address' => 'getResidenceAddress'
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
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('is_selected_shareholder_or_director', $data ?? [], null);
        $this->setIfExists('place_of_birth', $data ?? [], null);
        $this->setIfExists('identity_info', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('contact_language', $data ?? [], null);
        $this->setIfExists('is_director', $data ?? [], null);
        $this->setIfExists('representative_info', $data ?? [], null);
        $this->setIfExists('job_role', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('company_share', $data ?? [], null);
        $this->setIfExists('residence_address', $data ?? [], null);
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
     * @param string|null $email_address email_address
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
     * Gets is_selected_shareholder_or_director
     *
     * @return bool|null
     */
    public function getIsSelectedShareholderOrDirector()
    {
        return $this->container['is_selected_shareholder_or_director'];
    }

    /**
     * Sets is_selected_shareholder_or_director
     *
     * @param bool|null $is_selected_shareholder_or_director is_selected_shareholder_or_director
     *
     * @return self
     */
    public function setIsSelectedShareholderOrDirector($is_selected_shareholder_or_director)
    {
        if (is_null($is_selected_shareholder_or_director)) {
            throw new \InvalidArgumentException('non-nullable is_selected_shareholder_or_director cannot be null');
        }
        $this->container['is_selected_shareholder_or_director'] = $is_selected_shareholder_or_director;

        return $this;
    }

    /**
     * Gets place_of_birth
     *
     * @return string|null
     */
    public function getPlaceOfBirth()
    {
        return $this->container['place_of_birth'];
    }

    /**
     * Sets place_of_birth
     *
     * @param string|null $place_of_birth place_of_birth
     *
     * @return self
     */
    public function setPlaceOfBirth($place_of_birth)
    {
        if (is_null($place_of_birth)) {
            throw new \InvalidArgumentException('non-nullable place_of_birth cannot be null');
        }
        $this->container['place_of_birth'] = $place_of_birth;

        return $this;
    }

    /**
     * Gets identity_info
     *
     * @return \PostFinanceCheckout\Sdk\Model\IdentityInfo|null
     */
    public function getIdentityInfo()
    {
        return $this->container['identity_info'];
    }

    /**
     * Sets identity_info
     *
     * @param \PostFinanceCheckout\Sdk\Model\IdentityInfo|null $identity_info identity_info
     *
     * @return self
     */
    public function setIdentityInfo($identity_info)
    {
        if (is_null($identity_info)) {
            throw new \InvalidArgumentException('non-nullable identity_info cannot be null');
        }
        $this->container['identity_info'] = $identity_info;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            throw new \InvalidArgumentException('non-nullable nationality cannot be null');
        }
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets contact_language
     *
     * @return string|null
     */
    public function getContactLanguage()
    {
        return $this->container['contact_language'];
    }

    /**
     * Sets contact_language
     *
     * @param string|null $contact_language contact_language
     *
     * @return self
     */
    public function setContactLanguage($contact_language)
    {
        if (is_null($contact_language)) {
            throw new \InvalidArgumentException('non-nullable contact_language cannot be null');
        }
        $this->container['contact_language'] = $contact_language;

        return $this;
    }

    /**
     * Gets is_director
     *
     * @return bool|null
     */
    public function getIsDirector()
    {
        return $this->container['is_director'];
    }

    /**
     * Sets is_director
     *
     * @param bool|null $is_director is_director
     *
     * @return self
     */
    public function setIsDirector($is_director)
    {
        if (is_null($is_director)) {
            throw new \InvalidArgumentException('non-nullable is_director cannot be null');
        }
        $this->container['is_director'] = $is_director;

        return $this;
    }

    /**
     * Gets representative_info
     *
     * @return \PostFinanceCheckout\Sdk\Model\RepresentativeInfo|null
     */
    public function getRepresentativeInfo()
    {
        return $this->container['representative_info'];
    }

    /**
     * Sets representative_info
     *
     * @param \PostFinanceCheckout\Sdk\Model\RepresentativeInfo|null $representative_info representative_info
     *
     * @return self
     */
    public function setRepresentativeInfo($representative_info)
    {
        if (is_null($representative_info)) {
            throw new \InvalidArgumentException('non-nullable representative_info cannot be null');
        }
        $this->container['representative_info'] = $representative_info;

        return $this;
    }

    /**
     * Gets job_role
     *
     * @return string|null
     */
    public function getJobRole()
    {
        return $this->container['job_role'];
    }

    /**
     * Sets job_role
     *
     * @param string|null $job_role job_role
     *
     * @return self
     */
    public function setJobRole($job_role)
    {
        if (is_null($job_role)) {
            throw new \InvalidArgumentException('non-nullable job_role cannot be null');
        }
        $this->container['job_role'] = $job_role;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
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
     * Gets company_share
     *
     * @return float|null
     */
    public function getCompanyShare()
    {
        return $this->container['company_share'];
    }

    /**
     * Sets company_share
     *
     * @param float|null $company_share company_share
     *
     * @return self
     */
    public function setCompanyShare($company_share)
    {
        if (is_null($company_share)) {
            throw new \InvalidArgumentException('non-nullable company_share cannot be null');
        }
        $this->container['company_share'] = $company_share;

        return $this;
    }

    /**
     * Gets residence_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\BasicAddress|null
     */
    public function getResidenceAddress()
    {
        return $this->container['residence_address'];
    }

    /**
     * Sets residence_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\BasicAddress|null $residence_address residence_address
     *
     * @return self
     */
    public function setResidenceAddress($residence_address)
    {
        if (is_null($residence_address)) {
            throw new \InvalidArgumentException('non-nullable residence_address cannot be null');
        }
        $this->container['residence_address'] = $residence_address;

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


