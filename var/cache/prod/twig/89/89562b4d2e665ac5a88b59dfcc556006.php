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

/* Coupon42/Resource/template/admin/search_product.twig */
class __TwigTemplate_e56c8407e32be84d421d2ac1db530d96 extends \Eccube\Twig\Template
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
    function fnAddProductDetail(\$row, product_id, product_name) {

        // ================================================================
        // 商品情報を取得.
        // ================================================================
        // 明細行を取得.
        var list = \$('#coupon_detail_list');

        // prototype templateを取得.
        var newWidget = list.attr('data-prototype');
        // レコード数カウンタで置換.
        var cnt = coupon_details_count + 1;
        newWidget = newWidget.replace(/__name__/g, cnt);

        // フォーム入力値をセットm
        \$newWidget = \$(newWidget);

        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_Product').val(product_id);
        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_product_name').text(product_name);
        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_coupon_type').val(";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("Plugin\\Coupon42\\Entity\\Coupon::PRODUCT"), "html", null, true);
        echo ");

        // 明細行に追加.
        list.append(\$newWidget);

        // カウンタを更新.
        coupon_details_count++;

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        return false;
    }

    // 商品検索
    \$('div.box-footer a').on('click', function(event) {
        var existProductId = \"\";
        \$(\":input[id^=coupon_CouponDetails_][id\$=_Product]\").each(
                function(index, elem) {
                    if(existProductId == \"\") {
                        existProductId = elem.value;
                    } else {
                        existProductId = existProductId + \",\" + elem.value;
                    }
                }
        );
        var list = \$('#searchProductModalList');
        var href = \$(this).attr('href');
        href = href.split('?')[0];
        href += '?exist_product_id=' + existProductId;
        list.find('tbody').children().remove();
        \$.ajax({
            type: 'GET',
            dataType: 'html',
            url: href,
            success: function(data) {
                list.html(data);
            },
            error: function() {
                alert('";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.pager.failed"), "html", null, true);
        echo "');
            }
        });
        event.preventDefault();
    });

</script>
<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 80
            echo "            <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\">
                <tr>
                    <td>
                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
                        <br>
                        <span>";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
                            ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 86) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 86))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "
                            ";
            }
            // line 88
            echo "                        </span>
                    </td>
                    <td class=\"align-middle text-end\">
                        <button onclick=\"fnAddProductDetail(\$(this).parent().parent(), ";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ",  '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 91), 91, $this->source), "js"), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-ec-actionIcon\">
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
        // line 98
        echo "
        </tbody>
    </table>
    ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 101) > 0)) {
            // line 102
            echo "        <div class=\"col box-footer\">
            <div class=\"row justify-content-md-center mb-4\">
                ";
            // line 104
            $this->loadTemplate("@admin/pager.twig", "Coupon42/Resource/template/admin/search_product.twig", 104)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 104), "routes" => "plugin_coupon_search_product_page"]));
            // line 105
            echo "            </div>
        </div>
    ";
        }
        // line 108
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 108,  176 => 105,  174 => 104,  170 => 102,  168 => 101,  163 => 98,  148 => 91,  143 => 88,  136 => 86,  132 => 85,  127 => 83,  120 => 80,  116 => 79,  103 => 69,  61 => 30,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/search_product.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/admin/search_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 79, "if" => 86, "include" => 104);
        static $filters = array("escape" => 30, "trans" => 69);
        static $functions = array("constant" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
                ['escape', 'trans'],
                ['constant']
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
