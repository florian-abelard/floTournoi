<?php

declare(strict_types = 1);

namespace Flo\Tournoi\Tests\Domain\Player\Entities;

use Flo\Tournoi\Domain\Core\ValueObjects\Uuid;
use Flo\Tournoi\Domain\Player\Entities\Player;
use Flo\Tournoi\Persistence\Player\DataTransferObjects as DTO;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    private
        $uuid,
        $name,
        $points;

    public function setUp()
    {
        $this->uuid = new Uuid();
        $this->name = 'Roxane Abélard';
        $this->points = 501;
    }

    public function testCreateEntity()
    {
        $player = new Player($this->uuid, $this->name);
        $player->setPoints($this->points);

        $this->assertEquals($this->uuid, $player->uuid());
        $this->assertEquals($this->name, $player->name());
        $this->assertEquals($this->points, $player->points());
    }

    public function testToDTO()
    {
        $player = new Player($this->uuid, $this->name);
        $player->setPoints($this->points);

        $dto = $player->toDTO();

        $this->assertInstanceOf(DTO\Player::class, $dto);
        $this->assertSame($player->uuid()->value(), $dto->uuid());
    }
}
