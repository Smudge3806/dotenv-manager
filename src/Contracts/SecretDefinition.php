<?php

namespace Xedi\Dotenv\Contracts;

interface SecretDefinition
{
    /**
     * Get the name of the secret
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the source where the secret is stored
     *
     * @return string
     */
    public function getSource(): string;

    /**
     * Get the type the variable is expected to be
     *
     * @return string
     */
    public function getType(): string;
}
