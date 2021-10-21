<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O61fG3lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o61fG3l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o61fG3l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'PaysRepository' => ['privates', 'App\\Repository\\PaysRepository', 'getPaysRepositoryService', true],
            'SaisonRepository' => ['privates', 'App\\Repository\\SaisonRepository', 'getSaisonRepositoryService', true],
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'favorieRepository' => ['privates', 'App\\Repository\\FavorieRepository', 'getFavorieRepositoryService', true],
            'voyage' => ['privates', '.errored..service_locator.o61fG3l.App\\Entity\\Voyage', NULL, 'Cannot autowire service ".service_locator.o61fG3l": it references class "App\\Entity\\Voyage" but no such service exists.'],
        ], [
            'PaysRepository' => 'App\\Repository\\PaysRepository',
            'SaisonRepository' => 'App\\Repository\\SaisonRepository',
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'favorieRepository' => 'App\\Repository\\FavorieRepository',
            'voyage' => 'App\\Entity\\Voyage',
        ]);
    }
}