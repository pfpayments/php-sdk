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
 * InvoiceReconciliationRecord model
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
class InvoiceReconciliationRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceReconciliationRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'discarded_on' => '\DateTime',
        'last_resolution_failure' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'country' => 'string',
        'rejection_status' => '\PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordRejectionStatus',
        'city' => 'string',
        'resolved_by' => 'int',
        'discarded_by' => 'int',
        'type' => '\PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordType',
        'created_on' => '\DateTime',
        'payment_fee_currency' => 'string',
        'payment_reason' => 'string',
        'reference_number' => 'string',
        'street' => 'string',
        'family_name' => 'string',
        'currency' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordState',
        'linked_transaction' => 'int',
        'resolved_on' => '\DateTime',
        'amount' => 'float',
        'address' => 'string',
        'given_name' => 'string',
        'planned_purge_date' => '\DateTime',
        'bank_payment_type' => '\PostFinanceCheckout\Sdk\Model\BankPaymentType',
        'value_date' => '\DateTime',
        'version' => 'int',
        'payment_fee_amount' => 'float',
        'linked_space_id' => 'int',
        'environment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
        'sender_bank_account' => 'string',
        'participant_number' => 'string',
        'iban' => 'string',
        'post_code' => 'string',
        'unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'discarded_on' => 'date-time',
        'last_resolution_failure' => null,
        'country' => null,
        'rejection_status' => null,
        'city' => null,
        'resolved_by' => 'int64',
        'discarded_by' => 'int64',
        'type' => null,
        'created_on' => 'date-time',
        'payment_fee_currency' => null,
        'payment_reason' => null,
        'reference_number' => null,
        'street' => null,
        'family_name' => null,
        'currency' => null,
        'id' => 'int64',
        'state' => null,
        'linked_transaction' => 'int64',
        'resolved_on' => 'date-time',
        'amount' => null,
        'address' => null,
        'given_name' => null,
        'planned_purge_date' => 'date-time',
        'bank_payment_type' => null,
        'value_date' => 'date-time',
        'version' => 'int32',
        'payment_fee_amount' => null,
        'linked_space_id' => 'int64',
        'environment' => null,
        'sender_bank_account' => null,
        'participant_number' => null,
        'iban' => null,
        'post_code' => null,
        'unique_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'discarded_on' => false,
        'last_resolution_failure' => false,
        'country' => false,
        'rejection_status' => false,
        'city' => false,
        'resolved_by' => false,
        'discarded_by' => false,
        'type' => false,
        'created_on' => false,
        'payment_fee_currency' => false,
        'payment_reason' => false,
        'reference_number' => false,
        'street' => false,
        'family_name' => false,
        'currency' => false,
        'id' => false,
        'state' => false,
        'linked_transaction' => false,
        'resolved_on' => false,
        'amount' => false,
        'address' => false,
        'given_name' => false,
        'planned_purge_date' => false,
        'bank_payment_type' => false,
        'value_date' => false,
        'version' => false,
        'payment_fee_amount' => false,
        'linked_space_id' => false,
        'environment' => false,
        'sender_bank_account' => false,
        'participant_number' => false,
        'iban' => false,
        'post_code' => false,
        'unique_id' => false
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
        'discarded_on' => 'discardedOn',
        'last_resolution_failure' => 'lastResolutionFailure',
        'country' => 'country',
        'rejection_status' => 'rejectionStatus',
        'city' => 'city',
        'resolved_by' => 'resolvedBy',
        'discarded_by' => 'discardedBy',
        'type' => 'type',
        'created_on' => 'createdOn',
        'payment_fee_currency' => 'paymentFeeCurrency',
        'payment_reason' => 'paymentReason',
        'reference_number' => 'referenceNumber',
        'street' => 'street',
        'family_name' => 'familyName',
        'currency' => 'currency',
        'id' => 'id',
        'state' => 'state',
        'linked_transaction' => 'linkedTransaction',
        'resolved_on' => 'resolvedOn',
        'amount' => 'amount',
        'address' => 'address',
        'given_name' => 'givenName',
        'planned_purge_date' => 'plannedPurgeDate',
        'bank_payment_type' => 'bankPaymentType',
        'value_date' => 'valueDate',
        'version' => 'version',
        'payment_fee_amount' => 'paymentFeeAmount',
        'linked_space_id' => 'linkedSpaceId',
        'environment' => 'environment',
        'sender_bank_account' => 'senderBankAccount',
        'participant_number' => 'participantNumber',
        'iban' => 'iban',
        'post_code' => 'postCode',
        'unique_id' => 'uniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discarded_on' => 'setDiscardedOn',
        'last_resolution_failure' => 'setLastResolutionFailure',
        'country' => 'setCountry',
        'rejection_status' => 'setRejectionStatus',
        'city' => 'setCity',
        'resolved_by' => 'setResolvedBy',
        'discarded_by' => 'setDiscardedBy',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'payment_fee_currency' => 'setPaymentFeeCurrency',
        'payment_reason' => 'setPaymentReason',
        'reference_number' => 'setReferenceNumber',
        'street' => 'setStreet',
        'family_name' => 'setFamilyName',
        'currency' => 'setCurrency',
        'id' => 'setId',
        'state' => 'setState',
        'linked_transaction' => 'setLinkedTransaction',
        'resolved_on' => 'setResolvedOn',
        'amount' => 'setAmount',
        'address' => 'setAddress',
        'given_name' => 'setGivenName',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'bank_payment_type' => 'setBankPaymentType',
        'value_date' => 'setValueDate',
        'version' => 'setVersion',
        'payment_fee_amount' => 'setPaymentFeeAmount',
        'linked_space_id' => 'setLinkedSpaceId',
        'environment' => 'setEnvironment',
        'sender_bank_account' => 'setSenderBankAccount',
        'participant_number' => 'setParticipantNumber',
        'iban' => 'setIban',
        'post_code' => 'setPostCode',
        'unique_id' => 'setUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discarded_on' => 'getDiscardedOn',
        'last_resolution_failure' => 'getLastResolutionFailure',
        'country' => 'getCountry',
        'rejection_status' => 'getRejectionStatus',
        'city' => 'getCity',
        'resolved_by' => 'getResolvedBy',
        'discarded_by' => 'getDiscardedBy',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'payment_fee_currency' => 'getPaymentFeeCurrency',
        'payment_reason' => 'getPaymentReason',
        'reference_number' => 'getReferenceNumber',
        'street' => 'getStreet',
        'family_name' => 'getFamilyName',
        'currency' => 'getCurrency',
        'id' => 'getId',
        'state' => 'getState',
        'linked_transaction' => 'getLinkedTransaction',
        'resolved_on' => 'getResolvedOn',
        'amount' => 'getAmount',
        'address' => 'getAddress',
        'given_name' => 'getGivenName',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'bank_payment_type' => 'getBankPaymentType',
        'value_date' => 'getValueDate',
        'version' => 'getVersion',
        'payment_fee_amount' => 'getPaymentFeeAmount',
        'linked_space_id' => 'getLinkedSpaceId',
        'environment' => 'getEnvironment',
        'sender_bank_account' => 'getSenderBankAccount',
        'participant_number' => 'getParticipantNumber',
        'iban' => 'getIban',
        'post_code' => 'getPostCode',
        'unique_id' => 'getUniqueId'
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
        $this->setIfExists('discarded_on', $data ?? [], null);
        $this->setIfExists('last_resolution_failure', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('rejection_status', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('resolved_by', $data ?? [], null);
        $this->setIfExists('discarded_by', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('payment_fee_currency', $data ?? [], null);
        $this->setIfExists('payment_reason', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('family_name', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('linked_transaction', $data ?? [], null);
        $this->setIfExists('resolved_on', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('bank_payment_type', $data ?? [], null);
        $this->setIfExists('value_date', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('payment_fee_amount', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('sender_bank_account', $data ?? [], null);
        $this->setIfExists('participant_number', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('post_code', $data ?? [], null);
        $this->setIfExists('unique_id', $data ?? [], null);
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

        if (!is_null($this->container['reference_number']) && (mb_strlen($this->container['reference_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['participant_number']) && (mb_strlen($this->container['participant_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'participant_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) > 100)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) > 500)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be smaller than or equal to 500.";
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
     * Gets discarded_on
     *
     * @return \DateTime|null
     */
    public function getDiscardedOn()
    {
        return $this->container['discarded_on'];
    }

    /**
     * Sets discarded_on
     *
     * @param \DateTime|null $discarded_on The discarded on date indicates when the bank transaction has been discarded.
     *
     * @return self
     */
    public function setDiscardedOn($discarded_on)
    {
        if (is_null($discarded_on)) {
            throw new \InvalidArgumentException('non-nullable discarded_on cannot be null');
        }
        $this->container['discarded_on'] = $discarded_on;

        return $this;
    }

    /**
     * Gets last_resolution_failure
     *
     * @return \PostFinanceCheckout\Sdk\Model\FailureReason|null
     */
    public function getLastResolutionFailure()
    {
        return $this->container['last_resolution_failure'];
    }

    /**
     * Sets last_resolution_failure
     *
     * @param \PostFinanceCheckout\Sdk\Model\FailureReason|null $last_resolution_failure last_resolution_failure
     *
     * @return self
     */
    public function setLastResolutionFailure($last_resolution_failure)
    {
        if (is_null($last_resolution_failure)) {
            throw new \InvalidArgumentException('non-nullable last_resolution_failure cannot be null');
        }
        $this->container['last_resolution_failure'] = $last_resolution_failure;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets rejection_status
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordRejectionStatus|null
     */
    public function getRejectionStatus()
    {
        return $this->container['rejection_status'];
    }

    /**
     * Sets rejection_status
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordRejectionStatus|null $rejection_status rejection_status
     *
     * @return self
     */
    public function setRejectionStatus($rejection_status)
    {
        if (is_null($rejection_status)) {
            throw new \InvalidArgumentException('non-nullable rejection_status cannot be null');
        }
        $this->container['rejection_status'] = $rejection_status;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets resolved_by
     *
     * @return int|null
     */
    public function getResolvedBy()
    {
        return $this->container['resolved_by'];
    }

    /**
     * Sets resolved_by
     *
     * @param int|null $resolved_by resolved_by
     *
     * @return self
     */
    public function setResolvedBy($resolved_by)
    {
        if (is_null($resolved_by)) {
            throw new \InvalidArgumentException('non-nullable resolved_by cannot be null');
        }
        $this->container['resolved_by'] = $resolved_by;

        return $this;
    }

    /**
     * Gets discarded_by
     *
     * @return int|null
     */
    public function getDiscardedBy()
    {
        return $this->container['discarded_by'];
    }

    /**
     * Sets discarded_by
     *
     * @param int|null $discarded_by discarded_by
     *
     * @return self
     */
    public function setDiscardedBy($discarded_by)
    {
        if (is_null($discarded_by)) {
            throw new \InvalidArgumentException('non-nullable discarded_by cannot be null');
        }
        $this->container['discarded_by'] = $discarded_by;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordType|null $type type
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
     * Gets payment_fee_currency
     *
     * @return string|null
     */
    public function getPaymentFeeCurrency()
    {
        return $this->container['payment_fee_currency'];
    }

    /**
     * Sets payment_fee_currency
     *
     * @param string|null $payment_fee_currency payment_fee_currency
     *
     * @return self
     */
    public function setPaymentFeeCurrency($payment_fee_currency)
    {
        if (is_null($payment_fee_currency)) {
            throw new \InvalidArgumentException('non-nullable payment_fee_currency cannot be null');
        }
        $this->container['payment_fee_currency'] = $payment_fee_currency;

        return $this;
    }

    /**
     * Gets payment_reason
     *
     * @return string|null
     */
    public function getPaymentReason()
    {
        return $this->container['payment_reason'];
    }

    /**
     * Sets payment_reason
     *
     * @param string|null $payment_reason payment_reason
     *
     * @return self
     */
    public function setPaymentReason($payment_reason)
    {
        if (is_null($payment_reason)) {
            throw new \InvalidArgumentException('non-nullable payment_reason cannot be null');
        }
        $this->container['payment_reason'] = $payment_reason;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number reference_number
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        if ((mb_strlen($reference_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference_number when calling InvoiceReconciliationRecord., must be smaller than or equal to 255.');
        }

        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string|null $family_name family_name
     *
     * @return self
     */
    public function setFamilyName($family_name)
    {
        if (is_null($family_name)) {
            throw new \InvalidArgumentException('non-nullable family_name cannot be null');
        }
        $this->container['family_name'] = $family_name;

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
     * @param string|null $currency currency
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
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordState|null $state state
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
     * Gets resolved_on
     *
     * @return \DateTime|null
     */
    public function getResolvedOn()
    {
        return $this->container['resolved_on'];
    }

    /**
     * Sets resolved_on
     *
     * @param \DateTime|null $resolved_on The resolved on date indicates when the bank transaction has been resolved.
     *
     * @return self
     */
    public function setResolvedOn($resolved_on)
    {
        if (is_null($resolved_on)) {
            throw new \InvalidArgumentException('non-nullable resolved_on cannot be null');
        }
        $this->container['resolved_on'] = $resolved_on;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name given_name
     *
     * @return self
     */
    public function setGivenName($given_name)
    {
        if (is_null($given_name)) {
            throw new \InvalidArgumentException('non-nullable given_name cannot be null');
        }
        $this->container['given_name'] = $given_name;

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
     * Gets bank_payment_type
     *
     * @return \PostFinanceCheckout\Sdk\Model\BankPaymentType|null
     */
    public function getBankPaymentType()
    {
        return $this->container['bank_payment_type'];
    }

    /**
     * Sets bank_payment_type
     *
     * @param \PostFinanceCheckout\Sdk\Model\BankPaymentType|null $bank_payment_type bank_payment_type
     *
     * @return self
     */
    public function setBankPaymentType($bank_payment_type)
    {
        if (is_null($bank_payment_type)) {
            throw new \InvalidArgumentException('non-nullable bank_payment_type cannot be null');
        }
        $this->container['bank_payment_type'] = $bank_payment_type;

        return $this;
    }

    /**
     * Gets value_date
     *
     * @return \DateTime|null
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime|null $value_date value_date
     *
     * @return self
     */
    public function setValueDate($value_date)
    {
        if (is_null($value_date)) {
            throw new \InvalidArgumentException('non-nullable value_date cannot be null');
        }
        $this->container['value_date'] = $value_date;

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
     * Gets payment_fee_amount
     *
     * @return float|null
     */
    public function getPaymentFeeAmount()
    {
        return $this->container['payment_fee_amount'];
    }

    /**
     * Sets payment_fee_amount
     *
     * @param float|null $payment_fee_amount payment_fee_amount
     *
     * @return self
     */
    public function setPaymentFeeAmount($payment_fee_amount)
    {
        if (is_null($payment_fee_amount)) {
            throw new \InvalidArgumentException('non-nullable payment_fee_amount cannot be null');
        }
        $this->container['payment_fee_amount'] = $payment_fee_amount;

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
     * Gets sender_bank_account
     *
     * @return string|null
     */
    public function getSenderBankAccount()
    {
        return $this->container['sender_bank_account'];
    }

    /**
     * Sets sender_bank_account
     *
     * @param string|null $sender_bank_account sender_bank_account
     *
     * @return self
     */
    public function setSenderBankAccount($sender_bank_account)
    {
        if (is_null($sender_bank_account)) {
            throw new \InvalidArgumentException('non-nullable sender_bank_account cannot be null');
        }
        $this->container['sender_bank_account'] = $sender_bank_account;

        return $this;
    }

    /**
     * Gets participant_number
     *
     * @return string|null
     */
    public function getParticipantNumber()
    {
        return $this->container['participant_number'];
    }

    /**
     * Sets participant_number
     *
     * @param string|null $participant_number participant_number
     *
     * @return self
     */
    public function setParticipantNumber($participant_number)
    {
        if (is_null($participant_number)) {
            throw new \InvalidArgumentException('non-nullable participant_number cannot be null');
        }
        if ((mb_strlen($participant_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $participant_number when calling InvoiceReconciliationRecord., must be smaller than or equal to 100.');
        }

        $this->container['participant_number'] = $participant_number;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban iban
     *
     * @return self
     */
    public function setIban($iban)
    {
        if (is_null($iban)) {
            throw new \InvalidArgumentException('non-nullable iban cannot be null');
        }
        if ((mb_strlen($iban) > 100)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling InvoiceReconciliationRecord., must be smaller than or equal to 100.');
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string|null $post_code post_code
     *
     * @return self
     */
    public function setPostCode($post_code)
    {
        if (is_null($post_code)) {
            throw new \InvalidArgumentException('non-nullable post_code cannot be null');
        }
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string|null $unique_id unique_id
     *
     * @return self
     */
    public function setUniqueId($unique_id)
    {
        if (is_null($unique_id)) {
            throw new \InvalidArgumentException('non-nullable unique_id cannot be null');
        }
        if ((mb_strlen($unique_id) > 500)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling InvoiceReconciliationRecord., must be smaller than or equal to 500.');
        }

        $this->container['unique_id'] = $unique_id;

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


