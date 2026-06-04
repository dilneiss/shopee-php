<?php

namespace Shopee\Nodes\Item\Parameters;

class UpdateVariationStock extends UpdateStock
{
    use VariationIdTrait;

    public function getVariationStock()
    {
        return $this->parameters['seller_stock'];
    }

    /**
     * @param SellerStocks $stock
     * @return $this
     */
    public function setVariationStock(SellerStocks $stock)
    {
        $this->parameters['seller_stock'] = $stock;

        return $this;
    }
}
