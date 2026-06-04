<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateSizeChart extends RequestParameters
{
    use ItemTrait;

    public function getSizeChart(): string
    {
        return $this->parameters['size_chart'];
    }

    /**
     * size chart image id
     *
     * @param string size_chart_id
     * @return $this
     */
    public function setSizeChart(string $size_chart_id)
    {
        $this->parameters['size_chart'] = $size_chart_id;

        return $this;
    }
}
