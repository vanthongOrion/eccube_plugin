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

/* @admin/Store/plugin_search_panel.twig */
class __TwigTemplate_a203331dad89e9242a47660afc8d6e01 extends \Eccube\Twig\Template
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
        echo "
<div class=\"col-sm-2 pe-2 pe-sm-3\">
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" data-code=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "code", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, true, 14), 14, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\">
    </a>
</div>
<div class=\"col-sm-6 col-md-7\">
    <div class=\"info\">
        <h5>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "store_url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\" class=\"fw-bold\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</a>（";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.latest"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "）
        </h5>
        <h6>";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "short_description", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</h6>
    </div>
    <div class=\"row\">
        <div class=\"col-auto col-md-5 col-lg-6\">
            <p class=\"plg-prices text-danger\"><span class=\"fw-bold text-dark\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
        echo " </span> ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo ")</small></p>
        </div>
        <div class=\"col-auto col-md-7 col-lg-2\">
            ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, true, 29)) {
            // line 30
            echo "            <dl class=\"text-dark\">
                <dd class=\"d-inline-block\"><span class=\"pe-1 fw-bold\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.dl"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "downloads", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
            echo "</dd>
            </dl>
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"col-auto col-md-7 col-lg-4\">
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block ms-4\"><span class=\"pe-1 fw-bold\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.support"), "html", null, true);
        echo "</span> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "supported_versions", [], "any", false, false, true, 37));
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["version"], 37, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 37) == false)) {
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
            </dl>
        </div>
    </div>
</div>
<div class=\"col-sm-4 col-md-3 text-end\">
    <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_owners_store_url", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "/gateway/purchase/?product_id=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\">
        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\" class=\"btn btn-ec-regular\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.detail"), "html", null, true);
        echo "</a>
        ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "update_status", [], "any", false, false, true, 45) == 1)) {
            // line 46
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 46)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.free"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "update_status", [], "any", false, false, true, 49) == 2)) {
            // line 50
            echo "            <a href=\"#\" class=\"btn btn-ec-regular\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.installed"), "html", null, true);
            echo "</a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "update_status", [], "any", false, false, true, 51) == 3)) {
            // line 52
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 52)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.update"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "update_status", [], "any", false, false, true, 55) == 4)) {
            // line 56
            echo "            <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
            <input type=\"hidden\" name=\"public_key\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "authentication_key", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "\" />
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.fee"), "html", null, true);
            echo "\" />
        ";
        }
        // line 60
        echo "    </form>
</div>

<!-- Modal -->
";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_search_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 64,  204 => 60,  199 => 58,  195 => 57,  192 => 56,  190 => 55,  185 => 53,  180 => 52,  178 => 51,  173 => 50,  171 => 49,  166 => 47,  161 => 46,  159 => 45,  153 => 44,  147 => 43,  105 => 37,  100 => 34,  92 => 31,  89 => 30,  87 => 29,  77 => 26,  70 => 22,  60 => 20,  49 => 14,  43 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_search_panel.twig", "/var/www/html/src/Eccube/Resource/template/admin/Store/plugin_search_panel.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "for" => 37);
        static $filters = array("escape" => 13, "default" => 14, "trans" => 20, "price" => 26, "number_format" => 31);
        static $functions = array("asset" => 14, "url" => 46, "include" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'default', 'trans', 'price', 'number_format'],
                ['asset', 'url', 'include']
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
