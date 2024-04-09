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

/* @admin/Order/search_product.twig */
class __TwigTemplate_4db22ae14327bca8bb686dfad4f3d27d extends \Eccube\Twig\Template
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
    // 商品規格情報. 規格2のプルダウンリストの設定に利用する,
    var productsClassCategories = {
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 15
            echo "        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 15), 15, $this->source), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($this->sandbox->ensureToStringAllowed($context["Product"], 15, $this->source), false);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 15) == false)) {
                echo ", ";
            }
            // line 16
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    };

    // 規格1が選択された際に, 規格2のプルダウンリストを設定する,
    function fnSetClassCategory2(select, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$(select);
        // 規格2の要素を取得
        var \$sele2 = \$sele1.parents(\".align-middle\").find('select[name=classcategory_id2]');

        // 規格1の選択肢
        var classcat_id1 = \$sele1.val() ? \$sele1.val() : '';

        // 規格2がある場合は選択肢を書き換える
        if (\$sele2 && \$sele2.length) {
            // 規格2の選択肢をクリア
            \$sele2.children().remove();
            var classcat2 = productsClassCategories[product_id][classcat_id1];

            // 規格2の要素を設定
            for (var key in classcat2) {
                if (classcat2.hasOwnProperty(key)) {
                    var id = classcat2[key].classcategory_id2;
                    var name = classcat2[key].name;
                    var option = \$('<option />').val(id ? id : '').text(name);
                    \$sele2.append(option);
                }
            }
        }
    }

    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = 0;
        var quantity = 1;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        // 既存の受注明細のポイント付与率を取得する. 取得できない場合は店舗基本情報の付与率を設定する.
        var point_rate = \$('input[type=hidden][id\$=point_rate]').first().val();
        if (point_rate === undefined) {
            point_rate = '";
        // line 92
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "basic_point_rate", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "';
        }

        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last();

        \$(\$lastRow).find(formIdPrefix + index + '_ProductClass').val(product_class_id);
        \$(\$lastRow).find(formIdPrefix + index + '_price').val(price);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(quantity);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);
        \$(\$lastRow).find(formIdPrefix + index + '_point_rate').val(point_rate);

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }

    // 商品検索
    \$('#product_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        }

        event.preventDefault();
    });
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 ps-3\">";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 ps-3\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__short"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pe-3\"></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 150
            echo "        <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "\">
            ";
            // line 151
            $context["form"] = (($__internal_compile_0 = ($context["forms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 151)] ?? null) : null);
            // line 152
            echo "            <tr>
                <td class=\"align-middle ps-3\">
                    ";
            // line 154
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
                </td>
                <td class=\"align-middle ps-3\">
                    <p class=\"m-0\"> ";
            // line 157
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "</p>
                    <span>
                        ";
            // line 159
            if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 159)) {
                // line 160
                echo "                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "～";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "
                        ";
            } else {
                // line 162
                echo "                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                echo "
                        ";
            }
            // line 164
            echo "                    </span>
                </td>
                <td class=\"align-middle\">
                    ";
            // line 167
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 167)) {
                // line 168
                echo "                        <div class=\"row mb-2\">
                            <div class=\"col-4 pe-0\"><span>";
                // line 169
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, true, 169), 169, $this->source), 'label');
                echo "</span></div>
                            <div class=\"col-8 text-start ps-0\">
                                ";
                // line 171
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, true, 171), 171, $this->source), 'widget', ["attr" => ["onchange" => (("fnSetClassCategory2(this," . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 171), 171, $this->source)) . ")")]]);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 175
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 175)) {
                // line 176
                echo "                        <div class=\"row\">
                            <div class=\"col-4 pe-0\"><span>";
                // line 177
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, true, 177), 177, $this->source), 'label');
                echo "</span></div>
                            <div class=\"col-8 text-start ps-0\">
                                ";
                // line 179
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, true, 179), 179, $this->source), 'widget', ["id" => ""]);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 183
            echo "                </td>
                ";
            // line 184
            if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, true, 184)) {
                // line 185
                echo "                    <td class=\"align-middle pe-3 text-end\">
                        <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), ";
                // line 186
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderItemType::PRODUCT"), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 186), 186, $this->source), "js"), "html", null, true);
                echo "')\" name=\"mode\" value=\"modal\">
                            <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                        </button>
                    </td>
                ";
            } else {
                // line 191
                echo "                    <td class=\"align-middle pe-3 text-end\">
                        ";
                // line 192
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.out_of_stock_label"), "html", null, true);
                echo "
                    </td>
                ";
            }
            // line 195
            echo "            </tr>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "    </tbody>
</table>
";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 200) > 0)) {
            // line 201
            echo "    <div id=\"product_pagination\" class=\"row justify-content-md-center mb-4\">
        ";
            // line 202
            $this->loadTemplate("@admin/pager.twig", "@admin/Order/search_product.twig", 202)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 202), "routes" => "admin_order_search_product_page"]));
            // line 203
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@admin/Order/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 203,  363 => 202,  360 => 201,  358 => 200,  354 => 198,  346 => 195,  340 => 192,  337 => 191,  325 => 186,  322 => 185,  320 => 184,  317 => 183,  310 => 179,  305 => 177,  302 => 176,  299 => 175,  292 => 171,  287 => 169,  284 => 168,  282 => 167,  277 => 164,  271 => 162,  263 => 160,  261 => 159,  256 => 157,  250 => 154,  246 => 152,  244 => 151,  239 => 150,  235 => 149,  227 => 144,  223 => 143,  219 => 142,  166 => 92,  150 => 79,  137 => 69,  83 => 17,  69 => 16,  61 => 15,  44 => 14,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/search_product.twig", "/var/www/html/src/Eccube/Resource/template/admin/Order/search_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14, "if" => 15, "set" => 151, "include" => 202);
        static $filters = array("escape" => 15, "raw" => 15, "trans" => 69);
        static $functions = array("class_categories_as_json" => 15, "form_label" => 169, "form_widget" => 171, "constant" => 186);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
                ['escape', 'raw', 'trans'],
                ['class_categories_as_json', 'form_label', 'form_widget', 'constant']
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
