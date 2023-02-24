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


namespace PostFinanceCheckout\Sdk\Service;

use PostFinanceCheckout\Sdk\ApiClient;
use PostFinanceCheckout\Sdk\ApiException;
use PostFinanceCheckout\Sdk\ApiResponse;
use PostFinanceCheckout\Sdk\Http\HttpRequest;
use PostFinanceCheckout\Sdk\ObjectSerializer;

/**
 * LegalOrganizationFormService service
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LegalOrganizationFormService {

	/**
	 * The API client instance.
	 *
	 * @var ApiClient
	 */
	private $apiClient;

	/**
	 * Constructor.
	 *
	 * @param ApiClient $apiClient the api client
	 */
	public function __construct(ApiClient $apiClient) {
		if (is_null($apiClient)) {
			throw new \InvalidArgumentException('The api client is required.');
		}

		$this->apiClient = $apiClient;
	}

	/**
	 * Returns the API client instance.
	 *
	 * @return ApiClient
	 */
	public function getApiClient() {
		return $this->apiClient;
	}


	/**
	 * Operation all
	 *
	 * All
	 *
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]
	 */
	public function all() {
		return $this->allWithHttpInfo()->getData();
	}

	/**
	 * Operation allWithHttpInfo
	 *
	 * All
     
     *
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function allWithHttpInfo() {
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];

		// path params
		$resourcePath = '/legal-organization-form/all';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]',
				'/legal-organization-form/all'
            );
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation country
	 *
	 * Find by Country
	 *
	 * @param string $code The country in ISO 3166-1 alpha-2 format, for which all legal organization forms should be returned. (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]
	 */
	public function country($code) {
		return $this->countryWithHttpInfo($code)->getData();
	}

	/**
	 * Operation countryWithHttpInfo
	 *
	 * Find by Country
     
     *
	 * @param string $code The country in ISO 3166-1 alpha-2 format, for which all legal organization forms should be returned. (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function countryWithHttpInfo($code) {
		// verify the required parameter 'code' is set
		if (is_null($code)) {
			throw new \InvalidArgumentException('Missing the required parameter $code when calling country');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($code)) {
			$queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
		}

		// path params
		$resourcePath = '/legal-organization-form/country';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]',
				'/legal-organization-form/country'
            );
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation read
	 *
	 * Read
	 *
	 * @param int $id The id of the legal organization form which should be returned. (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\LegalOrganizationForm
	 */
	public function read($id) {
		return $this->readWithHttpInfo($id)->getData();
	}

	/**
	 * Operation readWithHttpInfo
	 *
	 * Read
     
     *
	 * @param int $id The id of the legal organization form which should be returned. (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function readWithHttpInfo($id) {
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling read');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/legal-organization-form/read';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm',
				'/legal-organization-form/read'
            );
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\LegalOrganizationForm',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

}
