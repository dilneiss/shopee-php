<?php

namespace Shopee\Nodes\Discount\Parameters;

use Shopee\RequestParameters;

class AddDiscountItems extends RequestParameters
{
    use DiscountTrait;
    public function getItemList(): DiscountItemList
    {
        return $this->parameters['item_list'];
    }

    /**
     * Name of the discount.
     *
     * @param DiscountItemList $discountItemList
     * @return $this
     */
    public function setItemList(DiscountItemList $discountItemList)
    {
        $this->parameters['item_list'] = $discountItemList;

        return $this;
    }

}
