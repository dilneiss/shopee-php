<?php

namespace Shopee\Nodes\Chat\Parameters;

use Shopee\RequestParameters;

class ReadConversation extends RequestParameters
{
    public function getConversationId()
    {
        return $this->parameters['conversation_id'];
    }

    /**
     * @param int $conversation_id
     * @return $this
     */
    public function setConversationId($conversation_id)
    {
        $this->parameters['conversation_id'] = $conversation_id;

        return $this;
    }

    public function getLastReadMessageId(): string
    {
        return $this->parameters['last_read_message_id'];
    }

    /**
     * @param string $last_read_message_id
     * @return $this
     */
    public function setLastReadMessageId(string $last_read_message_id)
    {
        $this->parameters['last_read_message_id'] = $last_read_message_id;

        return $this;
    }
}
