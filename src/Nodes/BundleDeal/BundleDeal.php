<?php

namespace Shopee\Nodes\BundleDeal;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class BundleDeal extends NodeAbstractV2
{
    /**
     * Use this api to get shop flash_sale activity list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getBundleDealsList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/bundle_deal/get_bundle_deal_list', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function getBundleDeal($parameters = []): ResponseData
    {
        return $this->get('/api/v2/bundle_deal/get_bundle_deal', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function getBundleDealItems($parameters = []): ResponseData
    {
        return $this->get('/api/v2/bundle_deal/get_bundle_deal_item', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function updateBundleDeal($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/update_bundle_deal', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function createBundleDeal($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/add_bundle_deal', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function deleteBundleDeal($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/delete_bundle_deal', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function endBundleDeal($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/end_bundle_deal', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function addBundleDealItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/add_bundle_deal_item', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function updateBundleDealItems($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/update_bundle_deal_item', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function deleteBundleDealItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/bundle_deal/delete_bundle_deal_item', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
