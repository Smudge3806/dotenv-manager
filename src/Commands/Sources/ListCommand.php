<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class ListCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('sources:list')
            ->setDescription('List available sources')
            ->setHelp('This command allows you to list all available sources.');
    }
}
