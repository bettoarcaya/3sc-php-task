<?php

namespace Src\Resources;

include __DIR__.'/../Interfaces/FileInterface.php';

use Tsc\CatStorageSystem\FileInterface;
use Tsc\CatStorageSystem\DirectoryInterface;
use \DateTimeInterface;


class File implements FileInterface
{
    private $name;
    private $size;
    private $createdTime;
    private $modifiedTime;
    private $parentDirectory;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
   * @return DateTime
   */
    public function getCreatedTime()
    {
        $this->createdTime;
    }

    /**
     * @param DateTimeInterface $created
     *
     * @return $this
     */
    public function setCreatedTime(DateTimeInterface $created)
    {
        $this->createdTime = $created;
    }

    /**
     * @return DateTimeInterface
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * @param DateTimeInterface $modified
     *
     * @return $this
     */
    public function setModifiedTime(DateTimeInterface $modified)
    {
        $this->modifiedTime = $modified;
    }

    /**
     * @return DirectoryInterface
     */
    public function getParentDirectory()
    {
        return $this->parentDirectory;
    }

    /**
     * @param DirectoryInterface $parent
     *
     * @return $this
     */
    public function setParentDirectory(DirectoryInterface $parent)
    {
        $this->parentDirectory = $parent;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}