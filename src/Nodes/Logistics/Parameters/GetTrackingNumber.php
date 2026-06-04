<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class GetTrackingNumber extends RequestParameters
{

    protected $parameters = [
        'order_sn' => 0,
    ];

    /**
     * @param string $order_sn
     * @return $this
    */

    public function setOrderSn(string $order_sn)
    {
        $this->parameters['order_sn'] = $order_sn;
        return $this;
    }

}
