<?php declare(strict_types=1);
/**
 * UpdateFulfillmentOrderRequest.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class UpdateFulfillmentOrderRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'UpdateFulfillmentOrderRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'displayable_order_id' => 'string',
        'displayable_order_date' => '\DateTime',
        'displayable_order_comment' => 'string',
        'shipping_speed_category' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory',
        'destination_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address',
        'fulfillment_action' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentAction',
        'fulfillment_policy' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPolicy',
        'ship_from_country_code' => 'string',
        'notification_emails' => 'string[]',
        'feature_constraints' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]',
        'items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'displayable_order_id' => null,
        'displayable_order_date' => 'date-time',
        'displayable_order_comment' => null,
        'shipping_speed_category' => null,
        'destination_address' => null,
        'fulfillment_action' => null,
        'fulfillment_policy' => null,
        'ship_from_country_code' => null,
        'notification_emails' => null,
        'feature_constraints' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'displayable_order_id' => 'displayableOrderId',
        'displayable_order_date' => 'displayableOrderDate',
        'displayable_order_comment' => 'displayableOrderComment',
        'shipping_speed_category' => 'shippingSpeedCategory',
        'destination_address' => 'destinationAddress',
        'fulfillment_action' => 'fulfillmentAction',
        'fulfillment_policy' => 'fulfillmentPolicy',
        'ship_from_country_code' => 'shipFromCountryCode',
        'notification_emails' => 'notificationEmails',
        'feature_constraints' => 'featureConstraints',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'displayable_order_id' => 'setDisplayableOrderId',
        'displayable_order_date' => 'setDisplayableOrderDate',
        'displayable_order_comment' => 'setDisplayableOrderComment',
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'destination_address' => 'setDestinationAddress',
        'fulfillment_action' => 'setFulfillmentAction',
        'fulfillment_policy' => 'setFulfillmentPolicy',
        'ship_from_country_code' => 'setShipFromCountryCode',
        'notification_emails' => 'setNotificationEmails',
        'feature_constraints' => 'setFeatureConstraints',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'displayable_order_id' => 'getDisplayableOrderId',
        'displayable_order_date' => 'getDisplayableOrderDate',
        'displayable_order_comment' => 'getDisplayableOrderComment',
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'destination_address' => 'getDestinationAddress',
        'fulfillment_action' => 'getFulfillmentAction',
        'fulfillment_policy' => 'getFulfillmentPolicy',
        'ship_from_country_code' => 'getShipFromCountryCode',
        'notification_emails' => 'getNotificationEmails',
        'feature_constraints' => 'getFeatureConstraints',
        'items' => 'getItems',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['displayable_order_id'] = $data['displayable_order_id'] ?? null;
        $this->container['displayable_order_date'] = $data['displayable_order_date'] ?? null;
        $this->container['displayable_order_comment'] = $data['displayable_order_comment'] ?? null;
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['destination_address'] = $data['destination_address'] ?? null;
        $this->container['fulfillment_action'] = $data['fulfillment_action'] ?? null;
        $this->container['fulfillment_policy'] = $data['fulfillment_policy'] ?? null;
        $this->container['ship_from_country_code'] = $data['ship_from_country_code'] ?? null;
        $this->container['notification_emails'] = $data['notification_emails'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
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

        if (null !== $this->container['displayable_order_id'] && (\mb_strlen($this->container['displayable_order_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'displayable_order_id', the character length must be smaller than or equal to 40.";
        }

        if (null !== $this->container['displayable_order_comment'] && (\mb_strlen($this->container['displayable_order_comment']) > 1000)) {
            $invalidProperties[] = "invalid value for 'displayable_order_comment', the character length must be smaller than or equal to 1000.";
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
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id the marketplace the fulfillment order is placed against
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets displayable_order_id.
     */
    public function getDisplayableOrderId() : ?string
    {
        return $this->container['displayable_order_id'];
    }

    /**
     * Sets displayable_order_id.
     *
     * @param null|string $displayable_order_id A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier.
     */
    public function setDisplayableOrderId(?string $displayable_order_id) : self
    {
        if (null !== $displayable_order_id && (\mb_strlen($displayable_order_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $displayable_order_id when calling UpdateFulfillmentOrderRequest., must be smaller than or equal to 40.');
        }

        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_date.
     */
    public function getDisplayableOrderDate() : ?\DateTime
    {
        return $this->container['displayable_order_date'];
    }

    /**
     * Sets displayable_order_date.
     *
     * @param null|\DateTime $displayable_order_date displayable_order_date
     */
    public function setDisplayableOrderDate(?\DateTime $displayable_order_date) : self
    {
        $this->container['displayable_order_date'] = $displayable_order_date;

        return $this;
    }

    /**
     * Gets displayable_order_comment.
     */
    public function getDisplayableOrderComment() : ?string
    {
        return $this->container['displayable_order_comment'];
    }

    /**
     * Sets displayable_order_comment.
     *
     * @param null|string $displayable_order_comment order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip
     */
    public function setDisplayableOrderComment(?string $displayable_order_comment) : self
    {
        if (null !== $displayable_order_comment && (\mb_strlen($displayable_order_comment) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $displayable_order_comment when calling UpdateFulfillmentOrderRequest., must be smaller than or equal to 1000.');
        }

        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
    }

    /**
     * Gets shipping_speed_category.
     */
    public function getShippingSpeedCategory() : ?ShippingSpeedCategory
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     */
    public function setShippingSpeedCategory(?ShippingSpeedCategory $shipping_speed_category) : self
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets destination_address.
     */
    public function getDestinationAddress() : ?Address
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address $destination_address destination_address
     */
    public function setDestinationAddress(?Address $destination_address) : self
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_action.
     */
    public function getFulfillmentAction() : ?FulfillmentAction
    {
        return $this->container['fulfillment_action'];
    }

    /**
     * Sets fulfillment_action.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentAction $fulfillment_action fulfillment_action
     */
    public function setFulfillmentAction(?FulfillmentAction $fulfillment_action) : self
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    /**
     * Gets fulfillment_policy.
     */
    public function getFulfillmentPolicy() : ?FulfillmentPolicy
    {
        return $this->container['fulfillment_policy'];
    }

    /**
     * Sets fulfillment_policy.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPolicy $fulfillment_policy fulfillment_policy
     */
    public function setFulfillmentPolicy(?FulfillmentPolicy $fulfillment_policy) : self
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    /**
     * Gets ship_from_country_code.
     */
    public function getShipFromCountryCode() : ?string
    {
        return $this->container['ship_from_country_code'];
    }

    /**
     * Sets ship_from_country_code.
     *
     * @param null|string $ship_from_country_code The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format.
     */
    public function setShipFromCountryCode(?string $ship_from_country_code) : self
    {
        $this->container['ship_from_country_code'] = $ship_from_country_code;

        return $this;
    }

    /**
     * Gets notification_emails.
     *
     * @return null|string[]
     */
    public function getNotificationEmails() : ?array
    {
        return $this->container['notification_emails'];
    }

    /**
     * Sets notification_emails.
     *
     * @param null|string[] $notification_emails a list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller
     */
    public function setNotificationEmails(?array $notification_emails) : self
    {
        $this->container['notification_emails'] = $notification_emails;

        return $this;
    }

    /**
     * Gets feature_constraints.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]
     */
    public function getFeatureConstraints() : ?array
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[] $feature_constraints a list of features and their fulfillment policies to apply to the order
     */
    public function setFeatureConstraints(?array $feature_constraints) : self
    {
        $this->container['feature_constraints'] = $feature_constraints;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderItem[]
     */
    public function getItems() : ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderItem[] $items an array of fulfillment order item information for updating a fulfillment order
     */
    public function setItems(?array $items) : self
    {
        $this->container['items'] = $items;

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
