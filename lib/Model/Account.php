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
 * Account model
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_or_restricted_active' => 'bool',
        'deleted_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'active' => 'bool',
        'parent_account' => '\PostFinanceCheckout\Sdk\Model\Account',
        'type' => '\PostFinanceCheckout\Sdk\Model\AccountType',
        'created_on' => '\DateTime',
        'version' => 'int',
        'deleted_by' => 'int',
        'restricted_active' => 'bool',
        'created_by' => 'int',
        'scope' => '\PostFinanceCheckout\Sdk\Model\Scope',
        'name' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\AccountState',
        'subaccount_limit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_or_restricted_active' => null,
        'deleted_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'active' => null,
        'parent_account' => null,
        'type' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'deleted_by' => 'int64',
        'restricted_active' => null,
        'created_by' => 'int64',
        'scope' => null,
        'name' => null,
        'id' => 'int64',
        'state' => null,
        'subaccount_limit' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active_or_restricted_active' => false,
        'deleted_on' => false,
        'planned_purge_date' => false,
        'active' => false,
        'parent_account' => false,
        'type' => false,
        'created_on' => false,
        'version' => false,
        'deleted_by' => false,
        'restricted_active' => false,
        'created_by' => false,
        'scope' => false,
        'name' => false,
        'id' => false,
        'state' => false,
        'subaccount_limit' => false
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
        'active_or_restricted_active' => 'activeOrRestrictedActive',
        'deleted_on' => 'deletedOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'active' => 'active',
        'parent_account' => 'parentAccount',
        'type' => 'type',
        'created_on' => 'createdOn',
        'version' => 'version',
        'deleted_by' => 'deletedBy',
        'restricted_active' => 'restrictedActive',
        'created_by' => 'createdBy',
        'scope' => 'scope',
        'name' => 'name',
        'id' => 'id',
        'state' => 'state',
        'subaccount_limit' => 'subaccountLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_or_restricted_active' => 'setActiveOrRestrictedActive',
        'deleted_on' => 'setDeletedOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'active' => 'setActive',
        'parent_account' => 'setParentAccount',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'deleted_by' => 'setDeletedBy',
        'restricted_active' => 'setRestrictedActive',
        'created_by' => 'setCreatedBy',
        'scope' => 'setScope',
        'name' => 'setName',
        'id' => 'setId',
        'state' => 'setState',
        'subaccount_limit' => 'setSubaccountLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_or_restricted_active' => 'getActiveOrRestrictedActive',
        'deleted_on' => 'getDeletedOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'active' => 'getActive',
        'parent_account' => 'getParentAccount',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'deleted_by' => 'getDeletedBy',
        'restricted_active' => 'getRestrictedActive',
        'created_by' => 'getCreatedBy',
        'scope' => 'getScope',
        'name' => 'getName',
        'id' => 'getId',
        'state' => 'getState',
        'subaccount_limit' => 'getSubaccountLimit'
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
        $this->setIfExists('active_or_restricted_active', $data ?? [], null);
        $this->setIfExists('deleted_on', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('parent_account', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('deleted_by', $data ?? [], null);
        $this->setIfExists('restricted_active', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('subaccount_limit', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
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
     * Gets active_or_restricted_active
     *
     * @return bool|null
     */
    public function getActiveOrRestrictedActive()
    {
        return $this->container['active_or_restricted_active'];
    }

    /**
     * Sets active_or_restricted_active
     *
     * @param bool|null $active_or_restricted_active Whether this account and all its parent accounts are active or restricted active.
     *
     * @return self
     */
    public function setActiveOrRestrictedActive($active_or_restricted_active)
    {
        if (is_null($active_or_restricted_active)) {
            throw new \InvalidArgumentException('non-nullable active_or_restricted_active cannot be null');
        }
        $this->container['active_or_restricted_active'] = $active_or_restricted_active;

        return $this;
    }

    /**
     * Gets deleted_on
     *
     * @return \DateTime|null
     */
    public function getDeletedOn()
    {
        return $this->container['deleted_on'];
    }

    /**
     * Sets deleted_on
     *
     * @param \DateTime|null $deleted_on The date and time when the account was deleted.
     *
     * @return self
     */
    public function setDeletedOn($deleted_on)
    {
        if (is_null($deleted_on)) {
            throw new \InvalidArgumentException('non-nullable deleted_on cannot be null');
        }
        $this->container['deleted_on'] = $deleted_on;

        return $this;
    }

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime|null
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime|null $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return self
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        if (is_null($planned_purge_date)) {
            throw new \InvalidArgumentException('non-nullable planned_purge_date cannot be null');
        }
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether this account and all its parent accounts are active.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets parent_account
     *
     * @return \PostFinanceCheckout\Sdk\Model\Account|null
     */
    public function getParentAccount()
    {
        return $this->container['parent_account'];
    }

    /**
     * Sets parent_account
     *
     * @param \PostFinanceCheckout\Sdk\Model\Account|null $parent_account parent_account
     *
     * @return self
     */
    public function setParentAccount($parent_account)
    {
        if (is_null($parent_account)) {
            throw new \InvalidArgumentException('non-nullable parent_account cannot be null');
        }
        $this->container['parent_account'] = $parent_account;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\AccountType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\AccountType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime|null $created_on The date and time when the account was created.
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        if (is_null($created_on)) {
            throw new \InvalidArgumentException('non-nullable created_on cannot be null');
        }
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets deleted_by
     *
     * @return int|null
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param int|null $deleted_by The ID of a user the account was deleted by.
     *
     * @return self
     */
    public function setDeletedBy($deleted_by)
    {
        if (is_null($deleted_by)) {
            throw new \InvalidArgumentException('non-nullable deleted_by cannot be null');
        }
        $this->container['deleted_by'] = $deleted_by;

        return $this;
    }

    /**
     * Gets restricted_active
     *
     * @return bool|null
     */
    public function getRestrictedActive()
    {
        return $this->container['restricted_active'];
    }

    /**
     * Sets restricted_active
     *
     * @param bool|null $restricted_active Whether this account and all its parent accounts are active or restricted active. There is at least one account that is restricted active.
     *
     * @return self
     */
    public function setRestrictedActive($restricted_active)
    {
        if (is_null($restricted_active)) {
            throw new \InvalidArgumentException('non-nullable restricted_active cannot be null');
        }
        $this->container['restricted_active'] = $restricted_active;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return int|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int|null $created_by The ID of the user the account was created by.
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \PostFinanceCheckout\Sdk\Model\Scope|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \PostFinanceCheckout\Sdk\Model\Scope|null $scope scope
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name used to identify the account.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Account., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Account., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

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
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\AccountState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\AccountState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets subaccount_limit
     *
     * @return int|null
     */
    public function getSubaccountLimit()
    {
        return $this->container['subaccount_limit'];
    }

    /**
     * Sets subaccount_limit
     *
     * @param int|null $subaccount_limit The number of sub-accounts that can be created within this account.
     *
     * @return self
     */
    public function setSubaccountLimit($subaccount_limit)
    {
        if (is_null($subaccount_limit)) {
            throw new \InvalidArgumentException('non-nullable subaccount_limit cannot be null');
        }
        $this->container['subaccount_limit'] = $subaccount_limit;

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


