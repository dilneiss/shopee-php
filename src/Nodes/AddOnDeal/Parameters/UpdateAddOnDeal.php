<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class UpdateAddOnDeal extends RequestParameters
{
    use AddOnDealTrait;

    public function getAddOnDealName(): string
    {
        return $this->parameters['add_on_deal_name'];
    }

    /**
     * @param string $add_on_deal_name
     * @return $this
     */
    public function setAddOnDealName(string $add_on_deal_name)
    {
        $this->parameters['add_on_deal_name'] = $add_on_deal_name;
        return $this;
    }

    public function getStartTime(): int
    {
        return $this->parameters['start_time'];
    }

    /**
     * @param int $start_time
     * @return $this
     */
    public function setStartTime(int $start_time)
    {
        $this->parameters['start_time'] = $start_time;

        return $this;
    }

    public function getEndTime(): int
    {
        return $this->parameters['end_time'];
    }

    /**
     * @param int $end_time
     * @return $this
     */
    public function setEndTime(int $end_time)
    {
        $this->parameters['end_time'] = $end_time;

        return $this;
    }

    public function getPuschaseMinSpend(): float
    {
        return $this->parameters['purchase_min_spend'];
    }

    /**
     * @param float $purchase_min_spend
     * @return $this
     */
    public function setPuschaseMinSpend(float $purchase_min_spend)
    {
        $this->parameters['purchase_min_spend'] = $purchase_min_spend;

        return $this;
    }

    public function getPerGiftNum(): int
    {
        return $this->parameters['per_gift_num'];
    }

    /**
     * @param int $per_gift_num
     * @return $this
     */
    public function setPerGiftNum(int $per_gift_num)
    {
        $this->parameters['per_gift_num'] = $per_gift_num;

        return $this;
    }

    public function getPromotionPurchaseLimit(): int
    {
        return $this->parameters['promotion_purchase_limit'];
    }

    /**
     * @param int $promotion_purchase_limit
     * @return $this
     */
    public function setPromotionPurchaseLimit($promotion_purchase_limit)
    {
        $this->parameters['promotion_purchase_limit'] = $promotion_purchase_limit;

        return $this;
    }

    public function getSubItemPriority(): array
    {
        return $this->parameters['sub_item_priority'];
    }

    /**
     * @param array $sub_item_priority
     * @return $this
     */
    public function setSubItemPriority(array $sub_item_priority)
    {
        $this->parameters['sub_item_priority'] = $sub_item_priority;

        return $this;
    }
}
