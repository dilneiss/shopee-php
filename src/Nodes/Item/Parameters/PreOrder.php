<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class PreOrder extends RequestParameters
{
    public function getIsPreOrder(): bool
    {
        return $this->parameters['is_pre_order'];
    }

    /**
     * @param bool $is_pre_order
     * @return $this
     */
    public function setIsPreOrder(bool $is_pre_order)
    {
        $this->parameters['is_pre_order'] = $is_pre_order;

        return $this;
    }

    public function getDaysToShip(): int
    {
        return $this->parameters['days_to_ship'];
    }

    /**
     * @param int $days_to_ship
     * @return $this
     */
    public function setDaysToShip(int $days_to_ship)
    {
        $this->parameters['days_to_ship'] = $days_to_ship;

        return $this;
    }
}
