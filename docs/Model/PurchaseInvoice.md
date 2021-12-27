# # PurchaseInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | (v1.0) The id property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**number** | **string** | (v1.0) The number property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**invoice_date** | **\DateTime** | (v1.0) The invoiceDate property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**due_date** | **\DateTime** | (v1.0) The dueDate property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**vendor_invoice_number** | **string** | (v1.0) The vendorInvoiceNumber property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**vendor_id** | **string** | (v1.0) The vendorId property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**vendor_number** | **string** | (v1.0) The vendorNumber property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**vendor_name** | **string** | (v1.0) The vendorName property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**pay_to_name** | **string** | (v1.0) The payToName property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**pay_to_contact** | **string** | (v1.0) The payToContact property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**pay_to_vendor_id** | **string** | (v1.0) The payToVendorId property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**pay_to_vendor_number** | **string** | (v1.0) The payToVendorNumber property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**ship_to_name** | **string** | (v1.0) The shipToName property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**ship_to_contact** | **string** | (v1.0) The shipToContact property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**buy_from_address** | [**\OpenAPI\Client\Model\Postaladdresstype**](Postaladdresstype.md) |  | [optional]
**pay_to_address** | [**\OpenAPI\Client\Model\Postaladdresstype**](Postaladdresstype.md) |  | [optional]
**ship_to_address** | [**\OpenAPI\Client\Model\Postaladdresstype**](Postaladdresstype.md) |  | [optional]
**currency_id** | **string** | (v1.0) The currencyId property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**currency_code** | **string** | (v1.0) The currencyCode property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**prices_include_tax** | **bool** | (v1.0) The pricesIncludeTax property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**discount_amount** | **float** | (v1.0) The discountAmount property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**discount_applied_before_tax** | **bool** | (v1.0) The discountAppliedBeforeTax property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**total_amount_excluding_tax** | **float** | (v1.0) The totalAmountExcludingTax property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**total_tax_amount** | **float** | (v1.0) The totalTaxAmount property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**total_amount_including_tax** | **float** | (v1.0) The totalAmountIncludingTax property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**status** | **string** | (v1.0) The status property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**last_modified_date_time** | **\DateTime** | (v1.0) The lastModifiedDateTime property for the Dynamics 365 Business Central purchaseInvoice entity | [optional]
**purchase_invoice_lines** | [**\OpenAPI\Client\Model\PurchaseInvoiceLine[]**](PurchaseInvoiceLine.md) |  | [optional]
**pdf_document** | [**\OpenAPI\Client\Model\PdfDocument[]**](PdfDocument.md) |  | [optional]
**vendor** | [**\OpenAPI\Client\Model\Vendor**](Vendor.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
