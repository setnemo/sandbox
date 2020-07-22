<?php

namespace Design\Creational\Factory\Facebook;

use Design\Creational\Factory\SocialNetworkConnector;
use Design\Creational\Factory\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private $login;
    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
