<?php

namespace Xedi\Dotenv\Contracts;

/**
 * Secret
 */
interface Secret
{
    /**
     * Get the value of a secret
     *
     * @return mixed
     */
    public function getValue();
}
