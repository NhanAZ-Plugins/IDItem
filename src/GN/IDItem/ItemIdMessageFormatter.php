<?php

declare(strict_types=1);

namespace GN\IDItem;

final class ItemIdMessageFormatter{
	public static function format(int $typeId, string $itemName) : string{
		return "§e༄༂§aID Item§e༂࿐§b #" . $typeId . "§7 · §f" . $itemName;
	}
}
