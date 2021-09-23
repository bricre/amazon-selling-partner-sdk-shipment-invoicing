<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipment invoice status information.
 */
class ShipmentInvoiceStatusInfo extends AbstractModel
{
    /**
     * The Amazon-defined shipment identifier.
     *
     * @var string
     */
    public $AmazonShipmentId = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\ShipmentInvoiceStatus
     */
    public $InvoiceStatus = null;
}
