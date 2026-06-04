<?php

namespace Shopee\Nodes\BundleDeal\Parameters;

use Shopee\RequestParameters;

class AddBundleDealItems extends RequestParameters
{
    use BundleDealTrait;
    public function getItemList(): BundleDealItemList
    {
        return $this->parameters['item_list'];
    }

    /**
     * Name of the BundleDeal.
     *
     * @param BundleDealItemList $BundleDealItemList
     * @return $this
     */
    public function setItemList(BundleDealItemList $BundleDealItemList)
    {
        $this->parameters['item_list'] = $BundleDealItemList;

        return $this;
    }

}
