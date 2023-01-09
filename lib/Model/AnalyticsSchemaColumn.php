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
 * AnalyticsSchemaColumn model
 *
 * @category    Class
 * @description Meta information about a column within a table.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AnalyticsSchemaColumn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsSchemaColumn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alias_name' => 'string',
        'column_name' => 'string',
        'description' => 'map[string,string]',
        'precision' => 'int',
        'referenced_table' => 'string',
        'scale' => 'int',
        'table_name' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alias_name' => null,
        'column_name' => null,
        'description' => null,
        'precision' => 'int32',
        'referenced_table' => null,
        'scale' => 'int32',
        'table_name' => null,
        'type' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alias_name' => 'aliasName',
        'column_name' => 'columnName',
        'description' => 'description',
        'precision' => 'precision',
        'referenced_table' => 'referencedTable',
        'scale' => 'scale',
        'table_name' => 'tableName',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alias_name' => 'setAliasName',
        'column_name' => 'setColumnName',
        'description' => 'setDescription',
        'precision' => 'setPrecision',
        'referenced_table' => 'setReferencedTable',
        'scale' => 'setScale',
        'table_name' => 'setTableName',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alias_name' => 'getAliasName',
        'column_name' => 'getColumnName',
        'description' => 'getDescription',
        'precision' => 'getPrecision',
        'referenced_table' => 'getReferencedTable',
        'scale' => 'getScale',
        'table_name' => 'getTableName',
        'type' => 'getType'
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
        
        $this->container['alias_name'] = isset($data['alias_name']) ? $data['alias_name'] : null;
        
        $this->container['column_name'] = isset($data['column_name']) ? $data['column_name'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
        
        $this->container['referenced_table'] = isset($data['referenced_table']) ? $data['referenced_table'] : null;
        
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
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
     * Gets alias_name
     *
     * @return string
     */
    public function getAliasName()
    {
        return $this->container['alias_name'];
    }

    /**
     * Sets alias_name
     *
     * @param string $alias_name The name of the alias defined for the column in the query or null if none is defined.
     *
     * @return $this
     */
    public function setAliasName($alias_name)
    {
        $this->container['alias_name'] = $alias_name;

        return $this;
    }
    

    /**
     * Gets column_name
     *
     * @return string
     */
    public function getColumnName()
    {
        return $this->container['column_name'];
    }

    /**
     * Sets column_name
     *
     * @param string $column_name The name of the column in the table or null if this is a synthetic column which is the result of some SQL expression.
     *
     * @return $this
     */
    public function setColumnName($column_name)
    {
        $this->container['column_name'] = $column_name;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return map[string,string]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param map[string,string] $description A human readable description of the property contained in this column or null if this is a synthetic column which is the result of some SQL expression.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets precision
     *
     * @return int
     */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
     * Sets precision
     *
     * @param int $precision The precision (maximal number of digits) for decimal data types, otherwise 0.
     *
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;

        return $this;
    }
    

    /**
     * Gets referenced_table
     *
     * @return string
     */
    public function getReferencedTable()
    {
        return $this->container['referenced_table'];
    }

    /**
     * Sets referenced_table
     *
     * @param string $referenced_table The name of the referenced table if this column represents a foreign-key relation to the IDs of another table, otherwise null.
     *
     * @return $this
     */
    public function setReferencedTable($referenced_table)
    {
        $this->container['referenced_table'] = $referenced_table;

        return $this;
    }
    

    /**
     * Gets scale
     *
     * @return int
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     *
     * @param int $scale The scale (maximal number number of digits in the fractional part) in case of a decimal data type, otherwise 0.
     *
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;

        return $this;
    }
    

    /**
     * Gets table_name
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     *
     * @param string $table_name The name of the table which defines this column.
     *
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The ORC data type of the column value.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


