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

/* @KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_142b13922349af2e24842de3ef5bc80e extends \Eccube\Twig\Template
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
        // line 16
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 17
            echo "    <ul class=\"pagination justify-content-center\">

    ";
            // line 19
            if (array_key_exists("previous", $context)) {
                // line 20
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 21, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 21, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 24
                echo "        <li class=\"disabled page-item\">
            <a class=\"page-link\">&laquo;&nbsp;";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 28
            echo "
    ";
            // line 29
            if ((($context["startPage"] ?? null) > 1)) {
                // line 30
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 31, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 31, $this->source), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 33
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 34
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 35, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 35, $this->source), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 37
($context["startPage"] ?? null) != 2)) {
                    // line 38
                    echo "        <li class=\"disabled page-item\">
            <a class=\"page-link\">&hellip;</a>
        </li>
        ";
                }
                // line 42
                echo "    ";
            }
            // line 43
            echo "
    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "        ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 46
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 47, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 47, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 47, $this->source), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 50
                    echo "            <li class=\"active\">
                <a class=\"page-link\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 51, $this->source), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 54
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
    ";
            // line 57
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 58
                echo "        ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 59
                    echo "            ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 60
                        echo "                <li class=\"disabled page-item\">
                    <a class=\"page-link\">&hellip;</a>
                </li>
            ";
                    } else {
                        // line 64
                        echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 65, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 65, $this->source), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 68
                    echo "        ";
                }
                // line 69
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 70, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 70, $this->source), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageCount"] ?? null), 70, $this->source), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 73
            echo "
    ";
            // line 74
            if (array_key_exists("next", $context)) {
                // line 75
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"next\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 76, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 76, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 79
                echo "        <li class=\"disabled page-item\">
            <a class=\"page-link\">";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            }
            // line 83
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 83,  199 => 80,  196 => 79,  188 => 76,  185 => 75,  183 => 74,  180 => 73,  172 => 70,  169 => 69,  166 => 68,  158 => 65,  155 => 64,  149 => 60,  146 => 59,  143 => 58,  141 => 57,  138 => 56,  131 => 54,  125 => 51,  122 => 50,  114 => 47,  111 => 46,  108 => 45,  104 => 44,  101 => 43,  98 => 42,  92 => 38,  90 => 37,  85 => 35,  82 => 34,  80 => 33,  75 => 31,  72 => 30,  70 => 29,  67 => 28,  61 => 25,  58 => 24,  50 => 21,  47 => 20,  45 => 19,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v3_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "for" => 44);
        static $filters = array("escape" => 21, "merge" => 21, "trans" => 21);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge', 'trans'],
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
