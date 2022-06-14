<?php
declare(strict_types=1);

namespace DaDevGuy\XyzCommand;

use DaDevGuy\XyzCommand\Manager\CommandHandler;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    public function onEnable(): void
    {
        CommandHandler::init();
    }
}