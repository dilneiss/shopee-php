<?php

namespace Shopee\Nodes\FlashSale\Parameters;

use Shopee\Nodes\Item\Parameters\ItemTrait;
use Shopee\RequestParameters;

class FlashSaleItem extends RequestParameters
{
    use ItemTrait;

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

    public function getModelList(): ItemModelList
    {
        return $this->parameters['models'];
    }

    /**
     * @param ItemModelList $item_model_list
     * @return $this
     */
    public function setModelList(ItemModelList $item_model_list)
    {
        $this->parameters['models'] = $item_model_list;

        return $this;
    }
}
