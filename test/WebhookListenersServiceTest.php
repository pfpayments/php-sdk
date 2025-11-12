<?php
/**
 * PostFinance Php SDK
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
use PostFinanceCheckout\Sdk\Configuration;
use PostFinanceCheckout\Sdk\Model\CreationEntityState;
use PostFinanceCheckout\Sdk\Model\WebhookListenerCreate;
use PostFinanceCheckout\Sdk\Service\WebhookListenersService;
use PostFinanceCheckout\Sdk\Service\WebhookURLsService;

class WebhookListenersServiceTest extends TestCase
{
    private const WEBHOOK_LISTENER_ENTITY = 1472041829003;
    private const WEBHOOK_LISTENER_NAME = 'PHP Mock UnitTest Webhook Listener';

    private static $configuration;

    private static $webhookURLsService;

    private static $webhookListenersService;

    /**
     * Setup once before any tests in the class
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        // Uses GuzzleHttp\Client
        $client = new Client();

        self::$configuration = Constants::getConfigurationInstance();

        self::$webhookURLsService = new WebhookURLsService(
            client: $client,
            config: self::$configuration);

        self::$webhookListenersService = new WebhookListenersService(
            client: $client,
            config: self::$configuration);
    }

    /**
     * Tearing down API service after all tests in the class.
     */
    public static function tearDownAfterClass(): void
    {
        self::$webhookURLsService = null;
        self::$webhookListenersService = null;
        self::$configuration = null;
        parent::tearDownAfterClass();
    }

    /**
     * Tests that the headers in the response contain headers with SDK information by default.
     */
    public function testSdkHeaders(): void
    {
        $headers = self::$configuration->getDefaultHeaders();
        $this->assertGreaterThanOrEqual(4, count($headers));

        // Check SDK default header values.
        $this->assertEquals($headers['x-meta-sdk-version'], '5.1.0');
        $this->assertEquals($headers['x-meta-sdk-language'], 'php');
        $this->assertEquals($headers['x-meta-sdk-provider'], 'postfinancecheckout');
        $this->assertEquals($headers['x-meta-sdk-language-version'], phpversion());
    }

    /**
     * Test case to create and delete Webhook Listener
     */
    public function testCreateAndDelete(): void
    {
        $webhookURLsSearch = self::$webhookURLsService->getWebhooksURLsSearch(
            space: Constants::$spaceId,
            expand: ['url', 'group'],
            limit: 1,
            order: 'id:DESC',
            query: 'name:\'Webhook Test URL Listener\' AND state:INACTIVE'
        );
        $this->assertEquals(1, count($webhookURLsSearch->getData()),
            'The length of the searched Webhook URLs list should be 1.');
        $this->assertEquals(CreationEntityState::INACTIVE, $webhookURLsSearch->getData()[0]->getState(),
            'Searched Webhook URL\'s State must be \'INACTIVE\'');

        $webhookURLId = $webhookURLsSearch->getData()[0]->getId();
        $webhookURLName = $webhookURLsSearch->getData()[0]->getName();
        $webhookListenerCreated = self::$webhookListenersService->postWebhooksListeners(
            space: Constants::$spaceId,
            webhook_listener_create: $this->createWebhookListener($webhookURLId),
            expand: ['url', 'group'],
        );
        $this->assertEquals(CreationEntityState::ACTIVE, $webhookListenerCreated->getState(),
            'Created Webhook Listener\'s State must be \'ACTIVE\'');
        $this->assertEquals(Constants::$spaceId, $webhookListenerCreated->getLinkedSpaceId(),
            'Created Webhook Listener\'s Space ID must match.');
        $this->assertEquals($this::WEBHOOK_LISTENER_NAME, $webhookListenerCreated->getName(),
            'Created Webhook Listener\'s Name must match.');
        $this->assertEquals($webhookURLId, $webhookListenerCreated->getUrl()->getId(),
            'Created Webhook URL\'s ID must match.');
        $this->assertEquals($webhookURLName, $webhookListenerCreated->getUrl()->getName(),
            'Created Webhook URL\'s Name must match.');

        self::$webhookListenersService->deleteWebhooksListenersId(
            id: $webhookListenerCreated->getId(),
            space: Constants::$spaceId
        );
        $webhookListenerDeleted = self::$webhookListenersService->getWebhooksListenersId(
            id: $webhookListenerCreated->getId(),
            space: Constants::$spaceId
        );
        $this->assertEquals(CreationEntityState::DELETED, $webhookListenerDeleted->getState(),
            'Deleted Webhook Listener\'s State must be \'DELETED\'');
        $this->assertEquals(Constants::$spaceId, $webhookListenerDeleted->getLinkedSpaceId(),
            'Deleted Webhook Listener\'s Space ID must match.');
        $this->assertEquals($this::WEBHOOK_LISTENER_NAME, $webhookListenerDeleted->getName(),
            'Deleted Webhook Listener\'s Name must match.');
    }

    public function createWebhookListener($webhookURLId): WebhookListenerCreate
    {
        return new WebhookListenerCreate([
            'name' => $this::WEBHOOK_LISTENER_NAME,
            'state' => CreationEntityState::ACTIVE,
            'entity' => $this::WEBHOOK_LISTENER_ENTITY,
            'url' => $webhookURLId
        ]);
    }

    /**
     * Test case for search webhook listener custom timeout: 36 seconds.
     */
    public function testSearchWithCustomTimeout(): void
    {
        /*
        Unlike a global static approach (Configuration::getDefaultConfiguration), the `Configuration.new` method creates
        independent instances, allowing for configuration flexibility and avoiding shared state across the application.
        The custom timeout of 36 seconds would be set only to the `customConfiguration` instance.
        */
        $customConfiguration = (new Configuration(Constants::$userId, Constants::$authenticationKey))
            ->setRequestTimeout(36);
        $customWebhookListenersService = new WebhookListenersService(config: $customConfiguration);

        $customWebhookListenersSearch = $customWebhookListenersService->getWebhooksListenersSearch(
            space: Constants::$spaceId,
            expand: ['url', 'group'],
            limit: 1,
            order: 'id:DESC',
            query: 'name:\'Test\' AND state:INACTIVE'
        );
        $this->assertEquals(count($customWebhookListenersSearch->getData()), 1);
        $this->assertEquals(CreationEntityState::INACTIVE, $customWebhookListenersSearch->getData()[0]->getState(),
            'Searched Webhook Listeners\'s State must be \'INACTIVE\'');
        $this->assertEquals('Test', $customWebhookListenersSearch->getData()[0]->getName(),
            'Searched Webhook Listeners\'s Name must match.');
        $this->assertEquals(Constants::$spaceId, $customWebhookListenersSearch->getData()[0]->getLinkedSpaceId(),
            'Searched Webhook Listeners\'s Space ID must match.');
    }

    /**
     * Test case for search webhook listener without custom timeout.
     * Default timeout: 25 seconds should be set.
     */
    public function testSearchWithoutCustomTimeout(): void
    {
        $webhookListenersSearch = self::$webhookListenersService->getWebhooksListenersSearch(
            space: Constants::$spaceId,
            expand: ['url', 'group'],
            limit: 1,
            order: 'id:DESC',
            query: 'name:\'Test\' AND state:INACTIVE'
        );
        $this->assertEquals(count($webhookListenersSearch->getData()), 1);
        $this->assertEquals(CreationEntityState::INACTIVE, $webhookListenersSearch->getData()[0]->getState(),
            'Searched Webhook Listeners\'s State must be \'INACTIVE\'');
        $this->assertEquals('Test', $webhookListenersSearch->getData()[0]->getName(),
            'Searched Webhook Listeners\'s Name must match.');
        $this->assertEquals(Constants::$spaceId, $webhookListenersSearch->getData()[0]->getLinkedSpaceId(),
            'Searched Webhook Listeners\'s Space ID must match.');
    }
}

