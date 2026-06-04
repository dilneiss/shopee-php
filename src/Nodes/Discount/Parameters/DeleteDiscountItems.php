<?php

namespace Shopee\Nodes\Discount\Parameters;

use Shopee\Nodes\Item\Parameters\ItemTrait;
use Shopee\Nodes\Item\Parameters\VariationIdTrait;
use Shopee\RequestParameters;

class DeleteDiscountItems extends RequestParameters
{
    use DiscountTrait;
    use ItemTrait;
    use VariationIdTrait;

}
