<?php

namespace Shopee\Nodes\BundleDeal\Parameters;

use Shopee\Nodes\Item\Parameters\ItemTrait;
use Shopee\RequestParameters;

class BundleDealItem extends RequestParameters
{
    use ItemTrait;

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
