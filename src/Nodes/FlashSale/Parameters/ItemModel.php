<?php

namespace Shopee\Nodes\FlashSale\Parameters;

use Shopee\Nodes\Item\Parameters\VariationIdTrait;
use Shopee\RequestParameters;

class ItemModel extends RequestParameters
{
    use VariationIdTrait;
    public function getInputPromoPrice(): float
    {
        return $this->parameters['input_promo_price'];
    }

    /**
     * Name of the discount.
     *
     * @param float $input_promo_price
     * @return $this
     */
    public function setInputPromoPrice(float $input_promo_price)
    {
        $this->parameters['input_promo_price'] = $input_promo_price;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->parameters['status'];
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->parameters['status'] = $status;

        return $this;
    }

    public function getModelId()
    {
        return $this->parameters['model_id'];
    }

    /**
     * @param  $model_id
     * @return $this
     */
    public function setModelId($model_id)
    {
        $this->parameters['model_id'] = $model_id;

        return $this;
    }

    public function getStock(): int
    {
        return $this->parameters['stock'];
    }

    /**
     * @param int $stock
     * @return $this
     */
    public function setStock(int $stock)
    {
        $this->parameters['stock'] = $stock;

        return $this;
    }

    

}
