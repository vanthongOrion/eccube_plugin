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

/* @admin/Store/plugin_table_official.twig */
class __TwigTemplate_19031711041e1ea46709434c5f738cc8 extends \Eccube\Twig\Template
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
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                \$.post(\"";
        // line 25
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance"]);
        echo "\").then(function() {
                    message.text('削除が完了しました。');
                    \$('#deleteLog').text(data.log);
                    \$('#deleteLogPane').show();
                    progress.hide();
                    footer.show().find('button').toggle();
                });
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            }
        );
    });

    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "eccube.admin.disable_maintenance"], "method", false, false, true, 49)) {
            // line 50
            echo "        // メンテナンスモード解除
        \$.post(\"";
            // line 51
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance"]);
            echo "\");
    ";
        }
        // line 53
        echo "});
</script>
";
        // line 55
        if ((twig_length_filter($this->env, ($context["Plugins"] ?? null)) > 0)) {
            // line 56
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 ps-3 pt-2 pb-2\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.905"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["Plugin"]) {
                // line 70
                echo "                ";
                $context["pluginDetail"] = ((twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", true, true, true, 70)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["officialPluginsDetail"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 70, $this->source), null)) : (null));
                // line 71
                echo "                <tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 71) == false)) {
                    echo "active";
                }
                echo "\">
                    <td class=\"align-middle\">
                        <div class=\"align-center-items ps-3 d-flex\">
                            <a href=\"#\" target=\"_blank\" class=\"plugin-image pe-3 d-block float-start\">
                                <img height=\"60\" src=\"";
                // line 75
                echo twig_escape_filter($this->env, ((($context["pluginDetail"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "image", [], "any", false, false, true, 75)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
                echo "\" alt=\"\">
                            </a>
                            <span>";
                // line 77
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</span>
                        </div>
                    </td>
                    <td class=\"align-middle\">";
                // line 80
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "</p></td>
                    <td class=\"align-middle\">
                        ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 83)) {
                    // line 84
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 84)) {
                        // line 85
                        echo "                                <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                        echo "</span>
                            ";
                    } else {
                        // line 87
                        echo "                                <span class=\"text-secondary\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 89
                    echo "                        ";
                }
                // line 90
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 92
                if (($context["pluginDetail"] ?? null)) {
                    // line 93
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 93)) {
                        // line 94
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "update_status", [], "any", false, false, true, 94) == 3)) {
                            // line 95
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_update_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 95)]), "html", null, true);
                            echo "\"
                                       class=\"btn btn-ec-regular\">";
                            // line 96
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.916"), "html", null, true);
                            echo "</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">";
                            // line 98
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.917", ["%version%" => twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "version", [], "any", false, false, true, 98)]), "html", null, true);
                            echo "</li>
                                        <li class=\"plugin-version\">
                                            ";
                            // line 100
                            $context["versions"] = "";
                            // line 101
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "supported_versions", [], "any", false, false, true, 101));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                                // line 102
                                echo "                                                ";
                                $context["versions"] = ($this->sandbox->ensureToStringAllowed(($context["versions"] ?? null), 102, $this->source) . $this->sandbox->ensureToStringAllowed($context["version"], 102, $this->source));
                                // line 103
                                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 103) == false)) {
                                    $context["versions"] = ($this->sandbox->ensureToStringAllowed(($context["versions"] ?? null), 103, $this->source) . ",");
                                }
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 105
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.918", ["%versions%" => ($context["versions"] ?? null)]), "html", null, true);
                            echo "
                                        </li>
                                        <li class=\"plugin-update\">";
                            // line 107
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.919", ["%update_date%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "update_date", [], "any", false, false, true, 107), 107, $this->source))]), "html", null, true);
                            echo "</li>
                                    </ul>
                                ";
                        } else {
                            // line 110
                            echo "                                    <p class=\"mb-0\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.920"), "html", null, true);
                            echo "。</p>
                                ";
                        }
                        // line 112
                        echo "                            ";
                    } else {
                        // line 113
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, true, 113)]), "html", null, true);
                        echo "\" class=\"btn btn-ec-regular\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 115
                    echo "                        ";
                }
                // line 116
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 118)) {
                    // line 119
                    echo "                            <div class=\"row m-0\">
                                <div class=\"col-4\">
                                    ";
                    // line 121
                    if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 121) == false)) {
                        // line 122
                        echo "                                        <a href=\"#\"
                                           data-bs-toggle=\"modal\"
                                           data-bs-target=\"#officialPluginDeleteModal\"
                                           data-id=\"";
                        // line 125
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                        echo "\"
                                           data-delete-url=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 126)]), "html", null, true);
                        echo "\"
                                           data-name=\"";
                        // line 127
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                        echo "\"
                                           data-version=\"";
                        // line 128
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                        echo "\"
                                           class=\"btn btn-ec-actionIcon\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                        // line 130
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                        echo "\"></i>
                                        </a>

                                    ";
                    }
                    // line 134
                    echo "                                </div>
                                <div class=\"col-4\">
                                    ";
                    // line 136
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 136)) {
                        // line 137
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 137)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-pause fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"";
                        // line 141
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.925"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    } else {
                        // line 144
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 144)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-play fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.924"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    }
                    // line 151
                    echo "                                </div>
                                <div class=\"col-4\">
                                    ";
                    // line 153
                    if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 153), [], "array", true, true, true, 153)) {
                        // line 154
                        echo "                                        <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["configPages"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 154)] ?? null) : null), 154, $this->source), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-cog fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"";
                        // line 156
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.906"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    }
                    // line 159
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 162
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 168
            if ((twig_length_filter($this->env, ($context["officialPluginsDetail"] ?? null)) == 0)) {
                // line 169
                echo "        <p class=\"ml-3\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.help"), "html", null, true);
                echo "</p>
    ";
            }
        } else {
            // line 172
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.923"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 178
        echo "
<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fw-bold\">
                    ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"modal-body text-start\">
                <p class=\"text-start\">";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-bs-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_table_official.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 202,  449 => 201,  434 => 189,  428 => 186,  418 => 178,  411 => 174,  407 => 172,  400 => 169,  398 => 168,  393 => 165,  385 => 162,  380 => 159,  374 => 156,  368 => 154,  366 => 153,  362 => 151,  356 => 148,  346 => 144,  340 => 141,  330 => 137,  328 => 136,  324 => 134,  317 => 130,  312 => 128,  308 => 127,  304 => 126,  300 => 125,  295 => 122,  293 => 121,  289 => 119,  287 => 118,  283 => 116,  280 => 115,  272 => 113,  269 => 112,  263 => 110,  257 => 107,  251 => 105,  235 => 103,  232 => 102,  214 => 101,  212 => 100,  207 => 98,  202 => 96,  197 => 95,  194 => 94,  191 => 93,  189 => 92,  185 => 90,  182 => 89,  176 => 87,  170 => 85,  167 => 84,  165 => 83,  160 => 81,  156 => 80,  150 => 77,  145 => 75,  135 => 71,  132 => 70,  128 => 69,  120 => 64,  116 => 63,  112 => 62,  108 => 61,  104 => 60,  98 => 56,  96 => 55,  92 => 53,  87 => 51,  84 => 50,  82 => 49,  55 => 25,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_table_official.twig", "/var/www/html/src/Eccube/Resource/template/admin/Store/plugin_table_official.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 49, "for" => 69, "set" => 70);
        static $filters = array("length" => 55, "escape" => 60, "trans" => 60, "default" => 70, "time_ago" => 107);
        static $functions = array("url" => 25, "asset" => 75, "csrf_token_for_anchor" => 137);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape', 'trans', 'default', 'time_ago'],
                ['url', 'asset', 'csrf_token_for_anchor']
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
