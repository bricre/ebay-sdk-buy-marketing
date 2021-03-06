<?php

namespace Ebay\Buy\Marketing\Api;

use Ebay\Buy\Marketing\Model\BestSellingProductResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Product extends AbstractAPI
{
    /**
     * This method returns an array of products based on the category and metric
     * specified. This includes details of the product, such as the eBay product ID
     * (EPID), title, and user reviews and ratings for the product. You can use the
     * <code>epid</code> returned by this method in the Browse API <b>search</b> method
     * to retrieve items for this product. <h3><b>Restrictions </b></h3> <ul><li>To
     * test <b> getMerchandisedProducts</b> in Sandbox, you must use category ID 9355
     * and the response will be mock data.  </li>   <li>For a list of supported sites
     * and other restrictions, see <a
     * href="/api-docs/buy/marketing/overview.html#API">API Restrictions</a>.</li>
     * </ul>.
     *
     * @param array $queries options:
     *                       'aspect_filter'	string	The aspect name/value pairs used to further refine
     *                       product results. <br /><br /> For example: <br
     *                       />&nbsp;&nbsp;&nbsp;<code>/buy/marketing/v1_beta/merchandised_product?category_id=31388&metric_name=BEST_SELLING&aspect_filter=Brand:Canon</code>
     *                       <br /><br />You can use the Browse API <b>search</b> method with the
     *                       <code>fieldgroups=ASPECT_REFINEMENTS</code> field to return the aspects of a
     *                       product. For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/marketing/types/gct:MarketingAspectFilter
     *                       'category_id'	string	This query parameter limits the products returned to a
     *                       specific eBay category.  <br /> <br />The list of eBay category IDs is not
     *                       published and category IDs are not all the same across all the eBay maketplace.
     *                       You can use the following techniques to find a category by site: <ul> <li>Use
     *                       the <a href="https://pages.ebay.com/sellerinformation/news/categorychanges.html"
     *                       target="_blank">Category Changes page</a>.</li> <li>Use the Taxonomy API. For
     *                       details see <a href="/api-docs/buy/buy-categories.html">Get Categories for Buy
     *                       APIs</a>. </li>  <li>Use the Browse API and submit the following method to get
     *                       the <b> dominantCategoryId</b> for an item. <br
     *                       /><code>/buy/browse/v1/item_summary/search?q=<em>keyword</em>&fieldgroups=ASPECT_REFINEMENTS
     *                       </code></li></ul>  <b> Maximum: </b> 1 <br /> <b> Required: </b> 1
     *                       'limit'	string	This value specifies the maximum number of products to return in
     *                       a result set. <br /> <br /><span class="tablenote"> <b>Note:</b> Maximum value
     *                       means the method will return up <em>to</em> that many products per set, but it
     *                       can be less than this value. If the number of products found is less than this
     *                       value, the method will return all of the products matching the criteria.</span>
     *                       <br /><br /><b> Default:</b> 8<br /><b> Maximum: </b>100
     *                       'metric_name'	string	This value filters the result set by the specified metric.
     *                       Only products in this metric are returned. Currently, the only metric supported
     *                       is <code> BEST_SELLING</code>. <br /><br /><b> Default: </b>BEST_SELLING <br />
     *                       <b> Maximum: </b> 1 <br /> <b> Required: </b> 1
     *
     * @return BestSellingProductResponse|UnexpectedResponse
     */
    public function gets(array $queries = [])
    {
        return $this->request(
        'getMerchandisedProducts',
        'GET',
        'merchandised_product',
        null,
        $queries,
        []
        );
    }
}
