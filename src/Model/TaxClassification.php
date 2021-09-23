<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The tax classification for the entity.
 */
class TaxClassification extends AbstractModel
{
    /**
     * The type of tax.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The entity's tax identifier.
     *
     * @var string
     */
    public $Value = null;
}
