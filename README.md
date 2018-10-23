# Symfony Console w/ Dependency Injection POC

This repo is a proof of concept of https://stackoverflow.com/a/50356503/895083.
It currently yields the following result:

```
$ composer install
$ ./index.php
PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Symfony\Component\Console\Application::add() must be an instance of Symfony\Component\Console\Command\Command, string given, called in /var/www/test/app/cache/dev/ContainerRZsNBWJ/getApplicationService.php on line 11 and defined in /var/www/test/vendor/symfony/console/Application.php:455
Stack trace:
#0 /var/www/test/app/cache/dev/ContainerRZsNBWJ/getApplicationService.php(11): Symfony\Component\Console\Application->add('@App\\Command\\Te...')
#1 /var/www/test/app/cache/dev/ContainerRZsNBWJ/appDevProjectContainer.php(72): require('/Users/travis.c...')
#2 /var/www/test/vendor/symfony/dependency-injection/Container.php(240): ContainerRZsNBWJ\appDevProjectContainer->load('getApplicationS...')
#3 /var/www/test/vendor/symfony/dependency-injection/Container.php(222): Symfony\Component\DependencyInjection\Container->make(' in /var/www/test/vendor/symfony/console/Application.php on line 455

Fatal error: Uncaught TypeError: Argument 1 passed to Symfony\Component\Console\Application::add() must be an instance of Symfony\Component\Console\Command\Command, string given, called in /var/www/test/app/cache/dev/ContainerRZsNBWJ/getApplicationService.php on line 11 and defined in /var/www/test/vendor/symfony/console/Application.php on line 455

TypeError: Argument 1 passed to Symfony\Component\Console\Application::add() must be an instance of Symfony\Component\Console\Command\Command, string given, called in /var/www/test/app/cache/dev/ContainerRZsNBWJ/getApplicationService.php on line 11 in /var/www/test/vendor/symfony/console/Application.php on line 455

Call Stack:
    0.0007     355808   1. {main}() /var/www/test/index.php:0
    0.0847    3873024   2. ContainerRZsNBWJ\appDevProjectContainer->get() /var/www/test/index.php:13
    0.0847    3873024   3. ContainerRZsNBWJ\appDevProjectContainer->make() /var/www/test/vendor/symfony/dependency-injection/Container.php:222
    0.0847    3873400   4. ContainerRZsNBWJ\appDevProjectContainer->load() /var/www/test/vendor/symfony/dependency-injection/Container.php:240
    0.0849    3874648   5. require('/var/www/test/app/cache/dev/ContainerRZsNBWJ/getApplicationService.php') /var/www/test/app/cache/dev/ContainerRZsNBWJ/appDevProjectContainer.php:72
    0.0854    3895696   6. Symfony\Component\Console\Application->add() /var/www/test/app/cache/dev/ContainerRZsNBWJ/getApplicationService.php:11
```
