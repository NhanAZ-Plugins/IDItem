# IDItem

IDItem shows an operator the held item's numeric type ID and vanilla name when the selected hotbar item changes. It is ported to Axolotl-PM API 5.0.0. API 5 no longer exposes the legacy item damage value used by the original plugin, so the message now reports the API 5 item type ID and name instead.

The plugin retains the original Ghast Noob author credit. This repository has no license file; no stable release or separately distributed plugin artifact is provided. The repository is archived after the API 5 source port and CI checks.

CI runs PHPStan at maximum level and builds and inspects the plugin PHAR against pinned Axolotl-PM 5.0.0 and 5.49.1 source revisions. It also starts the API 5.49.1 server with the built plugin. These checks establish compatibility at those tested points, not every Axolotl-PM 5.x release. A connected-player tip display was not tested.
