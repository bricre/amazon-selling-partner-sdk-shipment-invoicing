<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitInvoice operation.
 */
class SubmitInvoiceResponse extends AbstractModel
{
    /**
     * @var \Amz\ShipmentInvoicing\Model\ErrorList
     */
    public $errors = null;
}
