<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class TierVariant extends RequestParameters
{
    public function getName(): string
    {
        return $this->parameters['name'];
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->parameters['name'] = $name;

        return $this;
    }

    public function getOptionList(): TierVariantOptionList
    {
        return $this->parameters['option_list'];
    }

    /**
     * @param TierVariantOptionList $optionList
     * @return $this
     */
    public function setOptionList(TierVariantOptionList $optionList)
    {
        $this->parameters['option_list'] = $optionList;

        return $this;
    }

}
