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

// Setup API client
$client = new \PostFinanceCheckout\Sdk\ApiClient('YOUR_USER_ID', 'YOUR_API_KEY');

// Create API service instance
$service = new \PostFinanceCheckout\Sdk\Service\SpaceService($client);

// The query restricts the spaces which are returned by the search.
$filter = new \PostFinanceCheckout\Sdk\Model\EntityQueryFilter();
$filter->setType(\PostFinanceCheckout\Sdk\Model\EntityQueryFilterType::LEAF);
$filter->setOperator(\PostFinanceCheckout\Sdk\Model\CriteriaOperator::EQUALS);
$filter->setFieldName('state');
$filter->setValue(\PostFinanceCheckout\Sdk\Model\CreationEntityState::ACTIVE);

$query = new \PostFinanceCheckout\Sdk\Model\EntityQuery();
$query->setFilter($filter);

try {
    $result = $service->search($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceService->search: ', $e->getMessage(), PHP_EOL;
}
```

## License

Please see the [license file](LICENSE) for more information.