<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class RemoveVariation extends RequestParameters
{
    use VariationIdTrait;
    use ItemTrait;
}
