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

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_ed365deb23e98f489464e52e432d49d0 extends \Eccube\Twig\Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 3
            echo "    <div class=\"pagination\">
        ";
            // line 4
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 5
                echo "            <span class=\"first\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 6, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 6, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            if (array_key_exists("previous", $context)) {
                // line 11
                echo "            <span class=\"previous\">
                <a rel=\"prev\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 12, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 12, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 15
            echo "
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 18
                    echo "                <span class=\"page\">
                    <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 19, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 19, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 19, $this->source), "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 22
                    echo "                <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 22, $this->source), "html", null, true);
                    echo "</span>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (array_key_exists("next", $context)) {
                // line 27
                echo "            <span class=\"next\">
                <a rel=\"next\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 28, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 28, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 33
                echo "            <span class=\"last\">
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 34, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 34, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 37
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  124 => 34,  121 => 33,  119 => 32,  116 => 31,  110 => 28,  107 => 27,  105 => 26,  102 => 25,  96 => 24,  90 => 22,  82 => 19,  79 => 18,  76 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/sliding.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/sliding.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 16);
        static $filters = array("escape" => 6, "merge" => 6);
        static $functions = array("path" => 6);

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
