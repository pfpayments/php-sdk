[![Build Status](https://travis-ci.org/pfpayments/php-sdk.svg?branch=master)](https://travis-ci.org/pfpayments/php-sdk)

# PostFinance Checkout PHP Library

The PostFinance Checkout PHP library wraps around the PostFinance Checkout API. This library facilitates your interaction with various services such as transactions, accounts, and subscriptions.


## Documentation

[PostFinance Checkout Web Service API](https://checkout.postfinance.ch/doc/api/web-service)

## Requirements

- PHP 5.6.0 and above

## Installation

You can use **Composer** or **install manually**

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require postfinancecheckout/sdk
```

### Manual Installation

Alternatively you can download the package in its entirety. The [Releases](../../releases) page lists all stable versions.

Uncompress the zip file you download, and include the autoloader in your project:

```php
require_once '/path/to/php-sdk/autoload.php';
```

## Usage
The library needs to be configured with your account's space id, user id, and secret key which are available in your [PostFinance Checkout
account dashboard](https://checkout.postfinance.ch/account/select). Set `space_id`, `user_id`, and `api_secret` to their values.

### Configuring a Service

```php
require_once(__DIR__ . '/autoload.php');

// Configuration
$spaceId = 405;
$userId = 512;
$secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

// Setup API client
$client = new \PostFinanceCheckout\Sdk\ApiClient($userId, $secret);

// Get API service instance
$client->getTransactionService();
$client->getTransactionPaymentPageService();

```

To get started with sending transactions, please review the example below:

```php
require_once(__DIR__ . '/autoload.php');

// Configuration
$spaceId = 405;
$userId = 512;
$secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

// Setup API client
$client = new \PostFinanceCheckout\Sdk\ApiClient($userId, $secret);

// Create transaction
$lineItem = new \PostFinanceCheckout\Sdk\Model\LineItemCreate();
$lineItem->setName('Red T-Shirt');
$lineItem->setUniqueId('5412');
$lineItem->setSku('red-t-shirt-123');
$lineItem->setQuantity(1);
$lineItem->setAmountIncludingTax(29.95);
$lineItem->setType(\PostFinanceCheckout\Sdk\Model\LineItemType::PRODUCT);


$transactionPayload = new \PostFinanceCheckout\Sdk\Model\TransactionCreate();
$transactionPayload->setCurrency('EUR');
$transactionPayload->setLineItems(array($lineItem));
$transactionPayload->setAutoConfirmationEnabled(true);

$transaction = $client->getTransactionService()->create($spaceId, $transactionPayload);

// Create Payment Page URL:
$redirectionUrl = $client->getTransactionPaymentPageService()->paymentPageUrl($spaceId, $transaction->getId());

header('Location: ' . $redirectionUrl);

```
### HTTP Client
You can either use `php curl` or `php socket` extentions. It is recommend you install the necessary extentions and enable them on your system.

You have to ways two specify which HTTP client you prefer.

```php
$userId = 512;
$secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

// Setup API client
$client = new \PostFinanceCheckout\Sdk\ApiClient($userId, $secret);

$httpClientType = \PostFinanceCheckout\Sdk\Http\HttpClientFactory::TYPE_CURL; // or \PostFinanceCheckout\Sdk\Http\HttpClientFactory::TYPE_SOCKET

$client->setHttpClientType($httpClientType);

//Setup a custom connection timeout if needed. (Default value is: 25 seconds)
$client->setConnectionTimeout(20);
```

You can also specify the HTTP client via the `PFC_HTTP_CLIENT` environment variable. The possible string values are `curl` or `socket`.


```php
<?php
putenv('PFC_HTTP_CLIENT=curl');
?>
```

### Integrating Webhook Payload Signing Mechanism into webhook callback handler

The HTTP request which is sent for a state change of an entity now includes an additional field `state`, which provides information about the update of the monitored entity's state. This enhancement is a result of the implementation of our webhook encryption mechanism.

Payload field `state` provides direct information about the state update of the entity, making additional API calls to retrieve the entity state redundant.

#### ⚠️ Warning: Generic Pseudocode

> **The provided pseudocode is intentionally generic and serves to illustrate the process of enhancing your API to leverage webhook payload signing. It is not a complete implementation.**
>
> Please ensure that you adapt and extend this code to meet the specific needs of your application, including appropriate security measures and error handling.
For a detailed webhook payload signing mechanism understanding we highly recommend referring to our comprehensive
[Webhook Payload Signing Documentation](https://checkout.postfinance.ch/doc/webhooks#_webhook_payload_signing_mechanism).

```php
public function handleWebhook() {
    $requestPayload = file_get_contents('php://input');
    $signature = $_SERVER['HTTP_X_SIGNATURE'] ?? '';

    if (empty($signature)) {
        // Make additional API call to retrieve the entity state
        // ...
    } else {
        if ($client->getWebhookEncryptionService()->isContentValid($signature, $requestPayload)) {
            // Parse requestPayload to extract 'state' value
            // $state = ...
            // Process entity's state change
            // $this->processEntityStateChange($state);
            // ...
        }
    }

    // Process the received webhook data
    // ...

}
```

## License

Please see the [license file](https://github.com/pfpayments/php-sdk/blob/master/LICENSE) for more information.
