<?php

namespace Design\Creational\AbstractFactory;

interface TemplateExportFactory
{
    public function createTemplate(array $payload): Template;

    public function prepareExport(Template $template, string $fileName): TemplateExport;
}