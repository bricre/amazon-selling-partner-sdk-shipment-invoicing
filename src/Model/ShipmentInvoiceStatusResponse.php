<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipment invoice status response.
 */
class ShipmentInvoiceStatusResponse extends AbstractModel
{
    /**
     * @var \Amz\ShipmentInvoicing\Model\ShipmentInvoiceStatusInfo
     */
    public $Shipments = null;
}
