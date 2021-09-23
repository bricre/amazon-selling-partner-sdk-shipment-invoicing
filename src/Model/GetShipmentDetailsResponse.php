<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getShipmentDetails operation.
 */
class GetShipmentDetailsResponse extends AbstractModel
{
    /**
     * The payload for the getShipmentDetails operation.
     *
     * @var \Amz\ShipmentInvoicing\Model\ShipmentDetail
     */
    public $payload = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\ErrorList
     */
    public $errors = null;
}
