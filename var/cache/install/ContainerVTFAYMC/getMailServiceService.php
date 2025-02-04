<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Service\MailService' shared autowired service.
     *
     * @return \Eccube\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/MailService.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        return $container->privates['Eccube\\Service\\MailService'] = new \Eccube\Service\MailService(new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => $container->load('getMailer_TransportFactory_NullService');
            yield 1 => $container->load('getMailer_TransportFactory_SendmailService');
            yield 2 => $container->load('getMailer_TransportFactory_NativeService');
            yield 3 => $container->load('getMailer_TransportFactory_SmtpService');
        }, 4)))->fromStrings(['main' => $container->getEnv('MAILER_DSN')]), NULL, $a), ($container->privates['Eccube\\Repository\\MailTemplateRepository'] ?? $container->load('getMailTemplateRepositoryService')), ($container->privates['Eccube\\Repository\\MailHistoryRepository'] ?? $container->load('getMailHistoryRepositoryService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), $a, ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), $container);
    }
}
