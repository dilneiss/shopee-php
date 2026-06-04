<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class GetShippingDocumentDataInfo extends RequestParameters
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
    /**
     * @param RecipientAddressInfo[] $recipient_address_infos
     * @return $this
     */
    public function setRecipientAddressInfo($recipient_address_infos)
    {
        foreach ($recipient_address_infos as $recipient_address_info) {
            $this->parameters['recipient_address_info'][] = $recipient_address_info->toArray();
        }
        return $this;
    }

}
