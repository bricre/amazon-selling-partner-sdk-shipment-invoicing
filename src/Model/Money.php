<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The currency type and amount.
 */
class Money extends AbstractModel
{
    /**
     * Three-digit currency code in ISO 4217 format.
     *
     * @var string
     */
    public $CurrencyCode = null;

    /**
     * The currency amount.
     *
     * @var string
     */
    public $Amount = null;
}
