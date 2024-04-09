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

/* @admin/Setting/Shop/order_status.twig */
class __TwigTemplate_7e73b806f08866bf982f8a6e33ce03ed extends \Eccube\Twig\Template
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
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_order_status"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/order_status.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status_setting"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <form id=\"form\" method=\"post\" action=\"";
        // line 25
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_order_status");
        echo "\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 26), 26, $this->source), 'widget');
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.order_status"), "html", null, true);
        echo "\">
                                <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.order_status"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body p-0\">
                            <table class=\"table table-sm\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.id"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.customer_order_status_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.customer_order_status_name"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.admin_order_status_name"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.color"), "html", null, true);
        echo "\">
                                            <span>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.color"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.display_order_count"), "html", null, true);
        echo "\">
                                            <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.display_order_count"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatuses", [], "any", false, false, true, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 62
            echo "                                    <tr>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "vars", [], "any", false, false, true, 64), "data", [], "any", false, false, true, 64), "id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "customer_order_status_name", [], "any", false, false, true, 67), 67, $this->source), 'widget');
            echo "
                                            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "customer_order_status_name", [], "any", false, false, true, 68), 68, $this->source), 'errors');
            echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", [], "any", false, false, true, 71), 71, $this->source), 'widget');
            echo "
                                            ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", [], "any", false, false, true, 72), 72, $this->source), 'errors');
            echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"input-group\" >
                                                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "color", [], "any", false, false, true, 76), 76, $this->source), 'widget', ["attr" => ["class" => "form-control-color"]]);
            echo "
                                            </div>
                                            ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "color", [], "any", false, false, true, 78), 78, $this->source), 'errors');
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "display_order_count", [], "any", false, false, true, 81), 81, $this->source), 'widget');
            echo "
                                            ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "display_order_count", [], "any", false, false, true, 82), 82, $this->source), 'errors');
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
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
        return "@admin/Setting/Shop/order_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 101,  210 => 86,  200 => 82,  196 => 81,  190 => 78,  185 => 76,  178 => 72,  174 => 71,  168 => 68,  164 => 67,  158 => 64,  154 => 62,  150 => 61,  141 => 55,  137 => 54,  130 => 50,  126 => 49,  120 => 46,  113 => 42,  109 => 41,  103 => 38,  92 => 30,  88 => 29,  82 => 26,  78 => 25,  73 => 22,  69 => 21,  62 => 17,  55 => 16,  50 => 12,  48 => 19,  46 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/order_status.twig", "/var/www/html/src/Eccube/Resource/template/admin/Setting/Shop/order_status.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "for" => 61);
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array("url" => 25, "form_widget" => 26, "form_errors" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_errors']
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
