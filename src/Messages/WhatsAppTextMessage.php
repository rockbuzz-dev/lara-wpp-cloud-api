<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppTextMessage extends WhatsAppMessage
{
    private $body;

    public function __construct($to)
    {
        parent::__construct($to);
    }

    public function send()
    {
        $this->client->sendTextMessage($this->to, $this->body);
    }

    public function setBody(string $body)
    {
        $this->body = $body;
        return $this;
    }
}