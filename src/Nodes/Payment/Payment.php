<?php

namespace Shopee\Nodes\Payment;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\ResponseData;

class Payment extends NodeAbstractV2
{
    /**
     * Use this API to get the transaction records of wallet.
     * @param  array  $parameters
     * @return ResponseData
     */
    public function getWalletTransactionList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/payment/get_wallet_transaction_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this API to fetch the detailed amount of offline adjustment.
     * @param  array  $parameters
     * @return ResponseData
     */
    public function getPayoutDetail($parameters = []): ResponseData
    {
        return $this->post('/api/v2/payment/get_payout_detail', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * @param array $parameters
     * @return ResponseData
     */
    public function getEscrowDetail($parameters = []): ResponseData
    {
        return $this->get('/api/v2/payment/get_escrow_detail', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * @param array $parameters
     * @return ResponseData
     */
    public function getEscrowList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/payment/get_escrow_list', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * @param array $parameters
     * @return ResponseData
     */
    public function getIncomeDetail($parameters = []): ResponseData
    {
        return $this->get('/api/v2/payment/get_income_detail', ClientV2::API_TYPE_SHOP, $parameters);
    }

}
