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
 * SubscriptionChargeCreate model
 *
 * @category Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionChargeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionCharge.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference' => 'string',
        'planned_execution_date' => '\DateTime',
        'processing_type' => '\PostFinanceCheckout\Sdk\Model\SubscriptionChargeProcessingType',
        'external_id' => 'string',
        'success_url' => 'string',
        'subscription' => 'int',
        'failed_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference' => null,
        'planned_execution_date' => 'date-time',
        'processing_type' => null,
        'external_id' => null,
        'success_url' => null,
        'subscription' => 'int64',
        'failed_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference' => false,
        'planned_execution_date' => false,
        'processing_type' => false,
        'external_id' => false,
        'success_url' => false,
        'subscription' => false,
        'failed_url' => false
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
        'reference' => 'reference',
        'planned_execution_date' => 'plannedExecutionDate',
        'processing_type' => 'processingType',
        'external_id' => 'externalId',
        'success_url' => 'successUrl',
        'subscription' => 'subscription',
        'failed_url' => 'failedUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'planned_execution_date' => 'setPlannedExecutionDate',
        'processing_type' => 'setProcessingType',
        'external_id' => 'setExternalId',
        'success_url' => 'setSuccessUrl',
        'subscription' => 'setSubscription',
        'failed_url' => 'setFailedUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'planned_execution_date' => 'getPlannedExecutionDate',
        'processing_type' => 'getProcessingType',
        'external_id' => 'getExternalId',
        'success_url' => 'getSuccessUrl',
        'subscription' => 'getSubscription',
        'failed_url' => 'getFailedUrl'
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
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('planned_execution_date', $data ?? [], null);
        $this->setIfExists('processing_type', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('failed_url', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['reference'])) {
            $invalidProperties[] = "invalid value for 'reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if ($this->container['processing_type'] === null) {
            $invalidProperties[] = "'processing_type' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
        }

        if ($this->container['subscription'] === null) {
            $invalidProperties[] = "'subscription' can't be null";
        }
        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be bigger than or equal to 9.";
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
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The merchant's reference used to identify the charge.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionChargeCreate., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($reference)))) {
            throw new \InvalidArgumentException("invalid value for \$reference when calling SubscriptionChargeCreate., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets planned_execution_date
     *
     * @return \DateTime|null
     */
    public function getPlannedExecutionDate()
    {
        return $this->container['planned_execution_date'];
    }

    /**
     * Sets planned_execution_date
     *
     * @param \DateTime|null $planned_execution_date The date and time when the execution of the charge is planned.
     *
     * @return self
     */
    public function setPlannedExecutionDate($planned_execution_date)
    {
        if (is_null($planned_execution_date)) {
            throw new \InvalidArgumentException('non-nullable planned_execution_date cannot be null');
        }
        $this->container['planned_execution_date'] = $planned_execution_date;

        return $this;
    }

    /**
     * Gets processing_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionChargeProcessingType
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionChargeProcessingType $processing_type processing_type
     *
     * @return self
     */
    public function setProcessingType($processing_type)
    {
        if (is_null($processing_type)) {
            throw new \InvalidArgumentException('non-nullable processing_type cannot be null');
        }
        $this->container['processing_type'] = $processing_type;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id A client-generated nonce which uniquely identifies some action to be executed. Subsequent requests with the same external ID do not execute the action again, but return the original result.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url The URL to redirect the customer back to after they successfully authenticated their payment.
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        if ((mb_strlen($success_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionChargeCreate., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionChargeCreate., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return int
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param int $subscription The subscription that the charge belongs to.
     *
     * @return self
     */
    public function setSubscription($subscription)
    {
        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets failed_url
     *
     * @return string|null
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string|null $failed_url The URL to redirect the customer back to after they canceled or failed to authenticated their payment.
     *
     * @return self
     */
    public function setFailedUrl($failed_url)
    {
        if (is_null($failed_url)) {
            throw new \InvalidArgumentException('non-nullable failed_url cannot be null');
        }
        if ((mb_strlen($failed_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionChargeCreate., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionChargeCreate., must be bigger than or equal to 9.');
        }

        $this->container['failed_url'] = $failed_url;

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


