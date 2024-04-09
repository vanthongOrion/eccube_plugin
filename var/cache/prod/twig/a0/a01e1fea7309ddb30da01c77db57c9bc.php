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

/* Recommend42/Resource/template/admin/search_product.twig */
class __TwigTemplate_a5ad57f96c1635b6af0e1c6f1a01b596 extends \Eccube\Twig\Template
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
        echo "
<script type=\"text/javascript\">
    function fnSelectProduct(\$row, product_id, product_name, product_image_link, product_image_img, product_code_min, product_code_max) {
        // Add product argument
        var productName = \$('#product_name');
        var productImageLink = \$('#product_image_link');
        var productImageImg = \$('#product_image_img');
        var productCode = \$('#product_code');

        productName.text(product_name);
        \$('#recommend_product_Product').val(product_id);
        productImageLink.removeAttr('href');
        productImageLink.attr('href', product_image_link);
        productImageImg.removeAttr('src');
        productImageImg.attr('src', product_image_img);
        if (product_code_min != product_code_max) {
            product_code_min += ' ～ ' + product_code_max;
        }
        productCode.text(product_code_min);

        // Display new product
        \$('#product_image').removeClass('d-none');
        productName.removeClass('d-none');
        productCode.removeClass('d-none');

        // Check product exist
        var warning = \$('#warning');
        warning.text('');
        if (recommend.indexOf(product_id) != -1) {
            warning.text(\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.existed"), "html", null, true);
        echo "\");
        }

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');
        return false;
    }

    // 商品検索
    \$('div.box-footer a').on('click', function(event) {
        var list = \$('#searchProductModalList');
        list.children().remove();
        \$.ajax({
            type: 'GET',
            dataType: 'html',
            url: \$(this).attr('href'),
            success: function(data) {
                \$('#searchProductModalList').html(data);
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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 68
            echo "            <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\">
                <tr>
                    <td>
                        ";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
                        <br>
                        <span>";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
                            ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 74) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 74))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "
                            ";
            }
            // line 76
            echo "                        </span>
                    </td>
                    <td class=\"text-end\">
                        <button onclick=\"fnSelectProduct(\$(this).parent().parent(), '";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 79), 79, $this->source), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 79)]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, true, 79), 79, $this->source)), "save_image"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-default btn-sm\">
                            決定
                        </button>
                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
        </tbody>
    </table>
    ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 89) > 0)) {
            // line 90
            echo "    <div class=\"col box-footer\">
        <div class=\"row justify-content-md-center mb-4\">
            ";
            // line 92
            $this->loadTemplate("@admin/pager.twig", "Recommend42/Resource/template/admin/search_product.twig", 92)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 92), "routes" => "plugin_recommend_search_product_page"]));
            // line 93
            echo "        </div>
    </div>
    ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Recommend42/Resource/template/admin/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 96,  170 => 93,  168 => 92,  164 => 90,  162 => 89,  157 => 86,  134 => 79,  129 => 76,  122 => 74,  118 => 73,  113 => 71,  106 => 68,  102 => 67,  70 => 38,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "Recommend42/Resource/template/admin/search_product.twig", "/var/www/html/app/Plugin/Recommend42/Resource/template/admin/search_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 67, "if" => 74, "include" => 92);
        static $filters = array("escape" => 38, "trans" => 38, "no_image_product" => 79);
        static $functions = array("url" => 79, "asset" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
                ['escape', 'trans', 'no_image_product'],
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
