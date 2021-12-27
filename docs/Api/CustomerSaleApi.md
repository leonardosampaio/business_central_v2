# OpenAPI\Client\CustomerSaleApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerSale()**](CustomerSaleApi.md#getCustomerSale) | **GET** /companies({company_id})/customerSales({customerSale_customerId},&#39;{customerSale_customerNumber}&#39;,&#39;{customerSale_name}&#39;) | Retrieve the properties and relationships of an object of type customerSale for Dynamics 365 Business Central.
[**listCustomerSales()**](CustomerSaleApi.md#listCustomerSales) | **GET** /companies({company_id})/customerSales | Returns a list of customerSales


## `getCustomerSale()`

```php
getCustomerSale($company_id, $customer_sale_customer_id, $customer_sale_customer_number, $customer_sale_name, $select): \OpenAPI\Client\Model\CustomerSale
```

Retrieve the properties and relationships of an object of type customerSale for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerSaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_sale_customer_id = 'customer_sale_customer_id_example'; // string | (v1.0) customerId for customerSale
$customer_sale_customer_number = 'customer_sale_customer_number_example'; // string | (v1.0) customerNumber for customerSale
$customer_sale_name = 'customer_sale_name_example'; // string | (v1.0) name for customerSale
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getCustomerSale($company_id, $customer_sale_customer_id, $customer_sale_customer_number, $customer_sale_name, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSaleApi->getCustomerSale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_sale_customer_id** | **string**| (v1.0) customerId for customerSale |
 **customer_sale_customer_number** | **string**| (v1.0) customerNumber for customerSale |
 **customer_sale_name** | **string**| (v1.0) name for customerSale |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerSale**](../Model/CustomerSale.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerSales()`

```php
listCustomerSales($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20050
```

Returns a list of customerSales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerSaleApi(
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
    $result = $apiInstance->listCustomerSales($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSaleApi->listCustomerSales: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
