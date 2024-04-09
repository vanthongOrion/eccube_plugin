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

/* MailMagazine42/Resource/template/admin/history_result_pager.twig */
class __TwigTemplate_bd11ba0ff25cb6c83da12aed1893eb95 extends \Eccube\Twig\Template
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
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pageCount", [], "any", false, false, true, 10) > 1)) {
            // line 11
            echo "    <ul class=\"pagination\">

        <!-- 最初へ -->
        ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, true, 14) != 1)) {
                // line 15
                echo "            <li class=\"page-item\">
                ";
                // line 17
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((                // line 18
($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 18), "attributes", [], "any", false, false, true, 18), "get", [0 => "_route"], "method", false, false, true, 18))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 19
($context["app"] ?? null), "request", [], "any", false, false, true, 19), "attributes", [], "any", false, false, true, 19), "get", [0 => "_route_params"], "method", false, false, true, 19), 19, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 19), "query", [], "any", false, false, true, 19), "all", [], "any", false, false, true, 19), 19, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "first", [], "any", false, false, true, 19)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 22
            echo "
        <!-- 前へ -->
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, true, 24)) {
                // line 25
                echo "            <li class=\"page-item\">
                ";
                // line 27
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "get", [0 => "_route"], "method", false, false, true, 28))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "get", [0 => "_route_params"], "method", false, false, true, 28), 28, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 28), "query", [], "any", false, false, true, 28), "all", [], "any", false, false, true, 28), 28, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", false, false, true, 28)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 31
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, true, 33) != 1)) {
                // line 34
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", [], "any", false, false, true, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 38
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", [], "any", false, false, true, 38))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 40
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "get", [0 => "_route"], "method", false, false, true, 41))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "get", [0 => "_route_params"], "method", false, false, true, 41), 41, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 41), "query", [], "any", false, false, true, 41), "all", [], "any", false, false, true, 41), 41, $this->source), ["page_no" => $context["page"]]))), "html", null, true);
                echo "\">
                    ";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 42, $this->source), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 48) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, true, 48))) {
                // line 49
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 51
            echo "
        <!-- 次へ -->
        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, true, 53)) {
                // line 54
                echo "            <li class=\"page-item\">
                ";
                // line 56
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 57), "attributes", [], "any", false, false, true, 57), "get", [0 => "_route"], "method", false, false, true, 57))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 57), "attributes", [], "any", false, false, true, 57), "get", [0 => "_route_params"], "method", false, false, true, 57), 57, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 57), "query", [], "any", false, false, true, 57), "all", [], "any", false, false, true, 57), 57, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", false, false, true, 57)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 60
            echo "
        <!-- 最後へ -->
        ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 62) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, true, 62))) {
                // line 63
                echo "            <li class=\"page-item\">
                ";
                // line 65
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((                // line 66
($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 66), "attributes", [], "any", false, false, true, 66), "get", [0 => "_route"], "method", false, false, true, 66))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 67
($context["app"] ?? null), "request", [], "any", false, false, true, 67), "attributes", [], "any", false, false, true, 67), "get", [0 => "_route_params"], "method", false, false, true, 67), 67, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 67), "query", [], "any", false, false, true, 67), "all", [], "any", false, false, true, 67), 67, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 67)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 69
            echo "
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/history_result_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 69,  165 => 67,  164 => 66,  162 => 65,  159 => 63,  157 => 62,  153 => 60,  145 => 57,  142 => 56,  139 => 54,  137 => 53,  133 => 51,  129 => 49,  127 => 48,  123 => 46,  113 => 42,  109 => 41,  106 => 40,  99 => 38,  95 => 37,  92 => 36,  88 => 34,  86 => 33,  82 => 31,  74 => 28,  71 => 27,  68 => 25,  66 => 24,  62 => 22,  54 => 19,  53 => 18,  51 => 17,  48 => 15,  46 => 14,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/history_result_pager.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/history_result_pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 37);
        static $filters = array("escape" => 17, "merge" => 19, "trans" => 19);
        static $functions = array("path" => 17);

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
