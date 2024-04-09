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

/* MailMagazine42/Resource/template/admin/template_list.twig */
class __TwigTemplate_1a54b5102057eedd590d4bc1ef3afadc extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "mailmagazine", 1 => "mailmagazine_template"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/template_list.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.title"), "html", null, true);
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
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.card_title"), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_created_date"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_subject"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_edit"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_del"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_review"), "html", null, true);
        echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TemplateList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Template"]) {
            // line 46
            echo "                                <tr>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "create_date", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "subject", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_template_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 49)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_edit"), "html", null, true);
            echo "</a></td>
                                    <td>
                                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_del"), "html", null, true);
            echo "</a>
                                        <div id=\"deleteModal";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h4 class=\"modal-title\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.modal_del_message"), "html", null, true);
            echo "</h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-dismiss=\"modal\">
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
            echo "
                                                        </button>
                                                        <form action=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 62)]), "html", null, true);
            echo "\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                                                            <button type=\"submit\" class=\"btn btn-ec-delete\">
                                                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
            echo "
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_template_preview", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 74)]), "html", null, true);
            echo "\">
                                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_review"), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"row justify-content-md-center mb-4 \">
                    <div class=\"col-auto\">
                        <a class=\"btn btn-ec-regular ps-4 pe-4\" href=\"";
        // line 86
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_template_regist");
        echo "\">
                            ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_new"), "html", null, true);
        echo "
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
        return "MailMagazine42/Resource/template/admin/template_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 87,  209 => 86,  201 => 80,  190 => 75,  186 => 74,  174 => 65,  169 => 63,  165 => 62,  160 => 60,  153 => 56,  146 => 52,  140 => 51,  133 => 49,  129 => 48,  125 => 47,  122 => 46,  118 => 45,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  81 => 26,  71 => 18,  67 => 17,  60 => 15,  53 => 14,  48 => 10,  46 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/template_list.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/template_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "for" => 45);
        static $filters = array("escape" => 14, "trans" => 14, "date_day" => 47);
        static $functions = array("url" => 49, "csrf_token" => 63, "constant" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'trans', 'date_day'],
                ['url', 'csrf_token', 'constant']
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
