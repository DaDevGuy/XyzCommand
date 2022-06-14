<?php
declare(strict_types=1);

namespace DaDevGuy\XyzCommand\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class XyzCommand extends Command
{
    public function __construct()
    {
        parent::__construct("xyz", "Shows Your Currents Coordinates");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player)
        {
            $pos = $sender->getPosition();
            $x = intval($pos->getX);
            $y = intval($pos->getY);
            $z = intval($pos->getZ);
            $sender->sendMessage("§l§eCOORDINATES :§r§e ${x} ${y} ${z}");
        }
    }
}