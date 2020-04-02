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
use PostFinanceCheckout\Sdk\Model\AddressCreate;
use PostFinanceCheckout\Sdk\Model\LineItemCreate;
use PostFinanceCheckout\Sdk\Model\LineItemType;
use PostFinanceCheckout\Sdk\Model\RefundCreate;
use PostFinanceCheckout\Sdk\Model\RefundState;
use PostFinanceCheckout\Sdk\Model\RefundType;
use PostFinanceCheckout\Sdk\Model\TransactionCompletionState;
use PostFinanceCheckout\Sdk\Model\TransactionCreate;
use PostFinanceCheckout\Sdk\Model\TransactionState;
use PostFinanceCheckout\Sdk\Service\RefundService;
use PostFinanceCheckout\Sdk\Service\TransactionCompletionService;
use PostFinanceCheckout\Sdk\Service\TransactionService;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RefundServiceTest extends TestCase
{
    /**
     * @var PostFinanceCheckout\Sdk\ApiClient
     */
    private $apiClient;

    /**
     * @var PostFinanceCheckout\Sdk\Model\TransactionCreate
     */
    private $transactionBag;

    private $transactionCompletionService;
    private $transactionService;
    private $refundService;

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

        if (is_null($this->transactionCompletionService)) {
            $this->transactionCompletionService = new TransactionCompletionService($this->getApiClient());
        }

        if (is_null($this->refundService)) {
            $this->refundService = new RefundService($this->getApiClient());
        }

        if (is_null($this->transactionService)) {
            $this->transactionService = new TransactionService($this->getApiClient());
        }

        $this->transactionBag = $this->getTransactionBag();
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
    private function getTransactionBag()
    {
        if (is_null($this->transactionBag)) {
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
            $billingAddress->setEmailAddress('test@postfinancecheckout.com');
            $billingAddress->setFamilyName('Customer');
            $billingAddress->setGivenName('Good');
            $billingAddress->setPostCode('8400');
            $billingAddress->setPostalState('ZH');
            $billingAddress->setOrganizationName('Test GmbH');
            $billingAddress->setPhoneNumber('+41791234567');
            $billingAddress->setSalutation('Ms');

            $this->transactionBag = new TransactionCreate();
            $this->transactionBag->setCurrency('CHF');
            $this->transactionBag->setLineItems([$lineItem]);
            $this->transactionBag->setAutoConfirmationEnabled(true);
            $this->transactionBag->setBillingAddress($billingAddress);
            $this->transactionBag->setShippingAddress($billingAddress);
        }
        return $this->transactionBag;
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
     * Test case for fail
     *
     * fail.
     * @todo
     *
     */
    public function testFail()
    {
    }

    /**
     * Test case for getRefundDocument
     *
     * getRefundDocument.
     * @todo
     *
     */
    public function testGetRefundDocument()
    {
    }

    /**
     * Test case for getRefundDocumentWithTargetMediaType
     *
     * getRefundDocumentWithTargetMediaType.
     * @todo
     *
     *
     */
    public function testGetRefundDocumentWithTargetMediaType()
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
     * Test case for refund
     *
     * create.
     * @todo
     */
    public function testRefund()
    {
        $transaction = $this->transactionService->create($this->spaceId, $this->transactionBag);
        $transaction = $this->transactionService->processWithoutUserInteraction($this->spaceId, $transaction->getId());
        echo $transaction->getId() . PHP_EOL;
        for ($i = 1; $i <= 5; $i++) {
            echo $transaction->getState() . PHP_EOL;
            if (in_array($transaction->getState(), [TransactionState::FULFILL, TransactionState::FAILED])) {
                break;
            }
            sleep($i * 30);
            $transaction = $this->transactionService->read($this->spaceId, $transaction->getId());
        }
        if (in_array($transaction->getState(), [TransactionState::FULFILL])) {
            $transactionCompletion = $this->transactionCompletionService->completeOffline($this->spaceId, $transaction->getId());
            $this->assertEquals($transactionCompletion->getState(), TransactionCompletionState::SUCCESSFUL);
            $transaction = $this->transactionService->read($this->spaceId, $transactionCompletion->getLinkedTransaction());  // fetch the latest transaction data
            $refundBag   = $this->getRefundBag($transaction);
            /**
             * \PostFinanceCheckout\Sdk\Model\Refund $refund
             */
            $refund = $this->refundService->refund($this->spaceId, $refundBag);
            $this->assertEquals($refund->getState(), RefundState::SUCCESSFUL);
        }
    }

    /**
     *
     * @param \PostFinanceCheckout\Sdk\Model\Transaction $transaction
     * @return RefundCreate
     */
    private function getRefundBag($transaction)
    {
        $refund = new RefundCreate();
        $refund->setAmount($transaction->getAuthorizationAmount());
        $refund->setTransaction($transaction->getId());
        $refund->setMerchantReference($transaction->getMerchantReference());
        $refund->setExternalId($transaction->getId());
        $refund->setType(RefundType::MERCHANT_INITIATED_ONLINE);
        return $refund;
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

    /**
     * Test case for succeed
     *
     * succeed.
     * @todo
     *
     */
    public function testSucceed()
    {
    }
}
