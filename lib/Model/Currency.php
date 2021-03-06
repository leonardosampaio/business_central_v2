<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Currency implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'display_name' => 'string',
        'symbol' => 'string',
        'amount_decimal_places' => 'string',
        'amount_rounding_precision' => 'float',
        'last_modified_date_time' => '\DateTime'
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
        'code' => null,
        'display_name' => null,
        'symbol' => null,
        'amount_decimal_places' => null,
        'amount_rounding_precision' => 'decimal',
        'last_modified_date_time' => 'date-time'
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
        'code' => 'code',
        'display_name' => 'displayName',
        'symbol' => 'symbol',
        'amount_decimal_places' => 'amountDecimalPlaces',
        'amount_rounding_precision' => 'amountRoundingPrecision',
        'last_modified_date_time' => 'lastModifiedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'display_name' => 'setDisplayName',
        'symbol' => 'setSymbol',
        'amount_decimal_places' => 'setAmountDecimalPlaces',
        'amount_rounding_precision' => 'setAmountRoundingPrecision',
        'last_modified_date_time' => 'setLastModifiedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'display_name' => 'getDisplayName',
        'symbol' => 'getSymbol',
        'amount_decimal_places' => 'getAmountDecimalPlaces',
        'amount_rounding_precision' => 'getAmountRoundingPrecision',
        'last_modified_date_time' => 'getLastModifiedDateTime'
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['amount_decimal_places'] = $data['amount_decimal_places'] ?? null;
        $this->container['amount_rounding_precision'] = $data['amount_rounding_precision'] ?? null;
        $this->container['last_modified_date_time'] = $data['last_modified_date_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 10)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['symbol']) && (mb_strlen($this->container['symbol']) > 10)) {
            $invalidProperties[] = "invalid value for 'symbol', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['amount_decimal_places']) && (mb_strlen($this->container['amount_decimal_places']) > 5)) {
            $invalidProperties[] = "invalid value for 'amount_decimal_places', the character length must be smaller than or equal to 5.";
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
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code (v1.0) The code property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $code when calling Currency., must be smaller than or equal to 10.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name (v1.0) The displayName property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling Currency., must be smaller than or equal to 30.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol (v1.0) The symbol property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (!is_null($symbol) && (mb_strlen($symbol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $symbol when calling Currency., must be smaller than or equal to 10.');
        }

        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets amount_decimal_places
     *
     * @return string|null
     */
    public function getAmountDecimalPlaces()
    {
        return $this->container['amount_decimal_places'];
    }

    /**
     * Sets amount_decimal_places
     *
     * @param string|null $amount_decimal_places (v1.0) The amountDecimalPlaces property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setAmountDecimalPlaces($amount_decimal_places)
    {
        if (!is_null($amount_decimal_places) && (mb_strlen($amount_decimal_places) > 5)) {
            throw new \InvalidArgumentException('invalid length for $amount_decimal_places when calling Currency., must be smaller than or equal to 5.');
        }

        $this->container['amount_decimal_places'] = $amount_decimal_places;

        return $this;
    }

    /**
     * Gets amount_rounding_precision
     *
     * @return float|null
     */
    public function getAmountRoundingPrecision()
    {
        return $this->container['amount_rounding_precision'];
    }

    /**
     * Sets amount_rounding_precision
     *
     * @param float|null $amount_rounding_precision (v1.0) The amountRoundingPrecision property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setAmountRoundingPrecision($amount_rounding_precision)
    {
        $this->container['amount_rounding_precision'] = $amount_rounding_precision;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param \DateTime|null $last_modified_date_time (v1.0) The lastModifiedDateTime property for the Dynamics 365 Business Central currency entity
     *
     * @return self
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

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


