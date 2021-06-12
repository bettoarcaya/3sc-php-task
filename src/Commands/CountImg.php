<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Src\Resources\FileSystem;
use Src\Resources\Directory;

class CountImg extends Command
{
    protected static $defaultName = 'app:count-img';

    protected function configure(): void
    {
        $this
            ->setDescription('Count images in a specific directory')
            ->setHelp('This command allows you to count images in a directory')
            ->addArgument('path', InputArgument::REQUIRED, 'Insert the path to count the files');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Counting...");

        $diretory = new Directory();
        $diretory->setPath($input->getArgument('path'));

        $file_system = new FileSystem();

        $response = "There are " . $file_system->getFileCount($diretory) . " in " . $input->getArgument('path');

        $output->writeln($response);

        return Command::SUCCESS;
    }
}