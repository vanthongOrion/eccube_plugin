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

/* Api42/Service/WebHookEvents.php */
class __TwigTemplate_dbca77a79331324381194cccf56c2c2b extends \Eccube\Twig\Template
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

use Eccube\\Entity\\Customer;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Product;

class WebHookEvents
{
    private \$events = ['created' => [], 'updated' => [], 'deleted' => []];

    /**
     * @var WebHookTrigger[]
     */
    private \$triggers = [];

    public function onCreated(\$entity)
    {
        if (\$this->isTargetEntity(\$entity)) {
            \$this->events['created'][] = \$this->toEntityDefinition(\$entity);
            \$this->events['created'] = array_unique(\$this->events['created'], SORT_REGULAR);
        } else {
            \$this->onAssociationMappingUpdated(\$entity);
        }
    }

    public function onUpdated(\$entity)
    {
        if (\$this->isTargetEntity(\$entity)) {
            \$this->events['updated'][] = \$this->toEntityDefinition(\$entity);
            \$this->events['updated'] = array_unique(\$this->events['updated'], SORT_REGULAR);
        } else {
            \$this->onAssociationMappingUpdated(\$entity);
        }
    }

    public function onDeleted(\$entity)
    {
        if (\$this->isTargetEntity(\$entity)) {
            \$this->events['deleted'][] = \$this->toEntityDefinition(\$entity);
            \$this->events['deleted'] = array_unique(\$this->events['deleted'], SORT_REGULAR);
        } else {
            \$this->onAssociationMappingUpdated(\$entity);
        }
    }

    private function isTargetEntity(\$entity)
    {
        return \$entity instanceof Product
            || \$entity instanceof Order
            || \$entity instanceof Customer;
    }

    private function toEntityDefinition(\$entity)
    {
        return [
            'entity' => strtolower((new \\ReflectionClass(\$entity))->getShortName()),
            'id' => \$entity->getId(),
        ];
    }

    public function addTrigger(WebHookTrigger \$trigger)
    {
        \$this->triggers[] = \$trigger;
    }

    private function onAssociationMappingUpdated(\$entity)
    {
        foreach (\$this->triggers as \$trigger) {
            \$target = \$trigger->emitFor(\$entity);
            if (\$target) {
                \$this->onUpdated(\$target);
            }
        }
    }

    public function toArray()
    {
        \$events = [];

        foreach (\$this->events['created'] as \$def) {
            \$def['action'] = 'created';
            \$events[] = \$def;
        }

        foreach (\$this->events['deleted'] as \$def) {
            \$def['action'] = 'deleted';
            \$events[] = \$def;
        }

        foreach (\$this->events['updated'] as \$def) {
            if (!in_array(\$def, \$this->events['created']) && !in_array(\$def, \$this->events['deleted'])) {
                \$def['action'] = 'updated';
                \$events[] = \$def;
            }
        }

        return \$events;
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Service/WebHookEvents.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Service/WebHookEvents.php", "/var/www/html/app/Plugin/Api42/Service/WebHookEvents.php");
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
