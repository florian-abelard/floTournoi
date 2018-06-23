<?php

declare(strict_types = 1);

namespace Flo\Tournoi\Domain\Group\Entities;

use Flo\Tournoi\Domain\Core\ValueObjects\Uuid;
use Flo\Tournoi\Domain\Game\Collections\GameCollection;
use Flo\Tournoi\Domain\Game\Entities\Game;
use Flo\Tournoi\Domain\Player\Collections\PlayerCollection;
use Flo\Tournoi\Domain\Player\Entities\Player;

class Group
{
    private
        $uuid,
        $label,
        $placesNumber,
        $tournamentUuid,
        $players,
        $games;

    public function __construct(Uuid $uuid, Uuid $tournamentUuid)
    {
        $this->uuid = $uuid;
        $this->tournamentUuid = $tournamentUuid;

        $this->players = new PlayerCollection();
        $this->games = new GameCollection();
    }

    public function uuid(): Uuid
    {
        return $this->uuid;
    }

    public function label(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function placesNumber(): int
    {
        return $this->placesNumber;
    }

    public function setPlacesNumber(int $max): self
    {
        $this->placesNumber = $max;

        return $this;
    }

    public function tournamentUuid(): Uuid
    {
        return $this->tournamentUuid;
    }

    public function players(): PlayerCollection
    {
        return $this->players;
    }

    public function addPlayer(Player $player): self
    {
        $players->add($player);
    }

    public function games(): GameCollection
    {
        return $this->games;
    }

    public function addGame(Game $game): self
    {
        $players->add($game);
    }
}