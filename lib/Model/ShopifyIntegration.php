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

use \ArrayAccess;
use \PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * ShopifyIntegration model
 *
 * @category    Class
 * @description A Shopify Integration allows to connect a Shopify shop.
 * @package     PostFinanceCheckout\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifyIntegration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifyIntegration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_invoice_download' => 'bool',
        'allowed_payment_method_configurations' => '\PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration[]',
        'app_version' => '\PostFinanceCheckout\Sdk\Model\ShopifyIntegrationAppVersion',
        'currency' => 'string',
        'id' => 'int',
        'installed' => 'bool',
        'integrated_payment_form_enabled' => 'bool',
        'language' => 'string',
        'login_name' => 'string',
        'name' => 'string',
        'planned_purge_date' => '\DateTime',
        'proxy_path' => 'string',
        'replace_payment_method_image' => 'bool',
        'shop_name' => 'string',
        'show_payment_information' => 'bool',
        'show_subscription_information' => 'bool',
        'space_id' => 'int',
        'space_view_id' => 'int',
        'state' => '\PostFinanceCheckout\Sdk\Model\CreationEntityState',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_invoice_download' => null,
        'allowed_payment_method_configurations' => null,
        'app_version' => null,
        'currency' => null,
        'id' => 'int64',
        'installed' => null,
        'integrated_payment_form_enabled' => null,
        'language' => null,
        'login_name' => null,
        'name' => null,
        'planned_purge_date' => 'date-time',
        'proxy_path' => null,
        'replace_payment_method_image' => null,
        'shop_name' => null,
        'show_payment_information' => null,
        'show_subscription_information' => null,
        'space_id' => 'int64',
        'space_view_id' => 'int64',
        'state' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allow_invoice_download' => 'allowInvoiceDownload',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'app_version' => 'appVersion',
        'currency' => 'currency',
        'id' => 'id',
        'installed' => 'installed',
        'integrated_payment_form_enabled' => 'integratedPaymentFormEnabled',
        'language' => 'language',
        'login_name' => 'loginName',
        'name' => 'name',
        'planned_purge_date' => 'plannedPurgeDate',
        'proxy_path' => 'proxyPath',
        'replace_payment_method_image' => 'replacePaymentMethodImage',
        'shop_name' => 'shopName',
        'show_payment_information' => 'showPaymentInformation',
        'show_subscription_information' => 'showSubscriptionInformation',
        'space_id' => 'spaceId',
        'space_view_id' => 'spaceViewId',
        'state' => 'state',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_invoice_download' => 'setAllowInvoiceDownload',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'app_version' => 'setAppVersion',
        'currency' => 'setCurrency',
        'id' => 'setId',
        'installed' => 'setInstalled',
        'integrated_payment_form_enabled' => 'setIntegratedPaymentFormEnabled',
        'language' => 'setLanguage',
        'login_name' => 'setLoginName',
        'name' => 'setName',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'proxy_path' => 'setProxyPath',
        'replace_payment_method_image' => 'setReplacePaymentMethodImage',
        'shop_name' => 'setShopName',
        'show_payment_information' => 'setShowPaymentInformation',
        'show_subscription_information' => 'setShowSubscriptionInformation',
        'space_id' => 'setSpaceId',
        'space_view_id' => 'setSpaceViewId',
        'state' => 'setState',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_invoice_download' => 'getAllowInvoiceDownload',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'app_version' => 'getAppVersion',
        'currency' => 'getCurrency',
        'id' => 'getId',
        'installed' => 'getInstalled',
        'integrated_payment_form_enabled' => 'getIntegratedPaymentFormEnabled',
        'language' => 'getLanguage',
        'login_name' => 'getLoginName',
        'name' => 'getName',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'proxy_path' => 'getProxyPath',
        'replace_payment_method_image' => 'getReplacePaymentMethodImage',
        'shop_name' => 'getShopName',
        'show_payment_information' => 'getShowPaymentInformation',
        'show_subscription_information' => 'getShowSubscriptionInformation',
        'space_id' => 'getSpaceId',
        'space_view_id' => 'getSpaceViewId',
        'state' => 'getState',
        'version' => 'getVersion'
    ];

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        
        $this->container['allow_invoice_download'] = isset($data['allow_invoice_download']) ? $data['allow_invoice_download'] : null;
        
        $this->container['allowed_payment_method_configurations'] = isset($data['allowed_payment_method_configurations']) ? $data['allowed_payment_method_configurations'] : null;
        
        $this->container['app_version'] = isset($data['app_version']) ? $data['app_version'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['installed'] = isset($data['installed']) ? $data['installed'] : null;
        
        $this->container['integrated_payment_form_enabled'] = isset($data['integrated_payment_form_enabled']) ? $data['integrated_payment_form_enabled'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['login_name'] = isset($data['login_name']) ? $data['login_name'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['proxy_path'] = isset($data['proxy_path']) ? $data['proxy_path'] : null;
        
        $this->container['replace_payment_method_image'] = isset($data['replace_payment_method_image']) ? $data['replace_payment_method_image'] : null;
        
        $this->container['shop_name'] = isset($data['shop_name']) ? $data['shop_name'] : null;
        
        $this->container['show_payment_information'] = isset($data['show_payment_information']) ? $data['show_payment_information'] : null;
        
        $this->container['show_subscription_information'] = isset($data['show_subscription_information']) ? $data['show_subscription_information'] : null;
        
        $this->container['space_id'] = isset($data['space_id']) ? $data['space_id'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['login_name']) && (mb_strlen($this->container['login_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'login_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['shop_name']) && (mb_strlen($this->container['shop_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'shop_name', the character length must be smaller than or equal to 100.";
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
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }


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
     * Gets allow_invoice_download
     *
     * @return bool
     */
    public function getAllowInvoiceDownload()
    {
        return $this->container['allow_invoice_download'];
    }

    /**
     * Sets allow_invoice_download
     *
     * @param bool $allow_invoice_download 
     *
     * @return $this
     */
    public function setAllowInvoiceDownload($allow_invoice_download)
    {
        $this->container['allow_invoice_download'] = $allow_invoice_download;

        return $this;
    }
    

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration[]
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param \PostFinanceCheckout\Sdk\Model\PaymentMethodConfiguration[] $allowed_payment_method_configurations 
     *
     * @return $this
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets app_version
     *
     * @return \PostFinanceCheckout\Sdk\Model\ShopifyIntegrationAppVersion
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param \PostFinanceCheckout\Sdk\Model\ShopifyIntegrationAppVersion $app_version 
     *
     * @return $this
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets installed
     *
     * @return bool
     */
    public function getInstalled()
    {
        return $this->container['installed'];
    }

    /**
     * Sets installed
     *
     * @param bool $installed 
     *
     * @return $this
     */
    public function setInstalled($installed)
    {
        $this->container['installed'] = $installed;

        return $this;
    }
    

    /**
     * Gets integrated_payment_form_enabled
     *
     * @return bool
     */
    public function getIntegratedPaymentFormEnabled()
    {
        return $this->container['integrated_payment_form_enabled'];
    }

    /**
     * Sets integrated_payment_form_enabled
     *
     * @param bool $integrated_payment_form_enabled Enabling the integrated payment form will embed the payment form in the Shopify shop. The app needs to be installed for this to be possible.
     *
     * @return $this
     */
    public function setIntegratedPaymentFormEnabled($integrated_payment_form_enabled)
    {
        $this->container['integrated_payment_form_enabled'] = $integrated_payment_form_enabled;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The checkout language forces a specific language in the checkout. Without a checkout language the browser setting of the buyer is used to determine the language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets login_name
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->container['login_name'];
    }

    /**
     * Sets login_name
     *
     * @param string $login_name The login name is used to link a specific Shopify payment gateway to this integration.This login name is to be filled into the appropriate field in the shops payment gateway configuration.
     *
     * @return $this
     */
    public function setLoginName($login_name)
    {
        if (!is_null($login_name) && (mb_strlen($login_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $login_name when calling ShopifyIntegration., must be smaller than or equal to 100.');
        }

        $this->container['login_name'] = $login_name;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The integration name is used internally to identify a specific integration.For example the name is used withinsearch fields and hence it should be distinct and descriptive.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ShopifyIntegration., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

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
     * @param \DateTime $planned_purge_date The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets proxy_path
     *
     * @return string
     */
    public function getProxyPath()
    {
        return $this->container['proxy_path'];
    }

    /**
     * Sets proxy_path
     *
     * @param string $proxy_path Define the path of the proxy URL. This only needs to be changed if the apps proxy URL is overwritten in the Shopify store.
     *
     * @return $this
     */
    public function setProxyPath($proxy_path)
    {
        $this->container['proxy_path'] = $proxy_path;

        return $this;
    }
    

    /**
     * Gets replace_payment_method_image
     *
     * @return bool
     */
    public function getReplacePaymentMethodImage()
    {
        return $this->container['replace_payment_method_image'];
    }

    /**
     * Sets replace_payment_method_image
     *
     * @param bool $replace_payment_method_image 
     *
     * @return $this
     */
    public function setReplacePaymentMethodImage($replace_payment_method_image)
    {
        $this->container['replace_payment_method_image'] = $replace_payment_method_image;

        return $this;
    }
    

    /**
     * Gets shop_name
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string $shop_name The store address is used to link a specific Shopify shop to this integration. This is the name used in the Shopifys admin URL: [storeAddress].myshopify.com
     *
     * @return $this
     */
    public function setShopName($shop_name)
    {
        if (!is_null($shop_name) && (mb_strlen($shop_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $shop_name when calling ShopifyIntegration., must be smaller than or equal to 100.');
        }

        $this->container['shop_name'] = $shop_name;

        return $this;
    }
    

    /**
     * Gets show_payment_information
     *
     * @return bool
     */
    public function getShowPaymentInformation()
    {
        return $this->container['show_payment_information'];
    }

    /**
     * Sets show_payment_information
     *
     * @param bool $show_payment_information 
     *
     * @return $this
     */
    public function setShowPaymentInformation($show_payment_information)
    {
        $this->container['show_payment_information'] = $show_payment_information;

        return $this;
    }
    

    /**
     * Gets show_subscription_information
     *
     * @return bool
     */
    public function getShowSubscriptionInformation()
    {
        return $this->container['show_subscription_information'];
    }

    /**
     * Sets show_subscription_information
     *
     * @param bool $show_subscription_information 
     *
     * @return $this
     */
    public function setShowSubscriptionInformation($show_subscription_information)
    {
        $this->container['show_subscription_information'] = $show_subscription_information;

        return $this;
    }
    

    /**
     * Gets space_id
     *
     * @return int
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param int $space_id 
     *
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        $this->container['space_id'] = $space_id;

        return $this;
    }
    

    /**
     * Gets space_view_id
     *
     * @return int
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int $space_view_id 
     *
     * @return $this
     */
    public function setSpaceViewId($space_view_id)
    {
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \PostFinanceCheckout\Sdk\Model\CreationEntityState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \PostFinanceCheckout\Sdk\Model\CreationEntityState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
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


