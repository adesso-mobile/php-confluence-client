<?php
/**
 * ConfluencePageExistsHistory
 *
 * PHP version 5
 *
 * @category Class
 * @package  ConfluenceClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Confluence Rest Resources
 *
 * This is the confluence rest resources endpoint documentation
 *
 * The version of the OpenAPI document: 6.15.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ConfluenceClient\Model;

use \ArrayAccess;
use \ConfluenceClient\ObjectSerializer;

/**
 * ConfluencePageExistsHistory Class Doc Comment
 *
 * @category Class
 * @package  ConfluenceClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConfluencePageExistsHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'confluencePageExists_history';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'latest' => 'bool',
        'created_by' => '\ConfluenceClient\Model\ConfluencePageExistsHistoryCreatedBy',
        'created_date' => 'string',
        '_links' => '\ConfluenceClient\Model\ConfluencePageExistsHistoryCreatedByLinks',
        '_expandable' => '\ConfluenceClient\Model\ConfluencePageExistsHistoryExpandable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'latest' => null,
        'created_by' => null,
        'created_date' => null,
        '_links' => null,
        '_expandable' => null
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
        'latest' => 'latest',
        'created_by' => 'createdBy',
        'created_date' => 'createdDate',
        '_links' => '_links',
        '_expandable' => '_expandable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'latest' => 'setLatest',
        'created_by' => 'setCreatedBy',
        'created_date' => 'setCreatedDate',
        '_links' => 'setLinks',
        '_expandable' => 'setExpandable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'latest' => 'getLatest',
        'created_by' => 'getCreatedBy',
        'created_date' => 'getCreatedDate',
        '_links' => 'getLinks',
        '_expandable' => 'getExpandable'
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
        $this->container['latest'] = isset($data['latest']) ? $data['latest'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['_expandable'] = isset($data['_expandable']) ? $data['_expandable'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['latest'] === null) {
            $invalidProperties[] = "'latest' can't be null";
        }
        if ($this->container['created_by'] === null) {
            $invalidProperties[] = "'created_by' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['_links'] === null) {
            $invalidProperties[] = "'_links' can't be null";
        }
        if ($this->container['_expandable'] === null) {
            $invalidProperties[] = "'_expandable' can't be null";
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
     * Gets latest
     *
     * @return bool
     */
    public function getLatest()
    {
        return $this->container['latest'];
    }

    /**
     * Sets latest
     *
     * @param bool $latest latest
     *
     * @return $this
     */
    public function setLatest($latest)
    {
        $this->container['latest'] = $latest;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \ConfluenceClient\Model\ConfluencePageExistsHistoryCreatedBy
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \ConfluenceClient\Model\ConfluencePageExistsHistoryCreatedBy $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \ConfluenceClient\Model\ConfluencePageExistsHistoryCreatedByLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \ConfluenceClient\Model\ConfluencePageExistsHistoryCreatedByLinks $_links _links
     *
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets _expandable
     *
     * @return \ConfluenceClient\Model\ConfluencePageExistsHistoryExpandable
     */
    public function getExpandable()
    {
        return $this->container['_expandable'];
    }

    /**
     * Sets _expandable
     *
     * @param \ConfluenceClient\Model\ConfluencePageExistsHistoryExpandable $_expandable _expandable
     *
     * @return $this
     */
    public function setExpandable($_expandable)
    {
        $this->container['_expandable'] = $_expandable;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


