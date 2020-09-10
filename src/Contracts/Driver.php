<?php

namespace Smudge\Dotenv\Contracts;

/**
 * Common Driver interface
 */
interface Driver
{
    public function hasSecret(SecretDefinition $definition): bool;

    public function getSecret(SecretDefinition $definition): Secret;
}
