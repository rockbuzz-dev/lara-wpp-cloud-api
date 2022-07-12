<?php

namespace Rockbuzz\LaraWppCloudApi\Messages\Components;

use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppMessageDateTimeComponent extends WhatsAppMessageComponent
{
    private $datetime;
    private $format;

    public function __construct(\DateTime $datetime = new \DateTime(), string $format = 'd/m/Y H:i')
    {
        $this->datetime = $datetime;
        $this->format = $format;
    }

    public function toArray()
    {
        return [
            'type' => 'date_time',
            'date_time' => [
                'fallback_value' => $this->datetime->format($this->format)
            ]
        ];   
    }
}