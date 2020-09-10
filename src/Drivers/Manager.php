<?php

namespace Xedi\Dotenv\Drivers;

use Xedi\Dotenv\Contracts\DriverManager;
use Xedi\Dotenv\Contracts\Driver;

abstract class Manager implements DriverManager
{
    private $drivers = [];

    public function __construct()
    {
        $this->boot();
    }

    /**
     * Register a Driver against the Manager
     *
     * @param string $alias  Alias for the driver
     * @param Driver $driver Driver to be stored.
     *
     * @return self
     */
    public function registerDriver(string $alias, Driver $driver): self
    {
        $this->drivers[$alias] = $driver;

        return $this;
    }

    /**
     * Get a driver by alias
     *
     * @param string $alias Registered alias
     *
     * @return Driver
     */
    public function getDriver(string $alias): Driver
    {
        if ($this->hasDriver($alias)) {
            return $this->drivers[$alias];
        }

        throw new MissingDriverException("Driver [{$alias}] not found.");
    }

    /**
     * List all registered Drivers
     *
     * @return array
     */
    public function getDrivers(): array
    {
        return $this->drivers;
    }

    /**
     * Checks whether a specific alias is registered
     *
     * @param string $alias Subject alias
     *
     * @return boolean
     */
    public function hasDriver(string $alias): bool
    {
        return in_array($alias, $this->drivers);
    }
}
