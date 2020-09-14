<?php

namespace Xedi\Dotenv\Contracts;

/**
 * Environment Driver
 *
 * Connects to various environments to inteogate and configure
 */
interface EnvironmentDriver extends Driver
{
    /**
     * Import a Secret into an environment
     *
     * @param Secret $secret Secret
     *
     * @return self
     */
    public function importSecret(Secret $secret): self;

    /**
     * Import a list of Secrets
     *
     * @param array $secrets Array of secrets
     *
     * @return self
     */
    public function importSecrets(array $secrets): self;

    /**
     * Remove a secret from an environment
     *
     * @param SecretDefinition $definition Definition of the secret
     *
     * @return self
     */
    public function removeSecret(SecretDefinition $definition): self;
}
