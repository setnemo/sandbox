<?php

namespace Design\Structural\Proxy;

interface Downloader
{
    public function download(string $url): string;
}