<?php

namespace DNAFactory\Example\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    public function __construct(
        string $name = null
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName("dominio:azione");
        $this->setDescription("Metti una descrizione adeguata");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello!");
    }
}

