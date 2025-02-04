<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S47iYzNService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.S47iYzN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S47iYzN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CustomerAddress' => ['privates', '.errored..service_locator.S47iYzN.Eccube\\Entity\\CustomerAddress', NULL, 'Cannot autowire service ".service_locator.S47iYzN": it references class "Eccube\\Entity\\CustomerAddress" but no such service exists.'],
        ], [
            'CustomerAddress' => 'Eccube\\Entity\\CustomerAddress',
        ]);
    }
}
