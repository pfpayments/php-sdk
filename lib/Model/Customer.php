<?php
/**
 * PostFinance Checkout SDK
 *
 * This library allows to interact with the PostFinance Checkout payment service.
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
 * Customer model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => '\DateTime',
        'customer_id' => 'string',
        'email_address' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'id' => 'int',
        'language' => 'string',
        'linked_space_id' => 'int',
        'meta_data' => 'map[string,string]',
        'preferred_currency' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => 'date-time',
        'customer_id' => null,
        'email_address' => null,
        'family_name' => null,
        'given_name' => null,
        'id' => 'int64',
        'language' => null,
        'linked_space_id' => 'int64',
        'meta_data' => null,
        'preferred_currency' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_on' => 'createdOn',
        'customer_id' => 'customerId',
        'email_address' => 'emailAddress',
        'family_name' => 'familyName',
        'given_name' => 'givenName',
        'id' => 'id',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'meta_data' => 'metaData',
        'preferred_currency' => 'preferredCurrency',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'customer_id' => 'setCustomerId',
        'email_address' => 'setEmailAddress',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'id' => 'setId',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'meta_data' => 'setMetaData',
        'preferred_currency' => 'setPreferredCurrency',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'customer_id' => 'getCustomerId',
        'email_address' => 'getEmailAddress',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'id' => 'getId',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'meta_data' => 'getMetaData',
        'preferred_currency' => 'getPreferredCurrency',
        'version' => 'getVersion'
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
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        $this->container['preferred_currency'] = isset($data['preferred_currency']) ? $data['preferred_currency'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['customer_id']) && (mb_strlen($this->container['customer_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'customer_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

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
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The created on date indicates the date on which the entity was stored into the database.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id 
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        if (!is_null($customer_id) && (mb_strlen($customer_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $customer_id when calling Customer., must be smaller than or equal to 100.');
        }

        $this->container['customer_id'] = $customer_id;

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
        if (!is_null($email_address) && (mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling Customer., must be smaller than or equal to 254.');
        }

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
        if (!is_null($family_name) && (mb_strlen($family_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Customer., must be smaller than or equal to 100.');
        }

        $this->container['family_name'] = $family_name;

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
        if (!is_null($given_name) && (mb_strlen($given_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Customer., must be smaller than or equal to 100.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language 
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The linked space id holds the ID of the space to which the entity belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets meta_data
     *
     * @return map[string,string]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param map[string,string] $meta_data Meta data allow to store additional data along the object.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }
    

    /**
     * Gets preferred_currency
     *
     * @return string
     */
    public function getPreferredCurrency()
    {
        return $this->container['preferred_currency'];
    }

    /**
     * Sets preferred_currency
     *
     * @param string $preferred_currency 
     *
     * @return $this
     */
    public function setPreferredCurrency($preferred_currency)
    {
        $this->container['preferred_currency'] = $preferred_currency;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return $this
     */
    public function setVersion($version)
    {
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


