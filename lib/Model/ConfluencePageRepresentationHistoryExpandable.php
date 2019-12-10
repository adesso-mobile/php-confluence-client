<?php
/**
 * ConfluencePageRepresentationHistoryExpandable
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
 * ConfluencePageRepresentationHistoryExpandable Class Doc Comment
 *
 * @category Class
 * @package  ConfluenceClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConfluencePageRepresentationHistoryExpandable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'confluencePageRepresentation_history__expandable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'last_updated' => 'string',
        'previous_version' => 'string',
        'contributors' => 'string',
        'next_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'last_updated' => null,
        'previous_version' => null,
        'contributors' => null,
        'next_version' => null
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
        'last_updated' => 'lastUpdated',
        'previous_version' => 'previousVersion',
        'contributors' => 'contributors',
        'next_version' => 'nextVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_updated' => 'setLastUpdated',
        'previous_version' => 'setPreviousVersion',
        'contributors' => 'setContributors',
        'next_version' => 'setNextVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_updated' => 'getLastUpdated',
        'previous_version' => 'getPreviousVersion',
        'contributors' => 'getContributors',
        'next_version' => 'getNextVersion'
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
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['previous_version'] = isset($data['previous_version']) ? $data['previous_version'] : null;
        $this->container['contributors'] = isset($data['contributors']) ? $data['contributors'] : null;
        $this->container['next_version'] = isset($data['next_version']) ? $data['next_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['previous_version'] === null) {
            $invalidProperties[] = "'previous_version' can't be null";
        }
        if ($this->container['contributors'] === null) {
            $invalidProperties[] = "'contributors' can't be null";
        }
        if ($this->container['next_version'] === null) {
            $invalidProperties[] = "'next_version' can't be null";
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
     * Gets last_updated
     *
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param string $last_updated last_updated
     *
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets previous_version
     *
     * @return string
     */
    public function getPreviousVersion()
    {
        return $this->container['previous_version'];
    }

    /**
     * Sets previous_version
     *
     * @param string $previous_version previous_version
     *
     * @return $this
     */
    public function setPreviousVersion($previous_version)
    {
        $this->container['previous_version'] = $previous_version;

        return $this;
    }

    /**
     * Gets contributors
     *
     * @return string
     */
    public function getContributors()
    {
        return $this->container['contributors'];
    }

    /**
     * Sets contributors
     *
     * @param string $contributors contributors
     *
     * @return $this
     */
    public function setContributors($contributors)
    {
        $this->container['contributors'] = $contributors;

        return $this;
    }

    /**
     * Gets next_version
     *
     * @return string
     */
    public function getNextVersion()
    {
        return $this->container['next_version'];
    }

    /**
     * Sets next_version
     *
     * @param string $next_version next_version
     *
     * @return $this
     */
    public function setNextVersion($next_version)
    {
        $this->container['next_version'] = $next_version;

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

