# PostFinanceCheckout PHP SDK

- API version: 2.0

The PostFinanceCheckout PHP SDK is used to interact with PostFinanceCheckout's REST API.

## Requirements

PHP 8.1 or later.

## Installation

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require postfinancecheckout/sdk
```

## Getting Started

Please follow the [installation](#installation) instructions, then run the following example:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use PostFinanceCheckout\Sdk\Sdk\Service\TransactionsService;
use PostFinanceCheckout\Sdk\Sdk\Configuration;

$applicationUserId = 123441;
$authenticationKey = 'oWVGn42ks+yIbuHt8w09kyQRUEgIuYxqd/F59LO/lF0=';

$configuration = Configuration::getDefaultConfiguration( 
    userId: $applicationUserId,
    authenticationKey: $authenticationKey);

$transactionsService = new TransactionsService($configuration);

$spaceId = 72979;
$transactionId = 367155626;
$expandSet = [ 'group' ];

try {
    $transaction = $transactionsService->getPaymentTransactionsId($transactionId, $spaceId, $expandSet);
    print_r($transaction);
} catch (Exception $e) {
    echo 'Exception when calling api: ', $e->getMessage(), PHP_EOL;
}
```

## Documentation for API Endpoints
Additional Api services documentation: [*link*](https://checkout.postfinance.ch/en-us/doc/api/web-service#_services)<br>
Web Api client: [*link*](https://checkout.postfinance.ch//api/client)<br>
<details>
  <summary>Click here to see full list of services</summary>
  <br>All URIs are relative to https://checkout.postfinance.ch/<br>
  (click on method name to see web doc)<br>

  <p><strong>API Services:</strong></p>

- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>deleteAccountsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /accounts/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete an account
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>getAccounts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /accounts
  &nbsp;&nbsp;&nbsp;&nbsp;List all accounts
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>getAccountsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /accounts/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an account
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>getAccountsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /accounts/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search accounts
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>patchAccountsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /accounts/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update an account
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>postAccounts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /accounts
  &nbsp;&nbsp;&nbsp;&nbsp;Create an account
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>postAccountsIdActivate</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /accounts/{id}/activate
  &nbsp;&nbsp;&nbsp;&nbsp;Activate an account
  <br><br>
- <strong>AccountsService</strong><br>
  &nbsp;&nbsp;* <code>postAccountsIdDeactivate</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /accounts/{id}/deactivate
  &nbsp;&nbsp;&nbsp;&nbsp;Deactivate an account
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>deleteAnalyticsQueriesQueryExternalIdQueryExternalId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /analytics/queries/queryExternalId/{queryExternalId}
  &nbsp;&nbsp;&nbsp;&nbsp;Cancel a query execution, identifying it by its external id.
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>deleteAnalyticsQueriesQueryTokenQueryToken</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /analytics/queries/queryToken/{queryToken}
  &nbsp;&nbsp;&nbsp;&nbsp;Cancel a query execution, identifying it by its query token.
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>getAnalyticsQueries</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /analytics/queries
  &nbsp;&nbsp;&nbsp;&nbsp;Get portion of query executions for account
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>getAnalyticsQueriesQueryExternalIdQueryExternalId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /analytics/queries/queryExternalId/{queryExternalId}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a query execution information by its external id
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>getAnalyticsQueriesQueryExternalIdQueryExternalIdResult</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /analytics/queries/queryExternalId/{queryExternalId}/result
  &nbsp;&nbsp;&nbsp;&nbsp;Generate a temporary URL to download the query result. It retrieves the query by its external id
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>getAnalyticsQueriesQueryTokenQueryToken</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /analytics/queries/queryToken/{queryToken}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a query execution information by its query token
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>getAnalyticsQueriesQueryTokenQueryTokenResult</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /analytics/queries/queryToken/{queryToken}/result
  &nbsp;&nbsp;&nbsp;&nbsp;Generate a temporary URL to download the query result. It retrieves the query by its query token
  <br><br>
- <strong>AnalyticsQueriesService</strong><br>
  &nbsp;&nbsp;* <code>postAnalyticsQueriesSubmit</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /analytics/queries/submit
  &nbsp;&nbsp;&nbsp;&nbsp;Submit a query execution
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>deleteApplicationUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /application-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete an application user
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>deleteApplicationUsersUserIdKeysId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /application-users/{userId}/keys/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Deactivate an authentication key
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>getApplicationUsers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /application-users
  &nbsp;&nbsp;&nbsp;&nbsp;List all application users
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>getApplicationUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /application-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an application user
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>getApplicationUsersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /application-users/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search application users
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>getApplicationUsersUserIdKeys</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /application-users/{userId}/keys
  &nbsp;&nbsp;&nbsp;&nbsp;List a user&#39;s authentication keys
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>patchApplicationUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /application-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update an application user
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>postApplicationUsers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /application-users
  &nbsp;&nbsp;&nbsp;&nbsp;Create an application user
  <br><br>
- <strong>ApplicationUsersService</strong><br>
  &nbsp;&nbsp;* <code>postApplicationUsersUserIdKeys</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /application-users/{userId}/keys
  &nbsp;&nbsp;&nbsp;&nbsp;Generate a new authentication key
  <br><br>
- <strong>ApplicationUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteApplicationUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /application-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Unassign a role from an application user for an account
  <br><br>
- <strong>ApplicationUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteApplicationUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /application-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Unassign a role from an application user for a space
  <br><br>
- <strong>ApplicationUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>getApplicationUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /application-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles of an application user for an account
  <br><br>
- <strong>ApplicationUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>getApplicationUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /application-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles of an application user for a space
  <br><br>
- <strong>ApplicationUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>postApplicationUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /application-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Assign a role to an application user for an account
  <br><br>
- <strong>ApplicationUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>postApplicationUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /application-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Assign a role to an application user for a space
  <br><br>
- <strong>BankAccountsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankAccounts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-accounts
  &nbsp;&nbsp;&nbsp;&nbsp;List all bank accounts
  <br><br>
- <strong>BankAccountsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankAccountsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-accounts/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a bank account
  <br><br>
- <strong>BankAccountsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankAccountsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-accounts/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search bank accounts
  <br><br>
- <strong>BankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions
  &nbsp;&nbsp;&nbsp;&nbsp;List all bank transactions
  <br><br>
- <strong>BankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a bank transaction
  <br><br>
- <strong>BankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search bank transactions
  <br><br>
- <strong>ChargeAttemptsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeAttempts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-attempts
  &nbsp;&nbsp;&nbsp;&nbsp;List all charge attempts
  <br><br>
- <strong>ChargeAttemptsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeAttemptsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-attempts/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge attempt
  <br><br>
- <strong>ChargeAttemptsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeAttemptsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-attempts/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search charge attempts
  <br><br>
- <strong>ChargeBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsCharges</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/charges
  &nbsp;&nbsp;&nbsp;&nbsp;List all charge bank transactions
  <br><br>
- <strong>ChargeBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsChargesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/charges/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge bank transaction
  <br><br>
- <strong>ChargeBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsChargesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/charges/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search charge bank transactions
  <br><br>
- <strong>ChargeFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsLevels</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/levels
  &nbsp;&nbsp;&nbsp;&nbsp;List all charge flow levels
  <br><br>
- <strong>ChargeFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsLevelsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/levels/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge flow level
  <br><br>
- <strong>ChargeFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsLevelsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/levels/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search charge flow levels
  <br><br>
- <strong>ChargeFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentChargeFlowsLevelsIdSendMessage</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/charge-flows/levels/{id}/send-message
  &nbsp;&nbsp;&nbsp;&nbsp;Send a payment link
  <br><br>
- <strong>ChargeFlowsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlows</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows
  &nbsp;&nbsp;&nbsp;&nbsp;List all charge flows
  <br><br>
- <strong>ChargeFlowsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge flow
  <br><br>
- <strong>ChargeFlowsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search charge flows
  <br><br>
- <strong>ChargeFlowsLevelPaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsLevelsPaymentLinks</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/levels/payment-links
  &nbsp;&nbsp;&nbsp;&nbsp;List all charge flow payment links
  <br><br>
- <strong>ChargeFlowsLevelPaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsLevelsPaymentLinksId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/levels/payment-links/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge flow payment link
  <br><br>
- <strong>ChargeFlowsLevelPaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentChargeFlowsLevelsPaymentLinksSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/charge-flows/levels/payment-links/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search charge flow payment links
  <br><br>
- <strong>ConditionTypesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConditionTypes</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/condition-types
  &nbsp;&nbsp;&nbsp;&nbsp;List all condition types.
  <br><br>
- <strong>ConditionTypesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConditionTypesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/condition-types/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a condition type.
  <br><br>
- <strong>ConditionTypesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConditionTypesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/condition-types/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search condition types.
  <br><br>
- <strong>CountriesService</strong><br>
  &nbsp;&nbsp;* <code>getCountries</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /countries
  &nbsp;&nbsp;&nbsp;&nbsp;List all countries
  <br><br>
- <strong>CountriesService</strong><br>
  &nbsp;&nbsp;* <code>getCountriesCode</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /countries/{code}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a country
  <br><br>
- <strong>CountriesService</strong><br>
  &nbsp;&nbsp;* <code>getCountriesCountryCodeStates</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /countries/{countryCode}/states
  &nbsp;&nbsp;&nbsp;&nbsp;List all states for a country
  <br><br>
- <strong>CountriesService</strong><br>
  &nbsp;&nbsp;* <code>getCountriesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /countries/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search countries
  <br><br>
- <strong>CountriesService</strong><br>
  &nbsp;&nbsp;* <code>getCountriesStates</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /countries/states
  &nbsp;&nbsp;&nbsp;&nbsp;List all country states
  <br><br>
- <strong>CountriesService</strong><br>
  &nbsp;&nbsp;* <code>getCountriesStatesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /countries/states/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a country state
  <br><br>
- <strong>CurrenciesService</strong><br>
  &nbsp;&nbsp;* <code>getCurrencies</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /currencies
  &nbsp;&nbsp;&nbsp;&nbsp;List all currencies
  <br><br>
- <strong>CurrenciesService</strong><br>
  &nbsp;&nbsp;* <code>getCurrenciesCode</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /currencies/{code}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a currency
  <br><br>
- <strong>CurrenciesService</strong><br>
  &nbsp;&nbsp;* <code>getCurrenciesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /currencies/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search currencies
  <br><br>
- <strong>CurrencyBankAccountsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentCurrencyBankAccounts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/currency-bank-accounts
  &nbsp;&nbsp;&nbsp;&nbsp;List all currency bank accounts
  <br><br>
- <strong>CurrencyBankAccountsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentCurrencyBankAccountsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/currency-bank-accounts/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a currency bank account
  <br><br>
- <strong>CurrencyBankAccountsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentCurrencyBankAccountsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/currency-bank-accounts/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search currency bank accounts
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>deleteCustomersCustomerIdAddressesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /customers/{customerId}/addresses/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a customer address
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersCustomerIdAddresses</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{customerId}/addresses
  &nbsp;&nbsp;&nbsp;&nbsp;List all customer addresses
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersCustomerIdAddressesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{customerId}/addresses/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a customer address
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersCustomerIdAddressesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{customerId}/addresses/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search customer addresses
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>patchCustomersCustomerIdAddressesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /customers/{customerId}/addresses/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a customer address
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersCustomerIdAddresses</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/{customerId}/addresses
  &nbsp;&nbsp;&nbsp;&nbsp;Create a customer address
  <br><br>
- <strong>CustomerAddressesService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersCustomerIdAddressesIdDefault</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/{customerId}/addresses/{id}/default
  &nbsp;&nbsp;&nbsp;&nbsp;Set the default address for a customer
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>deleteCustomersCustomerIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /customers/{customerId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a customer comment
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersCustomerIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{customerId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;List all customer comments
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersCustomerIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{customerId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a customer comment
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersCustomerIdCommentsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{customerId}/comments/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search customer comments
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>patchCustomersCustomerIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /customers/{customerId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a customer comment
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersCustomerIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/{customerId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;Create a customer comment
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersCustomerIdCommentsIdPin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/{customerId}/comments/{id}/pin
  &nbsp;&nbsp;&nbsp;&nbsp;Pin a comment to the top
  <br><br>
- <strong>CustomerCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersCustomerIdCommentsIdUnpin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/{customerId}/comments/{id}/unpin
  &nbsp;&nbsp;&nbsp;&nbsp;Remove a pinned comment from the top
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>deleteCustomersBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /customers/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Delete multiple customers
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>deleteCustomersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /customers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a customer
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>getCustomers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers
  &nbsp;&nbsp;&nbsp;&nbsp;List all customers
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a customer
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersIdEmailAddresses</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/{id}/email-addresses
  &nbsp;&nbsp;&nbsp;&nbsp;List a customer&#39;s email addresses
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>getCustomersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /customers/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search customers
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>patchCustomersBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /customers/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Update multiple customers
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>patchCustomersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /customers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a customer
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>postCustomers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers
  &nbsp;&nbsp;&nbsp;&nbsp;Create a customer
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Create multiple customers
  <br><br>
- <strong>CustomersService</strong><br>
  &nbsp;&nbsp;* <code>postCustomersIdMergeOther</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /customers/{id}/merge/{other}
  &nbsp;&nbsp;&nbsp;&nbsp;Merge two customers
  <br><br>
- <strong>DeliveryIndicationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDeliveryIndications</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/delivery-indications
  &nbsp;&nbsp;&nbsp;&nbsp;List all delivery indications
  <br><br>
- <strong>DeliveryIndicationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDeliveryIndicationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/delivery-indications/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a delivery indication
  <br><br>
- <strong>DeliveryIndicationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDeliveryIndicationsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/delivery-indications/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search delivery indications
  <br><br>
- <strong>DeliveryIndicationsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentDeliveryIndicationsIdMarkNotSuitable</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/delivery-indications/{id}/mark-not-suitable
  &nbsp;&nbsp;&nbsp;&nbsp;Mark a delivery indication as not suitable.
  <br><br>
- <strong>DeliveryIndicationsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentDeliveryIndicationsIdMarkSuitable</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/delivery-indications/{id}/mark-suitable
  &nbsp;&nbsp;&nbsp;&nbsp;Mark a delivery indication as suitable.
  <br><br>
- <strong>DocumentTemplateTypesService</strong><br>
  &nbsp;&nbsp;* <code>getDocumentTemplatesTypes</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /document-templates/types
  &nbsp;&nbsp;&nbsp;&nbsp;List all document template types
  <br><br>
- <strong>DocumentTemplateTypesService</strong><br>
  &nbsp;&nbsp;* <code>getDocumentTemplatesTypesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /document-templates/types/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a document template type
  <br><br>
- <strong>DocumentTemplateTypesService</strong><br>
  &nbsp;&nbsp;* <code>getDocumentTemplatesTypesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /document-templates/types/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search document template types
  <br><br>
- <strong>DocumentTemplatesService</strong><br>
  &nbsp;&nbsp;* <code>getDocumentTemplates</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /document-templates
  &nbsp;&nbsp;&nbsp;&nbsp;List all document templates
  <br><br>
- <strong>DocumentTemplatesService</strong><br>
  &nbsp;&nbsp;* <code>getDocumentTemplatesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /document-templates/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a document template
  <br><br>
- <strong>DocumentTemplatesService</strong><br>
  &nbsp;&nbsp;* <code>getDocumentTemplatesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /document-templates/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search document templates
  <br><br>
- <strong>DunningCasesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningCases</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-cases
  &nbsp;&nbsp;&nbsp;&nbsp;List all dunning cases
  <br><br>
- <strong>DunningCasesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningCasesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-cases/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a dunning case
  <br><br>
- <strong>DunningCasesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningCasesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-cases/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search dunning cases
  <br><br>
- <strong>DunningCasesService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentDunningCasesIdSuspend</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/dunning-cases/{id}/suspend
  &nbsp;&nbsp;&nbsp;&nbsp;Suspend a dunning case
  <br><br>
- <strong>DunningCasesService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentDunningCasesInvoiceInvoiceId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/dunning-cases/invoice/{invoiceId}
  &nbsp;&nbsp;&nbsp;&nbsp;Create a dunning case for an invoice
  <br><br>
- <strong>DunningFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningFlowsLevels</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-flows/levels
  &nbsp;&nbsp;&nbsp;&nbsp;List all dunning flow levels
  <br><br>
- <strong>DunningFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningFlowsLevelsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-flows/levels/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a dunning flow level
  <br><br>
- <strong>DunningFlowLevelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningFlowsLevelsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-flows/levels/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search dunning flow levels
  <br><br>
- <strong>DunningFlowsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningFlows</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-flows
  &nbsp;&nbsp;&nbsp;&nbsp;List all dunning flows
  <br><br>
- <strong>DunningFlowsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningFlowsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-flows/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a dunning flow
  <br><br>
- <strong>DunningFlowsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentDunningFlowsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/dunning-flows/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search dunning flows
  <br><br>
- <strong>ExpressCheckoutService</strong><br>
  &nbsp;&nbsp;* <code>postExpressCheckoutCreateSession</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /express-checkout/create-session
  &nbsp;&nbsp;&nbsp;&nbsp;Create a new Express Checkout Session
  <br><br>
- <strong>ExternalTransferBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsExternalTransfers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/external-transfers
  &nbsp;&nbsp;&nbsp;&nbsp;List all external transfer bank transactions
  <br><br>
- <strong>ExternalTransferBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsExternalTransfersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/external-transfers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an external transfer bank transaction
  <br><br>
- <strong>ExternalTransferBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsExternalTransfersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/external-transfers/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search external transfer bank transactions
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>deleteHumanUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /human-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a human user
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>getHumanUsers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /human-users
  &nbsp;&nbsp;&nbsp;&nbsp;List all human users
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>getHumanUsersExport</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /human-users/export
  &nbsp;&nbsp;&nbsp;&nbsp;Export human users
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>getHumanUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /human-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a human user
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>getHumanUsersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /human-users/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search human users
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>patchHumanUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /human-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a human user
  <br><br>
- <strong>HumanUsersService</strong><br>
  &nbsp;&nbsp;* <code>postHumanUsers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /human-users
  &nbsp;&nbsp;&nbsp;&nbsp;Create a human user
  <br><br>
- <strong>HumanUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteHumanUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /human-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Unassign a role from a human user for an account
  <br><br>
- <strong>HumanUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteHumanUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /human-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Unassign a role from a human user for a space
  <br><br>
- <strong>HumanUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>getHumanUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /human-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles of a human user for an account
  <br><br>
- <strong>HumanUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>getHumanUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /human-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles of a human user for a space
  <br><br>
- <strong>HumanUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>postHumanUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /human-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Assign a role to a human user for an account
  <br><br>
- <strong>HumanUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>postHumanUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /human-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Assign a role to a human user for a space
  <br><br>
- <strong>InternalTransferBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsInternalTransfers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/internal-transfers
  &nbsp;&nbsp;&nbsp;&nbsp;List all internal transfer bank transactions
  <br><br>
- <strong>InternalTransferBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsInternalTransfersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/internal-transfers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an internal transfer bank transaction
  <br><br>
- <strong>InternalTransferBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsInternalTransfersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/internal-transfers/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search internal transfer bank transactions
  <br><br>
- <strong>LabelDescriptorsService</strong><br>
  &nbsp;&nbsp;* <code>getLabelDescriptors</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /label-descriptors
  &nbsp;&nbsp;&nbsp;&nbsp;List all label descriptors
  <br><br>
- <strong>LabelDescriptorsService</strong><br>
  &nbsp;&nbsp;* <code>getLabelDescriptorsGroups</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /label-descriptors/groups
  &nbsp;&nbsp;&nbsp;&nbsp;List all label descriptor groups
  <br><br>
- <strong>LabelDescriptorsService</strong><br>
  &nbsp;&nbsp;* <code>getLabelDescriptorsGroupsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /label-descriptors/groups/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a label descriptor group
  <br><br>
- <strong>LabelDescriptorsService</strong><br>
  &nbsp;&nbsp;* <code>getLabelDescriptorsGroupsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /label-descriptors/groups/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search label descriptor groups
  <br><br>
- <strong>LabelDescriptorsService</strong><br>
  &nbsp;&nbsp;* <code>getLabelDescriptorsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /label-descriptors/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a label descriptor
  <br><br>
- <strong>LabelDescriptorsService</strong><br>
  &nbsp;&nbsp;* <code>getLabelDescriptorsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /label-descriptors/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search label descriptors
  <br><br>
- <strong>LanguagesService</strong><br>
  &nbsp;&nbsp;* <code>getLanguages</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /languages
  &nbsp;&nbsp;&nbsp;&nbsp;List all languages
  <br><br>
- <strong>LanguagesService</strong><br>
  &nbsp;&nbsp;* <code>getLanguagesCode</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /languages/{code}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a language
  <br><br>
- <strong>LanguagesService</strong><br>
  &nbsp;&nbsp;* <code>getLanguagesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /languages/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search languages
  <br><br>
- <strong>LegalOrganizationFormsService</strong><br>
  &nbsp;&nbsp;* <code>getLegalOrganizationForms</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /legal-organization-forms
  &nbsp;&nbsp;&nbsp;&nbsp;List all legal organization forms
  <br><br>
- <strong>LegalOrganizationFormsService</strong><br>
  &nbsp;&nbsp;* <code>getLegalOrganizationFormsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /legal-organization-forms/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a legal organization form
  <br><br>
- <strong>LegalOrganizationFormsService</strong><br>
  &nbsp;&nbsp;* <code>getLegalOrganizationFormsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /legal-organization-forms/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search legal organization forms
  <br><br>
- <strong>ManualTasksService</strong><br>
  &nbsp;&nbsp;* <code>getManualTasks</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /manual-tasks
  &nbsp;&nbsp;&nbsp;&nbsp;List all manual tasks
  <br><br>
- <strong>ManualTasksService</strong><br>
  &nbsp;&nbsp;* <code>getManualTasksId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /manual-tasks/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a manual task
  <br><br>
- <strong>ManualTasksService</strong><br>
  &nbsp;&nbsp;* <code>getManualTasksIdNotification</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /manual-tasks/{id}/notification
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a manual task&#39;s notification message
  <br><br>
- <strong>ManualTasksService</strong><br>
  &nbsp;&nbsp;* <code>getManualTasksSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /manual-tasks/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search manual tasks
  <br><br>
- <strong>ManualTasksService</strong><br>
  &nbsp;&nbsp;* <code>postManualTasksIdActionActionId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /manual-tasks/{id}/action/{actionId}
  &nbsp;&nbsp;&nbsp;&nbsp;Process a manual task&#39;s action
  <br><br>
- <strong>PaymentConnectorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentConnectorConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/connector-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a payment connector configuration
  <br><br>
- <strong>PaymentConnectorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConnectorConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/connector-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment connector configurations
  <br><br>
- <strong>PaymentConnectorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConnectorConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/connector-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment connector configuration
  <br><br>
- <strong>PaymentConnectorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConnectorConfigurationsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/connector-configurations/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment connector configurations
  <br><br>
- <strong>PaymentConnectorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentConnectorConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/connector-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a payment connector configuration
  <br><br>
- <strong>PaymentConnectorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentConnectorConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/connector-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;Create a payment connector configuration
  <br><br>
- <strong>PaymentConnectorsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConnectors</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/connectors
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment connectors.
  <br><br>
- <strong>PaymentConnectorsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConnectorsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/connectors/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment connector.
  <br><br>
- <strong>PaymentConnectorsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentConnectorsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/connectors/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment connectors.
  <br><br>
- <strong>PaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentLinksId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/links/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a payment link
  <br><br>
- <strong>PaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentLinks</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/links
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment links
  <br><br>
- <strong>PaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentLinksId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/links/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment link
  <br><br>
- <strong>PaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentLinksSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/links/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment links
  <br><br>
- <strong>PaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentLinksId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/links/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a payment link
  <br><br>
- <strong>PaymentLinksService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentLinks</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/links
  &nbsp;&nbsp;&nbsp;&nbsp;Create a payment link
  <br><br>
- <strong>PaymentMethodBrandsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodBrands</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/method-brands
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment method brands.
  <br><br>
- <strong>PaymentMethodBrandsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodBrandsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/method-brands/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment method brand.
  <br><br>
- <strong>PaymentMethodBrandsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodBrandsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/method-brands/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment method brands.
  <br><br>
- <strong>PaymentMethodConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentMethodConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/method-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a payment method configuration
  <br><br>
- <strong>PaymentMethodConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/method-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment method configurations
  <br><br>
- <strong>PaymentMethodConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/method-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment method configuration
  <br><br>
- <strong>PaymentMethodConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodConfigurationsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/method-configurations/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment method configurations
  <br><br>
- <strong>PaymentMethodConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentMethodConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/method-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a payment method configuration
  <br><br>
- <strong>PaymentMethodConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentMethodConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/method-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;Create a payment method configuration
  <br><br>
- <strong>PaymentMethodsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethods</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/methods
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment methods.
  <br><br>
- <strong>PaymentMethodsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/methods/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment method.
  <br><br>
- <strong>PaymentMethodsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentMethodsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/methods/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment methods.
  <br><br>
- <strong>PaymentProcessorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentProcessorConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/processor-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a payment processor configuration
  <br><br>
- <strong>PaymentProcessorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentProcessorConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/processor-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment processor configurations
  <br><br>
- <strong>PaymentProcessorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentProcessorConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/processor-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment processor configuration
  <br><br>
- <strong>PaymentProcessorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentProcessorConfigurationsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/processor-configurations/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment processor configurations
  <br><br>
- <strong>PaymentProcessorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentProcessorConfigurationsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/processor-configurations/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a payment processor configuration
  <br><br>
- <strong>PaymentProcessorConfigurationsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentProcessorConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/processor-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;Create a payment processor configuration
  <br><br>
- <strong>PaymentProcessorsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentProcessors</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/processors
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment processors.
  <br><br>
- <strong>PaymentProcessorsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentProcessorsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/processors/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment processor.
  <br><br>
- <strong>PaymentProcessorsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentProcessorsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/processors/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment processors.
  <br><br>
- <strong>PaymentSalesChannelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentSalesChannels</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/sales-channels
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment sales channels.
  <br><br>
- <strong>PaymentSalesChannelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentSalesChannelsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/sales-channels/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment sales channel.
  <br><br>
- <strong>PaymentSalesChannelsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentSalesChannelsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/sales-channels/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment sales channels.
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentTerminalsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/terminals/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a payment terminal
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTerminals</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/terminals
  &nbsp;&nbsp;&nbsp;&nbsp;List all payment terminals
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTerminalsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/terminals/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment terminal
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTerminalsIdTillConnectionCredentials</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/terminals/{id}/till-connection-credentials
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve till connection credentials
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTerminalsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/terminals/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search payment terminals
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentTerminalsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/terminals/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a payment terminal
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminals</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals
  &nbsp;&nbsp;&nbsp;&nbsp;Create a payment terminal
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminalsByIdentifierIdentifierPerformTransaction</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals/by-identifier/{identifier}/perform-transaction
  &nbsp;&nbsp;&nbsp;&nbsp;Perform a payment terminal transaction by identifier
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminalsByIdentifierIdentifierTriggerFinalBalance</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals/by-identifier/{identifier}/trigger-final-balance
  &nbsp;&nbsp;&nbsp;&nbsp;Remotely trigger the final balance by identifier
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminalsIdLink</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals/{id}/link
  &nbsp;&nbsp;&nbsp;&nbsp;Link a device with a payment terminal
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminalsIdPerformTransaction</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals/{id}/perform-transaction
  &nbsp;&nbsp;&nbsp;&nbsp;Perform a payment terminal transaction
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminalsIdTriggerFinalBalance</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals/{id}/trigger-final-balance
  &nbsp;&nbsp;&nbsp;&nbsp;Remotely trigger the final balance
  <br><br>
- <strong>PaymentTerminalsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTerminalsIdUnlink</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/terminals/{id}/unlink
  &nbsp;&nbsp;&nbsp;&nbsp;Unlink any device from a payment terminal
  <br><br>
- <strong>PermissionsService</strong><br>
  &nbsp;&nbsp;* <code>getPermissions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /permissions
  &nbsp;&nbsp;&nbsp;&nbsp;List all permissions
  <br><br>
- <strong>PermissionsService</strong><br>
  &nbsp;&nbsp;* <code>getPermissionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /permissions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a permission
  <br><br>
- <strong>PermissionsService</strong><br>
  &nbsp;&nbsp;* <code>getPermissionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /permissions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search permissions
  <br><br>
- <strong>RefundBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsRefunds</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/refunds
  &nbsp;&nbsp;&nbsp;&nbsp;List all refund bank transactions
  <br><br>
- <strong>RefundBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsRefundsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/refunds/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a refund bank transaction
  <br><br>
- <strong>RefundBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsRefundsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/refunds/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search refund bank transactions
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentRefundsRefundIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/refunds/{refundId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a refund comment
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefundsRefundIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds/{refundId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;List all refund comments
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefundsRefundIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds/{refundId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a refund comment
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefundsRefundIdCommentsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds/{refundId}/comments/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search refund comments
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentRefundsRefundIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/refunds/{refundId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a refund comment
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentRefundsRefundIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/refunds/{refundId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;Create a refund comment
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentRefundsRefundIdCommentsIdPin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/refunds/{refundId}/comments/{id}/pin
  &nbsp;&nbsp;&nbsp;&nbsp;Pin a comment to the top
  <br><br>
- <strong>RefundCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentRefundsRefundIdCommentsIdUnpin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/refunds/{refundId}/comments/{id}/unpin
  &nbsp;&nbsp;&nbsp;&nbsp;Remove the pinned comment from the top
  <br><br>
- <strong>RefundRecoveryBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsRefundRecoveries</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/refund-recoveries
  &nbsp;&nbsp;&nbsp;&nbsp;List all refund recovery bank transactions
  <br><br>
- <strong>RefundRecoveryBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsRefundRecoveriesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/refund-recoveries/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a refund recovery bank transaction
  <br><br>
- <strong>RefundRecoveryBankTransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentBankTransactionsRefundRecoveriesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/bank-transactions/refund-recoveries/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search refund recovery bank transactions
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefunds</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds
  &nbsp;&nbsp;&nbsp;&nbsp;List all refunds
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefundsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a refund
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefundsIdDocument</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds/{id}/document
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a refund document
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentRefundsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/refunds/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search refunds
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentRefunds</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/refunds
  &nbsp;&nbsp;&nbsp;&nbsp;Create a refund
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentRefundsIdMarkFailed</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/refunds/{id}/mark-failed
  &nbsp;&nbsp;&nbsp;&nbsp;Mark a refund as failed
  <br><br>
- <strong>RefundsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentRefundsIdMarkSucceeded</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/refunds/{id}/mark-succeeded
  &nbsp;&nbsp;&nbsp;&nbsp;Mark a refund as successful
  <br><br>
- <strong>RolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteRolesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /roles/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a role
  <br><br>
- <strong>RolesService</strong><br>
  &nbsp;&nbsp;* <code>getRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles
  <br><br>
- <strong>RolesService</strong><br>
  &nbsp;&nbsp;* <code>getRolesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /roles/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a role
  <br><br>
- <strong>RolesService</strong><br>
  &nbsp;&nbsp;* <code>getRolesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /roles/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search roles
  <br><br>
- <strong>RolesService</strong><br>
  &nbsp;&nbsp;* <code>patchRolesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /roles/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a role
  <br><br>
- <strong>RolesService</strong><br>
  &nbsp;&nbsp;* <code>postRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /roles
  &nbsp;&nbsp;&nbsp;&nbsp;Create a role
  <br><br>
- <strong>SingleSignOnUsersService</strong><br>
  &nbsp;&nbsp;* <code>deleteSingleSignOnUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /single-sign-on-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a single sign-on user
  <br><br>
- <strong>SingleSignOnUsersService</strong><br>
  &nbsp;&nbsp;* <code>getSingleSignOnUsers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /single-sign-on-users
  &nbsp;&nbsp;&nbsp;&nbsp;List all single sign-on users
  <br><br>
- <strong>SingleSignOnUsersService</strong><br>
  &nbsp;&nbsp;* <code>getSingleSignOnUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /single-sign-on-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a single sign-on user
  <br><br>
- <strong>SingleSignOnUsersService</strong><br>
  &nbsp;&nbsp;* <code>getSingleSignOnUsersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /single-sign-on-users/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search single sign-on users
  <br><br>
- <strong>SingleSignOnUsersService</strong><br>
  &nbsp;&nbsp;* <code>patchSingleSignOnUsersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /single-sign-on-users/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a single sign-on user
  <br><br>
- <strong>SingleSignOnUsersService</strong><br>
  &nbsp;&nbsp;* <code>postSingleSignOnUsers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /single-sign-on-users
  &nbsp;&nbsp;&nbsp;&nbsp;Create a single sign-on user
  <br><br>
- <strong>SingleSignOnUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSingleSignOnUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /single-sign-on-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Unassign a role from a single sign-on user for an account
  <br><br>
- <strong>SingleSignOnUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSingleSignOnUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /single-sign-on-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Unassign a role from a single sign-on user for a space
  <br><br>
- <strong>SingleSignOnUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>getSingleSignOnUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /single-sign-on-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles of a single sign-on user for an account
  <br><br>
- <strong>SingleSignOnUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>getSingleSignOnUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /single-sign-on-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;List all roles of a single sign-on user for a space
  <br><br>
- <strong>SingleSignOnUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>postSingleSignOnUsersUserIdAccountRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /single-sign-on-users/{userId}/account-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Assign a role to a single sign-on user for an account
  <br><br>
- <strong>SingleSignOnUsersRolesService</strong><br>
  &nbsp;&nbsp;* <code>postSingleSignOnUsersUserIdSpaceRoles</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /single-sign-on-users/{userId}/space-roles
  &nbsp;&nbsp;&nbsp;&nbsp;Assign a role to a single sign-on user for a space
  <br><br>
- <strong>SpacesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSpacesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /spaces/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a space
  <br><br>
- <strong>SpacesService</strong><br>
  &nbsp;&nbsp;* <code>getSpaces</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /spaces
  &nbsp;&nbsp;&nbsp;&nbsp;List all spaces
  <br><br>
- <strong>SpacesService</strong><br>
  &nbsp;&nbsp;* <code>getSpacesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /spaces/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a space
  <br><br>
- <strong>SpacesService</strong><br>
  &nbsp;&nbsp;* <code>getSpacesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /spaces/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search spaces
  <br><br>
- <strong>SpacesService</strong><br>
  &nbsp;&nbsp;* <code>patchSpacesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /spaces/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a space
  <br><br>
- <strong>SpacesService</strong><br>
  &nbsp;&nbsp;* <code>postSpaces</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /spaces
  &nbsp;&nbsp;&nbsp;&nbsp;Create a space
  <br><br>
- <strong>StaticValuesService</strong><br>
  &nbsp;&nbsp;* <code>getStaticValues</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /static-values
  &nbsp;&nbsp;&nbsp;&nbsp;List all static values
  <br><br>
- <strong>StaticValuesService</strong><br>
  &nbsp;&nbsp;* <code>getStaticValuesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /static-values/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a static value
  <br><br>
- <strong>StaticValuesService</strong><br>
  &nbsp;&nbsp;* <code>getStaticValuesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /static-values/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search static values
  <br><br>
- <strong>SubscribersService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsSubscribersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/subscribers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a subscriber
  <br><br>
- <strong>SubscribersService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSubscribers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/subscribers
  &nbsp;&nbsp;&nbsp;&nbsp;List all subscribers
  <br><br>
- <strong>SubscribersService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSubscribersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/subscribers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a subscriber
  <br><br>
- <strong>SubscribersService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSubscribersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/subscribers/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search subscribers
  <br><br>
- <strong>SubscribersService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsSubscribersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/subscribers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a subscriber
  <br><br>
- <strong>SubscribersService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsSubscribers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/subscribers
  &nbsp;&nbsp;&nbsp;&nbsp;Create a subscriber
  <br><br>
- <strong>SubscriptionAffiliatesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsAffiliatesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/affiliates/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete an affiliate
  <br><br>
- <strong>SubscriptionAffiliatesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsAffiliates</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/affiliates
  &nbsp;&nbsp;&nbsp;&nbsp;List all affiliates
  <br><br>
- <strong>SubscriptionAffiliatesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsAffiliatesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/affiliates/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an affiliate
  <br><br>
- <strong>SubscriptionAffiliatesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsAffiliatesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/affiliates/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search affiliates
  <br><br>
- <strong>SubscriptionAffiliatesService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsAffiliatesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/affiliates/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update an affiliate
  <br><br>
- <strong>SubscriptionAffiliatesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsAffiliates</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/affiliates
  &nbsp;&nbsp;&nbsp;&nbsp;Create an affiliate
  <br><br>
- <strong>SubscriptionChargesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsCharges</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/charges
  &nbsp;&nbsp;&nbsp;&nbsp;List all charges
  <br><br>
- <strong>SubscriptionChargesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsChargesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/charges/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge
  <br><br>
- <strong>SubscriptionChargesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsChargesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/charges/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search charges
  <br><br>
- <strong>SubscriptionChargesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsCharges</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/charges
  &nbsp;&nbsp;&nbsp;&nbsp;Create a charge
  <br><br>
- <strong>SubscriptionChargesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsChargesIdDiscard</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/charges/{id}/discard
  &nbsp;&nbsp;&nbsp;&nbsp;Discard a charge
  <br><br>
- <strong>SubscriptionLedgerEntriesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsLedgerEntries</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/ledger-entries
  &nbsp;&nbsp;&nbsp;&nbsp;List all ledger entries
  <br><br>
- <strong>SubscriptionLedgerEntriesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsLedgerEntriesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/ledger-entries/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a ledger entry
  <br><br>
- <strong>SubscriptionLedgerEntriesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsLedgerEntriesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/ledger-entries/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search ledger entries
  <br><br>
- <strong>SubscriptionLedgerEntriesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsLedgerEntries</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/ledger-entries
  &nbsp;&nbsp;&nbsp;&nbsp;Create a ledger entry
  <br><br>
- <strong>SubscriptionMetricUsageReportsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsMetricUsageReports</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/metric-usage-reports
  &nbsp;&nbsp;&nbsp;&nbsp;List all metric usage reports
  <br><br>
- <strong>SubscriptionMetricUsageReportsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsMetricUsageReportsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/metric-usage-reports/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a metric usage report
  <br><br>
- <strong>SubscriptionMetricUsageReportsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsMetricUsageReportsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/metric-usage-reports/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search metric usage reports
  <br><br>
- <strong>SubscriptionMetricUsageReportsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsMetricUsageReports</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/metric-usage-reports
  &nbsp;&nbsp;&nbsp;&nbsp;Create a metric usage report
  <br><br>
- <strong>SubscriptionMetricsService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsMetricsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/metrics/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a metric
  <br><br>
- <strong>SubscriptionMetricsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsMetrics</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/metrics
  &nbsp;&nbsp;&nbsp;&nbsp;List all metrics
  <br><br>
- <strong>SubscriptionMetricsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsMetricsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/metrics/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a metric
  <br><br>
- <strong>SubscriptionMetricsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsMetricsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/metrics/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search metrics
  <br><br>
- <strong>SubscriptionMetricsService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsMetricsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/metrics/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a metric
  <br><br>
- <strong>SubscriptionMetricsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsMetrics</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/metrics
  &nbsp;&nbsp;&nbsp;&nbsp;Create a metric
  <br><br>
- <strong>SubscriptionPeriodBillsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsPeriodBills</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/period-bills
  &nbsp;&nbsp;&nbsp;&nbsp;List all subscription period bills
  <br><br>
- <strong>SubscriptionPeriodBillsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsPeriodBillsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/period-bills/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a subscription period bill
  <br><br>
- <strong>SubscriptionPeriodBillsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsPeriodBillsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/period-bills/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search subscription period bills
  <br><br>
- <strong>SubscriptionPeriodBillsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsPeriodBillsIdClose</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/period-bills/{id}/close
  &nbsp;&nbsp;&nbsp;&nbsp;Close a subscription period bill
  <br><br>
- <strong>SubscriptionProductComponentGroupsService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsProductsComponentGroupsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/products/component-groups/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a component group
  <br><br>
- <strong>SubscriptionProductComponentGroupsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsComponentGroups</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/component-groups
  &nbsp;&nbsp;&nbsp;&nbsp;List all component groups
  <br><br>
- <strong>SubscriptionProductComponentGroupsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsComponentGroupsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/component-groups/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a component group
  <br><br>
- <strong>SubscriptionProductComponentGroupsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsComponentGroupsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/component-groups/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search component groups
  <br><br>
- <strong>SubscriptionProductComponentGroupsService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsComponentGroupsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/component-groups/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a component group
  <br><br>
- <strong>SubscriptionProductComponentGroupsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsComponentGroups</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/component-groups
  &nbsp;&nbsp;&nbsp;&nbsp;Create a component group
  <br><br>
- <strong>SubscriptionProductComponentsService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsProductsComponentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/products/components/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a component
  <br><br>
- <strong>SubscriptionProductComponentsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsComponents</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/components
  &nbsp;&nbsp;&nbsp;&nbsp;List all components
  <br><br>
- <strong>SubscriptionProductComponentsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsComponentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/components/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a component
  <br><br>
- <strong>SubscriptionProductComponentsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsComponentsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/components/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search components
  <br><br>
- <strong>SubscriptionProductComponentsService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsComponentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/components/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a component
  <br><br>
- <strong>SubscriptionProductComponentsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsComponents</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/components
  &nbsp;&nbsp;&nbsp;&nbsp;Create a component
  <br><br>
- <strong>SubscriptionProductMeteredFeeTiersService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsProductsMeteredFeesFeeIdTiersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/products/metered-fees/{feeId}/tiers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a metered fee tier
  <br><br>
- <strong>SubscriptionProductMeteredFeeTiersService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsMeteredFeesFeeIdTiers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/metered-fees/{feeId}/tiers
  &nbsp;&nbsp;&nbsp;&nbsp;List all metered fee tiers
  <br><br>
- <strong>SubscriptionProductMeteredFeeTiersService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsMeteredFeesFeeIdTiersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/metered-fees/{feeId}/tiers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a metered fee tier
  <br><br>
- <strong>SubscriptionProductMeteredFeeTiersService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsMeteredFeesFeeIdTiersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/metered-fees/{feeId}/tiers/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search metered fee tiers
  <br><br>
- <strong>SubscriptionProductMeteredFeeTiersService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsMeteredFeesFeeIdTiersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/metered-fees/{feeId}/tiers/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a metered fee tier
  <br><br>
- <strong>SubscriptionProductMeteredFeeTiersService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsMeteredFeesFeeIdTiers</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/metered-fees/{feeId}/tiers
  &nbsp;&nbsp;&nbsp;&nbsp;Create a metered fee tier
  <br><br>
- <strong>SubscriptionProductMeteredFeesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsProductsMeteredFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/products/metered-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a metered fee
  <br><br>
- <strong>SubscriptionProductMeteredFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsMeteredFees</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/metered-fees
  &nbsp;&nbsp;&nbsp;&nbsp;List all metered fees
  <br><br>
- <strong>SubscriptionProductMeteredFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsMeteredFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/metered-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a metered fee
  <br><br>
- <strong>SubscriptionProductMeteredFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsMeteredFeesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/metered-fees/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search metered fees
  <br><br>
- <strong>SubscriptionProductMeteredFeesService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsMeteredFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/metered-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a metered fee
  <br><br>
- <strong>SubscriptionProductMeteredFeesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsMeteredFees</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/metered-fees
  &nbsp;&nbsp;&nbsp;&nbsp;Create a metered fee
  <br><br>
- <strong>SubscriptionProductPeriodFeesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsProductsPeriodFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/products/period-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a period fee
  <br><br>
- <strong>SubscriptionProductPeriodFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsPeriodFees</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/period-fees
  &nbsp;&nbsp;&nbsp;&nbsp;List all period fees
  <br><br>
- <strong>SubscriptionProductPeriodFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsPeriodFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/period-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a period fee
  <br><br>
- <strong>SubscriptionProductPeriodFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsPeriodFeesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/period-fees/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search period fees
  <br><br>
- <strong>SubscriptionProductPeriodFeesService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsPeriodFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/period-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a period fee
  <br><br>
- <strong>SubscriptionProductPeriodFeesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsPeriodFees</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/period-fees
  &nbsp;&nbsp;&nbsp;&nbsp;Create a period fee
  <br><br>
- <strong>SubscriptionProductRetirementsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsRetirements</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/retirements
  &nbsp;&nbsp;&nbsp;&nbsp;List all product retirements
  <br><br>
- <strong>SubscriptionProductRetirementsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsRetirementsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/retirements/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a product retirement
  <br><br>
- <strong>SubscriptionProductRetirementsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsRetirementsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/retirements/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search product retirements
  <br><br>
- <strong>SubscriptionProductSetupFeesService</strong><br>
  &nbsp;&nbsp;* <code>deleteSubscriptionsProductsSetupFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /subscriptions/products/setup-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a setup fee
  <br><br>
- <strong>SubscriptionProductSetupFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsSetupFees</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/setup-fees
  &nbsp;&nbsp;&nbsp;&nbsp;List all setup fees
  <br><br>
- <strong>SubscriptionProductSetupFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsSetupFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/setup-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a setup fee
  <br><br>
- <strong>SubscriptionProductSetupFeesService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsSetupFeesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/setup-fees/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search setup fees
  <br><br>
- <strong>SubscriptionProductSetupFeesService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsSetupFeesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/setup-fees/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a setup fee
  <br><br>
- <strong>SubscriptionProductSetupFeesService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsSetupFees</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/setup-fees
  &nbsp;&nbsp;&nbsp;&nbsp;Create a setup fee
  <br><br>
- <strong>SubscriptionProductVersionRetirementsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsVersionsRetirements</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/versions/retirements
  &nbsp;&nbsp;&nbsp;&nbsp;List all product version retirements
  <br><br>
- <strong>SubscriptionProductVersionRetirementsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsVersionsRetirementsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/versions/retirements/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a product version retirement
  <br><br>
- <strong>SubscriptionProductVersionRetirementsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsVersionsRetirementsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/versions/retirements/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search product version retirements
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsVersions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/versions
  &nbsp;&nbsp;&nbsp;&nbsp;List all product versions
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsVersionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/versions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a product version
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsVersionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/versions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search product versions
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsVersionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/versions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a product version
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsVersions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/versions
  &nbsp;&nbsp;&nbsp;&nbsp;Create a product version
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsVersionsIdActivate</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/versions/{id}/activate
  &nbsp;&nbsp;&nbsp;&nbsp;Activate a product version
  <br><br>
- <strong>SubscriptionProductVersionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsVersionsIdRetire</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/versions/{id}/retire
  &nbsp;&nbsp;&nbsp;&nbsp;Retire a product version
  <br><br>
- <strong>SubscriptionProductsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProducts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products
  &nbsp;&nbsp;&nbsp;&nbsp;List all products
  <br><br>
- <strong>SubscriptionProductsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a product
  <br><br>
- <strong>SubscriptionProductsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsProductsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/products/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search products
  <br><br>
- <strong>SubscriptionProductsService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsProductsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/products/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a product
  <br><br>
- <strong>SubscriptionProductsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProducts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products
  &nbsp;&nbsp;&nbsp;&nbsp;Create a product
  <br><br>
- <strong>SubscriptionProductsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsProductsIdRetire</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/products/{id}/retire
  &nbsp;&nbsp;&nbsp;&nbsp;Retire a product
  <br><br>
- <strong>SubscriptionSuspensionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSuspensions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/suspensions
  &nbsp;&nbsp;&nbsp;&nbsp;List all suspensions
  <br><br>
- <strong>SubscriptionSuspensionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSuspensionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/suspensions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a suspension
  <br><br>
- <strong>SubscriptionSuspensionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSuspensionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/suspensions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search suspensions
  <br><br>
- <strong>SubscriptionVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsVersions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/versions
  &nbsp;&nbsp;&nbsp;&nbsp;List all subscription versions
  <br><br>
- <strong>SubscriptionVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsVersionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/versions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a subscription version
  <br><br>
- <strong>SubscriptionVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsVersionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/versions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search subscription versions
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions
  &nbsp;&nbsp;&nbsp;&nbsp;List all subscriptions
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsIdInvoices</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/{id}/invoices
  &nbsp;&nbsp;&nbsp;&nbsp;Search subscription invoices
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>getSubscriptionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /subscriptions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search subscriptions
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>patchSubscriptionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /subscriptions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions
  &nbsp;&nbsp;&nbsp;&nbsp;Create a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdApplyChanges</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/apply-changes
  &nbsp;&nbsp;&nbsp;&nbsp;Apply changes to a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdInitialize</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/initialize
  &nbsp;&nbsp;&nbsp;&nbsp;Initialize a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdInitializeSubscriberPresent</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/initialize-subscriber-present
  &nbsp;&nbsp;&nbsp;&nbsp;Initialize a subscription with the subscriber present
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdReactivate</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/reactivate
  &nbsp;&nbsp;&nbsp;&nbsp;Reactivate a suspended subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdSuspend</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/suspend
  &nbsp;&nbsp;&nbsp;&nbsp;Suspend a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdTerminate</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/terminate
  &nbsp;&nbsp;&nbsp;&nbsp;Terminate a subscription
  <br><br>
- <strong>SubscriptionsService</strong><br>
  &nbsp;&nbsp;* <code>postSubscriptionsIdUpgradeProduct</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /subscriptions/{id}/upgrade-product
  &nbsp;&nbsp;&nbsp;&nbsp;Upgrade a subscription&#39;s product
  <br><br>
- <strong>TokenVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokenVersions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/token-versions
  &nbsp;&nbsp;&nbsp;&nbsp;List all token versions
  <br><br>
- <strong>TokenVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokenVersionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/token-versions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a token version
  <br><br>
- <strong>TokenVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokenVersionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/token-versions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search token token versions
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentTokensId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/tokens/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a token
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokens</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/tokens
  &nbsp;&nbsp;&nbsp;&nbsp;List all tokens
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokensId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/tokens/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a token
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokensIdActiveVersion</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/tokens/{id}/active-version
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve the active token version
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTokensSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/tokens/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search tokens
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentTokensId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/tokens/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a token
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTokens</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/tokens
  &nbsp;&nbsp;&nbsp;&nbsp;Create a token
  <br><br>
- <strong>TokensService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTokensIdCreateTransactionForTokenUpdate</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/tokens/{id}/create-transaction-for-token-update
  &nbsp;&nbsp;&nbsp;&nbsp;Create a transaction for token update
  <br><br>
- <strong>TransactionClientPlatformsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionClientPlatforms</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transaction/client-platforms
  &nbsp;&nbsp;&nbsp;&nbsp;List all client platforms
  <br><br>
- <strong>TransactionClientPlatformsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionClientPlatformsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transaction/client-platforms/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve the client platform based on id
  <br><br>
- <strong>TransactionClientPlatformsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionClientPlatformsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transaction/client-platforms/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search client platforms
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentTransactionsTransactionIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/transactions/{transactionId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a transaction comment
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsTransactionIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{transactionId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;List all transaction comments
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsTransactionIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{transactionId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction comment
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsTransactionIdCommentsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{transactionId}/comments/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transaction comments
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentTransactionsTransactionIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/transactions/{transactionId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a transaction comment
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsTransactionIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{transactionId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;Create a transaction comment
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsTransactionIdCommentsIdPin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{transactionId}/comments/{id}/pin
  &nbsp;&nbsp;&nbsp;&nbsp;Pin a comment to the top
  <br><br>
- <strong>TransactionCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsTransactionIdCommentsIdUnpin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{transactionId}/comments/{id}/unpin
  &nbsp;&nbsp;&nbsp;&nbsp;Remove the pinned comment from the top
  <br><br>
- <strong>TransactionCompletionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsCompletions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/completions
  &nbsp;&nbsp;&nbsp;&nbsp;List all transaction completions
  <br><br>
- <strong>TransactionCompletionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsCompletionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/completions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction completion
  <br><br>
- <strong>TransactionCompletionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsCompletionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/completions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transaction completions
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentTransactionsInvoicesInvoiceIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/transactions/invoices/{invoiceId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a transaction comment
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesInvoiceIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/{invoiceId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;List all transaction invoice comments
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesInvoiceIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/{invoiceId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction invoice comment
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesInvoiceIdCommentsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/{invoiceId}/comments/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transaction invoice comments
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentTransactionsInvoicesInvoiceIdCommentsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/transactions/invoices/{invoiceId}/comments/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a transaction comment
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsInvoicesInvoiceIdComments</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/invoices/{invoiceId}/comments
  &nbsp;&nbsp;&nbsp;&nbsp;Create a transaction invoice comment
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsInvoicesInvoiceIdCommentsIdPin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/invoices/{invoiceId}/comments/{id}/pin
  &nbsp;&nbsp;&nbsp;&nbsp;Pin a comment to the top
  <br><br>
- <strong>TransactionInvoiceCommentsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsInvoicesInvoiceIdCommentsIdUnpin</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/invoices/{invoiceId}/comments/{id}/unpin
  &nbsp;&nbsp;&nbsp;&nbsp;Remove the pinned comment from the top
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoices</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices
  &nbsp;&nbsp;&nbsp;&nbsp;List all transaction invoices
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction invoice
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesIdCheckReplacementPossible</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/{id}/check-replacement-possible
  &nbsp;&nbsp;&nbsp;&nbsp;Check if a transaction invoice can be replaced
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesIdDocument</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/{id}/document
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an invoice document
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsInvoicesSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/invoices/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transaction invoices
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsInvoicesIdDerecognize</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/invoices/{id}/derecognize
  &nbsp;&nbsp;&nbsp;&nbsp;Derecognize a transaction invoice
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsInvoicesIdMarkPaid</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/invoices/{id}/mark-paid
  &nbsp;&nbsp;&nbsp;&nbsp;Mark a transaction invoice as paid
  <br><br>
- <strong>TransactionInvoicesService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsInvoicesIdReplace</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/invoices/{id}/replace
  &nbsp;&nbsp;&nbsp;&nbsp;Replace a transaction invoice
  <br><br>
- <strong>TransactionLineItemVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsLineItemVersions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/line-item-versions
  &nbsp;&nbsp;&nbsp;&nbsp;List all transaction line item versions
  <br><br>
- <strong>TransactionLineItemVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsLineItemVersionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/line-item-versions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction line item version
  <br><br>
- <strong>TransactionLineItemVersionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsLineItemVersionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/line-item-versions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transaction line item versions
  <br><br>
- <strong>TransactionLineItemVersionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsLineItemVersions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/line-item-versions
  &nbsp;&nbsp;&nbsp;&nbsp;Create a transaction line item version
  <br><br>
- <strong>TransactionVoidsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsVoids</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/voids
  &nbsp;&nbsp;&nbsp;&nbsp;List all transaction voids
  <br><br>
- <strong>TransactionVoidsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsVoidsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/voids/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction void
  <br><br>
- <strong>TransactionVoidsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsVoidsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/voids/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transaction voids
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>deletePaymentTransactionsByCredentialsCredentialsOneClickTokensId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /payment/transactions/by-credentials/{credentials}/one-click-tokens/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a one-click token by credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions
  &nbsp;&nbsp;&nbsp;&nbsp;List all transactions
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsByCredentialsCredentials</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/by-credentials/{credentials}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction by credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsByCredentialsCredentialsMobileSdkUrl</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/by-credentials/{credentials}/mobile-sdk-url
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a Mobile SDK URL by credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsByCredentialsCredentialsOneClickTokens</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/by-credentials/{credentials}/one-click-tokens
  &nbsp;&nbsp;&nbsp;&nbsp;List one-click tokens by credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsByCredentialsCredentialsPaymentMethodConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/by-credentials/{credentials}/payment-method-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;List available payment method configurations by credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsExport</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/export
  &nbsp;&nbsp;&nbsp;&nbsp;Export transactions
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a transaction
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdChargeFlowPaymentPageUrl</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/charge-flow/payment-page-url
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a charge flow payment page URL
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdCheckTokenCreationPossible</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/check-token-creation-possible
  &nbsp;&nbsp;&nbsp;&nbsp;Check if token can be created
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdCredentials</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/credentials
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve transaction credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdIframeJavascriptUrl</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/iframe-javascript-url
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an iFrame JavaScript URL
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdInvoiceDocument</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/invoice-document
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve an invoice document
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdLatestLineItemVersion</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/latest-line-item-version
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve the latest line item version
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdLightboxJavascriptUrl</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/lightbox-javascript-url
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a Lightbox JavaScript URL
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdPackingSlipDocument</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/packing-slip-document
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a packing slip document
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdPaymentMethodConfigurations</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/payment-method-configurations
  &nbsp;&nbsp;&nbsp;&nbsp;List available payment method configurations
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdPaymentPageUrl</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/payment-page-url
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a payment page URL
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsIdTerminalReceipts</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/{id}/terminal-receipts
  &nbsp;&nbsp;&nbsp;&nbsp;List terminal receipts
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>getPaymentTransactionsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /payment/transactions/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search transactions
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>patchPaymentTransactionsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /payment/transactions/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a transaction
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactions</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions
  &nbsp;&nbsp;&nbsp;&nbsp;Create a transaction
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsByCredentialsCredentialsOneClickTokensIdProcess</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/by-credentials/{credentials}/one-click-tokens/{id}/process
  &nbsp;&nbsp;&nbsp;&nbsp;Process via one-click token by credentials
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdChargeFlowApply</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/charge-flow/apply
  &nbsp;&nbsp;&nbsp;&nbsp;Process a transaction via charge flow
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdChargeFlowCancel</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/charge-flow/cancel
  &nbsp;&nbsp;&nbsp;&nbsp;Cancel a charge flow
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdChargeFlowUpdateRecipient</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/charge-flow/update-recipient
  &nbsp;&nbsp;&nbsp;&nbsp;Update a charge flow recipient
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdCompleteOffline</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/complete-offline
  &nbsp;&nbsp;&nbsp;&nbsp;Complete a transaction offline
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdCompleteOnline</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/complete-online
  &nbsp;&nbsp;&nbsp;&nbsp;Complete a transaction online
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdCompletePartiallyOffline</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/complete-partially-offline
  &nbsp;&nbsp;&nbsp;&nbsp;Complete a transaction offline partially
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdCompletePartiallyOnline</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/complete-partially-online
  &nbsp;&nbsp;&nbsp;&nbsp;Complete a transaction online partially
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdConfirm</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/confirm
  &nbsp;&nbsp;&nbsp;&nbsp;Confirm a transaction
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdProcessCardDetails</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/process-card-details
  &nbsp;&nbsp;&nbsp;&nbsp;Process a card transaction
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdProcessCardDetailsThreed</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/process-card-details-threed
  &nbsp;&nbsp;&nbsp;&nbsp;Process a card transaction with 3-D Secure
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdProcessWithToken</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/process-with-token
  &nbsp;&nbsp;&nbsp;&nbsp;Process a transaction via token
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdProcessWithoutInteraction</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/process-without-interaction
  &nbsp;&nbsp;&nbsp;&nbsp;Process a transaction without user-interaction
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdVoidOffline</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/void-offline
  &nbsp;&nbsp;&nbsp;&nbsp;Void a transaction offline
  <br><br>
- <strong>TransactionsService</strong><br>
  &nbsp;&nbsp;* <code>postPaymentTransactionsIdVoidOnline</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /payment/transactions/{id}/void-online
  &nbsp;&nbsp;&nbsp;&nbsp;Void a transaction online
  <br><br>
- <strong>WebAppsService</strong><br>
  &nbsp;&nbsp;* <code>getWebAppsInstalled</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /web-apps/installed
  &nbsp;&nbsp;&nbsp;&nbsp;Check whether the web app is installed
  <br><br>
- <strong>WebAppsService</strong><br>
  &nbsp;&nbsp;* <code>postWebAppsConfirmCode</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /web-apps/confirm/{code}
  &nbsp;&nbsp;&nbsp;&nbsp;Confirm a web app installation
  <br><br>
- <strong>WebAppsService</strong><br>
  &nbsp;&nbsp;* <code>postWebAppsUninstall</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /web-apps/uninstall
  &nbsp;&nbsp;&nbsp;&nbsp;Uninstall a web app
  <br><br>
- <strong>WebhookEncryptionKeysService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksEncryptionKeysId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/encryption-keys/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a webhook encryption key
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>deleteWebhooksListenersBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /webhooks/listeners/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Delete multiple webhook listeners
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>deleteWebhooksListenersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /webhooks/listeners/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a webhook listener
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksListeners</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/listeners
  &nbsp;&nbsp;&nbsp;&nbsp;List all webhook listeners
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksListenersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/listeners/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a webhook listener
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksListenersSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/listeners/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search webhook listeners
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>patchWebhooksListenersBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /webhooks/listeners/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Update multiple webhook listeners
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>patchWebhooksListenersId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /webhooks/listeners/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a webhook listener
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>postWebhooksListeners</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /webhooks/listeners
  &nbsp;&nbsp;&nbsp;&nbsp;Create a webhook listener
  <br><br>
- <strong>WebhookListenersService</strong><br>
  &nbsp;&nbsp;* <code>postWebhooksListenersBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /webhooks/listeners/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Create multiple webhook listeners
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>deleteWebhooksUrlsBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /webhooks/urls/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Delete multiple webhook URLs
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>deleteWebhooksUrlsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>DELETE</strong> /webhooks/urls/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Delete a webhook URL
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksUrls</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/urls
  &nbsp;&nbsp;&nbsp;&nbsp;List all webhook URLs
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksUrlsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/urls/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Retrieve a webhook URL
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>getWebhooksUrlsSearch</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>GET</strong> /webhooks/urls/search
  &nbsp;&nbsp;&nbsp;&nbsp;Search webhook URLs
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>patchWebhooksUrlsBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /webhooks/urls/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Update multiple webhook URLs
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>patchWebhooksUrlsId</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>PATCH</strong> /webhooks/urls/{id}
  &nbsp;&nbsp;&nbsp;&nbsp;Update a webhook URL
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>postWebhooksUrls</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /webhooks/urls
  &nbsp;&nbsp;&nbsp;&nbsp;Create a webhook URL
  <br><br>
- <strong>WebhookURLsService</strong><br>
  &nbsp;&nbsp;* <code>postWebhooksUrlsBulk</code>
  &nbsp;&nbsp;&nbsp;&nbsp;<strong>POST</strong> /webhooks/urls/bulk
  &nbsp;&nbsp;&nbsp;&nbsp;Create multiple webhook URLs
  <br><br>

</details>

## Documentation for Models
Additional Api models documentation: [*link*](https://checkout.postfinance.ch/en-us/doc/api/web-service#_models)<br>
<details>
<summary>Click here to see full list of models</summary>

<p><strong>Models:</strong></p>

* <strong>AbstractAccountUpdate</strong>
* <strong>AbstractApplicationUserUpdate</strong>
* <strong>AbstractCustomerActive</strong>
* <strong>AbstractCustomerAddressActive</strong>
* <strong>AbstractCustomerCommentActive</strong>
* <strong>AbstractHumanUserUpdate</strong>
* <strong>AbstractPaymentConnectorConfigurationUpdate</strong>
* <strong>AbstractPaymentLinkUpdate</strong>
* <strong>AbstractPaymentMethodConfigurationUpdate</strong>
* <strong>AbstractPaymentProcessorConfigurationActive</strong>
* <strong>AbstractPaymentTerminalUpdate</strong>
* <strong>AbstractRefundCommentActive</strong>
* <strong>AbstractRoleUpdate</strong>
* <strong>AbstractSingleSignOnUserUpdate</strong>
* <strong>AbstractSpaceUpdate</strong>
* <strong>AbstractSubscriberUpdate</strong>
* <strong>AbstractSubscriptionAffiliateUpdate</strong>
* <strong>AbstractSubscriptionMetricUpdate</strong>
* <strong>AbstractSubscriptionProductActive</strong>
* <strong>AbstractTokenUpdate</strong>
* <strong>AbstractTransactionCommentActive</strong>
* <strong>AbstractTransactionInvoiceCommentActive</strong>
* <strong>AbstractTransactionPending</strong>
* <strong>AbstractWebhookListenerUpdate</strong>
* <strong>AbstractWebhookUrlUpdate</strong>
* <strong>Account</strong>
* <strong>AccountCreate</strong>
* <strong>AccountListResponse</strong>
* <strong>AccountSearchResponse</strong>
* <strong>AccountState</strong>
* <strong>AccountType</strong>
* <strong>AccountUpdate</strong>
* <strong>Address</strong>
* <strong>AddressCreate</strong>
* <strong>AnalyticsQueryExecutionRequest</strong>
* <strong>AnalyticsQueryExecutionResponse</strong>
* <strong>ApplicationKeyState</strong>
* <strong>ApplicationUser</strong>
* <strong>ApplicationUserCreate</strong>
* <strong>ApplicationUserCreateWithMacKey</strong>
* <strong>ApplicationUserListResponse</strong>
* <strong>ApplicationUserSearchResponse</strong>
* <strong>ApplicationUserUpdate</strong>
* <strong>AuthenticatedCardData</strong>
* <strong>AuthenticatedCardDataCreate</strong>
* <strong>AuthenticatedCardRequest</strong>
* <strong>BankAccount</strong>
* <strong>BankAccountEnvironment</strong>
* <strong>BankAccountListResponse</strong>
* <strong>BankAccountSearchResponse</strong>
* <strong>BankAccountState</strong>
* <strong>BankAccountType</strong>
* <strong>BankTransaction</strong>
* <strong>BankTransactionFlowDirection</strong>
* <strong>BankTransactionListResponse</strong>
* <strong>BankTransactionSearchResponse</strong>
* <strong>BankTransactionSource</strong>
* <strong>BankTransactionState</strong>
* <strong>BankTransactionType</strong>
* <strong>BillingCycleModel</strong>
* <strong>BillingCycleType</strong>
* <strong>BillingDayCustomization</strong>
* <strong>CardAuthenticationResponse</strong>
* <strong>CardAuthenticationVersion</strong>
* <strong>CardCryptogram</strong>
* <strong>CardCryptogramCreate</strong>
* <strong>CardholderAuthentication</strong>
* <strong>CardholderAuthenticationCreate</strong>
* <strong>Charge</strong>
* <strong>ChargeAttempt</strong>
* <strong>ChargeAttemptEnvironment</strong>
* <strong>ChargeAttemptListResponse</strong>
* <strong>ChargeAttemptSearchResponse</strong>
* <strong>ChargeAttemptState</strong>
* <strong>ChargeBankTransaction</strong>
* <strong>ChargeBankTransactionListResponse</strong>
* <strong>ChargeBankTransactionSearchResponse</strong>
* <strong>ChargeFlow</strong>
* <strong>ChargeFlowLevel</strong>
* <strong>ChargeFlowLevelConfiguration</strong>
* <strong>ChargeFlowLevelConfigurationType</strong>
* <strong>ChargeFlowLevelListResponse</strong>
* <strong>ChargeFlowLevelPaymentLink</strong>
* <strong>ChargeFlowLevelPaymentLinkListResponse</strong>
* <strong>ChargeFlowLevelPaymentLinkSearchResponse</strong>
* <strong>ChargeFlowLevelSearchResponse</strong>
* <strong>ChargeFlowLevelState</strong>
* <strong>ChargeFlowListResponse</strong>
* <strong>ChargeFlowSearchResponse</strong>
* <strong>ChargeState</strong>
* <strong>ChargeType</strong>
* <strong>ClientPlatformInformationListResponse</strong>
* <strong>ClientPlatformInformationSearchResponse</strong>
* <strong>CompletionLineItem</strong>
* <strong>CompletionLineItemCreate</strong>
* <strong>CompletionListResponse</strong>
* <strong>CompletionSearchResponse</strong>
* <strong>Condition</strong>
* <strong>ConditionType</strong>
* <strong>ConditionTypeListResponse</strong>
* <strong>ConditionTypeSearchResponse</strong>
* <strong>ConnectorInvocation</strong>
* <strong>ConnectorInvocationStage</strong>
* <strong>CountryListResponse</strong>
* <strong>CountrySearchResponse</strong>
* <strong>CreationEntityState</strong>
* <strong>CurrencyBankAccount</strong>
* <strong>CurrencyBankAccountListResponse</strong>
* <strong>CurrencyBankAccountSearchResponse</strong>
* <strong>CurrencyListResponse</strong>
* <strong>CurrencySearchResponse</strong>
* <strong>Customer</strong>
* <strong>CustomerActive</strong>
* <strong>CustomerAddress</strong>
* <strong>CustomerAddressActive</strong>
* <strong>CustomerAddressCreate</strong>
* <strong>CustomerAddressListResponse</strong>
* <strong>CustomerAddressSearchResponse</strong>
* <strong>CustomerAddressType</strong>
* <strong>CustomerComment</strong>
* <strong>CustomerCommentActive</strong>
* <strong>CustomerCommentCreate</strong>
* <strong>CustomerCommentListResponse</strong>
* <strong>CustomerCommentSearchResponse</strong>
* <strong>CustomerCreate</strong>
* <strong>CustomerEmailAddressListResponse</strong>
* <strong>CustomerListResponse</strong>
* <strong>CustomerPostalAddress</strong>
* <strong>CustomerPostalAddressCreate</strong>
* <strong>CustomerSearchResponse</strong>
* <strong>CustomersPresence</strong>
* <strong>DataCollectionType</strong>
* <strong>DeliveryIndication</strong>
* <strong>DeliveryIndicationDecisionReason</strong>
* <strong>DeliveryIndicationListResponse</strong>
* <strong>DeliveryIndicationSearchResponse</strong>
* <strong>DeliveryIndicationState</strong>
* <strong>DisplayableDayOfWeek</strong>
* <strong>DisplayableMonth</strong>
* <strong>DocumentTemplate</strong>
* <strong>DocumentTemplateListResponse</strong>
* <strong>DocumentTemplateSearchResponse</strong>
* <strong>DocumentTemplateType</strong>
* <strong>DocumentTemplateTypeGroup</strong>
* <strong>DocumentTemplateTypeListResponse</strong>
* <strong>DocumentTemplateTypeSearchResponse</strong>
* <strong>DunningCase</strong>
* <strong>DunningCaseListResponse</strong>
* <strong>DunningCaseSearchResponse</strong>
* <strong>DunningCaseState</strong>
* <strong>DunningCondition</strong>
* <strong>DunningConditionType</strong>
* <strong>DunningFlow</strong>
* <strong>DunningFlowLevel</strong>
* <strong>DunningFlowLevelListResponse</strong>
* <strong>DunningFlowLevelProcessor</strong>
* <strong>DunningFlowLevelSearchResponse</strong>
* <strong>DunningFlowListResponse</strong>
* <strong>DunningFlowSearchResponse</strong>
* <strong>DunningFlowType</strong>
* <strong>Environment</strong>
* <strong>ExpressCheckoutCreateResponse</strong>
* <strong>ExpressCheckoutSession</strong>
* <strong>ExpressCheckoutSessionCreate</strong>
* <strong>ExpressCheckoutSessionState</strong>
* <strong>ExpressCheckoutShippingOption</strong>
* <strong>ExpressCheckoutWalletType</strong>
* <strong>ExternalTransferBankTransaction</strong>
* <strong>ExternalTransferBankTransactionListResponse</strong>
* <strong>ExternalTransferBankTransactionSearchResponse</strong>
* <strong>FacadeUserFriendlyQueryStatusModel</strong>
* <strong>FailureCategory</strong>
* <strong>FailureReason</strong>
* <strong>Feature</strong>
* <strong>FeatureCategory</strong>
* <strong>Gender</strong>
* <strong>HumanUser</strong>
* <strong>HumanUserCreate</strong>
* <strong>HumanUserListResponse</strong>
* <strong>HumanUserSearchResponse</strong>
* <strong>HumanUserUpdate</strong>
* <strong>InternalTransferBankTransaction</strong>
* <strong>InternalTransferBankTransactionListResponse</strong>
* <strong>InternalTransferBankTransactionSearchResponse</strong>
* <strong>InvoiceCommentListResponse</strong>
* <strong>InvoiceCommentSearchResponse</strong>
* <strong>InvoiceListResponse</strong>
* <strong>InvoiceSearchResponse</strong>
* <strong>Label</strong>
* <strong>LabelDescriptor</strong>
* <strong>LabelDescriptorCategory</strong>
* <strong>LabelDescriptorGroup</strong>
* <strong>LabelDescriptorGroupListResponse</strong>
* <strong>LabelDescriptorGroupSearchResponse</strong>
* <strong>LabelDescriptorListResponse</strong>
* <strong>LabelDescriptorSearchResponse</strong>
* <strong>LabelDescriptorType</strong>
* <strong>LanguageListResponse</strong>
* <strong>LanguageSearchResponse</strong>
* <strong>LegalOrganizationForm</strong>
* <strong>LegalOrganizationFormListResponse</strong>
* <strong>LegalOrganizationFormSearchResponse</strong>
* <strong>LineItem</strong>
* <strong>LineItemAttribute</strong>
* <strong>LineItemAttributeCreate</strong>
* <strong>LineItemCreate</strong>
* <strong>LineItemReduction</strong>
* <strong>LineItemReductionCreate</strong>
* <strong>LineItemType</strong>
* <strong>LineItemVersionListResponse</strong>
* <strong>LineItemVersionSearchResponse</strong>
* <strong>LocalizedString</strong>
* <strong>ManualTask</strong>
* <strong>ManualTaskAction</strong>
* <strong>ManualTaskActionStyle</strong>
* <strong>ManualTaskListResponse</strong>
* <strong>ManualTaskSearchResponse</strong>
* <strong>ManualTaskState</strong>
* <strong>ManualTaskType</strong>
* <strong>MetricListResponse</strong>
* <strong>MetricSearchResponse</strong>
* <strong>MetricUsageReportListResponse</strong>
* <strong>MetricUsageReportSearchResponse</strong>
* <strong>OneClickPaymentMode</strong>
* <strong>PanType</strong>
* <strong>PaymentAdjustment</strong>
* <strong>PaymentAdjustmentType</strong>
* <strong>PaymentConnector</strong>
* <strong>PaymentConnectorConfiguration</strong>
* <strong>PaymentConnectorConfigurationCreate</strong>
* <strong>PaymentConnectorConfigurationListResponse</strong>
* <strong>PaymentConnectorConfigurationSearchResponse</strong>
* <strong>PaymentConnectorConfigurationUpdate</strong>
* <strong>PaymentConnectorFeature</strong>
* <strong>PaymentConnectorListResponse</strong>
* <strong>PaymentConnectorSearchResponse</strong>
* <strong>PaymentContract</strong>
* <strong>PaymentContractState</strong>
* <strong>PaymentContractType</strong>
* <strong>PaymentInformationHash</strong>
* <strong>PaymentInformationHashType</strong>
* <strong>PaymentLink</strong>
* <strong>PaymentLinkActive</strong>
* <strong>PaymentLinkAddressHandlingMode</strong>
* <strong>PaymentLinkCreate</strong>
* <strong>PaymentLinkListResponse</strong>
* <strong>PaymentLinkProtectionMode</strong>
* <strong>PaymentLinkSearchResponse</strong>
* <strong>PaymentLinkUpdate</strong>
* <strong>PaymentMethod</strong>
* <strong>PaymentMethodBrand</strong>
* <strong>PaymentMethodBrandListResponse</strong>
* <strong>PaymentMethodBrandSearchResponse</strong>
* <strong>PaymentMethodConfiguration</strong>
* <strong>PaymentMethodConfigurationActive</strong>
* <strong>PaymentMethodConfigurationCreate</strong>
* <strong>PaymentMethodConfigurationListResponse</strong>
* <strong>PaymentMethodConfigurationSearchResponse</strong>
* <strong>PaymentMethodConfigurationUpdate</strong>
* <strong>PaymentMethodListResponse</strong>
* <strong>PaymentMethodSearchResponse</strong>
* <strong>PaymentPrimaryRiskTaker</strong>
* <strong>PaymentProcessor</strong>
* <strong>PaymentProcessorConfiguration</strong>
* <strong>PaymentProcessorConfigurationActive</strong>
* <strong>PaymentProcessorConfigurationCreate</strong>
* <strong>PaymentProcessorConfigurationListResponse</strong>
* <strong>PaymentProcessorConfigurationSearchResponse</strong>
* <strong>PaymentProcessorListResponse</strong>
* <strong>PaymentProcessorSearchResponse</strong>
* <strong>PaymentTerminal</strong>
* <strong>PaymentTerminalAddress</strong>
* <strong>PaymentTerminalConfiguration</strong>
* <strong>PaymentTerminalConfigurationState</strong>
* <strong>PaymentTerminalConfigurationVersion</strong>
* <strong>PaymentTerminalConfigurationVersionState</strong>
* <strong>PaymentTerminalCreate</strong>
* <strong>PaymentTerminalLocation</strong>
* <strong>PaymentTerminalLocationState</strong>
* <strong>PaymentTerminalLocationVersion</strong>
* <strong>PaymentTerminalLocationVersionState</strong>
* <strong>PaymentTerminalPreparing</strong>
* <strong>PaymentTerminalReceiptType</strong>
* <strong>PaymentTerminalState</strong>
* <strong>PaymentTerminalTransactionSummaryReference</strong>
* <strong>PaymentTerminalType</strong>
* <strong>PaymentTerminalUpdate</strong>
* <strong>Permission</strong>
* <strong>PermissionListResponse</strong>
* <strong>PermissionSearchResponse</strong>
* <strong>PersistableCurrencyAmount</strong>
* <strong>PersistableCurrencyAmountUpdate</strong>
* <strong>ProductComponentGroupListResponse</strong>
* <strong>ProductComponentGroupSearchResponse</strong>
* <strong>ProductComponentListResponse</strong>
* <strong>ProductComponentSearchResponse</strong>
* <strong>ProductFeeType</strong>
* <strong>ProductListResponse</strong>
* <strong>ProductMeteredFee</strong>
* <strong>ProductMeteredFeeListResponse</strong>
* <strong>ProductMeteredFeeSearchResponse</strong>
* <strong>ProductMeteredFeeTierListResponse</strong>
* <strong>ProductMeteredFeeTierSearchResponse</strong>
* <strong>ProductMeteredFeeUpdate</strong>
* <strong>ProductMeteredTierFee</strong>
* <strong>ProductMeteredTierFeeUpdate</strong>
* <strong>ProductMeteredTierPricing</strong>
* <strong>ProductPeriodFee</strong>
* <strong>ProductPeriodFeeListResponse</strong>
* <strong>ProductPeriodFeeSearchResponse</strong>
* <strong>ProductPeriodFeeUpdate</strong>
* <strong>ProductRetirementListResponse</strong>
* <strong>ProductRetirementSearchResponse</strong>
* <strong>ProductSearchResponse</strong>
* <strong>ProductSetupFee</strong>
* <strong>ProductSetupFeeListResponse</strong>
* <strong>ProductSetupFeeSearchResponse</strong>
* <strong>ProductSetupFeeUpdate</strong>
* <strong>ProductVersionListResponse</strong>
* <strong>ProductVersionRetirementListResponse</strong>
* <strong>ProductVersionRetirementSearchResponse</strong>
* <strong>ProductVersionSearchResponse</strong>
* <strong>RecurringIndicator</strong>
* <strong>Refund</strong>
* <strong>RefundBankTransaction</strong>
* <strong>RefundBankTransactionListResponse</strong>
* <strong>RefundBankTransactionSearchResponse</strong>
* <strong>RefundComment</strong>
* <strong>RefundCommentActive</strong>
* <strong>RefundCommentCreate</strong>
* <strong>RefundCommentListResponse</strong>
* <strong>RefundCommentSearchResponse</strong>
* <strong>RefundCreate</strong>
* <strong>RefundListResponse</strong>
* <strong>RefundRecoveryBankTransaction</strong>
* <strong>RefundRecoveryBankTransactionListResponse</strong>
* <strong>RefundRecoveryBankTransactionSearchResponse</strong>
* <strong>RefundSearchResponse</strong>
* <strong>RefundState</strong>
* <strong>RefundType</strong>
* <strong>RenderedDocument</strong>
* <strong>RenderedTerminalReceipt</strong>
* <strong>RenderedTerminalReceiptListResponse</strong>
* <strong>RestAddressFormat</strong>
* <strong>RestAddressFormatField</strong>
* <strong>RestApiBulkOperationResult</strong>
* <strong>RestApiErrorResponse</strong>
* <strong>RestApplicationUserMacKey</strong>
* <strong>RestApplicationUserMacKeyCreated</strong>
* <strong>RestCountry</strong>
* <strong>RestCountryState</strong>
* <strong>RestCurrency</strong>
* <strong>RestCustomerEmailAddress</strong>
* <strong>RestLanguage</strong>
* <strong>ResultPortionModel</strong>
* <strong>Role</strong>
* <strong>RoleCreate</strong>
* <strong>RoleListResponse</strong>
* <strong>RoleSearchResponse</strong>
* <strong>RoleState</strong>
* <strong>RoleUpdate</strong>
* <strong>SalesChannel</strong>
* <strong>SalesChannelListResponse</strong>
* <strong>SalesChannelSearchResponse</strong>
* <strong>Scope</strong>
* <strong>ScopeSingleSignOnProvider</strong>
* <strong>SingleSignOnUser</strong>
* <strong>SingleSignOnUserCreate</strong>
* <strong>SingleSignOnUserListResponse</strong>
* <strong>SingleSignOnUserSearchResponse</strong>
* <strong>SingleSignOnUserUpdate</strong>
* <strong>SortingOrder</strong>
* <strong>Space</strong>
* <strong>SpaceAddress</strong>
* <strong>SpaceAddressCreate</strong>
* <strong>SpaceCreate</strong>
* <strong>SpaceListResponse</strong>
* <strong>SpaceSearchResponse</strong>
* <strong>SpaceUpdate</strong>
* <strong>SpaceView</strong>
* <strong>StaticValue</strong>
* <strong>StaticValueListResponse</strong>
* <strong>StaticValueSearchResponse</strong>
* <strong>SubmittedAnalyticsQueryExecution</strong>
* <strong>Subscriber</strong>
* <strong>SubscriberActive</strong>
* <strong>SubscriberCreate</strong>
* <strong>SubscriberListResponse</strong>
* <strong>SubscriberSearchResponse</strong>
* <strong>SubscriberUpdate</strong>
* <strong>Subscription</strong>
* <strong>SubscriptionAffiliate</strong>
* <strong>SubscriptionAffiliateCreate</strong>
* <strong>SubscriptionAffiliateDeleted</strong>
* <strong>SubscriptionAffiliateDeleting</strong>
* <strong>SubscriptionAffiliateInactive</strong>
* <strong>SubscriptionAffiliateListResponse</strong>
* <strong>SubscriptionAffiliateSearchResponse</strong>
* <strong>SubscriptionAffiliateUpdate</strong>
* <strong>SubscriptionCharge</strong>
* <strong>SubscriptionChargeCreate</strong>
* <strong>SubscriptionChargeListResponse</strong>
* <strong>SubscriptionChargeProcessingType</strong>
* <strong>SubscriptionChargeSearchResponse</strong>
* <strong>SubscriptionChargeState</strong>
* <strong>SubscriptionChargeType</strong>
* <strong>SubscriptionComponentConfiguration</strong>
* <strong>SubscriptionComponentReferenceConfiguration</strong>
* <strong>SubscriptionCreateRequest</strong>
* <strong>SubscriptionInitializeSubscriberPresentRequest</strong>
* <strong>SubscriptionLedgerEntry</strong>
* <strong>SubscriptionLedgerEntryCreate</strong>
* <strong>SubscriptionLedgerEntryListResponse</strong>
* <strong>SubscriptionLedgerEntrySearchResponse</strong>
* <strong>SubscriptionLedgerEntryState</strong>
* <strong>SubscriptionListResponse</strong>
* <strong>SubscriptionMetric</strong>
* <strong>SubscriptionMetricActive</strong>
* <strong>SubscriptionMetricCreate</strong>
* <strong>SubscriptionMetricType</strong>
* <strong>SubscriptionMetricUpdate</strong>
* <strong>SubscriptionMetricUsageReport</strong>
* <strong>SubscriptionMetricUsageReportCreate</strong>
* <strong>SubscriptionPending</strong>
* <strong>SubscriptionPeriodBill</strong>
* <strong>SubscriptionPeriodBillListResponse</strong>
* <strong>SubscriptionPeriodBillSearchResponse</strong>
* <strong>SubscriptionPeriodBillState</strong>
* <strong>SubscriptionProduct</strong>
* <strong>SubscriptionProductActive</strong>
* <strong>SubscriptionProductComponent</strong>
* <strong>SubscriptionProductComponentGroup</strong>
* <strong>SubscriptionProductComponentGroupUpdate</strong>
* <strong>SubscriptionProductComponentReference</strong>
* <strong>SubscriptionProductComponentReferenceState</strong>
* <strong>SubscriptionProductComponentUpdate</strong>
* <strong>SubscriptionProductCreate</strong>
* <strong>SubscriptionProductRetirement</strong>
* <strong>SubscriptionProductRetirementRequest</strong>
* <strong>SubscriptionProductState</strong>
* <strong>SubscriptionProductVersion</strong>
* <strong>SubscriptionProductVersionPending</strong>
* <strong>SubscriptionProductVersionRetirement</strong>
* <strong>SubscriptionProductVersionRetirementRequest</strong>
* <strong>SubscriptionProductVersionState</strong>
* <strong>SubscriptionSearchResponse</strong>
* <strong>SubscriptionState</strong>
* <strong>SubscriptionSuspension</strong>
* <strong>SubscriptionSuspensionAction</strong>
* <strong>SubscriptionSuspensionReason</strong>
* <strong>SubscriptionSuspensionState</strong>
* <strong>SubscriptionUpdate</strong>
* <strong>SubscriptionUpdateRequest</strong>
* <strong>SubscriptionVersion</strong>
* <strong>SubscriptionVersionListResponse</strong>
* <strong>SubscriptionVersionSearchResponse</strong>
* <strong>SubscriptionVersionState</strong>
* <strong>SuspensionCreationRequest</strong>
* <strong>SuspensionListResponse</strong>
* <strong>SuspensionSearchResponse</strong>
* <strong>Tax</strong>
* <strong>TaxCalculation</strong>
* <strong>TaxClass</strong>
* <strong>TaxCreate</strong>
* <strong>TenantDatabase</strong>
* <strong>TerminalListResponse</strong>
* <strong>TerminalReceiptFormat</strong>
* <strong>TerminalSearchResponse</strong>
* <strong>Token</strong>
* <strong>TokenCreate</strong>
* <strong>TokenListResponse</strong>
* <strong>TokenSearchResponse</strong>
* <strong>TokenUpdate</strong>
* <strong>TokenVersion</strong>
* <strong>TokenVersionListResponse</strong>
* <strong>TokenVersionRetryStrategy</strong>
* <strong>TokenVersionSearchResponse</strong>
* <strong>TokenVersionState</strong>
* <strong>TokenVersionType</strong>
* <strong>TokenizationMode</strong>
* <strong>TokenizedCardData</strong>
* <strong>TokenizedCardDataCreate</strong>
* <strong>TokenizedCardRequest</strong>
* <strong>Transaction</strong>
* <strong>TransactionClientPlatformInformation</strong>
* <strong>TransactionComment</strong>
* <strong>TransactionCommentActive</strong>
* <strong>TransactionCommentCreate</strong>
* <strong>TransactionCommentListResponse</strong>
* <strong>TransactionCommentSearchResponse</strong>
* <strong>TransactionCompletion</strong>
* <strong>TransactionCompletionBehavior</strong>
* <strong>TransactionCompletionDetails</strong>
* <strong>TransactionCompletionMode</strong>
* <strong>TransactionCompletionState</strong>
* <strong>TransactionCreate</strong>
* <strong>TransactionEnvironmentSelectionStrategy</strong>
* <strong>TransactionGroup</strong>
* <strong>TransactionGroupState</strong>
* <strong>TransactionInvoice</strong>
* <strong>TransactionInvoiceComment</strong>
* <strong>TransactionInvoiceCommentActive</strong>
* <strong>TransactionInvoiceCommentCreate</strong>
* <strong>TransactionInvoiceReplacement</strong>
* <strong>TransactionInvoiceState</strong>
* <strong>TransactionLineItemVersion</strong>
* <strong>TransactionLineItemVersionCreate</strong>
* <strong>TransactionLineItemVersionState</strong>
* <strong>TransactionListResponse</strong>
* <strong>TransactionPending</strong>
* <strong>TransactionSearchResponse</strong>
* <strong>TransactionState</strong>
* <strong>TransactionUserInterfaceType</strong>
* <strong>TransactionVoid</strong>
* <strong>TransactionVoidListResponse</strong>
* <strong>TransactionVoidMode</strong>
* <strong>TransactionVoidSearchResponse</strong>
* <strong>TransactionVoidState</strong>
* <strong>TwoFactorAuthenticationType</strong>
* <strong>User</strong>
* <strong>UserAccountRole</strong>
* <strong>UserAccountRoleListResponse</strong>
* <strong>UserSpaceRole</strong>
* <strong>UserSpaceRoleListResponse</strong>
* <strong>UserType</strong>
* <strong>WalletType</strong>
* <strong>WebAppConfirmationResponse</strong>
* <strong>WebhookIdentity</strong>
* <strong>WebhookListener</strong>
* <strong>WebhookListenerCreate</strong>
* <strong>WebhookListenerEntity</strong>
* <strong>WebhookListenerListResponse</strong>
* <strong>WebhookListenerSearchResponse</strong>
* <strong>WebhookListenerUpdate</strong>
* <strong>WebhookURLListResponse</strong>
* <strong>WebhookURLSearchResponse</strong>
* <strong>WebhookUrl</strong>
* <strong>WebhookUrlCreate</strong>
* <strong>WebhookUrlUpdate</strong>

</details>

## Error Codes

When working with webhooks, the `PostFinanceCheckoutSdkException` may throw error codes to help with debugging.

### Error Code Categories

| **Range** | **Category** | **Description** |
|-----------|--------------|-----------------|
| **404** | Not Found | Indicates that the requested resource could not be found or the endpoint returned an empty response |
| **1000–1999** | Client-Side Errors | Errors typically caused by invalid input |
| **2000–2999** | Server-Side Errors | Errors typically caused by incorrect data provided by the server |

### Error Code Reference

| **Code** | **Error Name** | **Description** | **Category** |
|----------|----------------|-----------------|--------------|
| 404 | `UNKNOWN_WEBHOOK_ENCRYPTION_PUBLIC_KEY` | Unknown webhook signature public key | Not Found |
| 1000 | `WEBHOOK_ENCRYPTION_GENERAL_ERROR` | General webhook encryption error | Client-Side |
| 1001 | `INVALID_WEBHOOK_ENCRYPTION_PUBLIC_KEY` | Invalid webhook signature public key | Client-Side |
| 1002 | `INVALID_WEBHOOK_ENCRYPTION_HEADER_FORMAT` | Invalid webhook signature header | Client-Side |
| 1003 | `UNSUPPORTED_WEBHOOK_ENCRYPTION_ALGORYTHM` | Unsupported webhook signature algorithm | Client-Side |
| 1004 | `UNKNOWN_WEBHOOK_ENCRYPTION_PROVIDER` | Unknown webhook encryption provider | Client-Side |
| 1005 | `WEBHOOK_ENCRYPTION_VERIFIER_INIT_ERROR` | Encryption verifier initialization error | Client-Side |
| 1006 | `WEBHOOK_ENCRYPTION_VERIFIER_CONTENT_UPDATE_ERROR` | Error during content update in encryption verifier | Client-Side |
| 1007 | `WEBHOOK_ENCRYPTION_SIGNATURE_VERIFICATION_FAILED` | Encryption signature verification failed | Client-Side |
| 1008 | `INVALID_WEBHOOK_ENCRYPTION_CONTENT_SIGNATURE` | Invalid webhook content signature | Client-Side |
| 2000 | `MISSING_WEBHOOK_ENCRYPTION_ALGORYTHM` | Missing webhook signature algorithm value | Server-Side |

### Usage Example
```php
try {
    // Webhook SDK operation
} catch (PostFinanceCheckoutSdkException $e) {
    switch ($e->getCode()) {
        case 1001: // INVALID_WEBHOOK_ENCRYPTION_PUBLIC_KEY
            // Handle invalid public key
            break;
        case 1007: // WEBHOOK_ENCRYPTION_SIGNATURE_VERIFICATION_FAILED
            // Handle signature verification failure
            break;
        default:
            // Handle other errors
            break;
    }
}
```

## Author
- Wallee Ecosystem Team<br><br>

*Automatically generated by the [OpenAPI Generator](https://openapi-generator.tech)*
<br>Generator version: 7.6.0

## License

Please see the [license file](https://github.com/pfpayments/php-sdk/blob/master/LICENSE) for more information.
