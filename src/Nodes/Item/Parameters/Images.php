<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameterCollection;
use Shopee\RequestParameters;
use Shopee\RequestParametersInterface;

class Images extends RequestParameters
{
    public function getImageIdList(): array
    {
        return $this->parameters['image_id_list'];
    }

    /**
     * @param array $image_id_list
     * @return $this
     */
    public function setImageIdList(array $image_id_list)
    {
        $this->parameters['image_id_list'] = $image_id_list;

        return $this;
    }
}
