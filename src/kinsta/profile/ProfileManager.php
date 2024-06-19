<?php

namespace kinsta\profile;

use pocketmine\utils\SingletonTrait;

class ProfileManager {

    use SingletonTrait;

    public array $profies = [];

    public function addProfile(string $name, string $file) {
        $this->profies[$name] = new Profile($name, $file);
    }

    public function getProfile(string $name) {
        return $this->profies[$name] ?? null;
    }

    public function getProfiles() {
        return $this->profies;
    }

}