<?php
/**
 * Picture
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
 * Picture Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Picture implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'picture';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'width' => 'int',
        'height' => 'int',
        'content_type' => 'string',
        'contentodata_media_edit_link' => 'string',
        'contentodata_media_read_link' => 'string'
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
        'width' => 'int32',
        'height' => 'int32',
        'content_type' => null,
        'contentodata_media_edit_link' => 'uri',
        'contentodata_media_read_link' => 'uri'
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
        'width' => 'width',
        'height' => 'height',
        'content_type' => 'contentType',
        'contentodata_media_edit_link' => 'content@odata.mediaEditLink',
        'contentodata_media_read_link' => 'content@odata.mediaReadLink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'content_type' => 'setContentType',
        'contentodata_media_edit_link' => 'setContentodataMediaEditLink',
        'contentodata_media_read_link' => 'setContentodataMediaReadLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'content_type' => 'getContentType',
        'contentodata_media_edit_link' => 'getContentodataMediaEditLink',
        'contentodata_media_read_link' => 'getContentodataMediaReadLink'
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
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['contentodata_media_edit_link'] = $data['contentodata_media_edit_link'] ?? null;
        $this->container['contentodata_media_read_link'] = $data['contentodata_media_read_link'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['content_type']) && (mb_strlen($this->container['content_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be smaller than or equal to 100.";
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
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central picture entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width (v1.0) The width property for the Dynamics 365 Business Central picture entity
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height (v1.0) The height property for the Dynamics 365 Business Central picture entity
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type (v1.0) The contentType property for the Dynamics 365 Business Central picture entity
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (!is_null($content_type) && (mb_strlen($content_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling Picture., must be smaller than or equal to 100.');
        }

        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets contentodata_media_edit_link
     *
     * @return string|null
     */
    public function getContentodataMediaEditLink()
    {
        return $this->container['contentodata_media_edit_link'];
    }

    /**
     * Sets contentodata_media_edit_link
     *
     * @param string|null $contentodata_media_edit_link (v1.0) The content@odata.mediaEditLink property for the Dynamics 365 Business Central picture entity
     *
     * @return self
     */
    public function setContentodataMediaEditLink($contentodata_media_edit_link)
    {
        $this->container['contentodata_media_edit_link'] = $contentodata_media_edit_link;

        return $this;
    }

    /**
     * Gets contentodata_media_read_link
     *
     * @return string|null
     */
    public function getContentodataMediaReadLink()
    {
        return $this->container['contentodata_media_read_link'];
    }

    /**
     * Sets contentodata_media_read_link
     *
     * @param string|null $contentodata_media_read_link (v1.0) The content@odata.mediaReadLink property for the Dynamics 365 Business Central picture entity
     *
     * @return self
     */
    public function setContentodataMediaReadLink($contentodata_media_read_link)
    {
        $this->container['contentodata_media_read_link'] = $contentodata_media_read_link;

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


