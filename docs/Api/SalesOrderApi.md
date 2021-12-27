# OpenAPI\Client\SalesOrderApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesOrder()**](SalesOrderApi.md#deleteSalesOrder) | **DELETE** /companies({company_id})/salesOrders({salesOrder_id}) | Deletes an object of type salesOrder in Dynamics 365 Business Central
[**getSalesOrder()**](SalesOrderApi.md#getSalesOrder) | **GET** /companies({company_id})/salesOrders({salesOrder_id}) | Retrieve the properties and relationships of an object of type salesOrder for Dynamics 365 Business Central.
[**listSalesOrders()**](SalesOrderApi.md#listSalesOrders) | **GET** /companies({company_id})/salesOrders | Returns a list of salesOrders
[**patchSalesOrder()**](SalesOrderApi.md#patchSalesOrder) | **PATCH** /companies({company_id})/salesOrders({salesOrder_id}) | Updates an object of type salesOrder in Dynamics 365 Business Central
[**postSalesOrder()**](SalesOrderApi.md#postSalesOrder) | **POST** /companies({company_id})/salesOrders | Creates an object of type salesOrder in Dynamics 365 Business Central
[**shipAndInvoiceActionSalesOrders()**](SalesOrderApi.md#shipAndInvoiceActionSalesOrders) | **POST** /companies({company_id})/salesOrders({salesOrder_id})/Microsoft.NAV.shipAndInvoice | Performs the shipAndInvoice action for salesOrders entity


## `deleteSalesOrder()`

```php
deleteSalesOrder($company_id, $sales_order_id)
```

Deletes an object of type salesOrder in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_order_id = 'sales_order_id_example'; // string | (v1.0) id for salesOrder

try {
    $apiInstance->deleteSalesOrder($company_id, $sales_order_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->deleteSalesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_order_id** | **string**| (v1.0) id for salesOrder |

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesOrder()`

```php
getSalesOrder($company_id, $sales_order_id, $expand, $select): \OpenAPI\Client\Model\SalesOrder
```

Retrieve the properties and relationships of an object of type salesOrder for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_order_id = 'sales_order_id_example'; // string | (v1.0) id for salesOrder
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesOrder($company_id, $sales_order_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->getSalesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_order_id** | **string**| (v1.0) id for salesOrder |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesOrders()`

```php
listSalesOrders($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20031
```

Returns a list of salesOrders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesOrderApi(
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
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listSalesOrders($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->listSalesOrders: ', $e->getMessage(), PHP_EOL;
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
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesOrder()`

```php
patchSalesOrder($company_id, $sales_order_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesOrder
```

Updates an object of type salesOrder in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_order_id = 'sales_order_id_example'; // string | (v1.0) id for salesOrder
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesOrder($company_id, $sales_order_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->patchSalesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_order_id** | **string**| (v1.0) id for salesOrder |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesOrder()`

```php
postSalesOrder($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesOrder
```

Creates an object of type salesOrder in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesOrder($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->postSalesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipAndInvoiceActionSalesOrders()`

```php
shipAndInvoiceActionSalesOrders($company_id, $sales_order_id)
```

Performs the shipAndInvoice action for salesOrders entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_order_id = 'sales_order_id_example'; // string | (v1.0) id for salesOrder

try {
    $apiInstance->shipAndInvoiceActionSalesOrders($company_id, $sales_order_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->shipAndInvoiceActionSalesOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_order_id** | **string**| (v1.0) id for salesOrder |

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
