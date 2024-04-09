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

/* Coupon42/Resource/template/admin/search_category.twig */
class __TwigTemplate_1f414b8d025cfa27766035ef4b6beca7 extends \Eccube\Twig\Template
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
    function fnAddCategoryDetail(\$row, id, name) {
        // ================================================================
        // 商品情報を取得.
        // ================================================================
        var list = \$('#coupon_detail_list2');

        // prototype templateを取得.
        var newWidget = list.attr('data-prototype');
        // レコード数カウンタで置換.
        var cnt = coupon_details_count + 1;
        newWidget = newWidget.replace(/__name__/g, cnt);

        // フォーム入力値をセットm
        \$newWidget = \$(newWidget);

        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_Category').val(id);
        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_category_name').text(name);
        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_coupon_type').val(";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("Plugin\\Coupon42\\Entity\\Coupon::CATEGORY"), "html", null, true);
        echo ");

        // 明細行に追加.
        list.append(\$newWidget);

        // カウンタを更新.
        coupon_details_count++;

        // モーダル閉じる.
        \$('#searchCategoryModal').modal('hide');

        return false;
    }
</script>
<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 46
            echo "                <tr>
                    <td>
                        ";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 48, $this->source), "html", null, true);
            echo "
                    </td>
                    <td>
                    </td>
                    <td class=\"align-middle text-end\">
                        <button onclick=\"fnAddCategoryDetail(\$(this).parent().parent(), ";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["id"], 53, $this->source), "html", null, true);
            echo ",  '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 53, $this->source), "js"), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-ec-actionIcon\">
                            <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                        </button>
                    </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/search_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 59,  95 => 53,  87 => 48,  83 => 46,  79 => 45,  59 => 28,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/search_category.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/admin/search_category.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 45);
        static $filters = array("escape" => 28);
        static $functions = array("constant" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
