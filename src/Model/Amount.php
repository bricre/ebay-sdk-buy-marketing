<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the monetary value of an amount and the currency used.
 */
class Amount extends AbstractModel
{
    /**
     * The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html"
     * target="_blank">ISO 4217</a> code representing the currency of the amount in the
     * <b> value</b> field. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/marketing/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount, in the currency specified by the <b> currency</b> field.
     *
     * @var string
     */
    public $value = null;
}
