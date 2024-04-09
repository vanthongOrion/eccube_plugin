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

/* @KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig */
class __TwigTemplate_b615eaa0e2b203ffc31e0854960be905 extends \Eccube\Twig\Template
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
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attr"], 10, $this->source), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 10, $this->source), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-end\">
        ";
        // line 12
        if (($context["sorted"] ?? null)) {
            // line 13
            echo "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 14
                echo "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 16
                echo "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 22, $this->source), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  76 => 21,  72 => 19,  69 => 18,  65 => 16,  61 => 14,  58 => 13,  56 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig", "/var/www/html/vendor/knplabs/knp-paginator-bundle/templates/Pagination/bootstrap_v5_md_sortable_link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10, "if" => 12);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
