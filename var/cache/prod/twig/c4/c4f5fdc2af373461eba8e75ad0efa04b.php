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

/* MailMagazine42/Resource/template/admin/history_condition.twig */
class __TwigTemplate_b77dd249887f15a1cfb30b69edeef0b3 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_condition.twig", 10);
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
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 26
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "multi", [], "any", false, false, true, 26))) {
            // line 27
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 29
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "multi", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 31
        echo "
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 37
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "customer_status", [], "any", false, false, true, 37))) {
            // line 38
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 40
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "customer_status", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 42
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 47
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "sex", [], "any", false, false, true, 47))) {
            // line 48
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 50
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "sex", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 52
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 57
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_month", [], "any", false, false, true, 57))) {
            // line 58
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 60
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_month", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 62
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 67
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_start", [], "any", false, false, true, 67))) {
            // line 68
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_start", [], "any", false, false, true, 70), 70, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                                ～
                                ";
        // line 73
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_end", [], "any", false, false, true, 73))) {
            // line 74
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 76
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_end", [], "any", false, false, true, 76), 76, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 78
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 83
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "pref", [], "any", false, false, true, 83))) {
            // line 84
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 86
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "pref", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 88
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 93
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "phone_number", [], "any", false, false, true, 93))) {
            // line 94
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 96
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "phone_number", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 98
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 103
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_start", [], "any", false, false, true, 103))) {
            // line 104
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 106
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_start", [], "any", false, false, true, 106), 106, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 108
        echo "                                ～
                                ";
        // line 109
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_end", [], "any", false, false, true, 109))) {
            // line 110
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 112
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_end", [], "any", false, false, true, 112), 112, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 114
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 119
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_start", [], "any", false, false, true, 119))) {
            // line 120
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 122
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_start", [], "any", false, false, true, 122), 122, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 124
        echo "                                ～
                                ";
        // line 125
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_end", [], "any", false, false, true, 125))) {
            // line 126
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 128
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_end", [], "any", false, false, true, 128), 128, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 130
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 135
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_start", [], "any", false, false, true, 135))) {
            // line 136
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 138
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_start", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 140
        echo "                                ～
                                ";
        // line 141
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_end", [], "any", false, false, true, 141))) {
            // line 142
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 144
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_end", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 146
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 151
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_start", [], "any", false, false, true, 151))) {
            // line 152
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 154
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_start", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 156
        echo "                                ～
                                ";
        // line 157
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_end", [], "any", false, false, true, 157))) {
            // line 158
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 160
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_end", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 162
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 167
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_product_name", [], "any", false, false, true, 167))) {
            // line 168
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 170
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_product_name", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 172
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 177
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_start", [], "any", false, false, true, 177))) {
            // line 178
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 180
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_start", [], "any", false, false, true, 180), 180, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 182
        echo "                                ～
                                ";
        // line 183
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_end", [], "any", false, false, true, 183))) {
            // line 184
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 186
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_end", [], "any", false, false, true, 186), 186, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 188
        echo "                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"";
        // line 200
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history");
        echo "\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.preview.btn_back"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/history_condition.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 201,  503 => 200,  489 => 188,  483 => 186,  477 => 184,  475 => 183,  472 => 182,  466 => 180,  460 => 178,  458 => 177,  453 => 175,  448 => 172,  442 => 170,  436 => 168,  434 => 167,  429 => 165,  424 => 162,  418 => 160,  412 => 158,  410 => 157,  407 => 156,  401 => 154,  395 => 152,  393 => 151,  388 => 149,  383 => 146,  377 => 144,  371 => 142,  369 => 141,  366 => 140,  360 => 138,  354 => 136,  352 => 135,  347 => 133,  342 => 130,  336 => 128,  330 => 126,  328 => 125,  325 => 124,  319 => 122,  313 => 120,  311 => 119,  306 => 117,  301 => 114,  295 => 112,  289 => 110,  287 => 109,  284 => 108,  278 => 106,  272 => 104,  270 => 103,  265 => 101,  260 => 98,  254 => 96,  248 => 94,  246 => 93,  241 => 91,  236 => 88,  230 => 86,  224 => 84,  222 => 83,  217 => 81,  212 => 78,  206 => 76,  200 => 74,  198 => 73,  195 => 72,  189 => 70,  183 => 68,  181 => 67,  176 => 65,  171 => 62,  165 => 60,  159 => 58,  157 => 57,  152 => 55,  147 => 52,  141 => 50,  135 => 48,  133 => 47,  128 => 45,  123 => 42,  117 => 40,  111 => 38,  109 => 37,  104 => 35,  98 => 31,  92 => 29,  86 => 27,  84 => 26,  79 => 24,  71 => 18,  67 => 17,  60 => 15,  53 => 14,  48 => 10,  46 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/history_condition.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/history_condition.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 26);
        static $filters = array("escape" => 14, "trans" => 14, "date" => 70);
        static $functions = array("url" => 200);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'date'],
                ['url']
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
