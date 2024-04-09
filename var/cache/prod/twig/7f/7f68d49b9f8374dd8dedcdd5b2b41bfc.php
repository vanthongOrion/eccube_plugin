<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Api42/Service/WebHookService.php */
class __TwigTemplate_71b17b7831487fbf3c08e142686121aa extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\Service;

use Eccube\\Util\\StringUtil;
use GuzzleHttp\\Client;
use GuzzleHttp\\Exception\\TransferException;
use GuzzleHttp\\Pool;
use GuzzleHttp\\Psr7\\Request;
use GuzzleHttp\\Psr7\\Response;
use Plugin\\Api42\\Entity\\WebHook;
use Plugin\\Api42\\Repository\\WebHookRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent ;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\RouterInterface;

class WebHookService implements EventSubscriberInterface
{
    /**
     * @var RouterInterface
     */
    private \$router;

    /**
     * @var WebHookRepository
     */
    private \$webHookRepository;

    /**
     * @var WebHookEvents
     */
    private \$webHookEvents;

    /**
     * WebHookService constructor.
     */
    public function __construct(RouterInterface \$router, WebHookRepository \$webHookRepository, WebHookEvents \$webHookEvents)
    {
        \$this->router = \$router;
        \$this->webHookRepository = \$webHookRepository;
        \$this->webHookEvents = \$webHookEvents;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => 'fire',
        ];
    }

    public function fire(ResponseEvent \$event)
    {
        if (!\$event->isMainRequest()) {
            return;
        }

        \$events = \$this->webHookEvents->toArray();

        if (\$events) {
            \$payload = json_encode(\$events);

            /** @var WebHook[] \$availableWebHooks */
            \$availableWebHooks = \$this->webHookRepository->findBy(['enabled' => true]);

            \$requests = array_map(function (WebHook \$WebHook) use (\$payload) {
                return \$this->createRequest(\$payload, \$WebHook);
            }, \$availableWebHooks);

            \$client = new Client();
            \$pool = new Pool(\$client, \$requests, [
                'concurrency' => 5,
                'options' => [
                    'connect_timeout' => 1,
                    'timeout' => 5,
                    'allow_redirects' => false,
                ],
                'fulfilled' => function (Response \$reason, \$index) use (\$availableWebHooks) {
                    log_info('WebHook request successful.', ['Payload URL' => \$availableWebHooks[\$index]->getPayloadUrl()]);
                },
                'rejected' => function (TransferException \$e, \$index) use (\$availableWebHooks) {
                    log_error(\$e->getMessage(), ['Payload URL' => \$availableWebHooks[\$index]->getPayloadUrl()]);
                },
            ]);
            \$p = \$pool->promise();
            \$p->wait();
        }
    }

    private function createRequest(\$payload, \$WebHook)
    {
        \$headers = [
            'Content-Type' => 'application/json',
            'X-ECCUBE-URL' => \$this->router->generate('homepage', [], RouterInterface::ABSOLUTE_URL),
        ];
        if (StringUtil::isNotBlank(\$WebHook->getSecret())) {
            \$headers['X-ECCUBE-Signature'] = hash_hmac('sha256', \$payload, \$WebHook->getSecret());
        }

        return new Request('POST', \$WebHook->getPayloadUrl(), \$headers, \$payload);
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Service/WebHookService.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Service/WebHookService.php", "/var/www/html/app/Plugin/Api42/Service/WebHookService.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
