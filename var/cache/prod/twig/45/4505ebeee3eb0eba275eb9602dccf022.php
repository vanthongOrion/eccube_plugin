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

/* Api42/Doctrine/EventSubscriber/EntityListener.php */
class __TwigTemplate_4027b2428742b1f8cb3497cc36c46597 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\Doctrine\\EventSubscriber;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Persistence\\Event\\LifecycleEventArgs;
use Doctrine\\ORM\\Events;
use Plugin\\Api42\\Service\\WebHookEvents;

class EntityListener implements EventSubscriber
{
    /**
     * @var WebHookEvents
     */
    private \$webHookEvents;

    /**
     * EntityListener constructor.
     * @param WebHookEvents \$webHookEvents
     */
    public function __construct(WebHookEvents \$webHookEvents)
    {
        \$this->webHookEvents = \$webHookEvents;
    }

    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postUpdate,
            Events::preRemove,
        ];
    }

    public function postPersist(LifecycleEventArgs \$args)
    {
        \$this->webHookEvents->onCreated(\$args->getObject());
    }

    public function postUpdate(LifecycleEventArgs \$args)
    {
        \$this->webHookEvents->onUpdated(\$args->getObject());
    }

    public function preRemove(LifecycleEventArgs \$args)
    {
        \$this->webHookEvents->onDeleted(\$args->getObject());
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Doctrine/EventSubscriber/EntityListener.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Doctrine/EventSubscriber/EntityListener.php", "/var/www/html/app/Plugin/Api42/Doctrine/EventSubscriber/EntityListener.php");
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
