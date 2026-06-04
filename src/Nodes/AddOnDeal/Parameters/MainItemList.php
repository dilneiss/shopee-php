<?php

namespace Shopee\Nodes\AddOnDeal\Parameters;

use Shopee\RequestParameterCollection;
use Shopee\RequestParametersInterface;

class MainItemList extends RequestParameterCollection
{
    /**
     * @param MainItem|RequestParametersInterface $parameter
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
            $this->add(new MainItem($parameter));
        }

        return $this;
    }
}
