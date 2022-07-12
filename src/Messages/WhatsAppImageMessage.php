<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Media\LinkID;
use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppImageMessage extends WhatsAppMessage
{
    private $link;
    private $caption;

    public function __construct($to)
    {
        parent::__construct($to);
    }

    public function send()
    {
        $this->client->sendImage($this->to, new LinkID($this->link), $this->caption);
    }

    public function setLink(string $link)
    {
        $this->link = $link;
        return $this;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
}