<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class TierVariantOption extends RequestParameters
{
    public function getOption(): string
    {
        return $this->parameters['option'];
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setOption(string $name)
    {
        $this->parameters['option'] = $name;

        return $this;
    }

    public function getImage(): Image
    {
        return $this->parameters['image'];
    }

    /**
     * @param Image $image
     * @return $this
     */
    public function setImage(Image $image)
    {
        $this->parameters['image'] = $image;

        return $this;
    }

}
