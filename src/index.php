#!/usr/bin/env php
<?php

use Symfony\Component\Console\Application;

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/Commands/SearchImg.php';
require __DIR__.'/Commands/CountImg.php';
require __DIR__.'/Commands/GetAllImg.php';

$application = new Application();

// commands...
$application->add(new SearchImg());
$application->add(new CountImg());
$application->add(new GetAllImg());

$application->run();