<?php
namespace Ihsan48\SimpleAntiDeath\task;

use pocketmine\scheduler\Task;

use Ihsan48\SimpleAntiDeath\AntiDeath;

class AntiDeathTask extends Task {

    public function __construct(private AntiDeath $plugin) {
        $this->plugin = $plugin;
    }

    public function onRun() : void {
        foreach ($this->plugin->getServer()->getWorldManager()->getWorldByName($this->plugin->enableInWorlds)->getPlayers() as $players) {
            $players->setAirSupplyTicks($players->getMaxAirSupplyTicks());
        }
    }
} 
