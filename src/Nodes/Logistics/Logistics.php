<?php

namespace Shopee\Nodes\Logistics;

use Illuminate\Support\Facades\Log;
use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Logistics extends NodeAbstractV2
{

    /**
     * Use this call to get all supported Logistic Channel.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getLogistics($parameters = []): ResponseData
    {
        return $this->get("/api/v2/logistics/get_channel_list", ClientV2::API_TYPE_SHOP, $parameters);

    }
    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getTrackingNumber($parameters = []): ResponseData
    {
        return $this->get('/api/v2/logistics/get_tracking_number', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getShippingParameter($parameters = []): ResponseData
    {
        return $this->get('/api/v2/logistics/get_shipping_parameter', ClientV2::API_TYPE_SHOP, $parameters);
    }
    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function shipOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/ship_order', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function batchShipOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/batch_ship_order', ClientV2::API_TYPE_SHOP, $parameters);
    }


    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function createShipingDocument($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/create_shipping_document', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getShipingDocumentResult($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/get_shipping_document_result', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function downloadShipingDocument($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/download_shipping_document', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Get return list address
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getAddressList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/logistics/get_address_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    public function getTrackingInfo($parameters = []): ResponseData
    {
        return $this->get('/api/v2/logistics/get_tracking_info', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateShipOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/update_shipping_order', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function getShippingDocumentDataInfo($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/get_shipping_document_data_info', ClientV2::API_TYPE_SHOP, $parameters);
    }
    
}
