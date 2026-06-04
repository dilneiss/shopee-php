<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameterCollection;
use Shopee\RequestParametersInterface;

class SubItemList extends RequestParameterCollection
{
    /**
     * @param SubItem|RequestParametersInterface $parameter
     * @return $this
     */
    public function add(RequestParametersInterface $parameter)
    {
        parent::add($parameter);

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     * @throws \ReflectionException
     */
    public function fromArray(array $parameters)
    {
        foreach ($parameters as $parameter) {
            $this->add(new SubItem($parameter));
        }
        return $this;
    }
}
