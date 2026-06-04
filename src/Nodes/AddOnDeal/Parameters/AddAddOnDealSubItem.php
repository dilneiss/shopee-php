<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class AddAddOnDealSubItem extends RequestParameters
{

    use AddOnDealTrait;

    public function getSubItemList(): SubItemList
    {
        return $this->parameters['sub_item_list'];
    }

    /**
     *
     * @param SubItemList $sub_item_list
     * @return $this
     */
    public function setSubItemList(SubItemList $sub_item_list)
    {
        $this->parameters['sub_item_list'] = $sub_item_list;
        return $this;
    }
}
