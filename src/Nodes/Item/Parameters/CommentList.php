<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameterCollection;
use Shopee\Nodes\Item\Parameters\Comment;
use Shopee\RequestParametersInterface;

class CommentList extends RequestParameterCollection
{
    
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
            $this->add(new Comment($parameter));
        }

        return $this;
    }
    
}
