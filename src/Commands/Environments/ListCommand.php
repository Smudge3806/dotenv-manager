<?php

namespace Xedi\Dotenv\Commands\Environments;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class ListCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('environments:list')
            ->setDescription('List available environments')
            ->setHelp('This command allows you to list all available environments.');
    }
}
