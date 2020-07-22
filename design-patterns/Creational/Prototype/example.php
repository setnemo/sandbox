<?php

use Design\Creational\Prototype\Author;
use Design\Creational\Prototype\Page;

require __DIR__ . '/../../../vendor/autoload.php';

function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    $page->addComment("Nice tip, thanks!");


    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    print_r($draft);
}

clientCode();
