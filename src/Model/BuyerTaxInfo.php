<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Tax information about the buyer.
 */
class BuyerTaxInfo extends AbstractModel
{
    /**
     * The legal name of the company.
     *
     * @var string
     */
    public $CompanyLegalName = null;

    /**
     * The country or region imposing the tax.
     *
     * @var string
     */
    public $TaxingRegion = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\TaxClassificationList
     */
    public $TaxClassifications = null;
}
