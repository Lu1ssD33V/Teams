<?php

namespace kinsta\teams\profile;

use kinsta\teams\Teams;
use pocketmine\player\Player;

class Profile {

    public function __construct(
        public string $name,
    ) {}

    public function getName(): string {
        return $this->name;
    }

    public function getPlayer(): ?Player {
        return Teams::getInstance()->getServer()->getPlayerExact($this->getName());
    }

}