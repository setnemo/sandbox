<?php

use Design\Structural\Proxy\CachingDownloader;
use Design\Structural\Proxy\Downloader;
use Design\Structural\Proxy\SimpleDownloader;

require __DIR__ . '/../../../vendor/autoload.php';

function clientCode(Downloader $subject)
{
    $result = $subject->download("https://example.com/");
    $result = $subject->download("https://example.com/");
}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader;
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);
