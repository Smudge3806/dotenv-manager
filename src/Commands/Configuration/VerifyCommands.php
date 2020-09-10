<?php

namespace Xedi\Dotenv\Commands\Configuration;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

class VerifyCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('configuration:verify')
            ->setDescription('Verify a configuration is up-to-date')
            ->setHelp('This command allows you to check if a service configuration has drifted or needs updating.')
            ->addArgument('template', InputArgument::REQUIRED, 'The filepath to the template')
            ->addArgument('target', InputArgument::OPTIONAL, 'The target environment [Default: .env]');
    }
}
