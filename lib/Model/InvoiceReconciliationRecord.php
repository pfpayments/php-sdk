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
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * InvoiceReconciliationRecord model
 *
 * @category    Class
 * @description 
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class InvoiceReconciliationRecord extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceReconciliationRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
        'amount' => 'float',
        'city' => 'string',
        'country' => 'string',
        'created_on' => '\DateTime',
        'currency' => 'string',
        'discarded_by' => 'int',
        'discarded_on' => '\DateTime',
        'environment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
        'family_name' => 'string',
        'given_name' => 'string',
        'iban' => 'string',
        'last_resolution_failure' => '\PostFinanceCheckout\Sdk\Model\FailureReason',
        'participant_number' => 'string',
        'payment_fee_amount' => 'float',
        'payment_fee_currency' => 'string',
        'payment_reason' => 'string',
        'planned_purge_date' => '\DateTime',
        'post_code' => 'string',
        'reference_number' => 'string',
        'rejection_status' => '\PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordRejectionStatus',
        'resolved_by' => 'int',
        'resolved_on' => '\DateTime',
        'sender_bank_account' => 'string',
        'state' => '\PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordState',
        'street' => 'string',
        'type' => '\PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordType',
        'unique_id' => 'string',
        'value_date' => '\DateTime',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'amount' => null,
        'city' => null,
        'country' => null,
        'created_on' => 'date-time',
        'currency' => null,
        'discarded_by' => 'int64',
        'discarded_on' => 'date-time',
        'environment' => null,
        'family_name' => null,
        'given_name' => null,
        'iban' => null,
        'last_resolution_failure' => null,
        'participant_number' => null,
        'payment_fee_amount' => null,
        'payment_fee_currency' => null,
        'payment_reason' => null,
        'planned_purge_date' => 'date-time',
        'post_code' => null,
        'reference_number' => null,
        'rejection_status' => null,
        'resolved_by' => 'int64',
        'resolved_on' => 'date-time',
        'sender_bank_account' => null,
        'state' => null,
        'street' => null,
        'type' => null,
        'unique_id' => null,
        'value_date' => 'date-time',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'amount' => 'amount',
        'city' => 'city',
        'country' => 'country',
        'created_on' => 'createdOn',
        'currency' => 'currency',
        'discarded_by' => 'discardedBy',
        'discarded_on' => 'discardedOn',
        'environment' => 'environment',
        'family_name' => 'familyName',
        'given_name' => 'givenName',
        'iban' => 'iban',
        'last_resolution_failure' => 'lastResolutionFailure',
        'participant_number' => 'participantNumber',
        'payment_fee_amount' => 'paymentFeeAmount',
        'payment_fee_currency' => 'paymentFeeCurrency',
        'payment_reason' => 'paymentReason',
        'planned_purge_date' => 'plannedPurgeDate',
        'post_code' => 'postCode',
        'reference_number' => 'referenceNumber',
        'rejection_status' => 'rejectionStatus',
        'resolved_by' => 'resolvedBy',
        'resolved_on' => 'resolvedOn',
        'sender_bank_account' => 'senderBankAccount',
        'state' => 'state',
        'street' => 'street',
        'type' => 'type',
        'unique_id' => 'uniqueId',
        'value_date' => 'valueDate',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'amount' => 'setAmount',
        'city' => 'setCity',
        'country' => 'setCountry',
        'created_on' => 'setCreatedOn',
        'currency' => 'setCurrency',
        'discarded_by' => 'setDiscardedBy',
        'discarded_on' => 'setDiscardedOn',
        'environment' => 'setEnvironment',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'iban' => 'setIban',
        'last_resolution_failure' => 'setLastResolutionFailure',
        'participant_number' => 'setParticipantNumber',
        'payment_fee_amount' => 'setPaymentFeeAmount',
        'payment_fee_currency' => 'setPaymentFeeCurrency',
        'payment_reason' => 'setPaymentReason',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'post_code' => 'setPostCode',
        'reference_number' => 'setReferenceNumber',
        'rejection_status' => 'setRejectionStatus',
        'resolved_by' => 'setResolvedBy',
        'resolved_on' => 'setResolvedOn',
        'sender_bank_account' => 'setSenderBankAccount',
        'state' => 'setState',
        'street' => 'setStreet',
        'type' => 'setType',
        'unique_id' => 'setUniqueId',
        'value_date' => 'setValueDate',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'amount' => 'getAmount',
        'city' => 'getCity',
        'country' => 'getCountry',
        'created_on' => 'getCreatedOn',
        'currency' => 'getCurrency',
        'discarded_by' => 'getDiscardedBy',
        'discarded_on' => 'getDiscardedOn',
        'environment' => 'getEnvironment',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'iban' => 'getIban',
        'last_resolution_failure' => 'getLastResolutionFailure',
        'participant_number' => 'getParticipantNumber',
        'payment_fee_amount' => 'getPaymentFeeAmount',
        'payment_fee_currency' => 'getPaymentFeeCurrency',
        'payment_reason' => 'getPaymentReason',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'post_code' => 'getPostCode',
        'reference_number' => 'getReferenceNumber',
        'rejection_status' => 'getRejectionStatus',
        'resolved_by' => 'getResolvedBy',
        'resolved_on' => 'getResolvedOn',
        'sender_bank_account' => 'getSenderBankAccount',
        'state' => 'getState',
        'street' => 'getStreet',
        'type' => 'getType',
        'unique_id' => 'getUniqueId',
        'value_date' => 'getValueDate',
        'version' => 'getVersion'
    ];

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['discarded_by'] = isset($data['discarded_by']) ? $data['discarded_by'] : null;
        
        $this->container['discarded_on'] = isset($data['discarded_on']) ? $data['discarded_on'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        
        $this->container['last_resolution_failure'] = isset($data['last_resolution_failure']) ? $data['last_resolution_failure'] : null;
        
        $this->container['participant_number'] = isset($data['participant_number']) ? $data['participant_number'] : null;
        
        $this->container['payment_fee_amount'] = isset($data['payment_fee_amount']) ? $data['payment_fee_amount'] : null;
        
        $this->container['payment_fee_currency'] = isset($data['payment_fee_currency']) ? $data['payment_fee_currency'] : null;
        
        $this->container['payment_reason'] = isset($data['payment_reason']) ? $data['payment_reason'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        
        $this->container['rejection_status'] = isset($data['rejection_status']) ? $data['rejection_status'] : null;
        
        $this->container['resolved_by'] = isset($data['resolved_by']) ? $data['resolved_by'] : null;
        
        $this->container['resolved_on'] = isset($data['resolved_on']) ? $data['resolved_on'] : null;
        
        $this->container['sender_bank_account'] = isset($data['sender_bank_account']) ? $data['sender_bank_account'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) > 100)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['participant_number']) && (mb_strlen($this->container['participant_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'participant_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['reference_number']) && (mb_strlen($this->container['reference_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) > 500)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be smaller than or equal to 500.";
        }

        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address 
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }
    

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city 
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }
    

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date and time when the object was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    

    /**
     * Gets discarded_by
     *
     * @return int
     */
    public function getDiscardedBy()
    {
        return $this->container['discarded_by'];
    }

    /**
     * Sets discarded_by
     *
     * @param int $discarded_by 
     *
     * @return $this
     */
    public function setDiscardedBy($discarded_by)
    {
        $this->container['discarded_by'] = $discarded_by;

        return $this;
    }
    

    /**
     * Gets discarded_on
     *
     * @return \DateTime
     */
    public function getDiscardedOn()
    {
        return $this->container['discarded_on'];
    }

    /**
     * Sets discarded_on
     *
     * @param \DateTime $discarded_on The discarded on date indicates when the bank transaction has been discarded.
     *
     * @return $this
     */
    public function setDiscardedOn($discarded_on)
    {
        $this->container['discarded_on'] = $discarded_on;

        return $this;
    }
    

    /**
     * Gets environment
     *
     * @return \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment $environment 
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }
    

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name 
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }
    

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name 
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }
    

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban 
     *
     * @return $this
     */
    public function setIban($iban)
    {
        if (!is_null($iban) && (mb_strlen($iban) > 100)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling InvoiceReconciliationRecord., must be smaller than or equal to 100.');
        }

        $this->container['iban'] = $iban;

        return $this;
    }
    

    /**
     * Gets last_resolution_failure
     *
     * @return \PostFinanceCheckout\Sdk\Model\FailureReason
     */
    public function getLastResolutionFailure()
    {
        return $this->container['last_resolution_failure'];
    }

    /**
     * Sets last_resolution_failure
     *
     * @param \PostFinanceCheckout\Sdk\Model\FailureReason $last_resolution_failure 
     *
     * @return $this
     */
    public function setLastResolutionFailure($last_resolution_failure)
    {
        $this->container['last_resolution_failure'] = $last_resolution_failure;

        return $this;
    }
    

    /**
     * Gets participant_number
     *
     * @return string
     */
    public function getParticipantNumber()
    {
        return $this->container['participant_number'];
    }

    /**
     * Sets participant_number
     *
     * @param string $participant_number 
     *
     * @return $this
     */
    public function setParticipantNumber($participant_number)
    {
        if (!is_null($participant_number) && (mb_strlen($participant_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $participant_number when calling InvoiceReconciliationRecord., must be smaller than or equal to 100.');
        }

        $this->container['participant_number'] = $participant_number;

        return $this;
    }
    

    /**
     * Gets payment_fee_amount
     *
     * @return float
     */
    public function getPaymentFeeAmount()
    {
        return $this->container['payment_fee_amount'];
    }

    /**
     * Sets payment_fee_amount
     *
     * @param float $payment_fee_amount 
     *
     * @return $this
     */
    public function setPaymentFeeAmount($payment_fee_amount)
    {
        $this->container['payment_fee_amount'] = $payment_fee_amount;

        return $this;
    }
    

    /**
     * Gets payment_fee_currency
     *
     * @return string
     */
    public function getPaymentFeeCurrency()
    {
        return $this->container['payment_fee_currency'];
    }

    /**
     * Sets payment_fee_currency
     *
     * @param string $payment_fee_currency 
     *
     * @return $this
     */
    public function setPaymentFeeCurrency($payment_fee_currency)
    {
        $this->container['payment_fee_currency'] = $payment_fee_currency;

        return $this;
    }
    

    /**
     * Gets payment_reason
     *
     * @return string
     */
    public function getPaymentReason()
    {
        return $this->container['payment_reason'];
    }

    /**
     * Sets payment_reason
     *
     * @param string $payment_reason 
     *
     * @return $this
     */
    public function setPaymentReason($payment_reason)
    {
        $this->container['payment_reason'] = $payment_reason;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code 
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }
    

    /**
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number 
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        if (!is_null($reference_number) && (mb_strlen($reference_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference_number when calling InvoiceReconciliationRecord., must be smaller than or equal to 255.');
        }

        $this->container['reference_number'] = $reference_number;

        return $this;
    }
    

    /**
     * Gets rejection_status
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordRejectionStatus
     */
    public function getRejectionStatus()
    {
        return $this->container['rejection_status'];
    }

    /**
     * Sets rejection_status
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordRejectionStatus $rejection_status 
     *
     * @return $this
     */
    public function setRejectionStatus($rejection_status)
    {
        $this->container['rejection_status'] = $rejection_status;

        return $this;
    }
    

    /**
     * Gets resolved_by
     *
     * @return int
     */
    public function getResolvedBy()
    {
        return $this->container['resolved_by'];
    }

    /**
     * Sets resolved_by
     *
     * @param int $resolved_by 
     *
     * @return $this
     */
    public function setResolvedBy($resolved_by)
    {
        $this->container['resolved_by'] = $resolved_by;

        return $this;
    }
    

    /**
     * Gets resolved_on
     *
     * @return \DateTime
     */
    public function getResolvedOn()
    {
        return $this->container['resolved_on'];
    }

    /**
     * Sets resolved_on
     *
     * @param \DateTime $resolved_on The resolved on date indicates when the bank transaction has been resolved.
     *
     * @return $this
     */
    public function setResolvedOn($resolved_on)
    {
        $this->container['resolved_on'] = $resolved_on;

        return $this;
    }
    

    /**
     * Gets sender_bank_account
     *
     * @return string
     */
    public function getSenderBankAccount()
    {
        return $this->container['sender_bank_account'];
    }

    /**
     * Sets sender_bank_account
     *
     * @param string $sender_bank_account 
     *
     * @return $this
     */
    public function setSenderBankAccount($sender_bank_account)
    {
        $this->container['sender_bank_account'] = $sender_bank_account;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street 
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReconciliationRecordType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    

    /**
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id 
     *
     * @return $this
     */
    public function setUniqueId($unique_id)
    {
        if (!is_null($unique_id) && (mb_strlen($unique_id) > 500)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling InvoiceReconciliationRecord., must be smaller than or equal to 500.');
        }

        $this->container['unique_id'] = $unique_id;

        return $this;
    }
    

    /**
     * Gets value_date
     *
     * @return \DateTime
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime $value_date 
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        $this->container['value_date'] = $value_date;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


