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
 * Permission model
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
class Permission implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parent' => 'int',
        'feature' => '\PostFinanceCheckout\Sdk\Model\Feature',
        'name' => 'array<string,string>',
        'path_to_root' => 'int[]',
        'web_app_enabled' => 'bool',
        'description' => 'array<string,string>',
        'id' => 'int',
        'leaf' => 'bool',
        'title' => 'array<string,string>',
        'group' => 'bool',
        'two_factor_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'parent' => 'int64',
        'feature' => null,
        'name' => null,
        'path_to_root' => 'int64',
        'web_app_enabled' => null,
        'description' => null,
        'id' => 'int64',
        'leaf' => null,
        'title' => null,
        'group' => null,
        'two_factor_required' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'parent' => false,
        'feature' => false,
        'name' => false,
        'path_to_root' => false,
        'web_app_enabled' => false,
        'description' => false,
        'id' => false,
        'leaf' => false,
        'title' => false,
        'group' => false,
        'two_factor_required' => false
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
        'parent' => 'parent',
        'feature' => 'feature',
        'name' => 'name',
        'path_to_root' => 'pathToRoot',
        'web_app_enabled' => 'webAppEnabled',
        'description' => 'description',
        'id' => 'id',
        'leaf' => 'leaf',
        'title' => 'title',
        'group' => 'group',
        'two_factor_required' => 'twoFactorRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
        'feature' => 'setFeature',
        'name' => 'setName',
        'path_to_root' => 'setPathToRoot',
        'web_app_enabled' => 'setWebAppEnabled',
        'description' => 'setDescription',
        'id' => 'setId',
        'leaf' => 'setLeaf',
        'title' => 'setTitle',
        'group' => 'setGroup',
        'two_factor_required' => 'setTwoFactorRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
        'feature' => 'getFeature',
        'name' => 'getName',
        'path_to_root' => 'getPathToRoot',
        'web_app_enabled' => 'getWebAppEnabled',
        'description' => 'getDescription',
        'id' => 'getId',
        'leaf' => 'getLeaf',
        'title' => 'getTitle',
        'group' => 'getGroup',
        'two_factor_required' => 'getTwoFactorRequired'
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
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('feature', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('path_to_root', $data ?? [], null);
        $this->setIfExists('web_app_enabled', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('leaf', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('two_factor_required', $data ?? [], null);
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
     * Gets parent
     *
     * @return int|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param int|null $parent The group that this permission belongs to.
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            throw new \InvalidArgumentException('non-nullable parent cannot be null');
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets feature
     *
     * @return \PostFinanceCheckout\Sdk\Model\Feature|null
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param \PostFinanceCheckout\Sdk\Model\Feature|null $feature feature
     *
     * @return self
     */
    public function setFeature($feature)
    {
        if (is_null($feature)) {
            throw new \InvalidArgumentException('non-nullable feature cannot be null');
        }
        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets name
     *
     * @return array<string,string>|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param array<string,string>|null $name The localized name of the object.
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
     * Gets path_to_root
     *
     * @return int[]|null
     */
    public function getPathToRoot()
    {
        return $this->container['path_to_root'];
    }

    /**
     * Sets path_to_root
     *
     * @param int[]|null $path_to_root All parents of this permission up to the root of the permission tree.
     *
     * @return self
     */
    public function setPathToRoot($path_to_root)
    {
        if (is_null($path_to_root)) {
            throw new \InvalidArgumentException('non-nullable path_to_root cannot be null');
        }
        $this->container['path_to_root'] = $path_to_root;

        return $this;
    }

    /**
     * Gets web_app_enabled
     *
     * @return bool|null
     */
    public function getWebAppEnabled()
    {
        return $this->container['web_app_enabled'];
    }

    /**
     * Sets web_app_enabled
     *
     * @param bool|null $web_app_enabled web_app_enabled
     *
     * @return self
     */
    public function setWebAppEnabled($web_app_enabled)
    {
        if (is_null($web_app_enabled)) {
            throw new \InvalidArgumentException('non-nullable web_app_enabled cannot be null');
        }
        $this->container['web_app_enabled'] = $web_app_enabled;

        return $this;
    }

    /**
     * Gets description
     *
     * @return array<string,string>|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param array<string,string>|null $description The localized description of the object.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id A unique identifier for the object.
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
     * Gets leaf
     *
     * @return bool|null
     */
    public function getLeaf()
    {
        return $this->container['leaf'];
    }

    /**
     * Sets leaf
     *
     * @param bool|null $leaf Whether this is a leaf in the tree of permissions, and not a group.
     *
     * @return self
     */
    public function setLeaf($leaf)
    {
        if (is_null($leaf)) {
            throw new \InvalidArgumentException('non-nullable leaf cannot be null');
        }
        $this->container['leaf'] = $leaf;

        return $this;
    }

    /**
     * Gets title
     *
     * @return array<string,string>|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param array<string,string>|null $title The localized name of the object.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets group
     *
     * @return bool|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param bool|null $group Whether this is a permission group.
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets two_factor_required
     *
     * @return bool|null
     */
    public function getTwoFactorRequired()
    {
        return $this->container['two_factor_required'];
    }

    /**
     * Sets two_factor_required
     *
     * @param bool|null $two_factor_required Whether users with this permission are required to enable two-factor authentication.
     *
     * @return self
     */
    public function setTwoFactorRequired($two_factor_required)
    {
        if (is_null($two_factor_required)) {
            throw new \InvalidArgumentException('non-nullable two_factor_required cannot be null');
        }
        $this->container['two_factor_required'] = $two_factor_required;

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


