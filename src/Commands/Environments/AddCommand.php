<?php

namespace Xedi\Dotenv\Commands\Environments;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class AddCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('environments:add')
            ->setDescription('Add a new environment')
            ->setHelp('This command allows you to add a new environment.');
    }
}
