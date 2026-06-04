<?php

namespace Shopee\Nodes\BundleDeal\Parameters;

use Shopee\Nodes\Item\Parameters\ItemTrait;
use Shopee\Nodes\Item\Parameters\VariationIdTrait;
use Shopee\RequestParameters;

class DeleteBundleDealItems extends RequestParameters
{
    use BundleDealTrait;
    use ItemTrait;
    use VariationIdTrait;

    public function setItemIds($item_list)
    {
        $this->parameters['item_list'] = $item_list;
        return $this;
    }

    public function getItemIds(): int
    {
        return $this->parameters['item_list'];
    }
}
