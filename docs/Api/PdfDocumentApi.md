# OpenAPI\Client\PdfDocumentApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/sandbox/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPdfDocument()**](PdfDocumentApi.md#getPdfDocument) | **GET** /companies({company_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
[**getPdfDocumentForPurchaseInvoice()**](PdfDocumentApi.md#getPdfDocumentForPurchaseInvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
[**getPdfDocumentForSalesCreditMemo()**](PdfDocumentApi.md#getPdfDocumentForSalesCreditMemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
[**getPdfDocumentForSalesInvoice()**](PdfDocumentApi.md#getPdfDocumentForSalesInvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
[**getPdfDocumentForSalesQuote()**](PdfDocumentApi.md#getPdfDocumentForSalesQuote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/pdfDocument({pdfDocument_id}) | Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.
[**listPdfDocument()**](PdfDocumentApi.md#listPdfDocument) | **GET** /companies({company_id})/pdfDocument | Returns a list of pdfDocument
[**listPdfDocumentForPurchaseInvoice()**](PdfDocumentApi.md#listPdfDocumentForPurchaseInvoice) | **GET** /companies({company_id})/purchaseInvoices({purchaseInvoice_id})/pdfDocument | Returns a list of pdfDocument
[**listPdfDocumentForSalesCreditMemo()**](PdfDocumentApi.md#listPdfDocumentForSalesCreditMemo) | **GET** /companies({company_id})/salesCreditMemos({salesCreditMemo_id})/pdfDocument | Returns a list of pdfDocument
[**listPdfDocumentForSalesInvoice()**](PdfDocumentApi.md#listPdfDocumentForSalesInvoice) | **GET** /companies({company_id})/salesInvoices({salesInvoice_id})/pdfDocument | Returns a list of pdfDocument
[**listPdfDocumentForSalesQuote()**](PdfDocumentApi.md#listPdfDocumentForSalesQuote) | **GET** /companies({company_id})/salesQuotes({salesQuote_id})/pdfDocument | Returns a list of pdfDocument


## `getPdfDocument()`

```php
getPdfDocument($company_id, $pdf_document_id, $select): \OpenAPI\Client\Model\PdfDocument
```

Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$pdf_document_id = 'pdf_document_id_example'; // string | (v1.0) id for pdfDocument
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPdfDocument($company_id, $pdf_document_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->getPdfDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **pdf_document_id** | **string**| (v1.0) id for pdfDocument |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PdfDocument**](../Model/PdfDocument.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdfDocumentForPurchaseInvoice()`

```php
getPdfDocumentForPurchaseInvoice($company_id, $purchase_invoice_id, $pdf_document_id, $select): \OpenAPI\Client\Model\PdfDocument
```

Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$pdf_document_id = 'pdf_document_id_example'; // string | (v1.0) id for pdfDocument
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPdfDocumentForPurchaseInvoice($company_id, $purchase_invoice_id, $pdf_document_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->getPdfDocumentForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **pdf_document_id** | **string**| (v1.0) id for pdfDocument |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PdfDocument**](../Model/PdfDocument.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdfDocumentForSalesCreditMemo()`

```php
getPdfDocumentForSalesCreditMemo($company_id, $sales_credit_memo_id, $pdf_document_id, $select): \OpenAPI\Client\Model\PdfDocument
```

Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_credit_memo_id = 'sales_credit_memo_id_example'; // string | (v1.0) id for salesCreditMemo
$pdf_document_id = 'pdf_document_id_example'; // string | (v1.0) id for pdfDocument
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPdfDocumentForSalesCreditMemo($company_id, $sales_credit_memo_id, $pdf_document_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->getPdfDocumentForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_credit_memo_id** | **string**| (v1.0) id for salesCreditMemo |
 **pdf_document_id** | **string**| (v1.0) id for pdfDocument |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PdfDocument**](../Model/PdfDocument.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdfDocumentForSalesInvoice()`

```php
getPdfDocumentForSalesInvoice($company_id, $sales_invoice_id, $pdf_document_id, $select): \OpenAPI\Client\Model\PdfDocument
```

Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$pdf_document_id = 'pdf_document_id_example'; // string | (v1.0) id for pdfDocument
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPdfDocumentForSalesInvoice($company_id, $sales_invoice_id, $pdf_document_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->getPdfDocumentForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **pdf_document_id** | **string**| (v1.0) id for pdfDocument |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PdfDocument**](../Model/PdfDocument.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdfDocumentForSalesQuote()`

```php
getPdfDocumentForSalesQuote($company_id, $sales_quote_id, $pdf_document_id, $select): \OpenAPI\Client\Model\PdfDocument
```

Retrieve the properties and relationships of an object of type pdfDocument for Dynamics 365 Business Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_quote_id = 'sales_quote_id_example'; // string | (v1.0) id for salesQuote
$pdf_document_id = 'pdf_document_id_example'; // string | (v1.0) id for pdfDocument
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->getPdfDocumentForSalesQuote($company_id, $sales_quote_id, $pdf_document_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->getPdfDocumentForSalesQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_quote_id** | **string**| (v1.0) id for salesQuote |
 **pdf_document_id** | **string**| (v1.0) id for pdfDocument |
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\PdfDocument**](../Model/PdfDocument.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdfDocument()`

```php
listPdfDocument($company_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20010
```

Returns a list of pdfDocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
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
    $result = $apiInstance->listPdfDocument($company_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->listPdfDocument: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdfDocumentForPurchaseInvoice()`

```php
listPdfDocumentForPurchaseInvoice($company_id, $purchase_invoice_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20010
```

Returns a list of pdfDocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$purchase_invoice_id = 'purchase_invoice_id_example'; // string | (v1.0) id for purchaseInvoice
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listPdfDocumentForPurchaseInvoice($company_id, $purchase_invoice_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->listPdfDocumentForPurchaseInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **purchase_invoice_id** | **string**| (v1.0) id for purchaseInvoice |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdfDocumentForSalesCreditMemo()`

```php
listPdfDocumentForSalesCreditMemo($company_id, $sales_credit_memo_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20010
```

Returns a list of pdfDocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
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
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listPdfDocumentForSalesCreditMemo($company_id, $sales_credit_memo_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->listPdfDocumentForSalesCreditMemo: ', $e->getMessage(), PHP_EOL;
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
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdfDocumentForSalesInvoice()`

```php
listPdfDocumentForSalesInvoice($company_id, $sales_invoice_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20010
```

Returns a list of pdfDocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | (v1.0) id for company
$sales_invoice_id = 'sales_invoice_id_example'; // string | (v1.0) id for salesInvoice
$top = 56; // int | (v1.0) Number of items to return from the top of the list
$skip = 56; // int | (v1.0) Number of items to skip from the list
$limit = 56; // int | (v1.0) Number of items to return from the list
$filter = 'filter_example'; // string | (v1.0) Filtering expression
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listPdfDocumentForSalesInvoice($company_id, $sales_invoice_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->listPdfDocumentForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**| (v1.0) id for company |
 **sales_invoice_id** | **string**| (v1.0) id for salesInvoice |
 **top** | **int**| (v1.0) Number of items to return from the top of the list | [optional]
 **skip** | **int**| (v1.0) Number of items to skip from the list | [optional]
 **limit** | **int**| (v1.0) Number of items to return from the list | [optional]
 **filter** | **string**| (v1.0) Filtering expression | [optional]
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdfDocumentForSalesQuote()`

```php
listPdfDocumentForSalesQuote($company_id, $sales_quote_id, $top, $skip, $limit, $filter, $select): \OpenAPI\Client\Model\InlineResponse20010
```

Returns a list of pdfDocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PdfDocumentApi(
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
$select = array('select_example'); // string[] | (v1.0) Selected properties to be retrieved

try {
    $result = $apiInstance->listPdfDocumentForSalesQuote($company_id, $sales_quote_id, $top, $skip, $limit, $filter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfDocumentApi->listPdfDocumentForSalesQuote: ', $e->getMessage(), PHP_EOL;
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
 **select** | [**string[]**](../Model/string.md)| (v1.0) Selected properties to be retrieved | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
