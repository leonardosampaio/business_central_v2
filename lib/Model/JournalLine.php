<?php
/**
 * JournalLine
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
 * JournalLine Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JournalLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'journalLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'journal_display_name' => 'string',
        'line_number' => 'int',
        'account_type' => 'string',
        'account_id' => 'string',
        'account_number' => 'string',
        'posting_date' => '\DateTime',
        'document_number' => 'string',
        'external_document_number' => 'string',
        'amount' => 'float',
        'description' => 'string',
        'comment' => 'string',
        'dimensions' => '\OpenAPI\Client\Model\Dimensiontype[]',
        'last_modified_date_time' => '\DateTime',
        'attachments' => '\OpenAPI\Client\Model\Attachments[]',
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
        'id' => 'uuid',
        'journal_display_name' => null,
        'line_number' => 'int32',
        'account_type' => null,
        'account_id' => 'uuid',
        'account_number' => null,
        'posting_date' => 'date-time',
        'document_number' => null,
        'external_document_number' => null,
        'amount' => 'decimal',
        'description' => null,
        'comment' => null,
        'dimensions' => null,
        'last_modified_date_time' => 'date-time',
        'attachments' => null,
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
        'journal_display_name' => 'journalDisplayName',
        'line_number' => 'lineNumber',
        'account_type' => 'accountType',
        'account_id' => 'accountId',
        'account_number' => 'accountNumber',
        'posting_date' => 'postingDate',
        'document_number' => 'documentNumber',
        'external_document_number' => 'externalDocumentNumber',
        'amount' => 'amount',
        'description' => 'description',
        'comment' => 'comment',
        'dimensions' => 'dimensions',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'attachments' => 'attachments',
        'account' => 'account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'journal_display_name' => 'setJournalDisplayName',
        'line_number' => 'setLineNumber',
        'account_type' => 'setAccountType',
        'account_id' => 'setAccountId',
        'account_number' => 'setAccountNumber',
        'posting_date' => 'setPostingDate',
        'document_number' => 'setDocumentNumber',
        'external_document_number' => 'setExternalDocumentNumber',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'comment' => 'setComment',
        'dimensions' => 'setDimensions',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'attachments' => 'setAttachments',
        'account' => 'setAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'journal_display_name' => 'getJournalDisplayName',
        'line_number' => 'getLineNumber',
        'account_type' => 'getAccountType',
        'account_id' => 'getAccountId',
        'account_number' => 'getAccountNumber',
        'posting_date' => 'getPostingDate',
        'document_number' => 'getDocumentNumber',
        'external_document_number' => 'getExternalDocumentNumber',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'comment' => 'getComment',
        'dimensions' => 'getDimensions',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'attachments' => 'getAttachments',
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
        $this->container['journal_display_name'] = $data['journal_display_name'] ?? null;
        $this->container['line_number'] = $data['line_number'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['posting_date'] = $data['posting_date'] ?? null;
        $this->container['document_number'] = $data['document_number'] ?? null;
        $this->container['external_document_number'] = $data['external_document_number'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['last_modified_date_time'] = $data['last_modified_date_time'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
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

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['document_number']) && (mb_strlen($this->container['document_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'document_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['external_document_number']) && (mb_strlen($this->container['external_document_number']) > 35)) {
            $invalidProperties[] = "invalid value for 'external_document_number', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 250)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 250.";
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
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets journal_display_name
     *
     * @return string|null
     */
    public function getJournalDisplayName()
    {
        return $this->container['journal_display_name'];
    }

    /**
     * Sets journal_display_name
     *
     * @param string|null $journal_display_name (v1.0) The journalDisplayName property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setJournalDisplayName($journal_display_name)
    {
        $this->container['journal_display_name'] = $journal_display_name;

        return $this;
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
     * @param int|null $line_number (v1.0) The lineNumber property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type (v1.0) The accountType property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

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
     * @param string|null $account_id (v1.0) The accountId property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number (v1.0) The accountNumber property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (mb_strlen($account_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling JournalLine., must be smaller than or equal to 20.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets posting_date
     *
     * @return \DateTime|null
     */
    public function getPostingDate()
    {
        return $this->container['posting_date'];
    }

    /**
     * Sets posting_date
     *
     * @param \DateTime|null $posting_date (v1.0) The postingDate property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setPostingDate($posting_date)
    {
        $this->container['posting_date'] = $posting_date;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number (v1.0) The documentNumber property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (!is_null($document_number) && (mb_strlen($document_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $document_number when calling JournalLine., must be smaller than or equal to 20.');
        }

        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets external_document_number
     *
     * @return string|null
     */
    public function getExternalDocumentNumber()
    {
        return $this->container['external_document_number'];
    }

    /**
     * Sets external_document_number
     *
     * @param string|null $external_document_number (v1.0) The externalDocumentNumber property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setExternalDocumentNumber($external_document_number)
    {
        if (!is_null($external_document_number) && (mb_strlen($external_document_number) > 35)) {
            throw new \InvalidArgumentException('invalid length for $external_document_number when calling JournalLine., must be smaller than or equal to 35.');
        }

        $this->container['external_document_number'] = $external_document_number;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount (v1.0) The amount property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string|null $description (v1.0) The description property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $description when calling JournalLine., must be smaller than or equal to 100.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment (v1.0) The comment property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling JournalLine., must be smaller than or equal to 250.');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \OpenAPI\Client\Model\Dimensiontype[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \OpenAPI\Client\Model\Dimensiontype[]|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

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
     * @param \DateTime|null $last_modified_date_time (v1.0) The lastModifiedDateTime property for the Dynamics 365 Business Central journalLine entity
     *
     * @return self
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \OpenAPI\Client\Model\Attachments[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\Client\Model\Attachments[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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


