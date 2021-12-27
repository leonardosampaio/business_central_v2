# OpenAPI\Client\AttachmentsApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAttachments()**](AttachmentsApi.md#deleteAttachments) | **DELETE** /companies({company_id})/attachments({attachments_parentId},{attachments_id}) | Deletes an object of type attachments in Dynamics 365 Business Central
[**deleteAttachmentsForJournalLine()**](AttachmentsApi.md#deleteAttachmentsForJournalLine) | **DELETE** /companies({company_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Deletes an object of type attachments in Dynamics 365 Business Central
[**deleteAttachmentsForJournalLineForJournal()**](AttachmentsApi.md#deleteAttachmentsForJournalLineForJournal) | **DELETE** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Deletes an object of type attachments in Dynamics 365 Business Central
[**getAttachments()**](AttachmentsApi.md#getAttachments) | **GET** /companies({company_id})/attachments({attachments_parentId},{attachments_id}) | Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.
[**getAttachmentsForJournalLine()**](AttachmentsApi.md#getAttachmentsForJournalLine) | **GET** /companies({company_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.
[**getAttachmentsForJournalLineForJournal()**](AttachmentsApi.md#getAttachmentsForJournalLineForJournal) | **GET** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.
[**listAttachments()**](AttachmentsApi.md#listAttachments) | **GET** /companies({company_id})/attachments | Returns a list of attachments
[**listAttachmentsForJournalLine()**](AttachmentsApi.md#listAttachmentsForJournalLine) | **GET** /companies({company_id})/journalLines({journalLine_id})/attachments | Returns a list of attachments
[**listAttachmentsForJournalLineForJournal()**](AttachmentsApi.md#listAttachmentsForJournalLineForJournal) | **GET** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments | Returns a list of attachments
[**patchAttachments()**](AttachmentsApi.md#patchAttachments) | **PATCH** /companies({company_id})/attachments({attachments_parentId},{attachments_id}) | Updates an object of type attachments in Dynamics 365 Business Central
[**patchAttachmentsForJournalLine()**](AttachmentsApi.md#patchAttachmentsForJournalLine) | **PATCH** /companies({company_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Updates an object of type attachments in Dynamics 365 Business Central
[**patchAttachmentsForJournalLineForJournal()**](AttachmentsApi.md#patchAttachmentsForJournalLineForJournal) | **PATCH** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments({attachments_parentId},{attachments_id}) | Updates an object of type attachments in Dynamics 365 Business Central
[**postAttachments()**](AttachmentsApi.md#postAttachments) | **POST** /companies({company_id})/attachments | Creates an object of type attachments in Dynamics 365 Business Central
[**postAttachmentsForJournalLine()**](AttachmentsApi.md#postAttachmentsForJournalLine) | **POST** /companies({company_id})/journalLines({journalLine_id})/attachments | Creates an object of type attachments in Dynamics 365 Business Central
[**postAttachmentsForJournalLineForJournal()**](AttachmentsApi.md#postAttachmentsForJournalLineForJournal) | **POST** /companies({company_id})/journals({journal_id})/journalLines({journalLine_id})/attachments | Creates an object of type attachments in Dynamics 365 Business Central


## `deleteAttachments()`

```php
deleteAttachments($company_id, $attachments_parent_id, $attachments_id)
```

Deletes an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments

try {
    $apiInstance->deleteAttachments($company_id, $attachments_parent_id, $attachments_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->deleteAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |

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

## `deleteAttachmentsForJournalLine()`

```php
deleteAttachmentsForJournalLine($company_id, $journal_line_id, $attachments_parent_id, $attachments_id)
```

Deletes an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments

try {
    $apiInstance->deleteAttachmentsForJournalLine($company_id, $journal_line_id, $attachments_parent_id, $attachments_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->deleteAttachmentsForJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |

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

## `deleteAttachmentsForJournalLineForJournal()`

```php
deleteAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $attachments_parent_id, $attachments_id)
```

Deletes an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_id = 'journal_id_example'; // string | (v1.0) id for journal
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments

try {
    $apiInstance->deleteAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $attachments_parent_id, $attachments_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->deleteAttachmentsForJournalLineForJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_id** | **string**| (v1.0) id for journal |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |

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

## `getAttachments()`

```php
getAttachments($company_id, $attachments_parent_id, $attachments_id, $select): \OpenAPI\Client\Model\Attachments
```

Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getAttachments($company_id, $attachments_parent_id, $attachments_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentsForJournalLine()`

```php
getAttachmentsForJournalLine($company_id, $journal_line_id, $attachments_parent_id, $attachments_id, $select): \OpenAPI\Client\Model\Attachments
```

Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getAttachmentsForJournalLine($company_id, $journal_line_id, $attachments_parent_id, $attachments_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachmentsForJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentsForJournalLineForJournal()`

```php
getAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $attachments_parent_id, $attachments_id, $select): \OpenAPI\Client\Model\Attachments
```

Retrieve the properties and relationships of an object of type attachments for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_id = 'journal_id_example'; // string | (v1.0) id for journal
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $attachments_parent_id, $attachments_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachmentsForJournalLineForJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_id** | **string**| (v1.0) id for journal |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttachments()`

```php
listAttachments($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20017
```

Returns a list of attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
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
    $result = $apiInstance->listAttachments($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->listAttachments: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttachmentsForJournalLine()`

```php
listAttachmentsForJournalLine($company_id, $journal_line_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20017
```

Returns a list of attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listAttachmentsForJournalLine($company_id, $journal_line_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->listAttachmentsForJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttachmentsForJournalLineForJournal()`

```php
listAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20017
```

Returns a list of attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_id = 'journal_id_example'; // string | (v1.0) id for journal
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->listAttachmentsForJournalLineForJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_id** | **string**| (v1.0) id for journal |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAttachments()`

```php
patchAttachments($company_id, $attachments_parent_id, $attachments_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\Attachments
```

Updates an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchAttachments($company_id, $attachments_parent_id, $attachments_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->patchAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAttachmentsForJournalLine()`

```php
patchAttachmentsForJournalLine($company_id, $journal_line_id, $attachments_parent_id, $attachments_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\Attachments
```

Updates an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchAttachmentsForJournalLine($company_id, $journal_line_id, $attachments_parent_id, $attachments_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->patchAttachmentsForJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAttachmentsForJournalLineForJournal()`

```php
patchAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $attachments_parent_id, $attachments_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\Attachments
```

Updates an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_id = 'journal_id_example'; // string | (v1.0) id for journal
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$attachments_parent_id = 'attachments_parent_id_example'; // string | (v1.0) parentId for attachments
$attachments_id = 'attachments_id_example'; // string | (v1.0) id for attachments
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $attachments_parent_id, $attachments_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->patchAttachmentsForJournalLineForJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_id** | **string**| (v1.0) id for journal |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **attachments_parent_id** | **string**| (v1.0) parentId for attachments |
 **attachments_id** | **string**| (v1.0) id for attachments |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAttachments()`

```php
postAttachments($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\Attachments
```

Creates an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postAttachments($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->postAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAttachmentsForJournalLine()`

```php
postAttachmentsForJournalLine($company_id, $journal_line_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\Attachments
```

Creates an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postAttachmentsForJournalLine($company_id, $journal_line_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->postAttachmentsForJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAttachmentsForJournalLineForJournal()`

```php
postAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\Attachments
```

Creates an object of type attachments in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$journal_id = 'journal_id_example'; // string | (v1.0) id for journal
$journal_line_id = 'journal_line_id_example'; // string | (v1.0) id for journalLine
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postAttachmentsForJournalLineForJournal($company_id, $journal_id, $journal_line_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->postAttachmentsForJournalLineForJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **journal_id** | **string**| (v1.0) id for journal |
 **journal_line_id** | **string**| (v1.0) id for journalLine |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
