<?php

namespace Design\Behavioral\Mediator;

interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}