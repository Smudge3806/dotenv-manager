<?php

namespace Xedi\Dotenv\Commands\Environments;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class RemoveCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('environments:remove')
            ->setDescription('Remove a environment')
            ->setHelp('This command allows you to remove a environment.');
    }
}
