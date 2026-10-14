<?php

declare(strict_types=1);

require_once __DIR__ . "/../src/GN/IDItem/ItemIdMessageFormatter.php";

use GN\IDItem\ItemIdMessageFormatter;

$cases = [
	["stone type ID and vanilla name", 1, "Stone", "§e༄༂§aID Item§e༂࿐§b #1§7 · §fStone"],
	["air type ID", 0, "Air", "§e༄༂§aID Item§e༂࿐§b #0§7 · §fAir"],
];

foreach($cases as [$label, $typeId, $itemName, $expected]){
	$actual = ItemIdMessageFormatter::format($typeId, $itemName);
	if($actual !== $expected){
		fwrite(STDERR, $label . ": expected " . var_export($expected, true) . ", got " . var_export($actual, true) . PHP_EOL);
		exit(1);
	}
}

echo "Item ID message formatter cases passed." . PHP_EOL;
