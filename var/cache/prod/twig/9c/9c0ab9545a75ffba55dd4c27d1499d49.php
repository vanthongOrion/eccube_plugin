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

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_b6024f31a2f84609571fe077304f76bf extends \Eccube\Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 3, $this->source), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["rounded"] ?? null), 4, $this->source), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 5, $this->source), null)) : (null));
        // line 6
        echo "
";
        // line 7
        $context["classes"] = [0 => "pagination"];
        // line 8
        echo "
";
        // line 9
        if ((($context["position"] ?? null) != "left")) {
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 9, $this->source), [0 => ("is-" . $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 9, $this->source))]);
        }
        // line 10
        if (($context["rounded"] ?? null)) {
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 10, $this->source), [0 => "is-rounded"]);
        }
        // line 11
        if ((($context["size"] ?? null) != null)) {
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 11, $this->source), [0 => ("is-" . $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 11, $this->source))]);
        }
        // line 12
        echo "
";
        // line 13
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            echo "    <nav class=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 14, $this->source), " "), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                echo "            <a rel=\"prev\" class=\"pagination-previous\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 16, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 16, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 18
                echo "            <a class=\"pagination-previous\" disabled>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                echo "            <a rel=\"next\" class=\"pagination-next\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 22, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 22, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 24
                echo "            <a class=\"pagination-next\" disabled>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 26
            echo "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if ((($context["current"] ?? null) == ($context["first"] ?? null))) {
                // line 30
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["current"] ?? null), 30, $this->source), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 30, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 30, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">1</a>
                ";
            } else {
                // line 32
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 32, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 32, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">1</a>
                ";
            }
            // line 34
            echo "            </li>

            ";
            // line 36
            if ((((($__internal_compile_0 = ($context["pagesInRange"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) - ($context["first"] ?? null)) >= 2)) {
                // line 37
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
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
                if (((($context["first"] ?? null) != $context["page"]) && ($context["page"] != ($context["last"] ?? null)))) {
                    // line 44
                    echo "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == ($context["current"] ?? null))) {
                        // line 46
                        echo "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["current"] ?? null), 46, $this->source), "html", null, true);
                        echo "\" aria-current=\"page\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 46, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 46, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 46, $this->source), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 48
                        echo "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 48, $this->source), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 48, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 48, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 48, $this->source), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 50
                    echo "                    </li>
                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if (((($context["last"] ?? null) - (($__internal_compile_1 = ($context["pagesInRange"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(twig_length_filter($this->env, ($context["pagesInRange"] ?? null)) - 1)] ?? null) : null)) >= 2)) {
                // line 55
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            echo "
            <li>
                ";
            // line 61
            if ((($context["current"] ?? null) == ($context["last"] ?? null))) {
                // line 62
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["current"] ?? null), 62, $this->source), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 62, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 62, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["last"] ?? null), 62, $this->source), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 64
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 64, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 64, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["last"] ?? null), 64, $this->source), "html", null, true);
                echo "</a>
                ";
            }
            // line 66
            echo "            </li>
        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 66,  218 => 64,  208 => 62,  206 => 61,  202 => 59,  196 => 55,  194 => 54,  191 => 53,  185 => 52,  181 => 50,  171 => 48,  161 => 46,  159 => 45,  156 => 44,  153 => 43,  149 => 42,  146 => 41,  140 => 37,  138 => 36,  134 => 34,  128 => 32,  120 => 30,  118 => 29,  113 => 26,  107 => 24,  99 => 22,  97 => 21,  94 => 20,  88 => 18,  80 => 16,  78 => 15,  73 => 14,  71 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/bulma_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 9, "for" => 42);
        static $filters = array("default" => 3, "merge" => 9, "escape" => 14, "join" => 14, "trans" => 16, "length" => 54);
        static $functions = array("path" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['default', 'merge', 'escape', 'join', 'trans', 'length'],
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
