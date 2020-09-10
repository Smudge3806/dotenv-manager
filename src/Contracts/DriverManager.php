<?php

namespace Smudge\Dotenv\Contracts;

interface DriverManager
{
    public function registerDriver(string $alias, Driver $driver): self;

    public function getDriver(string $alias): Driver;

    public function hasDriver(string $alias): bool;
}
