#!/usr/bin/env php
<?php

require_once __DIR__.'/vendor/autoload.php';

use App\AppKernel;
use Symfony\Component\Console\Application;

$kernel = new AppKernel('dev', false);
$kernel->boot();

$container = $kernel->getContainer();
$application = $container->get(Application::class);
$application->run();
