<?php

namespace Shopee\Nodes\Discount\Parameters;

use Shopee\RequestParameters;

class AddDiscount extends RequestParameters
{

    public function getName(): string
    {
        return $this->parameters['discount_name'];
    }

    /**
     * Name of the discount.
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->parameters['discount_name'] = $name;

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
}
