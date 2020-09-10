<?php

namespace Xedi\Dotenv\Commands;

use Symfony\Component\Console\Application;
use Xedi\Dotenv\Commands\Configuration\Registrar as ConfigurationRegistrar;
use Xedi\Dotenv\Commands\Environments\Registrar as EnvironmentsRegistrar;
use Xedi\Dotenv\Commands\Sources\Registrar as SourcesRegistrar;

class Registrar
{
    public static function registerCommands(Application $app)
    {
        ConfigurationRegistrar::registerCommands($app);
        EnvironmentsRegistrar::registerCommands($app);
        SourcesRegistrar::registerCommands($app);
    }
}
