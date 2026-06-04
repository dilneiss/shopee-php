<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateVariationModel extends RequestParameters
{
    use ItemTrait;


    public function getModel(): UpdateVariations
    {
        return $this->parameters['model'];
    }

    public function setModel(UpdateVariations $variations)
    {
        $this->parameters['model'] = $variations;
    }

}
