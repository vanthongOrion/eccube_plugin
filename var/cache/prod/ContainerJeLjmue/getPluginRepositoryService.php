<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Repository\PluginRepository' shared autowired service.
     *
     * @return \Eccube\Repository\PluginRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['Eccube\\Repository\\PluginRepository'] = $container->createProxy('PluginRepository_c4546a6', function () use ($container) {
                return \PluginRepository_c4546a6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';

        return new \Eccube\Repository\PluginRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
