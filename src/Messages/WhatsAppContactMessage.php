<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Contact\ContactName;
use Netflie\WhatsAppCloudApi\Message\Contact\Phone;
use Netflie\WhatsAppCloudApi\Message\Contact\PhoneType;
use Netflie\WhatsAppCloudApi\Message\Template\Component;

class WhatsAppContactMessage extends WhatsAppMessage
{
    private $firstName;
    private $lastName;
    private $phoneNumber;

    public function __construct($to)
    {
        parent::__construct($to);
    }

    public function send()
    {
        $this->client->sendContact($this->to, new ContactName($this->firstName, $this->lastName), new Phone($this->phoneNumber, PhoneType::CELL()));
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}