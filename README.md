# Symfony Console w/ Dependency Injection POC

This repo is a proof of concept of https://stackoverflow.com/a/50356503/895083.
It currently yields the following result:

```
$ composer install
$ ./index.php
PHP Fatal error:  Uncaught Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException: You have requested a non-existent service "Symfony\Component\Console\Application". in /var/www/test/vendor/symfony/dependency-injection/ContainerBuilder.php:1011
Stack trace:
#0 /var/www/test/app/AppKernel.php(23): Symfony\Component\DependencyInjection\ContainerBuilder->getDefinition('Symfony\\Compone...')
#1 /var/www/test/vendor/symfony/http-kernel/Kernel.php(647): App\AppKernel->build(Object(Symfony\Component\DependencyInjection\ContainerBuilder))
#2 /var/www/test/vendor/symfony/http-kernel/Kernel.php(616): Symfony\Component\HttpKernel\Kernel->prepareContainer(Object(Symfony\Component\DependencyInjection\ContainerBuilder))
#3 /var/www/test/vendor/symfony/http-kernel/Kernel.php(514): Symfony\Component\HttpKernel\Kernel->buildContainer()
#4 /var/www/test/vendor/symfony/http- in /var/www/test/vendor/symfony/dependency-injection/ContainerBuilder.php on line 1011

Fatal error: Uncaught Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException: You have requested a non-existent service "Symfony\Component\Console\Application". in /var/www/test/vendor/symfony/dependency-injection/ContainerBuilder.php on line 1011

Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException: You have requested a non-existent service "Symfony\Component\Console\Application". in /var/www/test/vendor/symfony/dependency-injection/ContainerBuilder.php on line 1011

Call Stack:
    0.0003     355584   1. {main}() /var/www/test/index.php:0
    0.0035     645968   2. App\AppKernel->boot() /var/www/test/index.php:10
    0.0035     645968   3. App\AppKernel->initializeContainer() /var/www/test/vendor/symfony/http-kernel/Kernel.php:123
    0.0039     676352   4. App\AppKernel->buildContainer() /var/www/test/vendor/symfony/http-kernel/Kernel.php:514
    0.0089    1190968   5. App\AppKernel->prepareContainer() /var/www/test/vendor/symfony/http-kernel/Kernel.php:616
    0.0089    1190968   6. App\AppKernel->build() /var/www/test/vendor/symfony/http-kernel/Kernel.php:647
    0.0089    1190968   7. Symfony\Component\DependencyInjection\ContainerBuilder->getDefinition() /var/www/test/app/AppKernel.php:23
```
