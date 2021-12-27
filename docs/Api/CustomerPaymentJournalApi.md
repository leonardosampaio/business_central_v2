# OpenAPI\Client\CustomerPaymentJournalApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomerPaymentJournal()**](CustomerPaymentJournalApi.md#deleteCustomerPaymentJournal) | **DELETE** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id}) | Deletes an object of type customerPaymentJournal in Dynamics 365 Business Central
[**getCustomerPaymentJournal()**](CustomerPaymentJournalApi.md#getCustomerPaymentJournal) | **GET** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id}) | Retrieve the properties and relationships of an object of type customerPaymentJournal for Dynamics 365 Business Central.
[**listCustomerPaymentJournals()**](CustomerPaymentJournalApi.md#listCustomerPaymentJournals) | **GET** /companies({company_id})/customerPaymentJournals | Returns a list of customerPaymentJournals
[**patchCustomerPaymentJournal()**](CustomerPaymentJournalApi.md#patchCustomerPaymentJournal) | **PATCH** /companies({company_id})/customerPaymentJournals({customerPaymentJournal_id}) | Updates an object of type customerPaymentJournal in Dynamics 365 Business Central
[**postCustomerPaymentJournal()**](CustomerPaymentJournalApi.md#postCustomerPaymentJournal) | **POST** /companies({company_id})/customerPaymentJournals | Creates an object of type customerPaymentJournal in Dynamics 365 Business Central


## `deleteCustomerPaymentJournal()`

```php
deleteCustomerPaymentJournal($company_id, $customer_payment_journal_id)
```

Deletes an object of type customerPaymentJournal in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerPaymentJournalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_payment_journal_id = 'customer_payment_journal_id_example'; // string | (v1.0) id for customerPaymentJournal

try {
    $apiInstance->deleteCustomerPaymentJournal($company_id, $customer_payment_journal_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentJournalApi->deleteCustomerPaymentJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_payment_journal_id** | **string**| (v1.0) id for customerPaymentJournal |

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

## `getCustomerPaymentJournal()`

```php
getCustomerPaymentJournal($company_id, $customer_payment_journal_id, $expand, $select): \OpenAPI\Client\Model\CustomerPaymentJournal
```

Retrieve the properties and relationships of an object of type customerPaymentJournal for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerPaymentJournalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_payment_journal_id = 'customer_payment_journal_id_example'; // string | (v1.0) id for customerPaymentJournal
$expand = array('expand_example'); // string[] | (v1.0) Entities to expand
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getCustomerPaymentJournal($company_id, $customer_payment_journal_id, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentJournalApi->getCustomerPaymentJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_payment_journal_id** | **string**| (v1.0) id for customerPaymentJournal |
 **expand** | [**string[]**](../Model/string.md)| (v1.0) Entities to expand | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerPaymentJournal**](../Model/CustomerPaymentJournal.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerPaymentJournals()`

```php
listCustomerPaymentJournals($company_id, $top, $skip, $limit, $filter, $expand, $select): \OpenAPI\Client\Model\InlineResponse20011
```

Returns a list of customerPaymentJournals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerPaymentJournalApi(
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
    $result = $apiInstance->listCustomerPaymentJournals($company_id, $top, $skip, $limit, $filter, $expand, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentJournalApi->listCustomerPaymentJournals: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCustomerPaymentJournal()`

```php
patchCustomerPaymentJournal($company_id, $customer_payment_journal_id, $content_type, $if_match, $unknown_base_type): \OpenAPI\Client\Model\CustomerPaymentJournal
```

Updates an object of type customerPaymentJournal in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerPaymentJournalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$customer_payment_journal_id = 'customer_payment_journal_id_example'; // string | (v1.0) id for customerPaymentJournal
$content_type = 'content_type_example'; // string | (v1.0) application/json
$if_match = 'if_match_example'; // string | (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated.
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->patchCustomerPaymentJournal($company_id, $customer_payment_journal_id, $content_type, $if_match, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentJournalApi->patchCustomerPaymentJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **customer_payment_journal_id** | **string**| (v1.0) id for customerPaymentJournal |
 **content_type** | **string**| (v1.0) application/json |
 **if_match** | **string**| (v1.0) Required. When this request header is included and the eTag provided does not match the current tag on the entity, this will not be updated. |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\CustomerPaymentJournal**](../Model/CustomerPaymentJournal.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerPaymentJournal()`

```php
postCustomerPaymentJournal($company_id, $content_type, $unknown_base_type): \OpenAPI\Client\Model\CustomerPaymentJournal
```

Creates an object of type customerPaymentJournal in Dynamics 365 Business Central

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomerPaymentJournalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$content_type = 'content_type_example'; // string | (v1.0) application/json
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->postCustomerPaymentJournal($company_id, $content_type, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentJournalApi->postCustomerPaymentJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **content_type** | **string**| (v1.0) application/json |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\Client\Model\CustomerPaymentJournal**](../Model/CustomerPaymentJournal.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
