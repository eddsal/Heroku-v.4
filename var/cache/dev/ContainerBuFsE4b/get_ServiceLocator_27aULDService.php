<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_27aULDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.27a_uLD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.27a_uLD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pay' => ['privates', '.errored..service_locator.27a_uLD.App\\Entity\\Pays', NULL, 'Cannot autowire service ".service_locator.27a_uLD": it references class "App\\Entity\\Pays" but no such service exists.'],
        ], [
            'pay' => 'App\\Entity\\Pays',
        ]);
    }
}
