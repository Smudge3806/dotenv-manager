<?php

namespace Xedi\Dotenv\Commands\Sources;

use Symfony\Component\Console\Application;
use Xedi\Dotenv\Commands\Registrar as BaseRegistrar;

class Registrar extends BaseRegistrar
{
    public static function registerCommands(Application $app)
    {
        $commands = static::loadNamespace($app);

        $app->addCommands($commands);
    }
}
