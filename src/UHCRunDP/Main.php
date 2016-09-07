<?php

/*
 *   ____               _ _    _ ______________   ____  __  ____  
    |  _ \             | | |  | |___  /  ____\ \ / /  \/  |/ __ \ 
    | |_) |_   _       | | |  | |  / /| |__   \ V /| \  / | |  | |
    |  _ <| | | |  _   | | |  | | / / |  __|   > < | |\/| | |  | |
    | |_) | |_| | | |__| | |__| |/ /__| |____ / . \| |  | | |__| |
    |____/ \__, |  \____/ \____//_____|______/_/ \_\_|  |_|\____/ 
            __/ |                                                 
           |___/                                                  
    plugin Not Completed
 */

namespace UHCRunDP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\Position;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\item\Item;
use pocketmine\inventory\InventoryBase;
use pocketmine\nbt\tag\IntTag;
use pocketmine\utils\TextFormat as Color;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		@mkdir($this->getDataFolder());
		$player1 = [
				
				"player1X" => 0,
				"player1Y" => 0,
				"player1Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player1);
		
		$player2 = [
				
				"player2X" => 0,
				"player2Y" => 0,
				"player2Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player2);
		
		$player3 = [
		
				"player3X" => 0,
				"player3Y" => 0,
				"player3Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player3);
		
		$player4 = [
		
				"player4X" => 0,
				"player4Y" => 0,
				"player4Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player4);
		
		$player5 = [
		
				"player5X" => 0,
				"player5Y" => 0,
				"player5Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player5);
		
		$player6 = [
		
				"player6X" => 0,
				"player6Y" => 0,
				"player6Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player6);
		
		$player7 = [
		
				"player3X" => 7,
				"player3Y" => 7,
				"player3Z" => 7,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player7);
		
		$player8 = [
		
				"player8X" => 0,
				"player8Y" => 0,
				"player8Z" => 0,
		];
		$cfg = new Config($this->getDataFolder(), "Config.yml", Config::YAML, $player8);
		$cfg->save();
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if($cmd->getName() == 'uhc'){
			switch(mt_rand(1,8)){
				case 1:
					$teamred = "Â§f[Â§lÂ§cREDÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamred" . $name);
					$xp1 = $this->getConfig()->get("player1X");
					$yp1 = $this->getConfig()->get("player1Y");
					$zp1 = $this->getConfig()->get("player1Z");
					$sender->teleport(new position($xp1, $yp1, $zp1));
					$this->getConfig()->save();
					break;
					
				case 2:
					$teamred = "Â§f[Â§lÂ§cREDÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamred" . $name);
					$xp2 = $this->getConfig()->get("player2X");
					$yp2 = $this->getConfig()->get("player2Y");
					$zp2 = $this->getConfig()->get("player2Z");
					$sender->teleport(new position($xp2, $yp2, $zp2));
					break;
					
				case 3:
					$teamblue = "Â§f[Â§lÂ§9BLUEÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamblue" . $name);
					$xp3 = $this->getConfig()->get("player3X");
					$yp3 = $this->getConfig()->get("player3Y");
					$zp3 = $this->getConfig()->get("player3Z");
					$sender->teleport(new position($xp3, $yp3, $zp3));
					$this->getConfig()->save();
					break;
					
				case 4:
					$teamblue = "Â§f[Â§lÂ§9BLUEÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamblue" . $name);
					$xp4 = $this->getConfig()->get("player4X");
					$yp4 = $this->getConfig()->get("player4Y");
					$zp4 = $this->getConfig()->get("player4Z");
					$sender->teleport(new position($xp4, $yp4, $zp4));
					$this->getConfig()->save();
					break;
					
				case 5:
					$teamyellow = "Â§f[Â§lÂ§eYELLOWÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamyellow" . $name);
					$xp5 = $this->getConfig()->get("player2X");
					$yp5 = $this->getConfig()->get("player2Y");
					$zp5 = $this->getConfig()->get("player2Z");
					$sender->teleport(new position($xp5, $yp5, $zp5));
					$this->getConfig()->save();
					break;
					
				case 6:
					$teamyellow = "Â§f[Â§lÂ§eYELLOWÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamyellow" . $name);
					$xp6 = $this->getConfig()->get("player6X");
					$yp6 = $this->getConfig()->get("player6Y");
					$zp6 = $this->getConfig()->get("player6Z");
					$sender->teleport(new position($xp6, $yp6, $zp6));
					$this->getConfig()->save();
					break;
					
				case 7:
					$teamgreen = "Â§f[Â§lÂ§aGREENÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamgreen" . $name);
					$xp7 = $this->getConfig()->get("player7X");
					$yp7 = $this->getConfig()->get("player7Y");
					$zp7 = $this->getConfig()->get("player7Z");
					$sender->teleport(new position($xp7, $yp7, $zp7));
					$this->getConfig()->save();
					break;
					
				case 8:
					$teamgreen = "Â§f[Â§lÂ§aGREENÂ§f]";
					$name = $player->getName();
					$sender->setNameTag("$teamgreen" . $name);
					$xp8 = $this->getConfig()->get("player8X");
					$yp8 = $this->getConfig()->get("player8Y");
					$zp8 = $this->getConfig()->get("player8Z");
					$sender->teleport(new position($xp8, $yp8, $zp8));
					$this->getConfig()->save();
			}
		}
	}
	
	public function onBlockBreaks(BlockBreakEvent $event){
		$player = $event->getPlayer();
		$block = $event->getBlock();
		$lapis = LAPIS_LAZULI;
		$spruce = SPRUCE_WOOD;
		$spruce1 = SPRUCE_WOOD_PLANK;
		$brich = BIRCH_WOOD;
		$brich1 = BIRCH_WOOD_PLANK;
		$jungel = JUNGLE_WOOD;
		$jungel1 = JUNGEL_WOOD_PLANK;
		$acacia = ACACIA_WOOD;
		$acacia1 = ACACIA_WOOD_PLANK;
		$dark = DARK_OAK_WOOD;
		$dark1 = DARK_OAK_WOOD_PLANK;
		
		if($block->getId() == 14){
			$player->getInventory()->addItem(item::get(266, 0, 1));
		}
		
		if($block->getId() == 15){
			$player->getInventory()->addItem(item::get(265, 0, 1));
		}
		
		if($block->getId() == 16){
			$player->getInventory()->addItem(item::get(50, 0, 5));
		}
		
		if($block->getId() == 21){
			$player->getInventory()->addItem(item::get($lapis, 0, 1));
		}
		
		if($block->getId() == 56){
			$player->getInventory()->addItem(item::get(264, 0, 1));
		}
		
		if($block->getId() == 73){
			$player->getInventory()->addItem(item::get(73, 0, 1));
		}
		
		if($block->getId() == 129){
			$player->getInventory()->addItem(item::get(388, 0, 1));
		}
		
		if($block->getId() == 153){
			$player->getInventory()->addItem(item::get(406, 0, 1));
		}
		
		if($block->getId() == 17){
			$player->getInventory()->addItem(item::get(5, 0, 4));
		}
		
		if($block->getId() == $spruce){
			$player->getInventory()->addItem(item::get($spruce1, 0, 4));
		}
		
		if($block->getId() == $brich){
			$player->getInventory()->addItem(item::get($brich1, 0, 4));
		}
		
		if($block->getId() == $jungel){
			$player->getInventory()->addItem(item::get($jungel1, 0, 4));
		}
		
		if($block->getId() == $acacia){
			$player->getInventory()->addItem(item::get($acacia1, 0, 4));
		}
		
		if($block->getId() == $dark){
			$player->getInventory()->addItem(item::get($dark1, 0, 4));
		}
	}
	
	public function onEntityDamage(EntityDamageEvent $event){
		if ($event instanceof EntityDamageByEntityEvent) {
			if ($event->getEntity() instanceof Player && $event->getDamager() instanceof Player) {
				$golpeado = $event->getEntity()->getNameTag();
				$golpeador = $event->getDamager()->getNameTag();
				if ((strpos($golpeado, "Â§f[Â§lÂ§cRedÂ§f]") !== false) && (strpos($golpeador, "Â§f[Â§lÂ§cRedÂ§f]") !== false)) {
	
					$event->setCancelled();
				}
	
				else if ((strpos($golpeado, "Â§f[Â§lÂ§9BlueÂ§f]") !== false) && (strpos($golpeador, "Â§f[Â§lÂ§9BlueÂ§f]") !== false)) {
	
					$event->setCancelled();
				}
	
				else if ((strpos($golpeado, "Â§f[Â§lÂ§aGreenÂ§f]") !== false) && (strpos($golpeador, "Â§f[Â§lÂ§aGreenÂ§f]") !== false)) {
	
					$event->setCancelled();
				}
	
				else if ((strpos($golpeado, "Â§f[Â§lÂ§eYellowÂ§f]") !== false) && (strpos($golpeador, "Â§f[Â§lÂ§eYellowÂ§f]") !== false)) {
	
					$event->setCancelled();
				}
			}
	
		}
	}
	
	public function onDisable(){
		$this->getConfig()->save();
	}
}
