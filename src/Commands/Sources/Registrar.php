<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Application;

class Registrar
{
    public static function registerCommands(Application $app)
    {
        $app->add(new AddCommand());
        $app->add(new InfoCommand());
        $app->add(new ListCommand());
        $app->add(new RemoveCommand());
    }
}
