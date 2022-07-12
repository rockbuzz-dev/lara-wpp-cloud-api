<?php

namespace Rockbuzz\LaraWppCloudApi\Messages\Components;

use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppMessageCurrencyComponent extends WhatsAppMessageComponent
{
    private $cents;
    private $default;
    private $code;

    public function __construct(int $cents, int $default = 0, string $code = "BRL")
    {
        $this->cents = $cents;
        $this->default = $default;
        $this->code = $code;
    }

    public function toArray()
    {
        return [
            'type' => 'currency',
            'currency' => [
                'fallback_value' => $this->default,
                'code' => $this->code,
                'amount_1000' => $this->cents
            ]
        ];
    }
}