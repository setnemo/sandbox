<?php

namespace Design\Creational\AbstractFactory\Json;

use Design\Creational\AbstractFactory\Template;

class JsonTemplate implements Template
{
    private $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public function preparePayload(): string
    {
        return json_encode($this->payload);
    }
}
