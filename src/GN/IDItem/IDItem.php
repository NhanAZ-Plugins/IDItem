<?php
namespace GN\IDItem;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\plugin\PluginBase;

final class IDItem extends PluginBase implements Listener{
	protected function onEnable() : void{
		$this->getLogger()->info("ID Item by Ghast Noob");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onItemHeld(PlayerItemHeldEvent $event) : void{
		$player = $event->getPlayer();
		if(!$this->getServer()->isOp($player->getName())){
			return;
		}

		$item = $event->getItem();
		$player->sendTip(ItemIdMessageFormatter::format($item->getTypeId(), $item->getVanillaName()));
	}
}
