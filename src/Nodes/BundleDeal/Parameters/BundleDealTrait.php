<?php


namespace Shopee\Nodes\BundleDeal\Parameters;

trait BundleDealTrait
{
    public function getBundleDealId(): int
    {
        return $this->parameters['bundle_deal_id'];
    }

    public function setBundleDealId(int $bundle_deal_id)
    {
        $this->parameters['bundle_deal_id'] = $bundle_deal_id;

        return $this;
    }
}
