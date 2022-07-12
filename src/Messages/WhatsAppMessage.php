<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

abstract class WhatsAppMessage
{
    protected $to;
    protected $client;
    protected $language;

    public function __construct($to)
    {
        $this->to = $to;
        $this->language = env('WHATSAPP_LANGUAGE', 'en_US');
        $this->client = new WhatsAppCloudApi([
            'from_phone_number_id' => env('WHATSAPP_FROM_NUMBER'),
            'access_token' => env('WHATSAPP_ACCESS_TOKEN')
        ]);
    }

    abstract public function send();
}