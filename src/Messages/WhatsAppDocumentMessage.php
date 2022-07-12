<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Media\LinkID;
use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppDocumentMessage extends WhatsAppMessage
{
    private $link;
    private $name;
    private $caption;

    public function __construct($to)
    {
        parent::__construct($to);
    }

    public function send()
    {
        $this->client->sendDocument($this->to, new LinkID($this->link), $this->name, $this->caption);
    }

    public function setLink(string $link)
    {
        $this->link = $link;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
}