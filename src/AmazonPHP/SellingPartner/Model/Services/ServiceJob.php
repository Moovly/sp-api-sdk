<?php declare(strict_types=1);
/**
 * ServiceJob.
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
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\Services;

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
class ServiceJob implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const SERVICE_JOB_STATUS_NOT_SERVICED = 'NOT_SERVICED';

    public const SERVICE_JOB_STATUS_CANCELLED = 'CANCELLED';

    public const SERVICE_JOB_STATUS_COMPLETED = 'COMPLETED';

    public const SERVICE_JOB_STATUS_PENDING_SCHEDULE = 'PENDING_SCHEDULE';

    public const SERVICE_JOB_STATUS_NOT_FULFILLABLE = 'NOT_FULFILLABLE';

    public const SERVICE_JOB_STATUS_HOLD = 'HOLD';

    public const SERVICE_JOB_STATUS_PAYMENT_DECLINED = 'PAYMENT_DECLINED';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ServiceJob';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'create_time' => '\DateTime',
        'service_job_id' => 'string',
        'service_job_status' => 'string',
        'scope_of_work' => '\AmazonPHP\SellingPartner\Model\Services\ScopeOfWork',
        'seller' => '\AmazonPHP\SellingPartner\Model\Services\Seller',
        'service_job_provider' => '\AmazonPHP\SellingPartner\Model\Services\ServiceJobProvider',
        'preferred_appointment_times' => '\AmazonPHP\SellingPartner\Model\Services\AppointmentTime[]',
        'appointments' => '\AmazonPHP\SellingPartner\Model\Services\Appointment[]',
        'service_order_id' => 'string',
        'marketplace_id' => 'string',
        'buyer' => '\AmazonPHP\SellingPartner\Model\Services\Buyer',
        'associated_items' => '\AmazonPHP\SellingPartner\Model\Services\AssociatedItem[]',
        'service_location' => '\AmazonPHP\SellingPartner\Model\Services\ServiceLocation',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'create_time' => 'date-time',
        'service_job_id' => null,
        'service_job_status' => null,
        'scope_of_work' => null,
        'seller' => null,
        'service_job_provider' => null,
        'preferred_appointment_times' => null,
        'appointments' => null,
        'service_order_id' => null,
        'marketplace_id' => null,
        'buyer' => null,
        'associated_items' => null,
        'service_location' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'create_time' => 'createTime',
        'service_job_id' => 'serviceJobId',
        'service_job_status' => 'serviceJobStatus',
        'scope_of_work' => 'scopeOfWork',
        'seller' => 'seller',
        'service_job_provider' => 'serviceJobProvider',
        'preferred_appointment_times' => 'preferredAppointmentTimes',
        'appointments' => 'appointments',
        'service_order_id' => 'serviceOrderId',
        'marketplace_id' => 'marketplaceId',
        'buyer' => 'buyer',
        'associated_items' => 'associatedItems',
        'service_location' => 'serviceLocation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'create_time' => 'setCreateTime',
        'service_job_id' => 'setServiceJobId',
        'service_job_status' => 'setServiceJobStatus',
        'scope_of_work' => 'setScopeOfWork',
        'seller' => 'setSeller',
        'service_job_provider' => 'setServiceJobProvider',
        'preferred_appointment_times' => 'setPreferredAppointmentTimes',
        'appointments' => 'setAppointments',
        'service_order_id' => 'setServiceOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'buyer' => 'setBuyer',
        'associated_items' => 'setAssociatedItems',
        'service_location' => 'setServiceLocation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'create_time' => 'getCreateTime',
        'service_job_id' => 'getServiceJobId',
        'service_job_status' => 'getServiceJobStatus',
        'scope_of_work' => 'getScopeOfWork',
        'seller' => 'getSeller',
        'service_job_provider' => 'getServiceJobProvider',
        'preferred_appointment_times' => 'getPreferredAppointmentTimes',
        'appointments' => 'getAppointments',
        'service_order_id' => 'getServiceOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'buyer' => 'getBuyer',
        'associated_items' => 'getAssociatedItems',
        'service_location' => 'getServiceLocation',
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
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['service_job_id'] = $data['service_job_id'] ?? null;
        $this->container['service_job_status'] = $data['service_job_status'] ?? null;
        $this->container['scope_of_work'] = $data['scope_of_work'] ?? null;
        $this->container['seller'] = $data['seller'] ?? null;
        $this->container['service_job_provider'] = $data['service_job_provider'] ?? null;
        $this->container['preferred_appointment_times'] = $data['preferred_appointment_times'] ?? null;
        $this->container['appointments'] = $data['appointments'] ?? null;
        $this->container['service_order_id'] = $data['service_order_id'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['associated_items'] = $data['associated_items'] ?? null;
        $this->container['service_location'] = $data['service_location'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getServiceJobStatusAllowableValues() : array
    {
        return [
            self::SERVICE_JOB_STATUS_NOT_SERVICED,
            self::SERVICE_JOB_STATUS_CANCELLED,
            self::SERVICE_JOB_STATUS_COMPLETED,
            self::SERVICE_JOB_STATUS_PENDING_SCHEDULE,
            self::SERVICE_JOB_STATUS_NOT_FULFILLABLE,
            self::SERVICE_JOB_STATUS_HOLD,
            self::SERVICE_JOB_STATUS_PAYMENT_DECLINED,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if (null !== $this->container['service_job_id'] && (\mb_strlen($this->container['service_job_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'service_job_id', the character length must be smaller than or equal to 100.";
        }

        if (null !== $this->container['service_job_id'] && (\mb_strlen($this->container['service_job_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'service_job_id', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getServiceJobStatusAllowableValues();

        if (null !== $this->container['service_job_status'] && !\in_array($this->container['service_job_status'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'service_job_status', must be one of '%s'",
                $this->container['service_job_status'],
                \implode("', '", $allowedValues)
            );
        }

        if (null !== $this->container['service_order_id'] && (\mb_strlen($this->container['service_order_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'service_order_id', the character length must be smaller than or equal to 20.";
        }

        if (null !== $this->container['service_order_id'] && (\mb_strlen($this->container['service_order_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'service_order_id', the character length must be bigger than or equal to 5.";
        }

        if (null !== $this->container['marketplace_id'] && !\preg_match('/^[A-Z0-9]*$/', $this->container['marketplace_id'])) {
            $invalidProperties[] = "invalid value for 'marketplace_id', must be conform to the pattern /^[A-Z0-9]*$/.";
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
     * Gets create_time.
     */
    public function getCreateTime() : ?\DateTime
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time.
     *
     * @param null|\DateTime $create_time the date and time of the creation of the job, in ISO 8601 format
     */
    public function setCreateTime(?\DateTime $create_time) : self
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets service_job_id.
     */
    public function getServiceJobId() : ?string
    {
        return $this->container['service_job_id'];
    }

    /**
     * Sets service_job_id.
     *
     * @param null|string $service_job_id amazon identifier for the service job
     */
    public function setServiceJobId(?string $service_job_id) : self
    {
        if (null !== $service_job_id && (\mb_strlen($service_job_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $service_job_id when calling ServiceJob., must be smaller than or equal to 100.');
        }

        if (null !== $service_job_id && (\mb_strlen($service_job_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $service_job_id when calling ServiceJob., must be bigger than or equal to 1.');
        }

        $this->container['service_job_id'] = $service_job_id;

        return $this;
    }

    /**
     * Gets service_job_status.
     */
    public function getServiceJobStatus() : ?string
    {
        return $this->container['service_job_status'];
    }

    /**
     * Sets service_job_status.
     *
     * @param null|string $service_job_status the status of the service job
     */
    public function setServiceJobStatus(?string $service_job_status) : self
    {
        $allowedValues = $this->getServiceJobStatusAllowableValues();

        if (null !== $service_job_status && !\in_array($service_job_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'service_job_status', must be one of '%s'",
                    $service_job_status,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_job_status'] = $service_job_status;

        return $this;
    }

    /**
     * Gets scope_of_work.
     */
    public function getScopeOfWork() : ?ScopeOfWork
    {
        return $this->container['scope_of_work'];
    }

    /**
     * Sets scope_of_work.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\ScopeOfWork $scope_of_work scope_of_work
     */
    public function setScopeOfWork(?ScopeOfWork $scope_of_work) : self
    {
        $this->container['scope_of_work'] = $scope_of_work;

        return $this;
    }

    /**
     * Gets seller.
     */
    public function getSeller() : ?Seller
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\Seller $seller seller
     */
    public function setSeller(?Seller $seller) : self
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets service_job_provider.
     */
    public function getServiceJobProvider() : ?ServiceJobProvider
    {
        return $this->container['service_job_provider'];
    }

    /**
     * Sets service_job_provider.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\ServiceJobProvider $service_job_provider service_job_provider
     */
    public function setServiceJobProvider(?ServiceJobProvider $service_job_provider) : self
    {
        $this->container['service_job_provider'] = $service_job_provider;

        return $this;
    }

    /**
     * Gets preferred_appointment_times.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\AppointmentTime[]
     */
    public function getPreferredAppointmentTimes() : ?array
    {
        return $this->container['preferred_appointment_times'];
    }

    /**
     * Sets preferred_appointment_times.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\AppointmentTime[] $preferred_appointment_times A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order.
     */
    public function setPreferredAppointmentTimes(?array $preferred_appointment_times) : self
    {
        $this->container['preferred_appointment_times'] = $preferred_appointment_times;

        return $this;
    }

    /**
     * Gets appointments.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\Appointment[]
     */
    public function getAppointments() : ?array
    {
        return $this->container['appointments'];
    }

    /**
     * Sets appointments.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\Appointment[] $appointments a list of appointments
     */
    public function setAppointments(?array $appointments) : self
    {
        $this->container['appointments'] = $appointments;

        return $this;
    }

    /**
     * Gets service_order_id.
     */
    public function getServiceOrderId() : ?string
    {
        return $this->container['service_order_id'];
    }

    /**
     * Sets service_order_id.
     *
     * @param null|string $service_order_id the Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format
     */
    public function setServiceOrderId(?string $service_order_id) : self
    {
        if (null !== $service_order_id && (\mb_strlen($service_order_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $service_order_id when calling ServiceJob., must be smaller than or equal to 20.');
        }

        if (null !== $service_order_id && (\mb_strlen($service_order_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $service_order_id when calling ServiceJob., must be bigger than or equal to 5.');
        }

        $this->container['service_order_id'] = $service_order_id;

        return $this;
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
     * @param null|string $marketplace_id the marketplace identifier
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        if (null !== $marketplace_id && (!\preg_match('/^[A-Z0-9]*$/', $marketplace_id))) {
            throw new \InvalidArgumentException("invalid value for {$marketplace_id} when calling ServiceJob., must conform to the pattern /^[A-Z0-9]*$/.");
        }

        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets buyer.
     */
    public function getBuyer() : ?Buyer
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\Buyer $buyer buyer
     */
    public function setBuyer(?Buyer $buyer) : self
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets associated_items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\AssociatedItem[]
     */
    public function getAssociatedItems() : ?array
    {
        return $this->container['associated_items'];
    }

    /**
     * Sets associated_items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\AssociatedItem[] $associated_items a list of items associated with the service job
     */
    public function setAssociatedItems(?array $associated_items) : self
    {
        $this->container['associated_items'] = $associated_items;

        return $this;
    }

    /**
     * Gets service_location.
     */
    public function getServiceLocation() : ?ServiceLocation
    {
        return $this->container['service_location'];
    }

    /**
     * Sets service_location.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\ServiceLocation $service_location service_location
     */
    public function setServiceLocation(?ServiceLocation $service_location) : self
    {
        $this->container['service_location'] = $service_location;

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
