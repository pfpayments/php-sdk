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


declare(strict_types=1);

namespace PostFinanceCheckout\Sdk\Http;

use PostFinanceCheckout\Sdk\Http\ConnectionException;
use PostFinanceCheckout\Sdk\ApiClient;

/**
 * This class sends API calls via cURL.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk\Http
 * @author   wallee AG
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class CurlHttpClient implements IHttpClient {

	/**
	 * Checks if curl is installed in the system.
	 *
	 * @return bool
	 */
	public function isSupported(): bool {
		return function_exists('curl_version');
	}

	/**
	 * Sends the request using curl.
	 *
	 * The function will try to use the CA certificates provided by the system, first.
	 * If an error is detected, a second attempt will be done but this time using the 
	 * CA certificates provided by this SDK.
	 * If this second attempt is valid, the SDK's CA certificates wil be stored in a 
	 * temporal file ensuring upcoming request will use them. But if the second attempt
	 * also fails, then it means that the SDK's CA certificates do not help either, and
	 * will not be used anymore.
	 *
	 * @param ApiClient $apiClient
	 * @param HttpRequest $request
	 * @return HttpResponse
	 * @throws ConnectionException
	 */
	public function send(ApiClient $apiClient, HttpRequest $request): HttpResponse {
		$curl = curl_init();

		$tempCAFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "tmp-ca-bundle.crt";

		// set timeout, if needed
		if ($request->getTimeOut() !== 0) {
			curl_setopt($curl, CURLOPT_TIMEOUT, $request->getTimeOut());
		}

        // set life-time for DNS cache entries
        curl_setopt($curl, CURLOPT_DNS_CACHE_TIMEOUT, 30);
		// return the result on success, rather than just true
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($curl, CURLOPT_HTTPHEADER, $request->getHeaders());

		// disable SSL verification, if needed
		if ($apiClient->isCertificateAuthorityCheckEnabled() === false) {
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		} else {
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
			if (file_exists($tempCAFile)) {
				// Use the temporal CA Bundle if it was set, which indicates a previous error.
				$apiClient->setCertificateAuthority($tempCAFile);
				curl_setopt($curl, CURLOPT_CAINFO, $apiClient->getCertificateAuthority());
			}
		}

		if ($request->getMethod() === HttpRequest::POST) {
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $request->getBody());
		} elseif ($request->getMethod() === HttpRequest::HEAD) {
			curl_setopt($curl, CURLOPT_NOBODY, true);
		} elseif ($request->getMethod() === HttpRequest::OPTIONS) {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'OPTIONS');
			curl_setopt($curl, CURLOPT_POSTFIELDS, $request->getBody());
		} elseif ($request->getMethod() === HttpRequest::PATCH) {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
			curl_setopt($curl, CURLOPT_POSTFIELDS, $request->getBody());
		} elseif ($request->getMethod() === HttpRequest::PUT) {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
			curl_setopt($curl, CURLOPT_POSTFIELDS, $request->getBody());
		} elseif ($request->getMethod() === HttpRequest::DELETE) {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
			curl_setopt($curl, CURLOPT_POSTFIELDS, $request->getBody());
		} elseif ($request->getMethod() !== HttpRequest::GET) {
			throw new ConnectionException($request->getUrl(), $request->getLogToken(), 'Method ' . $request->getMethod() . ' is not recognized.');
		}
		curl_setopt($curl, CURLOPT_URL, $request->getUrl());

		// Set user agent
		curl_setopt($curl, CURLOPT_USERAGENT, $request->getUserAgent());

		// debugging for curl
		$debugFilePointer = fopen($apiClient->getDebugFile(), 'a');
		if ($apiClient->isDebuggingEnabled()) {
			error_log("[DEBUG] HTTP Request body  ~BEGIN~" . PHP_EOL . print_r($request->getBody(), true) . PHP_EOL . "~END~" . PHP_EOL, 3, $apiClient->getDebugFile());

			curl_setopt($curl, CURLOPT_VERBOSE, 1);
			curl_setopt($curl, CURLOPT_STDERR, $debugFilePointer);
		} else {
			curl_setopt($curl, CURLOPT_VERBOSE, 0);
		}

		// obtain the HTTP response headers
		curl_setopt($curl, CURLOPT_HEADER, 1);

		// Make the request
		$curlResponse = curl_exec($curl);
		if ($curlResponse === FALSE && !file_exists($tempCAFile)) {
			$errNo = curl_errno($curl);
			$errStr = curl_error($curl);
			if ($errNo === CURLE_SSL_CERTPROBLEM || substr_count(strtolower($errStr), "ssl")) {
				$pathToCABundle = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "ca-bundle.crt";
				$caContent = file_get_contents($pathToCABundle);
				// Create the temporal CA file, so it can be reused later on if needed.
				file_put_contents($tempCAFile, $caContent);

				// Try again the request, this time with the CA bundle provided by this SDK.
				$apiClient->setCertificateAuthority($tempCAFile);
				curl_setopt($curl, CURLOPT_CAINFO, $apiClient->getCertificateAuthority());
				$curlResponse = curl_exec($curl);
				if ($curlResponse === FALSE) {
					// The request still failed, so the CA bundle did not help.
					// Restore system CA, and an error will be triggered later on.
					unlink($tempCAFile);
				}
			}
		}

		try {
			$httpResponse = $this->handleResponse($apiClient, $request, $curl, $curlResponse, $request->getUrl());
		}
		catch (ConnectionException $e) {
			throw $e;
		}
		finally {
			curl_close($curl);
			fclose($debugFilePointer);
		}

		return $httpResponse;
	}

	/**
	 * Puts together the HTTP response.
	 *
	 * @param ApiClient $apiClient
	 *    The API client instance
	 * @param HttpRequest $request
	 *    The HTTP request
	 * @param resource \CurlHandle $curl
	 *    The cURL handler
	 * @param string|bool $curlResponse
	 *    The response the from the $request, via curl_exec
	 * @param string $url
	 *    The url of the HTTP request
	 * @return HttpResponse
	 * @throws ConnectionException
	 */
	private function handleResponse(ApiClient $apiClient, HttpRequest $request, $curl, $curlResponse, string $url): HttpResponse {
		// Remove this check once PHP 7.4 is not supported anymore and this can be set in the arguments:
		if (!is_string($curlResponse) && !is_bool($curlResponse)) {
			throw new ConnectionException($url, $request->getLogToken(), "API call response was not bool or string.");
		}

		$httpHeaderSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

		// Handle the case where $curlResponse is false (indicating an error)
		if ($curlResponse === FALSE) {
			$errStr = curl_error($curl);

			if (!empty($errStr)) {
				throw new ConnectionException($url, $request->getLogToken(), $errStr);
			} else {
				throw new ConnectionException($url, $request->getLogToken(), 'API call failed for an unknown reason.');
			}
		}
		$httpHeader = substr($curlResponse, 0, $httpHeaderSize);
		$httpBody = substr($curlResponse, $httpHeaderSize);
		$responseInfo = curl_getinfo($curl);

		// debug HTTP response body
		if ($apiClient->isDebuggingEnabled()) {
			error_log("[DEBUG] HTTP Response body ~BEGIN~" . PHP_EOL . print_r($httpBody, true) . PHP_EOL . "~END~".PHP_EOL, 3, $apiClient->getDebugFile());
		}

		if ($responseInfo['http_code'] === 0) {
			$curlErrorMessage = curl_error($curl);

			// curl_exec can sometimes fail but still return a blank message from curl_error().
			if (!empty($curlErrorMessage)) {
				throw new ConnectionException($url, $request->getLogToken(), $curlErrorMessage);
			} else {
				throw new ConnectionException($url, $request->getLogToken(), 'API call failed for an unknown reason. This could happen if you are disconnected from the network.');
			}
		} else {
			return new HttpResponse($responseInfo['http_code'], $httpHeader, $httpBody);
		}
	}
}
