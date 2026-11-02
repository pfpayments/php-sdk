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
 * MerchantCompanyDetailsDto model
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
class MerchantCompanyDetailsDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantCompanyDetailsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_sector' => 'string',
        'extract' => 'string',
        'incorporation_year' => 'string',
        'organization_name' => 'string',
        'business_description' => 'string',
        'sales_tax_number' => 'string',
        'business_identification_number' => 'string',
        'incorporation_address' => '\PostFinanceCheckout\Sdk\Model\BasicAddress',
        'legal_form' => '\PostFinanceCheckout\Sdk\Model\LegalForm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_sector' => null,
        'extract' => null,
        'incorporation_year' => null,
        'organization_name' => null,
        'business_description' => null,
        'sales_tax_number' => null,
        'business_identification_number' => null,
        'incorporation_address' => null,
        'legal_form' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_sector' => false,
        'extract' => false,
        'incorporation_year' => false,
        'organization_name' => false,
        'business_description' => false,
        'sales_tax_number' => false,
        'business_identification_number' => false,
        'incorporation_address' => false,
        'legal_form' => false
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
        'business_sector' => 'businessSector',
        'extract' => 'extract',
        'incorporation_year' => 'incorporationYear',
        'organization_name' => 'organizationName',
        'business_description' => 'businessDescription',
        'sales_tax_number' => 'salesTaxNumber',
        'business_identification_number' => 'businessIdentificationNumber',
        'incorporation_address' => 'incorporationAddress',
        'legal_form' => 'legalForm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_sector' => 'setBusinessSector',
        'extract' => 'setExtract',
        'incorporation_year' => 'setIncorporationYear',
        'organization_name' => 'setOrganizationName',
        'business_description' => 'setBusinessDescription',
        'sales_tax_number' => 'setSalesTaxNumber',
        'business_identification_number' => 'setBusinessIdentificationNumber',
        'incorporation_address' => 'setIncorporationAddress',
        'legal_form' => 'setLegalForm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_sector' => 'getBusinessSector',
        'extract' => 'getExtract',
        'incorporation_year' => 'getIncorporationYear',
        'organization_name' => 'getOrganizationName',
        'business_description' => 'getBusinessDescription',
        'sales_tax_number' => 'getSalesTaxNumber',
        'business_identification_number' => 'getBusinessIdentificationNumber',
        'incorporation_address' => 'getIncorporationAddress',
        'legal_form' => 'getLegalForm'
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
        $this->setIfExists('business_sector', $data ?? [], null);
        $this->setIfExists('extract', $data ?? [], null);
        $this->setIfExists('incorporation_year', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('business_description', $data ?? [], null);
        $this->setIfExists('sales_tax_number', $data ?? [], null);
        $this->setIfExists('business_identification_number', $data ?? [], null);
        $this->setIfExists('incorporation_address', $data ?? [], null);
        $this->setIfExists('legal_form', $data ?? [], null);
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
     * Gets business_sector
     *
     * @return string|null
     */
    public function getBusinessSector()
    {
        return $this->container['business_sector'];
    }

    /**
     * Sets business_sector
     *
     * @param string|null $business_sector The business sector code or category of the merchant.
     *
     * @return self
     */
    public function setBusinessSector($business_sector)
    {
        if (is_null($business_sector)) {
            throw new \InvalidArgumentException('non-nullable business_sector cannot be null');
        }
        $this->container['business_sector'] = $business_sector;

        return $this;
    }

    /**
     * Gets extract
     *
     * @return string|null
     */
    public function getExtract()
    {
        return $this->container['extract'];
    }

    /**
     * Sets extract
     *
     * @param string|null $extract The commercial register extract or reference.
     *
     * @return self
     */
    public function setExtract($extract)
    {
        if (is_null($extract)) {
            throw new \InvalidArgumentException('non-nullable extract cannot be null');
        }
        $this->container['extract'] = $extract;

        return $this;
    }

    /**
     * Gets incorporation_year
     *
     * @return string|null
     */
    public function getIncorporationYear()
    {
        return $this->container['incorporation_year'];
    }

    /**
     * Sets incorporation_year
     *
     * @param string|null $incorporation_year The year in which the merchant company was incorporated.
     *
     * @return self
     */
    public function setIncorporationYear($incorporation_year)
    {
        if (is_null($incorporation_year)) {
            throw new \InvalidArgumentException('non-nullable incorporation_year cannot be null');
        }
        $this->container['incorporation_year'] = $incorporation_year;

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
     * @param string|null $organization_name The registered legal name of the merchant company.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            throw new \InvalidArgumentException('non-nullable organization_name cannot be null');
        }
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets business_description
     *
     * @return string|null
     */
    public function getBusinessDescription()
    {
        return $this->container['business_description'];
    }

    /**
     * Sets business_description
     *
     * @param string|null $business_description A short description of the merchant's business activity.
     *
     * @return self
     */
    public function setBusinessDescription($business_description)
    {
        if (is_null($business_description)) {
            throw new \InvalidArgumentException('non-nullable business_description cannot be null');
        }
        $this->container['business_description'] = $business_description;

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
     * @param string|null $sales_tax_number The sales tax or VAT number of the merchant company.
     *
     * @return self
     */
    public function setSalesTaxNumber($sales_tax_number)
    {
        if (is_null($sales_tax_number)) {
            throw new \InvalidArgumentException('non-nullable sales_tax_number cannot be null');
        }
        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }

    /**
     * Gets business_identification_number
     *
     * @return string|null
     */
    public function getBusinessIdentificationNumber()
    {
        return $this->container['business_identification_number'];
    }

    /**
     * Sets business_identification_number
     *
     * @param string|null $business_identification_number The official business identification number of the merchant company.
     *
     * @return self
     */
    public function setBusinessIdentificationNumber($business_identification_number)
    {
        if (is_null($business_identification_number)) {
            throw new \InvalidArgumentException('non-nullable business_identification_number cannot be null');
        }
        $this->container['business_identification_number'] = $business_identification_number;

        return $this;
    }

    /**
     * Gets incorporation_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\BasicAddress|null
     */
    public function getIncorporationAddress()
    {
        return $this->container['incorporation_address'];
    }

    /**
     * Sets incorporation_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\BasicAddress|null $incorporation_address incorporation_address
     *
     * @return self
     */
    public function setIncorporationAddress($incorporation_address)
    {
        if (is_null($incorporation_address)) {
            throw new \InvalidArgumentException('non-nullable incorporation_address cannot be null');
        }
        $this->container['incorporation_address'] = $incorporation_address;

        return $this;
    }

    /**
     * Gets legal_form
     *
     * @return \PostFinanceCheckout\Sdk\Model\LegalForm|null
     */
    public function getLegalForm()
    {
        return $this->container['legal_form'];
    }

    /**
     * Sets legal_form
     *
     * @param \PostFinanceCheckout\Sdk\Model\LegalForm|null $legal_form legal_form
     *
     * @return self
     */
    public function setLegalForm($legal_form)
    {
        if (is_null($legal_form)) {
            throw new \InvalidArgumentException('non-nullable legal_form cannot be null');
        }
        $this->container['legal_form'] = $legal_form;

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


