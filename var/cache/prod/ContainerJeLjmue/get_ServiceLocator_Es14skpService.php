<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Es14skpService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Es14skp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Es14skp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tokenManager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', false],
        ], [
            'tokenManager' => '?',
        ]);
    }
}
