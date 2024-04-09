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

/* Api42/GraphQL/Type/ConnectionType.php */
class __TwigTemplate_751ea276f0ce6b9d0a1fb371dcacdc63 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\GraphQL\\Type;

use GraphQL\\Type\\Definition\\ObjectType;
use GraphQL\\Type\\Definition\\Type;
use Knp\\Component\\Pager\\Pagination\\PaginationInterface;
use Plugin\\Api42\\GraphQL\\Types;

class ConnectionType extends ObjectType
{
    public function __construct(string \$className, Types \$types)
    {
        \$config = [
            'name' => (new \\ReflectionClass(\$className))->getShortName().'Connection',
            'fields' => [
                'edges' => [
                    'type' => Type::listOf(new EdgeType(\$className, \$types)),
                    'resolve' => function (\$root) {
                        return \$root;
                    },
                ],
                'nodes' => [
                    'type' => Type::listOf(\$types->get(\$className)),
                    'resolve' => function (\$root) {
                        return \$root;
                    },
                ],
                'pageInfo' => [
                    'type' => Type::nonNull(new PageInfoType(\$className)),
                    'resolve' => function (\$root) {
                        return \$root;
                    },
                ],
                'totalCount' => [
                    'type' => Type::nonNull(Type::int()),
                    'resolve' => function (PaginationInterface \$pagination) {
                        return \$pagination->getTotalItemCount();
                    },
                ],
            ],
        ];
        parent::__construct(\$config);
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/GraphQL/Type/ConnectionType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/GraphQL/Type/ConnectionType.php", "/var/www/html/app/Plugin/Api42/GraphQL/Type/ConnectionType.php");
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
