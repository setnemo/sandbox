<?php

namespace Design\Creational\AbstractFactory;

class FileTemplateExport implements TemplateExport
{
    private $template;

    private $fileName;

    public function __construct(Template $template, string $fileName)
    {
        $this->fileName = $fileName;
        $this->template = $template;
    }

    public function save()
    {
        file_put_contents($this->fileName, $this->template->preparePayload());
    }
}