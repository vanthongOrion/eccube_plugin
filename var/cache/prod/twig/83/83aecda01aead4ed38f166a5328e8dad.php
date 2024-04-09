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

/* error.twig */
class __TwigTemplate_3275bb8e4a991d30a38ea6c4b22641b8 extends \Eccube\Twig\Template
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
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_title"] ?? null), 16, $this->source), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"ec-layoutRole\">
    <div class=\"ec-404Role\">
        <div class=\"ec-off4Grid\">
            <div class=\"ec-off4Grid__cell\">
                <div style=\"font-size:100px;text-align:center;\">
                    <div class=\"ec-404Role__icon ec-icon\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-pale.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <p class=\"ec-404Role__title ec-reportHeading\">";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_title"] ?? null), 30, $this->source), "html", null, true);
        echo "</p>
                <p class=\"ec-404Role__description ec-reportDescription\">";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_message"] ?? null), 31, $this->source), "html", null, true);
        echo "</p>
                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 32), "basePath", [], "any", false, false, true, 32), 32, $this->source) . "/"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  80 => 31,  76 => 30,  70 => 27,  58 => 18,  54 => 17,  50 => 16,  42 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.twig", "/var/www/html/src/Eccube/Resource/template/default/error.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12, "trans" => 32);
        static $functions = array("asset" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
                ['asset']
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
