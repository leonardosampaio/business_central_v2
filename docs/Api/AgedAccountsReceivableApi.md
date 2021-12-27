# OpenAPI\Client\AgedAccountsReceivableApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAgedAccountsReceivable()**](AgedAccountsReceivableApi.md#getAgedAccountsReceivable) | **GET** /companies({company_id})/agedAccountsReceivable({agedAccountsReceivable_customerId}) | Retrieve the properties and relationships of an object of type agedAccountsReceivable for Dynamics 365 Business Central.
[**listAgedAccountsReceivable()**](AgedAccountsReceivableApi.md#listAgedAccountsReceivable) | **GET** /companies({company_id})/agedAccountsReceivable | Returns a list of agedAccountsReceivable


## `getAgedAccountsReceivable()`

```php
getAgedAccountsReceivable($company_id, $aged_accounts_receivable_customer_id, $select): \OpenAPI\Client\Model\AgedAccountsReceivable
```

Retrieve the properties and relationships of an object of type agedAccountsReceivable for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AgedAccountsReceivableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$aged_accounts_receivable_customer_id = 'aged_accounts_receivable_customer_id_example'; // string | (v1.0) customerId for agedAccountsReceivable
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getAgedAccountsReceivable($company_id, $aged_accounts_receivable_customer_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgedAccountsReceivableApi->getAgedAccountsReceivable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **aged_accounts_receivable_customer_id** | **string**| (v1.0) customerId for agedAccountsReceivable |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\AgedAccountsReceivable**](../Model/AgedAccountsReceivable.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgedAccountsReceivable()`

```php
listAgedAccountsReceivable($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20035
```

Returns a list of agedAccountsReceivable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AgedAccountsReceivableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listAgedAccountsReceivable($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgedAccountsReceivableApi->listAgedAccountsReceivable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
