<?php

namespace App\Command;

use App\Thing;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'test';

    public function __construct(Thing $thing)
    {
        $this->thing = $thing;
        parent::__construct(self::$defaultName);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Automatically injected %s!', get_class($this->thing)));
    }
}
