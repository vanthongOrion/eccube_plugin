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

/* Recommend42/Resource/template/Block/recommend_product_block.twig */
class __TwigTemplate_2f5aa427863e34370fa84cf0e4f94ee6 extends \Eccube\Twig\Template
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
        // line 9
        $context["recommend_products"] = twig_get_attribute($this->env, $this->source, $this->env->getFunction('repository')->getCallable()("Plugin\\Recommend42\\Entity\\RecommendProduct"), "getRecommendProduct", [], "any", false, false, true, 9);
        // line 10
        echo "
<!-- ▼item_list▼ -->
<div class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommend_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
            // line 15
            echo "            <li class=\"ec-shelfGrid__item\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 17), "mainFileName", [], "any", false, false, true, 17), 17, $this->source)), "save_image"), "html", null, true);
            echo "\">
                    <p>";
            // line 18
            echo twig_nl2br($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "comment", [], "any", false, false, true, 18), 18, $this->source)));
            echo "</p>
                    <dl>
                        <dt class=\"item_name\">";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 20), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</dt>
                        <dd class=\"item_price\">
                            ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 22), "hasProductClass", [], "any", false, false, true, 22)) {
                // line 23
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 23), "getPrice02Min", [], "any", false, false, true, 23) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 23), "getPrice02Max", [], "any", false, false, true, 23))) {
                    // line 24
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 24), "getPrice02IncTaxMin", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 26
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 26), "getPrice02IncTaxMin", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 26), "getPrice02IncTaxMax", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
                    echo "
                                ";
                }
                // line 28
                echo "                            ";
            } else {
                // line 29
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 29), "getPrice02IncTaxMin", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
                echo "
                            ";
            }
            // line 31
            echo "                        </dd>
                    </dl>
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>
</div>
<!-- ▲item_list▲ -->
";
    }

    public function getTemplateName()
    {
        return "Recommend42/Resource/template/Block/recommend_product_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  100 => 31,  94 => 29,  91 => 28,  83 => 26,  77 => 24,  74 => 23,  72 => 22,  67 => 20,  62 => 18,  58 => 17,  54 => 16,  51 => 15,  47 => 14,  41 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "Recommend42/Resource/template/Block/recommend_product_block.twig", "/var/www/html/app/Plugin/Recommend42/Resource/template/Block/recommend_product_block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "for" => 14, "if" => 22);
        static $filters = array("escape" => 16, "no_image_product" => 17, "nl2br" => 18, "purify" => 18, "raw" => 18, "price" => 24);
        static $functions = array("repository" => 9, "url" => 16, "asset" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'no_image_product', 'nl2br', 'purify', 'raw', 'price'],
                ['repository', 'url', 'asset']
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
