<?php

namespace Xedi\Dotenv\Commands\Sources;

use Xedi\Dotenv\Commands\Command;

class AddCommand extends Command
{
    public function configure()
    {
        $this->setName('sources:add')
            ->setDescription('Add a new source')
            ->setHelp('This command allows you to add a new source.');
    }

    public function handle()
    {
        $driver = $this->choice(
            'Which source would you like to add?',
            array_keys(
                $this->getApplication()
                    ->source_manager
                    ->getDrivers()
            )
        );
    }
}
