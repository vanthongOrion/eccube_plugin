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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig */
class __TwigTemplate_b1d9e966f1f8d5e916d13b340b997b15 extends \Eccube\Twig\Template
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
        // line 12
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 13
            echo "    <nav>
        ";
            // line 14
            $context["classAlign"] = (( !array_key_exists("align", $context)) ? ("") : ((((($context["align"] ?? null) == "center")) ? (" justify-content-center") : ((((($context["align"] ?? null) == "right")) ? (" justify-content-end") : (""))))));
            // line 15
            echo "        ";
            $context["classSize"] = (( !array_key_exists("size", $context)) ? ("") : ((((($context["size"] ?? null) == "large")) ? (" pagination-lg") : ((((($context["size"] ?? null) == "small")) ? (" pagination-sm") : (""))))));
            // line 16
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["classAlign"] ?? null), 16, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["classSize"] ?? null), 16, $this->source), "html", null, true);
            echo "\">

            ";
            // line 18
            if (array_key_exists("previous", $context)) {
                // line 19
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 20, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 20, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 23
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 27
            echo "
            ";
            // line 28
            if ((($context["startPage"] ?? null) > 1)) {
                // line 29
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 30, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 30, $this->source), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 32
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 33
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 34, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 34, $this->source), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 36
($context["startPage"] ?? null) != 2)) {
                    // line 37
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 41
                echo "            ";
            }
            // line 42
            echo "
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 45
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 46, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 46, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 46, $this->source), "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 49
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 50, $this->source), "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 53
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
            ";
            // line 56
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 57
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 58
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 59
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 63
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 64, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 64, $this->source), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 67
                    echo "                ";
                }
                // line 68
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 69, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 69, $this->source), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageCount"] ?? null), 69, $this->source), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 72
            echo "
            ";
            // line 73
            if (array_key_exists("next", $context)) {
                // line 74
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 75, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 75, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 78
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 82
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 82,  210 => 79,  207 => 78,  199 => 75,  196 => 74,  194 => 73,  191 => 72,  183 => 69,  180 => 68,  177 => 67,  169 => 64,  166 => 63,  160 => 59,  157 => 58,  154 => 57,  152 => 56,  149 => 55,  142 => 53,  136 => 50,  133 => 49,  125 => 46,  122 => 45,  119 => 44,  115 => 43,  112 => 42,  109 => 41,  103 => 37,  101 => 36,  96 => 34,  93 => 33,  91 => 32,  86 => 30,  83 => 29,  81 => 28,  78 => 27,  72 => 24,  69 => 23,  61 => 20,  58 => 19,  56 => 18,  49 => 16,  46 => 15,  44 => 14,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "set" => 14, "for" => 43);
        static $filters = array("escape" => 16, "merge" => 20, "trans" => 20);
        static $functions = array("path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
