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

/* @KnpPaginator/Pagination/uikit_v3_pagination.html.twig */
class __TwigTemplate_d2bf1d0faf7a9f11fa17a869d93f17e4 extends \Eccube\Twig\Template
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
        // line 14
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 15
            echo "    <ul class=\"uk-pagination uk-flex-center uk-margin-medium-top\">

            ";
            // line 17
            if (array_key_exists("previous", $context)) {
                // line 18
                echo "                <li>
                    <a rel=\"prev\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 19, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 19, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 22
                echo "                <li class=\"uk-disabled\">
                    <span>&laquo;&nbsp;";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 26
            echo "
            ";
            // line 27
            if ((($context["startPage"] ?? null) > 1)) {
                // line 28
                echo "                <li>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 29, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 29, $this->source), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 31
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 32
                    echo "                    <li>
                        <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 33, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 33, $this->source), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 35
($context["startPage"] ?? null) != 2)) {
                    // line 36
                    echo "                    <li class=\"uk-disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                }
                // line 40
                echo "            ";
            }
            // line 41
            echo "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 44
                    echo "                    <li>
                        <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 45, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 45, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 45, $this->source), "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 48
                    echo "                    <li class=\"uk-active\">
                        <span>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 49, $this->source), "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 52
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            ";
            // line 55
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 56
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 57
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 58
                        echo "                        <li class=\"uk-disabled\">
                            <span>&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 62
                        echo "                        <li>
                            <a href=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 63, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 63, $this->source), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 66
                    echo "                ";
                }
                // line 67
                echo "                <li>
                    <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 68, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 68, $this->source), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageCount"] ?? null), 68, $this->source), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 71
            echo "
            ";
            // line 72
            if (array_key_exists("next", $context)) {
                // line 73
                echo "                <li>
                    <a rel=\"next\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 74, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 74, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 77
                echo "                <li class=\"uk-disabled\">
                    <span>";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 81
            echo "        </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 81,  199 => 78,  196 => 77,  188 => 74,  185 => 73,  183 => 72,  180 => 71,  172 => 68,  169 => 67,  166 => 66,  158 => 63,  155 => 62,  149 => 58,  146 => 57,  143 => 56,  141 => 55,  138 => 54,  131 => 52,  125 => 49,  122 => 48,  114 => 45,  111 => 44,  108 => 43,  104 => 42,  101 => 41,  98 => 40,  92 => 36,  90 => 35,  85 => 33,  82 => 32,  80 => 31,  75 => 29,  72 => 28,  70 => 27,  67 => 26,  61 => 23,  58 => 22,  50 => 19,  47 => 18,  45 => 17,  41 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/uikit_v3_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "for" => 42);
        static $filters = array("escape" => 19, "merge" => 19, "trans" => 19);
        static $functions = array("path" => 19);

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
