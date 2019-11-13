<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
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
use PostFinanceCheckout\Sdk\Model\CriteriaOperator;
use PostFinanceCheckout\Sdk\Model\EntityQuery;
use PostFinanceCheckout\Sdk\Model\EntityQueryFilter;
use PostFinanceCheckout\Sdk\Model\EntityQueryFilterType;
use PostFinanceCheckout\Sdk\Model\LineItemCreate;
use PostFinanceCheckout\Sdk\Model\LineItemType;
use PostFinanceCheckout\Sdk\Model\TransactionCreate;
use PostFinanceCheckout\Sdk\Model\TransactionState;
use PostFinanceCheckout\Sdk\Service\TransactionPaymentPageService;
use PostFinanceCheckout\Sdk\Service\TransactionService;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class TransactionServiceTest extends TestCase {

    /**
     * @var PostFinanceCheckout\Sdk\ApiClient
     */
    private $apiClient;

    /**
     * @var PostFinanceCheckout\Sdk\Model\TransactionCreate
     */
    private $transaction;

    /**
    * @var PostFinanceCheckout\Sdk\Service\TransactionPaymentPageService
    */
    private $transactionPaymentPageService;

    /**
     * @var PostFinanceCheckout\Sdk\Service\TransactionService
     */
    private $transactionService;

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

    private function getApiClient()
    {
        $apiClient = new ApiClient($this->userId, $this->secret);
        $apiClient->setHttpClientType($this->getHttpClient());
        return $apiClient;
    }

    /**
     * @return PostFinanceCheckout\Sdk\Service\TransactionService
     */
    private function getTransactionService()
    {
        return new TransactionService($this->getApiClient());
    }

    private function getTransaction()
    {
        // Create transaction
        $lineItem = new LineItemCreate();
        $lineItem->setName('Red T-Shirt');
        $lineItem->setUniqueId('5412');
        $lineItem->setSku('red-t-shirt-123');
        $lineItem->setQuantity(1);
        $lineItem->setAmountIncludingTax(29.95);
        $lineItem->setType(LineItemType::PRODUCT);

        $transaction = new TransactionCreate();
        $transaction->setCurrency('EUR');
        $transaction->setLineItems([$lineItem]);
        $transaction->setAutoConfirmationEnabled(true);
        return $transaction;
    }

    /**
    * Clean up after running each test case
    */
    public function tearDown()
    {
        parent::tearDown();
    }

    public function testCount()
    {
        $transactionService = $this->getTransactionService();
        $transaction = $this->getTransaction();
        $transactionCreate = $transactionService->create($this->spaceId, $transaction);
        $entityQueryFilter = new EntityQueryFilter([
            'field_name' => 'id',
            'value'     => $transactionCreate->getId(),
            'type'      => EntityQueryFilterType::LEAF,
            'operator'  => CriteriaOperator::EQUALS,
        ]);
        $transactionCount  = $transactionService->count($this->spaceId, $entityQueryFilter);
        $this->assertEquals($transactionCount, 1);
    }

    public function testCreate()
    {
        $transactionService = $this->getTransactionService();
        $transaction = $this->getTransaction();
        $transactionCreate = $transactionService->create($this->spaceId, $transaction);
        $this->assertEquals($transactionCreate->getState(), TransactionState::PENDING);
    }

    public function testRead()
    {
        $transactionService = $this->getTransactionService();
        $transaction = $this->getTransaction();
        $transactionCreate = $transactionService->create($this->spaceId, $transaction);
        $transactionRead   = $transactionService->read($this->spaceId, $transactionCreate->getId());
        $this->assertEquals($transactionRead->getState(), TransactionState::PENDING);
    }

    public function testSearch()
    {
        $transactionService = $this->getTransactionService();
        $transaction = $this->getTransaction();
        $transactionCreate = $transactionService->create($this->spaceId, $transaction);
        $entityQueryFilter = new EntityQueryFilter([
            'field_name' => 'id',
            'value'     => $transactionCreate->getId(),
            'type'      => EntityQueryFilterType::LEAF,
            'operator'  => CriteriaOperator::EQUALS,
        ]);
        $entityQuery       = new EntityQuery(['filter' => $entityQueryFilter]);
        $transactionSearch = $transactionService->search($this->spaceId, $entityQuery);
        $this->assertEquals(count($transactionSearch), 1);
        foreach ($transactionSearch as $transaction) {
            $this->assertEquals($transaction->getState(), TransactionState::PENDING);
        }
    }
}
