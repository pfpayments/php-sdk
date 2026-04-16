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


namespace PostFinanceCheckout\Sdk\Auth;

use \Firebase\JWT\JWT;

/**
 * Generates an authorization parameter with the (JWT) Bearer token.
 *
 * @category    Class
 * @package     PostFinanceCheckout\Sdk\Auth
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 */
class HttpBearerAuth implements AuthenticationInterface
{
    private const API_URL_PATH_VERSIONING = '/api/v2.0';
    private int $userId;
    private string $authenticationKey;

    /**
     * Constructor to initialize the Bearer Authenticator.
     *
     * @param int $userId The API application user ID.
     * @param string $authenticationKey The API application user's authentication key.
     */
    public function __construct(int $userId, string $authenticationKey)
    {
        $this->userId = $userId;
        $this->authenticationKey = $authenticationKey;
    }

    /**
     * Generates an authorization parameter with the JWT bearer token.
     *
     * @param string $path The endpoint path (e.g., "/v1/resource").
     * @param string $requestMethod The HTTP method to call.
     * @param string $query The encoded url with query parameters.
     * @return array  authentication parameter.
     */
    public function generateAuthParams(string $path, string $requestMethod, string $query): array
    {
        $applicationUserKey = base64_decode($this->authenticationKey);

        $issued_at = time();
        $requestPath = HttpBearerAuth::API_URL_PATH_VERSIONING . $path . ($query ? "?{$query}" : '');

        $payload = [
            'sub' => (string)$this->userId,
            'iat' => $issued_at,
            'requestPath' => $requestPath,
            'requestMethod' => $requestMethod
        ];

        $jwtHeader = [
            'alg' => 'HS256',
            'typ' => 'JWT',
            'ver' => 1
        ];

        $bearerToken = JWT::encode($payload, $applicationUserKey, 'HS256', null, $jwtHeader);
        return [
            'Authorization' => 'Bearer ' . $bearerToken
        ];
    }
}