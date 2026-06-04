<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class DownloadShippingDocumentInput extends RequestParameters
{
    protected $parameters = [
        'shipping_document_type' => 'THERMAL_AIR_WAYBILL',
    ];

    /**
     * @param CreateShippingDocumentArrays $params
     * @return $this
    */

    public function setOrderList(CreateShippingDocumentArrays $params)
    {
        $this->parameters['order_list'] = $params;
        return $this;
    }

    /**
     * @param string $shipping_document_type
     * @return $this
     */

    public function setDocumentType(string $shipping_document_type)
    {
        $this->parameters['shipping_document_type'] = $shipping_document_type;
        return $this;
    }

}
