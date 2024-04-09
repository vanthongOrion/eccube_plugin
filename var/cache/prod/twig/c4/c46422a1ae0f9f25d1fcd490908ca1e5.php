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

/* @admin/Setting/Shop/mail.twig */
class __TwigTemplate_4c2c7d6653a078d52eda822b9064a155 extends \Eccube\Twig\Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_mail"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/mail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <script>
        \$(function() {

            \$(window).on('pageshow', function() {
                var tmp_select =  \$('#mail_template[name=\"mail[template]\"] option[selected]').val();
                \$('#mail_template[name=\"mail[template]\"]').val(tmp_select);
            });

            \$('#mail_template').on('change', function() {
                var id = \$(this).val()
                if (id) {
                    location.href = '";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail");
        echo "/' + id;
                } else {
                    location.href = '";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail");
        echo "';
                }
            });

            ace.require('ace/ext/language_tools');
            var editor = ace.edit('editor');
            editor.session.setMode('ace/mode/twig');
            editor.setTheme('ace/theme/tomorrow');
            editor.setValue(\"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source), "js"), "html", null, true);
        echo "\");
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59)) {
            // line 60
            echo "                var html_editor = ace.edit('html_editor');
                html_editor.session.setMode('ace/mode/twig');
                html_editor.setTheme('ace/theme/tomorrow');
                html_editor.setValue(\"";
            // line 63
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 63), "vars", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source), "js"), "html", null, true);
            echo "\");
                html_editor.setOptions({
                    enableBasicAutocompletion: true,
                    enableSnippets: true,
                    enableLiveAutocompletion: true,
                    showInvisibles: true
                });
            ";
        }
        // line 71
        echo "
            \$(\"#editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$(\"#html_editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$('#form1').on('submit', function() {
                \$('#mail_tpl_data').val(editor.getValue());
                ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 86), "vars", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86)) {
            // line 87
            echo "                    \$('#mail_html_tpl_data').val(html_editor.getValue());
                ";
        }
        // line 89
        echo "            });

            // HTMLメールモーダル表示
            \$('#htmlPreviewModal').on('show.bs.modal', function (event) {
                var html = \$('#viewEmail');
                html.children().remove();

                // HTMLを読み込んでモーダルに表示
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'html_body' : html_editor.getValue(),
                    },
                    url: '";
        // line 103
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail_preview");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#viewEmail').html(data);
                    },
                    error: function() {
                        alert('preview html mail failed.');
                    }
                });
            });

            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var activated_tab = e.target;
                var id = \$(activated_tab).attr('id');
                if (id == 'menu__";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 117), "vars", [], "any", false, false, true, 117), "id", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "') {
                    \$('#preview_button').attr('style', 'display:blocked;');
                } else {
                    \$('#preview_button').attr('style', 'display:none;');
                }
            });
        });
    </script>
";
    }

    // line 127
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 129), 129, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template_edit"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.mail.mail_template"), "html", null, true);
        echo "\">
                                        <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-10\">
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 143), 143, $this->source), 'widget');
        echo "
                                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 144), 144, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 150), 150, $this->source), 'widget');
        echo "
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 151), 151, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_body"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 158
        echo "                                    ";
        if ( !(null === ($context["id"] ?? null))) {
            // line 159
            echo "                                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                                        <li class=\"nav-item me-2\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__";
            // line 161
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 161), "vars", [], "any", false, false, true, 161), "id", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "\" href=\"#detail_box__tpl_data\" class=\"nav-link active\" data-bs-toggle=\"tab\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_text"), "html", null, true);
            echo "</span></a>
                                        </li>
                                        ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 163), "vars", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163)) {
                // line 164
                echo "                                        <li class=\"nav-item me-2\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__";
                // line 165
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 165), "vars", [], "any", false, false, true, 165), "id", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                echo "\" href=\"#detail_box__html_tpl_data\" class=\"nav-link\" data-bs-toggle=\"tab\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_html"), "html", null, true);
                echo "</span></a>
                                        </li>
                                        ";
            }
            // line 168
            echo "                                        <div class=\"col-1\">
                                            <div class=\"d-inline-block\">
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\" id=\"preview_button\" class=\"btn w-100 text-nowrap btn-ec-regular\" style=\"display:none;\" data-bs-toggle=\"modal\" data-bs-target=\"#htmlPreviewModal\">
                                                        ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                    ";
        }
        // line 179
        echo "                                    <div class=\"tab-content\">
                                        <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 181), 181, $this->source), 'label');
        echo "
                                            <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 182
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 182), 182, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                            <div style=\"display: none\">";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 183), 183, $this->source), 'widget');
        echo "</div>
                                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 184), 184, $this->source), 'errors');
        echo "
                                        </div>
                                        ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 186), "vars", [], "any", false, false, true, 186), "value", [], "any", false, false, true, 186)) {
            // line 187
            echo "                                        <div id=\"detail_box__html_tpl_data\" class=\"mb-3 tab-pane\">
                                            ";
            // line 188
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 188), 188, $this->source), 'label');
            echo "
                                            <div id=\"html_editor\" style=\"height: 480px\" class=\"form-control";
            // line 189
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 189), 189, $this->source))) ? (" is-invalid") : (""));
            echo "\"></div>
                                            <div style=\"display: none\">";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 190), 190, $this->source), 'widget');
            echo "</div>
                                            ";
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 191), 191, $this->source), 'errors');
            echo "
                                        </div>
                                        ";
        }
        // line 194
        echo "                                    </div>
                                </div>
                            </div>
                            ";
        // line 198
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 198), "eccube_form_options", [], "any", false, false, true, 198), "auto_render", [], "any", false, false, true, 198); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 199
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 199), "eccube_form_options", [], "any", false, false, true, 199), "form_theme", [], "any", false, false, true, 199)) {
                // line 200
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 200), "eccube_form_options", [], "any", false, false, true, 200), "form_theme", [], "any", false, false, true, 200)], true);
                // line 201
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 201, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 203
                echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
                // line 204
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 204), "label", [], "any", false, false, true, 204), 204, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
                // line 206
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 206, $this->source), 'widget');
                echo "
                                            ";
                // line 207
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 207, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 211
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- HTMLメールを確認するモーダル -->
    <div class=\"modal fade\" id=\"htmlPreviewModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"htmlPreviewModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"bg-light p-4 bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 250,  453 => 241,  436 => 227,  419 => 212,  413 => 211,  406 => 207,  402 => 206,  397 => 204,  394 => 203,  388 => 201,  385 => 200,  382 => 199,  377 => 198,  372 => 194,  366 => 191,  362 => 190,  358 => 189,  354 => 188,  351 => 187,  349 => 186,  344 => 184,  340 => 183,  336 => 182,  332 => 181,  328 => 179,  318 => 172,  312 => 168,  304 => 165,  301 => 164,  299 => 163,  292 => 161,  288 => 159,  285 => 158,  278 => 155,  271 => 151,  267 => 150,  260 => 148,  253 => 144,  249 => 143,  242 => 139,  238 => 138,  231 => 134,  223 => 129,  220 => 128,  216 => 127,  203 => 117,  186 => 103,  170 => 89,  166 => 87,  164 => 86,  147 => 71,  136 => 63,  131 => 60,  129 => 59,  118 => 51,  107 => 43,  102 => 41,  89 => 30,  85 => 29,  75 => 21,  71 => 20,  64 => 16,  57 => 15,  52 => 11,  50 => 18,  48 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/mail.twig", "/var/www/html/src/Eccube/Resource/template/admin/Setting/Shop/mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 59, "for" => 198);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 198);
        static $functions = array("url" => 41, "form_widget" => 129, "form_errors" => 144, "form_label" => 181, "has_errors" => 182, "form_row" => 201);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'has_errors', 'form_row']
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
