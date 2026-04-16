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
 * ApplicationUsersService service
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   wallee AG
 * @license  Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version  5.2.2
 */
class ApplicationUsersService
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
        'deleteApplicationUsersId' => [
            'application/json',
        ],
        'deleteApplicationUsersUserIdKeysId' => [
            'application/json',
        ],
        'getApplicationUsers' => [
            'application/json',
        ],
        'getApplicationUsersId' => [
            'application/json',
        ],
        'getApplicationUsersSearch' => [
            'application/json',
        ],
        'getApplicationUsersUserIdKeys' => [
            'application/json',
        ],
        'patchApplicationUsersId' => [
            'application/json',
        ],
        'postApplicationUsers' => [
            'application/json',
        ],
        'postApplicationUsersUserIdKeys' => [
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
     * Operation deleteApplicationUsersId
     *
     * Delete an application user
     *
     * @param int $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteApplicationUsersId(int $id, string $contentType = self::contentTypes['deleteApplicationUsersId'][0])
    {
        $this->deleteApplicationUsersIdWithHttpInfo($id, $contentType);
    }

    /**
     * Operation deleteApplicationUsersIdWithHttpInfo
     *
     * Delete an application user
     *
     * @param int $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteApplicationUsersIdWithHttpInfo(int $id, string $contentType = self::contentTypes['deleteApplicationUsersId'][0])
    {
        $request = $this->deleteApplicationUsersIdRequest($id, $contentType);

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
     * Create request for operation 'deleteApplicationUsersId'
     *
     * @param int $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteApplicationUsersIdRequest(int $id, string $contentType = self::contentTypes['deleteApplicationUsersId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteApplicationUsersId'
            );
        }


        $resourcePath = '/application-users/{id}';
        $httpMethod = 'DELETE';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation deleteApplicationUsersUserIdKeysId
     *
     * Deactivate an authentication key
     *
     * @param int $user_id user_id (required)
     * @param int $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteApplicationUsersUserIdKeysId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteApplicationUsersUserIdKeysId(int $user_id, int $id, string $contentType = self::contentTypes['deleteApplicationUsersUserIdKeysId'][0])
    {
        $this->deleteApplicationUsersUserIdKeysIdWithHttpInfo($user_id, $id, $contentType);
    }

    /**
     * Operation deleteApplicationUsersUserIdKeysIdWithHttpInfo
     *
     * Deactivate an authentication key
     *
     * @param int $user_id user_id (required)
     * @param int $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteApplicationUsersUserIdKeysId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteApplicationUsersUserIdKeysIdWithHttpInfo(int $user_id, int $id, string $contentType = self::contentTypes['deleteApplicationUsersUserIdKeysId'][0])
    {
        $request = $this->deleteApplicationUsersUserIdKeysIdRequest($user_id, $id, $contentType);

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
     * Create request for operation 'deleteApplicationUsersUserIdKeysId'
     *
     * @param int $user_id user_id (required)
     * @param int $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteApplicationUsersUserIdKeysId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteApplicationUsersUserIdKeysIdRequest(int $user_id, int $id, string $contentType = self::contentTypes['deleteApplicationUsersUserIdKeysId'][0])
    {

        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling deleteApplicationUsersUserIdKeysId'
            );
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteApplicationUsersUserIdKeysId'
            );
        }


        $resourcePath = '/application-users/{userId}/keys/{id}';
        $httpMethod = 'DELETE';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
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
     * Operation getApplicationUsers
     *
     * List all application users
     *
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\ApplicationUserListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getApplicationUsers(?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getApplicationUsers'][0])
    {
        list($response) = $this->getApplicationUsersWithHttpInfo($after, $before, $expand, $limit, $order, $contentType);
        return $response;
    }

    /**
     * Operation getApplicationUsersWithHttpInfo
     *
     * List all application users
     *
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\ApplicationUserListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApplicationUsersWithHttpInfo(?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getApplicationUsers'][0])
    {
        $request = $this->getApplicationUsersRequest($after, $before, $expand, $limit, $order, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUserListResponse',
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
                '\PostFinanceCheckout\Sdk\Model\ApplicationUserListResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUserListResponse',
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
     * Create request for operation 'getApplicationUsers'
     *
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getApplicationUsersRequest(?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getApplicationUsers'][0])
    {

        if ($after !== null && $after < 1) {
            throw new \InvalidArgumentException('invalid value for "$after" when calling ApplicationUsersService.getApplicationUsers, must be bigger than or equal to 1.');
        }
        
        if ($before !== null && $before < 1) {
            throw new \InvalidArgumentException('invalid value for "$before" when calling ApplicationUsersService.getApplicationUsers, must be bigger than or equal to 1.');
        }
        
        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ApplicationUsersService.getApplicationUsers, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ApplicationUsersService.getApplicationUsers, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/application-users';
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
     * Operation getApplicationUsersId
     *
     * Retrieve an application user
     *
     * @param int $id id (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\ApplicationUser|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getApplicationUsersId(int $id, ?array $expand = null, string $contentType = self::contentTypes['getApplicationUsersId'][0])
    {
        list($response) = $this->getApplicationUsersIdWithHttpInfo($id, $expand, $contentType);
        return $response;
    }

    /**
     * Operation getApplicationUsersIdWithHttpInfo
     *
     * Retrieve an application user
     *
     * @param int $id id (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\ApplicationUser|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApplicationUsersIdWithHttpInfo(int $id, ?array $expand = null, string $contentType = self::contentTypes['getApplicationUsersId'][0])
    {
        $request = $this->getApplicationUsersIdRequest($id, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUser',
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
                '\PostFinanceCheckout\Sdk\Model\ApplicationUser',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUser',
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
     * Create request for operation 'getApplicationUsersId'
     *
     * @param int $id id (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getApplicationUsersIdRequest(int $id, ?array $expand = null, string $contentType = self::contentTypes['getApplicationUsersId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getApplicationUsersId'
            );
        }

        

        $resourcePath = '/application-users/{id}';
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
     * Operation getApplicationUsersSearch
     *
     * Search application users
     *
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\ApplicationUserSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getApplicationUsersSearch(?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getApplicationUsersSearch'][0])
    {
        list($response) = $this->getApplicationUsersSearchWithHttpInfo($expand, $limit, $offset, $order, $query, $contentType);
        return $response;
    }

    /**
     * Operation getApplicationUsersSearchWithHttpInfo
     *
     * Search application users
     *
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\ApplicationUserSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApplicationUsersSearchWithHttpInfo(?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getApplicationUsersSearch'][0])
    {
        $request = $this->getApplicationUsersSearchRequest($expand, $limit, $offset, $order, $query, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUserSearchResponse',
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
                '\PostFinanceCheckout\Sdk\Model\ApplicationUserSearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUserSearchResponse',
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
     * Create request for operation 'getApplicationUsersSearch'
     *
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getApplicationUsersSearchRequest(?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getApplicationUsersSearch'][0])
    {

        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ApplicationUsersService.getApplicationUsersSearch, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ApplicationUsersService.getApplicationUsersSearch, must be bigger than or equal to 1.');
        }
        
        if ($offset !== null && $offset > 10000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling ApplicationUsersService.getApplicationUsersSearch, must be smaller than or equal to 10000.');
        }
        



        $resourcePath = '/application-users/search';
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
     * Operation getApplicationUsersUserIdKeys
     *
     * List a user&#39;s authentication keys
     *
     * @param int $user_id user_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersUserIdKeys'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKey[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getApplicationUsersUserIdKeys(int $user_id, string $contentType = self::contentTypes['getApplicationUsersUserIdKeys'][0])
    {
        list($response) = $this->getApplicationUsersUserIdKeysWithHttpInfo($user_id, $contentType);
        return $response;
    }

    /**
     * Operation getApplicationUsersUserIdKeysWithHttpInfo
     *
     * List a user&#39;s authentication keys
     *
     * @param int $user_id user_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersUserIdKeys'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKey[]|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApplicationUsersUserIdKeysWithHttpInfo(int $user_id, string $contentType = self::contentTypes['getApplicationUsersUserIdKeys'][0])
    {
        $request = $this->getApplicationUsersUserIdKeysRequest($user_id, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKey[]',
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
                '\PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKey[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKey[]',
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
     * Create request for operation 'getApplicationUsersUserIdKeys'
     *
     * @param int $user_id user_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApplicationUsersUserIdKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getApplicationUsersUserIdKeysRequest(int $user_id, string $contentType = self::contentTypes['getApplicationUsersUserIdKeys'][0])
    {

        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getApplicationUsersUserIdKeys'
            );
        }


        $resourcePath = '/application-users/{userId}/keys';
        $httpMethod = 'GET';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($user_id),
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
     * Operation patchApplicationUsersId
     *
     * Update an application user
     *
     * @param int $id id (required)
     * @param \PostFinanceCheckout\Sdk\Model\ApplicationUserUpdate $application_user_update application_user_update (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\ApplicationUser|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function patchApplicationUsersId(int $id, \PostFinanceCheckout\Sdk\Model\ApplicationUserUpdate $application_user_update, ?array $expand = null, string $contentType = self::contentTypes['patchApplicationUsersId'][0])
    {
        list($response) = $this->patchApplicationUsersIdWithHttpInfo($id, $application_user_update, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchApplicationUsersIdWithHttpInfo
     *
     * Update an application user
     *
     * @param int $id id (required)
     * @param \PostFinanceCheckout\Sdk\Model\ApplicationUserUpdate $application_user_update application_user_update (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\ApplicationUser|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchApplicationUsersIdWithHttpInfo(int $id, \PostFinanceCheckout\Sdk\Model\ApplicationUserUpdate $application_user_update, ?array $expand = null, string $contentType = self::contentTypes['patchApplicationUsersId'][0])
    {
        $request = $this->patchApplicationUsersIdRequest($id, $application_user_update, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUser',
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
                '\PostFinanceCheckout\Sdk\Model\ApplicationUser',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUser',
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
     * Create request for operation 'patchApplicationUsersId'
     *
     * @param int $id id (required)
     * @param \PostFinanceCheckout\Sdk\Model\ApplicationUserUpdate $application_user_update application_user_update (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchApplicationUsersId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchApplicationUsersIdRequest(int $id, \PostFinanceCheckout\Sdk\Model\ApplicationUserUpdate $application_user_update, ?array $expand = null, string $contentType = self::contentTypes['patchApplicationUsersId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchApplicationUsersId'
            );
        }

        // verify the required parameter 'application_user_update' is set
        if ($application_user_update === null || (is_array($application_user_update) && count($application_user_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $application_user_update when calling patchApplicationUsersId'
            );
        }

        

        $resourcePath = '/application-users/{id}';
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
        if (isset($application_user_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($application_user_update));
            } else {
                $httpBody = $application_user_update;
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
     * Operation postApplicationUsers
     *
     * Create an application user
     *
     * @param \PostFinanceCheckout\Sdk\Model\ApplicationUserCreate $application_user_create application_user_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postApplicationUsers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\ApplicationUserCreateWithMacKey|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postApplicationUsers(\PostFinanceCheckout\Sdk\Model\ApplicationUserCreate $application_user_create, ?array $expand = null, string $contentType = self::contentTypes['postApplicationUsers'][0])
    {
        list($response) = $this->postApplicationUsersWithHttpInfo($application_user_create, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postApplicationUsersWithHttpInfo
     *
     * Create an application user
     *
     * @param \PostFinanceCheckout\Sdk\Model\ApplicationUserCreate $application_user_create application_user_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postApplicationUsers'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\ApplicationUserCreateWithMacKey|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postApplicationUsersWithHttpInfo(\PostFinanceCheckout\Sdk\Model\ApplicationUserCreate $application_user_create, ?array $expand = null, string $contentType = self::contentTypes['postApplicationUsers'][0])
    {
        $request = $this->postApplicationUsersRequest($application_user_create, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUserCreateWithMacKey',
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
                '\PostFinanceCheckout\Sdk\Model\ApplicationUserCreateWithMacKey',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\ApplicationUserCreateWithMacKey',
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
     * Create request for operation 'postApplicationUsers'
     *
     * @param \PostFinanceCheckout\Sdk\Model\ApplicationUserCreate $application_user_create application_user_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postApplicationUsers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postApplicationUsersRequest(\PostFinanceCheckout\Sdk\Model\ApplicationUserCreate $application_user_create, ?array $expand = null, string $contentType = self::contentTypes['postApplicationUsers'][0])
    {

        // verify the required parameter 'application_user_create' is set
        if ($application_user_create === null || (is_array($application_user_create) && count($application_user_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $application_user_create when calling postApplicationUsers'
            );
        }

        

        $resourcePath = '/application-users';
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




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($application_user_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($application_user_create));
            } else {
                $httpBody = $application_user_create;
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
     * Operation postApplicationUsersUserIdKeys
     *
     * Generate a new authentication key
     *
     * @param int $user_id user_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postApplicationUsersUserIdKeys'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKeyCreated|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postApplicationUsersUserIdKeys(int $user_id, string $contentType = self::contentTypes['postApplicationUsersUserIdKeys'][0])
    {
        list($response) = $this->postApplicationUsersUserIdKeysWithHttpInfo($user_id, $contentType);
        return $response;
    }

    /**
     * Operation postApplicationUsersUserIdKeysWithHttpInfo
     *
     * Generate a new authentication key
     *
     * @param int $user_id user_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postApplicationUsersUserIdKeys'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKeyCreated|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postApplicationUsersUserIdKeysWithHttpInfo(int $user_id, string $contentType = self::contentTypes['postApplicationUsersUserIdKeys'][0])
    {
        $request = $this->postApplicationUsersUserIdKeysRequest($user_id, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKeyCreated',
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
                '\PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKeyCreated',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RestApplicationUserMacKeyCreated',
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
     * Create request for operation 'postApplicationUsersUserIdKeys'
     *
     * @param int $user_id user_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postApplicationUsersUserIdKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postApplicationUsersUserIdKeysRequest(int $user_id, string $contentType = self::contentTypes['postApplicationUsersUserIdKeys'][0])
    {

        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling postApplicationUsersUserIdKeys'
            );
        }


        $resourcePath = '/application-users/{userId}/keys';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($user_id),
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
