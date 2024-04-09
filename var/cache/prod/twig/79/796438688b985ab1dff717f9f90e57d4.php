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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_c30b54290eca85bf7e061ae071d935e5 extends \Eccube\Twig\Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            echo "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . $this->sandbox->ensureToStringAllowed(($context["align"] ?? null), 3, $this->source))) : (""));
            // line 4
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["classAlign"] ?? null), 4, $this->source), "html", null, true);
            echo "\">

            ";
            // line 6
            if (array_key_exists("previous", $context)) {
                // line 7
                echo "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 8, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 8, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            } else {
                // line 13
                echo "                <li class=\"pagination-previous disabled\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </li>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if ((($context["startPage"] ?? null) > 1)) {
                // line 19
                echo "                <li>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 20, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 20, $this->source), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 22
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 23
                    echo "                    <li>
                        <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 24, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 24, $this->source), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 26
($context["startPage"] ?? null) != 2)) {
                    // line 27
                    echo "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 29
                echo "            ";
            }
            // line 30
            echo "
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 33
                    echo "                    <li>
                        <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 34, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 34, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">
                            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 35, $this->source), "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                } else {
                    // line 39
                    echo "                    <li class=\"current\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 39, $this->source), "html", null, true);
                    echo "</li>
                ";
                }
                // line 41
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            ";
            // line 43
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 44
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 45
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 46
                        echo "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 48
                        echo "                        <li>
                            <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 49, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 49, $this->source), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">
                                ";
                        // line 50
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 56, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 56, $this->source), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageCount"] ?? null), 56, $this->source), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                echo "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 62, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 62, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            } else {
                // line 67
                echo "                <li class=\"pagination-next disabled\">
                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </li>
            ";
            }
            // line 71
            echo "
        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 71,  210 => 68,  207 => 67,  200 => 63,  196 => 62,  193 => 61,  191 => 60,  188 => 59,  180 => 56,  177 => 55,  174 => 54,  167 => 50,  163 => 49,  160 => 48,  156 => 46,  153 => 45,  150 => 44,  148 => 43,  145 => 42,  139 => 41,  133 => 39,  126 => 35,  122 => 34,  119 => 33,  116 => 32,  112 => 31,  109 => 30,  106 => 29,  102 => 27,  100 => 26,  95 => 24,  92 => 23,  90 => 22,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  71 => 14,  68 => 13,  61 => 9,  57 => 8,  54 => 7,  52 => 6,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v6_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 3, "for" => 31);
        static $filters = array("escape" => 4, "merge" => 8, "trans" => 9);
        static $functions = array("path" => 8);

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
