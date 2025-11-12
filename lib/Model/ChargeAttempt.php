<?php
/**
 * PostFinance Php SDK
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
 * ChargeAttempt model
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class ChargeAttempt implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeAttempt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language' => 'string',
        'sales_channel' => 'int',
        'created_on' => '\DateTime',
        'initializing_token_version' => 'bool',
        'token_version' => '\PostFinanceCheckout\Sdk\Model\TokenVersion',
        'succeeded_on' => '\DateTime',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptState',
        'linked_transaction' => 'int',
        'redirection_url' => 'string',
        'charge' => '\PostFinanceCheckout\Sdk\Model\Charge',
        'wallet' => '\PostFinanceCheckout\Sdk\Model\WalletType',
        'planned_purge_date' => '\DateTime',
        'time_zone' => 'string',
        'space_view_id' => 'int',
        'terminal' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminal',
        'user_failure_message' => 'string',
        'completion_behavior' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior',
        'version' => 'int',
        'labels' => '\PostFinanceCheckout\Sdk\Model\Label[]',
        'linked_space_id' => 'int',
        'timeout_on' => '\DateTime',
        'environment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
        'invocation' => '\PostFinanceCheckout\Sdk\Model\ConnectorInvocation',
        'connector_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration',
        'next_update_on' => '\DateTime',
        'failure_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'customers_presence' => '\PostFinanceCheckout\Sdk\Model\CustomersPresence',
        'failed_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language' => null,
        'sales_channel' => 'int64',
        'created_on' => 'date-time',
        'initializing_token_version' => null,
        'token_version' => null,
        'succeeded_on' => 'date-time',
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'redirection_url' => null,
        'charge' => null,
        'wallet' => null,
        'planned_purge_date' => 'date-time',
        'time_zone' => null,
        'space_view_id' => 'int64',
        'terminal' => null,
        'user_failure_message' => null,
        'completion_behavior' => null,
        'version' => 'int32',
        'labels' => null,
        'linked_space_id' => 'int64',
        'timeout_on' => 'date-time',
        'environment' => null,
        'invocation' => null,
        'connector_configuration' => null,
        'next_update_on' => 'date-time',
        'failure_reason' => null,
        'customers_presence' => null,
        'failed_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language' => false,
        'sales_channel' => false,
        'created_on' => false,
        'initializing_token_version' => false,
        'token_version' => false,
        'succeeded_on' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'redirection_url' => false,
        'charge' => false,
        'wallet' => false,
        'planned_purge_date' => false,
        'time_zone' => false,
        'space_view_id' => false,
        'terminal' => false,
        'user_failure_message' => false,
        'completion_behavior' => false,
        'version' => false,
        'labels' => false,
        'linked_space_id' => false,
        'timeout_on' => false,
        'environment' => false,
        'invocation' => false,
        'connector_configuration' => false,
        'next_update_on' => false,
        'failure_reason' => false,
        'customers_presence' => false,
        'failed_on' => false
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
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
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
        'language' => 'language',
        'sales_channel' => 'salesChannel',
        'created_on' => 'createdOn',
        'initializing_token_version' => 'initializingTokenVersion',
        'token_version' => 'tokenVersion',
        'succeeded_on' => 'succeededOn',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'redirection_url' => 'redirectionUrl',
        'charge' => 'charge',
        'wallet' => 'wallet',
        'planned_purge_date' => 'plannedPurgeDate',
        'time_zone' => 'timeZone',
        'space_view_id' => 'spaceViewId',
        'terminal' => 'terminal',
        'user_failure_message' => 'userFailureMessage',
        'completion_behavior' => 'completionBehavior',
        'version' => 'version',
        'labels' => 'labels',
        'linked_space_id' => 'linkedSpaceId',
        'timeout_on' => 'timeoutOn',
        'environment' => 'environment',
        'invocation' => 'invocation',
        'connector_configuration' => 'connectorConfiguration',
        'next_update_on' => 'nextUpdateOn',
        'failure_reason' => 'failureReason',
        'customers_presence' => 'customersPresence',
        'failed_on' => 'failedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'sales_channel' => 'setSalesChannel',
        'created_on' => 'setCreatedOn',
        'initializing_token_version' => 'setInitializingTokenVersion',
        'token_version' => 'setTokenVersion',
        'succeeded_on' => 'setSucceededOn',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'redirection_url' => 'setRedirectionUrl',
        'charge' => 'setCharge',
        'wallet' => 'setWallet',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'time_zone' => 'setTimeZone',
        'space_view_id' => 'setSpaceViewId',
        'terminal' => 'setTerminal',
        'user_failure_message' => 'setUserFailureMessage',
        'completion_behavior' => 'setCompletionBehavior',
        'version' => 'setVersion',
        'labels' => 'setLabels',
        'linked_space_id' => 'setLinkedSpaceId',
        'timeout_on' => 'setTimeoutOn',
        'environment' => 'setEnvironment',
        'invocation' => 'setInvocation',
        'connector_configuration' => 'setConnectorConfiguration',
        'next_update_on' => 'setNextUpdateOn',
        'failure_reason' => 'setFailureReason',
        'customers_presence' => 'setCustomersPresence',
        'failed_on' => 'setFailedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'sales_channel' => 'getSalesChannel',
        'created_on' => 'getCreatedOn',
        'initializing_token_version' => 'getInitializingTokenVersion',
        'token_version' => 'getTokenVersion',
        'succeeded_on' => 'getSucceededOn',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'redirection_url' => 'getRedirectionUrl',
        'charge' => 'getCharge',
        'wallet' => 'getWallet',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'time_zone' => 'getTimeZone',
        'space_view_id' => 'getSpaceViewId',
        'terminal' => 'getTerminal',
        'user_failure_message' => 'getUserFailureMessage',
        'completion_behavior' => 'getCompletionBehavior',
        'version' => 'getVersion',
        'labels' => 'getLabels',
        'linked_space_id' => 'getLinkedSpaceId',
        'timeout_on' => 'getTimeoutOn',
        'environment' => 'getEnvironment',
        'invocation' => 'getInvocation',
        'connector_configuration' => 'getConnectorConfiguration',
        'next_update_on' => 'getNextUpdateOn',
        'failure_reason' => 'getFailureReason',
        'customers_presence' => 'getCustomersPresence',
        'failed_on' => 'getFailedOn'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('sales_channel', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('initializing_token_version', $data ?? [], null);
        $this->setIfExists('token_version', $data ?? [], null);
        $this->setIfExists('succeeded_on', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('redirection_url', $data ?? [], null);
        $this->setIfExists('charge', $data ?? [], null);
        $this->setIfExists('wallet', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('terminal', $data ?? [], null);
        $this->setIfExists('user_failure_message', $data ?? [], null);
        $this->setIfExists('completion_behavior', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('timeout_on', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('invocation', $data ?? [], null);
        $this->setIfExists('connector_configuration', $data ?? [], null);
        $this->setIfExists('next_update_on', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('customers_presence', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
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

        if (!is_null($this->container['user_failure_message']) && (mb_strlen($this->container['user_failure_message']) > 2000)) {
            $invalidProperties[] = "invalid value for 'user_failure_message', the character length must be smaller than or equal to 2000.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
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
     * Gets sales_channel
     *
     * @return int|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param int|null $sales_channel The sales channel through which the charge attempt was made.
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        if (is_null($sales_channel)) {
            throw new \InvalidArgumentException('non-nullable sales_channel cannot be null');
        }
        $this->container['sales_channel'] = $sales_channel;

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
     * Gets initializing_token_version
     *
     * @return bool|null
     */
    public function getInitializingTokenVersion()
    {
        return $this->container['initializing_token_version'];
    }

    /**
     * Sets initializing_token_version
     *
     * @param bool|null $initializing_token_version Whether a new token version is being initialized.
     *
     * @return self
     */
    public function setInitializingTokenVersion($initializing_token_version)
    {
        if (is_null($initializing_token_version)) {
            throw new \InvalidArgumentException('non-nullable initializing_token_version cannot be null');
        }
        $this->container['initializing_token_version'] = $initializing_token_version;

        return $this;
    }

    /**
     * Gets token_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\TokenVersion|null
     */
    public function getTokenVersion()
    {
        return $this->container['token_version'];
    }

    /**
     * Sets token_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenVersion|null $token_version token_version
     *
     * @return self
     */
    public function setTokenVersion($token_version)
    {
        if (is_null($token_version)) {
            throw new \InvalidArgumentException('non-nullable token_version cannot be null');
        }
        $this->container['token_version'] = $token_version;

        return $this;
    }

    /**
     * Gets succeeded_on
     *
     * @return \DateTime|null
     */
    public function getSucceededOn()
    {
        return $this->container['succeeded_on'];
    }

    /**
     * Sets succeeded_on
     *
     * @param \DateTime|null $succeeded_on The date and time when the charge attempt succeeded.
     *
     * @return self
     */
    public function setSucceededOn($succeeded_on)
    {
        if (is_null($succeeded_on)) {
            throw new \InvalidArgumentException('non-nullable succeeded_on cannot be null');
        }
        $this->container['succeeded_on'] = $succeeded_on;

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
     * @return \PostFinanceCheckout\Sdk\Model\ChargeAttemptState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\ChargeAttemptState|null $state state
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
     * Gets linked_transaction
     *
     * @return int|null
     */
    public function getLinkedTransaction()
    {
        return $this->container['linked_transaction'];
    }

    /**
     * Sets linked_transaction
     *
     * @param int|null $linked_transaction The payment transaction this object is linked to.
     *
     * @return self
     */
    public function setLinkedTransaction($linked_transaction)
    {
        if (is_null($linked_transaction)) {
            throw new \InvalidArgumentException('non-nullable linked_transaction cannot be null');
        }
        $this->container['linked_transaction'] = $linked_transaction;

        return $this;
    }

    /**
     * Gets redirection_url
     *
     * @return string|null
     */
    public function getRedirectionUrl()
    {
        return $this->container['redirection_url'];
    }

    /**
     * Sets redirection_url
     *
     * @param string|null $redirection_url The URL to redirect the customer to after payment processing.
     *
     * @return self
     */
    public function setRedirectionUrl($redirection_url)
    {
        if (is_null($redirection_url)) {
            throw new \InvalidArgumentException('non-nullable redirection_url cannot be null');
        }
        $this->container['redirection_url'] = $redirection_url;

        return $this;
    }

    /**
     * Gets charge
     *
     * @return \PostFinanceCheckout\Sdk\Model\Charge|null
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \PostFinanceCheckout\Sdk\Model\Charge|null $charge charge
     *
     * @return self
     */
    public function setCharge($charge)
    {
        if (is_null($charge)) {
            throw new \InvalidArgumentException('non-nullable charge cannot be null');
        }
        $this->container['charge'] = $charge;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return \PostFinanceCheckout\Sdk\Model\WalletType|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \PostFinanceCheckout\Sdk\Model\WalletType|null $wallet wallet
     *
     * @return self
     */
    public function setWallet($wallet)
    {
        if (is_null($wallet)) {
            throw new \InvalidArgumentException('non-nullable wallet cannot be null');
        }
        $this->container['wallet'] = $wallet;

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
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The time zone that this object is associated with.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets space_view_id
     *
     * @return int|null
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int|null $space_view_id The ID of the space view this object is linked to.
     *
     * @return self
     */
    public function setSpaceViewId($space_view_id)
    {
        if (is_null($space_view_id)) {
            throw new \InvalidArgumentException('non-nullable space_view_id cannot be null');
        }
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }

    /**
     * Gets terminal
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentTerminal|null
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentTerminal|null $terminal terminal
     *
     * @return self
     */
    public function setTerminal($terminal)
    {
        if (is_null($terminal)) {
            throw new \InvalidArgumentException('non-nullable terminal cannot be null');
        }
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets user_failure_message
     *
     * @return string|null
     */
    public function getUserFailureMessage()
    {
        return $this->container['user_failure_message'];
    }

    /**
     * Sets user_failure_message
     *
     * @param string|null $user_failure_message The message that can be displayed to the customer explaining why the charge attempt failed, in the customer's language.
     *
     * @return self
     */
    public function setUserFailureMessage($user_failure_message)
    {
        if (is_null($user_failure_message)) {
            throw new \InvalidArgumentException('non-nullable user_failure_message cannot be null');
        }
        if ((mb_strlen($user_failure_message) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $user_failure_message when calling ChargeAttempt., must be smaller than or equal to 2000.');
        }

        $this->container['user_failure_message'] = $user_failure_message;

        return $this;
    }

    /**
     * Gets completion_behavior
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior|null
     */
    public function getCompletionBehavior()
    {
        return $this->container['completion_behavior'];
    }

    /**
     * Sets completion_behavior
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior|null $completion_behavior completion_behavior
     *
     * @return self
     */
    public function setCompletionBehavior($completion_behavior)
    {
        if (is_null($completion_behavior)) {
            throw new \InvalidArgumentException('non-nullable completion_behavior cannot be null');
        }
        $this->container['completion_behavior'] = $completion_behavior;

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
     * Gets timeout_on
     *
     * @return \DateTime|null
     */
    public function getTimeoutOn()
    {
        return $this->container['timeout_on'];
    }

    /**
     * Sets timeout_on
     *
     * @param \DateTime|null $timeout_on The date and time when the object will expire.
     *
     * @return self
     */
    public function setTimeoutOn($timeout_on)
    {
        if (is_null($timeout_on)) {
            throw new \InvalidArgumentException('non-nullable timeout_on cannot be null');
        }
        $this->container['timeout_on'] = $timeout_on;

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
     * Gets invocation
     *
     * @return \PostFinanceCheckout\Sdk\Model\ConnectorInvocation|null
     */
    public function getInvocation()
    {
        return $this->container['invocation'];
    }

    /**
     * Sets invocation
     *
     * @param \PostFinanceCheckout\Sdk\Model\ConnectorInvocation|null $invocation invocation
     *
     * @return self
     */
    public function setInvocation($invocation)
    {
        if (is_null($invocation)) {
            throw new \InvalidArgumentException('non-nullable invocation cannot be null');
        }
        $this->container['invocation'] = $invocation;

        return $this;
    }

    /**
     * Gets connector_configuration
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration|null
     */
    public function getConnectorConfiguration()
    {
        return $this->container['connector_configuration'];
    }

    /**
     * Sets connector_configuration
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration|null $connector_configuration connector_configuration
     *
     * @return self
     */
    public function setConnectorConfiguration($connector_configuration)
    {
        if (is_null($connector_configuration)) {
            throw new \InvalidArgumentException('non-nullable connector_configuration cannot be null');
        }
        $this->container['connector_configuration'] = $connector_configuration;

        return $this;
    }

    /**
     * Gets next_update_on
     *
     * @return \DateTime|null
     */
    public function getNextUpdateOn()
    {
        return $this->container['next_update_on'];
    }

    /**
     * Sets next_update_on
     *
     * @param \DateTime|null $next_update_on The date and time when the next update of the object's state is planned.
     *
     * @return self
     */
    public function setNextUpdateOn($next_update_on)
    {
        if (is_null($next_update_on)) {
            throw new \InvalidArgumentException('non-nullable next_update_on cannot be null');
        }
        $this->container['next_update_on'] = $next_update_on;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return \PostFinanceCheckout\Sdk\Model\FailureReason|null
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \PostFinanceCheckout\Sdk\Model\FailureReason|null $failure_reason failure_reason
     *
     * @return self
     */
    public function setFailureReason($failure_reason)
    {
        if (is_null($failure_reason)) {
            throw new \InvalidArgumentException('non-nullable failure_reason cannot be null');
        }
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets customers_presence
     *
     * @return \PostFinanceCheckout\Sdk\Model\CustomersPresence|null
     */
    public function getCustomersPresence()
    {
        return $this->container['customers_presence'];
    }

    /**
     * Sets customers_presence
     *
     * @param \PostFinanceCheckout\Sdk\Model\CustomersPresence|null $customers_presence customers_presence
     *
     * @return self
     */
    public function setCustomersPresence($customers_presence)
    {
        if (is_null($customers_presence)) {
            throw new \InvalidArgumentException('non-nullable customers_presence cannot be null');
        }
        $this->container['customers_presence'] = $customers_presence;

        return $this;
    }

    /**
     * Gets failed_on
     *
     * @return \DateTime|null
     */
    public function getFailedOn()
    {
        return $this->container['failed_on'];
    }

    /**
     * Sets failed_on
     *
     * @param \DateTime|null $failed_on The date and time when the charge attempt failed.
     *
     * @return self
     */
    public function setFailedOn($failed_on)
    {
        if (is_null($failed_on)) {
            throw new \InvalidArgumentException('non-nullable failed_on cannot be null');
        }
        $this->container['failed_on'] = $failed_on;

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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, mixed $value): void
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
    public function jsonSerialize(): mixed
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


