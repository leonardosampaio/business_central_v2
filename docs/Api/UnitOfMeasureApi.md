# OpenAPI\Client\UnitOfMeasureApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUnitOfMeasure()**](UnitOfMeasureApi.md#deleteUnitOfMeasure) | **DELETE** /companies({company_id})/unitsOfMeasure({unitOfMeasure_id}) | Deletes an object of type unitOfMeasure in Dynamics 365 Business Central
[**getUnitOfMeasure()**](UnitOfMeasureApi.md#getUnitOfMeasure) | **GET** /companies({company_id})/unitsOfMeasure({unitOfMeasure_id}) | Retrieve the properties and relationships of an object of type unitOfMeasure for Dynamics 365 Business Central.
[**listUnitsOfMeasure()**](UnitOfMeasureApi.md#listUnitsOfMeasure) | **GET** /companies({company_id})/unitsOfMeasure | Returns a list of unitsOfMeasure
[**patchUnitOfMeasure()**](UnitOfMeasureApi.md#patchUnitOfMeasure) | **PATCH** /companies({company_id})/unitsOfMeasure({unitOfMeasure_id}) | Updates an object of type unitOfMeasure in Dynamics 365 Business Central
[**postUnitOfMeasure()**](UnitOfMeasureApi.md#postUnitOfMeasure) | **POST** /companies({company_id})/unitsOfMeasure | Creates an object of type unitOfMeasure in Dynamics 365 Business Central


## `deleteUnitOfMeasure()`

```php
deleteUnitOfMeasure($company_id, $unit_of_measure_id)
```

Deletes an object of type unitOfMeasure in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$unit_of_measure_id = 'unit_of_measure_id_example'; // string | (v1.0) id for unitOfMeasure

try {
    $apiInstance->deleteUnitOfMeasure($company_id, $unit_of_measure_id);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->deleteUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **unit_of_measure_id** | **string**| (v1.0) id for unitOfMeasure |

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

## `getUnitOfMeasure()`

```php
getUnitOfMeasure($company_id, $unit_of_measure_id, $select): \OpenAPI\Client\Model\UnitOfMeasure
```

Retrieve the properties and relationships of an object of type unitOfMeasure for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$unit_of_measure_id = 'unit_of_measure_id_example'; // string | (v1.0) id for unitOfMeasure
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getUnitOfMeasure($company_id, $unit_of_measure_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->getUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **unit_of_measure_id** | **string**| (v1.0) id for unitOfMeasure |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\UnitOfMeasure**](../Model/UnitOfMeasure.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnitsOfMeasure()`

```php
listUnitsOfMeasure($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20034
```

Returns a list of unitsOfMeasure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitOfMeasureApi(
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
    $result = $apiInstance->listUnitsOfMeasure($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->listUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUnitOfMeasure()`

```php
patchUnitOfMeasure($company_id, $unit_of_measure_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\UnitOfMeasure
```

Updates an object of type unitOfMeasure in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$unit_of_measure_id = 'unit_of_measure_id_example'; // string | (v1.0) id for unitOfMeasure
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchUnitOfMeasure($company_id, $unit_of_measure_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->patchUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **unit_of_measure_id** | **string**| (v1.0) id for unitOfMeasure |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\UnitOfMeasure**](../Model/UnitOfMeasure.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUnitOfMeasure()`

```php
postUnitOfMeasure($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\UnitOfMeasure
```

Creates an object of type unitOfMeasure in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postUnitOfMeasure($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->postUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\UnitOfMeasure**](../Model/UnitOfMeasure.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
