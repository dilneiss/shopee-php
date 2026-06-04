<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateTierVariation extends RequestParameters
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

}
