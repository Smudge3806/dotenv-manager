<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class AddCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('sources:add')
            ->setDescription('Add a new source')
            ->setHelp('This command allows you to add a new source.');
    }
}
