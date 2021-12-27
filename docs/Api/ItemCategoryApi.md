# OpenAPI\Client\ItemCategoryApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteItemCategory()**](ItemCategoryApi.md#deleteItemCategory) | **DELETE** /companies({company_id})/itemCategories({itemCategory_id}) | Deletes an object of type itemCategory in Dynamics 365 Business Central
[**getItemCategory()**](ItemCategoryApi.md#getItemCategory) | **GET** /companies({company_id})/itemCategories({itemCategory_id}) | Retrieve the properties and relationships of an object of type itemCategory for Dynamics 365 Business Central.
[**listItemCategories()**](ItemCategoryApi.md#listItemCategories) | **GET** /companies({company_id})/itemCategories | Returns a list of itemCategories
[**patchItemCategory()**](ItemCategoryApi.md#patchItemCategory) | **PATCH** /companies({company_id})/itemCategories({itemCategory_id}) | Updates an object of type itemCategory in Dynamics 365 Business Central
[**postItemCategory()**](ItemCategoryApi.md#postItemCategory) | **POST** /companies({company_id})/itemCategories | Creates an object of type itemCategory in Dynamics 365 Business Central


## `deleteItemCategory()`

```php
deleteItemCategory($company_id, $item_category_id)
```

Deletes an object of type itemCategory in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$item_category_id = 'item_category_id_example'; // string | (v1.0) id for itemCategory

try {
    $apiInstance->deleteItemCategory($company_id, $item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->deleteItemCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **item_category_id** | **string**| (v1.0) id for itemCategory |

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

## `getItemCategory()`

```php
getItemCategory($company_id, $item_category_id, $select): \OpenAPI\Client\Model\ItemCategory
```

Retrieve the properties and relationships of an object of type itemCategory for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$item_category_id = 'item_category_id_example'; // string | (v1.0) id for itemCategory
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getItemCategory($company_id, $item_category_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **item_category_id** | **string**| (v1.0) id for itemCategory |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemCategory**](../Model/ItemCategory.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listItemCategories()`

```php
listItemCategories($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20028
```

Returns a list of itemCategories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemCategoryApi(
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
    $result = $apiInstance->listItemCategories($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->listItemCategories: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchItemCategory()`

```php
patchItemCategory($company_id, $item_category_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\ItemCategory
```

Updates an object of type itemCategory in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$item_category_id = 'item_category_id_example'; // string | (v1.0) id for itemCategory
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchItemCategory($company_id, $item_category_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->patchItemCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **item_category_id** | **string**| (v1.0) id for itemCategory |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemCategory**](../Model/ItemCategory.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postItemCategory()`

```php
postItemCategory($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\ItemCategory
```

Creates an object of type itemCategory in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postItemCategory($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->postItemCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemCategory**](../Model/ItemCategory.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
