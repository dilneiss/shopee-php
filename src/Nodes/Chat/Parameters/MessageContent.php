<?php

namespace Shopee\Nodes\Chat\Parameters;

use Shopee\RequestParameters;

class MessageContent extends RequestParameters
{
    public function getText(): string
    {
        return $this->parameters['text'];
    }

    /**
     * @param int $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->parameters['text'] = $text;

        return $this;
    }

    public function getImageUrl(): string
    {
        return $this->parameters['image_url'];
    }

    /**
     * @param string $image_url
     * @return $this
     */
    public function setImageUrl(string $image_url)
    {
        $this->parameters['image_url'] = $image_url;

        return $this;
    }

    public function getItemId()
    {
        return $this->parameters['item_id'];
    }

    /**
     * @param  $item_id
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->parameters['item_id'] = $item_id;
        return $this;
    }

    public function getOrderSn(): string
    {
        return $this->parameters['order_sn'];
    }

    /**
     * @param string $order_sn
     * @return $this
     */
    public function setOrderSn(string $order_sn)
    {
        $this->parameters['order_sn'] = $order_sn;
        return $this;
    }
}
