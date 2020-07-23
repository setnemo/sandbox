<?php

namespace Design\Behavioral\Command;

interface Command
{
    public function execute(): void;

    public function getId(): int;

    public function getStatus(): int;
}