<?php

namespace Shopee\Nodes\Returns;

use Illuminate\Support\Facades\Log;
use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Returns extends NodeAbstractV2
{

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getReturnList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/returns/get_return_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    public function getReturnDetail($parameters = []): ResponseData
    {
        return $this->get('/api/v2/returns/get_return_detail', ClientV2::API_TYPE_SHOP, $parameters);
    }

    public function getReturnTrackingInfo($parameters = []): ResponseData
    {
        return $this->get('/api/v2/returns/get_reverse_tracking_info', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
