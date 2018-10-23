<?php

namespace App;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class AppKernel extends Kernel
{

    public function registerBundles(): array
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__.'/../config/services.yml');
    }

    protected function build(ContainerBuilder $containerBuilder): void
    {
        $applicationDefinition = $containerBuilder->getDefinition(
          Application::class
        );

        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!is_a($definition->getClass(), Command::class, true)) {
                continue;
            }

            $applicationDefinition->addMethodCall(
              'add',
              ['@'.$definition->getClass()]
            );
        }
    }

}
