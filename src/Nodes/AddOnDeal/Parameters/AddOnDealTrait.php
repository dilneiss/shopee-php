<?php


namespace Shopee\Nodes\AddOnDeal\Parameters;

trait AddOnDealTrait
{
    public function getAddOnDealId(): int
    {
        return $this->parameters['add_on_deal_id'];
    }

    /**
     * @param int $add_on_deal_id
     * @return $this
     */
    public function setAddOnDealId(int $add_on_deal_id)
    {
        $this->parameters['add_on_deal_id'] = $add_on_deal_id;
        return $this;
    }
}
