<?php

namespace Xedi\Dotenv;

use Adbar\Dot;
use Symfony\Component\Filesystem\Filesystem;

class Config
{
    public static function put(string $alias, $value)
    {
        $config = self::getConfig();

        $config->set($alias, $value);

        self::saveConfig($config);
    }

    public static function get(string $alias, $default = null)
    {
        $config = self::getConfig();

        return $config->get($alias, $default);
    }

    private static function saveConfig(Dot $config)
    {
        $config_path = self::getConfigPath();
        $file_system = new Filesystem();

        $file_system->dumpFile(
            $config_path,
            $config->toJson(JSON_PRETTY_PRINT)
        );
    }

    private static function getConfig(): Dot
    {
        $config_path = self::getConfigPath();
        $file_system = new Filesystem();

        if (! $file_system->exists($config_path)) {
            return new Dot();
        }

        return new Dot(
            json_decode(@file_get_contents($config_path), true)
        );
    }

    private static function getConfigPath()
    {
        return getenv('HOME') . '/.dotenv_manager/config.json';
    }
}
