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

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use PostFinanceCheckout\Sdk\Model\TransactionPending;
use PostFinanceCheckout\Sdk\Model\LineItem;
use PostFinanceCheckout\Sdk\Model\LineItemType;
use PostFinanceCheckout\Sdk\Model\TokenizationMode;
use PostFinanceCheckout\Sdk\Model\CustomersPresence;
use PostFinanceCheckout\Sdk\Model\TransactionCompletionState;
use PostFinanceCheckout\Sdk\Model\TransactionCompletionBehavior;
use PostFinanceCheckout\Sdk\Model\TransactionVoidState;
use PostFinanceCheckout\Sdk\Model\TokenCreate;
use PostFinanceCheckout\Sdk\Model\TerminalReceiptFormat;
use PostFinanceCheckout\Sdk\Model\TokenizedCardRequest;
use PostFinanceCheckout\Sdk\Model\TokenizedCardDataCreate;
use PostFinanceCheckout\Sdk\Model\CreationEntityState;
use PostFinanceCheckout\Sdk\Model\ChargeState;
use PostFinanceCheckout\Sdk\Model\TokenUpdate;
use PostFinanceCheckout\Sdk\Model\TransactionCompletionDetails;
use PostFinanceCheckout\Sdk\Model\Transaction;
use PostFinanceCheckout\Sdk\Model\TransactionState;
use PostFinanceCheckout\Sdk\Service\TransactionsService;
use PostFinanceCheckout\Sdk\Service\TokensService;
use PostFinanceCheckout\Sdk\ApiException;
use PostFinanceCheckout\Sdk\Test\Constants;
use PostFinanceCheckout\Sdk\Test\TestUtils;

/** API tests for Transactions Service */
class TransactionsServiceTest extends TestCase
{
    private static ?TransactionsService $transactionsService = null;
    private static ?TokensService $tokensService = null;

    private static string $integrationMode = "payment_page";

    public static function setUpBeforeClass(): void
    {
        $client = new Client();
        $configuration = Constants::getConfigurationInstance();
        self::$transactionsService = new TransactionsService(
            config: $configuration,
            client: $client
        );
        self::$tokensService = new TokensService(
            config: $configuration,
            client: $client
        );
    }

    /**
     * Creates a new transaction.
     *
     * <p>Verifies that: Transaction state is PENDING
     */
    public function testCreateAndFindPendingTransaction(): void
    {
        $transaction = self::create(TestUtils::getTransactionCreatePayload());

        $found = $this::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this::assertEquals(
            TransactionState::PENDING,
            $found->getState(),
            "Transaction state must be PENDING"
        );

        $this->assertEquals(
            $transaction->getMerchantReference(),
            $found->getMerchantReference(),
            "Merchant reference should match."
        );
    }

    /**
     * Confirms a pending transaction.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Transaction state is CONFIRMED
     *   <li>Transaction entity version is correctly incremented
     *   <li>Merchant reference is correctly updated
     * </ul>
     */
    public function testConfirmShouldMakeTransactionConfirmed(): void
    {
        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transactionCreate->setMerchantReference("Test Initial Confirm");
        $transaction = $this->create($transactionCreate);

        $transactionPending = (new TransactionPending())
            ->setVersion(2)
            ->setMerchantReference("Test Confirm");

        $confirmedTransaction = $this::$transactionsService->postPaymentTransactionsIdConfirm(
            $transaction->getId(),
            Constants::$spaceId,
            $transactionPending
        );

        $this::assertEquals(
            TransactionState::CONFIRMED,
            $confirmedTransaction->getState(),
            "Transaction state must be CONFIRMED"
        );

        $this->assertEquals(
            $transactionPending->getMerchantReference(),
            $confirmedTransaction->getMerchantReference(),
            "Merchant reference should match"
        );
    }

    /**
     * Processes a deferred transaction.
     *
     * <p>Verifies that: Transaction state is AUTHORIZED
     */
    public function testProcessDeferredTransactionShouldMakeTransactionAuthorized()
    {
        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transactionCreate->setTokenizationMode(TokenizationMode::FORCE_CREATION);
        $transactionCreate->setCustomersPresence(CustomersPresence::NOT_PRESENT);
        $transactionCreate->setCompletionBehavior(TransactionCompletionBehavior::COMPLETE_DEFERRED);

        $transaction = $this->create($transactionCreate);

        $processed = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $this->assertEquals(
            TransactionState::AUTHORIZED,
            $processed->getState(),
            "Transaction state must be AUTHORIZED"
        );
    }

    /**
     * Processes a transaction via charge flow.
     *
     * <p>Verifies that: Transaction state is PROCESSING
     * <ul>
     *   <li>
     * </ul>
     */
    public function testProcessViaChargeFlowShouldMakeTransactionProcessing()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processingTransaction = self::$transactionsService->postPaymentTransactionsIdChargeFlowApply(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::PROCESSING,
            $processingTransaction->getState(),
            "Transaction state must be PROCESSING"
        );
    }

    /**
     * Processes and cancels a transaction via charge flow.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Initially, transaction state is PROCESSING
     *   <li>After cancellation, transaction state is FAILED
     * </ul>
     */
    public function testCancelChargeFlowShouldMakeTransactionFailed()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processingTransaction = self::$transactionsService->postPaymentTransactionsIdChargeFlowApply(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::PROCESSING,
            $processingTransaction->getState(),
            "Transaction state must be PROCESSING"
        );

        $failedTransaction = self::$transactionsService->postPaymentTransactionsIdChargeFlowCancel(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::FAILED,
            $failedTransaction->getState(),
            "Transaction state must be FAILED"
        );
    }

    /**
     * Processes a transaction and retrieves payment page URL.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Retrieved URL contains space ID
     *   <li>Retrieved URL contains transaction ID
     * </ul>
     */
    public function testFetchPaymentPageUrlShouldReturnValidUrl()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processingTransaction = self::$transactionsService->postPaymentTransactionsIdChargeFlowApply(
            $transaction->getId(),
            Constants::$spaceId
        );

        $url = self::$transactionsService->getPaymentTransactionsIdPaymentPageUrl(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertStringContainsString('/s/' . Constants::$spaceId, $url, "Space id should be present in url");
        $this->assertStringContainsString('securityToken=', $url, "Security token should be present in url");
        $this->assertStringContainsString((string) $processingTransaction->getId(), $url, "Transaction id should be present in url");
    }

    /**
     * Processes a transaction via charge flow and retrieves payment page URL.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Transaction state is PROCESSING
     *   <li>Retrieved URL contains space ID
     *   <li>Retrieved URL contains transaction ID
     * </ul>
     */
    public function testFetchChargeFlowUrlShouldReturnValidUrl()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processingTransaction = self::$transactionsService->postPaymentTransactionsIdChargeFlowApply(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::PROCESSING,
            $processingTransaction->getState(),
            "Transaction state must be PROCESSING"
        );

        $url = self::$transactionsService->getPaymentTransactionsIdChargeFlowPaymentPageUrl(
            $processingTransaction->getId(),
            Constants::$spaceId
        );

        $this->assertStringContainsString((string) Constants::$spaceId, $url, "Url must contain space id");
        $this->assertStringContainsString((string) $processingTransaction->getId(), $url, "Url must contain transaction id");
        $this->assertStringContainsString('securityToken=', $url, "Url must contain security token");
    }

    /**
     * Authorizes and completes a transaction online using card details.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Transaction completion state is SUCCESSFUL
     *   <li>Transaction state is FULFILL
     * </ul>
     */
    public function testCompleteOnlineShouldMakeTransactionCompletionStateSuccessful()
    {
        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transactionCreate->setTokenizationMode(TokenizationMode::FORCE_CREATION);
        $transactionCreate->setCustomersPresence(CustomersPresence::NOT_PRESENT);
        $transactionCreate->setCompletionBehavior(TransactionCompletionBehavior::COMPLETE_IMMEDIATELY);

        $transaction = $this->create($transactionCreate);

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $processedTransaction = self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $processedTransaction->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $completedTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::FULFILL,
            $completedTransaction->getState(),
            "Transaction state must be FULFILLED"
        );
    }

    /**
     * Authorizes and completes a transaction online partially using card details.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Transaction completion state is SUCCESSFUL
     *   <li>Transaction state is FULFILL
     * </ul>
     */
    public function testCompleteOnlinePartiallyShouldMakeTransactionCompletionStateSuccessful()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $tcd = new TransactionCompletionDetails();
        $tcd->setExternalId(uniqid('', false));

        $processedTransaction = self::$transactionsService->postPaymentTransactionsIdCompletePartiallyOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId,
            $tcd
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $processedTransaction->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $completedTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::FULFILL,
            $completedTransaction->getState(),
            "Transaction state must be FULFILLED"
        );
    }



    /**
     * Authorizes and voids a transaction online.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Transaction void state is SUCCESSFUL
     *   <li>Transaction state is VOIDED
     * </ul>
     */
    public function testVoidTransactionOnlineShouldReturnVoidedTransaction()
    {
        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transactionCreate->setTokenizationMode(TokenizationMode::FORCE_CREATION);
        $transactionCreate->setCustomersPresence(CustomersPresence::NOT_PRESENT);
        $transactionCreate->setCompletionBehavior(TransactionCompletionBehavior::COMPLETE_DEFERRED);

        $transaction = $this->create($transactionCreate);

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $this->assertEquals(
            TransactionState::AUTHORIZED,
            $authorizedTransaction->getState(),
            "Transaction state should be AUTHORIZED"
        );

        $expand = ['transaction'];

        $transactionVoid = self::$transactionsService->postPaymentTransactionsIdVoidOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId,
            $expand
        );

        $this->assertEquals(
            TransactionVoidState::SUCCESSFUL,
            $transactionVoid->getState(),
            "Transaction void state should be SUCCESSFUL"
        );

        $this->assertNotNull($transactionVoid->getTransaction());

        $this->assertEquals(
            TransactionState::VOIDED,
            $transactionVoid->getTransaction()->getState(),
            "Transaction state should be VOIDED"
        );
    }


    /**
     * Creates, authorizes and completes a transaction.
     *
     * <p>Verifies that: It's possible to create a transaction token for the fulfilled transaction
     */
    public function testCheckIfPossibleToCreateTokenForFulfilledTransaction()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $fulFilledTransactionCompletion = self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId
        );

        $fulFilledTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::FULFILL,
            $fulFilledTransaction->getState(),
            "Transaction state must be FULFILL"
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $fulFilledTransactionCompletion->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $this->assertTrue(
            self::$transactionsService->getPaymentTransactionsIdCheckTokenCreationPossible(
                $fulFilledTransaction->getId(),
                Constants::$spaceId
            ),
            "Should be possible to create token for successful transaction"
        );
    }

    /**
     * Creates, authorizes and voids a transaction.
     *
     * <p>Verifies that: It's possible to create a transaction token for the voided transaction
     */
    public function testCheckIfPossibleToCreateTokenForVoidedTransaction()
    {
        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transactionCreate->setTokenizationMode(TokenizationMode::FORCE_CREATION);
        $transactionCreate->setCustomersPresence(CustomersPresence::NOT_PRESENT);
        $transactionCreate->setCompletionBehavior(TransactionCompletionBehavior::COMPLETE_DEFERRED);

        $transaction = $this->create($transactionCreate);

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData(),

        );

        $this->assertEquals(
            TransactionState::AUTHORIZED,
            $authorizedTransaction->getState(),
            "Transaction state should be AUTHORIZED"
        );

        $transactionVoid = self::$transactionsService->postPaymentTransactionsIdVoidOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId,

        );

        $voidedTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId,

        );

        $this->assertEquals(
            TransactionVoidState::SUCCESSFUL,
            $transactionVoid->getState(),
            "Transaction void state should be SUCCESSFUL"
        );

        $this->assertEquals(
            TransactionState::VOIDED,
            $voidedTransaction->getState(),
            "Transaction state should be VOIDED"
        );

        $this->assertTrue(
            self::$transactionsService->getPaymentTransactionsIdCheckTokenCreationPossible(
                $voidedTransaction->getId(),
                Constants::$spaceId
            ),
            "Should be not possible to create token for voided transaction"
        );
    }

    /**
     * Creates transaction token for a transaction.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>Token contains space ID
     *   <li>Token contains transaction ID
     * </ul>
     */
    public function testCreateTransactionCredentialsShouldCreateTransactionToken()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $credentials = $this->getCredentials($transaction->getId());

        $this->assertTrue(
            str_starts_with($credentials, (string) Constants::$spaceId),
            "Transaction credentials token should have valid format"
        );

        $this->assertNotNull($transaction->getId());

        $this->assertStringContainsString(
            (string) $transaction->getId(),
            $credentials,
            "Transaction credentials token should contain transaction id"
        );
    }

    /**
     * Gets IFrame payment URL for transaction.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>URL contains space ID
     *   <li>URL contains transaction ID
     * </ul>
     */
    public function testFetchIFrameUrlShouldReturnValidUrl()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $iFrameUrl = self::$transactionsService->getPaymentTransactionsIdIframeJavascriptUrl(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertStringContainsString(
            (string) Constants::$spaceId,
            $iFrameUrl,
            "IFrame JavaScript URL should contain space id"
        );

        $this->assertStringContainsString(
            (string) $transaction->getId(),
            $iFrameUrl,
            "IFrame JavaScript URL should contain transaction id"
        );
    }

    /**
     * Gets Lightbox payment URL for transaction.
     *
     * <p>Verifies that:
     * <ul>
     *   <li>URL contains space ID
     *   <li>URL contains transaction ID
     * </ul>
     */
    public function testFetchLightboxUrlShouldReturnValidUrl()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $lightboxJavascriptUrl = self::$transactionsService->getPaymentTransactionsIdLightboxJavascriptUrl(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertStringContainsString(
            (string) Constants::$spaceId,
            $lightboxJavascriptUrl,
            "Lightbox URL should contain space id"
        );

        $this->assertStringContainsString(
            (string) $transaction->getId(),
            $lightboxJavascriptUrl,
            "Lightbox URL should contain transaction id"
        );
    }

    /**
     * Creates, authorizes, completes transaction and gets invoice file.
     *
     * <ul>
     *   <li>Creates, authorizes and completes transaction
     *   <li>Gets transaction invoice file
     *   <li>Verifies that:
     *       <ul>
     *         <li>File title contains "invoice"
     *         <li>File mime type is PDF
     *       </ul>
     * </ul>
     */
    public function testFetchInvoiceShouldReturnPdfFile()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $fulFilledTransactionCompletion = self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId
        );

        $fulFilledTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $invoice = self::$transactionsService->getPaymentTransactionsIdInvoiceDocument(
            $fulFilledTransaction->getId(),
            Constants::$spaceId
        );

        $this->assertNotNull($invoice->getTitle());
        $this->assertStringContainsStringIgnoringCase(
            'invoice',
            $invoice->getTitle(),
            "Invoice title should be present"
        );

        $this->assertNotNull($invoice->getMimeType());
        $this->assertStringContainsStringIgnoringCase(
            'pdf',
            $invoice->getMimeType(),
            "Invoice mimetype should be pdf"
        );
    }

    /**
     * Creates, authorizes, completes transaction and gets packing slip.
     *
     * <ul>
     *   <li>Creates, authorizes and completes transaction
     *   <li>Gets transaction packing slip
     *   <li>Verifies that:
     *       <ul>
     *         <li>File title contains "packing slip"
     *         <li>File mime type is PDF
     *       </ul>
     * </ul>
     */
    public function testFetchPackageSlipShouldReturnPdfFile()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $authorizedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $authorizedTransaction->getId(),
            Constants::$spaceId
        );

        $fulfilledTransaction = self::$transactionsService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $packingSlip = self::$transactionsService->getPaymentTransactionsIdPackingSlipDocument(
            $fulfilledTransaction->getId(),
            Constants::$spaceId
        );

        $this->assertNotNull($packingSlip->getTitle());
        $this->assertStringContainsStringIgnoringCase('packing slip', $packingSlip->getTitle(), "Packing slip title should be present");

        $this->assertNotNull($packingSlip->getMimeType());
        $this->assertStringContainsStringIgnoringCase('pdf', $packingSlip->getMimeType(), "Packing slip mimetype should be pdf");
    }

    /**
     * Creates transaction and gets payment methods configuration.
     *
     * <ul>
     *   <li>Creates transaction
     *   <li>Gets payment methods configuration
     *   <li>Verifies that: Payment methods are present
     * </ul>
     */
    public function testFetchPaymentMethodsByIdShouldReturnAvailablePaymentMethods()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $methods = self::$transactionsService->getPaymentTransactionsIdPaymentMethodConfigurations(
            $transaction->getId(),
            self::$integrationMode,
            Constants::$spaceId
        );

        $this->assertNotNull($methods->getData(), "The payment method list should be present");
        $this->assertNotEmpty($methods->getData(), "Payment methods should be configured for a given transaction in test space");
    }

    /**
     * Creates transaction and finds it by credentials.
     *
     * <ul>
     *   <li>Creates transaction and gets its credentials
     *   <li>Finds transaction by credentials
     *   <li>Verifies that: Transaction is present
     * </ul>
     */
    public function testFetchTransactionWithCredentialsShouldReturnTransaction()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $credentials = self::$transactionsService->getPaymentTransactionsIdCredentials(
            $transaction->getId(),
            Constants::$spaceId
        );

        $retrieved = self::$transactionsService->getPaymentTransactionsByCredentialsCredentials(
            $credentials,
            Constants::$spaceId
        );

        $this->assertNotNull($retrieved, "Transaction must be present");
    }

    /**
     * Creates transaction and gets payment methods configuration by credentials.
     *
     * <ul>
     *   <li>Creates transaction and gets its credentials
     *   <li>Gets payment methods configuration by credentials
     *   <li>Verifies that: Payment methods are present
     * </ul>
     */
    public function testFetchPaymentMethodsWithCredentialsShouldReturnAvailablePaymentMethods()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $credentials = $this->getCredentials($transaction->getId());

        $methods = self::$transactionsService
            ->getPaymentTransactionsByCredentialsCredentialsPaymentMethodConfigurations(
                $credentials,
                self::$integrationMode,
                Constants::$spaceId
            );

        $this->assertNotNull($methods->getData(), "The payment method list should be present.");
        $this->assertNotEmpty($methods->getData(), "Payment methods should be configured for a given transaction in test space");
    }

    /**
     * Creates and exports a transaction.
     *
     * <ul>
     *   <li>Creates transaction, exports it
     *   <li>Verifies that: Export file exists
     * </ul>
     */
    public function testExportTransactionsShouldReturnFile()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $this->assertNotNull($transaction->getId());

        $fields = ['id'];

        $export = self::$transactionsService->getPaymentTransactionsExport(
            Constants::$spaceId,
            $fields,
            1,
            0,
            'id:ASC',
            'id:' . $transaction->getId()
        );

        $this->assertTrue(file_exists($export->getPathname()), "Export file should exist");
    }

    /**
     * Gets transaction by invalid credentials.
     *
     * <ul>
     *   <li>Attempts to retrieve a transaction using invalid credentials
     *   <li>Verifies that: Operation fails as expected
     * </ul>
     */
    public function testFetchWithCredentialsWithBadCredentialsShouldFail()
    {
        $this->expectException(ApiException::class, "Bad token should produce error response");

        self::$transactionsService->getPaymentTransactionsByCredentialsCredentials(
            'bad_credentials',
            Constants::$spaceId
        );
    }

    /**
     * Creates and updates a transaction.
     *
     * <ul>
     *   <li>Creates a new transaction
     *   <li>Updates it with new data
     *   <li>Verifies that:
     *       <ul>
     *         <li>Update was successful
     *         <li>Version was incremented correctly
     *       </ul>
     * </ul>
     */
    public function testUpdateShouldChangeTransactionData()
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $update = new TransactionPending();
        $update->setLanguage('en-GB');
        $update->setVersion(2);

        $updated = self::$transactionsService->patchPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId,
            $update
        );

        $this->assertEquals('en-GB', $updated->getLanguage());
        $this->assertEquals($transaction->getMerchantReference(), $updated->getMerchantReference(), "Merchant reference should match.");
        $this->assertEquals(2, $updated->getVersion(), "Version should match");
    }

    /**
     * Tests one-click token flow: creation, update, usage.
     *
     * <ul>
     *   <li>Creates token
     *   <li>Updates token settings (enabling one click payment)
     *   <li>Creates transaction with linked token
     *   <li>Processes and completes transaction
     *   <li>Creates new transaction and completes it using token
     *   <li>Deletes the token and ensures it's state is deleted
     * </ul>
     */
    public function testProcessOneClickTokenAndRedirectWithCredentialsShouldReturnPaymentUrl()
    {
        $tokenCreate = new TokenCreate();
        $tokenCreate->setState(CreationEntityState::ACTIVE);
        $tokenCreate->setTokenReference('testtoken');
        $tokenCreate->setCustomerId((string) Constants::$testCustomerId);
        $tokenCreate->setExternalId(uniqid('', false));
        $tokenCreate->setCustomerEmailAddress('test@domain.com');

        $token = self::$tokensService->postPaymentTokens(
            Constants::$spaceId,
            $tokenCreate
        );

        $this->assertNotNull($token->getVersion());

        $tokenUpdate = new TokenUpdate();
        $tokenUpdate->setVersion($token->getVersion());
        $tokenUpdate->setEnabledForOneClickPayment(true);

        $updatedToken = self::$tokensService->patchPaymentTokensId(
            $token->getId(),
            Constants::$spaceId,
            $tokenUpdate
        );

        $transaction1 = self::$tokensService->postPaymentTokensIdCreateTransactionForTokenUpdate(
            $token->getId(),
            Constants::$spaceId
        );

        $lineItem = (new LineItem())
            ->setName("Red T-Shirt")
            ->setUniqueId("5412")
            ->setType(LineItemType::PRODUCT)
            ->setQuantity(1)
            ->setAmountIncludingTax(29.95)
            ->setSku("red-t-shirt-789");

        $transaction1Pending = (new TransactionPending())
        ->setLineItems([$lineItem])
        ->setVersion(2)
        ->setCurrency("CHF");

        self::$transactionsService->patchPaymentTransactionsId(
            $transaction1->getId(),
            Constants::$spaceId,
            $transaction1Pending
        );

        self::$transactionsService->postPaymentTransactionsIdProcessCardDetails(
            $transaction1->getId(),
            Constants::$spaceId,
            Constants::getMockCardData(),

        );

        self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $transaction1->getId(),
            Constants::$spaceId
        );

        $transactionCreate2 = TestUtils::getTransactionCreatePayload();
        $transactionCreate2->setTokenizationMode(TokenizationMode::FORCE_CREATION_WITH_ONE_CLICK_PAYMENT);
        $transactionCreate2->setCustomersPresence(CustomersPresence::NOT_PRESENT);
        $transactionCreate2->setCompletionBehavior(TransactionCompletionBehavior::COMPLETE_DEFERRED);
        $transactionCreate2->setCustomerId((string) Constants::$testCustomerId);

        $transaction2 = $this->create($transactionCreate2);

        $credentials1 = $this->getCredentials($transaction1->getId());
        $credentials2 = $this->getCredentials($transaction2->getId());

        $paymentUrl2 = self::$transactionsService->postPaymentTransactionsByCredentialsCredentialsOneClickTokensIdProcess(
            $credentials2,
            $updatedToken->getId(),
            Constants::$spaceId
        );

        $this->assertNotEmpty($paymentUrl2, "Payment url should not be empty");
        $this->assertNotNull($paymentUrl2,"Payment url should not be null");

        $readTransaction2 = self::$transactionsService->getPaymentTransactionsId(
            $transaction2->getId(),
            Constants::$spaceId
        );

        $this->assertNotEquals(TransactionState::FAILED, $readTransaction2->getState(), "Transaction state should not be FAILED");
        $this->assertNotEquals(TransactionState::PENDING, $readTransaction2->getState(), "Transaction state should not be PENDING");

        $completedTransaction1 = self::$transactionsService->postPaymentTransactionsIdCompleteOnline(
            $transaction1->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(TransactionCompletionState::SUCCESSFUL, $completedTransaction1->getState(), "State must be SUCCESSFUL");
    }

    /**
     * Processes transaction via token
     *
     * <ul>
     *   <li>Creates token
     *   <li>Creates transaction with linked token
     *   <li>Processes and completes transaction
     *   <li>Creates new transaction and completes it using token
     * </ul>
     */
    public function testProcessTransactionViaTokenShouldProcessTransaction(): void
    {
        $lineItem = (new LineItem())
            ->setName("Red T-Shirt")
            ->setUniqueId("5412")
            ->setType(LineItemType::PRODUCT)
            ->setQuantity(1)
            ->setAmountIncludingTax(29.95)
            ->setSku("red-t-shirt-789");

        $tokenCreate = new TokenCreate();
        $tokenCreate->setState(CreationEntityState::ACTIVE);
        $tokenCreate->setTokenReference("testtoken");
        $tokenCreate->setCustomerId((string) Constants::$testCustomerId);
        $tokenCreate->setExternalId(uniqid('', false));
        $tokenCreate->setCustomerEmailAddress("test@domain.com");

        $token = self::$tokensService->postPaymentTokens(Constants::$spaceId, $tokenCreate);

        $transaction = self::$tokensService->postPaymentTokensIdCreateTransactionForTokenUpdate($token->getId(), Constants::$spaceId);

        $transaction1Pending = (new TransactionPending())
        ->setLineItems([$lineItem])
        ->setVersion(2)
        ->setCurrency("CHF");

        self::$transactionsService->patchPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId,
            $transaction1Pending);

        $processedTransaction = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails($transaction->getId(), Constants::$spaceId, Constants::getMockCardData());

        self::$transactionsService->postPaymentTransactionsIdCompleteOnline($transaction->getId(), Constants::$spaceId);

        $transaction2 = $this->create(TestUtils::getTransactionCreatePayload());

        $pending = new TransactionPending();
        $pending->setToken($token->getId());
        $pending->setVersion($transaction2->getVersion());
        $pending->setCurrency("CHF");
        $pending->setLineItems([$lineItem]);

        $updatedTransaction = self::$transactionsService->patchPaymentTransactionsId($transaction2->getId(), Constants::$spaceId, $pending);

        $charge = self::$transactionsService->postPaymentTransactionsIdProcessWithToken($updatedTransaction->getId(), Constants::$spaceId);

        $this->assertEquals(ChargeState::SUCCESSFUL, $charge->getState(), "Charge state must be SUCCESSFUL");

        $readTransaction = self::$transactionsService->getPaymentTransactionsId($transaction2->getId(), Constants::$spaceId);

        $this->assertEquals($token->getId(), $readTransaction->getToken()->getId(), "Tokens id should match");
        $this->assertEquals(TransactionState::FULFILL, $readTransaction->getState(), "Transaction state must be FULFILLED");
    }

    /**
     * Verifies non-interactive transaction processing.
     *
     * <ul>
     *   <li>Processes a transaction without user interaction
     *   <li>Verifies that:
     *       <ul>
     *         <li>Transaction reaches the AUTHORIZED state
     *       </ul>
     * </ul>
     */
    public function testProcessWithoutUserInteractionShouldProcessTransactionProperly(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processed = self::$transactionsService->postPaymentTransactionsIdProcessWithoutInteraction($transaction->getId(), Constants::$spaceId);

        $this->assertEquals($transaction->getId(), $processed->getId(), "Transaction ids must match");
        $this->assertEquals(TransactionState::PROCESSING, $processed->getState(), "Transaction state should be PROCESSING");
    }

    /**
     * Retrieves tokens by transaction credentials.
     *
     * <ul>
     *   <li>Creates a new transaction
     *   <li>Attempts to retrieve one-click tokens
     *   <li>Verifies that:
     *       <ul>
     *         <li>Response data is present
     *       </ul>
     * </ul>
     */
    public function testFetchOneClickTokenShouldReturnResponseWithoutException(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $credentials = $this->getCredentials($transaction->getId());

        $tokens = self::$transactionsService->getPaymentTransactionsByCredentialsCredentialsOneClickTokens($credentials, Constants::$spaceId);

        $this->assertNotNull($tokens);
        $this->assertNotNull($tokens->getData(), "Token data should not be null");
    }

    /**
     * Processes transaction with 3-D security
     *
     * <ul>
     *   <li>Creates a new transaction
     *   <li>Processes transaction with 3-D security
     *   <li>Verifies that:
     *       <ul>
     *         <li>Returned url contains space id
     *         <li>Returned url contains securityToken
     *         <li>Transaction state is fulfilled
     *       </ul>
     * </ul>
     */
    public function testProcessTransactionWithThreeDSecureShouldFulfillTransaction(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $cardData = new TokenizedCardDataCreate();
        $cardData->setExpiryDate(Constants::getMockCardData()->getCardData()->getExpiryDate());
        $cardData->setPrimaryAccountNumber(Constants::getMockCardData()->getCardData()->getPrimaryAccountNumber());

        $request = new TokenizedCardRequest();
        $request->setCardData($cardData);
        $request->setPaymentMethodConfiguration(Constants::getMockCardData()->getPaymentMethodConfiguration());

        $url = self::$transactionsService->postPaymentTransactionsIdProcessCardDetailsThreed($transaction->getId(), Constants::$spaceId, $request);

        $processed = self::$transactionsService->getPaymentTransactionsId($transaction->getId(), Constants::$spaceId);

        $this->assertNotNull($url, "Url should not be null");
        $this->assertNotEmpty($url, "Url should not be empty");
        $this->assertNotEquals(TransactionState::FAILED, $processed->getState(), "Transaction state should not be FAILED");
        $this->assertNotEquals(TransactionState::PENDING, $processed->getState(), "Transaction state should not be PENDING");
    }

    /**
     * Gets mobile sdk url by credentials
     *
     * <ul>
     *   <li>Creates a new transaction
     *   <li>Gets mobile sdk url
     *   <li>Verifies that:
     *       <ul>
     *         <li>Returned url contains space id
     *         <li>Returned url contains securityToken
     *       </ul>
     * </ul>
     */
    public function testFetchMobileSdkUrlByCredentialsShouldReturnValidUrl(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $credentials = $this->getCredentials($transaction->getId());

        $url = self::$transactionsService->getPaymentTransactionsByCredentialsCredentialsMobileSdkUrl($credentials, Constants::$spaceId);

        $this->assertStringContainsString("/s/" . Constants::$spaceId, $url, "Space id should be present in url");
        $this->assertStringContainsString("securityToken=", $url, "Security token should be present in url");
    }

    /**
     * Gets all terminal receipts for transaction.
     * <li>Verifies that:
     *     <ul>
     *        <li>Receipts list is empty as they were not created
     *     </ul>
     */
    public function testFetchTerminalReceiptsShouldReturnValidList(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        self::$transactionsService->postPaymentTransactionsIdProcessCardDetails($transaction->getId(), Constants::$spaceId, Constants::getMockCardData());
        self::$transactionsService->postPaymentTransactionsIdCompleteOnline($transaction->getId(), Constants::$spaceId);

        $receipts = self::$transactionsService->getPaymentTransactionsIdTerminalReceipts($transaction->getId(), TerminalReceiptFormat::TXT, 200, Constants::$spaceId);

        $this->assertNotNull($receipts, "Response should be present");
        $this->assertCount(0, $receipts->getData(), "Response size should be 0 as no terminal receipts created for this transaction");
    }

    /**
     * Updates charge flow recipient for processing transaction
     * <li>Verifies that:
     *     <ul>
     *        <li>Operation made without exceptions
     *     </ul>
     */
    public function testUpdateChargeFlowRecipientShouldNotThrow(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processingTransaction = self::$transactionsService->postPaymentTransactionsIdChargeFlowApply($transaction->getId(), Constants::$spaceId);

        $this->expectNotToPerformAssertions();
        self::$transactionsService->postPaymentTransactionsIdChargeFlowUpdateRecipient($transaction->getId(), 1453447675844, "test2@domain.com", Constants::$spaceId);
    }

    /**
     * Gets last version of line items list
     *
     * <ul>
     *   <li>Creates a new transaction
     *   <li>Gets line items
     *   <li>Verifies that:
     *       <ul>
     *         <li>Amount is correct
     *         <li>Version is correct
     *         <li>Transaction id is same in transaction and charge
     *       </ul>
     * </ul>
     */
    public function testFetchLineItemsVersionShouldReturnLatest(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $authorized = self::$transactionsService->postPaymentTransactionsIdProcessCardDetails($transaction->getId(), Constants::$spaceId, Constants::getMockCardData());
        self::$transactionsService->postPaymentTransactionsIdCompleteOnline($authorized->getId(), Constants::$spaceId);

        $lineItems = self::$transactionsService->getPaymentTransactionsIdLatestLineItemVersion($transaction->getId(), Constants::$spaceId);

        $this->assertEquals(1, $lineItems->getVersion(), "Line items version should be 1");
        $this->assertEquals(29.95, $lineItems->getAmount(), "Line items amount should be 29.95");
        $this->assertEquals($transaction->getId(), $lineItems->getLinkedTransaction(), "Transaction ids should match");
    }

    private function create($transactionCreate): Transaction
    {
        return self::$transactionsService->postPaymentTransactions(
            Constants::$spaceId,
            $transactionCreate
        );
    }

    private function getCredentials($transactionId): string
    {
        return $this::$transactionsService->getPaymentTransactionsIdCredentials(
            $transactionId,
            Constants::$spaceId
        );
    }
}