<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class BatchShipOrderInput extends RequestParameters
{


    /**
     * @param ListOrderInput $listOrderInput
     * @return $this
     */

    public function setListOrder(ListOrderInput $listOrderInput)
    {
        $this->parameters['order_list'] = $listOrderInput;
        return $this;
    }

    public function setPickup(ShipOrderPickupInput $pickupInput)
    {
        $this->parameters['pickup'] = $pickupInput;
        return $this;
    }
}
