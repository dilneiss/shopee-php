<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class SubItem extends RequestParameters
{
    public function getItemId(): int
    {
        return $this->parameters['item_id'];
    }

    /**
     * @param int $item_id
     * @return $this
     */
    public function setItemId(int $item_id)
    {
        $this->parameters['item_id'] = $item_id;

        return $this;
    }

    public function getModelId(): int
    {
        return $this->parameters['model_id'];
    }

    /**
     * @param int $model_id
     * @return $this
     */
    public function setModelId(int $model_id)
    {
        $this->parameters['model_id'] = $model_id;

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

    public function getSubItemInputPrice(): float
    {
        return $this->parameters['sub_item_input_price'];
    }

    /**
     * @param float $sub_item_input_price
     * @return $this
     */
    public function setSubItemInputPrice(float $sub_item_input_price)
    {
        $this->parameters['sub_item_input_price'] = $sub_item_input_price;

        return $this;
    }

    public function getSubItemLimit(): float
    {
        return $this->parameters['sub_item_limit'];
    }

    /**
     * @param float $sub_item_limit
     * @return $this
     */
    public function setSubItemLimit(float $sub_item_limit)
    {
        $this->parameters['sub_item_limit'] = $sub_item_limit;

        return $this;
    }

}
