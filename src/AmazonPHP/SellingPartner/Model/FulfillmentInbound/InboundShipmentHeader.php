<?php declare(strict_types=1);
/**
 * InboundShipmentHeader.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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
namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class InboundShipmentHeader implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InboundShipmentHeader';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_name' => 'string',
        'ship_from_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'destination_fulfillment_center_id' => 'string',
        'are_cases_required' => 'bool',
        'shipment_status' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentStatus',
        'label_prep_preference' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference',
        'intended_box_contents_source' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\IntendedBoxContentsSource',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_name' => null,
        'ship_from_address' => null,
        'destination_fulfillment_center_id' => null,
        'are_cases_required' => null,
        'shipment_status' => null,
        'label_prep_preference' => null,
        'intended_box_contents_source' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_name' => 'ShipmentName',
        'ship_from_address' => 'ShipFromAddress',
        'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
        'are_cases_required' => 'AreCasesRequired',
        'shipment_status' => 'ShipmentStatus',
        'label_prep_preference' => 'LabelPrepPreference',
        'intended_box_contents_source' => 'IntendedBoxContentsSource',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_name' => 'setShipmentName',
        'ship_from_address' => 'setShipFromAddress',
        'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
        'are_cases_required' => 'setAreCasesRequired',
        'shipment_status' => 'setShipmentStatus',
        'label_prep_preference' => 'setLabelPrepPreference',
        'intended_box_contents_source' => 'setIntendedBoxContentsSource',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_name' => 'getShipmentName',
        'ship_from_address' => 'getShipFromAddress',
        'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
        'are_cases_required' => 'getAreCasesRequired',
        'shipment_status' => 'getShipmentStatus',
        'label_prep_preference' => 'getLabelPrepPreference',
        'intended_box_contents_source' => 'getIntendedBoxContentsSource',
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
        $this->container['shipment_name'] = $data['shipment_name'] ?? null;
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['destination_fulfillment_center_id'] = $data['destination_fulfillment_center_id'] ?? null;
        $this->container['are_cases_required'] = $data['are_cases_required'] ?? null;
        $this->container['shipment_status'] = $data['shipment_status'] ?? null;
        $this->container['label_prep_preference'] = $data['label_prep_preference'] ?? null;
        $this->container['intended_box_contents_source'] = $data['intended_box_contents_source'] ?? null;
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

        if ($this->container['shipment_name'] === null) {
            $invalidProperties[] = "'shipment_name' can't be null";
        }

        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }

        if ($this->container['destination_fulfillment_center_id'] === null) {
            $invalidProperties[] = "'destination_fulfillment_center_id' can't be null";
        }

        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }

        if ($this->container['label_prep_preference'] === null) {
            $invalidProperties[] = "'label_prep_preference' can't be null";
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
     * Gets shipment_name.
     */
    public function getShipmentName() : string
    {
        return $this->container['shipment_name'];
    }

    /**
     * Sets shipment_name.
     *
     * @param string $shipment_name The name for the shipment. Use a naming convention that helps distinguish between shipments over time, such as the date the shipment was created.
     */
    public function setShipmentName(string $shipment_name) : self
    {
        $this->container['shipment_name'] = $shipment_name;

        return $this;
    }

    /**
     * Gets ship_from_address.
     */
    public function getShipFromAddress() : Address
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $ship_from_address ship_from_address
     */
    public function setShipFromAddress(Address $ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets destination_fulfillment_center_id.
     */
    public function getDestinationFulfillmentCenterId() : string
    {
        return $this->container['destination_fulfillment_center_id'];
    }

    /**
     * Sets destination_fulfillment_center_id.
     *
     * @param string $destination_fulfillment_center_id The identifier for the fulfillment center to which the shipment will be shipped. Get this value from the InboundShipmentPlan object in the response returned by the createInboundShipmentPlan operation.
     */
    public function setDestinationFulfillmentCenterId(string $destination_fulfillment_center_id) : self
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

        return $this;
    }

    /**
     * Gets are_cases_required.
     */
    public function getAreCasesRequired() : ?bool
    {
        return $this->container['are_cases_required'];
    }

    /**
     * Sets are_cases_required.
     *
     * @param null|bool $are_cases_required Indicates whether or not an inbound shipment contains case-packed boxes. Note: A shipment must contain either all case-packed boxes or all individually packed boxes.  Possible values:  true - All boxes in the shipment must be case packed.  false - All boxes in the shipment must be individually packed.  Note: If AreCasesRequired = true for an inbound shipment, then the value of QuantityInCase must be greater than zero for every item in the shipment. Otherwise the service returns an error.
     */
    public function setAreCasesRequired(?bool $are_cases_required) : self
    {
        $this->container['are_cases_required'] = $are_cases_required;

        return $this;
    }

    /**
     * Gets shipment_status.
     */
    public function getShipmentStatus() : ShipmentStatus
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentStatus $shipment_status shipment_status
     */
    public function setShipmentStatus(ShipmentStatus $shipment_status) : self
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets label_prep_preference.
     */
    public function getLabelPrepPreference() : LabelPrepPreference
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference $label_prep_preference label_prep_preference
     */
    public function setLabelPrepPreference(LabelPrepPreference $label_prep_preference) : self
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }

    /**
     * Gets intended_box_contents_source.
     */
    public function getIntendedBoxContentsSource() : ?IntendedBoxContentsSource
    {
        return $this->container['intended_box_contents_source'];
    }

    /**
     * Sets intended_box_contents_source.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\IntendedBoxContentsSource $intended_box_contents_source intended_box_contents_source
     */
    public function setIntendedBoxContentsSource(?IntendedBoxContentsSource $intended_box_contents_source) : self
    {
        $this->container['intended_box_contents_source'] = $intended_box_contents_source;

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
