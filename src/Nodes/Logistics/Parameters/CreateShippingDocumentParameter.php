<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class CreateShippingDocumentParameter extends RequestParameters
{

    protected $parameters = [
        'shipping_document_type' => 'THERMAL_AIR_WAYBILL',
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

    /**
     * @param string $shipping_document_type
     * @return $this
    */

    public function setDocumentType(string $shipping_document_type)
    {
        $this->parameters['shipping_document_type'] = $shipping_document_type;
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
