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

/* Coupon42/Resource/template/admin/index.twig */
class __TwigTemplate_918cdfe96509a4c7dc77fd252daf7a46 extends \Eccube\Twig\Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "order", 1 => "plugin_coupon"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Coupon42/Resource/template/admin/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.subtitle"), "html", null, true);
    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"normal\">";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.number", ["%number%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["Coupons"] ?? null), 24, $this->source))]);
        echo "</span></div>
                    <div class=\"card-body p-0\">
                            <table class=\"table tabel-sm\">
                                <thead>
                                <tr>
                                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col01"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col02"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col03"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col04"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col05"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col06"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col07"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col08"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col09"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col10"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col11"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col12"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Coupons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Coupon"]) {
            // line 45
            echo "                                <tr class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "enable_flag", [], "any", false, false, true, 45) == 0)) {
                echo "active";
            }
            echo "\">
                                    <td class=\"coupon_id\">";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</td>
                                    <td class=\"coupon_cd\">";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_cd", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</td>
                                    <td class=\"coupon_name\">";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</td>
                                    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_type", [], "any", false, false, true, 49) == 1)) {
                // line 50
                echo "                                        <td class=\"coupon_type\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_type.product"), "html", null, true);
                echo "</td>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["Coupon"], "coupon_type", [], "any", false, false, true, 51) == 2)) {
                // line 52
                echo "                                        <td class=\"coupon_type\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_type.category"), "html", null, true);
                echo "</td>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 53
$context["Coupon"], "coupon_type", [], "any", false, false, true, 53) == 3)) {
                // line 54
                echo "                                        <td class=\"coupon_type\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_type.all"), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 56
                echo "                                        <td class=\"coupon_type\"></td>
                                    ";
            }
            // line 58
            echo "
                                    ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_member", [], "any", false, false, true, 59) == 1)) {
                // line 60
                echo "                                        <td class=\"coupon_member\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_member.yes"), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 62
                echo "                                        <td class=\"coupon_member\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_member.no"), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 64
            echo "
                                    ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "discount_type", [], "any", false, false, true, 65) == 1)) {
                // line 66
                echo "                                        <td class=\"coupon_discount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "discount_price", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
                echo "</td>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 67
$context["Coupon"], "discount_type", [], "any", false, false, true, 67) == 2)) {
                // line 68
                echo "                                        <td class=\"coupon_discount\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "discount_rate", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo " %</td>
                                    ";
            } else {
                // line 70
                echo "                                        <td class=\"coupon_discount\"></td>
                                    ";
            }
            // line 72
            echo "
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_use_time", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_release", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_lower_limit", [], "any", false, false, true, 74), 74, $this->source)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "available_from_date", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "available_to_date", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
            echo "</td>

                                    <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "</a></td>
                                    <td>
                                        <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 79)]), "html", null, true);
            echo "\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-confirm=\"false\" data-method=\"put\">
                                        ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "enable_flag", [], "any", false, false, true, 80) == 1)) {
                // line 81
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 83
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                echo "
                                        ";
            }
            // line 85
            echo "                                        </a>
                                    </td>
                                    <td>
                                        <a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
            // line 88
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "\" data-bs-tooltip=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                        </a>

                                        <div class=\"modal fade\" id=\"confirmModal-";
            // line 92
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\"
                                             role=\"dialog\"
                                             aria-labelledby=\"confirmModal-";
            // line 94
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title fw-bold\">
                                                            ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.delete__confirm_title"), "html", null, true);
            echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body text-start\">
                                                        <p class=\"text-start\">
                                                            ";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.delete__confirm_message"), "html", null, true);
            echo "</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                data-bs-dismiss=\"modal\">";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
            echo "
                                                        </button>
                                                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 110)]), "html", null, true);
            echo "\" class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"delete\">
                                                            ";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
            echo "
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                </tbody>
                            </table>
                    </div>
                </div>
            </div>

            <div class=\"card rounded border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center\">
                        <a href=\"";
        // line 130
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_new");
        echo "\" class=\"btn btn-ec-regular ps-4 pe-4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.create_button"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 130,  341 => 121,  325 => 111,  319 => 110,  314 => 108,  307 => 104,  299 => 99,  291 => 94,  286 => 92,  277 => 88,  272 => 85,  266 => 83,  260 => 81,  258 => 80,  252 => 79,  245 => 77,  238 => 75,  234 => 74,  228 => 73,  225 => 72,  221 => 70,  215 => 68,  213 => 67,  208 => 66,  206 => 65,  203 => 64,  197 => 62,  191 => 60,  189 => 59,  186 => 58,  182 => 56,  176 => 54,  174 => 53,  169 => 52,  167 => 51,  162 => 50,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  141 => 45,  137 => 44,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  78 => 24,  71 => 19,  67 => 18,  60 => 16,  53 => 15,  48 => 11,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/index.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/admin/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 44, "if" => 45);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 24, "length" => 24, "price" => 66, "number_format" => 73, "date_format" => 75);
        static $functions = array("url" => 77, "csrf_token_for_anchor" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'raw', 'length', 'price', 'number_format', 'date_format'],
                ['url', 'csrf_token_for_anchor']
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
