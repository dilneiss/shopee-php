<?php

namespace Shopee\Nodes\Item\Parameters;

trait VariationIdTrait
{
    public function getModelId(): int
    {
        return $this->parameters['model_id'];
    }

    /**
     * Set the Shopee's unique identifier for an item
     *
     * @param int $itemId
     * @return $this
     */
    public function setModelId(int $itemId)
    {
        $this->parameters['model_id'] = $itemId;

        return $this;
    }
}
