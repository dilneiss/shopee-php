<?php

namespace Shopee\Nodes\Chat\Parameters;

use Shopee\RequestParameters;

class Message extends RequestParameters
{
    public function getToId(): int
    {
        return $this->parameters['to_id'];
    }

    /**
     * @param int $to_id
     * @return $this
     */
    public function setToId(int $to_id)
    {
        $this->parameters['to_id'] = $to_id;

        return $this;
    }

    public function getMessageType(): string
    {
        return $this->parameters['message_type'];
    }

    /**
     * @param string $message_type
     * @return $this
     */
    public function setMessageType(string $message_type)
    {
        $this->parameters['message_type'] = $message_type;

        return $this;
    }

    public function getMessageContent(){
        return $this->parameters['content'];
    }

    /**
     * @param MessageContent
     * @return $this
     */
    public function setMessageContent($message_content)
    {
        $this->parameters['content'] = $message_content;

        return $this;
    }
}
