<?php

namespace Xedi\Dotenv\Commands\Configuration;

use Symfony\Component\Console\Application;

class Registrar
{
    public static function registerCommands(Application $app)
    {
        $app->add(new ScaffoldCommand());
        $app->add(new UpdateCommand());
        $app->add(new VerifyCommand());
    }
}
