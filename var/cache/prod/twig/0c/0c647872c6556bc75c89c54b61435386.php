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

/* Shopping/shipping_multiple.twig */
class __TwigTemplate_f6bf2ea0f24232b3826a1c189cc68555 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping_multiple.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<script>
\$(function() {
    \$('.add').click(function() {
        var data = \$(this).data();
        var idx = data.idx;
        var itemIdx = 0;
        var item = \$('#item' + idx);
        var row = \$('#item' + idx + '-0');

        // 既存のお届け先のrowをコピーして雛形とする
        var addrow = \$(row).clone();

        // 追加する要素のIndexを決定
        item.find('.shipping_item').each(function() {
            itemIdx = \$(this).attr('data-itemidx');
        });
        itemIdx = 1 + parseInt(itemIdx);

        // 行のID設定
        addrow.attr('id', 'item' + idx + '-' + itemIdx);
        addrow.attr('data-itemidx', itemIdx);

        // お届け先セレクトボックスのIDとNAME設定
        addrow.find('select').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][customer_address]');
        addrow.find('select').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_customer_address');

        // 数量のINPUTのIDとNAME設定
        addrow.find('input').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][quantity]');
        addrow.find('input').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_quantity');

        // その他、divやbuttonのID設定
        addrow.find('[id*=\"multiple_list__shipping_address\"]').attr('id', 'multiple_list__shipping_address--' + idx + '_' + itemIdx + '');
        addrow.find('[id*=\"multiple_list__shipping_quantity\"]').attr('id', 'multiple_list__shipping_quantity--' + idx + '_' + itemIdx + '');
        addrow.find('button').each(function() {
            \$(this).attr('id', 'button__delete--' + idx + '_' + itemIdx + '');
            \$(this).attr('data-itemidx', idx + '-' + itemIdx);
            \$(this).data('itemidx', idx + '-' + itemIdx);
            \$(this).removeAttr('style');
        });

        \$(item).append(\$(addrow));
    });

    \$(document).on('click', '.delete', function() {
        var data = \$(this).data();
        \$('#item' + data.itemidx).remove();
    });

});
</script>
";
    }

    // line 66
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の複数指定"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-AddAddress\">
        <form id=\"shipping-multiple-form\" method=\"post\" action=\"";
        // line 74
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_multiple");
        echo "\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 75), 75, $this->source), 'widget');
        echo "
            <div class=\"ec-AddAddress__info\">
                <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("各商品のお届け先を選択してください。"), "html", null, true);
        echo "</p>
            </div>

            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 81
            echo "                <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
            <div class=\"ec-AddAddress__new\"><a href=\"";
        // line 84
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_multiple_edit");
        echo "\" class=\"ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
        echo "</a></div>

            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OrderItems"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
            // line 87
            echo "                ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 87);
            // line 88
            echo "                ";
            $context["itemvalue"] = 0;
            // line 89
            echo "                <div id=\"multiple_list__item_box--";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 89, $this->source), "html", null, true);
            echo "\" class=\"ec-AddAddress__add\">
                    <div class=\"ec-AddAddress__item\">
                        <div class=\"ec-AddAddress__itemThumb\">
                            <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 92), "MainListImage", [], "any", false, false, true, 92), 92, $this->source)), "save_image"), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"ec-AddAddress__itemtContent\">
                            <div class=\"ec-AddAddress__itemtTitle\">";
            // line 95
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
                            </div>
                            ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 97), "classCategory1", [], "any", false, false, true, 97)) {
                // line 98
                echo "                                <div class=\"ec-AddAddress__itemtSize\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 98), "classCategory1", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "</div>
                            ";
            }
            // line 100
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 100), "classCategory2", [], "any", false, false, true, 100)) {
                // line 101
                echo "                                <div class=\"ec-AddAddress__itemtSize\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 101), "classCategory2", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "</div>
                            ";
            }
            // line 103
            echo "                            <div class=\"ec-AddAddress__itemtPrice\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 103), 103, $this->source)), "html", null, true);
            echo "</div>

                            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["compItemQuantities"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 106
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 106), "id", [], "any", false, false, true, 106) == $context["key"])) {
                    // line 107
                    echo "                                    <div class=\"ec-AddAddress__itemtNumber\" id=\"multiple_list__value--";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 107, $this->source), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 107, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 107, $this->source), "html", null, true);
                    echo "</div>
                                    ";
                    // line 108
                    $context["itemvalue"] = $context["value"];
                    // line 109
                    echo "                                ";
                }
                // line 110
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                        </div>
                    </div>

                    <div id=\"item";
            // line 114
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 114, $this->source), "html", null, true);
            echo "\">
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_multiple", [], "any", false, false, true, 115)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["idx"] ?? null)] ?? null) : null), "shipping", [], "any", false, false, true, 115));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 116
                echo "                            <div id=\"item";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 116, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "\" data-itemidx=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "\" class=\"ec-AddAddress__select shipping_item item";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 116, $this->source), "html", null, true);
                echo "\">
                                <div id=\"multiple_list__shipping_address--";
                // line 117
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 117, $this->source), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" class=\"ec-AddAddress__selectAddress\">
                                    <div class=\"ec-select\">
                                        <label>";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
                echo "</label>
                                        ";
                // line 120
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "customer_address", [], "any", false, false, true, 120), 120, $this->source), 'widget', ["attr" => ["class" => "shipping"]]);
                echo "
                                        ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "customer_address", [], "any", false, false, true, 121), 121, $this->source), 'errors');
                echo "
                                    </div>
                                </div>
                                <div id=\"multiple_list__shipping_quantity--";
                // line 124
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 124, $this->source), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "\" class=\"ec-AddAddress__selectNumber\">
                                    <div class=\"ec-input\">
                                        <label>";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</label>
                                        ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["compItemQuantities"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 128
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 128), "id", [], "any", false, false, true, 128) == $context["key"])) {
                        // line 129
                        echo "                                                ";
                        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, true, 129), "vars", [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, true, 129), "vars", [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129)) : ($context["value"]));
                        // line 130
                        echo "                                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, true, 130), 130, $this->source), 'widget', ["attr" => ["class" => "quantity"], "value" => ($context["quantity"] ?? null)]);
                        echo "
                                                ";
                        // line 131
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, true, 131), 131, $this->source), 'errors');
                        echo "
                                            ";
                    }
                    // line 133
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                                    </div>
                                </div>

                                <button id=\"button__delete--";
                // line 137
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 137, $this->source), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "\" type=\"button\" class=\"ec-inlineBtn delete\"
                                        ";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 138) == 0)) {
                    echo "style=\"display:none;\"";
                }
                // line 139
                echo "                                        data-itemidx=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 139, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</button>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    </div>

                    <div id=\"multiple_list__add_button";
            // line 144
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 144, $this->source), "html", null, true);
            echo "\" class=\"ec-AddAddress__btn\">
                        <button id=\"button__add";
            // line 145
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 145, $this->source), "html", null, true);
            echo "\" type=\"button\" class=\"ec-inlineBtn add\" data-idx=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 145, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先追加"), "html", null, true);
            echo "</button>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
            <div class=\"ec-AddAddress__actions\">
                <button id=\"button__confirm\" type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("選択したお届け先に送る"), "html", null, true);
        echo "</button>
                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 152
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/shipping_multiple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 152,  421 => 151,  417 => 149,  395 => 145,  391 => 144,  387 => 142,  365 => 139,  361 => 138,  355 => 137,  350 => 134,  344 => 133,  339 => 131,  334 => 130,  331 => 129,  328 => 128,  324 => 127,  320 => 126,  313 => 124,  307 => 121,  303 => 120,  299 => 119,  292 => 117,  281 => 116,  264 => 115,  260 => 114,  255 => 111,  249 => 110,  246 => 109,  244 => 108,  233 => 107,  230 => 106,  226 => 105,  219 => 103,  213 => 101,  210 => 100,  204 => 98,  202 => 97,  197 => 95,  191 => 92,  184 => 89,  181 => 88,  178 => 87,  161 => 86,  154 => 84,  151 => 83,  142 => 81,  138 => 80,  132 => 77,  127 => 75,  123 => 74,  115 => 69,  111 => 67,  107 => 66,  53 => 14,  49 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/shipping_multiple.twig", "/var/www/html/src/Eccube/Resource/template/default/Shopping/shipping_multiple.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 80, "set" => 87, "if" => 97);
        static $filters = array("escape" => 69, "trans" => 69, "no_image_product" => 92, "price" => 103);
        static $functions = array("url" => 74, "form_widget" => 75, "asset" => 92, "form_errors" => 121);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['url', 'form_widget', 'asset', 'form_errors']
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
