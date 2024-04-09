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

/* @DoctrineMigrations/Collector/icon.svg */
class __TwigTemplate_ef821fc3e3d37db37e08ac1943bdb38e extends \Eccube\Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\">
    <polygon fill=\"#AAA\" points=\"0 0 24 0 24 7 17.5 7 16.5 3 15.5 7 11 7 12 3 3 3 4 7 0 7\" />
    <polygon fill=\"#AAA\" points=\"0 8.5 4.5 8.5 6 15.5 0 15.5\" />
    <polygon fill=\"#AAA\" points=\"10.5 8.5 15 8.5 13.5 15.5 9 15.5\" />
    <polygon fill=\"#AAA\" points=\"18 8.5 24 8.5 24 15.5 19.5 15.5\" />
    <polygon fill=\"#AAA\" points=\"0 17 6.5 17 7.5 21 8.5 17 13 17 12 21 21 21 20 17 24 17 24 24 0 24\" />
</svg>
";
    }

    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/icon.svg", "/var/www/html/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/icon.svg");
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
