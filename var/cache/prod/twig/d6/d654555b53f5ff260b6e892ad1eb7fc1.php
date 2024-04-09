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

/* SalesReport42/SalesReportNav.php */
class __TwigTemplate_96a36fc617993d55aa3f6cb199269640 extends \Eccube\Twig\Template
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

namespace Plugin\\SalesReport42;

use Eccube\\Common\\EccubeNav;

class SalesReportNav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'SalesReport42' => [
                'name' => 'sales_report.admin.nav.001',
                'icon' => 'fa-chart-bar',
                'children' => [
                    'sales_report_admin_term' => [
                        'id' => 'sales_report_admin_term',
                        'url' => 'sales_report_admin_term',
                        'name' => 'sales_report.admin.nav.002',
                    ],
                    'sales_report_admin_product' => [
                        'id' => 'sales_report_admin_product',
                        'url' => 'sales_report_admin_product',
                        'name' => 'sales_report.admin.nav.003',
                    ],
                    'sales_report_admin_age' => [
                        'id' => 'sales_report_admin_age',
                        'url' => 'sales_report_admin_age',
                        'name' => 'sales_report.admin.nav.004',
                    ],
                ],
            ],
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "SalesReport42/SalesReportNav.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/SalesReportNav.php", "/var/www/html/app/Plugin/SalesReport42/SalesReportNav.php");
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
