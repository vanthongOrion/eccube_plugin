<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Order\EditController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Order\EditController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/EditController.php';

        $container->services['Eccube\\Controller\\Admin\\Order\\EditController'] = $instance = new \Eccube\Controller\Admin\Order\EditController(($container->services['Eccube\\Service\\TaxRuleService'] ?? $container->load('getTaxRuleServiceService')), ($container->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] ?? $container->getDeviceTypeRepositoryService()), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()), ($container->privates['Eccube\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')), ($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')), ($container->privates['eccube.purchase.flow.order'] ?? $container->load('getEccube_Purchase_Flow_OrderService')), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? $container->getOrderRepositoryService()), ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor'] ?? $container->load('getOrderNoProcessorService')), ($container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $container->load('getOrderItemTypeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $container->load('getOrderStatusRepositoryService')), ($container->privates['Eccube\\Service\\OrderStateMachine'] ?? $container->load('getOrderStateMachineService')), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.dkD0vsm'] ?? $container->load('get_ServiceLocator_DkD0vsmService'))->withContext('Eccube\\Controller\\Admin\\Order\\EditController', $container));

        return $instance;
    }
}
