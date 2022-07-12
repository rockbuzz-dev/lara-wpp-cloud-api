<?php

namespace Rockbuzz\LaraWppCloudApi\Messages\Components;

use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppMessageTextComponent extends WhatsAppMessageComponent
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function toArray()
    {
        return [
            'type' => 'text',
            'text' => $this->text
        ];   
    }
}