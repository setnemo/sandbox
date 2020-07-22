<?php

use Design\Creational\AbstractFactory\Export;
use Design\Creational\AbstractFactory\Json\JsonTemplateExportFactory;
use Design\Creational\AbstractFactory\Xml\XmlTemplateExportFactory;

require __DIR__ . '/../../../vendor/autoload.php';

$export = new Export('test', [
    'employees' => [
        [
            'employee' => [
                'firstName' => 'John',
                'lastName' => 'Doe',
            ]
        ],
        [
            'employee' => [
                'firstName' => 'Anna',
                'lastName' => 'Smith',
            ]
        ],

    ]
]);

$export->execute(new JsonTemplateExportFactory);
$export->execute(new XmlTemplateExportFactory);