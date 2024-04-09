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

/* Api42/GraphQL/Query/OrdersQuery.php */
class __TwigTemplate_73e667d63d0ad65a70d5886bf11ad90c extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\GraphQL\\Query;

use Eccube\\Entity\\Order;
use Eccube\\Form\\Type\\Admin\\SearchOrderType;
use Eccube\\Repository\\OrderRepository;

class OrdersQuery extends SearchFormQuery
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;

    /**
     * OrdersQuery constructor.
     *
     * @param \$orderRepository
     */
    public function __construct(OrderRepository \$orderRepository)
    {
        \$this->orderRepository = \$orderRepository;
    }

    public function getName()
    {
        return 'orders';
    }

    public function getQuery()
    {
        return \$this->createQuery(Order::class, SearchOrderType::class, function (\$searchData) {
            return \$this->orderRepository->getQueryBuilderBySearchDataForAdmin(\$searchData);
        });
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/GraphQL/Query/OrdersQuery.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/GraphQL/Query/OrdersQuery.php", "/var/www/html/app/Plugin/Api42/GraphQL/Query/OrdersQuery.php");
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
