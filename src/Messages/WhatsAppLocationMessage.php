<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Media\LinkID;
use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppLocationMessage extends WhatsAppMessage
{
    private $name;
    private $address;
    private $latitude;
    private $longitude;

    public function __construct($to)
    {
        parent::__construct($to);
    }

    public function send()
    {
        $this->client->sendLocation($this->to, $this->longitude, $this->latitude, $this->name, $this->address);
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }

    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}