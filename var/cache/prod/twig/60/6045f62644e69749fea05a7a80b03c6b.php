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

/* Mail/contact_mail.twig */
class __TwigTemplate_c340cb73ccd481e6fd82440c44fc6b52 extends \Eccube\Twig\Template
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
        // line 12
        echo "※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 16), 16, $this->source), "safe_textmail", null, true);
        echo "よりお問い合わせされた方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name01", [], "any", false, false, true, 23), 23, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name02", [], "any", false, false, true, 23), 23, $this->source), "safe_textmail", null, true);
        echo " 様

以下のお問い合わせを受付致しました。
確認次第ご連絡いたしますので、少々お待ちください。

お名前：";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name01", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name02", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana01", [], "any", false, false, true, 28) || twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana02", [], "any", false, false, true, 28))) {
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana01", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana02", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
            echo ")";
        }
        echo " 様
郵便番号：";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "postal_code", [], "any", false, false, true, 29)) {
            echo "〒";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "postal_code", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
        }
        // line 30
        echo "
住所：";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pref", [], "any", false, true, true, 31), "name", [], "any", true, true, true, 31)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pref", [], "any", false, false, true, 31), "name", [], "any", false, false, true, 31), 31, $this->source), "safe_textmail", null, true);
        }
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr01", [], "any", false, false, true, 31), 31, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr02", [], "any", false, false, true, 31), 31, $this->source), "safe_textmail", null, true);
        echo "
電話番号：";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "phone_number", [], "any", false, false, true, 32), 32, $this->source), "safe_textmail", null, true);
        echo "
メールアドレス：";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, true, 33), 33, $this->source), "safe_textmail", null, true);
        echo "
お問い合わせ内容：

";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "contents", [], "any", false, false, true, 36), 36, $this->source), "safe_textmail", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Mail/contact_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  102 => 33,  98 => 32,  89 => 31,  86 => 30,  81 => 29,  68 => 28,  58 => 23,  51 => 19,  45 => 16,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/contact_mail.twig", "/var/www/html/src/Eccube/Resource/template/default/Mail/contact_mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 11, "if" => 28);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['autoescape', 'if'],
                ['escape'],
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
