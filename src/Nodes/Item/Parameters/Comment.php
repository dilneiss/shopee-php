<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Comment extends RequestParameters
{
    public function getCommentId(): int
    {
        return $this->parameters['comment_id'];
    }

    /**
     * @param int $commentId
     * @return $this
     */
    public function setCommentId(int $commentId)
    {
        $this->parameters['comment_id'] = $commentId;

        return $this;
    }

    public function getComment(): string
    {
        return $this->parameters['comment'];
    }

    /**
     * @param string $comment
     * @return $this
     */
    public function setComment(string $comment)
    {
        $this->parameters['comment'] = $comment;

        return $this;
    }

    
}
