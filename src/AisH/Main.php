<?php

namespace AisH;

use pocketmine\event\Listener;
use pocketmine\entity\Human;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;

class Main extends PluginBase implements Listener {
    public function onCommand(CommandSender $sender, Command $command,string $label, array $args) : bool{
                           if($command->getName () == "밥"){
		   $tag = "§b§l[§f시스템§b]§r§7 ";
		   $sender->sendMessage ( $tag .  "밥을 먹어서 배고픔이 꽉 찼습니다!");
      	               $sender->setFood(20);
                           return true;
        }
    }
}