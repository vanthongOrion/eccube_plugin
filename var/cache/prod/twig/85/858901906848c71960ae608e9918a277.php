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

/* SiteKit42/Resource/template/admin/config.twig */
class __TwigTemplate_067532e09b5d48368850a65483cb60a7 extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "SiteKit42/Resource/template/admin/config.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Site Kit";
    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "設定";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\"><span>Google アカウント設定</span></div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-12 mb-2\">
                            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["oauth_url"] ?? null), 22, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary\">Googleアカウント連携</a>
                        </div>
                        ";
        // line 24
        if (($context["user_info"] ?? null)) {
            // line 25
            echo "                        <div class=\"col-12 mb-2\">
                            (<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user_info"] ?? null), "picture", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\" height=\"20\" width=\"20\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user_info"] ?? null), "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo " で連携中)
                        </div>
                        ";
        }
        // line 29
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"c-conversionArea\">
    <div class=\"c-conversionArea__container\">
        <div class=\"row justify-content-between align-items-center\">
            <div class=\"col-6\">
                <div class=\"c-conversionArea__leftBlockItem\">
                    <a class=\"c-baseLink\"
                       href=\"";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin");
        echo "\">
                        <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                        <span>プラグイン一覧</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteKit42/Resource/template/admin/config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  114 => 29,  106 => 26,  103 => 25,  101 => 24,  96 => 22,  85 => 13,  81 => 12,  75 => 10,  69 => 8,  62 => 6,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Resource/template/admin/config.twig", "/var/www/html/app/Plugin/SiteKit42/Resource/template/admin/config.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 24);
        static $filters = array("escape" => 22);
        static $functions = array("url" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
