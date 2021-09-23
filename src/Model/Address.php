<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipping address details of the shipment.
 */
class Address extends AbstractModel
{
    /**
     * The name.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The street address.
     *
     * @var string
     */
    public $AddressLine1 = null;

    /**
     * Additional street address information, if required.
     *
     * @var string
     */
    public $AddressLine2 = null;

    /**
     * Additional street address information, if required.
     *
     * @var string
     */
    public $AddressLine3 = null;

    /**
     * The city.
     *
     * @var string
     */
    public $City = null;

    /**
     * The county.
     *
     * @var string
     */
    public $County = null;

    /**
     * The district.
     *
     * @var string
     */
    public $District = null;

    /**
     * The state or region.
     *
     * @var string
     */
    public $StateOrRegion = null;

    /**
     * The postal code.
     *
     * @var string
     */
    public $PostalCode = null;

    /**
     * The country code.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * The phone number.
     *
     * @var string
     */
    public $Phone = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\AddressTypeEnum
     */
    public $AddressType = null;
}
