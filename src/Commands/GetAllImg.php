<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Src\Resources\FileSystem;
use Src\Resources\Directory;

class GetAllImg extends Command
{
    protected static $defaultName = 'app:get-img';

    protected function configure(): void
    {
        $this
            ->setDescription('Get all the images in a specific directory')
            ->setHelp('This command allows you to list all the images in a directory')
            ->addArgument('path', InputArgument::REQUIRED, 'Insert the path to get the files');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Searching...");

        $diretory = new Directory();
        $diretory->setPath($input->getArgument('path'));

        $file_system = new FileSystem();

        foreach($file_system->getFiles($diretory) as $file){
            $output->writeln($file->getName());
        }

        return Command::SUCCESS;
    }
}