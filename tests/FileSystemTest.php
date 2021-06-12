<?php

use PHPUnit\Framework\TestCase;
use Src\Resources\Directory;
use src\Resources\FileSystem;
use Tsc\CatStorageSystem\FileInterface;

class FileSystemTest extends TestCase
{
    public function test_it_count_files() {
        $file_system = new FileSystem();
        $directory = new Directory();
        $directory->setPath(getcwd().'/../images');
        $response = $file_system->getFileCount($directory);

        $this->assertTrue(gettype($response) == "integer");
    }

    public function test_it_get_files() {
        $file_system = new FileSystem();
        $directory = new Directory();
        $directory->setPath(getcwd().'/../images');
        $response = $file_system->getFiles($directory);

        $this->assertTrue($response instanceof FileInterface);
    }
}