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

/* Shopping/complete.twig */
class __TwigTemplate_cf8aeb428fcc67c05752445f89da9174 extends \Eccube\Twig\Template
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
        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文完了"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 25
        $context["step"] = 1;
        // line 26
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 27, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 28
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 32
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 33
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 34, $this->source), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 35
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 40
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 41, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 42
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 47, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 48
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 53, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 54
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-reportHeading\">
        <h2>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文ありがとうございました"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <p class=\"ec-reportDescription\">
                ";
        // line 69
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま、ご注文の確認メールをお送りさせていただきました。
万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがお問い合わせくださいますようお願いいたします。
"), "html", null, true));
        // line 71
        echo "
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 72)) {
            // line 73
            echo "                    <br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</strong>
                ";
        }
        // line 75
        echo "            </p>
            ";
        // line 76
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", [], "any", false, false, true, 76))) {
            // line 77
            echo "                ";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", [], "any", false, false, true, 77), 77, $this->source));
            echo "
            ";
        }
        // line 79
        echo "        </div>
    </div>
    <div class=\"ec-off4Grid\">
        ";
        // line 82
        if (($context["hasNextCart"] ?? null)) {
            // line 83
            echo "            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("購入を続ける"), "html", null, true);
            echo "</a></div>
        ";
        } else {
            // line 85
            echo "            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
            echo "</a></div>
        ";
        }
        // line 87
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 87,  202 => 85,  194 => 83,  192 => 82,  187 => 79,  181 => 77,  179 => 76,  176 => 75,  168 => 73,  166 => 72,  163 => 71,  159 => 69,  151 => 64,  139 => 55,  136 => 54,  133 => 53,  126 => 49,  123 => 48,  120 => 47,  113 => 43,  110 => 42,  107 => 41,  104 => 40,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  86 => 32,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  69 => 25,  59 => 18,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/complete.twig", "/var/www/html/src/Eccube/Resource/template/default/Shopping/complete.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 32);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 71, "purify" => 77, "raw" => 77);
        static $functions = array("is_granted" => 32, "url" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'nl2br', 'purify', 'raw'],
                ['is_granted', 'url']
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
