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

/* @admin/Setting/Shop/mail_view.twig */
class __TwigTemplate_1b4fa91c357d8f00774060186ed8bcb9 extends \Eccube\Twig\Template
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
        // line 11
        echo "<style media=\"print\" type=\"text/css\">
    .modal-open .modal {
        position: absolute;
        display: block;
        overflow: visible;
    }
    #table1 {
        width: 100% !important;
    }
    #table2 {
        width: 100% !important;
    }
    .modal-open #main {
        visibility:hidden;
    }
</style>

<small>";
        // line 28
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(($context["html_body"] ?? null), 28, $this->source));
        echo "</small>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/mail_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/mail_view.twig", "/var/www/html/src/Eccube/Resource/template/admin/Setting/Shop/mail_view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("purify" => 28, "raw" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['purify', 'raw'],
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
