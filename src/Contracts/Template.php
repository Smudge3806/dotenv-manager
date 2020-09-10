<?php

namespace Smudge\Dotenv\Contracts;

interface Template
{
    public static function load(string $file_path): self;
}
