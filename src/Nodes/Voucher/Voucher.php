<?php

namespace Shopee\Nodes\Voucher;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Voucher extends NodeAbstractV2
{
    /**
     * Use this api to add shop discount activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function createVoucher($parameters = []): ResponseData
    {
        return $this->post('/api/v2/voucher/add_voucher', ClientV2::API_TYPE_SHOP, $parameters);
    }



    /**
     * Use this api to delete one discount activity BEFORE it starts.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function deleteVoucher($parameters = []): ResponseData
    {
        return $this->post('/api/v2/voucher/delete_voucher', ClientV2::API_TYPE_SHOP, $parameters);
    }



    /**
     * Use this api to get one shop discount activity detail.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getVoucherDetail($parameters = []): ResponseData
    {
        return $this->get('/api/v2/voucher/get_voucher', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to get shop discount activity list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getVoucherList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/voucher/get_voucher_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to update one discount information
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateVoucher($parameters = []): ResponseData
    {
        return $this->post('/api/v2/voucher/update_voucher', ClientV2::API_TYPE_SHOP, $parameters);
    }

    public function endVoucher($parameters = []): ResponseData
    {
        return $this->post('/api/v2/voucher/end_voucher', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
