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
 * InvoiceReimbursement model
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
class InvoiceReimbursement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceReimbursement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'discarded_on' => '\DateTime',
        'amount' => 'float',
        'recipient_given_name' => 'string',
        'recipient_iban' => 'string',
        'recipient_organization_name' => 'string',
        'recipient_street' => 'string',
        'discarded_by' => 'int',
        'sender_iban' => 'string',
        'source' => '\PostFinanceCheckout\Sdk\Model\InvoiceProcessor',
        'created_on' => '\DateTime',
        'version' => 'int',
        'linked_space_id' => 'int',
        'environment' => '\PostFinanceCheckout\Sdk\Model\ChargeAttemptEnvironment',
        'recipient_family_name' => 'string',
        'processed_on' => '\DateTime',
        'payment_connector_configuration' => '\PostFinanceCheckout\Sdk\Model\PaymentConnectorConfiguration',
        'recipient_postcode' => 'string',
        'currency' => 'string',
        'recipient_country' => 'string',
        'id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\InvoiceReimbursementState',
        'processed_by' => 'int',
        'recipient_city' => 'string',
        'payment_initiation_advice_file' => '\PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFile'
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
        'amount' => null,
        'recipient_given_name' => null,
        'recipient_iban' => null,
        'recipient_organization_name' => null,
        'recipient_street' => null,
        'discarded_by' => 'int64',
        'sender_iban' => null,
        'source' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'linked_space_id' => 'int64',
        'environment' => null,
        'recipient_family_name' => null,
        'processed_on' => 'date-time',
        'payment_connector_configuration' => null,
        'recipient_postcode' => null,
        'currency' => null,
        'recipient_country' => null,
        'id' => 'int64',
        'state' => null,
        'processed_by' => 'int64',
        'recipient_city' => null,
        'payment_initiation_advice_file' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'discarded_on' => false,
        'amount' => false,
        'recipient_given_name' => false,
        'recipient_iban' => false,
        'recipient_organization_name' => false,
        'recipient_street' => false,
        'discarded_by' => false,
        'sender_iban' => false,
        'source' => false,
        'created_on' => false,
        'version' => false,
        'linked_space_id' => false,
        'environment' => false,
        'recipient_family_name' => false,
        'processed_on' => false,
        'payment_connector_configuration' => false,
        'recipient_postcode' => false,
        'currency' => false,
        'recipient_country' => false,
        'id' => false,
        'state' => false,
        'processed_by' => false,
        'recipient_city' => false,
        'payment_initiation_advice_file' => false
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
        'amount' => 'amount',
        'recipient_given_name' => 'recipientGivenName',
        'recipient_iban' => 'recipientIban',
        'recipient_organization_name' => 'recipientOrganizationName',
        'recipient_street' => 'recipientStreet',
        'discarded_by' => 'discardedBy',
        'sender_iban' => 'senderIban',
        'source' => 'source',
        'created_on' => 'createdOn',
        'version' => 'version',
        'linked_space_id' => 'linkedSpaceId',
        'environment' => 'environment',
        'recipient_family_name' => 'recipientFamilyName',
        'processed_on' => 'processedOn',
        'payment_connector_configuration' => 'paymentConnectorConfiguration',
        'recipient_postcode' => 'recipientPostcode',
        'currency' => 'currency',
        'recipient_country' => 'recipientCountry',
        'id' => 'id',
        'state' => 'state',
        'processed_by' => 'processedBy',
        'recipient_city' => 'recipientCity',
        'payment_initiation_advice_file' => 'paymentInitiationAdviceFile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discarded_on' => 'setDiscardedOn',
        'amount' => 'setAmount',
        'recipient_given_name' => 'setRecipientGivenName',
        'recipient_iban' => 'setRecipientIban',
        'recipient_organization_name' => 'setRecipientOrganizationName',
        'recipient_street' => 'setRecipientStreet',
        'discarded_by' => 'setDiscardedBy',
        'sender_iban' => 'setSenderIban',
        'source' => 'setSource',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'linked_space_id' => 'setLinkedSpaceId',
        'environment' => 'setEnvironment',
        'recipient_family_name' => 'setRecipientFamilyName',
        'processed_on' => 'setProcessedOn',
        'payment_connector_configuration' => 'setPaymentConnectorConfiguration',
        'recipient_postcode' => 'setRecipientPostcode',
        'currency' => 'setCurrency',
        'recipient_country' => 'setRecipientCountry',
        'id' => 'setId',
        'state' => 'setState',
        'processed_by' => 'setProcessedBy',
        'recipient_city' => 'setRecipientCity',
        'payment_initiation_advice_file' => 'setPaymentInitiationAdviceFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discarded_on' => 'getDiscardedOn',
        'amount' => 'getAmount',
        'recipient_given_name' => 'getRecipientGivenName',
        'recipient_iban' => 'getRecipientIban',
        'recipient_organization_name' => 'getRecipientOrganizationName',
        'recipient_street' => 'getRecipientStreet',
        'discarded_by' => 'getDiscardedBy',
        'sender_iban' => 'getSenderIban',
        'source' => 'getSource',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'linked_space_id' => 'getLinkedSpaceId',
        'environment' => 'getEnvironment',
        'recipient_family_name' => 'getRecipientFamilyName',
        'processed_on' => 'getProcessedOn',
        'payment_connector_configuration' => 'getPaymentConnectorConfiguration',
        'recipient_postcode' => 'getRecipientPostcode',
        'currency' => 'getCurrency',
        'recipient_country' => 'getRecipientCountry',
        'id' => 'getId',
        'state' => 'getState',
        'processed_by' => 'getProcessedBy',
        'recipient_city' => 'getRecipientCity',
        'payment_initiation_advice_file' => 'getPaymentInitiationAdviceFile'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('recipient_given_name', $data ?? [], null);
        $this->setIfExists('recipient_iban', $data ?? [], null);
        $this->setIfExists('recipient_organization_name', $data ?? [], null);
        $this->setIfExists('recipient_street', $data ?? [], null);
        $this->setIfExists('discarded_by', $data ?? [], null);
        $this->setIfExists('sender_iban', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('recipient_family_name', $data ?? [], null);
        $this->setIfExists('processed_on', $data ?? [], null);
        $this->setIfExists('payment_connector_configuration', $data ?? [], null);
        $this->setIfExists('recipient_postcode', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('recipient_country', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('processed_by', $data ?? [], null);
        $this->setIfExists('recipient_city', $data ?? [], null);
        $this->setIfExists('payment_initiation_advice_file', $data ?? [], null);
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
     * @param \DateTime|null $discarded_on discarded_on
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
     * Gets recipient_given_name
     *
     * @return string|null
     */
    public function getRecipientGivenName()
    {
        return $this->container['recipient_given_name'];
    }

    /**
     * Sets recipient_given_name
     *
     * @param string|null $recipient_given_name recipient_given_name
     *
     * @return self
     */
    public function setRecipientGivenName($recipient_given_name)
    {
        if (is_null($recipient_given_name)) {
            throw new \InvalidArgumentException('non-nullable recipient_given_name cannot be null');
        }
        $this->container['recipient_given_name'] = $recipient_given_name;

        return $this;
    }

    /**
     * Gets recipient_iban
     *
     * @return string|null
     */
    public function getRecipientIban()
    {
        return $this->container['recipient_iban'];
    }

    /**
     * Sets recipient_iban
     *
     * @param string|null $recipient_iban recipient_iban
     *
     * @return self
     */
    public function setRecipientIban($recipient_iban)
    {
        if (is_null($recipient_iban)) {
            throw new \InvalidArgumentException('non-nullable recipient_iban cannot be null');
        }
        $this->container['recipient_iban'] = $recipient_iban;

        return $this;
    }

    /**
     * Gets recipient_organization_name
     *
     * @return string|null
     */
    public function getRecipientOrganizationName()
    {
        return $this->container['recipient_organization_name'];
    }

    /**
     * Sets recipient_organization_name
     *
     * @param string|null $recipient_organization_name recipient_organization_name
     *
     * @return self
     */
    public function setRecipientOrganizationName($recipient_organization_name)
    {
        if (is_null($recipient_organization_name)) {
            throw new \InvalidArgumentException('non-nullable recipient_organization_name cannot be null');
        }
        $this->container['recipient_organization_name'] = $recipient_organization_name;

        return $this;
    }

    /**
     * Gets recipient_street
     *
     * @return string|null
     */
    public function getRecipientStreet()
    {
        return $this->container['recipient_street'];
    }

    /**
     * Sets recipient_street
     *
     * @param string|null $recipient_street recipient_street
     *
     * @return self
     */
    public function setRecipientStreet($recipient_street)
    {
        if (is_null($recipient_street)) {
            throw new \InvalidArgumentException('non-nullable recipient_street cannot be null');
        }
        $this->container['recipient_street'] = $recipient_street;

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
     * Gets sender_iban
     *
     * @return string|null
     */
    public function getSenderIban()
    {
        return $this->container['sender_iban'];
    }

    /**
     * Sets sender_iban
     *
     * @param string|null $sender_iban sender_iban
     *
     * @return self
     */
    public function setSenderIban($sender_iban)
    {
        if (is_null($sender_iban)) {
            throw new \InvalidArgumentException('non-nullable sender_iban cannot be null');
        }
        $this->container['sender_iban'] = $sender_iban;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceProcessor|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceProcessor|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

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
     * Gets recipient_family_name
     *
     * @return string|null
     */
    public function getRecipientFamilyName()
    {
        return $this->container['recipient_family_name'];
    }

    /**
     * Sets recipient_family_name
     *
     * @param string|null $recipient_family_name recipient_family_name
     *
     * @return self
     */
    public function setRecipientFamilyName($recipient_family_name)
    {
        if (is_null($recipient_family_name)) {
            throw new \InvalidArgumentException('non-nullable recipient_family_name cannot be null');
        }
        $this->container['recipient_family_name'] = $recipient_family_name;

        return $this;
    }

    /**
     * Gets processed_on
     *
     * @return \DateTime|null
     */
    public function getProcessedOn()
    {
        return $this->container['processed_on'];
    }

    /**
     * Sets processed_on
     *
     * @param \DateTime|null $processed_on processed_on
     *
     * @return self
     */
    public function setProcessedOn($processed_on)
    {
        if (is_null($processed_on)) {
            throw new \InvalidArgumentException('non-nullable processed_on cannot be null');
        }
        $this->container['processed_on'] = $processed_on;

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
     * Gets recipient_postcode
     *
     * @return string|null
     */
    public function getRecipientPostcode()
    {
        return $this->container['recipient_postcode'];
    }

    /**
     * Sets recipient_postcode
     *
     * @param string|null $recipient_postcode recipient_postcode
     *
     * @return self
     */
    public function setRecipientPostcode($recipient_postcode)
    {
        if (is_null($recipient_postcode)) {
            throw new \InvalidArgumentException('non-nullable recipient_postcode cannot be null');
        }
        $this->container['recipient_postcode'] = $recipient_postcode;

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
     * Gets recipient_country
     *
     * @return string|null
     */
    public function getRecipientCountry()
    {
        return $this->container['recipient_country'];
    }

    /**
     * Sets recipient_country
     *
     * @param string|null $recipient_country recipient_country
     *
     * @return self
     */
    public function setRecipientCountry($recipient_country)
    {
        if (is_null($recipient_country)) {
            throw new \InvalidArgumentException('non-nullable recipient_country cannot be null');
        }
        $this->container['recipient_country'] = $recipient_country;

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
     * @return \PostFinanceCheckout\Sdk\Model\InvoiceReimbursementState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\InvoiceReimbursementState|null $state state
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
     * Gets processed_by
     *
     * @return int|null
     */
    public function getProcessedBy()
    {
        return $this->container['processed_by'];
    }

    /**
     * Sets processed_by
     *
     * @param int|null $processed_by processed_by
     *
     * @return self
     */
    public function setProcessedBy($processed_by)
    {
        if (is_null($processed_by)) {
            throw new \InvalidArgumentException('non-nullable processed_by cannot be null');
        }
        $this->container['processed_by'] = $processed_by;

        return $this;
    }

    /**
     * Gets recipient_city
     *
     * @return string|null
     */
    public function getRecipientCity()
    {
        return $this->container['recipient_city'];
    }

    /**
     * Sets recipient_city
     *
     * @param string|null $recipient_city recipient_city
     *
     * @return self
     */
    public function setRecipientCity($recipient_city)
    {
        if (is_null($recipient_city)) {
            throw new \InvalidArgumentException('non-nullable recipient_city cannot be null');
        }
        $this->container['recipient_city'] = $recipient_city;

        return $this;
    }

    /**
     * Gets payment_initiation_advice_file
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFile|null
     */
    public function getPaymentInitiationAdviceFile()
    {
        return $this->container['payment_initiation_advice_file'];
    }

    /**
     * Sets payment_initiation_advice_file
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentInitiationAdviceFile|null $payment_initiation_advice_file payment_initiation_advice_file
     *
     * @return self
     */
    public function setPaymentInitiationAdviceFile($payment_initiation_advice_file)
    {
        if (is_null($payment_initiation_advice_file)) {
            throw new \InvalidArgumentException('non-nullable payment_initiation_advice_file cannot be null');
        }
        $this->container['payment_initiation_advice_file'] = $payment_initiation_advice_file;

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


