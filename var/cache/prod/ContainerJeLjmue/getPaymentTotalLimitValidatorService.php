<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentTotalLimitValidatorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\PaymentTotalLimitValidator' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\PaymentTotalLimitValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentTotalLimitValidator.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalLimitValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalLimitValidator(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
