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
 * BillingCycleModel model
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
class BillingCycleModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingCycleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'month' => '\PostFinanceCheckout\Sdk\Model\DisplayableMonth',
        'customization' => '\PostFinanceCheckout\Sdk\Model\BillingDayCustomization',
        'day_of_month' => 'int',
        'weekly_day' => '\PostFinanceCheckout\Sdk\Model\DisplayableDayOfWeek',
        'number_of_periods' => 'int',
        'billing_cycle_type' => '\PostFinanceCheckout\Sdk\Model\BillingCycleType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'month' => null,
        'customization' => null,
        'day_of_month' => 'int32',
        'weekly_day' => null,
        'number_of_periods' => 'int32',
        'billing_cycle_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'month' => false,
        'customization' => false,
        'day_of_month' => false,
        'weekly_day' => false,
        'number_of_periods' => false,
        'billing_cycle_type' => false
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
        'month' => 'month',
        'customization' => 'customization',
        'day_of_month' => 'dayOfMonth',
        'weekly_day' => 'weeklyDay',
        'number_of_periods' => 'numberOfPeriods',
        'billing_cycle_type' => 'billingCycleType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'customization' => 'setCustomization',
        'day_of_month' => 'setDayOfMonth',
        'weekly_day' => 'setWeeklyDay',
        'number_of_periods' => 'setNumberOfPeriods',
        'billing_cycle_type' => 'setBillingCycleType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'customization' => 'getCustomization',
        'day_of_month' => 'getDayOfMonth',
        'weekly_day' => 'getWeeklyDay',
        'number_of_periods' => 'getNumberOfPeriods',
        'billing_cycle_type' => 'getBillingCycleType'
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
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('customization', $data ?? [], null);
        $this->setIfExists('day_of_month', $data ?? [], null);
        $this->setIfExists('weekly_day', $data ?? [], null);
        $this->setIfExists('number_of_periods', $data ?? [], null);
        $this->setIfExists('billing_cycle_type', $data ?? [], null);
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

        if ($this->container['number_of_periods'] === null) {
            $invalidProperties[] = "'number_of_periods' can't be null";
        }
        if (($this->container['number_of_periods'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_of_periods', must be bigger than or equal to 1.";
        }

        if ($this->container['billing_cycle_type'] === null) {
            $invalidProperties[] = "'billing_cycle_type' can't be null";
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
     * Gets month
     *
     * @return \PostFinanceCheckout\Sdk\Model\DisplayableMonth|null
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param \PostFinanceCheckout\Sdk\Model\DisplayableMonth|null $month month
     *
     * @return self
     */
    public function setMonth($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets customization
     *
     * @return \PostFinanceCheckout\Sdk\Model\BillingDayCustomization|null
     */
    public function getCustomization()
    {
        return $this->container['customization'];
    }

    /**
     * Sets customization
     *
     * @param \PostFinanceCheckout\Sdk\Model\BillingDayCustomization|null $customization customization
     *
     * @return self
     */
    public function setCustomization($customization)
    {
        if (is_null($customization)) {
            throw new \InvalidArgumentException('non-nullable customization cannot be null');
        }
        $this->container['customization'] = $customization;

        return $this;
    }

    /**
     * Gets day_of_month
     *
     * @return int|null
     */
    public function getDayOfMonth()
    {
        return $this->container['day_of_month'];
    }

    /**
     * Sets day_of_month
     *
     * @param int|null $day_of_month day_of_month
     *
     * @return self
     */
    public function setDayOfMonth($day_of_month)
    {
        if (is_null($day_of_month)) {
            throw new \InvalidArgumentException('non-nullable day_of_month cannot be null');
        }
        $this->container['day_of_month'] = $day_of_month;

        return $this;
    }

    /**
     * Gets weekly_day
     *
     * @return \PostFinanceCheckout\Sdk\Model\DisplayableDayOfWeek|null
     */
    public function getWeeklyDay()
    {
        return $this->container['weekly_day'];
    }

    /**
     * Sets weekly_day
     *
     * @param \PostFinanceCheckout\Sdk\Model\DisplayableDayOfWeek|null $weekly_day weekly_day
     *
     * @return self
     */
    public function setWeeklyDay($weekly_day)
    {
        if (is_null($weekly_day)) {
            throw new \InvalidArgumentException('non-nullable weekly_day cannot be null');
        }
        $this->container['weekly_day'] = $weekly_day;

        return $this;
    }

    /**
     * Gets number_of_periods
     *
     * @return int
     */
    public function getNumberOfPeriods()
    {
        return $this->container['number_of_periods'];
    }

    /**
     * Sets number_of_periods
     *
     * @param int $number_of_periods Billing Cycle type multiplied by Number of Periods defines billing cycle duration, e.g. 3 months. Monthly types require 1-12; weekly and yearly types require 1-9 periods; and daily types require 1-30.
     *
     * @return self
     */
    public function setNumberOfPeriods($number_of_periods)
    {
        if (is_null($number_of_periods)) {
            throw new \InvalidArgumentException('non-nullable number_of_periods cannot be null');
        }

        if (($number_of_periods < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_of_periods when calling BillingCycleModel., must be bigger than or equal to 1.');
        }

        $this->container['number_of_periods'] = $number_of_periods;

        return $this;
    }

    /**
     * Gets billing_cycle_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\BillingCycleType
     */
    public function getBillingCycleType()
    {
        return $this->container['billing_cycle_type'];
    }

    /**
     * Sets billing_cycle_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\BillingCycleType $billing_cycle_type billing_cycle_type
     *
     * @return self
     */
    public function setBillingCycleType($billing_cycle_type)
    {
        if (is_null($billing_cycle_type)) {
            throw new \InvalidArgumentException('non-nullable billing_cycle_type cannot be null');
        }
        $this->container['billing_cycle_type'] = $billing_cycle_type;

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


