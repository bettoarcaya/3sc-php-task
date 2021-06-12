<?php

use PHPUnit\Framework\TestCase;
use Src\Resources\File;

class FileTest extends TestCase
{
    public function test_it_creates_a_new_instance() {
        $stub = $this->createMock(File::class);
        $this->assertTrue($stub instanceof File);
    }
}