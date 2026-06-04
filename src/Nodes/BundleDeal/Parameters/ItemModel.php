<?php

namespace Shopee\Nodes\BundleDeal\Parameters;

use Shopee\Nodes\Item\Parameters\VariationIdTrait;
use Shopee\RequestParameters;

class ItemModel extends RequestParameters
{
    use VariationIdTrait;

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
