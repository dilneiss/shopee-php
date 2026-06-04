<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\Nodes\Logistics\Parameters\StyleShippingDocument;
use Shopee\RequestParameters;

class RecipientAddressInfo extends RequestParameters
{
    public function getKey(): bool
    {
        return $this->parameters['key'];
    }

    /**
     * @param bool $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->parameters['key'] = $key;

        return $this;
    }
    // /**
    //  * @param StyleShippingDocument[] $recipient_address_info
    //  * @return $this
    //  */
    public function setStyleShippingDocument(StyleShippingDocument $recipient_address_info)
    {
        $this->parameters['style'] = $recipient_address_info->toArray();
        return $this;
    }
}
