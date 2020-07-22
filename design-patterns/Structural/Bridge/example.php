<?php

use Design\Structural\Bridge\Render\HTMLRenderer;
use Design\Structural\Bridge\Render\JsonRenderer;
use Design\Structural\Bridge\Pages\Page;
use Design\Structural\Bridge\Pages\ProductPage;
use Design\Structural\Bridge\Pages\SimplePage;
use Design\Structural\Bridge\Product;

require __DIR__ . '/../../../vendor/autoload.php';

function clientCode(Page $page)
{
    // ...

    echo $page->view();

    // ...
}

$HTMLRenderer = new HTMLRenderer;
$JSONRenderer = new JsonRenderer;

$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo "HTML view of a simple content page:\n";
clientCode($page);
echo "\n\n";

$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, rendered with the same client code:\n";
clientCode($page);
echo "\n\n";


$product = new Product("123", "Star Wars, episode1",
    "A long time ago in a galaxy far, far away...",
    "/images/star-wars.jpeg", 39.95);

$page = new ProductPage($HTMLRenderer, $product);
echo "HTML view of a product page, same client code:\n";
clientCode($page);
echo "\n\n";

$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, with the same client code:\n";
clientCode($page);
