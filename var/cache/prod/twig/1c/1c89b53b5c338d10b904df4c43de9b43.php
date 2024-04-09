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

/* MailMagazine42/Resource/template/admin/history_result.twig */
class __TwigTemplate_79eae6407f915f1c497786d55e6d78de extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_result.twig", 10);
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
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 22
        if ((($context["pagination"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 22) > 0))) {
            // line 23
            echo "                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">
                                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.number_record"), "html", null, true);
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</strong>
                                    </span>
                                </div>
                                <div class=\"col-4 text-end\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-end\">
                                ";
            // line 39
            echo "                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"form-select\" onchange=\"location = this.value;\">
                                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 42
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 42) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 43
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("plugin_mail_magazine_history_result_page", ["id" => ($context["historyId"] ?? null), "page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 43)]), "html", null, true);
                echo "\">
                                                ";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 44)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                    </select>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mb-lg-5\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_status"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_from"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_name"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 65
                echo "                                    <tr>
                                        <td class=\"align-middle text-start\">
                                            ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, true, 67) == "0")) {
                    // line 68
                    echo "                                                <span class=\"badge badge-ec-blue\">
                                                    ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.status_unsend"), "html", null, true);
                    echo "
                                                </span>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 71
$context["result"], "status", [], "any", false, false, true, 71) == "1")) {
                    // line 72
                    echo "                                                <span class=\"badge badge-ec-green\">
                                                    ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.status_sent"), "html", null, true);
                    echo "
                                                </span>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 75
$context["result"], "status", [], "any", false, false, true, 75) == "2")) {
                    // line 76
                    echo "                                                <span class=\"badge badge-ec-red\">
                                                    ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.status_fail"), "html", null, true);
                    echo "
                                                </span>
                                    ";
                } else {
                    // line 80
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "
                                            ";
                }
                // line 82
                echo "                                        </td>
                                        <td class=\"align-middle text-start\">";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "customerId", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle text-start\">";
                // line 84
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "email", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle text-start\">";
                // line 85
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 91) > 0)) {
                // line 92
                echo "                                    ";
                $this->loadTemplate("@MailMagazine42/admin/history_result_pager.twig", "MailMagazine42/Resource/template/admin/history_result.twig", 92)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 92), "routes" => "plugin_mail_magazine_history_result_page"]));
                // line 93
                echo "                                ";
            }
            // line 94
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 97
            echo "                        <div class=\"card-body mb-lg-5\">
                            <div class=\"row\">
                                <div class=\"col-auto\">
                                    ";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.no_record"), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 105
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"";
        // line 114
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history");
        echo "\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 115
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
        return "MailMagazine42/Resource/template/admin/history_result.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 115,  266 => 114,  255 => 105,  247 => 100,  242 => 97,  237 => 94,  234 => 93,  231 => 92,  229 => 91,  224 => 88,  215 => 85,  211 => 84,  207 => 83,  204 => 82,  198 => 80,  192 => 77,  189 => 76,  187 => 75,  182 => 73,  179 => 72,  177 => 71,  172 => 69,  169 => 68,  167 => 67,  163 => 65,  159 => 64,  152 => 60,  148 => 59,  144 => 58,  140 => 57,  127 => 46,  119 => 44,  114 => 43,  109 => 42,  105 => 41,  101 => 39,  85 => 27,  79 => 23,  77 => 22,  71 => 18,  67 => 17,  60 => 15,  53 => 14,  48 => 10,  46 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/history_result.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/history_result.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 22, "for" => 41, "include" => 92);
        static $filters = array("escape" => 14, "trans" => 14);
        static $functions = array("path" => 43, "url" => 114);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans'],
                ['path', 'url']
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
