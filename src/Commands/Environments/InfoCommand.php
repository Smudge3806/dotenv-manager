<?php

namespace Xedi\Dotenv\Commands\Environments;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class InfoCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('environments:info')
            ->setDescription('Show information about a environment')
            ->setHelp('This command allows you to view information about a environment.');
    }
}
