<?php
/**
 * DimensionLine
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
 * DimensionLine Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DimensionLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'dimensionLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parent_id' => 'string',
        'id' => 'string',
        'code' => 'string',
        'display_name' => 'string',
        'value_id' => 'string',
        'value_code' => 'string',
        'value_display_name' => 'string',
        'dimension' => '\OpenAPI\Client\Model\Dimension'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'parent_id' => 'uuid',
        'id' => 'uuid',
        'code' => null,
        'display_name' => null,
        'value_id' => 'uuid',
        'value_code' => null,
        'value_display_name' => null,
        'dimension' => null
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
        'parent_id' => 'parentId',
        'id' => 'id',
        'code' => 'code',
        'display_name' => 'displayName',
        'value_id' => 'valueId',
        'value_code' => 'valueCode',
        'value_display_name' => 'valueDisplayName',
        'dimension' => 'dimension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent_id' => 'setParentId',
        'id' => 'setId',
        'code' => 'setCode',
        'display_name' => 'setDisplayName',
        'value_id' => 'setValueId',
        'value_code' => 'setValueCode',
        'value_display_name' => 'setValueDisplayName',
        'dimension' => 'setDimension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent_id' => 'getParentId',
        'id' => 'getId',
        'code' => 'getCode',
        'display_name' => 'getDisplayName',
        'value_id' => 'getValueId',
        'value_code' => 'getValueCode',
        'value_display_name' => 'getValueDisplayName',
        'dimension' => 'getDimension'
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
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['value_id'] = $data['value_id'] ?? null;
        $this->container['value_code'] = $data['value_code'] ?? null;
        $this->container['value_display_name'] = $data['value_display_name'] ?? null;
        $this->container['dimension'] = $data['dimension'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 20)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['value_display_name']) && (mb_strlen($this->container['value_display_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'value_display_name', the character length must be smaller than or equal to 50.";
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
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id (v1.0) The parentId property for the Dynamics 365 Business Central dimensionLine entity
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
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
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central dimensionLine entity
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
     * @param string|null $code (v1.0) The code property for the Dynamics 365 Business Central dimensionLine entity
     *
     * @return self
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $code when calling DimensionLine., must be smaller than or equal to 20.');
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
     * @param string|null $display_name (v1.0) The displayName property for the Dynamics 365 Business Central dimensionLine entity
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling DimensionLine., must be smaller than or equal to 30.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets value_id
     *
     * @return string|null
     */
    public function getValueId()
    {
        return $this->container['value_id'];
    }

    /**
     * Sets value_id
     *
     * @param string|null $value_id (v1.0) The valueId property for the Dynamics 365 Business Central dimensionLine entity
     *
     * @return self
     */
    public function setValueId($value_id)
    {
        $this->container['value_id'] = $value_id;

        return $this;
    }

    /**
     * Gets value_code
     *
     * @return string|null
     */
    public function getValueCode()
    {
        return $this->container['value_code'];
    }

    /**
     * Sets value_code
     *
     * @param string|null $value_code (v1.0) The valueCode property for the Dynamics 365 Business Central dimensionLine entity
     *
     * @return self
     */
    public function setValueCode($value_code)
    {
        $this->container['value_code'] = $value_code;

        return $this;
    }

    /**
     * Gets value_display_name
     *
     * @return string|null
     */
    public function getValueDisplayName()
    {
        return $this->container['value_display_name'];
    }

    /**
     * Sets value_display_name
     *
     * @param string|null $value_display_name (v1.0) The valueDisplayName property for the Dynamics 365 Business Central dimensionLine entity
     *
     * @return self
     */
    public function setValueDisplayName($value_display_name)
    {
        if (!is_null($value_display_name) && (mb_strlen($value_display_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $value_display_name when calling DimensionLine., must be smaller than or equal to 50.');
        }

        $this->container['value_display_name'] = $value_display_name;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return \OpenAPI\Client\Model\Dimension|null
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param \OpenAPI\Client\Model\Dimension|null $dimension dimension
     *
     * @return self
     */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;

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

