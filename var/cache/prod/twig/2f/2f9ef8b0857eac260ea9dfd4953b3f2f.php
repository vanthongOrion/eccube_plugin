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

/* @admin/Store/plugin_confirm_uninstall_panel.twig */
class __TwigTemplate_57514e624ba4c5aee1c00bc3077a6ef0 extends \Eccube\Twig\Template
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
        $context["is_supported_eccube_version"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_supported_eccube_version", [], "any", false, false, true, 11);
        // line 12
        echo "<div class=\"plugin-panel ";
        if ((($context["is_supported_eccube_version"] ?? null) == 0)) {
            echo "plugin-panel-not";
        }
        echo "\">
    <div class=\"plugin-logo\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"img-rounded\" src=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_image_url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\"></a>
    </div>
    <div class=\"plugin-content-top\">
        <div class=\"plugin-title\">
            <a class=\"plugin-name\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</a>
        </div>
        <div class=\"plugin-description\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "summary", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"plugin-description\">
            ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "promotion", [], "any", false, false, true, 24) == 1)) {
            // line 25
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getEllipsis($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, true, 25), 25, $this->source), 500), "html", null, true);
            echo "
            ";
        } else {
            // line 27
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getEllipsis($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, true, 27), 27, $this->source), 400), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"plugin-content-bottom\">
        <dl class=\"plugin-meta dl-horizontal\">
            <dt class=\"plugin-price\">価格</dt><dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-download\">DL数</dt><dd>";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "download_number", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-version\">プラグインバージョン</dt><dd>";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-update\">最終更新日</dt><dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "last_update_date", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-eccubeversion\">EC-CUBE対応バージョン</dt><dd>";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "eccube_version", [], "any", false, false, true, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["version"], 38, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 38) == false)) {
                echo ", ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</dd>
            <dt class=\"plugin-licence\">ライセンス</dt><dd>";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "licence", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</dd>
        </dl>
        ";
        // line 41
        if ((($context["is_supported_eccube_version"] ?? null) == 0)) {
            // line 42
            echo "            <p class=\"text-danger\">このプラグインはEC-CUBE ";
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
            echo "をサポートしていないため、正常に動作しない可能性があります。</p>
        ";
        }
        // line 44
        echo "        <p class=\"plugin-developer\">
            <strong>制作者</strong> : ";
        // line 45
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer_url", [], "any", false, false, true, 45))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer_url", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</a>";
        } else {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        }
        // line 46
        echo "        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_confirm_uninstall_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 46,  160 => 45,  157 => 44,  151 => 42,  149 => 41,  144 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  86 => 29,  80 => 27,  74 => 25,  72 => 24,  66 => 21,  58 => 18,  49 => 14,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_confirm_uninstall_panel.twig", "/var/www/html/src/Eccube/Resource/template/admin/Store/plugin_confirm_uninstall_panel.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 12, "for" => 38);
        static $filters = array("escape" => 14, "ellipsis" => 25, "price" => 34, "time_ago" => 37);
        static $functions = array("constant" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'ellipsis', 'price', 'time_ago'],
                ['constant']
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
