# OpenAPI\Client\PurchaseInvoiceLineApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePurchaseInvoiceLine()**](PurchaseInvoiceLineApi.md#deletePurchaseInvoiceLine) | **DELETE** /companies({company_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Deletes an object of type purchaseInvoiceLine in Dynamics 365 Business Central
[**deletePurchaseInvoiceLineForPurchaseInvoice()**](PurchaseInvoiceLineApi.md#deletePurchaseInvoiceLineForPurchaseInvoice) | **DELETE** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Deletes an object of type purchaseInvoiceLine in Dynamics 365 Business Central
[**getPurchaseInvoiceLine()**](PurchaseInvoiceLineApi.md#getPurchaseInvoiceLine) | **GET** /companies({company_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type purchaseInvoiceLine for Dynamics 365 Business Central.
[**getPurchaseInvoiceLineForPurchaseInvoice()**](PurchaseInvoiceLineApi.md#getPurchaseInvoiceLineForPurchaseInvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Retrieve the properties and relationships of an object of type purchaseInvoiceLine for Dynamics 365 Business Central.
[**listPurchaseInvoiceLines()**](PurchaseInvoiceLineApi.md#listPurchaseInvoiceLines) | **GET** /companies({company_id})/purchaseInvoiceLines | Returns a list of purchaseInvoiceLines
[**listPurchaseInvoiceLinesForPurchaseInvoice()**](PurchaseInvoiceLineApi.md#listPurchaseInvoiceLinesForPurchaseInvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines | Returns a list of purchaseInvoiceLines
[**patchPurchaseInvoiceLine()**](PurchaseInvoiceLineApi.md#patchPurchaseInvoiceLine) | **PATCH** /companies({company_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Updates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
[**patchPurchaseInvoiceLineForPurchaseInvoice()**](PurchaseInvoiceLineApi.md#patchPurchaseInvoiceLineForPurchaseInvoice) | **PATCH** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines(&#39;{purchaseInvoiceLine_id}&#39;) | Updates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
[**postPurchaseInvoiceLine()**](PurchaseInvoiceLineApi.md#postPurchaseInvoiceLine) | **POST** /companies({company_id})/purchaseInvoiceLines | Creates an object of type purchaseInvoiceLine in Dynamics 365 Business Central
[**postPurchaseInvoiceLineForPurchaseInvoice()**](PurchaseInvoiceLineApi.md#postPurchaseInvoiceLineForPurchaseInvoice) | **POST** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/purchaseInvoiceLines | Creates an object of type purchaseInvoiceLine in Dynamics 365 Business Central


## `deletePurchaseInvoiceLine()`

```php
deletePurchaseInvoiceLine($company_id, $purchase_invoice_line_id)
```

Deletes an object of type purchaseInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_line_id = 'purchase_invoice_line_id_example'; // string | (v1.0) id for purchaseInvoiceLine

try {
    $apiInstance->deletePurchaseInvoiceLine($company_id, $purchase_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->deletePurchaseInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_line_id** | **string**| (v1.0) id for purchaseInvoiceLine |

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

## `deletePurchaseInvoiceLineForPurchaseInvoice()`

```php
deletePurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $purchase_invoice_line_id)
```

Deletes an object of type purchaseInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$purchase_invoice_line_id = 'purchase_invoice_line_id_example'; // string | (v1.0) id for purchaseInvoiceLine

try {
    $apiInstance->deletePurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $purchase_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->deletePurchaseInvoiceLineForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **purchase_invoice_line_id** | **string**| (v1.0) id for purchaseInvoiceLine |

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

## `getPurchaseInvoiceLine()`

```php
getPurchaseInvoiceLine($company_id, $purchase_invoice_line_id, $expand, $select): \OpenAPI\Client\Model\PurchaseInvoiceLine
```

Retrieve the properties and relationships of an object of type purchaseInvoiceLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_line_id = 'purchase_invoice_line_id_example'; // string | (v1.0) id for purchaseInvoiceLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPurchaseInvoiceLine($company_id, $purchase_invoice_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->getPurchaseInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_line_id** | **string**| (v1.0) id for purchaseInvoiceLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseInvoiceLineForPurchaseInvoice()`

```php
getPurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $purchase_invoice_line_id, $expand, $select): \OpenAPI\Client\Model\PurchaseInvoiceLine
```

Retrieve the properties and relationships of an object of type purchaseInvoiceLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$purchase_invoice_line_id = 'purchase_invoice_line_id_example'; // string | (v1.0) id for purchaseInvoiceLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $purchase_invoice_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->getPurchaseInvoiceLineForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **purchase_invoice_line_id** | **string**| (v1.0) id for purchaseInvoiceLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPurchaseInvoiceLines()`

```php
listPurchaseInvoiceLines($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20047
```

Returns a list of purchaseInvoiceLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
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
    $result = $apiInstance->listPurchaseInvoiceLines($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->listPurchaseInvoiceLines: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPurchaseInvoiceLinesForPurchaseInvoice()`

```php
listPurchaseInvoiceLinesForPurchaseInvoice($company_id, $purchase_invoice_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20047
```

Returns a list of purchaseInvoiceLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listPurchaseInvoiceLinesForPurchaseInvoice($company_id, $purchase_invoice_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->listPurchaseInvoiceLinesForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPurchaseInvoiceLine()`

```php
patchPurchaseInvoiceLine($company_id, $purchase_invoice_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\PurchaseInvoiceLine
```

Updates an object of type purchaseInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_line_id = 'purchase_invoice_line_id_example'; // string | (v1.0) id for purchaseInvoiceLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchPurchaseInvoiceLine($company_id, $purchase_invoice_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->patchPurchaseInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_line_id** | **string**| (v1.0) id for purchaseInvoiceLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPurchaseInvoiceLineForPurchaseInvoice()`

```php
patchPurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $purchase_invoice_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\PurchaseInvoiceLine
```

Updates an object of type purchaseInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$purchase_invoice_line_id = 'purchase_invoice_line_id_example'; // string | (v1.0) id for purchaseInvoiceLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchPurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $purchase_invoice_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->patchPurchaseInvoiceLineForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **purchase_invoice_line_id** | **string**| (v1.0) id for purchaseInvoiceLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseInvoiceLine()`

```php
postPurchaseInvoiceLine($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\PurchaseInvoiceLine
```

Creates an object of type purchaseInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postPurchaseInvoiceLine($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->postPurchaseInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseInvoiceLineForPurchaseInvoice()`

```php
postPurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\PurchaseInvoiceLine
```

Creates an object of type purchaseInvoiceLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postPurchaseInvoiceLineForPurchaseInvoice($company_id, $purchase_invoice_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceLineApi->postPurchaseInvoiceLineForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
