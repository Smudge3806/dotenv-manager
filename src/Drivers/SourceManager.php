<?php

namespace Xedi\Dotenv\Drivers;

use Xedi\Dotenv\Drivers\Sources\Local as LocalDriver;

class SourceManager extends Manager
{
    public function boot()
    {
        $this->registerDriver(
            'local',
            new LocalDriver()
        );

    }
}
