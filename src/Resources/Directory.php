<?php

namespace Src\Resources;

use Tsc\CatStorageSystem\DirectoryInterface;
use \DateTimeInterface;

class Directory implements DirectoryInterface
{
    private $name;
    private $createdTime;
    private $path;

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
     * @return DateTimeInterface
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
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
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
}