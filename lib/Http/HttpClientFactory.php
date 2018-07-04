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

namespace PostFinanceCheckout\Sdk\Http;

/**
 * This class provides an HTTP client instance that is supported by the environment.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class HttpClientFactory {

	const TYPE_CURL = 'curl';
	const TYPE_SOCKET = 'socket';

	/**
	 * Singleton instance.
	 *
	 * @var HttpClientFactory
	 */
	private static $instance;

	/**
	 * An array of HTTP client instances.
	 *
	 * @var IHttpClient[]
	 */
	private $clients = array();

	/**
	 * Returns the singleton instance of the factory. If no instance exists, it is created.
	 *
	 * @return HttpClientFactory
	 */
	private static function getInstance() {
		if (null === self::$instance) {
			self::$instance = new HttpClientFactory();
		}
		return self::$instance;
	}

	/**
	 * Returns an HTTP client instance.
	 *
	 * @return IHttpClient
	 */
	public static function getClient($type = null) {
		return self::getInstance()->getClientInternal($type);
	}

	/**
	 * Constructor.
	 */
	private function __construct() {
		$this->clients[self::TYPE_CURL] = new CurlHttpClient();
		$this->clients[self::TYPE_SOCKET] = new SocketHttpClient();
	}

	/**
	 * Returns an HTTP client instance.
	 *
	 * @return IHttpClient
	 */
	private function getClientInternal($type = null) {
		if ($type != null) {
			if (isset($this->clients[$type])) {
				return $this->clients[$type];
			} else {
				throw new \Exception("No http client with type '$type' found.");
			}
		} else {
			foreach ($this->clients as $client) {
				if ($client->isSupported()) {
					return $client;
				}
			}
			throw new \Exception('No supported http client found.');
		}
	}

}