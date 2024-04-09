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

/* form_table_layout.html.twig */
class __TwigTemplate_d1df32e05763c27ff454a127f5e04d5e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'hidden_row' => [$this, 'block_hidden_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
            ]
        );
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 20
        $this->displayBlock('button_row', $context, $blocks);
        // line 29
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 38
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["widget_attr"] = [];
        // line 5
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 6
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 6, $this->source) . "_help")]];
        }
        // line 8
        echo "<tr";
        $__internal_compile_0 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_0)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 8, $this->getSourceContext());
        }
        $__internal_compile_0 = twig_to_array($__internal_compile_0);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_0));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">
        <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 10, $this->source), 'label');
        // line 11
        echo "</td>
        <td>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 13, $this->source), 'errors');
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 14, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 14, $this->source));
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 15, $this->source), 'help');
        // line 16
        echo "</td>
    </tr>";
    }

    // line 20
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<tr";
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 21, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">
        <td></td>
        <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 24, $this->source), 'widget');
        // line 25
        echo "</td>
    </tr>";
    }

    // line 29
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context["style"] = ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", true, true, true, 30)) ? (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", false, false, true, 30), 30, $this->source) . (((twig_last($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", false, false, true, 30), 30, $this->source))) != ";")) ? ("; ") : ("")))) : (""));
        // line 31
        echo "<tr";
        $__internal_compile_2 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["style" => twig_trim_filter((($context["style"] ?? null) . " display: none"))])];
        if (!twig_test_iterable($__internal_compile_2)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 31, $this->getSourceContext());
        }
        $__internal_compile_2 = twig_to_array($__internal_compile_2);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_2));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">
        <td colspan=\"2\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 33, $this->source), 'widget');
        // line 34
        echo "</td>
    </tr>";
    }

    // line 38
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 40
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 41
            echo "<tr>
            <td colspan=\"2\">";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 43, $this->source), 'errors');
            // line 44
            echo "</td>
        </tr>";
        }
        // line 47
        $this->displayBlock("form_rows", $context, $blocks);
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 48, $this->source), 'rest');
        // line 49
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 49,  177 => 48,  175 => 47,  171 => 44,  169 => 43,  166 => 41,  164 => 40,  160 => 39,  156 => 38,  151 => 34,  149 => 33,  136 => 31,  134 => 30,  130 => 29,  125 => 25,  123 => 24,  109 => 21,  105 => 20,  100 => 16,  98 => 15,  96 => 14,  94 => 13,  91 => 11,  89 => 10,  76 => 8,  73 => 6,  71 => 5,  69 => 4,  65 => 3,  61 => 38,  59 => 29,  57 => 20,  55 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_table_layout.html.twig", "/var/www/html/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3, "set" => 4, "if" => 5, "with" => 8);
        static $filters = array("last" => 30, "trim" => 30, "merge" => 31, "length" => 40);
        static $functions = array("form_label" => 10, "form_errors" => 13, "form_widget" => 14, "form_help" => 15, "form_rest" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'with'],
                ['last', 'trim', 'merge', 'length'],
                ['form_label', 'form_errors', 'form_widget', 'form_help', 'form_rest']
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
