<?php

namespace Xedi\Dotenv\Commands\Sources;

use Adbar\Dot;
use Symfony\Component\Console\Style\SymfonyStyle;
use Xedi\Dotenv\Commands\Command;
use Xedi\Dotenv\Config;

class ListCommand extends Command
{
    public function configure()
    {
        $this->setName('sources:list')
            ->setDescription('List available sources')
            ->setHelp('This command allows you to list all available sources.');
    }

    public function handle()
    {
        $sources = Config::get('sources', []);
        $style = new SymfonyStyle($this->input, $this->output);

        foreach ($sources as $type => &$source) {
            $source['type'] = $type;
        }

        $style->table(
            [ 'Source Driver', 'Enabled' ],
            array_map(
                function ($source) {
                    return [
                        $source['type'],
                        $source['enabled']
                    ];
                },
                $sources
            )
        );
    }
}
