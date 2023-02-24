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


namespace PostFinanceCheckout\Sdk;

use PostFinanceCheckout\Sdk\ApiException;
use PostFinanceCheckout\Sdk\VersioningException;
use PostFinanceCheckout\Sdk\Http\HttpRequest;
use PostFinanceCheckout\Sdk\Http\HttpClientFactory;

/**
 * This class sends API calls to the endpoint.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class ApiClient {

	/**
	 * The base path of the API endpoint.
	 *
	 * @var string
	 */
	private $basePath = 'https://checkout.postfinance.ch:443/api';

	/**
	 * An array of headers that are added to every request.
	 *
	 * @var array
	 */
	private $defaultHeaders = [
        'x-meta-sdk-version' => "3.2.0",
        'x-meta-sdk-language' => 'php',
        'x-meta-sdk-provider' => "PostFinance Checkout",
    ];

	/**
	 * The user agent that is sent with any request.
	 *
	 * @var string
	 */
	private $userAgent = 'PHP-Client/3.2.0/php';

	/**
	 * The path to the certificate authority file.
	 *
	 * @var string
	 */
	private $certificateAuthority;

	/**
	 * Defines whether the certificate authority should be checked.
	 *
	 * @var boolean
	 */
	private $enableCertificateAuthorityCheck = true;

    /**
     * the constant for the default connection time out
     *
     * @var integer
     */
    const INITIAL_CONNECTION_TIMEOUT = 25;

    /**
	 * The connection timeout in seconds.
	 *
	 * @var integer
	 */
	private $connectionTimeout;

	/**
	 * The http client type to use for communication.
	 *
	 * @var string
	 */
	private $httpClientType = null;

	/**
	 * Defined whether debug information should be logged.
	 *
	 * @var boolean
	 */
	private $enableDebugging = false;

	/**
	 * The path to the debug file.
	 *
	 * @var string
	 */
	private $debugFile = 'php://output';

	/**
	 * The application user's id.
	 *
	 * @var integer
	 */
	private $userId;

	/**
	 * The application user's security key.
	 *
	 * @var string
	 */
	private $applicationKey;

	/**
	 * The object serializer.
	 *
	 * @var ObjectSerializer
	 */
	private $serializer;

	/**
	 * Constructor.
	 *
	 * @param integer $userId the application user's id
	 * @param string $applicationKey the application user's security key
	 */
	public function __construct($userId, $applicationKey) {
		if (empty($applicationKey)) {
			throw new \InvalidArgumentException('The application key cannot be empty or null.');
		}

		$this->userId = $userId;
        $this->applicationKey = $applicationKey;

        $this->connectionTimeout = self::INITIAL_CONNECTION_TIMEOUT;
		$this->certificateAuthority = dirname(__FILE__) . '/ca-bundle.crt';
		$this->serializer = new ObjectSerializer();
		$this->isDebuggingEnabled() ? $this->serializer->enableDebugging() : $this->serializer->disableDebugging();
		$this->serializer->setDebugFile($this->getDebugFile());
		$this->addDefaultHeader('x-meta-sdk-language-version', phpversion());
	}

	/**
	 * Returns the base path of the API endpoint.
	 *
	 * @return string
	 */
	public function getBasePath() {
		return $this->basePath;
	}

	/**
	 * Sets the base path of the API endpoint.
	 *
	 * @param string $basePath the base path
	 * @return ApiClient
	 */
	public function setBasePath($basePath) {
		$this->basePath = rtrim($basePath, '/');
		return $this;
	}

	/**
	 * Returns the path to the certificate authority file.
	 *
	 * @return string
	 */
	public function getCertificateAuthority() {
		return $this->certificateAuthority;
	}

	/**
	 * Sets the path to the certificate authority file. The certificate authority is used to verify the identity of the
	 * remote server. By setting this option the default certificate authority file will be overridden.
	 *
	 * To deactivate the check please use disableCertificateAuthorityCheck()
	 *
	 * @param string $certificateAuthorityFile the path to the certificate authority file
	 * @return ApiClient
	 */
	public function setCertificateAuthority($certificateAuthorityFile) {
		if (!file_exists($certificateAuthorityFile)) {
			throw new \InvalidArgumentException('The certificate authority file does not exist.');
		}

		$this->certificateAuthority = $certificateAuthorityFile;
		return $this;
	}

	/**
	 * Returns true, when the authority check is enabled. See enableCertificateAuthorityCheck() for more details about
	 * the authority check.
	 *
	 * @return boolean
	 */
	public function isCertificateAuthorityCheckEnabled() {
		return $this->enableCertificateAuthorityCheck;
	}

	/**
	 * Enables the check of the certificate authority. By checking the certificate authority the whole certificate
	 * chain is checked. the authority check prevents an attacker to use a man-in-the-middle attack.
	 *
	 * @return ApiClient
	 */
	public function enableCertificateAuthorityCheck() {
		$this->enableCertificateAuthorityCheck = true;
		return $this;
	}

	/**
	 * Disables the check of the certificate authority. See enableCertificateAuthorityCheck() for more details.
	 *
	 * @return ApiClient
	 */
	public function disableCertificateAuthorityCheck() {
		$this->enableCertificateAuthorityCheck = false;
		return $this;
	}

	/**
	 * Returns the connection timeout.
	 *
	 * @return int
	 */
	public function getConnectionTimeout() {
		return $this->connectionTimeout;
	}

	/**
	 * Sets the connection timeout in seconds.
	 *
	 * @param int $connectionTimeout the connection timeout in seconds
	 * @return ApiClient
	 */
	public function setConnectionTimeout($connectionTimeout) {
		if (!is_numeric($connectionTimeout) || $connectionTimeout < 0) {
			throw new \InvalidArgumentException('Timeout value must be numeric and a non-negative number.');
		}

		$this->connectionTimeout = $connectionTimeout;
		return $this;
	}

	/**
	 * Resets the connection timeout in seconds.
	 *
	 * @return ApiClient
	 */
	public function resetConnectionTimeout() {
		$this->connectionTimeout = self::INITIAL_CONNECTION_TIMEOUT;
		return $this;
	}

	/**
	 * Return the http client type to use for communication.
	 *
	 * @return string
	 * @see \PostFinanceCheckout\Sdk\Http\HttpClientFactory
	 */
	public function getHttpClientType() {
		return $this->httpClientType;
	}

	/**
	 * Set the http client type to use for communication.
	 * If this is null, all client are considered and the one working in the current environment is used.
	 *
	 * @param string $httpClientType the http client type
	 * @return ApiClient
	 * @see \PostFinanceCheckout\Sdk\Http\HttpClientFactory
	 */
	public function setHttpClientType($httpClientType) {
		$this->httpClientType = $httpClientType;
		return $this;
	}

	/**
	 * Returns the user agent header's value.
	 *
	 * @return string
	 */
	public function getUserAgent() {
		return $this->userAgent;
	}

	/**
	 * Sets the user agent header's value.
	 *
	 * @param string $userAgent the HTTP request's user agent
	 * @return ApiClient
	 */
	public function setUserAgent($userAgent) {
		if (!is_string($userAgent)) {
			throw new \InvalidArgumentException('User-agent must be a string.');
		}

		$this->userAgent = $userAgent;
		return $this;
	}

	/**
	 * Adds a default header.
	 *
	 * @param string $key the header's key
	 * @param string $value the header's value
	 * @return ApiClient
	 */
	public function addDefaultHeader($key, $value) {
		if (!is_string($key)) {
			throw new \InvalidArgumentException('The header key must be a string.');
		}

		$this->defaultHeaders[$key] = $value;
		return $this;
	}

	/**
     * Gets the default headers that will be sent in the request.
	 * 
	 * @since 3.1.2
	 * @return string[]
     */
    function getDefaultHeaders() {
        return $this->defaultHeaders;
    }

	/**
	 * Returns true, when debugging is enabled.
	 *
	 * @return boolean
	 */
	public function isDebuggingEnabled() {
		return $this->enableDebugging;
	}

	/**
	 * Enables debugging.
	 *
	 * @return ApiClient
	 */
	public function enableDebugging() {
		$this->enableDebugging = true;
		$this->serializer->enableDebugging();
		return $this;
	}

	/**
	 * Disables debugging.
	 *
	 * @return ApiClient
	 */
	public function disableDebugging() {
		$this->enableDebugging = false;
		$this->serializer->disableDebugging();
		return $this;
	}

	/**
	 * Returns the path to the debug file.
	 *
	 * @return string
	 */
	public function getDebugFile() {
		return $this->debugFile;
	}

	/**
	 * Sets the path to the debug file.
	 *
	 * @param string $debugFile the debug file
	 * @return ApiClient
	 */
	public function setDebugFile($debugFile) {
		$this->debugFile = $debugFile;
		$this->serializer->setDebugFile($debugFile);
		return $this;
	}

	/**
	 * Returns the serializer.
	 *
	 * @return ObjectSerializer
	 */
	public function getSerializer() {
		return $this->serializer;
	}

	/**
	 * Return the path of the temporary folder used to store downloaded files from endpoints with file response. By
	 * default the system's default temporary folder is used.
	 *
	 * @return string
	 */
	public function getTempFolderPath() {
		return $this->serializer->getTempFolderPath();
	}

	/**
	 * Sets the path to the temporary folder (for downloading files).
	 *
	 * @param string $tempFolderPath the temporary folder path
	 * @return ApiClient
	 */
	public function setTempFolderPath($tempFolderPath) {
		$this->serializer->setTempFolderPath($tempFolderPath);
		return $this;
	}

	/**
	 * Returns the 'Accept' header based on an array of accept values.
	 *
	 * @param string[] $accept the array of headers
	 * @return string
	 */
	public function selectHeaderAccept($accept) {
		if (empty($accept[0])) {
			return null;
		} elseif (preg_grep('/application\/json/i', $accept)) {
			return 'application/json';
		} else {
			return implode(',', $accept);
		}
	}

	/**
	 * Returns the 'Content Type' based on an array of content types.
	 *
	 * @param string[] $contentType the array of content types
	 * @return string
	 */
	public function selectHeaderContentType($contentType) {
		if (empty($contentType[0])) {
			return 'application/json';
		} elseif (preg_grep('/application\/json/i', $contentType)) {
			return 'application/json';
		} else {
			return implode(',', $contentType);
		}
	}

	/**
	 * Make the HTTP call (synchronously).
	 *
	 * @param string $resourcePath the path to the endpoint resource
	 * @param string $method	   the method to call
	 * @param array  $queryParams  the query parameters
	 * @param array  $postData	 the body parameters
	 * @param array  $headerParams the header parameters
	 * @param string $responseType the expected response type
	 * @param string $endpointPath the path to the method endpoint before expanding parameters
	 *
	 * @return \PostFinanceCheckout\Sdk\ApiResponse
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 */
	public function callApi($resourcePath, $method, $queryParams, $postData, $headerParams, $responseType = null, $endpointPath = null, $timeOut = null) {
        if ($timeOut === null) {
            $timeOut = $this->getConnectionTimeout();
        }
		$request = new HttpRequest($this->getSerializer(), $this->buildRequestUrl($resourcePath, $queryParams), $method, $this->generateUniqueToken(), $timeOut);
		$request->setUserAgent($this->getUserAgent());
		$request->addHeaders(array_merge(
			(array)$this->defaultHeaders,
			(array)$headerParams,
			(array)$this->getAuthenticationHeaders($request)
		));
		$request->setBody($postData);

		$response = HttpClientFactory::getClient($this->httpClientType)->send($this, $request);

		if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 299) {
			// return raw body if response is a file
			if (in_array($responseType, ['\SplFileObject', 'string'])) {
				return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $response->getBody());
			}

			$data = json_decode($response->getBody());
			if (json_last_error() > 0) { // if response is a string
				$data = $response->getBody();
			}
		} else {
			if ($response->getStatusCode() == 409) {
				throw new VersioningException($resourcePath);
			}

			$data = json_decode($response->getBody());
			if (json_last_error() > 0) { // if response is a string
				$data = $response->getBody();
			}
            throw new ApiException(
                'Error ' . $response->getStatusCode() . ' connecting to the API (' . $request->getUrl() . ') : ' . $response->getBody(),
                $response->getStatusCode(),
                $response->getHeaders(),
                $data
            );
		}
		return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $data);
	}

	/**
	 * Returns the request url.
	 *
	 * @param string $path the request path
	 * @param array $queryParams an array of query parameters
	 * @return string
	 */
	private function buildRequestUrl($path, $queryParams) {
		$url = $this->getBasePath() . $path;
		if (!empty($queryParams)) {
			$url = ($url . '?' . http_build_query($queryParams, '', '&'));
		}
		return $url;
	}

	/**
	 * Returns the headers used for authentication.
	 *
	 * @param HttpRequest $request
	 * @return array
	 */
	private function getAuthenticationHeaders(HttpRequest $request) {
		$timestamp = time();
		$version = 1;
		$path = $request->getPath();
		$securedData = implode('|', [$version, $this->userId, $timestamp, $request->getMethod(), $path]);

		$headers = [];
		$headers['x-mac-version'] = $version;
		$headers['x-mac-userid'] = $this->userId;
		$headers['x-mac-timestamp'] = $timestamp;
		$headers['x-mac-value'] = $this->calculateHmac($securedData);
		return $headers;
	}

	/**
	 * Calculates the hmac of the given data.
	 *
	 * @param string $securedData the data to calculate the hmac for
	 * @return string
	 */
	private function calculateHmac($securedData) {
		$decodedSecret = base64_decode($this->applicationKey);
		return base64_encode(hash_hmac('sha512', $securedData, $decodedSecret, true));
	}

	/**
	 * Generates a unique token to assign to the request.
	 *
	 * @return string
	 */
	private function generateUniqueToken() {
		$s = strtoupper(md5(uniqid(rand(),true)));
    	return substr($s,0,8) . '-' .
	        substr($s,8,4) . '-' .
	        substr($s,12,4). '-' .
	        substr($s,16,4). '-' .
	        substr($s,20);
	}

    // Builder pattern to get API instances for this client.
    
    protected $accountService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\AccountService
     */
    public function getAccountService() {
        if(is_null($this->accountService)){
            $this->accountService = new \PostFinanceCheckout\Sdk\Service\AccountService($this);
        }
        return $this->accountService;
    }
    
    protected $analyticsQueryService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\AnalyticsQueryService
     */
    public function getAnalyticsQueryService() {
        if(is_null($this->analyticsQueryService)){
            $this->analyticsQueryService = new \PostFinanceCheckout\Sdk\Service\AnalyticsQueryService($this);
        }
        return $this->analyticsQueryService;
    }
    
    protected $applicationUserService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ApplicationUserService
     */
    public function getApplicationUserService() {
        if(is_null($this->applicationUserService)){
            $this->applicationUserService = new \PostFinanceCheckout\Sdk\Service\ApplicationUserService($this);
        }
        return $this->applicationUserService;
    }
    
    protected $bankAccountService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\BankAccountService
     */
    public function getBankAccountService() {
        if(is_null($this->bankAccountService)){
            $this->bankAccountService = new \PostFinanceCheckout\Sdk\Service\BankAccountService($this);
        }
        return $this->bankAccountService;
    }
    
    protected $bankTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\BankTransactionService
     */
    public function getBankTransactionService() {
        if(is_null($this->bankTransactionService)){
            $this->bankTransactionService = new \PostFinanceCheckout\Sdk\Service\BankTransactionService($this);
        }
        return $this->bankTransactionService;
    }
    
    protected $chargeAttemptService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ChargeAttemptService
     */
    public function getChargeAttemptService() {
        if(is_null($this->chargeAttemptService)){
            $this->chargeAttemptService = new \PostFinanceCheckout\Sdk\Service\ChargeAttemptService($this);
        }
        return $this->chargeAttemptService;
    }
    
    protected $chargeBankTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ChargeBankTransactionService
     */
    public function getChargeBankTransactionService() {
        if(is_null($this->chargeBankTransactionService)){
            $this->chargeBankTransactionService = new \PostFinanceCheckout\Sdk\Service\ChargeBankTransactionService($this);
        }
        return $this->chargeBankTransactionService;
    }
    
    protected $chargeFlowLevelPaymentLinkService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ChargeFlowLevelPaymentLinkService
     */
    public function getChargeFlowLevelPaymentLinkService() {
        if(is_null($this->chargeFlowLevelPaymentLinkService)){
            $this->chargeFlowLevelPaymentLinkService = new \PostFinanceCheckout\Sdk\Service\ChargeFlowLevelPaymentLinkService($this);
        }
        return $this->chargeFlowLevelPaymentLinkService;
    }
    
    protected $chargeFlowLevelService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ChargeFlowLevelService
     */
    public function getChargeFlowLevelService() {
        if(is_null($this->chargeFlowLevelService)){
            $this->chargeFlowLevelService = new \PostFinanceCheckout\Sdk\Service\ChargeFlowLevelService($this);
        }
        return $this->chargeFlowLevelService;
    }
    
    protected $chargeFlowService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ChargeFlowService
     */
    public function getChargeFlowService() {
        if(is_null($this->chargeFlowService)){
            $this->chargeFlowService = new \PostFinanceCheckout\Sdk\Service\ChargeFlowService($this);
        }
        return $this->chargeFlowService;
    }
    
    protected $conditionTypeService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ConditionTypeService
     */
    public function getConditionTypeService() {
        if(is_null($this->conditionTypeService)){
            $this->conditionTypeService = new \PostFinanceCheckout\Sdk\Service\ConditionTypeService($this);
        }
        return $this->conditionTypeService;
    }
    
    protected $countryService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CountryService
     */
    public function getCountryService() {
        if(is_null($this->countryService)){
            $this->countryService = new \PostFinanceCheckout\Sdk\Service\CountryService($this);
        }
        return $this->countryService;
    }
    
    protected $countryStateService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CountryStateService
     */
    public function getCountryStateService() {
        if(is_null($this->countryStateService)){
            $this->countryStateService = new \PostFinanceCheckout\Sdk\Service\CountryStateService($this);
        }
        return $this->countryStateService;
    }
    
    protected $currencyBankAccountService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CurrencyBankAccountService
     */
    public function getCurrencyBankAccountService() {
        if(is_null($this->currencyBankAccountService)){
            $this->currencyBankAccountService = new \PostFinanceCheckout\Sdk\Service\CurrencyBankAccountService($this);
        }
        return $this->currencyBankAccountService;
    }
    
    protected $currencyService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CurrencyService
     */
    public function getCurrencyService() {
        if(is_null($this->currencyService)){
            $this->currencyService = new \PostFinanceCheckout\Sdk\Service\CurrencyService($this);
        }
        return $this->currencyService;
    }
    
    protected $customerAddressService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CustomerAddressService
     */
    public function getCustomerAddressService() {
        if(is_null($this->customerAddressService)){
            $this->customerAddressService = new \PostFinanceCheckout\Sdk\Service\CustomerAddressService($this);
        }
        return $this->customerAddressService;
    }
    
    protected $customerCommentService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CustomerCommentService
     */
    public function getCustomerCommentService() {
        if(is_null($this->customerCommentService)){
            $this->customerCommentService = new \PostFinanceCheckout\Sdk\Service\CustomerCommentService($this);
        }
        return $this->customerCommentService;
    }
    
    protected $customerService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\CustomerService
     */
    public function getCustomerService() {
        if(is_null($this->customerService)){
            $this->customerService = new \PostFinanceCheckout\Sdk\Service\CustomerService($this);
        }
        return $this->customerService;
    }
    
    protected $deliveryIndicationService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\DeliveryIndicationService
     */
    public function getDeliveryIndicationService() {
        if(is_null($this->deliveryIndicationService)){
            $this->deliveryIndicationService = new \PostFinanceCheckout\Sdk\Service\DeliveryIndicationService($this);
        }
        return $this->deliveryIndicationService;
    }
    
    protected $documentTemplateService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\DocumentTemplateService
     */
    public function getDocumentTemplateService() {
        if(is_null($this->documentTemplateService)){
            $this->documentTemplateService = new \PostFinanceCheckout\Sdk\Service\DocumentTemplateService($this);
        }
        return $this->documentTemplateService;
    }
    
    protected $documentTemplateTypeService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\DocumentTemplateTypeService
     */
    public function getDocumentTemplateTypeService() {
        if(is_null($this->documentTemplateTypeService)){
            $this->documentTemplateTypeService = new \PostFinanceCheckout\Sdk\Service\DocumentTemplateTypeService($this);
        }
        return $this->documentTemplateTypeService;
    }
    
    protected $externalTransferBankTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ExternalTransferBankTransactionService
     */
    public function getExternalTransferBankTransactionService() {
        if(is_null($this->externalTransferBankTransactionService)){
            $this->externalTransferBankTransactionService = new \PostFinanceCheckout\Sdk\Service\ExternalTransferBankTransactionService($this);
        }
        return $this->externalTransferBankTransactionService;
    }
    
    protected $humanUserService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\HumanUserService
     */
    public function getHumanUserService() {
        if(is_null($this->humanUserService)){
            $this->humanUserService = new \PostFinanceCheckout\Sdk\Service\HumanUserService($this);
        }
        return $this->humanUserService;
    }
    
    protected $internalTransferBankTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\InternalTransferBankTransactionService
     */
    public function getInternalTransferBankTransactionService() {
        if(is_null($this->internalTransferBankTransactionService)){
            $this->internalTransferBankTransactionService = new \PostFinanceCheckout\Sdk\Service\InternalTransferBankTransactionService($this);
        }
        return $this->internalTransferBankTransactionService;
    }
    
    protected $invoiceReconciliationRecordInvoiceLinkService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\InvoiceReconciliationRecordInvoiceLinkService
     */
    public function getInvoiceReconciliationRecordInvoiceLinkService() {
        if(is_null($this->invoiceReconciliationRecordInvoiceLinkService)){
            $this->invoiceReconciliationRecordInvoiceLinkService = new \PostFinanceCheckout\Sdk\Service\InvoiceReconciliationRecordInvoiceLinkService($this);
        }
        return $this->invoiceReconciliationRecordInvoiceLinkService;
    }
    
    protected $invoiceReconciliationRecordService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\InvoiceReconciliationRecordService
     */
    public function getInvoiceReconciliationRecordService() {
        if(is_null($this->invoiceReconciliationRecordService)){
            $this->invoiceReconciliationRecordService = new \PostFinanceCheckout\Sdk\Service\InvoiceReconciliationRecordService($this);
        }
        return $this->invoiceReconciliationRecordService;
    }
    
    protected $invoiceReimbursementService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\InvoiceReimbursementService
     */
    public function getInvoiceReimbursementService() {
        if(is_null($this->invoiceReimbursementService)){
            $this->invoiceReimbursementService = new \PostFinanceCheckout\Sdk\Service\InvoiceReimbursementService($this);
        }
        return $this->invoiceReimbursementService;
    }
    
    protected $labelDescriptionGroupService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\LabelDescriptionGroupService
     */
    public function getLabelDescriptionGroupService() {
        if(is_null($this->labelDescriptionGroupService)){
            $this->labelDescriptionGroupService = new \PostFinanceCheckout\Sdk\Service\LabelDescriptionGroupService($this);
        }
        return $this->labelDescriptionGroupService;
    }
    
    protected $labelDescriptionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\LabelDescriptionService
     */
    public function getLabelDescriptionService() {
        if(is_null($this->labelDescriptionService)){
            $this->labelDescriptionService = new \PostFinanceCheckout\Sdk\Service\LabelDescriptionService($this);
        }
        return $this->labelDescriptionService;
    }
    
    protected $languageService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\LanguageService
     */
    public function getLanguageService() {
        if(is_null($this->languageService)){
            $this->languageService = new \PostFinanceCheckout\Sdk\Service\LanguageService($this);
        }
        return $this->languageService;
    }
    
    protected $legalOrganizationFormService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\LegalOrganizationFormService
     */
    public function getLegalOrganizationFormService() {
        if(is_null($this->legalOrganizationFormService)){
            $this->legalOrganizationFormService = new \PostFinanceCheckout\Sdk\Service\LegalOrganizationFormService($this);
        }
        return $this->legalOrganizationFormService;
    }
    
    protected $manualTaskService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ManualTaskService
     */
    public function getManualTaskService() {
        if(is_null($this->manualTaskService)){
            $this->manualTaskService = new \PostFinanceCheckout\Sdk\Service\ManualTaskService($this);
        }
        return $this->manualTaskService;
    }
    
    protected $paymentConnectorConfigurationService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentConnectorConfigurationService
     */
    public function getPaymentConnectorConfigurationService() {
        if(is_null($this->paymentConnectorConfigurationService)){
            $this->paymentConnectorConfigurationService = new \PostFinanceCheckout\Sdk\Service\PaymentConnectorConfigurationService($this);
        }
        return $this->paymentConnectorConfigurationService;
    }
    
    protected $paymentConnectorService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentConnectorService
     */
    public function getPaymentConnectorService() {
        if(is_null($this->paymentConnectorService)){
            $this->paymentConnectorService = new \PostFinanceCheckout\Sdk\Service\PaymentConnectorService($this);
        }
        return $this->paymentConnectorService;
    }
    
    protected $paymentLinkService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentLinkService
     */
    public function getPaymentLinkService() {
        if(is_null($this->paymentLinkService)){
            $this->paymentLinkService = new \PostFinanceCheckout\Sdk\Service\PaymentLinkService($this);
        }
        return $this->paymentLinkService;
    }
    
    protected $paymentMethodBrandService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentMethodBrandService
     */
    public function getPaymentMethodBrandService() {
        if(is_null($this->paymentMethodBrandService)){
            $this->paymentMethodBrandService = new \PostFinanceCheckout\Sdk\Service\PaymentMethodBrandService($this);
        }
        return $this->paymentMethodBrandService;
    }
    
    protected $paymentMethodConfigurationService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentMethodConfigurationService
     */
    public function getPaymentMethodConfigurationService() {
        if(is_null($this->paymentMethodConfigurationService)){
            $this->paymentMethodConfigurationService = new \PostFinanceCheckout\Sdk\Service\PaymentMethodConfigurationService($this);
        }
        return $this->paymentMethodConfigurationService;
    }
    
    protected $paymentMethodService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentMethodService
     */
    public function getPaymentMethodService() {
        if(is_null($this->paymentMethodService)){
            $this->paymentMethodService = new \PostFinanceCheckout\Sdk\Service\PaymentMethodService($this);
        }
        return $this->paymentMethodService;
    }
    
    protected $paymentProcessorConfigurationService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentProcessorConfigurationService
     */
    public function getPaymentProcessorConfigurationService() {
        if(is_null($this->paymentProcessorConfigurationService)){
            $this->paymentProcessorConfigurationService = new \PostFinanceCheckout\Sdk\Service\PaymentProcessorConfigurationService($this);
        }
        return $this->paymentProcessorConfigurationService;
    }
    
    protected $paymentProcessorService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentProcessorService
     */
    public function getPaymentProcessorService() {
        if(is_null($this->paymentProcessorService)){
            $this->paymentProcessorService = new \PostFinanceCheckout\Sdk\Service\PaymentProcessorService($this);
        }
        return $this->paymentProcessorService;
    }
    
    protected $paymentTerminalService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentTerminalService
     */
    public function getPaymentTerminalService() {
        if(is_null($this->paymentTerminalService)){
            $this->paymentTerminalService = new \PostFinanceCheckout\Sdk\Service\PaymentTerminalService($this);
        }
        return $this->paymentTerminalService;
    }
    
    protected $paymentTerminalTillService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentTerminalTillService
     */
    public function getPaymentTerminalTillService() {
        if(is_null($this->paymentTerminalTillService)){
            $this->paymentTerminalTillService = new \PostFinanceCheckout\Sdk\Service\PaymentTerminalTillService($this);
        }
        return $this->paymentTerminalTillService;
    }
    
    protected $paymentTerminalTransactionSummaryService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PaymentTerminalTransactionSummaryService
     */
    public function getPaymentTerminalTransactionSummaryService() {
        if(is_null($this->paymentTerminalTransactionSummaryService)){
            $this->paymentTerminalTransactionSummaryService = new \PostFinanceCheckout\Sdk\Service\PaymentTerminalTransactionSummaryService($this);
        }
        return $this->paymentTerminalTransactionSummaryService;
    }
    
    protected $permissionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\PermissionService
     */
    public function getPermissionService() {
        if(is_null($this->permissionService)){
            $this->permissionService = new \PostFinanceCheckout\Sdk\Service\PermissionService($this);
        }
        return $this->permissionService;
    }
    
    protected $refundBankTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\RefundBankTransactionService
     */
    public function getRefundBankTransactionService() {
        if(is_null($this->refundBankTransactionService)){
            $this->refundBankTransactionService = new \PostFinanceCheckout\Sdk\Service\RefundBankTransactionService($this);
        }
        return $this->refundBankTransactionService;
    }
    
    protected $refundCommentService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\RefundCommentService
     */
    public function getRefundCommentService() {
        if(is_null($this->refundCommentService)){
            $this->refundCommentService = new \PostFinanceCheckout\Sdk\Service\RefundCommentService($this);
        }
        return $this->refundCommentService;
    }
    
    protected $refundRecoveryBankTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\RefundRecoveryBankTransactionService
     */
    public function getRefundRecoveryBankTransactionService() {
        if(is_null($this->refundRecoveryBankTransactionService)){
            $this->refundRecoveryBankTransactionService = new \PostFinanceCheckout\Sdk\Service\RefundRecoveryBankTransactionService($this);
        }
        return $this->refundRecoveryBankTransactionService;
    }
    
    protected $refundService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\RefundService
     */
    public function getRefundService() {
        if(is_null($this->refundService)){
            $this->refundService = new \PostFinanceCheckout\Sdk\Service\RefundService($this);
        }
        return $this->refundService;
    }
    
    protected $shopifyRecurringOrderService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifyRecurringOrderService
     */
    public function getShopifyRecurringOrderService() {
        if(is_null($this->shopifyRecurringOrderService)){
            $this->shopifyRecurringOrderService = new \PostFinanceCheckout\Sdk\Service\ShopifyRecurringOrderService($this);
        }
        return $this->shopifyRecurringOrderService;
    }
    
    protected $shopifySubscriberService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifySubscriberService
     */
    public function getShopifySubscriberService() {
        if(is_null($this->shopifySubscriberService)){
            $this->shopifySubscriberService = new \PostFinanceCheckout\Sdk\Service\ShopifySubscriberService($this);
        }
        return $this->shopifySubscriberService;
    }
    
    protected $shopifySubscriptionProductService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionProductService
     */
    public function getShopifySubscriptionProductService() {
        if(is_null($this->shopifySubscriptionProductService)){
            $this->shopifySubscriptionProductService = new \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionProductService($this);
        }
        return $this->shopifySubscriptionProductService;
    }
    
    protected $shopifySubscriptionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionService
     */
    public function getShopifySubscriptionService() {
        if(is_null($this->shopifySubscriptionService)){
            $this->shopifySubscriptionService = new \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionService($this);
        }
        return $this->shopifySubscriptionService;
    }
    
    protected $shopifySubscriptionSuspensionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionSuspensionService
     */
    public function getShopifySubscriptionSuspensionService() {
        if(is_null($this->shopifySubscriptionSuspensionService)){
            $this->shopifySubscriptionSuspensionService = new \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionSuspensionService($this);
        }
        return $this->shopifySubscriptionSuspensionService;
    }
    
    protected $shopifySubscriptionVersionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionVersionService
     */
    public function getShopifySubscriptionVersionService() {
        if(is_null($this->shopifySubscriptionVersionService)){
            $this->shopifySubscriptionVersionService = new \PostFinanceCheckout\Sdk\Service\ShopifySubscriptionVersionService($this);
        }
        return $this->shopifySubscriptionVersionService;
    }
    
    protected $shopifyTransactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\ShopifyTransactionService
     */
    public function getShopifyTransactionService() {
        if(is_null($this->shopifyTransactionService)){
            $this->shopifyTransactionService = new \PostFinanceCheckout\Sdk\Service\ShopifyTransactionService($this);
        }
        return $this->shopifyTransactionService;
    }
    
    protected $spaceService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\SpaceService
     */
    public function getSpaceService() {
        if(is_null($this->spaceService)){
            $this->spaceService = new \PostFinanceCheckout\Sdk\Service\SpaceService($this);
        }
        return $this->spaceService;
    }
    
    protected $staticValueService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\StaticValueService
     */
    public function getStaticValueService() {
        if(is_null($this->staticValueService)){
            $this->staticValueService = new \PostFinanceCheckout\Sdk\Service\StaticValueService($this);
        }
        return $this->staticValueService;
    }
    
    protected $tokenService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TokenService
     */
    public function getTokenService() {
        if(is_null($this->tokenService)){
            $this->tokenService = new \PostFinanceCheckout\Sdk\Service\TokenService($this);
        }
        return $this->tokenService;
    }
    
    protected $tokenVersionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TokenVersionService
     */
    public function getTokenVersionService() {
        if(is_null($this->tokenVersionService)){
            $this->tokenVersionService = new \PostFinanceCheckout\Sdk\Service\TokenVersionService($this);
        }
        return $this->tokenVersionService;
    }
    
    protected $transactionCommentService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionCommentService
     */
    public function getTransactionCommentService() {
        if(is_null($this->transactionCommentService)){
            $this->transactionCommentService = new \PostFinanceCheckout\Sdk\Service\TransactionCommentService($this);
        }
        return $this->transactionCommentService;
    }
    
    protected $transactionCompletionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionCompletionService
     */
    public function getTransactionCompletionService() {
        if(is_null($this->transactionCompletionService)){
            $this->transactionCompletionService = new \PostFinanceCheckout\Sdk\Service\TransactionCompletionService($this);
        }
        return $this->transactionCompletionService;
    }
    
    protected $transactionIframeService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionIframeService
     */
    public function getTransactionIframeService() {
        if(is_null($this->transactionIframeService)){
            $this->transactionIframeService = new \PostFinanceCheckout\Sdk\Service\TransactionIframeService($this);
        }
        return $this->transactionIframeService;
    }
    
    protected $transactionInvoiceCommentService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionInvoiceCommentService
     */
    public function getTransactionInvoiceCommentService() {
        if(is_null($this->transactionInvoiceCommentService)){
            $this->transactionInvoiceCommentService = new \PostFinanceCheckout\Sdk\Service\TransactionInvoiceCommentService($this);
        }
        return $this->transactionInvoiceCommentService;
    }
    
    protected $transactionInvoiceService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionInvoiceService
     */
    public function getTransactionInvoiceService() {
        if(is_null($this->transactionInvoiceService)){
            $this->transactionInvoiceService = new \PostFinanceCheckout\Sdk\Service\TransactionInvoiceService($this);
        }
        return $this->transactionInvoiceService;
    }
    
    protected $transactionLightboxService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionLightboxService
     */
    public function getTransactionLightboxService() {
        if(is_null($this->transactionLightboxService)){
            $this->transactionLightboxService = new \PostFinanceCheckout\Sdk\Service\TransactionLightboxService($this);
        }
        return $this->transactionLightboxService;
    }
    
    protected $transactionLineItemVersionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionLineItemVersionService
     */
    public function getTransactionLineItemVersionService() {
        if(is_null($this->transactionLineItemVersionService)){
            $this->transactionLineItemVersionService = new \PostFinanceCheckout\Sdk\Service\TransactionLineItemVersionService($this);
        }
        return $this->transactionLineItemVersionService;
    }
    
    protected $transactionMobileSdkService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionMobileSdkService
     */
    public function getTransactionMobileSdkService() {
        if(is_null($this->transactionMobileSdkService)){
            $this->transactionMobileSdkService = new \PostFinanceCheckout\Sdk\Service\TransactionMobileSdkService($this);
        }
        return $this->transactionMobileSdkService;
    }
    
    protected $transactionPaymentPageService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionPaymentPageService
     */
    public function getTransactionPaymentPageService() {
        if(is_null($this->transactionPaymentPageService)){
            $this->transactionPaymentPageService = new \PostFinanceCheckout\Sdk\Service\TransactionPaymentPageService($this);
        }
        return $this->transactionPaymentPageService;
    }
    
    protected $transactionService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionService
     */
    public function getTransactionService() {
        if(is_null($this->transactionService)){
            $this->transactionService = new \PostFinanceCheckout\Sdk\Service\TransactionService($this);
        }
        return $this->transactionService;
    }
    
    protected $transactionTerminalService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionTerminalService
     */
    public function getTransactionTerminalService() {
        if(is_null($this->transactionTerminalService)){
            $this->transactionTerminalService = new \PostFinanceCheckout\Sdk\Service\TransactionTerminalService($this);
        }
        return $this->transactionTerminalService;
    }
    
    protected $transactionVoidService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\TransactionVoidService
     */
    public function getTransactionVoidService() {
        if(is_null($this->transactionVoidService)){
            $this->transactionVoidService = new \PostFinanceCheckout\Sdk\Service\TransactionVoidService($this);
        }
        return $this->transactionVoidService;
    }
    
    protected $userAccountRoleService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\UserAccountRoleService
     */
    public function getUserAccountRoleService() {
        if(is_null($this->userAccountRoleService)){
            $this->userAccountRoleService = new \PostFinanceCheckout\Sdk\Service\UserAccountRoleService($this);
        }
        return $this->userAccountRoleService;
    }
    
    protected $userSpaceRoleService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\UserSpaceRoleService
     */
    public function getUserSpaceRoleService() {
        if(is_null($this->userSpaceRoleService)){
            $this->userSpaceRoleService = new \PostFinanceCheckout\Sdk\Service\UserSpaceRoleService($this);
        }
        return $this->userSpaceRoleService;
    }
    
    protected $webhookListenerService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\WebhookListenerService
     */
    public function getWebhookListenerService() {
        if(is_null($this->webhookListenerService)){
            $this->webhookListenerService = new \PostFinanceCheckout\Sdk\Service\WebhookListenerService($this);
        }
        return $this->webhookListenerService;
    }
    
    protected $webhookUrlService;

    /**
     * @return \PostFinanceCheckout\Sdk\Service\WebhookUrlService
     */
    public function getWebhookUrlService() {
        if(is_null($this->webhookUrlService)){
            $this->webhookUrlService = new \PostFinanceCheckout\Sdk\Service\WebhookUrlService($this);
        }
        return $this->webhookUrlService;
    }
    

}
