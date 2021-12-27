# OpenAPI\Client\SalesQuoteLineApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesQuoteLine()**](SalesQuoteLineApi.md#deleteSalesQuoteLine) | **DELETE** /companies({company_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Deletes an object of type salesQuoteLine in Dynamics 365 Business Central
[**deleteSalesQuoteLineForSalesQuote()**](SalesQuoteLineApi.md#deleteSalesQuoteLineForSalesQuote) | **DELETE** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Deletes an object of type salesQuoteLine in Dynamics 365 Business Central
[**getSalesQuoteLine()**](SalesQuoteLineApi.md#getSalesQuoteLine) | **GET** /companies({company_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesQuoteLine for Dynamics 365 Business Central.
[**getSalesQuoteLineForSalesQuote()**](SalesQuoteLineApi.md#getSalesQuoteLineForSalesQuote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesQuoteLine for Dynamics 365 Business Central.
[**listSalesQuoteLines()**](SalesQuoteLineApi.md#listSalesQuoteLines) | **GET** /companies({company_id})/salesQuoteLines | Returns a list of salesQuoteLines
[**listSalesQuoteLinesForSalesQuote()**](SalesQuoteLineApi.md#listSalesQuoteLinesForSalesQuote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines | Returns a list of salesQuoteLines
[**patchSalesQuoteLine()**](SalesQuoteLineApi.md#patchSalesQuoteLine) | **PATCH** /companies({company_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Updates an object of type salesQuoteLine in Dynamics 365 Business Central
[**patchSalesQuoteLineForSalesQuote()**](SalesQuoteLineApi.md#patchSalesQuoteLineForSalesQuote) | **PATCH** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines(&#39;{salesQuoteLine_id}&#39;) | Updates an object of type salesQuoteLine in Dynamics 365 Business Central
[**postSalesQuoteLine()**](SalesQuoteLineApi.md#postSalesQuoteLine) | **POST** /companies({company_id})/salesQuoteLines | Creates an object of type salesQuoteLine in Dynamics 365 Business Central
[**postSalesQuoteLineForSalesQuote()**](SalesQuoteLineApi.md#postSalesQuoteLineForSalesQuote) | **POST** /companies({company_id})/salesQuotes({salesQuote_id})/salesQuoteLines | Creates an object of type salesQuoteLine in Dynamics 365 Business Central


## `deleteSalesQuoteLine()`

```php
deleteSalesQuoteLine($company_id, $sales_quote_line_id)
```

Deletes an object of type salesQuoteLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_line_id = 'sales_quote_line_id_example'; // string | (v1.0) id for salesQuoteLine

try {
    $apiInstance->deleteSalesQuoteLine($company_id, $sales_quote_line_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->deleteSalesQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_line_id** | **string**| (v1.0) id for salesQuoteLine |

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

## `deleteSalesQuoteLineForSalesQuote()`

```php
deleteSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $sales_quote_line_id)
```

Deletes an object of type salesQuoteLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_id = 'sales_quote_id_example'; // string | (v1.0) id for salesQuote
$sales_quote_line_id = 'sales_quote_line_id_example'; // string | (v1.0) id for salesQuoteLine

try {
    $apiInstance->deleteSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $sales_quote_line_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->deleteSalesQuoteLineForSalesQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_id** | **string**| (v1.0) id for salesQuote |
 **sales_quote_line_id** | **string**| (v1.0) id for salesQuoteLine |

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

## `getSalesQuoteLine()`

```php
getSalesQuoteLine($company_id, $sales_quote_line_id, $expand, $select): \OpenAPI\Client\Model\SalesQuoteLine
```

Retrieve the properties and relationships of an object of type salesQuoteLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_line_id = 'sales_quote_line_id_example'; // string | (v1.0) id for salesQuoteLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesQuoteLine($company_id, $sales_quote_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->getSalesQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_line_id** | **string**| (v1.0) id for salesQuoteLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesQuoteLineForSalesQuote()`

```php
getSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $sales_quote_line_id, $expand, $select): \OpenAPI\Client\Model\SalesQuoteLine
```

Retrieve the properties and relationships of an object of type salesQuoteLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_id = 'sales_quote_id_example'; // string | (v1.0) id for salesQuote
$sales_quote_line_id = 'sales_quote_line_id_example'; // string | (v1.0) id for salesQuoteLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $sales_quote_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->getSalesQuoteLineForSalesQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_id** | **string**| (v1.0) id for salesQuote |
 **sales_quote_line_id** | **string**| (v1.0) id for salesQuoteLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesQuoteLines()`

```php
listSalesQuoteLines($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20042
```

Returns a list of salesQuoteLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
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
    $result = $apiInstance->listSalesQuoteLines($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->listSalesQuoteLines: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesQuoteLinesForSalesQuote()`

```php
listSalesQuoteLinesForSalesQuote($company_id, $sales_quote_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20042
```

Returns a list of salesQuoteLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_id = 'sales_quote_id_example'; // string | (v1.0) id for salesQuote
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listSalesQuoteLinesForSalesQuote($company_id, $sales_quote_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->listSalesQuoteLinesForSalesQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_id** | **string**| (v1.0) id for salesQuote |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesQuoteLine()`

```php
patchSalesQuoteLine($company_id, $sales_quote_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesQuoteLine
```

Updates an object of type salesQuoteLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_line_id = 'sales_quote_line_id_example'; // string | (v1.0) id for salesQuoteLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesQuoteLine($company_id, $sales_quote_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->patchSalesQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_line_id** | **string**| (v1.0) id for salesQuoteLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesQuoteLineForSalesQuote()`

```php
patchSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $sales_quote_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesQuoteLine
```

Updates an object of type salesQuoteLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_id = 'sales_quote_id_example'; // string | (v1.0) id for salesQuote
$sales_quote_line_id = 'sales_quote_line_id_example'; // string | (v1.0) id for salesQuoteLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $sales_quote_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->patchSalesQuoteLineForSalesQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_id** | **string**| (v1.0) id for salesQuote |
 **sales_quote_line_id** | **string**| (v1.0) id for salesQuoteLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesQuoteLine()`

```php
postSalesQuoteLine($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesQuoteLine
```

Creates an object of type salesQuoteLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesQuoteLine($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->postSalesQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesQuoteLineForSalesQuote()`

```php
postSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesQuoteLine
```

Creates an object of type salesQuoteLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesQuoteLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_id = 'sales_quote_id_example'; // string | (v1.0) id for salesQuote
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesQuoteLineForSalesQuote($company_id, $sales_quote_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuoteLineApi->postSalesQuoteLineForSalesQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_id** | **string**| (v1.0) id for salesQuote |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
