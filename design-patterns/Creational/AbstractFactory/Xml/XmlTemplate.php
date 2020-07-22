<?php

namespace Design\Creational\AbstractFactory\Xml;

use Design\Creational\AbstractFactory\Template;
use SimpleXMLElement;

class XmlTemplate implements Template
{
    private $payload;

    private $xml;

    public function __construct(array $payload, SimpleXMLElement $xml = null)
    {
        $this->payload = $payload;
        $this->xml = $xml;
    }

    public function preparePayload(): string
    {
        return $this->array2xml($this->payload, $this->xml);
    }

    private function array2xml($array, SimpleXMLElement $xml = null): string
    {
        if ($xml === null) {
            $xml = new SimpleXMLElement('<payload/>');
        }
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->array2xml($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, $value);
            }
        }
        return $xml->asXML();
    }
}
