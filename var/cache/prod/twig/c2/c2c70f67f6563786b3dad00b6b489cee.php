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

/* @admin/Order/order_item_type.twig */
class __TwigTemplate_e66889e227b7a0cfb6bd06318c94e4a1 extends \Eccube\Twig\Template
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
        // line 11
        echo "<script>
    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name, tax_type) {
        // 既存の受注明細のポイント付与率を取得する. 取得できない場合は店舗基本情報の付与率を設定する.
        var point_rate = \$('input[type=hidden][id\$=point_rate]').first().val();
        if (point_rate === undefined) {
            point_rate = '";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "basic_point_rate", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "';
        }

        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last;

        \$(\$lastRow).find(formIdPrefix + index + '_price').val(0);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(1);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);
        \$(\$lastRow).find(formIdPrefix + index + '_tax_type').val(tax_type);
        \$(\$lastRow).find(formIdPrefix + index + '_point_rate').val(point_rate);

        // モーダル閉じる.
        \$('#addOrderItemType').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 ps-3\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_item_type"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 ps-3\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pe-3\"></th>
    </tr>
    </thead>

    <tbody>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OrderItemTypes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItemType"]) {
            // line 55
            echo "        <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, true, 55), "id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "\">
            <tr>
                <td class=\"align-middle ps-3\">";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, true, 57), "name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</td>
                <td class=\"align-middle ps-3\">";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "TaxType", [], "any", false, false, true, 58), "name", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</td>
                <td class=\"align-middle pe-3 text-end\">
                    <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), null, ";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, true, 60), "id", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, true, 60), "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "TaxType", [], "any", false, false, true, 60), "id", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "')\" name=\"mode\" value=\"modal\">
                        <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                    </button>
                </td>
            </tr>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItemType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "@admin/Order/order_item_type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  112 => 60,  107 => 58,  103 => 57,  97 => 55,  93 => 54,  84 => 48,  80 => 47,  47 => 17,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/order_item_type.twig", "/var/www/html/src/Eccube/Resource/template/admin/Order/order_item_type.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 54);
        static $filters = array("escape" => 17, "trans" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'trans'],
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
