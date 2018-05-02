<?php

declare(strict_types = 1);

namespace Flo\Tournoi\Persistence\Player\DataTransferObjects;

class Player
{
    private
        $uuid,
        $name;

    public function __construct(string $uuid, string $name)
    {
        $this->uuid = $uuid;
        $this->name = $name;
    }

    public function uuid(): string
    {
        return $this->uuid;
    }

    public function name(): string
    {
        return $this->name;
    }
}