<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class ShipOrderPickupInput extends RequestParameters
{



    /**
     * @param int $address_id
     * @return $this
    */

    public function setAddressId(int $address_id)
    {
        $this->parameters['address_id'] = $address_id;
        return $this;
    }
    /**
     * @param int $pickup_time_id
     * @return $this
    */

    public function setPickupTimeId($pickup_time_id)
    {
        $this->parameters['pickup_time_id'] = $pickup_time_id? ((string)$pickup_time_id ): null;
        return $this;
    }
    /**
     * @param string $tracking_number
     * @return $this
    */

    public function setTrackingNumber(string $tracking_number)
    {
        $this->parameters['tracking_number'] = $tracking_number;
        return $this;
    }

}
