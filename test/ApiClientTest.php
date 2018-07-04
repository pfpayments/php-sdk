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

namespace PostFinanceCheckout\Sdk;

use PostFinanceCheckout\Sdk\ApiClient;
use PostFinanceCheckout\Sdk\Http\HttpClientFactory;
use PHPUnit\Framework\TestCase;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class BasicTest extends TestCase {

	/**
	 * Test the API client.
	 */
	public function testApiClient() {
		$this->callApi(HttpClientFactory::TYPE_CURL);
	}

	/**
	 * Test the cURL HTTP client.
	 */
	public function testCurlHttpClient() {
		$this->callApi(HttpClientFactory::TYPE_CURL);
	}

	/**
	 * Test the socket HTTP client.
	 */
	public function testSocketHttpClient() {
		$this->callApi(HttpClientFactory::TYPE_SOCKET);
	}

	/**
	 * Send an API request with the given http client.
	 *
	 * @param string $httpClientType the http type to use for the request
	 */
	private function callApi($httpClientType = null) {
		$apiClient = new ApiClient(getenv('APPLICATION_USER_ID'), getenv('APPLICATION_USER_KEY'));
		$apiClient->setBasePath(getenv('API_BASE_PATH'));
		$apiClient->setHttpClientType($httpClientType);
		$service = new \PostFinanceCheckout\Sdk\Service\WebhookUrlService($apiClient);
		$response = $service->readWithHttpInfo(23, 7);
		$this->assertEquals(200, $response->getStatusCode());
		$this->assertInstanceOf('\PostFinanceCheckout\Sdk\Model\WebhookUrl', $response->getData());
		$this->assertTrue($response->getData()->isValid());
		$this->assertEquals(7, $response->getData()->getId());
		$this->assertEquals('SDK Test Webhook Url', $response->getData()->getName());
	}

}