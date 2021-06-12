<?php

include __DIR__.'/../Interfaces/DirectoryInterface.php';
include __DIR__.'/../Resources/Directory.php';
include __DIR__.'/../Resources/FileSystem.php';

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Src\Resources\FileSystem;
use Src\Resources\Directory;

class SearchImg extends Command 
{
    protected static $defaultName = 'app:search-img';

    protected function configure(): void
    {
        $this
            ->setDescription('Search an image')
            ->setHelp('This command allows you to search a img')
            ->addArgument('name', InputArgument::REQUIRED, 'whitch file are you looking for?')
            ->addArgument('path', InputArgument::REQUIRED, 'Insert the path to search the file');
            
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Searching " . $input->getArgument('name') . "...");
        
        $response = $input->getArgument('name') . " Not found in " . $input->getArgument('path');
        $diretory = new Directory();
        $diretory->setName('images');
        
        $diretory->setPath($input->getArgument('path'));
        $file_system = new FileSystem();

        foreach($file_system->getFiles($diretory) as $file){
            if($file->getName() == $input->getArgument('name')){
                $response = $input->getArgument('name') . " Exist in " . $input->getArgument('path');
            }
        }

        $output->writeln($response);

        return Command::SUCCESS;
    }
}