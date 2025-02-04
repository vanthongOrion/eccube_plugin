<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_CartService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.cart' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\PurchaseFlow
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ReadableCollection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/StockValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/SaleLimitValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/ProductStatusValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PriceChangeValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/ClassCategoryValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentTotalNegativeValidator.php';

        $container->privates['eccube.purchase.flow.cart'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

        $instance->setFlowType('cart');
        $instance->setItemValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'] ?? $container->load('getDeliverySettingValidatorService')), 1 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'] = new \Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator())), 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator())), 3 => new \Eccube\Service\PurchaseFlow\Processor\StockValidator(), 4 => new \Eccube\Service\PurchaseFlow\Processor\SaleLimitValidator(), 5 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ClassCategoryValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ClassCategoryValidator'] = new \Eccube\Service\PurchaseFlow\Processor\ClassCategoryValidator()))]));
        $instance->setItemHolderValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\EmptyItemsValidator'] ?? $container->load('getEmptyItemsValidatorService'))]));
        $instance->setItemPreprocessors(new \Doctrine\Common\Collections\ArrayCollection());
        $instance->setItemHolderPreprocessors(new \Doctrine\Common\Collections\ArrayCollection());
        $instance->setItemHolderPostValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentValidator'] ?? $container->load('getPaymentValidatorService')), 1 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalLimitValidator'] ?? $container->load('getPaymentTotalLimitValidatorService')), 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator()))]));

        return $instance;
    }
}
