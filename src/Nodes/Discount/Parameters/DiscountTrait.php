<?php


namespace Shopee\Nodes\Discount\Parameters;

trait DiscountTrait
{
    public function getDiscountId(): int
    {
        return $this->parameters['discount_id'];
    }

    /**
     * @param int $discount_id
     * @return $this
     */
    public function setDiscountId(int $discount_id)
    {
        $this->parameters['discount_id'] = $discount_id;

        return $this;
    }
}
