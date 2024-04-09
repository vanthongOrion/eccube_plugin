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

/* SalesReport42/Resource/template/admin/term.twig */
class __TwigTemplate_621bbefce07cbba5977ffffbafa9747f extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'chart' => [$this, 'block_chart'],
            'option' => [$this, 'block_option'],
            'table' => [$this, 'block_table'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "SalesReport42/Resource/template/admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["report_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.term.report_title");
        // line 14
        $context["action"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sales_report_admin_term");
        // line 15
        $context["menus"] = [0 => "SalesReport42", 1 => "sales_report_admin_term"];
        // line 10
        $this->parent = $this->loadTemplate("SalesReport42/Resource/template/admin/index.twig", "SalesReport42/Resource/template/admin/term.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.sub.title.term"), "html", null, true);
    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
        #sales_report_unit > div {
            float: left;
            padding-right: 15px
        }
    </style>
";
    }

    // line 36
    public function block_chart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <script>
        var graphData = ";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(($context["graphData"] ?? null), 38, $this->source);
        echo ";

        window.onload = function () {
            //create line chart
            if (graphData != null) {
                var dataSet = graphData.datasets;
                graphData.datasets = [dataSet];
                ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "unit", [], "any", true, true, true, 45) && ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "unit", [], "any", false, false, true, 45) == "byWeekDay") || (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "unit", [], "any", false, false, true, 45) == "byHour")))) {
            // line 46
            echo "                var config = {
                    type: 'bar',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.money"), "html", null, true);
            echo "' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
                                }
                            }]
                        }
                    }
                };
                ";
        } else {
            // line 73
            echo "                var config = {
                    type: 'line',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.money"), "html", null, true);
            echo "' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
                                }
                            }]
                        }
                    }
                };
                ";
        }
        // line 100
        echo "                var ctx = document.getElementById(\"chart\").getContext(\"2d\");
                new Chart(ctx, config);
            }
            //export csv
            \$('#export-csv').click(function () {
                var form = document.createElement(\"form\");
                form.setAttribute(\"method\", 'POST');
                form.setAttribute(\"action\", \"";
        // line 107
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sales_report_admin_export", ["type" => "term"]);
        echo "\");
                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            });
        };
    </script>
";
    }

    // line 116
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "    <div class=\"row\">
        <div class=\"col-3\"><span>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.term.001"), "html", null, true);
        echo "</span></div>
        <div class=\"col mb-2\">
            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, true, 120), 120, $this->source), 'widget');
        echo "
            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unit", [], "any", false, false, true, 121), 121, $this->source), 'errors');
        echo "
        </div>
    </div>
";
    }

    // line 126
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 127), "method", [], "any", false, false, true, 127) == "POST")) {
            // line 128
            echo "        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 130
            if ( !(null === ($context["rawData"] ?? null))) {
                // line 131
                echo "                    <div class=\"col-12 text-end mb-2\">
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group d-inline-block\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-ec-regular\" id=\"export-csv\"><i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i> ";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.csv.download"), "html", null, true);
                echo "
                                </button>
                            </div>
                        </div>
                    </div>

                    <table class=\"table table-striped\" id=\"term-table\">
                        <thead>
                        <tr>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.001"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.002"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.003"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.004"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.005"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.006"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.007"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.008"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.009"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.010"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.011"), "html", null, true);
                echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["rawData"] ?? null));
                foreach ($context['_seq'] as $context["date"] => $context["row"]) {
                    // line 159
                    echo "                            <tr>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 160
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["date"], 160, $this->source), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 161
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 161)), "html", null, true))));
                    echo "</td>

                                <td class=\"align-middle text-center ps-3\">";
                    // line 163
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "male", [], "any", false, false, true, 163)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 164
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "female", [], "any", false, false, true, 164)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 165
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "other", [], "any", false, false, true, 165)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 166
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "member_male", [], "any", false, false, true, 166)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 167
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nonmember_male", [], "any", false, false, true, 167)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 168
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "member_female", [], "any", false, false, true, 168)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 169
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nonmember_female", [], "any", false, false, true, 169)), "html", null, true))));
                    echo "</td>

                                <td class=\"price-format text-end\">
                                    ";
                    // line 172
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 172)), "html", null, true))));
                    echo "
                                    <span class=\"d-none\">";
                    // line 173
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 173), "html", null, true))));
                    echo "</span>
                                </td>
                                <td class=\"price-format text-end\">
                                    ";
                    // line 176
                    if (( !twig_test_empty($context["row"]) && (twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 176) > 0))) {
                        // line 177
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_round((twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 177) / twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 177)), 2, "floor")), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 179
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(0), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 181
                    echo "                                    <span class=\"d-none\">
                                                    ";
                    // line 182
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 182) > 0)) {
                        // line 183
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 183) / twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 183)), 2, "floor"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 185
                        echo "                                                        0
                                                    ";
                    }
                    // line 187
                    echo "                                                </span>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['date'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                        </tbody>
                    </table>
                ";
            } else {
                // line 194
                echo "                    <div class=\"col-12\">
                        <p class=\"mb-0\">";
                // line 195
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.nodata"), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 198
            echo "            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SalesReport42/Resource/template/admin/term.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 198,  400 => 195,  397 => 194,  392 => 191,  383 => 187,  379 => 185,  373 => 183,  371 => 182,  368 => 181,  362 => 179,  356 => 177,  354 => 176,  348 => 173,  344 => 172,  338 => 169,  334 => 168,  330 => 167,  326 => 166,  322 => 165,  318 => 164,  314 => 163,  309 => 161,  305 => 160,  302 => 159,  298 => 158,  291 => 154,  287 => 153,  283 => 152,  279 => 151,  275 => 150,  271 => 149,  267 => 148,  263 => 147,  259 => 146,  255 => 145,  251 => 144,  239 => 135,  233 => 131,  231 => 130,  227 => 128,  224 => 127,  220 => 126,  212 => 121,  208 => 120,  203 => 118,  200 => 117,  196 => 116,  184 => 107,  175 => 100,  156 => 84,  143 => 73,  124 => 57,  111 => 46,  109 => 45,  99 => 38,  96 => 37,  92 => 36,  70 => 18,  66 => 17,  59 => 11,  54 => 10,  52 => 15,  50 => 14,  48 => 13,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/Resource/template/admin/term.twig", "/var/www/html/app/Plugin/SalesReport42/Resource/template/admin/term.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 45, "for" => 158);
        static $filters = array("trans" => 13, "escape" => 11, "raw" => 38, "number_format" => 161, "price" => 172, "round" => 177);
        static $functions = array("url" => 14, "asset" => 18, "form_widget" => 120, "form_errors" => 121);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['trans', 'escape', 'raw', 'number_format', 'price', 'round'],
                ['url', 'asset', 'form_widget', 'form_errors']
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
