<?php

namespace Xedi\Dotenv\Commands;

use ReflectionClass;
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

    protected static function loadNamespace(Application $app)
    {
        $current_namespace = (new ReflectionClass(static::class))
            ->getNamespaceName();

        $current_namespace = str_replace('\\', '\\\\', $current_namespace);

        $commands_in_namespace = preg_grep(
            "/$current_namespace\\\\([[:alpha:]]+)/",
            array_merge([...array_keys($app->composer->getClassMap())])
        );

        $commands_in_namespace = array_filter(
            $commands_in_namespace,
            function ($namespace) {
                return $namespace !== static::class;
            }
        );

        $commands = array_map(
            function ($command_namespace) use ($app) {
                ($command = new $command_namespace())
                    ->setApplication($app);

                return $command;
            },
            $commands_in_namespace
        );

        return array_combine($commands_in_namespace, $commands);
    }
}
