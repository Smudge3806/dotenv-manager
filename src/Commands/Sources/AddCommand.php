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
        $drivers = $this->getApplication()
            ->source_manager
            ->getDrivers();

        $driver = $this->choice(
            'Which source would you like to add?',
            array_keys($drivers)
        );

        $driver = $drivers[$driver];

        $requirements = $driver->getConfigurationRequirements();
        $configuration = [];

        foreach ($requirements as $key => $requirement) {
            $configuration[$key] = $this->{$requirement['type']}($requirement['question']);
        }

        $driver->configure($configuration);


    }
}
