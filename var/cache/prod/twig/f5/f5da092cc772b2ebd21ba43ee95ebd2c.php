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

/* SiteKit42/PluginManager.php */
class __TwigTemplate_44e73da84f89d9243952f91316c80edb extends \Eccube\Twig\Template
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

namespace Plugin\\SiteKit42;


use Eccube\\Plugin\\AbstractPluginManager;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Yaml\\Yaml;

class PluginManager extends AbstractPluginManager
{
    public function install(array \$meta, ContainerInterface \$container)
    {
        \$fs = new Filesystem();
        \$routeYaml = \$container->getParameter('plugin_data_realdir').'/SiteKit42/routes.yaml';
        if (!\$fs->exists(\$routeYaml)) {
            \$fs->dumpFile(\$routeYaml, '');
        }
    }

    public function update(array \$meta, ContainerInterface \$container)
    {
        \$fs = new Filesystem();
        \$routeYaml = \$container->getParameter('plugin_data_realdir').'/SiteKit42/routes.yaml';
        if (!\$fs->exists(\$routeYaml)) {
            \$fs->dumpFile(\$routeYaml, '');
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "SiteKit42/PluginManager.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/PluginManager.php", "/var/www/html/app/Plugin/SiteKit42/PluginManager.php");
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
