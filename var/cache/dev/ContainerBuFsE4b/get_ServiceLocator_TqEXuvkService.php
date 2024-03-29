<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TqEXuvkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tqEXuvk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tqEXuvk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'favorieRepository' => ['privates', 'App\\Repository\\FavorieRepository', 'getFavorieRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'paysRepository' => ['privates', 'App\\Repository\\PaysRepository', 'getPaysRepositoryService', true],
            'saisonRepository' => ['privates', 'App\\Repository\\SaisonRepository', 'getSaisonRepositoryService', true],
            'voyageRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'favorieRepository' => 'App\\Repository\\FavorieRepository',
            'paginator' => '?',
            'paysRepository' => 'App\\Repository\\PaysRepository',
            'saisonRepository' => 'App\\Repository\\SaisonRepository',
            'voyageRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
