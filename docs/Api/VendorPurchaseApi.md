# OpenAPI\Client\VendorPurchaseApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVendorPurchase()**](VendorPurchaseApi.md#getVendorPurchase) | **GET** /companies({company_id})/vendorPurchases({vendorPurchase_vendorId},&#39;{vendorPurchase_vendorNumber}&#39;,&#39;{vendorPurchase_name}&#39;) | Retrieve the properties and relationships of an object of type vendorPurchase for Dynamics 365 Business Central.
[**listVendorPurchases()**](VendorPurchaseApi.md#listVendorPurchases) | **GET** /companies({company_id})/vendorPurchases | Returns a list of vendorPurchases


## `getVendorPurchase()`

```php
getVendorPurchase($company_id, $vendor_purchase_vendor_id, $vendor_purchase_vendor_number, $vendor_purchase_name, $select): \OpenAPI\Client\Model\VendorPurchase
```

Retrieve the properties and relationships of an object of type vendorPurchase for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VendorPurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$vendor_purchase_vendor_id = 'vendor_purchase_vendor_id_example'; // string | (v1.0) vendorId for vendorPurchase
$vendor_purchase_vendor_number = 'vendor_purchase_vendor_number_example'; // string | (v1.0) vendorNumber for vendorPurchase
$vendor_purchase_name = 'vendor_purchase_name_example'; // string | (v1.0) name for vendorPurchase
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getVendorPurchase($company_id, $vendor_purchase_vendor_id, $vendor_purchase_vendor_number, $vendor_purchase_name, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorPurchaseApi->getVendorPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **vendor_purchase_vendor_id** | **string**| (v1.0) vendorId for vendorPurchase |
 **vendor_purchase_vendor_number** | **string**| (v1.0) vendorNumber for vendorPurchase |
 **vendor_purchase_name** | **string**| (v1.0) name for vendorPurchase |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\VendorPurchase**](../Model/VendorPurchase.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVendorPurchases()`

```php
listVendorPurchases($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20051
```

Returns a list of vendorPurchases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VendorPurchaseApi(
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
    $result = $apiInstance->listVendorPurchases($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorPurchaseApi->listVendorPurchases: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
