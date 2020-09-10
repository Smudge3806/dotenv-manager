<?php

namespace Xedi\Dotenv\Commands\Configuration;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class UpdateCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('configuration:update')
            ->setDescription('Update a configuration')
            ->setHelp('This command allows you to update a service configuration from a template file.')
            ->addArgument('template', InputArgument::REQUIRED, 'The filepath to the template')
            ->addArgument('target', InputArgument::OPTIONAL, 'The target environment [Default: .env]');
    }
}
