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

/* @admin/Setting/Shop/delivery_edit.twig */
class __TwigTemplate_624ebcad1b7463441343667132413552 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_delivery"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/delivery_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <script>
        \$(function() {
            \$('#set_fee_all').on('click', function() {
                var fee = \$('#";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_all", [], "any", false, false, true, 25), "vars", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "').val();
                if (\$.isNumeric(fee)) {
                    \$('input[name\$=\"[fee]\"]').val(fee);
                    return;
                }
                alert(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.fee.invalid"), "html", null, true);
        echo "\");
            });
        });
    </script>
    <script>
        // 降順にソートする
        \$(function() {
            var \$items_wrapper = \$('.sortable-container');
            var \$items = \$('.sortable-item');
            \$items.sort(function(a, b) {
                return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
            });
            \$items.each(function() {
                \$items_wrapper.append(\$(this).remove());
            })
        });

        // 並び替え後にsort noを更新
        function updateSortNo() {
            var \$items = \$('.sortable-container').find('.sortable-item');
            \$items.each(function() {
                \$(this).find('.sort-no').val(\$items.index(this) + 1);
            });
        }

        // 最初と最後の↑↓を再描画
        function redrawDisableAllows() {
            var items = \$('.sortable-item');
            items.find('a').removeClass('disabled');
            items.first().find('a.action-up').addClass('disabled');
            items.last().find('a.action-down').addClass('disabled');
        }

        // 表示順の更新を行う
        function moveSortNo() {
            updateSortNo();
            redrawDisableAllows();
        }

        \$(function() {

            var \$collectionHolder = \$('#delivery-time-group');
            var index = \$collectionHolder.find('.delivery-time-item').length;

            redrawDisableAllows();

            // お届け時間設定の新規作成ボタンでお届け時間項目を追加する
            \$('#add-delivery-time-button').on('click', function(event) {

                // 追加するお届け時間名を取得
                var deliveryTimeName = \$('#add-delivery-time-value').val();

                if (deliveryTimeName == '') {
                    return;
                }

                var prototype = \$collectionHolder.data('prototype');

                var newForm = \$(prototype.replace(/__name__/g, index));
                newForm.find('.display-label').text(deliveryTimeName)

                // 要素を追加
                var \$lastRow = \$('#delivery-time-group > li:last');
                \$lastRow.after(newForm);

                // お届け時間名を入れる
                var inputId = '#delivery_delivery_times_' + index + '_delivery_time';
                \$(inputId).val(deliveryTimeName);
                \$(inputId).attr('data-origin-value', deliveryTimeName);

                // 入力欄を初期化
                \$('#add-delivery-time-value').val('');

                // 要素数をインクリメント
                index++;

                moveSortNo();
            });

            // 明細行の削除
            \$('#delivery-time-group').on('click', '.remove-delivery-time-item', function(event) {
                event.preventDefault();

                \$(this).tooltip('hide');

                // 自身の行を削除.
                \$(event.target).parents('li').remove();

                moveSortNo();
            });

            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('#delivery-time-group').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('#delivery-time-group').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('#delivery-time-group').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
                current.find('.action-edit-submit').attr('disabled', false);
                current.find('.action-edit-cancel').attr('disabled', false);
            });

            // 編集決定
            \$('#delivery-time-group').on('click', 'button.action-edit-submit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).attr('data-origin-value', value);
                });
            });
            // 編集キャンセル
            \$('#delivery-time-group').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('#delivery-time-group').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 表示・非表示の切り替え
            \$('#delivery-time-group').on('click', 'a.action-visible', function(e) {
                e.preventDefault();

                var \$this = \$(this);
                var \$i = \$this.find('i');

                if (\$i.hasClass('fa-toggle-on')) {
                    \$i.addClass('fa-toggle-off');
                    \$i.removeClass('fa-toggle-on');
                    \$this.attr('title', '";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"), "html", null, true);
        echo "');
                    \$this.attr('data-bs-original-title', '";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('0');
                } else {
                    \$i.addClass('fa-toggle-on');
                    \$i.removeClass('fa-toggle-off');
                    \$this.attr('title', '";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
        echo "');
                    \$this.attr('data-bs-original-title', '";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('1');
                }
                // ツールチップの表示を更新
                tooltip = bootstrap.Tooltip.getInstance(\$(this).get(0));
                tooltip.show();
            });
        });
    </script>
";
    }

    // line 216
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "    <form method=\"post\" action=\"";
        ((($context["delivery_id"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_edit", ["id" => ($context["delivery_id"] ?? null)]), "html", null, true))) : (print ($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_new"))));
        echo "\">
        ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 218), 218, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.base_info"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 228), 228, $this->source), 'widget');
        echo "
                                    ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 229), 229, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_sevice_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "service_name", [], "any", false, false, true, 235), 235, $this->source), 'widget');
        echo "
                                    ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "service_name", [], "any", false, false, true, 236), 236, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "\">
                                        <span>";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirm_url", [], "any", false, false, true, 247), 247, $this->source), 'widget');
        echo "
                                    ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirm_url", [], "any", false, false, true, 248), 248, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.sale_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.sale_type"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sale_type", [], "any", false, false, true, 260), 260, $this->source), 'widget');
        echo "
                                    ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sale_type", [], "any", false, false, true, 261), 261, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 265
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 265), "eccube_form_options", [], "any", false, false, true, 265), "auto_render", [], "any", false, false, true, 265); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 266
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 266), "eccube_form_options", [], "any", false, false, true, 266), "form_theme", [], "any", false, false, true, 266)) {
                // line 267
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 267), "eccube_form_options", [], "any", false, false, true, 267), "form_theme", [], "any", false, false, true, 267)], true);
                // line 268
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 268, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 270
                echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                // line 271
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 271), "label", [], "any", false, false, true, 271), 271, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                // line 273
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 273, $this->source), 'widget');
                echo "
                                            ";
                // line 274
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 274, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 278
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.payment_method"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-payment\" class=\"card-body\">
                            <div>
                                ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payments", [], "any", false, false, true, 285), 285, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payments", [], "any", false, false, true, 286), 286, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_time_setting"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-time\" class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <ul id=\"delivery-time-group\" class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"";
        // line 295
        ob_start(function () { return ''; });
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_times", [], "any", false, false, true, 295), "vars", [], "any", false, false, true, 295), "prototype", [], "any", false, false, true, 295)]);
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_8_);
        echo "\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add-delivery-time-value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add-delivery-time-button\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </li>
                                    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_times", [], "any", false, false, true, 306));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 307
            echo "                                        ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => $context["child"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class=\"mb-4\">";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_fee_by_pref"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-fee\" class=\"card-body p-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block align-middle\" data-bs-toggle=\"tooltip\"
                                                 data-bs-placement=\"top\" title=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.apply_to_pref"), "html", null, true);
        echo "\"><span
                                                        class=\"card-title\">";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__title"), "html", null, true);
        echo "</span><i
                                                        class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                        </div>
                                        <div class=\"col-3\">
                                            ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_all", [], "any", false, false, true, 327), 327, $this->source), 'widget');
        echo "
                                            ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_all", [], "any", false, false, true, 328), 328, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button id=\"set_fee_all\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__button"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_fees", [], "any", false, false, true, 336));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 337
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 337) % 2) != 0)) {
                echo "<div class=\"row mb-2\">";
            }
            // line 338
            echo "                                        <div class=\"col";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 338)) ? ("-6") : (""));
            echo "\">
                                            <div class=\"row\">
                                                <div class=\"col-2\">
                                                    <label>";
            // line 341
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 341), "data", [], "any", false, false, true, 341), "pref", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
            echo "</label>
                                                </div>
                                                <div class=\"col ps-0\">
                                                    ";
            // line 344
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "fee", [], "any", false, false, true, 344), 344, $this->source), 'widget');
            echo "
                                                    ";
            // line 345
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "fee", [], "any", false, false, true, 345), 345, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 349
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 349) % 2) == 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 349))) {
                echo "</div>";
            }
            // line 350
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div id=\"ex-delivery-shop\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.shop_memo"), "html", null, true);
        echo "\">
                                    <span class=\"card-title\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i
                                                class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\"
                                                                 aria-expanded=\"false\" aria-controls=\"freeArea\"><i
                                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div>
                                    ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 372), 372, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                    ";
        // line 373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 373), 373, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 386
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 394), 394, $this->source), 'widget');
        echo "
                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 395), 395, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 398
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
        return "@admin/Setting/Shop/delivery_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 398,  708 => 395,  704 => 394,  694 => 387,  690 => 386,  674 => 373,  670 => 372,  656 => 361,  652 => 360,  641 => 351,  627 => 350,  623 => 349,  616 => 345,  612 => 344,  606 => 341,  599 => 338,  594 => 337,  577 => 336,  569 => 331,  563 => 328,  559 => 327,  552 => 323,  548 => 322,  536 => 315,  531 => 313,  525 => 309,  508 => 307,  491 => 306,  484 => 302,  471 => 295,  464 => 291,  456 => 286,  452 => 285,  444 => 282,  439 => 279,  433 => 278,  426 => 274,  422 => 273,  417 => 271,  414 => 270,  408 => 268,  405 => 267,  402 => 266,  397 => 265,  391 => 261,  387 => 260,  377 => 255,  373 => 254,  364 => 248,  360 => 247,  353 => 243,  349 => 242,  340 => 236,  336 => 235,  329 => 233,  322 => 229,  318 => 228,  311 => 226,  305 => 223,  297 => 218,  292 => 217,  288 => 216,  274 => 205,  270 => 204,  262 => 199,  258 => 198,  87 => 30,  79 => 25,  74 => 22,  70 => 21,  63 => 16,  56 => 15,  51 => 11,  49 => 18,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/delivery_edit.twig", "/var/www/html/src/Eccube/Resource/template/admin/Setting/Shop/delivery_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 265, "if" => 266, "apply" => 295);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 265);
        static $functions = array("url" => 217, "form_widget" => 218, "form_errors" => 229, "form_row" => 268, "include" => 295);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'apply'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'form_row', 'include']
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
