<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateVariationModelStock extends RequestParameters
{
    use ItemTrait;


    public function getModel(): UpdateVariationStockList
    {
        return $this->parameters['stock_list'];
    }

    public function setModel(UpdateVariationStockList $variations)
    {
        $this->parameters['stock_list'] = $variations;
    }

}
