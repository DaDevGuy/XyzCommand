<?php
declare(strict_types=1);

namespace DaDevGuy\XyzCommand\Handler;

use DaDevGuy\XyzCommand\Commands\XyzCommand;
use pocketmine\Server;

final class CommandHandler
{
    public static function init(): void
    {
        foreach (self::getCommand() as $k => $v) {
            Server::getInstance()->getCommandMap()->register($k, $v);
        }
    }



    public static function getCommand(): array
    {
        return [
          "xyz" => new XyzCommand()
        ];
    } 
}
