<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Attribute extends RequestParameters
{
    public function getAttributeId(): int
    {
        return $this->parameters['attribute_id'];
    }

    /**
     * @param int $attributeId
     * @return $this
     */
    public function setAttributeId(int $attributeId)
    {
        $this->parameters['attribute_id'] = $attributeId;

        return $this;
    }

    public function getValueList(): AttributeValueList
    {
        return $this->parameters['attribute_value_list'];
    }

    /**
     * @param AttributeValueList $valueList
     * @return $this
     */
    public function setValueList(AttributeValueList $valueList)
    {
        $this->parameters['attribute_value_list'] = $valueList;

        return $this;
    }
}
