<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for details about the product, such as
 * condition and estimated start price.
 */
class MarketPriceDetail extends AbstractModel
{
    /**
     * The name for the condition of the product. For example: NEW.
     *
     * @var string
     */
    public $conditionGroup = null;

    /**
     * An array of condition identifiers for the product.
     *
     * @var string[]
     */
    public $conditionIds = null;

    /**
     * The lowest priced active item for this product on eBay.
     *
     * @var \Ebay\Buy\Marketing\Model\Amount
     */
    public $estimatedStartPrice = null;
}
