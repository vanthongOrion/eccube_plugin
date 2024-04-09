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

/* @admin/Order/mail_confirm.twig */
class __TwigTemplate_fb1b5df38399676c277a0a9a71f43621 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "order", 1 => "order_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/mail_confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<script>
\$(function() {
    \$('#template-change').on('change', function() {
        \$('#mode').val('change');
        \$('#order-mail-form').submit();
        return false;
    });

    \$('#back').on('click', function(e) {
        e.preventDefault();
        \$('#mode').val('back');
        \$('#order-mail-form').submit();
        return false;
    });
});
</script>
";
    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_destination_info"), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailTo\" aria-expanded=\"false\" aria-controls=\"mailTo\"></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailTo\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</span></div>
                            <div class=\"col-2\"><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "（";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "）</span><br>〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</div>
                            <div class=\"col-2\"><span>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>
                            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 65)) {
            // line 66
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 66)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "productName", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
                                ";
            // line 67
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 67)) > 2)) {
                // line 68
                echo "                                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_purchase_product_count", ["%count%" => (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 68), 68, $this->source)) - 1)]);
                echo "
                                ";
            }
            // line 70
            echo "                            ";
        }
        // line 71
        echo "                            </span></div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-10\"><span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatusColor", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "; border-color: ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatusColor", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <form id=\"order-mail-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 81)]), "html", null, true);
        echo "\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 82), 82, $this->source), 'widget');
        echo "
                <input id=\"mode\" type=\"hidden\" name=\"mode\">

                <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\"><span class=\"card-title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_mail_info"), "html", null, true);
        echo "</span></div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailCreate\" aria-expanded=\"false\" aria-controls=\"mailCreate\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailCreate\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\"><span>";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_template"), "html", null, true);
        echo "</span></div>
                            </div>
                            <div class=\"col\">
                                ";
        // line 99
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 99), "vars", [], "any", false, false, true, 99), "data", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 100), 100, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 106
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 106), "vars", [], "any", false, false, true, 106), "data", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 107), 107, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_body"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                    ";
        // line 114
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 114), "vars", [], "any", false, false, true, 114), "data", [], "any", false, false, true, 114), 114, $this->source)), "html", null, true));
        echo "
                                    <div style=\"display: none\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 115), 115, $this->source), 'widget');
        echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\"><a class=\"c-baseLink\" href=\"javascript:void(0)\" id=\"back\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\"><button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"complete\">";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send"), "html", null, true);
        echo "</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order/mail_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 130,  283 => 125,  270 => 115,  266 => 114,  260 => 111,  253 => 107,  249 => 106,  242 => 104,  235 => 100,  231 => 99,  225 => 96,  214 => 88,  205 => 82,  201 => 81,  188 => 75,  184 => 74,  179 => 71,  176 => 70,  170 => 68,  168 => 67,  163 => 66,  161 => 65,  156 => 63,  140 => 62,  136 => 61,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  107 => 47,  98 => 40,  94 => 39,  74 => 21,  70 => 20,  63 => 16,  56 => 15,  51 => 11,  49 => 18,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/mail_confirm.twig", "/var/www/html/src/Eccube/Resource/template/admin/Order/mail_confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 65);
        static $filters = array("escape" => 15, "trans" => 15, "price" => 58, "length" => 67, "raw" => 68, "nl2br" => 114);
        static $functions = array("url" => 81, "form_widget" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans', 'price', 'length', 'raw', 'nl2br'],
                ['url', 'form_widget']
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
