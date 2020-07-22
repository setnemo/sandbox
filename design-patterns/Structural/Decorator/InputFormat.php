<?php

namespace Design\Structural\Decorator;

interface InputFormat
{
    public function formatText(string $text): string;
}