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

/* MailMagazine42/Resource/template/admin/confirm.twig */
class __TwigTemplate_8ece8c17adff74c535ca690d711f117c extends \Eccube\Twig\Template
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
        // line 15
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["menus"] = [0 => "mailmagazine", 1 => "mailmagazine"];
        // line 22
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/confirm.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.title"), "html", null, true);
    }

    // line 20
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
    }

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <script>
        function changeAction(action) {
            document.form1.action = action;
            document.form1.submit();
        }
        \$(function () {
            \$('#sendMailMagazine').on('click', function (e) {
                e.preventDefault();
                if (confirm('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_prepare_message"), "html", null, true);
        echo "')) {
                    \$(this).attr('disabled', 'disabled');
                    changeAction('";
        // line 35
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_prepare");
        echo "');
                }
                return false;
            });
            \$('#testSendModal input').on('keyup', function() {
                if (this.checkValidity()) {
                    \$(this).parents('div.form-group').removeClass('has-error');
                } else {
                    \$(this).parents('div.form-group').addClass('has-error');
                }
                if (\$('#testSendModal form').get(0).checkValidity()) {
                    \$('#sendTestMail').removeAttr('disabled');
                } else {
                    \$('#sendTestMail').attr('disabled', 'disabled');
                }
            });
            \$('#sendTestMail').on('click', function() {
                if (confirm('";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_test_message"), "html", null, true);
        echo "')) {
                    \$.post(\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_test");
        echo "\", {
                        '_token': \$('mail_magazine__token').val(),
                        'email': \$('#testEmail').val(),
                        'name': \$('#testName').val(),
                        'subject': \$('#mail_magazine_subject').val(),
                        'body': \$('#mail_magazine_body').val(),
                        'htmlBody': \$('#mail_magazine_htmlBody').val()
                    }).done(function(res) {
                        alert('";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_test_success_message"), "html", null, true);
        echo "');
                        \$('#testSendModal').modal('hide');
                    }).fail(function (res) {
                        alert('";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_test_fail_message"), "html", null, true);
        echo "');
                    });
                }
            })
        })
    </script>
";
    }

    // line 72
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.html"), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body mb-lg-5\">
                        <div class=\"row\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                        <th class=\"w-25\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.label_subject"), "html", null, true);
        echo "</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject_itm"] ?? null), 95, $this->source), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.label_body"), "html", null, true);
        echo "</th>
                                        <td><pre>";
        // line 99
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_itm"] ?? null), 99, $this->source), "html", null, true);
        echo "</pre></td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.label_body_html"), "html", null, true);
        echo "</th>
                                        <td><pre>";
        // line 103
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(($context["htmlBody_itm"] ?? null), 103, $this->source));
        echo "</pre></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"d-none\">
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 108, $this->source), 'rest');
        echo "
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
        // line 120
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine");
        echo "\"  onclick=\"changeAction('";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_select", ["id" => ($context["id"] ?? null)]), "html", null, true);
        echo "'); return false;\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.btn_back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-block btn-lg active\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#testSendModal\">
                                    ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.btn_send_test"), "html", null, true);
        echo "
                                </a>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-danger btn-block btn-lg\" id=\"sendMailMagazine\">
                                    ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.btn_send"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id=\"testSendModal\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.title"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label for=\"testEmail\" class=\"col-sm-2 control-label\">
                                ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.label_from"), "html", null, true);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"testEmail\" placeholder=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.placeholder_from"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["testMailTo"] ?? null), 156, $this->source), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"testName\" class=\"col-sm-2 control-label\">名前</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"testName\" placeholder=\"名前\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, true, 162), "name", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-conversion\" id=\"sendTestMail\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.btn_send"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">";
        // line 169
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
        return "MailMagazine42/Resource/template/admin/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 169,  297 => 168,  288 => 162,  277 => 156,  271 => 153,  262 => 147,  246 => 134,  238 => 129,  227 => 121,  221 => 120,  206 => 108,  198 => 103,  194 => 102,  188 => 99,  184 => 98,  178 => 95,  174 => 94,  159 => 82,  148 => 74,  145 => 73,  141 => 72,  130 => 64,  124 => 61,  113 => 53,  109 => 52,  89 => 35,  84 => 33,  74 => 25,  70 => 24,  63 => 20,  56 => 19,  51 => 15,  49 => 22,  47 => 17,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/confirm.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "form_theme" => 22);
        static $filters = array("escape" => 19, "trans" => 19, "purify" => 103, "raw" => 103);
        static $functions = array("url" => 35, "form_widget" => 74, "form_rest" => 108);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans', 'purify', 'raw'],
                ['url', 'form_widget', 'form_rest']
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
