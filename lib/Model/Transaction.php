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
 * Transaction model
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
class Transaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parent' => '\PostFinanceCheckout\Sdk\Model\Transaction',
        'total_settled_amount' => 'float',
        'device_session_identifier' => 'string',
        'processing_on' => '\DateTime',
        'invoice_merchant_reference' => 'string',
        'language' => 'string',
        'confirmed_on' => '\DateTime',
        'line_items' => '\PostFinanceCheckout\Sdk\Model\LineItem[]',
        'accept_language_header' => 'string',
        'java_enabled' => 'bool',
        'confirmed_by' => 'int',
        'payment_connector_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\TransactionState',
        'window_width' => 'string',
        'allowed_payment_method_configurations' => 'int[]',
        'group' => '\PostFinanceCheckout\Sdk\Model\TransactionGroup',
        'charge_retry_enabled' => 'bool',
        'accept_header' => 'string',
        'user_agent_header' => 'string',
        'shipping_method' => 'string',
        'planned_purge_date' => '\DateTime',
        'success_url' => 'string',
        'time_zone' => 'string',
        'space_view_id' => 'int',
        'user_failure_message' => 'string',
        'completion_behavior' => '\PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior',
        'version' => 'int',
        'internet_protocol_address_country' => 'string',
        'linked_space_id' => 'int',
        'delivery_decision_made_on' => '\DateTime',
        'authorization_environment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
        'auto_confirmation_enabled' => 'bool',
        'failure_reason' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'total_applied_fees' => 'float',
        'customers_presence' => '\PostFinanceCheckout\Sdk\Model\CustomersPresence',
        'failed_on' => '\DateTime',
        'refunded_amount' => 'float',
        'authorization_amount' => 'float',
        'screen_width' => 'string',
        'environment_selection_strategy' => '\PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy',
        'customer_email_address' => 'string',
        'window_height' => 'string',
        'tokenization_mode' => '\PostFinanceCheckout\Sdk\Model\TokenizationMode',
        'authorization_timeout_on' => '\DateTime',
        'allowed_payment_method_brands' => 'int[]',
        'created_on' => '\DateTime',
        'meta_data' => 'array<string,string>',
        'emails_disabled' => 'bool',
        'user_interface_type' => '\PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType',
        'customer_id' => 'string',
        'currency' => 'string',
        'merchant_reference' => 'string',
        'authorization_sales_channel' => 'int',
        'years_to_keep' => 'int',
        'completed_amount' => 'float',
        'screen_height' => 'string',
        'internet_protocol_address' => 'string',
        'terminal' => '\PostFinanceCheckout\Sdk\Model\PaymentTerminal',
        'end_of_life' => '\DateTime',
        'token' => '\PostFinanceCheckout\Sdk\Model\Token',
        'environment' => '\PostFinanceCheckout\Sdk\Model\Environment',
        'screen_color_depth' => 'string',
        'created_by' => 'int',
        'completed_on' => '\DateTime',
        'completion_timeout_on' => '\DateTime',
        'shipping_address' => '\PostFinanceCheckout\Sdk\Model\Address',
        'billing_address' => '\PostFinanceCheckout\Sdk\Model\Address',
        'authorized_on' => '\DateTime',
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
        'parent' => null,
        'total_settled_amount' => null,
        'device_session_identifier' => null,
        'processing_on' => 'date-time',
        'invoice_merchant_reference' => null,
        'language' => null,
        'confirmed_on' => 'date-time',
        'line_items' => null,
        'accept_language_header' => null,
        'java_enabled' => null,
        'confirmed_by' => 'int64',
        'payment_connector_configuration' => null,
        'id' => 'int64',
        'state' => null,
        'window_width' => null,
        'allowed_payment_method_configurations' => 'int64',
        'group' => null,
        'charge_retry_enabled' => null,
        'accept_header' => null,
        'user_agent_header' => null,
        'shipping_method' => null,
        'planned_purge_date' => 'date-time',
        'success_url' => null,
        'time_zone' => null,
        'space_view_id' => 'int64',
        'user_failure_message' => null,
        'completion_behavior' => null,
        'version' => 'int32',
        'internet_protocol_address_country' => null,
        'linked_space_id' => 'int64',
        'delivery_decision_made_on' => 'date-time',
        'authorization_environment' => null,
        'auto_confirmation_enabled' => null,
        'failure_reason' => null,
        'total_applied_fees' => null,
        'customers_presence' => null,
        'failed_on' => 'date-time',
        'refunded_amount' => null,
        'authorization_amount' => null,
        'screen_width' => null,
        'environment_selection_strategy' => null,
        'customer_email_address' => null,
        'window_height' => null,
        'tokenization_mode' => null,
        'authorization_timeout_on' => 'date-time',
        'allowed_payment_method_brands' => 'int64',
        'created_on' => 'date-time',
        'meta_data' => null,
        'emails_disabled' => null,
        'user_interface_type' => null,
        'customer_id' => null,
        'currency' => null,
        'merchant_reference' => null,
        'authorization_sales_channel' => 'int64',
        'years_to_keep' => 'int32',
        'completed_amount' => null,
        'screen_height' => null,
        'internet_protocol_address' => null,
        'terminal' => null,
        'end_of_life' => 'date-time',
        'token' => null,
        'environment' => null,
        'screen_color_depth' => null,
        'created_by' => 'int64',
        'completed_on' => 'date-time',
        'completion_timeout_on' => 'date-time',
        'shipping_address' => null,
        'billing_address' => null,
        'authorized_on' => 'date-time',
        'failed_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'parent' => false,
        'total_settled_amount' => false,
        'device_session_identifier' => false,
        'processing_on' => false,
        'invoice_merchant_reference' => false,
        'language' => false,
        'confirmed_on' => false,
        'line_items' => false,
        'accept_language_header' => false,
        'java_enabled' => false,
        'confirmed_by' => false,
        'payment_connector_configuration' => false,
        'id' => false,
        'state' => false,
        'window_width' => false,
        'allowed_payment_method_configurations' => false,
        'group' => false,
        'charge_retry_enabled' => false,
        'accept_header' => false,
        'user_agent_header' => false,
        'shipping_method' => false,
        'planned_purge_date' => false,
        'success_url' => false,
        'time_zone' => false,
        'space_view_id' => false,
        'user_failure_message' => false,
        'completion_behavior' => false,
        'version' => false,
        'internet_protocol_address_country' => false,
        'linked_space_id' => false,
        'delivery_decision_made_on' => false,
        'authorization_environment' => false,
        'auto_confirmation_enabled' => false,
        'failure_reason' => false,
        'total_applied_fees' => false,
        'customers_presence' => false,
        'failed_on' => false,
        'refunded_amount' => false,
        'authorization_amount' => false,
        'screen_width' => false,
        'environment_selection_strategy' => false,
        'customer_email_address' => false,
        'window_height' => false,
        'tokenization_mode' => false,
        'authorization_timeout_on' => false,
        'allowed_payment_method_brands' => false,
        'created_on' => false,
        'meta_data' => false,
        'emails_disabled' => false,
        'user_interface_type' => false,
        'customer_id' => false,
        'currency' => false,
        'merchant_reference' => false,
        'authorization_sales_channel' => false,
        'years_to_keep' => false,
        'completed_amount' => false,
        'screen_height' => false,
        'internet_protocol_address' => false,
        'terminal' => false,
        'end_of_life' => false,
        'token' => false,
        'environment' => false,
        'screen_color_depth' => false,
        'created_by' => false,
        'completed_on' => false,
        'completion_timeout_on' => false,
        'shipping_address' => false,
        'billing_address' => false,
        'authorized_on' => false,
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
        'parent' => 'parent',
        'total_settled_amount' => 'totalSettledAmount',
        'device_session_identifier' => 'deviceSessionIdentifier',
        'processing_on' => 'processingOn',
        'invoice_merchant_reference' => 'invoiceMerchantReference',
        'language' => 'language',
        'confirmed_on' => 'confirmedOn',
        'line_items' => 'lineItems',
        'accept_language_header' => 'acceptLanguageHeader',
        'java_enabled' => 'javaEnabled',
        'confirmed_by' => 'confirmedBy',
        'payment_connector_configuration' => 'paymentConnectorConfiguration',
        'id' => 'id',
        'state' => 'state',
        'window_width' => 'windowWidth',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'group' => 'group',
        'charge_retry_enabled' => 'chargeRetryEnabled',
        'accept_header' => 'acceptHeader',
        'user_agent_header' => 'userAgentHeader',
        'shipping_method' => 'shippingMethod',
        'planned_purge_date' => 'plannedPurgeDate',
        'success_url' => 'successUrl',
        'time_zone' => 'timeZone',
        'space_view_id' => 'spaceViewId',
        'user_failure_message' => 'userFailureMessage',
        'completion_behavior' => 'completionBehavior',
        'version' => 'version',
        'internet_protocol_address_country' => 'internetProtocolAddressCountry',
        'linked_space_id' => 'linkedSpaceId',
        'delivery_decision_made_on' => 'deliveryDecisionMadeOn',
        'authorization_environment' => 'authorizationEnvironment',
        'auto_confirmation_enabled' => 'autoConfirmationEnabled',
        'failure_reason' => 'failureReason',
        'total_applied_fees' => 'totalAppliedFees',
        'customers_presence' => 'customersPresence',
        'failed_on' => 'failedOn',
        'refunded_amount' => 'refundedAmount',
        'authorization_amount' => 'authorizationAmount',
        'screen_width' => 'screenWidth',
        'environment_selection_strategy' => 'environmentSelectionStrategy',
        'customer_email_address' => 'customerEmailAddress',
        'window_height' => 'windowHeight',
        'tokenization_mode' => 'tokenizationMode',
        'authorization_timeout_on' => 'authorizationTimeoutOn',
        'allowed_payment_method_brands' => 'allowedPaymentMethodBrands',
        'created_on' => 'createdOn',
        'meta_data' => 'metaData',
        'emails_disabled' => 'emailsDisabled',
        'user_interface_type' => 'userInterfaceType',
        'customer_id' => 'customerId',
        'currency' => 'currency',
        'merchant_reference' => 'merchantReference',
        'authorization_sales_channel' => 'authorizationSalesChannel',
        'years_to_keep' => 'yearsToKeep',
        'completed_amount' => 'completedAmount',
        'screen_height' => 'screenHeight',
        'internet_protocol_address' => 'internetProtocolAddress',
        'terminal' => 'terminal',
        'end_of_life' => 'endOfLife',
        'token' => 'token',
        'environment' => 'environment',
        'screen_color_depth' => 'screenColorDepth',
        'created_by' => 'createdBy',
        'completed_on' => 'completedOn',
        'completion_timeout_on' => 'completionTimeoutOn',
        'shipping_address' => 'shippingAddress',
        'billing_address' => 'billingAddress',
        'authorized_on' => 'authorizedOn',
        'failed_url' => 'failedUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
        'total_settled_amount' => 'setTotalSettledAmount',
        'device_session_identifier' => 'setDeviceSessionIdentifier',
        'processing_on' => 'setProcessingOn',
        'invoice_merchant_reference' => 'setInvoiceMerchantReference',
        'language' => 'setLanguage',
        'confirmed_on' => 'setConfirmedOn',
        'line_items' => 'setLineItems',
        'accept_language_header' => 'setAcceptLanguageHeader',
        'java_enabled' => 'setJavaEnabled',
        'confirmed_by' => 'setConfirmedBy',
        'payment_connector_configuration' => 'setPaymentConnectorConfiguration',
        'id' => 'setId',
        'state' => 'setState',
        'window_width' => 'setWindowWidth',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'group' => 'setGroup',
        'charge_retry_enabled' => 'setChargeRetryEnabled',
        'accept_header' => 'setAcceptHeader',
        'user_agent_header' => 'setUserAgentHeader',
        'shipping_method' => 'setShippingMethod',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'success_url' => 'setSuccessUrl',
        'time_zone' => 'setTimeZone',
        'space_view_id' => 'setSpaceViewId',
        'user_failure_message' => 'setUserFailureMessage',
        'completion_behavior' => 'setCompletionBehavior',
        'version' => 'setVersion',
        'internet_protocol_address_country' => 'setInternetProtocolAddressCountry',
        'linked_space_id' => 'setLinkedSpaceId',
        'delivery_decision_made_on' => 'setDeliveryDecisionMadeOn',
        'authorization_environment' => 'setAuthorizationEnvironment',
        'auto_confirmation_enabled' => 'setAutoConfirmationEnabled',
        'failure_reason' => 'setFailureReason',
        'total_applied_fees' => 'setTotalAppliedFees',
        'customers_presence' => 'setCustomersPresence',
        'failed_on' => 'setFailedOn',
        'refunded_amount' => 'setRefundedAmount',
        'authorization_amount' => 'setAuthorizationAmount',
        'screen_width' => 'setScreenWidth',
        'environment_selection_strategy' => 'setEnvironmentSelectionStrategy',
        'customer_email_address' => 'setCustomerEmailAddress',
        'window_height' => 'setWindowHeight',
        'tokenization_mode' => 'setTokenizationMode',
        'authorization_timeout_on' => 'setAuthorizationTimeoutOn',
        'allowed_payment_method_brands' => 'setAllowedPaymentMethodBrands',
        'created_on' => 'setCreatedOn',
        'meta_data' => 'setMetaData',
        'emails_disabled' => 'setEmailsDisabled',
        'user_interface_type' => 'setUserInterfaceType',
        'customer_id' => 'setCustomerId',
        'currency' => 'setCurrency',
        'merchant_reference' => 'setMerchantReference',
        'authorization_sales_channel' => 'setAuthorizationSalesChannel',
        'years_to_keep' => 'setYearsToKeep',
        'completed_amount' => 'setCompletedAmount',
        'screen_height' => 'setScreenHeight',
        'internet_protocol_address' => 'setInternetProtocolAddress',
        'terminal' => 'setTerminal',
        'end_of_life' => 'setEndOfLife',
        'token' => 'setToken',
        'environment' => 'setEnvironment',
        'screen_color_depth' => 'setScreenColorDepth',
        'created_by' => 'setCreatedBy',
        'completed_on' => 'setCompletedOn',
        'completion_timeout_on' => 'setCompletionTimeoutOn',
        'shipping_address' => 'setShippingAddress',
        'billing_address' => 'setBillingAddress',
        'authorized_on' => 'setAuthorizedOn',
        'failed_url' => 'setFailedUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
        'total_settled_amount' => 'getTotalSettledAmount',
        'device_session_identifier' => 'getDeviceSessionIdentifier',
        'processing_on' => 'getProcessingOn',
        'invoice_merchant_reference' => 'getInvoiceMerchantReference',
        'language' => 'getLanguage',
        'confirmed_on' => 'getConfirmedOn',
        'line_items' => 'getLineItems',
        'accept_language_header' => 'getAcceptLanguageHeader',
        'java_enabled' => 'getJavaEnabled',
        'confirmed_by' => 'getConfirmedBy',
        'payment_connector_configuration' => 'getPaymentConnectorConfiguration',
        'id' => 'getId',
        'state' => 'getState',
        'window_width' => 'getWindowWidth',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'group' => 'getGroup',
        'charge_retry_enabled' => 'getChargeRetryEnabled',
        'accept_header' => 'getAcceptHeader',
        'user_agent_header' => 'getUserAgentHeader',
        'shipping_method' => 'getShippingMethod',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'success_url' => 'getSuccessUrl',
        'time_zone' => 'getTimeZone',
        'space_view_id' => 'getSpaceViewId',
        'user_failure_message' => 'getUserFailureMessage',
        'completion_behavior' => 'getCompletionBehavior',
        'version' => 'getVersion',
        'internet_protocol_address_country' => 'getInternetProtocolAddressCountry',
        'linked_space_id' => 'getLinkedSpaceId',
        'delivery_decision_made_on' => 'getDeliveryDecisionMadeOn',
        'authorization_environment' => 'getAuthorizationEnvironment',
        'auto_confirmation_enabled' => 'getAutoConfirmationEnabled',
        'failure_reason' => 'getFailureReason',
        'total_applied_fees' => 'getTotalAppliedFees',
        'customers_presence' => 'getCustomersPresence',
        'failed_on' => 'getFailedOn',
        'refunded_amount' => 'getRefundedAmount',
        'authorization_amount' => 'getAuthorizationAmount',
        'screen_width' => 'getScreenWidth',
        'environment_selection_strategy' => 'getEnvironmentSelectionStrategy',
        'customer_email_address' => 'getCustomerEmailAddress',
        'window_height' => 'getWindowHeight',
        'tokenization_mode' => 'getTokenizationMode',
        'authorization_timeout_on' => 'getAuthorizationTimeoutOn',
        'allowed_payment_method_brands' => 'getAllowedPaymentMethodBrands',
        'created_on' => 'getCreatedOn',
        'meta_data' => 'getMetaData',
        'emails_disabled' => 'getEmailsDisabled',
        'user_interface_type' => 'getUserInterfaceType',
        'customer_id' => 'getCustomerId',
        'currency' => 'getCurrency',
        'merchant_reference' => 'getMerchantReference',
        'authorization_sales_channel' => 'getAuthorizationSalesChannel',
        'years_to_keep' => 'getYearsToKeep',
        'completed_amount' => 'getCompletedAmount',
        'screen_height' => 'getScreenHeight',
        'internet_protocol_address' => 'getInternetProtocolAddress',
        'terminal' => 'getTerminal',
        'end_of_life' => 'getEndOfLife',
        'token' => 'getToken',
        'environment' => 'getEnvironment',
        'screen_color_depth' => 'getScreenColorDepth',
        'created_by' => 'getCreatedBy',
        'completed_on' => 'getCompletedOn',
        'completion_timeout_on' => 'getCompletionTimeoutOn',
        'shipping_address' => 'getShippingAddress',
        'billing_address' => 'getBillingAddress',
        'authorized_on' => 'getAuthorizedOn',
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
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('total_settled_amount', $data ?? [], null);
        $this->setIfExists('device_session_identifier', $data ?? [], null);
        $this->setIfExists('processing_on', $data ?? [], null);
        $this->setIfExists('invoice_merchant_reference', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('confirmed_on', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('accept_language_header', $data ?? [], null);
        $this->setIfExists('java_enabled', $data ?? [], null);
        $this->setIfExists('confirmed_by', $data ?? [], null);
        $this->setIfExists('payment_connector_configuration', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('window_width', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_configurations', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('charge_retry_enabled', $data ?? [], null);
        $this->setIfExists('accept_header', $data ?? [], null);
        $this->setIfExists('user_agent_header', $data ?? [], null);
        $this->setIfExists('shipping_method', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('user_failure_message', $data ?? [], null);
        $this->setIfExists('completion_behavior', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('internet_protocol_address_country', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('delivery_decision_made_on', $data ?? [], null);
        $this->setIfExists('authorization_environment', $data ?? [], null);
        $this->setIfExists('auto_confirmation_enabled', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('total_applied_fees', $data ?? [], null);
        $this->setIfExists('customers_presence', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
        $this->setIfExists('refunded_amount', $data ?? [], null);
        $this->setIfExists('authorization_amount', $data ?? [], null);
        $this->setIfExists('screen_width', $data ?? [], null);
        $this->setIfExists('environment_selection_strategy', $data ?? [], null);
        $this->setIfExists('customer_email_address', $data ?? [], null);
        $this->setIfExists('window_height', $data ?? [], null);
        $this->setIfExists('tokenization_mode', $data ?? [], null);
        $this->setIfExists('authorization_timeout_on', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_brands', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('meta_data', $data ?? [], null);
        $this->setIfExists('emails_disabled', $data ?? [], null);
        $this->setIfExists('user_interface_type', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('merchant_reference', $data ?? [], null);
        $this->setIfExists('authorization_sales_channel', $data ?? [], null);
        $this->setIfExists('years_to_keep', $data ?? [], null);
        $this->setIfExists('completed_amount', $data ?? [], null);
        $this->setIfExists('screen_height', $data ?? [], null);
        $this->setIfExists('internet_protocol_address', $data ?? [], null);
        $this->setIfExists('terminal', $data ?? [], null);
        $this->setIfExists('end_of_life', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('screen_color_depth', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('completed_on', $data ?? [], null);
        $this->setIfExists('completion_timeout_on', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('authorized_on', $data ?? [], null);
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

        if (!is_null($this->container['device_session_identifier']) && (mb_strlen($this->container['device_session_identifier']) > 40)) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['device_session_identifier']) && (mb_strlen($this->container['device_session_identifier']) < 10)) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['device_session_identifier']) && !preg_match("/([a-zA-Z0-9_-])*/", $this->container['device_session_identifier'])) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', must be conform to the pattern /([a-zA-Z0-9_-])*/.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && (mb_strlen($this->container['invoice_merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['invoice_merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if (!is_null($this->container['shipping_method']) && (mb_strlen($this->container['shipping_method']) > 200)) {
            $invalidProperties[] = "invalid value for 'shipping_method', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
        }

        if (!is_null($this->container['customer_email_address']) && (mb_strlen($this->container['customer_email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'customer_email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['merchant_reference']) && !preg_match("/[ \\x20-\\x7e]*/", $this->container['merchant_reference'])) {
            $invalidProperties[] = "invalid value for 'merchant_reference', must be conform to the pattern /[ \\x20-\\x7e]*/.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 2000.";
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
     * Gets parent
     *
     * @return \PostFinanceCheckout\Sdk\Model\Transaction|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \PostFinanceCheckout\Sdk\Model\Transaction|null $parent parent
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
     * Gets total_settled_amount
     *
     * @return float|null
     */
    public function getTotalSettledAmount()
    {
        return $this->container['total_settled_amount'];
    }

    /**
     * Sets total_settled_amount
     *
     * @param float|null $total_settled_amount The total amount that was settled, in the transaction's currency.
     *
     * @return self
     */
    public function setTotalSettledAmount($total_settled_amount)
    {
        if (is_null($total_settled_amount)) {
            throw new \InvalidArgumentException('non-nullable total_settled_amount cannot be null');
        }
        $this->container['total_settled_amount'] = $total_settled_amount;

        return $this;
    }

    /**
     * Gets device_session_identifier
     *
     * @return string|null
     */
    public function getDeviceSessionIdentifier()
    {
        return $this->container['device_session_identifier'];
    }

    /**
     * Sets device_session_identifier
     *
     * @param string|null $device_session_identifier Allows to link the transaction to the data collected from the customer's device.
     *
     * @return self
     */
    public function setDeviceSessionIdentifier($device_session_identifier)
    {
        if (is_null($device_session_identifier)) {
            throw new \InvalidArgumentException('non-nullable device_session_identifier cannot be null');
        }
        if ((mb_strlen($device_session_identifier) > 40)) {
            throw new \InvalidArgumentException('invalid length for $device_session_identifier when calling Transaction., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($device_session_identifier) < 10)) {
            throw new \InvalidArgumentException('invalid length for $device_session_identifier when calling Transaction., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/([a-zA-Z0-9_-])*/", ObjectSerializer::toString($device_session_identifier)))) {
            throw new \InvalidArgumentException("invalid value for \$device_session_identifier when calling Transaction., must conform to the pattern /([a-zA-Z0-9_-])*/.");
        }

        $this->container['device_session_identifier'] = $device_session_identifier;

        return $this;
    }

    /**
     * Gets processing_on
     *
     * @return \DateTime|null
     */
    public function getProcessingOn()
    {
        return $this->container['processing_on'];
    }

    /**
     * Sets processing_on
     *
     * @param \DateTime|null $processing_on The date and time when the processing of the transaction was started.
     *
     * @return self
     */
    public function setProcessingOn($processing_on)
    {
        if (is_null($processing_on)) {
            throw new \InvalidArgumentException('non-nullable processing_on cannot be null');
        }
        $this->container['processing_on'] = $processing_on;

        return $this;
    }

    /**
     * Gets invoice_merchant_reference
     *
     * @return string|null
     */
    public function getInvoiceMerchantReference()
    {
        return $this->container['invoice_merchant_reference'];
    }

    /**
     * Sets invoice_merchant_reference
     *
     * @param string|null $invoice_merchant_reference The merchant's reference used to identify the invoice.
     *
     * @return self
     */
    public function setInvoiceMerchantReference($invoice_merchant_reference)
    {
        if (is_null($invoice_merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable invoice_merchant_reference cannot be null');
        }
        if ((mb_strlen($invoice_merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invoice_merchant_reference when calling Transaction., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($invoice_merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$invoice_merchant_reference when calling Transaction., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['invoice_merchant_reference'] = $invoice_merchant_reference;

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
     * Gets confirmed_on
     *
     * @return \DateTime|null
     */
    public function getConfirmedOn()
    {
        return $this->container['confirmed_on'];
    }

    /**
     * Sets confirmed_on
     *
     * @param \DateTime|null $confirmed_on The date and time when the transaction was created.
     *
     * @return self
     */
    public function setConfirmedOn($confirmed_on)
    {
        if (is_null($confirmed_on)) {
            throw new \InvalidArgumentException('non-nullable confirmed_on cannot be null');
        }
        $this->container['confirmed_on'] = $confirmed_on;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \PostFinanceCheckout\Sdk\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \PostFinanceCheckout\Sdk\Model\LineItem[]|null $line_items The line items purchased by the customer.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets accept_language_header
     *
     * @return string|null
     */
    public function getAcceptLanguageHeader()
    {
        return $this->container['accept_language_header'];
    }

    /**
     * Sets accept_language_header
     *
     * @param string|null $accept_language_header The 'Accept Language' header of the customer's web browser.
     *
     * @return self
     */
    public function setAcceptLanguageHeader($accept_language_header)
    {
        if (is_null($accept_language_header)) {
            throw new \InvalidArgumentException('non-nullable accept_language_header cannot be null');
        }
        $this->container['accept_language_header'] = $accept_language_header;

        return $this;
    }

    /**
     * Gets java_enabled
     *
     * @return bool|null
     */
    public function getJavaEnabled()
    {
        return $this->container['java_enabled'];
    }

    /**
     * Sets java_enabled
     *
     * @param bool|null $java_enabled Whether Java is enabled on the customer's web browser.
     *
     * @return self
     */
    public function setJavaEnabled($java_enabled)
    {
        if (is_null($java_enabled)) {
            throw new \InvalidArgumentException('non-nullable java_enabled cannot be null');
        }
        $this->container['java_enabled'] = $java_enabled;

        return $this;
    }

    /**
     * Gets confirmed_by
     *
     * @return int|null
     */
    public function getConfirmedBy()
    {
        return $this->container['confirmed_by'];
    }

    /**
     * Sets confirmed_by
     *
     * @param int|null $confirmed_by The ID of the user the transaction was confirmed by.
     *
     * @return self
     */
    public function setConfirmedBy($confirmed_by)
    {
        if (is_null($confirmed_by)) {
            throw new \InvalidArgumentException('non-nullable confirmed_by cannot be null');
        }
        $this->container['confirmed_by'] = $confirmed_by;

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
     * @return \PostFinanceCheckout\Sdk\Model\TransactionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionState|null $state state
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
     * Gets window_width
     *
     * @return string|null
     */
    public function getWindowWidth()
    {
        return $this->container['window_width'];
    }

    /**
     * Sets window_width
     *
     * @param string|null $window_width The window width of the customer's web browser.
     *
     * @return self
     */
    public function setWindowWidth($window_width)
    {
        if (is_null($window_width)) {
            throw new \InvalidArgumentException('non-nullable window_width cannot be null');
        }
        $this->container['window_width'] = $window_width;

        return $this;
    }

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return int[]|null
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param int[]|null $allowed_payment_method_configurations The payment method configurations that can be used to authorize the transaction.
     *
     * @return self
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        if (is_null($allowed_payment_method_configurations)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_configurations cannot be null');
        }
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionGroup|null $group group
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
     * Gets charge_retry_enabled
     *
     * @return bool|null
     */
    public function getChargeRetryEnabled()
    {
        return $this->container['charge_retry_enabled'];
    }

    /**
     * Sets charge_retry_enabled
     *
     * @param bool|null $charge_retry_enabled Whether the customer can make further payment attempts if the first one has failed. Default is true.
     *
     * @return self
     */
    public function setChargeRetryEnabled($charge_retry_enabled)
    {
        if (is_null($charge_retry_enabled)) {
            throw new \InvalidArgumentException('non-nullable charge_retry_enabled cannot be null');
        }
        $this->container['charge_retry_enabled'] = $charge_retry_enabled;

        return $this;
    }

    /**
     * Gets accept_header
     *
     * @return string|null
     */
    public function getAcceptHeader()
    {
        return $this->container['accept_header'];
    }

    /**
     * Sets accept_header
     *
     * @param string|null $accept_header The 'Accept' header of the customer's web browser.
     *
     * @return self
     */
    public function setAcceptHeader($accept_header)
    {
        if (is_null($accept_header)) {
            throw new \InvalidArgumentException('non-nullable accept_header cannot be null');
        }
        $this->container['accept_header'] = $accept_header;

        return $this;
    }

    /**
     * Gets user_agent_header
     *
     * @return string|null
     */
    public function getUserAgentHeader()
    {
        return $this->container['user_agent_header'];
    }

    /**
     * Sets user_agent_header
     *
     * @param string|null $user_agent_header The 'User Agent' header of the customer's web browser.
     *
     * @return self
     */
    public function setUserAgentHeader($user_agent_header)
    {
        if (is_null($user_agent_header)) {
            throw new \InvalidArgumentException('non-nullable user_agent_header cannot be null');
        }
        $this->container['user_agent_header'] = $user_agent_header;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string|null $shipping_method The name of the shipping method used to ship the products.
     *
     * @return self
     */
    public function setShippingMethod($shipping_method)
    {
        if (is_null($shipping_method)) {
            throw new \InvalidArgumentException('non-nullable shipping_method cannot be null');
        }
        if ((mb_strlen($shipping_method) > 200)) {
            throw new \InvalidArgumentException('invalid length for $shipping_method when calling Transaction., must be smaller than or equal to 200.');
        }

        $this->container['shipping_method'] = $shipping_method;

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
        if ((mb_strlen($success_url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling Transaction., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling Transaction., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

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
     * @param string|null $time_zone The customer's time zone, which affects how dates and times are formatted when communicating with the customer.
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
     * @param string|null $user_failure_message The message that can be displayed to the customer explaining why the transaction failed, in the customer's language.
     *
     * @return self
     */
    public function setUserFailureMessage($user_failure_message)
    {
        if (is_null($user_failure_message)) {
            throw new \InvalidArgumentException('non-nullable user_failure_message cannot be null');
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
     * Gets internet_protocol_address_country
     *
     * @return string|null
     */
    public function getInternetProtocolAddressCountry()
    {
        return $this->container['internet_protocol_address_country'];
    }

    /**
     * Sets internet_protocol_address_country
     *
     * @param string|null $internet_protocol_address_country The country determined from the IP address of the customer's device.
     *
     * @return self
     */
    public function setInternetProtocolAddressCountry($internet_protocol_address_country)
    {
        if (is_null($internet_protocol_address_country)) {
            throw new \InvalidArgumentException('non-nullable internet_protocol_address_country cannot be null');
        }
        $this->container['internet_protocol_address_country'] = $internet_protocol_address_country;

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
     * Gets delivery_decision_made_on
     *
     * @return \DateTime|null
     */
    public function getDeliveryDecisionMadeOn()
    {
        return $this->container['delivery_decision_made_on'];
    }

    /**
     * Sets delivery_decision_made_on
     *
     * @param \DateTime|null $delivery_decision_made_on This date and time when the decision was made as to whether the order should be shipped.
     *
     * @return self
     */
    public function setDeliveryDecisionMadeOn($delivery_decision_made_on)
    {
        if (is_null($delivery_decision_made_on)) {
            throw new \InvalidArgumentException('non-nullable delivery_decision_made_on cannot be null');
        }
        $this->container['delivery_decision_made_on'] = $delivery_decision_made_on;

        return $this;
    }

    /**
     * Gets authorization_environment
     *
     * @return \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment|null
     */
    public function getAuthorizationEnvironment()
    {
        return $this->container['authorization_environment'];
    }

    /**
     * Sets authorization_environment
     *
     * @param \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment|null $authorization_environment authorization_environment
     *
     * @return self
     */
    public function setAuthorizationEnvironment($authorization_environment)
    {
        if (is_null($authorization_environment)) {
            throw new \InvalidArgumentException('non-nullable authorization_environment cannot be null');
        }
        $this->container['authorization_environment'] = $authorization_environment;

        return $this;
    }

    /**
     * Gets auto_confirmation_enabled
     *
     * @return bool|null
     */
    public function getAutoConfirmationEnabled()
    {
        return $this->container['auto_confirmation_enabled'];
    }

    /**
     * Sets auto_confirmation_enabled
     *
     * @param bool|null $auto_confirmation_enabled Whether the transaction can be confirmed automatically or whether this must be done explicitly via the API. Default is true.
     *
     * @return self
     */
    public function setAutoConfirmationEnabled($auto_confirmation_enabled)
    {
        if (is_null($auto_confirmation_enabled)) {
            throw new \InvalidArgumentException('non-nullable auto_confirmation_enabled cannot be null');
        }
        $this->container['auto_confirmation_enabled'] = $auto_confirmation_enabled;

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
     * Gets total_applied_fees
     *
     * @return float|null
     */
    public function getTotalAppliedFees()
    {
        return $this->container['total_applied_fees'];
    }

    /**
     * Sets total_applied_fees
     *
     * @param float|null $total_applied_fees The total of all fees charged, in the transaction's currency.
     *
     * @return self
     */
    public function setTotalAppliedFees($total_applied_fees)
    {
        if (is_null($total_applied_fees)) {
            throw new \InvalidArgumentException('non-nullable total_applied_fees cannot be null');
        }
        $this->container['total_applied_fees'] = $total_applied_fees;

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
     * @param \DateTime|null $failed_on The date and time when the transaction failed.
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
     * Gets refunded_amount
     *
     * @return float|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param float|null $refunded_amount The total amount that was refunded, in the transaction's currency.
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        if (is_null($refunded_amount)) {
            throw new \InvalidArgumentException('non-nullable refunded_amount cannot be null');
        }
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets authorization_amount
     *
     * @return float|null
     */
    public function getAuthorizationAmount()
    {
        return $this->container['authorization_amount'];
    }

    /**
     * Sets authorization_amount
     *
     * @param float|null $authorization_amount The sum of all line item prices including taxes in the transaction's currency.
     *
     * @return self
     */
    public function setAuthorizationAmount($authorization_amount)
    {
        if (is_null($authorization_amount)) {
            throw new \InvalidArgumentException('non-nullable authorization_amount cannot be null');
        }
        $this->container['authorization_amount'] = $authorization_amount;

        return $this;
    }

    /**
     * Gets screen_width
     *
     * @return string|null
     */
    public function getScreenWidth()
    {
        return $this->container['screen_width'];
    }

    /**
     * Sets screen_width
     *
     * @param string|null $screen_width The screen width of the customer's web browser.
     *
     * @return self
     */
    public function setScreenWidth($screen_width)
    {
        if (is_null($screen_width)) {
            throw new \InvalidArgumentException('non-nullable screen_width cannot be null');
        }
        $this->container['screen_width'] = $screen_width;

        return $this;
    }

    /**
     * Gets environment_selection_strategy
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy|null
     */
    public function getEnvironmentSelectionStrategy()
    {
        return $this->container['environment_selection_strategy'];
    }

    /**
     * Sets environment_selection_strategy
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionEnvironmentSelectionStrategy|null $environment_selection_strategy environment_selection_strategy
     *
     * @return self
     */
    public function setEnvironmentSelectionStrategy($environment_selection_strategy)
    {
        if (is_null($environment_selection_strategy)) {
            throw new \InvalidArgumentException('non-nullable environment_selection_strategy cannot be null');
        }
        $this->container['environment_selection_strategy'] = $environment_selection_strategy;

        return $this;
    }

    /**
     * Gets customer_email_address
     *
     * @return string|null
     */
    public function getCustomerEmailAddress()
    {
        return $this->container['customer_email_address'];
    }

    /**
     * Sets customer_email_address
     *
     * @param string|null $customer_email_address The customer's email address.
     *
     * @return self
     */
    public function setCustomerEmailAddress($customer_email_address)
    {
        if (is_null($customer_email_address)) {
            throw new \InvalidArgumentException('non-nullable customer_email_address cannot be null');
        }
        if ((mb_strlen($customer_email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $customer_email_address when calling Transaction., must be smaller than or equal to 254.');
        }

        $this->container['customer_email_address'] = $customer_email_address;

        return $this;
    }

    /**
     * Gets window_height
     *
     * @return string|null
     */
    public function getWindowHeight()
    {
        return $this->container['window_height'];
    }

    /**
     * Sets window_height
     *
     * @param string|null $window_height The window height of the customer's web browser.
     *
     * @return self
     */
    public function setWindowHeight($window_height)
    {
        if (is_null($window_height)) {
            throw new \InvalidArgumentException('non-nullable window_height cannot be null');
        }
        $this->container['window_height'] = $window_height;

        return $this;
    }

    /**
     * Gets tokenization_mode
     *
     * @return \PostFinanceCheckout\Sdk\Model\TokenizationMode|null
     */
    public function getTokenizationMode()
    {
        return $this->container['tokenization_mode'];
    }

    /**
     * Sets tokenization_mode
     *
     * @param \PostFinanceCheckout\Sdk\Model\TokenizationMode|null $tokenization_mode tokenization_mode
     *
     * @return self
     */
    public function setTokenizationMode($tokenization_mode)
    {
        if (is_null($tokenization_mode)) {
            throw new \InvalidArgumentException('non-nullable tokenization_mode cannot be null');
        }
        $this->container['tokenization_mode'] = $tokenization_mode;

        return $this;
    }

    /**
     * Gets authorization_timeout_on
     *
     * @return \DateTime|null
     */
    public function getAuthorizationTimeoutOn()
    {
        return $this->container['authorization_timeout_on'];
    }

    /**
     * Sets authorization_timeout_on
     *
     * @param \DateTime|null $authorization_timeout_on The date and time when the transaction must be authorized, otherwise it will canceled.
     *
     * @return self
     */
    public function setAuthorizationTimeoutOn($authorization_timeout_on)
    {
        if (is_null($authorization_timeout_on)) {
            throw new \InvalidArgumentException('non-nullable authorization_timeout_on cannot be null');
        }
        $this->container['authorization_timeout_on'] = $authorization_timeout_on;

        return $this;
    }

    /**
     * Gets allowed_payment_method_brands
     *
     * @return int[]|null
     */
    public function getAllowedPaymentMethodBrands()
    {
        return $this->container['allowed_payment_method_brands'];
    }

    /**
     * Sets allowed_payment_method_brands
     *
     * @param int[]|null $allowed_payment_method_brands The payment method brands that can be used to authorize the transaction.
     *
     * @return self
     */
    public function setAllowedPaymentMethodBrands($allowed_payment_method_brands)
    {
        if (is_null($allowed_payment_method_brands)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_brands cannot be null');
        }
        $this->container['allowed_payment_method_brands'] = $allowed_payment_method_brands;

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
     * Gets meta_data
     *
     * @return array<string,string>|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param array<string,string>|null $meta_data Allow to store additional information about the object.
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        if (is_null($meta_data)) {
            throw new \InvalidArgumentException('non-nullable meta_data cannot be null');
        }
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets emails_disabled
     *
     * @return bool|null
     */
    public function getEmailsDisabled()
    {
        return $this->container['emails_disabled'];
    }

    /**
     * Sets emails_disabled
     *
     * @param bool|null $emails_disabled Whether email sending is deactivated for the transaction. Default is false.
     *
     * @return self
     */
    public function setEmailsDisabled($emails_disabled)
    {
        if (is_null($emails_disabled)) {
            throw new \InvalidArgumentException('non-nullable emails_disabled cannot be null');
        }
        $this->container['emails_disabled'] = $emails_disabled;

        return $this;
    }

    /**
     * Gets user_interface_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType|null
     */
    public function getUserInterfaceType()
    {
        return $this->container['user_interface_type'];
    }

    /**
     * Sets user_interface_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\TransactionUserInterfaceType|null $user_interface_type user_interface_type
     *
     * @return self
     */
    public function setUserInterfaceType($user_interface_type)
    {
        if (is_null($user_interface_type)) {
            throw new \InvalidArgumentException('non-nullable user_interface_type cannot be null');
        }
        $this->container['user_interface_type'] = $user_interface_type;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The unique identifier of the customer in the external system.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The three-letter code (ISO 4217 format) of the transaction's currency.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets merchant_reference
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string|null $merchant_reference The merchant's reference used to identify the transaction.
     *
     * @return self
     */
    public function setMerchantReference($merchant_reference)
    {
        if (is_null($merchant_reference)) {
            throw new \InvalidArgumentException('non-nullable merchant_reference cannot be null');
        }
        if ((mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling Transaction., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/[ \\x20-\\x7e]*/", ObjectSerializer::toString($merchant_reference)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_reference when calling Transaction., must conform to the pattern /[ \\x20-\\x7e]*/.");
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }

    /**
     * Gets authorization_sales_channel
     *
     * @return int|null
     */
    public function getAuthorizationSalesChannel()
    {
        return $this->container['authorization_sales_channel'];
    }

    /**
     * Sets authorization_sales_channel
     *
     * @param int|null $authorization_sales_channel The sales channel through which the transaction was placed.
     *
     * @return self
     */
    public function setAuthorizationSalesChannel($authorization_sales_channel)
    {
        if (is_null($authorization_sales_channel)) {
            throw new \InvalidArgumentException('non-nullable authorization_sales_channel cannot be null');
        }
        $this->container['authorization_sales_channel'] = $authorization_sales_channel;

        return $this;
    }

    /**
     * Gets years_to_keep
     *
     * @return int|null
     */
    public function getYearsToKeep()
    {
        return $this->container['years_to_keep'];
    }

    /**
     * Sets years_to_keep
     *
     * @param int|null $years_to_keep The number of years the transaction is kept after its authorization.
     *
     * @return self
     */
    public function setYearsToKeep($years_to_keep)
    {
        if (is_null($years_to_keep)) {
            throw new \InvalidArgumentException('non-nullable years_to_keep cannot be null');
        }
        $this->container['years_to_keep'] = $years_to_keep;

        return $this;
    }

    /**
     * Gets completed_amount
     *
     * @return float|null
     */
    public function getCompletedAmount()
    {
        return $this->container['completed_amount'];
    }

    /**
     * Sets completed_amount
     *
     * @param float|null $completed_amount The total amount that was completed, in the transaction's currency.
     *
     * @return self
     */
    public function setCompletedAmount($completed_amount)
    {
        if (is_null($completed_amount)) {
            throw new \InvalidArgumentException('non-nullable completed_amount cannot be null');
        }
        $this->container['completed_amount'] = $completed_amount;

        return $this;
    }

    /**
     * Gets screen_height
     *
     * @return string|null
     */
    public function getScreenHeight()
    {
        return $this->container['screen_height'];
    }

    /**
     * Sets screen_height
     *
     * @param string|null $screen_height The screen height of the customer's web browser.
     *
     * @return self
     */
    public function setScreenHeight($screen_height)
    {
        if (is_null($screen_height)) {
            throw new \InvalidArgumentException('non-nullable screen_height cannot be null');
        }
        $this->container['screen_height'] = $screen_height;

        return $this;
    }

    /**
     * Gets internet_protocol_address
     *
     * @return string|null
     */
    public function getInternetProtocolAddress()
    {
        return $this->container['internet_protocol_address'];
    }

    /**
     * Sets internet_protocol_address
     *
     * @param string|null $internet_protocol_address The IP address of the customer's device.
     *
     * @return self
     */
    public function setInternetProtocolAddress($internet_protocol_address)
    {
        if (is_null($internet_protocol_address)) {
            throw new \InvalidArgumentException('non-nullable internet_protocol_address cannot be null');
        }
        $this->container['internet_protocol_address'] = $internet_protocol_address;

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
     * Gets end_of_life
     *
     * @return \DateTime|null
     */
    public function getEndOfLife()
    {
        return $this->container['end_of_life'];
    }

    /**
     * Sets end_of_life
     *
     * @param \DateTime|null $end_of_life The date and time when the transaction reaches its end of live. No further actions can be carried out at this time.
     *
     * @return self
     */
    public function setEndOfLife($end_of_life)
    {
        if (is_null($end_of_life)) {
            throw new \InvalidArgumentException('non-nullable end_of_life cannot be null');
        }
        $this->container['end_of_life'] = $end_of_life;

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
     * Gets environment
     *
     * @return \PostFinanceCheckout\Sdk\Model\Environment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \PostFinanceCheckout\Sdk\Model\Environment|null $environment environment
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
     * Gets screen_color_depth
     *
     * @return string|null
     */
    public function getScreenColorDepth()
    {
        return $this->container['screen_color_depth'];
    }

    /**
     * Sets screen_color_depth
     *
     * @param string|null $screen_color_depth The screen color depth of the customer's web browser.
     *
     * @return self
     */
    public function setScreenColorDepth($screen_color_depth)
    {
        if (is_null($screen_color_depth)) {
            throw new \InvalidArgumentException('non-nullable screen_color_depth cannot be null');
        }
        $this->container['screen_color_depth'] = $screen_color_depth;

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
     * @param int|null $created_by The ID of the user the transaction was created by.
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
     * Gets completed_on
     *
     * @return \DateTime|null
     */
    public function getCompletedOn()
    {
        return $this->container['completed_on'];
    }

    /**
     * Sets completed_on
     *
     * @param \DateTime|null $completed_on The date and time when the transaction was completed.
     *
     * @return self
     */
    public function setCompletedOn($completed_on)
    {
        if (is_null($completed_on)) {
            throw new \InvalidArgumentException('non-nullable completed_on cannot be null');
        }
        $this->container['completed_on'] = $completed_on;

        return $this;
    }

    /**
     * Gets completion_timeout_on
     *
     * @return \DateTime|null
     */
    public function getCompletionTimeoutOn()
    {
        return $this->container['completion_timeout_on'];
    }

    /**
     * Sets completion_timeout_on
     *
     * @param \DateTime|null $completion_timeout_on The date and time when the transaction is completed automatically.
     *
     * @return self
     */
    public function setCompletionTimeoutOn($completion_timeout_on)
    {
        if (is_null($completion_timeout_on)) {
            throw new \InvalidArgumentException('non-nullable completion_timeout_on cannot be null');
        }
        $this->container['completion_timeout_on'] = $completion_timeout_on;

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
     * Gets authorized_on
     *
     * @return \DateTime|null
     */
    public function getAuthorizedOn()
    {
        return $this->container['authorized_on'];
    }

    /**
     * Sets authorized_on
     *
     * @param \DateTime|null $authorized_on The date and time when the transaction was authorized.
     *
     * @return self
     */
    public function setAuthorizedOn($authorized_on)
    {
        if (is_null($authorized_on)) {
            throw new \InvalidArgumentException('non-nullable authorized_on cannot be null');
        }
        $this->container['authorized_on'] = $authorized_on;

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
        if ((mb_strlen($failed_url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling Transaction., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling Transaction., must be bigger than or equal to 9.');
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


