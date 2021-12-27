<?php
/**
 * RetainedEarningsStatement
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
 * RetainedEarningsStatement Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetainedEarningsStatement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'retainedEarningsStatement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_number' => 'int',
        'display' => 'string',
        'net_change' => 'float',
        'line_type' => 'string',
        'indentation' => 'int',
        'date_filter' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'line_number' => 'int32',
        'display' => null,
        'net_change' => 'decimal',
        'line_type' => null,
        'indentation' => 'int32',
        'date_filter' => 'date-time'
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
        'line_number' => 'lineNumber',
        'display' => 'display',
        'net_change' => 'netChange',
        'line_type' => 'lineType',
        'indentation' => 'indentation',
        'date_filter' => 'dateFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_number' => 'setLineNumber',
        'display' => 'setDisplay',
        'net_change' => 'setNetChange',
        'line_type' => 'setLineType',
        'indentation' => 'setIndentation',
        'date_filter' => 'setDateFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_number' => 'getLineNumber',
        'display' => 'getDisplay',
        'net_change' => 'getNetChange',
        'line_type' => 'getLineType',
        'indentation' => 'getIndentation',
        'date_filter' => 'getDateFilter'
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
        $this->container['line_number'] = $data['line_number'] ?? null;
        $this->container['display'] = $data['display'] ?? null;
        $this->container['net_change'] = $data['net_change'] ?? null;
        $this->container['line_type'] = $data['line_type'] ?? null;
        $this->container['indentation'] = $data['indentation'] ?? null;
        $this->container['date_filter'] = $data['date_filter'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['display']) && (mb_strlen($this->container['display']) > 250)) {
            $invalidProperties[] = "invalid value for 'display', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['line_type']) && (mb_strlen($this->container['line_type']) > 30)) {
            $invalidProperties[] = "invalid value for 'line_type', the character length must be smaller than or equal to 30.";
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
     * Gets line_number
     *
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int|null $line_number (v1.0) The lineNumber property for the Dynamics 365 Business Central retainedEarningsStatement entity
     *
     * @return self
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets display
     *
     * @return string|null
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param string|null $display (v1.0) The display property for the Dynamics 365 Business Central retainedEarningsStatement entity
     *
     * @return self
     */
    public function setDisplay($display)
    {
        if (!is_null($display) && (mb_strlen($display) > 250)) {
            throw new \InvalidArgumentException('invalid length for $display when calling RetainedEarningsStatement., must be smaller than or equal to 250.');
        }

        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets net_change
     *
     * @return float|null
     */
    public function getNetChange()
    {
        return $this->container['net_change'];
    }

    /**
     * Sets net_change
     *
     * @param float|null $net_change (v1.0) The netChange property for the Dynamics 365 Business Central retainedEarningsStatement entity
     *
     * @return self
     */
    public function setNetChange($net_change)
    {
        $this->container['net_change'] = $net_change;

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
     * @param string|null $line_type (v1.0) The lineType property for the Dynamics 365 Business Central retainedEarningsStatement entity
     *
     * @return self
     */
    public function setLineType($line_type)
    {
        if (!is_null($line_type) && (mb_strlen($line_type) > 30)) {
            throw new \InvalidArgumentException('invalid length for $line_type when calling RetainedEarningsStatement., must be smaller than or equal to 30.');
        }

        $this->container['line_type'] = $line_type;

        return $this;
    }

    /**
     * Gets indentation
     *
     * @return int|null
     */
    public function getIndentation()
    {
        return $this->container['indentation'];
    }

    /**
     * Sets indentation
     *
     * @param int|null $indentation (v1.0) The indentation property for the Dynamics 365 Business Central retainedEarningsStatement entity
     *
     * @return self
     */
    public function setIndentation($indentation)
    {
        $this->container['indentation'] = $indentation;

        return $this;
    }

    /**
     * Gets date_filter
     *
     * @return \DateTime|null
     */
    public function getDateFilter()
    {
        return $this->container['date_filter'];
    }

    /**
     * Sets date_filter
     *
     * @param \DateTime|null $date_filter (v1.0) The dateFilter property for the Dynamics 365 Business Central retainedEarningsStatement entity
     *
     * @return self
     */
    public function setDateFilter($date_filter)
    {
        $this->container['date_filter'] = $date_filter;

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


