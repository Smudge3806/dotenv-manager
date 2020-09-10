<?php

namespace Xedi\Dotenv\Commands\Configuration;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class ScaffoldCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('configuration:scaffold')
            ->setDescription('Deploy a configuration')
            ->setHelp('This command allows you to create service configurations from a template file.')
            ->addArgument('template', InputArgument::REQUIRED, 'The filepath to the template')
            ->addArgument('target', InputArgument::OPTIONAL, 'The target environment [Default: .env]');
    }
}
