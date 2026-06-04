<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Brand extends RequestParameters
{
    public function getBrandId(): int
    {
        return $this->parameters['brand_id'];
    }

    /**
     * @param int $brand_id
     * @return $this
     */
    public function setBrandId(int $brand_id)
    {
        $this->parameters['brand_id'] = $brand_id;

        return $this;
    }

    public function getOriginalBrandName(): string
    {
        return $this->parameters['original_brand_name'];
    }

    /**
     * @param string $brand_name
     * @return $this
     */
    public function setOriginalBrandName(string $brand_name)
    {
        $this->parameters['original_brand_name'] = $brand_name;

        return $this;
    }
}
