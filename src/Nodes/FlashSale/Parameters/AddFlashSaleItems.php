<?php

namespace Shopee\Nodes\FlashSale\Parameters;

use Shopee\RequestParameters;

class AddFlashSaleItems extends RequestParameters
{
    use FlashSaleTrait;
    public function getItemList(): FlashSaleItemList
    {
        return $this->parameters['items'];
    }

    /**
     * Name of the FlashSale.
     *
     * @param FlashSaleItemList $FlashSaleItemList
     * @return $this
     */
    public function setItemList(FlashSaleItemList $FlashSaleItemList)
    {
        $this->parameters['items'] = $FlashSaleItemList;

        return $this;
    }

}
