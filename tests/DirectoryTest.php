<?php

use PHPUnit\Framework\TestCase;
use Src\Resources\Directory;

class DirectoryTest extends TestCase
{
    public function test_it_creates_a_new_instance() {
        $stub = $this->createMock(Directory::class);
        $this->assertTrue($stub instanceof Directory);
    }
}