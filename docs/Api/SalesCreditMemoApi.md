# OpenAPI\Client\SalesCreditMemoApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelActionSalesCreditMemos()**](SalesCreditMemoApi.md#cancelActionSalesCreditMemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.cancel | Performs the cancel action for salesCreditMemos entity
[**cancelAndSendActionSalesCreditMemos()**](SalesCreditMemoApi.md#cancelAndSendActionSalesCreditMemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.cancelAndSend | Performs the cancelAndSend action for salesCreditMemos entity
[**deleteSalesCreditMemo()**](SalesCreditMemoApi.md#deleteSalesCreditMemo) | **DELETE** /companies({company_id})/salesCreditMemos({salesCreditMemo_id}) | Deletes an object of type salesCreditMemo in Dynamics 365 Business Central
[**getSalesCreditMemo()**](SalesCreditMemoApi.md#getSalesCreditMemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id}) | Retrieve the properties and relationships of an object of type salesCreditMemo for Dynamics 365 Business Central.
[**listSalesCreditMemos()**](SalesCreditMemoApi.md#listSalesCreditMemos) | **GET** /companies({company_id})/salesCreditMemos | Returns a list of salesCreditMemos
[**patchSalesCreditMemo()**](SalesCreditMemoApi.md#patchSalesCreditMemo) | **PATCH** /companies({company_id})/salesCreditMemos({salesCreditMemo_id}) | Updates an object of type salesCreditMemo in Dynamics 365 Business Central
[**postActionSalesCreditMemos()**](SalesCreditMemoApi.md#postActionSalesCreditMemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.post | Performs the post action for salesCreditMemos entity
[**postAndSendActionSalesCreditMemos()**](SalesCreditMemoApi.md#postAndSendActionSalesCreditMemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.postAndSend | Performs the postAndSend action for salesCreditMemos entity
[**postSalesCreditMemo()**](SalesCreditMemoApi.md#postSalesCreditMemo) | **POST** /companies({company_id})/salesCreditMemos | Creates an object of type salesCreditMemo in Dynamics 365 Business Central
[**sendActionSalesCreditMemos()**](SalesCreditMemoApi.md#sendActionSalesCreditMemos) | **POST** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/Microsoft.NAV.send | Performs the send action for salesCreditMemos entity


## `cancelActionSalesCreditMemos()`

```php
cancelActionSalesCreditMemos($company_id, $sales_credit_memo_id)
```

Performs the cancel action for salesCreditMemos entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo

try {
    $apiInstance->cancelActionSalesCreditMemos($company_id, $sales_credit_memo_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->cancelActionSalesCreditMemos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |

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

## `cancelAndSendActionSalesCreditMemos()`

```php
cancelAndSendActionSalesCreditMemos($company_id, $sales_credit_memo_id)
```

Performs the cancelAndSend action for salesCreditMemos entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo

try {
    $apiInstance->cancelAndSendActionSalesCreditMemos($company_id, $sales_credit_memo_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->cancelAndSendActionSalesCreditMemos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |

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

## `deleteSalesCreditMemo()`

```php
deleteSalesCreditMemo($company_id, $sales_credit_memo_id)
```

Deletes an object of type salesCreditMemo in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo

try {
    $apiInstance->deleteSalesCreditMemo($company_id, $sales_credit_memo_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->deleteSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |

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

## `getSalesCreditMemo()`

```php
getSalesCreditMemo($company_id, $sales_credit_memo_id, $expand, $select): \OpenAPI\Client\Model\SalesCreditMemo
```

Retrieve the properties and relationships of an object of type salesCreditMemo for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getSalesCreditMemo($company_id, $sales_credit_memo_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->getSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemo**](../Model/SalesCreditMemo.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesCreditMemos()`

```php
listSalesCreditMemos($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20043
```

Returns a list of salesCreditMemos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
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
    $result = $apiInstance->listSalesCreditMemos($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->listSalesCreditMemos: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSalesCreditMemo()`

```php
patchSalesCreditMemo($company_id, $sales_credit_memo_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\SalesCreditMemo
```

Updates an object of type salesCreditMemo in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchSalesCreditMemo($company_id, $sales_credit_memo_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->patchSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemo**](../Model/SalesCreditMemo.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postActionSalesCreditMemos()`

```php
postActionSalesCreditMemos($company_id, $sales_credit_memo_id)
```

Performs the post action for salesCreditMemos entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo

try {
    $apiInstance->postActionSalesCreditMemos($company_id, $sales_credit_memo_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->postActionSalesCreditMemos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |

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

## `postAndSendActionSalesCreditMemos()`

```php
postAndSendActionSalesCreditMemos($company_id, $sales_credit_memo_id)
```

Performs the postAndSend action for salesCreditMemos entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo

try {
    $apiInstance->postAndSendActionSalesCreditMemos($company_id, $sales_credit_memo_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->postAndSendActionSalesCreditMemos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |

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

## `postSalesCreditMemo()`

```php
postSalesCreditMemo($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\SalesCreditMemo
```

Creates an object of type salesCreditMemo in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postSalesCreditMemo($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->postSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\SalesCreditMemo**](../Model/SalesCreditMemo.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendActionSalesCreditMemos()`

```php
sendActionSalesCreditMemos($company_id, $sales_credit_memo_id)
```

Performs the send action for salesCreditMemos entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesCreditMemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo

try {
    $apiInstance->sendActionSalesCreditMemos($company_id, $sales_credit_memo_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditMemoApi->sendActionSalesCreditMemos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |

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
