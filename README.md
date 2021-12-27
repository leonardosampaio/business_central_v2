# OpenAPIClient-php

(v1.0) Business Central Standard APIs


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$account_id = 'account_id_example'; // string | (v1.0) id for account
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getAccount($company_id, $account_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /companies({company_id})/accounts({account_id}) | Retrieve the properties and relationships of an object of type account for Dynamics 365 Business Central.
*AccountApi* | [**listAccounts**](docs/Api/AccountApi.md#listaccounts) | **GET** /companies({company_id})/accounts | Returns a list of accounts
*AgedAccountsPayableApi* | [**getAgedAccountsPayable**](docs/Api/AgedAccountsPayableApi.md#getagedaccountspayable) | **GET** /companies({company_id})/agedAccountsPayable({agedAccountsPayable_vendorId}) | Retrieve the properties and relationships of an object of type agedAccountsPayable for Dynamics 365 Business Central.
*AgedAccountsPayableApi* | [**listAgedAccountsPayable**](docs/Api/AgedAccountsPayableApi.md#listagedaccountspayable) | **GET** /companies({company_id})/agedAccountsPayable | Returns a list of agedAccountsPayable
*AgedAccountsReceivableApi* | [**getAgedAccountsReceivable**](docs/Api/AgedAccountsReceivableApi.md#getagedaccountsreceivable) | **GET** /companies({company_id})/agedAccountsReceivable({agedAccountsReceivable_customerId}) | Retrieve the properties and relationships of an object of type agedAccountsReceivable for Dynamics 365 Business Central.
*AgedAccountsReceivableApi* | [**listAgedAccountsReceivable**](docs/Api/AgedAccountsReceivableApi.md#listagedaccountsreceivable) | **GET** /companies({company_id})/agedAccountsReceivable | Returns a list of agedAccountsReceivable
*AttachmentsApi* | [**deleteAttachments**](docs/Api/AttachmentsApi.md#deleteattachments) | **DELETE** /companies({company_id})/attachments({attachments_parentId},{attachments_id}) | Deletes an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**deleteAttachmentsForJournalLine**](docs/Api/AttachmentsApi.md#deleteattachmentsforjournalline) | **DELETE** /companies({company_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Deletes an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**deleteAttachmentsForJournalLineForJournal**](docs/Api/AttachmentsApi.md#deleteattachmentsforjournallineforjournal) | **DELETE** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Deletes an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**getAttachments**](docs/Api/AttachmentsApi.md#getattachments) | **GET** /companies({company_id})/attachments({attachments_parentId},{attachments_id}) | Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.
*AttachmentsApi* | [**getAttachmentsForJournalLine**](docs/Api/AttachmentsApi.md#getattachmentsforjournalline) | **GET** /companies({company_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.
*AttachmentsApi* | [**getAttachmentsForJournalLineForJournal**](docs/Api/AttachmentsApi.md#getattachmentsforjournallineforjournal) | **GET** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.
*AttachmentsApi* | [**listAttachments**](docs/Api/AttachmentsApi.md#listattachments) | **GET** /companies({company_id})/attachments | Returns a list of attachments
*AttachmentsApi* | [**listAttachmentsForJournalLine**](docs/Api/AttachmentsApi.md#listattachmentsforjournalline) | **GET** /companies({company_id})/journalLines({journalLine_id})/attachments | Returns a list of attachments
*AttachmentsApi* | [**listAttachmentsForJournalLineForJournal**](docs/Api/AttachmentsApi.md#listattachmentsforjournallineforjournal) | **GET** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments | Returns a list of attachments
*AttachmentsApi* | [**patchAttachments**](docs/Api/AttachmentsApi.md#patchattachments) | **PATCH** /companies({company_id})/attachments({attachments_parentId},{attachments_id}) | Updates an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**patchAttachmentsForJournalLine**](docs/Api/AttachmentsApi.md#patchattachmentsforjournalline) | **PATCH** /companies({company_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Updates an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**patchAttachmentsForJournalLineForJournal**](docs/Api/AttachmentsApi.md#patchattachmentsforjournallineforjournal) | **PATCH** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Updates an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**postAttachments**](docs/Api/AttachmentsApi.md#postattachments) | **POST** /companies({company_id})/attachments | Creates an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**postAttachmentsForJournalLine**](docs/Api/AttachmentsApi.md#postattachmentsforjournalline) | **POST** /companies({company_id})/journalLines({journalLine_id})/attachments | Creates an object of type attachments in Dynamics 365 Business Central
*AttachmentsApi* | [**postAttachmentsForJournalLineForJournal**](docs/Api/AttachmentsApi.md#postattachmentsforjournallineforjournal) | **POST** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments | Creates an object of type attachments in Dynamics 365 Business Central
*BalanceSheetApi* | [**getBalanceSheet**](docs/Api/BalanceSheetApi.md#getbalancesheet) | **GET** /companies({company_id})/balanceSheet({balanceSheet_lineNumber}) | Retrieve the properties and relationships of an object of type balanceSheet for Dynamics 365 Business Central.
*BalanceSheetApi* | [**listBalanceSheet**](docs/Api/BalanceSheetApi.md#listbalancesheet) | **GET** /companies({company_id})/balanceSheet | Returns a list of balanceSheet
*BankAccountApi* | [**deleteBankAccount**](docs/Api/BankAccountApi.md#deletebankaccount) | **DELETE** /companies({company_id})/bankAccounts({bankAccount_id}) | Deletes an object of type bankAccount in Dynamics 365 Business Central
*BankAccountApi* | [**getBankAccount**](docs/Api/BankAccountApi.md#getbankaccount) | **GET** /companies({company_id})/bankAccounts({bankAccount_id}) | Retrieve the properties and relationships of an object of type bankAccount for Dynamics 365 Business Central.
*BankAccountApi* | [**listBankAccounts**](docs/Api/BankAccountApi.md#listbankaccounts) | **GET** /companies({company_id})/bankAccounts | Returns a list of bankAccounts
*BankAccountApi* | [**patchBankAccount**](docs/Api/BankAccountApi.md#patchbankaccount) | **PATCH** /companies({company_id})/bankAccounts({bankAccount_id}) | Updates an object of type bankAccount in Dynamics 365 Business Central
*BankAccountApi* | [**postBankAccount**](docs/Api/BankAccountApi.md#postbankaccount) | **POST** /companies({company_id})/bankAccounts | Creates an object of type bankAccount in Dynamics 365 Business Central
*CashFlowStatementApi* | [**getCashFlowStatement**](docs/Api/CashFlowStatementApi.md#getcashflowstatement) | **GET** /companies({company_id})/cashFlowStatement({cashFlowStatement_lineNumber}) | Retrieve the properties and relationships of an object of type cashFlowStatement for Dynamics 365 Business Central.
*CashFlowStatementApi* | [**listCashFlowStatement**](docs/Api/CashFlowStatementApi.md#listcashflowstatement) | **GET** /companies({company_id})/cashFlowStatement | Returns a list of cashFlowStatement
*CompanyApi* | [**getCompany**](docs/Api/CompanyApi.md#getcompany) | **GET** /companies({company_id}) | Retrieve the properties and relationships of an object of type company for Dynamics 365 Business Central.
*CompanyApi* | [**listCompanies**](docs/Api/CompanyApi.md#listcompanies) | **GET** /companies | Returns a list of companies
*CompanyInformationApi* | [**getCompanyInformation**](docs/Api/CompanyInformationApi.md#getcompanyinformation) | **GET** /companies({company_id})/companyInformation({companyInformation_id}) | Retrieve the properties and relationships of an object of type companyInformation for Dynamics 365 Business Central.
*CompanyInformationApi* | [**listCompanyInformation**](docs/Api/CompanyInformationApi.md#listcompanyinformation) | **GET** /companies({company_id})/companyInformation | Returns a list of companyInformation
*CompanyInformationApi* | [**patchCompanyInformation**](docs/Api/CompanyInformationApi.md#patchcompanyinformation) | **PATCH** /companies({company_id})/companyInformation({companyInformation_id}) | Updates an object of type companyInformation in Dynamics 365 Business Central
*CountryRegionApi* | [**deleteCountryRegion**](docs/Api/CountryRegionApi.md#deletecountryregion) | **DELETE** /companies({company_id})/countriesRegions({countryRegion_id}) | Deletes an object of type countryRegion in Dynamics 365 Business Central
*CountryRegionApi* | [**getCountryRegion**](docs/Api/CountryRegionApi.md#getcountryregion) | **GET** /companies({company_id})/countriesRegions({countryRegion_id}) | Retrieve the properties and relationships of an object of type countryRegion for Dynamics 365 Business Central.
*CountryRegionApi* | [**listCountriesRegions**](docs/Api/CountryRegionApi.md#listcountriesregions) | **GET** /companies({company_id})/countriesRegions | Returns a list of countriesRegions
*CountryRegionApi* | [**patchCountryRegion**](docs/Api/CountryRegionApi.md#patchcountryregion) | **PATCH** /companies({company_id})/countriesRegions({countryRegion_id}) | Updates an object of type countryRegion in Dynamics 365 Business Central
*CountryRegionApi* | [**postCountryRegion**](docs/Api/CountryRegionApi.md#postcountryregion) | **POST** /companies({company_id})/countriesRegions | Creates an object of type countryRegion in Dynamics 365 Business Central
*CurrencyApi* | [**deleteCurrency**](docs/Api/CurrencyApi.md#deletecurrency) | **DELETE** /companies({company_id})/currencies({currency_id}) | Deletes an object of type currency in Dynamics 365 Business Central
*CurrencyApi* | [**getCurrency**](docs/Api/CurrencyApi.md#getcurrency) | **GET** /companies({company_id})/currencies({currency_id}) | Retrieve the properties and relationships of an object of type currency for Dynamics 365 Business Central.
*CurrencyApi* | [**listCurrencies**](docs/Api/CurrencyApi.md#listcurrencies) | **GET** /companies({company_id})/currencies | Returns a list of currencies
*CurrencyApi* | [**patchCurrency**](docs/Api/CurrencyApi.md#patchcurrency) | **PATCH** /companies({company_id})/currencies({currency_id}) | Updates an object of type currency in Dynamics 365 Business Central
*CurrencyApi* | [**postCurrency**](docs/Api/CurrencyApi.md#postcurrency) | **POST** /companies({company_id})/currencies | Creates an object of type currency in Dynamics 365 Business Central
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /companies({company_id})/customers({customer_id}) | Deletes an object of type customer in Dynamics 365 Business Central
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /companies({company_id})/customers({customer_id}) | Retrieve the properties and relationships of an object of type customer for Dynamics 365 Business Central.
*CustomerApi* | [**listCustomers**](docs/Api/CustomerApi.md#listcustomers) | **GET** /companies({company_id})/customers | Returns a list of customers
*CustomerApi* | [**patchCustomer**](docs/Api/CustomerApi.md#patchcustomer) | **PATCH** /companies({company_id})/customers({customer_id}) | Updates an object of type customer in Dynamics 365 Business Central
*CustomerApi* | [**postCustomer**](docs/Api/CustomerApi.md#postcustomer) | **POST** /companies({company_id})/customers | Creates an object of type customer in Dynamics 365 Business Central
*CustomerFinancialDetailApi* | [**getCustomerFinancialDetail**](docs/Api/CustomerFinancialDetailApi.md#getcustomerfinancialdetail) | **GET** /companies({company_id})/customerFinancialDetails({customerFinancialDetail_id}) | Retrieve the properties and relationships of an object of type customerFinancialDetail for Dynamics 365 Business Central.
*CustomerFinancialDetailApi* | [**getCustomerFinancialDetailForCustomer**](docs/Api/CustomerFinancialDetailApi.md#getcustomerfinancialdetailforcustomer) | **GET** /companies({company_id})/customers({customer_id})/customerFinancialDetails({customerFinancialDetail_id}) | Retrieve the properties and relationships of an object of type customerFinancialDetail for Dynamics 365 Business Central.
*CustomerFinancialDetailApi* | [**listCustomerFinancialDetails**](docs/Api/CustomerFinancialDetailApi.md#listcustomerfinancialdetails) | **GET** /companies({company_id})/customerFinancialDetails | Returns a list of customerFinancialDetails
*CustomerFinancialDetailApi* | [**listCustomerFinancialDetailsForCustomer**](docs/Api/CustomerFinancialDetailApi.md#listcustomerfinancialdetailsforcustomer) | **GET** /companies({company_id})/customers({customer_id})/customerFinancialDetails | Returns a list of customerFinancialDetails
*CustomerPaymentApi* | [**deleteCustomerPayment**](docs/Api/CustomerPaymentApi.md#deletecustomerpayment) | **DELETE** /companies({company_id})/customerPayments({customerPayment_id}) | Deletes an object of type customerPayment in Dynamics 365 Business Central
*CustomerPaymentApi* | [**deleteCustomerPaymentForCustomerPaymentJournal**](docs/Api/CustomerPaymentApi.md#deletecustomerpaymentforcustomerpaymentjournal) | **DELETE** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id})/customerPayments({customerPayment_id}) | Deletes an object of type customerPayment in Dynamics 365 Business Central
*CustomerPaymentApi* | [**getCustomerPayment**](docs/Api/CustomerPaymentApi.md#getcustomerpayment) | **GET** /companies({company_id})/customerPayments({customerPayment_id}) | Retrieve the properties and relationships of an object of type customerPayment for Dynamics 365 Business Central.
*CustomerPaymentApi* | [**getCustomerPaymentForCustomerPaymentJournal**](docs/Api/CustomerPaymentApi.md#getcustomerpaymentforcustomerpaymentjournal) | **GET** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id})/customerPayments({customerPayment_id}) | Retrieve the properties and relationships of an object of type customerPayment for Dynamics 365 Business Central.
*CustomerPaymentApi* | [**listCustomerPayments**](docs/Api/CustomerPaymentApi.md#listcustomerpayments) | **GET** /companies({company_id})/customerPayments | Returns a list of customerPayments
*CustomerPaymentApi* | [**listCustomerPaymentsForCustomerPaymentJournal**](docs/Api/CustomerPaymentApi.md#listcustomerpaymentsforcustomerpaymentjournal) | **GET** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id})/customerPayments | Returns a list of customerPayments
*CustomerPaymentApi* | [**patchCustomerPayment**](docs/Api/CustomerPaymentApi.md#patchcustomerpayment) | **PATCH** /companies({company_id})/customerPayments({customerPayment_id}) | Updates an object of type customerPayment in Dynamics 365 Business Central
*CustomerPaymentApi* | [**patchCustomerPaymentForCustomerPaymentJournal**](docs/Api/CustomerPaymentApi.md#patchcustomerpaymentforcustomerpaymentjournal) | **PATCH** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id})/customerPayments({customerPayment_id}) | Updates an object of type customerPayment in Dynamics 365 Business Central
*CustomerPaymentApi* | [**postCustomerPayment**](docs/Api/CustomerPaymentApi.md#postcustomerpayment) | **POST** /companies({company_id})/customerPayments | Creates an object of type customerPayment in Dynamics 365 Business Central
*CustomerPaymentApi* | [**postCustomerPaymentForCustomerPaymentJournal**](docs/Api/CustomerPaymentApi.md#postcustomerpaymentforcustomerpaymentjournal) | **POST** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id})/customerPayments | Creates an object of type customerPayment in Dynamics 365 Business Central
*CustomerPaymentJournalApi* | [**deleteCustomerPaymentJournal**](docs/Api/CustomerPaymentJournalApi.md#deletecustomerpaymentjournal) | **DELETE** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id}) | Deletes an object of type customerPaymentJournal in Dynamics 365 Business Central
*CustomerPaymentJournalApi* | [**getCustomerPaymentJournal**](docs/Api/CustomerPaymentJournalApi.md#getcustomerpaymentjournal) | **GET** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id}) | Retrieve the properties and relationships of an object of type customerPaymentJournal for Dynamics 365 Business Central.
*CustomerPaymentJournalApi* | [**listCustomerPaymentJournals**](docs/Api/CustomerPaymentJournalApi.md#listcustomerpaymentjournals) | **GET** /companies({company_id})/customerPaymentJournals | Returns a list of customerPaymentJournals
*CustomerPaymentJournalApi* | [**patchCustomerPaymentJournal**](docs/Api/CustomerPaymentJournalApi.md#patchcustomerpaymentjournal) | **PATCH** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id}) | Updates an object of type customerPaymentJournal in Dynamics 365 Business Central
*CustomerPaymentJournalApi* | [**postCustomerPaymentJournal**](docs/Api/CustomerPaymentJournalApi.md#postcustomerpaymentjournal) | **POST** /companies({company_id})/customerPaymentJournals | Creates an object of type customerPaymentJournal in Dynamics 365 Business Central
*CustomerSaleApi* | [**getCustomerSale**](docs/Api/CustomerSaleApi.md#getcustomersale) | **GET** /companies({company_id})/customerSales({customerSale_customerId},&#39;{customerSale_customerNumber}&#39;,&#39;{customerSale_name}&#39;) | Retrieve the properties and relationships of an object of type customerSale for Dynamics 365 Business Central.
*CustomerSaleApi* | [**listCustomerSales**](docs/Api/CustomerSaleApi.md#listcustomersales) | **GET** /companies({company_id})/customerSales | Returns a list of customerSales
*DefaultDimensionsApi* | [**deleteDefaultDimensions**](docs/Api/DefaultDimensionsApi.md#deletedefaultdimensions) | **DELETE** /companies({company_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Deletes an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**deleteDefaultDimensionsForCustomer**](docs/Api/DefaultDimensionsApi.md#deletedefaultdimensionsforcustomer) | **DELETE** /companies({company_id})/customers({customer_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Deletes an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**deleteDefaultDimensionsForEmployee**](docs/Api/DefaultDimensionsApi.md#deletedefaultdimensionsforemployee) | **DELETE** /companies({company_id})/employees({employee_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Deletes an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**deleteDefaultDimensionsForItem**](docs/Api/DefaultDimensionsApi.md#deletedefaultdimensionsforitem) | **DELETE** /companies({company_id})/items({item_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Deletes an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**deleteDefaultDimensionsForVendor**](docs/Api/DefaultDimensionsApi.md#deletedefaultdimensionsforvendor) | **DELETE** /companies({company_id})/vendors({vendor_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Deletes an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**getDefaultDimensions**](docs/Api/DefaultDimensionsApi.md#getdefaultdimensions) | **GET** /companies({company_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Retrieve the properties and relationships of an object of type defaultDimensions for Dynamics 365 Business Central.
*DefaultDimensionsApi* | [**getDefaultDimensionsForCustomer**](docs/Api/DefaultDimensionsApi.md#getdefaultdimensionsforcustomer) | **GET** /companies({company_id})/customers({customer_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Retrieve the properties and relationships of an object of type defaultDimensions for Dynamics 365 Business Central.
*DefaultDimensionsApi* | [**getDefaultDimensionsForEmployee**](docs/Api/DefaultDimensionsApi.md#getdefaultdimensionsforemployee) | **GET** /companies({company_id})/employees({employee_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Retrieve the properties and relationships of an object of type defaultDimensions for Dynamics 365 Business Central.
*DefaultDimensionsApi* | [**getDefaultDimensionsForItem**](docs/Api/DefaultDimensionsApi.md#getdefaultdimensionsforitem) | **GET** /companies({company_id})/items({item_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Retrieve the properties and relationships of an object of type defaultDimensions for Dynamics 365 Business Central.
*DefaultDimensionsApi* | [**getDefaultDimensionsForVendor**](docs/Api/DefaultDimensionsApi.md#getdefaultdimensionsforvendor) | **GET** /companies({company_id})/vendors({vendor_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Retrieve the properties and relationships of an object of type defaultDimensions for Dynamics 365 Business Central.
*DefaultDimensionsApi* | [**listDefaultDimensions**](docs/Api/DefaultDimensionsApi.md#listdefaultdimensions) | **GET** /companies({company_id})/defaultDimensions | Returns a list of defaultDimensions
*DefaultDimensionsApi* | [**listDefaultDimensionsForCustomer**](docs/Api/DefaultDimensionsApi.md#listdefaultdimensionsforcustomer) | **GET** /companies({company_id})/customers({customer_id})/defaultDimensions | Returns a list of defaultDimensions
*DefaultDimensionsApi* | [**listDefaultDimensionsForEmployee**](docs/Api/DefaultDimensionsApi.md#listdefaultdimensionsforemployee) | **GET** /companies({company_id})/employees({employee_id})/defaultDimensions | Returns a list of defaultDimensions
*DefaultDimensionsApi* | [**listDefaultDimensionsForItem**](docs/Api/DefaultDimensionsApi.md#listdefaultdimensionsforitem) | **GET** /companies({company_id})/items({item_id})/defaultDimensions | Returns a list of defaultDimensions
*DefaultDimensionsApi* | [**listDefaultDimensionsForVendor**](docs/Api/DefaultDimensionsApi.md#listdefaultdimensionsforvendor) | **GET** /companies({company_id})/vendors({vendor_id})/defaultDimensions | Returns a list of defaultDimensions
*DefaultDimensionsApi* | [**patchDefaultDimensions**](docs/Api/DefaultDimensionsApi.md#patchdefaultdimensions) | **PATCH** /companies({company_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Updates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**patchDefaultDimensionsForCustomer**](docs/Api/DefaultDimensionsApi.md#patchdefaultdimensionsforcustomer) | **PATCH** /companies({company_id})/customers({customer_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Updates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**patchDefaultDimensionsForEmployee**](docs/Api/DefaultDimensionsApi.md#patchdefaultdimensionsforemployee) | **PATCH** /companies({company_id})/employees({employee_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Updates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**patchDefaultDimensionsForItem**](docs/Api/DefaultDimensionsApi.md#patchdefaultdimensionsforitem) | **PATCH** /companies({company_id})/items({item_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Updates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**patchDefaultDimensionsForVendor**](docs/Api/DefaultDimensionsApi.md#patchdefaultdimensionsforvendor) | **PATCH** /companies({company_id})/vendors({vendor_id})/defaultDimensions({defaultDimensions_parentId},{defaultDimensions_dimensionId}) | Updates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**postDefaultDimensions**](docs/Api/DefaultDimensionsApi.md#postdefaultdimensions) | **POST** /companies({company_id})/defaultDimensions | Creates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**postDefaultDimensionsForCustomer**](docs/Api/DefaultDimensionsApi.md#postdefaultdimensionsforcustomer) | **POST** /companies({company_id})/customers({customer_id})/defaultDimensions | Creates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**postDefaultDimensionsForEmployee**](docs/Api/DefaultDimensionsApi.md#postdefaultdimensionsforemployee) | **POST** /companies({company_id})/employees({employee_id})/defaultDimensions | Creates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**postDefaultDimensionsForItem**](docs/Api/DefaultDimensionsApi.md#postdefaultdimensionsforitem) | **POST** /companies({company_id})/items({item_id})/defaultDimensions | Creates an object of type defaultDimensions in Dynamics 365 Business Central
*DefaultDimensionsApi* | [**postDefaultDimensionsForVendor**](docs/Api/DefaultDimensionsApi.md#postdefaultdimensionsforvendor) | **POST** /companies({company_id})/vendors({vendor_id})/defaultDimensions | Creates an object of type defaultDimensions in Dynamics 365 Business Central
*DimensionApi* | [**getDimension**](docs/Api/DimensionApi.md#getdimension) | **GET** /companies({company_id})/dimensions({dimension_id}) | Retrieve the properties and relationships of an object of type dimension for Dynamics 365 Business Central.
*DimensionApi* | [**listDimensions**](docs/Api/DimensionApi.md#listdimensions) | **GET** /companies({company_id})/dimensions | Returns a list of dimensions
*DimensionLineApi* | [**deleteDimensionLine**](docs/Api/DimensionLineApi.md#deletedimensionline) | **DELETE** /companies({company_id})/dimensionLines({dimensionLine_parentId},{dimensionLine_id}) | Deletes an object of type dimensionLine in Dynamics 365 Business Central
*DimensionLineApi* | [**getDimensionLine**](docs/Api/DimensionLineApi.md#getdimensionline) | **GET** /companies({company_id})/dimensionLines({dimensionLine_parentId},{dimensionLine_id}) | Retrieve the properties and relationships of an object of type dimensionLine for Dynamics 365 Business Central.
*DimensionLineApi* | [**listDimensionLines**](docs/Api/DimensionLineApi.md#listdimensionlines) | **GET** /companies({company_id})/dimensionLines | Returns a list of dimensionLines
*DimensionLineApi* | [**patchDimensionLine**](docs/Api/DimensionLineApi.md#patchdimensionline) | **PATCH** /companies({company_id})/dimensionLines({dimensionLine_parentId},{dimensionLine_id}) | Updates an object of type dimensionLine in Dynamics 365 Business Central
*DimensionLineApi* | [**postDimensionLine**](docs/Api/DimensionLineApi.md#postdimensionline) | **POST** /companies({company_id})/dimensionLines | Creates an object of type dimensionLine in Dynamics 365 Business Central
*DimensionValueApi* | [**getDimensionValue**](docs/Api/DimensionValueApi.md#getdimensionvalue) | **GET** /companies({company_id})/dimensionValues({dimensionValue_id}) | Retrieve the properties and relationships of an object of type dimensionValue for Dynamics 365 Business Central.
*DimensionValueApi* | [**getDimensionValueForDimension**](docs/Api/DimensionValueApi.md#getdimensionvaluefordimension) | **GET** /companies({company_id})/dimensions({dimension_id})/dimensionValues({dimensionValue_id}) | Retrieve the properties and relationships of an object of type dimensionValue for Dynamics 365 Business Central.
*DimensionValueApi* | [**listDimensionValues**](docs/Api/DimensionValueApi.md#listdimensionvalues) | **GET** /companies({company_id})/dimensionValues | Returns a list of dimensionValues
*DimensionValueApi* | [**listDimensionValuesForDimension**](docs/Api/DimensionValueApi.md#listdimensionvaluesfordimension) | **GET** /companies({company_id})/dimensions({dimension_id})/dimensionValues | Returns a list of dimensionValues
*EmployeeApi* | [**deleteEmployee**](docs/Api/EmployeeApi.md#deleteemployee) | **DELETE** /companies({company_id})/employees({employee_id}) | Deletes an object of type employee in Dynamics 365 Business Central
*EmployeeApi* | [**getEmployee**](docs/Api/EmployeeApi.md#getemployee) | **GET** /companies({company_id})/employees({employee_id}) | Retrieve the properties and relationships of an object of type employee for Dynamics 365 Business Central.
*EmployeeApi* | [**listEmployees**](docs/Api/EmployeeApi.md#listemployees) | **GET** /companies({company_id})/employees | Returns a list of employees
*EmployeeApi* | [**patchEmployee**](docs/Api/EmployeeApi.md#patchemployee) | **PATCH** /companies({company_id})/employees({employee_id}) | Updates an object of type employee in Dynamics 365 Business Central
*EmployeeApi* | [**postEmployee**](docs/Api/EmployeeApi.md#postemployee) | **POST** /companies({company_id})/employees | Creates an object of type employee in Dynamics 365 Business Central
*GeneralLedgerEntryApi* | [**getGeneralLedgerEntry**](docs/Api/GeneralLedgerEntryApi.md#getgeneralledgerentry) | **GET** /companies({company_id})/generalLedgerEntries({generalLedgerEntry_id}) | Retrieve the properties and relationships of an object of type generalLedgerEntry for Dynamics 365 Business Central.
*GeneralLedgerEntryApi* | [**listGeneralLedgerEntries**](docs/Api/GeneralLedgerEntryApi.md#listgeneralledgerentries) | **GET** /companies({company_id})/generalLedgerEntries | Returns a list of generalLedgerEntries
*GeneralLedgerEntryAttachmentsApi* | [**deleteGeneralLedgerEntryAttachments**](docs/Api/GeneralLedgerEntryAttachmentsApi.md#deletegeneralledgerentryattachments) | **DELETE** /companies({company_id})/generalLedgerEntryAttachments({generalLedgerEntryAttachments_generalLedgerEntryNumber},{generalLedgerEntryAttachments_id}) | Deletes an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central
*GeneralLedgerEntryAttachmentsApi* | [**getGeneralLedgerEntryAttachments**](docs/Api/GeneralLedgerEntryAttachmentsApi.md#getgeneralledgerentryattachments) | **GET** /companies({company_id})/generalLedgerEntryAttachments({generalLedgerEntryAttachments_generalLedgerEntryNumber},{generalLedgerEntryAttachments_id}) | Retrieve the properties and relationships of an object of type generalLedgerEntryAttachments for Dynamics 365 Business Central.
*GeneralLedgerEntryAttachmentsApi* | [**listGeneralLedgerEntryAttachments**](docs/Api/GeneralLedgerEntryAttachmentsApi.md#listgeneralledgerentryattachments) | **GET** /companies({company_id})/generalLedgerEntryAttachments | Returns a list of generalLedgerEntryAttachments
*GeneralLedgerEntryAttachmentsApi* | [**patchGeneralLedgerEntryAttachments**](docs/Api/GeneralLedgerEntryAttachmentsApi.md#patchgeneralledgerentryattachments) | **PATCH** /companies({company_id})/generalLedgerEntryAttachments({generalLedgerEntryAttachments_generalLedgerEntryNumber},{generalLedgerEntryAttachments_id}) | Updates an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central
*GeneralLedgerEntryAttachmentsApi* | [**postGeneralLedgerEntryAttachments**](docs/Api/GeneralLedgerEntryAttachmentsApi.md#postgeneralledgerentryattachments) | **POST** /companies({company_id})/generalLedgerEntryAttachments | Creates an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central
*IncomeStatementApi* | [**getIncomeStatement**](docs/Api/IncomeStatementApi.md#getincomestatement) | **GET** /companies({company_id})/incomeStatement({incomeStatement_lineNumber}) | Retrieve the properties and relationships of an object of type incomeStatement for Dynamics 365 Business Central.
*IncomeStatementApi* | [**listIncomeStatement**](docs/Api/IncomeStatementApi.md#listincomestatement) | **GET** /companies({company_id})/incomeStatement | Returns a list of incomeStatement
*ItemApi* | [**deleteItem**](docs/Api/ItemApi.md#deleteitem) | **DELETE** /companies({company_id})/items({item_id}) | Deletes an object of type item in Dynamics 365 Business Central
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /companies({company_id})/items({item_id}) | Retrieve the properties and relationships of an object of type item for Dynamics 365 Business Central.
*ItemApi* | [**listItems**](docs/Api/ItemApi.md#listitems) | **GET** /companies({company_id})/items | Returns a list of items
*ItemApi* | [**patchItem**](docs/Api/ItemApi.md#patchitem) | **PATCH** /companies({company_id})/items({item_id}) | Updates an object of type item in Dynamics 365 Business Central
*ItemApi* | [**postItem**](docs/Api/ItemApi.md#postitem) | **POST** /companies({company_id})/items | Creates an object of type item in Dynamics 365 Business Central
*ItemCategoryApi* | [**deleteItemCategory**](docs/Api/ItemCategoryApi.md#deleteitemcategory) | **DELETE** /companies({company_id})/itemCategories({itemCategory_id}) | Deletes an object of type itemCategory in Dynamics 365 Business Central
*ItemCategoryApi* | [**getItemCategory**](docs/Api/ItemCategoryApi.md#getitemcategory) | **GET** /companies({company_id})/itemCategories({itemCategory_id}) | Retrieve the properties and relationships of an object of type itemCategory for Dynamics 365 Business Central.
*ItemCategoryApi* | [**listItemCategories**](docs/Api/ItemCategoryApi.md#listitemcategories) | **GET** /companies({company_id})/itemCategories | Returns a list of itemCategories
*ItemCategoryApi* | [**patchItemCategory**](docs/Api/ItemCategoryApi.md#patchitemcategory) | **PATCH** /companies({company_id})/itemCategories({itemCategory_id}) | Updates an object of type itemCategory in Dynamics 365 Business Central
*ItemCategoryApi* | [**postItemCategory**](docs/Api/ItemCategoryApi.md#postitemcategory) | **POST** /companies({company_id})/itemCategories | Creates an object of type itemCategory in Dynamics 365 Business Central
*JournalApi* | [**deleteJournal**](docs/Api/JournalApi.md#deletejournal) | **DELETE** /companies({company_id})/journals({journal_id}) | Deletes an object of type journal in Dynamics 365 Business Central
*JournalApi* | [**getJournal**](docs/Api/JournalApi.md#getjournal) | **GET** /companies({company_id})/journals({journal_id}) | Retrieve the properties and relationships of an object of type journal for Dynamics 365 Business Central.
*JournalApi* | [**listJournals**](docs/Api/JournalApi.md#listjournals) | **GET** /companies({company_id})/journals | Returns a list of journals
*JournalApi* | [**patchJournal**](docs/Api/JournalApi.md#patchjournal) | **PATCH** /companies({company_id})/journals({journal_id}) | Updates an object of type journal in Dynamics 365 Business Central
*JournalApi* | [**postActionJournals**](docs/Api/JournalApi.md#postactionjournals) | **POST** /companies({company_id})/journals({journal_id})/Microsoft.NAV.post | Performs the post action for journals entity
*JournalApi* | [**postJournal**](docs/Api/JournalApi.md#postjournal) | **POST** /companies({company_id})/journals | Creates an object of type journal in Dynamics 365 Business Central
*JournalLineApi* | [**deleteJournalLine**](docs/Api/JournalLineApi.md#deletejournalline) | **DELETE** /companies({company_id})/journalLines({journalLine_id}) | Deletes an object of type journalLine in Dynamics 365 Business Central
*JournalLineApi* | [**deleteJournalLineForJournal**](docs/Api/JournalLineApi.md#deletejournallineforjournal) | **DELETE** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id}) | Deletes an object of type journalLine in Dynamics 365 Business Central
*JournalLineApi* | [**getJournalLine**](docs/Api/JournalLineApi.md#getjournalline) | **GET** /companies({company_id})/journalLines({journalLine_id}) | Retrieve the properties and relationships of an object of type journalLine for Dynamics 365 Business Central.
*JournalLineApi* | [**getJournalLineForJournal**](docs/Api/JournalLineApi.md#getjournallineforjournal) | **GET** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id}) | Retrieve the properties and relationships of an object of type journalLine for Dynamics 365 Business Central.
*JournalLineApi* | [**listJournalLines**](docs/Api/JournalLineApi.md#listjournallines) | **GET** /companies({company_id})/journalLines | Returns a list of journalLines
*JournalLineApi* | [**listJournalLinesForJournal**](docs/Api/JournalLineApi.md#listjournallinesforjournal) | **GET** /companies({company_id})/journals({journal_id})/journalLines | Returns a list of journalLines
*JournalLineApi* | [**patchJournalLine**](docs/Api/JournalLineApi.md#patchjournalline) | **PATCH** /companies({company_id})/journalLines({journalLine_id}) | Updates an object of type journalLine in Dynamics 365 Business Central
*JournalLineApi* | [**patchJournalLineForJournal**](docs/Api/JournalLineApi.md#patchjournallineforjournal) | **PATCH** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id}) | Updates an object of type journalLine in Dynamics 365 Business Central
*JournalLineApi* | [**postJournalLine**](docs/Api/JournalLineApi.md#postjournalline) | **POST** /companies({company_id})/journalLines | Creates an object of type journalLine in Dynamics 365 Business Central
*JournalLineApi* | [**postJournalLineForJournal**](docs/Api/JournalLineApi.md#postjournallineforjournal) | **POST** /companies({company_id})/journals({journal_id})/journalLines | Creates an object of type journalLine in Dynamics 365 Business Central
*PaymentMethodApi* | [**deletePaymentMethod**](docs/Api/PaymentMethodApi.md#deletepaymentmethod) | **DELETE** /companies({company_id})/paymentMethods({paymentMethod_id}) | Deletes an object of type paymentMethod in Dynamics 365 Business Central
*PaymentMethodApi* | [**getPaymentMethod**](docs/Api/PaymentMethodApi.md#getpaymentmethod) | **GET** /companies({company_id})/paymentMethods({paymentMethod_id}) | Retrieve the properties and relationships of an object of type paymentMethod for Dynamics 365 Business Central.
*PaymentMethodApi* | [**listPaymentMethods**](docs/Api/PaymentMethodApi.md#listpaymentmethods) | **GET** /companies({company_id})/paymentMethods | Returns a list of paymentMethods
*PaymentMethodApi* | [**patchPaymentMethod**](docs/Api/PaymentMethodApi.md#patchpaymentmethod) | **PATCH** /companies({company_id})/paymentMethods({paymentMethod_id}) | Updates an object of type paymentMethod in Dynamics 365 Business Central
*PaymentMethodApi* | [**postPaymentMethod**](docs/Api/PaymentMethodApi.md#postpaymentmethod) | **POST** /companies({company_id})/paymentMethods | Creates an object of type paymentMethod in Dynamics 365 Business Central
*PaymentTermApi* | [**deletePaymentTerm**](docs/Api/PaymentTermApi.md#deletepaymentterm) | **DELETE** /companies({company_id})/paymentTerms({paymentTerm_id}) | Deletes an object of type paymentTerm in Dynamics 365 Business Central
*PaymentTermApi* | [**getPaymentTerm**](docs/Api/PaymentTermApi.md#getpaymentterm) | **GET** /companies({company_id})/paymentTerms({paymentTerm_id}) | Retrieve the properties and relationships of an object of type paymentTerm for Dynamics 365 Business Central.
*PaymentTermApi* | [**listPaymentTerms**](docs/Api/PaymentTermApi.md#listpaymentterms) | **GET** /companies({company_id})/paymentTerms | Returns a list of paymentTerms
*PaymentTermApi* | [**patchPaymentTerm**](docs/Api/PaymentTermApi.md#patchpaymentterm) | **PATCH** /companies({company_id})/paymentTerms({paymentTerm_id}) | Updates an object of type paymentTerm in Dynamics 365 Business Central
*PaymentTermApi* | [**postPaymentTerm**](docs/Api/PaymentTermApi.md#postpaymentterm) | **POST** /companies({company_id})/paymentTerms | Creates an object of type paymentTerm in Dynamics 365 Business Central
*PdfDocumentApi* | [**getPdfDocument**](docs/Api/PdfDocumentApi.md#getpdfdocument) | **GET** /companies({company_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
*PdfDocumentApi* | [**getPdfDocumentForPurchaseInvoice**](docs/Api/PdfDocumentApi.md#getpdfdocumentforpurchaseinvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
*PdfDocumentApi* | [**getPdfDocumentForSalesCreditMemo**](docs/Api/PdfDocumentApi.md#getpdfdocumentforsalescreditmemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
*PdfDocumentApi* | [**getPdfDocumentForSalesInvoice**](docs/Api/PdfDocumentApi.md#getpdfdocumentforsalesinvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
*PdfDocumentApi* | [**getPdfDocumentForSalesQuote**](docs/Api/PdfDocumentApi.md#getpdfdocumentforsalesquote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
*PdfDocumentApi* | [**listPdfDocument**](docs/Api/PdfDocumentApi.md#listpdfdocument) | **GET** /companies({company_id})/pdfDocument | Returns a list of pdfDocument
*PdfDocumentApi* | [**listPdfDocumentForPurchaseInvoice**](docs/Api/PdfDocumentApi.md#listpdfdocumentforpurchaseinvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/pdfDocument | Returns a list of pdfDocument
*PdfDocumentApi* | [**listPdfDocumentForSalesCreditMemo**](docs/Api/PdfDocumentApi.md#listpdfdocumentforsalescreditmemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/pdfDocument | Returns a list of pdfDocument
*PdfDocumentApi* | [**listPdfDocumentForSalesInvoice**](docs/Api/PdfDocumentApi.md#listpdfdocumentforsalesinvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/pdfDocument | Returns a list of pdfDocument
*PdfDocumentApi* | [**listPdfDocumentForSalesQuote**](docs/Api/PdfDocumentApi.md#listpdfdocumentforsalesquote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/pdfDocument | Returns a list of pdfDocument
*PictureApi* | [**deletePicture**](docs/Api/PictureApi.md#deletepicture) | **DELETE** /companies({company_id})/picture({picture_id}) | Deletes an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**deletePictureForCustomer**](docs/Api/PictureApi.md#deletepictureforcustomer) | **DELETE** /companies({company_id})/customers({customer_id})/picture({picture_id}) | Deletes an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**deletePictureForEmployee**](docs/Api/PictureApi.md#deletepictureforemployee) | **DELETE** /companies({company_id})/employees({employee_id})/picture({picture_id}) | Deletes an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**deletePictureForItem**](docs/Api/PictureApi.md#deletepictureforitem) | **DELETE** /companies({company_id})/items({item_id})/picture({picture_id}) | Deletes an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**deletePictureForVendor**](docs/Api/PictureApi.md#deletepictureforvendor) | **DELETE** /companies({company_id})/vendors({vendor_id})/picture({picture_id}) | Deletes an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**getPicture**](docs/Api/PictureApi.md#getpicture) | **GET** /companies({company_id})/picture({picture_id}) | Retrieve the properties and relationships of an object of type picture for Dynamics 365 Business Central.
*PictureApi* | [**getPictureForCustomer**](docs/Api/PictureApi.md#getpictureforcustomer) | **GET** /companies({company_id})/customers({customer_id})/picture({picture_id}) | Retrieve the properties and relationships of an object of type picture for Dynamics 365 Business Central.
*PictureApi* | [**getPictureForEmployee**](docs/Api/PictureApi.md#getpictureforemployee) | **GET** /companies({company_id})/employees({employee_id})/picture({picture_id}) | Retrieve the properties and relationships of an object of type picture for Dynamics 365 Business Central.
*PictureApi* | [**getPictureForItem**](docs/Api/PictureApi.md#getpictureforitem) | **GET** /companies({company_id})/items({item_id})/picture({picture_id}) | Retrieve the properties and relationships of an object of type picture for Dynamics 365 Business Central.
*PictureApi* | [**getPictureForVendor**](docs/Api/PictureApi.md#getpictureforvendor) | **GET** /companies({company_id})/vendors({vendor_id})/picture({picture_id}) | Retrieve the properties and relationships of an object of type picture for Dynamics 365 Business Central.
*PictureApi* | [**listPicture**](docs/Api/PictureApi.md#listpicture) | **GET** /companies({company_id})/picture | Returns a list of picture
*PictureApi* | [**listPictureForCustomer**](docs/Api/PictureApi.md#listpictureforcustomer) | **GET** /companies({company_id})/customers({customer_id})/picture | Returns a list of picture
*PictureApi* | [**listPictureForEmployee**](docs/Api/PictureApi.md#listpictureforemployee) | **GET** /companies({company_id})/employees({employee_id})/picture | Returns a list of picture
*PictureApi* | [**listPictureForItem**](docs/Api/PictureApi.md#listpictureforitem) | **GET** /companies({company_id})/items({item_id})/picture | Returns a list of picture
*PictureApi* | [**listPictureForVendor**](docs/Api/PictureApi.md#listpictureforvendor) | **GET** /companies({company_id})/vendors({vendor_id})/picture | Returns a list of picture
*PictureApi* | [**patchPicture**](docs/Api/PictureApi.md#patchpicture) | **PATCH** /companies({company_id})/picture({picture_id}) | Updates an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**patchPictureForCustomer**](docs/Api/PictureApi.md#patchpictureforcustomer) | **PATCH** /companies({company_id})/customers({customer_id})/picture({picture_id}) | Updates an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**patchPictureForEmployee**](docs/Api/PictureApi.md#patchpictureforemployee) | **PATCH** /companies({company_id})/employees({employee_id})/picture({picture_id}) | Updates an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**patchPictureForItem**](docs/Api/PictureApi.md#patchpictureforitem) | **PATCH** /companies({company_id})/items({item_id})/picture({picture_id}) | Updates an object of type picture in Dynamics 365 Business Central
*PictureApi* | [**patchPictureForVendor**](docs/Api/PictureApi.md#patchpictureforvendor) | **PATCH** /companies({company_id})/vendors({vendor_id})/picture({picture_id}) | Updates an object of type picture in Dynamics 365 Business Central
*ProjectApi* | [**deleteProject**](docs/Api/ProjectApi.md#deleteproject) | **DELETE** /companies({company_id})/projects({project_id}) | Deletes an object of type project in Dynamics 365 Business Central
*ProjectApi* | [**getProject**](docs/Api/ProjectApi.md#getproject) | **GET** /companies({company_id})/projects({project_id}) | Retrieve the properties and relationships of an object of type project for Dynamics 365 Business Central.
*ProjectApi* | [**listProjects**](docs/Api/ProjectApi.md#listprojects) | **GET** /companies({company_id})/projects | Returns a list of projects
*ProjectApi* | [**patchProject**](docs/Api/ProjectApi.md#patchproject) | **PATCH** /companies({company_id})/projects({project_id}) | Updates an object of type project in Dynamics 365 Business Central
*ProjectApi* | [**postProject**](docs/Api/ProjectApi.md#postproject) | **POST** /companies({company_id})/projects | Creates an object of type project in Dynamics 365 Business Central
*PurchaseInvoiceApi* | [**deletePurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#deletepurchaseinvoice) | **DELETE** /companies({company_id})/purchaseInvoices({purchaseInvoice_id}) | Deletes an object of type purchaseInvoice in Dynamics 365 Business Central
*PurchaseInvoiceApi* | [**getPurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#getpurchaseinvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id}) | Retrieve the properties and relationships of an object of type purchaseInvoice for Dynamics 365 Business Central.
*PurchaseInvoiceApi* | [**listPurchaseInvoices**](docs/Api/PurchaseInvoiceApi.md#listpurchaseinvoices) | **GET** /companies({company_id})/purchaseInvoices | Returns a list of purchaseInvoices
*PurchaseInvoiceApi* | [**patchPurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#patchpurchaseinvoice) | **PATCH** /companies({company_id})/purchaseInvoices({purchaseInvoice_id}) | Updates an object of type purchaseInvoice in Dynamics 365 Business Central
*PurchaseInvoiceApi* | [**postActionPurchaseInvoices**](docs/Api/PurchaseInvoiceApi.md#postactionpurchaseinvoices) | **POST** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/Microsoft.NAV.post | Performs the post action for purchaseInvoices entity
*PurchaseInvoiceApi* | [**postPurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#postpurchaseinvoice) | **POST** /companies({company_id})/purchaseInvoices | Creates an object of type purchaseInvoice in Dynamics 365 Business Central
*PurchaseInvoiceLineApi* | [**deletePurchaseInvoiceLine**](docs/Api/PurchaseInvoiceLineApi.md#deletepurchaseinvoiceline) | **DELETE** /companies({company_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Deletes an object of type purchaseInvoiceLine in Dynamics 365 Business Central
*PurchaseInvoiceLineApi* | [**deletePurchaseInvoiceLineForPurchaseInvoice**](docs/Api/PurchaseInvoiceLineApi.md#deletepurchaseinvoicelineforpurchaseinvoice) | **DELETE** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Deletes an object of type purchaseInvoiceLine in Dynamics 365 Business Central
*PurchaseInvoiceLineApi* | [**getPurchaseInvoiceLine**](docs/Api/PurchaseInvoiceLineApi.md#getpurchaseinvoiceline) | **GET** /companies({company_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type purchaseInvoiceLine for Dynamics 365 Business Central.
*PurchaseInvoiceLineApi* | [**getPurchaseInvoiceLineForPurchaseInvoice**](docs/Api/PurchaseInvoiceLineApi.md#getpurchaseinvoicelineforpurchaseinvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type purchaseInvoiceLine for Dynamics 365 Business Central.
*PurchaseInvoiceLineApi* | [**listPurchaseInvoiceLines**](docs/Api/PurchaseInvoiceLineApi.md#listpurchaseinvoicelines) | **GET** /companies({company_id})/purchaseInvoiceLines | Returns a list of purchaseInvoiceLines
*PurchaseInvoiceLineApi* | [**listPurchaseInvoiceLinesForPurchaseInvoice**](docs/Api/PurchaseInvoiceLineApi.md#listpurchaseinvoicelinesforpurchaseinvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines | Returns a list of purchaseInvoiceLines
*PurchaseInvoiceLineApi* | [**patchPurchaseInvoiceLine**](docs/Api/PurchaseInvoiceLineApi.md#patchpurchaseinvoiceline) | **PATCH** /companies({company_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Updates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
*PurchaseInvoiceLineApi* | [**patchPurchaseInvoiceLineForPurchaseInvoice**](docs/Api/PurchaseInvoiceLineApi.md#patchpurchaseinvoicelineforpurchaseinvoice) | **PATCH** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Updates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
*PurchaseInvoiceLineApi* | [**postPurchaseInvoiceLine**](docs/Api/PurchaseInvoiceLineApi.md#postpurchaseinvoiceline) | **POST** /companies({company_id})/purchaseInvoiceLines | Creates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
*PurchaseInvoiceLineApi* | [**postPurchaseInvoiceLineForPurchaseInvoice**](docs/Api/PurchaseInvoiceLineApi.md#postpurchaseinvoicelineforpurchaseinvoice) | **POST** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines | Creates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
*RetainedEarningsStatementApi* | [**getRetainedEarningsStatement**](docs/Api/RetainedEarningsStatementApi.md#getretainedearningsstatement) | **GET** /companies({company_id})/retainedEarningsStatement({retainedEarningsStatement_lineNumber}) | Retrieve the properties and relationships of an object of type retainedEarningsStatement for Dynamics 365 Business Central.
*RetainedEarningsStatementApi* | [**listRetainedEarningsStatement**](docs/Api/RetainedEarningsStatementApi.md#listretainedearningsstatement) | **GET** /companies({company_id})/retainedEarningsStatement | Returns a list of retainedEarningsStatement
*SalesCreditMemoApi* | [**cancelActionSalesCreditMemos**](docs/Api/SalesCreditMemoApi.md#cancelactionsalescreditmemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.cancel | Performs the cancel action for salesCreditMemos entity
*SalesCreditMemoApi* | [**cancelAndSendActionSalesCreditMemos**](docs/Api/SalesCreditMemoApi.md#cancelandsendactionsalescreditmemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.cancelAndSend | Performs the cancelAndSend action for salesCreditMemos entity
*SalesCreditMemoApi* | [**deleteSalesCreditMemo**](docs/Api/SalesCreditMemoApi.md#deletesalescreditmemo) | **DELETE** /companies({company_id})/salesCreditMemos({salesCreditMemo_id}) | Deletes an object of type salesCreditMemo in Dynamics 365 Business Central
*SalesCreditMemoApi* | [**getSalesCreditMemo**](docs/Api/SalesCreditMemoApi.md#getsalescreditmemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id}) | Retrieve the properties and relationships of an object of type salesCreditMemo for Dynamics 365 Business Central.
*SalesCreditMemoApi* | [**listSalesCreditMemos**](docs/Api/SalesCreditMemoApi.md#listsalescreditmemos) | **GET** /companies({company_id})/salesCreditMemos | Returns a list of salesCreditMemos
*SalesCreditMemoApi* | [**patchSalesCreditMemo**](docs/Api/SalesCreditMemoApi.md#patchsalescreditmemo) | **PATCH** /companies({company_id})/salesCreditMemos({salesCreditMemo_id}) | Updates an object of type salesCreditMemo in Dynamics 365 Business Central
*SalesCreditMemoApi* | [**postActionSalesCreditMemos**](docs/Api/SalesCreditMemoApi.md#postactionsalescreditmemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.post | Performs the post action for salesCreditMemos entity
*SalesCreditMemoApi* | [**postAndSendActionSalesCreditMemos**](docs/Api/SalesCreditMemoApi.md#postandsendactionsalescreditmemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.postAndSend | Performs the postAndSend action for salesCreditMemos entity
*SalesCreditMemoApi* | [**postSalesCreditMemo**](docs/Api/SalesCreditMemoApi.md#postsalescreditmemo) | **POST** /companies({company_id})/salesCreditMemos | Creates an object of type salesCreditMemo in Dynamics 365 Business Central
*SalesCreditMemoApi* | [**sendActionSalesCreditMemos**](docs/Api/SalesCreditMemoApi.md#sendactionsalescreditmemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.send | Performs the send action for salesCreditMemos entity
*SalesCreditMemoLineApi* | [**deleteSalesCreditMemoLine**](docs/Api/SalesCreditMemoLineApi.md#deletesalescreditmemoline) | **DELETE** /companies({company_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Deletes an object of type salesCreditMemoLine in Dynamics 365 Business Central
*SalesCreditMemoLineApi* | [**deleteSalesCreditMemoLineForSalesCreditMemo**](docs/Api/SalesCreditMemoLineApi.md#deletesalescreditmemolineforsalescreditmemo) | **DELETE** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Deletes an object of type salesCreditMemoLine in Dynamics 365 Business Central
*SalesCreditMemoLineApi* | [**getSalesCreditMemoLine**](docs/Api/SalesCreditMemoLineApi.md#getsalescreditmemoline) | **GET** /companies({company_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesCreditMemoLine for Dynamics 365 Business Central.
*SalesCreditMemoLineApi* | [**getSalesCreditMemoLineForSalesCreditMemo**](docs/Api/SalesCreditMemoLineApi.md#getsalescreditmemolineforsalescreditmemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesCreditMemoLine for Dynamics 365 Business Central.
*SalesCreditMemoLineApi* | [**listSalesCreditMemoLines**](docs/Api/SalesCreditMemoLineApi.md#listsalescreditmemolines) | **GET** /companies({company_id})/salesCreditMemoLines | Returns a list of salesCreditMemoLines
*SalesCreditMemoLineApi* | [**listSalesCreditMemoLinesForSalesCreditMemo**](docs/Api/SalesCreditMemoLineApi.md#listsalescreditmemolinesforsalescreditmemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines | Returns a list of salesCreditMemoLines
*SalesCreditMemoLineApi* | [**patchSalesCreditMemoLine**](docs/Api/SalesCreditMemoLineApi.md#patchsalescreditmemoline) | **PATCH** /companies({company_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Updates an object of type salesCreditMemoLine in Dynamics 365 Business Central
*SalesCreditMemoLineApi* | [**patchSalesCreditMemoLineForSalesCreditMemo**](docs/Api/SalesCreditMemoLineApi.md#patchsalescreditmemolineforsalescreditmemo) | **PATCH** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Updates an object of type salesCreditMemoLine in Dynamics 365 Business Central
*SalesCreditMemoLineApi* | [**postSalesCreditMemoLine**](docs/Api/SalesCreditMemoLineApi.md#postsalescreditmemoline) | **POST** /companies({company_id})/salesCreditMemoLines | Creates an object of type salesCreditMemoLine in Dynamics 365 Business Central
*SalesCreditMemoLineApi* | [**postSalesCreditMemoLineForSalesCreditMemo**](docs/Api/SalesCreditMemoLineApi.md#postsalescreditmemolineforsalescreditmemo) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines | Creates an object of type salesCreditMemoLine in Dynamics 365 Business Central
*SalesInvoiceApi* | [**cancelActionSalesInvoices**](docs/Api/SalesInvoiceApi.md#cancelactionsalesinvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.cancel | Performs the cancel action for salesInvoices entity
*SalesInvoiceApi* | [**cancelAndSendActionSalesInvoices**](docs/Api/SalesInvoiceApi.md#cancelandsendactionsalesinvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.cancelAndSend | Performs the cancelAndSend action for salesInvoices entity
*SalesInvoiceApi* | [**deleteSalesInvoice**](docs/Api/SalesInvoiceApi.md#deletesalesinvoice) | **DELETE** /companies({company_id})/salesInvoices({salesInvoice_id}) | Deletes an object of type salesInvoice in Dynamics 365 Business Central
*SalesInvoiceApi* | [**getSalesInvoice**](docs/Api/SalesInvoiceApi.md#getsalesinvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id}) | Retrieve the properties and relationships of an object of type salesInvoice for Dynamics 365 Business Central.
*SalesInvoiceApi* | [**listSalesInvoices**](docs/Api/SalesInvoiceApi.md#listsalesinvoices) | **GET** /companies({company_id})/salesInvoices | Returns a list of salesInvoices
*SalesInvoiceApi* | [**makeCorrectiveCreditMemoActionSalesInvoices**](docs/Api/SalesInvoiceApi.md#makecorrectivecreditmemoactionsalesinvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.makeCorrectiveCreditMemo | Performs the makeCorrectiveCreditMemo action for salesInvoices entity
*SalesInvoiceApi* | [**patchSalesInvoice**](docs/Api/SalesInvoiceApi.md#patchsalesinvoice) | **PATCH** /companies({company_id})/salesInvoices({salesInvoice_id}) | Updates an object of type salesInvoice in Dynamics 365 Business Central
*SalesInvoiceApi* | [**postActionSalesInvoices**](docs/Api/SalesInvoiceApi.md#postactionsalesinvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.post | Performs the post action for salesInvoices entity
*SalesInvoiceApi* | [**postAndSendActionSalesInvoices**](docs/Api/SalesInvoiceApi.md#postandsendactionsalesinvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.postAndSend | Performs the postAndSend action for salesInvoices entity
*SalesInvoiceApi* | [**postSalesInvoice**](docs/Api/SalesInvoiceApi.md#postsalesinvoice) | **POST** /companies({company_id})/salesInvoices | Creates an object of type salesInvoice in Dynamics 365 Business Central
*SalesInvoiceApi* | [**sendActionSalesInvoices**](docs/Api/SalesInvoiceApi.md#sendactionsalesinvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.send | Performs the send action for salesInvoices entity
*SalesInvoiceLineApi* | [**deleteSalesInvoiceLine**](docs/Api/SalesInvoiceLineApi.md#deletesalesinvoiceline) | **DELETE** /companies({company_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Deletes an object of type salesInvoiceLine in Dynamics 365 Business Central
*SalesInvoiceLineApi* | [**deleteSalesInvoiceLineForSalesInvoice**](docs/Api/SalesInvoiceLineApi.md#deletesalesinvoicelineforsalesinvoice) | **DELETE** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Deletes an object of type salesInvoiceLine in Dynamics 365 Business Central
*SalesInvoiceLineApi* | [**getSalesInvoiceLine**](docs/Api/SalesInvoiceLineApi.md#getsalesinvoiceline) | **GET** /companies({company_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesInvoiceLine for Dynamics 365 Business Central.
*SalesInvoiceLineApi* | [**getSalesInvoiceLineForSalesInvoice**](docs/Api/SalesInvoiceLineApi.md#getsalesinvoicelineforsalesinvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesInvoiceLine for Dynamics 365 Business Central.
*SalesInvoiceLineApi* | [**listSalesInvoiceLines**](docs/Api/SalesInvoiceLineApi.md#listsalesinvoicelines) | **GET** /companies({company_id})/salesInvoiceLines | Returns a list of salesInvoiceLines
*SalesInvoiceLineApi* | [**listSalesInvoiceLinesForSalesInvoice**](docs/Api/SalesInvoiceLineApi.md#listsalesinvoicelinesforsalesinvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines | Returns a list of salesInvoiceLines
*SalesInvoiceLineApi* | [**patchSalesInvoiceLine**](docs/Api/SalesInvoiceLineApi.md#patchsalesinvoiceline) | **PATCH** /companies({company_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Updates an object of type salesInvoiceLine in Dynamics 365 Business Central
*SalesInvoiceLineApi* | [**patchSalesInvoiceLineForSalesInvoice**](docs/Api/SalesInvoiceLineApi.md#patchsalesinvoicelineforsalesinvoice) | **PATCH** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Updates an object of type salesInvoiceLine in Dynamics 365 Business Central
*SalesInvoiceLineApi* | [**postSalesInvoiceLine**](docs/Api/SalesInvoiceLineApi.md#postsalesinvoiceline) | **POST** /companies({company_id})/salesInvoiceLines | Creates an object of type salesInvoiceLine in Dynamics 365 Business Central
*SalesInvoiceLineApi* | [**postSalesInvoiceLineForSalesInvoice**](docs/Api/SalesInvoiceLineApi.md#postsalesinvoicelineforsalesinvoice) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines | Creates an object of type salesInvoiceLine in Dynamics 365 Business Central
*SalesOrderApi* | [**deleteSalesOrder**](docs/Api/SalesOrderApi.md#deletesalesorder) | **DELETE** /companies({company_id})/salesOrders({salesOrder_id}) | Deletes an object of type salesOrder in Dynamics 365 Business Central
*SalesOrderApi* | [**getSalesOrder**](docs/Api/SalesOrderApi.md#getsalesorder) | **GET** /companies({company_id})/salesOrders({salesOrder_id}) | Retrieve the properties and relationships of an object of type salesOrder for Dynamics 365 Business Central.
*SalesOrderApi* | [**listSalesOrders**](docs/Api/SalesOrderApi.md#listsalesorders) | **GET** /companies({company_id})/salesOrders | Returns a list of salesOrders
*SalesOrderApi* | [**patchSalesOrder**](docs/Api/SalesOrderApi.md#patchsalesorder) | **PATCH** /companies({company_id})/salesOrders({salesOrder_id}) | Updates an object of type salesOrder in Dynamics 365 Business Central
*SalesOrderApi* | [**postSalesOrder**](docs/Api/SalesOrderApi.md#postsalesorder) | **POST** /companies({company_id})/salesOrders | Creates an object of type salesOrder in Dynamics 365 Business Central
*SalesOrderApi* | [**shipAndInvoiceActionSalesOrders**](docs/Api/SalesOrderApi.md#shipandinvoiceactionsalesorders) | **POST** /companies({company_id})/salesOrders({salesOrder_id})/Microsoft.NAV.shipAndInvoice | Performs the shipAndInvoice action for salesOrders entity
*SalesOrderLineApi* | [**deleteSalesOrderLine**](docs/Api/SalesOrderLineApi.md#deletesalesorderline) | **DELETE** /companies({company_id})/salesOrderLines(&#39;{salesOrderLine_id}&#39;) | Deletes an object of type salesOrderLine in Dynamics 365 Business Central
*SalesOrderLineApi* | [**deleteSalesOrderLineForSalesOrder**](docs/Api/SalesOrderLineApi.md#deletesalesorderlineforsalesorder) | **DELETE** /companies({company_id})/salesOrders({salesOrder_id})/salesOrderLines(&#39;{salesOrderLine_id}&#39;) | Deletes an object of type salesOrderLine in Dynamics 365 Business Central
*SalesOrderLineApi* | [**getSalesOrderLine**](docs/Api/SalesOrderLineApi.md#getsalesorderline) | **GET** /companies({company_id})/salesOrderLines(&#39;{salesOrderLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesOrderLine for Dynamics 365 Business Central.
*SalesOrderLineApi* | [**getSalesOrderLineForSalesOrder**](docs/Api/SalesOrderLineApi.md#getsalesorderlineforsalesorder) | **GET** /companies({company_id})/salesOrders({salesOrder_id})/salesOrderLines(&#39;{salesOrderLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesOrderLine for Dynamics 365 Business Central.
*SalesOrderLineApi* | [**listSalesOrderLines**](docs/Api/SalesOrderLineApi.md#listsalesorderlines) | **GET** /companies({company_id})/salesOrderLines | Returns a list of salesOrderLines
*SalesOrderLineApi* | [**listSalesOrderLinesForSalesOrder**](docs/Api/SalesOrderLineApi.md#listsalesorderlinesforsalesorder) | **GET** /companies({company_id})/salesOrders({salesOrder_id})/salesOrderLines | Returns a list of salesOrderLines
*SalesOrderLineApi* | [**patchSalesOrderLine**](docs/Api/SalesOrderLineApi.md#patchsalesorderline) | **PATCH** /companies({company_id})/salesOrderLines(&#39;{salesOrderLine_id}&#39;) | Updates an object of type salesOrderLine in Dynamics 365 Business Central
*SalesOrderLineApi* | [**patchSalesOrderLineForSalesOrder**](docs/Api/SalesOrderLineApi.md#patchsalesorderlineforsalesorder) | **PATCH** /companies({company_id})/salesOrders({salesOrder_id})/salesOrderLines(&#39;{salesOrderLine_id}&#39;) | Updates an object of type salesOrderLine in Dynamics 365 Business Central
*SalesOrderLineApi* | [**postSalesOrderLine**](docs/Api/SalesOrderLineApi.md#postsalesorderline) | **POST** /companies({company_id})/salesOrderLines | Creates an object of type salesOrderLine in Dynamics 365 Business Central
*SalesOrderLineApi* | [**postSalesOrderLineForSalesOrder**](docs/Api/SalesOrderLineApi.md#postsalesorderlineforsalesorder) | **POST** /companies({company_id})/salesOrders({salesOrder_id})/salesOrderLines | Creates an object of type salesOrderLine in Dynamics 365 Business Central
*SalesQuoteApi* | [**deleteSalesQuote**](docs/Api/SalesQuoteApi.md#deletesalesquote) | **DELETE** /companies({company_id})/salesQuotes({salesQuote_id}) | Deletes an object of type salesQuote in Dynamics 365 Business Central
*SalesQuoteApi* | [**getSalesQuote**](docs/Api/SalesQuoteApi.md#getsalesquote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id}) | Retrieve the properties and relationships of an object of type salesQuote for Dynamics 365 Business Central.
*SalesQuoteApi* | [**listSalesQuotes**](docs/Api/SalesQuoteApi.md#listsalesquotes) | **GET** /companies({company_id})/salesQuotes | Returns a list of salesQuotes
*SalesQuoteApi* | [**makeInvoiceActionSalesQuotes**](docs/Api/SalesQuoteApi.md#makeinvoiceactionsalesquotes) | **POST** /companies({company_id})/salesQuotes({salesQuote_id})/Microsoft.NAV.makeInvoice | Performs the makeInvoice action for salesQuotes entity
*SalesQuoteApi* | [**makeOrderActionSalesQuotes**](docs/Api/SalesQuoteApi.md#makeorderactionsalesquotes) | **POST** /companies({company_id})/salesQuotes({salesQuote_id})/Microsoft.NAV.makeOrder | Performs the makeOrder action for salesQuotes entity
*SalesQuoteApi* | [**patchSalesQuote**](docs/Api/SalesQuoteApi.md#patchsalesquote) | **PATCH** /companies({company_id})/salesQuotes({salesQuote_id}) | Updates an object of type salesQuote in Dynamics 365 Business Central
*SalesQuoteApi* | [**postSalesQuote**](docs/Api/SalesQuoteApi.md#postsalesquote) | **POST** /companies({company_id})/salesQuotes | Creates an object of type salesQuote in Dynamics 365 Business Central
*SalesQuoteApi* | [**sendActionSalesQuotes**](docs/Api/SalesQuoteApi.md#sendactionsalesquotes) | **POST** /companies({company_id})/salesQuotes({salesQuote_id})/Microsoft.NAV.send | Performs the send action for salesQuotes entity
*SalesQuoteLineApi* | [**deleteSalesQuoteLine**](docs/Api/SalesQuoteLineApi.md#deletesalesquoteline) | **DELETE** /companies({company_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Deletes an object of type salesQuoteLine in Dynamics 365 Business Central
*SalesQuoteLineApi* | [**deleteSalesQuoteLineForSalesQuote**](docs/Api/SalesQuoteLineApi.md#deletesalesquotelineforsalesquote) | **DELETE** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Deletes an object of type salesQuoteLine in Dynamics 365 Business Central
*SalesQuoteLineApi* | [**getSalesQuoteLine**](docs/Api/SalesQuoteLineApi.md#getsalesquoteline) | **GET** /companies({company_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesQuoteLine for Dynamics 365 Business Central.
*SalesQuoteLineApi* | [**getSalesQuoteLineForSalesQuote**](docs/Api/SalesQuoteLineApi.md#getsalesquotelineforsalesquote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesQuoteLine for Dynamics 365 Business Central.
*SalesQuoteLineApi* | [**listSalesQuoteLines**](docs/Api/SalesQuoteLineApi.md#listsalesquotelines) | **GET** /companies({company_id})/salesQuoteLines | Returns a list of salesQuoteLines
*SalesQuoteLineApi* | [**listSalesQuoteLinesForSalesQuote**](docs/Api/SalesQuoteLineApi.md#listsalesquotelinesforsalesquote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines | Returns a list of salesQuoteLines
*SalesQuoteLineApi* | [**patchSalesQuoteLine**](docs/Api/SalesQuoteLineApi.md#patchsalesquoteline) | **PATCH** /companies({company_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Updates an object of type salesQuoteLine in Dynamics 365 Business Central
*SalesQuoteLineApi* | [**patchSalesQuoteLineForSalesQuote**](docs/Api/SalesQuoteLineApi.md#patchsalesquotelineforsalesquote) | **PATCH** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Updates an object of type salesQuoteLine in Dynamics 365 Business Central
*SalesQuoteLineApi* | [**postSalesQuoteLine**](docs/Api/SalesQuoteLineApi.md#postsalesquoteline) | **POST** /companies({company_id})/salesQuoteLines | Creates an object of type salesQuoteLine in Dynamics 365 Business Central
*SalesQuoteLineApi* | [**postSalesQuoteLineForSalesQuote**](docs/Api/SalesQuoteLineApi.md#postsalesquotelineforsalesquote) | **POST** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines | Creates an object of type salesQuoteLine in Dynamics 365 Business Central
*ShipmentMethodApi* | [**deleteShipmentMethod**](docs/Api/ShipmentMethodApi.md#deleteshipmentmethod) | **DELETE** /companies({company_id})/shipmentMethods({shipmentMethod_id}) | Deletes an object of type shipmentMethod in Dynamics 365 Business Central
*ShipmentMethodApi* | [**getShipmentMethod**](docs/Api/ShipmentMethodApi.md#getshipmentmethod) | **GET** /companies({company_id})/shipmentMethods({shipmentMethod_id}) | Retrieve the properties and relationships of an object of type shipmentMethod for Dynamics 365 Business Central.
*ShipmentMethodApi* | [**listShipmentMethods**](docs/Api/ShipmentMethodApi.md#listshipmentmethods) | **GET** /companies({company_id})/shipmentMethods | Returns a list of shipmentMethods
*ShipmentMethodApi* | [**patchShipmentMethod**](docs/Api/ShipmentMethodApi.md#patchshipmentmethod) | **PATCH** /companies({company_id})/shipmentMethods({shipmentMethod_id}) | Updates an object of type shipmentMethod in Dynamics 365 Business Central
*ShipmentMethodApi* | [**postShipmentMethod**](docs/Api/ShipmentMethodApi.md#postshipmentmethod) | **POST** /companies({company_id})/shipmentMethods | Creates an object of type shipmentMethod in Dynamics 365 Business Central
*TaxAreaApi* | [**deleteTaxArea**](docs/Api/TaxAreaApi.md#deletetaxarea) | **DELETE** /companies({company_id})/taxAreas({taxArea_id}) | Deletes an object of type taxArea in Dynamics 365 Business Central
*TaxAreaApi* | [**getTaxArea**](docs/Api/TaxAreaApi.md#gettaxarea) | **GET** /companies({company_id})/taxAreas({taxArea_id}) | Retrieve the properties and relationships of an object of type taxArea for Dynamics 365 Business Central.
*TaxAreaApi* | [**listTaxAreas**](docs/Api/TaxAreaApi.md#listtaxareas) | **GET** /companies({company_id})/taxAreas | Returns a list of taxAreas
*TaxAreaApi* | [**patchTaxArea**](docs/Api/TaxAreaApi.md#patchtaxarea) | **PATCH** /companies({company_id})/taxAreas({taxArea_id}) | Updates an object of type taxArea in Dynamics 365 Business Central
*TaxAreaApi* | [**postTaxArea**](docs/Api/TaxAreaApi.md#posttaxarea) | **POST** /companies({company_id})/taxAreas | Creates an object of type taxArea in Dynamics 365 Business Central
*TaxGroupApi* | [**deleteTaxGroup**](docs/Api/TaxGroupApi.md#deletetaxgroup) | **DELETE** /companies({company_id})/taxGroups({taxGroup_id}) | Deletes an object of type taxGroup in Dynamics 365 Business Central
*TaxGroupApi* | [**getTaxGroup**](docs/Api/TaxGroupApi.md#gettaxgroup) | **GET** /companies({company_id})/taxGroups({taxGroup_id}) | Retrieve the properties and relationships of an object of type taxGroup for Dynamics 365 Business Central.
*TaxGroupApi* | [**listTaxGroups**](docs/Api/TaxGroupApi.md#listtaxgroups) | **GET** /companies({company_id})/taxGroups | Returns a list of taxGroups
*TaxGroupApi* | [**patchTaxGroup**](docs/Api/TaxGroupApi.md#patchtaxgroup) | **PATCH** /companies({company_id})/taxGroups({taxGroup_id}) | Updates an object of type taxGroup in Dynamics 365 Business Central
*TaxGroupApi* | [**postTaxGroup**](docs/Api/TaxGroupApi.md#posttaxgroup) | **POST** /companies({company_id})/taxGroups | Creates an object of type taxGroup in Dynamics 365 Business Central
*TimeRegistrationEntryApi* | [**deleteTimeRegistrationEntry**](docs/Api/TimeRegistrationEntryApi.md#deletetimeregistrationentry) | **DELETE** /companies({company_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Deletes an object of type timeRegistrationEntry in Dynamics 365 Business Central
*TimeRegistrationEntryApi* | [**deleteTimeRegistrationEntryForEmployee**](docs/Api/TimeRegistrationEntryApi.md#deletetimeregistrationentryforemployee) | **DELETE** /companies({company_id})/employees({employee_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Deletes an object of type timeRegistrationEntry in Dynamics 365 Business Central
*TimeRegistrationEntryApi* | [**getTimeRegistrationEntry**](docs/Api/TimeRegistrationEntryApi.md#gettimeregistrationentry) | **GET** /companies({company_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Retrieve the properties and relationships of an object of type timeRegistrationEntry for Dynamics 365 Business Central.
*TimeRegistrationEntryApi* | [**getTimeRegistrationEntryForEmployee**](docs/Api/TimeRegistrationEntryApi.md#gettimeregistrationentryforemployee) | **GET** /companies({company_id})/employees({employee_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Retrieve the properties and relationships of an object of type timeRegistrationEntry for Dynamics 365 Business Central.
*TimeRegistrationEntryApi* | [**listTimeRegistrationEntries**](docs/Api/TimeRegistrationEntryApi.md#listtimeregistrationentries) | **GET** /companies({company_id})/timeRegistrationEntries | Returns a list of timeRegistrationEntries
*TimeRegistrationEntryApi* | [**listTimeRegistrationEntriesForEmployee**](docs/Api/TimeRegistrationEntryApi.md#listtimeregistrationentriesforemployee) | **GET** /companies({company_id})/employees({employee_id})/timeRegistrationEntries | Returns a list of timeRegistrationEntries
*TimeRegistrationEntryApi* | [**patchTimeRegistrationEntry**](docs/Api/TimeRegistrationEntryApi.md#patchtimeregistrationentry) | **PATCH** /companies({company_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Updates an object of type timeRegistrationEntry in Dynamics 365 Business Central
*TimeRegistrationEntryApi* | [**patchTimeRegistrationEntryForEmployee**](docs/Api/TimeRegistrationEntryApi.md#patchtimeregistrationentryforemployee) | **PATCH** /companies({company_id})/employees({employee_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Updates an object of type timeRegistrationEntry in Dynamics 365 Business Central
*TimeRegistrationEntryApi* | [**postTimeRegistrationEntry**](docs/Api/TimeRegistrationEntryApi.md#posttimeregistrationentry) | **POST** /companies({company_id})/timeRegistrationEntries | Creates an object of type timeRegistrationEntry in Dynamics 365 Business Central
*TimeRegistrationEntryApi* | [**postTimeRegistrationEntryForEmployee**](docs/Api/TimeRegistrationEntryApi.md#posttimeregistrationentryforemployee) | **POST** /companies({company_id})/employees({employee_id})/timeRegistrationEntries | Creates an object of type timeRegistrationEntry in Dynamics 365 Business Central
*TrialBalanceApi* | [**getTrialBalance**](docs/Api/TrialBalanceApi.md#gettrialbalance) | **GET** /companies({company_id})/trialBalance(&#39;{trialBalance_number}&#39;) | Retrieve the properties and relationships of an object of type trialBalance for Dynamics 365 Business Central.
*TrialBalanceApi* | [**listTrialBalance**](docs/Api/TrialBalanceApi.md#listtrialbalance) | **GET** /companies({company_id})/trialBalance | Returns a list of trialBalance
*UnitOfMeasureApi* | [**deleteUnitOfMeasure**](docs/Api/UnitOfMeasureApi.md#deleteunitofmeasure) | **DELETE** /companies({company_id})/unitsOfMeasure({unitOfMeasure_id}) | Deletes an object of type unitOfMeasure in Dynamics 365 Business Central
*UnitOfMeasureApi* | [**getUnitOfMeasure**](docs/Api/UnitOfMeasureApi.md#getunitofmeasure) | **GET** /companies({company_id})/unitsOfMeasure({unitOfMeasure_id}) | Retrieve the properties and relationships of an object of type unitOfMeasure for Dynamics 365 Business Central.
*UnitOfMeasureApi* | [**listUnitsOfMeasure**](docs/Api/UnitOfMeasureApi.md#listunitsofmeasure) | **GET** /companies({company_id})/unitsOfMeasure | Returns a list of unitsOfMeasure
*UnitOfMeasureApi* | [**patchUnitOfMeasure**](docs/Api/UnitOfMeasureApi.md#patchunitofmeasure) | **PATCH** /companies({company_id})/unitsOfMeasure({unitOfMeasure_id}) | Updates an object of type unitOfMeasure in Dynamics 365 Business Central
*UnitOfMeasureApi* | [**postUnitOfMeasure**](docs/Api/UnitOfMeasureApi.md#postunitofmeasure) | **POST** /companies({company_id})/unitsOfMeasure | Creates an object of type unitOfMeasure in Dynamics 365 Business Central
*VendorApi* | [**deleteVendor**](docs/Api/VendorApi.md#deletevendor) | **DELETE** /companies({company_id})/vendors({vendor_id}) | Deletes an object of type vendor in Dynamics 365 Business Central
*VendorApi* | [**getVendor**](docs/Api/VendorApi.md#getvendor) | **GET** /companies({company_id})/vendors({vendor_id}) | Retrieve the properties and relationships of an object of type vendor for Dynamics 365 Business Central.
*VendorApi* | [**listVendors**](docs/Api/VendorApi.md#listvendors) | **GET** /companies({company_id})/vendors | Returns a list of vendors
*VendorApi* | [**patchVendor**](docs/Api/VendorApi.md#patchvendor) | **PATCH** /companies({company_id})/vendors({vendor_id}) | Updates an object of type vendor in Dynamics 365 Business Central
*VendorApi* | [**postVendor**](docs/Api/VendorApi.md#postvendor) | **POST** /companies({company_id})/vendors | Creates an object of type vendor in Dynamics 365 Business Central
*VendorPurchaseApi* | [**getVendorPurchase**](docs/Api/VendorPurchaseApi.md#getvendorpurchase) | **GET** /companies({company_id})/vendorPurchases({vendorPurchase_vendorId},&#39;{vendorPurchase_vendorNumber}&#39;,&#39;{vendorPurchase_name}&#39;) | Retrieve the properties and relationships of an object of type vendorPurchase for Dynamics 365 Business Central.
*VendorPurchaseApi* | [**listVendorPurchases**](docs/Api/VendorPurchaseApi.md#listvendorpurchases) | **GET** /companies({company_id})/vendorPurchases | Returns a list of vendorPurchases

## Models

- [Account](docs/Model/Account.md)
- [AgedAccountsPayable](docs/Model/AgedAccountsPayable.md)
- [AgedAccountsReceivable](docs/Model/AgedAccountsReceivable.md)
- [Attachments](docs/Model/Attachments.md)
- [BalanceSheet](docs/Model/BalanceSheet.md)
- [BankAccount](docs/Model/BankAccount.md)
- [CashFlowStatement](docs/Model/CashFlowStatement.md)
- [Company](docs/Model/Company.md)
- [CompanyInformation](docs/Model/CompanyInformation.md)
- [CountryRegion](docs/Model/CountryRegion.md)
- [Currency](docs/Model/Currency.md)
- [Customer](docs/Model/Customer.md)
- [CustomerFinancialDetail](docs/Model/CustomerFinancialDetail.md)
- [CustomerPayment](docs/Model/CustomerPayment.md)
- [CustomerPaymentJournal](docs/Model/CustomerPaymentJournal.md)
- [CustomerSale](docs/Model/CustomerSale.md)
- [DefaultDimensions](docs/Model/DefaultDimensions.md)
- [Dimension](docs/Model/Dimension.md)
- [DimensionLine](docs/Model/DimensionLine.md)
- [DimensionValue](docs/Model/DimensionValue.md)
- [Dimensiontype](docs/Model/Dimensiontype.md)
- [Documentlineobjectdetailstype](docs/Model/Documentlineobjectdetailstype.md)
- [Employee](docs/Model/Employee.md)
- [GeneralLedgerEntry](docs/Model/GeneralLedgerEntry.md)
- [GeneralLedgerEntryAttachments](docs/Model/GeneralLedgerEntryAttachments.md)
- [IncomeStatement](docs/Model/IncomeStatement.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse20042](docs/Model/InlineResponse20042.md)
- [InlineResponse20043](docs/Model/InlineResponse20043.md)
- [InlineResponse20044](docs/Model/InlineResponse20044.md)
- [InlineResponse20045](docs/Model/InlineResponse20045.md)
- [InlineResponse20046](docs/Model/InlineResponse20046.md)
- [InlineResponse20047](docs/Model/InlineResponse20047.md)
- [InlineResponse20048](docs/Model/InlineResponse20048.md)
- [InlineResponse20049](docs/Model/InlineResponse20049.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse20050](docs/Model/InlineResponse20050.md)
- [InlineResponse20051](docs/Model/InlineResponse20051.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [Item](docs/Model/Item.md)
- [ItemCategory](docs/Model/ItemCategory.md)
- [Itemunitofmeasureconversiontype](docs/Model/Itemunitofmeasureconversiontype.md)
- [Journal](docs/Model/Journal.md)
- [JournalLine](docs/Model/JournalLine.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentTerm](docs/Model/PaymentTerm.md)
- [PdfDocument](docs/Model/PdfDocument.md)
- [Picture](docs/Model/Picture.md)
- [Postaladdresstype](docs/Model/Postaladdresstype.md)
- [Project](docs/Model/Project.md)
- [PurchaseInvoice](docs/Model/PurchaseInvoice.md)
- [PurchaseInvoiceLine](docs/Model/PurchaseInvoiceLine.md)
- [RetainedEarningsStatement](docs/Model/RetainedEarningsStatement.md)
- [SalesCreditMemo](docs/Model/SalesCreditMemo.md)
- [SalesCreditMemoLine](docs/Model/SalesCreditMemoLine.md)
- [SalesInvoice](docs/Model/SalesInvoice.md)
- [SalesInvoiceLine](docs/Model/SalesInvoiceLine.md)
- [SalesOrder](docs/Model/SalesOrder.md)
- [SalesOrderLine](docs/Model/SalesOrderLine.md)
- [SalesQuote](docs/Model/SalesQuote.md)
- [SalesQuoteLine](docs/Model/SalesQuoteLine.md)
- [ShipmentMethod](docs/Model/ShipmentMethod.md)
- [TaxArea](docs/Model/TaxArea.md)
- [TaxGroup](docs/Model/TaxGroup.md)
- [TimeRegistrationEntry](docs/Model/TimeRegistrationEntry.md)
- [TrialBalance](docs/Model/TrialBalance.md)
- [UnitOfMeasure](docs/Model/UnitOfMeasure.md)
- [Unitofmeasuretype](docs/Model/Unitofmeasuretype.md)
- [Vendor](docs/Model/Vendor.md)
- [VendorPurchase](docs/Model/VendorPurchase.md)

## Authorization

### oAuth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://login.windows.net/common/oauth2/authorize?resource=https://api.businesscentral.dynamics.com`
- **Scopes**: 
    - **Financials.ReadWrite.All**: financials.read.write.all

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
