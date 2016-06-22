<?php

namespace Lab\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this->setName('gabriel:goncalves')
            ->setDescription('Some test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('This is test');
    }
}

