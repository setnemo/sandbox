<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Design\Creational\Factory\Facebook\FacebookPoster;
use Design\Creational\Factory\LinkedIn\LinkedInPoster;
use Design\Creational\Factory\SocialNetworkPoster;

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
}

echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));
