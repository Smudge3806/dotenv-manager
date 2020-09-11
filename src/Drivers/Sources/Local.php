<?php

namespace Xedi\Dotenv\Drivers\Sources;

use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;
use Xedi\Dotenv\Config;
use Xedi\Dotenv\Contracts\Secret;
use Xedi\Dotenv\Contracts\SecretDefinition;
use Xedi\Dotenv\Contracts\SourceDriver;

class Local implements SourceDriver
{
    /**
     * Check if the driver has access to a specific secret
     *
     * @param SecretDefinition $definition Definition of the secret
     *
     * @return boolean
     */
    public function hasSecret(SecretDefinition $definition): bool
    {

    }

    /**
     * Get a specific secret
     *
     * @param SecretDefinition $definition Definition of the secret
     *
     * @return Secret
     */
    public function getSecret(SecretDefinition $definition): Secret
    {

    }

    public function addSecret(Secret $secret)
    {

    }

    public function getConfigurationRequirements()
    {
        return [
            'confirm' => [
                'type' => 'confirm',
                'question' => 'Are you sure you want to add a local store?'
            ]
        ];
    }

    public function configure(array $configuration, SymfonyStyle $output)
    {
        $file_system = new Filesystem();
        Config::put('sources.local.enabled', $configuration['confirm']);
        $file_path = Config::get('sources.local.path', getenv('HOME') . '/.dotenv_manager/stores/local.json');

        if ($configuration['confirm'] === false) {
            return;
        }

        if (! $file_system->exists($file_path)) {
            $file_system->dumpFile($file_path, '');
            $output->note('Created local store');
        }
    }
}
