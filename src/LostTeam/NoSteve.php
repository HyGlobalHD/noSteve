<?php
namespace LostTeam;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
use pocketmine\event\player\PlayerPreLoginEvent;

class NoSteve extends PluginBase implements Listener {

  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->notice(Color::GREEN."Enabled!");
  }
  public function onJoin(PlayerPreLoginEvent $event) {
    $name=$event->getPlayer()->getName();
    if($name=="Steve") {
      $player->kick(Color::RED . "Please change your username. Don't use Steve.",false);
      $event->setCancelled();
    }
  }
  public function onDisable() {
    $this->getLogger()->notice(Color::GREEN."Disabled!");
  }
}
