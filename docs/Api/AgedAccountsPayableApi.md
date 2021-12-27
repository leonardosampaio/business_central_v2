# OpenAPI\Client\AgedAccountsPayableApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAgedAccountsPayable()**](AgedAccountsPayableApi.md#getAgedAccountsPayable) | **GET** /companies({company_id})/agedAccountsPayable({agedAccountsPayable_vendorId}) | Retrieve the properties and relationships of an object of type agedAccountsPayable for Dynamics 365 Business Central.
[**listAgedAccountsPayable()**](AgedAccountsPayableApi.md#listAgedAccountsPayable) | **GET** /companies({company_id})/agedAccountsPayable | Returns a list of agedAccountsPayable


## `getAgedAccountsPayable()`

```php
getAgedAccountsPayable($company_id, $aged_accounts_payable_vendor_id, $select): \OpenAPI\Client\Model\AgedAccountsPayable
```

Retrieve the properties and relationships of an object of type agedAccountsPayable for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AgedAccountsPayableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$aged_accounts_payable_vendor_id = 'aged_accounts_payable_vendor_id_example'; // string | (v1.0) vendorId for agedAccountsPayable
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getAgedAccountsPayable($company_id, $aged_accounts_payable_vendor_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgedAccountsPayableApi->getAgedAccountsPayable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **aged_accounts_payable_vendor_id** | **string**| (v1.0) vendorId for agedAccountsPayable |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\AgedAccountsPayable**](../Model/AgedAccountsPayable.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgedAccountsPayable()`

```php
listAgedAccountsPayable($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20036
```

Returns a list of agedAccountsPayable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AgedAccountsPayableApi(
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
    $result = $apiInstance->listAgedAccountsPayable($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgedAccountsPayableApi->listAgedAccountsPayable: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
