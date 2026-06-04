<?php

namespace Shopee\Nodes\FlashSale\Parameters;

use Shopee\Nodes\Item\Parameters\ItemTrait;
use Shopee\Nodes\Item\Parameters\VariationIdTrait;
use Shopee\RequestParameters;

class DeleteFlashSaleItems extends RequestParameters
{
    use FlashSaleTrait;
    use ItemTrait;
    use VariationIdTrait;
 /**
     * @param int $item_ids
     * @return $this
     */
    public function setItemIds($item_ids)
    {
        $this->parameters['item_ids'] = $item_ids;
        return $this;
    }

    public function getItemIds(): int
    {
        return $this->parameters['item_ids'];
    }
}
