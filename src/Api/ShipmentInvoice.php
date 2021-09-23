<?php

namespace Amz\ShipmentInvoicing\Api;

use Amz\ShipmentInvoicing\Model\GetInvoiceStatusResponse as GetInvoiceStatusResponse;
use Amz\ShipmentInvoicing\Model\GetShipmentDetailsResponse as GetShipmentDetailsResponse;
use Amz\ShipmentInvoicing\Model\SubmitInvoiceRequest as SubmitInvoiceRequest;
use Amz\ShipmentInvoicing\Model\SubmitInvoiceResponse as SubmitInvoiceResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ShipmentInvoice extends AbstractAPI
{
    /**
     * Returns the shipment details required to issue an invoice for the specified
     * shipment.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1.133 | 25 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $shipmentId The identifier for the shipment. Get this value from the
     * FBAOutboundShipmentStatus notification. For information about subscribing to
     * notifications, see the [Notifications API Use Case
     * Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/notifications-api-use-case-guide/notifications-use-case-guide-v1.md).
     *
     * @return GetShipmentDetailsResponse
     */
    public function getShipmentDetails($shipmentId): GetShipmentDetailsResponse
    {
        return $this->client->request('getShipmentDetails', 'GET', "/fba/outbound/brazil/v0/shipments/{$shipmentId}",
            [
            ]
        );
    }

    /**
     * Submits a shipment invoice document for a given shipment.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1.133 | 25 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $shipmentId The identifier for the shipment
     * @param SubmitInvoiceRequest $Model Submits a shipment invoice document for a
     *                                    given shipment.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1.133 | 25 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitInvoiceResponse
     */
    public function submitInvoice($shipmentId, SubmitInvoiceRequest $Model): SubmitInvoiceResponse
    {
        return $this->client->request('submitInvoice', 'POST', "/fba/outbound/brazil/v0/shipments/{$shipmentId}/invoice",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns the invoice status for the shipment you specify.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1.133 | 25 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $shipmentId The shipment identifier for the shipment
     *
     * @return GetInvoiceStatusResponse
     */
    public function getInvoiceStatus($shipmentId): GetInvoiceStatusResponse
    {
        return $this->client->request('getInvoiceStatus', 'GET', "/fba/outbound/brazil/v0/shipments/{$shipmentId}/invoice/status",
            [
            ]
        );
    }
}
