<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class AttributeValue extends RequestParameters
{
    public function getValueId(): int
    {
        return $this->parameters['value_id'];
    }

    /**
     * @param int $value_id
     * @return $this
     */
    public function setValueId(int $value_id)
    {
        $this->parameters['value_id'] = $value_id;

        return $this;
    }

    public function getOriginalValueName(): string
    {
        return $this->parameters['original_value_name'];
    }

    /**
     * @param string $original_value_name
     * @return $this
     */
    public function setOriginalValueName(string $original_value_name)
    {
        $this->parameters['original_value_name'] = $original_value_name;

        return $this;
    }

    public function getValueUnit(): string
    {
        return $this->parameters['value_unit'];
    }

    /**
     * @param string $unit
     * @return $this
     */
    public function setValueUnit(string $unit)
    {
        $this->parameters['value_unit'] = $unit;

        return $this;
    }
}
