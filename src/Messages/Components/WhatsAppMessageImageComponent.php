<?php

namespace Rockbuzz\LaraWppCloudApi\Messages\Components;

use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppMessageImageComponent extends WhatsAppMessageComponent
{
    private $url;
    private $caption;

    public function __construct(string $url, string $caption = "")
    {
        $this->url = $url;
        $this->caption = $caption;
    }

    public function toArray()
    {
        return [
            'type' => 'image',
            'image' => [
                'link' => $this->url,
                'caption' => $this->caption
            ]
        ];   
    }
}