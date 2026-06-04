<?php

namespace Shopee\Nodes\Logistics\Parameters;

use Shopee\Nodes\Item\Parameters\Logistic;
use Shopee\RequestParameterCollection;
use Shopee\RequestParameters;
use Shopee\RequestParametersInterface;

class ListOrderInput extends RequestParameterCollection
{


    /**
     * @param Logistic|RequestParametersInterface $parameter
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
            $this->add(new OrderPackageInput($parameter));
        }

        return $this;
    }
}
