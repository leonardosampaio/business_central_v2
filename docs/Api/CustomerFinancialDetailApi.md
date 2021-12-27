# OpenAPI\Client\CustomerFinancialDetailApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerFinancialDetail()**](CustomerFinancialDetailApi.md#getCustomerFinancialDetail) | **GET** /companies({company_id})/customerFinancialDetails({customerFinancialDetail_id}) | Retrieve the properties and relationships of an object of type customerFinancialDetail for Dynamics 365 Business Central.
[**getCustomerFinancialDetailForCustomer()**](CustomerFinancialDetailApi.md#getCustomerFinancialDetailForCustomer) | **GET** /companies({company_id})/customers({customer_id})/customerFinancialDetails({customerFinancialDetail_id}) | Retrieve the properties and relationships of an object of type customerFinancialDetail for Dynamics 365 Business Central.
[**listCustomerFinancialDetails()**](CustomerFinancialDetailApi.md#listCustomerFinancialDetails) | **GET** /companies({company_id})/customerFinancialDetails | Returns a list of customerFinancialDetails
[**listCustomerFinancialDetailsForCustomer()**](CustomerFinancialDetailApi.md#listCustomerFinancialDetailsForCustomer) | **GET** /companies({company_id})/customers({customer_id})/customerFinancialDetails | Returns a list of customerFinancialDetails


## `getCustomerFinancialDetail()`

```php
getCustomerFinancialDetail($company_id, $customer_financial_detail_id, $select): \OpenAPI\Client\Model\CustomerFinancialDetail
```

Retrieve the properties and relationships of an object of type customerFinancialDetail for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerFinancialDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_financial_detail_id = 'customer_financial_detail_id_example'; // string | (v1.0) id for customerFinancialDetail
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getCustomerFinancialDetail($company_id, $customer_financial_detail_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerFinancialDetailApi->getCustomerFinancialDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_financial_detail_id** | **string**| (v1.0) id for customerFinancialDetail |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerFinancialDetail**](../Model/CustomerFinancialDetail.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerFinancialDetailForCustomer()`

```php
getCustomerFinancialDetailForCustomer($company_id, $customer_id, $customer_financial_detail_id, $select): \OpenAPI\Client\Model\CustomerFinancialDetail
```

Retrieve the properties and relationships of an object of type customerFinancialDetail for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerFinancialDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_id = 'customer_id_example'; // string | (v1.0) id for customer
$customer_financial_detail_id = 'customer_financial_detail_id_example'; // string | (v1.0) id for customerFinancialDetail
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getCustomerFinancialDetailForCustomer($company_id, $customer_id, $customer_financial_detail_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerFinancialDetailApi->getCustomerFinancialDetailForCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_id** | **string**| (v1.0) id for customer |
 **customer_financial_detail_id** | **string**| (v1.0) id for customerFinancialDetail |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerFinancialDetail**](../Model/CustomerFinancialDetail.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerFinancialDetails()`

```php
listCustomerFinancialDetails($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse2005
```

Returns a list of customerFinancialDetails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerFinancialDetailApi(
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
    $result = $apiInstance->listCustomerFinancialDetails($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerFinancialDetailApi->listCustomerFinancialDetails: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerFinancialDetailsForCustomer()`

```php
listCustomerFinancialDetailsForCustomer($company_id, $customer_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse2005
```

Returns a list of customerFinancialDetails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerFinancialDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_id = 'customer_id_example'; // string | (v1.0) id for customer
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listCustomerFinancialDetailsForCustomer($company_id, $customer_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerFinancialDetailApi->listCustomerFinancialDetailsForCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_id** | **string**| (v1.0) id for customer |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
