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
 * MerchantEcommerceDetailsDto model
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
class MerchantEcommerceDetailsDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantEcommerceDetailsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'password' => 'string',
        'voucher_sales_over5_percent' => 'bool',
        'offer_subscription_based_product' => 'bool',
        'url_password_protected' => 'bool',
        'website_url' => 'string',
        'delivery_destination' => '\PostFinanceCheckout\Sdk\Model\DeliveryDestination',
        'expected_international_turnover_range' => '\PostFinanceCheckout\Sdk\Model\RefundPercentageRange',
        'delivery_days_range' => '\PostFinanceCheckout\Sdk\Model\DeliveryDaysRange',
        'refund_days_range' => '\PostFinanceCheckout\Sdk\Model\RefundDaysRange',
        'refund_percentage_range' => '\PostFinanceCheckout\Sdk\Model\RefundPercentageRange',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'password' => null,
        'voucher_sales_over5_percent' => null,
        'offer_subscription_based_product' => null,
        'url_password_protected' => null,
        'website_url' => null,
        'delivery_destination' => null,
        'expected_international_turnover_range' => null,
        'delivery_days_range' => null,
        'refund_days_range' => null,
        'refund_percentage_range' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'password' => false,
        'voucher_sales_over5_percent' => false,
        'offer_subscription_based_product' => false,
        'url_password_protected' => false,
        'website_url' => false,
        'delivery_destination' => false,
        'expected_international_turnover_range' => false,
        'delivery_days_range' => false,
        'refund_days_range' => false,
        'refund_percentage_range' => false,
        'username' => false
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
        'password' => 'password',
        'voucher_sales_over5_percent' => 'voucherSalesOver5Percent',
        'offer_subscription_based_product' => 'offerSubscriptionBasedProduct',
        'url_password_protected' => 'urlPasswordProtected',
        'website_url' => 'websiteUrl',
        'delivery_destination' => 'deliveryDestination',
        'expected_international_turnover_range' => 'expectedInternationalTurnoverRange',
        'delivery_days_range' => 'deliveryDaysRange',
        'refund_days_range' => 'refundDaysRange',
        'refund_percentage_range' => 'refundPercentageRange',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password' => 'setPassword',
        'voucher_sales_over5_percent' => 'setVoucherSalesOver5Percent',
        'offer_subscription_based_product' => 'setOfferSubscriptionBasedProduct',
        'url_password_protected' => 'setUrlPasswordProtected',
        'website_url' => 'setWebsiteUrl',
        'delivery_destination' => 'setDeliveryDestination',
        'expected_international_turnover_range' => 'setExpectedInternationalTurnoverRange',
        'delivery_days_range' => 'setDeliveryDaysRange',
        'refund_days_range' => 'setRefundDaysRange',
        'refund_percentage_range' => 'setRefundPercentageRange',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password' => 'getPassword',
        'voucher_sales_over5_percent' => 'getVoucherSalesOver5Percent',
        'offer_subscription_based_product' => 'getOfferSubscriptionBasedProduct',
        'url_password_protected' => 'getUrlPasswordProtected',
        'website_url' => 'getWebsiteUrl',
        'delivery_destination' => 'getDeliveryDestination',
        'expected_international_turnover_range' => 'getExpectedInternationalTurnoverRange',
        'delivery_days_range' => 'getDeliveryDaysRange',
        'refund_days_range' => 'getRefundDaysRange',
        'refund_percentage_range' => 'getRefundPercentageRange',
        'username' => 'getUsername'
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
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('voucher_sales_over5_percent', $data ?? [], null);
        $this->setIfExists('offer_subscription_based_product', $data ?? [], null);
        $this->setIfExists('url_password_protected', $data ?? [], null);
        $this->setIfExists('website_url', $data ?? [], null);
        $this->setIfExists('delivery_destination', $data ?? [], null);
        $this->setIfExists('expected_international_turnover_range', $data ?? [], null);
        $this->setIfExists('delivery_days_range', $data ?? [], null);
        $this->setIfExists('refund_days_range', $data ?? [], null);
        $this->setIfExists('refund_percentage_range', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
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
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password The password used to access the protected ecommerce website.
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets voucher_sales_over5_percent
     *
     * @return bool|null
     */
    public function getVoucherSalesOver5Percent()
    {
        return $this->container['voucher_sales_over5_percent'];
    }

    /**
     * Sets voucher_sales_over5_percent
     *
     * @param bool|null $voucher_sales_over5_percent Whether voucher sales exceed five percent of turnover.
     *
     * @return self
     */
    public function setVoucherSalesOver5Percent($voucher_sales_over5_percent)
    {
        if (is_null($voucher_sales_over5_percent)) {
            throw new \InvalidArgumentException('non-nullable voucher_sales_over5_percent cannot be null');
        }
        $this->container['voucher_sales_over5_percent'] = $voucher_sales_over5_percent;

        return $this;
    }

    /**
     * Gets offer_subscription_based_product
     *
     * @return bool|null
     */
    public function getOfferSubscriptionBasedProduct()
    {
        return $this->container['offer_subscription_based_product'];
    }

    /**
     * Sets offer_subscription_based_product
     *
     * @param bool|null $offer_subscription_based_product Whether the merchant offers subscription-based products.
     *
     * @return self
     */
    public function setOfferSubscriptionBasedProduct($offer_subscription_based_product)
    {
        if (is_null($offer_subscription_based_product)) {
            throw new \InvalidArgumentException('non-nullable offer_subscription_based_product cannot be null');
        }
        $this->container['offer_subscription_based_product'] = $offer_subscription_based_product;

        return $this;
    }

    /**
     * Gets url_password_protected
     *
     * @return bool|null
     */
    public function getUrlPasswordProtected()
    {
        return $this->container['url_password_protected'];
    }

    /**
     * Sets url_password_protected
     *
     * @param bool|null $url_password_protected Whether the ecommerce website is protected by a login.
     *
     * @return self
     */
    public function setUrlPasswordProtected($url_password_protected)
    {
        if (is_null($url_password_protected)) {
            throw new \InvalidArgumentException('non-nullable url_password_protected cannot be null');
        }
        $this->container['url_password_protected'] = $url_password_protected;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string|null $website_url The URL of the merchant's ecommerce website.
     *
     * @return self
     */
    public function setWebsiteUrl($website_url)
    {
        if (is_null($website_url)) {
            throw new \InvalidArgumentException('non-nullable website_url cannot be null');
        }
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets delivery_destination
     *
     * @return \PostFinanceCheckout\Sdk\Model\DeliveryDestination|null
     */
    public function getDeliveryDestination()
    {
        return $this->container['delivery_destination'];
    }

    /**
     * Sets delivery_destination
     *
     * @param \PostFinanceCheckout\Sdk\Model\DeliveryDestination|null $delivery_destination delivery_destination
     *
     * @return self
     */
    public function setDeliveryDestination($delivery_destination)
    {
        if (is_null($delivery_destination)) {
            throw new \InvalidArgumentException('non-nullable delivery_destination cannot be null');
        }
        $this->container['delivery_destination'] = $delivery_destination;

        return $this;
    }

    /**
     * Gets expected_international_turnover_range
     *
     * @return \PostFinanceCheckout\Sdk\Model\RefundPercentageRange|null
     */
    public function getExpectedInternationalTurnoverRange()
    {
        return $this->container['expected_international_turnover_range'];
    }

    /**
     * Sets expected_international_turnover_range
     *
     * @param \PostFinanceCheckout\Sdk\Model\RefundPercentageRange|null $expected_international_turnover_range expected_international_turnover_range
     *
     * @return self
     */
    public function setExpectedInternationalTurnoverRange($expected_international_turnover_range)
    {
        if (is_null($expected_international_turnover_range)) {
            throw new \InvalidArgumentException('non-nullable expected_international_turnover_range cannot be null');
        }
        $this->container['expected_international_turnover_range'] = $expected_international_turnover_range;

        return $this;
    }

    /**
     * Gets delivery_days_range
     *
     * @return \PostFinanceCheckout\Sdk\Model\DeliveryDaysRange|null
     */
    public function getDeliveryDaysRange()
    {
        return $this->container['delivery_days_range'];
    }

    /**
     * Sets delivery_days_range
     *
     * @param \PostFinanceCheckout\Sdk\Model\DeliveryDaysRange|null $delivery_days_range delivery_days_range
     *
     * @return self
     */
    public function setDeliveryDaysRange($delivery_days_range)
    {
        if (is_null($delivery_days_range)) {
            throw new \InvalidArgumentException('non-nullable delivery_days_range cannot be null');
        }
        $this->container['delivery_days_range'] = $delivery_days_range;

        return $this;
    }

    /**
     * Gets refund_days_range
     *
     * @return \PostFinanceCheckout\Sdk\Model\RefundDaysRange|null
     */
    public function getRefundDaysRange()
    {
        return $this->container['refund_days_range'];
    }

    /**
     * Sets refund_days_range
     *
     * @param \PostFinanceCheckout\Sdk\Model\RefundDaysRange|null $refund_days_range refund_days_range
     *
     * @return self
     */
    public function setRefundDaysRange($refund_days_range)
    {
        if (is_null($refund_days_range)) {
            throw new \InvalidArgumentException('non-nullable refund_days_range cannot be null');
        }
        $this->container['refund_days_range'] = $refund_days_range;

        return $this;
    }

    /**
     * Gets refund_percentage_range
     *
     * @return \PostFinanceCheckout\Sdk\Model\RefundPercentageRange|null
     */
    public function getRefundPercentageRange()
    {
        return $this->container['refund_percentage_range'];
    }

    /**
     * Sets refund_percentage_range
     *
     * @param \PostFinanceCheckout\Sdk\Model\RefundPercentageRange|null $refund_percentage_range refund_percentage_range
     *
     * @return self
     */
    public function setRefundPercentageRange($refund_percentage_range)
    {
        if (is_null($refund_percentage_range)) {
            throw new \InvalidArgumentException('non-nullable refund_percentage_range cannot be null');
        }
        $this->container['refund_percentage_range'] = $refund_percentage_range;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The username used to access the protected ecommerce website.
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

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


