<?php

namespace Design\Creational\Factory;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn()
            ->createPost($content)
            ->logout();
    }
}
