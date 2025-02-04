<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YDCIIG4Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yDCIIG4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yDCIIG4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Plugin' => ['privates', '.errored..service_locator.yDCIIG4.Eccube\\Entity\\Plugin', NULL, 'Cannot autowire service ".service_locator.yDCIIG4": it references class "Eccube\\Entity\\Plugin" but no such service exists.'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
        ], [
            'Plugin' => 'Eccube\\Entity\\Plugin',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
        ]);
    }
}
