<?php

namespace Design\Behavioral\Mediator;

class User
{
    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }

    public function delete(): void
    {
        echo "User: I can now delete myself without worrying about the repository.\n";
        Events::getInstance()->trigger("users:deleted", $this, $this);
    }
}
