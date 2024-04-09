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

/* Entry/activate.twig */
class __TwigTemplate_9cfc4f7f084505b1b1c8a61380a8b06b extends \Eccube\Twig\Template
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
        $context["body_class"] = "registration_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry/activate.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(完了)"), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"ec-registerCompleteRole\">
        <div class=\"ec-reportHeading\">
            <h2>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録ありがとうございます"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"ec-off3Grid ec-text-ac\">
            <div class=\"ec-off3Grid__cell\">
                <p class=\"ec-reportDescription\">";
        // line 27
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録が完了しました。
メールアドレスとパスワードでログイン後、ショッピングをお楽しみください。
"), "html", null, true));
        // line 29
        echo "</p>

            </div>
        </div>
        <div class=\"ec-off4Grid\">
            <div class=\"ec-off4Grid__cell\">
                ";
        // line 35
        if (($context["qtyInCart"] ?? null)) {
            // line 36
            echo "                    <a class=\"ec-blockBtn--action\" style=\"margin-bottom: 3px\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
            echo "</a>
                ";
        }
        // line 38
        echo "                <a class=\"ec-blockBtn--cancel\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Entry/activate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  88 => 36,  86 => 35,  78 => 29,  74 => 27,  67 => 23,  59 => 18,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Entry/activate.twig", "/var/www/html/src/Eccube/Resource/template/default/Entry/activate.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 35);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 29);
        static $functions = array("url" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'nl2br'],
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
