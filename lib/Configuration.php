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

namespace PostFinanceCheckout\Sdk;

/**
 * Configuration class contains various settings of the API client.
 *
 * @category Class
 * @package     PostFinanceCheckout\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.2
 */
class Configuration
{
    public const BOOLEAN_FORMAT_INT = 'int';
    public const BOOLEAN_FORMAT_STRING = 'string';

    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * API application user ID
     *
     * @var int
     */
    protected $userId;

    /**
     * API Application user's Authentication key
     *
     * @var string
     */
    protected $authenticationKey = '';

    /**
     * Boolean format for query string
     *
     * @var string
     */
    protected $booleanFormatForQueryString = Configuration::BOOLEAN_FORMAT_INT;

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://checkout.postfinance.ch/api/v2.0';

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Default headers for all API requests.
     *
     * @var array
     */
    private array $defaultHeaders;

    /**
     * The constant for the default request timeout.
     * Default: 25 seconds.
     *
     * @var int
     */
    public const DEFAULT_REQUEST_TIMEOUT = 25;

    /**
	 * The request timeout in seconds.
	 *
	 * Total time allowed for the entire request,
	 * including connection establishment, request transmission, and response reading.
	 *
	 * @var int
	 */
	private $requestTimeout;

    /**
     * Constructor
     * @param int $userId the API application user ID
     * @param string $authenticationKey the API authentication key
     *
     * Set the request timeout to the default: 25 seconds.
     * Set the default headers to the default constants.
     */
    public function __construct(int $userId, string $authenticationKey)
    {
        $this->tempFolderPath = sys_get_temp_dir();
        $this->userId = $userId;
        $this->authenticationKey = $authenticationKey;
        $this->defaultHeaders = [
            'x-meta-sdk-version' => "5.2.2",
            'x-meta-sdk-language' => 'php',
            'x-meta-sdk-provider' => "postfinancecheckout",
            'x-meta-sdk-language-version' => phpversion()
        ];
        $this->requestTimeout = Configuration::DEFAULT_REQUEST_TIMEOUT;
    }

    /**
     * Sets the API application user ID
     *
     * @param int $userId User ID
     *
     * @return $this
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets the API application user ID
     *
     * @return int User ID
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets the API Application user's Authentication key
     *
     * @param string $authenticationKey Authentication key
     *
     * @return $this
     */
    public function setAuthenticationKey(string $authenticationKey)
    {
        $this->authenticationKey = $authenticationKey;
        return $this;
    }

    /**
     * Gets the API Application user's Authentication key
     *
     * @return string Authentication key
     */
    public function getAuthenticationKey()
    {
        return $this->authenticationKey;
    }

    /**
     * Sets boolean format for query string.
     *
     * @param string $booleanFormat Boolean format for query string
     *
     * @return $this
     */
    public function setBooleanFormatForQueryString(string $booleanFormat)
    {
        $this->booleanFormatForQueryString = $booleanFormat;

        return $this;
    }

    /**
     * Gets boolean format for query string.
     *
     * @return string Boolean format for query string
     */
    public function getBooleanFormatForQueryString(): string
    {
        return $this->booleanFormatForQueryString;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default headers that are applied to every API request.
     *
     * @return array Associative array of default headers.
     */
    public function getDefaultHeaders()
    {
        return $this->defaultHeaders;
    }

    /**
     * Sets the default headers that will be included in all API requests.
     *
     * @param array $headers Associative array of headers.
     * @return $this
     */
    public function setDefaultHeaders(array $headers)
    {
        $this->defaultHeaders = $headers;
        return $this;
    }

    /**
     * Sets the request timeout in seconds
     *
     * @param int $requestTimeout Request timeout
     *
     * @return $this
     */
    public function setRequestTimeout(int $requestTimeout)
    {
        $this->requestTimeout = $requestTimeout;
        return $this;
    }

    /**
     * Gets the request timeout in seconds
     *
     * @return int Request timeout
     */
    public function getRequestTimeout()
    {
        return $this->requestTimeout;
    }

    /**
     * Gets the default configuration instance
     *
     * @param int|null $userId The application user ID
     * @param string|null $authenticationKey The application user's authentication key.
     * @return Configuration
     */
    public static function getDefaultConfiguration(?int $userId = null, ?string $authenticationKey = null): Configuration
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration($userId, $authenticationKey);
        }

        return self::$defaultConfiguration;
    }

    /**
     * Static method to reset default configuration
     */
    public static function resetDefaultConfiguration(): void
    {
        self::$defaultConfiguration = null;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport(): string
    {
        $report  = 'PHP SDK (PostFinanceCheckout\Sdk) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 2.0' . PHP_EOL;
        $report .= '    SDK Package Version: 5.2.2' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings(): array
    {
        return [
            [
                "url" => "https://checkout.postfinance.ch/api/v2.0",
                "description" => "No description provided",
            ]
        ];
    }

    /**
     * Returns URL based on host settings, index and variables
     *
     * @param array $hostSettings array of host settings, generated from getHostSettings() or equivalent from the API clients
     * @param int $hostIndex index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public static function getHostString(array $hostSettings, int $hostIndex, ?array $variables = null): string
    {
        if (null === $variables) {
            $variables = [];
        }

        // check array index out of bound
        if ($hostIndex < 0 || $hostIndex >= count($hostSettings)) {
            throw new \InvalidArgumentException("Invalid index $hostIndex when selecting the host. Must be less than " . count($hostSettings));
        }

        $host = $hostSettings[$hostIndex];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (!isset($variable['enum_values']) || in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{" . $name . "}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value " . $variables[$name] . ". Must be " . join(',', $variable["enum_values"]) . ".");
                }
            } else {
                // use default value
                $url = str_replace("{" . $name . "}", $variable["default_value"], $url);
            }
        }

        return $url;
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int $index index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings(int $index, ?array $variables = null): string
    {
        return self::getHostString($this->getHostSettings(), $index, $variables);
    }

     /**
     * Resets the request timeout to default: 25 seconds.
     *
     * @return Configuration
     */
    public function resetRequestTimeout() {
        $this->requestTimeout = Configuration::DEFAULT_REQUEST_TIMEOUT;
        return $this;
    }
}
