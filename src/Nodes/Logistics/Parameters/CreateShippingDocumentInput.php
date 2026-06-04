<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class CreateShippingDocumentInput extends RequestParameters
{


    /**
     * @param string $order_sn
     * @return $this
    */

    public function setOrderList(CreateShippingDocumentArrays $params)
    {
        $this->parameters['order_list'] = $params;
        return $this;
    }

}
