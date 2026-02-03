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
use PostFinanceCheckout\Sdk\Model\SortingOrder;
use PostFinanceCheckout\Sdk\Service\TransactionsService;
use PostFinanceCheckout\Sdk\Test\TestUtils;
use PostFinanceCheckout\Sdk\Test\Constants;
use PostFinanceCheckout\Sdk\ApiException;

class QueryingTest extends TestCase
{
    private static $transactionService;
    private static $transaction1;
    private static $transaction2;

    public static function setUpBeforeClass(): void
    {
        $configuration = Constants::getConfigurationInstance();
        self::$transactionService = new TransactionsService($configuration);

        $transactionCreate = TestUtils::getTransactionCreatePayload();
        $transactionBase = self::$transactionService->postPaymentTransactions(Constants::$spaceId, $transactionCreate);
        $authorizedTransaction = self::$transactionService->postPaymentTransactionsIdProcessCardDetails($transactionBase->getId(), Constants::$spaceId, Constants::getMockCardData());
        self::$transaction1 = self::$transactionService->getPaymentTransactionsId($authorizedTransaction->getId(), Constants::$spaceId);

        $transactionCreate2 = TestUtils::getTransactionCreatePayload();
        $transactionCreate2->setCurrency("USD");
        $transactionCreate2->setMerchantReference("Transaction for querying test");
        self::$transaction2 = self::$transactionService->postPaymentTransactions(Constants::$spaceId, $transactionCreate2);
    }


    /**
     * Transaction search with limit parameter set to 2 items.
     */
    public function testSearchWithLimitShouldReturnCorrectAmountOfItems()
    {
        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 2, 0, '', '');
        $this->assertCount(2, $response->getData(), "Response should contain 2 items");
    }

    /**
     * Transaction search with offset parameter. Search is made with query which selects only 2 items
     * and offset parameter is set to 1. Response should contain only one item which has higher id
     * number.
     */
    public function testSearchWithOffsetShouldReturnCorrectResponse()
    {
        $this->assertNotNull(self::$transaction1);
        $this->assertNotNull(self::$transaction2);

        $id1 = self::$transaction1->getId();
        $id2 = self::$transaction2->getId();
        $query = "id:$id1 OR id:$id2";
        $higherId = max($id1, $id2);

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 2, 1, "id:ASC", $query);
        $this->assertEquals($higherId, $response->getData()[0]->getId(), "Offset should return higher ID");
    }

    /**
     * Transaction search using the 'before' parameter. Ensures that search returns transactions with
     * IDs less than the given upperBoundTransactionId. The response should contain transaction with
     * the lower ID (lowerBoundTransactionId), assuming it precedes the upperBoundTransactionId.
     */
    public function testSearchWithBeforeParameterShouldReturnCorrectResponses()
    {
        $this->assertNotNull(self::$transaction1);
        $this->assertNotNull(self::$transaction2);

        $upperId = max(self::$transaction1->getId(), self::$transaction2->getId());
        $lowerId = min(self::$transaction1->getId(), self::$transaction2->getId());

        $response = self::$transactionService->getPaymentTransactions(Constants::$spaceId, null, $upperId, [], 10, SortingOrder::ASC);
        $ids = array_map(fn($tx) => $tx->getId(), $response->getData());

        $this->assertContains($lowerId, $ids, "Response should contain the lower ID");
    }

    /**
     * Transaction search made with query. Response should contain 2 items.
     */
    public function testFetchWithSearchQueryShouldReturnListWithValidItems()
    {
        $id1 = self::$transaction1->getId();
        $id2 = self::$transaction2->getId();
        $query = "id:$id1 OR id:$id2";

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 4, 0, "id:ASC", $query);
        $this->assertCount(2, $response->getData(), "Should return 2 items");
    }

    /**
     * Transaction search made with query which contains quotes. Response should contain 1 item.
     */
    public function testFetchWithSearchQueryWithQuotesShouldReturnListWithValidItems()
    {
        $this->assertNotNull(self::$transaction1, "First transaction should be present for this test");
        $this->assertNotNull(self::$transaction2, "Second transaction should be present for this test");

        $query = 'merchantReference:"Transaction for querying test" AND id:' . self::$transaction2->getId();

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 4, 0, "id:ASC", $query);

        $this->assertNotNull($response, "Response should be present");
        $this->assertNotNull($response->getData());
        $this->assertNotEquals(0, count($response->getData()), "Response should contain more than 0 items");
        $this->assertCount(1, $response->getData(), "Response should contain 1 item");
    }

    /**
     * Transaction search made with query which has isNull constraint. Response should contain 1 item.
     */
    public function testFetchWithQueryWithIsNullConstraintShouldReturnListWithValidItem()
    {
        $this->assertNotNull(self::$transaction1, "First transaction should be present for this test");

        $query = 'id:' . self::$transaction2->getId() . ' AND paymentConnectorConfiguration:*';

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 4, 0, "id:ASC", $query);

        $this->assertNotNull($response, "Response should be present");
        $this->assertNotNull($response->getData());
        $this->assertCount(1, $response->getData(), "Response should contain only 1 item");
    }

    /**
     * Transaction search made with query which has grouping. Response should contain 1 item.
     */
    public function testFetchWithQueryWithGroupingShouldReturnListWithValidItems()
    {
        $id = self::$transaction1->getId();
        $query = "id:$id AND (currency:EUR OR currency:CHF)";

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 4, 0, "id:ASC", $query);
        $this->assertCount(1, $response->getData(), "Should return 1 item");
    }

    /**
     * Transaction search made with query which has range clause. Response should contain transaction
     * with specific id.
     */
    public function testFetchWithQueryWithRangeShouldReturnListWithValidItems()
    {
        $id = self::$transaction1->getId();
        $query = "id:>" . ($id - 2) . " id:<=" . ($id + 2);

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 8, 0, "id:ASC", $query);
        $ids = array_map(fn($tx) => $tx->getId(), $response->getData());

        $this->assertContains($id, $ids, "Should find transaction by ID range");
    }

    /**
     * Transaction search made with query with contains clause. Response should contain more than 0 items.
     */
    public function testFetchWithQueryWithContainsClauseShouldReturnListWithValidItems()
    {
        $this->assertNotNull(self::$transaction2, "Second transaction should be present for this test");

        $query = 'merchantReference:~querying';

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 2, 0, "id:ASC", $query);

        $this->assertNotNull($response, "Response should be present");
        $this->assertNotNull($response->getData());
        $this->assertGreaterThan(0, sizeOf($response->getData()), "Response should contain more than 0 items");
    }

    /**
     * Transaction search made with query which includes a negation. Response should not contain transaction with specific ID.
     */
    public function testFetchWithQueryWithNegationShouldReturnListWithValidItems()
    {
        $this->assertNotNull(self::$transaction1, "First transaction should be present for this test");

        $id = self::$transaction1->getId();
        $query = 'id:>' . ($id - 2) . ' id:<=' . ($id + 2) . ' AND -id:' . $id;

        $response = self::$transactionService->getPaymentTransactionsSearch(Constants::$spaceId, [], 8, 0, "id:ASC", $query);

        $this->assertNotNull($response, "Response should be present");
        $this->assertNotNull($response->getData());

        $ids = array_map(fn($tx) => $tx->getId(), $response->getData());
        $this->assertNotContains($id, $ids, "Transaction with excluded ID should not be in result");
    }

    /**
     * Transaction search made with order clause. Items in response should be in descending order.
     */
    public function testSearchWithDescSortingShouldReturnSortedResponse()
    {
        $this->assertNotNull(self::$transaction1, "First transaction should be present for this test");
        $this->assertNotNull(self::$transaction2, "Second transaction should be present for this test");

        $response = self::$transactionService->getPaymentTransactionsSearch(
            Constants::$spaceId, [], 4, 0, "id:DESC", ""
        );

        $data = $response->getData();
        $this->assertNotNull($data, "Response data should not be null");
        $this->assertNotEmpty($data, "Response data should not be empty");

        $firstId = $data[0]->getId();
        $lastId = $data[count($data) - 1]->getId();

        $this->assertNotNull($firstId, "First transaction ID should not be null");
        $this->assertNotNull($lastId, "Last transaction ID should not be null");

        $difference = $firstId - $lastId;

        $this->assertGreaterThan(0, $difference, "Response should be sorted descending. First ID should be greater than last ID.");
    }

    /**
     * Gets transaction with no expand parameters. Checks if response does not contain any data which
     * should be present only when expand used. Example: group id should be present, but group state
     * should be null.
     */
    public function testFetchWithNoExpandingShouldReturnCollapsedResponse()
    {
        $response = self::$transactionService->getPaymentTransactionsId(self::$transaction1->getId(), Constants::$spaceId, []);
        $this->assertNotNull($response->getGroup(), "Group always should be present");
        $this->assertNotNull($response->getGroup()->getId(), "Id always should be present");
        $this->assertNull($response->getGroup()->getState(), "Group state should be null when response collapsed");
        $this->assertNull($response->getGroup()->getVersion(), "Group version should be null when response collapsed");
    }

    /**
     * Gets transaction with expand parameters. Checks if response contains data which should be
     * present when expand parameter is enabled. Example: group id and group state, version
     */
    public function testFetchWithExpandingShouldReturnExpandedResponse()
    {
        $expand = ["group", "paymentConnectorConfiguration"];
        $response = self::$transactionService->getPaymentTransactionsId(self::$transaction1->getId(), Constants::$spaceId, $expand);

        $this->assertNotNull($response->getGroup(), "Group always should be present");
        $this->assertNotNull($response->getGroup()->getId(), "Group id always should be present");
        $this->assertNotNull($response->getGroup()->getState(), "Group state should be present when response expanded");
        $this->assertNotNull($response->getPaymentConnectorConfiguration());
        $this->assertNotNull($response->getPaymentConnectorConfiguration()->getProcessorConfiguration(), "Both items in expand set should be expanded");
    }

    /**
     * Gets transaction with nested expand parameter. Checks if response contains data related to
     * parent item and to child item. Example: paymentConnectorConfiguration - parent item and
     * processorConfiguration - child item.
     */
    public function testFetchWithNestedExpandingShouldReturnExpandedResponse()
    {
        $expand = ["paymentConnectorConfiguration.processorConfiguration"];
        $response = self::$transactionService->getPaymentTransactionsId(self::$transaction1->getId(), Constants::$spaceId, $expand);

        $this->assertNotNull(
            $response->getPaymentConnectorConfiguration()->getProcessorConfiguration()->getLinkedSpaceId(),
            "Items in nested response should be present"
        );
    }

    /**
     * Transaction search with single quote sign in query parameter.
     */
    public function testSearchWithQuoteSignShouldReturnCorrectResponse()
    {
        $response = self::$transactionService->getPaymentTransactionsSearch(
            Constants::$spaceId, [], 1, 0, '', "completedOn:<'2026-01-15'"
        );

        $this->assertNotNull($response, "Response should not be null");

        $this->assertNotEquals(
            0,
            count($response->getData()),
            "Response list should not be empty"
        );
    }
}
