<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateVariation extends RequestParameters
{
    use VariationIdTrait;

    public function getVariationSku()
    {
        return $this->parameters['model_sku'];
    }

    /**
     * @param string $variationSku
     * @return $this
     */
    public function setVariationSku(string $variationSku)
    {
        $this->parameters['model_sku'] = $variationSku;

        return $this;
    }
}
