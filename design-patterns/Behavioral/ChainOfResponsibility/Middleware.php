<?php

namespace Design\Behavioral\ChainOfResponsibility;

abstract class Middleware
{
    /**
     * @var Middleware
     */
    private $next;

    public function linkWith(Middleware $next): Middleware
    {
        $this->next = $next;

        return $next;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->check($email, $password);
    }
}
