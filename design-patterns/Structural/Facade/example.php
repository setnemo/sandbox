<?php

use Design\Structural\Facade\YouTubeDownloader;

require __DIR__ . '/../../../vendor/autoload.php';

function clientCode(YouTubeDownloader $facade)
{
    $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
}

$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
clientCode($facade);