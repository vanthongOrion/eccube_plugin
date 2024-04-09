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

/* MailMagazine42/Event/MailMagazineHistoryFilePaginationSubscriber.php */
class __TwigTemplate_bd47cea3230992f7309af321185ab363 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Event;

use Knp\\Component\\Pager\\Event\\ItemsEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Plugin\\MailMagazine42\\Service\\MailMagazineService;

class MailMagazineHistoryFilePaginationSubscriber implements EventSubscriberInterface
{
    /**
     * @var MailMagazineService
     */
    protected \$mailMagazineService;

    /**
     * MailMagazineHistoryFilePaginationSubscriber constructor.
     *
     * @param MailMagazineService \$mailMagazineService
     */
    public function __construct(MailMagazineService \$mailMagazineService)
    {
        \$this->mailMagazineService = \$mailMagazineService;
    }

    public function items(ItemsEvent \$event)
    {
        \$mailMagazineDir = \$this->mailMagazineService->getMailMagazineDir();
        if (!is_string(\$event->target) || strpos(\$event->target, \$mailMagazineDir) !== 0) {
            return;
        }

        \$event->stopPropagation();
        \$file = \$event->target;
        if (!file_exists(\$file)) {
            \$event->count = 0;
            \$event->items = [];

            return;
        }

        \$skip = \$event->getOffset();
        \$fp = fopen(\$file, 'r');
        \$count = \$event->getLimit();
        \$total = 0;

        \$event->items = [];
        while (\$line = fgets(\$fp)) {
            \$total++;
            if (\$skip-- > 0) {
                continue;
            }
            if (\$count > 0) {
                list(\$status, \$customerId, \$email, \$name) = explode(',', str_replace(PHP_EOL, '', \$line), 4);
                \$event->items[] = [
                    'status' => \$status,
                    'customerId' => \$customerId,
                    'email' => \$email,
                    'name' => \$name,
                ];
            }
            --\$count;
        }
        \$event->count = \$total;
    }

    public static function getSubscribedEvents()
    {
        return [
            'knp_pager.items' => ['items', 1],
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Event/MailMagazineHistoryFilePaginationSubscriber.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Event/MailMagazineHistoryFilePaginationSubscriber.php", "/var/www/html/app/Plugin/MailMagazine42/Event/MailMagazineHistoryFilePaginationSubscriber.php");
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
