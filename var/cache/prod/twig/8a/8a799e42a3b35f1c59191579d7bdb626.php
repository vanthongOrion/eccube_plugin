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

/* SiteKit42/Resource/assets/google-search-console.svg */
class __TwigTemplate_b6e964236b1a0568ce759bb3f4721728 extends \Eccube\Twig\Template
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
        echo "<svg height=\"2230\" width=\"2500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 296 264\"><path d=\"M83 22l22-22v42H83zM213 22L191 0v42h22z\" fill=\"#7b7b7b\" fill-rule=\"evenodd\"/><path d=\"M105 0h86v21h-86z\" fill=\"#5a5a5a\"/><g fill-rule=\"evenodd\"><path d=\"M272 264H24a24 24 0 0 1-24-24V83.238L41.238 42h213.524L296 83.238V240a24 24 0 0 1-24 24z\" fill=\"#e6e7e8\"/><path d=\"M0 127V83.238L41.238 42h213.524L296 83.238V127z\" fill=\"#d0d1d2\"/><path d=\"M34 264V94a10 10 0 0 1 10-10h208a10 10 0 0 1 10 10v170z\" fill=\"#458cf5\"/></g><path d=\"M34 127h228v137H34z\" fill=\"#fff\"/><path d=\"M194 264v-41l-20-20-13-36 9-23 51 51 9-38 32 32v75z\" fill=\"#d2d3d4\" fill-rule=\"evenodd\"/><path d=\"M49 143h76v85H49zM49 247h98v17H49z\" fill=\"#d2d3d4\"/><path d=\"M213 232.1V264h-42v-31.447a49.507 49.507 0 0 1-1-89.651V190l21 13 22-13v-47.1a49.518 49.518 0 0 1 0 89.2z\" fill=\"#505050\" fill-rule=\"evenodd\"/><path d=\"M57.5 95a8.5 8.5 0 1 1-8.5 8.5 8.5 8.5 0 0 1 8.5-8.5zm25 0a8.5 8.5 0 1 1-8.5 8.5 8.5 8.5 0 0 1 8.5-8.5z\" fill=\"#e6e7e8\" fill-rule=\"evenodd\"/></svg>";
    }

    public function getTemplateName()
    {
        return "SiteKit42/Resource/assets/google-search-console.svg";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Resource/assets/google-search-console.svg", "/var/www/html/app/Plugin/SiteKit42/Resource/assets/google-search-console.svg");
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
