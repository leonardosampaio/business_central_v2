# # SalesQuote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | (v1.0) The id property for the Dynamics 365 Business Central salesQuote entity | [optional]
**number** | **string** | (v1.0) The number property for the Dynamics 365 Business Central salesQuote entity | [optional]
**external_document_number** | **string** | (v1.0) The externalDocumentNumber property for the Dynamics 365 Business Central salesQuote entity | [optional]
**document_date** | **\DateTime** | (v1.0) The documentDate property for the Dynamics 365 Business Central salesQuote entity | [optional]
**due_date** | **\DateTime** | (v1.0) The dueDate property for the Dynamics 365 Business Central salesQuote entity | [optional]
**customer_id** | **string** | (v1.0) The customerId property for the Dynamics 365 Business Central salesQuote entity | [optional]
**contact_id** | **string** | (v1.0) The contactId property for the Dynamics 365 Business Central salesQuote entity | [optional]
**customer_number** | **string** | (v1.0) The customerNumber property for the Dynamics 365 Business Central salesQuote entity | [optional]
**customer_name** | **string** | (v1.0) The customerName property for the Dynamics 365 Business Central salesQuote entity | [optional]
**bill_to_name** | **string** | (v1.0) The billToName property for the Dynamics 365 Business Central salesQuote entity | [optional]
**bill_to_customer_id** | **string** | (v1.0) The billToCustomerId property for the Dynamics 365 Business Central salesQuote entity | [optional]
**bill_to_customer_number** | **string** | (v1.0) The billToCustomerNumber property for the Dynamics 365 Business Central salesQuote entity | [optional]
**ship_to_name** | **string** | (v1.0) The shipToName property for the Dynamics 365 Business Central salesQuote entity | [optional]
**ship_to_contact** | **string** | (v1.0) The shipToContact property for the Dynamics 365 Business Central salesQuote entity | [optional]
**selling_postal_address** | [**\OpenAPI\Client\Model\Postaladdresstype**](Postaladdresstype.md) |  | [optional]
**billing_postal_address** | [**\OpenAPI\Client\Model\Postaladdresstype**](Postaladdresstype.md) |  | [optional]
**shipping_postal_address** | [**\OpenAPI\Client\Model\Postaladdresstype**](Postaladdresstype.md) |  | [optional]
**currency_id** | **string** | (v1.0) The currencyId property for the Dynamics 365 Business Central salesQuote entity | [optional]
**currency_code** | **string** | (v1.0) The currencyCode property for the Dynamics 365 Business Central salesQuote entity | [optional]
**payment_terms_id** | **string** | (v1.0) The paymentTermsId property for the Dynamics 365 Business Central salesQuote entity | [optional]
**shipment_method_id** | **string** | (v1.0) The shipmentMethodId property for the Dynamics 365 Business Central salesQuote entity | [optional]
**salesperson** | **string** | (v1.0) The salesperson property for the Dynamics 365 Business Central salesQuote entity | [optional]
**discount_amount** | **float** | (v1.0) The discountAmount property for the Dynamics 365 Business Central salesQuote entity | [optional]
**total_amount_excluding_tax** | **float** | (v1.0) The totalAmountExcludingTax property for the Dynamics 365 Business Central salesQuote entity | [optional]
**total_tax_amount** | **float** | (v1.0) The totalTaxAmount property for the Dynamics 365 Business Central salesQuote entity | [optional]
**total_amount_including_tax** | **float** | (v1.0) The totalAmountIncludingTax property for the Dynamics 365 Business Central salesQuote entity | [optional]
**status** | **string** | (v1.0) The status property for the Dynamics 365 Business Central salesQuote entity | [optional]
**sent_date** | **\DateTime** | (v1.0) The sentDate property for the Dynamics 365 Business Central salesQuote entity | [optional]
**valid_until_date** | **\DateTime** | (v1.0) The validUntilDate property for the Dynamics 365 Business Central salesQuote entity | [optional]
**accepted_date** | **\DateTime** | (v1.0) The acceptedDate property for the Dynamics 365 Business Central salesQuote entity | [optional]
**last_modified_date_time** | **\DateTime** | (v1.0) The lastModifiedDateTime property for the Dynamics 365 Business Central salesQuote entity | [optional]
**phone_number** | **string** | (v1.0) The phoneNumber property for the Dynamics 365 Business Central salesQuote entity | [optional]
**email** | **string** | (v1.0) The email property for the Dynamics 365 Business Central salesQuote entity | [optional]
**sales_quote_lines** | [**\OpenAPI\Client\Model\SalesQuoteLine[]**](SalesQuoteLine.md) |  | [optional]
**pdf_document** | [**\OpenAPI\Client\Model\PdfDocument[]**](PdfDocument.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**payment_term** | [**\OpenAPI\Client\Model\PaymentTerm**](PaymentTerm.md) |  | [optional]
**shipment_method** | [**\OpenAPI\Client\Model\ShipmentMethod**](ShipmentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)