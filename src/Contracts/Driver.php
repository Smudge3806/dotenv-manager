<?php

namespace Xedi\Dotenv\Contracts;

/**
 * Common Driver interface
 */
interface Driver
{
    /**
     * Check if the driver has access to a specific secret
     *
     * @param SecretDefinition $definition Definition of the secret
     *
     * @return boolean
     */
    public function hasSecret(SecretDefinition $definition): bool;

    /**
     * Get a specific secret
     *
     * @param SecretDefinition $definition Definition of the secret
     *
     * @return Secret
     */
    public function getSecret(SecretDefinition $definition): Secret;
}
