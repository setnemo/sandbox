<?php

namespace Design\Creational\Factory;

interface SocialNetworkConnector
{
    public function logIn(): SocialNetworkConnector;

    public function logOut(): SocialNetworkConnector;

    public function createPost(string $content): SocialNetworkConnector;
}
