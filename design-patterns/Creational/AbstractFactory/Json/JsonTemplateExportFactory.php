<?php

namespace Design\Creational\AbstractFactory\Json;

use Design\Creational\AbstractFactory\FileTemplateExport;
use Design\Creational\AbstractFactory\Template;
use Design\Creational\AbstractFactory\TemplateExport;
use Design\Creational\AbstractFactory\TemplateExportFactory;

class JsonTemplateExportFactory implements TemplateExportFactory
{

    public function createTemplate(array $payload): Template
    {
        return new JsonTemplate($payload);
    }

    public function prepareExport(Template $template, string $fileName): TemplateExport
    {
        return new FileTemplateExport($template, $fileName . "json");
    }
}