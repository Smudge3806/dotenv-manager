<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class RemoveCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('sources:remove')
            ->setDescription('Remove a source')
            ->setHelp('This command allows you to remove a source.');
    }
}
