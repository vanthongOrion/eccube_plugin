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

/* Coupon42/Resource/template/admin/regist.twig */
class __TwigTemplate_6add532d1b0207027d6520a343056e72 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["menus"] = [0 => "order", 1 => "plugin_coupon"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchProductModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Coupon42/Resource/template/admin/regist.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.title"), "html", null, true);
    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.subtitle"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datetimepicker.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .col-sm-2 {
            width: auto;
        }
    </style>
";
    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-ja.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/bootstrap-datetimepicker.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            // ==================================
            // 商品の追加 ボタンクリック時表示
            // ==================================
            \$('#showSearchProductModal').on('click', function() {
                    var tbody = \$('#searchProductModalList tbody');
                    tbody.children().remove();
                    \$('div.box-footer').remove();
                }
            );

            // ==================================
            // カテゴリの追加 ボタンクリック時表示
            // ==================================
            \$('#showSearchCategoryModal').on('click', function() {
                    var tbody = \$('#searchCategoryModalList tbody');
                    tbody.children().remove();
                    \$('div.box-footer').remove();
                }
            );
            // ==================================
            // 商品検索ダイアログ - 検索ボタンクリック時表示
            // ==================================
            \$('#searchProductModalButton').on('click', function() {
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
                var tbody = \$('#searchProductModalList tbody');
                tbody.children().remove();
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id' : \$('#admin_search_product_id').val(),
                        'category_id' : \$('#admin_search_product_category_id').val(),
                        'exist_product_id' : existProductId
                    },
                    url: '";
        // line 78
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_search_product");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#searchProductModalList').html(data);

                    },
                    error: function() {
                        alert('search product failed.');
                    }
                });
            });

            // ==================================
            // カテゴリ検索ダイアログ表示
            // ==================================
            \$('#searchCategoryModalButton').on('click', function() {
                var existCategoryId = \"\";
                \$(\":input[id^=coupon_CouponDetails_][id\$=_Category]\").each(
                    function(index, elem) {
                        if(existCategoryId == \"\") {
                            existCategoryId = elem.value;
                        } else {
                            existCategoryId = existCategoryId + \",\" + elem.value;
                        }
                    }
                );

                var tbody = \$('#searchCategoryModalList tbody');
                tbody.children().remove();
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'category_id' : \$('#coupon_search_category_category_id').val(),
                        'exist_category_id' : existCategoryId
                    },
                    url: '";
        // line 114
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_search_category");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#searchCategoryModalList').html(data);

                    },
                    error: function() {
                        alert('search product failed.');
                    }
                });
            });

            coupon_details_count = ";
        // line 126
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "CouponDetails", [], "any", false, false, true, 126), 126, $this->source)), "html", null, true);
        echo ";

            // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
            \$(\"input\").on(\"keydown\", function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });

            // ==================================
            // 商品一覧の削除ボタンクリック時の処理
            // ==================================
            \$(\"#coupon_detail_list\").on(\"click\", \".delete-item\", function(){
                \$(this).parents(\".item_box\").remove();
            });
            // ==================================
            // カテゴリ一覧の削除ボタンクリック時の処理
            // ==================================
            \$(\"#coupon_detail_list2\").on(\"click\", \".delete-item\", function(){
                \$(this).parents(\".item_box\").remove();
            });

            //set radio button default.
            if (\$('input[name~=\"coupon[coupon_type]\"]:checked').length == 0) {
                \$('#coupon_coupon_type_0').attr('checked', 'checked');
            }

            if (\$('input[name~=\"coupon[coupon_member]\"]:checked').length == 0) {
                \$('#coupon_coupon_member_1').attr('checked', 'checked');
            }

            if (\$('input[name~=\"coupon[discount_type]\"]:checked').length == 0) {
                \$('#coupon_discount_type_0').attr('checked', 'checked');
            }

            // ==================================
            // クリック時の処理
            // ==================================
            // 値引き額
            \$(\"#coupon_discount_type_0\").on(\"click\", function(){
                \$(\"#coupon_discount_price\").removeAttr('disabled');
                \$(\"#coupon_discount_rate\").attr('disabled', 'disabled');
            });
            // 値引率
            \$(\"#coupon_discount_type_1\").on(\"click\", function(){
                \$(\"#coupon_discount_price\").attr('disabled', 'disabled');
                \$(\"#coupon_discount_rate\").removeAttr('disabled');
            });
            // クーポン種別 - 商品
            \$(\"#coupon_coupon_type_0\").on(\"click\", function(){
                if(\$(\"#category_area\").find(\".item_box\").length > 0) {
                    if(confirm(\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.remove_category_confirm"), "html", null, true);
        echo "\")) {
                        \$(\"#category_area\").find(\".item_box\").remove();
                    } else {
                        return false;
                    }
                }
                \$(\"#product_area\").show();
                \$(\"#category_area\").hide();
            });
            // クーポン種別 - カテゴリ
            \$(\"#coupon_coupon_type_1\").on(\"click\", function(){
                if(\$(\"#product_area\").find(\".item_box\").length > 0) {
                    if(confirm(\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.remove_product_confirm"), "html", null, true);
        echo "\")) {
                        \$(\"#product_area\").find(\".item_box\").remove();
                    } else {
                        return false;
                    }
                }
                \$(\"#product_area\").hide();
                \$(\"#category_area\").show();
            });

            \$(\"#coupon_coupon_type_2\").on(\"click\", function(){
                if(\$(\"#product_area\").find(\".item_box\").length > 0 || \$(\"#category_area\").find(\".item_box\").length) {
                    if(confirm(\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.remove_both_confirm"), "html", null, true);
        echo "\")) {
                        \$(\"#product_area\").find(\".item_box\").remove();
                        \$(\"#category_area\").find(\".item_box\").remove();
                    } else {
                        return false;
                    }
                }
                \$(\"#product_area\").hide();
                \$(\"#category_area\").hide();
            });

            // ==========================
            // 初期処理
            // ==========================
            // 値引き額
            if(\$(\"#coupon_discount_type_0\").prop('checked')) {
                \$(\"#coupon_discount_price\").removeAttr('disabled');
            } else {
                \$(\"#coupon_discount_price\").attr('disabled', 'disabled');
            }
            // 値引率
            if(\$(\"#coupon_discount_type_1\").prop('checked')) {
                \$(\"#coupon_discount_rate\").removeAttr('disabled');
            } else {
                \$(\"#coupon_discount_rate\").attr('disabled', 'disabled');
            }
            // クーポン種別 - 商品
            if(\$(\"#coupon_coupon_type_0\").prop('checked')) {
                \$(\"#product_area\").show();
            } else {
                \$(\"#product_area\").hide();
            }
            // クーポン種別 - カテゴリ
            if(\$(\"#coupon_coupon_type_1\").prop('checked')) {
                \$(\"#category_area\").show();
            } else {
                \$(\"#category_area\").hide();
            }

            var inputDate = document.createElement('input');
            inputDate.setAttribute('type', 'date');
            if (inputDate.type !== 'date') {
                \$('input[id\$=_date]').datetimepicker({
                    locale: 'ja',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    showTodayButton: true
                });
            }
        });
    </script>
";
    }

    // line 256
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo "    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 259), 259, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.header"), "html", null, true);
        echo "</span>
                        </div><!-- /.box-header -->
                        <div class=\"card-body\">
                            ";
        // line 269
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_cd", [], "any", false, false, true, 270), 270, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_cd", [], "any", false, false, true, 272), 272, $this->source), 'widget');
        echo "
                                    ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_cd", [], "any", false, false, true, 273), 273, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                            ";
        // line 278
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">
                                    ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_name", [], "any", false, false, true, 280), 280, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_name", [], "any", false, false, true, 282), 282, $this->source), 'widget');
        echo "
                                    ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_name", [], "any", false, false, true, 283), 283, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 287
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_type", [], "any", false, false, true, 288), 288, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_type", [], "any", false, false, true, 290), 290, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_type", [], "any", false, false, true, 291), 291, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 295
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_member", [], "any", false, false, true, 296), 296, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_member", [], "any", false, false, true, 298), 298, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_member", [], "any", false, false, true, 299), 299, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 303
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_type", [], "any", false, false, true, 304), 304, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_type", [], "any", false, false, true, 306), 306, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_type", [], "any", false, false, true, 307), 307, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 311
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_price", [], "any", false, false, true, 312), 312, $this->source), 'label');
        echo "</div>
                                <div class=\"col mb-2\">
                                    ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_price", [], "any", false, false, true, 314), 314, $this->source), 'widget');
        echo "
                                    ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_price", [], "any", false, false, true, 315), 315, $this->source), 'errors');
        echo "
                                    <span id=\"discount_type_price_description\" class=\"small\">";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.discount_price.note"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            ";
        // line 320
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_rate", [], "any", false, false, true, 321), 321, $this->source), 'label');
        echo "</div>
                                <div class=\"col mb-2\">
                                    ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_rate", [], "any", false, false, true, 323), 323, $this->source), 'widget');
        echo "
                                    ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_rate", [], "any", false, false, true, 324), 324, $this->source), 'errors');
        echo "
                                    <span id=\"discount_type_rate_description\" class=\"small\">";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.discount_rate.note"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            ";
        // line 329
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_release", [], "any", false, false, true, 330), 330, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_release", [], "any", false, false, true, 332), 332, $this->source), 'widget');
        echo "
                                    ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_release", [], "any", false, false, true, 333), 333, $this->source), 'errors');
        echo "
                                </div>
                                ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_use_time", [], "any", false, false, true, 335), 335, $this->source), 'widget');
        echo "
                                <input type=\"hidden\" name=\"coupon_release_old\" value=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 336), "value", [], "any", false, false, true, 336), "coupon_release", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
        echo "\">
                            </div>
                            ";
        // line 339
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_lower_limit", [], "any", false, false, true, 340), 340, $this->source), 'label');
        echo "</div>
                                <div class=\"col mb-2\">
                                    ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_lower_limit", [], "any", false, false, true, 342), 342, $this->source), 'widget');
        echo "
                                    ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_lower_limit", [], "any", false, false, true, 343), 343, $this->source), 'errors');
        echo "
                                    <span id=\"coupon_lower_limit_description\" class=\"small\">";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.coupon_lower_limit.note"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            ";
        // line 348
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_from_date", [], "any", false, false, true, 349), 349, $this->source), 'label');
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-4\">
                                            ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_from_date", [], "any", false, false, true, 353), 353, $this->source), 'widget');
        echo "
                                            ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_from_date", [], "any", false, false, true, 354), 354, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto text-center p-0\"><span class=\"align-middle\">～</span></div>
                                        <div class=\"col-4\">
                                            ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_to_date", [], "any", false, false, true, 358), 358, $this->source), 'widget');
        echo "
                                            ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_to_date", [], "any", false, false, true, 359), 359, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                    ";
        // line 372
        echo "                    <div class=\"card rounded border-0 mb-4\" id=\"product_area\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.header.product"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#productArea\" aria-expanded=\"false\" aria-controls=\"productArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"productArea\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <a id=\"showSearchProductModal\" class=\"btn btn-ec-regular me-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#searchProductModal\">商品の追加</a>
                                </div>
                                <div class=\"tableish\" id=\"coupon_detail_list\" data-prototype=\"";
        // line 393
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Coupon42/Resource/template/admin/regist_product_list_prototype.twig");
        echo "\">
                                    ";
        // line 394
        $context["i"] = 0;
        // line 395
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "CouponDetails", [], "any", false, false, true, 395));
        foreach ($context['_seq'] as $context["_key"] => $context["couponDetailForm"]) {
            // line 396
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "vars", [], "any", false, false, true, 396), "value", [], "any", false, false, true, 396), "Product", [], "any", false, false, true, 396))) {
                // line 397
                echo "                                            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "vars", [], "any", false, false, true, 397), "value", [], "any", false, false, true, 397), "product_name", [], "any", false, false, true, 397))) {
                    // line 398
                    echo "                                                <div class=\"row item_box\">
                                                    ";
                    // line 399
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "id", [], "any", false, false, true, 399), 399, $this->source), 'widget');
                    echo "
                                                    ";
                    // line 400
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "Product", [], "any", false, false, true, 400), 400, $this->source), 'widget');
                    echo "
                                                    <div class=\"col-11 item_detail\">
                                                        <div class=\"item_name_area\">
                                                            <div class=\"item_name fw-bold\">
                                                                <div id=\"coupon_CouponDetails_";
                    // line 404
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 404, $this->source), "html", null, true);
                    echo "_product_name\">
                                                                    ";
                    // line 405
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "vars", [], "any", false, false, true, 405), "value", [], "any", false, false, true, 405), "product_name", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                    echo "
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-1 icon_edit\">
                                                        <a class=\"btn btn-ec-actionIcon mr-3 delete-item\" data-bs-toggle=\"modal\" data-bs-toggle=\"tooltip\" data-bs-target=\"#confirmModal\" data-bs-placement=\"top\" title=\"";
                    // line 411
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                        </a>
                                                    </div>
                                                </div><!-- /.item_box -->
                                            ";
                }
                // line 417
                echo "                                        ";
            }
            // line 418
            echo "                                        ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 419
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couponDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "                                </div>

                            </div>
                        </div>
                    </div>

                    ";
        // line 431
        echo "                    <div class=\"card rounded border-0 mb-4\" id=\"category_area\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.header.category"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#categoryArea\" aria-expanded=\"false\" aria-controls=\"category_area\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" style=\"display: block;\" id=\"categoryArea\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <a id=\"showSearchCategoryModal\" class=\"btn btn-ec-regular mr-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCategoryModal\">カテゴリの追加</a>
                                </div>
                                <div class=\"tableish\"
                                     id=\"coupon_detail_list2\"
                                     data-prototype=\"";
        // line 454
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Coupon42/Resource/template/admin/regist_category_list_prototype.twig");
        echo "\">
                                    ";
        // line 455
        $context["i"] = 0;
        // line 456
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "CouponDetails", [], "any", false, false, true, 456));
        foreach ($context['_seq'] as $context["_key"] => $context["couponDetailForm"]) {
            // line 457
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "vars", [], "any", false, false, true, 457), "value", [], "any", false, false, true, 457), "Category", [], "any", false, false, true, 457))) {
                // line 458
                echo "                                            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "vars", [], "any", false, false, true, 458), "value", [], "any", false, false, true, 458), "category_full_name", [], "any", false, false, true, 458))) {
                    // line 459
                    echo "                                                <div class=\"row item_box\">
                                                    ";
                    // line 460
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "id", [], "any", false, false, true, 460), 460, $this->source), 'widget');
                    echo "
                                                    ";
                    // line 461
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "Category", [], "any", false, false, true, 461), 461, $this->source), 'widget');
                    echo "
                                                    <div class=\"col-11 item_detail\">
                                                        <div class=\"item_name_area\">
                                                            <div class=\"item_name fw-bold\">
                                                                <div id=\"coupon_CouponDetails_";
                    // line 465
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 465, $this->source), "html", null, true);
                    echo "_category_name\">
                                                                    ";
                    // line 466
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["couponDetailForm"], "vars", [], "any", false, false, true, 466), "value", [], "any", false, false, true, 466), "category_full_name", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
                    echo "
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"col-1 icon_edit\">
                                                        <a class=\"btn btn-ec-actionIcon mr-3 delete-item\" data-bs-toggle=\"modal\" data-bs-toggle=\"tooltip\" data-bs-target=\"#confirmModal\" data-bs-placement=\"top\" title=\"";
                    // line 473
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                        </a>
                                                    </div>
                                                </div><!-- /.item_box -->
                                            ";
                }
                // line 479
                echo "                                        ";
            }
            // line 480
            echo "                                        ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 481
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couponDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        echo "                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- /.c-primaryCol -->
            </div><!-- /.c-contentsArea__primaryCol -->

            ";
        // line 496
        echo "            <div class=\"c-conversionArea\">
                <div class=\"c-conversionArea__container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-6\">
                            <div class=\"c-conversionArea__leftBlockItem\">
                                <a class=\"c-baseLink\" href=\"";
        // line 501
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_list");
        echo "\">
                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</span></a>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"row align-items-center justify-content-end\">
                                <div class=\"col-auto\">
                                    <button type=\"submit\" class=\"btn btn-ec-conversion\">";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.registration"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.c-contentsArea__cols -->
    </form>

    ";
        // line 524
        echo "    <div class=\"modal\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchProductModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"searchProductModalLabel\">";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.modal.product"), "html", null, true);
        echo "</h4>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        ";
        // line 533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "id", [], "any", false, false, true, 533), 533, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name")]]);
        echo "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "category_id", [], "any", false, false, true, 536), 536, $this->source), 'widget');
        echo "
                    </div>
                    <div class=\"text-center mb-3\">
                        <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-primary\" >";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.modal.search"), "html", null, true);
        echo "</button>
                    </div>
                    <div id=\"searchProductModalList\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 552
        echo "    <div class=\"modal\" id=\"searchCategoryModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCategoryModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"searchCategoryModalLabel\">";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.modal.category"), "html", null, true);
        echo "</h4>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        ";
        // line 561
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchCategoryModalForm"] ?? null), "category_id", [], "any", false, false, true, 561), 561, $this->source), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"text-center mb-3\">
                        <button type=\"button\" id=\"searchCategoryModalButton\" class=\"btn btn-primary\" >";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.regist.modal.search"), "html", null, true);
        echo "</button>
                    </div>
                    <div id=\"searchCategoryModalList\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/regist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  899 => 564,  893 => 561,  885 => 556,  879 => 552,  868 => 539,  862 => 536,  856 => 533,  848 => 528,  842 => 524,  828 => 508,  819 => 502,  815 => 501,  808 => 496,  797 => 482,  791 => 481,  788 => 480,  785 => 479,  776 => 473,  766 => 466,  762 => 465,  755 => 461,  751 => 460,  748 => 459,  745 => 458,  742 => 457,  737 => 456,  735 => 455,  731 => 454,  710 => 436,  703 => 431,  695 => 420,  689 => 419,  686 => 418,  683 => 417,  674 => 411,  665 => 405,  661 => 404,  654 => 400,  650 => 399,  647 => 398,  644 => 397,  641 => 396,  636 => 395,  634 => 394,  630 => 393,  611 => 377,  604 => 372,  593 => 359,  589 => 358,  582 => 354,  578 => 353,  569 => 349,  566 => 348,  560 => 344,  556 => 343,  552 => 342,  547 => 340,  544 => 339,  539 => 336,  535 => 335,  530 => 333,  526 => 332,  519 => 330,  516 => 329,  510 => 325,  506 => 324,  502 => 323,  497 => 321,  494 => 320,  488 => 316,  484 => 315,  480 => 314,  475 => 312,  472 => 311,  466 => 307,  462 => 306,  455 => 304,  452 => 303,  446 => 299,  442 => 298,  435 => 296,  432 => 295,  426 => 291,  422 => 290,  415 => 288,  412 => 287,  406 => 283,  402 => 282,  395 => 280,  391 => 278,  384 => 273,  380 => 272,  373 => 270,  370 => 269,  364 => 265,  355 => 259,  351 => 257,  347 => 256,  291 => 203,  276 => 191,  261 => 179,  205 => 126,  190 => 114,  151 => 78,  102 => 32,  98 => 31,  93 => 30,  89 => 29,  77 => 21,  73 => 20,  66 => 15,  59 => 14,  54 => 10,  52 => 18,  50 => 17,  48 => 12,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/regist.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/admin/regist.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "form_theme" => 17, "for" => 395, "if" => 396);
        static $filters = array("escape" => 14, "trans" => 14, "length" => 126);
        static $functions = array("asset" => 21, "url" => 78, "form_widget" => 259, "form_label" => 270, "form_errors" => 273, "include" => 393);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'length'],
                ['asset', 'url', 'form_widget', 'form_label', 'form_errors', 'include']
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
