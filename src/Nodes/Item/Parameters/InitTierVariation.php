<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class InitTierVariation extends RequestParameters
{
    use ItemTrait;


    public function getTierVariation(): TierVariants
    {
        return $this->parameters['tier_variation'];
    }

    public function setTierVariation(TierVariants $tier_variants)
    {
        $this->parameters['tier_variation'] = $tier_variants;
    }

    public function getModel(): Variations
    {
        return $this->parameters['model'];
    }

    public function setModel(Variations $variations)
    {
        $this->parameters['model'] = $variations;
    }
}
