<?php

namespace kinsta\teams\team;

use kinsta\teams\profile\Profile;
use pocketmine\utils\TextFormat;

class Team {

    public function __construct(
        public string $name,
        public array $members = []
    ) {}

    public function getName(): string {
        return $this->name;
    }

    public function disband(): void {
        //TODO: remove team
    }

    public function getMembers(): array {
        return $this->members;
    }

    public function addMember(Profile $member): void {
        $this->members[$member->getName()] = $member;
    }

    public function removeMember(Profile $member): void {
        if ($this->hasMember($member->getName())) {
            unset($this->members[$member->getName()]);
        }
    }

    public function getMember(string $name): ?Profile {
        return $this->members[$name] ?? null;
    }

    public function hasMember(string $name): bool {
        return isset($this->members[$name]);
    }

}