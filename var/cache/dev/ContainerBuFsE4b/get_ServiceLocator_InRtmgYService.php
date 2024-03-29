<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_InRtmgYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.InRtmgY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.InRtmgY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tripRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'tripRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
