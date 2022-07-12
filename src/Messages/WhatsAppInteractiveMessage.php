<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Rockbuzz\LaraWppCloudApi\Messages\Components\WhatsAppMessageComponent;

class WhatsAppInteractiveMessage extends WhatsAppMessage
{

    public function __construct($to)
    {
        parent::__construct($to);
    }

    public function send()
    {

    }
}