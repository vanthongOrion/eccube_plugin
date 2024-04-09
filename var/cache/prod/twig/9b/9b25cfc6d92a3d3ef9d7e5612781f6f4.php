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

/* MailMagazine42/Resource/template/admin/history_list.twig */
class __TwigTemplate_795ea99944a07c09f9f7ba47558c4e3c extends \Eccube\Twig\Template
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
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["menus"] = [0 => "mailmagazine", 1 => "mailmagazine_history"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_list.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.title"), "html", null, true);
    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<script>
function fnDelete(action) {
    if (confirm('この履歴を削除してもよろしいですか？')) {
        document.form1.action = action;
        document.form1.submit();
    }
}
function sendMail(id, offset, token) {
    \$.post('";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_commit");
        echo "', { id : id, offset: offset || 0, _token:token })
        .done(function(res) {
            \$('#send-progress').css('width', (res.count / res.total * 100) + '%');
            \$('#send-status-message').text(res.count + ' / ' + res.total + ' 件処理完了');
            if (res.count < res.total) {
                sendMail(id, res.count);
            } else {
                \$('.modal-title').text('送信完了');
                \$('#send-progress').removeClass('progress-bar-striped active');
                \$('.modal-footer').show();
            }
        })
        .fail(function() {
            alert('エラーが発生しました。');
        });
}
\$(function () {
    var lock = false;
    \$('.retry-btn').click(function(e) {
        e.preventDefault();
        if (!lock && confirm('配信失敗と未配信のメールを再送します。\\nよろしいですか？')) {
            lock = true;
            \$('#sendModal').modal('show');
            var id = \$(this).data('id');
            \$.post(\$(this).data('url'))
                .done(function() { sendMail(id, 0); })
                .fail(function() { alert('エラーが発生しました。'); });
        }
        return false;
    });
    \$('#sendModal').on('show.bs.modal', function () {
        \$('.modal-title').text('送信中...');
        \$('#send-progress').addClass('progress-bar-striped active');
        \$('#send-status-message').text('');
    });
    \$('#sendModal').on('hide.bs.modal', function() {
        location.reload(true);
    });
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 64), "flashBag", [], "any", false, false, true, 64), "has", [0 => "eccube.mailmagazine.history"], "method", false, false, true, 64)) {
            // line 65
            echo "    \$('#sendModal').modal('show');
    sendMail(";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 66), "flashBag", [], "any", false, false, true, 66), "get", [0 => "eccube.mailmagazine.history"], "method", false, false, true, 66)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 66, $this->source), "html", null, true);
            echo ", 0);
    ";
        }
        // line 68
        echo "})
</script>
";
    }

    // line 72
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "<form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <div class=\"c-outsideBlock__contents mb-5\">
        ";
        // line 76
        if (($context["pagination"] ?? null)) {
            // line 77
            echo "            <span class=\"fw-bold ml-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.search_count", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 77)]), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        echo "    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 83
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 83))) {
            // line 84
            echo "                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            ";
            // line 89
            echo "                            <div class=\"d-inline-block mr-2 align-bottom\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 92
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 92) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 93
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("plugin_mail_magazine_history_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 93)]), "html", null, true);
                echo "\">
                                            ";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 94)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                </select>
                            </div>
                            <div class=\"d-inline-block\">
                                <div class=\"btn-group\" role=\"group\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_start_time"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_end_time"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_subject"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_total"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_complete"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_fail"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_unsend"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pe-2 pb-2 text-center pe-3\">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["SendHistory"]) {
                // line 120
                echo "                                    <tr>
                                        <td class=\"\">";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "start_date", [], "any", false, false, true, 121), 121, $this->source), "Y/m/d H:i"), "html", null, true);
                echo "</td>
                                        <td class=\"\">
                                            ";
                // line 123
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["SendHistory"], "end_date", [], "any", false, false, true, 123))) {
                    // line 124
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "end_date", [], "any", false, false, true, 124), 124, $this->source), "Y/m/d H:i"), "html", null, true);
                    echo "
                                            ";
                }
                // line 126
                echo "                                        </td>
                                        <td class=\"\">";
                // line 127
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "subject", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "send_count", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "complete_count", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "error_count", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 131
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["SendHistory"], "send_count", [], "any", false, false, true, 131) - twig_get_attribute($this->env, $this->source, $context["SendHistory"], "complete_count", [], "any", false, false, true, 131)), "html", null, true);
                echo "</td>
                                        <td class=\"icon_edit align-middle pe-3 text-center\">
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history_preview", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 135)]), "html", null, true);
                echo "\" >
                                                        ";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_preview"), "html", null, true);
                echo "
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history_condition", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 140)]), "html", null, true);
                echo "\">
                                                        ";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_condition"), "html", null, true);
                echo "
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history_result", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 145)]), "html", null, true);
                echo "\">
                                                        ";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_result"), "html", null, true);
                echo "
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                // line 150
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "\">
                                                        ";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_delete"), "html", null, true);
                echo "
                                                    </a>
                                                    <div id=\"deleteModal";
                // line 153
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h4 class=\"modal-title\">";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.modal_del_message"), "html", null, true);
                echo "</h4>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-dismiss=\"modal\">
                                                                        ";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
                echo "
                                                                    </button>
                                                                    <button type=\"submit\" class=\"btn btn-ec-delete\" onclick=\"document.form1.action = '";
                // line 163
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 163)]), "html", null, true);
                echo "'\">
                                                                        ";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
                echo "
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
                // line 171
                if (((twig_get_attribute($this->env, $this->source, $context["SendHistory"], "error_count", [], "any", false, false, true, 171) > 0) || ((twig_get_attribute($this->env, $this->source, $context["SendHistory"], "send_count", [], "any", false, false, true, 171) - twig_get_attribute($this->env, $this->source, $context["SendHistory"], "complete_count", [], "any", false, false, true, 171)) > 0))) {
                    // line 172
                    echo "                                                    <div class=\"col-auto text-center\">
                                                        <a href=\"#\" class=\"retry-btn\" data-id=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history_retry", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 173)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_resend"), "html", null, true);
                    echo "
                                                        </a>
                                                    </div>
                                                ";
                }
                // line 178
                echo "                                            </div>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SendHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 185
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 185) > 0)) {
                // line 186
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "MailMagazine42/Resource/template/admin/history_list.twig", 186)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 186), "routes" => "plugin_mail_magazine_history_page"]));
                // line 187
                echo "                                ";
            }
            // line 188
            echo "                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 192
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted\">";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.notice_no_data"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 198
        echo "            </div>
        </div>
    </div>
</form>
<div id=\"sendModal\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">送信中...</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress\">
                    <div id=\"send-progress\" class=\"progress-bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>
                </div>
                <div id=\"send-status-message\"></div>
            </div>
            <div class=\"modal-footer\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.btn_cancel"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/history_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 215,  423 => 198,  416 => 194,  412 => 192,  406 => 188,  403 => 187,  400 => 186,  398 => 185,  393 => 182,  384 => 178,  377 => 174,  371 => 173,  368 => 172,  366 => 171,  356 => 164,  352 => 163,  347 => 161,  340 => 157,  333 => 153,  328 => 151,  324 => 150,  317 => 146,  313 => 145,  306 => 141,  302 => 140,  295 => 136,  291 => 135,  284 => 131,  280 => 130,  276 => 129,  272 => 128,  268 => 127,  265 => 126,  259 => 124,  257 => 123,  252 => 121,  249 => 120,  245 => 119,  237 => 114,  233 => 113,  229 => 112,  225 => 111,  221 => 110,  217 => 109,  213 => 108,  199 => 96,  191 => 94,  186 => 93,  181 => 92,  177 => 91,  173 => 89,  167 => 84,  165 => 83,  159 => 79,  153 => 77,  151 => 76,  146 => 74,  143 => 73,  139 => 72,  133 => 68,  128 => 66,  125 => 65,  123 => 64,  82 => 26,  72 => 18,  68 => 17,  61 => 15,  54 => 14,  49 => 10,  47 => 12,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/history_list.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/history_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 64, "for" => 91, "include" => 186);
        static $filters = array("escape" => 14, "trans" => 14, "date" => 121);
        static $functions = array("url" => 26, "csrf_token" => 74, "constant" => 74, "path" => 93);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans', 'date'],
                ['url', 'csrf_token', 'constant', 'path']
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
