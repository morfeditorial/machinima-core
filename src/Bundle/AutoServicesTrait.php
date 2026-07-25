<?php

declare(strict_types=1);

namespace Morfeditorial\MachinimaCoreBundle\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

trait AutoServicesTrait
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $path = $this->getPath().'/config/services.yaml';
        if (is_file($path)) {
            $container->import($path);
        }
    }
}
