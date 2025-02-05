<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ShippingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ShippingSDKInterface
{
    public const API_NAME = 'Shipping';

    public const OPERATION_CANCELSHIPMENT = 'cancelShipment';

    public const OPERATION_CANCELSHIPMENT_PATH = '/shipping/v1/shipments/{shipmentId}/cancel';

    public const OPERATION_CREATESHIPMENT = 'createShipment';

    public const OPERATION_CREATESHIPMENT_PATH = '/shipping/v1/shipments';

    public const OPERATION_GETACCOUNT = 'getAccount';

    public const OPERATION_GETACCOUNT_PATH = '/shipping/v1/account';

    public const OPERATION_GETRATES = 'getRates';

    public const OPERATION_GETRATES_PATH = '/shipping/v1/rates';

    public const OPERATION_GETSHIPMENT = 'getShipment';

    public const OPERATION_GETSHIPMENT_PATH = '/shipping/v1/shipments/{shipmentId}';

    public const OPERATION_GETTRACKINGINFORMATION = 'getTrackingInformation';

    public const OPERATION_GETTRACKINGINFORMATION_PATH = '/shipping/v1/tracking/{trackingId}';

    public const OPERATION_PURCHASELABELS = 'purchaseLabels';

    public const OPERATION_PURCHASELABELS_PATH = '/shipping/v1/shipments/{shipmentId}/purchaseLabels';

    public const OPERATION_PURCHASESHIPMENT = 'purchaseShipment';

    public const OPERATION_PURCHASESHIPMENT_PATH = '/shipping/v1/purchaseShipment';

    public const OPERATION_RETRIEVESHIPPINGLABEL = 'retrieveShippingLabel';

    public const OPERATION_RETRIEVESHIPPINGLABEL_PATH = '/shipping/v1/shipments/{shipmentId}/containers/{trackingId}/label';

    /**
     * Operation cancelShipment.
     *
     * @param string $shipment_id shipment_id (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\CancelShipmentResponse
     */
    public function cancelShipment(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\Shipping\CancelShipmentResponse;

    /**
     * Operation createShipment.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\CreateShipmentRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\CreateShipmentResponse
     */
    public function createShipment(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Shipping\CreateShipmentRequest $body) : \AmazonPHP\SellingPartner\Model\Shipping\CreateShipmentResponse;

    /**
     * Operation getAccount.
     *
     * @param AccessToken $accessToken
     * @param string $region
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\GetAccountResponse
     */
    public function getAccount(AccessToken $accessToken, string $region) : \AmazonPHP\SellingPartner\Model\Shipping\GetAccountResponse;

    /**
     * Operation getRates.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\GetRatesRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\GetRatesResponse
     */
    public function getRates(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Shipping\GetRatesRequest $body) : \AmazonPHP\SellingPartner\Model\Shipping\GetRatesResponse;

    /**
     * Operation getShipment.
     *
     * @param string $shipment_id shipment_id (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\GetShipmentResponse
     */
    public function getShipment(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\Shipping\GetShipmentResponse;

    /**
     * Operation getTrackingInformation.
     *
     * @param string $tracking_id tracking_id (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\GetTrackingInformationResponse
     */
    public function getTrackingInformation(AccessToken $accessToken, string $region, string $tracking_id) : \AmazonPHP\SellingPartner\Model\Shipping\GetTrackingInformationResponse;

    /**
     * Operation purchaseLabels.
     *
     * @param string $shipment_id shipment_id (required)
     * @param \AmazonPHP\SellingPartner\Model\Shipping\PurchaseLabelsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\PurchaseLabelsResponse
     */
    public function purchaseLabels(AccessToken $accessToken, string $region, string $shipment_id, \AmazonPHP\SellingPartner\Model\Shipping\PurchaseLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\Shipping\PurchaseLabelsResponse;

    /**
     * Operation purchaseShipment.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\PurchaseShipmentRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\PurchaseShipmentResponse
     */
    public function purchaseShipment(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Shipping\PurchaseShipmentRequest $body) : \AmazonPHP\SellingPartner\Model\Shipping\PurchaseShipmentResponse;

    /**
     * Operation retrieveShippingLabel.
     *
     * @param string $shipment_id shipment_id (required)
     * @param string $tracking_id tracking_id (required)
     * @param \AmazonPHP\SellingPartner\Model\Shipping\RetrieveShippingLabelRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\RetrieveShippingLabelResponse
     */
    public function retrieveShippingLabel(AccessToken $accessToken, string $region, string $shipment_id, string $tracking_id, \AmazonPHP\SellingPartner\Model\Shipping\RetrieveShippingLabelRequest $body) : \AmazonPHP\SellingPartner\Model\Shipping\RetrieveShippingLabelResponse;
}
