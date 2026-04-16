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

namespace PostFinanceCheckout\Sdk\Service;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PostFinanceCheckout\Sdk\ApiException;
use PostFinanceCheckout\Sdk\Configuration;
use PostFinanceCheckout\Sdk\FormDataProcessor;
use PostFinanceCheckout\Sdk\HeaderSelector;
use PostFinanceCheckout\Sdk\ObjectSerializer;
use PostFinanceCheckout\Sdk\Auth\HttpBearerAuth;

/**
 * CustomersService service
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   wallee AG
 * @license  Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version  5.2.2
 */
class CustomersService
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var array Authentications
     */
    protected $authentications = [];

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'deleteCustomersBulk' => [
            'application/json',
        ],
        'deleteCustomersId' => [
            'application/json',
        ],
        'getCustomers' => [
            'application/json',
        ],
        'getCustomersId' => [
            'application/json',
        ],
        'getCustomersIdEmailAddresses' => [
            'application/json',
        ],
        'getCustomersSearch' => [
            'application/json',
        ],
        'patchCustomersBulk' => [
            'application/json',
        ],
        'patchCustomersId' => [
            'application/json',
        ],
        'postCustomers' => [
            'application/json',
        ],
        'postCustomersBulk' => [
            'application/json',
        ],
        'postCustomersIdMergeOther' => [
            'application/json',
        ],
    ];

    /**
     * @param Configuration $config
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     * @param ClientInterface|null $client
     * @param HeaderSelector|null $selector
     */
    public function __construct(
        Configuration    $config,
        int              $hostIndex = 0,
        ?ClientInterface $client = null,
        ?HeaderSelector  $selector = null,
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $this->authentications = [
            "jwt" => new HttpBearerAuth($config->getUserId(), $config->getAuthenticationKey())
        ];
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return array|HttpBearerAuth[] the Authentications instance.
     */
    public function getAuthentications(): array
    {
        return $this->authentications;
    }

    /**
     * Operation deleteCustomersBulk
     *
     * Delete multiple customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int[] $request_body request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomersBulk'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function deleteCustomersBulk(int $space, array $request_body, string $contentType = self::contentTypes['deleteCustomersBulk'][0])
    {
        list($response) = $this->deleteCustomersBulkWithHttpInfo($space, $request_body, $contentType);
        return $response;
    }

    /**
     * Operation deleteCustomersBulkWithHttpInfo
     *
     * Delete multiple customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int[] $request_body request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomersBulk'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomersBulkWithHttpInfo(int $space, array $request_body, string $contentType = self::contentTypes['deleteCustomersBulk'][0])
    {
        $request = $this->deleteCustomersBulkRequest($space, $request_body, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 413:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'deleteCustomersBulk'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int[] $request_body request_body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomersBulk'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteCustomersBulkRequest(int $space, array $request_body, string $contentType = self::contentTypes['deleteCustomersBulk'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling deleteCustomersBulk'
            );
        }

        // verify the required parameter 'request_body' is set
        if ($request_body === null || (is_array($request_body) && count($request_body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_body when calling deleteCustomersBulk'
            );
        }


        $resourcePath = '/customers/bulk';
        $httpMethod = 'DELETE';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($request_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request_body));
            } else {
                $httpBody = $request_body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteCustomersId
     *
     * Delete a customer
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteCustomersId(int $id, int $space, string $contentType = self::contentTypes['deleteCustomersId'][0])
    {
        $this->deleteCustomersIdWithHttpInfo($id, $space, $contentType);
    }

    /**
     * Operation deleteCustomersIdWithHttpInfo
     *
     * Delete a customer
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomersIdWithHttpInfo(int $id, int $space, string $contentType = self::contentTypes['deleteCustomersId'][0])
    {
        $request = $this->deleteCustomersIdRequest($id, $space, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'deleteCustomersId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomersId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteCustomersIdRequest(int $id, int $space, string $contentType = self::contentTypes['deleteCustomersId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteCustomersId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling deleteCustomersId'
            );
        }


        $resourcePath = '/customers/{id}';
        $httpMethod = 'DELETE';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomers
     *
     * List all customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\CustomerListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getCustomers(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getCustomers'][0])
    {
        list($response) = $this->getCustomersWithHttpInfo($space, $after, $before, $expand, $limit, $order, $contentType);
        return $response;
    }

    /**
     * Operation getCustomersWithHttpInfo
     *
     * List all customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\CustomerListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersWithHttpInfo(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getCustomers'][0])
    {
        $request = $this->getCustomersRequest($space, $after, $before, $expand, $limit, $order, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\CustomerListResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\CustomerListResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\CustomerListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getCustomers'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomersRequest(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getCustomers'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getCustomers'
            );
        }

        if ($after !== null && $after < 1) {
            throw new \InvalidArgumentException('invalid value for "$after" when calling CustomersService.getCustomers, must be bigger than or equal to 1.');
        }
        
        if ($before !== null && $before < 1) {
            throw new \InvalidArgumentException('invalid value for "$before" when calling CustomersService.getCustomers, must be bigger than or equal to 1.');
        }
        
        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CustomersService.getCustomers, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CustomersService.getCustomers, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/customers';
        $httpMethod = 'GET';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $after,
            'after', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $before,
            'before', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'SortingOrder', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomersId
     *
     * Retrieve a customer
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getCustomersId(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getCustomersId'][0])
    {
        list($response) = $this->getCustomersIdWithHttpInfo($id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation getCustomersIdWithHttpInfo
     *
     * Retrieve a customer
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersIdWithHttpInfo(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getCustomersId'][0])
    {
        $request = $this->getCustomersIdRequest($id, $space, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\Customer',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getCustomersId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomersIdRequest(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getCustomersId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getCustomersId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getCustomersId'
            );
        }

        

        $resourcePath = '/customers/{id}';
        $httpMethod = 'GET';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomersIdEmailAddresses
     *
     * List a customer&#39;s email addresses
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersIdEmailAddresses'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\CustomerEmailAddressListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getCustomersIdEmailAddresses(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getCustomersIdEmailAddresses'][0])
    {
        list($response) = $this->getCustomersIdEmailAddressesWithHttpInfo($id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation getCustomersIdEmailAddressesWithHttpInfo
     *
     * List a customer&#39;s email addresses
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersIdEmailAddresses'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\CustomerEmailAddressListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersIdEmailAddressesWithHttpInfo(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getCustomersIdEmailAddresses'][0])
    {
        $request = $this->getCustomersIdEmailAddressesRequest($id, $space, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\CustomerEmailAddressListResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\CustomerEmailAddressListResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\CustomerEmailAddressListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getCustomersIdEmailAddresses'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersIdEmailAddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomersIdEmailAddressesRequest(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getCustomersIdEmailAddresses'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getCustomersIdEmailAddresses'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getCustomersIdEmailAddresses'
            );
        }

        

        $resourcePath = '/customers/{id}/email-addresses';
        $httpMethod = 'GET';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomersSearch
     *
     * Search customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\CustomerSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getCustomersSearch(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getCustomersSearch'][0])
    {
        list($response) = $this->getCustomersSearchWithHttpInfo($space, $expand, $limit, $offset, $order, $query, $contentType);
        return $response;
    }

    /**
     * Operation getCustomersSearchWithHttpInfo
     *
     * Search customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\CustomerSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersSearchWithHttpInfo(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getCustomersSearch'][0])
    {
        $request = $this->getCustomersSearchRequest($space, $expand, $limit, $offset, $order, $query, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\CustomerSearchResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\CustomerSearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\CustomerSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getCustomersSearch'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomersSearchRequest(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getCustomersSearch'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getCustomersSearch'
            );
        }

        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CustomersService.getCustomersSearch, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CustomersService.getCustomersSearch, must be bigger than or equal to 1.');
        }
        
        if ($offset !== null && $offset > 10000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling CustomersService.getCustomersSearch, must be smaller than or equal to 10000.');
        }
        



        $resourcePath = '/customers/search';
        $httpMethod = 'GET';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $query,
            'query', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchCustomersBulk
     *
     * Update multiple customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerActive[] $customer_active customer_active (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchCustomersBulk'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function patchCustomersBulk(int $space, array $customer_active, string $contentType = self::contentTypes['patchCustomersBulk'][0])
    {
        list($response) = $this->patchCustomersBulkWithHttpInfo($space, $customer_active, $contentType);
        return $response;
    }

    /**
     * Operation patchCustomersBulkWithHttpInfo
     *
     * Update multiple customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerActive[] $customer_active customer_active (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchCustomersBulk'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchCustomersBulkWithHttpInfo(int $space, array $customer_active, string $contentType = self::contentTypes['patchCustomersBulk'][0])
    {
        $request = $this->patchCustomersBulkRequest($space, $customer_active, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 413:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchCustomersBulk'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerActive[] $customer_active customer_active (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchCustomersBulk'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchCustomersBulkRequest(int $space, array $customer_active, string $contentType = self::contentTypes['patchCustomersBulk'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchCustomersBulk'
            );
        }

        // verify the required parameter 'customer_active' is set
        if ($customer_active === null || (is_array($customer_active) && count($customer_active) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_active when calling patchCustomersBulk'
            );
        }


        $resourcePath = '/customers/bulk';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($customer_active)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($customer_active));
            } else {
                $httpBody = $customer_active;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchCustomersId
     *
     * Update a customer
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerActive $customer_active customer_active (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchCustomersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function patchCustomersId(int $id, int $space, \PostFinanceCheckout\Sdk\Model\CustomerActive $customer_active, ?array $expand = null, string $contentType = self::contentTypes['patchCustomersId'][0])
    {
        list($response) = $this->patchCustomersIdWithHttpInfo($id, $space, $customer_active, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchCustomersIdWithHttpInfo
     *
     * Update a customer
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerActive $customer_active customer_active (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchCustomersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchCustomersIdWithHttpInfo(int $id, int $space, \PostFinanceCheckout\Sdk\Model\CustomerActive $customer_active, ?array $expand = null, string $contentType = self::contentTypes['patchCustomersId'][0])
    {
        $request = $this->patchCustomersIdRequest($id, $space, $customer_active, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\Customer',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchCustomersId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerActive $customer_active customer_active (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchCustomersId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchCustomersIdRequest(int $id, int $space, \PostFinanceCheckout\Sdk\Model\CustomerActive $customer_active, ?array $expand = null, string $contentType = self::contentTypes['patchCustomersId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchCustomersId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchCustomersId'
            );
        }

        // verify the required parameter 'customer_active' is set
        if ($customer_active === null || (is_array($customer_active) && count($customer_active) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_active when calling patchCustomersId'
            );
        }

        

        $resourcePath = '/customers/{id}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($customer_active)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($customer_active));
            } else {
                $httpBody = $customer_active;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postCustomers
     *
     * Create a customer
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerCreate $customer_create customer_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postCustomers(int $space, \PostFinanceCheckout\Sdk\Model\CustomerCreate $customer_create, ?array $expand = null, string $contentType = self::contentTypes['postCustomers'][0])
    {
        list($response) = $this->postCustomersWithHttpInfo($space, $customer_create, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postCustomersWithHttpInfo
     *
     * Create a customer
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerCreate $customer_create customer_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCustomersWithHttpInfo(int $space, \PostFinanceCheckout\Sdk\Model\CustomerCreate $customer_create, ?array $expand = null, string $contentType = self::contentTypes['postCustomers'][0])
    {
        $request = $this->postCustomersRequest($space, $customer_create, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 201:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\Customer',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'postCustomers'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerCreate $customer_create customer_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postCustomersRequest(int $space, \PostFinanceCheckout\Sdk\Model\CustomerCreate $customer_create, ?array $expand = null, string $contentType = self::contentTypes['postCustomers'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postCustomers'
            );
        }

        // verify the required parameter 'customer_create' is set
        if ($customer_create === null || (is_array($customer_create) && count($customer_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_create when calling postCustomers'
            );
        }

        

        $resourcePath = '/customers';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($customer_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($customer_create));
            } else {
                $httpBody = $customer_create;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postCustomersBulk
     *
     * Create multiple customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerCreate[] $customer_create customer_create (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomersBulk'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postCustomersBulk(int $space, array $customer_create, string $contentType = self::contentTypes['postCustomersBulk'][0])
    {
        list($response) = $this->postCustomersBulkWithHttpInfo($space, $customer_create, $contentType);
        return $response;
    }

    /**
     * Operation postCustomersBulkWithHttpInfo
     *
     * Create multiple customers
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerCreate[] $customer_create customer_create (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomersBulk'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCustomersBulkWithHttpInfo(int $space, array $customer_create, string $contentType = self::contentTypes['postCustomersBulk'][0])
    {
        $request = $this->postCustomersBulkRequest($space, $customer_create, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 413:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiBulkOperationResult[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'postCustomersBulk'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\CustomerCreate[] $customer_create customer_create (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomersBulk'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postCustomersBulkRequest(int $space, array $customer_create, string $contentType = self::contentTypes['postCustomersBulk'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postCustomersBulk'
            );
        }

        // verify the required parameter 'customer_create' is set
        if ($customer_create === null || (is_array($customer_create) && count($customer_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_create when calling postCustomersBulk'
            );
        }


        $resourcePath = '/customers/bulk';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($customer_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($customer_create));
            } else {
                $httpBody = $customer_create;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postCustomersIdMergeOther
     *
     * Merge two customers
     *
     * @param int $id id (required)
     * @param int $other other (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomersIdMergeOther'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postCustomersIdMergeOther(int $id, int $other, int $space, ?array $expand = null, string $contentType = self::contentTypes['postCustomersIdMergeOther'][0])
    {
        list($response) = $this->postCustomersIdMergeOtherWithHttpInfo($id, $other, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postCustomersIdMergeOtherWithHttpInfo
     *
     * Merge two customers
     *
     * @param int $id id (required)
     * @param int $other other (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomersIdMergeOther'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Customer|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCustomersIdMergeOtherWithHttpInfo(int $id, int $other, int $space, ?array $expand = null, string $contentType = self::contentTypes['postCustomersIdMergeOther'][0])
    {
        $request = $this->postCustomersIdMergeOtherRequest($id, $other, $space, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\PostFinanceCheckout\Sdk\Model\Customer',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Customer',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'postCustomersIdMergeOther'
     *
     * @param int $id id (required)
     * @param int $other other (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postCustomersIdMergeOther'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postCustomersIdMergeOtherRequest(int $id, int $other, int $space, ?array $expand = null, string $contentType = self::contentTypes['postCustomersIdMergeOther'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling postCustomersIdMergeOther'
            );
        }

        // verify the required parameter 'other' is set
        if ($other === null || (is_array($other) && count($other) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $other when calling postCustomersIdMergeOther'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postCustomersIdMergeOther'
            );
        }

        

        $resourcePath = '/customers/{id}/merge/{other}';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($other !== null) {
            $resourcePath = str_replace(
                '{' . 'other' . '}',
                ObjectSerializer::toPathValue($other),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @param float $requestTimeout request timeout.
     * If not specified, fallback to default: 25 seconds.
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(float $requestTimeout = Configuration::DEFAULT_REQUEST_TIMEOUT): array
    {
        $options = [
            RequestOptions::TIMEOUT => $requestTimeout
        ];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }

}
