[![Build Status](https://travis-ci.org/pfpayments/php-sdk.svg?branch=master)](https://travis-ci.org/pfpayments/php-sdk)

# PostFinance Checkout SDK for PHP

This repository contains the open source PHP SDK that allows you to access PostFinance Checkout from your PHP app.

## Requirements

* [PHP 5.6.0 and later](http://www.php.net/)

## Documentation

https://www.postfinance-checkout.ch/doc/api/web-service

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

### Basic Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Configuration
$spaceId = 405;
$userId = 512;
$secret = "FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=";

// Setup API client
$client = new \PostFinanceCheckout\Sdk\ApiClient($userId, $secret);

// Create API service instance
$transactionService = new \PostFinanceCheckout\Sdk\Service\TransactionService($client);

// Create transaction
$lineItem = new \PostFinanceCheckout\Sdk\Model\LineItemCreate();
$lineItem->setName('Red T-Shirt');
$lineItem->setUniqueId('5412');
$lineItem->setSku('red-t-shirt-123');
$lineItem->setQuantity(1);
$lineItem->setAmountIncludingTax(29.95);
$lineItem->setType(\PostFinanceCheckout\Sdk\Model\LineItemType::PRODUCT);


$transaction = new \PostFinanceCheckout\Sdk\Model\TransactionCreate();
$transaction->setCurrency("EUR");
$transaction->setLineItems(array($lineItem));
$transaction->setAutoConfirmationEnabled(true);

$createdTransaction = $transactionService->create($spaceId, $transaction);

// Create Payment Page URL:
$redirectionUrl = $transactionService->buildPaymentPageUrl($spaceId, $createdTransaction->getId());

header('Location: ' . $redirectionUrl);

```

## License

Please see the [license file](LICENSE) for more information.