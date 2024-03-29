<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NN6TicuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nN6Ticu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nN6Ticu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'voyageRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'paginator' => '?',
            'voyageRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
