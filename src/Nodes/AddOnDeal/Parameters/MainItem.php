<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameters;

class MainItem extends RequestParameters
{
    public function getItemId(): int
    {
        return $this->parameters['item_id'];
    }

    /**
     * @param int $item_id
     * @return $this
     */
    public function setItemId(int $item_id)
    {
        $this->parameters['item_id'] = $item_id;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->parameters['status'];
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->parameters['status'] = $status;

        return $this;
    }

}
