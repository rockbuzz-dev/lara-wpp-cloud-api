<?php

namespace Rockbuzz\LaraWppCloudApi\Messages;

use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Rockbuzz\LaraWppCloudApi\Messages\Components\WhatsAppMessageComponent;

class WhatsAppTemplateMessage extends WhatsAppMessage
{
    private $template;
    private $headerComponent;
    private $bodyComponent;
    private $buttonsComponent;

    public function __construct($to)
    {
        parent::__construct($to);
        $this->bodyComponent = [];
        $this->buttonsComponent = [];
    }

    public function send()
    {
        $header = $this->headerComponent ? [$this->headerComponent->toArray()] : [];
        $body = [];
        foreach($this->bodyComponent as $bodyComponent) {
            array_push($body, $bodyComponent->toArray());
        }

        $components = new Component(
            $header, 
            $body, 
            $this->buttonsComponent
        );

        $this->client->sendTemplate($this->to, $this->template, $this->language, $components);
    }

    public function setTemplate(string $name)
    {
        $this->template = $name;
        return $this;
    }

    public function addHeaderComponent(WhatsAppMessageComponent $component)
    {
        $this->headerComponent = $component;
        return $this;
    }
    
    public function addBodyComponent(WhatsAppMessageComponent $component)
    {
        array_push($this->bodyComponent, $component);
        return $this;
    }
}