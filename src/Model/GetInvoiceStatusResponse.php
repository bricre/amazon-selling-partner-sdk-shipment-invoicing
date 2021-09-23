<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getInvoiceStatus operation.
 */
class GetInvoiceStatusResponse extends AbstractModel
{
    /**
     * The payload for the getInvoiceStatus operation.
     *
     * @var \Amz\ShipmentInvoicing\Model\ShipmentInvoiceStatusResponse
     */
    public $payload = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\ErrorList
     */
    public $errors = null;
}
