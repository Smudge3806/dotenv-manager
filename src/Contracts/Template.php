<?php

namespace Xedi\Dotenv\Contracts;

interface Template
{
    public static function load(string $file_path): self;
}
