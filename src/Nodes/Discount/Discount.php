<?php

namespace Shopee\Nodes\Discount;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Discount extends NodeAbstractV2
{
    /**
     * Use this api to add shop discount activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function addDiscount($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/add_discount', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to add shop discount item.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function addDiscountItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/add_discount_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to delete one discount activity BEFORE it starts.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function deleteDiscount($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/delete_discount', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to delete items of the discount activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function deleteDiscountItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/delete_discount_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to get one shop discount activity detail.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getDiscountDetail($parameters = []): ResponseData
    {
        return $this->get('/api/v2/discount/get_discount', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to get shop discount activity list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getDiscountsList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/discount/get_discount_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to update one discount information
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateDiscount($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/update_discount', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to update items of the discount activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateDiscountItems($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/update_discount_item', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function endDiscount($parameters = []): ResponseData
    {
        return $this->post('/api/v2/discount/end_discount', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
