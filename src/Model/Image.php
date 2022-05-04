<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Type the defines the details of an image, such as size and URL. Currently only
 * <b> imageUrl</b> is getting populated. The <b> height</b> and <b> width</b> were
 * added for future use.
 */
class Image extends AbstractModel
{
    /**
     * <b> Reserved for future use. </b>.
     *
     * @var int
     */
    public $height = null;

    /**
     * The URL of the image.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * <b> Reserved for future use. </b>.
     *
     * @var int
     */
    public $width = null;
}
