<?php

namespace Shopee\Nodes\Order\Parameters;

use Shopee\RequestParameters;

class AddInvoiceData extends RequestParameters
{
    public function getOrderSn(): string
    {
        return $this->parameters['order_sn'];
    }

    /**
     * @param string $order_sn
     * @return $this
     */
    public function setOrderSn(string $order_sn)
    {
        $this->parameters['order_sn'] = $order_sn;

        return $this;
    }

    public function getInvoiceData(): InvoiceData
    {
        return $this->parameters['invoice_data'];
    }

    /**
     * @param  InvoiceData $invoice_data
     * @return $this
     */
    public function setInvoiceData($invoice_data)
    {
        $this->parameters['invoice_data'] = $invoice_data;

        return $this;
    }

}
