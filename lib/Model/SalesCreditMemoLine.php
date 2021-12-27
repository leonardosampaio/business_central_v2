<?php
/**
 * SalesCreditMemoLine
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * (v1.0) Dynamics 365 Business Central
 *
 * (v1.0) Business Central Standard APIs
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SalesCreditMemoLine Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SalesCreditMemoLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'salesCreditMemoLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'document_id' => 'string',
        'sequence' => 'int',
        'item_id' => 'string',
        'account_id' => 'string',
        'line_type' => 'string',
        'line_details' => '\OpenAPI\Client\Model\Documentlineobjectdetailstype',
        'description' => 'string',
        'unit_of_measure_id' => 'string',
        'unit_of_measure' => '\OpenAPI\Client\Model\Unitofmeasuretype',
        'unit_price' => 'float',
        'quantity' => 'float',
        'discount_amount' => 'float',
        'discount_percent' => 'float',
        'discount_applied_before_tax' => 'bool',
        'amount_excluding_tax' => 'float',
        'tax_code' => 'string',
        'tax_percent' => 'float',
        'total_tax_amount' => 'float',
        'amount_including_tax' => 'float',
        'invoice_discount_allocation' => 'float',
        'net_amount' => 'float',
        'net_tax_amount' => 'float',
        'net_amount_including_tax' => 'float',
        'shipment_date' => '\DateTime',
        'item' => '\OpenAPI\Client\Model\Item',
        'account' => '\OpenAPI\Client\Model\Account'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'document_id' => 'uuid',
        'sequence' => 'int32',
        'item_id' => 'uuid',
        'account_id' => 'uuid',
        'line_type' => null,
        'line_details' => null,
        'description' => null,
        'unit_of_measure_id' => 'uuid',
        'unit_of_measure' => null,
        'unit_price' => 'decimal',
        'quantity' => 'decimal',
        'discount_amount' => 'decimal',
        'discount_percent' => 'decimal',
        'discount_applied_before_tax' => null,
        'amount_excluding_tax' => 'decimal',
        'tax_code' => null,
        'tax_percent' => 'decimal',
        'total_tax_amount' => 'decimal',
        'amount_including_tax' => 'decimal',
        'invoice_discount_allocation' => 'decimal',
        'net_amount' => 'decimal',
        'net_tax_amount' => 'decimal',
        'net_amount_including_tax' => 'decimal',
        'shipment_date' => 'date-time',
        'item' => null,
        'account' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'document_id' => 'documentId',
        'sequence' => 'sequence',
        'item_id' => 'itemId',
        'account_id' => 'accountId',
        'line_type' => 'lineType',
        'line_details' => 'lineDetails',
        'description' => 'description',
        'unit_of_measure_id' => 'unitOfMeasureId',
        'unit_of_measure' => 'unitOfMeasure',
        'unit_price' => 'unitPrice',
        'quantity' => 'quantity',
        'discount_amount' => 'discountAmount',
        'discount_percent' => 'discountPercent',
        'discount_applied_before_tax' => 'discountAppliedBeforeTax',
        'amount_excluding_tax' => 'amountExcludingTax',
        'tax_code' => 'taxCode',
        'tax_percent' => 'taxPercent',
        'total_tax_amount' => 'totalTaxAmount',
        'amount_including_tax' => 'amountIncludingTax',
        'invoice_discount_allocation' => 'invoiceDiscountAllocation',
        'net_amount' => 'netAmount',
        'net_tax_amount' => 'netTaxAmount',
        'net_amount_including_tax' => 'netAmountIncludingTax',
        'shipment_date' => 'shipmentDate',
        'item' => 'item',
        'account' => 'account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_id' => 'setDocumentId',
        'sequence' => 'setSequence',
        'item_id' => 'setItemId',
        'account_id' => 'setAccountId',
        'line_type' => 'setLineType',
        'line_details' => 'setLineDetails',
        'description' => 'setDescription',
        'unit_of_measure_id' => 'setUnitOfMeasureId',
        'unit_of_measure' => 'setUnitOfMeasure',
        'unit_price' => 'setUnitPrice',
        'quantity' => 'setQuantity',
        'discount_amount' => 'setDiscountAmount',
        'discount_percent' => 'setDiscountPercent',
        'discount_applied_before_tax' => 'setDiscountAppliedBeforeTax',
        'amount_excluding_tax' => 'setAmountExcludingTax',
        'tax_code' => 'setTaxCode',
        'tax_percent' => 'setTaxPercent',
        'total_tax_amount' => 'setTotalTaxAmount',
        'amount_including_tax' => 'setAmountIncludingTax',
        'invoice_discount_allocation' => 'setInvoiceDiscountAllocation',
        'net_amount' => 'setNetAmount',
        'net_tax_amount' => 'setNetTaxAmount',
        'net_amount_including_tax' => 'setNetAmountIncludingTax',
        'shipment_date' => 'setShipmentDate',
        'item' => 'setItem',
        'account' => 'setAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_id' => 'getDocumentId',
        'sequence' => 'getSequence',
        'item_id' => 'getItemId',
        'account_id' => 'getAccountId',
        'line_type' => 'getLineType',
        'line_details' => 'getLineDetails',
        'description' => 'getDescription',
        'unit_of_measure_id' => 'getUnitOfMeasureId',
        'unit_of_measure' => 'getUnitOfMeasure',
        'unit_price' => 'getUnitPrice',
        'quantity' => 'getQuantity',
        'discount_amount' => 'getDiscountAmount',
        'discount_percent' => 'getDiscountPercent',
        'discount_applied_before_tax' => 'getDiscountAppliedBeforeTax',
        'amount_excluding_tax' => 'getAmountExcludingTax',
        'tax_code' => 'getTaxCode',
        'tax_percent' => 'getTaxPercent',
        'total_tax_amount' => 'getTotalTaxAmount',
        'amount_including_tax' => 'getAmountIncludingTax',
        'invoice_discount_allocation' => 'getInvoiceDiscountAllocation',
        'net_amount' => 'getNetAmount',
        'net_tax_amount' => 'getNetTaxAmount',
        'net_amount_including_tax' => 'getNetAmountIncludingTax',
        'shipment_date' => 'getShipmentDate',
        'item' => 'getItem',
        'account' => 'getAccount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['document_id'] = $data['document_id'] ?? null;
        $this->container['sequence'] = $data['sequence'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['line_type'] = $data['line_type'] ?? null;
        $this->container['line_details'] = $data['line_details'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['unit_of_measure_id'] = $data['unit_of_measure_id'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['discount_amount'] = $data['discount_amount'] ?? null;
        $this->container['discount_percent'] = $data['discount_percent'] ?? null;
        $this->container['discount_applied_before_tax'] = $data['discount_applied_before_tax'] ?? null;
        $this->container['amount_excluding_tax'] = $data['amount_excluding_tax'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['tax_percent'] = $data['tax_percent'] ?? null;
        $this->container['total_tax_amount'] = $data['total_tax_amount'] ?? null;
        $this->container['amount_including_tax'] = $data['amount_including_tax'] ?? null;
        $this->container['invoice_discount_allocation'] = $data['invoice_discount_allocation'] ?? null;
        $this->container['net_amount'] = $data['net_amount'] ?? null;
        $this->container['net_tax_amount'] = $data['net_tax_amount'] ?? null;
        $this->container['net_amount_including_tax'] = $data['net_amount_including_tax'] ?? null;
        $this->container['shipment_date'] = $data['shipment_date'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 50)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['tax_code']) && (mb_strlen($this->container['tax_code']) > 50)) {
            $invalidProperties[] = "invalid value for 'tax_code', the character length must be smaller than or equal to 50.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setId($id)
    {
        if (!is_null($id) && (mb_strlen($id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $id when calling SalesCreditMemoLine., must be smaller than or equal to 50.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string|null $document_id (v1.0) The documentId property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int|null $sequence (v1.0) The sequence property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id (v1.0) The itemId property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id (v1.0) The accountId property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets line_type
     *
     * @return string|null
     */
    public function getLineType()
    {
        return $this->container['line_type'];
    }

    /**
     * Sets line_type
     *
     * @param string|null $line_type (v1.0) The lineType property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setLineType($line_type)
    {
        $this->container['line_type'] = $line_type;

        return $this;
    }

    /**
     * Gets line_details
     *
     * @return \OpenAPI\Client\Model\Documentlineobjectdetailstype|null
     */
    public function getLineDetails()
    {
        return $this->container['line_details'];
    }

    /**
     * Sets line_details
     *
     * @param \OpenAPI\Client\Model\Documentlineobjectdetailstype|null $line_details line_details
     *
     * @return self
     */
    public function setLineDetails($line_details)
    {
        $this->container['line_details'] = $line_details;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description (v1.0) The description property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $description when calling SalesCreditMemoLine., must be smaller than or equal to 100.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets unit_of_measure_id
     *
     * @return string|null
     */
    public function getUnitOfMeasureId()
    {
        return $this->container['unit_of_measure_id'];
    }

    /**
     * Sets unit_of_measure_id
     *
     * @param string|null $unit_of_measure_id (v1.0) The unitOfMeasureId property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setUnitOfMeasureId($unit_of_measure_id)
    {
        $this->container['unit_of_measure_id'] = $unit_of_measure_id;

        return $this;
    }

    /**
     * Gets unit_of_measure
     *
     * @return \OpenAPI\Client\Model\Unitofmeasuretype|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param \OpenAPI\Client\Model\Unitofmeasuretype|null $unit_of_measure unit_of_measure
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price (v1.0) The unitPrice property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity (v1.0) The quantity property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param float|null $discount_amount (v1.0) The discountAmount property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return float|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float|null $discount_percent (v1.0) The discountPercent property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_applied_before_tax
     *
     * @return bool|null
     */
    public function getDiscountAppliedBeforeTax()
    {
        return $this->container['discount_applied_before_tax'];
    }

    /**
     * Sets discount_applied_before_tax
     *
     * @param bool|null $discount_applied_before_tax (v1.0) The discountAppliedBeforeTax property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setDiscountAppliedBeforeTax($discount_applied_before_tax)
    {
        $this->container['discount_applied_before_tax'] = $discount_applied_before_tax;

        return $this;
    }

    /**
     * Gets amount_excluding_tax
     *
     * @return float|null
     */
    public function getAmountExcludingTax()
    {
        return $this->container['amount_excluding_tax'];
    }

    /**
     * Sets amount_excluding_tax
     *
     * @param float|null $amount_excluding_tax (v1.0) The amountExcludingTax property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setAmountExcludingTax($amount_excluding_tax)
    {
        $this->container['amount_excluding_tax'] = $amount_excluding_tax;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code (v1.0) The taxCode property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        if (!is_null($tax_code) && (mb_strlen($tax_code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $tax_code when calling SalesCreditMemoLine., must be smaller than or equal to 50.');
        }

        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets tax_percent
     *
     * @return float|null
     */
    public function getTaxPercent()
    {
        return $this->container['tax_percent'];
    }

    /**
     * Sets tax_percent
     *
     * @param float|null $tax_percent (v1.0) The taxPercent property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setTaxPercent($tax_percent)
    {
        $this->container['tax_percent'] = $tax_percent;

        return $this;
    }

    /**
     * Gets total_tax_amount
     *
     * @return float|null
     */
    public function getTotalTaxAmount()
    {
        return $this->container['total_tax_amount'];
    }

    /**
     * Sets total_tax_amount
     *
     * @param float|null $total_tax_amount (v1.0) The totalTaxAmount property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        $this->container['total_tax_amount'] = $total_tax_amount;

        return $this;
    }

    /**
     * Gets amount_including_tax
     *
     * @return float|null
     */
    public function getAmountIncludingTax()
    {
        return $this->container['amount_including_tax'];
    }

    /**
     * Sets amount_including_tax
     *
     * @param float|null $amount_including_tax (v1.0) The amountIncludingTax property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setAmountIncludingTax($amount_including_tax)
    {
        $this->container['amount_including_tax'] = $amount_including_tax;

        return $this;
    }

    /**
     * Gets invoice_discount_allocation
     *
     * @return float|null
     */
    public function getInvoiceDiscountAllocation()
    {
        return $this->container['invoice_discount_allocation'];
    }

    /**
     * Sets invoice_discount_allocation
     *
     * @param float|null $invoice_discount_allocation (v1.0) The invoiceDiscountAllocation property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setInvoiceDiscountAllocation($invoice_discount_allocation)
    {
        $this->container['invoice_discount_allocation'] = $invoice_discount_allocation;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return float|null
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param float|null $net_amount (v1.0) The netAmount property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets net_tax_amount
     *
     * @return float|null
     */
    public function getNetTaxAmount()
    {
        return $this->container['net_tax_amount'];
    }

    /**
     * Sets net_tax_amount
     *
     * @param float|null $net_tax_amount (v1.0) The netTaxAmount property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setNetTaxAmount($net_tax_amount)
    {
        $this->container['net_tax_amount'] = $net_tax_amount;

        return $this;
    }

    /**
     * Gets net_amount_including_tax
     *
     * @return float|null
     */
    public function getNetAmountIncludingTax()
    {
        return $this->container['net_amount_including_tax'];
    }

    /**
     * Sets net_amount_including_tax
     *
     * @param float|null $net_amount_including_tax (v1.0) The netAmountIncludingTax property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setNetAmountIncludingTax($net_amount_including_tax)
    {
        $this->container['net_amount_including_tax'] = $net_amount_including_tax;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return \DateTime|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param \DateTime|null $shipment_date (v1.0) The shipmentDate property for the Dynamics 365 Business Central salesCreditMemoLine entity
     *
     * @return self
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \OpenAPI\Client\Model\Item|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \OpenAPI\Client\Model\Item|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \OpenAPI\Client\Model\Account|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \OpenAPI\Client\Model\Account|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


