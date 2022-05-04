<?php

namespace Ebay\Buy\Marketing;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'getMerchandisedProducts' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
