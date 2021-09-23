<?php

namespace Amz\ShipmentInvoicing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipment item information required by a seller to issue a shipment invoice.
 */
class ShipmentItem extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * The Amazon-defined identifier for the order item.
     *
     * @var string
     */
    public $OrderItemId = null;

    /**
     * The name of the item.
     *
     * @var string
     */
    public $Title = null;

    /**
     * The number of items ordered.
     *
     * @var float
     */
    public $QuantityOrdered = null;

    /**
     * The selling price of the item multiplied by the quantity ordered. Note that
     * ItemPrice excludes ShippingPrice and GiftWrapPrice.
     *
     * @var \Amz\ShipmentInvoicing\Model\Money
     */
    public $ItemPrice = null;

    /**
     * The shipping price of the item.
     *
     * @var \Amz\ShipmentInvoicing\Model\Money
     */
    public $ShippingPrice = null;

    /**
     * The gift wrap price of the item.
     *
     * @var \Amz\ShipmentInvoicing\Model\Money
     */
    public $GiftWrapPrice = null;

    /**
     * The discount on the shipping price.
     *
     * @var \Amz\ShipmentInvoicing\Model\Money
     */
    public $ShippingDiscount = null;

    /**
     * The total of all promotional discounts in the offer.
     *
     * @var \Amz\ShipmentInvoicing\Model\Money
     */
    public $PromotionDiscount = null;

    /**
     * The list of serial numbers.
     *
     * @var \Amz\ShipmentInvoicing\Model\SerialNumbersList
     */
    public $SerialNumbers = null;
}
