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

/* @admin/Setting/Shop/payment_edit.twig */
class __TwigTemplate_cb015a93ce021f3b382e2e076c507e5e extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_payment"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/payment_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script>
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });

        \$(function() {
            // ファイルアップロード
            // see https://pqina.nl/filepond/
            var inputFileElement = document.querySelector('input[type=file]');
            ";
        // line 30
        if (((twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 30) == "ja") || (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 30) == "en"))) {
            // line 31
            echo "            FilePond.setOptions(FilePondLocale_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ");
            ";
        }
        // line 33
        echo "            FilePond.setOptions({
                server: {
                    process: {
                        url: '";
        // line 36
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_payment_image_process");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    load: {
                        url: '";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_payment_image_load");
        echo "?source=',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    revert: {
                        url: '";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_payment_image_revert");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }
                }
            });
            var pond = FilePond.create(inputFileElement, {
                allowFileTypeValidation: true,
                acceptedFileTypes: [
                    'image/gif',
                    'image/png',
                    'image/jpeg'
                ],
                allowFileSizeValidation: true,
                maxFileSize: 10000000,
                maxFiles: 1,
                allowBrowse: true,
                labelIdle: '<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\" style=\"font-size: 40px\"></i>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "<span class=\"filepond--label-action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>',
                // 保存されている画像のロード
                files: [
                    ";
        // line 71
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 71), "vars", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71))) {
            // line 72
            echo "                    {
                        ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 73), "vars", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73) == ($context["oldPaymentImage"] ?? null))) {
                // line 74
                echo "                        source: '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 74), "vars", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "',
                        ";
            } else {
                // line 76
                echo "                        source: '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 76), "vars", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "',
                        ";
            }
            // line 78
            echo "                        options: {
                            type: 'local'
                        }
                    },
                    ";
        }
        // line 83
        echo "                ]
            });
            pond.on('initfile', function() {
                \$('#product_image_error').hide();
            });
            pond.on('error', function(error, file) {
                var message = '";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "';
                if (error.main !== undefined) {
                    message = `\${error.main}: \${error.sub}`;
                }
                \$('#payment_image_error')
                    .show()
                    .find('.form-error-message').text(message);

                // エラーメッセージが表示されてからプレビューエリアのエラーメッセージを非表示にする
                setTimeout(function() {
                    \$('.filepond--file-status').hide();
                }, 300);
            });

            // 画像が追加されたら payment_image にファイル名を追加する
            pond.on('processfile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#";
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 108), "vars", [], "any", false, false, true, 108), "id", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "').val(file.serverId);
                }
            });
            // 画像が削除されたら payment_image のファイル名を削除する
            pond.on('removefile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#";
        // line 116
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 116), "vars", [], "any", false, false, true, 116), "id", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "').val('');
                }
            });
        });
    </script>
";
    }

    // line 123
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 125), 125, $this->source), 'widget');
        echo "
        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fixed", [], "any", false, false, true, 126), 126, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.payment_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, true, 137), 137, $this->source), 'widget');
        echo "
                                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, true, 138), 138, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "charge", [], "any", false, false, true, 144), 144, $this->source), 'widget');
        echo "
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "charge", [], "any", false, false, true, 145), 145, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.payment.rule"), "html", null, true);
        echo "\">
                                        <span><span>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.terms_of_use"), "html", null, true);
        echo "</span></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-4\">
                                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_min", [], "any", false, false, true, 157), 157, $this->source), 'widget');
        echo "
                                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_min", [], "any", false, false, true, 158), 158, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto text-center p-0\"><span class=\"align-middle\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-4\">
                                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_max", [], "any", false, false, true, 162), 162, $this->source), 'widget');
        echo "
                                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_max", [], "any", false, false, true, 163), 163, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.payment.logo_image"), "html", null, true);
        echo "\">
                                        <span>";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.logo_image"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        <br>";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.logo_image_size"), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 177), 177, $this->source), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                    <div id=\"upload-zone\" class=\"media py-3\">
                                        <div class=\"media-body\">
                                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image_file", [], "any", false, false, true, 180), 180, $this->source), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, true, 181), 181, $this->source), 'errors');
        echo "
                                        </div><!-- /.media-body -->
                                        <span class=\"invalid-feedback\" id=\"payment_image_error\" style=\"display: none\">
                                            <span class=\"d-block\">
                                                <span class=\"form-error-icon badge bg-danger text-uppercase\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
        echo "</span>
                                                <span class=\"form-error-message\"></span>
                                            </span>
                                        </span>
                                    </div><!-- /.media -->
                                </div>
                            </div>
                            ";
        // line 193
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 193), "eccube_form_options", [], "any", false, false, true, 193), "auto_render", [], "any", false, false, true, 193); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 194
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 194), "eccube_form_options", [], "any", false, false, true, 194), "form_theme", [], "any", false, false, true, 194)) {
                // line 195
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 195), "eccube_form_options", [], "any", false, false, true, 195), "form_theme", [], "any", false, false, true, 195)], true);
                // line 196
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 196, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 198
                echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                // line 199
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 199), "label", [], "any", false, false, true, 199), 199, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                // line 201
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 201, $this->source), 'widget');
                echo "
                                            ";
                // line 202
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 202, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 206
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 217
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 225), 225, $this->source), 'widget');
        echo "
                                ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 226), 226, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 229
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
        return "@admin/Setting/Shop/payment_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 229,  443 => 226,  439 => 225,  429 => 218,  425 => 217,  413 => 207,  407 => 206,  400 => 202,  396 => 201,  391 => 199,  388 => 198,  382 => 196,  379 => 195,  376 => 194,  371 => 193,  361 => 185,  354 => 181,  350 => 180,  344 => 177,  337 => 173,  333 => 172,  329 => 171,  318 => 163,  314 => 162,  309 => 160,  304 => 158,  300 => 157,  291 => 151,  287 => 150,  279 => 145,  275 => 144,  268 => 142,  261 => 138,  257 => 137,  250 => 135,  243 => 131,  235 => 126,  231 => 125,  228 => 124,  224 => 123,  214 => 116,  203 => 108,  181 => 89,  173 => 83,  166 => 78,  160 => 76,  154 => 74,  152 => 73,  149 => 72,  147 => 71,  139 => 68,  117 => 49,  108 => 43,  98 => 36,  93 => 33,  87 => 31,  85 => 30,  74 => 21,  70 => 20,  63 => 16,  56 => 15,  51 => 11,  49 => 18,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/payment_edit.twig", "/var/www/html/src/Eccube/Resource/template/admin/Setting/Shop/payment_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 30, "for" => 193);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 193);
        static $functions = array("path" => 36, "form_widget" => 125, "form_errors" => 138, "form_row" => 196, "url" => 217);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'filter'],
                ['path', 'form_widget', 'form_errors', 'form_row', 'url']
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
