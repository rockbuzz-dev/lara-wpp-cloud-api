<?php

namespace Rockbuzz\LaraWppCloudApi\Messages\Components;

use Netflie\WhatsAppCloudApi\Message\Template\Component;

abstract class WhatsAppMessageComponent
{
    abstract function toArray();
}