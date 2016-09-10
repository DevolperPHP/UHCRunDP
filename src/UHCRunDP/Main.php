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
use pocketmine\scheduler\PluginTask;
use pocketmine\Server; 
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\tile\Sign;
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
	
public $minute = 0;
public $second = 0;
public $counttype = "down";
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new Task($this), 20);
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
	
	public function onCommand(CommandSender $player, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'uhc':
				
				if(isset($args[0])){
					switch($args[0]){
						
						case 'join':
							$teamred = "Â§f[Â§lÂ§cREDÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamred" . $name);
                                                        $xp1 = $this->getConfig()->get("player1X");
                                                        $yp1 = $this->getConfig()->get("player1Y");
                                                        $zp1 = $this->getConfig()->get("player1Z");
                                                        $player->teleport(new position($xp1, $yp1, $zp1));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamblue = "Â§f[Â§lÂ§9BLUEÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamblue" . $name);
                                                        $xp3 = $this->getConfig()->get("player3X");
                                                        $yp3 = $this->getConfig()->get("player3Y");
                                                        $zp3 = $this->getConfig()->get("player3Z");
                                                        $player->teleport(new position($xp3, $yp3, $zp3));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamyellow = "Â§f[Â§lÂ§eYELLOWÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamyellow" . $name);
                                                        $xp5 = $this->getConfig()->get("player2X");
                                                        $yp5 = $this->getConfig()->get("player2Y");
                                                        $zp5 = $this->getConfig()->get("player2Z");
                                                        $player->teleport(new position($xp5, $yp5, $zp5));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamgreen = "Â§f[Â§lÂ§aGREENÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamgreen" . $name);
                                                        $xp7 = $this->getConfig()->get("player7X");
                                                        $yp7 = $this->getConfig()->get("player7Y");
                                                        $zp7 = $this->getConfig()->get("player7Z");
                                                        $player->teleport(new position($xp7, $yp7, $zp7));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamred = "Â§f[Â§lÂ§cREDÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamred" . $name);
                                                        $xp2 = $this->getConfig()->get("player2X");
                                                        $yp2 = $this->getConfig()->get("player2Y");
                                                        $zp2 = $this->getConfig()->get("player2Z");
                                                        $player->teleport(new position($xp2, $yp2, $zp2));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamblue = "Â§f[Â§lÂ§9BLUEÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamblue" . $name);
                                                        $xp4 = $this->getConfig()->get("player4X");
                                                        $yp4 = $this->getConfig()->get("player4Y");
                                                        $zp4 = $this->getConfig()->get("player4Z");
                                                        $player->teleport(new position($xp4, $yp4, $zp4));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamyellow = "Â§f[Â§lÂ§eYELLOWÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamyellow" . $name);
                                                        $xp6 = $this->getConfig()->get("player6X");
                                                        $yp6 = $this->getConfig()->get("player6Y");
                                                        $zp6 = $this->getConfig()->get("player6Z");
                                                        $player->teleport(new position($xp6, $yp6, $zp6));
                                                        $this->getConfig()->save();
                                                        
                                                        break;
                                                        
                                                        $teamgreen = "Â§f[Â§lÂ§aGREENÂ§f]";
                                                        $name = $player->getName();
                                                        $player->setNameTag("$teamgreen" . $name);
                                                        $xp8 = $this->getConfig()->get("player8X");
                                                        $yp8 = $this->getConfig()->get("player8Y");
                                                        $zp8 = $this->getConfig()->get("player8Z");
                                                        $player->teleport(new position($xp8, $yp8, $zp8));
                                                        $this->getConfig()->save();
                                                        
                                                        return true;
                                                        
                                                        case 'spawn':
                                                        	
                                                        	if(isset($args[0])){
                                                        		switch($args[0]){
                                                        			
                                                        			case '1':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp1", $xp1);
                                                        				$this->getConfig()->set("xp1", $yp1);
                                                        				$this->getConfig()->set("xp1", $zp1);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '2':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp2", $xp2);
                                                        				$this->getConfig()->set("xp2", $yp2);
                                                        				$this->getConfig()->set("xp2", $zp2);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '3':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp3", $xp3);
                                                        				$this->getConfig()->set("xp3", $yp3);
                                                        				$this->getConfig()->set("xp3", $zp3);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '4':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp4", $xp4);
                                                        				$this->getConfig()->set("xp4", $yp4);
                                                        				$this->getConfig()->set("xp4", $zp4);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '5':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp5", $xp5);
                                                        				$this->getConfig()->set("xp5", $yp5);
                                                        				$this->getConfig()->set("xp5", $zp5);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '6':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp6", $xp6);
                                                        				$this->getConfig()->set("xp6", $yp6);
                                                        				$this->getConfig()->set("xp6", $zp6);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '7':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp7", $xp1);
                                                        				$this->getConfig()->set("xp7", $yp1);
                                                        				$this->getConfig()->set("xp7", $zp1);
                                                        				$this->getConfig()->save();
                                                        				
                                                        				return true;
                                                        				
                                                        			case '8':
                                                        				$this->getConfig()->getFloorX();
                                                        				$this->getConfig()->getFloorY();
                                                        				$this->getConfig()->getFloorZ();
                                                        				$this->getConfig()->set("xp8", $xp8);
                                                        				$this->getConfig()->set("xp8", $yp8);
                                                        				$this->getConfig()->set("xp8", $zp8);
                                                        				$this->getConfig()->save();
                                                        				
                                                        		}
                                                        	}
                                                case 'teams':
                                                	$player->sendMessage(§l§4 RED §9 BLUE §a GREEN §e YELLLOW);
                                                	
                                                case 'help':
                                                	$player->sendMessage(§l§6 ]==============[§fU§cH§fC§6]==============[);
                                                	$player->sendMessage(§l§c/uhc join: Join The Game);
                                                	$player->sendMessage(§l§f/uhc spawn 1: set player spawn);
                                                	$player->sendMessage(§l§c/uhc spawn 2: .../uhc spawn 8);
                                                	$player->sendMessage(§l§f/uhc teams: sand Message Teams);
                                                	$player->sendMessage(§l§6 ]==============[§fU§cH§fC§6]==============[);
					}
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
				if ((strpos($golpeado, "§f[§l§cRed§f]") !== false) && (strpos($golpeador, "§f[§l§cRed§f]") !== false)) {
	
					$event->setCancelled();
				}
	
				else if ((strpos($golpeado, "§f[§l§9Blue§f]") !== false) && (strpos($golpeador, "§f[§l§9Blue§f]") !== false)) {
	
					$event->setCancelled();
				}
	
				else if ((strpos($golpeado, "§f[§lÂ§aGreen§f]") !== false) && (strpos($golpeador, "§f[§l§aGreen§f]") !== false)) {
	
					$event->setCancelled();
				}
	
				else if ((strpos($golpeado, "§f[§l§eYellow§f]") !== false) && (strpos($golpeador, "§f[§l§eYellow§f]") !== false)) {
	
					$event->setCancelled();
				}
			}
	
		}
	}
	
	public function onSignChange(SignChangeEvent $event){
		$player = $event->getPlayer();
		$sign = $event->getLine();
		$name = $player->getName();
		
		if($player->isOp()){
			if(strtolower(trim($event->()getLine(0))) == "UHC" || strtolower(trim($event->getLine(0))) == "[UHC]"){
				$sign(0, "§l§f[U§cH§fC]");
				$sign(1, "§l§a Welcome $name");
				$sign(2, "§l§e Join UHC");
				$sign(3, "§l§bTAB");
				break;
				$player->teleport(new position($xp1, $yp1, $zp1));
				break;
				$player->teleport(new position($xp2, $yp2, $zp2));
				break;
				$player->teleport(new position($xp3, $yp3, $zp3));
				break;
				$player->teleport(new position($xp4, $yp4, $zp4));
				break;
				$player->teleport(new position($xp5, $yp5, $zp5));
				break;
				$player->teleport(new position($xp6, $yp6, $zp6));
				break;
				$player->teleport(new position($xp7, $yp7, $zp7));
				break;
				$player->teleport(new position($xp8, $yp8, $zp8));
				break;
				
		}
	}
	public function tick(){
		$all = $this->getServer()->getLevelByName("Lobby")->getPlayers();
                  if($this->counttype == "up"){
                      $this->second++;
                  }
               if($this->counttype == "down"){
                       $this->second--;
                  }
                  foreach($all as $p){

               if($this->second < 60 && $this->second > 9){
                   $p->sendTip($this->minute.":".$this->second);

                 }
               if($this->second < 10){
                  $p->sendTip($this->minute.":0".$this->second);

                 }
               if($this->counttype == "down"){
                  if($this->second == 0){

                     $this->second = 60;
                     $this->minute--;
                 }}
               if($this->counttype == "down"){
                 if($this->second == 0){

                   $this->second = 60;
                   $this->minute--;
                 }}
               if($this->counttype == "up"){
                  if($this->second == 60){

                   $this->second = 0;
                   $this->minute++;
                 }}

                 }}
	
	public function onDisable(){
		$this->getConfig()->save();
	}
}

class Main extends PluginTask{

	public function __construct(Main $plugin){
		parent::__construct($plugin);
		$this->plugin = $plugin;

	}

    public function onRun($currentTick){
    $this->plugin->tick();
}

}
