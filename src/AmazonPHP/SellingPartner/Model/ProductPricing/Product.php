<?php declare(strict_types=1);
/**
 * Product.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\ProductPricing;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Product implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Product';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'identifiers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\IdentifierType',
        'attribute_sets' => 'object[]',
        'relationships' => 'object[]',
        'competitive_pricing' => '\AmazonPHP\SellingPartner\Model\ProductPricing\CompetitivePricingType',
        'sales_rankings' => '\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]',
        'offers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferType[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'identifiers' => null,
        'attribute_sets' => null,
        'relationships' => null,
        'competitive_pricing' => null,
        'sales_rankings' => null,
        'offers' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'identifiers' => 'Identifiers',
        'attribute_sets' => 'AttributeSets',
        'relationships' => 'Relationships',
        'competitive_pricing' => 'CompetitivePricing',
        'sales_rankings' => 'SalesRankings',
        'offers' => 'Offers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'identifiers' => 'setIdentifiers',
        'attribute_sets' => 'setAttributeSets',
        'relationships' => 'setRelationships',
        'competitive_pricing' => 'setCompetitivePricing',
        'sales_rankings' => 'setSalesRankings',
        'offers' => 'setOffers',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'identifiers' => 'getIdentifiers',
        'attribute_sets' => 'getAttributeSets',
        'relationships' => 'getRelationships',
        'competitive_pricing' => 'getCompetitivePricing',
        'sales_rankings' => 'getSalesRankings',
        'offers' => 'getOffers',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['attribute_sets'] = $data['attribute_sets'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['competitive_pricing'] = $data['competitive_pricing'] ?? null;
        $this->container['sales_rankings'] = $data['sales_rankings'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets identifiers.
     */
    public function getIdentifiers() : IdentifierType
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\IdentifierType $identifiers identifiers
     */
    public function setIdentifiers(IdentifierType $identifiers) : self
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets attribute_sets.
     *
     * @return null|object[]
     */
    public function getAttributeSets() : ?array
    {
        return $this->container['attribute_sets'];
    }

    /**
     * Sets attribute_sets.
     *
     * @param null|object[] $attribute_sets a list of product attributes if they are applicable to the product that is returned
     */
    public function setAttributeSets(?array $attribute_sets) : self
    {
        $this->container['attribute_sets'] = $attribute_sets;

        return $this;
    }

    /**
     * Gets relationships.
     *
     * @return null|object[]
     */
    public function getRelationships() : ?array
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships.
     *
     * @param null|object[] $relationships a list that contains product variation information, if applicable
     */
    public function setRelationships(?array $relationships) : self
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets competitive_pricing.
     */
    public function getCompetitivePricing() : ?CompetitivePricingType
    {
        return $this->container['competitive_pricing'];
    }

    /**
     * Sets competitive_pricing.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\CompetitivePricingType $competitive_pricing competitive_pricing
     */
    public function setCompetitivePricing(?CompetitivePricingType $competitive_pricing) : self
    {
        $this->container['competitive_pricing'] = $competitive_pricing;

        return $this;
    }

    /**
     * Gets sales_rankings.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]
     */
    public function getSalesRankings() : ?array
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[] $sales_rankings a list of sales rank information for the item, by category
     */
    public function setSalesRankings(?array $sales_rankings) : self
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets offers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferType[]
     */
    public function getOffers() : ?array
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferType[] $offers a list of offers
     */
    public function setOffers(?array $offers) : self
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
