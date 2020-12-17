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


namespace PostFinanceCheckout\Sdk\Test;

use PHPUnit\Framework\TestCase;
use PostFinanceCheckout\Sdk\ApiClient;
use PostFinanceCheckout\Sdk\Http\HttpClientFactory;
use PostFinanceCheckout\Sdk\Model\AddressCreate;
use PostFinanceCheckout\Sdk\Model\LineItemCreate;
use PostFinanceCheckout\Sdk\Model\LineItemType;
use PostFinanceCheckout\Sdk\Model\TransactionCompletionState;
use PostFinanceCheckout\Sdk\Model\TransactionCreate;
use PostFinanceCheckout\Sdk\Model\TransactionState;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionCompletionServiceTest extends TestCase
{
    /**
     * @var PostFinanceCheckout\Sdk\ApiClient
     */
    private $apiClient;

    /**
     * @var PostFinanceCheckout\Sdk\Model\TransactionCreate
     */
    private $transactionPayload;

    /**
     * @var int
     */
    private $spaceId = 405;

    /**
     * @var int
     */
    private $userId = 512;

    /**
     * @var string
     */
    private $secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        parent::setUp();
        
        $this->apiClient = $this->getApiClient();
        $this->transactionPayload = $this->getTransactionPayload();
    }

    /**
     * @return PostFinanceCheckout\Sdk\ApiClient
     */
    private function getApiClient()
    {
        if (is_null($this->apiClient)) {
            $this->apiClient = new ApiClient($this->userId, $this->secret);
            $this->apiClient->setHttpClientType($this->getHttpClient());
        }
        return $this->apiClient;
    }

    /**
     * Get HTTP Client
     *
     * @return mixed
     */
    private function getHttpClient()
    {
        $HttpClientArray = [
            HttpClientFactory::TYPE_CURL,
            HttpClientFactory::TYPE_SOCKET,
        ];
        $httpClientType  = $HttpClientArray[array_rand($HttpClientArray)];
        return $httpClientType;
    }

    /**
     * @return TransactionCreate
     */
    private function getTransactionPayload()
    {
        if (is_null($this->transactionPayload)) {
            // line item
            $lineItem = new LineItemCreate();
            $lineItem->setName('Red T-Shirt');
            $lineItem->setUniqueId('5412');
            $lineItem->setSku('red-t-shirt-123');
            $lineItem->setQuantity(1);
            $lineItem->setAmountIncludingTax(29.95);
            $lineItem->setType(LineItemType::PRODUCT);

            // Customer Billing Address
            $billingAddress = new AddressCreate();
            $billingAddress->setCity('Winterthur');
            $billingAddress->setCountry('CH');
            $billingAddress->setEmailAddress('test@example.com');
            $billingAddress->setFamilyName('Customer');
            $billingAddress->setGivenName('Good');
            $billingAddress->setPostCode('8400');
            $billingAddress->setPostalState('ZH');
            $billingAddress->setOrganizationName('Test GmbH');
            $billingAddress->setPhoneNumber('+41791234567');
            $billingAddress->setSalutation('Ms');

            $this->transactionPayload = new TransactionCreate();
            $this->transactionPayload->setCurrency('CHF');
            $this->transactionPayload->setLineItems([$lineItem]);
            $this->transactionPayload->setAutoConfirmationEnabled(true);
            $this->transactionPayload->setBillingAddress($billingAddress);
            $this->transactionPayload->setShippingAddress($billingAddress);
            $this->transactionPayload->setToken(766);
        }
        return $this->transactionPayload;
    }

    /**
     * Test case for completeOffline
     *
     * completeOffline.
     *
     */
    public function testCompleteOffline()
    {
        $transaction = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $this->apiClient->getTransactionService()->processWithoutUserInteraction($this->spaceId, $transaction->getId());
		echo $transaction->getId() . PHP_EOL;
		for ($i = 1; $i <= 5; $i++) {
			echo $transaction->getState() . PHP_EOL;
			if ($transaction->getState() == TransactionState::AUTHORIZED) {
				break;
			}
			sleep($i * 5);
			$transaction = $this->apiClient->getTransactionService()->read($this->spaceId, $transaction->getId());
		}
		if ($transaction->getState() == TransactionState::AUTHORIZED) {
			$transactionCompletion = $this->apiClient->getTransactionCompletionService()->completeOffline($this->spaceId, $transaction->getId());
			$this->assertEquals(true, in_array($transactionCompletion->getState(), [TransactionCompletionState::SUCCESSFUL, TransactionCompletionState::PENDING]));
		} else {
			$this->assertEquals(true, $transaction->getState() != TransactionState::AUTHORIZED);
		}
    }

    /**
     * Test case for completeOnline
     *
     * completeOnline.
     * @todo
     *
     */
    public function testCompleteOnline()
    {
    }

    /**
     * Test case for completePartiallyOffline
     *
     * completePartiallyOffline.
     * @todo
     *
     */
    public function testCompletePartiallyOffline()
    {
    }

    /**
     * Test case for completePartiallyOnline
     *
     * completePartiallyOnline.
     * @todo
     *
     */
    public function testCompletePartiallyOnline()
    {
    }

    /**
     * Test case for count
     *
     * Count.
     * @todo
     *
     */
    public function testCount()
    {
    }

    /**
     * Test case for read
     *
     * Read.
     * @todo
     *
     */
    public function testRead()
    {
    }

    /**
     * Test case for search
     *
     * Search.
     * @todo
     *
     */
    public function testSearch()
    {
    }
}
