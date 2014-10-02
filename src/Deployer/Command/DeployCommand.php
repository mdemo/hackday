<?php

namespace Deployer\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class DeployCommand extends Command {

    protected function configure()
    {
        $this->setName("everbot:deploy")
            ->setDescription("Everbot, can you please deploy?")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
