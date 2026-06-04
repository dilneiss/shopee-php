<?php

namespace Shopee\Nodes\Discount\Parameters;

use Shopee\Nodes\Item\Parameters\VariationIdTrait;
use Shopee\RequestParameters;

class ItemModel extends RequestParameters
{
    use VariationIdTrait;
    public function getModelPromotionPrice(): float
    {
        return $this->parameters['model_promotion_price'];
    }

    /**
     * Name of the discount.
     *
     * @param float $model_promotion_price
     * @return $this
     */
    public function setModelPromotionPrice(float $model_promotion_price)
    {
        $this->parameters['model_promotion_price'] = $model_promotion_price;

        return $this;
    }

    public function getModelPromotionStock(): int
    {
        return $this->parameters['model_promotion_stock'];
    }

    /**
     * @param int $model_promotion_stock
     * @return $this
     */
    public function setModelPromotionStock(int $model_promotion_stock)
    {
        $this->parameters['model_promotion_stock'] = $model_promotion_stock;

        return $this;
    }

}
