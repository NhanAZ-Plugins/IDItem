# IDItem

IDItem is a legacy PocketMine-MP plugin snapshot that shows the held item's numeric ID and damage value in a tip for operators. The manifest calls the plugin `ID_Item`, declares API versions 1.0.0, 1.1.0 and 2.0.0, and credits Ghast Noob.

The source listens for `PlayerItemHeldEvent` and calls `getId()` and `getDamage()` on the selected item. Its numeric item model and plugin API declarations have not been verified on Axolotl-PM 5.x. This repository does not provide a current Axolotl-PM 5 build, runtime test or stable release.

The repository has no LICENSE file or documented grant to redistribute a modified build. The original source and author credit remain unchanged. A modern port or release needs verified rights and a fresh compatibility review.

See [plugin.yml](plugin.yml) and [the historical source](src/GN/IDItem/IDItem.php) for the exact implementation.
