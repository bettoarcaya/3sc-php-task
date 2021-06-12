<?php

namespace Src\Resources;

include __DIR__.'/../Interfaces/FileSystemInterface.php';
include __DIR__.'/../Resources/File.php';

use Tsc\CatStorageSystem\FileSystemInterface;
use Tsc\CatStorageSystem\DirectoryInterface;
use Tsc\CatStorageSystem\FileInterface;

use Src\Resources\File;

class FileSystem implements FileSystemInterface
{
    /**
    * @param FileInterface   $file
    * @param DirectoryInterface $parent
    *
    * @return FileInterface
    */
    public function createFile(FileInterface $file, DirectoryInterface $parent)
    {

    }

    /**
     * @param FileInterface $file
     *
     * @return FileInterface
     */
    public function updateFile(FileInterface $file)
    {

    }

    /**
     * @param FileInterface $file
     * @param string $newName
     *
     * @return FileInterface
     */
    public function renameFile(FileInterface $file, $newName)
    {
        
    }

    /**
     * @param FileInterface $file
     *
     * @return bool
     */
    public function deleteFile(FileInterface $file)
    {

    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return DirectoryInterface
     */
    public function createRootDirectory(DirectoryInterface $directory)
    {

    }

    /**
     * @param DirectoryInterface $directory
     * @param DirectoryInterface $parent
     *
     * @return DirectoryInterface
     */
    public function createDirectory(
        DirectoryInterface $directory, 
        DirectoryInterface $parent
    ){

    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return bool
     */
    public function deleteDirectory(DirectoryInterface $directory)
    {

    }

    /**
     * @param DirectoryInterface $directory
     * @param string $newName
     *
     * @return DirectoryInterface
     */
    public function renameDirectory(DirectoryInterface $directory, $newName)
    {

    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return int
     */
    public function getDirectoryCount(DirectoryInterface $directory)
    {}

    /**
     * @param DirectoryInterface $directory
     *
     * @return int
     */
    public function getFileCount(DirectoryInterface $directory)
    {
        return count($this->getFiles($directory));
    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return int
     */
    public function getDirectorySize(DirectoryInterface $directory)
    {
        
    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return DirectoryInterface[]
     */
    public function getDirectories(DirectoryInterface $directory)
    {

    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return FileInterface[]
     */
    public function getFiles(DirectoryInterface $directory)
    {
        $path = $directory->getName();
        $dir = opendir($directory->getPath());
        $files = [];
        
        while ($element = readdir($dir)){
            if( $element != "." && $element != ".."){
                if( !is_dir($path.$element) ){
                    $file = new File();
                    $file->setName($element);
                    $files[] = $file;
                }
            }
        }

        return $files;
    }
    
}