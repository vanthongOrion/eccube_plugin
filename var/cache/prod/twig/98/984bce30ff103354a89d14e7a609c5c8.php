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

/* RelatedProduct42/Resource/template/admin/modal_result.twig */
class __TwigTemplate_b4e6395472bf3bd69d0487c00308a362 extends \Eccube\Twig\Template
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
        echo "<script>
    function fnRelatedProductSelectProduct(product_id, product_name, product_image_link, product_image_img, product_code_min, product_code_max) {
        var data_id = \$('#RelatedProductDataId').val();

        // Add product argument
        \$('#RelatedProduct-product_name' + data_id).text(product_name);
        \$('#RelatedProduct-product_image_link' + data_id).attr('href', product_image_link);
        \$('#RelatedProduct-product_image_img' + data_id).attr('src', product_image_img);

        if(product_code_min != product_code_max)
            product_code_min += ' ～ ' + product_code_max;
        \$('#RelatedProduct_product_code' + data_id).text(product_code_min);
        // Display new product
        \$('.RelatedProduct-view' + data_id).removeClass('d-none');
        \$(\"#admin_product_RelatedProducts_\" + data_id + \"_ChildProduct\").val(product_id);
        // モーダル閉じる.
        \$(\"#RelatedProductSearchResult\").children().remove();
        \$(\"#RelatedProductSearchProductModal\").modal(\"hide\");
        return false;
    }

    // 商品検索
    \$('#RelatedProductSearchProductModal .pagination a').on('click', function(event) {
        var list = \$('#RelatedProductSearchResult');
        list.children().remove();
        \$.ajax({
            type: 'GET',
            dataType: 'html',
            url: \$(this).attr('href'),
            success: function(data) {
                \$('#RelatedProductSearchResult').html(data);
            },
            error: function() {
                alert('paginator failed.');
            }
        });
        event.preventDefault();
    });
</script>
<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 53
            echo "            <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">
                <tr>
                    <td>
                        ";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
                        <br>
                        <span>";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
                            ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 59) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 59))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "
                            ";
            }
            // line 61
            echo "                        </span>
                    </td>
                    <td class=\"text-end\">
                        <button onclick=\"fnRelatedProductSelectProduct('";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 64), 64, $this->source), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 64)]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, true, 64), 64, $this->source)), "save_image"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 64), 64, $this->source), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 64), 64, $this->source), "js"), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-sm\">
                            <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                        </button>
                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
        </tbody>
    </table>
    ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 74) > 0)) {
            // line 75
            echo "        <div class=\"pagination\">
            ";
            // line 76
            $this->loadTemplate("@admin/pager.twig", "RelatedProduct42/Resource/template/admin/modal_result.twig", 76)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 76), "routes" => "admin_related_product_search_product_page"]));
            // line 77
            echo "        </div>
    ";
        }
        // line 79
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Resource/template/admin/modal_result.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 79,  150 => 77,  148 => 76,  145 => 75,  143 => 74,  138 => 71,  115 => 64,  110 => 61,  103 => 59,  99 => 58,  94 => 56,  87 => 53,  83 => 52,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Resource/template/admin/modal_result.twig", "/var/www/html/app/Plugin/RelatedProduct42/Resource/template/admin/modal_result.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 52, "if" => 59, "include" => 76);
        static $filters = array("escape" => 53, "no_image_product" => 64);
        static $functions = array("url" => 64, "asset" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
                ['escape', 'no_image_product'],
                ['url', 'asset']
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
