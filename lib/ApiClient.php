<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
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
	private $defaultHeaders = [];

	/**
	 * The user agent that is sent with any request.
	 *
	 * @var string
	 */
	private $userAgent = 'PHP-Client/2.0.17/php';

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
	 * The connection timeout in seconds.
	 *
	 * @var integer
	 */
	private $connectionTimeout = 20;

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

		$this->certificateAuthority = dirname(__FILE__) . '/ca-bundle.crt';
		$this->serializer = new ObjectSerializer();
		$this->isDebuggingEnabled() ? $this->serializer->enableDebugging() : $this->serializer->disableDebugging();
		$this->serializer->setDebugFile($this->getDebugFile());
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

		$defaultHeaders[$key] = $value;
		return $this;
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
	 * @throws ApiException on a non 2xx response
	 * @throws VersioningException on a versioning/locking problem
	 * @return mixed
	 */
	public function callApi($resourcePath, $method, $queryParams, $postData, $headerParams, $responseType = null, $endpointPath = null) {
		$request = new HttpRequest($this->getSerializer(), $this->buildRequestUrl($resourcePath, $queryParams), $method, $this->generateUniqueToken());
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

}
