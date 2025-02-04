<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductController2Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\ProductController' shared autowired service.
     *
     * @return \Eccube\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/ProductController.php';

        $container->services['Eccube\\Controller\\ProductController'] = $instance = new \Eccube\Controller\ProductController(($container->privates['eccube.purchase.flow.cart'] ?? $container->load('getEccube_Purchase_Flow_CartService')), ($container->privates['Eccube\\Repository\\CustomerFavoriteProductRepository'] ?? $container->load('getCustomerFavoriteProductRepositoryService')), ($container->privates['Eccube\\Service\\CartService'] ?? $container->getCartServiceService()), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), ($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')), ($container->privates['Eccube\\Repository\\Master\\ProductListMaxRepository'] ?? $container->load('getProductListMaxRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.dkD0vsm'] ?? $container->load('get_ServiceLocator_DkD0vsmService'))->withContext('Eccube\\Controller\\ProductController', $container));

        return $instance;
    }
}
