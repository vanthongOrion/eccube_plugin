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

/* @admin/Setting/Shop/calendar.twig */
class __TwigTemplate_664b3913b45a89799911561ab5a35812 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_calendar"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/calendar.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.calendar_setting"), "html", null, true);
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
        echo "    <style type=\"text/css\">
        .edit {
            display: none;
        }

        .has-error .list {
            display: none;
        }

        .has-error .edit {
            display: block;
        }
    </style>
";
    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.calendar_list_item td.action a.edit-button').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-calendar-' + id);
                \$(tr).find('.list').hide();
                \$(tr).find('.edit').show();
            });

            \$('.calendar_list_item .cancel').click(function() {
                location.href = '";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_calendar");
        echo "';
            });
        });
    </script>
";
    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.calendar_setting"), "html", null, true);
        echo "\">
                            <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.calendar_setting"), "html", null, true);
        echo "</span>
                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <colgroup>
                                <col width=\"5%\">
                                <col width=\"35%\">
                                <col width=\"20%\">
                                <col width=\"\">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.calendar.title"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.calendar.holiday"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 ps-3\"></th>
                                    <th class=\"border-top-0 pt-2 pb-2 ps-3 pe-5\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id=\"calendar_item_new\">
                                    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"";
        // line 83
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_calendar_new");
        echo "\">
                                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 84), 84, $this->source), 'widget');
        echo "
                                        <td class=\"align-middle ps-3\"></td>
                                        <td class=\"align-middle\" style=\"width:230px;\">
                                            <div class=\"input-group\">
                                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 88), 88, $this->source), 'widget');
        echo "
                                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 89), 89, $this->source), 'errors');
        echo "
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "holiday", [], "any", false, false, true, 93), 93, $this->source), 'widget');
        echo "
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "holiday", [], "any", false, false, true, 94), 94, $this->source), 'errors');
        echo "
                                        </td>
                                        <td class=\"align-middle col-3\"></td>
                                        <td class=\"align-middle pe-5\">
                                            <div class=\"row justify-content-end w-100\">
                                                <button class=\"btn btn-ec-regular px-4\" type=\"submit\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                            </div>
                                        </td>
                                    </form>
                                </tr>

                                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Calendars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Calendar"]) {
            // line 106
            echo "                                    <tr id=\"ex-calendar-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "\" class=\"calendar_list_item ";
            if ((($__internal_compile_0 = ($context["errors"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 106)] ?? null) : null)) {
                echo "has-error";
            }
            echo "\">
                                        <form name=\"edit-form\" id=\"edit-form_";
            // line 107
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_calendar");
            echo "\">
                                            ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["forms"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 108)] ?? null) : null), "_token", [], "any", false, false, true, 108), 108, $this->source), 'widget');
            echo "
                                            <input type=\"hidden\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "\" name=\"calendar_id\">
                                            <input type=\"hidden\" value=\"edit_inline\" name=\"mode\"/>
                                            <td class=\"align-middle ps-3\"><span>";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "</span></td>
                                            <td class=\"align-middle\">
                                                <div class=\"edit\">
                                                    ";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["forms"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 114)] ?? null) : null), "title", [], "any", false, false, true, 114), 114, $this->source), 'widget');
            echo "
                                                </div>
                                                <div class=\"list\">
                                                    <span>";
            // line 117
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "title", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"edit\">
                                                    ";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["forms"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 122)] ?? null) : null), "holiday", [], "any", false, false, true, 122), 122, $this->source), 'widget');
            echo "
                                                    ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["forms"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 123)] ?? null) : null), "holiday", [], "any", false, false, true, 123), 123, $this->source), 'errors');
            echo "
                                                </div>
                                                <div class=\"list\">
                                                    <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "holiday", [], "any", false, false, true, 126), 126, $this->source)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"edit\">
                                                    <button type=\"submit\" class=\"btn text-nowrap btn-ec-conversion\">";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                                    <button type=\"button\" class=\"btn text-nowrap btn-ec-sub cancel\" data-id=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                                </div>
                                            </td>
                                            <td class=\"align-middle action\">
                                                <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 float-end\">
                                                    <div class=\"row pe-2\">
                                                        <div class=\"col-6 text-center pe-0\">
                                                            <a class=\"btn btn-ec-actionIcon edit-button\" data-bs-toggle=\"tooltip\" data-id=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>

                                                        <div class=\"col-6 text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                                 title=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal_";
            // line 147
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 削除モーダル -->
                                                            <div class=\"modal fade\" id=\"DeleteModal_";
            // line 152
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                                                                 aria-labelledby=\"DeleteModal_";
            // line 153
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">
                                                                                ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
            echo "
                                                                            </h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start modal-message\">";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Calendar"], "title", [], "any", false, false, true, 163)]), "html", null, true);
            echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                                ";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                                                                            </button>
                                                                            <a class=\"btn btn-ec-delete\" href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_calendar_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Calendar"], "id", [], "any", false, false, true, 169)]), "html", null, true);
            echo "\"
                                                                                ";
            // line 170
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-confirm=\"false\">
                                                                                ";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 184,  356 => 171,  352 => 170,  348 => 169,  343 => 167,  336 => 163,  328 => 158,  320 => 153,  316 => 152,  308 => 147,  304 => 146,  292 => 139,  280 => 132,  276 => 131,  268 => 126,  262 => 123,  258 => 122,  250 => 117,  244 => 114,  238 => 111,  233 => 109,  229 => 108,  223 => 107,  214 => 106,  210 => 105,  201 => 99,  193 => 94,  189 => 93,  182 => 89,  178 => 88,  171 => 84,  167 => 83,  157 => 76,  153 => 75,  149 => 74,  132 => 60,  128 => 59,  121 => 54,  117 => 53,  108 => 47,  96 => 37,  92 => 36,  75 => 21,  71 => 20,  64 => 16,  57 => 15,  52 => 11,  50 => 18,  48 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/calendar.twig", "/var/www/html/src/Eccube/Resource/template/admin/Setting/Shop/calendar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 105, "if" => 106);
        static $filters = array("escape" => 15, "trans" => 15, "date_day" => 126);
        static $functions = array("url" => 47, "form_widget" => 84, "form_errors" => 89, "csrf_token_for_anchor" => 170);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'date_day'],
                ['url', 'form_widget', 'form_errors', 'csrf_token_for_anchor']
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
