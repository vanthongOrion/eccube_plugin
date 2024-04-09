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

/* @KnpPaginator/Pagination/semantic_ui_pagination.html.twig */
class __TwigTemplate_db8adf515efc9d09e53095d6722b8386 extends \Eccube\Twig\Template
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
        // line 13
        echo "<div class=\"ui pagination menu\">
    ";
        // line 14
        if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
            // line 15
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 15, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 15, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (array_key_exists("previous", $context)) {
            // line 21
            echo "        <a rel=\"prev\" class=\"item icon\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 21, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 21, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            echo "        ";
            if (($context["page"] != ($context["current"] ?? null))) {
                // line 28
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 28, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 28, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 28, $this->source), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 30
                echo "            <span class=\"active item\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 30, $this->source), "html", null, true);
                echo "</span>
        ";
            }
            // line 32
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    ";
        // line 35
        if (array_key_exists("next", $context)) {
            // line 36
            echo "        <a rel=\"next\" class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 36, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 36, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
            // line 42
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 42, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 42, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  114 => 42,  112 => 41,  109 => 40,  101 => 36,  99 => 35,  96 => 34,  89 => 32,  83 => 30,  75 => 28,  72 => 27,  68 => 26,  65 => 25,  57 => 21,  55 => 20,  52 => 19,  44 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/semantic_ui_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "for" => 26);
        static $filters = array("escape" => 15, "merge" => 15);
        static $functions = array("path" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge'],
                ['path']
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
