<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\RequestParameters;

class StyleShippingDocument extends RequestParameters
{
    public function getTextStyle(): bool
    {
        return $this->parameters['text_style'];
    }

    /**
     * @param bool $text_style
     * @return $this
     */
    public function setTextStyle(Array $text_style)
    {
        $this->parameters['text_style'] = $text_style;

        return $this;
    }

    public function getFontSize(): bool
    {
        return $this->parameters['font_size'];
    }

    /**
     * @param bool $font_size
     * @return $this
     */
    public function setFontSize(Int $font_size)
    {
        $this->parameters['font_size'] = $font_size;

        return $this;
    }

    public function getTextColor(): bool
    {
        return $this->parameters['text_color'];
    }

    /**
     * @param bool $text_color
     * @return $this
     */
    public function setTextColor(String $text_color)
    {
        $this->parameters['text_color'] = $text_color;

        return $this;
    }

    public function getImageWidth(): bool
    {
        return $this->parameters['image_width'];
    }

    /**
     * @param bool $image_width
     * @return $this
     */
    public function setImageWidth(Int $image_width)
    {
        $this->parameters['image_width'] = $image_width;

        return $this;
    }

    public function getHAlign(): bool
    {
        return $this->parameters['h_align'];
    }

    /**
     * @param bool $h_align
     * @return $this
     */
    public function setHAlign(String $h_align)
    {
        $this->parameters['h_align'] = $h_align;

        return $this;
    }
}
