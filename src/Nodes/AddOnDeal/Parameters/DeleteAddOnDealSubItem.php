<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class DeleteAddOnDealSubItem extends RequestParameters
{

    use AddOnDealTrait;

    public function getMainItemList(): SubItemList
    {
        return $this->parameters['sub_item_list'];
    }

    /**
     * @param  $sub_item_list
     * @return $this
     */
    public function setMainItemList(SubItemList $sub_item_list)
    {
        $this->parameters['sub_item_list'] = $sub_item_list;
        return $this;
    }
}
