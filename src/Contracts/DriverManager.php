<?php

namespace Xedi\Dotenv\Contracts;

interface DriverManager
{
    /**
     * Register a Driver against the Manager
     *
     * @param string $alias  Alias for the driver
     * @param Driver $driver Driver to be stored.
     *
     * @return self
     */
    public function registerDriver(string $alias, Driver $driver): self;

    /**
     * Get a driver by alias
     *
     * @param string $alias Registered alias
     *
     * @return Driver
     */
    public function getDriver(string $alias): Driver;

    /**
     * Checks whether a specific alias is registered
     *
     * @param string $alias Subject alias
     *
     * @return boolean
     */
    public function hasDriver(string $alias): bool;

    /**
     * List all registered Drivers
     *
     * @return array
     */
    public function getDrivers(): array;
}
