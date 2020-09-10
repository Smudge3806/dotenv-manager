<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Xedi\Dotenv\Commands\Registrar;

$app = new Application('DotEnv Manager', 'v0.1.0');

Registrar::registerCommands($app);

$app->run();
