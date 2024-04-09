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

/* @admin/Order/edit.twig */
class __TwigTemplate_69b93a4595c60b209b7f263b942b87aa extends \Eccube\Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "order", 1 => "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchCustomerModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchProductModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script>
        \$(function() {
            // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
            \$('input').on('keydown', function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_customer_html");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_product");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id': \$('#admin_search_product_id').val(),
                        'category_id': \$('#admin_search_product_category_id').val()
                    }
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // その他明細
            \$('#addOrderItemType').on('show.bs.modal', function(e) {
                var list = \$('#searchOrderItemTypeList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 78
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_order_item_type");
        echo "',
                    type: 'POST',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchOrderItemTypeList').html(data);
                }).fail(function(data) {
                    alert('search order item type failed.');
                });
            });

            // ページング処理
            \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
                e.preventDefault();
                var list = \$('#searchProductModalList');
                list.children().remove();
                var url = \$(this).attr('href');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // 商品追加
            \$collectionHolder = \$('#table-form-field');
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#order_OrderItems_';
            if (index > 0) {
                let row = '#' + \$collectionHolder.find('tbody > tr').last().data(\"row\");
                index = row.replace(formIdPrefix, '');
            }

            \$(document).on('click', '.delete', function(e) {
                // 商品削除
                \$(this).parents('tr').remove();
                index--;
                \$(\"#calculate\").trigger('click');
            });

            // 計算結果の更新が押されたらページ内リンクさせる
            \$('.btn').click(function() {
                var data = \$(this).data();
                if (data.link) {
                    \$('#form1').attr('action', '#' + data.link).submit();
                    return false;
                }
            });

            // 注文者情報をコピー
            \$('.copy-customer').on('click', function() {
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))

            // 配送業者選択時にお届け時間を設定
            var times = ";
        // line 178
        echo $this->sandbox->ensureToStringAllowed(($context["shippingDeliveryTimes"] ?? null), 178, $this->source);
        echo ";
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.select__unspecified"), "html", null, true);
        echo "'));
                if (typeof(times[deliveryId]) !== 'undefined') {
                    for (var timeId in times[deliveryId]) {
                        timeValue = times[deliveryId][timeId];
                        \$shippingDeliveryTime.append(\$('<option></option>')
                            .val(timeId)
                            .text(timeValue));
                    }
                }
            });
        });

        ";
        // line 196
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 196) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 196)))) {
            // line 197
            echo "            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = ";
            // line 200
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "point_conversion_rate", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo ";
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        ";
        }
        // line 219
        echo "    </script>
";
    }

    // line 222
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "    ";
        // line 224
        echo "    ";
        $context["action_disabled"] = false;
        // line 225
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, true, 225)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, true, 225), "id", [], "any", false, false, true, 225), [0 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PROCESSING"), 1 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PENDING")]))) {
            // line 227
            $context["action_disabled"] = true;
        }
        // line 229
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"";
        // line 254
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 254) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 254)))) {
            echo " onsubmit=\"updatePointItem()\"";
        }
        echo ">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 256), 256, $this->source), 'widget');
        echo "
        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", [], "any", false, false, true, 257), 257, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_no"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                            <div class=\"col\">";
        // line 276
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                ";
        // line 281
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 281))) {
            // line 282
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatus", [], "any", false, false, true, 282), 282, $this->source), 'widget');
            echo "
                                                    ";
            // line 283
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatus", [], "any", false, false, true, 283), 283, $this->source), 'errors');
            echo "
                                                ";
        }
        // line 285
        echo "                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, true, 290), 290, $this->source), 'widget');
        echo "
                                                ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, true, 291), 291, $this->source), 'errors');
        echo "
                                                <p class=\"form-text fw-bold text-danger mb-0\">";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.change_payment_method_message"), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 299
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, true, 299)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, true, 299)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 303
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_date", [], "any", false, false, true, 303)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_date", [], "any", false, false, true, 303)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 305
        if ( !twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, true, 305)) {
            // line 306
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 309)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "shipping_date", [], "any", false, false, true, 309), 309, $this->source)), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 313
        echo "                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 315
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "update_date", [], "any", false, false, true, 315)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "update_date", [], "any", false, false, true, 315)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.device_type"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 319
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "device_type", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-commenting fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 323
        echo ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, true, 323)) ? (twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, true, 323), 323, $this->source), "html", null, true))) : (""));
        echo "</div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 329
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 329), "eccube_form_options", [], "any", false, false, true, 329), "auto_render", [], "any", false, false, true, 329); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 330
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 330), "eccube_form_options", [], "any", false, false, true, 330), "form_theme", [], "any", false, false, true, 330)) {
                // line 331
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 331), "eccube_form_options", [], "any", false, false, true, 331), "form_theme", [], "any", false, false, true, 331)], true);
                // line 332
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 332, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 334
                echo "                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>";
                // line 338
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 338), "label", [], "any", false, false, true, 338), 338, $this->source)), "html", null, true);
                echo "</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
                // line 341
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 341, $this->source), 'widget');
                echo "
                                                        ";
                // line 342
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 342, $this->source), 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 348
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col\">";
        // line 359
        if (($context["id"] ?? null)) {
            echo "<span class=\"me-5\">";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 359), "vars", [], "any", false, false, true, 359), "value", [], "any", false, false, true, 359))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 359), "vars", [], "any", false, false, true, 359), "value", [], "any", false, false, true, 359)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 359), "vars", [], "any", false, false, true, 359), "value", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
                echo "</a>";
            }
            echo "</span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "full_name", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "full_name_kana", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo ") 〒";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
        }
        echo "</div>
                                <div class=\"col-1 text-end\"><a class=\"d-block\" data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa ";
        // line 360
        echo ((($context["id"] ?? null)) ? ("fa-angle-down") : ("fa-angle-up"));
        echo " fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse ";
        // line 363
        echo ((($context["id"] ?? null)) ? ("") : ("show"));
        echo " ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                ";
        // line 366
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 366))) {
            // line 367
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCustomerModal\">";
            // line 369
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_from_customer"), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title fw-bold\">";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_customer_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
            // line 381
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchCustomerModalForm"] ?? null), "multi", [], "any", false, false, true, 381), 381, $this->source), 'widget', ["attr" => ["class" => "mb-2searchCustomerModal", "placeholder" => "admin.customer.multi_search_label"]]);
            echo "
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 382
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                    <div class=\"mb-3\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 389
        echo "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.customer_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">";
        // line 394
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 394), "vars", [], "any", false, false, true, 394), "value", [], "any", false, false, true, 394))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 394), "vars", [], "any", false, false, true, 394), "value", [], "any", false, false, true, 394)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 394), "vars", [], "any", false, false, true, 394), "value", [], "any", false, false, true, 394), 394, $this->source), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 395), 395, $this->source), 'widget');
        echo "
                                                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, true, 396), 396, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 404), "name01", [], "any", false, false, true, 404), 404, $this->source), 'widget');
        echo "
                                                        ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 405), "name01", [], "any", false, false, true, 405), 405, $this->source), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 408), "name02", [], "any", false, false, true, 408), 408, $this->source), 'widget');
        echo "
                                                        ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 409), "name02", [], "any", false, false, true, 409), 409, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 419), "kana01", [], "any", false, false, true, 419), 419, $this->source), 'widget');
        echo "
                                                        ";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 420), "kana01", [], "any", false, false, true, 420), 420, $this->source), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 423), "kana02", [], "any", false, false, true, 423), 423, $this->source), 'widget');
        echo "
                                                        ";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 424), "kana02", [], "any", false, false, true, 424), 424, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col row align-items-center\">
                                                        <span class=\"col-auto\">";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span>
                                                        <span class=\"col-auto ps-0\">";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 435), 435, $this->source), 'widget');
        echo "</span>
                                                        ";
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 436), 436, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 441), "pref", [], "any", false, false, true, 441), 441, $this->source), 'widget');
        echo "
                                                        ";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 442), "pref", [], "any", false, false, true, 442), 442, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 447), "addr01", [], "any", false, false, true, 447), 447, $this->source), 'widget');
        echo "
                                                        ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 448), "addr01", [], "any", false, false, true, 448), 448, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 453), "addr02", [], "any", false, false, true, 453), 453, $this->source), 'widget');
        echo "
                                                        ";
        // line 454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 454), "addr02", [], "any", false, false, true, 454), 454, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 465), 465, $this->source), 'widget');
        echo "
                                                ";
        // line 466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 466), 466, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 472), 472, $this->source), 'widget');
        echo "
                                                ";
        // line 473
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 473), 473, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 479), 479, $this->source), 'widget');
        echo "
                                                ";
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 480), 480, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 486
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, true, 486), 486, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                                ";
        // line 487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, true, 487), 487, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                ";
        // line 507
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, true, 507)) {
            // line 508
            echo "                                    ";
            // line 509
            echo "                                    <div class=\"mb-3\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 510
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
            // line 511
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 511)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping"), "html", null, true);
            echo "</a>
                                        <span class=\"ml-3\">";
            // line 512
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping_description"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 514
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 514));
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
                // line 515
                echo "                                        <div class=\"col\">
                                            <span class=\"me-5\">";
                // line 516
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 516), 516, $this->source), "html", null, true);
                echo ")</span>
                                            ";
                // line 517
                $context["shipping_name"] = (((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, true, 517), 517, $this->source) . "(") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, true, 517), 517, $this->source)) . ")") . (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, true, 517))) ? ((" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, true, 517), 517, $this->source))) : ("")));
                // line 518
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 518), 518, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 518), 518, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 518), 518, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 518), 518, $this->source));
                // line 519
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, true, 519))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, true, 519), 519, $this->source))) : (""));
                // line 520
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["shipping_name"] ?? null), 520, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["shipping_addr"] ?? null), 520, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 520), 520, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["shipping_date"] ?? null), 520, $this->source), "html", null, true);
                echo "
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
            // line 523
            echo "                                ";
        } else {
            // line 524
            echo "                                    ";
            // line 525
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 527
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>
                                            ";
            // line 528
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 528))) {
                // line 529
                echo "                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_pdf");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 529)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "id", [], "any", false, false, true, 529), 529, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 531
            echo "                                        </div>
                                        ";
            // line 532
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 532))) {
                // line 533
                echo "                                            <div class=\"col-6 text-end\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"";
                // line 534
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
                // line 535
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 535)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
                echo "</a>
                                            </div>
                                        ";
            }
            // line 538
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 543
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 547
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 547), "name", [], "any", false, false, true, 547), "name01", [], "any", false, false, true, 547), 547, $this->source), 'widget');
            echo "
                                                            ";
            // line 548
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 548), "name", [], "any", false, false, true, 548), "name01", [], "any", false, false, true, 548), 548, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 551
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 551), "name", [], "any", false, false, true, 551), "name02", [], "any", false, false, true, 551), 551, $this->source), 'widget');
            echo "
                                                            ";
            // line 552
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 552), "name", [], "any", false, false, true, 552), "name02", [], "any", false, false, true, 552), 552, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 558
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 562), "kana", [], "any", false, false, true, 562), "kana01", [], "any", false, false, true, 562), 562, $this->source), 'widget');
            echo "
                                                            ";
            // line 563
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 563), "kana", [], "any", false, false, true, 563), "kana01", [], "any", false, false, true, 563), 563, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 566
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 566), "kana", [], "any", false, false, true, 566), "kana02", [], "any", false, false, true, 566), 566, $this->source), 'widget');
            echo "
                                                            ";
            // line 567
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 567), "kana", [], "any", false, false, true, 567), "kana02", [], "any", false, false, true, 567), 567, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 573
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">";
            // line 577
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "</span>
                                                            <span class=\"col-auto ps-0\">";
            // line 578
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 578), "postal_code", [], "any", false, false, true, 578), 578, $this->source), 'widget');
            echo "</span>
                                                            ";
            // line 579
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 579), "postal_code", [], "any", false, false, true, 579), 579, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 584
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 584), "address", [], "any", false, false, true, 584), "pref", [], "any", false, false, true, 584), 584, $this->source), 'widget');
            echo "
                                                            ";
            // line 585
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 585), "address", [], "any", false, false, true, 585), "pref", [], "any", false, false, true, 585), 585, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 590
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 590), "address", [], "any", false, false, true, 590), "addr01", [], "any", false, false, true, 590), 590, $this->source), 'widget');
            echo "
                                                            ";
            // line 591
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 591), "address", [], "any", false, false, true, 591), "addr01", [], "any", false, false, true, 591), 591, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 596
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 596), "address", [], "any", false, false, true, 596), "addr02", [], "any", false, false, true, 596), 596, $this->source), 'widget');
            echo "
                                                            ";
            // line 597
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 597), "address", [], "any", false, false, true, 597), "addr02", [], "any", false, false, true, 597), 597, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 605
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 607
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 607), "phone_number", [], "any", false, false, true, 607), 607, $this->source), 'widget');
            echo "
                                                    ";
            // line 608
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 608), "phone_number", [], "any", false, false, true, 608), 608, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 613
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 615
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 615), "company_name", [], "any", false, false, true, 615), 615, $this->source), 'widget');
            echo "
                                                    ";
            // line 616
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 616), "company_name", [], "any", false, false, true, 616), 616, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 625
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.tracking_number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 627
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 627), "tracking_number", [], "any", false, false, true, 627), 627, $this->source), 'widget');
            echo "
                                                    ";
            // line 628
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 628), "tracking_number", [], "any", false, false, true, 628), 628, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 632
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.delivery_provider"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\"></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 634
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 634), "Delivery", [], "any", false, false, true, 634), 634, $this->source), 'widget');
            echo "
                                                    ";
            // line 635
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 635), "Delivery", [], "any", false, false, true, 635), 635, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 639
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.shop_memo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_shipped"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 641
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 641), "note", [], "any", false, false, true, 641), 641, $this->source), 'widget');
            echo "
                                                    ";
            // line 642
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 642), "note", [], "any", false, false, true, 642), 642, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 648
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 650
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 650), "shipping_delivery_date", [], "any", false, false, true, 650), 650, $this->source), 'widget');
            echo "
                                                    ";
            // line 651
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 651), "shipping_delivery_date", [], "any", false, false, true, 651), 651, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 655
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_time"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 657
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 657), "DeliveryTime", [], "any", false, false, true, 657), 657, $this->source), 'widget');
            echo "
                                                    ";
            // line 658
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, true, 658), "DeliveryTime", [], "any", false, false, true, 658), 658, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 664
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        ";
        // line 681
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, true, 681)) {
            // line 682
            echo "                                            <a class=\"btn btn-ec-regular me-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 687
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 691
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "id", [], "any", false, false, true, 691), 691, $this->source), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 692
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "category_id", [], "any", false, false, true, 692), 692, $this->source), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 693
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 700
        echo "                                        <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 714
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItemsErrors", [], "any", false, false, true, 714), 714, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular me-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"";
        // line 717
        echo ((($context["action_disabled"] ?? null)) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 721
        ob_start(function () { return ''; });
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItems", [], "any", false, false, true, 721), "vars", [], "any", false, false, true, 721), "prototype", [], "any", false, false, true, 721)]);
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_6_);
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 ps-3\">";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pe-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItems", [], "any", false, false, true, 744));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 745
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 745), "data", [], "any", false, false, true, 745);
            // line 746
            echo "                                        <tr data-row=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 746), "id", [], "any", false, false, true, 746), 746, $this->source), "html", null, true);
            echo "\">
                                            ";
            // line 748
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, true, 748), 748, $this->source), 'widget');
            echo "
                                            ";
            // line 749
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, true, 749), 749, $this->source), 'widget');
            echo "
                                            ";
            // line 750
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "point_rate", [], "any", false, false, true, 750), 750, $this->source), 'widget');
            echo "
                                            ";
            // line 751
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, true, 751), 751, $this->source), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 ps-3\">
                                                <p class=\"mb-0 fw-bold\">
                                                    ";
            // line 756
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, true, 756) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, true, 756))) {
                // line 757
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, true, 757)) {
                    // line 758
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "ProductClass", [], "any", false, false, true, 758), "Product", [], "any", false, false, true, 758), "id", [], "any", false, false, true, 758)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 759
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, true, 759), 759, $this->source), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 762
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, true, 762), 762, $this->source), "html", null, true);
                    echo "
                                                        ";
                }
                // line 764
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 764), 764, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 766
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 766), 766, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 768
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 770
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_code", [], "any", false, false, true, 770), 770, $this->source), "html", null, true);
            echo "
                                                    ";
            // line 771
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name1", [], "any", false, false, true, 771))) {
                // line 772
                echo "                                                        / (
                                                        ";
                // line 773
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_name1", [], "any", false, false, true, 773), 773, $this->source), "html", null, true);
                echo "：
                                                        ";
                // line 774
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name1", [], "any", false, false, true, 774), 774, $this->source), "html", null, true);
                echo "
                                                        ";
                // line 775
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name2", [], "any", false, false, true, 775))) {
                    // line 776
                    echo "                                                            /
                                                            ";
                    // line 777
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_name2", [], "any", false, false, true, 777), 777, $this->source), "html", null, true);
                    echo "：
                                                            ";
                    // line 778
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name2", [], "any", false, false, true, 778), 778, $this->source), "html", null, true);
                    echo "
                                                        ";
                }
                // line 780
                echo "                                                        )
                                                    ";
            }
            // line 782
            echo "                                                </span>
                                                ";
            // line 783
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 783), 783, $this->source), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 789
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, true, 789)) {
                // line 790
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 790), 790, $this->source), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 792
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 792), 792, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 794
            echo "                                                    <div class=\"text-end small\">(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "TaxDisplayType", [], "any", false, false, true, 794), 794, $this->source), "html", null, true);
            echo ")</div>
                                                    ";
            // line 795
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 795), 795, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 802
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, true, 802) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, true, 802)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, true, 802))) {
                // line 803
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 803), 803, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 805
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 805), 805, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 807
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 807), 807, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 814
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, true, 814) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, true, 814)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, true, 814)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "TaxType", [], "any", false, false, true, 814), "id", [], "any", false, false, true, 814) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 815
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 815), 815, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 817
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 817), 817, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 819
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 819), 819, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 825
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "tax_type", [], "any", false, false, true, 825), 825, $this->source), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 831
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "total_price", [], "any", false, false, true, 831), 831, $this->source)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-end pe-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 837
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, true, 837) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, true, 837)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, true, 837))) {
                // line 838
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"";
                // line 840
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 847
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"";
                // line 849
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 850
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 850), "id", [], "any", false, false, true, 850), 850, $this->source), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 855
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 855), "id", [], "any", false, false, true, 855), 855, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 855), "id", [], "any", false, false, true, 855), 855, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">";
                // line 859
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start\">";
                // line 865
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, true, 865)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 868
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 869
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 876
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 886
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, true, 886), 886, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, true, 891), 891, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 896
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, true, 896), 896, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 901), 901, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 906
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 907
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, true, 907), 907, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, true, 909));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 910
            echo "                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 911
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 911), 911, $this->source), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">";
            // line 912
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 912), 912, $this->source)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 917
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 918
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 918), 918, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 消費税額 -->
                                ";
        // line 922
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "total_by_tax_rate", [], "any", false, false, true, 922));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 923
            echo "                                    <div class=\"row justify-content-end mb-3\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 924
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-2 text-end\"><span class=\"align-middle fw-normal\">";
            // line 925
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 925, $this->source)), "html", null, true);
            echo "</span>(";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_amount"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_by_tax_rate", [], "any", false, false, true, 925)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["rate"]] ?? null) : null), 925, $this->source)), "html", null, true);
            echo ")</div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        echo "                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 931
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            ";
        // line 934
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 934), "value", [], "any", false, false, true, 934), "addpoint", [], "any", false, false, true, 934), 934, $this->source)), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 940
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.use_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            ";
        // line 944
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 944) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 944)))) {
            // line 945
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, true, 945), 945, $this->source), 'widget');
            echo "
                                            ";
        } else {
            // line 947
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, true, 947), 947, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
            echo "
                                            ";
        }
        // line 949
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, true, 949), 949, $this->source), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shop_memo"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                ";
        // line 968
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, true, 968), 968, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    ";
        // line 973
        if ( !(null === ($context["id"] ?? null))) {
            // line 974
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 978
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_history"), "html", null, true);
            echo "\"><span class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_history"), "html", null, true);
            echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 ps-3\">";
            // line 988
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send_date"), "html", null, true);
            echo "</th>
                                            <th class=\"pt-2 pb-2 pe-3\">";
            // line 989
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
            echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 993
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MailHistories", [], "any", false, false, true, 993));
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
            foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
                // line 994
                echo "                                            <tr>
                                                <td class=\"ps-3\">";
                // line 995
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, true, 995), 995, $this->source)), "html", null, true);
                echo "</td>
                                                <td class=\"pe-3\">
                                                    <a class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#mail2-";
                // line 997
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 997), 997, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, true, 997), 997, $this->source), "html", null, true);
                echo "</a>
                                                    <div class=\"modal fade\" id=\"mail2-";
                // line 998
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 998), 998, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 998), 998, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">";
                // line 1002
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, true, 1002), 1002, $this->source), "html", null, true);
                echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        ";
                // line 1007
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, true, 1007)) > 0)) {
                    // line 1008
                    echo "                                                                            ";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, true, 1008), 1008, $this->source));
                    echo "
                                                                        ";
                } else {
                    // line 1010
                    echo "                                                                            ";
                    echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, true, 1010), 1010, $this->source), "html", null, true));
                    echo "
                                                                        ";
                }
                // line 1012
                echo "                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 1015
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
                echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1023
            echo "                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 1026
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail")]), "html", null, true);
            // line 1028
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 1028)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_create"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    ";
        }
        // line 1034
        echo "                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 1043
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"";
        // line 1049
        echo ((($context["action_disabled"] ?? null)) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2097 => 1049,  2086 => 1043,  2075 => 1034,  2063 => 1028,  2061 => 1026,  2056 => 1023,  2034 => 1015,  2029 => 1012,  2023 => 1010,  2017 => 1008,  2015 => 1007,  2007 => 1002,  1998 => 998,  1992 => 997,  1987 => 995,  1984 => 994,  1967 => 993,  1960 => 989,  1956 => 988,  1941 => 978,  1935 => 974,  1933 => 973,  1925 => 968,  1913 => 961,  1897 => 949,  1891 => 947,  1885 => 945,  1882 => 944,  1876 => 940,  1867 => 934,  1861 => 931,  1856 => 928,  1843 => 925,  1839 => 924,  1836 => 923,  1832 => 922,  1825 => 918,  1821 => 917,  1817 => 915,  1808 => 912,  1804 => 911,  1801 => 910,  1797 => 909,  1792 => 907,  1788 => 906,  1780 => 901,  1776 => 900,  1769 => 896,  1765 => 895,  1758 => 891,  1754 => 890,  1747 => 886,  1743 => 885,  1736 => 880,  1727 => 876,  1717 => 869,  1713 => 868,  1707 => 865,  1698 => 859,  1689 => 855,  1681 => 850,  1677 => 849,  1673 => 847,  1663 => 840,  1659 => 838,  1656 => 837,  1648 => 831,  1639 => 825,  1629 => 819,  1623 => 817,  1617 => 815,  1614 => 814,  1604 => 807,  1598 => 805,  1592 => 803,  1589 => 802,  1580 => 795,  1575 => 794,  1569 => 792,  1563 => 790,  1560 => 789,  1552 => 783,  1549 => 782,  1545 => 780,  1540 => 778,  1536 => 777,  1533 => 776,  1531 => 775,  1527 => 774,  1523 => 773,  1520 => 772,  1518 => 771,  1514 => 770,  1510 => 768,  1504 => 766,  1498 => 764,  1492 => 762,  1486 => 759,  1481 => 758,  1478 => 757,  1475 => 756,  1468 => 751,  1464 => 750,  1460 => 749,  1455 => 748,  1450 => 746,  1447 => 745,  1443 => 744,  1434 => 738,  1428 => 735,  1422 => 732,  1416 => 729,  1410 => 726,  1405 => 724,  1396 => 721,  1387 => 717,  1381 => 714,  1369 => 705,  1360 => 700,  1350 => 693,  1346 => 692,  1342 => 691,  1335 => 687,  1326 => 682,  1323 => 681,  1309 => 671,  1300 => 664,  1291 => 658,  1287 => 657,  1282 => 655,  1275 => 651,  1271 => 650,  1266 => 648,  1257 => 642,  1253 => 641,  1246 => 639,  1239 => 635,  1235 => 634,  1228 => 632,  1221 => 628,  1217 => 627,  1210 => 625,  1198 => 616,  1194 => 615,  1189 => 613,  1181 => 608,  1177 => 607,  1170 => 605,  1159 => 597,  1155 => 596,  1147 => 591,  1143 => 590,  1135 => 585,  1131 => 584,  1123 => 579,  1119 => 578,  1115 => 577,  1106 => 573,  1097 => 567,  1093 => 566,  1087 => 563,  1083 => 562,  1074 => 558,  1065 => 552,  1061 => 551,  1055 => 548,  1051 => 547,  1042 => 543,  1035 => 538,  1026 => 535,  1024 => 534,  1021 => 533,  1019 => 532,  1016 => 531,  1006 => 529,  1004 => 528,  1000 => 527,  996 => 525,  994 => 524,  991 => 523,  967 => 520,  964 => 519,  961 => 518,  959 => 517,  953 => 516,  950 => 515,  933 => 514,  928 => 512,  921 => 511,  919 => 510,  916 => 509,  914 => 508,  912 => 507,  900 => 500,  884 => 487,  880 => 486,  875 => 484,  868 => 480,  864 => 479,  859 => 477,  852 => 473,  848 => 472,  841 => 470,  834 => 466,  830 => 465,  823 => 463,  811 => 454,  807 => 453,  799 => 448,  795 => 447,  787 => 442,  783 => 441,  775 => 436,  771 => 435,  767 => 434,  758 => 430,  749 => 424,  745 => 423,  739 => 420,  735 => 419,  726 => 415,  717 => 409,  713 => 408,  707 => 405,  703 => 404,  694 => 400,  687 => 396,  683 => 395,  671 => 394,  664 => 392,  659 => 389,  649 => 382,  645 => 381,  638 => 377,  627 => 369,  623 => 367,  621 => 366,  615 => 363,  609 => 360,  582 => 359,  577 => 357,  567 => 349,  561 => 348,  552 => 342,  548 => 341,  542 => 338,  536 => 334,  530 => 332,  527 => 331,  524 => 330,  519 => 329,  511 => 323,  507 => 322,  501 => 319,  497 => 318,  491 => 315,  487 => 314,  484 => 313,  477 => 309,  472 => 307,  469 => 306,  467 => 305,  462 => 303,  458 => 302,  452 => 299,  448 => 298,  439 => 292,  435 => 291,  431 => 290,  426 => 288,  421 => 285,  416 => 283,  411 => 282,  409 => 281,  402 => 279,  396 => 276,  390 => 275,  375 => 265,  364 => 257,  360 => 256,  353 => 254,  344 => 248,  338 => 245,  325 => 235,  317 => 229,  314 => 227,  311 => 225,  308 => 224,  306 => 223,  302 => 222,  297 => 219,  275 => 200,  270 => 197,  267 => 196,  252 => 183,  244 => 178,  141 => 78,  118 => 58,  98 => 41,  78 => 23,  74 => 22,  67 => 16,  60 => 15,  55 => 11,  53 => 20,  51 => 19,  49 => 18,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/edit.twig", "/var/www/html/src/Eccube/Resource/template/admin/Order/edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 196, "for" => 329, "apply" => 721);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 178, "date_sec" => 299, "nl2br" => 323, "filter" => 329, "date_day" => 519, "price" => 831, "number_format" => 934, "date_min" => 995, "length" => 1007, "purify" => 1008);
        static $functions = array("url" => 41, "constant" => 226, "form_widget" => 256, "form_errors" => 283, "form_row" => 332, "path" => 511, "include" => 721);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'apply'],
                ['escape', 'trans', 'raw', 'date_sec', 'nl2br', 'filter', 'date_day', 'price', 'number_format', 'date_min', 'length', 'purify'],
                ['url', 'constant', 'form_widget', 'form_errors', 'form_row', 'path', 'include']
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
