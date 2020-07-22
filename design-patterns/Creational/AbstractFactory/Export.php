<?php

namespace Design\Creational\AbstractFactory;

class Export
{
    private $fileName;
    private $payload;

    public function __construct(string $fileName, array $payload)
    {
        $this->fileName = $fileName;
        $this->payload = $payload;
    }

    public function execute(TemplateExportFactory $exportFactory)
    {
        $template = $exportFactory->createTemplate($this->payload);
        $export = $exportFactory->prepareExport($template, $this->fileName);
        $export->save();
    }
}
