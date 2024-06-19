<?php

namespace kinsta\profile;

use kinsta\Teams;
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