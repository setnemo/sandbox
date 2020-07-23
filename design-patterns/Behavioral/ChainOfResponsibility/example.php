<?php

use Design\Behavioral\ChainOfResponsibility\RoleCheckMiddleware;
use Design\Behavioral\ChainOfResponsibility\Server;
use Design\Behavioral\ChainOfResponsibility\ThrottlingMiddleware;
use Design\Behavioral\ChainOfResponsibility\UserExistsMiddleware;

require __DIR__ . '/../../../vendor/autoload.php';

$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

$middleware = new ThrottlingMiddleware(2);
$middleware
    ->linkWith(new UserExistsMiddleware($server))
    ->linkWith(new RoleCheckMiddleware);

$server->setMiddleware($middleware);


do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);
