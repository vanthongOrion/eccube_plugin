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

/* MailMagazine42/Entity/AdminCustomerQueryCustomizer.php */
class __TwigTemplate_2ac2e0e60278644747f903cd484dada1 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Entity;

use Eccube\\Doctrine\\Query\\WhereClause;
use Eccube\\Doctrine\\Query\\WhereCustomizer;
use Eccube\\Repository\\QueryKey;

class AdminCustomerQueryCustomizer extends WhereCustomizer
{
    /**
     * {@inheritdoc}
     *
     * @param array \$params
     * @param \$queryKey
     *
     * @return WhereClause[]
     */
    protected function createStatements(\$params, \$queryKey)
    {
        if (!isset(\$params['plg_mailmagazine_flg'])) {
            return [];
        }

        return [WhereClause::eq('c.mailmaga_flg', ':mailmaga_flg', [
            'mailmaga_flg' => \$params['plg_mailmagazine_flg'],
        ])];
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getQueryKey()
    {
        return QueryKey::CUSTOMER_SEARCH;
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Entity/AdminCustomerQueryCustomizer.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Entity/AdminCustomerQueryCustomizer.php", "/var/www/html/app/Plugin/MailMagazine42/Entity/AdminCustomerQueryCustomizer.php");
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
