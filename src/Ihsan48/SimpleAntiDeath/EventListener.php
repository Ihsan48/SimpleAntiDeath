<?php

namespace Ihsan48\SimpleAntiDeath;

use pocketmine\player\Player;

use pocketmine\world\World;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\player\PlayerExhaustEvent;

use Ihsan48\SimpleAntiDeath\AntiDeath;

class EventListener implements Listener {
    
    public function __construct(private AntiDeath $plugin) {
        $this->plugin = $plugin;
    }

    public function onDamage(EntityDamageEvent $ev) {
        $entity = $ev->getEntity();
        $cause = $ev->getCause();
        if ($entity instanceof Player) {
            if ($cause === EntityDamageEvent::CAUSE_CONTACT) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_ENTITY_ATTACK) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_PROJECTILE) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_SUFFOCATION) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_FALL) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_FIRE) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_FIRE_TICK) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_LAVA) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_DROWNING()) {
                if ($this->plugin->checkWorlds($entity->getWorld()) {
                    $ev->cancel();
                }
            }
                    
            if ($cause === EntityDamageEvent::CAUSE_BLOCK_EXPLOSION()) {
                if ($this->plugin->checkWorlds($entity->getWorld())) {
                    $ev->cancel();
                }
            }

            if ($cause === EntityDamageEvent::CAUSE_ENTITY_EXPLOSION()) {
                if ($this->plugin->checkWorlds($entity->getWorld)) {
                    $ev->cancel();
                }
            }
        }
    }
}
