<?php

namespace Design\Creational\Factory\LinkedIn;

use Design\Creational\Factory\SocialNetworkConnector;
use Design\Creational\Factory\SocialNetworkPoster;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email;
    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
