<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInfoPratiqueTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\InfoPratiqueType' shared autowired service.
     *
     * @return \App\Form\InfoPratiqueType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/InfoPratiqueType.php';

        return $container->privates['App\\Form\\InfoPratiqueType'] = new \App\Form\InfoPratiqueType();
    }
}
