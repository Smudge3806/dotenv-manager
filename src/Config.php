<?php

namespace Xedi\Dotenv;

use Symfony\Component\Filesystem\Filesystem;

class Config
{
    public static function put(string $alias, $value)
    {
        $config = self::getConfig();

        $config[$alias] = $value;

        self::saveConfig($config);
    }

    public static function get(string $alias, $default = null)
    {
        $config = self::getConfig();

        if (! array_key_exists($alias, $config)) {
            return $default;
        }

        return $config[$alias];
    }

    private static function saveConfig(array $config)
    {
        $config_path = self::getConfigPath();
        $file_system = new FileSystem();

        $file_system->dumpFile(
            $config_path,
            json_encode($config)
        );
    }

    private static function getConfig(): array
    {
        $config_path = self::getConfigPath();
        $file_system = new FileSystem();

        if (! $file_system->exists($config_path)) {
            return [];
        }

        return json_decode(@file_get_contents($config_path), true);
    }

    private static function getConfigPath()
    {
        return getenv('HOME') . '/.dotenv_manager/config.ini';
    }
}
