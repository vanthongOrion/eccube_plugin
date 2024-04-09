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

/* SiteKit42/Resource/template/admin/dashboard.twig */
class __TwigTemplate_3974572659074182081cb95e85cac046 extends \Eccube\Twig\Template
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
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["menus"] = [0 => "site_kit", 1 => "gsc_query"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "SiteKit42/Resource/template/admin/dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Site Kit";
    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ダッシュボード";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        google.charts.load('current', {'packages': ['line', 'corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            let classicOptions = {
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                series: {
                    0: {targetAxisIndex: 0},
                    1: {targetAxisIndex: 1}
                },
                vAxes: {
                    // Adds titles to each axis.
                    0: {title: 'クリック数'},
                    1: {title: '表示回数'}
                }
            };
            let data = google.visualization.arrayToDataTable(";
        // line 30
        echo json_encode($this->sandbox->ensureToStringAllowed(($context["json_date"] ?? null), 30, $this->source));
        echo ");

            console.log(data);

            let chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, classicOptions);
        }
    </script>
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script>
        function run(strategy) {
            const url = setUpQuery(strategy);
            fetch(url)
                .then(response => response.json())
                .then(json => {
                    google.charts.load('current', {'packages': ['gauge']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Label', 'Value'],
                            [strategy, json.lighthouseResult.categories.performance.score * 100]
                        ]);
                        var options = {
                            width: 800, height: 180,
                            redFrom: 0, redTo: 49,
                            yellowFrom: 50, yellowTo: 89,
                            greenFrom: 90, greenTo: 100,
                            minorTicks: 5
                        };
                        var chart = new google.visualization.Gauge(document.getElementById('chart_div_' + strategy));
                        chart.draw(data, options);
                    }
                    if (json.loadingExperience.metrics) {

                        var fieldMetrics = [
                            {'metric': 'FIRST_CONTENTFUL_PAINT_MS', 'id': 'field-data-fcp'},
                            {'metric': 'FIRST_INPUT_DELAY_MS', 'id': 'field-data-fid'},
                            {'metric': 'LARGEST_CONTENTFUL_PAINT_MS', 'id': 'field-data-lcp'},
                            {'metric': 'CUMULATIVE_LAYOUT_SHIFT_SCORE', 'id': 'field-data-cls'}
                        ];
                        var badgeConfig = {'FAST': 'badge-success', 'AVERAGE': 'badge-warning', 'SLOW': 'badge-danger'};
                        var scoreLabels = ['良好', '改善が必要', '低速'];

                        fieldMetrics.forEach(function (m) {
                            var id = '#' + strategy + '-' + m.id;
                            var data = json.loadingExperience.metrics[m.metric];
                            data.distributions.sort(function (d) {
                                return d.min
                            });
                            \$(id + ' span.badge').addClass(badgeConfig[data.category]);
                            data.distributions.forEach(function (d, i) {
                                var proportionLabel = Math.round(d.proportion * 100) + '%';
                                var message = 'このページの読み込みの' + proportionLabel + 'は「' + scoreLabels[i] + '」でした。('
                                if (d.min && d.max) {
                                    message += (d.min + ' 〜 ' + d.max);
                                } else if (d.min) {
                                    message += ('> ' + d.min);
                                } else if (d.max) {
                                    message += ('< ' + d.max);
                                }
                                if (m.metric.match(/MS\$/)) {
                                    message += ' ms'
                                }
                                message += ')';
                                \$(id + ' div.progress-bar:eq(' + i + ')')
                                    .css('width', d.proportion * 100 + '%')
                                    .text(proportionLabel)
                                    .attr({'data-tooltip': 'true', 'data-original-title': message})
                            });
                        });
                    } else {
                        \$('.' + strategy + '-field')
                            .html('<div class=\"col-12 m-2\"><div class=\"alert alert-warning\" role=\"alert\">このページの実際の速度データが十分にありません。</div></div>');
                    }

                    function badgeClass(score) {
                        if (score <= 0.49) {
                            return 'badge-danger';
                        } else if (score <= 0.89) {
                            return 'badge-warning';
                        } else {
                            return 'badge-success';
                        }
                    }

                    \$('#' + strategy + '-lab-fcp-value').text(json.lighthouseResult.audits[\"first-contentful-paint\"].displayValue);
                    \$('#' + strategy + '-lab-fcp-badge').addClass(badgeClass(json.lighthouseResult.audits[\"first-contentful-paint\"].score));
                    \$('#' + strategy + '-lab-tti-value').text(json.lighthouseResult.audits[\"interactive\"].displayValue);
                    \$('#' + strategy + '-lab-tti-badge').addClass(badgeClass(json.lighthouseResult.audits[\"interactive\"].score));
                    \$('#' + strategy + '-lab-speed-value').text(json.lighthouseResult.audits[\"speed-index\"].displayValue);
                    \$('#' + strategy + '-lab-speed-badge').addClass(badgeClass(json.lighthouseResult.audits[\"speed-index\"].score));
                    \$('#' + strategy + '-lab-tbt-value').text(json.lighthouseResult.audits[\"total-blocking-time\"].displayValue);
                    \$('#' + strategy + '-lab-tbt-badge').addClass(badgeClass(json.lighthouseResult.audits[\"total-blocking-time\"].score));
                    \$('#' + strategy + '-lab-lcp-value').text(json.lighthouseResult.audits[\"largest-contentful-paint\"].displayValue);
                    \$('#' + strategy + '-lab-lcp-badge').addClass(badgeClass(json.lighthouseResult.audits[\"largest-contentful-paint\"].score));
                    \$('#' + strategy + '-lab-cls-value').text(json.lighthouseResult.audits[\"cumulative-layout-shift\"].displayValue);
                    \$('#' + strategy + '-lab-cls-badge').addClass(badgeClass(json.lighthouseResult.audits[\"cumulative-layout-shift\"].score));
                }).then(function() {
                    \$('.' + strategy + '-init').addClass('d-none');
                    \$('.' + strategy + '-loaded').removeClass('d-none');
                });
        }

        function setUpQuery(strategy) {
            const api = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';
            const parameters = {
                url: encodeURIComponent('";
        // line 138
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ownedSiteUrl"] ?? null), 138, $this->source), "html", null, true);
        echo "'),
                strategy: strategy
            };
            let query = `\${api}?`;
            for (key in parameters) {
                query += `\${key}=\${parameters[key]}&`;
            }
            return query;
        }

        run('desktop');
        run('mobile');
        \$('[data-toggle=\"tooltip\"]').tooltip();
    </script>
";
    }

    // line 154
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">

        <!-- パフォーマンススコア-START -->
        <div class=\"card rounded border-0 mb-4\">
            <div class=\"card-header\">
                <div class=\"row\">
                    <div class=\"col-8\">
                        <h3>パフォーマンス</h3>
                    </div>
                    <div class=\"col-4 text-end\">
                        <a href=\"https://developers.google.com/web/tools/lighthouse#devtools\" target=\"_blank\">
                            <button type=\"button\" class=\"btn btn-ec-regular\">
                                <img style=\"width: 20px;\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("SiteKit42/assets/lighthouse-logo.svg", "plugin"), "html", null, true);
        echo "\" alt=\"google-pagespeed-insights image\"> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lighthouseのすべてのレポートを確認する"), "html", null, true);
        echo "
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-6 border-end\">
                            <div id=\"chart_div_desktop\" class=\"d-flex align-items-center justify-content-center\" style=\"height: 240px;\">
                                <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\" alt=\"loading\">
                            </div>
                        </div>

                        <div class=\"col-6\">
                            <div id=\"chart_div_mobile\" class=\"d-flex align-items-center justify-content-center\" style=\"height: 240px;\">
                                <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\" alt=\"loading\">
                            </div>
                        </div>
                    </div>
                    <div class=\"pb-4\">
                        <h5>フィールドデータ</h5>
                        <div class=\"row\">
                            <div class=\"col-6 border-end\">
                                <div class=\"row desktop-init\">
                                    <div class=\"col-12\">
                                        <div class=\"d-flex align-items-center justify-content-center\" style=\"height: 100px;\">
                                            <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\" alt=\"loading\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row d-none desktop-loaded desktop-field\">
                                    <div class=\"col-6 py-1\" id=\"desktop-field-data-fcp\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> First Contentful Paint（FCP）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6 py-1\" id=\"desktop-field-data-fid\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> First Input Delay（FID）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6 py-1\" id=\"desktop-field-data-lcp\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Largest Contentful Paint（LCP）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6 py-1\" id=\"desktop-field-data-cls\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Cumulative Layout Shift（CLS）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row mobile-init\">
                                    <div class=\"col-12\">
                                        <div class=\"d-flex align-items-center justify-content-center\" style=\"height: 100px;\">
                                            <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\" alt=\"loading\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row d-none mobile-loaded mobile-field\">
                                    <div class=\"col-6 py-1\" id=\"mobile-field-data-fcp\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> First Contentful Paint（FCP）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6 py-1\" id=\"mobile-field-data-fid\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> First Input Delay（FID）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6 py-1\" id=\"mobile-field-data-lcp\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Largest Contentful Paint（LCP）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6 py-1\" id=\"mobile-field-data-cls\">
                                        <div class=\"mb-2\"><span class=\"badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Cumulative Layout Shift（CLS）</span></div>
                                        <div>
                                            <div class=\"progress\" style=\"height: 18px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5>ラボデータ</h5>
                        <div class=\"row\">
                            <div class=\"col-6 border-end desktop-init\">
                                <div class=\"d-flex align-items-center justify-content-center\" style=\"height: 80px;\">
                                    <img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\" alt=\"loading\">
                                </div>
                            </div>
                            <div class=\"col-6 border-end d-none desktop-loaded\">
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"desktop-lab-fcp-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> First Contentful Paint</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"desktop-lab-fcp-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"desktop-lab-tti-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Time to Interactive</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"desktop-lab-tti-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"desktop-lab-speed-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Speed Index</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"desktop-lab-speed-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"desktop-lab-tbt-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Total Blocking Time</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"desktop-lab-tbt-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"desktop-lab-lcp-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Largest Contentful Paint</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"desktop-lab-lcp-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"desktop-lab-cls-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Cumulative Layout Shift</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"desktop-lab-cls-value\"></div>
                                </div>
                            </div>
                            <div class=\"col-6 border-end mobile-init\">
                                <div class=\"d-flex align-items-center justify-content-center\" style=\"height: 80px;\">
                                    <img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\" alt=\"loading\">
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row d-none mobile-loaded\">
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"mobile-lab-fcp-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> First Contentful Paint</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"mobile-lab-fcp-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"mobile-lab-tti-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Time to Interactive</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"mobile-lab-tti-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"mobile-lab-speed-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Speed Index</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"mobile-lab-speed-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"mobile-lab-tbt-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Total Blocking Time</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"mobile-lab-tbt-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"mobile-lab-lcp-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Largest Contentful Paint</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"mobile-lab-lcp-value\"></div>
                                    <div class=\"col-4\">
                                        <span class=\"badge\" id=\"mobile-lab-cls-badge\">&nbsp;&nbsp;</span><span class=\"fw-bold\"> Cumulative Layout Shift</span>
                                    </div>
                                    <div class=\"col-2 text-end\" id=\"mobile-lab-cls-value\"></div>
                                </div>
                            </div>
                        </div>

                        <div class=\"pt-5\">
                            <span style=\"font-size: 18px;\"><img style=\"width: 40px;\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("SiteKit42/assets/lighthouse-logo.svg", "plugin"), "html", null, true);
        echo "\" alt=\"google-search-console image\"> Powered by <a href=\"https://developers.google.com/web/tools/lighthouse\" target=\"_blank\">Lighthouse</a> (v.6.3.0)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- パフォーマンススコア-END -->

            <!-- アクセス推移-START -->
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <h3>アクセス推移（過去28日間）</h3>
                        </div>
                        <div class=\"col-4 text-end\">
                            <a href=\"https://search.google.com/search-console?utm_source=about-page&resource_id=";
        // line 384
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ownedSiteUrl"] ?? null), 384, $this->source), "html", null, true);
        echo "\"
                               target=\"_blank\">
                                <button type=\"button\" class=\"btn btn-ec-regular\">
                                    <img style=\"width: 18px;\"
                                         src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("SiteKit42/assets/google-search-console.svg", "plugin"), "html", null, true);
        echo "\"
                                         alt=\"google-search-console image\"> ";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Google Search Consoleへ"), "html", null, true);
        echo "
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div id=\"curve_chart\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- アクセス推移-END -->

            <!-- キーワード情報-START -->
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <h3>キーワード情報（過去28日間）</h3>
                        </div>
                        <div class=\"col-4 text-end\">
                            <a href=\"https://search.google.com/search-console?utm_source=about-page&resource_id=";
        // line 415
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ownedSiteUrl"] ?? null), 415, $this->source), "html", null, true);
        echo "\"
                               target=\"_blank\">
                                <button type=\"button\" class=\"btn btn-ec-regular\">
                                    <img style=\"width: 18px;\"
                                         src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("SiteKit42/assets/google-search-console.svg", "plugin"), "html", null, true);
        echo "\"
                                         alt=\"google-search-console image\"> ";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Google Search Consoleへ"), "html", null, true);
        echo "
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 430
        if (twig_get_attribute($this->env, $this->source, ($context["json_query"] ?? null), "rows", [], "any", false, false, true, 430)) {
            // line 431
            echo "                                <table class=\"table table-sm table-striped table-bordered\">
                                    <colgroup>
                                        <col>
                                        <col style=\"width: 10em;\">
                                        <col style=\"width: 10em;\">
                                        <col style=\"width: 10em;\">
                                        <col style=\"width: 10em;\">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 py-2 text-start\">キーワード</th>
                                        <th class=\"border-top-0 py-2 text-start\">クリック数</th>
                                        <th class=\"border-top-0 py-2 text-start\">インプレッション</th>
                                        <th class=\"border-top-0 py-2 text-start\">クリックレート</th>
                                        <th class=\"border-top-0 py-2 text-start\">平均表示ランク</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 449
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["json_query"] ?? null), "rows", [], "any", false, false, true, 449));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 450
                echo "                                        <tr>
                                            <td class=\"align-middle text-start ps-3\">";
                // line 451
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["row"], "keys", [], "any", false, false, true, 451)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 451, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 452
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "clicks", [], "any", false, false, true, 452), 452, $this->source)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 453
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "impressions", [], "any", false, false, true, 453), 453, $this->source)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 454
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "ctr", [], "any", false, false, true, 454), 454, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 455
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "position", [], "any", false, false, true, 455), 455, $this->source), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "                                    </tbody>
                                </table>
                                ";
        } else {
            // line 461
            echo "                                <div class=\"alert alert-warning\" role=\"alert\">データがまだありません。</div>
                                ";
        }
        // line 463
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- キーワード情報-END -->

            <!-- ページ情報-START -->
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <h3>ページ情報（過去28日間）</h3>
                        </div>
                        <div class=\"col-4 text-end\">
                            <a href=\"https://search.google.com/search-console?utm_source=about-page&resource_id=";
        // line 478
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ownedSiteUrl"] ?? null), 478, $this->source), "html", null, true);
        echo "\"
                               target=\"_blank\">
                                <button type=\"button\" class=\"btn btn-ec-regular\">
                                    <img style=\"width: 18px;\"
                                         src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("SiteKit42/assets/google-search-console.svg", "plugin"), "html", null, true);
        echo "\"
                                         alt=\"google-search-console image\"> ";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Google Search Consoleへ"), "html", null, true);
        echo "
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 493
        if (twig_get_attribute($this->env, $this->source, ($context["json_page"] ?? null), "rows", [], "any", false, false, true, 493)) {
            // line 494
            echo "                                <table class=\"table table-sm table-striped table-bordered\">
                                    <colgroup>
                                        <col>
                                        <col style=\"width: 10em;\">
                                        <col style=\"width: 10em;\">
                                        <col style=\"width: 10em;\">
                                        <col style=\"width: 10em;\">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 py-2 text-start\">ページ</th>
                                        <th class=\"border-top-0 py-2 text-start\">クリック数</th>
                                        <th class=\"border-top-0 py-2 text-start\">インプレッション</th>
                                        <th class=\"border-top-0 py-2 text-start\">クリックレート</th>
                                        <th class=\"border-top-0 py-2 text-start\">平均表示ランク</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["json_page"] ?? null), "rows", [], "any", false, false, true, 512));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 513
                echo "                                        <tr>
                                            <td class=\"align-middle text-start ps-3\">";
                // line 514
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["row"], "keys", [], "any", false, false, true, 514)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 514, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 515
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "clicks", [], "any", false, false, true, 515), 515, $this->source)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 516
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "impressions", [], "any", false, false, true, 516), 516, $this->source)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 517
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "ctr", [], "any", false, false, true, 517), 517, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end ps-3\">";
                // line 518
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "position", [], "any", false, false, true, 518), 518, $this->source), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            echo "                                    </tbody>
                                </table>
                                ";
        } else {
            // line 524
            echo "                                <div class=\"alert alert-warning\" role=\"alert\">データがまだありません。</div>
                                ";
        }
        // line 526
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ページ情報-END -->
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "SiteKit42/Resource/template/admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 526,  718 => 524,  713 => 521,  704 => 518,  700 => 517,  696 => 516,  692 => 515,  688 => 514,  685 => 513,  681 => 512,  661 => 494,  659 => 493,  646 => 483,  642 => 482,  635 => 478,  618 => 463,  614 => 461,  609 => 458,  600 => 455,  596 => 454,  592 => 453,  588 => 452,  584 => 451,  581 => 450,  577 => 449,  557 => 431,  555 => 430,  542 => 420,  538 => 419,  531 => 415,  502 => 389,  498 => 388,  491 => 384,  472 => 368,  435 => 334,  399 => 301,  342 => 247,  288 => 196,  274 => 185,  265 => 179,  249 => 168,  234 => 155,  230 => 154,  211 => 138,  100 => 30,  79 => 11,  75 => 10,  69 => 8,  62 => 6,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Resource/template/admin/dashboard.twig", "/var/www/html/app/Plugin/SiteKit42/Resource/template/admin/dashboard.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 430, "for" => 449);
        static $filters = array("raw" => 30, "json_encode" => 30, "escape" => 138, "trans" => 168, "number_format" => 452);
        static $functions = array("asset" => 168);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['raw', 'json_encode', 'escape', 'trans', 'number_format'],
                ['asset']
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
