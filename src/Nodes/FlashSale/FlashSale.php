<?php

namespace Shopee\Nodes\FlashSale;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class FlashSale extends NodeAbstractV2
{
    /**
     * Use this api to add shop flash_sale activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function createFlashSale($parameters = []): ResponseData
    {
        return $this->post('/api/v2/shop_flash_sale/create_shop_flash_sale', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to add shop flash_sale item.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function addFlashSaleItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/shop_flash_sale/add_shop_flash_sale_items', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to delete one flash_sale activity BEFORE it starts.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function deleteFlashSale($parameters = []): ResponseData
    {
        return $this->post('/api/v2/shop_flash_sale/delete_shop_flash_sale', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to delete items of the flash_sale activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function deleteFlashSaleItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/shop_flash_sale/delete_shop_flash_sale_items', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to get one shop flash_sale activity detail.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getFlashSale($parameters = []): ResponseData
    {
        return $this->get('/api/v2/shop_flash_sale/get_shop_flash_sale', ClientV2::API_TYPE_SHOP, $parameters);
    }

    public function getFlashSaleItems($parameters = []): ResponseData
    {
        return $this->get('/api/v2/shop_flash_sale/get_shop_flash_sale_items', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to get shop flash_sale activity list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getFlashSalesList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/shop_flash_sale/get_shop_flash_sale_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to update one flash_sale information
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateFlashSale($parameters = []): ResponseData
    {
        return $this->post('/api/v2/shop_flash_sale/update_shop_flash_sale', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to update items of the flash_sale activity.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateFlashSaleItems($parameters = []): ResponseData
    {
        return $this->post('/api/v2/shop_flash_sale/update_shop_flash_sale_items', ClientV2::API_TYPE_SHOP, $parameters);
    }


    public function getTimeSlotId($parameters = []): ResponseData
    {
        return $this->get('/api/v2/shop_flash_sale/get_time_slot_id', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
