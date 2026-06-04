<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class UpdateAddOnDealSubItem extends RequestParameters
{

    use AddOnDealTrait;


    public function getSubItemList(): SubItemList
    {
        return $this->parameters['main_item_list'];
    }

    /**
     *
     * @param SubItemList $main_item_list
     * @return $this
     */
    public function setSubItemList(SubItemList $main_item_list)
    {
        $this->parameters['main_item_list'] = $main_item_list;
        return $this;
    }
}
