# OpenAPI\Client\GeneralLedgerEntryAttachmentsApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGeneralLedgerEntryAttachments()**](GeneralLedgerEntryAttachmentsApi.md#deleteGeneralLedgerEntryAttachments) | **DELETE** /companies({company_id})/generalLedgerEntryAttachments({generalLedgerEntryAttachments_generalLedgerEntryNumber},{generalLedgerEntryAttachments_id}) | Deletes an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central
[**getGeneralLedgerEntryAttachments()**](GeneralLedgerEntryAttachmentsApi.md#getGeneralLedgerEntryAttachments) | **GET** /companies({company_id})/generalLedgerEntryAttachments({generalLedgerEntryAttachments_generalLedgerEntryNumber},{generalLedgerEntryAttachments_id}) | Retrieve the properties and relationships of an object of type generalLedgerEntryAttachments for Dynamics 365 Business Central.
[**listGeneralLedgerEntryAttachments()**](GeneralLedgerEntryAttachmentsApi.md#listGeneralLedgerEntryAttachments) | **GET** /companies({company_id})/generalLedgerEntryAttachments | Returns a list of generalLedgerEntryAttachments
[**patchGeneralLedgerEntryAttachments()**](GeneralLedgerEntryAttachmentsApi.md#patchGeneralLedgerEntryAttachments) | **PATCH** /companies({company_id})/generalLedgerEntryAttachments({generalLedgerEntryAttachments_generalLedgerEntryNumber},{generalLedgerEntryAttachments_id}) | Updates an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central
[**postGeneralLedgerEntryAttachments()**](GeneralLedgerEntryAttachmentsApi.md#postGeneralLedgerEntryAttachments) | **POST** /companies({company_id})/generalLedgerEntryAttachments | Creates an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central


## `deleteGeneralLedgerEntryAttachments()`

```php
deleteGeneralLedgerEntryAttachments($company_id, $general_ledger_entry_attachments_general_ledger_entry_number, $general_ledger_entry_attachments_id)
```

Deletes an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GeneralLedgerEntryAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$general_ledger_entry_attachments_general_ledger_entry_number = 56; // int | (v1.0) generalLedgerEntryNumber for generalLedgerEntryAttachments
$general_ledger_entry_attachments_id = 'general_ledger_entry_attachments_id_example'; // string | (v1.0) id for generalLedgerEntryAttachments

try {
    $apiInstance->deleteGeneralLedgerEntryAttachments($company_id, $general_ledger_entry_attachments_general_ledger_entry_number, $general_ledger_entry_attachments_id);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerEntryAttachmentsApi->deleteGeneralLedgerEntryAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **general_ledger_entry_attachments_general_ledger_entry_number** | **int**| (v1.0) generalLedgerEntryNumber for generalLedgerEntryAttachments |
 **general_ledger_entry_attachments_id** | **string**| (v1.0) id for generalLedgerEntryAttachments |

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

## `getGeneralLedgerEntryAttachments()`

```php
getGeneralLedgerEntryAttachments($company_id, $general_ledger_entry_attachments_general_ledger_entry_number, $general_ledger_entry_attachments_id, $expand, $select): \OpenAPI\Client\Model\GeneralLedgerEntryAttachments
```

Retrieve the properties and relationships of an object of type generalLedgerEntryAttachments for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GeneralLedgerEntryAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$general_ledger_entry_attachments_general_ledger_entry_number = 56; // int | (v1.0) generalLedgerEntryNumber for generalLedgerEntryAttachments
$general_ledger_entry_attachments_id = 'general_ledger_entry_attachments_id_example'; // string | (v1.0) id for generalLedgerEntryAttachments
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getGeneralLedgerEntryAttachments($company_id, $general_ledger_entry_attachments_general_ledger_entry_number, $general_ledger_entry_attachments_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerEntryAttachmentsApi->getGeneralLedgerEntryAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **general_ledger_entry_attachments_general_ledger_entry_number** | **int**| (v1.0) generalLedgerEntryNumber for generalLedgerEntryAttachments |
 **general_ledger_entry_attachments_id** | **string**| (v1.0) id for generalLedgerEntryAttachments |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\GeneralLedgerEntryAttachments**](../Model/GeneralLedgerEntryAttachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGeneralLedgerEntryAttachments()`

```php
listGeneralLedgerEntryAttachments($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20045
```

Returns a list of generalLedgerEntryAttachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GeneralLedgerEntryAttachmentsApi(
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
    $result = $apiInstance->listGeneralLedgerEntryAttachments($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerEntryAttachmentsApi->listGeneralLedgerEntryAttachments: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchGeneralLedgerEntryAttachments()`

```php
patchGeneralLedgerEntryAttachments($company_id, $general_ledger_entry_attachments_general_ledger_entry_number, $general_ledger_entry_attachments_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\GeneralLedgerEntryAttachments
```

Updates an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GeneralLedgerEntryAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$general_ledger_entry_attachments_general_ledger_entry_number = 56; // int | (v1.0) generalLedgerEntryNumber for generalLedgerEntryAttachments
$general_ledger_entry_attachments_id = 'general_ledger_entry_attachments_id_example'; // string | (v1.0) id for generalLedgerEntryAttachments
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchGeneralLedgerEntryAttachments($company_id, $general_ledger_entry_attachments_general_ledger_entry_number, $general_ledger_entry_attachments_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerEntryAttachmentsApi->patchGeneralLedgerEntryAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **general_ledger_entry_attachments_general_ledger_entry_number** | **int**| (v1.0) generalLedgerEntryNumber for generalLedgerEntryAttachments |
 **general_ledger_entry_attachments_id** | **string**| (v1.0) id for generalLedgerEntryAttachments |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\GeneralLedgerEntryAttachments**](../Model/GeneralLedgerEntryAttachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGeneralLedgerEntryAttachments()`

```php
postGeneralLedgerEntryAttachments($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\GeneralLedgerEntryAttachments
```

Creates an object of type generalLedgerEntryAttachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GeneralLedgerEntryAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postGeneralLedgerEntryAttachments($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerEntryAttachmentsApi->postGeneralLedgerEntryAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\GeneralLedgerEntryAttachments**](../Model/GeneralLedgerEntryAttachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
