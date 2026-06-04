<?php

namespace Shopee\Nodes\Chat\Parameters;

use Shopee\RequestParameters;

class GetMessages extends RequestParameters
{
    public function getMessageIdList()
    {
        return $this->parameters['message_id_list'];
    }

    /**
     * @param int $message_id_list
     * @return $this
     */
    public function setMessageIdList($message_id_list)
    {
        $this->parameters['message_id_list'] = $message_id_list;

        return $this;
    }

    public function getConversationId()
    {
        return $this->parameters['conversation_id'];
    }

    /**
     * @param int $conversation_id
     * @return $this
     */
    public function setConversationId(int $conversation_id)
    {
        $this->parameters['conversation_id'] = $conversation_id;

        return $this;
    }

    public function getPageSize(){
        return $this->parameters['page_size'];
    }

    /**
     * @param MessageContent
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->parameters['page_size'] = $page_size;

        return $this;
    }

    public function getOffset(){
        return $this->parameters['offset'];
    }

    /**
     * @param MessageContent
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->parameters['offset'] = $offset;

        return $this;
    }
}
