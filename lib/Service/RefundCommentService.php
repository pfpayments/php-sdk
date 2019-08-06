<?php
/**
 * PostFinance Checkout SDK
 *
 * This library allows to interact with the PostFinance Checkout payment service.
 * PostFinance Checkout SDK: 1.0.0
 * 
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

/**
 * RefundCommentService service
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RefundCommentService {

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
		if ($apiClient == null) {
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
	 * Find by refund
	 *
	 * @param int $spaceId  (required)
	 * @param int $refundId  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\RefundComment[]
	 */
	public function all($spaceId, $refundId) {
		return $this->allWithHttpInfo($spaceId, $refundId)->getData();
	}

	/**
	 * Operation allWithHttpInfo
	 *
	 * Find by refund
	 *
	 * @param int $spaceId  (required)
	 * @param int $refundId  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function allWithHttpInfo($spaceId, $refundId) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling all');
		}
		// verify the required parameter 'refundId' is set
		if ($refundId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $refundId when calling all');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($refundId !== null) {
			$queryParams['refundId'] = $this->apiClient->getSerializer()->toQueryValue($refundId);
		}

		// path params
		$resourcePath = "/refund-comment/all";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\PostFinanceCheckout\Sdk\Model\RefundComment[]',
				'/refund-comment/all'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\RefundComment[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\RefundComment[]', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation create
	 *
	 * Create
	 *
	 * @param int $spaceId  (required)
	 * @param \PostFinanceCheckout\Sdk\Model\RefundCommentCreate $entity  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\RefundComment
	 */
	public function create($spaceId, $entity) {
		return $this->createWithHttpInfo($spaceId, $entity)->getData();
	}

	/**
	 * Operation createWithHttpInfo
	 *
	 * Create
	 *
	 * @param int $spaceId  (required)
	 * @param \PostFinanceCheckout\Sdk\Model\RefundCommentCreate $entity  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function createWithHttpInfo($spaceId, $entity) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling create');
		}
		// verify the required parameter 'entity' is set
		if ($entity === null) {
			throw new \InvalidArgumentException('Missing the required parameter $entity when calling create');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/refund-comment/create";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($entity)) {
			$tempBody = $entity;
		}

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
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\PostFinanceCheckout\Sdk\Model\RefundComment',
				'/refund-comment/create'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\RefundComment', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\RefundComment', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation delete
	 *
	 * Delete
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return void
	 */
	public function delete($spaceId, $id) {
		return $this->deleteWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation deleteWithHttpInfo
	 *
	 * Delete
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function deleteWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling delete');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling delete');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/refund-comment/delete";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				null,
				'/refund-comment/delete'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders());
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation pin
	 *
	 * Pin
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return void
	 */
	public function pin($spaceId, $id) {
		return $this->pinWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation pinWithHttpInfo
	 *
	 * Pin
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function pinWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling pin');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling pin');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('*/*'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/refund-comment/pin";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				null,
				'/refund-comment/pin'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders());
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
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
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\RefundComment
	 */
	public function read($spaceId, $id) {
		return $this->readWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation readWithHttpInfo
	 *
	 * Read
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function readWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling read');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling read');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('*/*'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/refund-comment/read";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'\PostFinanceCheckout\Sdk\Model\RefundComment',
				'/refund-comment/read'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\RefundComment', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\RefundComment', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation unpin
	 *
	 * Unpin
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return void
	 */
	public function unpin($spaceId, $id) {
		return $this->unpinWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation unpinWithHttpInfo
	 *
	 * Unpin
	 *
	 * @param int $spaceId  (required)
	 * @param int $id  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function unpinWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling unpin');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling unpin');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('*/*'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/refund-comment/unpin";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				null,
				'/refund-comment/unpin'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders());
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation update
	 *
	 * Update
	 *
	 * @param int $spaceId  (required)
	 * @param \PostFinanceCheckout\Sdk\Model\RefundCommentActive $entity  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return \PostFinanceCheckout\Sdk\Model\RefundComment
	 */
	public function update($spaceId, $entity) {
		return $this->updateWithHttpInfo($spaceId, $entity)->getData();
	}

	/**
	 * Operation updateWithHttpInfo
	 *
	 * Update
	 *
	 * @param int $spaceId  (required)
	 * @param \PostFinanceCheckout\Sdk\Model\RefundCommentActive $entity  (required)
	 * @throws \PostFinanceCheckout\Sdk\ApiException
	 * @throws \PostFinanceCheckout\Sdk\VersioningException
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function updateWithHttpInfo($spaceId, $entity) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling update');
		}
		// verify the required parameter 'entity' is set
		if ($entity === null) {
			throw new \InvalidArgumentException('Missing the required parameter $entity when calling update');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/refund-comment/update";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($entity)) {
			$tempBody = $entity;
		}

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
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\PostFinanceCheckout\Sdk\Model\RefundComment',
				'/refund-comment/update'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\PostFinanceCheckout\Sdk\Model\RefundComment', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\RefundComment', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PostFinanceCheckout\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

}
