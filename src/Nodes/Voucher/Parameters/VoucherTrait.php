<?php


namespace Shopee\Nodes\Voucher\Parameters;

trait VoucherTrait
{
    public function getVoucherId(): int
    {
        return $this->parameters['voucher_id'];
    }

    /**
     * @param int $voucher_id
     * @return $this
     */
    public function setVoucherId(int $voucher_id)
    {
        $this->parameters['voucher_id'] = $voucher_id;

        return $this;
    }
}
