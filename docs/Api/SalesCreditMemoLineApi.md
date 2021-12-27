# OpenAPI\Client\SalesCreditMemoLineApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesCreditMemoLine()**](SalesCreditMemoLineApi.md#deleteSalesCreditMemoLine) | **DELETE** /companies({company_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Deletes an object of type salesCreditMemoLine in Dynamics 365 Business Central
[**deleteSalesCreditMemoLineForSalesCreditMemo()**](SalesCreditMemoLineApi.md#deleteSalesCreditMemoLineForSalesCreditMemo) | **DELETE** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Deletes an object of type salesCreditMemoLine in Dynamics 365 Business Central
[**getSalesCreditMemoLine()**](SalesCreditMemoLineApi.md#getSalesCreditMemoLine) | **GET** /companies({company_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesCreditMemoLine for Dynamics 365 Business Central.
[**getSalesCreditMemoLineForSalesCreditMemo()**](SalesCreditMemoLineApi.md#getSalesCreditMemoLineForSalesCreditMemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Retrieve the properties and relationships of an object of type salesCreditMemoLine for Dynamics 365 Business Central.
[**listSalesCreditMemoLines()**](SalesCreditMemoLineApi.md#listSalesCreditMemoLines) | **GET** /companies({company_id})/salesCreditMemoLines | Returns a list of salesCreditMemoLines
[**listSalesCreditMemoLinesForSalesCreditMemo()**](SalesCreditMemoLineApi.md#listSalesCreditMemoLinesForSalesCreditMemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines | Returns a list of salesCreditMemoLines
[**patchSalesCreditMemoLine()**](SalesCreditMemoLineApi.md#patchSalesCreditMemoLine) | **PATCH** /companies({company_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Updates an object of type salesCreditMemoLine in Dynamics 365 Business Central
[**patchSalesCreditMemoLineForSalesCreditMemo()**](SalesCreditMemoLineApi.md#patchSalesCreditMemoLineForSalesCreditMemo) | **PATCH** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines(&#39;{salesCreditMemoLine_id}&#39;) | Updates an object of type salesCreditMemoLine in Dynamics 365 Business Central
[**postSalesCreditMemoLine()**](SalesCreditMemoLineApi.md#postSalesCreditMemoLine) | **POST** /companies({company_id})/salesCreditMemoLines | Creates an object of type salesCreditMemoLine in Dynamics 365 Business Central
[**postSalesCreditMemoLineForSalesCreditMemo()**](SalesCreditMemoLineApi.md#postSalesCreditMemoLineForSalesCreditMemo) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/salesCreditMemoLines | Creates an object of type salesCreditMemoLine in Dynamics 365 Business Central


## `deleteSalesCreditMemoLine()`

```php
deleteSalesCreditMemoLine($company_id, $sales_credit_memo_line_id)
```

Deletes an object of type salesCreditMemoLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_line_id = 'sales_credit_memo_line_id_example'; // string | (v1.0) id for salesCreditMemoLine

try {
    $apiInstance->deleteSalesCreditMemoLine($company_id, $sales_credit_memo_line_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->deleteSalesCreditMemoLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_line_id** | **string**| (v1.0) id for salesCreditMemoLine |

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

## `deleteSalesCreditMemoLineForSalesCreditMemo()`

```php
deleteSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $sales_credit_memo_line_id)
```

Deletes an object of type salesCreditMemoLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$sales_credit_memo_line_id = 'sales_credit_memo_line_id_example'; // string | (v1.0) id for salesCreditMemoLine

try {
    $apiInstance->deleteSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $sales_credit_memo_line_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->deleteSalesCreditMemoLineForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **sales_credit_memo_line_id** | **string**| (v1.0) id for salesCreditMemoLine |

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

## `getSalesCreditMemoLine()`

```php
getSalesCreditMemoLine($company_id, $sales_credit_memo_line_id, $expand, $select): \OpenAPI\Client\Model\SalesCreditMemoLine
```

Retrieve the properties and relationships of an object of type salesCreditMemoLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_line_id = 'sales_credit_memo_line_id_example'; // string | (v1.0) id for salesCreditMemoLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesCreditMemoLine($company_id, $sales_credit_memo_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->getSalesCreditMemoLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_line_id** | **string**| (v1.0) id for salesCreditMemoLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemoLine**](../Model/SalesCreditMemoLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCreditMemoLineForSalesCreditMemo()`

```php
getSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $sales_credit_memo_line_id, $expand, $select): \OpenAPI\Client\Model\SalesCreditMemoLine
```

Retrieve the properties and relationships of an object of type salesCreditMemoLine for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$sales_credit_memo_line_id = 'sales_credit_memo_line_id_example'; // string | (v1.0) id for salesCreditMemoLine
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $sales_credit_memo_line_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->getSalesCreditMemoLineForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **sales_credit_memo_line_id** | **string**| (v1.0) id for salesCreditMemoLine |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemoLine**](../Model/SalesCreditMemoLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesCreditMemoLines()`

```php
listSalesCreditMemoLines($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20044
```

Returns a list of salesCreditMemoLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
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
    $result = $apiInstance->listSalesCreditMemoLines($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->listSalesCreditMemoLines: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesCreditMemoLinesForSalesCreditMemo()`

```php
listSalesCreditMemoLinesForSalesCreditMemo($company_id, $sales_credit_memo_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20044
```

Returns a list of salesCreditMemoLines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listSalesCreditMemoLinesForSalesCreditMemo($company_id, $sales_credit_memo_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->listSalesCreditMemoLinesForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesCreditMemoLine()`

```php
patchSalesCreditMemoLine($company_id, $sales_credit_memo_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesCreditMemoLine
```

Updates an object of type salesCreditMemoLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_line_id = 'sales_credit_memo_line_id_example'; // string | (v1.0) id for salesCreditMemoLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesCreditMemoLine($company_id, $sales_credit_memo_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->patchSalesCreditMemoLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_line_id** | **string**| (v1.0) id for salesCreditMemoLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemoLine**](../Model/SalesCreditMemoLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesCreditMemoLineForSalesCreditMemo()`

```php
patchSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $sales_credit_memo_line_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesCreditMemoLine
```

Updates an object of type salesCreditMemoLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$sales_credit_memo_line_id = 'sales_credit_memo_line_id_example'; // string | (v1.0) id for salesCreditMemoLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $sales_credit_memo_line_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->patchSalesCreditMemoLineForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **sales_credit_memo_line_id** | **string**| (v1.0) id for salesCreditMemoLine |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemoLine**](../Model/SalesCreditMemoLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesCreditMemoLine()`

```php
postSalesCreditMemoLine($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesCreditMemoLine
```

Creates an object of type salesCreditMemoLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesCreditMemoLine($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->postSalesCreditMemoLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemoLine**](../Model/SalesCreditMemoLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesCreditMemoLineForSalesCreditMemo()`

```php
postSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesCreditMemoLine
```

Creates an object of type salesCreditMemoLine in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesCreditMemoLineForSalesCreditMemo($company_id, $sales_credit_memo_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoLineApi->postSalesCreditMemoLineForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemoLine**](../Model/SalesCreditMemoLine.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
