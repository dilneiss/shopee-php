<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Dimension extends RequestParameters
{
    public function getPackageHeight(): string
    {
        return $this->parameters['package_height'];
    }

    /**
     * @param int $height
     * @return $this
     */
    public function setPackageHeight(int $height)
    {
        $this->parameters['package_height'] = $height;

        return $this;
    }

    public function getPackageLength(): int
    {
        return $this->parameters['package_length'];
    }

    /**
     * @param int $length
     * @return $this
     */
    public function setPackageLength(int $length)
    {
        $this->parameters['package_length'] = $length;

        return $this;
    }

    public function getPackageWidth(): int
    {
        return $this->parameters['package_width'];
    }

    /**
     * @param int $width
     * @return $this
     */
    public function setPackageWidth(int $width)
    {
        $this->parameters['package_width'] = $width;

        return $this;
    }
}
