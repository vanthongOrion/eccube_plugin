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

/* SalesReport42/Resource/template/admin/index.twig */
class __TwigTemplate_c831a0d1f1ea8076eac1cbe194691995 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'chart' => [$this, 'block_chart'],
            'main' => [$this, 'block_main'],
            'option' => [$this, 'block_option'],
            'table' => [$this, 'block_table'],
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
        // line 14
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "SalesReport42/Resource/template/admin/index.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.title"), "html", null, true);
    }

    // line 16
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js\" integrity=\"sha384-flDTcmsJ2GUugPAgAMrEXML3nSGciiqQJkAcUPwL6l5lm8K5ydDoLV/Ad3vyFWOi\" crossorigin=\"anonymous\"></script>
    ";
        // line 18
        $this->displayBlock('chart', $context, $blocks);
        // line 19
        echo "    <script>
        \$(function () {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
                ).done(function() {
                    \$('input[id\$=_start]').datetimepicker({
                        locale: '";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                    \$('input[id\$=_end]').datetimepicker({
                        locale: '";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                });
            }

            \$('#btn-monthly').on('click', function () {
                \$('#";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_type", [], "any", false, false, true, 52), "vars", [], "any", false, false, true, 52), "id", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "').val('monthly');
                document.form1.submit();
            });

            \$('#btn-term').on('click', function () {
                \$('#";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_type", [], "any", false, false, true, 57), "vars", [], "any", false, false, true, 57), "id", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "').val('term');
                document.form1.submit();
            });

        });

        function moneyFormat(money) {
            return money.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
        }

        jQuery.fn.tableToCSV = function() {
            var clean_text = function(text){
                text = text.replace(/\"/g, '\"\"');
                return '\"' + text + '\"';
            };

            \$(this).each(function(){
                var table = \$(this);
                var caption = \$('.box-title').text();
                var title = [];
                var rows = [];

                \$(this).find('tr').each(function(){
                    var data = [];
                    \$(this).find('th').each(function(){
                        var text = \$(this).text();
                        title.push(text);
                    });
                    \$(this).find('td').each(function(){
                        var td = \$(this);
                        var text = td.text();
                        if(td.hasClass('price-format')) {
                            td.find('span').each(function() {
                                text = \$(this).text().trim();
                                if (text != '-') {
                                    text = Math.round(text);
                                } else {
                                    text = 0;
                                }
                                data.push(text);
                            });
                        } else {
                            data.push(text);
                        }
                    });
                    data = data.join(',');
                    rows.push(data);
                });
                title = title.join(',');
                rows = rows.join('\\n');

                var csv = title + rows;
                var ts = new Date();
                var fileName;
                ts = ts.getFullYear().toString() + (ts.getMonth() + 1) + ts.getDate() + ts.getHours() + ts.getMinutes() + ts.getSeconds();

                if(caption == ''){
                    fileName = ts + '.csv';
                } else {
                    fileName = caption + '_' + ts + '.csv';
                }

                // if microsoft IE
                if (navigator.msSaveBlob) {
                    navigator.msSaveBlob(new Blob([csv], { type: 'text/csv;charset=utf-8;' }), fileName);
                } else {
                    var uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
                    var download_link = document.createElement('a');
                    download_link.href = uri;
                    download_link.download = fileName;
                    document.body.appendChild(download_link);
                    download_link.click();
                    document.body.removeChild(download_link);
                }

            });
        };

    </script>
";
    }

    // line 18
    public function block_chart($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 138
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["action"] ?? null), 139, $this->source), "html", null, true);
        echo "\" novalidate>
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 140), 140, $this->source), 'widget');
        echo "
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_type", [], "any", false, false, true, 141), 141, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">";
        // line 147
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["report_title"] ?? null), 147, $this->source), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            ";
        // line 151
        $this->displayBlock('option', $context, $blocks);
        // line 152
        echo "
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.001"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"w-auto\">
                                            <div class=\"align-items-center d-flex\">
                                                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monthly_year", [], "any", false, false, true, 159), 159, $this->source), 'widget', ["attr" => ["class" => "float-start"]]);
        echo "
                                                ";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.label.monthly_year"), "html", null, true);
        echo "
                                            </div>
                                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monthly_year", [], "any", false, false, true, 162), 162, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto\">
                                            <div class=\"align-items-center d-flex\">
                                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monthly_month", [], "any", false, false, true, 166), 166, $this->source), 'widget', ["attr" => ["class" => "float-start"]]);
        echo "
                                                ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.label.monthly_month"), "html", null, true);
        echo "
                                            </div>
                                            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monthly_month", [], "any", false, false, true, 169), 169, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto\">
                                            <button id=\"btn-monthly\" class=\"btn btn-ec-conversion px-5\" data-style=\"expand-right\" type=\"submit\">";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.002"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.003"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"w-auto\">
                                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_start", [], "any", false, false, true, 182), 182, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.placholder")]]);
        echo "
                                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_start", [], "any", false, false, true, 183), 183, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto text-center p-0\">
                                            <span class=\"align-middle\">～</span>
                                        </div>
                                        <div class=\"w-auto\">
                                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_end", [], "any", false, false, true, 189), 189, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.placholder")]]);
        echo "
                                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_end", [], "any", false, false, true, 190), 190, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto\">
                                            <button id=\"btn-term\" class=\"btn btn-ec-conversion px-5 text-nowrap\" data-style=\"expand-right\" type=\"submit\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.004"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        ";
        // line 202
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 202), "method", [], "any", false, false, true, 202) == "POST") &&  !(null === ($context["rawData"] ?? null)))) {
            // line 203
            echo "                            <div class=\"card-body container\">
                                <div class=\"col-12\">
                                    <canvas id=\"chart\"></canvas>
                                </div>
                            </div>
                        ";
        }
        // line 209
        echo "
                        ";
        // line 210
        $this->displayBlock('table', $context, $blocks);
        // line 211
        echo "                    </div>
                </div>
            </div>
        </div>

    </form>
";
    }

    // line 151
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 210
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "SalesReport42/Resource/template/admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 210,  370 => 151,  360 => 211,  358 => 210,  355 => 209,  347 => 203,  345 => 202,  333 => 193,  327 => 190,  323 => 189,  314 => 183,  310 => 182,  303 => 178,  294 => 172,  288 => 169,  283 => 167,  279 => 166,  272 => 162,  267 => 160,  263 => 159,  255 => 154,  251 => 152,  249 => 151,  242 => 147,  233 => 141,  229 => 140,  224 => 139,  220 => 138,  214 => 18,  130 => 57,  122 => 52,  106 => 39,  93 => 29,  87 => 26,  83 => 25,  79 => 24,  72 => 19,  70 => 18,  67 => 17,  63 => 16,  56 => 12,  51 => 10,  49 => 14,  42 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/Resource/template/admin/index.twig", "/var/www/html/app/Plugin/SalesReport42/Resource/template/admin/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 14, "block" => 18, "if" => 202);
        static $filters = array("escape" => 12, "trans" => 12);
        static $functions = array("asset" => 24, "form_widget" => 140, "form_errors" => 162);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'block', 'if'],
                ['escape', 'trans'],
                ['asset', 'form_widget', 'form_errors']
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
