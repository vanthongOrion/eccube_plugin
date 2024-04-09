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

/* @KnpPaginator/Pagination/materialize_pagination.html.twig */
class __TwigTemplate_fc561921b814cfb017a506f6ee302853 extends \Eccube\Twig\Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            echo "    <ul class=\"pagination\">
        ";
            // line 15
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 16
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 17, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 17, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            } else {
                // line 22
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (array_key_exists("previous", $context)) {
                // line 30
                echo "            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 31, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 31, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            } else {
                // line 36
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 45
                    echo "                <li class=\"waves-effect\">
                    <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 46, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 46, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 46, $this->source), "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 49
                    echo "                <li class=\"active\">
                    <a href=\"#!\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 50, $this->source), "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        ";
            // line 55
            if (array_key_exists("next", $context)) {
                // line 56
                echo "            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 57, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 57, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            } else {
                // line 62
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            }
            // line 68
            echo "
        ";
            // line 69
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 70
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 71, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 71, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            } else {
                // line 76
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            }
            // line 82
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/materialize_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 82,  165 => 76,  157 => 71,  154 => 70,  152 => 69,  149 => 68,  141 => 62,  133 => 57,  130 => 56,  128 => 55,  125 => 54,  119 => 53,  113 => 50,  110 => 49,  102 => 46,  99 => 45,  96 => 44,  92 => 43,  89 => 42,  81 => 36,  73 => 31,  70 => 30,  68 => 29,  65 => 28,  57 => 22,  49 => 17,  46 => 16,  44 => 15,  41 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/materialize_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/materialize_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "for" => 43);
        static $filters = array("escape" => 17, "merge" => 17);
        static $functions = array("path" => 17);

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
