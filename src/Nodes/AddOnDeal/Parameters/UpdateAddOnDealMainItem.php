<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class UpdateAddOnDealMainItem extends RequestParameters
{

    use AddOnDealTrait;


    public function getMainItemList(): MainItemList
    {
        return $this->parameters['main_item_list'];
    }

    /**
     *
     * @param MainItemList $main_item_list
     * @return $this
     */
    public function setMainItemList(MainItemList $main_item_list)
    {
        $this->parameters['main_item_list'] = $main_item_list;
        return $this;
    }
}
