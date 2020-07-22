<?php

namespace Design\Creational\Factory\Facebook;

use Design\Creational\Factory\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private $login;

    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): SocialNetworkConnector
    {
        echo "Send HTTP API request to log in user $this->login with " . "password $this->password\n";
        return $this;
    }

    public function logOut(): SocialNetworkConnector
    {
        echo "Send HTTP API request to log out user $this->login\n";
        return $this;
    }

    public function createPost(string $content): SocialNetworkConnector
    {
        echo "Send HTTP API requests to create a post in Facebook timeline with content:\n>{$content}\n";
        return $this;
    }
}
