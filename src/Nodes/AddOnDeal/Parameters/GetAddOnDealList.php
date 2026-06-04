<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class GetAddOnDealList extends RequestParameters
{
    public function getPromotionStatus(): string
    {
        return $this->parameters['promotion_status'];
    }

    /**
     * @param string $promotion_status
     * @return $this
     */
    public function setPromotionStatus(string $promotion_status)
    {
        $this->parameters['promotion_status'] = $promotion_status;

        return $this;
    }

    public function getPageNo(): int
    {
        return $this->parameters['page_no'];
    }

    /**
     * @param int $page_no
     * @return $this
     */
    public function setPageNo(int $page_no)
    {
        $this->parameters['page_no'] = $page_no;

        return $this;
    }

    public function getPageSize(): int
    {
        return $this->parameters['page_size'];
    }

    /**
     * @param int $page_size
     * @return $this
     */
    public function setPageSize(int $page_size)
    {
        $this->parameters['page_size'] = $page_size;

        return $this;
    }
}
