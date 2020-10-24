<?php

namespace Nice;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

 public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) :bool{

     switch($cmd->getName()){
         
     case "Nice":
       if(!$sender->hasPermision("Nice.cmd")){
       $sender->sendMessage(TF::RED . "Du hast keine Rechte diesen Command zu Benutzen");
       } else {
       $sender->sendMessage(TF::GREEN . "Du willst fly aber bekommst es nicht, Dafur bist du nun im Gamemode 1");
       $sender->setGamemode(1);
    }
   }
   break;
  }
  return true;
}
