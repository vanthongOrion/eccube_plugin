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

/* Help/about.twig */
class __TwigTemplate_1bdfd79afa50c1f48526105ec9c916da extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/about.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-borderedDefs\">
                ";
        // line 22
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", true, true, true, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 22))) : ("")))) {
            // line 23
            echo "                    <dl id=\"help_about_box__shop_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 30
        echo "                ";
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", true, true, true, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, true, 30))) : ("")))) {
            // line 31
            echo "                    <dl id=\"help_about_box__company_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 38
        echo "
                ";
        // line 39
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", true, true, true, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, true, 39))) : ("")))) {
            // line 40
            echo "                    <dl id=\"help_about_box__address\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "<br />
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "pref", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "addr01", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "addr02", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
                        </dd>
                    </dl>
                ";
        }
        // line 49
        echo "
                ";
        // line 50
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", true, true, true, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, true, 50))) : ("")))) {
            // line 51
            echo "                    <dl id=\"help_about_box__phone_number\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 58
        echo "
                ";
        // line 59
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", true, true, true, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, true, 59))) : ("")))) {
            // line 60
            echo "                    <dl id=\"help_about_box__business_hour\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店舗営業時間"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", true, true, true, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, true, 68))) : ("")))) {
            // line 69
            echo "                    <dl id=\"help_about_box__good_traded\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("取り扱い商品"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 73
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, true, 73), 73, $this->source), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", true, true, true, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, true, 77))) : ("")))) {
            // line 78
            echo "                    <dl id=\"help_about_box__message\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メッセージ"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 82
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, true, 82), 82, $this->source), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 85
        echo "            </div>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Help/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 85,  202 => 82,  197 => 80,  193 => 78,  191 => 77,  188 => 76,  182 => 73,  177 => 71,  173 => 69,  171 => 68,  168 => 67,  162 => 64,  157 => 62,  153 => 60,  151 => 59,  148 => 58,  142 => 55,  137 => 53,  133 => 51,  131 => 50,  128 => 49,  119 => 45,  114 => 44,  109 => 42,  105 => 40,  103 => 39,  100 => 38,  94 => 35,  89 => 33,  85 => 31,  82 => 30,  76 => 27,  71 => 25,  67 => 23,  65 => 22,  57 => 17,  52 => 14,  48 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/about.twig", "/var/www/html/src/Eccube/Resource/template/default/Help/about.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("escape" => 17, "trans" => 17, "default" => 22, "nl2br" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans', 'default', 'nl2br'],
                []
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
