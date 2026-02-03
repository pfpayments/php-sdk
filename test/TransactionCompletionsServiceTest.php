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
use PostFinanceCheckout\Sdk\Model\Transaction;
use PostFinanceCheckout\Sdk\Model\TransactionCreate;
use PostFinanceCheckout\Sdk\Model\TransactionState;
use PostFinanceCheckout\Sdk\Service\TransactionsService;
use PostFinanceCheckout\Sdk\Service\TransactionCompletionsService;
use PostFinanceCheckout\Sdk\Test\TestUtils;
use PostFinanceCheckout\Sdk\Test\Constants;

class TransactionCompletionsServiceTest extends TestCase
{
    private static TransactionsService $transactionsService;
    private static TransactionCompletionsService $transactionCompletionsService;

    public static function setUpBeforeClass(): void
    {
        $configuration = Constants::getConfigurationInstance();
        self::$transactionsService = new TransactionsService($configuration);
        self::$transactionCompletionsService = new TransactionCompletionsService($configuration);
    }


    /**
     * Transaction completion read should return valid data.
     * IDs of transaction linked to TransactionCompletion and initial transaction should match.
     */
    public function testReadShouldReturnCompletedTransactionData(): void
    {
        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transaction = $this->create($transactionCreate);

        $processedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $this->assertEquals(
            TransactionState::FULFILL,
            $processedTransaction->getState(),
            'State must be FULFILL'
        );

        $transactionCompletion = self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $transaction->getId(),
            Constants::$spaceId
        );

        $readTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            $transactionCompletion->getLinkedTransaction(),
            $readTransaction->getId(),
            'Transaction IDs must match'
        );
    }

    private function create(TransactionCreate $transactionCreate): Transaction
    {
        return self::$transactionsService->postPaymentTransactions(Constants::$spaceId, $transactionCreate);
    }
}
