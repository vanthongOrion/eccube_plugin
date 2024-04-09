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

/* Api42/GraphQL/Schema.php */
class __TwigTemplate_a9baaa2d0302316590ec74e753c38d96 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\GraphQL;

use ArrayObject;
use GraphQL\\Type\\Definition\\ObjectType;

class Schema extends \\GraphQL\\Type\\Schema
{
    public function __construct(
        Types \$types,
        ArrayObject \$queries,
        ArrayObject \$mutations
    ) {
        parent::__construct([
            'query' => new ObjectType([
                'name' => 'Query',
                'fields' => array_reduce(\$queries->getArrayCopy(), function (\$acc, Query \$query) {
                    \$acc[\$query->getName()] = \$query->getQuery();
                    return \$acc;
                }, []),
                'typeLoader' => function (\$name) use (\$types) {
                    return \$types->get(\$name);
                },
            ]),
            'mutation' => new ObjectType([
                'name' => 'Mutation',
                'fields' => array_reduce(\$mutations->getArrayCopy(), function (\$acc, Mutation \$mutation) {
                    \$acc[\$mutation->getName()] = \$mutation->getMutation();
                    return \$acc;
                }, []),
                'typeLoader' => function (\$name) use (\$types) {
                    return \$types->get(\$name);
                },
            ]),
        ]);
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/GraphQL/Schema.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/GraphQL/Schema.php", "/var/www/html/app/Plugin/Api42/GraphQL/Schema.php");
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
