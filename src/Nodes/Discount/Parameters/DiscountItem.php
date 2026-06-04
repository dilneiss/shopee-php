<?php

namespace Shopee\Nodes\Discount\Parameters;

use Shopee\Nodes\Item\Parameters\ItemTrait;
use Shopee\RequestParameters;

class DiscountItem extends RequestParameters
{
    use ItemTrait;
    public function getPromotionPrice(): float
    {
        return $this->parameters['item_promotion_price'];
    }

    /**
     * Name of the discount.
     *
     * @param float $item_promotion_price
     * @return $this
     */
    public function setPromotionPrice(float $item_promotion_price)
    {
        $this->parameters['item_promotion_price'] = $item_promotion_price;

        return $this;
    }

    public function getPurchaseLimit(): int
    {
        return $this->parameters['purchase_limit'];
    }

    /**
     * @param int $purchase_limit
     * @return $this
     */
    public function setPurchaseLimit(int $purchase_limit)
    {
        $this->parameters['purchase_limit'] = $purchase_limit;
        return $this;
    }

    public function getPromotionStock(): int
    {
        return $this->parameters['item_promotion_stock'];
    }

    /**
     * @param int $item_promotion_stock
     * @return $this
     */
    public function setPromotionStock(int $item_promotion_stock)
    {
        $this->parameters['item_promotion_stock'] = $item_promotion_stock;

        return $this;
    }

    public function getModelList(): ItemModelList
    {
        return $this->parameters['model_list'];
    }

    /**
     * @param ItemModelList $item_model_list
     * @return $this
     */
    public function setModelList(ItemModelList $item_model_list)
    {
        $this->parameters['model_list'] = $item_model_list;

        return $this;
    }
}
