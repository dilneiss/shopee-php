<?php

namespace Shopee\Nodes\FlashSale\Parameters;

use Shopee\Nodes\FlashSale\Parameters\ItemModel;
use Shopee\RequestParameterCollection;
use Shopee\RequestParameters;
use Shopee\RequestParametersInterface;

class ItemModelList extends RequestParameterCollection
{
    /**
     * @param ItemModel|RequestParametersInterface $parameter
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
     */
    public function fromArray(array $parameters)
    {
        foreach ($parameters as $parameter) {
            $this->add(new ItemModel($parameter));
        }

        return $this;
    }
}
