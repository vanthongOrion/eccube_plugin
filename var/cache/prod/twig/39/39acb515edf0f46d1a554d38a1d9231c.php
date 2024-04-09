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

/* Mypage/navi.twig */
class __TwigTemplate_5b050807860ae5469587a880d1bfcc31 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item ";
        // line 13
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, true, 16)) {
            // line 17
            echo "            <li class=\"ec-navlistRole__item ";
            if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "favorite")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 18
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り一覧"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 21
        echo "        <li class=\"ec-navlistRole__item ";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_change");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員情報編集"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 24
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "delivery")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 25
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先一覧"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 27
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "withdraw")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 28
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_withdraw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会手続き"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>

<div class=\"ec-welcomeMsg\">
    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ようこそ%last_name% %first_name%さん", ["%last_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, true, 34), "name01", [], "any", false, false, true, 34), "%first_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, true, 34), "name02", [], "any", false, false, true, 34)]), "html", null, true);
        echo "</p>
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_point", [], "any", false, false, true, 35)) {
            // line 36
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在の所持ポイントは %point%pt です。", ["%point%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, true, 36), "point", [], "any", false, false, true, 36), 36, $this->source))]), "html", null, true);
            echo "</p>
    ";
        }
        // line 38
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "Mypage/navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  123 => 36,  121 => 35,  117 => 34,  106 => 28,  100 => 27,  93 => 25,  87 => 24,  80 => 22,  73 => 21,  65 => 18,  58 => 17,  56 => 16,  49 => 14,  43 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/navi.twig", "/var/www/html/src/Eccube/Resource/template/default/Mypage/navi.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("default" => 13, "escape" => 14, "trans" => 14, "number_format" => 36);
        static $functions = array("url" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['default', 'escape', 'trans', 'number_format'],
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
