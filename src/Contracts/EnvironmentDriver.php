<?php

namespace Smudge\Dotenv\Contracts;

/**
 * Environment Driver
 *
 * Connects to various environments to inteogate and configure
 */
interface EnvironmentDriver extends Driver
{
    public function importSecret(Secret $secret): self;

    public function importSecrets(array $secrets): self;

    public function removeSecret(SecretDefinition $definition): self;
}
