<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the submitInvoice operation.
 */
class SubmitInvoiceRequest extends AbstractModel
{
    /**
     * @var \Amz\ShipmentInvoicing\Model\Blob
     */
    public $InvoiceContent = null;

    /**
     * An Amazon marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * MD5 sum for validating the invoice data. For more information about calculating
     * this value, see [Working with Content-MD5
     * Checksums](https://docs.developer.amazonservices.com/en_US/dev_guide/DG_MD5.html).
     *
     * @var string
     */
    public $ContentMD5Value = null;
}
