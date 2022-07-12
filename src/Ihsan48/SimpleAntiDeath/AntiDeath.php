<?php

namespace Ihsan48\SimpleAntiDeath;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

use pocketmine\world\World;

use Ihsan48\SimpleAntiDeath\task\AntiDeathTask;

class AntiDeath extends PluginBase {

    public Config $cfg;

    public array $enableInWorlds = [];

    public function onLoad() : void {
        $this->saveResource("config.yml");
        $this->reloadConfig();
        $this->checkVersion();
    }

    public function onEnable() : void {
        $this->cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        $this->getScheduler()->scheduleRepeatingTask(new AntiDeathTask($this), 20);
        $this->enableInWorlds = $this->cfg->get("Enable-In-Worlds");
    }

    public function checkVersion() : void {
        if ($this->getConfig()->get("config-version") != 1.0.0) {
            $this->getLogger()->notice("Your configuration is Outdate!");
            $this->getLogger()->info("Your old config.yml is renamed as old-config.yml");
            @rename($this->getDataFOlder() . "config.yml", "old-config.yml");
            $this->saveResource("config.yml");
        }
    }

    public function checkWorlds(World $world) {
        if (!isset($this->enableInWorlds)) return;

        $worldName = $world->getFolderName();

        if (in_array($worldName, $this->enableInWorlds)) {
            return;
        }
    }
}
