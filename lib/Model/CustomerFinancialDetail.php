<?php
/**
 * CustomerFinancialDetail
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
 * CustomerFinancialDetail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomerFinancialDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerFinancialDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'number' => 'string',
        'balance' => 'float',
        'total_sales_excluding_tax' => 'float',
        'overdue_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'number' => null,
        'balance' => 'decimal',
        'total_sales_excluding_tax' => 'decimal',
        'overdue_amount' => 'decimal'
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
        'number' => 'number',
        'balance' => 'balance',
        'total_sales_excluding_tax' => 'totalSalesExcludingTax',
        'overdue_amount' => 'overdueAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'balance' => 'setBalance',
        'total_sales_excluding_tax' => 'setTotalSalesExcludingTax',
        'overdue_amount' => 'setOverdueAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'balance' => 'getBalance',
        'total_sales_excluding_tax' => 'getTotalSalesExcludingTax',
        'overdue_amount' => 'getOverdueAmount'
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['total_sales_excluding_tax'] = $data['total_sales_excluding_tax'] ?? null;
        $this->container['overdue_amount'] = $data['overdue_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 20)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 20.";
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
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central customerFinancialDetail entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number (v1.0) The number property for the Dynamics 365 Business Central customerFinancialDetail entity
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $number when calling CustomerFinancialDetail., must be smaller than or equal to 20.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance (v1.0) The balance property for the Dynamics 365 Business Central customerFinancialDetail entity
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets total_sales_excluding_tax
     *
     * @return float|null
     */
    public function getTotalSalesExcludingTax()
    {
        return $this->container['total_sales_excluding_tax'];
    }

    /**
     * Sets total_sales_excluding_tax
     *
     * @param float|null $total_sales_excluding_tax (v1.0) The totalSalesExcludingTax property for the Dynamics 365 Business Central customerFinancialDetail entity
     *
     * @return self
     */
    public function setTotalSalesExcludingTax($total_sales_excluding_tax)
    {
        $this->container['total_sales_excluding_tax'] = $total_sales_excluding_tax;

        return $this;
    }

    /**
     * Gets overdue_amount
     *
     * @return float|null
     */
    public function getOverdueAmount()
    {
        return $this->container['overdue_amount'];
    }

    /**
     * Sets overdue_amount
     *
     * @param float|null $overdue_amount (v1.0) The overdueAmount property for the Dynamics 365 Business Central customerFinancialDetail entity
     *
     * @return self
     */
    public function setOverdueAmount($overdue_amount)
    {
        $this->container['overdue_amount'] = $overdue_amount;

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


