<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class SellerStock extends RequestParameters
{
    public function getStock(): int
    {
        return $this->parameters['stock'];
    }

    /**
     * @param int $stock
     * @return $this
     */
    public function setStock(int $stock)
    {
        $this->parameters['stock'] = $stock;

        return $this;
    }

    public function getLocationId(): string
    {
        return $this->parameters['location_id'];
    }

    /**
     * @param string $location_id
     * @return $this
     */
    public function setLocationId(string $location_id)
    {
        $this->parameters['location_id'] = $location_id;

        return $this;
    }
}
