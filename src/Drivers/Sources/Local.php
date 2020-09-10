<?php

namespace Xedi\Dotenv\Drivers\Sources;

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

    public function getConfigurationRequirements()
    {
        return [
            'confirm' => [
                'type' => 'confirm',
                'question' => 'Are you sure you want to add a local store?'
            ]
        ];
    }

    public function configure(array $configuration)
    {
        Config::put('sources.local.enabled', true);
    }
}
