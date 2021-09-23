<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The information required by a selling partner to issue a shipment invoice.
 */
class ShipmentDetail extends AbstractModel
{
    /**
     * The Amazon-defined identifier for the warehouse.
     *
     * @var string
     */
    public $WarehouseId = null;

    /**
     * The Amazon-defined identifier for the order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The Amazon-defined identifier for the shipment.
     *
     * @var string
     */
    public $AmazonShipmentId = null;

    /**
     * The date and time when the order was created.
     *
     * @var string
     */
    public $PurchaseDate = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\Address
     */
    public $ShippingAddress = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\PaymentMethodDetailItemList
     */
    public $PaymentMethodDetails = null;

    /**
     * The identifier for the marketplace where the order was placed.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The seller identifier.
     *
     * @var string
     */
    public $SellerId = null;

    /**
     * The name of the buyer.
     *
     * @var string
     */
    public $BuyerName = null;

    /**
     * The county of the buyer.
     *
     * @var string
     */
    public $BuyerCounty = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\BuyerTaxInfo
     */
    public $BuyerTaxInfo = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\MarketplaceTaxInfo
     */
    public $MarketplaceTaxInfo = null;

    /**
     * The seller’s friendly name registered in the marketplace.
     *
     * @var string
     */
    public $SellerDisplayName = null;

    /**
     * @var \Amz\ShipmentInvoicing\Model\ShipmentItems
     */
    public $ShipmentItems = null;
}
