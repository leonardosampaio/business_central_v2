<?php
/**
 * CompanyInformation
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
 * CompanyInformation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompanyInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'companyInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'display_name' => 'string',
        'address' => '\OpenAPI\Client\Model\Postaladdresstype',
        'phone_number' => 'string',
        'fax_number' => 'string',
        'email' => 'string',
        'website' => 'string',
        'tax_registration_number' => 'string',
        'currency_code' => 'string',
        'current_fiscal_year_start_date' => '\DateTime',
        'industry' => 'string',
        'picture' => '\SplFileObject',
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
        'display_name' => null,
        'address' => null,
        'phone_number' => null,
        'fax_number' => null,
        'email' => null,
        'website' => null,
        'tax_registration_number' => null,
        'currency_code' => null,
        'current_fiscal_year_start_date' => 'date-time',
        'industry' => null,
        'picture' => 'binary',
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
        'display_name' => 'displayName',
        'address' => 'address',
        'phone_number' => 'phoneNumber',
        'fax_number' => 'faxNumber',
        'email' => 'email',
        'website' => 'website',
        'tax_registration_number' => 'taxRegistrationNumber',
        'currency_code' => 'currencyCode',
        'current_fiscal_year_start_date' => 'currentFiscalYearStartDate',
        'industry' => 'industry',
        'picture' => 'picture',
        'last_modified_date_time' => 'lastModifiedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'display_name' => 'setDisplayName',
        'address' => 'setAddress',
        'phone_number' => 'setPhoneNumber',
        'fax_number' => 'setFaxNumber',
        'email' => 'setEmail',
        'website' => 'setWebsite',
        'tax_registration_number' => 'setTaxRegistrationNumber',
        'currency_code' => 'setCurrencyCode',
        'current_fiscal_year_start_date' => 'setCurrentFiscalYearStartDate',
        'industry' => 'setIndustry',
        'picture' => 'setPicture',
        'last_modified_date_time' => 'setLastModifiedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'display_name' => 'getDisplayName',
        'address' => 'getAddress',
        'phone_number' => 'getPhoneNumber',
        'fax_number' => 'getFaxNumber',
        'email' => 'getEmail',
        'website' => 'getWebsite',
        'tax_registration_number' => 'getTaxRegistrationNumber',
        'currency_code' => 'getCurrencyCode',
        'current_fiscal_year_start_date' => 'getCurrentFiscalYearStartDate',
        'industry' => 'getIndustry',
        'picture' => 'getPicture',
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['fax_number'] = $data['fax_number'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['tax_registration_number'] = $data['tax_registration_number'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['current_fiscal_year_start_date'] = $data['current_fiscal_year_start_date'] ?? null;
        $this->container['industry'] = $data['industry'] ?? null;
        $this->container['picture'] = $data['picture'] ?? null;
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

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['fax_number']) && (mb_strlen($this->container['fax_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'fax_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 80)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 80)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['tax_registration_number']) && (mb_strlen($this->container['tax_registration_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'tax_registration_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['industry']) && (mb_strlen($this->container['industry']) > 30)) {
            $invalidProperties[] = "invalid value for 'industry', the character length must be smaller than or equal to 30.";
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
     * @param string|null $id (v1.0) The id property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $display_name (v1.0) The displayName property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling CompanyInformation., must be smaller than or equal to 100.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\Postaladdresstype|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\Postaladdresstype|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number (v1.0) The phoneNumber property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling CompanyInformation., must be smaller than or equal to 30.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string|null $fax_number (v1.0) The faxNumber property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setFaxNumber($fax_number)
    {
        if (!is_null($fax_number) && (mb_strlen($fax_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $fax_number when calling CompanyInformation., must be smaller than or equal to 30.');
        }

        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email (v1.0) The email property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CompanyInformation., must be smaller than or equal to 80.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website (v1.0) The website property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (!is_null($website) && (mb_strlen($website) > 80)) {
            throw new \InvalidArgumentException('invalid length for $website when calling CompanyInformation., must be smaller than or equal to 80.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets tax_registration_number
     *
     * @return string|null
     */
    public function getTaxRegistrationNumber()
    {
        return $this->container['tax_registration_number'];
    }

    /**
     * Sets tax_registration_number
     *
     * @param string|null $tax_registration_number (v1.0) The taxRegistrationNumber property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setTaxRegistrationNumber($tax_registration_number)
    {
        if (!is_null($tax_registration_number) && (mb_strlen($tax_registration_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $tax_registration_number when calling CompanyInformation., must be smaller than or equal to 20.');
        }

        $this->container['tax_registration_number'] = $tax_registration_number;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code (v1.0) The currencyCode property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets current_fiscal_year_start_date
     *
     * @return \DateTime|null
     */
    public function getCurrentFiscalYearStartDate()
    {
        return $this->container['current_fiscal_year_start_date'];
    }

    /**
     * Sets current_fiscal_year_start_date
     *
     * @param \DateTime|null $current_fiscal_year_start_date (v1.0) The currentFiscalYearStartDate property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setCurrentFiscalYearStartDate($current_fiscal_year_start_date)
    {
        $this->container['current_fiscal_year_start_date'] = $current_fiscal_year_start_date;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry (v1.0) The industry property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        if (!is_null($industry) && (mb_strlen($industry) > 30)) {
            throw new \InvalidArgumentException('invalid length for $industry when calling CompanyInformation., must be smaller than or equal to 30.');
        }

        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return \SplFileObject|null
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param \SplFileObject|null $picture (v1.0) The picture property for the Dynamics 365 Business Central companyInformation entity
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

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
     * @param \DateTime|null $last_modified_date_time (v1.0) The lastModifiedDateTime property for the Dynamics 365 Business Central companyInformation entity
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


