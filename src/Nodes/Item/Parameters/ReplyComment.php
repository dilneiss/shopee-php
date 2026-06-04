<?php

namespace Shopee\Nodes\Item\Parameters;
use Shopee\Nodes\Item\Parameters\CommentList;
use Shopee\RequestParameters;

class ReplyComment extends RequestParameters
{
    public function getCommentList(): bool
    {
        return $this->parameters['comment_list'];
    }

    /**
     * @param array $comment_list
     * @return $this
     */
    public function setCommentList(CommentList $comment_list)
    {
        $this->parameters['comment_list'] = $comment_list;

        return $this;
    }
}
