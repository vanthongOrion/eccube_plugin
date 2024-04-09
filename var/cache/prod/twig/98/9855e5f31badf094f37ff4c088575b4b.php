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

/* @admin/two_factor_auth_set.twig */
class __TwigTemplate_2cb9b87736f8d9b307eb523c93abe838 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/login_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/login_frame.twig", "@admin/two_factor_auth_set.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<script>
\$(function () {
    \$(\"#qrcode\").qrcode({
        size: 200,
        fill: '#000',
        text: 'otpauth://totp/";
        // line 21
        echo twig_escape_filter($this->env, twig_urlencode_filter("EC-CUBE:"), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 21), 21, $this->source)), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter(" - "), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Member"] ?? null), "name", [], "any", false, false, true, 21), 21, $this->source)), "html", null, true);
        echo "?secret=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["auth_key"] ?? null), 21, $this->source), "html", null, true);
        echo "&issuer=";
        echo twig_escape_filter($this->env, twig_urlencode_filter("EC-CUBE"), "html", null, true);
        echo "',
        radius: 0,
        quiet: 0,
        mode: 0, // 0: normal , 1: label strip , 2: label box , 3: image strip , 4: image box
        mSize: 0.1,
        mPosX: 0.5,
        mPosY: 0.5,
        label: 'no label',
        fontname: 'sans',
        fontcolor: '#000',
        image: null
    });
});
</script>
";
    }

    // line 37
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        <style>
        #qrcode canvas { width: 150px; }
        </style>
    <div class=\"container\" style=\"margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4\">
                <div class=\"text-center p-5 bg-white\">
                    ";
        // line 45
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/alert.twig");
        echo "
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 46
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_two_factor_auth_set");
        echo "\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 47), 47, $this->source), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "auth_key", [], "any", false, false, true, 48), 48, $this->source), 'widget');
        echo "
                        <h5 class=\"mb-3\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.two_factor_auth_title"), "html", null, true);
        echo "</h5>
                        <p class=\"mb-3 text-start\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.two_factor_auth.qr_code"), "html", null, true);
        echo "</p>
                        <div id=\"qrcode\" class=\"mb-3\"></div>
                        ";
        // line 52
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 53
            echo "                            <div class=\"text-danger mb-3 text-start small\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error"] ?? null), 53, $this->source), "html", null, true);
            echo "</div>
                        ";
        }
        // line 55
        echo "                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"mb-3 d-flex justify-content-center\">
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 58), 58, $this->source), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "admin.setting.system.two_factor_auth.device_token", "autofocus" => true]]);
        echo "
                                </div>
                                <p class=\"mb-3 text-start\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 60), 60, $this->source), 'errors');
        echo "</p>
                            </div>
                            <div class=\"col-12\">
                            \t<button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class=\"col-12\">
                <p class=\"text-center mt-3\">
                    <small>Copyright &copy; 2000-";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " EC-CUBE CO.,LTD. All Rights Reserved.</small>
                </p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@admin/two_factor_auth_set.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 72,  151 => 63,  145 => 60,  140 => 58,  135 => 55,  129 => 53,  127 => 52,  122 => 50,  118 => 49,  114 => 48,  110 => 47,  106 => 46,  102 => 45,  93 => 38,  89 => 37,  63 => 21,  56 => 16,  52 => 15,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/two_factor_auth_set.twig", "/var/www/html/src/Eccube/Resource/template/admin/two_factor_auth_set.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "if" => 52);
        static $filters = array("escape" => 21, "url_encode" => 21, "trans" => 49, "date" => 72);
        static $functions = array("include" => 45, "path" => 46, "form_widget" => 47, "form_errors" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'if'],
                ['escape', 'url_encode', 'trans', 'date'],
                ['include', 'path', 'form_widget', 'form_errors']
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
