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

/* RelatedProduct42/Resource/template/front/related_product.twig */
class __TwigTemplate_9fc7ac484ffb1e3ee4dc0e79b524589c extends \Eccube\Twig\Template
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
        echo "<script>
    \$(function () {
        \$('#RelatedProduct-product_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));
    });
</script>

<div id=\"RelatedProduct-product_area\" class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "RelatedProducts", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 10
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 10);
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "Status", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW"))) {
                // line 12
                echo "                <li class=\"ec-shelfGrid__item\">
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "id", [], "any", false, false, true, 13)]), "html", null, true);
                echo "\">
                        <p class=\"ec-shelfGrid__item-image\">
                            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 15), "main_list_image", [], "any", false, false, true, 15), 15, $this->source)), "save_image"), "html", null, true);
                echo "\">
                        </p>
                        <p>";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 17), "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</p>
                        <p>
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 19), "hasProductClass", [], "any", false, false, true, 19)) {
                    // line 20
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 20), "getPrice02Min", [], "any", false, false, true, 20) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 20), "getPrice02Max", [], "any", false, false, true, 20))) {
                        // line 21
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 21), "getPrice02IncTaxMin", [], "any", false, false, true, 21), 21, $this->source)), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 23), "getPrice02IncTaxMin", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 23), "getPrice02IncTaxMax", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            ";
                } else {
                    // line 26
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 26), "getPrice02IncTaxMin", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
                    echo "
                            ";
                }
                // line 28
                echo "                        </p>
                    </a>
                    <span>";
                // line 30
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "content", [], "any", false, false, true, 30), 30, $this->source));
                echo "</span>
                </li>
            ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Resource/template/front/related_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  115 => 33,  109 => 30,  105 => 28,  99 => 26,  96 => 25,  88 => 23,  82 => 21,  79 => 20,  77 => 19,  72 => 17,  67 => 15,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Resource/template/front/related_product.twig", "/var/www/html/app/Plugin/RelatedProduct42/Resource/template/front/related_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "set" => 10, "if" => 11);
        static $filters = array("escape" => 13, "no_image_product" => 15, "price" => 21, "purify" => 30, "raw" => 30);
        static $functions = array("constant" => 11, "url" => 13, "asset" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'no_image_product', 'price', 'purify', 'raw'],
                ['constant', 'url', 'asset']
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
