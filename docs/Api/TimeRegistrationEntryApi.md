# OpenAPI\Client\TimeRegistrationEntryApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTimeRegistrationEntry()**](TimeRegistrationEntryApi.md#deleteTimeRegistrationEntry) | **DELETE** /companies({company_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Deletes an object of type timeRegistrationEntry in Dynamics 365 Business Central
[**deleteTimeRegistrationEntryForEmployee()**](TimeRegistrationEntryApi.md#deleteTimeRegistrationEntryForEmployee) | **DELETE** /companies({company_id})/employees({employee_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Deletes an object of type timeRegistrationEntry in Dynamics 365 Business Central
[**getTimeRegistrationEntry()**](TimeRegistrationEntryApi.md#getTimeRegistrationEntry) | **GET** /companies({company_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Retrieve the properties and relationships of an object of type timeRegistrationEntry for Dynamics 365 Business Central.
[**getTimeRegistrationEntryForEmployee()**](TimeRegistrationEntryApi.md#getTimeRegistrationEntryForEmployee) | **GET** /companies({company_id})/employees({employee_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Retrieve the properties and relationships of an object of type timeRegistrationEntry for Dynamics 365 Business Central.
[**listTimeRegistrationEntries()**](TimeRegistrationEntryApi.md#listTimeRegistrationEntries) | **GET** /companies({company_id})/timeRegistrationEntries | Returns a list of timeRegistrationEntries
[**listTimeRegistrationEntriesForEmployee()**](TimeRegistrationEntryApi.md#listTimeRegistrationEntriesForEmployee) | **GET** /companies({company_id})/employees({employee_id})/timeRegistrationEntries | Returns a list of timeRegistrationEntries
[**patchTimeRegistrationEntry()**](TimeRegistrationEntryApi.md#patchTimeRegistrationEntry) | **PATCH** /companies({company_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Updates an object of type timeRegistrationEntry in Dynamics 365 Business Central
[**patchTimeRegistrationEntryForEmployee()**](TimeRegistrationEntryApi.md#patchTimeRegistrationEntryForEmployee) | **PATCH** /companies({company_id})/employees({employee_id})/timeRegistrationEntries({timeRegistrationEntry_id}) | Updates an object of type timeRegistrationEntry in Dynamics 365 Business Central
[**postTimeRegistrationEntry()**](TimeRegistrationEntryApi.md#postTimeRegistrationEntry) | **POST** /companies({company_id})/timeRegistrationEntries | Creates an object of type timeRegistrationEntry in Dynamics 365 Business Central
[**postTimeRegistrationEntryForEmployee()**](TimeRegistrationEntryApi.md#postTimeRegistrationEntryForEmployee) | **POST** /companies({company_id})/employees({employee_id})/timeRegistrationEntries | Creates an object of type timeRegistrationEntry in Dynamics 365 Business Central


## `deleteTimeRegistrationEntry()`

```php
deleteTimeRegistrationEntry($company_id, $time_registration_entry_id)
```

Deletes an object of type timeRegistrationEntry in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$time_registration_entry_id = 'time_registration_entry_id_example'; // string | (v1.0) id for timeRegistrationEntry

try {
    $apiInstance->deleteTimeRegistrationEntry($company_id, $time_registration_entry_id);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->deleteTimeRegistrationEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **time_registration_entry_id** | **string**| (v1.0) id for timeRegistrationEntry |

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

## `deleteTimeRegistrationEntryForEmployee()`

```php
deleteTimeRegistrationEntryForEmployee($company_id, $employee_id, $time_registration_entry_id)
```

Deletes an object of type timeRegistrationEntry in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$employee_id = 'employee_id_example'; // string | (v1.0) id for employee
$time_registration_entry_id = 'time_registration_entry_id_example'; // string | (v1.0) id for timeRegistrationEntry

try {
    $apiInstance->deleteTimeRegistrationEntryForEmployee($company_id, $employee_id, $time_registration_entry_id);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->deleteTimeRegistrationEntryForEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **employee_id** | **string**| (v1.0) id for employee |
 **time_registration_entry_id** | **string**| (v1.0) id for timeRegistrationEntry |

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

## `getTimeRegistrationEntry()`

```php
getTimeRegistrationEntry($company_id, $time_registration_entry_id, $expand, $select): \OpenAPI\Client\Model\TimeRegistrationEntry
```

Retrieve the properties and relationships of an object of type timeRegistrationEntry for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$time_registration_entry_id = 'time_registration_entry_id_example'; // string | (v1.0) id for timeRegistrationEntry
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getTimeRegistrationEntry($company_id, $time_registration_entry_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->getTimeRegistrationEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **time_registration_entry_id** | **string**| (v1.0) id for timeRegistrationEntry |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\TimeRegistrationEntry**](../Model/TimeRegistrationEntry.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTimeRegistrationEntryForEmployee()`

```php
getTimeRegistrationEntryForEmployee($company_id, $employee_id, $time_registration_entry_id, $expand, $select): \OpenAPI\Client\Model\TimeRegistrationEntry
```

Retrieve the properties and relationships of an object of type timeRegistrationEntry for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$employee_id = 'employee_id_example'; // string | (v1.0) id for employee
$time_registration_entry_id = 'time_registration_entry_id_example'; // string | (v1.0) id for timeRegistrationEntry
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getTimeRegistrationEntryForEmployee($company_id, $employee_id, $time_registration_entry_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->getTimeRegistrationEntryForEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **employee_id** | **string**| (v1.0) id for employee |
 **time_registration_entry_id** | **string**| (v1.0) id for timeRegistrationEntry |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\TimeRegistrationEntry**](../Model/TimeRegistrationEntry.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTimeRegistrationEntries()`

```php
listTimeRegistrationEntries($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20019
```

Returns a list of timeRegistrationEntries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
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
    $result = $apiInstance->listTimeRegistrationEntries($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->listTimeRegistrationEntries: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTimeRegistrationEntriesForEmployee()`

```php
listTimeRegistrationEntriesForEmployee($company_id, $employee_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20019
```

Returns a list of timeRegistrationEntries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$employee_id = 'employee_id_example'; // string | (v1.0) id for employee
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listTimeRegistrationEntriesForEmployee($company_id, $employee_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->listTimeRegistrationEntriesForEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **employee_id** | **string**| (v1.0) id for employee |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTimeRegistrationEntry()`

```php
patchTimeRegistrationEntry($company_id, $time_registration_entry_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\TimeRegistrationEntry
```

Updates an object of type timeRegistrationEntry in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$time_registration_entry_id = 'time_registration_entry_id_example'; // string | (v1.0) id for timeRegistrationEntry
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchTimeRegistrationEntry($company_id, $time_registration_entry_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->patchTimeRegistrationEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **time_registration_entry_id** | **string**| (v1.0) id for timeRegistrationEntry |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\TimeRegistrationEntry**](../Model/TimeRegistrationEntry.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTimeRegistrationEntryForEmployee()`

```php
patchTimeRegistrationEntryForEmployee($company_id, $employee_id, $time_registration_entry_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\TimeRegistrationEntry
```

Updates an object of type timeRegistrationEntry in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$employee_id = 'employee_id_example'; // string | (v1.0) id for employee
$time_registration_entry_id = 'time_registration_entry_id_example'; // string | (v1.0) id for timeRegistrationEntry
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchTimeRegistrationEntryForEmployee($company_id, $employee_id, $time_registration_entry_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->patchTimeRegistrationEntryForEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **employee_id** | **string**| (v1.0) id for employee |
 **time_registration_entry_id** | **string**| (v1.0) id for timeRegistrationEntry |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\TimeRegistrationEntry**](../Model/TimeRegistrationEntry.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTimeRegistrationEntry()`

```php
postTimeRegistrationEntry($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\TimeRegistrationEntry
```

Creates an object of type timeRegistrationEntry in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postTimeRegistrationEntry($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->postTimeRegistrationEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\TimeRegistrationEntry**](../Model/TimeRegistrationEntry.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTimeRegistrationEntryForEmployee()`

```php
postTimeRegistrationEntryForEmployee($company_id, $employee_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\TimeRegistrationEntry
```

Creates an object of type timeRegistrationEntry in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimeRegistrationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$employee_id = 'employee_id_example'; // string | (v1.0) id for employee
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postTimeRegistrationEntryForEmployee($company_id, $employee_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRegistrationEntryApi->postTimeRegistrationEntryForEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **employee_id** | **string**| (v1.0) id for employee |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\TimeRegistrationEntry**](../Model/TimeRegistrationEntry.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
