<?php

namespace Shopee\Nodes\Item\Parameters;

class UpdateVariationPrice extends UpdatePrice
{
    use VariationIdTrait;

    public function getVariationPrice()
    {
        return $this->parameters['original_price'];
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setVariationPrice(float $price)
    {
        $this->parameters['original_price'] = $price;

        return $this;
    }
}
