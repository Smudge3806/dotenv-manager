<?php

$composer = require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Xedi\Dotenv\Commands\Registrar;
use Xedi\Dotenv\Drivers\SourceManager;

$app = new Application('DotEnv Manager', 'v0.1.0');

$app->composer = $composer;

Registrar::registerCommands($app);

$app->source_manager = new SourceManager();

$app->run();
