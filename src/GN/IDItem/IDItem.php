<?php
namespace GN\IDItem;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\plugin\PluginBase;

final class IDItem extends PluginBase implements Listener{
	private const SLOGAN = "§e༄༂§aID Item§e༂࿐§b";

	protected function onEnable() : void{
		$this->getLogger()->info("ID Item by Ghast Noob");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onItemHeld(PlayerItemHeldEvent $event) : void{
		$player = $event->getPlayer();
		if(!$player->isOp()){
			return;
		}

		$item = $event->getItem();
		$player->sendTip(ItemIdMessageFormatter::format($item->getTypeId(), $item->getVanillaName()));
	}
}
