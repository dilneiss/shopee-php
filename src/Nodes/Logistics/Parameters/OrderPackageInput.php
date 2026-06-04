<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class OrderPackageInput extends RequestParameters
{



    /**
     * @param string $order_sn
     * @return $this
    */

    public function setOrderSn(string $order_sn)
    {
        $this->parameters['order_sn'] = $order_sn;
        return $this;
    }
    /**
     * @param string $package_number
     * @return $this
    */

    public function setPackageNumber(string $package_number)
    {
        $this->parameters['package_number'] = $package_number;
        return $this;
    }

}
