<?php

namespace Design\Structural\Bridge\Pages;

use Design\Structural\Bridge\Render\Renderer;

abstract class Page
{
    /**
     * @var Renderer
     */
    protected $renderer;

    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}
