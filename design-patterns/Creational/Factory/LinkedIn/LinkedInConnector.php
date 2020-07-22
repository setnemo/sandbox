<?php

namespace Design\Creational\Factory\LinkedIn;

use Design\Creational\Factory\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
    private $email;

    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): SocialNetworkConnector
    {
        echo "Send HTTP API request to log in user $this->email with " . "password $this->password\n";
        return $this;
    }

    public function logOut(): SocialNetworkConnector
    {
        echo "Send HTTP API request to log out user $this->email\n";
        return $this;
    }

    public function createPost(string $content): SocialNetworkConnector
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline with content:\n>{$content}\n";
        return $this;
    }
}
