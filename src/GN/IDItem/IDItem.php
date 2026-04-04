<?php
namespace GN\IDItem;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class IDItem extends PluginBase implements Listener {

        public $slogan = "§e༄༂§aID Item§e༂࿐§b";
        
	public function onEnable()
	{
		  $this->getLogger()->info("ID Item By Ghast Noob");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
        
        public function ItemHeld(PlayerItemHeldEvent $event)
        {
            $pl = $event->getPlayer();
            if($pl->isOp())
            {
            $pl->sendTip($this->slogan . " " . $event->getItem()->getId() . "§f:§b" . $event->getItem()->getDamage());
            }
        }

}
