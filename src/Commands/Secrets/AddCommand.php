<?php

namespace Xedi\Dotenv\Commands\Secrets;

use Xedi\Dotenv\Commands\Command;

class AddCommand extends Command
{
    public function configure()
    {
        $this->setName('secrets:add')
            ->setDescription('Add a secret to a store')
            ->setHelp('This command allows you to add secrets to specific stores');
    }

    public function handle()
    {
    }
}
