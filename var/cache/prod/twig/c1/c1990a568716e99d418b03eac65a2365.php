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

/* @admin/Content/layout_block.twig */
class __TwigTemplate_057c3fcf9825512f7a4e48539aca60f3 extends \Eccube\Twig\Template
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
        echo "<div id=\"detail_box__layout_item--";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\" class=\"block sort border border-ec-gray bg-ec-lightGray p-2 mb-2\">
    <div class=\"row justify-content-between\">
        <div class=\"col\">
            <i class=\"fa fa-bars text-ec-gray me-3\"></i>
            <span class=\"view_readme\" data-bs-toggle=\"modal\"
               data-bs-target=\"#blockModal\"
               data-id=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\"
               data-name=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\"
               title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 19), "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "\"
            >";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 20), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"col-auto text-end\">
            <div class=\"d-inline-block px-3 sort";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, true, 23)) {
            echo " first";
        }
        echo "\">
                <input type=\"hidden\" class=\"name\" name=\"name_";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loop_index"] ?? null), 24, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 24), "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-id\" name=\"block_id_";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loop_index"] ?? null), 25, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"target-id\" name=\"section_";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loop_index"] ?? null), 26, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "section", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-row\" name=\"block_row_";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loop_index"] ?? null), 27, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "block_row", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\"/>
                <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/layout_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  85 => 26,  79 => 25,  73 => 24,  67 => 23,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/layout_block.twig", "/var/www/html/src/Eccube/Resource/template/admin/Content/layout_block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
