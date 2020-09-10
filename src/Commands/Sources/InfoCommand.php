<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class InfoCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('sources:info')
            ->setDescription('Show information about a source')
            ->setHelp('This command allows you to view information about a source.');
    }
}
