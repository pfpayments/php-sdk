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

namespace PostFinanceCheckout\Sdk\Test;

use PHPUnit\Framework\TestCase;
use PostFinanceCheckout\Sdk\ApiException;
use PostFinanceCheckout\Sdk\Model\RefundCreate;
use PostFinanceCheckout\Sdk\Model\RefundState;
use PostFinanceCheckout\Sdk\Model\RefundType;
use PostFinanceCheckout\Sdk\Model\Transaction;
use PostFinanceCheckout\Sdk\Model\TransactionCompletionState;
use PostFinanceCheckout\Sdk\Model\TransactionState;
use PostFinanceCheckout\Sdk\Service\RefundsService;
use PostFinanceCheckout\Sdk\Service\TransactionsService;
use PostFinanceCheckout\Sdk\Test\Constants;
use PostFinanceCheckout\Sdk\Test\TestUtils;

class RefundTest extends TestCase
{
    private static ?RefundsService $refundService = null;
    private static ?TransactionsService $transactionService = null;

    public static function setUpBeforeClass(): void
    {
        $configuration = Constants::getConfigurationInstance();
        self::$refundService = new RefundsService($configuration);
        self::$transactionService = new TransactionsService($configuration);
    }


    /**
     * Refund of fulfilled transaction should be created successfully.
     */
    public function testRefundOfCompletedTransactionShouldWork(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processedTransaction = self::$transactionService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $transactionCompletion = self::$transactionService->postPaymentTransactionsIdCompleteOnline(
            
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $transactionCompletion->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $readTransaction = self::$transactionService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::FULFILL,
            $readTransaction->getState(),
            "Transaction state must be FULFILL"
        );

        $refundCreate = $this->getRefundCreate($transaction);
        $refund = self::$refundService->postPaymentRefunds(
            Constants::$spaceId,
            $refundCreate
        );

        $this->assertEquals(
            RefundState::SUCCESSFUL,
            $refund->getState(),
            "Refund state must be SUCCESSFUL"
        );
    }

    /**
     * Refund read should return valid data.
     */
    public function testReadShouldReturnRefundData(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processedTransaction = self::$transactionService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $transactionCompletion = self::$transactionService->postPaymentTransactionsIdCompleteOnline(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $transactionCompletion->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $refundCreate = $this->getRefundCreate($transaction);
        $refund = self::$refundService->postPaymentRefunds(
            Constants::$spaceId,
            $refundCreate
        );

        $this->assertEquals(
            RefundState::SUCCESSFUL,
            $refund->getState(),
            "Refund state must be SUCCESSFUL"
        );

        $readRefund = self::$refundService->getPaymentRefundsId(
            $refund->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            $refund->getId(),
            $readRefund->getId(),
            "Refund IDs should match"
        );
    }

    private function getRefundCreate(Transaction $transaction): RefundCreate
    {
        return (new RefundCreate())
            ->setTransaction($transaction->getId())
            ->setType(RefundType::MERCHANT_INITIATED_ONLINE)
            ->setExternalId(uniqid('', false))
            ->setAmount(29.95);
    }

    private function create($transactionCreate): Transaction
    {
        return self::$transactionService->postPaymentTransactions(
            Constants::$spaceId,
            $transactionCreate
        );
    }
}
