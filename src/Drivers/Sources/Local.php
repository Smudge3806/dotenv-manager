<?php

namespace Xedi\Dotenv\Drivers\Sources;

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
}
