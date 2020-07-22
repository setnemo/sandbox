<?php

namespace Design\Structural\Decorator;

class TextFormat implements InputFormat
{
    /**
     * @var InputFormat
     */
    protected $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}
