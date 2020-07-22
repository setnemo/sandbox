<?php

namespace Design\Creational\AbstractFactory\Xml;

use Design\Creational\AbstractFactory\FileTemplateExport;
use Design\Creational\AbstractFactory\Template;
use Design\Creational\AbstractFactory\TemplateExport;
use Design\Creational\AbstractFactory\TemplateExportFactory;
use SimpleXMLElement;

class XmlTemplateExportFactory implements TemplateExportFactory
{
    private $xml;

    public function __construct(SimpleXMLElement $xml = null)
    {
        $this->xml = $xml;
    }

    public function createTemplate(array $payload): Template
    {
        return new XmlTemplate($payload, $this->xml);
    }

    public function prepareExport(Template $template, string $fileName): TemplateExport
    {
        return new FileTemplateExport($template, $fileName . ".xml");
    }
}
