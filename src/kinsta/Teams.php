<?php

namespace kinsta;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Teams extends PluginBase {

    use SingletonTrait;

    public function onLoad(): void {
        self::setInstance($this);
    }

    public function onEnable(): void {
        
    }

}