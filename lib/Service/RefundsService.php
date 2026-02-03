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
 * RefundsService service
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   wallee AG
 * @license  Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version  5.2.0
 */
class RefundsService
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
        'getPaymentRefunds' => [
            'application/json',
        ],
        'getPaymentRefundsId' => [
            'application/json',
        ],
        'getPaymentRefundsIdDocument' => [
            'application/json',
        ],
        'getPaymentRefundsSearch' => [
            'application/json',
        ],
        'postPaymentRefunds' => [
            'application/json',
        ],
        'postPaymentRefundsIdMarkFailed' => [
            'application/json',
        ],
        'postPaymentRefundsIdMarkSucceeded' => [
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
     * Operation getPaymentRefunds
     *
     * List all refunds
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefunds'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RefundListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getPaymentRefunds(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getPaymentRefunds'][0])
    {
        list($response) = $this->getPaymentRefundsWithHttpInfo($space, $after, $before, $expand, $limit, $order, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentRefundsWithHttpInfo
     *
     * List all refunds
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefunds'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RefundListResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentRefundsWithHttpInfo(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getPaymentRefunds'][0])
    {
        $request = $this->getPaymentRefundsRequest($space, $after, $before, $expand, $limit, $order, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\RefundListResponse',
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
                '\PostFinanceCheckout\Sdk\Model\RefundListResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RefundListResponse',
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
     * Create request for operation 'getPaymentRefunds'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param int|null $after Set to an object&#39;s ID to retrieve the page of objects coming immediately after the named object. (optional)
     * @param int|null $before Set to an object&#39;s ID to retrieve the page of objects coming immediately before the named object. (optional)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param string|null $order Specify to retrieve objects in chronological (ASC) or reverse chronological (DESC) order. See {@see \PostFinanceCheckout\Sdk\Model\SortingOrder}. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRefundsRequest(int $space, ?int $after = null, ?int $before = null, ?array $expand = null, ?int $limit = null, ?string $order = null, string $contentType = self::contentTypes['getPaymentRefunds'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getPaymentRefunds'
            );
        }

        if ($after !== null && $after < 1) {
            throw new \InvalidArgumentException('invalid value for "$after" when calling RefundsService.getPaymentRefunds, must be bigger than or equal to 1.');
        }
        
        if ($before !== null && $before < 1) {
            throw new \InvalidArgumentException('invalid value for "$before" when calling RefundsService.getPaymentRefunds, must be bigger than or equal to 1.');
        }
        
        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RefundsService.getPaymentRefunds, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RefundsService.getPaymentRefunds, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/payment/refunds';
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
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
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
     * Operation getPaymentRefundsId
     *
     * Retrieve a refund
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getPaymentRefundsId(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getPaymentRefundsId'][0])
    {
        list($response) = $this->getPaymentRefundsIdWithHttpInfo($id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentRefundsIdWithHttpInfo
     *
     * Retrieve a refund
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsId'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentRefundsIdWithHttpInfo(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getPaymentRefundsId'][0])
    {
        $request = $this->getPaymentRefundsIdRequest($id, $space, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
                '\PostFinanceCheckout\Sdk\Model\Refund',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
     * Create request for operation 'getPaymentRefundsId'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRefundsIdRequest(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['getPaymentRefundsId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getPaymentRefundsId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getPaymentRefundsId'
            );
        }

        

        $resourcePath = '/payment/refunds/{id}';
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
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
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
     * Operation getPaymentRefundsIdDocument
     *
     * Retrieve a refund document
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsIdDocument'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RenderedDocument|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getPaymentRefundsIdDocument(int $id, int $space, string $contentType = self::contentTypes['getPaymentRefundsIdDocument'][0])
    {
        list($response) = $this->getPaymentRefundsIdDocumentWithHttpInfo($id, $space, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentRefundsIdDocumentWithHttpInfo
     *
     * Retrieve a refund document
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsIdDocument'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RenderedDocument|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentRefundsIdDocumentWithHttpInfo(int $id, int $space, string $contentType = self::contentTypes['getPaymentRefundsIdDocument'][0])
    {
        $request = $this->getPaymentRefundsIdDocumentRequest($id, $space, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\RenderedDocument',
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
                '\PostFinanceCheckout\Sdk\Model\RenderedDocument',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RenderedDocument',
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
     * Create request for operation 'getPaymentRefundsIdDocument'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsIdDocument'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRefundsIdDocumentRequest(int $id, int $space, string $contentType = self::contentTypes['getPaymentRefundsIdDocument'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getPaymentRefundsIdDocument'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getPaymentRefundsIdDocument'
            );
        }


        $resourcePath = '/payment/refunds/{id}/document';
        $httpMethod = 'GET';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
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
     * Operation getPaymentRefundsSearch
     *
     * Search refunds
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\RefundSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function getPaymentRefundsSearch(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getPaymentRefundsSearch'][0])
    {
        list($response) = $this->getPaymentRefundsSearchWithHttpInfo($space, $expand, $limit, $offset, $order, $query, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentRefundsSearchWithHttpInfo
     *
     * Search refunds
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsSearch'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\RefundSearchResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentRefundsSearchWithHttpInfo(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getPaymentRefundsSearch'][0])
    {
        $request = $this->getPaymentRefundsSearchRequest($space, $expand, $limit, $offset, $order, $query, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\RefundSearchResponse',
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
                '\PostFinanceCheckout\Sdk\Model\RefundSearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\RefundSearchResponse',
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
     * Create request for operation 'getPaymentRefundsSearch'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param int|null $limit A limit on the number of objects to be returned, between 1 and 100. Default is 10. (optional)
     * @param int|null $offset A cursor for pagination, specifies the number of objects to skip. (optional)
     * @param string|null $order The fields and order to sort the objects by. (optional)
     * @param string|null $query The search query to filter the objects by. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRefundsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRefundsSearchRequest(int $space, ?array $expand = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $query = null, string $contentType = self::contentTypes['getPaymentRefundsSearch'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling getPaymentRefundsSearch'
            );
        }

        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RefundsService.getPaymentRefundsSearch, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RefundsService.getPaymentRefundsSearch, must be bigger than or equal to 1.');
        }
        
        if ($offset !== null && $offset > 10000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling RefundsService.getPaymentRefundsSearch, must be smaller than or equal to 10000.');
        }
        



        $resourcePath = '/payment/refunds/search';
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
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
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
     * Operation postPaymentRefunds
     *
     * Create a refund
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\RefundCreate $refund_create refund_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefunds'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postPaymentRefunds(int $space, \PostFinanceCheckout\Sdk\Model\RefundCreate $refund_create, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefunds'][0])
    {
        list($response) = $this->postPaymentRefundsWithHttpInfo($space, $refund_create, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postPaymentRefundsWithHttpInfo
     *
     * Create a refund
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\RefundCreate $refund_create refund_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefunds'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentRefundsWithHttpInfo(int $space, \PostFinanceCheckout\Sdk\Model\RefundCreate $refund_create, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefunds'][0])
    {
        $request = $this->postPaymentRefundsRequest($space, $refund_create, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
                '\PostFinanceCheckout\Sdk\Model\Refund',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
     * Create request for operation 'postPaymentRefunds'
     *
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param \PostFinanceCheckout\Sdk\Model\RefundCreate $refund_create refund_create (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postPaymentRefundsRequest(int $space, \PostFinanceCheckout\Sdk\Model\RefundCreate $refund_create, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefunds'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postPaymentRefunds'
            );
        }

        // verify the required parameter 'refund_create' is set
        if ($refund_create === null || (is_array($refund_create) && count($refund_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_create when calling postPaymentRefunds'
            );
        }

        

        $resourcePath = '/payment/refunds';
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
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($refund_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($refund_create));
            } else {
                $httpBody = $refund_create;
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
     * Operation postPaymentRefundsIdMarkFailed
     *
     * Mark a refund as failed
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefundsIdMarkFailed'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postPaymentRefundsIdMarkFailed(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefundsIdMarkFailed'][0])
    {
        list($response) = $this->postPaymentRefundsIdMarkFailedWithHttpInfo($id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postPaymentRefundsIdMarkFailedWithHttpInfo
     *
     * Mark a refund as failed
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefundsIdMarkFailed'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentRefundsIdMarkFailedWithHttpInfo(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefundsIdMarkFailed'][0])
    {
        $request = $this->postPaymentRefundsIdMarkFailedRequest($id, $space, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
                '\PostFinanceCheckout\Sdk\Model\Refund',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
     * Create request for operation 'postPaymentRefundsIdMarkFailed'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefundsIdMarkFailed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postPaymentRefundsIdMarkFailedRequest(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefundsIdMarkFailed'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling postPaymentRefundsIdMarkFailed'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postPaymentRefundsIdMarkFailed'
            );
        }

        

        $resourcePath = '/payment/refunds/{id}/mark-failed';
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
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
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
     * Operation postPaymentRefundsIdMarkSucceeded
     *
     * Mark a refund as successful
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefundsIdMarkSucceeded'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse
     */
    public function postPaymentRefundsIdMarkSucceeded(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefundsIdMarkSucceeded'][0])
    {
        list($response) = $this->postPaymentRefundsIdMarkSucceededWithHttpInfo($id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postPaymentRefundsIdMarkSucceededWithHttpInfo
     *
     * Mark a refund as successful
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefundsIdMarkSucceeded'] to see the possible values for this operation
     *
     * @throws \PostFinanceCheckout\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \PostFinanceCheckout\Sdk\Model\Refund|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse|\PostFinanceCheckout\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentRefundsIdMarkSucceededWithHttpInfo(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefundsIdMarkSucceeded'][0])
    {
        $request = $this->postPaymentRefundsIdMarkSucceededRequest($id, $space, $expand, $contentType);

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
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
                '\PostFinanceCheckout\Sdk\Model\Refund',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PostFinanceCheckout\Sdk\Model\Refund',
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
     * Create request for operation 'postPaymentRefundsIdMarkSucceeded'
     *
     * @param int $id id (required)
     * @param int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentRefundsIdMarkSucceeded'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postPaymentRefundsIdMarkSucceededRequest(int $id, int $space, ?array $expand = null, string $contentType = self::contentTypes['postPaymentRefundsIdMarkSucceeded'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling postPaymentRefundsIdMarkSucceeded'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postPaymentRefundsIdMarkSucceeded'
            );
        }

        

        $resourcePath = '/payment/refunds/{id}/mark-succeeded';
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
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
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
