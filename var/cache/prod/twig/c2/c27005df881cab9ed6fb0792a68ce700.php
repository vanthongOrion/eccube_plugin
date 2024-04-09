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

/* @admin/Store/plugin_confirm.twig */
class __TwigTemplate_892138c721b254f753f464859153fcd2 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        if (($context["is_update"] ?? null)) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title.upgrade"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.subtitle"), "html", null, true);
        echo "
";
    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<script>
\$(function() {

    var MODES = {
        'install': {
            'name': 'インストール',
            'init': function(ctx) {
                ctx.progressBar.css('width', (0.5/ctx.totalCount*100) + '%');
            },
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をインストール中');
                    ctx.log('**************** ' + ctx.plugin.pluginCode + ' ****************');
                    return \$.post(\"";
        // line 40
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_install");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', ((ctx.currentCount/ctx.totalCount + 0.5/ctx.totalCount)*100) + '%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    // メンテナンスモード解除
                    return \$.post(\"";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance"]);
        echo "\", ctx.plugin);
                });
            }
        },
        'upgrade': {
            'name': 'アップデート',
            'init': function(ctx) {},
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」を無効化中');
                    ctx.log('**************** Disable ****************');
                    return \$.post(ctx.relatedTarget.data('disable-url'), ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '10%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をアップデート中');
                    ctx.log('**************** Upgrade ****************');
                    return \$.post(\"";
        // line 66
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_upgrade");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '40%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」のスキーマ更新中');
                    ctx.log('**************** Schema Update ****************');
                    return \$.post(\"";
        // line 74
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_schema_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '60%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」の更新処理中');
                    ctx.log('**************** Update ****************');
                    return \$.post(\"";
        // line 82
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '80%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    // メンテナンスモード解除
                    return \$.post(\"";
        // line 89
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance_update"]);
        echo "\", ctx.plugin);
                });
            }
        }
    };

    var mode;
    var relatedTarget;
    var modal = \$('#installModal');
    var message = \$('div.modal-body > p', modal);

    \$('#installModal').on('show.bs.modal', function(e) {
        relatedTarget = \$(e.relatedTarget);
        mode = MODES[relatedTarget.data('mode')];
        \$('.modal-title', modal).text(mode.name + '確認');
        message.text('「";
        // line 104
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 104), 104, $this->source), "js"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo ")」を' + mode.name + 'しますか？');
        \$('#installBtn').text(mode.name);
    });

    \$('#installBtn').on('click', function() {
        message.text('「";
        // line 109
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 109), 109, $this->source), "js"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo ")」を' + mode.name + '中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。');
        var footer = \$('div.modal-footer', modal).hide();
        var progress = \$('div.progress', modal).show();
        var statusBar = \$('#installStatus').text('');
        var log = function(text) {
            if (text) {
                \$('#installLog').text(\$('#installLog').text() ? (\$('#installLog').text() + '\\n' + text) : text);
            }
        };

        var requires = ";
        // line 119
        echo json_encode($this->sandbox->ensureToStringAllowed(($context["requires"] ?? null), 119, $this->source));
        echo ";
        requires = requires.map(function(req) {
            return {'pluginCode':req.name.replace(/^ec-cube\\//, '') }
        });
        requires.push({'pluginCode': '";
        // line 123
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "code", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "', 'version': '";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "'});

        var progressBar = \$('div.progress-bar', progress);

        var d = \$.Deferred().resolve();

        var ctx = {
            'statusBar': statusBar,
            'progressBar': progressBar,
            'log': log,
            'currentCount': 0,
            'totalCount': requires.length,
            'deferred': d,
            'relatedTarget': relatedTarget
        };

        mode.init(ctx);

        requires.forEach(function(req) {
            d = mode.execute(\$.extend({}, ctx, {
                'plugin': req,
                'deferred': d
            }));
        });

        d.done(function() {
            \$('div.progress-bar', progress).css('width', '100%');

            var message_text = 'インストールが完了しました。';
            ";
        // line 152
        if ((($context["is_update"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["Plugin"] ?? null), "enabled", [], "any", false, false, true, 152))) {
            // line 153
            echo "                message_text += 'プラグイン一覧より有効化を行って下さい。';
            ";
        }
        // line 155
        echo "            message.text(message_text);

        }).fail(function(res) {
            message.text('システムエラーが発生しました。');
            if (res.responseJSON) {
                log(res.responseJSON.log);
            }
            if (res.responseText) {
                log(res.responseText);
            }
        }).always(function() {
            statusBar.hide();
            \$('#installLogPane').show();
            \$('button', footer).hide();
            \$('a', footer).show();
            footer.show();
            progress.hide();
        });
    });
});

</script>
";
    }

    // line 179
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"plugin-list\" class=\"card rounded mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">
                            ";
        // line 186
        if (($context["is_update"] ?? null)) {
            // line 187
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header.upgrade"), "html", null, true);
            echo "
                            ";
        } else {
            // line 189
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header"), "html", null, true);
            echo "
                            ";
        }
        // line 191
        echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row pb-4 mb-4 border-bottom border-ec-gray\">
                        ";
        // line 195
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_confirm_panel.twig");
        echo "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 text-end\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" onclick=\"return window.history.back()\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                ";
        // line 201
        if (($context["is_update"] ?? null)) {
            // line 202
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#installModal\" data-mode=\"upgrade\"
                                            data-enable-url=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, ($context["Plugin"] ?? null), "id", [], "any", false, false, true, 203), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\"
                                            data-disable-url=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, ($context["Plugin"] ?? null), "id", [], "any", false, false, true, 204), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.upgrade"), "html", null, true);
            echo "</button>
                                ";
        } else {
            // line 206
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#installModal\" data-mode=\"install\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
            echo "</button>
                                ";
        }
        // line 208
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 213
        if (((($context["is_update"] ?? null) == false) && (twig_length_filter($this->env, ($context["requires"] ?? null)) > 0))) {
            // line 214
            echo "                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.require.header", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 216)]), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"card-body\">
                        ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["requires"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 220
                echo "                            <ul>
                                <li>";
                // line 221
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "versions", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "</li>
                            </ul>
                            ";
                // line 224
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                    </div>
                </div>
                ";
        }
        // line 228
        echo "            </div>
        </div>
    </div>

    <div id=\"installModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"></h5>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                    <div id=\"installProgress\" class=\"progress\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <div>
                        <p class=\"text-end small\" id=\"installStatus\"></p>
                    </div>
                    <div id=\"installLogPane\" style=\"display: none;\">
                        <div class=\"d-inline-block collapsed\" data-bs-toggle=\"collapse\" href=\"#installLog\" aria-expanded=\"false\" aria-controls=\"installLog\">
                            <a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">ログを確認</span></a>
                        </div>
                        <pre class=\"collapsed collapse\" id=\"installLog\"></pre>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-ec-conversion\" id=\"installBtn\"></button>
                    <a href=\"";
        // line 256
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin");
        echo "\" class=\"btn btn-ec-regular\" style=\"display: none\">完了</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 256,  423 => 254,  395 => 228,  390 => 225,  384 => 224,  377 => 221,  374 => 220,  370 => 219,  364 => 216,  360 => 214,  358 => 213,  351 => 208,  345 => 206,  338 => 204,  334 => 203,  331 => 202,  329 => 201,  325 => 200,  317 => 195,  311 => 191,  305 => 189,  299 => 187,  297 => 186,  289 => 180,  285 => 179,  259 => 155,  255 => 153,  253 => 152,  219 => 123,  212 => 119,  197 => 109,  187 => 104,  169 => 89,  159 => 82,  148 => 74,  137 => 66,  115 => 47,  105 => 40,  90 => 27,  86 => 26,  79 => 23,  75 => 22,  67 => 19,  61 => 17,  58 => 16,  54 => 15,  49 => 11,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_confirm.twig", "/var/www/html/src/Eccube/Resource/template/admin/Store/plugin_confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 16, "for" => 219);
        static $filters = array("escape" => 17, "trans" => 17, "raw" => 119, "json_encode" => 119, "length" => 213);
        static $functions = array("url" => 40, "include" => 195, "constant" => 203);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'raw', 'json_encode', 'length'],
                ['url', 'include', 'constant']
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
