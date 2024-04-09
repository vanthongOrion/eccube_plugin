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

/* sitemap_index.xml.twig */
class __TwigTemplate_23ed42dbe35f675a1438308c90e9add7 extends \Eccube\Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    <sitemap>
        <loc>";
        // line 4
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sitemap_page_xml");
        echo "</loc>
        <lastmod>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "update_date", [], "any", false, false, true, 5), 5, $this->source), "", "c"), "html", null, true);
        echo "</lastmod>
    </sitemap>
    <sitemap>
        <loc>";
        // line 8
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sitemap_category_xml");
        echo "</loc>
        <lastmod>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "update_date", [], "any", false, false, true, 9), 9, $this->source), "", "c"), "html", null, true);
        echo "</lastmod>
    </sitemap>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["productPageCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "        <sitemap>
            <loc>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sitemap_product_xml", ["page" => $context["p"]]), "html", null, true);
            echo "</loc>
            <lastmod>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "update_date", [], "any", false, false, true, 14), 14, $this->source), "", "c"), "html", null, true);
            echo "</lastmod>
        </sitemap>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</sitemapindex>
";
    }

    public function getTemplateName()
    {
        return "sitemap_index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  74 => 14,  70 => 13,  67 => 12,  63 => 11,  58 => 9,  54 => 8,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sitemap_index.xml.twig", "/var/www/html/src/Eccube/Resource/template/default/sitemap_index.xml.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11);
        static $filters = array("escape" => 5, "date_format" => 5);
        static $functions = array("url" => 4, "range" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date_format'],
                ['url', 'range']
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
