<?php

namespace Shopee\Nodes\Order;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Order extends NodeAbstractV2
{

    const RESPONSE_FULL_FIELD = "buyer_user_id,buyer_username,estimated_shipping_fee,recipient_address,actual_shipping_fee ,goods_to_declare,note,note_update_time,item_list,pay_time,dropshipper,credit_card_number ,dropshipper_phone,split_up,buyer_cancel_reason,cancel_by,cancel_reason,actual_shipping_fee_confirmed,buyer_cpf_id,fulfillment_flag,pickup_done_time,package_list,shipping_carrier,payment_method,total_amount,buyer_username,invoice_data";

    /**
     * Use this call to retrieve detailed information about one or more orders based on OrderIDs.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getOrderDetails($parameters = []): ResponseData
    {
        return $this->get('/api/v2/order/get_order_detail', ClientV2::API_TYPE_SHOP, $parameters);
    }


    /**
     * GetOrdersList is the recommended call to use for order management.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getOrdersList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/order/get_order_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to accept buyer cancellation.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function handleBuyerCancellation($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/handle_buyer_cancellation', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to add note for an order.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function setOrderNote($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/set_note', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to cancel an order.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function cancelOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/cancel_order', ClientV2::API_TYPE_SHOP, $parameters);
    }


    /**
     * Use this API to split order into fulfillment orders.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function splitOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/split_order', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this API to cancel split order from the seller side.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function undoSplitOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/unsplit_order', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this API to cancel split order from the seller side.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function addInvoiceData($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/add_invoice_data', ClientV2::API_TYPE_SHOP, $parameters);
    }
    public function getBuyerInvoiceInfo($parameters = []): ResponseData
    {
        return $this->post('/api/v2/order/get_buyer_invoice_info', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
