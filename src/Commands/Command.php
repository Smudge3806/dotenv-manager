<?php

namespace Xedi\Dotenv\Commands;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;


abstract class Command extends SymfonyCommand
{
    abstract public function handle();

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $this->handle();

        return 0;
    }

    protected function ask(string $question)
    {

    }

    protected function choice(
        string $question,
        array $choices,
        ?string $default = null,
        ?string $error_message = 'Invalid Selection'
    ) {
        ($question = new ChoiceQuestion($question, $choices))
            ->setErrorMessage($error_message);

        return ($this->getHelper('question'))
            ->ask($this->input, $this->output, $question);
    }

    protected function confirm(string $question): bool
    {

    }
}
