# OpenAPI\Client\SalesInvoiceApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelActionSalesInvoices()**](SalesInvoiceApi.md#cancelActionSalesInvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.cancel | Performs the cancel action for salesInvoices entity
[**cancelAndSendActionSalesInvoices()**](SalesInvoiceApi.md#cancelAndSendActionSalesInvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.cancelAndSend | Performs the cancelAndSend action for salesInvoices entity
[**deleteSalesInvoice()**](SalesInvoiceApi.md#deleteSalesInvoice) | **DELETE** /companies({company_id})/salesInvoices({salesInvoice_id}) | Deletes an object of type salesInvoice in Dynamics 365 Business Central
[**getSalesInvoice()**](SalesInvoiceApi.md#getSalesInvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id}) | Retrieve the properties and relationships of an object of type salesInvoice for Dynamics 365 Business Central.
[**listSalesInvoices()**](SalesInvoiceApi.md#listSalesInvoices) | **GET** /companies({company_id})/salesInvoices | Returns a list of salesInvoices
[**makeCorrectiveCreditMemoActionSalesInvoices()**](SalesInvoiceApi.md#makeCorrectiveCreditMemoActionSalesInvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.makeCorrectiveCreditMemo | Performs the makeCorrectiveCreditMemo action for salesInvoices entity
[**patchSalesInvoice()**](SalesInvoiceApi.md#patchSalesInvoice) | **PATCH** /companies({company_id})/salesInvoices({salesInvoice_id}) | Updates an object of type salesInvoice in Dynamics 365 Business Central
[**postActionSalesInvoices()**](SalesInvoiceApi.md#postActionSalesInvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.post | Performs the post action for salesInvoices entity
[**postAndSendActionSalesInvoices()**](SalesInvoiceApi.md#postAndSendActionSalesInvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.postAndSend | Performs the postAndSend action for salesInvoices entity
[**postSalesInvoice()**](SalesInvoiceApi.md#postSalesInvoice) | **POST** /companies({company_id})/salesInvoices | Creates an object of type salesInvoice in Dynamics 365 Business Central
[**sendActionSalesInvoices()**](SalesInvoiceApi.md#sendActionSalesInvoices) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/Microsoft.NAV.send | Performs the send action for salesInvoices entity


## `cancelActionSalesInvoices()`

```php
cancelActionSalesInvoices($company_id, $sales_invoice_id)
```

Performs the cancel action for salesInvoices entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->cancelActionSalesInvoices($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->cancelActionSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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

## `cancelAndSendActionSalesInvoices()`

```php
cancelAndSendActionSalesInvoices($company_id, $sales_invoice_id)
```

Performs the cancelAndSend action for salesInvoices entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->cancelAndSendActionSalesInvoices($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->cancelAndSendActionSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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

## `deleteSalesInvoice()`

```php
deleteSalesInvoice($company_id, $sales_invoice_id)
```

Deletes an object of type salesInvoice in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->deleteSalesInvoice($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->deleteSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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

## `getSalesInvoice()`

```php
getSalesInvoice($company_id, $sales_invoice_id, $expand, $select): \OpenAPI\Client\Model\SalesInvoice
```

Retrieve the properties and relationships of an object of type salesInvoice for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesInvoice($company_id, $sales_invoice_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->getSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesInvoices()`

```php
listSalesInvoices($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse2008
```

Returns a list of salesInvoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
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
    $result = $apiInstance->listSalesInvoices($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->listSalesInvoices: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeCorrectiveCreditMemoActionSalesInvoices()`

```php
makeCorrectiveCreditMemoActionSalesInvoices($company_id, $sales_invoice_id)
```

Performs the makeCorrectiveCreditMemo action for salesInvoices entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->makeCorrectiveCreditMemoActionSalesInvoices($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->makeCorrectiveCreditMemoActionSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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

## `patchSalesInvoice()`

```php
patchSalesInvoice($company_id, $sales_invoice_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesInvoice
```

Updates an object of type salesInvoice in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesInvoice($company_id, $sales_invoice_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->patchSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postActionSalesInvoices()`

```php
postActionSalesInvoices($company_id, $sales_invoice_id)
```

Performs the post action for salesInvoices entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->postActionSalesInvoices($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->postActionSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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

## `postAndSendActionSalesInvoices()`

```php
postAndSendActionSalesInvoices($company_id, $sales_invoice_id)
```

Performs the postAndSend action for salesInvoices entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->postAndSendActionSalesInvoices($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->postAndSendActionSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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

## `postSalesInvoice()`

```php
postSalesInvoice($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesInvoice
```

Creates an object of type salesInvoice in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesInvoice($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->postSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendActionSalesInvoices()`

```php
sendActionSalesInvoices($company_id, $sales_invoice_id)
```

Performs the send action for salesInvoices entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice

try {
    $apiInstance->sendActionSalesInvoices($company_id, $sales_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->sendActionSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |

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
