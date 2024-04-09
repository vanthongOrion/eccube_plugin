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

/* @admin/Order/index.twig */
class __TwigTemplate_6f8ba556a1011de918b2da60f7e9a377 extends \Eccube\Twig\Template
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
        // line 12
        $context["menus"] = [0 => "order", 1 => "order_master"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <script>
        \$(function() {
            toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#toggle_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
            });

            // 登録チェックボックス
            \$('#toggle_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
            });

            \$('#btn_bulk_delete').on('click', function(event) {
                event.preventDefault();
                \$('#form_bulk').attr('action', \"";
        // line 40
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_bulk_delete");
        echo "\").submit();
                return false;
            });

            // PDF出力(複数)
            \$('#bulkExportPdf').on('click', function(event) {
                window.open('', 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                \$('#form_bulk').attr('action', \"";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_pdf");
        echo "\");
                \$('#form_bulk').attr('target', 'newwin');
                \$('#form_bulk').submit();
                return false;
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // 送り状番号
            var updateTrackingNumber = function(id, url, tracking_number, callback) {
                \$.ajax({
                    type: 'PUT',
                    url: url,
                    data: {'tracking_number': tracking_number}
                }).done(function(data, textStatus, jqXHR) {
                    if (data['status'] == 'OK') {
                        \$('#tracking_number_' + id).val(data['tracking_number']);
                        if (typeof callback == 'function') {
                            callback();
                        }
                    } else {
                        alert('Update failed.');
                    }
                    return true;
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    var response = JSON.parse(jqXHR.responseText);
                    var messages = '';
                    for (var i = 0; i < response.messages.length; i++) {
                        messages += response.messages[i] + \"\\n\";
                    }
                    alert(messages);
                    return false;
                });
            };

            \$('button.update_tracking_number').prop('disabled', true);
            // フォームに変更があったら更新ボタンを有効にする
            \$('input.update_tracking_number').on('keyup', function(event) {
                var \$tracking_number = \$(this);
                var \$button = \$(\"button[data-target='#\" + \$tracking_number.attr('id') + \"']\");
                \$button.prop('disabled', false);
                \$button.children('i')
                    .removeClass('text-secondary')
                    .addClass('text-success');
            });
            // enter キーで更新し、次のフォームへフォーカスを移動する
            \$('input.update_tracking_number').on('keypress', function(event) {
                var \$tracking_number = \$(this);
                var \$button = \$(\"button[data-target='#\" + \$tracking_number.attr('id') + \"']\");

                var code = event.which ? event.which : event.keyCode;

                if (code == 13) { // on press to enter
                    var index = \$('input.update_tracking_number').index(this);
                    var callback = function() {
                        \$button.prop('disabled', true);
                        \$button.children('i')
                            .removeClass('text-success')
                            .addClass('text-secondary');
                        \$('input.update_tracking_number:gt(' + index + '):first').focus();
                    };
                    updateTrackingNumber(\$tracking_number.data('shipping_id'), \$tracking_number.data('url'), \$tracking_number.val(), callback);
                    event.preventDefault();
                }
            });
            // 更新ボタンの制御
            \$('button.update_tracking_number').on('click', function(event) {
                event.preventDefault();
                var \$button = \$(this);
                var \$target = \$(\$(this).data('target'));
                var tracking_number = \$target.val();
                var callback = function() {
                    \$button.prop('disabled', true);
                    \$button.children('i')
                        .removeClass('text-success')
                        .addClass('text-secondary');
                };

        updateTrackingNumber(\$target.data('shipping_id'), \$target.data('url'), tracking_number, callback);
    });

    // 完了ボタン
    \$('#bulkChangeComplete').on('click', function() {
        location.href = '";
        // line 134
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 140
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
    }

    // line 143
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 146
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, true, 150), 150, $this->source), 'widget');
        echo "
                        <div>
                            <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 153), 153, $this->source), 'widget');
        echo "
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 154), 154, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"row\">
                            <div class=\"mb-3 col-12\">
                                <label class=\"col-form-label\"  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 160
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 160);
        // line 161
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "children", [], "any", false, false, true, 162));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 163
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                   id=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 165), "id", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "\"
                                                   name=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 166), "full_name", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "\"
                                                   class=\"form-check-input\"
                                                   value=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 168), "value", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 168), "checked", [], "any", false, false, true, 168)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 169), "id", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 169), "label", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "</label>";
            // line 170
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "vars", [], "any", false, false, true, 170), "order_count", [], "any", false, false, true, 170)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["status_id"]] ?? null) : null), "display", [], "any", false, false, true, 170)) {
                // line 171
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "vars", [], "any", false, false, true, 171), "order_count", [], "any", false, false, true, 171)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["status_id"]] ?? null) : null), "count", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "</a>)";
            }
            // line 173
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                                </div>
                                ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 176), 176, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa fw-bold me-1 fa-plus-square-o\">
                                    <span class=\"fw-bold\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse";
        // line 189
        echo ((($context["has_errors"] ?? null)) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "name", [], "any", false, false, true, 193), 193, $this->source), 'widget');
        echo "
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "name", [], "any", false, false, true, 194), 194, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, true, 200), 200, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, true, 201), 201, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_kana"), "html", null, true);
        echo "</label>
                        ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "kana", [], "any", false, false, true, 209), 209, $this->source), 'widget');
        echo "
                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "kana", [], "any", false, false, true, 210), 210, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_start", [], "any", false, false, true, 216), 216, $this->source), 'widget');
        echo "
                                ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_start", [], "any", false, false, true, 217), 217, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_end", [], "any", false, false, true, 221), 221, $this->source), 'widget');
        echo "
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_end", [], "any", false, false, true, 222), 222, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_company_name"), "html", null, true);
        echo "</label>
                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "company_name", [], "any", false, false, true, 230), 230, $this->source), 'widget');
        echo "
                        ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "company_name", [], "any", false, false, true, 231), 231, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_start", [], "any", false, false, true, 237), 237, $this->source), 'widget');
        echo "
                                ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_start", [], "any", false, false, true, 238), 238, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_end", [], "any", false, false, true, 242), 242, $this->source), 'widget');
        echo "
                                ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_end", [], "any", false, false, true, 243), 243, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</label>
                        ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "email", [], "any", false, false, true, 251), 251, $this->source), 'widget');
        echo "
                        ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "email", [], "any", false, false, true, 252), 252, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, true, 258), 258, $this->source), 'widget');
        echo "
                                ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, true, 259), 259, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, true, 263), 263, $this->source), 'widget');
        echo "
                                ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, true, 264), 264, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, true, 272), 272, $this->source), 'widget');
        echo "
                        ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, true, 273), 273, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_start", [], "any", false, false, true, 280), 280, $this->source), 'widget');
        echo "
                                    ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_start", [], "any", false, false, true, 281), 281, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_end", [], "any", false, false, true, 287), 287, $this->source), 'widget');
        echo "
                                    ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_end", [], "any", false, false, true, 288), 288, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</label>
                        ";
        // line 297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_no", [], "any", false, false, true, 297), 297, $this->source), 'widget');
        echo "
                        ";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_no", [], "any", false, false, true, 298), 298, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_start", [], "any", false, false, true, 305), 305, $this->source), 'widget');
        echo "
                                    ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_start", [], "any", false, false, true, 306), 306, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_end", [], "any", false, false, true, 312), 312, $this->source), 'widget');
        echo "
                                    ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_end", [], "any", false, false, true, 313), 313, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
        echo "</p>
                                ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tracking_number", [], "any", false, false, true, 324), 324, $this->source), 'widget');
        echo "
                                ";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tracking_number", [], "any", false, false, true, 325), 325, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, true, 331), 331, $this->source), 'widget');
        echo "
                        ";
        // line 332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, true, 332), 332, $this->source), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail"), "html", null, true);
        echo "</p>
                                ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_mail", [], "any", false, false, true, 341), 341, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_mail", [], "any", false, false, true, 342), 342, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\"></div>
                </div>

                ";
        // line 350
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["searchForm"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 350), "eccube_form_options", [], "any", false, false, true, 350), "auto_render", [], "any", false, false, true, 350); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 351
            echo "                    ";
            // line 352
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 353
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 353), "eccube_form_options", [], "any", false, false, true, 353), "form_theme", [], "any", false, false, true, 353)) {
                // line 354
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 354), "eccube_form_options", [], "any", false, false, true, 354), "form_theme", [], "any", false, false, true, 354)], true);
                // line 355
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 355, $this->source), 'row');
                echo "
                        ";
            } else {
                // line 357
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 359
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 359), "label", [], "any", false, false, true, 359), 359, $this->source)), "html", null, true);
                echo "</label>
                                    ";
                // line 360
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 360, $this->source), 'widget');
                echo "
                                    ";
                // line 361
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 361, $this->source), 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 365
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            ";
        // line 373
        if (($context["pagination"] ?? null)) {
            // line 374
            echo "                                <span class=\"fw-bold ms-2\" id=\"search_total_count\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 374)]);
            echo "</span>
                            ";
        }
        // line 376
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 381
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => ($context["searchForm"] ?? null)], true, true);
        echo "
            </div>
            ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sortkey", [], "any", false, false, true, 383), 383, $this->source), 'widget', ["attr" => ["class" => "js-listSort-key"]]);
        echo "
            ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sorttype", [], "any", false, false, true, 384), 384, $this->source), 'widget', ["attr" => ["class" => "js-listSort-type"]]);
        echo "
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 392
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 392))) {
            // line 393
            echo "
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 395
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-7\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-auto d-none btn-bulk-wrapper\">
                                        <label class=\"me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 400
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bulk_actions"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_actions"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                        <button id=\"bulkSendMail\" type=\"button\" class=\"btn btn-ec-regular me-2\" data-type=\"mail\" data-bulk-update=\"true\">
                                            ";
            // line 402
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.send_mail"), "html", null, true);
            echo "
                                        </button>
                                        <button type=\"button\" id=\"bulkExportPdf\" class=\"btn btn-ec-regular me-2\">";
            // line 404
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note_short"), "html", null, true);
            echo "</button>
                                        ";
            // line 406
            echo "                                    </div>
                                    <div class=\"col d-none btn-bulk-wrapper\">
                                        <div class=\"d-inline-block me-2\">
                                            <select class=\"form-select\" id=\"option_bulk_status\">
                                                <option value=\"\" selected>";
            // line 410
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.change_status"), "html", null, true);
            echo "</option>
                                                ";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["OrderStatuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 412
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "                                            </select>
                                        </div>
                                        <button type=\"button\" id=\"btn_bulk_status\" class=\"btn btn-ec-regular me-2 progressModal\" data-type=\"status\" data-bulk-update=\"true\" data-submit=\"bulk\">
                                            ";
            // line 417
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-5 text-end\">
                                <div class=\"d-inline-block align-bottom\">
                                    <select class=\"form-select\" onchange=\"location = this.value;\">
                                        ";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 426
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 426) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 427
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_order_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 427)]), "html", null, true);
                echo "\">
                                                ";
                // line 428
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 428)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 430
            echo "                                    </select>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-toggle=\"dropdown\" id=\"csvDownloadDropDown\">
                                                <i class=\"fa fa-cloud-download me-1 text-secondary\"></i>
                                                <span>";
            // line 437
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 440
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_order");
            echo "\" id=\"orderCsvDownload\">
                                                    ";
            // line 441
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 443
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_shipping");
            echo "\" id=\"shippingCsvDownload\">
                                                    ";
            // line 444
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_csv"), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                        </div>

                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-toggle=\"dropdown\" id=\"csvSettingDropDown\">
                                                <i class=\"fa fa-cog me-1 text-secondary\"></i>
                                                <span>";
            // line 452
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 455
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_ORDER")]), "html", null, true);
            echo "\" id=\"orderCsvSetting\">
                                                    ";
            // line 456
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 458
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_SHIPPING")]), "html", null, true);
            echo "\" id=\"shippingCsvSetting\">
                                                    ";
            // line 459
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_csv"), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center ps-3\">
                                            <input type=\"checkbox\" id=\"toggle_check_all\" name=\"filter\" value=\"open\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 475
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"orderer\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"order\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center text-nowrap\">";
            // line 476
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"payment_method\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 477
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"order_status\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 478
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"purchase_price\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 479
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message_short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center text-nowrap\">";
            // line 480
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_status"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"shipping_status\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 481
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"tracking_number\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 482
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"delivery\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pe-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 487
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 488
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "Shippings", [], "any", false, false, true, 488));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
                    // line 489
                    echo "                                            <tr>
                                                <td class=\"align-middle text-center ps-3\">
                                                    <input type=\"checkbox\" id=\"check_";
                    // line 491
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 491), 491, $this->source), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 491), 491, $this->source), "html", null, true);
                    echo "\" name=\"ids[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 491), 491, $this->source), "html", null, true);
                    echo "\"
                                                           data-preview-notify-mail-url=\"";
                    // line 492
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 492)]), "html", null, true);
                    echo "\"
                                                           data-notify-mail-url=\"";
                    // line 493
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 493)]), "html", null, true);
                    echo "\"
                                                           data-update-status-url=\"";
                    // line 494
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 494)]), "html", null, true);
                    echo "\"
                                                    />
                                                </td>
                                                <td class=\"align-middle text-start\">
                                                    <a class=\"action-edit\" href=\"";
                    // line 498
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 498)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 498), 498, $this->source), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "name01", [], "any", false, false, true, 498), 498, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "name02", [], "any", false, false, true, 498), 498, $this->source)), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, true, 498), 498, $this->source)), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 501
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_method", [], "any", false, false, true, 501), 501, $this->source), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
                    // line 504
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 504), 504, $this->source), "html", null, true);
                    echo "; border-color: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 504), 504, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, true, 504), 504, $this->source), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td class=\"align-middle text-end\">
                                                    ";
                    // line 507
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 507), 507, $this->source)), "html", null, true);
                    echo "<br>
                                                    ";
                    // line 508
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_date", [], "any", false, false, true, 508)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_date", [], "any", false, false, true, 508), 508, $this->source))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.not_payment"))), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 511
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Order"], "message", [], "any", false, false, true, 511))) {
                        // line 512
                        echo "                                                        <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 512)]), "html", null, true);
                        echo "#order_message\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "message", [], "any", false, false, true, 512), 512, $this->source), "html", null, true);
                        echo "\" aria-describedby=\"tooltip819464\">
                                                            <i class=\"fa fa-commenting fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 515
$context["Order"], "note", [], "any", false, false, true, 515))) {
                        // line 516
                        echo "                                                        <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 516)]), "html", null, true);
                        echo "#order_note\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "note", [], "any", false, false, true, 516), 516, $this->source), "html", null, true);
                        echo "\" aria-describedby=\"tooltip819464\">
                                                            <i class=\"fa fa-commenting fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    ";
                    }
                    // line 520
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 522
                    if (twig_get_attribute($this->env, $this->source, $context["Order"], "is_multiple", [], "any", false, false, true, 522)) {
                        // line 523
                        echo "                                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 523)]), "html", null, true);
                        echo "\">
                                                            ";
                        // line 524
                        if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, true, 524)) {
                            // line 525
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, true, 525), 525, $this->source)), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 527
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.unshipped"), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 529
                        echo "                                                        </a>
                                                    ";
                    } else {
                        // line 531
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, true, 531)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, true, 531), 531, $this->source))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.unshipped"))), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 533
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "mail_send_date", [], "any", false, false, true, 533)) {
                        // line 534
                        echo "                                                        ";
                        $context["send_mail_date"] = $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "mail_send_date", [], "any", false, false, true, 534), 534, $this->source));
                        // line 535
                        echo "                                                        <i class=\"fa fa-envelope fa-lg text-secondary\" aria-hidden=\"true\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail__completed", ["%date%" => ($context["send_mail_date"] ?? null)]), "html", null, true);
                        echo "\"></i>
                                                    ";
                    }
                    // line 537
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <div class=\"input-group input-group-sm\">
                                                        <input type=\"text\" id=\"tracking_number_";
                    // line 540
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 540), 540, $this->source), "html", null, true);
                    echo "\" class=\"form-control update_tracking_number\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "trackingNumber", [], "any", false, false, true, 540), 540, $this->source), "html", null, true);
                    echo "\" data-shipping_id=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 540), 540, $this->source), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_update_tracking_number", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 540)]), "html", null, true);
                    echo "\" tabindex=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 540), 540, $this->source), "html", null, true);
                    echo "\"/>
                                                        <span class=\"input-group-btn\">
                                                    <button type=\"button\" class=\"btn btn-default update_tracking_number\" data-target=\"#tracking_number_";
                    // line 542
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 542), 542, $this->source), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </button>
                                                </span>
                                                    </div>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 549
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, true, 549), 549, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, true, 549), 549, $this->source)), "html", null, true);
                    echo "<br>
                                                    ";
                    // line 550
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, true, 550), "name", [], "any", false, false, true, 550), 550, $this->source), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle pe-3\">
                                                    <div class=\"text-end\">
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\"
                                                               data-type=\"mail\" data-bulk-update=\"false\"
                                                               data-preview-notify-mail-url=\"";
                    // line 557
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 557)]), "html", null, true);
                    echo "\"
                                                               data-notify-mail-url=\"";
                    // line 558
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 558)]), "html", null, true);
                    echo "\"
                                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 559
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail_send"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon pdf-print\" href=\"";
                    // line 564
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_pdf");
                    echo "?ids[]=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 564), 564, $this->source), "html", null, true);
                    echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note_short"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-table fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\" href=\"javascript:;\"
                                                               data-id=\"";
                    // line 570
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 570), 570, $this->source), "html", null, true);
                    echo "\" data-type=\"status\" data-bulk-update=\"false\"
                                                               data-update-status-id=\"";
                    // line 571
                    echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderStatus::DELIVERED"), "html", null, true);
                    echo "\"
                                                               data-update-status-url=\"";
                    // line 572
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 572)]), "html", null, true);
                    echo "\"
                                                               data-preview-notify-mail-url=\"";
                    // line 573
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, true, 573)]), "html", null, true);
                    echo "\"
                                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 574
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 582
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 583
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center\"></div>
                            </div>
                            <div class=\"row justify-content-md-center pb-4 mb-4\">
                                ";
            // line 588
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 588) > 0)) {
                // line 589
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Order/index.twig", 589)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 589), "routes" => "admin_order_page"]));
                // line 590
                echo "                                ";
            }
            // line 591
            echo "                            </div>
                        </div>
                    </form>
                    ";
            // line 595
            echo "                ";
        } elseif (($context["has_errors"] ?? null)) {
            // line 596
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 598
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 599
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 603
            echo "                ";
        } else {
            // line 604
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 606
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 607
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 608
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 612
        echo "
                <!-- 出荷済にする確認モーダル -->
                <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"></p>
                                <ul id=\"bulkErrors\"></ul>
                                <div id=\"bulk-options\">
                                    <div class=\"fw-bold mb-2 notificationMail\">";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-bs-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o fw-bold me-1\"></i><span class=\"fw-bold\">";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__confirm_view_mail_body"), "html", null, true);
        echo "</span></a></div>
                                        <div class=\"collapse bg-light p-4 ec-collapse bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">
                                            <pre></pre>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 一括削除の確認モーダル -->
                <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title fw-bold\">";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body text-start\">
                                <p class=\"text-start\">";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 668
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1389 => 669,  1385 => 668,  1375 => 661,  1368 => 657,  1354 => 646,  1349 => 644,  1335 => 633,  1328 => 629,  1321 => 625,  1306 => 612,  1299 => 608,  1295 => 607,  1291 => 606,  1287 => 604,  1284 => 603,  1278 => 599,  1274 => 598,  1270 => 596,  1267 => 595,  1262 => 591,  1259 => 590,  1256 => 589,  1254 => 588,  1247 => 583,  1241 => 582,  1219 => 574,  1215 => 573,  1211 => 572,  1207 => 571,  1203 => 570,  1190 => 564,  1182 => 559,  1178 => 558,  1174 => 557,  1164 => 550,  1160 => 549,  1150 => 542,  1135 => 540,  1130 => 537,  1124 => 535,  1121 => 534,  1118 => 533,  1112 => 531,  1108 => 529,  1102 => 527,  1096 => 525,  1094 => 524,  1089 => 523,  1087 => 522,  1083 => 520,  1073 => 516,  1071 => 515,  1062 => 512,  1060 => 511,  1054 => 508,  1050 => 507,  1040 => 504,  1034 => 501,  1022 => 498,  1015 => 494,  1011 => 493,  1007 => 492,  999 => 491,  995 => 489,  977 => 488,  973 => 487,  965 => 482,  961 => 481,  957 => 480,  953 => 479,  949 => 478,  945 => 477,  941 => 476,  935 => 475,  916 => 459,  912 => 458,  907 => 456,  903 => 455,  897 => 452,  886 => 444,  882 => 443,  877 => 441,  873 => 440,  867 => 437,  858 => 430,  850 => 428,  845 => 427,  840 => 426,  836 => 425,  825 => 417,  820 => 414,  809 => 412,  805 => 411,  801 => 410,  795 => 406,  791 => 404,  786 => 402,  779 => 400,  769 => 395,  765 => 393,  763 => 392,  752 => 384,  748 => 383,  743 => 381,  736 => 376,  730 => 374,  728 => 373,  724 => 372,  717 => 367,  710 => 365,  703 => 361,  699 => 360,  695 => 359,  691 => 357,  685 => 355,  682 => 354,  680 => 353,  677 => 352,  675 => 351,  670 => 350,  660 => 342,  656 => 341,  652 => 340,  641 => 332,  637 => 331,  633 => 330,  625 => 325,  621 => 324,  617 => 323,  604 => 313,  600 => 312,  594 => 309,  588 => 306,  584 => 305,  577 => 301,  571 => 298,  567 => 297,  563 => 296,  552 => 288,  548 => 287,  542 => 284,  536 => 281,  532 => 280,  525 => 276,  519 => 273,  515 => 272,  511 => 271,  501 => 264,  497 => 263,  492 => 261,  487 => 259,  483 => 258,  477 => 255,  471 => 252,  467 => 251,  463 => 250,  453 => 243,  449 => 242,  444 => 240,  439 => 238,  435 => 237,  429 => 234,  423 => 231,  419 => 230,  415 => 229,  405 => 222,  401 => 221,  396 => 219,  391 => 217,  387 => 216,  381 => 213,  375 => 210,  371 => 209,  367 => 208,  357 => 201,  353 => 200,  349 => 199,  341 => 194,  337 => 193,  333 => 192,  327 => 189,  317 => 182,  308 => 176,  305 => 175,  298 => 173,  291 => 171,  289 => 170,  284 => 169,  278 => 168,  273 => 166,  269 => 165,  265 => 163,  261 => 162,  258 => 161,  256 => 160,  249 => 158,  242 => 154,  238 => 153,  232 => 152,  227 => 150,  220 => 146,  216 => 144,  212 => 143,  206 => 140,  197 => 134,  107 => 47,  97 => 40,  74 => 19,  70 => 18,  63 => 15,  56 => 14,  51 => 11,  49 => 17,  47 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/index.twig", "/var/www/html/src/Eccube/Resource/template/admin/Order/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "form_theme" => 17, "for" => 162, "if" => 170, "include" => 589);
        static $filters = array("escape" => 14, "trans" => 14, "filter" => 350, "raw" => 374, "date_min" => 498, "price" => 507, "date_day" => 508);
        static $functions = array("url" => 40, "include" => 140, "form_widget" => 150, "form_errors" => 154, "form_row" => 355, "constant" => 395, "csrf_token" => 395, "path" => 427);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter', 'raw', 'date_min', 'price', 'date_day'],
                ['url', 'include', 'form_widget', 'form_errors', 'form_row', 'constant', 'csrf_token', 'path']
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
