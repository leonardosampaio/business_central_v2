# OpenAPI\Client\SalesInvoiceLineApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesInvoiceLine()**](SalesInvoiceLineApi.md#deleteSalesInvoiceLine) | **DELETE** /companies({company_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Deletes an object of type salesInvoiceLine in Dynamics 365 Business Central
[**deleteSalesInvoiceLineForSalesInvoice()**](SalesInvoiceLineApi.md#deleteSalesInvoiceLineForSalesInvoice) | **DELETE** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Deletes an object of type salesInvoiceLine in Dynamics 365 Business Central
[**getSalesInvoiceLine()**](SalesInvoiceLineApi.md#getSalesInvoiceLine) | **GET** /companies({company_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesInvoiceLine for Dynamics 365 Business Central.
[**getSalesInvoiceLineForSalesInvoice()**](SalesInvoiceLineApi.md#getSalesInvoiceLineForSalesInvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesInvoiceLine for Dynamics 365 Business Central.
[**listSalesInvoiceLines()**](SalesInvoiceLineApi.md#listSalesInvoiceLines) | **GET** /companies({company_id})/salesInvoiceLines | Returns a list of salesInvoiceLines
[**listSalesInvoiceLinesForSalesInvoice()**](SalesInvoiceLineApi.md#listSalesInvoiceLinesForSalesInvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines | Returns a list of salesInvoiceLines
[**patchSalesInvoiceLine()**](SalesInvoiceLineApi.md#patchSalesInvoiceLine) | **PATCH** /companies({company_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Updates an object of type salesInvoiceLine in Dynamics 365 Business Central
[**patchSalesInvoiceLineForSalesInvoice()**](SalesInvoiceLineApi.md#patchSalesInvoiceLineForSalesInvoice) | **PATCH** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines(&#39;{salesInvoiceLine_id}&#39;) | Updates an object of type salesInvoiceLine in Dynamics 365 Business Central
[**postSalesInvoiceLine()**](SalesInvoiceLineApi.md#postSalesInvoiceLine) | **POST** /companies({company_id})/salesInvoiceLines | Creates an object of type salesInvoiceLine in Dynamics 365 Business Central
[**postSalesInvoiceLineForSalesInvoice()**](SalesInvoiceLineApi.md#postSalesInvoiceLineForSalesInvoice) | **POST** /companies({company_id})/salesInvoices({salesInvoice_id})/salesInvoiceLines | Creates an object of type salesInvoiceLine in Dynamics 365 Business Central


## `deleteSalesInvoiceLine()`

```php
deleteSalesInvoiceLine($company_id, $sales_invoice_line_id)
```

Deletes an object of type salesInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_line_id = 'sales_invoice_line_id_example'; // string | (v1.0) id for salesInvoiceLine

try {
    $apiInstance->deleteSalesInvoiceLine($company_id, $sales_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->deleteSalesInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_line_id** | **string**| (v1.0) id for salesInvoiceLine |

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

## `deleteSalesInvoiceLineForSalesInvoice()`

```php
deleteSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $sales_invoice_line_id)
```

Deletes an object of type salesInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$sales_invoice_line_id = 'sales_invoice_line_id_example'; // string | (v1.0) id for salesInvoiceLine

try {
    $apiInstance->deleteSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $sales_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->deleteSalesInvoiceLineForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **sales_invoice_line_id** | **string**| (v1.0) id for salesInvoiceLine |

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

## `getSalesInvoiceLine()`

```php
getSalesInvoiceLine($company_id, $sales_invoice_line_id, $expand, $select): \OpenAPI\Client\Model\SalesInvoiceLine
```

Retrieve the properties and relationships of an object of type salesInvoiceLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_line_id = 'sales_invoice_line_id_example'; // string | (v1.0) id for salesInvoiceLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesInvoiceLine($company_id, $sales_invoice_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->getSalesInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_line_id** | **string**| (v1.0) id for salesInvoiceLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesInvoiceLine**](../Model/SalesInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesInvoiceLineForSalesInvoice()`

```php
getSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $sales_invoice_line_id, $expand, $select): \OpenAPI\Client\Model\SalesInvoiceLine
```

Retrieve the properties and relationships of an object of type salesInvoiceLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$sales_invoice_line_id = 'sales_invoice_line_id_example'; // string | (v1.0) id for salesInvoiceLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $sales_invoice_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->getSalesInvoiceLineForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **sales_invoice_line_id** | **string**| (v1.0) id for salesInvoiceLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesInvoiceLine**](../Model/SalesInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesInvoiceLines()`

```php
listSalesInvoiceLines($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse2009
```

Returns a list of salesInvoiceLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
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
    $result = $apiInstance->listSalesInvoiceLines($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->listSalesInvoiceLines: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesInvoiceLinesForSalesInvoice()`

```php
listSalesInvoiceLinesForSalesInvoice($company_id, $sales_invoice_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse2009
```

Returns a list of salesInvoiceLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listSalesInvoiceLinesForSalesInvoice($company_id, $sales_invoice_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->listSalesInvoiceLinesForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesInvoiceLine()`

```php
patchSalesInvoiceLine($company_id, $sales_invoice_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesInvoiceLine
```

Updates an object of type salesInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_line_id = 'sales_invoice_line_id_example'; // string | (v1.0) id for salesInvoiceLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesInvoiceLine($company_id, $sales_invoice_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->patchSalesInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_line_id** | **string**| (v1.0) id for salesInvoiceLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesInvoiceLine**](../Model/SalesInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesInvoiceLineForSalesInvoice()`

```php
patchSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $sales_invoice_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesInvoiceLine
```

Updates an object of type salesInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$sales_invoice_line_id = 'sales_invoice_line_id_example'; // string | (v1.0) id for salesInvoiceLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $sales_invoice_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->patchSalesInvoiceLineForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **sales_invoice_line_id** | **string**| (v1.0) id for salesInvoiceLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesInvoiceLine**](../Model/SalesInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesInvoiceLine()`

```php
postSalesInvoiceLine($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesInvoiceLine
```

Creates an object of type salesInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesInvoiceLine($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->postSalesInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesInvoiceLine**](../Model/SalesInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesInvoiceLineForSalesInvoice()`

```php
postSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesInvoiceLine
```

Creates an object of type salesInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesInvoiceLineForSalesInvoice($company_id, $sales_invoice_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceLineApi->postSalesInvoiceLineForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesInvoiceLine**](../Model/SalesInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
