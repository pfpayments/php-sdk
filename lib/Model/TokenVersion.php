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
 * TokenVersion model
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
class TokenVersion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TokenVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_information_hashes' => '\PostFinanceCheckout\Sdk\Model\PaymentInformationHash[]',
        'language' => 'string',
        'type' => '\PostFinanceCheckout\Sdk\Model\TokenVersionType',
        'created_on' => '\DateTime',
        'retry_in' => 'string',
        'payment_connector_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration',
        'obsoleted_on' => '\DateTime',
        'expires_on' => '\DateTime',
        'icon_url' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\TokenVersionState',
        'processor_token' => 'string',
        'planned_purge_date' => '\DateTime',
        'payment_method_brand' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodBrand',
        'version' => 'int',
        'last_retried_on' => '\DateTime',
        'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
        'token' => '\PostFinanceCheckout\Sdk\Model\Token',
        'linked_space_id' => 'int',
        'environment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
        'activated_on' => '\DateTime',
        'name' => 'string',
        'payment_method' => '\PostFinanceCheckout\Sdk\Model\PaymentMethod',
        'shipping_address' => '\PostFinanceCheckout\Sdk\Model\Address',
        'billing_address' => '\PostFinanceCheckout\Sdk\Model\Address',
        'retry_strategy' => '\PostFinanceCheckout\Sdk\Model\TokenVersionRetryStrategy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_information_hashes' => null,
        'language' => null,
        'type' => null,
        'created_on' => 'date-time',
        'retry_in' => null,
        'payment_connector_configuration' => null,
        'obsoleted_on' => 'date-time',
        'expires_on' => 'date-time',
        'icon_url' => null,
        'id' => 'int64',
        'state' => null,
        'processor_token' => null,
        'planned_purge_date' => 'date-time',
        'payment_method_brand' => null,
        'version' => 'int32',
        'last_retried_on' => 'date-time',
        'labels' => null,
        'token' => null,
        'linked_space_id' => 'int64',
        'environment' => null,
        'activated_on' => 'date-time',
        'name' => null,
        'payment_method' => null,
        'shipping_address' => null,
        'billing_address' => null,
        'retry_strategy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_information_hashes' => false,
        'language' => false,
        'type' => false,
        'created_on' => false,
        'retry_in' => false,
        'payment_connector_configuration' => false,
        'obsoleted_on' => false,
        'expires_on' => false,
        'icon_url' => false,
        'id' => false,
        'state' => false,
        'processor_token' => false,
        'planned_purge_date' => false,
        'payment_method_brand' => false,
        'version' => false,
        'last_retried_on' => false,
        'labels' => false,
        'token' => false,
        'linked_space_id' => false,
        'environment' => false,
        'activated_on' => false,
        'name' => false,
        'payment_method' => false,
        'shipping_address' => false,
        'billing_address' => false,
        'retry_strategy' => false
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
        'payment_information_hashes' => 'paymentInformationHashes',
        'language' => 'language',
        'type' => 'type',
        'created_on' => 'createdOn',
        'retry_in' => 'retryIn',
        'payment_connector_configuration' => 'paymentConnectorConfiguration',
        'obsoleted_on' => 'obsoletedOn',
        'expires_on' => 'expiresOn',
        'icon_url' => 'iconUrl',
        'id' => 'id',
        'state' => 'state',
        'processor_token' => 'processorToken',
        'planned_purge_date' => 'plannedPurgeDate',
        'payment_method_brand' => 'paymentMethodBrand',
        'version' => 'version',
        'last_retried_on' => 'lastRetriedOn',
        'labels' => 'labels',
        'token' => 'token',
        'linked_space_id' => 'linkedSpaceId',
        'environment' => 'environment',
        'activated_on' => 'activatedOn',
        'name' => 'name',
        'payment_method' => 'paymentMethod',
        'shipping_address' => 'shippingAddress',
        'billing_address' => 'billingAddress',
        'retry_strategy' => 'retryStrategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_information_hashes' => 'setPaymentInformationHashes',
        'language' => 'setLanguage',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'retry_in' => 'setRetryIn',
        'payment_connector_configuration' => 'setPaymentConnectorConfiguration',
        'obsoleted_on' => 'setObsoletedOn',
        'expires_on' => 'setExpiresOn',
        'icon_url' => 'setIconUrl',
        'id' => 'setId',
        'state' => 'setState',
        'processor_token' => 'setProcessorToken',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'payment_method_brand' => 'setPaymentMethodBrand',
        'version' => 'setVersion',
        'last_retried_on' => 'setLastRetriedOn',
        'labels' => 'setLabels',
        'token' => 'setToken',
        'linked_space_id' => 'setLinkedSpaceId',
        'environment' => 'setEnvironment',
        'activated_on' => 'setActivatedOn',
        'name' => 'setName',
        'payment_method' => 'setPaymentMethod',
        'shipping_address' => 'setShippingAddress',
        'billing_address' => 'setBillingAddress',
        'retry_strategy' => 'setRetryStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_information_hashes' => 'getPaymentInformationHashes',
        'language' => 'getLanguage',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'retry_in' => 'getRetryIn',
        'payment_connector_configuration' => 'getPaymentConnectorConfiguration',
        'obsoleted_on' => 'getObsoletedOn',
        'expires_on' => 'getExpiresOn',
        'icon_url' => 'getIconUrl',
        'id' => 'getId',
        'state' => 'getState',
        'processor_token' => 'getProcessorToken',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'payment_method_brand' => 'getPaymentMethodBrand',
        'version' => 'getVersion',
        'last_retried_on' => 'getLastRetriedOn',
        'labels' => 'getLabels',
        'token' => 'getToken',
        'linked_space_id' => 'getLinkedSpaceId',
        'environment' => 'getEnvironment',
        'activated_on' => 'getActivatedOn',
        'name' => 'getName',
        'payment_method' => 'getPaymentMethod',
        'shipping_address' => 'getShippingAddress',
        'billing_address' => 'getBillingAddress',
        'retry_strategy' => 'getRetryStrategy'
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
        $this->setIfExists('payment_information_hashes', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('retry_in', $data ?? [], null);
        $this->setIfExists('payment_connector_configuration', $data ?? [], null);
        $this->setIfExists('obsoleted_on', $data ?? [], null);
        $this->setIfExists('expires_on', $data ?? [], null);
        $this->setIfExists('icon_url', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('processor_token', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('payment_method_brand', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('last_retried_on', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('activated_on', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('retry_strategy', $data ?? [], null);
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

        if (!is_null($this->container['processor_token']) && (mb_strlen($this->container['processor_token']) > 150)) {
            $invalidProperties[] = "invalid value for 'processor_token', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
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
     * Gets payment_information_hashes
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentInformationHash[]|null
     */
    public function getPaymentInformationHashes()
    {
        return $this->container['payment_information_hashes'];
    }

    /**
     * Sets payment_information_hashes
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentInformationHash[]|null $payment_information_hashes The hashed payment information that the token version represents.
     *
     * @return self
     */
    public function setPaymentInformationHashes($payment_information_hashes)
    {
        if (is_null($payment_information_hashes)) {
            throw new \InvalidArgumentException('non-nullable payment_information_hashes cannot be null');
        }


        $this->container['payment_information_hashes'] = $payment_information_hashes;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language that is linked to the object.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\TokenVersionType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenVersionType|null $type type
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
     * @param \DateTime|null $created_on The date and time when the object was created.
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
     * Gets retry_in
     *
     * @return string|null
     */
    public function getRetryIn()
    {
        return $this->container['retry_in'];
    }

    /**
     * Sets retry_in
     *
     * @param string|null $retry_in Retry interval when the strategy advises retrying later.
     *
     * @return self
     */
    public function setRetryIn($retry_in)
    {
        if (is_null($retry_in)) {
            throw new \InvalidArgumentException('non-nullable retry_in cannot be null');
        }
        $this->container['retry_in'] = $retry_in;

        return $this;
    }

    /**
     * Gets payment_connector_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration|null
     */
    public function getPaymentConnectorConfiguration()
    {
        return $this->container['payment_connector_configuration'];
    }

    /**
     * Sets payment_connector_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration|null $payment_connector_configuration payment_connector_configuration
     *
     * @return self
     */
    public function setPaymentConnectorConfiguration($payment_connector_configuration)
    {
        if (is_null($payment_connector_configuration)) {
            throw new \InvalidArgumentException('non-nullable payment_connector_configuration cannot be null');
        }
        $this->container['payment_connector_configuration'] = $payment_connector_configuration;

        return $this;
    }

    /**
     * Gets obsoleted_on
     *
     * @return \DateTime|null
     */
    public function getObsoletedOn()
    {
        return $this->container['obsoleted_on'];
    }

    /**
     * Sets obsoleted_on
     *
     * @param \DateTime|null $obsoleted_on The date and time when the token version was marked obsolete.
     *
     * @return self
     */
    public function setObsoletedOn($obsoleted_on)
    {
        if (is_null($obsoleted_on)) {
            throw new \InvalidArgumentException('non-nullable obsoleted_on cannot be null');
        }
        $this->container['obsoleted_on'] = $obsoleted_on;

        return $this;
    }

    /**
     * Gets expires_on
     *
     * @return \DateTime|null
     */
    public function getExpiresOn()
    {
        return $this->container['expires_on'];
    }

    /**
     * Sets expires_on
     *
     * @param \DateTime|null $expires_on The date and time when the token version is set to expire, after which it will be marked as obsolete.
     *
     * @return self
     */
    public function setExpiresOn($expires_on)
    {
        if (is_null($expires_on)) {
            throw new \InvalidArgumentException('non-nullable expires_on cannot be null');
        }
        $this->container['expires_on'] = $expires_on;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url The URL to the token's icon displayed to the customer.
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        if (is_null($icon_url)) {
            throw new \InvalidArgumentException('non-nullable icon_url cannot be null');
        }
        $this->container['icon_url'] = $icon_url;

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
     * @return \PostFinanceCheckout\Sdk\Model\TokenVersionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenVersionState|null $state state
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
     * Gets processor_token
     *
     * @return string|null
     */
    public function getProcessorToken()
    {
        return $this->container['processor_token'];
    }

    /**
     * Sets processor_token
     *
     * @param string|null $processor_token The token name as specified by the processor.
     *
     * @return self
     */
    public function setProcessorToken($processor_token)
    {
        if (is_null($processor_token)) {
            throw new \InvalidArgumentException('non-nullable processor_token cannot be null');
        }
        if ((mb_strlen($processor_token) > 150)) {
            throw new \InvalidArgumentException('invalid length for $processor_token when calling TokenVersion., must be smaller than or equal to 150.');
        }

        $this->container['processor_token'] = $processor_token;

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
     * Gets payment_method_brand
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand|null
     */
    public function getPaymentMethodBrand()
    {
        return $this->container['payment_method_brand'];
    }

    /**
     * Sets payment_method_brand
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodBrand|null $payment_method_brand payment_method_brand
     *
     * @return self
     */
    public function setPaymentMethodBrand($payment_method_brand)
    {
        if (is_null($payment_method_brand)) {
            throw new \InvalidArgumentException('non-nullable payment_method_brand cannot be null');
        }
        $this->container['payment_method_brand'] = $payment_method_brand;

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
     * Gets last_retried_on
     *
     * @return \DateTime|null
     */
    public function getLastRetriedOn()
    {
        return $this->container['last_retried_on'];
    }

    /**
     * Sets last_retried_on
     *
     * @param \DateTime|null $last_retried_on The date and time when the system last attempted a retry for this token version.
     *
     * @return self
     */
    public function setLastRetriedOn($last_retried_on)
    {
        if (is_null($last_retried_on)) {
            throw new \InvalidArgumentException('non-nullable last_retried_on cannot be null');
        }
        $this->container['last_retried_on'] = $last_retried_on;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \PostFinanceCheckout\Sdk\Model\Label[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \PostFinanceCheckout\Sdk\Model\Label[]|null $labels The labels providing additional information about the object.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }


        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets token
     *
     * @return \PostFinanceCheckout\Sdk\Model\Token|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \PostFinanceCheckout\Sdk\Model\Token|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets linked_space_id
     *
     * @return int|null
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int|null $linked_space_id The ID of the space this object belongs to.
     *
     * @return self
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        if (is_null($linked_space_id)) {
            throw new \InvalidArgumentException('non-nullable linked_space_id cannot be null');
        }
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets activated_on
     *
     * @return \DateTime|null
     */
    public function getActivatedOn()
    {
        return $this->container['activated_on'];
    }

    /**
     * Sets activated_on
     *
     * @param \DateTime|null $activated_on The date and time when the token version was activated.
     *
     * @return self
     */
    public function setActivatedOn($activated_on)
    {
        if (is_null($activated_on)) {
            throw new \InvalidArgumentException('non-nullable activated_on cannot be null');
        }
        $this->container['activated_on'] = $activated_on;

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
     * @param string|null $name The name used to identify the token.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TokenVersion., must be smaller than or equal to 150.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \PostFinanceCheckout\Sdk\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \PostFinanceCheckout\Sdk\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets retry_strategy
     *
     * @return \PostFinanceCheckout\Sdk\Model\TokenVersionRetryStrategy|null
     */
    public function getRetryStrategy()
    {
        return $this->container['retry_strategy'];
    }

    /**
     * Sets retry_strategy
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenVersionRetryStrategy|null $retry_strategy retry_strategy
     *
     * @return self
     */
    public function setRetryStrategy($retry_strategy)
    {
        if (is_null($retry_strategy)) {
            throw new \InvalidArgumentException('non-nullable retry_strategy cannot be null');
        }
        $this->container['retry_strategy'] = $retry_strategy;

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


