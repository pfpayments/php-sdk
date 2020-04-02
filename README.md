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

// Create API service instance
$transactionService = new \PostFinanceCheckout\Sdk\Service\TransactionService($client);
$transactionPaymentPageService = new \PostFinanceCheckout\Sdk\Service\TransactionPaymentPageService($client);

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

// Create API service instance
$transactionService = new \PostFinanceCheckout\Sdk\Service\TransactionService($client);
$transactionPaymentPageService = new \PostFinanceCheckout\Sdk\Service\TransactionPaymentPageService($client);

// Create transaction
$lineItem = new \PostFinanceCheckout\Sdk\Model\LineItemCreate();
$lineItem->setName('Red T-Shirt');
$lineItem->setUniqueId('5412');
$lineItem->setSku('red-t-shirt-123');
$lineItem->setQuantity(1);
$lineItem->setAmountIncludingTax(29.95);
$lineItem->setType(\PostFinanceCheckout\Sdk\Model\LineItemType::PRODUCT);


$transaction = new \PostFinanceCheckout\Sdk\Model\TransactionCreate();
$transaction->setCurrency('EUR');
$transaction->setLineItems(array($lineItem));
$transaction->setAutoConfirmationEnabled(true);

$createdTransaction = $transactionService->create($spaceId, $transaction);

// Create Payment Page URL:
$redirectionUrl = $transactionPaymentPageService->paymentPageUrl($spaceId, $createdTransaction->getId());

header('Location: ' . $redirectionUrl);

```
### HTTP Client
You can either use `php curl` or `php socket` extentions. It is recommend you install the necessary extentions and enable them on your system.

You have to ways two specify which HTTP client you prefer.

```php
$userId = 512;
$secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

// Setup API client
$client = new \PostFinanceCheckout\Sdk\Sdk\ApiClient($userId, $secret);

$httpClientType = \PostFinanceCheckout\Sdk\Sdk\Http\HttpClientFactory::TYPE_CURL; // or \PostFinanceCheckout\Sdk\Sdk\Http\HttpClientFactory::TYPE_SOCKET

$client->setHttpClientType($httpClientType);
```

You can also specify the HTTP client via the `PFC_HTTP_CLIENT` environment variable. The possible string values are `curl` or `socket`.


```php
<?php
putenv('PFC_HTTP_CLIENT=curl');
?>
```

## License

Please see the [license file](https://github.com/pfpayments/php-sdk/blob/master/LICENSE) for more information.
