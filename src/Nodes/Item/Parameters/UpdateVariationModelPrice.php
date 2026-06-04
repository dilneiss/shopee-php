<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateVariationModelPrice extends RequestParameters
{
    use ItemTrait;


    public function getModel(): UpdateVariationPriceList
    {
        return $this->parameters['price_list'];
    }

    public function setModel(UpdateVariationPriceList $variations)
    {
        $this->parameters['price_list'] = $variations;
    }

}
