# OpenAPI\Client\RetainedEarningsStatementApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRetainedEarningsStatement()**](RetainedEarningsStatementApi.md#getRetainedEarningsStatement) | **GET** /companies({company_id})/retainedEarningsStatement({retainedEarningsStatement_lineNumber}) | Retrieve the properties and relationships of an object of type retainedEarningsStatement for Dynamics 365 Business Central.
[**listRetainedEarningsStatement()**](RetainedEarningsStatementApi.md#listRetainedEarningsStatement) | **GET** /companies({company_id})/retainedEarningsStatement | Returns a list of retainedEarningsStatement


## `getRetainedEarningsStatement()`

```php
getRetainedEarningsStatement($company_id, $retained_earnings_statement_line_number, $select): \OpenAPI\Client\Model\RetainedEarningsStatement
```

Retrieve the properties and relationships of an object of type retainedEarningsStatement for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetainedEarningsStatementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$retained_earnings_statement_line_number = 56; // int | (v1.0) lineNumber for retainedEarningsStatement
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getRetainedEarningsStatement($company_id, $retained_earnings_statement_line_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetainedEarningsStatementApi->getRetainedEarningsStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **retained_earnings_statement_line_number** | **int**| (v1.0) lineNumber for retainedEarningsStatement |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\RetainedEarningsStatement**](../Model/RetainedEarningsStatement.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRetainedEarningsStatement()`

```php
listRetainedEarningsStatement($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20033
```

Returns a list of retainedEarningsStatement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetainedEarningsStatementApi(
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
    $result = $apiInstance->listRetainedEarningsStatement($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetainedEarningsStatementApi->listRetainedEarningsStatement: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
