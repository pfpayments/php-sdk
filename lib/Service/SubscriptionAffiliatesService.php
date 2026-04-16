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
 * SubscriptionAffiliatesService service
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   wallee AG
 * @license  Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version  5.2.2
 */
class SubscriptionAffiliatesService
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
        'deleteSubscriptionsAffiliatesId' => [
            'application/json',
        ],
        'getSubscriptionsAffiliates' => [
            'application/json',
        ],
        'getSubscriptionsAffiliatesId' => [
            'application/json',
        ],
        'getSubscriptionsAffiliatesSearch' => [
            'application/json',
        ],
        'patchSubscriptionsAffiliatesId' => [
            'application/json',
        ],
        'postSubscriptionsAffiliates' => [
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
     * Operation deleteSubscriptionsAffiliatesId
     *
     * Delete an affiliate
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSubscriptionsAffiliatesId(int $id, int $space, string $contentType = self::contentTypes['deleteSubscriptionsAffiliatesId'][0])
    {
        $this->deleteSubscriptionsAffiliatesIdWithHttpInfo($id, $space, $contentType);
    }

    /**
     * Operation deleteSubscriptionsAffiliatesIdWithHttpInfo
     *
     * Delete an affiliate
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscriptionsAffiliatesIdWithHttpInfo(int $id, int $space, string $contentType = self::contentTypes['deleteSubscriptionsAffiliatesId'][0])
    {
        $request = $this->deleteSubscriptionsAffiliatesIdRequest($id, $space, $contentType);

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
     * Create request for operation 'deleteSubscriptionsAffiliatesId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteSubscriptionsAffiliatesIdRequest(int $id, int $space, string $contentType = self::contentTypes['deleteSubscriptionsAffiliatesId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteSubscriptionsAffiliatesId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling deleteSubscriptionsAffiliatesId'
            );
        }


        $resourcePath = '/subscriptions/affiliates/{id}';
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
     * Operation getSubscriptionsAffiliates
     *
     * List all affiliates
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliates'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getSubscriptionsAffiliates(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getSubscriptionsAffiliates'][0])
    {
        list($response) = $this->getSubscriptionsAffiliatesWithHttpInfo($space, $after, $before, $expand, $limit, $order, $contentType);
        return $response;
    }

    /**
     * Operation getSubscriptionsAffiliatesWithHttpInfo
     *
     * List all affiliates
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliates'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionsAffiliatesWithHttpInfo(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getSubscriptionsAffiliates'][0])
    {
        $request = $this->getSubscriptionsAffiliatesRequest($space, $after, $before, $expand, $limit, $order, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateListResponse',
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
                '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateListResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateListResponse',
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
     * Create request for operation 'getSubscriptionsAffiliates'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSubscriptionsAffiliatesRequest(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getSubscriptionsAffiliates'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getSubscriptionsAffiliates'
            );
        }

        if ($after !== null && $after < 1) {
            throw new \InvalidArgumentException('invalid value for "$after" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliates, must be bigger than or equal to 1.');
        }
        
        if ($before !== null && $before < 1) {
            throw new \InvalidArgumentException('invalid value for "$before" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliates, must be bigger than or equal to 1.');
        }
        
        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliates, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliates, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/subscriptions/affiliates';
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
     * Operation getSubscriptionsAffiliatesId
     *
     * Retrieve an affiliate
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getSubscriptionsAffiliatesId(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getSubscriptionsAffiliatesId'][0])
    {
        list($response) = $this->getSubscriptionsAffiliatesIdWithHttpInfo($id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation getSubscriptionsAffiliatesIdWithHttpInfo
     *
     * Retrieve an affiliate
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionsAffiliatesIdWithHttpInfo(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getSubscriptionsAffiliatesId'][0])
    {
        $request = $this->getSubscriptionsAffiliatesIdRequest($id, $space, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
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
                '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
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
     * Create request for operation 'getSubscriptionsAffiliatesId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSubscriptionsAffiliatesIdRequest(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getSubscriptionsAffiliatesId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getSubscriptionsAffiliatesId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getSubscriptionsAffiliatesId'
            );
        }

        

        $resourcePath = '/subscriptions/affiliates/{id}';
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
     * Operation getSubscriptionsAffiliatesSearch
     *
     * Search affiliates
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliatesSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getSubscriptionsAffiliatesSearch(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getSubscriptionsAffiliatesSearch'][0])
    {
        list($response) = $this->getSubscriptionsAffiliatesSearchWithHttpInfo($space, $expand, $limit, $offset, $order, $query, $contentType);
        return $response;
    }

    /**
     * Operation getSubscriptionsAffiliatesSearchWithHttpInfo
     *
     * Search affiliates
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliatesSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionsAffiliatesSearchWithHttpInfo(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getSubscriptionsAffiliatesSearch'][0])
    {
        $request = $this->getSubscriptionsAffiliatesSearchRequest($space, $expand, $limit, $offset, $order, $query, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateSearchResponse',
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
                '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateSearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateSearchResponse',
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
     * Create request for operation 'getSubscriptionsAffiliatesSearch'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSubscriptionsAffiliatesSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSubscriptionsAffiliatesSearchRequest(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getSubscriptionsAffiliatesSearch'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getSubscriptionsAffiliatesSearch'
            );
        }

        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliatesSearch, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliatesSearch, must be bigger than or equal to 1.');
        }
        
        if ($offset !== null && $offset > 10000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling SubscriptionAffiliatesService.getSubscriptionsAffiliatesSearch, must be smaller than or equal to 10000.');
        }
        



        $resourcePath = '/subscriptions/affiliates/search';
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
     * Operation patchSubscriptionsAffiliatesId
     *
     * Update an affiliate
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateUpdate $subscription_affiliate_update subscription_affiliate_update (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function patchSubscriptionsAffiliatesId(int $id, int $space, \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateUpdate $subscription_affiliate_update, ?array $expand = null, string $contentType = self::contentTypes['patchSubscriptionsAffiliatesId'][0])
    {
        list($response) = $this->patchSubscriptionsAffiliatesIdWithHttpInfo($id, $space, $subscription_affiliate_update, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchSubscriptionsAffiliatesIdWithHttpInfo
     *
     * Update an affiliate
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateUpdate $subscription_affiliate_update subscription_affiliate_update (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchSubscriptionsAffiliatesIdWithHttpInfo(int $id, int $space, \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateUpdate $subscription_affiliate_update, ?array $expand = null, string $contentType = self::contentTypes['patchSubscriptionsAffiliatesId'][0])
    {
        $request = $this->patchSubscriptionsAffiliatesIdRequest($id, $space, $subscription_affiliate_update, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
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
                '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
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
     * Create request for operation 'patchSubscriptionsAffiliatesId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateUpdate $subscription_affiliate_update subscription_affiliate_update (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchSubscriptionsAffiliatesId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchSubscriptionsAffiliatesIdRequest(int $id, int $space, \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateUpdate $subscription_affiliate_update, ?array $expand = null, string $contentType = self::contentTypes['patchSubscriptionsAffiliatesId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchSubscriptionsAffiliatesId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchSubscriptionsAffiliatesId'
            );
        }

        // verify the required parameter 'subscription_affiliate_update' is set
        if ($subscription_affiliate_update === null || (is_array($subscription_affiliate_update) && count($subscription_affiliate_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subscription_affiliate_update when calling patchSubscriptionsAffiliatesId'
            );
        }

        

        $resourcePath = '/subscriptions/affiliates/{id}';
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
        if (isset($subscription_affiliate_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($subscription_affiliate_update));
            } else {
                $httpBody = $subscription_affiliate_update;
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
     * Operation postSubscriptionsAffiliates
     *
     * Create an affiliate
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateCreate $subscription_affiliate_create subscription_affiliate_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postSubscriptionsAffiliates'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postSubscriptionsAffiliates(int $space, \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateCreate $subscription_affiliate_create, ?array $expand = null, string $contentType = self::contentTypes['postSubscriptionsAffiliates'][0])
    {
        list($response) = $this->postSubscriptionsAffiliatesWithHttpInfo($space, $subscription_affiliate_create, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postSubscriptionsAffiliatesWithHttpInfo
     *
     * Create an affiliate
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateCreate $subscription_affiliate_create subscription_affiliate_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postSubscriptionsAffiliates'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postSubscriptionsAffiliatesWithHttpInfo(int $space, \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateCreate $subscription_affiliate_create, ?array $expand = null, string $contentType = self::contentTypes['postSubscriptionsAffiliates'][0])
    {
        $request = $this->postSubscriptionsAffiliatesRequest($space, $subscription_affiliate_create, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
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
                '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\SubscriptionAffiliate',
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
     * Create request for operation 'postSubscriptionsAffiliates'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateCreate $subscription_affiliate_create subscription_affiliate_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postSubscriptionsAffiliates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postSubscriptionsAffiliatesRequest(int $space, \PostFinanceCheckout\Sdk\Model\SubscriptionAffiliateCreate $subscription_affiliate_create, ?array $expand = null, string $contentType = self::contentTypes['postSubscriptionsAffiliates'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postSubscriptionsAffiliates'
            );
        }

        // verify the required parameter 'subscription_affiliate_create' is set
        if ($subscription_affiliate_create === null || (is_array($subscription_affiliate_create) && count($subscription_affiliate_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subscription_affiliate_create when calling postSubscriptionsAffiliates'
            );
        }

        

        $resourcePath = '/subscriptions/affiliates';
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
        if (isset($subscription_affiliate_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($subscription_affiliate_create));
            } else {
                $httpBody = $subscription_affiliate_create;
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
