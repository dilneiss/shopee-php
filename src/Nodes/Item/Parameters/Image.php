<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Image extends RequestParameters
{
    public function getImageId(): string
    {
        return $this->parameters['image_id'];
    }

    /**
     * @param string $image_url
     * @return $this
     */
    public function setImageId(string $image_url)
    {
        $this->parameters['image_id'] = $image_url;

        return $this;
    }
}
