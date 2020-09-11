<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Style\SymfonyStyle;
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
        $style = new SymfonyStyle($this->input, $this->output);
        $drivers = $this->getApplication()
            ->source_manager
            ->getDrivers();

        $driver_name = $this->choice(
            'Which source would you like to add?',
            array_keys($drivers)
        );

        $driver = $drivers[$driver_name];

        $requirements = $driver->getConfigurationRequirements();
        $configuration = [];

        foreach ($requirements as $key => $requirement) {
            $configuration[$key] = $style->{$requirement['type']}($requirement['question']);
        }

        $driver->configure($configuration, $style);

        $style->success("Added $driver_name store");
    }
}
