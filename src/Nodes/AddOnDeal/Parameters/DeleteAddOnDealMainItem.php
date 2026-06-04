<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class DeleteAddOnDealMainItem extends RequestParameters
{

    use AddOnDealTrait;

    public function getMainItemList(): array
    {
        return $this->parameters['main_item_list'];
    }

    /**
     * @param array $main_item_list
     * @return $this
     */
    public function setMainItemList(array $main_item_list)
    {
        $this->parameters['main_item_list'] = $main_item_list;
        return $this;
    }
}
